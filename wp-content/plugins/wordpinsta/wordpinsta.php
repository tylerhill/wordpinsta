<?php
  /*
  Plugin Name: Friendly Mail
  */
  class emailer {
    static function friends($post_ID) {
      $authURL = urlencode('https://api.instagram.com/oauth/authorize/?client_id=83e0a081339d4ae496ad1790e9b798e5&redirect_uri=http://localhost:8888/&response_type=code');
      $curl = curl_init();
      curl_setopt_array($curl,array(
        CURLOPT_URL => 'https://api.instagram.com/oauth/access_token',
        
      ));
      $resp = curl_exec($curl);
      curl_close($curl);
      echo $authURL;
    }
  }
  add_action('loop_start', array('emailer','friends'));
?>
