<?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "vivify";
    $dbname = "blog";

    try {
        $connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }

                // $sql = "SELECT * FROM posts";
                // $statement = $connection->prepare($sql);
                // $statement->execute();
                // $statement->setFetchMode(PDO::FETCH_ASSOC);
                // $posts = $statement->fetchAll();
?>
<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Vivify Blog</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="styles/blog.css" rel="stylesheet">
    <link href="styles/styles.css" rel="stylesheet">
</head>



<body>

<?php include("header.php") ?>



<main role="main" class="container">

    <div class="row">

        <div class="col-sm-8 blog-main">
            <?php
                if (isset($_GET['post_id'])) {
                $sql = "SELECT * FROM posts WHERE posts.id = {$_GET['post_id']}";
                $statement = $connection->prepare($sql);
                $statement->execute();
                $statement->setFetchMode(PDO::FETCH_ASSOC);
                $singlePost = $statement->fetch();          
            ?>

                <div class="blog-post">
                    <h2 class="blog-post-title"><a href="#"><?php echo $singlePost['Title'] ?> </a></h2>
                    <p class="blog-post-meta"><?php echo $singlePost['Created_at'] ?> by <a href="#"><?php echo $singlePost['Autor'] ?></a></p>
                    <?php echo $singlePost['Body']; ?>
                </div><!-- /.blog-post -->

            <?php
                }else{
                    echo "Post does not exist.";
                }
            ?>

            <nav class="blog-pagination">
                <a class="btn btn-outline-primary" href="#">Older</a>
                <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
            </nav>









            <form action="create-comment.php" method="post">
                <label>Your name</label>
                <input type="Text" name="Autor"><br>
                <textarea name="Text" rows='5' cols='28' placeholder="Comment"></textarea><br>

                <button type="Submit">Send</button><br>
                <input type="Hidden" name="Post_id" value="get">
                <!-- <input type="Text" name="Text"><br> -->
            </form>










            <br>

            <div id="hide-show">
                <a class="btn btn-outline-primary" id='HideCom' onclick="hide()">Hide comments</a>
            </div>

            <br>
            <div id="comments">
            <?php 
                $sqlCom = "SELECT * FROM comments WHERE comments.Post_id={$_GET['post_id']}";
                $statementCom = $connection->prepare($sqlCom);
                $statementCom->execute();
                $statementCom->setFetchMode(PDO::FETCH_ASSOC);
                $comments = $statementCom->fetchAll();
                // print_r($comments);

                foreach ($comments as $singleCom) {

            ?>

                <ul>
                    <li><?php echo $singleCom['Autor']; ?></li>
                    <li><?php echo $singleCom['Text']; ?></li>
                </ul>
                    <hr>
                
            <?php
            }
            ?>
            </div>
        </div><!-- /.blog-main -->

        <?php include("sidebar.php") ?>

    </div><!-- /.row -->

</main><!-- /.container -->

    <?php include("footer.php") ?>

<script type="text/javascript">

function hide() {
    var comms = document.getElementById("comments");
    if(comms.classList.contains('hidden')){
    comms.classList.remove('hidden')
    document.getElementById("HideCom").innerHTML = "Hide comments";
}else{
    comms.classList.add('hidden')
    document.getElementById("HideCom").innerHTML = "Show comments";
}
}

</script>

</body>
</html>