<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
 <head>
   <meta charset="utf-8">
   <meta name= "description" content="一般的なハンバーガーサイトです">

   <!-- ブレイクポイントを設定 -->
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
 </head>
 <body>
  <header class="l-header">
    <div class="l-header__top u-padding__left__right">
      <!-- サイトタイトルを出力 -->
      <h1>
         <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
      </h1>
      <!-- 検索フォームを実装 -->
      <?php get_search_form(); ?>
    </div>
    <div class="l-header__bottom u-padding__left__right">
      <h2 class="c-hamburgermenu">Menu</h2>
      <button class="c-hamburgerbutton  is-hamburger">Menu</button>
    </div>
   <div class="c-grayscreen"></div>
   
   <?php wp_head(); ?>
   
  </header>