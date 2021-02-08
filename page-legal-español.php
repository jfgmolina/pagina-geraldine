<?php 
/*
* Template Name: tema legal español
*/
?>
<?php get_header('español'); ?>

<div class="container">
    <section class="row legal-container">
        <h1 class="legal-title"><?php the_title(); ?></h1>

        <div class="contenido-container">
            <?php the_content(); ?>
        </div>

        <div class="legal-back">
            <a href="javascript:history.back()">
                <img src="<?php echo get_template_directory_uri().'/images/volver.png'; ?>" alt="volver a la pagina anterior" />
                volver a la página anterior
            </a>
        </div>
    </section>
</div>

<?php get_footer('español'); ?>