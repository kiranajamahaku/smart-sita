<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    
    public function index()
    {
        if(auth()->user()==null){
            return redirect('/login');
        }
        else{
            return view('dashboard.index');
        }
    }

    public function download($filename)
    {
        try{
            return Storage::disk('local')->download('/public/data_file/'.$filename);
        }
        catch(\Exception $e){
            return $e->getMessage();
        }
    }
}
