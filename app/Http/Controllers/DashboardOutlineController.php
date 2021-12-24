<?php

namespace App\Http\Controllers;

use App\Models\outline;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class DashboardOutlineController extends Controller
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
            return view('dashboard.outline.index', [
                "outline" => outline::where('userId', auth()->user()->id)->get(),
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
            'judul' => 'required',
            'uploadOutline' => 'required',
            'pilihanPembimbing' => 'required',
            'pilihanTunggal' => 'required',
            'pilihanTeam1' => 'required',
            'pilihanTeam2' => 'required'
        ]);
        
        if($validatedData['pilihanPembimbing'] == "Pembimbing Tunggal"){
            $validatedData['pilihanTeam1'] = "";
            $validatedData['pilihanTeam2'] = "";
        }
        else{
            $validatedData['pilihanTunggal'] = "";
        }

        $file = $request->file('uploadOutline');
		$nama_file = time()."_".$file->getClientOriginalName();
		$tujuan_upload = 'storage/data_file';
        $path = $request->file('uploadOutline')->storeAs('public/data_file', $nama_file);
        $validatedData['uploadOutline'] = $nama_file;  
        outline::create($validatedData);

        return redirect('/dashboard/outline');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\outline  $outline
     * @return \Illuminate\Http\Response
     */
    public function show(outline $outline)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\outline  $outline
     * @return \Illuminate\Http\Response
     */
    public function edit(outline $outline)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\outline  $outline
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, outline $outline)
    {
        $validatedData = $request->validate([
            'userId' => 'required',
            'judul' => 'required',
            'pilihanPembimbing' => 'required',
            'pilihanTunggal' => 'required',
            'pilihanTeam1' => 'required',
            'pilihanTeam2' => 'required'
        ]);
        
        if($validatedData['pilihanPembimbing'] == "Pembimbing Tunggal"){
            $validatedData['pilihanTeam1'] = "";
            $validatedData['pilihanTeam2'] = "";
        }
        else{
            $validatedData['pilihanTunggal'] = "";
        }
        
        if($request->hasFile('uploadOutline')){
            Storage::disk('local')->delete('/public/data_file/'.$outline->uploadOutline);
            $file = $request->file('uploadOutline');
            $nama_file = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'storage/data_file';
            $path = $request->file('uploadOutline')->storeAs('public/data_file', $nama_file);
            $validatedData['uploadOutline'] = $nama_file; 
        } 

        outline::where('id', $outline->id)
        ->update($validatedData);

        return redirect('/dashboard/outline');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\outline  $outline
     * @return \Illuminate\Http\Response
     */
    public function destroy(outline $outline)
    {
        Storage::disk('local')->delete('/public/data_file/'.$outline->uploadOutline);
        outline::destroy($outline->id);
        return redirect('/dashboard/outline')->with('success', "Record has been deleted.");
    }
}
