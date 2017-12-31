<h2>
<?php
	echo $title; 
?>	
</h2>
<div class="portlet box grey">
	<div class="portlet-title">
		<div class="caption">
			<i class="fa fa-tag"></i><?php echo $title;?>
		</div>
	</div>
	<div class="portlet-body">
		<ul class="list-group">
		<?php
			foreach ($categories as $category) {
				?>
					<li class="list-group-item"><a href="<?php echo site_url('categories/posts/'.$category['id']); ?>"> <?php echo $category['name'];?> </a></li>
		<?php } ?>
		</ul>
	</div>
</div>
	<?php
