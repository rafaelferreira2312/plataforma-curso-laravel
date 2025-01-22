<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class HomeController extends Controller
{
    public function index()
    {
      return view('welcome');
    }

    public function curso()
    {
      return view('curso.index');
    }

    public function site()
    {
      return view('site.index');
    }

    public function sistema()
    {
      return view('sistema.index');
    }

    public function app()
    {
      return view('app.index');
    }

    public function lojavirtual()
    {
      return view('lojavirtual.index');
    }

    public function documento()
    {
      return view('documento.index');
    }

    public function sis_vtecfacil_detalhe()
    {
      return view('sistema.sis.vtecfacil.detalhe');
    }

    public function redirect()
    {

        $usertype=Auth::user()->usertype;

        if($usertype=='3')
        {
            return view('admin.home');
        }

        else {
            return view('dashboard');
        }
    }
}

