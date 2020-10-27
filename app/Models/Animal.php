<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;
    protected $table = 'animals';
    //primary key
    protected $primaryKey = 'id';
    //timestamps should be true by default.
    protected $fillable = ['name','description'];
    public $timestamps = true;
}
