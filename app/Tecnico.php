<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tecnico extends Model
{
    use SoftDeletes;
   /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tecnicos';

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
    protected $fillable = ['nome', 'celular', 'cpf', 'uf', 'ativo'];
    protected $dates = ['deleted_at'];

}
