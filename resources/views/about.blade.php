@extends('index')
    @section('content')
    <div class="hero-wrap hero-bread" style="background-image: url('../winkel/../winkel/images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="home_winkel">Home</a></span> <span>About</span></p>
            <h1 class="mb-0 bread">About Us</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate">
            <h2 class="mb-4">NOTRE EQUIPE</h2>
            <p></p>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(../images/swe.png)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5 pl-4 line">Ce projet fut un meilleur moyen pour moi, d'asseoir mes connaissances en developpement web.</p>
                    <p class="name">Manuel DASSI</p>
                    <span class="position">Manager, Back-end developer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(../winkel/images/anthony.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5 pl-4 line">Grace a ce projet j'ai pu mettre en pratique les notions apprisent en cours.</p>
                    <p class="name">Anthony FOUDA</p>
                    <span class="position">Interface Designer, Fronted developer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(../images/3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5 pl-4 line">Ce projet fut tres interessant car, ca m'a notament permis de mieux mettre en pratique les notions apprises.</p>
                    <p class="name">Aristide KOLOKO</p>
                    <span class="position">UI Designer, Fronted developer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(../winkel/images/boris.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5 pl-4 line">J'ai pu demistifier, grace a ce projet les technologies qui me parraissaient compliquees. Notament l'utilisation du Framework Laravel.</p>
                    <p class="name">Boris MASSODA</p>
                    <span class="position">Fullstack Developer</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
		<hr>

    @endsection
