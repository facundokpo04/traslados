
<div class="row">
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>

    <div class="col-lg-12 text-center">
        <h2 class="section-heading">Informacion Util Cataratas del Iguazu</h2>
        <h3 class="section-subheading text-muted">Información  Util sobre Puerto Iguazu y Cataratas</h3>
    </div>
</div>

<div class="row" id="news">
    <?php foreach ($news_articulos as $news_item): ?>

        <div class="item col-md-4 col-sm-6 col-xs-12" style="cursor:pointer;" data-id="<?php echo $news_item['id'] ?>" data-nombre="<?php echo $news_item['Nombre'] ?>">
            <div class="well well-sm">
                <img src="<?php echo base_url('assets/uploads/imagenes/' . $news_item['Imagen']); ?>" class="img-thumbnail" />
                <h3><?php echo $news_item['Nombre'] ?></h3>
                <p><?php echo $news_item['Descripcion'] ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>


