<?php

namespace App\Http\Controllers;

use App\Models\MaintenanceConvert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class MaintenanceConvertsController extends Controller
{
    public function index(){
      $maintenanceLists = MaintenanceConvert::all();
      return view('maintenanceConverts.index', compact('maintenanceLists'));
    }

    public function new(){
      $current_user_id = Auth::id();
      return view('maintenanceConverts.new', compact('current_user_id'));
    }

    public function create(Request $request){
      $request->validate([
        'websiteName' => 'required',
        'listConvert' => 'required',
        'user_id' => 'required',
      ]);

      MaintenanceConvert::create([
        'websiteName' => $request->websiteName,
        'listConvert' => $request->listConvert,
        'user_id' => $request->user_id,
      ]);

      Alert::success('Congrats', 'La liste a bien été créée !');
      return redirect()->route('maintenances');
    }
}
