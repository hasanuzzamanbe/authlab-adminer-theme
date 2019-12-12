<?php

class AdminerFloatThead
{
    public function head()
    {

        if($GLOBALS['serverName'] == 'localhost'){

            echo '<script'.nonce().'src="http://'. $GLOBALS['serverName'] .'/'. $GLOBALS['urlParts'].'/js/jquery.floatThead.js"></script>';


        }else {

            echo '<script'.nonce().'src="/js/jquery.floatThead.js"></script>'; 

        }; ?>


        <script <?php echo nonce(); ?> type="text/javascript">
            $(document).ready(function () {
                var $table = $('#content table').first();

                var tablePosition = $table.offset().top;

                var $window = $(window);

                var initFloatHead = false;

                function handleFloatHead() {
                    var screenPosition = tablePosition - $window.scrollTop();

                    if (screenPosition <= 0 && !initFloatHead) {
                        $table.floatThead({ position: 'absolute' });
                            
                        initFloatHead = true;
                    } else if (screenPosition > 0 && initFloatHead) {
                        $table.floatThead('destroy');

                        initFloatHead = false;
                    }
                }

                handleFloatHead();

                $window.scroll(function () {
                    handleFloatHead();
                })
            });
        </script>
        <?php
    }
}
