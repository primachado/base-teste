<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Imovel.
 *
 * @package namespace App\Entities;
 */
class Imovel extends Model implements Transformable
{
    use TransformableTrait;
    
    public $table = "imovel";
    public $timestamps = false;
  
    protected $fillable = ["logradouro", "numero", "complemento", "bairro", "municipio", "estado", "cep", "id_tipo_imovel", "id_proprietario"];

}
