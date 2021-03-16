<?php //Etiqueta PHP de inicio
	
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    wp_enqueue_style( 'child-style', get_stylesheet_uri() );

}

function load_fonts() {
            wp_register_style('et-googleFonts', 'https://fonts.googleapis.com/css?family=Josefin+Slab|Libre+Baskerville|Lobster|Playfair+Display|Raleway|Abhaya+Libre|Abril+Fatface|Righteous|Poiret+One|Cabin|Josefin+Sans|Old+Standard+TT|Playfair+Display');
            wp_enqueue_style( 'et-googleFonts');
        }
add_action('wp_print_styles', 'load_fonts');


wp_enqueue_style( 'font-awesome.min', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css');

function xobamax_resources() {
    wp_enqueue_style('bootstrap', get_template_directory_uri() . 'css/bootstrap.min.css');
    wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_script( 'font-awesome.min', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css');} 	
	
function pingenia_google_analytics() { ?>
	<script>
  	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  	ga('create', 'UA-63104157-1', 'auto');
  	ga('send', 'pageview');

	</script>
<?php }
add_action( 'wp_head', 'pingenia_google_analytics', 10 );
