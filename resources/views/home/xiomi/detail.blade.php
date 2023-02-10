<section id="page-header" class="blog-header">


    <h2>Selamat Datang</h2>
    <p> Sejarah SMKN Bagus Bandar Lampung</p>


</section>

<div class="main">
    <h3 class="heading">{{ $xiomi->judul }}</h3>
    <p>{{ $xiomi->created_at }}</p>

    <div class="detail-tentang">
        <img src="/{{ $xiomi->gambar }}" width="500px" height="400px">
    </div>
</div>

<div class="huruf">
    <p>{!! $xiomi->deskripsi !!}</p>
</div>
