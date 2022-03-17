@extends('dashboard.layouts.main')

@section('container')

    <div class="jumbotron">
        <div class="container text-center">
          <img class="rounded-circle img-thumbnail" src="" width="300">
          <h3 class="display-4">{{ auth()->user()->name }}</h3>
          <p class="lead d-block"></span>{{ auth()->user()->email }}</p>
          <p class="lead">{{ auth()->user()->username }}</p>
        </div>
      </div>

    <div>
        <img src="img/city.svg" alt="city">
      </div>
      <section class="about" id="about">
       <div class="jumbotron">
        <div class="container">
          <div class="row">
            <div class="col text-center">
              <h2>About Me</h2><hr>
            </div>
          </div>
          <div class="row">
              <div class="p-large">
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
       </div>
      </section>

@endsection
