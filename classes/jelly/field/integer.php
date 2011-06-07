<?php defined('SYSPATH') or die('No direct script access.');

class Jelly_Field_Integer extends Jelly_Core_Field_Integer {

	public function set($value)
	{
		list($value, $return) = $this->_default($value);

		if ( ! $return AND ! ($value instanceof Database_Expression))
		{
			$value = (int)$value;
		}

		return $value;
	}

}
