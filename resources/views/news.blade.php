@extends('index')
    @section('content')
    <div class="hero-wrap hero-bread" style="background-image: url('../winkel/../winkel/images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="/home_winkel">Home</a></span> <span>news</span></p>
            <h1 class="mb-0 bread">News</h1>
          </div>
        </div>
      </div>
    </div>

		<section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
						<h2 class="mb-3">Inauguration du YansokiLab</h2>
            <p>Le groupe Orange Cameroun partenaire de l'Institut Ucac-Icam, inaugure le premier FabLab de Douala au campus de Yansoki.</p>
            <p>
            <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{asset('../winkel/images/about.jpg')}});">
              <a href="https://www.youtube.com/watch?v=H1yU9VI5EdE" class="icon popup-vimeo d-flex justify-content-center align-items-center">
                  <span class="icon-play"></span>
              </a>
            </div>  
            </p>
            <p>C'est un moment incroyable avec la creation de ce FabLab. Qui n'est pas que pour etudiant du campus. Ainsi toutes personnes desireux d'apprendre un domaine en particulier peut venir s'y former. Avec des equipements derniers cris tels que des imprimantes 3D, des Casques de realite augmente, des atelier de couture ultra-moderne, c'est un moment unique pour tout jeune entrepreneur.</p>
            <h2 class="mb-3 mt-5">Forum d'entreprise Uca-Icam 2020</h2>
            <p>L’Institut Ucac-Icam a accueilli le vendredi 06 novembre dernier, son 6 e forum entreprises sur le campus de Douala, Yansoki par Yassa entre 08h et 16h30.</p>
            <p>
              <img src="../winkel/images/forum.jpg" alt="" class="img-fluid">
            </p>
            <p>Ce rendez-vous annuel qui réunit à la fois les acteurs du milieu professionnel, entrepreneurial et les étudiants a encore eu cette année un écho retentissant. Malgré le contexte de crise sanitaire liée à la Covid-19, l’Institut Ucac-Icam a pu mobiliser pour l’occasion, de nombreuses entreprises qui à travers leurs différents représentants, ont su apporter des réponses satisfaisantes et rassurantes aux attentes des étudiants venus nombreux dans le cadre de ce forum. L’on a pu noter la présence de : SOGEA SATOM, ENEO, CEGELEC, FRIEDLANDER, ORANGE CAMEROUN, DIAGEO, LOXEA, GLOBELEQ, SCHNEIDER ELECTRIC, SOCIETE GENERALE, UBA ou encore Case A Fruits. Repartis en plusieurs groupes, les étudiants ont fait le tour des salles qui accueillaient les différentes entreprises afin d’échanger avec elles sur des questions relatives aux projets d’entreprises, à la construction d’un projet ou réseau professionnel, aux challenges qu’une entreprise doit relever au quotidien et les projets d’extensions de l’entreprise entre autres. Mais le fait marquant de cet évènement, était surtout la grande conférence qui a réuni quelques Ingénieurs diplômés, formés à l’Institut Ucac-Icam et représentants des entreprises qui ont pu partager leurs parcours et expériences professionnelles avec les étudiants pendant à peu près deux heures d’horloge, à la grande satisfaction de ceux-ci. Des étudiants, qui à l’issue de ce forum, savent désormais que le forum entreprises est un véritable creuset au fond duquel se moule le futur.</p>
            <div class="tag-widget post-tag-container mb-5 mt-5">
              <div class="tagcloud">
                <a href="https://ritetag.com/hashtag-stats/science" class="tag-cloud-link">#science</a>
                <a href="https://ritetag.com/hashtag-stats/technology" class="tag-cloud-link">#tech</a>
                <a href="https://ritetag.com/hashtag-stats/education" class="tag-cloud-link">#education</a>
                <a href="https://ritetag.com/hashtag-stats/innovation" class="tag-cloud-link">#innovation</a>
              </div>
            </div>
            
          </div> <!-- .col-md-8 -->
          <div class="col-lg-4 sidebar ftco-animate">

            <div class="sidebar-box ftco-animate">
              <h3 CLASS="heading">Recent News</h3>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(../winkel/images/fablab.jpg);"></a>
                <div class="text">
                  <h3 class="heading-1">Inauguration du YansokiLab</h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Nov 26, 2020</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(../winkel/images/forum.jpg);"></a>
                <div class="text">
                  <h3 class="heading-1">Forum d'entreprise Uca-Icam 2020</h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Nov 06, 2020</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>

        </div>
      </div>
    </section> <!-- .section -->


    @endsection