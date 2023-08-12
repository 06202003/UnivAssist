@extends('layouts.master')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Cari Indekos</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Cari Indekos</a></li>
                        {{--					<li class="breadcrumb-item active">Starter</li>--}}
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">

            {{-- main content here --}}
            {{--        <div class="p-3 mb-2 bg-primary text-white">.bg-primary</div>--}}
            <div class="container my-5" >
                <div class="row d-flex justify-content-center " style="min-height: 50vh" >
                    <div class="col-md-5 justify-content-center align-content-center  my-auto" >
                        <h1 class="fw-bolder display-2">SEWA BUKU TERDEKAT</h1>
                        <p class="lead">Kemudahan Menyewa laptop Terdekat dalam Genggaman Anda. Temukan laptop Terdekat yang Memenuhi Kebutuhan Anda</p>
                        <a class="btn btn-lg w-75" href="#" role="button" style="background-color: #AA998F">Telusuri</a>
                    </div>
                    <div class="col-md-7" style="">
                        <div class="row d-flex flex-wrap justify-content-center" >
                            <div class="col-md-6 text-center" style="margin: 0rem">
                                <img src="{{ asset('img/book1.jpg') }}" alt="" class="blob1">
                            </div>
                            <div class="col-md-6 text-center"  style="margin: -3rem -4rem -2rem 0rem">
                                <img src="{{ asset('img/book2.jpg') }}" alt="" class="blob2">
                            </div>
                            <div class="col-md-6 text-center" style="margin: -3rem -2rem 0rem -4rem">
                                <svg id="10015.io" viewBox="0 0 480 480" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" >
                                    <defs>
                                        <clipPath id="blob">
                                            <path fill="#474bff" d="M399.5,292.5Q365,345,320,391.5Q275,438,208,424.5Q141,411,82,365Q23,319,56,252Q89,185,128.5,150Q168,115,224,65Q280,15,349,52.5Q418,90,426,165Q434,240,399.5,292.5Z" />
                                        </clipPath>
                                    </defs>
                                    <image x="0" y="0" width="100%" height="100%" clip-path="url(#blob)" xlink:href="https://img.freepik.com/free-photo/people-library-reading-books_23-2150293533.jpg?w=996&amp;t=st=1690971446~exp=1690972046~hmac=97ec075c4f243d678d800de6e494a253734eafb4920c5e3e2a7ff7e4bd186f1f" preserveAspectRatio="xMidYMid slice"></image>
                                </svg>

                                {{--                                <svg id="10015.io" viewBox="0 0 480 480" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" >--}}
                                {{--                                    <defs>--}}
                                {{--                                        <clipPath id="blob">--}}
                                {{--                                            <path fill="#474bff" d="M404,294.5Q349,349,294.5,362Q240,375,179,368.5Q118,362,83,301Q48,240,101.5,197.5Q155,155,197.5,114Q240,73,309,87.5Q378,102,418.5,171Q459,240,404,294.5Z" />--}}
                                {{--                                        </clipPath>--}}
                                {{--                                    </defs>--}}
                                {{--                                    <image x="0" y="0" width="100%" height="100%" clip-path="url(#blob)" xlink:href="https://img.freepik.com/free-photo/bedroom-interior_1098-15128.jpg?w=996&amp;t=st=1690948624~exp=1690949224~hmac=af9449a0dea14ae86103b88759a53ef7e0e41496531a8d4d0f1cb7e4c0fab4e1" preserveAspectRatio="xMidYMid slice"></image>--}}
                                {{--                                </svg>--}}
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="container pb-5" >
                <div class="row" >
                    <div class="col-md-3 rounded" style="background-color: #F9EAE1; border: 3px solid #AA998F;" >
                        <h1 class="text-center m-3">
                            Filter
                        </h1>
                        <h4 class="ms-3">
                            Lokasi
                        </h4>
                        <div class="row ms-2">
                            <div class="col-sm-10"><input class="form-control" type="text" placeholder="Cari Lokasi" aria-label="default input example"></div>
                            <div class="col-sm-2">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </div>
                            <div class="d-flex my-3">
                                <button class="btn me-2 text-white" type="submit"  style="background-color: #AA998F">Bandung</button>
                                <button class="btn me-2 text-white" type="submit"  style="background-color: #AA998F">Jakarta</button>
                                <button class="btn me-2 text-white" type="submit"  style="background-color: #AA998F">Cimahi</button>

                            </div>
                        </div>
                        <h4 class="ms-3">
                            Harga
                        </h4>
                        <div class="d-flex ms-3 my-1">
                            <h5 class="mx-3">Rp. </h5>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle text-white" type="button" data-bs-toggle="dropdown" aria-expanded="false"  style="background-color: #AA998F">
                                    Harga Terendah
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Rp. 500.000</a></li>
                                    <li><a class="dropdown-item" href="#">Rp. 700.000</a></li>
                                    <li><a class="dropdown-item" href="#">Rp. 900.000</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="d-flex ms-3">
                            <h5 class="mx-3">Rp. </h5>
                            <div class="dropdown text-white">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #AA998F">
                                    Harga Tertinggi
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Rp. 1.500.000</a></li>
                                    <li><a class="dropdown-item" href="#">Rp. 2.700.000</a></li>
                                    <li><a class="dropdown-item" href="#">Rp. 3.900.000</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="ms-3">
                            <h4 class=" my-3">
                                Jangka Waktu Tersedia
                            </h4>
                            <div class="d-flex my-3">
                                <button class="btn me-1 text-white" type="submit" style="background-color: #AA998F">1 Bulan</button>
                                <button class="btn mx-1 text-white" type="submit" style="background-color: #AA998F">3 Bulan</button>
                                <button class="btn mx-1 text-white" type="submit" style="background-color: #AA998F">6 Bulan</button>
                            </div>

                        </div>

                        <div class="ms-3">
                            <h4 class="my-3">
                                Kategori
                            </h4>
                            <div class="d-flex my-3">
                                <button class="btn text-white mx-1" type="submit" style="background-color: #AA998F">Kimia Dasar</button>

                                <button class="btn text-white mx-1" type="submit" style="background-color: #AA998F">DBMS</button>
                                <button class="btn text-white mx-1" type="submit" style="background-color: #AA998F">Psikologi</button>
                            </div>
                        </div>

                        <div class="ms-3">
                            <h4>
                                Bahasa
                            </h4>
                            <div class="my-3">
                                <button class="btn text-white mx-1 my-2" type="submit" style="background-color: #AA998F">Inggris</button>
                                <button class="btn text-white mx-1 my-2" type="submit" style="background-color: #AA998F">Indonesia</button>
                                <button class="btn text-white mx-1 my-2" type="submit" style="background-color: #AA998F">Mandarin</button>
                            </div>
                        </div>

                        <div class="ms-3">
                            <h4>
                                Tahun Terbit
                            </h4>
                            <div class="d-flex my-3">
                                <button class="btn text-white mx-2" type="submit" style="background-color: #AA998F"> < 2000 </button>
                                <button class="btn text-white mx-2" type="submit" style="background-color: #AA998F"> > 2000 </button>
                                <button class="btn text-white mx-2" type="submit" style="background-color: #AA998F"> > 2010 </button>
                            </div>
                        </div>

                        <div class="ms-3">
                            <h4>
                                Format Buku
                            </h4>
                            <div class="d-flex my-3">
                                <button class="btn text-white mx-2" type="submit" style="background-color: #AA998F"> Soft Cover </button>
                                <button class="btn text-white mx-2" type="submit" style="background-color: #AA998F"> Hard Cover </button>
                                <button class="btn text-white mx-2" type="submit" style="background-color: #AA998F"> E-Book </button>
                            </div>
                        </div>

                        <div class="ms-3">
                            <h4>
                                Rating
                            </h4>
                            <div class="my-3">
                                <button class="btn text-white mx-2 my-2" type="submit" style="background-color: #AA998F"><i class="fa fa-star"></i></button>
                                <button class="btn text-white mx-2 my-2" type="submit" style="background-color: #AA998F"><i class="fa fa-star" ></i><i class="fa fa-star"></i></button>
                                <button class="btn text-white mx-2 my-2" type="submit" style="background-color: #AA998F"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></button>
                                <button class="btn text-white mx-2 my-2" type="submit" style="background-color: #AA998F"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></button>
                                <button class="btn text-white mx-2 my-2" type="submit" style="background-color: #AA998F"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></button>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-9 text-center">
                        <div class="row">
                            <div class="col-md-3">
                                <h3>
                                    Cari Buku
                                </h3>
                            </div>
                            <div class="col-md-9">
                                <input class="form-control" type="text" placeholder="Cari Buku" aria-label="default input example">
                            </div>
                        </div>
                        <div class="row d-flex flex-wrap my-4 mx-2">
                            @foreach($books as $book)
                                <div class="col" >
                                    <div class="card" style="background-color: #F9EAE1;width: 18rem;height:22rem">
                                        <img src="{{asset('img/'.$book->gambar)}}" class="card-img-top gambarkos" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $book->nama }}</h5>
                                            <a href="{{route('bookdetail',['id' => $book->id]) }}"  class="btn w-100" style="background-color: #AA998F" >     <span class="text-white">Lihat Selengkapnya</span></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
            {{--        <div class="container">--}}
            {{--            <div class="row mb-4 align-items-center flex-lg-row-reverse">--}}
            {{--                <div class="col-md-6 col-xl-7 mb-4 mb-lg-0 " style="">--}}

            {{--                </div><!-- /col -->--}}
            {{--                <div class="col-md-6 col-xl-5">--}}
            {{--                    <div class="lc-block mb-3">--}}
            {{--                        <div editable="rich">--}}
            {{--                            <h1 class="fw-bolder display-2">CARI INDEKOS TERDEKAT</h1>--}}
            {{--                        </div>--}}
            {{--                    </div><!-- /lc-block -->--}}
            {{--                    <!-- /lc-block -->--}}

            {{--                    <div class="lc-block mb-4">--}}
            {{--                        <div editable="rich">--}}
            {{--                            <p class="lead">Kemudahan Mencari Kos-kosan Terdekat dalam Genggaman Anda. Temukan Kos-kosan Terdekat yang Memenuhi Kebutuhan Anda</p>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                    <div class="lc-block">--}}
            {{--                        <a class="btn btn-lg btn-primary" href="#" role="button">Get it now</a>--}}
            {{--                    </div><!-- /lc-block -->--}}
            {{--                </div><!-- /col -->--}}
            {{--            </div>--}}
            {{--        </div>--}}


        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
