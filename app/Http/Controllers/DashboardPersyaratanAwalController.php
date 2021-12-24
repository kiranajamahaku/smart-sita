<?php

namespace App\Http\Controllers;

use File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\persyaratanawal;
use App\Models\User;

class DashboardPersyaratanAwalController extends Controller
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
            return view('dashboard.persyaratanawal.index', [
                "persyaratanawal" => persyaratanawal::where('userId', auth()->user()->id)->get(),
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
            'totalsks' => 'required',
            'mk_nilai_d' => 'required',
            'ipk' => 'required',
            'uploadKRS' => 'required',
            'uploadTranskrip' => 'required',
            'uploadSertif1' => 'required',
            'uploadSertif2' => 'required',
            'uploadSertif3' => 'required'
        ]);
        
        $file = $request->file('uploadKRS');
		$nama_file = time()."_".$file->getClientOriginalName();
		$tujuan_upload = 'storage/data_file';
        $path = $request->file('uploadKRS')->storeAs('public/data_file', $nama_file);
        $validatedData['krs'] = $nama_file;  
        
        $file = $request->file('uploadTranskrip');
		$nama_file = time()."_".$file->getClientOriginalName();
		$tujuan_upload = 'storage/data_file';
        $path = $request->file('uploadTranskrip')->storeAs('public/data_file', $nama_file);
        $validatedData['transkrip'] = $nama_file;  
        
        $file = $request->file('uploadSertif1');
		$nama_file = time()."_".$file->getClientOriginalName();
		$tujuan_upload = 'storage/data_file';
        $path = $request->file('uploadSertif1')->storeAs('public/data_file', $nama_file);
        $validatedData['sertif1'] = $nama_file;  
        
        $file = $request->file('uploadSertif2');
		$nama_file = time()."_".$file->getClientOriginalName();
		$tujuan_upload = 'storage/data_file';
        $path = $request->file('uploadSertif2')->storeAs('public/data_file', $nama_file);
        $validatedData['sertif2'] = $nama_file;  
        
        $file = $request->file('uploadSertif3');
		$nama_file = time()."_".$file->getClientOriginalName();
		$tujuan_upload = 'storage/data_file';
        $path = $request->file('uploadSertif3')->storeAs('public/data_file', $nama_file);
        $validatedData['sertif3'] = $nama_file;  

        persyaratanawal::create($validatedData);

        return redirect('/dashboard/persyaratanawal');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\persyaratanawal  $persyaratanawal
     * @return \Illuminate\Http\Response
     */
    public function show(persyaratanawal $persyaratanawal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\persyaratanawal  $persyaratanawal
     * @return \Illuminate\Http\Response
     */
    public function edit(persyaratanawal $persyaratanawal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\persyaratanawal  $persyaratanawal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, persyaratanawal $persyaratanawal)
    {
        $validatedData = $request->validate([
            'userId' => 'required',
            'totalsks' => 'required',
            'mk_nilai_d' => 'required',
            'ipk' => 'required'
        ]);

        if($request->hasFile('krs')){
            Storage::disk('local')->delete('/public/data_file/'.$persyaratanawal->krs);
            $file = $request->file('krs');
            $nama_file = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'storage/data_file';
            $path = $request->file('krs')->storeAs('public/data_file', $nama_file);
            $validatedData['krs'] = $nama_file; 
        } 
        
        if($request->hasFile('transkrip')){
            Storage::disk('local')->delete('/public/data_file/'.$persyaratanawal->transkrip);
            $file = $request->file('transkrip');
            $nama_file = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'storage/data_file';
            $path = $request->file('transkrip')->storeAs('public/data_file', $nama_file);
            $validatedData['transkrip'] = $nama_file;  
        }

        if($request->hasFile('sertif1')){    
            Storage::disk('local')->delete('/public/data_file/'.$persyaratanawal->sertif1);
            $file = $request->file('sertif1');
            $nama_file = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'storage/data_file';
            $path = $request->file('sertif1')->storeAs('public/data_file', $nama_file);
            $validatedData['sertif1'] = $nama_file;  
        }
        
        
        if($request->hasFile('sertif2')){    
            Storage::disk('local')->delete('/public/data_file/'.$persyaratanawal->sertif2);
            $file = $request->file('sertif2');
            $nama_file = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'storage/data_file';
            $path = $request->file('sertif2')->storeAs('public/data_file', $nama_file);
            $validatedData['sertif2'] = $nama_file;  
        }

        if($request->hasFile('sertif2')){   
            Storage::disk('local')->delete('/public/data_file/'.$persyaratanawal->sertif3);
            $file = $request->file('sertif3');
            $nama_file = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'storage/data_file';
            $path = $request->file('sertif3')->storeAs('public/data_file', $nama_file);
            $validatedData['sertif3'] = $nama_file; 
        } 

        persyaratanawal::where('id', $persyaratanawal->id)
            ->update($validatedData);

        return redirect('/dashboard/persyaratanawal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\persyaratanawal  $persyaratanawal
     * @return \Illuminate\Http\Response
     */
    public function destroy(persyaratanawal $persyaratanawal)
    {
        Storage::disk('local')->delete('/public/data_file/'.$persyaratanawal->krs);
        Storage::disk('local')->delete('/public/data_file/'.$persyaratanawal->transkrip);
        Storage::disk('local')->delete('/public/data_file/'.$persyaratanawal->sertif1);
        Storage::disk('local')->delete('/public/data_file/'.$persyaratanawal->sertif2);
        Storage::disk('local')->delete('/public/data_file/'.$persyaratanawal->sertif3);
        
        persyaratanawal::destroy($persyaratanawal->id);
        return redirect('/dashboard/persyaratanawal')->with('success', "Record has been deleted.");
    }
}
