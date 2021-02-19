@extends('index')
    @section('content')
    <section id="home-section" class="hero">
        <div class="home-slider js-fullheight owl-carousel">
        <div class="slider-item js-fullheight">
            <div class="overlay"></div>
          <div class="container-fluid p-0">
            <div class="row d-md-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
                <div class="one-third order-md-last img js-fullheight" style="background-image:url({{asset('../C3.jpg')}});">
                </div>
                <div class="one-forth d-flex js-fullheight align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <div class="text">
                        <span class="subheading">Welcome to IUI</span>
                        <div class="horizontal">
                            <h3 class="vr" style="background-image: url({{asset('../winkel/images/divider.jpg')}});">Fonder en 2002</h3>
                          <h1 class="mb-4 mt-3">Comment allez-vous?</h1>
                          <p>Voici le site de l’association BDE de l'institut UCAC-ICAM !</p>
                          
                          <p><a href="/events" class="btn btn-primary px-5 py-3 mt-3">Par ici</a></p>
                        </div>
                  </div>
                </div>
              </div>
          </div>
        </div>

        <div class="slider-item js-fullheight">
            <div class="overlay"></div>
          <div class="container-fluid p-0">
            <div class="row d-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
                <div class="one-third order-md-last img js-fullheight" style="background-image:url({{asset('../winkel/images/w2.jpg')}});">
                </div>
                <div class="one-forth d-flex js-fullheight align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <div class="text">
                        <span class="subheading">Welcome to IUI</span>
                        <div class="horizontal">
                            <h3 class="vr" style="background-image: url({{asset('../winkel/images/divider.jpg')}});">Former des Hommes</h3>
                          <h1 class="mb-4 mt-3">Hello, what's up?</h1>
                          <p>Here is the website of the UCAC-ICAM Institute BDE association!</p>
                          
                          <p><a href="/events" class="btn btn-primary px-5 py-3 mt-3">This way</a></p>
                        </div>
                  </div>
                </div>
              </div>
          </div>
        </div>

        <div class="slider-item js-fullheight">
            <div class="overlay"></div>
          <div class="container-fluid p-0">
            <div class="row d-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
                <div class="one-third order-md-last img js-fullheight" style="background-image:url({{asset('../winkel/images/w3.jpg')}});">
                </div>
                <div class="one-forth d-flex js-fullheight align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <div class="text">
                        <span class="subheading">Welcome to IUI</span>
                        <div class="horizontal">
                            <h3 class="vr" style="background-image: url({{asset('../winkel/images/divider.jpg')}});">techniquement compétents et</h3>
                          <h1 class="mb-4 mt-3">Ciao, come sta?</h1>
                          <p>Ecco il sito web dell'associazione UCAC-ICAM Institute BDE!</p>
                          
                          <p><a href="/events" class="btn btn-primary px-5 py-3 mt-3">Per di qua</a></p>
                        </div>
                  </div>
                </div>
              </div>
          </div>
        </div>

        <div class="slider-item js-fullheight">
            <div class="overlay"></div>
          <div class="container-fluid p-0">
            <div class="row d-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
                <div class="one-third order-md-last img js-fullheight" style="background-image:url({{asset('../winkel/images/w4.jpg')}});">
                </div>
                <div class="one-forth d-flex js-fullheight align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <div class="text">
                        <span class="subheading">Welcome to IUI</span>
                        <div class="horizontal">
                            <h3 class="vr" style="background-image: url({{asset('../winkel/images/divider.jpg')}});">humainement responsables.</h3>
                          <h1 class="mb-4 mt-3">¿Hola, qué tal?</h1>
                          <p>¡Aquí está el sitio web de la asociación BDE UCAC-ICAM Institute!</p>
                          
                          <p><a href="/events" class="btn btn-primary px-5 py-3 mt-3">Por aquí</a></p>
                        </div>
                  </div>
                </div>
              </div>
          </div>
        </div>

        <div class="slider-item js-fullheight">
            <div class="overlay"></div>
          <div class="container-fluid p-0">
            <div class="row d-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
                <div class="one-third order-md-last img js-fullheight" style="background-image:url({{asset('../winkel/images/w5.jpg')}});">
                </div>
                <div class="one-forth d-flex js-fullheight align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <div class="text">
                        <span class="subheading">Welcome to IUI</span>
                        <div class="horizontal">
                            <h3 class="vr" style="background-image: url({{asset('../winkel/images/divider.jpg')}});">Tel est notre devise.</h3>
                          <h1 class="mb-4 mt-3">Hallo, wie geht's?</h1>
                          <p>Hier ist die Website des BDE-Verbandes des UCAC-ICAM-Instituts!</p>
                          
                          <p><a href="/events" class="btn btn-primary px-5 py-3 mt-3">Diesen Weg</a></p>
                        </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
  </section>

  <section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
          <div class="container">
              <div class="row">
                  <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{asset('../winkel/images/about.jpg')}});">
                      <a href="https://www.youtube.com/watch?v=H1yU9VI5EdE" class="icon popup-vimeo d-flex justify-content-center align-items-center">
                          <span class="icon-play"></span>
                      </a>
                  </div>
                  <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
            <div class="heading-section-bold mb-4 mt-md-5">
                <div class="ml-md-0">
                  <h2 class="mb-4">Partenaires</h2>
              </div>
            </div>
            <div class="pb-md-5">
                          <p>Au vu du grand nombre d’adhérents, le BDE peut négocier plus facilement des avantages pour ses adhérents grâce à ses partenaires. Il peut s’agir d’avantages ponctuels comme par exemple :</p>
                          <div class="row ftco-services">
                    <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
                      <div class="media block-6 services">
                        <div class="icon d-flex justify-content-center align-items-center mb-4">
                            <i class="ion-ios-play ml-1"></i>
                        </div>
                        <div class="media-body">
                          <h3 class="heading">des réductions sur les chaussures de sécurité</h3>
                        </div>
                      </div>      
                    </div>
                    <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
                      <div class="media block-6 services">
                        <div class="icon d-flex justify-content-center align-items-center mb-4">
                            <i class="ion-ios-play ml-1"></i>
                        </div>
                        <div class="media-body">
                          <h3 class="heading">l’achat groupé de PC à tarif préférentiel</h3>
                        </div>
                      </div>    
                    </div>
                    <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
                      <div class="media block-6 services">
                        <div class="icon d-flex justify-content-center align-items-center mb-4">
                            <i class="ion-ios-play ml-1"></i>
                        </div>
                        <div class="media-body">
                          <h3 class="heading">la réalisation de costumes sur mesure</h3>
                        </div>
                      </div>      
                    </div>
                  </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>

      <br>
  <section class="ftco-section ftco-choose ftco-no-pb ftco-no-pt">
      <div class="container">
          <div class="row">
              <div class="col-md-8 d-flex align-items-stretch">
                  <div class="img" style="background-image: url({{asset('../winkel/images/ass.jpg')}});"></div>
              </div>
              <div class="col-md-4 py-md-5 ftco-animate">
                  <div class="text py-3 py-md-5">
              <h2 class="mb-4">Vie associative</h2>
              <p>Les clubs auxquels peuvent participer les élèves de l’IUI sont nombreux et variés. Faire parti d’un club offre l’opportunité de s’impliquer dans la vie de l’école et de tisser des liens avec les élèves d’autres promotions. Plus d’informations sur chaque club dans la rubrique activite</p>
              <p><a href="/idea" class="btn btn-white px-4 py-3">Boite à idée</a></p>
                  </div>
              </div>
          </div>

          <div class="row">
              <div class="col-md-5 order-md-last d-flex align-items-stretch">
                  <div class="img img-2" style="background-image: url({{asset('../winkel/images/about-2.jpg')}});"></div>
              </div>
              <div class="col-md-7 py-3 py-md-5 ftco-animate">
                  <div class="text text-2 py-md-5">
              <h2 class="mb-4">Vie étudiante</h2>
              <p>Le BDE a pour but de défendre les intérêts des élèves en assurant entre autres la liaison entre l’école et les élèves. Ainsi, il participe aux groupes de travail mis en place par l’école pour améliorer la vie étudiante et la scolarité des élèves.</p>
              <p><a href="#" class="btn btn-white px-4 py-3">Shop now</a></p>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <section class="ftco-section bg-light">
      <div class="container">
              <div class="row justify-content-center mb-3 pb-3">
        <div class="col-md-12 heading-section text-center ftco-animate">
          <h2 class="mb-4">Viens découvrir notre boutique !</h2>
          <p>Quand tu es à l'IUI, tu vis IUI, tu respires IUI, tu portes IUI, tu utilises IUI</p>
        </div>
      </div>   		
      </div>
      <div class="container">
          <div class="row">
              <div class="col-sm col-md-6 col-lg ftco-animate">
                  <div class="product">
                      <a href="#" class="img-prod"><img class="img-fluid" src="{{asset('../winkel/images/rallonge.jpg')}}" alt="Colorlib Template">
                          <div class="overlay"></div>
                      </a>
                      <div class="text py-3 px-3">
                          <h3><a href="#">Rallonge</a></h3>
                          <div class="d-flex">
                              <div class="pricing">
                                  <p class="price">2000 Fcfa</p>
                              </div>
                              <div class="rating">
                                  <p class="text-right">
                                      <a href="#"><span class="ion-ios-star-outline"></span></a>
                                      <a href="#"><span class="ion-ios-star-outline"></span></a>
                                      <a href="#"><span class="ion-ios-star-outline"></span></a>
                                      <a href="#"><span class="ion-ios-star-outline"></span></a>
                                      <a href="#"><span class="ion-ios-star-outline"></span></a>
                                  </p>
                              </div>
                          </div>
                          <p class="bottom-area d-flex px-3">
                              <a href="#" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></a>
                              <a href="#" class="buy-now text-center py-2">Buy now<span><i class="ion-ios-cart ml-1"></i></span></a>
                          </p>
                      </div>
                  </div>
              </div>
              <div class="col-sm col-md-6 col-lg ftco-animate">
                  <div class="product">
                      <a href="#" class="img-prod"><img class="img-fluid" src="{{asset('../winkel/images/chargeurPc.jpg')}}" alt="Colorlib Template">
                          <div class="overlay"></div>
                      </a>
                      <div class="text py-3 px-3">
                          <h3><a href="#">Chargeur PC</a></h3>
                          <div class="d-flex">
                              <div class="pricing">
                                  <p class="price"><span>8000 Fcfa</span></p>
                              </div>
                              <div class="rating">
                                  <p class="text-right">
                                      <a href="#"><span class="ion-ios-star-outline"></span></a>
                                      <a href="#"><span class="ion-ios-star-outline"></span></a>
                                      <a href="#"><span class="ion-ios-star-outline"></span></a>
                                      <a href="#"><span class="ion-ios-star-outline"></span></a>
                                      <a href="#"><span class="ion-ios-star-outline"></span></a>
                                  </p>
                              </div>
                          </div>
                          <p class="bottom-area d-flex px-3">
                              <a href="#" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></a>
                              <a href="#" class="buy-now text-center py-2">Buy now<span><i class="ion-ios-cart ml-1"></i></span></a>
                          </p>
                      </div>
                  </div>
              </div>
              <div class="col-sm col-md-6 col-lg ftco-animate">
                  <div class="product">
                      <a href="#" class="img-prod"><img class="img-fluid" src="{{asset('../winkel/images/ecouteurs.jpg')}}" alt="Colorlib Template">
                          <div class="overlay"></div>
                      </a>
                      <div class="text py-3 px-3">
                          <h3><a href="#">Ecouteurs</a></h3>
                          <div class="d-flex">
                              <div class="pricing">
                                  <p class="price"><span>3000 Fcfa</span></p>
                              </div>
                              <div class="rating">
                                  <p class="text-right">
                                      <a href="#"><span class="ion-ios-star-outline"></span></a>
                                      <a href="#"><span class="ion-ios-star-outline"></span></a>
                                      <a href="#"><span class="ion-ios-star-outline"></span></a>
                                      <a href="#"><span class="ion-ios-star-outline"></span></a>
                                      <a href="#"><span class="ion-ios-star-outline"></span></a>
                                  </p>
                              </div>
                          </div>
                          <p class="bottom-area d-flex px-3">
                              <a href="#" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></a>
                              <a href="#" class="buy-now text-center py-2">Buy now<span><i class="ion-ios-cart ml-1"></i></span></a>
                          </p>
                      </div>
                  </div>
              </div>
              <div class="col-sm col-md-6 col-lg ftco-animate">
                  <div class="product">
                      <a href="#" class="img-prod"><img class="img-fluid" src="{{asset('../winkel/images/sac.jpg')}}" alt="Colorlib Template">
                          <div class="overlay"></div>
                      </a>
                      <div class="text py-3 px-3">
                          <h3><a href="#">Sac PC</a></h3>
                          <div class="d-flex">
                              <div class="pricing">
                                  <p class="price"><span>2000 Fcfa</span></p>
                              </div>
                              <div class="rating">
                                  <p class="text-right">
                                      <a href="#"><span class="ion-ios-star-outline"></span></a>
                                      <a href="#"><span class="ion-ios-star-outline"></span></a>
                                      <a href="#"><span class="ion-ios-star-outline"></span></a>
                                      <a href="#"><span class="ion-ios-star-outline"></span></a>
                                      <a href="#"><span class="ion-ios-star-outline"></span></a>
                                  </p>
                              </div>
                          </div>
                          <p class="bottom-area d-flex px-3">
                              <a href="#" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></a>
                              <a href="#" class="buy-now text-center py-2">Buy now<span><i class="ion-ios-cart ml-1"></i></span></a>
                          </p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url({{asset('../winkel/images/bg_4.jpg')}});">
      <div class="container">
          <div class="row justify-content-center py-5">
              <div class="col-md-10">
                  <div class="row">
                <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18 text-center">
                    <div class="text">
                      <strong class="number" data-number="3">0</strong>
                      <span>branches internationales</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18 text-center">
                    <div class="text">
                      <strong class="number" data-number="2">0</strong>
                      <span>campus</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18 text-center">
                    <div class="text">
                      <strong class="number" data-number="19">0</strong>
                      <span>ans d'existence</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18 text-center">
                    <div class="text">
                      <strong class="number" data-number="650">0</strong>
                      <span>étudiants</span>
                    </div>
                  </div>
                </div>
              </div>
          </div>
      </div>
      </div>
  </section>
@endsection