@extends('back.layout.auth-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Rekap Akademik Wikrama')
@section('content')
    
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
{{-- <div class="mt-3 d-flex justify-content-center">
    <h2><i class="bi bi-trophy"></i>Tambah Code Pelangaran Siswa</h2>
</div> --}}

@if (Session::get('errors'))
<p style="color: red">{{Session::get('errors')}}</p>
@endif

<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-7">
                <img src="/back/vendors/images/login-page-img.png" alt="" />
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="login-box bg-white box-shadow border-radius-10">
                    <div class="login-title">
                        <h2 class="text-center text-primary">Login</h2>
                    </div>
                    <form action="{{ route('login.auth') }}" method="POST">
                        @csrf
                        {{-- <div class="select-role">
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn active">
                                    <input type="radio" name="options" id="admin" />
                                    <div class="icon">
                                        <img
                                            src="/back/vendors/images/briefcase.svg"
                                            class="svg"
                                            alt=""
                                        />
                                    </div>
                                    <span>I'm</span>
                                    Teacher
                                </label>
                                <label class="btn">
                                    <input type="radio" name="options" id="user" />
                                    <div class="icon">
                                        <img
                                            src="/back/vendors/images/person.svg"
                                            class="svg"
                                            alt=""
                                        />
                                    </div>
                                    <span>I'm</span>
                                    Student
                                </label>
                            </div>
                        </div> --}}
                        <div class="input-group custom">
                            <input
                                type="text"
                                class="form-control form-control-lg"
                                placeholder="Name"
                                name="nama"
                                id="nama" 
                            />
                            <div class="input-group-append custom">
                                <span class="input-group-text"
                                    ><i class="icon-copy dw dw-user1"></i
                                ></span>
                            </div>
                        </div>
                        <div class="input-group custom">
                            <input
                                type="NIS"
                                class="form-control form-control-lg"
                                placeholder="Password"
                                name="password"
                                id="password" 
                            />
                            <div class="input-group-append custom">
                                <span class="input-group-text"
                                    ><i class="dw dw-padlock1"></i
                                ></span>
                            </div>
                        </div>
                        <div class="row pb-30">
                            <div class="col-6">
                                <div class="custom-control custom-checkbox">
                                    <input
                                        type="checkbox"
                                        class="custom-control-input"
                                        id="customCheck1"
                                    />
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="input-group mb-0">
                                <button type="submit" class="btn btn-primary w-100">Submit</button>
                                </div>                                
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection