@extends('layouts.main')


@section('content')
    <section id="hero_cobatestcafe" class="hero-cafe"
    style="background: url({{ asset('images/intheraw-cafe-banner.png') }}) center center; width: 100%; background-size: cover;">
        <div class="text-center meru_cafe_top">
            <img src="{{ asset('images/meru-logo-31.png') }}" style="width: 20%;" />
        </div>
    </section>

    <section>
        <div class="col-lg-5 mx-auto meru_bottom">
            <p class="text-center">
                Come and visit us in serene natural,<br /> surroundings and experience our natural foods and drinks.
            </p>
        </div>
    </section>

    <section>
        <div class="meru_cafe_ubud">
            <div class="col-lg-10 d-sm-flex mx-auto">
                <div class="col-lg-6">
                    <h3>About </h3>
                    <h1>Meru Ubud</h1>
                    <span class="garis_hijau"> </span>
                    <span class="d-grid gap-2 col-2 mt-2 mb-5" style="border: 1px solid green; display: inline-block;"> </span>
                    <p class="me-5">
                        Just a two minute walk from the Campuhan Ridge Walk,
                        Meru Ubud is the perfect place to visit before or after taking on
                        Campuhan Ridge where you can boost your body’s strength with our healthy,
                        natural foods and juices.
                    </p>
                    <ul class="list-unstyled d-flex social_media">
                        <li class="mx-1"><i class='bx bxl-facebook fs-5 rounded-circle border border-dark p-2'></i> </li>
                        <li class="mx-1"><i class='bx bxl-instagram fs-5 rounded-circle border border-dark p-2'></i> </li>
                        <li class="mx-1"><i class='bx bxl-youtube fs-5 rounded-circle border border-dark p-2'></i> </li>
                    </ul>
                </div>

                <div class="col-lg-6">
                    <img src="{{ asset('images/meru-cafe-ubud.png') }}" style="width: 80%;" alt="" />
                    <div class="d-grid gap-2 col-4 mx-auto">
                        <button type="submit" class="btn-primary" style="">see on Google Map</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="meru_menu" style="background-image: url({{ asset('images/itr-sayuran-hijau.png') }});">
        <div class="meru_menu_padding_margin">
            <h1 class="text-center text-white"> Our Best Menu </h1>
            <span class="d-grid gap-2 col-2 mx-auto mt-2 mb-5" style="border: 1px solid white; display: inline-block;"> </span>
            <div class="col-lg-10 d-sm-flex mx-auto">
                <div class="col-lg-4">
                    <div class="m-2 bg-white">
                        <img src="{{ asset('images/itr-best-menu1.png')}}" alt="" style="width: 100%;">
                        <h5 class="mt-4 p-1 text-center fs-3 fw-bold">Lorem ipsum</h5>
                        <p class="p-4 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui
                            repellat aperiam veniam
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="m-2 bg-white">
                        <img src="{{ asset('images/itr-best-menu2.png')}}" alt="" style="width: 100%;">
                        <h5 class="mt-4 p-1 text-center fs-3 fw-bold">Lorem ipsum</h5>
                        <p class="p-4 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui
                            repellat aperiam veniam
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="m-2 bg-white">
                        <img src="{{ asset('images/itr-best-menu3.png')}}" alt="" style="width: 100%;">
                        <h5 class="mt-4 p-1 text-center fs-3 fw-bold">Lorem ipsum</h5>
                        <p class="p-4 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui
                            repellat aperiam veniam
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="background-image: url({{ asset('images/itr-background-testmonial.png') }}); background-size: cover; background-position: center;">
        <div class="p-5">
            <h1 class="text-center fw-bold" style="color: #4d6334;"> Testimonial </h1>
            <span class="d-grid gap-2 col-2 mx-auto mt-2 mb-5" style="border: 1px solid #4d6334; display: inline-block;"> </span>

            <div class="col-lg-10 d-sm-flex mx-auto mb-5">
                <div class="col-lg-4">
                    <div class="m-3 bg-light shadow">
                        <div class="p-3">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('images/mark-bekker.png')}}" alt="" style="width: 80px; height: 80px;">
                                <p class="ms-2" style="font-size: 11px;">
                                    <span class="fs-3">Mark Beker</span>
                                </p>
                            </div>
                            <p class="mt-4">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro doloremque
                            natus repellat deserunt vitae aut ex necessitatibus veniam, nihil, sint excepturi
                            laudantium. Architecto quis itaque sunt sed fugiat, exercitationem possimus.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="m-3 bg-light shadow">
                        <div class="p-3">
                            <div class="d-flex">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('images/mark-bekker.png')}}" alt="" style="width: 80px; height: 80px;">
                                    <p class="ms-2" style="font-size: 11px;">
                                        <span class="fs-3">Mark Beker</span>
                                    </p>
                                </div>
                            </div>
                            <p class="mt-4">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro doloremque
                            natus repellat deserunt vitae aut ex necessitatibus veniam, nihil, sint excepturi
                            laudantium. Architecto quis itaque sunt sed fugiat, exercitationem possimus.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="m-3 bg-light shadow">
                        <div class="p-3">
                            <div class="d-flex">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('images/mark-bekker.png')}}" alt="" style="width: 80px; height: 80px;">
                                    <p class="ms-2" style="font-size: 11px;">
                                        <span class="fs-3">Mark Beker</span>
                                    </p>
                                </div>
                            </div>
                            <p class="mt-4">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro doloremque
                            natus repellat deserunt vitae aut ex necessitatibus veniam, nihil, sint excepturi
                            laudantium. Architecto quis itaque sunt sed fugiat, exercitationem possimus.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
