<?php

namespace BRI;

include_once APPPATH.'bri/BRI_Core.php';

use BRI\BRI_Core;

class BRI extends BRI_Core
{

  function __construct($secret, $id)
  {
    parent::__construct($secret, $id);
  }

  public function cekAkun()
  {
    $url = "https://partner.api.bri.co.id/sandbox/v2/inquiry/888801000157508";
    $path = "/sandbox/v2/inquiry/888801000157508";
    $verb = "GET";

    $request_headers = $this->requestHeader($path, $verb, "");

    return $this->curlIn($verb, $url, $request_headers);
  }
}
