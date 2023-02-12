<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered text-center">

                    <tr class="btn-secondary">
                        <td> No </td>
                        <td> Nama </td>
                        <td> Email</td>
                        <td> Jenis Kelamin</td>
                        {{-- <td width="50px"> Deskripsi </td> --}}
                        <td> Action </td>
                    </tr>

                    @foreach ($pesan as $item)
                        <tr>
                            <td> {{ $loop->iteration }} </td>
                            <td> {{ $item->nama }} </td>
                            <td> {{ $item->email }} </td>
                            <td> {{ $item->jk }} </td>

                            {{-- <td> {{ $item->desc }} </td> --}}

                            <td>
                                <div class="text-center mb-1">
                                    <a href="/admin/pesan/{{ $item->id }} " class="btn btn-success  mb-2">Detail</a>

                                    <form action="/admin/pesan/{{ $item->id }}" method="POST">
                                        @method ('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger mx-2">Hapus</button>

                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </div>
</div>
