@extends('layouts.app')
@section('content')
    <div class="container p-3 rounded" style="background-color:white;">
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col-3 ">
                    <img src="{{url('assets/foto/1.jpg')}}" alt="" style="width:250px;">
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <h4>Oppo F1 pro</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h4>IDR. 2.500.000</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div>
                        </div>
                        <div class="row">
                            <button class="btn btn-primary col-5">Tambahkan Barang</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection