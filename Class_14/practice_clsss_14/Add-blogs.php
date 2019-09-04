<?php
require_once './Blog.php';
$message;
if (isset($_POST['value'])){
    $blog=new Blog();
    $message=$blog->AddBlogsinfo($_POST);
}
?>
<h3><?php echo $message;?></h3>
<hr>
<a href="Add-blogs.php">Add New</a>
<a href="View_blogs.php">View Result</a>
<hr>


<form method="post">
    <table>
        <tr>
            <td>Blog Title</td>
            <td><input type="text" name="blogers_title"></td>
        </tr>
        <tr>
            <td>Bloger Name</td>
            <td><input type="text" name="blogers_name"></td>
        </tr>
        <tr>
            <td>Bloger Description</td>
            <td><textarea name="blog_des" cols="20" rows="10"></textarea></td>
        </tr>
        <tr>
        <td>Publication Status</td>
        <td>
            <select name="publication_status">
                <option value="0">Published</option>
                <option value="1">Unpublished</option>
            </select>
        </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="value"  value="SubmiT the Data"></td>
        </tr>
    </table>
    
</form>
