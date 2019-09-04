<?php
$result;
require_once './Blog.php';
$blog= new Blog();
$result=$blog->showOnTable();

?>
<hr>
<a href="Add-blogs.php">Add New</a>
<a href="View_blogs.php">View Result</a>
<hr>


<table border="1">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Name</th>
        <th>Description</th>
        <th>Publication</th>
    </tr>
    <?php while ($blog=mysqli_fetch_assoc($result)) {?>
    <tr>
          <td><?php echo $blog['id'];?></td>
          <td><?php echo $blog['blogers_title'];?></td>
        <td><?php echo $blog['blogers_name'];?></td>
        <td><?php echo $blog['blog_des'];?></td>
        <td><?php echo $blog['publication_status']==1 ? 'published' : 'unpublished' ;?></td>
    </tr>
    <?php } ?>
</table>
