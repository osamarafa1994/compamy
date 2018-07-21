<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use App\Employee;
use App\User;
use App\Company;

use Illuminate\Http\Request;

class Employees extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
   public function __construct()
   {
     $this->middleware('IsAdmin');
   }


  // public function __construct()
  // {
  //     $this->middleware('auth');
  //     //var_dump($_SESSION['status']);
  //
  // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data['title'] = 'اٍدارة الموظفين';
      $data['employees'] = User::get();
      $data['subView'] = "employees.employee";
      $data['companies'] = Company::get();


      return view('master_page', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $input = $request->all();

     $validatedData = $request->validate([

    ]);

    if($file = $request->file('file')){
        $name = $file->getClientOriginalName();
        $file->move('images', $name);

        $input['path'] = $name;
    }


      $input['password'] = Hash::make($input['password']);



        User::create($input);

      return redirect('/employee');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $title = ' تعديل بيانات الموظف';
      $employee = User::findOrfail($id);

      $subView = "employees.edit";
      return view('master_page', compact('subView','employee','title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $employee = User::findOrFail($id);

      $employee->update($request->all());

      return redirect('/employee');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $employee = User::whereId($id)->forceDelete();

      return redirect('/employee');
    }
}
