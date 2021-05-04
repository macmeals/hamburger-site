<!-- Head及びheader部分の読み込み -->
<?php get_header(); ?>

<main class ="l-main">
    <!-- <article class="p-archive"> -->
    <article <?php post_class('p-archive'); ?>>
       <div class="p-archive__top">
           <div class="p-archive__menu u-padding__left__right">
              <h2>Menu:</h2>
              <p><?php the_category(' '); ?></p>
           </div>
       </div>    
       <div class="p-archive__textall">
           <div class="p-archive__text">
              <h3>小見出しが入ります</h3>
              <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
          </div> 
       </div>
       
    <!-- WPのループ -->

       <?php    if ( have_posts()) : 
                  while ( have_posts()) :  the_post();
                         get_template_part('each-cat-post');
                  endwhile;
                endif;
        ?>
     <!-- WPのループ -->

     <!-- WPのプラグイン「WP_Paginate」を利用。見た目はWP_Paginateの管理コンソールからカスタムcssで設定 -->
      <?php if(function_exists('wp_paginate')) { wp_paginate(); } ?>

      <div class="p-pagination2">
          <?php previous_posts_link( '＜＜前へ' ); ?>
          <?php next_posts_link('＞＞次へ'); ?>
      </div>

    </article>

    <!-- sidebar部分の読み込み -->
    <?php get_sidebar(); ?>

</main>

 <!-- footer部分の読み込み -->

 <?php get_footer(); ?>