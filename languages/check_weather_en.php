<?php
$dictionary=array(
'CHECK_WEATHER_ENDPOINT'=>'API endpoint',
'CHECK_WEATHER_METHOD'=>'HTTP method',
'CHECK_WEATHER_TOKEN'=>'Access token',
'CHECK_WEATHER_REGION'=>'Region / route',
'CHECK_WEATHER_TRACKING'=>'Tracking number',
'CHECK_WEATHER_PAYLOAD'=>'POST payload template',
'CHECK_WEATHER_HINT'=>'Local-first module. No data leaves the system until api() is called.',
'CHECK_WEATHER_LAST'=>'Last result'
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}