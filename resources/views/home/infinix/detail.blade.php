<section id="page-header" class="blog-header">


    <h2>Selamat Datang</h2>
    <p> Sejarah SMKN Bagus Bandar Lampung</p>


</section>

<div class="main">
    <h3 class="heading">{{ $infinix->judul }}</h3>
    <p>{{ $infinix->created_at }}</p>

    <div class="detail-tentang">
        <img src="/{{ $infinix->gambar }}" width="500px" height="400px">
    </div>
</div>

<div class="huruf">
    <p>{!! $infinix->deskripsi !!}</p>
</div>
