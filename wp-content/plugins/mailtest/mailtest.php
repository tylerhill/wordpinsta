<?php
  /*
  Plugin Name: Friendly Mail
  */
  class emailer {
    static function friends($post_ID) {
      mail('tylerhillwebdev@gmail.com', 'workin', 'great jorb!');
      return $post_ID;
    }
  }
  add_action('publish_post', array('emailer','friends'));
?>
