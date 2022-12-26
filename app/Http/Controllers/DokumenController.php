<?php

namespace App\Http\Controllers;

use App\Models\doc;
use Illuminate\Http\Request;

class DokumenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paginate = 5;

        $posts = Doc::paginate($paginate);
        return view('dashboard.doc.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(doc $doc)
    {
        $z = Doc::find($doc)->where('status');
        return view('dashboard.doc.create', compact('z'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Doc::create($request->all());

        return redirect('/document')->with('success', 'Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\doc  $doc
     * @return \Illuminate\Http\Response
     */
    public function show(doc $doc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\doc  $doc
     * @return \Illuminate\Http\Response
     */
    public function edit(doc $doc, $id_dokumen)
    {
        $z = Doc::find($doc)->where('status');
        $docs = Doc::find($id_dokumen);

        return view('dashboard.doc.edit', [
            'z' => $z,
            'docs' => $docs
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\doc  $doc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, doc $doc, $id)
    {
        $rules = [
            'nama_dokumen' => 'required',
            'status' => 'required',
        ];


        $validatedData = $request->validate($rules);

        $validatedData = Doc::find($id);
        $validatedData->update([
            'nama_dokumen' => $request->nama_dokumen,
            'status' => $request->status,
    ]);

        return redirect('/document')->with('success', 'Berhasil Diedit');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\doc  $doc
     * @return \Illuminate\Http\Response
     */
    public function destroy(doc $doc, $id)
    {
        $posts = Doc::find($id);
        $posts->delete();

        return redirect('/document')->with('success', 'Berhasil Dihapus');
    }
}
