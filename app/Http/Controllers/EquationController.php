<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EquationController extends Controller

{
    /**
    * GET
    * /
    */
    public function index() {
        return view('/drake/form');
    }
}
