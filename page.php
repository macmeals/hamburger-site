<!-- Head及びheader部分の読み込み -->
<?php get_header(); ?>

<main class ="l-main">
    <article class="p-single">
       <div class="p-page__top u-padding__left__right">
          <h1><?php the_title();?></h1>
       </div>
       <!-- ブロックエディターで編集した内容を以下のテンプレートタグで吐き出す -->
       <?php the_content(); ?>
       
    </article>

     <!-- sidebar部分の読み込み -->
    <?php get_sidebar(); ?>

</main>

<!-- footer部分の読み込み -->

<?php get_footer(); ?>