<?php

namespace App\Http\Controllers;
use App\User;
use App\Company;

use Illuminate\Http\Request;

class Dashboard extends Controller
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
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $title = "لوحة التحكم الرئيسية لل Admin";
    $controllers = [
      'company'=>'الشركات',
      'employee'=>'الموظفين'
    ];
    $subView = "dash.dashboard";



    return view('master_page', compact('subView','title', 'controllers'));

  }

}
