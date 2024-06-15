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
                            <h1 data-aos="fade-up" data-aos-delay="">Buat Pengaduan</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mb-5 d-flex justify-content-center">
            <div class="col-md-12 p-4">
                <div class="card"style="background: #e4e4e4">
                    <form action="{{ route('pengaduans.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Judul*</label>
                                        <input type="text"
                                            class="form-control border border-dark rounded-lg @error('deskripsi') ? is-invalid @enderror"
                                            name="judul">
                                        @error('deskripsi')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Tulis Pengaduan*</label>
                                        <textarea name="deskripsi" class="form-control border border-dark rounded-lg @error('deskripsi') ? is-invalid @enderror"
                                            rows="10" style="width: 100%" required></textarea>
                                        @error('deskripsi')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Lokasi*</label>
                                        <textarea name="lokasi" class="form-control border border-dark rounded-lg @error('lokasi') ? is-invalid @enderror"
                                            rows="3" style="width: 100%" required></textarea>
                                        @error('lokasi')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Tingakt Urgensi*</label>
                                        <select name="tingat_urgensi" class="form-control border border-dark rounded-lg" required>
                                            <option value="{{ null }}" disabled selected>-- PILIH Tingkat Urgensi</option>
                                            <option value="penting">Penting</option>
                                        </select>
                                        @error('tingkat_urgensi')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                        <label>Kategori Pengaduan*</label>
                                        <select name="kategori" class="form-control border border-dark rounded-lg" required>
                                            <option value="{{ null }}" disabled selected>-- PILIH --
                                            </option>
                                            @foreach ($kategoris as $kategori)
                                                <option value="{{ $kategori->id }}">{{ $kategori->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('kategori')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Image*</label>
                                        <input type="file" class="form-control border border-dark rounded-lg"
                                            name="image" required>
                                        @error('image')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-4">
                                    <button class="btn btn-primary" type="submit">
                                        <span class="fa fa-paper-plane"></span>
                                        Buat Pengaduan
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
