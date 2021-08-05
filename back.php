
<?php
$itemNumber = $_GET["itemNumber"];
$url = "http://www.simcompanies.com/api/v3/en/encyclopedia/resources/1/".$itemNumber."/";
$ctx = stream_context_create(
    array(
      'http'=>array(
        'header'=>"Content-type: application/x-www-form-urlencoded",
        'method'=>'GET'
      )
    )
  );
  echo file_get_contents($url, 0, $ctx);
?>
