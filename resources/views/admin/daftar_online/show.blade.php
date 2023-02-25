<div class="row">
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
                    <p class="form-control"> {{ $daftar_online->nama }}</p>
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





                <a href="/admin/pendaftaran" class="btn btn-primary mb-3">
                    Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
