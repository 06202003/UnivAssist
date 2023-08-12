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
                    <h1 class="fw-bolder display-2">CARI INDEKOS TERDEKAT</h1>
                    <p class="lead">Kemudahan Mencari Kos-kosan Terdekat dalam Genggaman Anda. Temukan Kos-kosan Terdekat yang Memenuhi Kebutuhan Anda</p>
                    <Button class="btn-contentA " href="#">
                        <span class="btn-title text-center pt-2 fs-5 text-dark">Telusuri</span>
                        <span class="icon-arrowA">
      <svg width="66px" height="43px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="arrowA" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <path id="arrow-icon-oneA" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF"></path>
          <path id="arrow-icon-twoA" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF"></path>
          <path id="arrow-icon-threeA" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#FFFFFF"></path>
        </g>
      </svg>
    </span>
                    </Button>
                </div>
                <div class="col-md-7" style="">
                    <div class="row d-flex flex-wrap justify-content-center" >
                        <div class="col-md-6 text-center" style="margin: -2rem">
                            <img src="{{ asset('img/kos1.jpg') }}" alt="" class="blob1">
                        </div>
                        <div class="col-md-6 text-center"  style="margin: -3rem -4rem -4rem -3rem">
                            <img src="{{ asset('img/kos3.jpg') }}" alt="" class="blob2">
                        </div>
                        <div class="col-md-6 text-center" style="margin: -3rem -2rem 0rem -2rem">
                            <svg id="10015.io" viewBox="0 0 480 480" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" >
                                <defs>
                                    <clipPath id="blob">
                                        <path fill="#474bff" d="M404,294.5Q349,349,294.5,362Q240,375,179,368.5Q118,362,83,301Q48,240,101.5,197.5Q155,155,197.5,114Q240,73,309,87.5Q378,102,418.5,171Q459,240,404,294.5Z" />
                                    </clipPath>
                                </defs>
                                <image x="0" y="0" width="100%" height="100%" clip-path="url(#blob)" xlink:href="https://img.freepik.com/free-photo/bedroom-interior_1098-15128.jpg?w=996&amp;t=st=1690948624~exp=1690949224~hmac=af9449a0dea14ae86103b88759a53ef7e0e41496531a8d4d0f1cb7e4c0fab4e1" preserveAspectRatio="xMidYMid slice"></image>
                            </svg></div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container pb-5" >
            <div class="row" >
                <div class="col-md-3 rounded" style="background-color: #F9EAE1">
                    <h1 class="text-center m-3">
                        Filter
                    </h1>
                    <h4 class="ms-3">
                        Lokasi
                    </h4>
                    <div class="row ms-2">
                        <div class="col-sm-10"><input class="form-control" type="text" placeholder="Default input" aria-label="default input example"></div>
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
                            Luas Kamar
                        </h4>
                        <div class="d-flex my-3">
                            <button class="btn text-white mx-1" type="submit" style="background-color: #AA998F">5m</button>

                            <button class="btn text-white mx-1" type="submit" style="background-color: #AA998F">25m</button>
                            <button class="btn text-white mx-1" type="submit" style="background-color: #AA998F">35m</button>
                        </div>
                    </div>

                    <div class="ms-3">
                        <h4>
                            Fasilitas
                        </h4>
                        <div class="my-3">
                            <button class="btn btn-primary mx-2 my-2" type="submit" style="background-color: #AA998F">Air Conditioner</button>
                            <button class="btn btn-primary mx-2 my-2" type="submit" style="background-color: #AA998F">Kamar Mandi Dalam</button>
                            <button class="btn btn-primary mx-2 my-2" type="submit" style="background-color: #AA998F">WiFi</button>
                            <button class="btn btn-primary mx-2 my-2" type="submit" style="background-color: #AA998F">Laundry</button>
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

                    <div class="ms-3">
                        <h4>
                            Jenis Kos
                        </h4>
                        <div class="d-flex my-3">
                            <button class="btn text-white mx-2" type="submit" style="background-color: #AA998F">Pria</button>
                            <button class="btn text-white mx-2" type="submit" style="background-color: #AA998F">Wanita</button>
                            <button class="btn text-white mx-2" type="submit" style="background-color: #AA998F">Campur</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-9 text-center">
                    <div class="row ">
                        <div class="col-md-2">
                            <h3>
                                Cari Kos
                            </h3>
                        </div>
                        <div class="col-md-10 pe-5">
                            <input class="form-control" type="text" placeholder="" aria-label="default input example">
                        </div>
                    </div>
                    <div class="row d-flex flex-wrap my-4 mx-2">
                        @foreach($kosts as $kost)
                        <div class="col" >
                            <div class="card" style="background-color: #F9EAE1;width: 18rem;height:22rem">
                                <img src="{{asset('img/'.$kost->gambar)}}" class="card-img-top gambarkos" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $kost->nama }}</h5>
                                    <a href="{{route('kosdetail',['id' => $kost->id]) }}"  class="btn w-100" style="background-color: #AA998F" >     <span class="text-white">Lihat Selengkapnya</span></a>
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
