{{-- <div class="container">
    <div class="card-body">
        <h1 class="text-center mb-2">Formulir </h1>
        <form action="">

            <table class="table table-bordered text-center align-items-center" id="dataTables-example">

                <thead class="table-primary text-center">
                    <tr class="text-center">
                        <td class="text-center" width="50px"> No </td>
                        <td class="text-center"> Judul</td>
                        <td class="text-center"> Action </td>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($siswa as $item)
                        <tr>
                            <td> {{ $loop->iteration }} </td>
                            <td> {{ $item->judul }} </td>
                            <td><a class="btn btn-success " width="60px" href="/{{ $item->file }}"Download><i
                                        class="fa-sharp fa-solid fa-circle-down"></i> Download</a></td>

                        </tr>
                    @endforeach
                </tbody>

            </table>
        </form>
    </div>
</div> --}}


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered text-center" id="dataTables-example">

                    <thead>
                        <tr class="btn-secondary">
                            <td> No </td>
                            <td class="text-center"> Nama </td>
                            <td> File </td>
                            <td> Action </td>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($siswa as $item)
                            <tr>
                                <td> {{ $loop->iteration }} </td>
                                <td> {{ $item->judul }} </td>
                                <td><a class="btn btn-success " width="60px" href="/{{ $item->file }}"Download><i
                                            class=" fa fa-download"></i> Download</a></td>

                                <td>
                                    <div class="text-center mb-1">
                                        <a href="/admin/siswa/{{ $item->id }} "
                                            class="btn btn-success  mb-2">Detail</a>

                                        <form action="/admin/siswa/{{ $item->id }}" method="POST">
                                            @method ('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger mx-2">Hapus</button>

                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>
