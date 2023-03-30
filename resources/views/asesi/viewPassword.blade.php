@extends('partials.asesi.header')
@section('content')
    <div class="page-inner mt--5">
        <div class="row row-card-no-pd mt--3">
            <div class="p-0 container-fluid" style="margin-right: 1cm; margin-left: 1cm; margin-top: 1cm">
                <form action="/dashboard-asesi/simpan-password" method="POST">
                    @csrf
                    <div class="form-group" style="margin-top: -1cm">
                        <label for="">Current Password:</label>
                        <input type="password" name="old_password" autocomplete="off"  value=""  class="form-control" placeholder="Masukkan Password Lama...">
                        <div class="text-danger">
                            @error('password_old')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">New Password:</label>
                        <input type="password" name="password" autocomplete="off" value=""  class="form-control" placeholder="Masukkan Password Baru..">
                        <div class="text-danger">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Password Confirmation:</label>
                        <input type="password" name="password_confirmation" autocomplete="off" value=""  class="form-control" placeholder="Konfirmasi Password Baru...">
                        <div class="text-danger">
                            @error('password_confirmation')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                       <input type="submit" value="simpan" class="btn btn-info form-control">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
