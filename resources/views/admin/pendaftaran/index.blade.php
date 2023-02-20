<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered text-center">

                    <tr class="btn-secondary">
                        <td> No </td>
                        <td> Nama </td>
                        <td> Email</td>
                        <td> Whatsapp Atau Telpon </td>
                        {{-- <td width="50px"> Deskripsi </td> --}}
                        <td> Action </td>
                    </tr>

                    @foreach ($pendaftaran as $item)
                        <tr>
                            <td> {{ $loop->iteration }} </td>
                            <td> {{ $item->nama }} </td>
                            <td> {{ $item->email }} </td>
                            <td> {{ $item->telpon }} </td>

                            {{-- <td> {{ $item->desc }} </td> --}}

                            <td>
                                <div class="text-center mb-1">
                                    <a href="/admin/pendaftaran/{{ $item->id }} "
                                        class="btn btn-success  mb-2">Detail</a>

                                    <form action="/admin/pendaftaran/{{ $item->id }}" method="POST">
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
