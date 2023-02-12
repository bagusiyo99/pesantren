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


        <form action="/contact/send" method="POST" class="row g-3">
            @csrf
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="inputEmail4" name="nama">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Email</label>
                <input type="text" class="form-control" id="inputPassword4" name="email">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Alamat" name="alamat">
            </div>

            <select class="form-select col-12" aria-label="Default select example" name="jk">
                <option selected>Jenis Kelamin</option>
                <option value="Laki">Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="pesan"></textarea>
            </div>



            <div class="col-12 my-5">
                <button type="submit" class="btn btn-primary">Kirim</button>
            </div>


        </form>














    </div>
