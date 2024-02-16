<div class="wrapper">

<?php get_header(); ?>
<?php the_post(); ?>

    <div id="blog-page" class="content">
        <main>
            <section class="blog-section">
                <div class="container">
                    <div class="row">
                        <div class="col-7 offset-3 blog-section__title">
                            <h1><?php the_title(); ?></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 blog-section__p offset-3">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </section>
        </main>
<?php get_footer(); ?>