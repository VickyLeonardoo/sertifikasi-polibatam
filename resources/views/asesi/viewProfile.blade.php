@extends('partials.asesi.header')
@section('content')
<div class="page-inner mt--5">
    <div class="row row-card-no-pd mt--3">
        <div class="p-0 container-fluid" style="margin-right: 1cm; margin-left: 1cm; margin-top: 1cm">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group" style="margin-top: -1cm">
                        <label for="">Nim:</label>
                        <input type="text" readonly value="{{ $profile->nim }}" id="textfield" class="form-control">
                    </div>
                </div>
                <div class="col-md-6" style="margin-top: -1cm">
                    <div class="form-group">
                        <label for="">Nama:</label>
                        <input type="text" readonly value="{{ $profile->nama }}" id="textfield"  class="form-control">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group" >
                        <label for="">Prodi:</label>
                        <input type="text" readonly value="{{ $profile->prodi }}" id="textfield" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group" >
                        <label for="">Kelas:</label>
                        <input type="text" readonly value="{{ $profile->angkatan }}" id="textfield" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group" >
                        <label for="">Kelas:</label>
                        <input type="text" readonly value="{{ $profile->kelas }}" id="textfield" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group" >
                        <label for="">Email:</label>
                        <input type="text" readonly value="{{ $profile->email }}" id="textfield" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group" >
                        <label for="">Alamat:</label>
                        <input type="text" readonly value="{{ $profile->alamat }}" id="textfield" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <a href="#" onclick="javascript:window.history.back(-1);return false;" class="btn btn-info form-control">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection
