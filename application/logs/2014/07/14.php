<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-14 19:07:22 --- EMERGENCY: ErrorException [ 1 ]: Class 'Google_Client' not found ~ APPPATH\classes\Controller\Oauthcontrol.php [ 126 ] in file:line
2014-07-14 19:07:22 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 19:42:22 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Form::$extversion ~ APPPATH\classes\Controller\base.php [ 41 ] in F:\wamp\www\GitHub\issuespostman\application\classes\Controller\base.php:41
2014-07-14 19:42:22 --- NOTICE: #0 F:\wamp\www\GitHub\issuespostman\application\classes\Controller\base.php(41): Kohana_Core::error_handler(8, 'Undefined prope...', 'F:\wamp\www\Git...', 41, Array)
#1 F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Controller.php(69): Controller_Base->before()
#2 [internal function]: Kohana_Controller->execute()
#3 F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#4 F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 F:\wamp\www\GitHub\issuespostman\index.php(118): Kohana_Request->execute()
#7 {main} in F:\wamp\www\GitHub\issuespostman\application\classes\Controller\base.php:41
2014-07-14 19:44:39 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Cookie.php:67
2014-07-14 19:44:39 --- NOTICE: #0 F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('PHPSESSID')
#2 F:\wamp\www\GitHub\issuespostman\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Cookie.php:67
2014-07-14 20:37:04 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Cookie.php:67
2014-07-14 20:37:04 --- NOTICE: #0 F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('PHPSESSID')
#2 F:\wamp\www\GitHub\issuespostman\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Cookie.php:67
2014-07-14 20:37:10 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Cookie.php:67
2014-07-14 20:37:10 --- NOTICE: #0 F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('PHPSESSID')
#2 F:\wamp\www\GitHub\issuespostman\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Cookie.php:67
2014-07-14 20:38:03 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Cookie.php:67
2014-07-14 20:38:03 --- NOTICE: #0 F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('PHPSESSID')
#2 F:\wamp\www\GitHub\issuespostman\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Cookie.php:67
2014-07-14 20:38:15 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Cookie.php:67
2014-07-14 20:38:15 --- NOTICE: #0 F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('PHPSESSID')
#2 F:\wamp\www\GitHub\issuespostman\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Cookie.php:67
2014-07-14 20:38:21 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Cookie.php:67
2014-07-14 20:38:21 --- NOTICE: #0 F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('PHPSESSID')
#2 F:\wamp\www\GitHub\issuespostman\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Cookie.php:67
2014-07-14 20:38:38 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Cookie.php:67
2014-07-14 20:38:38 --- NOTICE: #0 F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('PHPSESSID')
#2 F:\wamp\www\GitHub\issuespostman\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Cookie.php:67
2014-07-14 20:39:15 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Cookie.php:67
2014-07-14 20:39:15 --- NOTICE: #0 F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('PHPSESSID')
#2 F:\wamp\www\GitHub\issuespostman\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Cookie.php:67
2014-07-14 20:41:14 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Cookie.php:67
2014-07-14 20:41:14 --- NOTICE: #0 F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('PHPSESSID')
#2 F:\wamp\www\GitHub\issuespostman\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Cookie.php:67
2014-07-14 20:41:18 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Cookie.php:67
2014-07-14 20:41:18 --- NOTICE: #0 F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('PHPSESSID')
#2 F:\wamp\www\GitHub\issuespostman\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Cookie.php:67
2014-07-14 20:41:18 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Cookie.php:67
2014-07-14 20:41:18 --- NOTICE: #0 F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('PHPSESSID')
#2 F:\wamp\www\GitHub\issuespostman\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Cookie.php:67
2014-07-14 20:42:52 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Cookie.php:67
2014-07-14 20:42:52 --- NOTICE: #0 F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('PHPSESSID')
#2 F:\wamp\www\GitHub\issuespostman\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Cookie.php:67
2014-07-14 23:51:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: password ~ APPPATH\classes\Controller\Curlrequest.php [ 9 ] in F:\wamp\www\GitHub\issuespostman\application\classes\Controller\Curlrequest.php:9
2014-07-14 23:51:46 --- NOTICE: #0 F:\wamp\www\GitHub\issuespostman\application\classes\Controller\Curlrequest.php(9): Kohana_Core::error_handler(8, 'Undefined index...', 'F:\wamp\www\Git...', 9, Array)
#1 F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Controller.php(84): Controller_Curlrequest->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curlrequest))
#4 F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 F:\wamp\www\GitHub\issuespostman\application\classes\Controller\Form.php(23): Kohana_Request->execute()
#7 F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Controller.php(84): Controller_Form->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#10 F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 F:\wamp\www\GitHub\issuespostman\index.php(118): Kohana_Request->execute()
#13 {main} in F:\wamp\www\GitHub\issuespostman\application\classes\Controller\Curlrequest.php:9
2014-07-14 23:55:19 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: password ~ APPPATH\classes\Controller\Curlrequest.php [ 9 ] in F:\wamp\www\GitHub\issuespostman\application\classes\Controller\Curlrequest.php:9
2014-07-14 23:55:19 --- NOTICE: #0 F:\wamp\www\GitHub\issuespostman\application\classes\Controller\Curlrequest.php(9): Kohana_Core::error_handler(8, 'Undefined index...', 'F:\wamp\www\Git...', 9, Array)
#1 F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Controller.php(84): Controller_Curlrequest->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curlrequest))
#4 F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 F:\wamp\www\GitHub\issuespostman\application\classes\Controller\Form.php(23): Kohana_Request->execute()
#7 F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Controller.php(84): Controller_Form->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#10 F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 F:\wamp\www\GitHub\issuespostman\index.php(118): Kohana_Request->execute()
#13 {main} in F:\wamp\www\GitHub\issuespostman\application\classes\Controller\Curlrequest.php:9
2014-07-14 23:59:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: password ~ APPPATH\classes\Controller\Curlrequest.php [ 9 ] in F:\wamp\www\GitHub\issuespostman\application\classes\Controller\Curlrequest.php:9
2014-07-14 23:59:00 --- NOTICE: #0 F:\wamp\www\GitHub\issuespostman\application\classes\Controller\Curlrequest.php(9): Kohana_Core::error_handler(8, 'Undefined index...', 'F:\wamp\www\Git...', 9, Array)
#1 F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Controller.php(84): Controller_Curlrequest->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curlrequest))
#4 F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 F:\wamp\www\GitHub\issuespostman\application\classes\Controller\Form.php(23): Kohana_Request->execute()
#7 F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Controller.php(84): Controller_Form->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#10 F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 F:\wamp\www\GitHub\issuespostman\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 F:\wamp\www\GitHub\issuespostman\index.php(118): Kohana_Request->execute()
#13 {main} in F:\wamp\www\GitHub\issuespostman\application\classes\Controller\Curlrequest.php:9