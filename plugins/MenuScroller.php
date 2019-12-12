<?php

class AdminerMenuScroller
{
    public function head()
    {
        echo '<script'.nonce().'src="http://localhost/adminer/js/menuScroller.js"></script>';
    }
}