<?php

namespace App\Http\Controllers;
use App\Company;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\IsAdmin;

use Illuminate\Http\Request;

class Companies extends Controller
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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    
      $title = 'ادارة الشركات';

      $companies = Company::get();

      $subView = "companies.company";
      return view('master_page', compact('subView','title', 'companies'));
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




        Company::create($input);

        return redirect('/company');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $title = ' تعديل بيانات الشركة';
      $company = Company::findOrfail($id);

      $subView = "companies.edit";
      return view('master_page', compact('subView','company','title'));

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
        $company = Company::findOrFail($id);

        $company->update($request->all());

        return redirect('/company');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $company = Company::whereId($id)->forceDelete();

      return redirect('/company');
    }
}
