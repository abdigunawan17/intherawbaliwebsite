@extends('layouts.main')

@section('title', 'About Page')

@section('content')
<div class="container-fluid g-0">
    <section id="hero-about" class="hero-about"
        style="background: url({{ asset('images/intheraw-hero-about-banner.png') }});">
        <h1 class="title-about-hero">about us</h1>
        <p class="desc-about-hero">
            Welcome to ‘In The Raw’. <br /> We are Indonesia’s premier juice company and the
            only organic cold-pressed juice producer in the region.

        </p>
    </section>

    <section>
        <div class="p-5">
            <div class="col-lg-8 mx-auto d-sm-flex align-items-center shadow-lg">
                <div class="" style="width: 30%;  text-align: center; padding: 0.75rem;" >
                    <img src="{{ asset('images/mark-bekker.png') }}" style="width: 60%;" />
                    <h5 class="mt-4 fs-4 fw-bold">Mark Baker </h5>
                    <p style="font-size: 16px;">
                        Founder In The Raw Bali
                    </p>
                </div>
                <div class="" style="width: 70%; padding: 15px;" >
                    <h3>About our Founder - Mark Baker</h3>
                    <p style="font-size: 16px;">
                        After twenty years as New York’s “Godfather of Nightlife”, Mark Baker knew it
                        was time for a change and a healthier lifestyle. In 2010 Mark co-founded
                        the  world’s leading and now legendary juice company, The JUICE PRESS, in New York City with Marcus Antebi. As one of the first cold pressed juice companies in the world, the JUICE PRESS pioneered the cold pressed  juice, raw movement, saw the rapid expansion of cold pressed juice, and its vitality as part of a healthy and active lifestyle.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="p-5 m-5">
            <div class="col-lg-10 mx-auto d-flex align-items-center">
                <img src="{{ asset('images/itr-about.png') }}" style="width: 65%; height: auto" />
                <div style="width: 35%; padding: 18px;">
                    <h3 style="font-size: 28px; font-weight: 500;">About Us</h3>
                    <p style="font-size: 10px;">
                        Mark and the team have spent 4 years traveling all over Bali to meet, advise and
                        work hand in hand with local farmers to form a network that grows ORGANIC produce exclusively for ITR .
                        “When your pressing so much produce to make juice it’s vital that there are no pesticides or chemicals involved “ Says Mark.
                        “It’s also very important that we support local farmers by teaching them the benefits of growing Organically and help them
                        transport their goods directly to market so that they benefit properly from their efforts and popularity of organic produce.. one of our farmers, Made Budiarta
                        and Putu is a family business in the Bedugal region that has been farming for  Generations,
                        as a business we have a moral and an ethical obligation to share the benefits of our combined organic efforts.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="p-5 m-5">
            <div class="col-lg-10 mx-auto">
                <img src="{{ asset('images/itr-about-bottle.png') }}" style="width: 100%" />
            </div>
        </div>
    </section>

</div>
@endsection
