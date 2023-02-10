<section id="page-header" class="blog-header">


    <h2>Selamat Datang</h2>
    <p> Sejarah SMKN Bagus Bandar Lampung</p>


</section>

<div class="main">
    <h3 class="heading">{{ $casing->judul }}</h3>
    <p>{{ $casing->created_at }}</p>


    <div class="detail-tentang">
        <img src="/{{ $casing->gambar }}" width="500px" height="400px">
    </div>
</div>

<div class="huruf">
    <p>{!! $casing->deskripsi !!}</p>
</div>
