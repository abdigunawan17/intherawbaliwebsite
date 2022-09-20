@extends('layouts.main')

@section('title', 'halaman mawar')

@section('content')
<!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url({{ asset('images/slide/salad.png') }});">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">IN THE RAW</h2>
                <p class="animate__animated animate__fadeInUp">
                    is Bali’s most trusted and reliable ORGANIC COLD PRESSED JUICE COMPANY and offers a range of many diverse products.
                </p>
                <div>
                  <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url({{ asset('images/slide/slide-3.jpg') }});">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">IN THE RAW</h2>
                <p class="animate__animated animate__fadeInUp">
                    In striving to provide 100% pure, organically grown produce, it is our policy to remain plastic free
                    in all that we do thus ensuring that the natural produce we provide is nothing but natural goodness from the earth to your plate.

                </p>
                <div>
                  <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url({{ asset('images/slide/slide-2.jpg') }});">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">IN THE RAW</h2>
                <p class="animate__animated animate__fadeInUp">
                        We work with, and educate local Balinese farmers, regarding organic farming methods so we can return
                        the soil to a healthy state and ensure the produce we provide to you and use in our juices, is 100% pure
                        goodness from Mother Earth with no pesticides and chemical fertilizers used in the growth process.
                        <br />
                        It doesn’t get much healthier than that!
                </p>
                <div>
                  <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                </div>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="image col-lg-6 d-flex align-items-strech justify-content-center position-relative">
                    <img src="{{ asset('images/hand-picture.png') }}" class="daun-image" alt="/" />
                    <img src="{{ asset('images/daun-siri.png') }}" class="position-absolute daun-left" alt="/" />
                </div>

                <div class="col-lg-6 d-flex align-items-center position-relative">
                    <div class="content justify-content-center ps-lg-5 pe-lg-5 me-lg-5">
                        <h2>About us</h2>
                        <p>
                            In The Raw is Indonesia’s premier juice company and the only
                            organic cold-pressed juice in the region. We have more than forty
                            delicious organic cold-pressed juices including ‘Kristal” probiotic kefir ,
                            kombucha, coffee lattes and other delicious elixirs to choose from. Served in
                            perfect portion glass bottles, In The Raw also offers a wide selection of custom
                            juice cleanses, healthy snacks, chocolates, cakes and more to support your healthy,
                            active lifestyle. Home delivery
                            is also available. Welcome to the wonderful world of In The Raw.

                        </p>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('images/daun-jatuh-1.png') }}" class="position-absolute daun-right" alt="/" />
    </section>


    <section id="our-brand" class="our-brand">
         <img src="{{ asset('images/daun-blur-kiri.png') }}" class="position-absolute image-blur-left" alt="/" />
        <div class="container">
            <div class="row d-flex text-center my-5">
                <h2 class="mb-5"> Our Brands</h2>
            </div>
            <div class="row d-flex align-items-center mx-5">
                <div class="col-lg-4 card-green">
                       <div class="inner-content text-center text-white mx-3 position-relative" style="min-height: 465px;">
                            <img src="{{ asset('images/ourbrand-pic.png') }}" class="position-absolute img-our-brand" alt="/" />
                            <h2 class="mt-5 pt-5 title-our-brand">In the raw organic farm</h2>
                            <hr class="mx-auto border-white-5 border-bottom" style="width: 90px">
                            <p class="">
                            Join us, learn and sample all that we’re growing in the beautiful
                            mountainous lakeside region of Bedugul. We want you to join our organic family.
                            <br />
                            <br />
                            </p>

                            <button type="button" class="btn btn-read-more">Read more</button>
                        </div>
                </div>
                <div class="col-lg-4 card-green">
                       <div class="inner-content text-center text-white mx-3 position-relative" style="min-height: 465px;">
                            <img src="{{ asset('images/ourbrand-pic2.png') }}" class="position-absolute img-our-brand" alt="/" />
                            <h2 class="mt-5 pt-5 title-our-brand">In the raw <br />juice</h2>
                            <hr class="mx-auto border-white-5 border-bottom" style="width: 90px">
                            <p class="">
                            Our Cold Pressed Juice’s is made using the best possible way to extract juice
                            from vegetables, roots, and fruits without deteriorating and altering their valuable enzymes,
                            vitamin and goodness.
                            </p>
                            <button type="button" class="btn btn-read-more">Read more</button>
                        </div>
                </div>
                <div class="col-lg-4 card-green">
                       <div class="inner-content text-center text-white mx-3 position-relative" style="min-height: 465px;">
                            <img src="{{ asset('images/ourbrand-pic3.png') }}" class="position-absolute img-our-brand" alt="/" />
                            <h2 class="mt-5 pt-5 title-our-brand">In the raw <br />cafe</h2>
                            <hr class="mx-auto border-white-5 border-bottom" style="width: 90px">
                            <p class="">
                            Come and enjoy the pure goodness of natural food and drink at our cafe
                            <br />
                            <br />
                            <br />
                            <br />
                            </p>
                            <button type="button" class="btn btn-read-more">Read more</button>
                        </div>
                </div>
            </div>
        </div>
         <img src="{{ asset('images/daun-potong-kanan.png') }}" class="position-absolute image-daun-bawah" alt="/" />
    </section>

    <section id="gallery" class="gallery">
        <div class="container">
            <div class="row">
                <div class="title-gallery text-center mb-5">
                    <h2>Gallery</h2>
                </div>

            </div>
        </div>
        <div class="container-fluid gallery-bawah">
            <div class="row d-flex no-gutters mx-auto">
                <div class="col-lg-4">
                    <div class="col-lg-12">
                        <img src="{{ asset('images/slide/salad.png') }}" class="img-fluid" alt="/" />
                    </div>
                    <div class="col-lg-12">
                        <img src="{{ asset('images/slide/salad.png') }}" class="img-fluid image-gallery-kiri" alt="/" />
                    </div>
                </div>
                <div class="col-lg-3 no-gutters">
                    <img src="{{ asset('images/botol-intheraw1.png') }}" class="image-botol" alt="/" />
                </div>
                <div class="col-lg-5 no-gutters">
                    <img src="{{ asset('images/farm.png') }}" class="intheraw-gallery-kanan " alt="/" />
                    <img src="{{ asset('images/meru.png') }}" class="intheraw-gallery-kanan " alt="/" />
                </div>
            </div>
             <div class="d-grid gap-2 col-2 mx-auto">
                <a href="/gallery" class="btn-primary-gallery text-center"> Show more </a>
            </div>
        </div>
    </section>
@endsection
