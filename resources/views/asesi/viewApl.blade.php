@extends('partials.asesi.header')
@section('content')
<div class="page-inner mt--5">
    <div class="row row-card-no-pd mt--3">
        <div class="table-responsive p-0 container-fluid" style="margin-right: 1cm; margin-left: 1cm; margin-top: 1cm">
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Nama</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <?php $i = 1; ?>
                <tbody>
                    @foreach ($apl as $data)
                    <tr>
                        <td>{{ $i++ }}</td>
                        {{-- <td>{{ $data->tujuanAsesmen }}</td>
                        <td>{{ $data->skema->nama }}</td> --}}
                        <td>{{ Auth::guard('user')->user()->nama }}</td>
                        @if ($data->status == 'Menunggu')
                            <td style="background-color: yellow">{{ $data->status }}</td>
                        @elseif($data->status == 'Lulus')
                            <td style="background-color: #EBF8A4">{{ $data->status }}</td>
                        @else
                            <td style="background-color: #F1363B">{{ $data->status }}</td>

                        @endif
                        {{-- <td>@if ($data->status == 1)
                            Pendaftaran Berhasil
                            @else
                            Menunggu Verifikasi Asesor
                        @endif</td> --}}
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Nomor</th>
                        <th>Nama</th>
                        <th>Status</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
@endsection
