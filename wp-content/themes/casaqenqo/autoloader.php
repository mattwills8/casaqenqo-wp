<?php
/**
 * Autloader class. Handles the logic of finding, and autoloading all the classes written for Casa Qenqo
 */
class CQ_Autoloader {

	/**
	 * Holds the different directory paths that we want the autoload function to look for our classes in.
	 *
	 * @var array
	 */
	protected static $paths = array(
		'custom-post-types/',
	);

	/**
	 * Left empty on purpose.
	 */
	function __construct() {}

	/**
	 * @param  string Name of the class being loaded
	 *
	 * @return void dos not return anything. Queues our auoload function.
	 */
	public static function autoload( $class_name ) {
		// var_dump($class_name);
		// if it is not a Bradley Class, skip it.
		if ( false === strpos( $class_name, 'CQ' ) ) {
	    return;
	  }
	  // normalize our class name and prepare filename
	  $_class = strtolower( str_replace('_', '-', $class_name ) );
	  $_filename = $_class.'-class.php';
	  // iterrate through our paths and load classes found
	  foreach ( self::$paths as $path ) {
	  	if ( file_exists( dirname(__FILE__)  . '/' . $path . $_filename ) ) {
	  		include $path . $_filename;
	  		return;
	  	}
	  	continue;
	  }
	}
}
// Queue our autoload function
spl_autoload_register( array( 'CQ_Autoloader', 'autoload' ) );

?>
