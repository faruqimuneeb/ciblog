<h2><?php echo $title; ?></h2>


<div class="portlet box blue">
	<div class="portlet-title">
		<div class="caption">
			<i class="fa fa-reorder"></i><?php echo $title; ?>
		</div>
	</div>
	<div class="portlet-body">
		<?php echo form_open('posts/update', 'class="form-horizontal"'); ?>
			<input type="hidden" name="id" value="<?php echo $post['id'];  ?>">
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
		      <input type="text" class="form-control" name="title"  placeholder="Post Title Here" value="<?php echo $post['title']; ?>">
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-sm-2 control-label">Body</label>
		    <div class="col-sm-10">
            <textarea class="form-control" name="body" id="editor1" rows="10" cols="80">
                <?php echo $post['body']; ?>
            </textarea>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10 text-right">
		      <button type="submit" name="save" class="btn blue">Save</button>
		    </div>
		  </div>
		</div>
		</form>
	</div>
</div>
