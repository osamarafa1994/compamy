<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Employee;
use App\User;
use App\Company;

use Illuminate\Http\Request;

class NormalEmployee extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
   public function __construct()
   {
     $this->middleware('auth');
   }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data['title'] = 'الصفحه الرئسيه لموظف';
      $data['user'] = Auth::user();

      $data['subView'] = "normalEmployee.dashboard";
      $data['company_name'] = Company::findOrFail($data['user']->company_id)->name;


      return view('master_page', $data);
    }
}
