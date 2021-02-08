<?php 
/*
* template Theme: inicio español
*/
?>
<?php get_header('español'); ?>

<?php get_template_part('template-parts/es/inicio-hero', 'hero'); ?>
<?php get_template_part('template-parts/es/inicio-badget', 'badget'); ?>
<?php get_template_part('template-parts/es/inicio-caracteristicas', 'caracteristicas'); ?>

      <section class="inicio-paralax container-fluid"></section>
      <!--fin seccion inicio-paralax-->

<?php get_template_part('template-parts/es/inicio-contacto', 'contacto'); ?>

      <section class="contenido-container container">
        <?php the_content(); ?>
      </section>
      <!--fin seccion contenido-container-->

<?php get_footer('español'); ?>