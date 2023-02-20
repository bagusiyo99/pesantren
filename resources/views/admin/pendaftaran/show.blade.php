<div class="row">
    <div class="col-md-10">
        <div class="card">
            <div class="card-body">

                <div class="form-group">
                    <label for="">Gambar</label>
                </div>
                @if (isset($pendaftaran))
                    <img src="/{{ $pendaftaran->gambar }}" width="300px" height="300px" class="mt-4" alt="">
                @endif

                <div class="form-group mt-3">
                    <label for="">Nama Lengkap</label>
                    <p class="form-control"> {{ $pendaftaran->nama }}</p>
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <p class="form-control"> {{ $pendaftaran->email }}</p>
                </div>

                <div class="form-group">
                    <label for="">Alamat</label>
                    <p class="form-control"> {{ $pendaftaran->alamat }}</p>
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <p class="form-control"> {{ $pendaftaran->telpon }}</p>
                </div>

                <div class="form-group" height="300px">
                    <label>Pesan</label>
                    <textarea class="form-control " height="900px"> {{ $pendaftaran->pesan }} </textarea>

                </div>





                <a href="/admin/pendaftaran" class="btn btn-primary mb-3">
                    Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
