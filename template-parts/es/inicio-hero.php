      <section class="hero-container hero container-fluid">
        <div class="hero-contenido-container">
          <h1 class="hero-titulo">

            <?php the_field('hero_titulo_1'); ?> <br />
            <?php the_field('hero_titulo_2'); ?>
          </h1>
          <div class="hero-telefono-container telefono-verde">
            ¡Llama ahora!
            <span>
              <svg
                version="1.1"
                xmlns="http://www.w3.org/2000/svg"
                width="60"
                height="60"
                viewBox="0 0 32 32">
                <title>phone</title>
                <path
                  d="M22 20c-2 2-2 4-4 4s-4-2-6-4-4-4-4-6 2-2 4-4-4-8-6-8-6 6-6 6c0 4 4.109 12.109 8 16s12 8 16 8c0 0 6-4 6-6s-6-8-8-6z"
                  ></path>
              </svg>
              <?php the_field('hero_telefono_1'); ?>
            </span>
          </div>

          <h2 class="hero-descripcion">
            <?php the_field('hero_descripcion_1'); ?><br />
            <?php the_field('hero_descripcion_2'); ?><br />
            <?php the_field('hero_descripcion_3'); ?>
          </h2>
            
            
            
        <?php if(get_field('hero_telefono_2')){?>
          <div class="hero-telefono-container telefono-rojo">
            ¡Llama ahora!
            <span>
              <svg
                version="1.1"
                xmlns="http://www.w3.org/2000/svg"
                width="60"
                height="60"
                viewBox="0 0 32 32">
                <title>phone</title>
                <path
                  d="M22 20c-2 2-2 4-4 4s-4-2-6-4-4-4-4-6 2-2 4-4-4-8-6-8-6 6-6 6c0 4 4.109 12.109 8 16s12 8 16 8c0 0 6-4 6-6s-6-8-8-6z"
                ></path>
              </svg>
              <?php the_field('hero_telefono_2'); ?></span
            >
          </div>
        <?php } ?>

        </div>
        <!-- fin hero-contenido-container-->
      </section>
      <!--fin hero-container-->