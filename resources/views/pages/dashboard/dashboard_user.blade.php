<div class="row container m-auto">
    <div class="col-12">
        <div class="card mt-3 m-auto">
            <div class="card-body">
                <h4 class="card-title text-secondary">Selamat Datang, {{ Auth::user()->name }}!</h4>
            </div>
        </div>
    </div>
</div>
<div class="row container m-auto">
    <div class="col-12 col-lg-3">
        <div class="card mt-3 m-auto">
            <div class="card-header">
                <h4 class="card-title">Menu</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="list-group" role="tablist">
                            <a class="list-group-item list-group-item-action active" id="list-umum-list"
                                data-bs-toggle="list" href="#list-umum" role="tab">Umum</a>
                            <a class="list-group-item list-group-item-action" id="list-pendaftaran-penduduk-list"
                                data-bs-toggle="list" href="#list-pendaftaran-penduduk" role="tab">Pendaftaran
                                Penduduk</a>
                            <a class="list-group-item list-group-item-action" id="list-pencatatan-sipil-list"
                                data-bs-toggle="list" href="#list-pencatatan-sipil" role="tab">Pencatatan Sipil</a>
                            <a class="list-group-item list-group-item-action" id="list-pemutakhiran-data-penduduk-list"
                                data-bs-toggle="list" href="#list-pemutakhiran-data-penduduk"
                                role="tab">Pemutakhiran Data Penduduk</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-5">
        <div class="card mt-3 m-auto">
            <div class="card-header">
                <h4 class="card-title">Layanan Tersedia</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="tab-content text-justify" id="nav-tabContent">
                            <div class="tab-pane show active" id="list-umum" role="tabpanel"
                                aria-labelledby="list-umum-list">
                                <div class="row container m-auto">
                                    <div class="col-12 p-1">
                                        <a href="#" class="col-12 btn btn-muted">Coming Soon</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="list-pendaftaran-penduduk" role="tabpanel"
                                aria-labelledby="list-pendaftaran-penduduk-list">
                                <div class="row container m-auto">
                                    <div class="col-6 p-1">

                                        <a href="{{ route('pendaftaran-penduduk.cetak-ulang-kk') }}"
                                            class="col-12 btn btn-outline-primary">
                                            <div class="row">
                                                <div class="col"><i class="icon-mid bi bi-card-heading"
                                                        style="font-size: 50px"></i></div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <p style="font-weight: bold">Cetak Ulang KK</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-6 p-1">
                                        <a href="#" class="col-12 btn btn-outline-muted">
                                            <div class="row">
                                                <div class="col"><i class="icon-mid bi bi-card-heading"
                                                        style="font-size: 50px"></i></div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <p style="font-weight: bold">KIA</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-6 p-1">
                                        <a href="#" class="col-12 btn btn-outline-muted">
                                            <div class="row">
                                                <div class="col"><i class="icon-mid bi bi-card-heading"
                                                        style="font-size: 50px"></i></div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <p style="font-weight: bold">Pecah KK</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="list-pencatatan-sipil" role="tabpanel"
                                aria-labelledby="list-pencatatan-sipil-list">
                                <div class="row container m-auto">
                                    <div class="col-12 p-1">
                                        <a href="#" class="col-12 btn btn-muted">Coming Soon</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="list-pemutakhiran-data-penduduk" role="tabpanel"
                                aria-labelledby="list-pemutakhiran-data-penduduk-list">
                                <div class="row container m-auto">
                                    <div class="col-12 p-1">
                                        <a href="#" class="col-12 btn btn-muted">Coming Soon</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-4">
        <div class="card mt-3 m-auto">
            <div class="card-header">
                <h4 class="card-title">Informasi</h4>
            </div>
            <div class="card-body">
                @foreach ($data['biodata'] as $b)
                    @if (Auth::user()->id == $b->id_user)
                        @if ($b->rw == null ||
                            $b->rt == null ||
                            $b->full_address == null ||
                            $b->kelurahan == null ||
                            $b->kecamatan == null)
                            <div class="alert alert-light-warning color-warning">
                                Lengkapi dahulu Biodata anda! <a href="{{ route('biodata') }}">Edit Biodata</a>
                            </div>
                        @else
                            <div class="alert alert-light-success color-success">
                                Biodata Lengkap. <a href="{{ route('biodata') }}">Edit Biodata</a>
                            </div>
                        @endif
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="row container m-auto">
    <div class="col-12">
        <div class="card mt-3 m-auto">
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <h5>Antrian Anda</h5>
                    </div>
                    <div class="col text-end">
                        <a href="" class="btn btn-sm btn-primary">Semua Layanan</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-borderless mb-0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No. Antrian</th>
                                <th>Layanan Dipilih</th>
                                <th>Tanggal Kunjungan</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($layanan as $l)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td class="text-primary"><b>{{ $l->no_antrian }}</b></td>
                                    <td>
                                        @foreach ($master_menu_layanan->where('id', $l->id_menu_layanan) as $mml)
                                            @foreach ($master_layanan->where('id_menu_layanan', $mml->id) as $ml)
                                                {{ $ml->layanan }}
                                            @endforeach
                                        @endforeach
                                    </td>
                                    <td>{{ $l->tgl_kunjungan }}</td>
                                    <td>
                                        @if ($l->status == 1)
                                            <span class="badge bg-warning">Menunggu Verifikasi Petugas</span>
                                        @elseif($l->status == 2)
                                            <span class="badge bg-primary">Terverifikasi</span>
                                        @elseif($l->status == 3)
                                            <span class="badge bg-danger">Petugas Perjalanan ke Lokasi</span>
                                        @elseif($l->status == 4)
                                            <span class="badge bg-success">Selesai</span>
                                        @elseif($l->status == 99)
                                            <span class="badge bg-secondary">Dibatalkan</span>
                                        @endif
                                    </td>
                                    <td class="text-bold-500"><a href="{{ route('layanan.detail', $l->no_antrian) }}"
                                            class="btn btn-info btn-sm">Detail</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
