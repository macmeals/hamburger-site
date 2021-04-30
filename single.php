<!-- Head及びheader部分の読み込み -->
<?php get_header();?>

<main class ="l-main">
    <article class="p-single">
       <div class="p-single__top u-padding__left__right">
          <h1><?php the_title();?></h1>
       </div>

       <?php if(have_posts()): ?>
           <?php while(have_posts()): the_post(); ?>
               <?php the_content(); ?>
           <?php endwhile; ?>
       <?php else: ?>
               <?php echo "記事がありません。" ?>
        <?php endif; ?>


       
    </article>

     <!-- sidebar部分の読み込み -->
    <?php get_sidebar(); ?>

</main>

<!-- footer部分の読み込み -->

<?php get_footer(); ?>