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
// var_dump($_POST);
// var_dump($_POST['Post_id']);
// echo "string";
// echo ($_POST['Post_id']);
// echo "string";
if(!empty($_POST['Autor']) && !empty($_POST['Text'])){

	header("Location: single-post.php?post_id={$_POST['Post_id']}");

    	$createComment = "INSERT INTO comments (Autor, Text, Post_id) VALUES ('{$_POST['Autor']}', '{$_POST['Text']}', {$_POST['Post_id']})";
		$statement = $connection->prepare($createComment);
		$statement->execute();     
}else{
	header("Location: single-post.php?post_id={$_POST['Post_id']}&error=true");
	// header("Location: posts.php");
}







?>