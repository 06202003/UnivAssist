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

                        @foreach($books as $book)
                            <div class="col-md-4" >
                                <div class="card" style="background-color: #F9EAE1;width: 25rem;height:auto">
                                    <img class="mx-auto" src="{{asset('img/'.$book->gambar)}}" style="width: 15rem;height: 20rem" alt="...">
                                    <div class="card-body">
                                        <h2> {{ $book->nama }}</h2>
                                        <h4>{{ $book->ISBN }}</h4>
                                        <h5>Tersisa {{ $book->jumlah }} buku</h5>
                                        <h5>Bahasa {{ $book->bahasa }}</h5>
                                        <h5>{{ $book->tahun }}</h5>
                                        <h5>{{ $book->pengarang }}</h5>
                                        <h5>{{ $book->halaman }} halaman</h5>
                                        <h3><b>Rp {{ $book->harga }}/bulan</b></h3>
                                        <a href="{{ route('addKostKeranjang',['id' => $book->id])}}" class="btn w-100" style="background-color: #AA998F">+ Keranjang</a>
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
