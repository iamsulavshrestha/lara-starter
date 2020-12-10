<?php

namespace Sushre\Starter\Controllers;

use Sushre\Starter\Controllers\Controller;

class BaseController extends Controller{
  
  public function setPageTitle($title, $subTitle){
    view()->share(['pageTitle' => $title, 'subTitle' => $subTitle]);
  }
}
