
<h2>
	<?php
	echo $title;
?>
</h2>
<!-- Show posts -->
<div class="row">
	
<?php	foreach ($posts as $post) { ?>
		
		<h2><?php echo $post['title'];?></h2>
		
		<ul class="blog-info">
			<li><i class="fa fa-calendar"></i><?php echo date($post['created_at']); ?></li>
			<li style="display: none;"><i class="fa fa-comments"></i> 17</li>
			<li style="display: none;"><i class="fa fa-tags"></i> Metronic, Keenthemes, UI Design</li>
		</ul>
		<?php echo $post['body']; ?>
		<p>
			<a href="<?php echo site_url('/posts/'.$post['slug']); ?>" class="btn btn-sm btn-primary">Read more</a>
		</p>
<?php
	}
?>

</div>

<!-- Show posts ends -->