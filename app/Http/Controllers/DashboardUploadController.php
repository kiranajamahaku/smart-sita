<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DashboardUploadController extends Controller
{
    public function index()
    {
        $user = User::where('id', auth()->user()->id)->get();
        $upload = Upload::whereCreatedBy(Auth::id())->get();

        return view('dashboard.upload.index', [
            'upload' => $upload,
            'user' => $user
        ]);
    }

    public function store(Request $request)
    {
        $create = [];

        if (!empty($request->file('upload_proposal'))) {
            $create['proposal'] = strtotime('now') . '_' . str_replace(' ', '_', $request->file('upload_proposal')->getClientOriginalName());
            $request->file('upload_proposal')->storeAs('public/data_file/', $create['proposal']);
        }

        if (!empty($request->file('upload_laporan'))) {
            $create['laporan'] = strtotime('now') . '_' . str_replace(' ', '_', $request->file('upload_laporan')->getClientOriginalName());
            $request->file('upload_laporan')->storeAs('public/data_file/', $create['laporan']);
        }

        if (!empty($request->file('upload_makalah'))) {
            $create['makalah'] = strtotime('now') . '_' . str_replace(' ', '_', $request->file('upload_makalah')->getClientOriginalName());
            $request->file('upload_makalah')->storeAs('public/data_file/', $create['makalah']);
        }

        if (!empty($request->file('upload_file_coding'))) {
            $create['file_coding'] = strtotime('now') . '_' . str_replace(' ', '_', $request->file('upload_file_coding')->getClientOriginalName());
            $request->file('upload_file_coding')->storeAs('public/data_file/', $create['file_coding']);
        }

        if (!empty($request->file('upload_file_database'))) {
            $create['file_database'] = strtotime('now') . '_' . str_replace(' ', '_', $request->file('upload_file_database')->getClientOriginalName());
            $request->file('upload_file_database')->storeAs('public/data_file/', $create['file_database']);
        }

        if (empty($create))
            return redirect()->route('upload.index')->withErrors('Semua file harus diisi')->withInput();
        else {
            Upload::create($create);
            return redirect()->route('upload.index')->with('success', 'Data berhasil diupload');
        }
    }

    public function update(Request $request, Upload $upload)
    {
        $update = [];

        if (!empty($request->file('upload_proposal'))) {
            $update['proposal'] = strtotime('now') . '_' . str_replace(' ', '_', $request->file('upload_proposal')->getClientOriginalName());
            $request->file('upload_proposal')->storeAs('public/data_file/', $update['proposal']);

            Storage::delete('public/data_file/' . $upload->proposal);
        }

        if (!empty($request->file('upload_laporan'))) {
            $update['laporan'] = strtotime('now') . '_' . str_replace(' ', '_', $request->file('upload_laporan')->getClientOriginalName());
            $request->file('upload_laporan')->storeAs('public/data_file/', $update['laporan']);

            Storage::delete('public/data_file/' . $upload->laporan);
        }

        if (!empty($request->file('upload_makalah'))) {
            $update['makalah'] = strtotime('now') . '_' . str_replace(' ', '_', $request->file('upload_makalah')->getClientOriginalName());
            $request->file('upload_makalah')->storeAs('public/data_file/', $update['makalah']);

            Storage::delete('public/data_file/' . $upload->makalah);
        }

        if (!empty($request->file('upload_file_coding'))) {
            $update['file_coding'] = strtotime('now') . '_' . str_replace(' ', '_', $request->file('upload_file_coding')->getClientOriginalName());
            $request->file('upload_file_coding')->storeAs('public/data_file/', $update['file_coding']);

            Storage::delete('public/data_file/' . $upload->file_coding);
        }

        if (!empty($request->file('upload_file_database'))) {
            $update['file_database'] = strtotime('now') . '_' . str_replace(' ', '_', $request->file('upload_file_database')->getClientOriginalName());
            $request->file('upload_file_database')->storeAs('public/data_file/', $update['file_database']);

            Storage::delete('public/data_file/' . $upload->file_database);
        }

        if (empty($update))
            return redirect()->route('upload.index')->withErrors('Semua file harus diisi')->withInput();
        else {
            $upload->update($update);
            return redirect()->route('upload.index')->with('success', 'Data berhasil diupload');
        }
    }

    public function destroy(Upload $upload)
    {
        Storage::delete('public/data_file/'. $upload->proposal);
        Storage::delete('public/data_file/'. $upload->laporan);
        Storage::delete('public/data_file/'. $upload->makalah);
        Storage::delete('public/data_file/'. $upload->file_coding);
        Storage::delete('public/data_file/'. $upload->file_database);

        $upload->delete();
        return redirect()->route('upload.index')->with('success', 'Data berhasil dihapus');
    }

    public function download(Request $request, Upload $upload)
    {
        $file = str_replace('-', '_', $request->file);
        $path = Storage::disk('local')->path('public/data_file/' . $upload->{$file});

        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . $upload->{$file});
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