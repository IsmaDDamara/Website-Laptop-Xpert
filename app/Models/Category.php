<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function getid()
    {
        return $this->attributes['id'];
    }

    public function setid($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getname()
    {
        return $this->attributes['name'];
    }

    public function setname($name)
    {
        $this->attributes['name'] = $name;
    }
}