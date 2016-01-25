<?php
  /*
  Plugin Name: Friendly Mail
  */
  class emailer {
    static function friends($post_ID) {
      $curl = curl_init();
      curl_setopt_array($curl,array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => 'https://api.instagram.com/v1/users/self/media/recent/?access_token=2270311824.83e0a08.5e753a28ab2145668e91fee86a482c0a',
        CURLOPT_USERAGENT => 'sample'
      ));
      $resp = curl_exec($curl);
      curl_close($curl);
      echo $resp;
    }
  }
  add_action('loop_start', array('emailer','friends'));
?>
