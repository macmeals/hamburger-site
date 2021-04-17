<!DOCTYPE html>
<html lang="ja">
 <head>
   <meta charset="utf-8">
   <title>Hanburger Site</title>
   <meta name= "description" content="一般的なハンバーガーサイトです">

   <!-- ブレイクポイントを設定 -->
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
   <!-- m＋フォントを適応 -->
   <link rel="stylesheet" type="text/css" href="http://mplus-fonts.sourceforge.jp/webfonts/basic_latin/mplus_webfonts.css">
   <link rel="stylesheet" type="text/css" href="http://mplus-fonts.sourceforge.jp/webfonts/general-j/mplus_webfonts.css">
 
   <!-- Roboto Boldを適応 -->
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    
   
   <!-- スタイルシートを読み込む リセットCSS込-->
   <link href="./CSS/hambuger.css" rel="stylesheet">

   <!-- 虫眼鏡用のWebFont Awesome を読み込む-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

 </head>
 <body>
  <header class="l-header">
    <div class="l-header__top u-padding__left__right">
      <h1><a>Hamburger</a></h1>
      <form>
        <input class="c-window u-margin__right" type="search" name="search" placeholder=" &#xf002">
        <input class="c-button " type="submit" name="submit" value="検索">
      </form>
    </div>
    <div class="l-header__bottom u-padding__left__right">
      <h2 class="c-hamburgermenu">Menu</h2>
      <button class="c-hamburgerbutton  is-hamburger">Menu</button>
    </div>
   </div>
   <script src="/js/jquery-3.6.0.min.js"></script>
   <script src="/js/hamburger.js"></script>
   <div class="c-grayscreen"></div>
  </header>