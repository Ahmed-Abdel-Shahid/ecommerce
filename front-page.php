<?php  get_header() ?>
    <!-- Modal -->






    <!-- Start Categories of The Month -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Categories of The Month</h1>
                <p>
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum.
                </p>
            </div>
        </div>
        <div class="row">
        <?php
$the_query = new wp_query(array(
"post_type" => "post",
"posts_per_page" => 3,
));

while($the_query ->have_posts()) {
  $the_query ->the_post(); ?>

            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="<?php the_post_thumbnail_url(); ?>" class="rounded-circle img-fluid border"></a>
                <h5 class="text-center mt-3 mb-3"><?php echo get_the_category_list(); ?></h5>
                <p class="text-center"><a href="<?php the_permalink(); ?>"  class="btn btn-success">Go Shop</a></p>
            </div>

            <?php  }
?>

        
        </div>
    </section>
    <!-- End Categories of The Month -->


    <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Featured Product</h1>
                    <p>
                        Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat cupidatat non proident.
                    </p>
                </div>
            </div>
            <div class="row">

            <?php
$the_query = new wp_query(array(
"post_type" => "post",
"posts_per_page" => 3,

));


while($the_query ->have_posts()) {
  $the_query ->the_post(); ?>
            
            <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                        <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="#"></a>
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                
                            </ul>
                            <a href="<?php the_permalink() ?>" class="h2 text-decoration-none text-dark"><?php the_title() ?></a>
                            <p class="card-text">
                            <?php echo wp_trim_words(get_the_content() , 9) ; ?>
                            <a href="<?php the_permalink() ?>">   <p class="text-muted">More Details</p></a>
                          
                        </div>
                    </div>
                </div>
                 

<?php

}
?>
<?php echo paginate_links(); ?>

            </div>
        </div>
    </section>
    <!-- End Featured Product -->
<?php get_footer(); ?>