<section id="page-header" class="blog-header">


    <h2>Selamat Datang</h2>
    <p> Sejarah SMKN Bagus Bandar Lampung</p>


</section>

<div class="main">
    <h3 class="heading">{{ $samsung->judul }}</h3>
    <p>{{ $samsung->created_at }}</p>

    <div class="detail-tentang">
        <img src="/{{ $samsung->gambar }}" width="500px" height="400px">
    </div>
</div>

<div class="huruf">
    <p>{!! $samsung->deskripsi !!}</p>
</div>
