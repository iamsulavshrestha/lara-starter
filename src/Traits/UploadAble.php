<?php

namespace Sushre\Starter\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

trait UploadAble{
    
  public function uploadOne(UploadedFile $file, $folder = '', $disk = 'public', $filename = null){

    $name = is_null($filename) ? Str::random(25) : $filename;
    return $file->storeAs(
      $folder,
      $name . '.' . $file->getClientOriginalExtension(),
      $disk
    );    
  }

  public function deleteOne($path = null, $disk = 'public'){
    Storage::disk($disk)->delete($path);
  }

}
