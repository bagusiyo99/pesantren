   <div>
       <img src="/img/sd.jpg" width="100%" class="img-fluid" alt="...">
   </div>
   <div class="main-blog mt-5">

       <div class="container1 mt-5">
           <div class="blog-berita" data-aos="fade-right" data-aos-offset="700" data-aos-easing="ease-in-sine">

               <h2 class="h2">Kegiatan</h2>
               @foreach ($blog as $item)
                   <div class="blog-card-group">
                       <div class="blog-card">
                           <div class="blog-card-banner">
                               <img src="/{{ $item->gambar }}" width="150" class="blog-banner-img">
                           </div>
                           <div class="blog-content-wrapper">
                               <h5 class="blog-tulis ">{{ $item->created_at->format('d F Y ') }}</h5>
                               <h3 class="h3"> {{ $item->judul }}</h3>
                               <p class="blog-text">
                                   {!! Str::limit($item->deskripsi, 300) !!}</p>
                               <a href="/blog/{{ $item->id }}" class="blog-topic text-tiny">Detail</a>
                           </div>
                       </div>
                   </div>
               @endforeach

           </div>






           <div class="aside" data-aos="fade-left" data-aos-offset="500" data-aos-easing="ease-in-sine">


               <div class="tags">

                   <h2 class="h2">Tag</h2>

                   <div class="wrapper">

                       <button class="hashtag">Daftar</button>
                       <button class="hashtag">Vidio</button>
                       <button class="hashtag">Foto</button>

                       <a href="/foto" class="hashtag">Kegiatan Siswa Siswi</a>


                   </div>

               </div>

               <div class="contact">

                   <h2 class="h2">Sosial Media</h2>

                   <div class="wrapper">

                       <p>
                           Jika Anda ingin mengenal kami lebih jauh dan informasi ter-update, maka ikuti kami di media
                           sosial
                       </p>

                       <ul class="social-link">

                           <li>
                               <a href="#" class="icon-box discord">
                                   <i class="fa-brands fa-tiktok"></i> </a>
                           </li>


                           <li>
                               <a href="#" class="icon-box twitter">
                                   <i class="fa-brands fa-twitter"></i> </a>
                           </li>

                           <li>
                               <a href="#" class="icon-box facebook">
                                   <i class="fa-brands fa-instagram"></i> </a>
                           </li>



                       </ul>

                   </div>

               </div>

               <div class="newsletter">

                   <h2 class="h2">Pendaftaran</h2>

                   <div class="wrapper">

                       <p>
                           Jika Anda ingin mendaftar, maka klik link di bawah ini.
                       </p>

                       <form action="#">

                           <a href="/daftar_online" type="submit" class="btn btn-success">Pendaftaran</a>
                       </form>

                   </div>

               </div>

           </div>

       </div>

   </div>
