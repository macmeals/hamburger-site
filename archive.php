<!-- Head及びheader部分の読み込み -->
<?php get_header(); ?>

<main class ="l-main">
    <article class="p-archive">
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

      <?php
       if (have_posts()) : 
         while (have_posts()) :
       the_post();
        get_template_part('each-cat-post');
         endwhile;
        endif;
       ?>


<!-- WPのループ -->
     
       <ul class="p-pagination">
           <li >page 1/10</li>
           <li class="p-pagination__arrow">«</li>
           <li class="p-pagination__link">1</li>
           <li class="p-pagination__link">2</li>
           <li class="p-pagination__link">3</li>
           <li class="p-pagination__link">4</li>
           <li class="p-pagination__link">5</li>
           <li class="p-pagination__link">6</li>
           <li class="p-pagination__link">7</li>
           <li class="p-pagination__link">8</li>
           <li class="p-pagination__link">9</li> 
           <li class="p-pagination__arrow">»</li>
       </ul>
       <!-- スマートフォン向けのページネーション -->
        <ul class="p-pagination2">
           <li>«前へ</li>
           <li>次へ»</li>
           
        </ul>
    </article>

    <!-- sidebar部分の読み込み -->
    <?php get_sidebar(); ?>

</main>

 <!-- footer部分の読み込み -->

 <?php get_footer(); ?>