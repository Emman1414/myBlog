<?php get_header()?>

    <!-- BANNER -->

    <section class="banner font-poppins lg:px-[10rem]">
      <div class="container">
        <div class="title flex justify-center px-4 lg:px-0">
          <h1
            class="text-[90px] lg:text-[13rem] font-bold text-center mb-[2rem] border-t-[0.1rem] border-b-[0.1rem] pb-5 lg:leading-[17rem] w-[75rem]"
          >
            THE BLOG
          </h1>
        </div>
        <div
          class="banner__wrapper lg:grid lg:grid-cols-[_3.9fr_2fr] gap-4 lg:px-[10.5rem] lg:mx-auto"
        >

        <?php 
          $args= array(
        'post_type' => 'post',
        'posts_per_page' => 1,
        'tax_query' => array(
          array(
            'taxonomy' => 'category',
            'field'    => 'slug',
            'terms'    => 'banner'
          )
        )
        );
        $newQuery = new WP_Query($args);
        ?>

        <?php
            if($newQuery->have_posts()) : while($newQuery->have_posts()): $newQuery->the_post();
        
        ?>
        

        <!-- LARGE IMAGE -->
          <div class="banner__left">
            <img class="w-full px-3 lg:px-0 lg:h-[30rem]" 
            <?php
              if(has_post_thumbnail()){
                the_post_thumbnail();
              }
              ?>
             


            <div class="left__details w-[30rem] px-2 lg:px-0 lg:w-full py-5">
              <small class="date"><?php the_field('date')?></small>
              <h2 class="text-[25px] font-bold">
                <?php the_title() ?>
              </h2>
              <p class="opacity-55">
                <?php the_excerpt()?>
              </p>
              <a href="<?php the_permalink()?>" class="read">Read More...</a>
            </div>
            <?php
            endwhile;
            else :
                echo "No content yet.";
            endif;
            wp_reset_postdata();
            ?>
          </div>

          <!-- SMALL IMAGE -->
          <div class="banner__right">

          <?php 
          $args= array(
        'post_type' => 'banner_side',
        'posts_per_page' => -1,
        );
        $newQuery = new WP_Query($args);
        ?>

      <!-- --------------------------------------------------------- -->

        <?php
            if($newQuery->have_posts()) : while($newQuery->have_posts()): $newQuery->the_post();
        
        ?>

            <div class="small">
              <!-- <img src="../img/img-3.webp" alt="" /> -->
               <?php
              if(has_post_thumbnail()){
                the_post_thumbnail();
              }
              ?>
              <div class="small--details">
                <small class="date"><?php the_field('date')?></small>
                <p><?php the_title()?></p>
                <a href="<?php the_permalink()?>" class="read">Read More...</a>
              </div>
            </div>
            <?php
            endwhile;
            else :
                echo "No content yet.";
            endif;
            wp_reset_postdata();
        ?>
          </div>
        </div>
        
      </div>
    </section>

    <!-- LATEST STORY -->

    <section class="story font-poppins lg:px-[20.5rem] py-10">
      <div class="container">
        <div class="title flex justify-center items-center py-5">
          <h2 class="text-[45px] font-bold">Latest Story</h2>
        </div>
        <div class="story__wrapper grid lg:grid-cols-3 gap-3 lg:mx-auto">

            <?php
            $args= array(
            'post_type' => 'latest_image',
            'posts_per_image' => -1,
            );
            $newQuery = new WP_Query($args);
            ?>

            <?php if($newQuery->have_posts()) : while($newQuery->have_posts()): $newQuery->the_post();
            ?>

          <div class="card">

           <?php
           if(has_post_thumbnail()){
            the_post_thumbnail();
           }
           ?>

            <p class="flex justify-between items-center">
              <small class="date"><?php the_field('date')?></small
              ><small class="date"><?php the_field('fashion')?></small>
            </p>
            <h2>
              <?php the_title()?>
            </h2>
            <p>
              <?php the_field('latest_text')?>
            </p>
          </div>

          

        </div>
      </div>
    </section>

    <!-- FEATURE NEW -->

    <section class="feature py-10 font-poppins lg:px-[15rem]">
        <!-- 1st container -->
      <div class="container">
        <div class="title flex flex-col text-center lg:py-5">
          <h1 class=" text-[40px] lg:text-[90px] font-bold"><?php the_field('feature_title')?></h1>
          <h2 class=" text-[25px] lg:text-[30px] font-bold">
            <?php the_field('feature_second_title')?>
          </h2>
          <p class="py-6 px-4 lg:px-[20rem] opacity-55 lg:py-0">
            <?php the_field('feature_text')?>
          </p>
        </div>
        <div
          class="feature__wrapper flex justify-center items-center px-4 lg:w-[80rem] lg:mx-auto"
        >
          <img
            class="w-full object-cover lg:h-[25rem]"
           <?php if(get_field('feature_image')) :?>
            <img src="<?php the_field('feature_image');?> " alt="" />
            <?php endif; ?>
         
        </div>
      </div>
      <!-- 2nd container -->
      <div class="container">
        <div
          class="feature__wrapper--bottom grid lg:grid-cols-[_2fr_1fr] gap-4 px-[1.5rem] lg:px-[5.5rem] lg:mx-auto"
        >
          <div class="left__feature py-10">
            <?php 
        $args= array(
        'post_type' => 'post',
        'posts_per_page' => -1,
        'tax_query' => array(
          array(
            'taxonomy' => 'category',
            'field'    => 'slug',
            'terms'    => 'feature'
          )
        )
        );
        $newQuery = new WP_Query($args);
        ?>

         <?php
            if($newQuery->have_posts()) : while($newQuery->have_posts()): $newQuery->the_post();
        ?>
            <!-- box image 1 -->
            <div class="box block grid lg:grid-cols-[_0.9fr_1fr] gap-4">
              <img class=""
              <?php
              if(has_post_thumbnail()){
                the_post_thumbnail();
              }
              ?>
              
              <div class="box--details">
                <small class="date"><?php the_field('date')?></small>
                <h2>
                  <?php the_title()?>
                </h2>
                <p>
                  <?php the_excerpt()?>
                </p>
              </div>
          </div>
          <?php
            endwhile;
            else :
                echo "No content yet.";
            endif;
            wp_reset_postdata();
            ?>
          </div>
            

          <div class="right__feature py-10">

        <?php 
        $args= array(
        'post_type' => 'post',
        'posts_per_page' => -1,
        'tax_query' => array(
          array(
            'taxonomy' => 'category',
            'field'    => 'slug',
            'terms'    => 'side'
          )
        )
        );
        $newQuery = new WP_Query($args);
        ?>

         <?php
            if($newQuery->have_posts()) : while($newQuery->have_posts()): $newQuery->the_post();
        ?>

            <div class="words">
              <small ><?php the_field('date')?></small>
              <h2>
                <?php the_title()?>
              </h2>
            </div>
             <?php
            endwhile;
            else :
                echo "No content yet.";
            endif;
            wp_reset_postdata();
            ?>
        </div>
      </div>
    </section>


<?php get_footer()?>