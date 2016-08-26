<?php
/**
 * Created by PhpStorm.
 * User: rogerio
 * Date: 25/08/16
 * Time: 11:28
 */

namespace CodeAgenda\Entities;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $table = 'pessoas';

    protected $fillable = [
        'nome',
        'apelido',
        'sexo'
    ];

    public function telefones()
    {
        //
    }

}