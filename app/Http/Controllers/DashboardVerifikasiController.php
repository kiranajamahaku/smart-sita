<?php

namespace App\Http\Controllers;

use App\Models\verifikasi;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class DashboardVerifikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()==null){
            return redirect('/login');
        }
        else{
            return view('dashboard.verifikasi.index', [
                "verifikasi" => verifikasi::where('userId', auth()->user()->id)->get(),
                "user" => User::where('id', auth()->user()->id)->get()
            ]);
        }
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
        $validatedData = $request->validate([
            'userId' => 'required',
            'description' => 'required',
            'tanggalUpload' => 'required',
            'alasanVerifikasi' => 'required',
            'uploadFile' => 'required'
        ]);
        
        $file = $request->file('uploadFile');
		$nama_file = time()."_".$file->getClientOriginalName();
		$tujuan_upload = 'storage/data_file';
        $path = $request->file('uploadFile')->storeAs('public/data_file', $nama_file);
        $validatedData['uploadFile'] = $nama_file; 

        verifikasi::create($validatedData);

        return redirect('/dashboard/verifikasi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\verifikasi  $verifikasi
     * @return \Illuminate\Http\Response
     */
    public function show(verifikasi $verifikasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\verifikasi  $verifikasi
     * @return \Illuminate\Http\Response
     */
    public function edit(verifikasi $verifikasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\verifikasi  $verifikasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, verifikasi $verifikasi)
    {
        $validatedData = $request->validate([
            'userId' => 'required',
            'description' => 'required',
            'tanggalUpload' => 'required',
            'alasanVerifikasi' => 'required'
        ]);

        if($request->hasFile('uploadFile')){
            Storage::disk('local')->delete('/public/data_file/'.$verifikasi->uploadFile);
            $file = $request->file('uploadFile');
            $nama_file = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'storage/data_file';
            $path = $request->file('uploadFile')->storeAs('public/data_file', $nama_file);
            $validatedData['uploadFile'] = $nama_file; 
        }
        
        verifikasi::where('id', $verifikasi->id)
        ->update($validatedData);

        return redirect('/dashboard/verifikasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\verifikasi  $verifikasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(verifikasi $verifikasi)
    {
        Storage::disk('local')->delete('/public/data_file/'.$verifikasi->uploadFile);
        verifikasi::destroy($verifikasi->id);
        return redirect('/dashboard/verifikasi')->with('success', "Record has been deleted.");
    }
}
