<?php

namespace App\Http\Controllers;

use File;
use App\Models\uploadwisuda;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DashboardUploadWisudaController extends Controller
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
            return view('dashboard.uploadwisuda.index', [
                "uploadwisuda" => uploadwisuda::where('userId', auth()->user()->id)->get(),
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
            'pengesahan' => 'required',
            'foto' => 'required',
            'ijazah' => 'required',
            'bayarWisuda' => 'required'
        ]);
        
        $file = $request->file('pengesahan');
		$nama_file = time()."_".$file->getClientOriginalName();
		$tujuan_upload = 'storage/data_file';
        $path = $request->file('pengesahan')->storeAs('public/data_file', $nama_file);
        $validatedData['pengesahan'] = $nama_file; 
        
        $file = $request->file('foto');
		$nama_file = time()."_".$file->getClientOriginalName();
		$tujuan_upload = 'storage/data_file';
        $path = $request->file('foto')->storeAs('public/data_file', $nama_file);
        $validatedData['foto'] = $nama_file;  
        
        $file = $request->file('ijazah');
		$nama_file = time()."_".$file->getClientOriginalName();
		$tujuan_upload = 'storage/data_file';
        $path = $request->file('ijazah')->storeAs('public/data_file', $nama_file);
        $validatedData['ijazah'] = $nama_file;  
        
        $file = $request->file('bayarWisuda');
		$nama_file = time()."_".$file->getClientOriginalName();
		$tujuan_upload = 'storage/data_file';
        $path = $request->file('bayarWisuda')->storeAs('public/data_file', $nama_file);
        $validatedData['bayarWisuda'] = $nama_file;   

        uploadwisuda::create($validatedData);

        return redirect('/dashboard/uploadwisuda');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\uploadwisuda  $uploadwisuda
     * @return \Illuminate\Http\Response
     */
    public function show(uploadwisuda $uploadwisuda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\uploadwisuda  $uploadwisuda
     * @return \Illuminate\Http\Response
     */
    public function edit(uploadwisuda $uploadwisuda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\uploadwisuda  $uploadwisuda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, uploadwisuda $uploadwisuda)
    {
        $validatedData = $request->validate([
            'userId' => 'required',
            'pengesahan' => 'required',
            'foto' => 'required',
            'ijazah' => 'required',
            'bayarWisuda' => 'required'
        ]);

        if($request->hasFile('pengesahan')){
            Storage::disk('local')->delete('/public/data_file/'.$uploadwisuda->pengesahan);
            $file = $request->file('pengesahan');
            $nama_file = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'storage/data_file';
            $path = $request->file('pengesahan')->storeAs('public/data_file', $nama_file);
            $validatedData['pengesahan'] = $nama_file; 
        } 
        
        if($request->hasFile('foto')){
            Storage::disk('local')->delete('/public/data_file/'.$uploadwisuda->foto);
            $file = $request->file('foto');
            $nama_file = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'storage/data_file';
            $path = $request->file('foto')->storeAs('public/data_file', $nama_file);
            $validatedData['foto'] = $nama_file; 
        } 

        if($request->hasFile('ijazah')){
            Storage::disk('local')->delete('/public/data_file/'.$uploadwisuda->ijazah);
            $file = $request->file('ijazah');
            $nama_file = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'storage/data_file';
            $path = $request->file('ijazah')->storeAs('public/data_file', $nama_file);
            $validatedData['ijazah'] = $nama_file; 
        }
        
        
        if($request->hasFile('bayarWisuda')){
            Storage::disk('local')->delete('/public/data_file/'.$uploadwisuda->bayarWisuda);
            $file = $request->file('bayarWisuda');
            $nama_file = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'storage/data_file';
            $path = $request->file('bayarWisuda')->storeAs('public/data_file', $nama_file);
            $validatedData['bayarWisuda'] = $nama_file; 
        }

        uploadwisuda::where('id', $uploadwisuda->id)
            ->update($validatedData);

        return redirect('/dashboard/uploadwisuda');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\uploadwisuda  $uploadwisuda
     * @return \Illuminate\Http\Response
     */
    public function destroy(uploadwisuda $uploadwisuda)
    {
        Storage::disk('local')->delete('/public/data_file/'.$uploadwisuda->pengesahan);
        Storage::disk('local')->delete('/public/data_file/'.$uploadwisuda->foto);
        Storage::disk('local')->delete('/public/data_file/'.$uploadwisuda->ijazah);
        Storage::disk('local')->delete('/public/data_file/'.$uploadwisuda->bayarWisuda);
        
        uploadwisuda::destroy($uploadwisuda->id);
        return redirect('/dashboard/uploadwisuda')->with('success', "Record has been deleted.");
    }
}
