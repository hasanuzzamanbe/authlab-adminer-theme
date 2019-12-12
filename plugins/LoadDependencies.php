<?php

class LoadDependencies
{
    public function head()
    {
        echo '<script' .nonce(). 'src="http://localhost/adminer/js/jquery.min.js"></script>';

        echo '<script' .nonce(). 'src="http://localhost/adminer/js/index.js"></script>';
    }
}
