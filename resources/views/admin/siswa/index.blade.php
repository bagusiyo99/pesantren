<div class="container">
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
</div>
