<?php

class LoadDependencies
{
    public function head()
    {

    	$url = $_SERVER['REQUEST_URI'];

    	global $urlParts, $serverName;

		$urlPart = explode('/', str_ireplace(array('http://', 'https://'), '', $url));
		$urlParts = $urlPart[1];
		$serverName =  $_SERVER['SERVER_NAME']; 


    	if($serverName == 'localhost'){

    		echo '<script' .nonce(). 'src="http://'. $serverName .'/'. $urlParts .'/js/jquery.min.js"></script>';
			echo '<script' .nonce(). 'src="http://'. $serverName .'/'. $urlParts .'/js/index.js"></script>';

    	}else {

			echo '<script' .nonce(). 'src="/js/jquery.min.js"></script>';
			echo '<script' .nonce(). 'src="/js/index.js"></script>';

    	}
       

    }
}
