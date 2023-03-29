@extends('partials.asesor.header')
@section('content')
    <div class="page-inner mt--5">
        <div class="row row-card-no-pd mt--3">
            <div class="table-responsive p-0 container-fluid" style="margin-right: 1cm; margin-left: 1cm; margin-top: 1cm">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    Tambah Data
                </button><br><br>
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Nama Sertifikasi</th>
                            <th>Prodi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <?php $i = 1; ?>
                    <tbody>
                        @foreach ($skema as $data)
                            <tr>
                                <td>{{ $i++ }}</td>
                                </td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->prodi->namaProdi }}</td>
                                <td>
                                    <a href="#" data-toggle="modal" data-target="#modalUpdate{{ $data->id }}" class="btn btn-info"><i
                                            class="fas fa-edit"></i></a>
                                    <a href="" class="btn btn-danger"><i class="fas fa-trash"></i></a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Nomor</th>
                            <th>Nama Sertifikasi</th>
                            <th>Prodi</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Tambah Skema Sertifikasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/simpan-skema-sertifikasi" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Sertifikasi</label>
                            <input type="text" class="form-control input-solid" name="nama" id="solidInput"
                                placeholder="Masukkan Nama Sertifikasi">
                        </div>
                        <div class="form-group">
                            <label for="">Prodi</label>
                            <select class="form-control input-solid" name="prodi" id="solidSelect">
                                @foreach ($prodi as $data)
                                    <option value="{{ $data->id }}">{{ $data->namaProdi }}</option>
                                @endforeach
                            </select>
                        </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" value="Simpan" class="btn btn-primary"></input>
                </div>
                </form>
            </div>
        </div>
    </div>

    {{-- modal update --}}
    @foreach ($skema as $data)
        <div class="modal fade" id="modalUpdate{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Ubah Skema Sertifikasi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/update-skema-sertifikasi" method="post">
                            @csrf
                            <input type="hidden" name="id" id="" value="{{ $data->id }}">
                            <div class="form-group">
                                <label for="">Nama Sertifikasi</label>
                                <input type="text" class="form-control input-solid" name="nama" id="solidInput"
                                    value="{{ $data->nama }}">
                            </div>
                            <div class="form-group">
                                <label for="">Prodi</label>
                                <select class="form-control input-solid" name="prodi" id="solidSelect">
                                    <option value="" selected>{{ $data->prodi->namaProdi }}</option>
                                    <option value="" disabled>------</option>
                                    @foreach ($prodi as $data)
                                        <option value="{{ $data->id }}">{{ $data->namaProdi }}</option>
                                    @endforeach
                                </select>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" value="Simpan" class="btn btn-primary"></input>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection
