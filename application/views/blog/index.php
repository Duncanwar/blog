<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
    
    <title>Blog</title>
</head>
<body>
<div class="navbar navbar-default">
<div class="container">
<h2>
<span class="glyphicon glyphicon-home"></span>&nbsp; Welcome to my blog
</h2>
</div>
</div>

<div class="container">
<h3>Blog list</h3>
<a href="<?php base_url('blog/add'); ?>" class="btn btn-primary">Add New</a>
<table class="table table-bordered table-responsive">
<thead>
<tr>
<td>Id</td>
<th>Title</th>
<th>Description</th>
<th>Created at</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php 
if($blogs){
    foreach($blogs as $blog){
        ?>
<tr>
<td><?php echo $blog->id; ?></td>
<td><?php echo $blog->title; ?></td>
<td><?php echo $blog->description; ?></td>
<td><?php echo $blog->created_at; ?></td>
<td>
<a href="" class="btn btn-info">Edit
<a href="" class="btn btn-danger">Delete</a>
</td>
</tr>
    <?php }}?>
</tbody>

</table>
</div>
</body>
</html>