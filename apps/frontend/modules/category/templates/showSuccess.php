<div class="category">
    <!--<div class="feed">
        <a href="">Feed</a>
    </div>-->
    <h1><?php echo $category ?></h1>
</div>

<div>
    <?php include_partial('post/postList', array('posts' => $pager->getResults()) ) ?>
    
    <?php if($pager->haveToPaginate()): ?>
        <div class="pagination">
            <a href="<?php echo url_for('category', $category) ?>?page=1">First page</a>

            <a href="<?php echo url_for('category', $category) ?>?page=<?php echo $pager->getPreviousPage() ?>">Previous page</a>

            <?php foreach ($pager->getLinks() as $page): ?>
                <?php if ($page == $pager->getPage()): ?>
                    <?php echo $page ?>
                <?php else: ?>
                    <a href="<?php echo url_for('category' , $category) ?>?page=<?php echo $page?>"><?php echo $page ?></a>
                <?php endif; ?>
            <?php endforeach; ?>

            <a href="<?php echo url_for('category', $category)?>?page=<?php echo $pager->getNextPage() ?>">Next page</a>
            <a href="<?php echo url_for('category', $category)?>?page=<?php echo $pager->getLastPage() ?>">Last page</a>
        </div>
    
    <?php endif ?>

    <div class="pagination_desc">
        <strong><?php echo count($pager) ?></strong> posts in this category
        <?php if($pager->haveToPaginate()): ?>
            - page <strong><?php $pager->getPage() ?><?php echo $pager->getLastPage() ?></strong>
        <?php endif; ?>
    </div>
</div>