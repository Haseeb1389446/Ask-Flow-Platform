<div class="questions mb-5 mt-5">
    <div class="row">
        <div class="col-md-9">
            <h1 class="mb-5">Questions</h1>

            <?php
            $uid = null;
            include "./server/config.php";

            $limit = isset($_GET['limit']) ? (int)$_GET['limit'] : 11; // Show 11 questions at a time
            $baseQuery = "";
            $countQuery = "";
            $search = isset($_GET["search"]) ? mysqli_real_escape_string($con, $_GET["search"]) : "";

            if (isset($_GET["category-id"])) {
                $cid = (int) $_GET["category-id"];
                $baseQuery = "SELECT * FROM `questions` WHERE category_id = $cid";
            } else if (isset($_GET["user-id"])) {
                $uid = (int) $_GET["user-id"];
                $baseQuery = "SELECT * FROM `questions` WHERE user_id = $uid";
            } else if (isset($_GET["latest"])) {
                $baseQuery = "SELECT * FROM `questions` ORDER BY id DESC";
            } else if (isset($_GET["search"])) {
                $baseQuery = "SELECT * FROM `questions` WHERE `title` LIKE '%$search%'";
            } else {
                $baseQuery = "SELECT * FROM `questions`";
            }

            // Count total questions without LIMIT
            $countQuery = $baseQuery;
            $countResult = mysqli_query($con, $countQuery);
            $totalCount = mysqli_num_rows($countResult);

            // Append LIMIT to query
            $finalQuery = $baseQuery . " LIMIT $limit";
            $result = mysqli_query($con, $finalQuery);

            if (mysqli_num_rows($result) === 0) {
                echo "<div class='no-questions'>
                        <h2>No Questions Yet</h2>
                        <p class='no-icon'>😕</p>
                        <p class='no-text'>Looks like nobody has asked anything in this category/search yet.</p>
                        <a href='index.php?ask=true' class='ask-btn'>Ask a Question →</a>
                    </div>";
            } else {
                foreach ($result as $row) {
                    $title = $row["title"];
                    $qid = $row["id"];
                    echo "<div><h4><a href='?question-id=$qid'>$title</a>";
                    echo $uid ? "<a href='./server/requests.php?q-delete=$qid' class='q-delete'>Delete</a>" : "";
                    echo "</h4></div>";
                }

                // Show Load More button if more questions are available
                if ($limit < $totalCount) {
                    $nextLimit = $limit + 11;
                    $queryString = $_GET;
                    $queryString['limit'] = $nextLimit;
                    $newUrl = '?' . http_build_query($queryString);

                    echo "<div style='margin-top: 20px;'>
                            <a href='$newUrl' class='load-more-button btn'>Load More</a>
                          </div>";
                }
            }
            ?>
        </div>

        <div class="col-md-2 category">
            <h2 class="mb-5">Category</h2>
            <?php
            $query = "SELECT * FROM `categories`";
            $categoryResult = mysqli_query($con, $query);

            foreach ($categoryResult as $row) {
                $category = $row["name"];
                $cid = $row["id"];
                echo "<a class='mb-2' href='?category-id=$cid'>$category</a>";
            }
            
            ?>
        </div>
    </div>
</div>
