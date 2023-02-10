<section id="page-header" class="blog-header">


    <h2>Selamat Datang</h2>
    <p> Sejarah SMKN Bagus Bandar Lampung</p>


</section>

<div class="main">
    <h3 class="heading">{{ $hplain->judul }}</h3>
    <p>{{ $hplain->created_at }}</p>

    <div class="detail-tentang">
        <img src="/{{ $hplain->gambar }}" width="500px" height="400px">
    </div>
</div>

<div class="huruf">
    <p>{!! $hplain->deskripsi !!}</p>
</div>
