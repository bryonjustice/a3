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

        # Validate the request data
        $this->validate($request, [
            'step1' => 'required|numeric|min:1.0|max:3.0',
            'step2' => 'required|numeric|min:0.0001|max:1.0',
            'step3' => 'required|numeric|min:0.0001|max:1.0',
            'step4' => 'required|numeric|min:0.0001|max:1.0',
            'step5' => 'required|numeric|min:0.0001|max:1.0',
            'step6' => 'required|numeric|min:0.0001|max:1.0',
            'step7' => 'required|numeric|min:0.0001',
        ]);

        # Compute the result value (N)
        $n = EquationController::calculate($r,$fp,$ne,$fl,$fi,$fc,$l);

        # If N is greater than zero return the view: /drake/result.blade.php
        if ($n>0) {
            return view('drake/result')->with([
                'n'=> $n,
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
