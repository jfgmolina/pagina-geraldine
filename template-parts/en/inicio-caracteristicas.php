      <section class="inicio-caracteristicas container-fluid">
        <div class="container">

        <?php for($i = 1; $i <=3; $i++){ ?>
          <article class="row">
            <div class="col-12 col-md-6 inicio-caracteristicas-texto">
              <h3><?php the_field('caracteristica'.$i.'_titulo_ingles'); ?></h3>
              <hr />
              <p>
                <?php the_field('caracteristica'.$i.'_descripcion_ingles'); ?>
              </p>
            </div>
            <div class="col-12 col-md-6 inicio-caracteristicas-imagen">
              <figure>
                <?php $image = wp_get_attachment_image_src(get_field('caracteristica'.$i.'_imagen_ingles'), 'full'); ?>
                  <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('caracteristica'.$i.'_imagen_ingles')) ?>" />
              </figure>
            </div>
          </article>
          <?php } ?>
          <!--fin de la seccion del item de caracteristicas-->
        </div>
      </section>
      <!-- fin seccion inicio-caracteristicas-->