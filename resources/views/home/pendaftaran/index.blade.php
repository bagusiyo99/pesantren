    <section id="page-header" class="blog-header">


        <h2>Selamat Datang</h2>
        <p> Sejarah SMKN Bagus Bandar Lampung</p>


    </section>

    <div class="container">


        <div class="container mt-5">
            <div class="text-center">
                <h4> Blog </h4>
            </div>
        </div>


        <form action="/pendaftaran/send" method="POST" enctype="multipart/form-data" class="row g-3">
            @csrf
            <div class="form-group col-md-5">
                <label for="">Nama</label>
                <input type="text" name="nama"
                    class="form-control                             
                        @error('nama')
                            is-invalid
                            @enderror"
                    placeholder="nama" value="{{ isset($pendaftaran) ? $pendaftaran->nama : old('nama') }}">
                @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="email"
                    class="form-control                             
                        @error('email')
                            is-invalid
                            @enderror"
                    placeholder="email" value="{{ isset($pendaftaran) ? $pendaftaran->email : old('email') }}">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="col-12">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Alamat" name="alamat">
                @error('alamat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="col-12">
                <label for="inputAddress" class="form-label">Whatsapp </label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Whatsapp" name="telpon">
                @error('telpon')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="formFile" class="form-label">Default file input example</label>
                <input class="form-control" type="file" id="formFile" name="gambar">
                @error('gambar')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>


            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="pesan"></textarea>
                @error('pesan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>



            <div class="col-12 my-5">
                <button type="submit" class="btn btn-primary">Kirim</button>
            </div>


        </form>














    </div>
