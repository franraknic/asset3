<?php 

namespace App;
use Illuminate\Database\Eloquent\Model;

class Company extends Model {

    protected $table = "companies";

    protected $fillable = [
        "name",
    ];

    public $timestamps = false;

    public function assets()
    {
        return $this->hasMany('App\Asset');
    }
    
    
}