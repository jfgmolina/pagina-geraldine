      <section class="inicio-contacto container-fluid">
        <div class="row">
          <div class="col-12 col-lg-4 inicio-contacto-texto">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-12">
                <h3><?php the_field('contacto_nombre_ingles'); ?></h3>
                <?php the_field('contacto_descripcion_ingles'); ?>
              </div>

              <div
                class="inicio-contacto-datos-contenedor col-12 col-md-6 col-lg-12"
              >
                <ul>
                  <li><span>Age: </span><?php the_field('contacto_edad_ingles'); ?></li>
                  <li><span>Height: </span><?php the_field('contacto_estatura_ingles'); ?></li>
                  <li><span>Weight: </span><?php the_field('contacto_peso_ingles'); ?></li>
                  <li><span>Boobs: </span><?php the_field('contacto_pecho_ingles'); ?></li>
                  <li><span>Eye color: </span><?php the_field('contacto_ojos_ingles'); ?></li>
                  <li><span>Hair: </span><?php the_field('contacto_cabello_ingles'); ?></li>
                  <li><span>Languages: </span><?php the_field('contacto_idiomas_ingles'); ?></li>
                  <li><span>Profession: </span><?php the_field('contacto_ocupacion_ingles'); ?></li>
                  <li><span>Nationality: </span><?php the_field('contacto_nacionalidad_ingles'); ?></li>
                </ul>
              </div>
              <!--fin inicio-contacto-datos-contenedor-->
            </div>
          </div>
          <div class="col-12 col-lg-8 inicio-contacto-imagenes container-fluid">
            <div class="row">
            <!--bucle para mostrar las imagenes-->
              <?php for($i = 1; $i <=3; $i++){ ?>
              <div class="col-12 col-md-4">
                <figure>
                  <?php $image = wp_get_attachment_image_src(get_field('contacto_imagen_'.$i.'_ingles'), 'full'); ?>
                  <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('contacto_imagen_'.$i.'_ingles')) ?>" />
                </figure>
              </div>
              <?php } ?>
              <!--fin del bucle para mostrar las imagenes -->
            </div>
          </div>
        </div>
      </section>
      <!--fin section inicio-contacto-->