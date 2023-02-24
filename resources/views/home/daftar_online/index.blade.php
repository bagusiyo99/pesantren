<div class="container mt-5">
    <div class="row">
        <form action="/daftar_online/send" method="POST" enctype="multipart/form-data" class="row g-3 align-center">
            <div class="col-xl-12">
                <div class="custom-accordion">
                    <div class="card">
                        <a href="#personal-saya" class="text-dark text-daftar" data-bs-toggle="collapse">

                            <div class="p-4 text-daftar">
                                <h5 class="font-size-16 mb-1">Data Pribadi</h5>
                                <p>NISN, NIK, Nama, Jenis Kelamin, Pas
                                    Photo, TTL, dsb</p>
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

                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label" for="personal-data-name">Nama</label>
                                            <input type="text" id="basicpill" name="nama"
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
                                            <input type="text" id="basicpill" name="tempatlahir"
                                                placeholder="Masukkan Tempat Lahir" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-4 mb-lg-0">
                                            <label class="form-label" for="billing-city">Tanggal lahir</label>
                                            <input type="date" id="basicpill" name="tanggallahir"
                                                placeholder="Masukkan Tanggal Lahir" required>
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
</div>
