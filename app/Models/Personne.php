<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    use HasFactory;
    /**
     * 
     */
    protected $fillable = array('parant_id', 'order', 'nom');
    public static $rules = array('parent_id'=>'required|integer',
                                'order'=>'required|min:6',
                                'nom'=>'required|min:6',
                            );

     public function parent()
      {
        return $this->belongsTo(Personne::class,'parent_id');
      }               

}
