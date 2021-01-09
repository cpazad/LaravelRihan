<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Index
     */
    public function index(){
        return view('staff.index');
    }
    /**
     * create
     */
    public function create(){
        return view('staff.create');
    }
    /**
     * store
     */
    public function store(Request $request){
        $this-> validate($request, [
                'name' => 'required',
                'email' => 'required | unique:staff',
                'cell' => 'required | unique:staff',
                'uname' => 'required | unique:staff | min:6 | max:15',

        ],
        [
            'name.required' => 'Name Must',
            'email.required' => 'email Nai keno',
            'email.unique' => 'email unique na',
            'uname.required' => 'Name Must',
        ]);
    }
   
}
