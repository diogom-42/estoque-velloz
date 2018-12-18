<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produto extends Model
{
    use SoftDeletes;
    /**
      * The database table used by the model.
      *
      * @var string
      */
     protected $table = 'produtos';
 
     /**
     * The database primary key value.
     *
     * @var string
     */
     protected $primaryKey = 'id';
 
     /**
      * Attributes that should be mass-assignable.
      *
      * @var array
      */
     protected $fillable = ['serial', 'smart', 'modelo', 'categoria', 'qtd', 'nf', 'status', 'dataRecebimento', 'obs'];
     protected $dates = ['deleted_at'];
}
