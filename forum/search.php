<!-- sql query for search enable should hel@p for future -->
<!-- alter table threads add FULLTEXT(`threads_title`, `threads_desc`) -->

<!-- search query in sql
SELECT * FROM threads WHERE MATCH (threads_title, threads_desc) against ('I am'); -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Forumn</title>
    <link rel="stylesheet" href="/FORUM/css/searchstyle.css">
</head>

<body>

    <?php include "partials/_header.php"?>
    <?php include "partials/_dbconnect.php"?>

    <div class="container">
        <div class="color">
            <?php
            $noResult = true;
            $query = $_GET['search'];
            echo'<h1>Search Results for <em>"'.$query.'" </em></h1>';
            $sql = "SELECT * FROM threads WHERE MATCH (threads_title, threads_desc) against ('$query')";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
            $noResult = false;
            $title =  $row['threads_title'];
            $desc =  $row['threads_desc'];
            $thread_id =  $row['threads_id'];
            $url = "thread.php?threadid=". $thread_id;
            echo'
                <div class="result">
                <h2> <a class ="a-primary" href="'.$url.'"> '.$title.' </a></h2>
                <p>'.$desc.'</p>
                </div>
                <hr style="margin: 10px 0px;">
                ';
            }
            if ($noResult) {
                echo '
                <div class="result">
                <p class = "p-primary"> No Results Found! </p>
                <p1>It looks like there arent many great matches for your search
                Tip: Try using words that might appear on the page you’re looking for. For example, "cake recipes" instead of "how to make a cake."</p1>
                </div>
                ';
            }
            ?>
        </div>
    </div>

    <?php include "partials/_footer.php"?>
</body>

</html>