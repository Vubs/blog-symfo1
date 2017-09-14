<div class="posts">
    <?php foreach ($posts as $i => $post): ?>
        <article>
            <h1><a href="<?php echo url_for(array('sf_route' => 'post_show_title', 'sf_subject' => $post )) ?>"><?php echo $post->getTitle() ?><small> - le: <?php echo $post->getDateTimeObject('created_at')->format('m/d/Y') ?></small></a></h1>
            <p>
                <?php echo $post->getBody() ?>
            </p>
        </article>


    <?php endforeach; ?>
</div>