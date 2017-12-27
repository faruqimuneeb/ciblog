<h2>
	<?php
	echo $title;
?>
</h2>
<!-- Show posts -->
<div class="row">
	<ul class="blog-info">
			<li><i class="fa fa-calendar"></i><?php echo date($post['created_at']); ?></li>
			<li style="display: none;"><i class="fa fa-comments"></i> 17</li>
			<li style="display: none;"><i class="fa fa-tags"></i> Metronic, Keenthemes, UI Design</li>
	</ul>
	<p> <?php echo $post['body']; ?></p>
</div>

<hr>
<div class="row">
	<div class="col-sm-1">
		<a href="<?php echo base_url();?>posts/edit/<?php echo $post['slug'] ?>" class="btn form-control blue">Edit</a>
	</div>
	<div class="col-sm-1">
		<?php echo form_open('posts/delete/'.$post['id']); ?>
			<button type="submit" class="form-control btn red">Delete</button>
		</form>		
	</div>

</div>