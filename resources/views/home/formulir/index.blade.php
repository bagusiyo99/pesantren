    <section id="page-header" class="blog-header">


        <h2>Selamat Datang</h2>
        <p> Sejarah SMKN Bagus Bandar Lampung</p>


    </section>

    <div class="container">
        <div class="card-body">
            <h1 class="text-center mb-2">Formulir </h1>
            <form action="">

                <table class="table table-bordered text-center align-items-center">

                    <thead class="table-primary">
                        <tr>
                            <td> No </td>
                            <td> Judul</td>
                            <td> Action </td>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($formulir as $item)
                            <tr>
                                <td> {{ $loop->iteration }} </td>
                                <td> {{ $item->judul }} </td>
                                <td><a class="btn btn-success " href="{{ $item->file }}"download>Download</a></td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </form>
        </div>
    </div>
