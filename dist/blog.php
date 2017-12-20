<!DOCTYPE html>
<html>

<?php include 'parts/head.php' ?>

<body>
<?php include 'parts/header.php' ?>
<section class="header">
<div class="container">
<h4>blog</h4>
<h5>Home>Blog</h5>
</div>
</section>
<section class="blog">
    <div class="container">
    <div class="blog-main">
    <?php include 'parts/post.php' ?>
    <?php include 'parts/post.php' ?>
    <?php include 'parts/post.php' ?>
    </div>
    <div class="blog-search">
    <div class="search">
        <input type="text">
    </div>
    <h4>recent posts</h4>
    <div class="recent-posts">
    <?php include 'parts/post.php' ?>
    <?php include 'parts/post.php' ?>
    <?php include 'parts/post.php' ?>
    </div>

    </div>
    </div>
</section>


</body>
</html> 

