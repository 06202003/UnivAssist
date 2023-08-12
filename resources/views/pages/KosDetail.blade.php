@extends('layouts.master')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Starter</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Starter</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">

            <section>
                <div class="container">
                    <div class="row d-flex flex-wrap my-4 mx-2 justify-content-center">

                        @foreach($kosts as $kost)
                            <div class="col-md-4" >
                                <div class="card" style="background-color: #F9EAE1;width: 25rem;height:auto">
                                    <img src="{{asset('img/'.$kost->gambar)}}" class="w-100" alt="...">
                                    <div class="card-body">
                                        <h1>Kamar {{ $kost->nama }}</h1>
                                        <h3>Luas Kamar {{ $kost->ukuran_kamar }}</h3>
                                        <h5>Tersisa {{ $kost->jumlah }} kamar</h5>
                                        <h5>{{ $kost->Keterangan }}</h5>
                                        <h2><b>Rp {{ $kost->harga }}/bulan</b></h2>
                                        <a href="{{ route('addKostKeranjang',['id' => $kost->id])}}" class="btn w-100" style="background-color: #AA998F">+ Keranjang</a>
                                        {{--                                        <button type="button" class="btn w-100" style="background-color: #AA998F" >     <span class="text-white">+ Keranjang</span></button>--}}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

            </section>

        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
