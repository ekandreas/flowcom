<?php

class Flowcom_Initial{

	function __construct() {

		add_action( 'wp_head', array( &$this, 'wp_head' ) );

	}

	function wp_head(){

		?>


		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicon.ico" />


		<?php

	}


}

new Flowcom_Initial();


?>