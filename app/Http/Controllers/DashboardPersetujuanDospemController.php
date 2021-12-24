<?php

namespace App\Http\Controllers;

use App\Models\persetujuandospem;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class DashboardPersetujuanDospemController extends Controller
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
            return view('dashboard.persetujuandospem.index', [
                "persetujuandospem" => persetujuandospem::where('userId', auth()->user()->id)->get(),
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
            'urlJurnal' => 'required',
            'uploadFile' => 'required'
        ]);
        
        $file = $request->file('uploadFile');
		$nama_file = time()."_".$file->getClientOriginalName();
		$tujuan_upload = 'storage/data_file';
        $path = $request->file('uploadFile')->storeAs('public/data_file', $nama_file);
        $validatedData['uploadFile'] = $nama_file; 

        persetujuandospem::create($validatedData);

        return redirect('/dashboard/persetujuandospem');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\persetujuandospem  $persetujuandospem
     * @return \Illuminate\Http\Response
     */
    public function show(persetujuandospem $persetujuandospem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\persetujuandospem  $persetujuandospem
     * @return \Illuminate\Http\Response
     */
    public function edit(persetujuandospem $persetujuandospem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\persetujuandospem  $persetujuandospem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, persetujuandospem $persetujuandospem)
    {
        $validatedData = $request->validate([
            'userId' => 'required',
            'urlJurnal' => 'required'
        ]);

        if($request->hasFile('uploadFile')){
            Storage::disk('local')->delete('/public/data_file/'.$persetujuandospem->uploadFile);
            $file = $request->file('uploadFile');
            $nama_file = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'storage/data_file';
            $path = $request->file('uploadFile')->storeAs('public/data_file', $nama_file);
            $validatedData['uploadFile'] = $nama_file; 
        }
        
        persetujuandospem::where('id', $persetujuandospem->id)
        ->update($validatedData);

        return redirect('/dashboard/persetujuandospem');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\persetujuandospem  $persetujuandospem
     * @return \Illuminate\Http\Response
     */
    public function destroy(persetujuandospem $persetujuandospem)
    {
        Storage::disk('local')->delete('/public/data_file/'.$persetujuandospem->uploadFile);
        persetujuandospem::destroy($persetujuandospem->id);
        return redirect('/dashboard/persetujuandospem')->with('success', "Record has been deleted.");
    }
}
