

<div class="container">
<h3>Blog list</h3>
<?php 
if($this->session->flashdata('success_msg')){
    ?>

<div class="alert alert-success">
<?php echo $this->session->flashdata('success_msg'); ?>
</div>
<?php 
} ?>

<?php 
if($this->session->flashdata('error_msg')){
    ?>

<div class="alert alert-success">
<?php echo $this->session->flashdata('error_msg'); ?>
</div>
<?php 
} ?>


<a href="<?php echo base_url('blog/add'); ?>" class="btn btn-primary">Add New</a>
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
<a href="<?php echo base_url('blog/edit/'.$blog->id); ?>" class="btn btn-info">Edit
<a href="<?php echo base_url('blog/delete/'.$blog->id); ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this row ?');">Delete</a>
</td>
</tr>
    <?php }}?>
</tbody>

</table>
