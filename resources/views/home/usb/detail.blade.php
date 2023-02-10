<section id="page-header" class="blog-header">


    <h2>Selamat Datang</h2>
    <p> Sejarah SMKN Bagus Bandar Lampung</p>


</section>

<div class="main">
    <h3 class="heading">{{ $usb->judul }}</h3>
    <p>{{ $usb->created_at }}</p>
    <p>{{ $usb->created_at }}</p>


    <div class="detail-tentang">
        <img src="/{{ $usb->gambar }}" width="500px" height="400px">
    </div>
</div>

<div class="huruf">
    <p>{!! $usb->deskripsi !!}</p>
</div>
