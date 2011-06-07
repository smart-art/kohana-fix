<?php defined('SYSPATH') or die('No direct script access.');

class Form extends Kohana_Form {
    
    public static function open($action = NULL, array $attributes = NULL)
    {
        if (is_null($action))
        {
            $action = Request::$current->uri();
        }
        
        return parent::open($action, $attributes).parent::hidden('submit_token', time() /* TODO: надо реализовать что-то вроде Django csrf_token */);
    }
   
}