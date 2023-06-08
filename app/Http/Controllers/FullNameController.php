<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FullnameController extends Controller
{
    protected $firstname, $lastName, $result;
    public function fullName()
    {
        return view('fullname');
    }
    public function getfullName(Request $request)
    {
        $this->result = $request->first_name.' '.$request->last_name;
        return redirect()->back()->with('result', $this->result);
    }
}
