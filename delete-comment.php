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

var_dump($_POST);


	header("Location: single-post.php?post_id={$_POST['Post_id']}");

    	$deleteComment = "DELETE FROM comments WHERE id={$_POST['id']}";
		$statement = $connection->prepare($deleteComment);
		$statement->execute();    

?>