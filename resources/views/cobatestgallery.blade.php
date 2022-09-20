@extends('layouts.main')


@section('content')
<section id="hero-gallery" class="hero-gallery"
    style="background-image: url({{ asset('images/intheraw-gallery-hero-banner.png') }});">
    <h1 class="title-gallery-hero">our gallery</h1>
</section>

<section id="portfolio" class="portfolio">
    <div class="container">

        <div class="row">
          <div class="col-lg-12 col-sm-12 d-flex justify-content-center" style="position: relative;">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-farm">Farm</li>
                    <li data-filter=".filter-juice">Juice</li>
                    <li data-filter=".filter-cefe">Cafe</li>
                </ul>
            <div class="flters">
            </div>
          </div>
        </div>

        <div class="row portfolio-container">
          <div class="col-lg-4 col-md-6 portfolio-item filter-farm">
            <div class="portfolio-wrap">
              <img src="{{ asset('images/gallery/gallery01.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Farm</h4>
                <p>farm</p>
                <div class="portfolio-links">
                  <a href="{{ asset('images/gallery/gallery01.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                  <!-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-cafe">
            <div class="portfolio-wrap">
              <img src="{{ asset('images/gallery/gallery02.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Cafe</h4>
                <p>cafe</p>
                <div class="portfolio-links">
                  <a href="{{ asset('images/gallery/gallery02.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <!-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-juice">
            <div class="portfolio-wrap">
              <img src="{{ asset('images/gallery/gallery03.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Juice</h4>
                <p>juice</p>
                <div class="portfolio-links">
                  <a href="{{ asset('images/gallery/gallery03.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                  <!-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-farm">
            <div class="portfolio-wrap">
              <img src="{{ asset('images/gallery/gallery04.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Farm</h4>
                <p>farm</p>
                <div class="portfolio-links">
                  <a href="{{ asset('images/gallery/gallery04.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                  <!-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-juice">
            <div class="portfolio-wrap">
              <img src="{{ asset('images/gallery/gallery05.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Juice</h4>
                <p>juice</p>
                <div class="portfolio-links">
                  <a href="{{ asset('images/gallery/gallery05.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                  <!-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-juice">
            <div class="portfolio-wrap">
              <img src="{{ asset('images/gallery/gallery06.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Juice</h4>
                <p>juice</p>
                <div class="portfolio-links">
                  <a href="{{ asset('images/gallery/gallery06.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                  <!-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-juice">
            <div class="portfolio-wrap">
              <img src="{{ asset('images/gallery/gallery07.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Juice</h4>
                <p>juice</p>
                <div class="portfolio-links">
                  <a href="{{ asset('images/gallery/gallery07.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <!-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-juice">
            <div class="portfolio-wrap">
              <img src="{{ asset('images/gallery/gallery08.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Juice</h4>
                <p>juice</p>
                <div class="portfolio-links">
                  <a href="{{ asset('images/gallery/gallery08.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <!-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-juice">
            <div class="portfolio-wrap">
              <img src="{{ asset('images/gallery/gallery09.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Juice</h4>
                <p>juice</p>
                <div class="portfolio-links">
                  <a href="{{ asset('images/gallery/gallery09.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                  <!-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-juice">
            <div class="portfolio-wrap">
              <img src="{{ asset('images/gallery/gallery10.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Juice</h4>
                <p>juice</p>
                <div class="portfolio-links">
                  <a href="{{ asset('images/gallery/gallery10.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <!-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-juice">
            <div class="portfolio-wrap">
              <img src="{{ asset('images/gallery/gallery11.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Juice</h4>
                <p>juice</p>
                <div class="portfolio-links">
                  <a href="{{ asset('images/gallery/gallery11.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <!-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-farm">
            <div class="portfolio-wrap">
              <img src="{{ asset('images/gallery/gallery12.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Farm</h4>
                <p>farm</p>
                <div class="portfolio-links">
                  <a href="{{ asset('images/gallery/gallery12.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <!-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-farm">
            <div class="portfolio-wrap">
              <img src="{{ asset('images/gallery/gallery13.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Farm</h4>
                <p>farm</p>
                <div class="portfolio-links">
                  <a href="{{ asset('images/gallery/gallery13.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <!-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-farm">
            <div class="portfolio-wrap">
              <img src="{{ asset('images/gallery/gallery14.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Farm</h4>
                <p>farm</p>
                <div class="portfolio-links">
                  <a href="{{ asset('images/gallery/gallery14.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <!-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-juice">
            <div class="portfolio-wrap">
              <img src="{{ asset('images/gallery/gallery15.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Juice</h4>
                <p>juice</p>
                <div class="portfolio-links">
                  <a href="{{ asset('images/gallery/gallery15.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <!-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-farm">
            <div class="portfolio-wrap">
              <img src="{{ asset('images/gallery/gallery16.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Farm</h4>
                <p>farm</p>
                <div class="portfolio-links">
                  <a href="{{ asset('images/gallery/gallery16.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <!-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-juice">
            <div class="portfolio-wrap">
              <img src="{{ asset('images/gallery/gallery17.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Juice</h4>
                <p>juice</p>
                <div class="portfolio-links">
                  <a href="{{ asset('images/gallery/gallery17.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <!-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-juice">
            <div class="portfolio-wrap">
              <img src="{{ asset('images/gallery/gallery18.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Juice</h4>
                <p>juice</p>
                <div class="portfolio-links">
                  <a href="{{ asset('images/gallery/gallery18.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <!-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-cafe">
            <div class="portfolio-wrap">
              <img src="{{ asset('images/gallery/gallery19.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Cafe</h4>
                <p>cafe</p>
                <div class="portfolio-links">
                  <a href="{{ asset('images/gallery/gallery19.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <!-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
</section>

@endsection
