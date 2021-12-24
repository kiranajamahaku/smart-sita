<?php

namespace App\Http\Controllers;

use App\Models\bimbinganta;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class DashboardBimbinganTAController extends Controller
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
            return view('dashboard.bimbingan.bimbinganta.index', [
                "bimbinganta" => bimbinganta::where('userId', auth()->user()->id)->get(),
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
            'tanggalUpload' => 'required',
            'versi' => 'required|max:5',
            'description' => 'required',
            'alasanUpload' => 'required',
            'uploadFile' => 'required'
        ]);
        
        $file = $request->file('uploadFile');
		$nama_file = time()."_".$file->getClientOriginalName();
		$tujuan_upload = 'storage/data_file';
        $path = $request->file('uploadFile')->storeAs('public/data_file', $nama_file);
        $validatedData['uploadFile'] = $nama_file;  

        bimbinganta::create($validatedData);
        return redirect('/dashboard/bimbingan/bimbinganta');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\bimbinganta  $bimbinganta
     * @return \Illuminate\Http\Response
     */
    public function show(bimbinganta $bimbinganta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\bimbinganta  $bimbinganta
     * @return \Illuminate\Http\Response
     */
    public function edit(bimbinganta $bimbinganta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\bimbinganta  $bimbinganta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bimbinganta $bimbinganta)
    {
        
        $validatedData = $request->validate([
            'userId' => 'required',
            'tanggalUpload' => 'required',
            'versi' => 'required',
            'description' => 'required',
            'alasanUpload' => 'required'
        ]);
        
        if($request->hasFile('uploadFile')){
            Storage::disk('local')->delete('/public/data_file/'.$bimbinganta->uploadFile);
            $file = $request->file('uploadFile');
            $nama_file = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'storage/data_file';
            $path = $request->file('uploadFile')->storeAs('public/data_file', $nama_file);
            $validatedData['uploadFile'] = $nama_file; 
        }
        bimbinganta::where('id', $bimbinganta->id)
            ->update($validatedData);

        return redirect('/dashboard/bimbingan/bimbinganta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\bimbinganta  $bimbinganta
     * @return \Illuminate\Http\Response
     */
    public function destroy(bimbinganta $bimbinganta)
    {
        Storage::disk('local')->delete('/public/data_file/'.$bimbinganta->uploadFile);
        bimbinganta::destroy($bimbinganta->id);
        return redirect('/dashboard/bimbingan/bimbinganta')->with('success', "Record has been deleted.");
    }
}
