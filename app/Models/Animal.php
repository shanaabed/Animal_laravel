<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;
    protected $table = 'animals';

    protected $primaryKey = 'id';

    protected $fillable = ['name','description'];
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
