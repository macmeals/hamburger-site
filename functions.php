
 <?php
 //テーマサポート

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
    }
    add_action( 'after_setup_theme', 'hamburger_theme_support' );

  //CSSとJavaScriptの読み込み
   function hambuger_script() {
       wp_enqueue_style( 'robot', '//fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap', array(), '' );                   /* 文字フォント：Robotの読み込み */
       wp_enqueue_style( 'mplus-basic', '//mplus-fonts.sourceforge.jp/webfonts/basic_latin/mplus_webfonts.css', array(), '' );        /* 文字フォント：MPlusの読み込み */
       wp_enqueue_style( 'mplus-general', '//mplus-fonts.sourceforge.jp/webfonts/general-j/mplus_webfonts.css', array(), '' );          /* 文字フォント：MPlusの読み込み */
       wp_enqueue_style( 'hambuger-style', get_theme_file_uri('/CSS/hambuger.css'), array('robot'), '20210421' ,'all');                /* CSSファイルの読み込み */
       wp_enqueue_style( 'fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array('hambuger-style'), '4.7.0' );    /* 文字フォント：WebFont Awesomeの読み込み */
       wp_enqueue_script( 'hambuger-script', get_theme_file_uri('/js/hamburger.js'), array('fontawesome'), '20210421'  );                    /* JavaScript の読み込み */
       wp_enqueue_script( 'hambuger-jquery', get_theme_file_uri('js/jquery-3.6.0.min.js'), array('hambuger-script'), '20210421'  );                    /* JQuary の読み込み */
      
   }
   add_action( 'wp_enqueue_scripts', 'hambuger_script' );