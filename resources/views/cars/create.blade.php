@extends('layout.layout')

@section('konten')  

<!-- START FORM -->
<form action='' method='post'>
    @csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="mb-3 row">
            <label for="number" class="col-sm-2 col-form-label">Nomor Plat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='number' id="number">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="brand" class="col-sm-2 col-form-label">Brand</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='brand' id="brand">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="type" class="col-sm-2 col-form-label">Tipe</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='type' id="type">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="gas" class="col-sm-2 col-form-label">Bahan Bakar</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='gas' id="gas">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="capacity" class="col-sm-2 col-form-label">Kapasitas</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='capacity' id="capacity">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="price_per_day" class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='price_per_day' id="price_per_day">
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

