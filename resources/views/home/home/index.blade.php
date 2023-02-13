<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators ">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
            aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        @foreach ($banner as $key => $item)
            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                <img src="/{{ $item->gambar }}" class="img-carousel" alt="">
                <div class="carousel-caption d-none d-md-block text-success">
                    <h5>{{ $item->judul }}</h5>
                    <p>{{ $item->deskripsi }}</p>
                </div>
            </div>
        @endforeach

    </div>
    <button class="carousel-control-prev text-success" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next text-success" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

{{-- <div class="container my-5">
    <div class="text-center">
        <h4> About </h4>
    </div>
</div> --}}
<div class="main">
    <h3 class="heading">About</h3>
</div>
<section class="info mb-2">
    <div class="main-info">
        @foreach ($about as $item)
            <img src="/{{ $item->gambar }}">
            <div class="tulis">
                <h4>{{ $item->judul }}</h4>
                {{-- <h1>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h1> --}}
                <p>{{ $item->deskripsi }} </p>

            </div>
    </div>
    @endforeach
</section>

<div class="bg-success my-5">

    <div class="container my-5">
        <div class="text-center text-white">
            <h4> Pelajari lanjut </h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam magnam ducimus quam aliquid
                reprehenderit assumenda nobis facere nostrum odit accusantium delectus, obcaecati commodi voluptas
                dolorum unde eaque architecto deleniti totam!</p>
        </div>
    </div>
</div>










<div class="main">
    <h3 class="heading">Informasi</h3>
</div>
<main class="container">

    <div class="p-3 p-md-4 mb-5 text-white rounded bg-success">
        <div class="col-md-7 px-0">
            <h1 class="display-4 fst-italic">Beli Barang Elektronik Murah, (nama toko ) Solusinya!</h1>
            <p class="lead my-3">Dapatkan Update Informasi Terbaru hanya di website (nama toko ) </p>
        </div>
    </div>

    <div class="row mb-2">
        @foreach ($informasi as $item)
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static masee">
                        <strong class="d-inline-block mb-2 text-success">Informasi Terbaru</strong>
                        <h3 class="mb-3">{{ $item->judul }}</h3>
                        <p class="card-text mb-4">{!! Str::limit($item->deskripsi, 200) !!}</p>
                        <a clas="info" href="/informasi/{{ $item->id }}">Lanjutkan Membaca</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="200" height="250" src="/{{ $item->gambar }}">

                    </div>
                </div>

            </div>
        @endforeach

    </div>
</main>
