<?php

class Samu_Database {

  private $Key;

  public function __construct($Key) {
    if(!empty($Key)) {
      $this->Key = $Key;
    } else {
      $this->Key = false;
      exit('Invalid Key');
    }
  }

  public function getUserInfo($user = 'Nen3one') {

    $url = 'http://xsamumine.altervista.org/database';

    $args = array(
      'key' => $this->Key,
      'u' => $user
    );

    $url .= '?' . http_build_query($args);

    return json_decode(file_get_contents($url), true);
  }
}


 ?>
