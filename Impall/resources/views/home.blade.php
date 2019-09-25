@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col">
           {{-- <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>--}}
            @if (Auth::user()->role == 2)
                {{-- alert --}}
                <p>User</p>
            @endif
            <div class="row">
                <div class="col">
                    <h2>Avatar</h2>
                </div>
            </div>
            
            <div class="row text-center border">
                <div class="col-4 border p-2">
                    <a href="/home">
                        <h4>Dashboard</h4>
                    </a>
                </div>
                <div class="col-4 border p-2">
                    <a href="/home/edit">
                            <h4>Biodata Diri</h4>
                    </a>
                </div>
                <div class="col-4 border p-2">
                    <a href="/home/lihatservice">
                            <h4>Service</h4>
                    </a>
                </div>
            </div>
            
            <div class="row border p-5">
                <div class="col-5">
                    <img src="{{url('assets/foto/1.jpg')}}" alt="" class="w-100">
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <h3>Informasi Akun</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="row">
                                <div class="col my-2">
                                    <h5>Nama            :</h4>
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col">
                                    <h5>alamat          :</h4>
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col">
                                    <h5>jenis kelamin   :</h4>
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col">
                                    <h5>Umur            :</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row my-2">
                                <div class="col">
                                    <h5>{{Auth::user()->name}}</h5>
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col">
                                    <h5>{{Auth::user()->alamat}}</h5>
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col">
                                    <h5>{{Auth::user()->jeniskelamin}}</h5>
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col">
                                    <h5>{{Auth::user()->umur}}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


