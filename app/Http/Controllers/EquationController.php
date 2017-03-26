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
        return view('/drake/form')-> with([
            'r'=> null,
            'fp'=> null,
            'ne'=> null,
            'fl'=> null,
            'fi'=> null,
            'fc'=> null,
            'l'=> null,
        ]);
    }

    /**
    * GET
    * /calculate
    */
    public function process(Request $request) {
        /**
        * Properties
        * Drake equation: N = R* • fp • ne • fl • fi • fc • L
        */
        $r = $request->input('step1', 0);  # Equates to R* in the equation
        $fp = $request->input('step2', 0); # Equates to fp in the equation
        $ne = $request->input('step3', 0); # Equates to ne in the equation
        $fl = $request->input('step4', 0); # Equates to fl in the equation
        $fi = $request->input('step5', 0); # Equates to fi in the equation
        $fc = $request->input('step6', 0); # Equates to fc in the equation
        $l = $request->input('step7', 0);  # Equates to L in the equation

        $n = EquationController::calculate($r,$fp,$ne,$fl,$fi,$fc,$l);

        if ($n>0) {
            return view('drake/result')->with([
                'n'=> $n,
                'fp'=> $fp,
                'ne'=> $ne,
                'fl'=> $fl,
                'fi'=> $fi,
                'fc'=> $fc,
                'l'=> $l,
            ]);
        }
        else {
            return view('drake/form')-> with([
                'r'=> $r,
                'fp'=> $fp,
                'ne'=> $ne,
                'fl'=> $fl,
                'fi'=> $fi,
                'fc'=> $fc,
                'l'=> $l,
            ]);
        }

    }

    public function calculate(Float $r, Float $fp, Float $ne, Float $fl,
    Float $fi, Float $fc, Float $l) {
		    return $this->compute($r, $fp, $ne, $fl, $fi, $fc, $l);
	  }

    private function compute(Float $r, Float $fp, Float $ne, Float $fl,
    Float $fi, Float $fc, Float $l) {
        $n = $r * $fp * $ne * $fl * $fi * $fc * $l;
        return $n;
    }



}
