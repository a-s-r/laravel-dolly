<?php

namespace Asr\Dolly;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DollyFormController extends Controller
{
    public function add($a, $b){
    	$result = $a + $b;
	    return view('dfForm::add', compact('result'));
    }

    public function subtract($a, $b){
    	echo $a - $b;
    }
}
