      <section class="inicio-contacto container-fluid">
        <div class="row">
          <div class="col-12 col-lg-4 inicio-contacto-texto">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-12">
                <h3><?php the_field('contacto_nombre'); ?></h3>
                <?php the_field('contacto_descripcion'); ?>
              </div>

              <div
                class="inicio-contacto-datos-contenedor col-12 col-md-6 col-lg-12"
              >
                <ul>
                  <li><span>EDAD: </span><?php the_field('contacto_edad'); ?></li>
                  <li><span>ESTATURA: </span><?php the_field('contacto_estatura'); ?></li>
                  <li><span>PESO: </span><?php the_field('contacto_peso'); ?></li>
                  <li><span>PECHO: </span><?php the_field('contacto_pecho'); ?></li>
                  <li><span>OJOS: </span><?php the_field('contacto_ojos'); ?></li>
                  <li><span>CABELLO: </span><?php the_field('contacto_cabello'); ?></li>
                  <li><span>IDIOMAS: </span><?php the_field('contacto_idiomas'); ?></li>
                  <li><span>OCUPACIÓN: </span><?php the_field('contacto_ocupacion'); ?></li>
                  <li><span>NACIONALIDAD: </span><?php the_field('contacto_nacionalidad'); ?></li>
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
                  <?php $image = wp_get_attachment_image_src(get_field('contacto_imagen_'.$i), 'full'); ?>
                  <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('contacto_imagen_'.$i)) ?>" />
                </figure>
              </div>
              <?php } ?>
              <!--fin del bucle para mostrar las imagenes -->
            </div>
          </div>
        </div>
      </section>
      <!--fin section inicio-contacto-->