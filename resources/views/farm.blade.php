@extends('layouts.main')

@section('title', 'Farm Page')


@section('content')

    <section id="hero-farm" class="hero-farm" style="background: url({{ asset('images/itr-banner-farm.png') }}) center center; background-size: cover; width: 100%;">
        <div class="container">
            <div class="row d-flex align-items-center" style="padding-top: 20rem; padding-bottom: 18rem;">
                <div class="col-lg-6 px-5" style="color: #fff;">
                    <h2 class="" style="font-size: 40px;">in the RAW</h2>
                    <h1 style="text-transform: uppercase; font-size: 68px; font-weight: 700; color: #fff;">organic farm</h1>
                    <span class="" style="content: ''; width: 6rem; height: 0.2rem; display: block; margin-bottom: 1rem; background-color: #fff;">
                    </span>
                    <p style="font-size: 20px;">
                        Everything we do with our farming efforts puts nature first with
                        a mindset for life and diversity.
                    </p>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset ('images/itr-vegetable.png') }}" style="width: 100%; height: auto" alt="" />
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="position-relative">
            <img src="{{ asset('images/itr-mangkok.png') }}" style="position: absolute; top: -120px; right: 0; width: 25%; overflow: hidden;" alt="" />

            <img src="{{ asset('images/itr-daun.png') }}" style="position: absolute; top: 40%; left: 0; width: 15%" alt="" />

            <div class="container">
                <div class="col-lg-3 mx-auto">
                    <h1 class="text-center" style="padding-top: 10rem; font-size: 40px;">Why us?</h1>
                    <span class="mx-auto" style="content: ''; width: 6rem; height: 0.2rem; display: block; margin: 0 auto; margin-bottom: 1rem; background-color: #4d6334;">
                    </span>
                </div>
                <div class="row d-flex mt-5">
                    <div class="col-lg-4 text-center">
                        <img src="{{ asset('images/icon-pestisida.png') }}" alt="" style="width: 90%" />
                        <h5 style="font-size: 28px;">Pesticide Free </h5>
                        <p class="px-5" style="font-size: 18px;">
                            Our produce is grown pesticide and chemical free ensuring the food we bring to you
                            is nothing but Mother Earth’s natural goodness.
                        </p>
                    </div>
                    <div class="col-lg-4 text-center">
                        <img src="{{ asset('images/icon-leaf.png') }}" alt="" style="width: 90%" />
                        <h5 style="font-size: 28px;">Pure Organic </h5>
                        <p class="px-5" style="font-size: 18px;">
                            After restoring the land and soil by fertilizing with our
                            pure organic compost methods, we let the Raw power of nature take the wheel.
                        </p>
                    </div>
                    <div class="col-lg-4 text-center">
                        <img src="{{ asset('images/icon-plastic.png') }}" alt="" style="width: 90%" />
                        <h5 style="font-size: 28px;">Plastic Free</h5>
                        <p class="px-5" style="font-size: 16px;">
                            From our farming methods to the bottles in which we deliver
                            our juices to the market, our focus is on being plastic free.

                        </p>
                    </div>
                </div>
            </div>
    </section>

    <section class="position-relative">
        <div class="container">
            <div class="row d-flex align-items-center" style="margin: 14rem 0;">
                <div class="col-lg-6">
                    <h2 style="font-size: 30px;">Our Story</h2>
                    <h1 style="font-size: 36px; font-weight: 600; color: #4d6334;">In The RAW Firm </h1>
                    <span class="" style="content: ''; width: 6rem; height: 0.2rem; display: block; margin-bottom: 1rem; background-color: #4d6334;">
                    </span>
                    <p class="pe-5" style="font-size: 16px;">
                    It starts with the soil ..for too long toxic pesticides and overuse of the land,
                    like much of the planet, has rendered the soil that Bali farms void and empty of
                    any nutrients.. We are bringing back the Raw health of nature with our New organic
                    efforts in our pilot programme in Bedugul Bali by utilizing some of Bali’s ancient
                    fertilizer wisdom. We have developed tinctures that completely revitalize soil life
                    even in the worst conditions bringing back the soil
                    microbes who create the nutrients necessary to make incredibly tasty produce.
                    </p>
                    <span>
                    </span>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('images/itr-ourstory-farm-section.png') }}" style="width: 85%; height: auto;" alt="" />
                </div>
            </div>
        </div>
        <span class="position-absolute" style="content: ''; width: 29rem; height: 16rem; display: block; margin: 0 auto; margin-bottom: 1rem; background-color: #4d6334; top: 21%; right:0; z-index: -1;">
        </span>
    </section>

@endsection
