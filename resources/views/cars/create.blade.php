@extends('layout.layout')

@section('konten')  


<!-- START FORM -->
<form action='{{ url('cars') }}' method='post'>
    @csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="mb-3 row">
            <label for="number" class="col-sm-2 col-form-label">Nomor Plat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='number' value="{{  Session::get('number') }}" id="number">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="brand" class="col-sm-2 col-form-label">Brand</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='brand' value="{{  Session::get('brand') }}" id="brand">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="type" class="col-sm-2 col-form-label">Tipe</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='type' value="{{  Session::get('type') }}" id="type">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="type" class="col-sm-2 col-form-label">Tahun</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='year' value="{{  Session::get('year') }}" id="type">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="gas" class="col-sm-2 col-form-label">Bahan Bakar</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='gas' value="{{  Session::get('gas') }}" id="gas">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="capacity" class="col-sm-2 col-form-label">Kapasitas</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='capacity' value="{{  Session::get('capacity') }}" id="capacity">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="price_per_day" class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='price_per_day' value="{{  Session::get('price_per_day') }}" id="price_per_day">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="submit" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
        </div>
    </div>
</form>
<!-- AKHIR FORM -->
@endsection

