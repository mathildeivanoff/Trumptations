<?php get_header(); ?>
    
    <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>

                <meta name="twitter:card" content="summary" />
                <meta name="twitter:site" content="@trump" />
                <meta name="twitter:creator" content="@thomas" />
                <meta property="og:url" content="<?php the_permalink() ?>" />
                <meta property="og:title" content="Trump said it..." />
                <meta property="og:description" content="<?php the_title(); ?>" />
                <meta property="og:image" content="http://127.0.0.1/projects/Trumpatations/wordpress/wp-content/uploads/2016/11/0620trumppolicies01.png" />
                
                <meta property="og:url"           content="<?php the_permalink() ?>" />
                <meta property="og:type"          content="website" />
                <meta property="og:title"         content="Trump said it..." />
                <meta property="og:description"   content="<?php the_title(); ?>" />
                <meta property="og:image"         content="http://127.0.0.1/projects/Trumpatations/wordpress/wp-content/uploads/2016/11/0620trumppolicies01.png" />

                <div id="quote">
                    <h1><?php the_title(); ?></h1>
                    <p><?php the_content(); ?></p>
                </div>
                
                <!-- Load Facebook SDK for JavaScript -->
                <div id="fb-root"></div>
                <script>(function(d, s, id) {
                  var js, fjs = d.getElementsByTagName(s)[0];
                  if (d.getElementById(id)) return;
                  js = d.createElement(s); js.id = id;
                  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1";
                  fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));</script>


                <div class="share-buttons">
                    <div class="fb-share-button" data-href="<?php the_permalink() ?>" data-layout="button_count" data-size="small" data-mobile-iframe="true">
                        <a class="fb-xfbml-parse-ignore" target="_blank" href="">
                           Facebook
                        </a>
                    </div>

                    <a class="twitter-share-button" onclick= "window.open('https://twitter.com/intent/tweet?text=<?php the_permalink() ?>', 'newwindow', 'width=600, height=500'); return false;" data-size="large">
                         Tweeter
                    </a>
                </div>  

            <?php endwhile; ?>
    <?php endif; ?>


<div id="retour">
    <a href="<?php echo home_url(); ?>" class="center" >Retour</a>
</div>

<?php get_footer();
		