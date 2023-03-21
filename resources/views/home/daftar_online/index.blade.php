<div>
    <img src="/img/sd.jpg" width="100%" class="img-fluid" alt="...">
</div>

<div class="main">
    <h3 class="heading">Tata Cara Syarat Upload berkas </h3>
</div>

<div class="container ">

    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    Bukti Pembayaran
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    Upload Bukti Pembayaran Berbentuk jpg, jpeg, atau Png (tidak boleh melebihi 2mb)
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Berkas ijasah,Foto dan lain-lain
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    Semua berkas dijadikan satu meliputi foto 4x3, scan ijasah (jika tidak ada boleh memakai surat
                    kelulusan) di Upload File Berbentuk zip, rar, pdf, atau word
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Berkas Orang Tua
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    Semua berkas dijadikan satu meliputi KTP dan KK di Upload File Berbentuk zip, rar, pdf, atau word
                </div>
            </div>
        </div>
    </div>


</div>

<div class="container ">
    <div class="row m-5">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/daftar_online/send" method="POST" enctype="multipart/form-data" class="row g-3 align-center">
            @csrf

            <div class="col-xl-12">
                <div class="custom-accordion">
                    <div class="card">
                        <a href="#personal-saya" class="text-dark text-daftar" data-bs-toggle="collapse">

                            <div class="p-4 text-daftar">
                                <h5 class="font-size-16 mb-1">Data Siswa</h5>
                                <p>FIle maksimal 2mb </p>

                            </div>
                        </a>
                        <div id="personal-saya" class="collapse show">
                            <div class="p-4 border-top">

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label">NISN</label>
                                            <input type="text" id="personal-data-nisn" name="nisn"
                                                class="form-control                             
                                                    @error('nisn')
                                                        is-invalid
                                                    @enderror"
                                                placeholder="Masukkan NISN"
                                                value="{{ isset($daftar_online) ? $daftar_online->nisn : old('nisn') }}">
                                            @error('nisn')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label" for="personal-data-nik">NIK</label>
                                            <input type="text" id="personal-data-nik" name="nik"
                                                class="form-control                             
                                                    @error('nik')
                                                        is-invalid
                                                    @enderror"
                                                placeholder="Masukkan NIK"
                                                value="{{ isset($daftar_online) ? $daftar_online->nik : old('nik') }}">
                                            @error('nik')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label">Nama</label>
                                            <input type="text" name="nama_siswa" placeholder="Masukkan Nama Lengkap"
                                                class="form-control                             
                                                    @error('nama_siswa')
                                                        is-invalid
                                                    @enderror"
                                                placeholder="Masukkan nama_siswa"
                                                value="{{ isset($daftar_online) ? $daftar_online->nama_siswa : old('nama_siswa') }}">
                                            @error('nama_siswa')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-lg-4">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label">Email</label>
                                            <input type="email" name="email" placeholder="Masukkan email "
                                                class="form-control                             
                                                    @error('email')
                                                        is-invalid
                                                    @enderror"
                                                placeholder="Masukkan email"
                                                value="{{ isset($daftar_online) ? $daftar_online->email : old('email') }}">
                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label">No HP atau
                                                Whatsapp</label>
                                            <input type="text" name="hp"
                                                placeholder="Masukkan Nomor Hp Yang bisa dihubungi"
                                                class="form-control                             
                                                    @error('hp')
                                                        is-invalid
                                                    @enderror"
                                                value="{{ isset($daftar_online) ? $daftar_online->hp : old('hp') }}">
                                            @error('hp')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label ">Jenis
                                                Kelamin</label>
                                            <select
                                                class="form-control wide  @error('jk')
                                                        is-invalid
                                                    @enderror"
                                                name="jk">
                                                <option disabled selected>Pilih
                                                    Jenis Kelamin </option>
                                                <option value="Laki-laki">Laki-Laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                            @error('jk')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>




                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label">Tempat lahir</label>
                                            <input type="text" name="tempat_lahir"
                                                placeholder="Masukkan Tempat Lahir"
                                                class="form-control                             
                                                    @error('tempat_lahir')
                                                        is-invalid
                                                    @enderror"
                                                value="{{ isset($daftar_online) ? $daftar_online->tempat_lahir : old('tempat_lahir') }}">
                                            @error('tempat_lahir')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label">Tanggal lahir</label>
                                            <input type="date" class="form-control" name="tanggal_lahir"
                                                placeholder="Masukkan Tanggal Lahir" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label">Bukti Pembayaran Pendaftaran</label>
                                            <div class="input-group">
                                                <div class="form-file">
                                                    <input type="file" id="formFile" name="gambar"
                                                        accept="image/png, image/jpg, image/jpeg"
                                                        class="form-control                             
                                                        @error('gambar')
                                                            is-invalid
                                                            @enderror"
                                                        placeholder="Email"
                                                        value="{{ isset($pendaftaran) ? $pendaftaran->gambar : old('gambar') }}">
                                                    @error('gambar')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="mb-3 mb-6">
                                            <label class="form-label">Alamat Lengkap</label>
                                            <textarea type="text" name="alamat" placeholder="Masukkan Alamat Lengkap"
                                                class="form-control                             
                                                    @error('alamat')
                                                        is-invalid
                                                    @enderror"
                                                value="{{ isset($daftar_online) ? $daftar_online->alamat : old('alamat') }}"></textarea>
                                            @error('alamat')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label">Berkas
                                                ijasah,Foto dan
                                                lain-lain</label>
                                            <div class="input-group">
                                                <div class="form-file">
                                                    <input type="file" accept=".doc,.docx,.pdf,.zip,"
                                                        class="form-file-input form-control" name="berkas"
                                                        class="form-control                             
                                                    @error('berkas')
                                                        is-invalid
                                                    @enderror"
                                                        value="{{ isset($daftar_online) ? $daftar_online->berkas : old('berkas') }}">
                                                    @error('berkas')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </div>



                            </div>
                        </div>

                    </div>
                </div>



                <div class="custom-accordion mt-5">
                    <div class="card">
                        <a href="#ortu-saya" class="text-dark text-daftar" data-bs-toggle="collapse">

                            <div class="p-4 text-daftar">
                                <h5 class="font-size-16 mb-1">Data Orang Tua</h5>
                                <p>FIle maksimal 2mb </p>
                            </div>
                        </a>
                        <div id="ortu-saya" class="collapse show">
                            <div class="p-4 border-top">

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label">Nama Ayah</label>
                                            <input type="text" id="personal-data-nisn" name="nama_ayah"
                                                class="form-control                             
                                                    @error('nama_ayah')
                                                        is-invalid
                                                    @enderror"
                                                placeholder="Masukkan Nama Ayah"
                                                value="{{ isset($daftar_online) ? $daftar_online->nama_ayah : old('nama_ayah') }}">
                                            @error('nama_ayah')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label" for="personal-data-nik">Nama Ibu</label>
                                            <input type="text" id="personal-data-nik" name="nama_ibu"
                                                class="form-control                             
                                                    @error('nama_ibu')
                                                        is-invalid
                                                    @enderror"
                                                placeholder="Masukkan Nama Ibu"
                                                value="{{ isset($daftar_online) ? $daftar_online->nama_ibu : old('nama_ibu') }}">
                                            @error('nama_ibu')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="col-lg-4">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label">KTP Dan KK</label>
                                            <div class="input-group">
                                                <div class="form-file">
                                                    <input type="file" accept=".doc,.docx,.pdf,.zip,"
                                                        class="form-file-input form-control" name="file"
                                                        class="form-control                             
                                                    @error('file')
                                                        is-invalid
                                                    @enderror"
                                                        value="{{ isset($daftar_online) ? $daftar_online->file : old('file') }}">
                                                    @error('file')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label">Pekerjaan Ayah </label>
                                            <select name="pekerjaan_ayah"
                                                class="form-control wide @error('pekerjaan_ayah')
                                                        is-invalid
                                                    @enderror"
                                                value="{{ isset($daftar_online) ? $daftar_online->pekerjaan_ayah : old('pekerjaan_ayah') }}">
                                                <option disabled selected>Pekerjaan Ayah</option>
                                                <option value="PNS">PNS</option>
                                                <option value="KARYAWAN">KARYAWAN</option>
                                                <option value="GURU">GURU</option>
                                                <option value="WIRAUSAHA">WIRAUSAHA</option>
                                                <option value="DOKTER">DOKTER</option>
                                                <option value="DLL">DAN LAIN-LAIN</option>
                                            </select>
                                            @error('pekerjaan_ayah')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label">Pekerjaan Ibu </label>
                                            <select name="pekerjaan_ibu"
                                                class="form-control wide @error('pekerjaan_ibu')
                                                        is-invalid
                                                    @enderror"
                                                value="{{ isset($daftar_online) ? $daftar_online->pekerjaan_ibu : old('pekerjaan_ibu') }}">
                                                <option disabled selected>Pekerjaan Ibu</option>
                                                <option value="PNS">PNS</option>
                                                <option value="IRT">IBU RUMAH TANGGA</option>
                                                <option value="KARYAWAN">KARYAWAN</option>
                                                <option value="GURU">GURU</option>
                                                <option value="WIRAUSAHA">WIRAUSAHA</option>
                                                <option value="DOKTER">DOKTER</option>
                                                <option value="DLL">DAN LAIN-LAIN</option>
                                            </select>
                                            @error('pekerjaan_ibu')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>



                                    <div class="col-lg-3">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label">Penghasilan Ayah </label>
                                            <select name="penghasilan_ayah"
                                                class="form-control wide @error('penghasilan_ayah')
                                                        is-invalid
                                                    @enderror"
                                                value="{{ isset($daftar_online) ? $daftar_online->penghasilan_ayah : old('penghasilan_ayah') }}">
                                                <option disabled selected>Penghasilan Ibu</option>
                                                <option value="Rp.1.000.000">-Rp.1.000.000</option>
                                                <option value="Rp.1.500.000-2.500.000">Rp.1.500.000-2.500.000</option>
                                                <option value="Rp.2.500.000-3.500.000">Rp.2.500.000-3.500.000</option>
                                                <option value="Rp.4.500.000-7.500.000">Rp.4.500.000-7.500.000</option>
                                                <option value="+Rp.10.000.000">+Rp.10.000.000</option>
                                                <option value="DLL">DAN LAIN-LAIN</option>
                                            </select>
                                            @error('penghasilan_ayah')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label">Penghasilan Ibu </label>
                                            <select name="penghasilan_ibu"
                                                class="form-control wide @error('penghasilan_ibu')
                                                        is-invalid
                                                    @enderror"
                                                value="{{ isset($daftar_online) ? $daftar_online->penghasilan_ibu : old('penghasilan_ibu') }}">
                                                <option disabled selected>Penghasilan Ibu</option>
                                                <option value="Rp.1.000.000">-Rp.1.000.000</option>
                                                <option value="Rp.1.500.000-2.500.000">Rp.1.500.000-2.500.000</option>
                                                <option value="Rp.2.500.000-3.500.000">Rp.2.500.000-3.500.000</option>
                                                <option value="Rp.4.500.000-7.500.000">Rp.4.500.000-7.500.000</option>
                                                <option value="+Rp.10.000.000">+Rp.10.000.000</option>
                                                <option value="DLL">DAN LAIN-LAIN</option>

                                            </select>
                                            @error('penghasilan_ibu')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>



                                </div>

                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label">Pendidikan Ayah </label>
                                            <select name="pendidikan_ayah"
                                                class="form-control wide @error('pendidikan_ayah')
                                                        is-invalid
                                                    @enderror"
                                                value="{{ isset($daftar_online) ? $daftar_online->pendidikan_ayah : old('pendidikan_ayah') }}">
                                                <option disabled selected>Pendidikan Ayah</option>
                                                <option value="SD">SD</option>
                                                <option value="SMP">SMP</option>
                                                <option value="SMA/SMK">SMA/SMK</option>
                                                <option value="SI">SI</option>
                                                <option value="S2">S2</option>
                                                <option value="S3">S3</option>
                                                <option value="DLL">DAN LAIN-LAIN</option>
                                            </select>
                                            @error('pendidikan_ayah')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label">Pendidikan Ibu </label>
                                            <select name="pendidikan_ibu"
                                                class="form-control wide @error('pendidikan_ibu')
                                                        is-invalid
                                                    @enderror"
                                                value="{{ isset($daftar_online) ? $daftar_online->pendidikan_ibu : old('pendidikan_ibu') }}">
                                                <option disabled selected>Pendidikan Ibu</option>
                                                <option value="SD">SD</option>
                                                <option value="SMP">SMP</option>
                                                <option value="SMA/SMK">SMA/SMK</option>
                                                <option value="SI">SI</option>
                                                <option value="S2">S2</option>
                                                <option value="S3">S3</option>
                                                <option value="DLL">DAN LAIN-LAIN</option>
                                            </select>
                                            @error('pendidikan_ibu')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label">No Telpon ayah</label>
                                            <input type="text" name="nohp_ayah"
                                                placeholder="Masukkan Nomor telpon aktif"
                                                class="form-control                             
                                                    @error('nohp_ayah')
                                                        is-invalid
                                                    @enderror"
                                                placeholder="Masukkan Nomor telpon aktif"
                                                value="{{ isset($daftar_online) ? $daftar_online->nohp_ayah : old('nohp_ayah') }}">
                                            @error('nohp_ayah')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label">No Telpon Ibu</label>
                                            <input type="text" name="nohp_ibu"
                                                placeholder="Masukkan Nomor telpon aktif"
                                                class="form-control                             
                                                    @error('nohp_ibu')
                                                        is-invalid
                                                    @enderror"
                                                placeholder="Masukkan nohp_ibu"
                                                value="{{ isset($daftar_online) ? $daftar_online->nohp_ibu : old('nohp_ibu') }}">
                                            @error('nohp_ibu')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                </div>

                            </div>



                        </div>



                    </div>
                </div>

            </div>
    </div>



    <div class="row my-5">
        <div class="col">
            <div class="text-center mt-2 mt-sm-0">
                <button type="submit" name="add" class="btn btn-success">Daftar Sekarang</button>
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row-->
</div>
</form>
</div>
</div>



{{-- <div class="col-lg-4">
                                    <div class="mb-3 mb-4">
                                        <label class="form-label">penghasilan ayah</label>
                                        <input type="text" name="penghasilan_ayah"
                                            placeholder="Masukkan Tempat Lahir"
                                            class="form-control                             
                                                    @error('penghasilan_ayah')
                                                        is-invalid
                                                    @enderror"
                                            value="{{ isset($daftar_online) ? $daftar_online->penghasilan_ayah : old('penghasilan_ayah') }}">
                                        @error('penghasilan_ayah')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="mb-3 mb-4">
                                        <label class="form-label">penghasilan ibu</label>
                                        <input type="text" name="penghasilan_ibu"
                                            placeholder="Masukkan Tempat Lahir"
                                            class="form-control                             
                                                    @error('penghasilan_ibu')
                                                        is-invalid
                                                    @enderror"
                                            value="{{ isset($daftar_online) ? $daftar_online->penghasilan_ibu : old('penghasilan_ibu') }}">
                                        @error('penghasilan_ibu')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div> --}}
