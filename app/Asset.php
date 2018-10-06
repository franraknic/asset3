<?php 

namespace App;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model {

    protected $table = "assets";

    protected $fillable = [
        "qr",
        "comment",
        "name"
    ];

    public $timestamps = true;

    /*

    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    */
    
    
}