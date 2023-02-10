<section id="page-header" class="blog-header">


    <h2>Selamat Datang</h2>
    <p> Buruan Beli Sebelum Kehabisan Stok</p>


</section>

<div class="main">
    <h3 class="heading">{{ $iphone->judul }}</h3>
    <p>{{ $iphone->created_at }}</p>

    <div class="detail-tentang">
        <img src="/{{ $iphone->gambar }}" width="500px" height="400px">
    </div>
</div>

<div class="huruf">
    <p>{!! $iphone->deskripsi !!}</p>
</div>
