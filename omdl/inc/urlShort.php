<?php

// CREATE URL TO BITLY AND OPEN GRAPH
if($idPost == ""){
	$OPurl = $DIRETORIO;	
}else{
	$vTitleURL	= urlSEO($titlePage);
	$OPurl 		= $DIRETORIO."?ID=".$idPost;
}

// GET URLSHORT FIELD ON GEAR API
$getURLShortAPI ='http://gear.codes/api/v1/load/default.asp?source=LoadMedia&pagination=1&rows=3&actualPage=1&search=&fields=title,image,urlshort&fieldOrder=begindate&orderSort=asc&files=0&mediaAreaID=&mediaID='.$idPost.'&mediaAreaParentID=&accesskey=87E1C7BF-3E93-45BF-B17A-65FE389C4809';
	$JSON 			= file_get_contents($getURLShortAPI);
	$data 			= json_decode($JSON,true);
	$urlShortAPI	= $data['MediaList'][0]['urlshort'];
	//echo"$getURLShortAPI";

// VERIFY URLSHORT FIELD IS EMPTY

if($urlShortAPI == "" && $idPost != ""){

// CREATE URLSHORT ON BITLY
	$short_url = make_bitly_url($OPurl);
	//echo"$short_url";

// SAVE URLSHORT BITLY FIELD ON GEAR
	$saveURLShortAPI = 'http://gear.codes/api/v1/save/?source=SaveMedia&mediaID='.$idPost.'&mediaAreaID='.$idArea.'&urlshort='.$short_url.'&accesskey=87E1C7BF-3E93-45BF-B17A-65FE389C4809';
	file_get_contents($saveURLShortAPI);
	//echo $short_url.' veio do bitly';
	
}else{

// IS NOT EMPTY GET URLSHORT FIELD ON GEAR
	$short_url = $urlShortAPI;
	//echo $short_url.' veio do GEAR';
};


/* Based on code from David Walsh – http://davidwalsh.name/bitly-php */
function make_bitly_url($url,$format = 'xml',$version = '3'){
	//Set up account info
	$bitly_login = 'luks';
	$bitly_api = 'R_344ac3f9997b4b3812fa85bad4f791d8';
	
	//create the URL
	$bitly = 'http://api.bit.ly/shorten?version='.$version.'&longUrl='.urlencode($url).'&login='.$bitly_login.'&apiKey='.$bitly_api.'&format='.$format;
	//get the url
	$response = file_get_contents($bitly);

	$xml = simplexml_load_string($response);
	return $xml->results->nodeKeyVal->shortUrl;	
}

?>