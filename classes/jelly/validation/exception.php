<?php defined('SYSPATH') or die('No direct script access.');

class Jelly_Validation_Exception extends Jelly_Core_Validation_Exception {

	public function errors($directory = '/', $translate = TRUE)
	{
		return parent::errors($directory, $translate);
	}

}
