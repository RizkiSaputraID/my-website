@extends('layouts.main')

<header class="msthead">
    <div class="container px-4 px-lg-5 h-100">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-8 align-self-end">
                <h1 class="text-white font-weight-bold">About Me</h1>
                <hr class="divider" />
            </div>
            <div class="col-lg-8 align-self-baseline">
                <p class="text-white-75 mb-5">Welcome to My Website, website ini adalah model prototype untuk tugas akhir yang menggunakan framework laravel 8</p>

            </div>
        </div>
    </div>
</header>

@section('container')

<div>
  </div>
    <div class="jumbotron">
      <div class="container text-center">
        <img class="rounded-circle img-thumbnail" src="img/<?= $image; ?>" width="300">
        <h3 class="display-4"><?php echo $name; ?></h3>
        <p class="lead"><?php echo $email; ?></p>
        <p class="lead">Mahasiswa | Web Development</p>
      </div>
    </div>
    <div>
      <img src="img/city.svg" alt="city" class="mb-3">
    </div>
    <section class="about" id="about">
     <div class="jumbotron">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <h2>About Me</h2><hr>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md text-jutify">
            <p>Saya seorang yang kreatif dan suka mencari
              alternatif solusi dari berbagai macam persoalan.
              Saya juga bersikap terbuka terhadap semua kemungkinan solusi yang ada.
              Kreativitas sangat membantu saya untuk menjadi pemimpin yang baik
              karena saya bisa mengantisipasi berbagai persoalan.</p>
          </div>
          <div class="col-md text-jutify">
            <p>Saya adalah orang yang sangat disiplin dan fokus terhadap hasil kerja
               hingga cenderung idealis. Namun, saya juga bisa realistis saat menentukn target
                atau tujuan dan selalu berupaya keras untuk bisa mencapai tujuan tersebut
                 dengan cara yang baik dan efisien.</p>
          </div>
        </div>
      </div>
     </div>
     <div>
      <img src="img/city2.svg" alt="city" class="mb-3">
    </div>
    <footer class="bg-light py-5">
        <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2021 - Company Name</div></div>
    </footer>
    </section>
 @endsection
