
 <?php

    function hamburger_theme_support() {
       add_theme_support( 'post-thumbnails' ); /* アイキャッチ画像 */
       add_theme_support( 'title-tag' );       /* タイトルをHeaderに自動的に出力 */
       add_theme_support( 'html5', array(      /* Html5排出 */
                                  'search-form', 
                                  'comment-form', 
                                  'comment-list', 
                                  'gallery', 
                                  'caption',
       ));
       
       add_theme_support( 'editor-styles' );          //editor-style適応
	    add_editor_style( 'editor-style.css' );        //editor-style適応
       add_theme_support( 'automatic-feed-links' ) ;
   
       }
    add_action( 'after_setup_theme', 'hamburger_theme_support' );

  //CSSとJavaScriptの読み込み
   function hambuger_script() {
       wp_enqueue_style( 'robot', '//fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap', array(), '' );                   /* 文字フォント：Robotの読み込み */
       wp_enqueue_style( 'mplus-basic', '//mplus-fonts.sourceforge.jp/webfonts/basic_latin/mplus_webfonts.css', array(), '' );        /* 文字フォント：MPlusの読み込み */
       wp_enqueue_style( 'mplus-general', '//mplus-fonts.sourceforge.jp/webfonts/general-j/mplus_webfonts.css', array(), '' );          /* 文字フォント：MPlusの読み込み */
       wp_enqueue_style( 'hambuger-style', get_theme_file_uri('/CSS/hambuger.css'), array('robot'), '20210421' ,'all');                /* CSSファイルの読み込み */
       wp_enqueue_style( 'fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array('hambuger-style'), '4.7.0' );    /* 文字フォント：WebFont Awesomeの読み込み */
       wp_enqueue_script( 'jquery');                   /* JQuary（JavaScript） の読み込み */
       wp_enqueue_script( 'han-jquery', get_theme_file_uri('/js/hamburger.js'), array(), '20210421' ,false  );                    /* JQuary（JavaScript） の読み込み */
       
   }
   add_action( 'wp_enqueue_scripts', 'hambuger_script' );

   //タイトルを出力
   function hambuger_title( $title ) {
      if ( is_front_page() && is_home() ) { //トップページなら
          $title = get_bloginfo( 'name', 'display' );
      } elseif ( is_singular() ) { //シングルページなら
          $title = single_post_title( '', false );
      }
      return $title;
   }
   add_filter( 'pre_get_document_title', 'hambuger_title' );

   // サイドバーのサイドメニューのクラスを付与
   class hamberger_walker_side_menu extends Walker_Nav_Menu {
      function start_lvl(&$output, $depth = 0, $args = array()) {
           $output .= '<ul class="p-aside__sub">';
      }
      function end_lvl(&$output, $depth = 0, $args = array()) {
           $output .= '</ul>';
      }
   }

   // editor-style適応
   function hamburger_theme_add_editor_styles() {
      add_editor_style( get_template_directory_uri() . "/css/editor-style.css" );
   }
    add_action( 'admin_init', 'hamburger_theme_add_editor_styles' );
  
  // サイト全体のコンテンツ横幅を指定。→PCでMAX表示される様にする。
    if ( ! isset( $content_width ) ) {$content_width = 1920;}


  //サイトバーの表示 
    function hambuger_menu() {
      register_nav_menu( 'side-navigation', 'Side Navigation' );
    }
    add_action( 'after_setup_theme', 'hambuger_menu' );