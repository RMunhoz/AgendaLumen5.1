<?php
/**
 * Created by PhpStorm.
 * User: rogerio
 * Date: 25/08/16
 * Time: 12:18
 */

namespace CodeAgenda\Http\Controllers;


use CodeAgenda\Entities\Pessoa;

class PessoasController extends Controller
{

    public function index()
    {
        return Pessoa::all();
    }

}