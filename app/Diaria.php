<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Diaria extends Model
{
    use SoftDeletes;
    /**
      * The database table used by the model.
      *
      * @var string
      */
     protected $table = 'diaria';
 
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
     protected $fillable = ['cidade', 'contrato', 'cliente', 'endereco', 'tp_serv', 'baixa', 'os', 'periodo', 'tecnico', 'obs', 'serial1', 'serial2', 'serial3', 'serial4', 'serial5'];
     protected $dates = ['deleted_at'];
}
