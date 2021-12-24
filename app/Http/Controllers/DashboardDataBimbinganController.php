<?php

namespace App\Http\Controllers;

use App\Models\databimbingan;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class DashboardDataBimbinganController extends Controller
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
            return view('dashboard.bimbingan.databimbingan.index', [
                "databimbingan" => databimbingan::where('userId', auth()->user()->id)->get(),
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
            'npm' => 'required',
            'judul' => 'required',
            'judulEnglish' => 'required',
            'formpersetujuan' => 'required'
        ]);
        
        $file = $request->file('formpersetujuan');
		$nama_file = time()."_".$file->getClientOriginalName();
		$tujuan_upload = 'storage/data_file';
        $path = $request->file('formpersetujuan')->storeAs('public/data_file', $nama_file);
        $validatedData['formpersetujuan'] = $nama_file; 
        
        databimbingan::create($validatedData);

        return redirect('/dashboard/bimbingan/databimbingan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\databimbingan  $databimbingan
     * @return \Illuminate\Http\Response
     */
    public function show(databimbingan $databimbingan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\databimbingan  $databimbingan
     * @return \Illuminate\Http\Response
     */
    public function edit(databimbingan $databimbingan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\databimbingan  $databimbingan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, databimbingan $databimbingan)
    {
        $validatedData = $request->validate([
            'userId' => 'required',
            'npm' => 'required',
            'judul' => 'required',
            'judulEnglish' => 'required'
        ]);
        
        if($request->hasFile('formpersetujuan')){
            Storage::disk('local')->delete('/public/data_file/'.$databimbingan->formpersetujuan);
            $file = $request->file('formpersetujuan');
            $nama_file = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'storage/data_file';
            $path = $request->file('formpersetujuan')->storeAs('public/data_file', $nama_file);
            $validatedData['formpersetujuan'] = $nama_file; 
        }
        databimbingan::where('id', $databimbingan->id)
            ->update($validatedData);

        return redirect('/dashboard/bimbingan/databimbingan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\databimbingan  $databimbingan
     * @return \Illuminate\Http\Response
     */
    public function destroy(databimbingan $databimbingan)
    {
        Storage::disk('local')->delete('/public/data_file/'.$databimbingan->formpersetujuan);
        databimbingan::destroy($databimbingan->id);
        return redirect('/dashboard/bimbingan/databimbingan')->with('success', "Record has been deleted.");
    }
}