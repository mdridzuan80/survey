<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-5">
            <a class="navbar-brand" href="#!">Start Bootstrap</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Services</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page Content-->
    <div class="container px-4 px-lg-5">
        <div class="text-center mt-5">
            <h1>KAJIAN PENEMPATAN DALAMAN ("JOB ROTATION") BAGI WARGA KERJA PEJABAT DAERAH DAN TANAH ALOR GAJAH</h1>
            <p class="lead">Kajian ini dibuat untuk mendapatkan gambaran penempatan tuan/puan selama berkhidmat di jabatan ini. Kajian ini hanya terpakai kepada Pegawai P&P dan juga kumpulan sokongan skim PT(N)/(W) dan PT(PO) sahaja</p>
            <p class="lead">Adalah diingatkan bahawa kajian ini adalah sebagai salah satu usaha untuj mengetahui kemahiran tuan/puan sedia ada sepanjang di dalam perkhidmatan dsn perancangan untuk pusingan kerja di PDTAG.</p>

        </div>

        <div class="row" id="seksyen1">
            <div class="col-1">
            </div>
            <div class="col-10">
                <div class="card">
                    <div class="card-header text-bg-primary fs-3">
                        SEKSYEN 1 - BIODATA
                    </div>
                    <div class="card-body">
                        <form id="frmBiodata">
                            <div class="mb-3">
                                <label for="txtNama" class="form-label">Nama <span class="text-danger">*</span> </label>
                                <div class="">
                                    (Seperti di dalam Kad Pengenalan)
                                </div>
                                <br>
                                <input type="text" class="form-control" id="txtNama">
                            </div>
                            <div class="mb-3">
                                <label for="txtUmur" class="form-label ">Umur <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" id="txtUmur">
                            </div>
                            <div class="mb-3">
                                <label for="comJawatan" class="form-label ">Jawatan <span class="text-danger">*</span> </label>
                                <select class="form-select" id="comJawatan">
                                    <option value="0" selected>Pilihan Jawatan</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="comGred" class="form-label">Gred <span class="text-danger">*</span> </label>
                                <select class="form-select" id="comGred">
                                    <option value="0" selected>Pilihan Gred</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label ">Tempoh Perkhidmatan di dalam Skim Perkhidmatan Semasa <span class="text-danger">*</span> </label>
                                <div class="row">
                                    <div class="col-1">
                                        <label for="txtTempohTahun" class="form-label ">Tahun <span class="text-danger">*</span> </label>
                                    </div>
                                    <div class="col-5">
                                        <input type="text" class="form-control" id="txtTempohTahun">
                                    </div>
                                    <div class="col-1">
                                        <label for="txtTempohBulan" class="form-label ">Bulan <span class="text-danger">*</span> </label>
                                    </div>
                                    <div class="col-5">
                                        <input type="text" class="form-control" id="txtTempohBulan">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label ">Tempoh Perkhidmatan di dalam Pejabat Daerah Dan Tanah Alor Gajah
                                    <span class="text-danger">*</span> </label>
                                <div class="row">
                                    <div class="col-1">
                                        <label for="txtTempohPDTAGTahun" class="form-label ">Tahun <span class="text-danger">*</span> </label>
                                    </div>
                                    <div class="col-5">
                                        <input type="text" class="form-control" id="txtTempohPDTAGTahun">
                                    </div>
                                    <div class="col-1">
                                        <label for="txtTempohPDTAGBulan" class="form-label ">Bulan <span class="text-danger">*</span> </label>
                                    </div>
                                    <div class="col-5">
                                        <input type="text" class="form-control" id="txtTempohPDTAGBulan">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-1">
            </div>
            <div class="col-1">
            </div>
            <div class="col-10">
                <div class="row mt-5">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="container-fluid">
                            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <!-- <button type="button" class="btn btn-primary">Primary</button> -->
                                    </li>
                                </ul>
                                <button id="btnNextBio" type="button" class="btn btn-primary">Seterusnya</button>
                            </div>
                        </div>
                    </nav>
                </div>

            </div>
        </div>

        <!-- Seksyen 2 -->
        <div class="row" id="seksyen2">
            <div class="col-1">
            </div>
            <div class="col-10">
                <div class="card">
                    <div class="card-header text-bg-primary fs-3">
                        SEKSYEN 2 - PENEMPATAN DI PDTAG
                    </div>
                    <div class="card-body">
                        <form id="frmPenempatan1">
                            <p class="lead">Tuan/Puan dikehendaki mengisi sejarah penempatan tuan/puan semasa di PDTAG.</p>
                            <div class="mb-3">
                                <label for="comPenempatan1" class="form-label ">Penempatan Kali Pertama <span class="text-danger">*</span> </label>
                                <select class="form-select" id="comPenempatan1">
                                    <option value="0" selected>Pilihan Jawatan</option>
                                    <option value="1">BKP</option>
                                    <option value="2">Masyarakat</option>
                                    <option value="3">Fizikal</option>
                                    <option value="3">Pembangunan & Pelupusan Tanah</option>
                                    <option value="3">Penguatkuasa/Teknikal & Hasil</option>
                                    <option value="3">Pendaftaran</option>
                                    <option value="3">Pejabat Penolong Pegawai Undang-Undang</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="txtTarikhTamat1" class="form-label ">Tarikh Mula <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" id="txtTarikhMula1">
                            </div>
                            <div class="mb-3">
                                <label for="txtTarikhTamat1" class="form-label ">Tarikh Tamat <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" id="txtTarikhTamat1">
                            </div>
                            <div class="mb-3">
                                <label for="txtTugas1" class="form-label ">Senarai Tugas Penempatan Kali Pertama <span class="text-danger">*</span> </label>
                                <textarea class="form-control" id="txtTugas1" rows="5"></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label ">Jika pernah ditempatkan diunit lain, sila tekan "Ya". Jika Tiada, sila tekan "Tidak" <span class="text-danger">*</span> </label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="chkPenempatan1" id="chkYa1" value="1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Ya
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="chkPenempatan1" id="chkTidak1" value="0" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Tidak
                                    </label>
                                </div>
                            </div>

                        </form>

                        <form id="frmPenempatan2" style="display: none;">
                            <hr>
                            <div class="mb-3">
                                <label for="comPenempatan1" class="form-label ">Penempatan Kali Kedua <span class="text-danger">*</span> </label>
                                <select class="form-select" id="comPenempatan2">
                                    <option value="0" selected>Pilihan Jawatan</option>
                                    <option value="1">BKP</option>
                                    <option value="2">Masyarakat</option>
                                    <option value="3">Fizikal</option>
                                    <option value="3">Pembangunan & Pelupusan Tanah</option>
                                    <option value="3">Penguatkuasa/Teknikal & Hasil</option>
                                    <option value="3">Pendaftaran</option>
                                    <option value="3">Pejabat Penolong Pegawai Undang-Undang</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="txtTarikhTamat1" class="form-label ">Tarikh Mula <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" id="txtTarikhMula2">
                            </div>
                            <div class="mb-3">
                                <label for="txtTarikhTamat1" class="form-label ">Tarikh Tamat <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" id="txtTarikhTamat2">
                            </div>
                            <div class="mb-3">
                                <label for="txtTugas1" class="form-label ">Senarai Tugas Penempatan Kali Kedua <span class="text-danger">*</span> </label>
                                <textarea class="form-control" id="txtTugas2" rows="5"></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label ">Jika pernah ditempatkan diunit lain, sila tekan "Ya". Jika Tiada, sila tekan "Tidak" <span class="text-danger">*</span> </label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="chkPenempatan2" id="chkYa2" value="1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Ya
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="chkPenempatan2" id="chkTidak2" value="0" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Tidak
                                    </label>
                                </div>
                            </div>

                        </form>

                        <!-- Penempatan Ke 3 -->
                        <form id="frmPenempatan3" style="display: none;">
                            <hr>
                            <div class="mb-3">
                                <label for="comPenempatan1" class="form-label ">Penempatan Kali Ketiga <span class="text-danger">*</span> </label>
                                <select class="form-select" id="comPenempatan3">
                                    <option value="0" selected>Pilihan Jawatan</option>
                                    <option value="1">BKP</option>
                                    <option value="2">Masyarakat</option>
                                    <option value="3">Fizikal</option>
                                    <option value="3">Pembangunan & Pelupusan Tanah</option>
                                    <option value="3">Penguatkuasa/Teknikal & Hasil</option>
                                    <option value="3">Pendaftaran</option>
                                    <option value="3">Pejabat Penolong Pegawai Undang-Undang</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="txtTarikhTamat3" class="form-label ">Tarikh Mula <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" id="txtTarikhMula3">
                            </div>
                            <div class="mb-3">
                                <label for="txtTarikhTamat3" class="form-label ">Tarikh Tamat <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" id="txtTarikhTamat3">
                            </div>
                            <div class="mb-3">
                                <label for="txtTugas3" class="form-label ">Senarai Tugas Penempatan Kali Ketiga <span class="text-danger">*</span> </label>
                                <textarea class="form-control" id="txtTugas3" rows="5"></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label ">Jika pernah ditempatkan diunit lain, sila tekan "Ya". Jika Tiada, sila tekan "Tidak" <span class="text-danger">*</span> </label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="chkPenempatan3" id="chkYa3" value="1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Ya
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="chkPenempatan3" id="chkTidak3" value="0" checked>
                                    <label class="form-check-label" for="flexRadioDefault3">
                                        Tidak
                                    </label>
                                </div>
                            </div>
                        </form>

                        <!-- Penempatan Ke 4 -->
                        <form id="frmPenempatan4" style="display: none;">
                            <hr>
                            <div class="mb-3">
                                <label for="comPenempatan4" class="form-label ">Penempatan Kali Keempat <span class="text-danger">*</span> </label>
                                <select class="form-select" id="comPenempatan4">
                                    <option value="0" selected>Pilihan Jawatan</option>
                                    <option value="1">BKP</option>
                                    <option value="2">Masyarakat</option>
                                    <option value="3">Fizikal</option>
                                    <option value="3">Pembangunan & Pelupusan Tanah</option>
                                    <option value="3">Penguatkuasa/Teknikal & Hasil</option>
                                    <option value="3">Pendaftaran</option>
                                    <option value="3">Pejabat Penolong Pegawai Undang-Undang</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="txtTarikhTamat4" class="form-label ">Tarikh Mula <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" id="txtTarikhMula4">
                            </div>
                            <div class="mb-3">
                                <label for="txtTarikhTamat4" class="form-label ">Tarikh Tamat <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" id="txtTarikhTamat4">
                            </div>
                            <div class="mb-3">
                                <label for="txtTugas4" class="form-label ">Senarai Tugas Penempatan Kali Keempat <span class="text-danger">*</span> </label>
                                <textarea class="form-control" id="txtTugas4" rows="5"></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label ">Jika pernah ditempatkan diunit lain, sila tekan "Ya". Jika Tiada, sila tekan "Tidak" <span class="text-danger">*</span> </label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="chkPenempatan4" id="chkYa4" value="1">
                                    <label class="form-check-label">
                                        Ya
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="chkPenempatan4" id="chkTidak4" value="0" checked>
                                    <label class="form-check-label">
                                        Tidak
                                    </label>
                                </div>
                            </div>
                        </form>

                        <!-- Penempatan Ke 5 -->
                        <form id="frmPenempatan5" style="display: none;">
                            <hr>
                            <div class="mb-3">
                                <label for="comPenempatan5" class="form-label ">Penempatan Kali Kelima <span class="text-danger">*</span> </label>
                                <select class="form-select" id="comPenempatan5">
                                    <option value="0" selected>Pilihan Jawatan</option>
                                    <option value="1">BKP</option>
                                    <option value="2">Masyarakat</option>
                                    <option value="3">Fizikal</option>
                                    <option value="3">Pembangunan & Pelupusan Tanah</option>
                                    <option value="3">Penguatkuasa/Teknikal & Hasil</option>
                                    <option value="3">Pendaftaran</option>
                                    <option value="3">Pejabat Penolong Pegawai Undang-Undang</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="txtTarikhTamat5" class="form-label ">Tarikh Mula <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" id="txtTarikhMula5">
                            </div>
                            <div class="mb-3">
                                <label for="txtTarikhTamat5" class="form-label ">Tarikh Tamat <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" id="txtTarikhTamat5">
                            </div>
                            <div class="mb-3">
                                <label for="txtTugas5" class="form-label ">Senarai Tugas Penempatan Kali Kelima <span class="text-danger">*</span> </label>
                                <textarea class="form-control" id="txtTugas5" rows="5"></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label ">Jika pernah ditempatkan diunit lain, sila tekan "Ya". Jika Tiada, sila tekan "Tidak" <span class="text-danger">*</span> </label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="chkPenempatan5" id="chkYa5" value="1">
                                    <label class="form-check-label">
                                        Ya
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="chkPenempatan5" id="chkTidak5" value="0" checked>
                                    <label class="form-check-label">
                                        Tidak
                                    </label>
                                </div>
                            </div>
                        </form>

                        <!-- Penempatan Ke 6 -->
                        <form id="frmPenempatan6" style="display: none;">
                            <hr>
                            <div class="mb-3">
                                <label for="comPenempatan6" class="form-label ">Penempatan Kali Keenam <span class="text-danger">*</span> </label>
                                <select class="form-select" id="comPenempatan6">
                                    <option value="0" selected>Pilihan Jawatan</option>
                                    <option value="1">BKP</option>
                                    <option value="2">Masyarakat</option>
                                    <option value="3">Fizikal</option>
                                    <option value="3">Pembangunan & Pelupusan Tanah</option>
                                    <option value="3">Penguatkuasa/Teknikal & Hasil</option>
                                    <option value="3">Pendaftaran</option>
                                    <option value="3">Pejabat Penolong Pegawai Undang-Undang</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="txtTarikhTamat6" class="form-label ">Tarikh Mula <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" id="txtTarikhMula6">
                            </div>
                            <div class="mb-3">
                                <label for="txtTarikhTamat6" class="form-label ">Tarikh Tamat <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" id="txtTarikhTamat6">
                            </div>
                            <div class="mb-3">
                                <label for="txtTugas6" class="form-label ">Senarai Tugas Penempatan Kali Keenam <span class="text-danger">*</span> </label>
                                <textarea class="form-control" id="txtTugas6" rows="5"></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label ">Jika pernah ditempatkan diunit lain, sila tekan "Ya". Jika Tiada, sila tekan "Tidak" <span class="text-danger">*</span> </label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="chkPenempatan6" id="chkYa6" value="1">
                                    <label class="form-check-label">
                                        Ya
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="chkPenempatan6" id="chkTidak6" value="0" checked>
                                    <label class="form-check-label">
                                        Tidak
                                    </label>
                                </div>
                            </div>
                        </form>

                        <!-- Penempatan Ke 7 -->
                        <form id="frmPenempatan7" style="display: none;">
                            <hr>
                            <div class="mb-3">
                                <label for="comPenempatan1" class="form-label ">Penempatan Kali Ketujuh <span class="text-danger">*</span> </label>
                                <select class="form-select" id="comPenempatan7">
                                    <option value="0" selected>Pilihan Jawatan</option>
                                    <option value="1">BKP</option>
                                    <option value="2">Masyarakat</option>
                                    <option value="3">Fizikal</option>
                                    <option value="3">Pembangunan & Pelupusan Tanah</option>
                                    <option value="3">Penguatkuasa/Teknikal & Hasil</option>
                                    <option value="3">Pendaftaran</option>
                                    <option value="3">Pejabat Penolong Pegawai Undang-Undang</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="txtTarikhTamat7" class="form-label ">Tarikh Mula <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" id="txtTarikhMula7">
                            </div>
                            <div class="mb-3">
                                <label for="txtTarikhTamat7" class="form-label ">Tarikh Tamat <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" id="txtTarikhTamat7">
                            </div>
                            <div class="mb-3">
                                <label for="txtTugas7" class="form-label ">Senarai Tugas Penempatan Kali Ketujuh <span class="text-danger">*</span> </label>
                                <textarea class="form-control" id="txtTugas7" rows="5"></textarea>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-1">
            </div>
            <div class="col-1">
            </div>
            <div class="col-10">
                <div class="row mt-5">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="container-fluid">
                            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <!-- <button type="button" class="btn btn-primary">Primary</button> -->
                                    </li>
                                </ul>
                                <button id="btnNextBio" type="button" class="btn btn-primary">Seterusnya</button>
                            </div>
                        </div>
                    </nav>
                </div>

            </div>
        </div>


        <!-- Seksyen 3 -->
        <div class="row" id="seksyen2">
            <div class="col-1">
            </div>
            <div class="col-10">
                <div class="card">
                    <div class="card-header text-bg-primary fs-3">
                        SEKSYEN 3 - PERMOHONAN PENEMPATAN
                    </div>
                    <div class="card-body">
                        <form id="frmPilih1">
                            <p class="lead">Penafian: Permohonan penempatan yang dipilih oleh tuan/puan bukanlah sesuatu perkara yang muktamad. Ianya tertakluk kepada kputusan akhir di peringkat tertinggi, jabatan mengambilkira kekosongan sesuatu jawatan di unit berkenaan serta kesesuaian pegawai tersebut. Tuan/Puan dikehendaki untuk menyatakan hasrat penepatan tuan/puan berdasarkan tinjauan di bawah.</p>
                            <div class="mb-3">
                                <label for="comPenempatan1" class="form-label ">Pilihan Pertama <span class="text-danger">*</span> </label>
                                <select class="form-select" id="comPilih1">
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="txtTugas1" class="form-label ">Justifikasi/Sebab kenapa memilih bahagian/unit berkenaan.<span class="text-danger">*</span> </label>
                                <textarea class="form-control" id="txtSebab1" rows="5"></textarea>
                            </div>
                        </form>

                        <form id="frmPilih2">
                            <div class="mb-3">
                                <label for="comPenempatan1" class="form-label ">Pilihan Kedua <span class="text-danger">*</span> </label>
                                <select class="form-select" id="comPilih2">

                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="txtTugas1" class="form-label ">Justifikasi/Sebab kenapa memilih bahagian/unit berkenaan.<span class="text-danger">*</span> </label>
                                <textarea class="form-control" id="txtSebab2" rows="5"></textarea>
                            </div>
                        </form>

                        <form id="frmPilih3">
                            <div class="mb-3">
                                <label for="comPenempatan1" class="form-label ">Pilihan Kedua <span class="text-danger">*</span> </label>
                                <select class="form-select" id="comPilih3">

                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="txtTugas1" class="form-label ">Justifikasi/Sebab kenapa memilih bahagian/unit berkenaan.<span class="text-danger">*</span> </label>
                                <textarea class="form-control" id="txtSebab3" rows="5"></textarea>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-1">
            </div>
            <div class="col-1">
            </div>
            <div class="col-10">
                <div class="row mt-5">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="container-fluid">
                            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <!-- <button type="button" class="btn btn-primary">Primary</button> -->
                                    </li>
                                </ul>
                                <button id="btnNextBio" type="button" class="btn btn-primary">Seterusnya</button>
                            </div>
                        </div>
                    </nav>
                </div>

            </div>
        </div>

    </div>
    <!-- Footer-->
    <footer class="mt-5 py-5 bg-dark">
        <div class="container px-4 px-lg-5">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>

    <script>
        $(document).ready(function() {
            $('#txtTarikhMula1').datepicker({
                uiLibrary: 'bootstrap5',
                header: true,
                modal: true,
                format: 'dd/mm/yyyy',
                maxDate: function() {
                    return $('#txtTarikhTamat1').val();
                }
            });
            $('#txtTarikhTamat1').datepicker({
                uiLibrary: 'bootstrap5',
                header: true,
                modal: true,
                format: 'dd/mm/yyyy',
                minDate: function() {
                    return $('#txtTarikhMula1').val();
                }
            });

            $('#txtTarikhMula2').datepicker({
                uiLibrary: 'bootstrap5',
                header: true,
                modal: true,
                format: 'dd/mm/yyyy',
                maxDate: function() {
                    return $('#txtTarikhTamat2').val();
                }
            });
            $('#txtTarikhTamat2').datepicker({
                uiLibrary: 'bootstrap5',
                header: true,
                modal: true,
                format: 'dd/mm/yyyy',
                minDate: function() {
                    return $('#txtTarikhMula2').val();
                }
            });

            $('#txtTarikhMula3').datepicker({
                uiLibrary: 'bootstrap5',
                header: true,
                modal: true,
                format: 'dd/mm/yyyy',
                maxDate: function() {
                    return $('#txtTarikhTamat3').val();
                }
            });
            $('#txtTarikhTamat3').datepicker({
                uiLibrary: 'bootstrap5',
                header: true,
                modal: true,
                format: 'dd/mm/yyyy',
                minDate: function() {
                    return $('#txtTarikhMula3').val();
                }
            });

            $('#txtTarikhMula4').datepicker({
                uiLibrary: 'bootstrap5',
                header: true,
                modal: true,
                format: 'dd/mm/yyyy',
                maxDate: function() {
                    return $('#txtTarikhTamat4').val();
                }
            });
            $('#txtTarikhTamat4').datepicker({
                uiLibrary: 'bootstrap5',
                header: true,
                modal: true,
                format: 'dd/mm/yyyy',
                minDate: function() {
                    return $('#txtTarikhMula4').val();
                }
            });

            $('#txtTarikhMula5').datepicker({
                uiLibrary: 'bootstrap5',
                header: true,
                modal: true,
                format: 'dd/mm/yyyy',
                maxDate: function() {
                    return $('#txtTarikhTamat5').val();
                }
            });
            $('#txtTarikhTamat5').datepicker({
                uiLibrary: 'bootstrap5',
                header: true,
                modal: true,
                format: 'dd/mm/yyyy',
                minDate: function() {
                    return $('#txtTarikhMula5').val();
                }
            });

            $('#txtTarikhMula6').datepicker({
                uiLibrary: 'bootstrap5',
                header: true,
                modal: true,
                format: 'dd/mm/yyyy',
                maxDate: function() {
                    return $('#txtTarikhTamat6').val();
                }
            });
            $('#txtTarikhTamat6').datepicker({
                uiLibrary: 'bootstrap5',
                header: true,
                modal: true,
                format: 'dd/mm/yyyy',
                minDate: function() {
                    return $('#txtTarikhMula6').val();
                }
            });

            $('#txtTarikhMula7').datepicker({
                uiLibrary: 'bootstrap5',
                header: true,
                modal: true,
                format: 'dd/mm/yyyy',
                maxDate: function() {
                    return $('#txtTarikhTamat7').val();
                }
            });
            $('#txtTarikhTamat7').datepicker({
                uiLibrary: 'bootstrap5',
                header: true,
                modal: true,
                format: 'dd/mm/yyyy',
                minDate: function() {
                    return $('#txtTarikhMula7').val();
                }
            });

            $("#btnNextBio").on("click", function() {
                if (seksyen1()) {
                    $("#seksyen1").hide();
                    $("#seksyen2").show();
                }
            })

            $.each($("input[name='sport']:checked"), function() {
                favorite.push($(this).val());
            });

            function seksyen1() {
                var isValid = true;

                var namaVal = $("#txtNama").val().trim();
                if (namaVal.length == 0) {
                    isValid = false;
                }

                var umurVal = $("#txtUmur").val().trim();
                if (umurVal.length == 0 || !isInt(umurVal)) {
                    isValid = false;
                }

                var jawatanVal = $("#comJawatan").val().trim();
                if (jawatanVal == 0) {
                    isValid = false;
                }

                var gredVal = $("#comGred").val().trim();
                if (gredVal == 0) {
                    isValid = false;
                }

                var tempohTahunVal = $("#txtTempohTahun").val().trim();
                if (tempohTahunVal.length == 0 || !isInt(tempohTahunVal)) {
                    isValid = false;
                }

                var tempohBulanVal = $("#txtTempohBulan").val().trim();
                if (tempohBulanVal.length == 0 || !isInt(tempohBulanVal) || tempohBulanVal > 12) {
                    isValid = false;
                }

                var tempohPDTAGTahunVal = $("#txtTempohPDTAGTahun").val().trim();
                if (tempohPDTAGTahunVal.length == 0 || !isInt(tempohPDTAGTahunVal)) {
                    isValid = false;
                }

                var tempohPDTAGBulanVal = $("#txtTempohPDTAGBulan").val().trim();
                if (tempohPDTAGBulanVal.length == 0 || !isInt(tempohPDTAGBulanVal) || tempohPDTAGBulanVal > 12) {
                    isValid = false;
                }

                return isValid;
            }

            function isInt(value) {
                var x;
                if (isNaN(value)) {
                    return false;
                }
                x = parseFloat(value);
                return (x | 0) === x;
            }

            $('#chkYa1').on('click', function() {
                getChkPenempatan("chkPenempatan1", "#frmPenempatan2");
            });

            $('#chkTidak1').on('click', function() {
                getChkPenempatan("chkPenempatan1", "#frmPenempatan2");
            });

            $('#chkYa2').on('click', function() {
                getChkPenempatan("chkPenempatan2", "#frmPenempatan3");
            });

            $('#chkTidak2').on('click', function() {
                getChkPenempatan("chkPenempatan2", "#frmPenempatan3");
            });

            $('#chkYa3').on('click', function() {
                getChkPenempatan("chkPenempatan3", "#frmPenempatan4");
            });

            $('#chkTidak3').on('click', function() {
                getChkPenempatan("chkPenempatan3", "#frmPenempatan4");
            });

            $('#chkYa4').on('click', function() {
                getChkPenempatan("chkPenempatan4", "#frmPenempatan5");
            });

            $('#chkTidak4').on('click', function() {
                getChkPenempatan("chkPenempatan4", "#frmPenempatan5");
            });

            $('#chkYa5').on('click', function() {
                getChkPenempatan("chkPenempatan5", "#frmPenempatan6");
            });

            $('#chkTidak5').on('click', function() {
                getChkPenempatan("chkPenempatan5", "#frmPenempatan6");
            });

            $('#chkYa6').on('click', function() {
                getChkPenempatan("chkPenempatan6", "#frmPenempatan7");
            });

            $('#chkTidak6').on('click', function() {
                getChkPenempatan("chkPenempatan6", "#frmPenempatan7");
            });

            function getChkPenempatan(input, nextForm) {
                $.each($("input[name='" + input + "']:checked"), function() {
                    console.log($(this).val());

                    if ($(this).val() == 1) {
                        $(nextForm).show();
                    } else {
                        $(nextForm).hide();
                    }
                });
            }

            var bahagian = [{
                id: 0,
                name: "Pilihan Jawatan"
            }, {
                id: 1,
                name: "BKP"
            }, {
                id: 2,
                name: "Masyarakat"
            }, {
                id: 3,
                name: "Fizikal"
            }, {
                id: 4,
                name: "Pembangunan & Pelupusan Tanah"
            }, {
                id: 5,
                name: "Penguatkuasa/Teknikal & Hasil"
            }, {
                id: 6,
                name: "Pendaftaran"
            }, {
                id: 7,
                name: "Pejabat Penolong Pegawai Undang-Undang"
            }, ];


            var dropdown1 = $("#comPilih1");
            var dropdown2 = $("#comPilih2");
            var dropdown3 = $("#comPilih3");

            $.each(bahagian, function(index, item) {
                dropdown1.append($("<option />").val(item.id).text(item.name));
            });

            dropdown1.on('change', function() {
                dropdown2.empty();
                $.each(bahagian.filter(function(item) {
                    return item.id != dropdown1.val();
                }), function(index,item) {
                    dropdown2.append($("<option />").val(item.id).text(item.name));
                });
            })

            dropdown2.on('change', function() {
                dropdown3.empty();
                $.each(bahagian.filter(function(item) {
                    return item.id != dropdown1.val() && item.id != dropdown2.val();
                }), function(index,item) {
                    dropdown3.append($("<option />").val(item.id).text(item.name));
                });
            })

        });
    </script>

</body>

</html>