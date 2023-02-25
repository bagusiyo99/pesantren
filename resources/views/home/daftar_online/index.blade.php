<div class="container mt-5">
    <div class="row">
        <form action="/daftar_online/send" method="POST" enctype="multipart/form-data" class="row g-3 align-center">
            @csrf

            <div class="col-xl-12">
                <div class="custom-accordion">
                    <div class="card">
                        <a href="#personal-saya" class="text-dark text-daftar" data-bs-toggle="collapse">

                            <div class="p-4 text-daftar">
                                <h5 class="font-size-16 mb-1">Data Pribadi</h5>
                                <p>nama_ayah, NIK, Nama, Jenis Kelamin, Pas
                                    Photo, TTL, dsb</p>
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
                                                placeholder="Email"
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
                                            <input type="text" name="nama_siswa"
                                                placeholder="Masukkan nama_siswa Lengkap"
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
                                            <input type="text" name="hp" placeholder="Masukkan no hp Lengkap"
                                                class="form-control                             
                                                    @error('hp')
                                                        is-invalid
                                                    @enderror"
                                                placeholder="Masukkan hp"
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
                                            <label class="form-label" for="zip-code">Pas Photo</label>
                                            <div class="input-group">
                                                <div class="form-file">
                                                    <input type="file" class="form-file-input form-control"
                                                        name="gambar" accept="image/png, image/jpg, image/jpeg"
                                                        class="form-control                             
                                                    @error('gambar')
                                                        is-invalid
                                                    @enderror"
                                                        value="{{ isset($daftar_online) ? $daftar_online->gambar : old('gambar') }}">
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

                                    {{-- <div class="col-lg-4">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label" for="zip-code">Berkas ijasah dan
                                                lain-lain</label>
                                            <div class="input-group">
                                                <div class="form-file">
                                                    <input type="file" class="form-file-input form-control"
                                                        name="berkas"
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



                                    </div> --}}
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
                                <p>NISN, NIK, Nama, Jenis Kelamin, Pas
                                    Photo, TTL, dsb</p>
                            </div>
                        </a>
                        <div id="ortu-saya" class="collapse show">
                            <div class="p-4 border-top">

                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label">Nama Ayah</label>
                                            <input type="text" id="personal-data-nisn" name="nama_ayah"
                                                class="form-control                             
                                                    @error('nama_ayah')
                                                        is-invalid
                                                    @enderror"
                                                placeholder="Nama Ayah"
                                                value="{{ isset($daftar_online) ? $daftar_online->nama_ayah : old('nama_ayah') }}">
                                            @error('nama_ayah')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
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

                                    <div class="col-lg-3">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label">Pekerjaan ayah</label>
                                            <input type="text" name="pekerjaan_ayah"
                                                class="form-control                             
                                                    @error('pekerjaan_ayah')
                                                        is-invalid
                                                    @enderror"
                                                placeholder="Masukkan Pekerjaan ayah"
                                                value="{{ isset($daftar_online) ? $daftar_online->pekerjaan_ayah : old('pekerjaan_ayah') }}">
                                            @error('pekerjaan_ayah')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="col-lg-3">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label">Pekerjaan ibu</label>
                                            <input type="text" name="pekerjaan_ibu"
                                                class="form-control                             
                                                    @error('pekerjaan_ibu')
                                                        is-invalid
                                                    @enderror"
                                                placeholder="Masukkan Pekerjaan ibu"
                                                value="{{ isset($daftar_online) ? $daftar_online->pekerjaan_ibu : old('pekerjaan_ibu') }}">
                                            @error('pekerjaan_ibu')
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
                                            <label class="form-label">Pendidikan ayah</label>
                                            <input type="text" name="pendidikan_ayah"
                                                placeholder="Masukkan pendidikan_ayah "
                                                class="form-control                             
                                                    @error('pendidikan_ayah')
                                                        is-invalid
                                                    @enderror"
                                                placeholder="Masukkan pendidikan ayah"
                                                value="{{ isset($daftar_online) ? $daftar_online->pendidikan_ayah : old('pendidikan_ayah') }}">
                                            @error('pendidikan_ayah')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label">Pendidikan Ibu</label>
                                            <input type="text" name="pendidikan_ibu"
                                                placeholder="Masukkan pendidikan_ibu Lengkap"
                                                class="form-control                             
                                                    @error('pendidikan_ibu')
                                                        is-invalid
                                                    @enderror"
                                                placeholder="Masukkan pendidikan_ibu"
                                                value="{{ isset($daftar_online) ? $daftar_online->pendidikan_ibu : old('pendidikan_ibu') }}">
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
                                                placeholder="Masukkan nohp_ayah Lengkap"
                                                class="form-control                             
                                                    @error('nohp_ayah')
                                                        is-invalid
                                                    @enderror"
                                                placeholder="Masukkan nohp_ayah"
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
                                                placeholder="Masukkan nohp_ibu Lengkap"
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

                                <div class="row">
                                    <div class="col-lg-4">
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
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label">file</label>
                                            <div class="input-group">
                                                <div class="form-file">
                                                    <input type="file" class="form-file-input form-control"
                                                        name="file"
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