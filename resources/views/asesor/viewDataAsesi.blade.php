@extends('partials.asesor.header')
@section('content')
<div class="page-inner mt--5">
    <div class="row row-card-no-pd mt--3">
        <div class="table-responsive p-0 container-fluid" style="margin-right: 1cm; margin-left: 1cm; margin-top: 1cm">
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Prodi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <?php $i = 1; ?>
                <tbody>
                    @foreach ($asesi as $data)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $data->nim }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->prodi }}</td>
                        <td>
                            <a href="" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Nomor</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Prodi</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
@endsection
