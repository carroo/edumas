@extends('landingpage.layouts.master')
@section('content')
    <div class="hero-section">
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
                <div class="col-12 hero-text-image">
                    <div class="row">
                        <div class="col-lg-7 text-center text-lg-left">
                            <h1 data-aos="fade-right">
                                Layanan Pengaduan Masyarakat Online
                            </h1>
                            <p class="mb-5" data-aos="fade-right" data-aos-delay="100">
                                Sampaikan laporan masalah anda di sini, kami akan memprosesnya dengan cepat.
                            </p>
                            <p data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500">
                                <a href="{{ route('login') }}" class="btn btn-outline-white">Laporkan !</a>
                            </p>
                        </div>
                        <div class="col-lg-5 iphone-wrap">
                            <img src="{{ asset('assets/img/vektor1.png') }}" alt="Image" class="phone-1"
                                data-aos="fade-right" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">

            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-5 aos-init aos-animate" data-aos="fade-up">
                    <h2 class="section-heading">Tata Cara</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="">
                    <div class="feature-1 text-center">
                        <div class="wrap-icon icon-1">
                            <i class="icon las la-pen-alt"></i>
                        </div>
                        <h3 class="mb-3">1. Tuliskan Laporan</h3>
                        <p>Tuliskan laporan keluhan anda dengan jelas.</p>
                    </div>
                </div>
                <div class="col-md-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-1 text-center">
                        <div class="wrap-icon icon-1">
                            <i class="icon las la-recycle"></i>
                        </div>
                        <h3 class="mb-3">2. Proses Verifikasi</h3>
                        <p>Tunggu sampai laporan anda terverifikasi.</p>
                    </div>
                </div>
                <div class="col-md-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-1 text-center">
                        <div class="wrap-icon icon-1">
                            <i class="icon las la-tools"></i>
                        </div>
                        <h3 class="mb-3">3. Tindak Lanjut</h3>
                        <p>Laporan anda sedang dalam tindak lanjut.</p>
                    </div>
                </div>
                <div class="col-md-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-1 text-center">
                        <div class="wrap-icon icon-1">
                            <i class="icon la la-check"></i>
                        </div>
                        <h3 class="mb-3">4. Selesai</h3>
                        <p>Laporan pengaduan telah selesai ditindak.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-section">
        <div class="container">
            <div class="row justify-content-center text-center mb-3">
                <div class="col-md-5 aos-init aos-animate" data-aos="fade-up">
                    <h2 class="section-heading">Pengaduan Teratas</h2>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-md-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="">
                    <div class="card">
                        <img src="{{ asset('foto/1.jpeg') }}" class="card-img-top" alt="Pollution">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h5 class="card-title">Polusi</h5>
                                <small class="text-muted">Indramayu, 25 Juni 2024</small>
                            </div>
                            <p class="card-text">Terdapat Polusi udara hasil pembakaran yang sangat menganggu</p>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <span class="badge badge-danger">Penting dan Mendesak</span>
                                    <span class="badge badge-success">Lingkungan</span>
                                </div>
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
                </div>
                <div class="col-md-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="">
                    <div class="card">
                        <img src="{{ asset('foto/1.jpeg') }}" class="card-img-top" alt="Pollution">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h5 class="card-title">Polusi</h5>
                                <small class="text-muted">Indramayu, 25 Juni 2024</small>
                            </div>
                            <p class="card-text">Terdapat Polusi udara hasil pembakaran yang sangat menganggu</p>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <span class="badge badge-danger">Penting dan Mendesak</span>
                                    <span class="badge badge-success">Lingkungan</span>
                                </div>
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
                </div>
                <div class="col-md-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="">
                    <div class="card">
                        <img src="{{ asset('foto/1.jpeg') }}" class="card-img-top" alt="Pollution">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h5 class="card-title">Polusi</h5>
                                <small class="text-muted">Indramayu, 25 Juni 2024</small>
                            </div>
                            <p class="card-text">Terdapat Polusi udara hasil pembakaran yang sangat menganggu</p>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <span class="badge badge-danger">Penting dan Mendesak</span>
                                    <span class="badge badge-success">Lingkungan</span>
                                </div>
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
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <button class="btn btn-secondary text-center w-100">Lihat Semua Pengaduan</button>
                </div>
            </div>
        </div>
    </div>
    <div class="site-section">
        <div class="container">

            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-5 aos-init aos-animate" data-aos="fade-up">
                    <h2 class="section-heading">Kontak Kami</h2>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-8 p-5" style="background: #e7e7e7">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row justify-content-center">
                            <div class="col-md-6 form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="name"
                                    data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="name">Email</label>
                                <input type="email" class="form-control" name="email" id="email"
                                    data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="name">Subject</label>
                                <input type="text" class="form-control" name="subject" id="subject"
                                    data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="name">Message</label>
                                <textarea class="form-control" name="message" cols="30" rows="10" data-rule="required"
                                    data-msg="Please write something for us"></textarea>
                                <div class="validate"></div>
                            </div>


                            <div class="col-md-12 mb-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>

                            <div class="col-md-6 form-group">
                                <input type="submit" class="btn btn-primary d-block w-100" value="Send Message">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- .site-section -->
@endsection
