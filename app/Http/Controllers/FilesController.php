<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\File as LaravelFile;
use Illuminate\Support\Facades\Storage;


class FilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files = File::select('*', 'files.id as file_id', 'files.name as file_name', 'users.name as user_name')
            ->join('users', 'files.user_id', '=', 'users.id')
            ->get();

        return view('files.index', [
            'files' => $files
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('files.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $fileName = auth()->id() . '_' . $request->file->getClientOriginalName();

        $type = $request->file->getClientMimeType();
        $size = $request->file->getSize();

        $request->file->move(public_path('file'), $fileName);

        File::create([
            'user_id' => auth()->id(),
            'name' => $fileName,
            'type' => $type,
            'size' => $size
        ]);

        return redirect()->route('files.index')->withSuccess(__('File added successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\File $file
     * @return \Illuminate\Http\Response
     */
    public function show(File $file)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\File $file
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $file = File::find($id);
        LaravelFile::delete(public_path('file/' . $file->name));
        File::destroy($id);
        return redirect('/files');
    }


    public function download($id)
    {
        $file = File::find($id);
        return Response()->download(public_path('file/'.$file->name));
    }

    public function update($id)
    {
        $file = File::find($id);
        return view('files.modifier', ['file'=>$file]);
    }

    public function edit(Request $request)
    {
        $id = $request->id;
        $file = File::find($id);
        LaravelFile::delete(public_path('file/' . $file->name));

        $fileName = auth()->id() . '_' . $request->file->getClientOriginalName();

        $type = $request->file->getClientMimeType();
        $size = $request->file->getSize();

        $request->file->move(public_path('file'), $fileName);

        $file->update([
            'name' => $fileName,
            'type' => $type,
            'size' => $size
        ]);
        $file->save();
        return redirect('/files');
    }
}
