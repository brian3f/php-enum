<?php
/**
 * Class used to create enum classes by extending this one.  Turning
 * the static properties of that class into instances of that class with
 * names set to the name of the property and value set to the property value.
 * This allows type checking on a function parameter.  After the definition
 * of the inherited class you should call [inherited class name]::enumberate();
 */
abstract class Enum {

	private $_value;

	protected function __construct($value) {
		$this->_value = $value;
	}

	public function __toString() {
		return (string) $this->_value;
	}

	public static function enumerate() {
		$class = get_called_class();
		$ref = new ReflectionClass($class);
		$statics = $ref->getStaticProperties();
		foreach ($statics as $name => $value) {
			$ref->setStaticPropertyValue($name, new $class($value));
		}
	}
}
