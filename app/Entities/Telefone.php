<?php
/**
 * Created by PhpStorm.
 * User: rogerio
 * Date: 25/08/16
 * Time: 11:28
 */

namespace CodeAgenda\Entities;

use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    protected $table = 'telefones';

    protected $fillable = [
        'descricao',
        'codpais',
        'ddd',
        'prefixo',
        'sufixo'
    ];

    public function pessoa()
    {
        //
    }

}