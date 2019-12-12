<?php

class AdminerMenuScroller
{
    public function head()
    {
    
    	if($GLOBALS['serverName'] == 'localhost'){

    		echo '<script'.nonce().'src="http://'. $GLOBALS['serverName'] .'/'. $GLOBALS['urlParts'] .'/js/menuScroller.js"></script>';

    	}else {

    		echo '<script'.nonce().'src="/js/menuScroller.js"></script>';

    	}
    }
}