<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Ruangan;

use App\Jurusan;

class RuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $dataRuangan = Ruangan::when($request->search, function($query) use($request){
            $query->where('nama_ruangan', 'LIKE', '%'.$request->search.'%')
             ->orWhere('nama_jurusan', 'LIKE', '%'.$request->search.'%');
        })->join('jurusan', 'id', '=', 'ruangan.jurusan_id')->orderBy('id', 'asc')->paginate(5);

        return view('ruangan.index', compact('dataRuangan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datajurusan = Jurusan::all()->sortBy('nama_jurusan');

        return view('ruangan.create', compact('datajurusan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_ruangan' => 'required',
            'jurusan_id' => 'required',
        ]);

      
        $form_data = array(
            'nama_ruangan'    =>  $request->nama_ruangan,
            'jurusan_id'     =>  $request->jurusan_id,
           
        );

        Ruangan::create($form_data);

        return redirect()->route('ruangan.index')->with('success', 'Data Added Successfully.');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_ruangan)
    {
        $jurusan = Jurusan::all()->sortBy('nama_jurusan');

        $ruangan = Ruangan::findOrFail($id_ruangan);
        return view('ruangan.edit', compact('ruangan'))->with('jurusan', $jurusan);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_ruangan)
    {
        $request->validate([
            'nama_ruangan' => 'required',
            'jurusan_id' => 'required',
        ]);

        $ruangan = Ruangan::find($id_ruangan);
        $ruangan->nama_ruangan = $request->input('nama_ruangan');
        $ruangan->jurusan_id = $request->input('jurusan_id');
        $ruangan->save();
        return redirect()->route('ruangan.index')->with('success', 'Data is Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id_ruangan)
    {
        $data = Ruangan::findOrFail($id_ruangan);
        $data->delete();

        return redirect()->route('ruangan.index');
    }
}
