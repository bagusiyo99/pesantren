<div class="mb-5">
    <img src="/daftar/bg.jpg" width="100%" height="400px" class="mt-4" alt="">
</div>
<div class="container">
    <div class="row">
        @foreach ($foto as $item)
            <div class="col mb-5">
                <div class="card" style="width: 18rem;">
                    <img src="/{{ $item->gambar }}" class="card-img-top" alt="..." height="200px">
                    <div class="card-body">
                        <p class="card-text" height="400px">
                            {{ $item->judul }}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>
