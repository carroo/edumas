@extends('landingpage.layouts.master')
@section('content')
    <div class="hero-section inner-page">
        <div class="wave">
            <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
                        <path
                            d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z"
                            id="Path"></path>
                    </g>
                </g>
            </svg>
        </div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="row justify-content-center">
                        <div class="col-md-7 text-center hero-text">
                            <h1 data-aos="fade-up" data-aos-delay="">Pengaduan</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-section">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="input-group col-md-5">
                    <input type="text" class="form-control search-input" placeholder="Cari">
                    <div class="input-group-append">
                        <button class="btn  search-icon border" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-6">
                    <div class="row">
                        @foreach ($data as $item)
                            <div class="col-md-12 mb-3">
                                <a href="{{ route('detail') }}">
                                    <div class="card">
                                        <img src="{{ asset('foto/1.jpeg') }}" class="card-img-top" alt="Pollution">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <h5 class="card-title">Polusi</h5>
                                                <small class="text-muted">{{ $item->lokasi }},
                                                    {{ date('M d, Y', strtotime($item->tgl)) }}</small>
                                            </div>
                                            <p class="card-text">{{ $item->deskripsi }}</p>
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <span class="badge badge-danger">Penting dan Mendesak</span>
                                                    <span class="badge badge-success">Lingkungan</span>
                                                </div>
                                                <span class="badge badge-warning text-white">Diproses</span>
                                            </div>
                                        </div>
                                        <div class="card-footer text-muted d-flex justify-content-between">
                                            <div class="mx-2">
                                                <i class="fa fa-arrow-up"></i> 30 Mendukung
                                            </div>
                                            <div class="mx-2">
                                                <i class="fa fa-arrow-down"></i> 30 Menolak
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <div class="row">
                        <h4>Pengaduan teratas</h4>
                    </div>
                    @foreach ($data as $key => $item)
                        <div class="row d-flex mb-1">
                            <div class="col-1">
                                {{ $key + 1 }}
                            </div>
                            <div class="col-5">
                                <img src="{{ asset('foto/1.jpeg') }}" class="img-fluid" height="100px" width="240px"
                                    alt="Pollution">
                            </div>
                            <div class="col-6">
                                <h5>Polusi</h5>
                                <p class="small">{{ Str::limit($item->deskripsi, 50) }}</p>
                                <p class="small">{{ $item->lokasi }}, {{ date('M d, Y', strtotime($item->tgl)) }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>

    @if ($data->hasPages())
        {{ $data->links() }}
    @endif
@endsection
