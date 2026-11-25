<?php
$dictionary=array(
'CHECK_WEATHER_ENDPOINT'=>'Адреса API',
'CHECK_WEATHER_METHOD'=>'HTTP-метод',
'CHECK_WEATHER_TOKEN'=>'Токен доступу',
'CHECK_WEATHER_REGION'=>'Регіон / маршрут',
'CHECK_WEATHER_TRACKING'=>'Номер відправлення',
'CHECK_WEATHER_PAYLOAD'=>'Шаблон POST-запиту',
'CHECK_WEATHER_HINT'=>'Локальний модуль. Дані не надсилаються, доки сценарій не викличе api().',
'CHECK_WEATHER_LAST'=>'Останній результат'
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}