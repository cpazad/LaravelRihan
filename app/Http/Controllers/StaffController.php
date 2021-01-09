<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
use GrahamCampbell\ResultType\Success;

class StaffController extends Controller
{
    /**
     * Index
     */
    public function index(){
        $staffData = Staff::latest() ->get();
        return view('staff.index', [
            'All_data' => $staffData
        ]);
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

        Staff::create([
            'name' => $request -> name,
            'email' => $request -> email,
            'uname' => $request -> uname,
            'password' => password_hash($request -> password, PASSWORD_DEFAULT),
            'age' => $request -> age,
            'photo' => " ",

        ]);

        return redirect() -> back() -> with('success', 'Staff added Successfully !' );
    }
   /**
     * show
     */
    public function show($id){
        $personalData = Staff::find($id);
        return view('staff.show', [
            'staff' => $personalData 
        ] );   
    }
    /**
     * delete
     */
    public function delete($id){
        $delete_data = Staff::find($id);
        $delete_data -> delete();
        return redirect() -> back() -> with('success', 'Staff deleted Successfully !' );
        ] );   
    }
}
