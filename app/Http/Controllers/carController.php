<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Car;


class carController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Car::orderBy('id', 'desc')->paginate(5);
        return view('cars.index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('number', $request->number);
        Session::flash('brand', $request->brand);
        Session::flash('type', $request->type);
        Session::flash('year', $request->year);
        Session::flash('gas', $request->gas);
        Session::flash('capacity', $request->capacity);
        Session::flash('price_per_day', $request->price_per_day);

        $request->validate([
            'number' => 'required|unique:cars,number',
            'brand' => 'required',
            'type' => 'required',
            'year' => 'required|numeric',
            'gas' => 'required',
            'capacity' => 'required|numeric',
            'price_per_day' => 'required|numeric',
        ], [
            'number.required'=> 'Plat Nomor Wajib Diisi!',
            'number.unique'=> 'Plat Nomor Tidak Boleh Sama!',
            'brand.required'=> 'Nama Brand Wajib Diisi!',
            'type.required'=> 'Jenis Mobil Wajib Diisi!',
            'year.required'=> 'Tahun Wajib Diisi!',
            'year.numeric'=> 'Tahun Wajib Berisi Angka!',
            'gas.required'=> 'Jenis Bahan Bakar Wajib Diisi!',
            'capacity.required'=> 'Kapasitas Penumpang Wajib Diisi!',
            'capacity.numeric'=> 'Kapasitas Penumpang Wajib Berisi Angka!',
            'price_per_day.required'=> 'Harga Wajib Diisi!',
            'price_per_day.numeric'=> 'Harga Wajib Berisi Angka!',
        ]);
        $data = [
            'number' => $request->number,
            'brand' => $request->brand,
            'type' => $request->type,
            'year' => $request->year,
            'gas' => $request->gas,
            'capacity' => $request->capacity,
            'price_per_day' => $request->price_per_day,
        ];
        car::create($data);
        return redirect()->to('cars')->with('success', 'Data Berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
