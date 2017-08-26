

<div id="news" class="row">
 <?php foreach($news_articulos as $news_item): ?>

	<div class="item col-md-4 col-sm-6 col-xs-12" style="cursor:pointer;">
		<div class="well well-sm">
			<img src="<?php echo base_url('assets/uploads/imagenes/' . $news_item['Imagen']); ?>" class="img-thumbnail" />
			<h3><?php echo $news_item['Nombre']?></h3>
			<p><?php echo $news_item['Descripcion'] ?></p>
		</div>
	</div>
 <?php endforeach; ?>
</div>

