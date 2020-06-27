<h3>Add Blog</h3>
<a href="<?php echo base_url('blog/index'); ?>" class="btn btn-default">Back</a>
<form action="<?php echo base_url('blog/submit') ?>" method="post" class="form-horizontal">
<div class="form-group">
<label for="title" class="col-md-2 text-right">Title</label>
<div class="col-md-10">
<input type="text" name="txt_title" class="form-control">
</div>
</div>
<div class="form-group">
<label for="title" class="col-md-2 text-right">Description </label>
<div class="col-md-10">
<textarea type="text" name="txt_description" class="form-control"></textarea>
</div>
</div>

<div class="form-group">
<label class="col-md-2 text-right"></label>
<div class="col-md-10">
<input type="submit" name="btnSave" class="form-control btn btn-primary" value="Save">
</div>
</div>