<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Ping;


class StatusController extends Controller
{

    public function usuarios()
    {
        //  return \Request::ip();
        //  return shell_exec('ipconfig');
        // $iplocal = getHostByName(gethostbyaddr());

        $usuarios = User::find(1);
        // return $usuarios;

        return view('home')->with(['usuarios' => $usuarios]);

        // return Ping::check('https://offboard.com.br');
        // return $ping;

    }

    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
