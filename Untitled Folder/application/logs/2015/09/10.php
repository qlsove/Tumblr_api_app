<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-09-10 00:09:48 --- EMERGENCY: Guzzle\Http\Exception\CurlException [ 0 ]: [curl] 7: Failed to connect to api.tumblr.com port 80: Connection timed out [url] http://api.tumblr.com/v2/blog/ghostphotographs.tumblr.com/avatar/128?api_key=9lwcLfP1HHbHF44L0bQwmRWhkQxkol05WgdW4wQVHUwJpZ9DBk ~ APPPATH/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php [ 359 ] in /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php:292
2015-09-10 00:09:48 --- DEBUG: #0 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php(292): Guzzle\Http\Curl\CurlMulti->isCurlException(Object(Guzzle\Http\Message\Request), Object(Guzzle\Http\Curl\CurlHandle), Array)
#1 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php(257): Guzzle\Http\Curl\CurlMulti->processResponse(Object(Guzzle\Http\Message\Request), Object(Guzzle\Http\Curl\CurlHandle), Array)
#2 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php(240): Guzzle\Http\Curl\CurlMulti->processMessages()
#3 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php(224): Guzzle\Http\Curl\CurlMulti->executeHandles()
#4 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php(111): Guzzle\Http\Curl\CurlMulti->perform()
#5 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMultiProxy.php(94): Guzzle\Http\Curl\CurlMulti->send()
#6 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Client.php(284): Guzzle\Http\Curl\CurlMultiProxy->send()
#7 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Message/Request.php(198): Guzzle\Http\Client->send(Object(Guzzle\Http\Message\Request))
#8 /var/www/html/application/vendor/tumblr/tumblr/lib/Tumblr/API/RequestHandler.php(115): Guzzle\Http\Message\Request->send()
#9 /var/www/html/application/vendor/tumblr/tumblr/lib/Tumblr/API/Client.php(468): Tumblr\API\RequestHandler->request('GET', 'v2/blog/ghostph...', Array)
#10 /var/www/html/application/vendor/tumblr/tumblr/lib/Tumblr/API/Client.php(441): Tumblr\API\Client->makeRequest('GET', 'v2/blog/ghostph...', NULL, true)
#11 /var/www/html/application/vendor/tumblr/tumblr/lib/Tumblr/API/Client.php(277): Tumblr\API\Client->getRedirect('v2/blog/ghostph...', NULL, true)
#12 /var/www/html/application/classes/Controller/Profile.php(28): Tumblr\API\Client->getBlogAvatar('ghostphotograph...', 128)
#13 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Profile->action_info()
#14 [internal function]: Kohana_Controller->execute()
#15 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#16 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 /var/www/html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#18 /var/www/html/index.php(57): Kohana_Request->execute()
#19 {main} in /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php:292
2015-09-10 00:11:44 --- EMERGENCY: Guzzle\Http\Exception\CurlException [ 0 ]: [curl] 7: Failed to connect to api.tumblr.com port 80: Connection timed out [url] http://api.tumblr.com/v2/blog/ghostphotographs.tumblr.com/avatar/128?api_key=9lwcLfP1HHbHF44L0bQwmRWhkQxkol05WgdW4wQVHUwJpZ9DBk ~ APPPATH/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php [ 359 ] in /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php:292
2015-09-10 00:11:44 --- DEBUG: #0 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php(292): Guzzle\Http\Curl\CurlMulti->isCurlException(Object(Guzzle\Http\Message\Request), Object(Guzzle\Http\Curl\CurlHandle), Array)
#1 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php(257): Guzzle\Http\Curl\CurlMulti->processResponse(Object(Guzzle\Http\Message\Request), Object(Guzzle\Http\Curl\CurlHandle), Array)
#2 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php(240): Guzzle\Http\Curl\CurlMulti->processMessages()
#3 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php(224): Guzzle\Http\Curl\CurlMulti->executeHandles()
#4 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php(111): Guzzle\Http\Curl\CurlMulti->perform()
#5 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMultiProxy.php(94): Guzzle\Http\Curl\CurlMulti->send()
#6 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Client.php(284): Guzzle\Http\Curl\CurlMultiProxy->send()
#7 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Message/Request.php(198): Guzzle\Http\Client->send(Object(Guzzle\Http\Message\Request))
#8 /var/www/html/application/vendor/tumblr/tumblr/lib/Tumblr/API/RequestHandler.php(115): Guzzle\Http\Message\Request->send()
#9 /var/www/html/application/vendor/tumblr/tumblr/lib/Tumblr/API/Client.php(468): Tumblr\API\RequestHandler->request('GET', 'v2/blog/ghostph...', Array)
#10 /var/www/html/application/vendor/tumblr/tumblr/lib/Tumblr/API/Client.php(441): Tumblr\API\Client->makeRequest('GET', 'v2/blog/ghostph...', NULL, true)
#11 /var/www/html/application/vendor/tumblr/tumblr/lib/Tumblr/API/Client.php(277): Tumblr\API\Client->getRedirect('v2/blog/ghostph...', NULL, true)
#12 /var/www/html/application/classes/Controller/Profile.php(28): Tumblr\API\Client->getBlogAvatar('ghostphotograph...', 128)
#13 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Profile->action_info()
#14 [internal function]: Kohana_Controller->execute()
#15 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#16 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 /var/www/html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#18 /var/www/html/index.php(57): Kohana_Request->execute()
#19 {main} in /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php:292
2015-09-10 00:19:12 --- EMERGENCY: Guzzle\Http\Exception\CurlException [ 0 ]: [curl] 7: Failed to connect to api.tumblr.com port 80: Connection timed out [url] http://api.tumblr.com/v2/blog/ghostphotographs.tumblr.com/posts/photo?api_key=9lwcLfP1HHbHF44L0bQwmRWhkQxkol05WgdW4wQVHUwJpZ9DBk&limit=3&offset=3 ~ APPPATH/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php [ 359 ] in /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php:292
2015-09-10 00:19:12 --- DEBUG: #0 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php(292): Guzzle\Http\Curl\CurlMulti->isCurlException(Object(Guzzle\Http\Message\Request), Object(Guzzle\Http\Curl\CurlHandle), Array)
#1 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php(257): Guzzle\Http\Curl\CurlMulti->processResponse(Object(Guzzle\Http\Message\Request), Object(Guzzle\Http\Curl\CurlHandle), Array)
#2 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php(240): Guzzle\Http\Curl\CurlMulti->processMessages()
#3 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php(224): Guzzle\Http\Curl\CurlMulti->executeHandles()
#4 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php(111): Guzzle\Http\Curl\CurlMulti->perform()
#5 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMultiProxy.php(94): Guzzle\Http\Curl\CurlMulti->send()
#6 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Client.php(284): Guzzle\Http\Curl\CurlMultiProxy->send()
#7 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Message/Request.php(198): Guzzle\Http\Client->send(Object(Guzzle\Http\Message\Request))
#8 /var/www/html/application/vendor/tumblr/tumblr/lib/Tumblr/API/RequestHandler.php(115): Guzzle\Http\Message\Request->send()
#9 /var/www/html/application/vendor/tumblr/tumblr/lib/Tumblr/API/Client.php(468): Tumblr\API\RequestHandler->request('GET', 'v2/blog/ghostph...', Array)
#10 /var/www/html/application/vendor/tumblr/tumblr/lib/Tumblr/API/Client.php(391): Tumblr\API\Client->makeRequest('GET', 'v2/blog/ghostph...', Array, true)
#11 /var/www/html/application/vendor/tumblr/tumblr/lib/Tumblr/API/Client.php(326): Tumblr\API\Client->getRequest('v2/blog/ghostph...', Array, true)
#12 /var/www/html/application/classes/Controller/Ajax.php(43): Tumblr\API\Client->getBlogPosts('ghostphotograph...', Array)
#13 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_scroll()
#14 [internal function]: Kohana_Controller->execute()
#15 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#16 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 /var/www/html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#18 /var/www/html/index.php(57): Kohana_Request->execute()
#19 {main} in /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php:292