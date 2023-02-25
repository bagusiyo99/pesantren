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
            <form action="/pendaftaran/send" method="POST" enctype="multipart/form-data" class="row g-3 align-center">
                @csrf
                <div class="form-group col-md-5">
                    <label for="">Nama</label>
                    <input type="text" name="nama"
                        class="form-control                             
                        @error('nama')
                            is-invalid
                            @enderror"
                        placeholder="Nama Lengkap" value="{{ isset($pendaftaran) ? $pendaftaran->nama : old('nama') }}">
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
                        placeholder="Email" value="{{ isset($pendaftaran) ? $pendaftaran->email : old('email') }}">
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
                        value="{{ isset($pendaftaran) ? $pendaftaran->alamat : old('alamat') }}">
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
                        value="{{ isset($pendaftaran) ? $pendaftaran->telpon : old('telpon') }}">
                    @error('telpon')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="col-md-5 mb-3">
                    <label for="formFile" class="form-label">Bukti Pembayaran pendaftaran</label>
                    <input type="file" id="formFile" name="gambar"
                        class="form-control                             
                        @error('gambar')
                            is-invalid
                            @enderror"
                        placeholder="Email" value="{{ isset($pendaftaran) ? $pendaftaran->gambar : old('gambar') }}">
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
                        value="{{ isset($pendaftaran) ? $pendaftaran->pesan : old('pesan') }}"></textarea>
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
