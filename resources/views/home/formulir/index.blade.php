<div>
    <img src="/daftar/bg.jpg" width="100%" height="400px" class="mt-4" alt="">
</div>

<div class="container">
    <div class="card-body">
        <h1 class="text-center mb-2">Formulir </h1>
        <form action="">

            <table class="table table-bordered text-center align-items-center" id="example">

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

<div class="container">
    <div class="row mb-5">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni enim tenetur, aut non
                        consectetur facilis! Iusto quis recusandae sed exercitationem. Sequi, ab saepe. In dolor
                        voluptas repellat aliquam nemo ex. Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Autem ipsum repellendus at facilis culpa quis rerum nemo ipsam non. Nam laborum iusto harum
                        molestias a quaerat laudantium itaque excepturi maiores!</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <ul class="list-group col-sm-14">
        <li class="list-group-item active" aria-current="true">An active item</li>
        <li class="list-group-item">A second item Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui nulla
            labore corrupti dicta et veniam optio harum voluptas quibusdam officiis, enim hic porro vero illum
            necessitatibus velit provident architecto blanditiis. Lorem ipsum dolor sit amet consectetur,
            adipisicing
            elit. Ipsum enim culpa nam sunt quo neque. Temporibus quisquam molestiae inventore repellat ab! Culpa in
            repellat reprehenderit, ullam rem tempore consectetur. Praesentium!</li>
        <li class="list-group-item">A third item</li>
        <li class="list-group-item">A fourth item</li>
        <li class="list-group-item">And a fifth one</li>
    </ul>
</div>
