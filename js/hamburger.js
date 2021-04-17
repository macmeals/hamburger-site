jQuery( function( $ ) {
	$( ".is-hamburger" ).on( "click", function() {
		$( this ).toggleClass( "is-open" );
		$( ".l-header" ).toggleClass( "is-open" );
		// ハンバーガーボタンの不要なpaddingを消し（u-padding__left__right）、is-openをつける
		$( ".l-header__bottom" ).toggleClass( "is-open u-padding__left__right" );
		$( ".l-aside" ).toggleClass( "is-open" );
		$( ".p-aside__sub" ).toggleClass( "is-open" );
		$( ".l-footer" ).toggleClass( "is-open" );

  	// ハンバーガーサイトでオープンした時、サイド以外は灰色とする。
		$( ".c-grayscreen" ).toggleClass( "is-open" );
	} );
} );
