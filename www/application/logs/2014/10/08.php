<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-08 00:02:10 --- CRITICAL: View_Exception [ 0 ]: The requested view /pages/about could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\kohana\www\system\classes\Kohana\View.php:137
2014-10-08 00:02:10 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/pages/about')
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('/pages/about', NULL)
#2 Z:\home\kohana\www\application\classes\Controller\Page.php(7): Kohana_View::factory('/pages/about')
#3 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohana\www\system\classes\Kohana\View.php:137