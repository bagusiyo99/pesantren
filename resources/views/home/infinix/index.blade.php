    <section id="page-header" class="blog-header" class="mb-3">
        <h2>Informasi Terkini</h2>
        <p> Informasi Selalu Update</p>
    </section>

    <section class="blog">
        @foreach ($infinix as $item)
            <div class="blog-box mt-5">
                <div class="blog-img">
                    <img src="/{{ $item->gambar }}">
                </div>
                <div class="blog-detail mb-3">
                    <h3>{{ $item->judul }}</h3>
                    <h4>Rp.{{ $item->harga }}</h4>
                    <p> {!! Str::limit($item->deskripsi, 170) !!}</p>
                    <a href="/infinix/detail/{{ $item->id }}">Detail</a>
                </div>
            </div>
        @endforeach
    </section>
