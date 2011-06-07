<?php defined('SYSPATH') or die('No direct script access.');

class Jelly_Field_Password extends Jelly_Field_String
{
	public $hash_with = 'sha1';

	public function save($model, $value, $loaded)
	{
		if ($this->hash_with)
		{
			// Verify value has changed
			if ($model->changed($this->name))
			{
				$value = call_user_func($this->hash_with, $value);
			}
		}

		return $value;
	}
}