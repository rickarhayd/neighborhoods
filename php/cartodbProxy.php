<?php
session_cache_limiter('nocache');
$cache_limiter = session_cache_limiter();
function goProxy($dataURL) 
{
	$baseURL = 'http://rickarhayd.carto.com/api/v2/sql?';
	//  					^ CHANGE THE 'CARTODB-USER-NAME' to your cartoDB url!
	$api = 'de90dafd44186bcce24bf2d3edf4346079ec2f4f';
	//				 ^ENTER YOUR API KEY HERE!
	$url = $baseURL.'q='.urlencode($dataURL).$api;
	$result = file_get_contents ($url);
	return $result;
}
?>
