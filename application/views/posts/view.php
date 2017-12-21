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