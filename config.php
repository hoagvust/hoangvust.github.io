<?php
	/*** YOUR WEBSITE CONFIG ***/

$config = array(
    /*** Database Config ***/
'LOCALHOST' => '', // mysql host service
'USERNAME' => 't1621934895_code100k', // username
'PASSWORD' => 't1621934895_code100k', // password
'DATABASE' => 't1621934895_code100k', // database name

'facebook_app_id' => 'null',
'facebook_app_key' => 'null',
'home' => 'https://demo.shopmathuat.com', // url website có ssl và không có / ở cuối

    /*** Gạch Thẻ Config ***/   
'CALLBACK_URL' => 'http://'.$_SERVER['SERVER_NAME'].'/model/card_callback.php', // Không thay đổi
'version' => '7.3.0', // Phiên bản mã nguồn hiện tại
'author' => 'Nguyen Khac Duy',
'contact' => 'https://facebook.com/nguyenkhacduy.in4'
);
?>