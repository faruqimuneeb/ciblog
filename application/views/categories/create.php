<h2><?php echo $title; ?></h2>

<div class="portlet box blue">
	<div class="portlet-title">
		<div class="caption">
			<i class="fa fa-reorder"></i><?php echo $title; ?>
		</div>
	</div>
	<div class="portlet-body">
		<?php echo form_open_multipart('categories/create', 'class="form-horizontal"'); ?>
		<div class="form-body">
			<?php
				if($errMsg){
			?>
					<div class="alert alert-warning alert-dismissible" role="alert">
  						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  					<?php
						echo validation_errors();
					?>
					</div>
					<?php
					}
							
			?>
		  <div class="form-group">
		    <label class="col-sm-2 control-label">Name</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="name"  placeholder="Category Name Here">
		    </div>
		  </div>

		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10 text-right">
		      <button type="submit" name="save" class="btn blue">Create</button>
		    </div>
		  </div>
		</div>
		<?php echo form_close(); ?>
	</div>
</div>
