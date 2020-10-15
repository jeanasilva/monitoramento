<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ping;


class StatusController extends Controller
{

    public function index()
    {
        return Ping::check('https://offboard.com.br');
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
