<?php
// defined('InSchoolAssistant') or exit('Access Invalid!');

$config = array();
$config['shop_site_url'] 		= 'http://localhost/shop';
$config['cms_site_url'] 		= 'http://localhost/cms';
$config['microshop_site_url'] 	= 'http://localhost/microshop';
$config['circle_site_url'] 		= 'http://localhost/circle';
$config['admin_site_url'] 		= 'http://localhost/admin';
$config['mobile_site_url'] 		= 'http://localhost/mobile';
$config['wap_site_url'] 		= 'http://localhost/wap';
$config['chat_site_url'] 		= 'http://localhost/chat';
$config['node_site_url'] 		= 'http://::1:8090';
$config['upload_site_url']		= 'http://localhost/data/upload';
$config['resource_site_url']	= 'http://localhost/data/resource';
$config['version'] 		= '201502020315';
$config['setup_date'] 	= '2015-07-12 17:50:23';
$config['gip'] 			= 0;
$config['dbdriver'] 	= 'mysqli';
$config['tablepre']		= 'sh_';
$config['db']['1']['dbhost']       = '123.56.141.120';
$config['db']['1']['dbport']       = '3306';
$config['db']['1']['dbuser']       = 'root';
$config['db']['1']['dbpwd']        = 'rootroot';
$config['db']['1']['dbname']       = 'school_help';
$config['db']['1']['dbcharset']    = 'UTF-8';
$config['db']['slave']                  = $config['db']['master'];
$config['session_expire'] 	= 3600;
$config['lang_type'] 		= 'zh_cn';
$config['cookie_pre'] 		= '908E_';
$config['thumb']['cut_type'] = 'gd';
$config['thumb']['impath'] = '';
$config['cache']['type'] 			= 'file';
//$config['redis']['prefix']      	= 'nc_';
//$config['redis']['master']['port']     	= 6379;
//$config['redis']['master']['host']     	= '127.0.0.1';
//$config['redis']['master']['pconnect'] 	= 0;
//$config['redis']['slave']      	    = array();
//$config['fullindexer']['open']      = false;
//$config['fullindexer']['appname']   = '33hao';
$config['debug'] 			= false;
$config['default_store_id'] = '1';
$config['url_model'] = false;
$config['subdomain_suffix'] = '';
//$config['session_type'] = 'redis';
//$config['session_save_path'] = 'tcp://127.0.0.1:6379';
$config['node_chat'] = true;
//娴侀噺璁板綍琛ㄦ暟閲忥紝涓�1~10涔嬮棿鐨勬暟瀛楋紝榛樿涓�3锛屾暟瀛楄缃畬鎴愬悗璇蜂笉瑕佽交鏄撲慨鏀癸紝鍚﹀垯鍙兘閫犳垚娴侀噺缁熻鍔熻兘鏁版嵁閿欒
$config['flowstat_tablenum'] = 3;
$config['sms']['gwUrl'] = 'http://sdkhttp.eucp.b2m.cn/sdk/SDKService';
$config['sms']['serialNumber'] = '';
$config['sms']['password'] = '';
$config['sms']['sessionKey'] = '';
$config['queue']['open'] = false;
$config['queue']['host'] = '127.0.0.1';
$config['queue']['port'] = 6379;
$config['cache_open'] = false;
$config['delivery_site_url']    = 'http://localhost/delivery';
return $config;