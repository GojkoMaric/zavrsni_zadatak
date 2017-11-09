<?php
    // $servername = "127.0.0.1";
    // $username = "root";
    // $password = "vivify";
    // $dbname = "blog";

    // try {
    //     $connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    //     $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // }
    // catch(PDOException $e)
    // {
    //     echo $e->getMessage();
    // }
?>

<aside class="col-sm-3 ml-sm-auto blog-sidebar">
  <div class="sidebar-module sidebar-module-inset">
    <h4>Latest posts</h4>  
      <?php 
        $sqlLast = "SELECT * FROM posts ORDER BY Created_at DESC LIMIT 5";
        $statementCom = $connection->prepare($sqlLast);
        $statementCom->execute();
        $statementCom->setFetchMode(PDO::FETCH_ASSOC);
        $latestPosts = $statementCom->fetchAll();
        // print_r($latestPosts);
        foreach ($latestPosts as $lastPost) {
      ?>
      <h6><a href="single-post.php?post_id= <?php echo ($lastPost['id']); ?> "><?php echo $lastPost['Title'] ?></a></h6>

      <?php
      }
      ?>
  </div>
</aside><!-- /.blog-sidebar -->