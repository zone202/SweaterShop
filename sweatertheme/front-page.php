

<?php get_header(); ?>


<section id="hero">
      <h4>Welcome</h4>
      <h2>Great deals</h2>
      <h1>On All Sweaters</h1>
      <p>Save more with coupons & up to 70% off!</p>
      <a href="http://localhost/theme_sweater/shop/"><button>Shop Now</button></a>
    </section>

    <section id="feature" class="section-p1">
      <div class="fe-box">
        <img class="feature-1" src="wp-content/themes/sweatertheme/Images/free-shipping.png" alt="" />
        <h6>Free Shipping</h6>
      </div>
      <div class="fe-box">
        <img class="feature-2" src="wp-content/themes/sweatertheme/Images/order online.png" alt="" />
        <h6>Online Order</h6>
      </div>
      <div class="fe-box">
        <img class="feature-3" src="wp-content/themes/sweatertheme/Images/shopping-pre-sale-promotion-4519537-3749098.png" alt="" />
        <h6>Promotions</h6>
      </div>
      <div class="fe-box">
        <img class="feature-4" src="wp-content/themes/sweatertheme/Images/Support.png" alt="" />
        <h6>24/7 Support</h6>
      </div>
    </section>
    <?php
      if (have_posts() ){

          while( have_posts() ){
                the_post();
                the_content();
          }
      }

    ?>


    <section id="banner" class="section-m1">
      <h4>Sweater Sale</h4>
      <h2>Up to <span>70% off</span>- All sweaters!</h2>
      <a href="http://localhost/theme_sweater/shop/"><button class="normal">Explore More</button></a>
</section>


<?php get_footer(); ?>