<h2>
	<?php	
		echo $title;
	?>
</h2>
<!-- Show posts -->
<div class="row">
	<div class="col-md-12"> 
		<ul class="blog-info">
			<li><i class="fa fa-calendar"></i><?php echo date($post['created_at']); ?></li>
			<li style="display: none;"><i class="fa fa-comments"></i> 17</li>
			<li style="display: none;"><i class="fa fa-tags"></i> Metronic, Keenthemes, UI Design</li>
		</ul>
	</div>
	<div class="col-md-4">
		<img class="post-thumb thumbnail" src="<?php echo site_url();?>assets/img/posts/<?php echo $post['post_image']; ?>">
	</div>
	<div class="col-md-8">
		<p> <?php echo $post['body']; ?></p>
	</div>
</div>

<hr>
<div class="row">
	<div class="col-sm-1">
		<a href="<?php echo base_url();?>posts/edit/<?php echo $post['slug'] ?>" class="btn form-control blue">Edit</a>
	</div>
	<div class="col-sm-1">
		<?php echo form_open('posts/delete/'.$post['id']); ?>
			<button type="submit" class="form-control btn red">Delete</button>
		<?php echo form_close(); ?>	
	</div>
</div>

<hr>
	<h2>Comments</h2>

	<?php if($comments){

		foreach ($comments as $comment) { ?>
			<div class="well">
				<?php echo $comment['body'];?> [by : <strong><?php echo $comment['name'];?> </strong>]
			</div>
 	<?php } 
	}else{
		echo "<p> No comments to display</p>";
	} 
	?>	
<hr>

<div class="portlet box default">
	<div class="portlet-title">
		<div class="caption">
			<h3>Add a comment</h3>
		</div>
	</div>
	<div class="portlet-body">
		<?php echo form_open_multipart('comments/create/'.$post['id'], 'class="form-horizontal"'); ?>
			<input type="hidden" name="slug" value="<?php echo $post['slug']; ?>">
		<div class="form-body">
			
				<div class="alert alert-warning alert-dismissible" role="alert">
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<?php 
						echo validation_errors(); 
					?>
				</div>
			
		  <div class="form-group">
		    <label class="col-sm-2 control-label">Name</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="name"  placeholder="Post Title Here">
		    </div>
		  </div>

		  <div class="form-group">
		    <label class="col-sm-2 control-label">Email</label>
		    <div class="col-sm-10">
		      <input type="email" class="form-control" name="email"  placeholder="Post Title Here">
		    </div>
		  </div>

		  <div class="form-group">
		    <label class="col-sm-2 control-label">Body</label>
		    <div class="col-sm-10">
		      <textarea id="editor1" class="form-control" name="body" placeholder="Post Body Here"></textarea>
		    </div>
		  </div>

		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10 text-right">
		      <button type="submit" name="save" class="btn blue">Post Comment</button>
		    </div>
		  </div>
		</div>
		</form>
	</div>
</div>
