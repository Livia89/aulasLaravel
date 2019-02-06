<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

      public function list(){

          return (object)[
                "name"=>'Ana',
                "tel" => "987654321"
          ];
      }

}
