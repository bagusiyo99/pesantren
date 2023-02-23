    <section id="page-header" class="blog-header">


        <h2>Selamat Datang</h2>
        <p> Isi Formulir Pembayaran Pendaftaran</p>


    </section>

    <div class="container">


        <div class="container mt-5  mb-5">
            <div class="text-center">
                <h4> Daftar Sekarang</h4>
            </div>
        </div>

        <div class="container">
            <form action="/siswa/send" method="POST" enctype="multipart/form-data" class="row g-3 align-center">
                @csrf
                <div class="form-group col-md-5">
                    <label for="">Nama</label>
                    <input type="text" name="judul"
                        class="form-control                             
                        @error('judul')
                            is-invalid
                            @enderror"
                        placeholder="Nama Lengkap" value="{{ isset($siswa) ? $siswa->judul : old('judul') }}">
                    @error('judul')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group col-md-5">
                    <label for="">Pesan</label>
                    <input type="text" name="deskripsi"
                        class="form-control                             
                        @error('deskripsi')
                            is-invalid
                            @enderror"
                        placeholder="Pesan" value="{{ isset($siswa) ? $siswa->deskripsi : old('deskripsi') }}">
                    @error('deskripsi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                <div class="col-md-5 mb-3">
                    <label for="formFile" class="form-label">Bukti Pembayaran Pendaftaran</label>
                    <input type="file" id="formFile" name="file"
                        class="form-control                             
                        @error('file')
                            is-invalid
                            @enderror"
                        placeholder="file" value="{{ isset($siswa) ? $siswa->file : old('file') }}">
                    @error('file')
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
