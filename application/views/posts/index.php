	
<h2>
	<?php
	echo $title;
?>
</h2>
<!-- Show posts -->

<?php	foreach ($posts as $post) { ?>
		<div class="row">
			<h2><?php echo $post['title'];?></h2>			
			<div class="col-md-3">
				<img class="post-thumb thumbnail" src="<?php echo site_url();?>assets/img/posts/<?php echo $post['post_image']; ?>">
			</div>
			<div class="col-md-9">
				<ul class="blog-info">
					<li><i class="fa fa-calendar"></i><?php echo date($post['created_at']); ?></li>
					<li><i class="fa fa-tags"></i> <?php echo strtoupper($post['name']); ?></li>
					<li style="display: none;"><i class="fa fa-comments"></i> 17</li>
					<li style="display: none;"><i class="fa fa-tags"></i> Metronic, Keenthemes, UI Design</li>
				</ul>
				<?php echo word_limiter($post['body'],50); ?>
				<p>
					<a href="<?php echo site_url('/posts/'.$post['slug']); ?>" class="btn btn-sm btn-primary">Read more</a>
				</p>
			</div>
		</div>

<?php
	}
?>

<!-- Show posts ends -->