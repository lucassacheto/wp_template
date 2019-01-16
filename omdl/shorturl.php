<?php


$wpPostID = get_the_ID();
$url_Post = get_permalink();

/* Based on code from David Walsh – http://davidwalsh.name/bitly-php */
function make_bitly_url($url_Post,$format = 'xml'){

  $bitly_login = 'luks';
	$bitly_api = 'R_344ac3f9997b4b3812fa85bad4f791d8';

	//create the URL
	$bitly = 'http://api.bit.ly/shorten?version='.$version.'&longUrl='.urlencode($url_Post).'&login='.$bitly_login.'&apiKey='.$bitly_api.'&format='.$format;

  //get the url
  $response = file_get_contents($bitly);

	$xml = simplexml_load_string($response);
	return $xml->results->nodeKeyVal->shortUrl;

};


if (is_single()){

  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "local";

  //$servername = "robb0324.publiccloud.com.br:3306";
  //$username = "omund_wordpres_7";
  //$password = "@Lucas@787274";
  //$dbname = "omundodoluks_wordpress_5";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  // GET DATABASE URL
  $sql = "SELECT wp_id_post, data_shorturl FROM shorturl WHERE wp_id_post = '$wpPostID'";
  $result = $conn->query($sql);

  // VERIFY URLSHORT FIELD IS EMPTY
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      //echo "id: " . $row["wp_id_post"]. " - url: " . $row["data_shorturl"]. "<br>";
      $URL_wp_id_post     = $row["wp_id_post"];
      $URL_data_shorturl  = $row["data_shorturl"];

      //echo $URL_data_shorturl;
    }
  }else {
    //echo "0 result";

    // GENERATE BITLY URL
    $shortURL = make_bitly_url($url_Post);
    //echo $shortURL;

    // INSERT ID AND URL
    $sql = "INSERT INTO shorturl (wp_id_post, data_shorturl) VALUES ('$wpPostID', '$shortURL')";
    $conn->query($sql);

    $URL_data_shorturl = $shortURL;
  }

  $conn->close();


}


?>
