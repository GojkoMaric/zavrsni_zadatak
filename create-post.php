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

        <form action="submit-post.php" method="post">
       <fieldset>
           <label>Title</label><br/>
           <input type="text" id="Title" name="Title"/><br>
           <label>Autor</label><br/> 
           <input type="text" name="Autor"><br>
           <label for="Body">Content</label><br>
           <textarea name="Body" rows="15" cols="50"></textarea><br>
           <input type="submit" value="Create Post"/>
       </fieldset>
       </form>

           
           </div><!-- /.novi-post -->
        </div><!-- /.blog-main -->

        <?php include("sidebar.php") ?>

    </div><!-- /.row -->

</main><!-- /.container -->

    <?php include("footer.php") ?>

</body>
</html>