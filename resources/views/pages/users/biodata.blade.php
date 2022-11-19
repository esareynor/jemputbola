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
                            <h4 class="card-title">Biodata</h4>
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
        <div class="col-12">
            <div class="card mt-3 m-auto">
                <div class="card-body">
                    <form class="form form-horizontal" method="POST" action="{{ route('biodata.update') }}">
                        @csrf
                        <div class="form-body">
                            @foreach ($biodata as $b)
                                @if ($b->id_user == Auth::user()->id)
                                    <div class="row">
                                        <div class="col-12 mb-2">
                                            <h4>Pribadi</h4>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Nama</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="hidden" id="id" class="form-control" name="id"
                                                value="{{ Auth::user()->id }}">
                                            <input type="text" id="name" class="form-control" name="name"
                                                value="{{ Auth::user()->name }}" placeholder="Nama Anda">
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
                                            <input type="number" id="nik" class="form-control" name="nik"
                                                value="{{ $b->nik }}" placeholder="NIK Anda">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Whatsapp</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="number" id="whatsapp" class="form-control" name="whatsapp"
                                                placeholder="Contoh : 6281234567890 " value="{{ $b->whatsapp }}">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Tanggal Lahir</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="date" id="birth" class="form-control" name="birth"
                                                placeholder="Tanggal Lahir Anda" value="{{ $b->birth }}">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Jenis Kelamin</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <select class="form-select" name="gender" id="gender">
                                                @if ($b->gender = !null)
                                                    @if ($b->gender == 'L')
                                                        <option selected value="L">Laki-laki</option>
                                                        <option value="P">Perempuan</option>
                                                    @else
                                                        <option value="L">Laki-laki</option>
                                                        <option selected value="P">Perempuan</option>
                                                    @endif
                                                @else
                                                    <option>Pilih Jenis Kelamin</option>
                                                    <option value="L">Laki-laki</option>
                                                    <option value="P">Perempuan</option>
                                                @endif

                                            </select>
                                        </div>
                                        <div class="col-12 mt-2 mb-2">
                                            <h4>Alamat</h4>
                                        </div>
                                        <div class="col-md-4">
                                            <label>No. Rukun Tetangga</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="number" id="rt" class="form-control" name="rt"
                                                value="{{ $b->rt }}" placeholder="RT Anda">
                                        </div>
                                        <div class="col-md-4">
                                            <label>No. Rukun Warga</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="number" id="rw" class="form-control" name="rw"
                                                value="{{ $b->rw }}" placeholder="RW Anda">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Kelurahan</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="kelurahan" class="form-control" name="kelurahan"
                                                value="{{ $b->kelurahan }}" placeholder="Kelurahan Anda">
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
                                            <textarea id="alamat" class="form-control" name="alamat">{{ $b->full_address }}</textarea>
                                        </div>
                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
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
