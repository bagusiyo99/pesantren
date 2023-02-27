    <div class="row">


        <div class="col-xl-12">
            <div class="custom-accordion">
                <div class="card">

                    <div class="p-4 border-top">
                        <h5 class="font-size-16 mb-5">Data Siswa</h5>

                        <div class="row">

                            <div class="col-lg-2">
                                <div class="mb-3 mb-4">
                                    <label class="form-label">NISN</label>
                                    <p class="form-control"> {{ $daftar_online->nisn }}</p>
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="mb-3 mb-4">
                                    <label class="form-label">NIK</label>
                                    <p class="form-control"> {{ $daftar_online->nik }}</p>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="mb-3 mb-4">
                                    <label class="form-label">NAMA LENGKAP</label>
                                    <p class="form-control"> {{ $daftar_online->nama_siswa }}</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3 mb-4">
                                    <label class="form-label">EMAIL</label>
                                    <p class="form-control"> {{ $daftar_online->email }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-2">
                                <div class="mb-3 mb-4">
                                    <label class="form-label">NO HP</label>
                                    <p class="form-control"> {{ $daftar_online->hp }}</p>
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="mb-3 mb-4">
                                    <label class="form-label">TANGGAL LAHIR</label>
                                    <p class="form-control"> {{ $daftar_online->tanggal_lahir }}</p>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="mb-3 mb-3">
                                    <label class="form-label">JENIS KELAMIN</label>
                                    <p class="form-control"> {{ $daftar_online->jk }}</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3 mb-5">
                                    <label class="form-label">TEMPAT LAHIR</label>
                                    <p class="form-control"> {{ $daftar_online->tempat_lahir }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-8">
                                <div class="mb-3 mb-4">
                                    <label class="form-label">ALAMAT</label>
                                    <textarea class="form-control" id="summernote"> {{ $daftar_online->alamat }}</textarea>
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="mb-3 mb-4">
                                    <label class="form-label">PAS FOTO</label>
                                    @if (isset($daftar_online))
                                        <img src="/{{ $daftar_online->gambar }}" target="_blank" width="400px"
                                            height="400px" alt="">
                                    @endif
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-8">
                            <div class="mb-3 mb-4">
                                <label class="form-label">FILE SISWA</label>
                                @if (isset($daftar_online))
                                    <iframe src="/{{ $daftar_online->berkas }}" width="1200px" height="900px"
                                        alt=""></iframe>
                                @endif
                            </div>
                        </div>


                        <div class="p-4 border-top">
                            <h5 class="font-size-16 mb-5">Data Ortu</h5>

                            <div class="row">

                                <div class="col-lg-4">
                                    <div class="mb-3 mb-4">
                                        <label class="form-label">NAMA AYAH</label>
                                        <p class="form-control"> {{ $daftar_online->nama_ayah }}</p>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="mb-3 mb-4">
                                        <label class="form-label">NAMA IBU</label>
                                        <p class="form-control"> {{ $daftar_online->nama_ibu }}</p>
                                    </div>
                                </div>

                                <div class="col-lg-2">
                                    <div class="mb-3 mb-4">
                                        <label class="form-label">PEKERJAAN AYAH</label>
                                        <p class="form-control"> {{ $daftar_online->pekerjaan_ayah }}</p>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="mb-3 mb-4">
                                        <label class="form-label">PEKERJAAN IBU</label>
                                        <p class="form-control"> {{ $daftar_online->pekerjaan_ibu }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="mb-3 mb-4">
                                        <label class="form-label">PENDIDIKAN AYAH</label>
                                        <p class="form-control"> {{ $daftar_online->pendidikan_ayah }}</p>
                                    </div>
                                </div>

                                <div class="col-lg-2">
                                    <div class="mb-3 mb-4">
                                        <label class="form-label">PENDIDIKAN IBU</label>
                                        <p class="form-control"> {{ $daftar_online->pendidikan_ibu }}</p>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="mb-3 mb-3">
                                        <label class="form-label">NO HP AYAH</label>
                                        <p class="form-control"> {{ $daftar_online->nohp_ayah }}</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3 mb-5">
                                        <label class="form-label">NO HP IBU</label>
                                        <p class="form-control"> {{ $daftar_online->nohp_ibu }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="mb-3 mb-4">
                                        <label class="form-label">PENGHASILAN AYAH</label>
                                        <p class="form-control"> {{ $daftar_online->penghasilan_ayah }}</p>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="mb-3 mb-4">
                                        <label class="form-label">PENGHASILAN IBU</label>
                                        <p class="form-control"> {{ $daftar_online->penghasilan_ibu }}</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label">FILE SISWA</label>
                                            @if (isset($daftar_online))
                                                <iframe src="/{{ $daftar_online->berkas }}" width="1200px"
                                                    height="900px" alt="">
                                            @endif
                                        </div>
                                    </div>


                                </div>

                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="mb-3 mb-4">
                                    <label class="form-label">FILE SISWA</label>
                                    @if (isset($daftar_online))
                                        <iframe src="/{{ $daftar_online->berkas }}" width="600px" height="900px"
                                            alt=""></iframe>
                                    @endif
                                </div>
                            </div>


                        </div>




                    </div>
                    <a href="/admin/daftar_online" class="btn btn-primary mb-3">
                        Kembali</a>
                </div>
            </div>




        </div>
    </div>
    </div>


    {{-- <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">

                    <div class="form-group">
                        <label for="">Gambar</label>
                    </div>
                    @if (isset($daftar_online))
                        <img src="/{{ $daftar_online->gambar }}" width="900px" height="700px" class="mt-4" alt="">
                    @endif

                    <div class="form-group mt-3">
                        <label for="">Nama Lengkap</label>
                        <p class="form-control"> {{ $daftar_online->penghasilan_ayah }}</p>
                    </div>

                    <div class="form-group">
                        <label for="">Email</label>
                        <p class="form-control"> {{ $daftar_online->email }}</p>
                    </div>

                    <div class="form-group">
                        <label for="">Alamat</label>
                        <p class="form-control"> {{ $daftar_online->alamat }}</p>
                    </div>

                    <div class="form-group">
                        <label for="">Email</label>
                        <p class="form-control"> {{ $daftar_online->nik }}</p>
                    </div>

                    <div class="form-group" height="300px">
                        <label>Pesan</label>
                        <textarea class="form-control " height="900px"> {{ $daftar_online->nama_ayah }} </textarea>
                    </div>
                    <a href="/admin/daftar_online" class="btn btn-primary mb-3">
                        Kembali</a>


                    </form>
                </div>
            </div>
        </div>
    </div> --}}
