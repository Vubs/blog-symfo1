<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $blog_post->getId() ?></td>
    </tr>
    <tr>
      <th>Category:</th>
      <td><?php echo $blog_post->getCategoryId() ?></td>
    </tr>
    <tr>
      <th>Title:</th>
      <td><?php echo $blog_post->getTitle() ?></td>
    </tr>
    <tr>
      <th>Body:</th>
      <td><?php echo $blog_post->getBody() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $blog_post->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $blog_post->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('post/edit?id='.$blog_post->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('post/index') ?>">List</a>

<br>

<a href="<?php echo url_for('post_depublish', $blog_post) ?>">Depublish this post</a>