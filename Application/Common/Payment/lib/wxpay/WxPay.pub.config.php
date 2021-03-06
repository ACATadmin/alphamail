<?php
/**
* 	配置账号信息
*/
namespace lib\wxpay;

error_reporting(0);
class WxPayConf_pub
{
	/*
	private $CONFIG = array();
	function __construct( $config )
	{	
		$this->CONFIG = array_merge_recursive($this->CONFIG,$config);
		
		vd($this->CONFIG);
	}
	*/
		
	
	//=======【基本信息设置】=====================================
	//微信公众号身份的唯一标识。审核通过后，在微信发送的邮件中查看
	//const APPID = 'wxb268b3215c59bea4';
	
	const APPID = 'wxb268b3215c59bea4';
	//受理商ID，身份标识
	const MCHID = '10026348';
	//商户支付密钥Key。审核通过后，在微信发送的邮件中查看
	const KEY = 'b50285425666524b056b7c6fcfc748d5';
	//JSAPI接口中获取openid，审核后在公众平台开启开发模式后可查看
	const APPSECRET = 'b665013633be7a5fa16c8a7697d90a37';
	
	//=======【JSAPI路径设置】===================================
	//获取access_token过程中的跳转uri，通过跳转将code传入jsapi支付页面
	const JS_API_CALL_URL = 'http://www.xxxxxx.com/demo/js_api_call.php';
	
	//=======【证书路径设置】=====================================
	//证书路径,注意应该填写绝对路径
	const SSLCERT_PATH = '/xxx/xxx/xxxx/WxPayPubHelper/cacert/apiclient_cert.pem';
	const SSLKEY_PATH = '/xxx/xxx/xxxx/WxPayPubHelper/cacert/apiclient_key.pem';
	
	//=======【异步通知url设置】===================================
	//异步通知url，商户根据实际开发过程设定
	const NOTIFY_URL = 'http://www.xxxxxx.com/demo/notify_url.php';

	//=======【curl超时设置】===================================
	//本例程通过curl使用HTTP POST方法，此处可修改其超时时间，默认为30秒
	const CURL_TIMEOUT = 30;
}
	
?>