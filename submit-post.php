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

if(!empty($_POST['Title']) && !empty($_POST['Body']) && !empty($_POST['Autor'])){

	header("Location: single-post.php?post_id={$_POST['Post_id']}");

   // 	$createComment = "INSERT INTO posts (Autor, Text, Post_id) VALUES ('{$_POST['Autor']}', '{$_POST['Text']}', {$_POST['Post_id']})";
		// $statement = $connection->prepare($createComment);
		// $statement->execute();     
}else{
	header("Location: posts.php/");
	// header("Location: posts.php");
}







?>