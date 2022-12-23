<?php
/**
 * @package ActiveRecord
 */
namespace ActiveRecord;

/**
 * This implementation of the singleton pattern does not conform to the strong definition
 * given by the "Gang of Four." The __construct() method has not be privatized so that
 * a singleton pattern is capable of being achieved; however, multiple instantiations are also
 * possible. This allows the user more freedom with this pattern.
 *
 * @package ActiveRecord
 */
abstract class Singleton
{
	/**
	 * Array of cached singleton objects.
	 *
	 * @var array
	 */
	private static $instances = array();

	/**
	 * Static method for instantiating a singleton object.
	 *
	 * @return object
	 */
	final public static function instance()
	{
		$class_name = get_called_class();

		if (!isset(self::$instances[$class_name]))
			self::$instances[$class_name] = new $class_name;

		return self::$instances[$class_name];
	}

	/**
	 * Singleton objects should not be cloned.
	 *
	 * @return void
	 */
	# This is not allowed anymore since PHP 8.0, fixed 31.5.2022 https://php.watch/versions/8.0/final-private-function#:~:text=Warning%3A%20Private%20methods%20cannot%20be,re%2Ddeclares%20a%20private%20method.
	# final private function __clone() {}

	private function __clone() {}

	/**
	 * Similar to a get_called_class() for a child class to invoke.
	 *
	 * @return string
	 */
	final protected function get_called_class()
	{
		$backtrace = debug_backtrace();
		return get_class($backtrace[2]['object']);
	}
}
?>
