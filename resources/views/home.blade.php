@extends('layouts.main')


<header id="header" class="header">
  <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white font-weight-bold">My Website</h1>
                    <hr class="divider" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 mb-5">Welcome to My Website, website ini adalah model prototype untuk tugas akhir yang menggunakan framework laravel 8</p>
                    <a class="btn btn-primary btn-xl" href="/about">Find Out More</a>
                </div>
            </div>
        </div>
    </header>

    <!-- About-->
    <section class="page-section bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-5">
                    <div class="text-container">
                        <div class="section-title text-white font-weight-bold">Welcome to My Web</div>
                        <h1 class="h1-large text-white font-weight-bold">Website ini di gunakan sebagai media pembelajaran</h1>
                        <p class="p-large">Informasi mengenai website ini masih terbatas silahkan dinilai dan berikan nilainya.</p>
                        <a class="btn btn-success" href="/about">About Me</a>
                        <a class="btn btn-primary" href="/posts">My Blog</a>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-7">
                    <div class="image-container">
                        <img class="img-fluid" src="img/1.png" alt="alternative">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer-->
    <footer class="bg-light py-5">
        <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2021 - Company Name</div></div>
    </footer>
</header>

