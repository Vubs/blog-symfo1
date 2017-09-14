<main>

    <a href="<?php echo url_for('post/new') ?>">Poster un article</a>

    <?php /*foreach ($blog_posts as $blog_post): */?><!--
    <article>
        <h1><a href="<?php /*echo url_for(array('sf_route' => 'post_show_title', 'sf_subject' => $blog_post )) */?>"><?php /*echo $blog_post->getTitle() */?><small> - le: <?php /*echo $blog_post->getDateTimeObject('created_at')->format('m/d/Y') */?></small></a></h1>
        <p>
            <?php /*echo $blog_post->getBody() */?>
        </p>
    </article>

        <p><?php /*echo link_to($blog_post->getTitle(), 'post_show_title', $blog_post, true) */?></p>

    --><?php /*endforeach; */?>



    <?php foreach ($categories as $category): ?>
        <div class="category_<?php echo Blog::slugify($category->getName()) ?>">
            <div class="category">
                <!--<div class="feed">
                    <a href="">Feed</a>
                </div>-->

                <h1><?php echo $category ?></h1>
            </div>


            <div class="posts">
                <?php foreach ($category->getPosts() as $i => $post): ?>
                    <article>
                        <h1><a href="<?php echo url_for(array('sf_route' => 'post_show_title', 'sf_subject' => $post )) ?>"><?php echo $post->getTitle() ?><small> - le: <?php echo $post->getDateTimeObject('created_at')->format('m/d/Y') ?></small></a></h1>
                        <p>
                            <?php echo $post->getBody() ?>
                        </p>
                    </article>


                <?php endforeach; ?>
            </div>


        </div>

    <?php endforeach; ?>


</main>

