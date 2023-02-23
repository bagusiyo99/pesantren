<div class="mb-5">
    <img src="/daftar/bg.jpg" width="100%" height="400px" class="mt-4" alt="">
</div>
{{-- <div class="container">
    <div class="row">
        @foreach ($foto as $item)
            <div class="col mb-5">
                <div class="card" style="width: 18rem;">
                    <a target="_blank" href="/{{ $item->gambar }} ">
                        <img src="/{{ $item->gambar }}" class="card-img-top" alt="..." height="200px">
                    </a>
                    <div class="card-body">
                        <p class="card-text" height="400px">
                            {!! Str::limit($item->judul, 60) !!}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div> --}}


<div class="galeri">
    @foreach ($foto as $item)
        <div class="kenangan">

            <div class="card-galeri" data-aos="zoom-in-down" data-aos-duration="2500">
                <a target="_blank" href="/{{ $item->gambar }} ">
                    <img src="/{{ $item->gambar }}" class="card-img-top" alt="..." height="200px">
                </a>
            </div>
            <div class="galeri-description">
                {!! Str::limit($item->judul, 100) !!}
            </div>
        </div>
    @endforeach

</div>
