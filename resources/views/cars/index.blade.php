@extends('layout.layout')
@section('konten')
    <!-- START DATA -->
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <!-- FORM PENCARIAN -->
        <div class="pb-3">
            <form class="d-flex" action="" method="get">
                <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}"
                    placeholder="Masukkan kata kunci" aria-label="Search">
                <button class="btn btn-secondary" type="submit">Cari</button>
            </form>
        </div>

        <!-- TOMBOL TAMBAH DATA -->
        <div class="pb-3">
            <a href='{{ url('cars/create') }}' class="btn btn-primary">+ Tambah Data</a>
        </div>

        <table class="table table-striped text-center">
            <thead>
                <tr>
                    <th class="col-md-1">No</th>
                    <th class="col-md-2">Nomor Plat</th>
                    <th class="col-md-1">Brand</th>
                    <th class="col-md-1">Tipe</th>
                    <th class="col-md-1">Tahun</th>
                    <th class="col-md-2">Bahan Bakar</th>
                    <th class="col-md-1">Kapasitas</th>
                    <th class="col-md-2">Harga</th>
                    <th class="col-md-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = $data->firstItem(); ?>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $item->number }}</td>
                        <td>{{ $item->brand }}</td>
                        <td>{{ $item->type }}</td>
                        <td>{{ $item->year }}</td>
                        <td>{{ $item->gas }}</td>
                        <td>{{ $item->capacity }}</td>
                        <td>{{ $item->price_per_day }}</td>
                        <td>
                            <a href='' class="btn btn-warning btn-sm">Edit</a>
                            <a href='' class="btn btn-danger btn-sm">Del</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                @endforeach
            </tbody>
        </table>
        {{ $data->links() }}

    </div>
    <!-- AKHIR DATA -->
@endsection
