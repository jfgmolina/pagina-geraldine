<?php get_header('ingles'); ?>

<?php get_template_part('template-parts/en/inicio-hero', 'hero'); ?>
<?php get_template_part('template-parts/en/inicio-badget', 'badget'); ?>
<?php get_template_part('template-parts/en/inicio-caracteristicas', 'caracteristicas'); ?>

      <section class="inicio-paralax container-fluid"></section>
      <!--fin seccion inicio-paralax-->

<?php get_template_part('template-parts/en/inicio-contacto', 'contacto'); ?>

      <section class="contenido-container container">
        <?php the_content(); ?>
      </section>
      <!--fin seccion contenido-container-->

<?php get_footer('ingles'); ?>