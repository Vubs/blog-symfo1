<div class="category">
    <!--<div class="feed">
        <a href="">Feed</a>
    </div>-->
    <h1><?php echo $category ?></h1>
</div>

<div>
    <?php include_partial('post/postList', array('posts' => $category->getPosts())) ?>
</div>