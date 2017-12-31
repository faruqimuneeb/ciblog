<h2><?php echo $title; ?></h2>


<div class="portlet box blue">
	<div class="portlet-title">
		<div class="caption">
			<i class="fa fa-reorder"></i><?php echo $title; ?>
		</div>
	</div>
	<div class="portlet-body">
		<?php echo form_open_multipart('posts/create', 'class="form-horizontal"'); ?>
		<div class="form-body">
			
				<div class="alert alert-warning alert-dismissible" role="alert">
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<?php 
						echo validation_errors(); 
					?>
				</div>
			
		  <div class="form-group">
		    <label class="col-sm-2 control-label">Title</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="title"  placeholder="Post Title Here">
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-sm-2 control-label">Body</label>
		    <div class="col-sm-10">
		      <textarea id="editor1" class="form-control" name="body" placeholder="Post Body Here"></textarea>
		    </div>
		  </div>

		  <div class="form-group">
		    <label class="col-sm-2 control-label">Category</label>
		    <div class="col-sm-10">

		      <select class="form-control" name="category_id">
		      		<?php 
		      		foreach ($categories as $category) {
		      			?>
		      			<option value="<?php echo $category['id']; ?>">
		      				<?php echo $category['name']; ?>
		      			</option>
		      			<?php
		      		}
		      		?>		      	
		      </select>
		    </div>
		  </div>

		  <div class="form-group">
		    <label class="col-sm-2 control-label">Upload Image</label>
		    <div class="col-sm-10">
		      <input type="file" class="form-control" name="userfile"  placeholder="Upload Image here">
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
