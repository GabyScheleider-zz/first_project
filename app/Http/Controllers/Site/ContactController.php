<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site\contact\index');
    }

    /* Criar um método, que nesse caso chamaremos de contact. ele é responsável pela lógia do formulário de contato */
    public function formContact(Request $request)
    {
        ddd($request->all());
    }
}
