<?php

namespace Sushre\Starter\Services;

use Sushre\Starter\Contracts\BaseContract;
use Illuminate\Database\Eloquent\Model;

class BaseService{
 
  public function getRepository($repository){
    return $this->{$repository};
  }
 
}
