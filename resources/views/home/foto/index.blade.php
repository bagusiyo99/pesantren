<div class="mb-5">
    <img src="/daftar/bg.jpg" width="100%" height="400px" class="mt-4" alt="">
</div>
<div class="container">
    <div class="row">
        @foreach ($foto as $item)
            <div class="col mb-5">
                <div class="card" style="width: 18rem;">
                    <a href="/foto">
                        <img src="/{{ $item->gambar }}" class="card-img-top" alt="..." height="200px">
                    </a>
                    <div class="card-body">
                        <p class="card-text">
                            {!! Str::limit($item->judul, 40) !!}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>
