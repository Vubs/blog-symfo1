<h1>Blog posts List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Category</th>
      <th>Title</th>
      <th>Body</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($blog_posts as $blog_post): ?>
    <tr>
      <td><a href="<?php echo url_for('post/show?id='.$blog_post->getId()) ?>"><?php echo $blog_post->getId() ?></a></td>
      <td><?php echo $blog_post->getCategoryId() ?></td>
      <td><?php echo $blog_post->getTitle() ?></td>
      <td><?php echo $blog_post->getBody() ?></td>
      <td><?php echo $blog_post->getCreatedAt() ?></td>
      <td><?php echo $blog_post->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('post/new') ?>">New</a>
