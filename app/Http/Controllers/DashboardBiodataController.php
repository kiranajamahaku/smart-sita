<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DashboardBiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.biodata.index');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function show(biodata $biodata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function edit(biodata $biodata)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required',
            'fullname' => 'required',
            'fakultas' => 'required',
            'prodi' => 'required',
            'statusMhs' => 'required',
            'tahunAkad' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone' => 'required'
        ]);

        if (!empty($request->file('file_cv'))) {
            $filename = strtotime('now') . '_' . str_replace(' ', '_', $request->file('file_cv')->getClientOriginalName());
            $request->file('file_cv')->storeAs('public/data_file/', $filename);

            if (!empty(Auth::user()->cv))
                Storage::delete('public/data_file/' . Auth::user()->cv);

            $request->merge(['cv' => $filename]);
        }
        
        User::where('id', auth()->user()->id)
            ->update($request->except(['_token', 'file_cv']));
                
        return redirect('/dashboard/biodata');    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function destroy(biodata $biodata)
    {
        //
    }

    public function photo(Request $request)
    {
        if($request->hasFile('photo')){
            Storage::disk('local')->delete('/public/data_file/'.auth()->user()->photo);
            $file = $request->file('photo');
            $nama_file = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'storage/data_file';
            $path = $request->file('photo')->storeAs('public/data_file', $nama_file);
            $validatedData['photo'] = $nama_file; 
        } else {
            Storage::disk('local')->delete('/public/data_file/'.auth()->user()->photo);
            $validatedData['photo'] = ""; 
        }
        User::where('id', auth()->user()->id)
            ->update($validatedData);
                
        return redirect('/dashboard/biodata'); 
    }

    public function downloadCv()
    {
        $path = Storage::disk('local')->path('public/data_file/' . Auth::user()->cv);

        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . Auth::user()->cv);
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: private');
        header('Pragma: private');
        header('Content-Length: ' . filesize($path));
        ob_clean();
        flush();
        readfile($path);
        exit;
    }
}
