<?php
$dictionary=array(
'CHECK_WEATHER_ENDPOINT'=>'Адрес API',
'CHECK_WEATHER_METHOD'=>'HTTP-метод',
'CHECK_WEATHER_TOKEN'=>'Токен доступа',
'CHECK_WEATHER_REGION'=>'Регион / маршрут',
'CHECK_WEATHER_TRACKING'=>'Номер отправления',
'CHECK_WEATHER_PAYLOAD'=>'Шаблон POST-запроса',
'CHECK_WEATHER_HINT'=>'Локальный модуль. Данные не отправляются, пока сценарий не вызовет api().',
'CHECK_WEATHER_LAST'=>'Последний результат'
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}