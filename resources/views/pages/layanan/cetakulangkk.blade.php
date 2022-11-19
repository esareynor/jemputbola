@extends('layouts/app')
@section('styles')
    <link rel="stylesheet" href="assets/vendors/iconly/bold.css">
@endsection
@section('content')
    <div class="row container m-auto">
        <div class="col-12">
            <div class="card mt-3 m-auto">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h4 class="card-title">Cetak Ulang Kartu Keluarga</h4>
                        </div>
                        <div class="col text-end">
                            <a href="{{ route('home') }}" class="btn btn-light-secondary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row container m-auto">
        <div class="col-12 col-lg-6">
            <div class="card mt-3 m-auto">
                <div class="card-body">
                    <form class="form form-horizontal">
                        @csrf
                        <div class="form-body">
                            @foreach ($biodata as $b)
                                @if ($b->id_user == Auth::user()->id)
                                    <div class="row">
                                        <div class="col-12 mb-2">
                                            <h6>Biodata Pribadi</h6>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Nama</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="hidden" id="id" class="form-control" name="id"
                                                value="{{ Auth::user()->id }}">
                                            <input type="text" id="name" readonly class="form-control"
                                                name="name" value="{{ Auth::user()->name }}" placeholder="Nama Anda">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Email</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="email" id="email" readonly class="form-control"
                                                name="email" value="{{ Auth::user()->email }}" placeholder="Email Anda">
                                        </div>
                                        <div class="col-md-4">
                                            <label>NIK</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="email" id="nik" readonly class="form-control"
                                                name="nik" value="{{ $b->nik }}" placeholder="NIK Anda">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Whatsapp</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="number" id="whatsapp" readonly class="form-control"
                                                name="whatsapp" placeholder="Contoh : 6281234567890 "
                                                value="{{ $b->whatsapp }}">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Tanggal Lahir</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="date" id="birth" readonly class="form-control"
                                                name="birth" placeholder="Tanggal Lahir Anda" value="{{ $b->birth }}">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Jenis Kelamin</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="gender" readonly class="form-control"
                                                name="gender" placeholder="Jenis Kelamin" value="{{ $b->gender }}">
                                        </div>
                                        <div class="col-12 mb-2">
                                            <h6>Alamat Pribadi</h6>
                                        </div>
                                        <div class="col-md-4">
                                            <label>No. Rukun Tetangga</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="number" id="rt" readonly class="form-control"
                                                name="rt" value="{{ $b->rt }}" placeholder="RT Anda">
                                        </div>
                                        <div class="col-md-4">
                                            <label>No. Rukun Warga</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="number" id="rw" readonly class="form-control"
                                                name="rw" value="{{ $b->rw }}" placeholder="RW Anda">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Kelurahan</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="kelurahan" readonly class="form-control"
                                                name="kelurahan" value="{{ $b->kelurahan }}" placeholder="Kelurahan Anda">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Kecamatan</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="kecamatan" readonly class="form-control"
                                                name="kecamatan" value="{{ $b->kecamatan }}"
                                                placeholder="Kecamatan Anda">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Alamat Lengkap</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <textarea id="alamat" class="form-control" readonly name="alamat">{{ $b->full_address }}</textarea>
                                        </div>
                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <a href="{{ route('biodata') }}" class="btn btn-warning me-1 mb-1">Edit
                                                Biodata</a>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <div class="card mt-3 m-auto">
                <div class="card-body">
                    <form class="form form-horizontal" method="POST"
                        action="{{ route('pendaftaran-penduduk.cetak-ulang-kk.add') }}">
                        @csrf
                        <div class="form-body">
                            @foreach ($biodata as $b)
                                @if ($b->id_user == Auth::user()->id)
                                    <div class="row">
                                        <div class="col-12 mb-2">
                                            <h4>Validasi Data</h4>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Kartu Keluarga</label>
                                        </div>
                                        <input type="hidden" id="id" readonly class="form-control"
                                            name="id" value="{{ Auth::user()->id }}">
                                        @foreach ($master_menu as $mm)
                                            <input type="hidden" id="mastermenu" readonly class="form-control"
                                                name="mastermenu" value="{{ $mm->id }}">
                                        @endforeach
                                        @foreach ($master_layanan as $ml)
                                            <input type="hidden" id="masterlayanan" readonly class="form-control"
                                                name="masterlayanan" value="{{ $ml->id }}">
                                        @endforeach
                                        <div class="col-md-8 form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" value="1" type="radio"
                                                    name="data[kartukeluarga]" id="kartukeluarga1" checked>
                                                <label class="form-check-label" for="kartukeluarga1">
                                                    Ada
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" value="0" type="radio"
                                                    name="data[kartukeluarga]" id="kartukeluarga2">
                                                <label class="form-check-label" for="kartukeluarga2">
                                                    Tidak Ada
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Buku Nikah</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" value="1" type="radio"
                                                    name="data[bukunikah]" id="bukunikah1" checked>
                                                <label class="form-check-label" for="bukunikah1">
                                                    Ada
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" value="0" type="radio"
                                                    name="data[bukunikah]" id="bukunikah2">
                                                <label class="form-check-label" for="bukunikah2">
                                                    Tidak Ada
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Tanggal Dapat Dikunjungi</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="date" id="tgl_kunjungan" class="form-control"
                                                name="tgl_kunjungan" placeholder="Tanggal Kunjungan">
                                        </div>
                                        <div class="col-12 mb-2 mt-3">
                                            <h4>Validasi Data Tambahan</h6>
                                        </div>
                                        <div class="col-md-12">
                                            <label>Apakah anda sudah memiliki akun <a target="_blank"
                                                    href="https://wargaklampid-dispendukcapil.surabaya.go.id/app"><b>Klampid
                                                        - Dispendukcapil
                                                        Surabaya?</b></a>
                                            </label>
                                        </div>
                                        <div class="col-md-12 form-group mt-2">
                                            <div class="form-check ">
                                                <input class="form-check-input" value="1" type="radio"
                                                    name="klampid" id="klampid1" checked>
                                                <label class="form-check-label" for="klampid1">
                                                    Sudah
                                                </label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" value="0" type="radio"
                                                    name="klampid" id="klampid2">
                                                <label class="form-check-label" for="klampid2">
                                                    Belum
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Buat
                                                Antrian</button>
                                        </div>
                                        <div class="col-12 mt-4">
                                            <div class="alert alert-light-warning show fade">
                                                Periksa lagi data anda sebelum membuat Antrian!
                                            </div>
                                            @foreach ($data['biodata'] as $b)
                                                @if (Auth::user()->id == $b->id_user)
                                                    @if ($b->rw == null ||
                                                        $b->rt == null ||
                                                        $b->full_address == null ||
                                                        $b->kelurahan == null ||
                                                        $b->kecamatan == null)
                                                        <div class="alert alert-light-warning color-warning">
                                                            Lengkapi dahulu Biodata anda! <a
                                                                href="{{ route('biodata') }}">Edit Biodata</a>
                                                        </div>
                                                    @endif
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
