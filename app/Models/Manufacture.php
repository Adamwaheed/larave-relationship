<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacture extends Model
{
    use HasFactory;

    public $appends =['display_name'];

    public function getDisplayNameAttribute(){
        return preg_replace('/([a-z])([A-Z])/s','$1 $2', $this->name);
    }

}
