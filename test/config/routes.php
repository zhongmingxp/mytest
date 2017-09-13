<?php
//这是路由文件
use NoahBuscher\Macaw\Macaw;

Macaw::get('','HomeController@home' );

Macaw::dispatch();