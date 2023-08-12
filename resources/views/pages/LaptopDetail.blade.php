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

                        @foreach($laptops as $laptop)
                            <div class="col-md-4" >
                                <div class="card" style="background-color: #F9EAE1;width: 25rem;height:auto">
                                    <img src="{{asset('img/'.$laptop->gambar)}}" style="width: auto;height: 20rem" alt="...">
                                    <div class="card-body">
                                        <h1>{{ $laptop->nama }}</h1>
                                        <h5>Processor {{ $laptop->processor }}</h5>
                                        <h5>{{ $laptop->ram }} RAM</h5>
                                        <h5> {{ $laptop->memori }}</h5>
                                        <h2><b>Rp {{ $laptop->harga }}/bulan</b></h2>
                                        <a href="{{ route('addKostKeranjang',['id' => $laptop->id])}}" class="btn w-100" style="background-color: #AA998F">+ Keranjang</a>
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
