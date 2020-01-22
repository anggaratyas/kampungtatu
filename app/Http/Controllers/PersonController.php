<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;
use Excel;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('person.index');
    }

    public function getdataperson()
    {
        $person = Person::select('persons.*');
        return \DataTables::eloquent($person)
        ->addColumn('nama_link',function($person){
            return '<a href="/person/'.$person->id.'">'.$person->nama_lengkap.'</a>';
        })
        ->rawColumns(['nama_link'])
        ->toJson();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('person.register');
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
            'nama_lengkap' => 'required','nik' => 'required|size:16',
            'kk' => 'required','tlp' => 'required',
            'tempat_lahir' => 'required','tgl_lahir' => 'required',
            'jenis_kel' => 'required','status' => 'required',
            'agama' => 'required','skul' => 'required',
            'ibu' => 'required','ayah' => 'required',
            'kwn' => 'required','alamat' => 'required',
            'rt' => 'required','rw' => 'required', 'email' => 'required'
            ]);
            
            
        $person = new \App\Person;
        $person->nama_lengkap = $request->nama_lengkap;
        $person->nik = $request->nik;
        $person->kk = $request->kk;
        $person->tlp = $request->tlp;
        $person->tempat_lahir = $request->tempat_lahir;
        $person->tgl_lahir = $request->tgl_lahir;
        $person->jenis_kel = $request->jenis_kel;
        $person->status = $request->status;
        $person->agama = $request->agama;
        $person->skul = $request->skul;
        $person->ibu = $request->ibu;
        $person->ayah = $request->ayah;
        $person->kwn = $request->kwn;
        $person->alamat = $request->alamat;
        $person->rt = $request->rt;
        $person->rw = $request->rw;
        $person->email = $request->email;
        $person->kdpos = '61172';
        $person->propinsi = 'JAWA TIMUR';
        $person->kabupaten = 'GRESIK';
        $person->kecamatan = 'BENJENG';
        $person->slug = Str::slug($request->nik);
        $person->save();

        return redirect('/person')->with('status', 'Data Penduduk berhasil ditambahkan');
    }

    public function getimportdata()
    {
        return view('person.import');
    }

    public function storeData(Request $request)
    {
        //validasi 
        $this->validate($request, [
            'file' => 'required|mimes:xls,xlsx'
        ]);
        if ($request->hasFile('file')){
            $file = $request->file('file'); //GET FILE
            Excel::import(new PersonImport, $file); //Import File
            return redirect()->back()->with(['succes' => 'Upload Succes']);
        }

        return redirect()->back()->with(['error' => 'Please chose file before']);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function show(Person $person)
    {
        $person = Person::findOrFail($id);
        return view('person.profile', compact('person'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function edit(Person $person, $id)
    {
        $person = Person::findOrFail($id);
        return view('person.edit', compact('person'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Person $person, $id)
    {
        $person = Person::findOrFail($id);
        Person::where('id', $person->id)
                ->update([
                    'nama_lengkap' => $request->nama_lengkap,
                    'nik' => $request->nik,
                    'kk' => $request->kk,
                    'tlp' => $request->tlp,
                    'tempat_lahir' => $request->tempat_lahir,
                    'tgl_lahir' => $request->tgl_lahir,
                    'jenis_kel' => $request->jenis_kel,
                    'status' => $request->status,
                    'agama' => $request->agama,
                    'skul' => $request->skul,
                    'ibu' => $request->ibu,
                    'ayah' => $request->ayah,
                    'kwn' => $request->kwn,
                    'alamat' => $request->alamat,
                    'rt' => $request->rt,
                    'rw' => $request->rw,
                    'email' => $request->email,
                    'slug' => Str::slug($request->nik)
                ]);
        return redirect('/person')->with('status', 'Data Penduduk berhasil diganti');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function destroy(Person $person)
    {
        People::destroy($person);
        return redirect('/person')->with('status', 'Data Penduduk berhasil dihapus');
    }
}
