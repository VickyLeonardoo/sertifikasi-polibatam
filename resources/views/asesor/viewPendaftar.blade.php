@extends('partials.asesor.header')
@section('content')
    <div class="page-inner mt--5">
        <div class="row row-card-no-pd mt--3">
            <div class="table-responsive p-0 container-fluid" style="margin-right: 1cm; margin-left: 1cm; margin-top: 1cm">
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>NAMA</th>
                            <th>Tujuan</th>
                            <th>Skema</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <?php $i = 1; ?>
                    <tbody>
                        @foreach ($apl as $data)
                        <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $data->user->nama}}</td>
                                <td>{{ $data->user->apl1->tujuanAsesmen }}</td>
                                <td>{{ $data->user->apl1->skema->nama }}</td>
                                <td>
                                    <a href="/dashboard-asesor/periksa-apl-dua/{{ $data->user->slug }}" class="btn btn-primary">Periksa APL 02</a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Nomor</th>
                            <th>NAMA</th>
                            <th>Tujuan</th>
                            <th>Skema</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

    {{-- modal acc --}}
    @foreach ($apl as $data)
    <div class="modal fade" id="modalConfirm{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h5 class="modal-title" id="exampleModalLongTitle">{{ $data->user->nama }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/dashboard-asesor/verifikasi-pendaftar-sertifikasi" method="post">
                        @csrf
                        <input type="hidden" name="verif" value="acc">
                        <input type="hidden" name="idPendaftar" value="{{ $data->id }}">
                        <h3>Konfirmasi Peserta Sertifikasi?  {{ $data->nama }}</h1>
                </div>
                <div class="modal-footer">
                    <input type="submit" value="Konfirmasi" class="btn btn-success"></input>
                </div>
                </form>
            </div>
        </div>
    </div>
@endforeach

    {{-- modal tolak --}}
    @foreach ($apl as $data)
    <div class="modal fade" id="modalUn{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title" id="exampleModalLongTitle">{{ $data->user->nama }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/dashboard-asesor/verifikasi-pendaftar-sertifikasi" method="post">
                        @csrf
                        <input type="hidden" name="verif" value="tolak">
                        <input type="hidden" name="idPendaftar" value="{{ $data->id }}">
                        <h3>Tolak Pendaftaran Peserta Sertifikasi?</h1>
                </div>
                <div class="modal-footer">
                    <input type="submit" value="Konfirmasi" class="btn btn-danger"></input>
                </div>
                </form>
            </div>
        </div>
    </div>
@endforeach

@endsection
