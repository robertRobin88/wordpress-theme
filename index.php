<?php  get_header() ?>
<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <?php  if(have_posts()) :while (have_posts()) : the_post();?>
                <div class="blog-post">
                    <h2><?php the_title() ?></h2>
                    <?php the_content() ?>
                </div>
                    <?php endwhile; else: ?>
                     <h3>Brak postów</h3>
             <?php endif;?>
        </div>
    </div>
</div>

<?php get_footer() ?>