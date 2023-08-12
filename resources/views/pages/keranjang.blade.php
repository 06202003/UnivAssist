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

    <style>
        body{
            background:#eee;
        }
        .card {
            box-shadow: 0 20px 27px 0 rgb(0 0 0 / 5%);
        }
        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid rgba(0,0,0,.125);
            border-radius: 1rem;
        }
        .text-reset {
            --bs-text-opacity: 1;
            color: inherit!important;
        }
        a {
            color: #5465ff;
            text-decoration: none;
        }
    </style>
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">

            {{-- main content here --}}
            <div class="container-fluid">

                <div class="container">
                    <!-- Title -->
                    <div class="d-flex justify-content-between align-items-center py-3">
                        <h2 class="h5 mb-0"><a href="#" class="text-muted"></a> Order #0001</h2>
                    </div>

                    <!-- Main content -->
                    <div class="row">
                        <div class="col-lg-8">
                            <!-- Details -->
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="mb-3 d-flex justify-content-between">
                                        <div>
                                            <span class="me-3">02-08-2023</span>
                                            <span class="me-3">#0001</span>
                                            <span class="me-3">Visa -1234</span>
                                            <span class="badge rounded-pill bg-info">SHIPPING</span>
                                        </div>
                                        <div class="d-flex">
                                            <button class="btn btn-link p-0 me-3 d-none d-lg-block btn-icon-text"><i class="bi bi-download"></i> <span class="text">Invoice</span></button>
                                            <div class="dropdown">
                                                <button class="btn btn-link p-0 text-muted" type="button" data-bs-toggle="dropdown">
                                                    <i class="bi bi-three-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="#"><i class="bi bi-pencil"></i> Edit</a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="bi bi-printer"></i> Print</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="table table-borderless">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex mb-2">
                                                    <div class="flex-shrink-0">
                                                        <img src="{{ asset('img/acer.jpeg') }}" alt="" width="35" class="img-fluid">
                                                    </div>
                                                    <div class="flex-lg-grow-1 ms-3">
                                                        <h6 class="small mb-0"><a href="#" class="text-reset">Laptop Lenovo Ideapad Gaming 3i</a></h6>
                                                        <span class="small">Color: Blue</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>1</td>
                                            <td class="text-end">Rp. 250.000</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex mb-2">
                                                    <div class="flex-shrink-0">
                                                        <img src="{{ asset('img/senior.jpeg') }}" alt="" width="35" class="img-fluid">
                                                    </div>
                                                    <div class="flex-lg-grow-1 ms-3">
                                                        <h6 class="small mb-0"><a href="#" class="text-reset">Senior</a></h6>
                                                        <span class="small">Kata Kokoh</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>1</td>
                                            <td class="text-end">Rp. 25.000</td>
                                        </tr>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <td colspan="2">Subtotal</td>
                                            <td class="text-end">Rp. 700.000</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Shipping</td>
                                            <td class="text-end">Rp. 20.000</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Discount (Code: NEWYEAR)</td>
                                            <td class="text-danger text-end">-Rp. 10.000</td>
                                        </tr>
                                        <tr class="fw-bold">
                                            <td colspan="2">TOTAL</td>
                                            <td class="text-end">Rp. 710.000</td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <!-- Payment -->
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h3 class="h6">Metode Pembayaran</h3>
                                            <p>OVO +62 895-****-**37 <br>
                                                Total: Rp. 710.000 <span class="badge bg-success rounded-pill">PAID</span></p>
                                        </div>
                                        <div class="col-lg-6">
                                            <h3 class="h6">Alamat Pengirim</h3>
                                            <address>
                                                Jl. Babakan Jeruk Indah No 11<br>
                                                Bandung, Indonesia 41261<br>
                                                <abbr title="Phone">P:</abbr> (123) 456-7890
                                            </address>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <!-- Customer Notes -->
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h3 class="h6">Catatan</h3>
                                    <textarea class="w-100">

                                </textarea>
                                </div>
                            </div>
                            <div class="card mb-4">
                                <!-- Shipping information -->
                                <div class="card-body">
                                    <h3 class="h6">Informasi Pengiriman</h3>
                                    <strong>J&T</strong>
                                    <span><a href="#" class="text-decoration-underline" target="_blank">FF1234567890</a> <i class="bi bi-box-arrow-up-right"></i> </span>
                                    <hr>
                                    <h3 class="h6">Alamat</h3>
                                    <address>
                                        <strong>Arthurito</strong><br>
                                        Jl. Babakan Jeruk Indah No 10<br>
                                        Bandung, Indonesia 41261<br>
                                        <abbr title="Phone">P:</abbr> (123) 456-7890
                                    </address>
                                </div>
                            </div>

                            <style>
                                button {
                                    font-family: inherit;
                                    font-size: 20px;
                                    background: #AA998F;
                                    color: white;
                                    padding: 0.7em 1em;
                                    padding-left: 0.9em;
                                    display: flex;
                                    align-items: center;
                                    border: none;
                                    border-radius: 16px;
                                    overflow: hidden;
                                    transition: all 0.2s;
                                }

                                button span {
                                    display: block;
                                    margin-left: 0.3em;
                                    transition: all 0.3s ease-in-out;
                                }

                                button svg {
                                    display: block;
                                    transform-origin: center center;
                                    transition: transform 0.3s ease-in-out;
                                }

                                button:hover .svg-wrapper {
                                    animation: fly-1 0.6s ease-in-out infinite alternate;
                                }

                                button:hover svg {
                                    transform: translateX(1.2em) rotate(45deg) scale(1.1);
                                }

                                button:hover span {
                                    transform: translateX(5em);
                                }

                                button:active {
                                    transform: scale(0.95);
                                }

                                @keyframes fly-1 {
                                    from {
                                        transform: translateY(0.1em);
                                    }

                                    to {
                                        transform: translateY(-0.1em);
                                    }
                                }


                            </style>
                            <button class="ms-auto"  type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                <div class="svg-wrapper-1 ">
                                    <div class="svg-wrapper">
                                        <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z" fill="currentColor"></path>
                                        </svg>
                                    </div>
                                </div>
                                <span>Send</span>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title text-center" id="exampleModalLabel">Terimakasih</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h6 class="text-center">Pembayaran Anda Telah Kami Terima, Mohon Tunggu Konfirmasi Pemilik.</h6>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            {{--                                        <button type="button" class="btn btn-primary">Save changes</button>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
