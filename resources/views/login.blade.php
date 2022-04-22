@extends('layouts.login')

@section('content')
<div class="row justify-content-center">
    <div class="col-xl-5 col-sm-8">
        <div class="card">
            <div class="card-body p-4">
                <div class="p-2">
                    <h5 class="mb-3 text-center">Autentikasikan anda ke situs ini.</h5>
                    <form class="form-horizontal" action="{{ route('login.process') }}">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group mb-4">
                                    <label for="username">Nama Pengguna <strong class="text-danger">*</strong></label>
                                    <input type="text" id="username" placeholder="Masukkan NIK atau nama pengguna" name="username" class="form-control" id="username" required />
                                    <div class="form-helper text-muted">*Nama pengguna hanya untuk petugas saja.</div>
                                </div>

                                <div class="form-group mb-4">
                                    <label for="username">Kata Sandi <strong class="text-danger">*</strong></label>
                                    <input type="password" id="password" placeholder="Masukkan kata sandi" class="form-control" name="password" id="userpassword" required>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="custom-control custom-checkbox">
                                            <input name="remember" type="checkbox" class="custom-control-input" id="remember" />
                                            <label class="custom-control-label" for="remember">Remember me</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="text-md-right mt-3 mt-md-0">
                                            <a href="auth-recoverpw.html" class="text-muted"><i class="mdi mdi-lock"></i> Lupa Sandi?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Masuk</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->
@endsection