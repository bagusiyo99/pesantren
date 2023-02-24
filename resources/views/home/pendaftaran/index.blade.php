    <section id="page-header" class="blog-header">


        <h2>Selamat Datang</h2>
        <p> Isi Formulir Pembayaran Pendaftaran</p>


    </section>

    <div class="container">


        <div class="container mt-5  mb-5">
            <div class="text-center">
                <h4> Formulir Konfirmasi Pembayaran Pendaftaran</h4>
            </div>
        </div>

        <div class="container">
            <form action="/daftar_online/send" method="POST" enctype="multipart/form-data" class="row g-3 align-center">
                @csrf
                <div class="form-group col-md-5">
                    <label for="">Nama</label>
                    <input type="text" name="nama"
                        class="form-control                             
                        @error('nama')
                            is-invalid
                            @enderror"
                        placeholder="Nama Lengkap"
                        value="{{ isset($daftar_online) ? $daftar_online->nama : old('nama') }}">
                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group col-md-5">
                    <label for="">Email</label>
                    <input type="email" name="email"
                        class="form-control                             
                        @error('email')
                            is-invalid
                            @enderror"
                        placeholder="Email" value="{{ isset($daftar_online) ? $daftar_online->email : old('email') }}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group col-md-5">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" id="inputAddress" placeholder="Alamat" name="alamat"
                        class="form-control                             
                        @error('alamat')
                            is-invalid
                            @enderror"
                        value="{{ isset($daftar_online) ? $daftar_online->alamat : old('alamat') }}">
                    @error('alamat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <div class="form-group col-md-5">
                    <label for="inputAddress" class="form-label">Whatsapp </label>
                    <input type="text" id="inputAddress" placeholder="Whatsapp" name="telpon"
                        class="form-control                             
                        @error('telpon')
                            is-invalid
                            @enderror"
                        value="{{ isset($daftar_online) ? $daftar_online->telpon : old('telpon') }}">
                    @error('telpon')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="col-md-5 mb-3">
                    <label for="formFile" class="form-label">Bukti Pembayaran daftar_online</label>
                    <input type="file" id="formFile" name="gambar"
                        class="form-control                             
                        @error('gambar')
                            is-invalid
                            @enderror"
                        placeholder="Email"
                        value="{{ isset($daftar_online) ? $daftar_online->gambar : old('gambar') }}">
                    @error('gambar')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                <div class="col-md-8 mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                    <textarea id="exampleFormControlTextarea1" rows="3" name="pesan"
                        class="form-control                             
                        @error('pesan')
                            is-invalid
                            @enderror"
                        value="{{ isset($daftar_online) ? $daftar_online->pesan : old('pesan') }}"></textarea>
                    @error('pesan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>



                <div class="col-5 my-5">
                    <button type="submit" class="btn btn-success">Kirim</button>
                </div>


            </form>

        </div>












    </div>





    <div class="row">
        <form action="/daftar_online/send" method="POST" enctype="multipart/form-data" class="row g-3 align-center">
            <div class="col-xl-12">
                <div class="custom-accordion">
                    <div class="card">
                        <a href="#personal-saya" class="text-dark" data-bs-toggle="collapse">
                            <div class="p-4">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="font-size-16 mb-1">Data Pribadi</h5>
                                        <p class="text-muted text-truncate mb-0">NISN, NIK, Nama, Jenis Kelamin, Pas
                                            Photo, TTL, dsb</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <div id="personal-saya" class="collapse show">
                            <div class="p-4 border-top">

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label">NISN</label>
                                            <input type="text" id="personal-data-nisn" name="nisn"
                                                class="form-control                             
                                                    @error('email')
                                                        is-invalid
                                                    @enderror"
                                                placeholder="Email"
                                                value="{{ isset($daftar_online) ? $daftar_online->email : old('email') }}">
                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label" for="personal-data-nik">NIK</label>
                                            <input type="text" class="form-control" id="personal-data-nik"
                                                name="nik" placeholder="Masukkan NIK" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label" for="personal-data-name">Nama</label>
                                            <input type="text" class="form-control" id="basicpill" name="nama"
                                                placeholder="Masukkan Nama Lengkap" value="" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label" for="personal-data-gender">Jenis
                                                Kelamin</label>
                                            <select class="form-control wide" name="jk">
                                                <option disabled selected>Pilih
                                                    Jenis Kelamin </option>
                                                <option value="Laki-laki">Laki-aki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-4 mb-lg-0">
                                            <label class="form-label">Tempat lahir</label>
                                            <input type="text" class="form-control" id="basicpill"
                                                name="tempatlahir" placeholder="Masukkan Tempat Lahir" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-4 mb-lg-0">
                                            <label class="form-label" for="billing-city">Tanggal lahir</label>
                                            <input type="date" class="form-control" id="basicpill"
                                                name="tanggallahir" placeholder="Masukkan Tanggal Lahir" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-0">
                                            <label class="form-label" for="zip-code">Pas Photo</label>
                                            <div class="input-group">
                                                <div class="form-file">
                                                    <input type="file" class="form-file-input form-control"
                                                        name="foto" accept="image/png, image/jpg, image/jpeg"
                                                        required>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>


                <div class="row my-4">
                    <div class="col">
                        <div class="text-end mt-2 mt-sm-0">
                            <button type="submit" name="add" class="btn btn-primary">Buat
                                Pendaftaran</button>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row-->
            </div>
        </form>
    </div>
