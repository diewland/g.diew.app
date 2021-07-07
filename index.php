<?php
  // default url
  $default_url = 'https://www.reviewesan.com';

  // hash list TODO move to db
  $db = array(
    'covid' => 'https://ddc.moph.go.th/viralpneumonia/index.php',
    'it' => 'https://www.blognone.com',
    'review' => 'https://www.reviewesan.com',
    'menu' => 'https://preview.diew.app/jjb/menu',
  );
  
  // get redirect url from hash
  $hash = substr($_SERVER['REQUEST_URI'], 1);
  $url = $db[$hash] ?? $default_url;

  // redirect
  header("location: $url");
  exit(0);
?>
