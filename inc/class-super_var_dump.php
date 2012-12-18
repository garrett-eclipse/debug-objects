<?php
/**
 * Add super var dump function to use in dev installs
 *
 * @package     Debug Objects
 * @subpackage  Super var dump
 * 
 * Kudos to Eric Lewis <http://www.ericandrewlewis.com/> for the function super_var_dump()
 * @see         https://github.com/ericandrewlewis/super-var-dump
 * @author      Frank B&uuml;ltge
 * @since       2.0.1
 */

if ( ! function_exists( 'add_filter' ) ) {
	echo "Hi there! I'm just a part of plugin, not much I can do when called directly.";
	exit;
}

if ( class_exists( 'Debug_Objects_Super_Var_Dump' ) )
	return NULL;

class Debug_Objects_Super_Var_Dump {
	
	public static function init() {
		
		if ( ! current_user_can( '_debug_objects' ) )
			return;
		
		self::include_super_var_dump();
	}
	
	public static function include_super_var_dump() {
		
		require_once( plugin_dir_path( __FILE__ ) . 'super-var-dump/super-var_dump.php' );
	}
	
} // end class