<?php defined('SYSPATH') or die('No direct script access.');

class Url extends Kohana_URL {
    
	public static function site($uri = '', $protocol = NULL, $index = FALSE)
	{
		// Chop off possible scheme, host, port, user and pass parts
		$path = preg_replace('~^[-a-z0-9+.]++://[^/]++/?~', '', trim($uri, '/'));

		if ( ! UTF8::is_ascii($path))
		{
			// Encode all non-ASCII characters, as per RFC 1738
			$path = preg_replace('~([^/]+)~e', 'rawurlencode("$1")', $path);
		}

		// Concat the URL
		return URL::base($protocol, $index).$path;
	}
    
    public static function referer()
    {
        $referrer = Request::$current->referrer();
        
        if (strpos($referrer, $_SERVER['HTTP_HOST']) !== FALSE)
        {
            return $referrer;
        }
        else
        {
            return '/';
        }
    }

}