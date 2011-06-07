<?php defined('SYSPATH') or die('No direct script access.');

class Jelly_Field_My_Dtcreate extends Jelly_Core_Field_Timestamp {

	public function initialize($model, $column)
	{
		parent::initialize($model, $column);

        $this->auto_now_create = TRUE;
        
        $this->format = 'Y-m-d H:i:s';
	}

} 
