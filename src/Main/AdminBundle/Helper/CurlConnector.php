<?php
namespace Main\AdminBundle\Helper;

class CurlConnector
{
	public static function curlSend($content, $url)
	{
		$headers = array("POST " . dirname($url) . " HTTP/1.0",
			"Content-type: application/json;charset=\"utf-8\"",
			"Accept: application/json",
			"Cache-Control: no-cache",
			"Pragma: no-cache",
			"Content-length: " . strlen($content)
		);
		set_time_limit(0);
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_TIMEOUT, 2400);
		curl_setopt($ch, CURLOPT_TIMEOUT_MS, 480000); //in miliseconds
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		# curl_setopt( $ch, CURLOPT_USERAGENT, $defined_vars['HTTP_USER_AGENT'] );
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $content);
		$data = curl_exec($ch);
		if (curl_errno($ch)) {
			print "Error: " . curl_error($ch);
			return 'Fail';
			die;
		} else {
			curl_close($ch);
			return $data;
		}
	}
}