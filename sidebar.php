
<aside class="l-aside">
<?php wp_nav_menu(array('menu'        => 'HambergerMenu',     /*メニュー名を指定 */
                        'container'   => '',                  /*containerのクラスを削除 */
                        'menu_class'  => 'p-aside__main',     /*メインのクラス名を削除 */
                        'walker'      => new hamberger_walker_side_menu )); ?>  <!-- サブのクラス名を記載 -->

    
</aside>