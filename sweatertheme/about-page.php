<?php
    /*
    Template Name: About Page
    */
?>

  <body>
    <?php get_header(); ?>

    <?php
      if (have_posts() ){

          while( have_posts() ){
                the_post();
                the_content();
          }
      }

    ?>

    <section id="about-head" class="section-p1">
        <img src="<?php echo get_template_directory_uri(); ?>/Images/About-us-picture.jpg" alt="">
        <div>
        <h2>Who We Are?</h2>
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>

        <abbr title="">Please message us if you have any questions or requests about our wonderful sweaters.</abbr>

        <br><br>
        <marquee bgcolor="#FFA500" loop="-1" scrollamount="5" width="100%">Thank you for visiting our website!</marquee>
        </div>
    </section>

    <section id="about-video" class="section-p1">
        <h1>View Our Sweater Video</h1>
        <div class="video">
            <video controls>
              <source type="video/mp4" src="<?php echo get_template_directory_uri(); ?>/Images/sweater video.mp4" alt="">
            </video>
        </div>
    </section>

    <?php get_footer(); ?>

      <script src="/index.js"></script>
    </body>
</html>