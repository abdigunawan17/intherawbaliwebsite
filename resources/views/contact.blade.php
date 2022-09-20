@extends('layouts.main')

@section('title', 'Contact page')

@section('content')
<section class="position-relative">
    <div class="" style="background: url('{{ asset('images/leaf-contactus.png') }}') center center; background-size: cover; width: 100%;">
        <div class="container" style="padding: 22rem 0 8rem;">
            <div class="row">
                <div class="col-lg-6 text-white">
                <h1 style="font-size: 4rem; font-weight: 700;">Get in touch</h1>
                <p style="font-size: 1rem;">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus quam perspiciatis
                    sint aut optio, laudantium ipsam nisi velit sapiente,
                    incidunt, architecto veritatis. Cupiditate neque nam saepe? Illum explicabo quaerat totam.
                </p>
                </div>
            </div>
        </div>
    </div>

    <div class="card-contact" style="margin-bottom: 20rem;">
        <div class="container shadow g-0" style="z-index: 100; margin-top: -90px; background: #fff;">
            <div class="row d-flex" style="margin: 0 !important">
                <div class="col-lg-7 py-5">
                    <h2 style="font-size: 2.5rem; font-weight: 600; margin-bottom: 4rem; color: #4d6334;">Send us message</h2>
                    <form>

                        <div class="row" style="margin-top: 20px">
                            <div class="col">
                                <label for="formGroupExampleInput" class="form-label" style="color: #4b4b4b;">First Name</label>
                                <input type="text" class="form-control-contact" aria-label="First name" style="padding-left: 0;">
                            </div>
                            <div class="col">
                                <label for="formGroupExampleInput" class="form-label" style="color: #4b4b4b;">Last Name</label>
                                <input type="text" class="form-control-contact" aria-label="Last name" style="padding-left: 0;">
                            </div>

                        </div>
                        <div class="row" style="margin-top: 20px">
                            <div class="col">
                                <label for="formGroupExampleInput" class="form-label" style="color: #4b4b4b;">Email</label>
                                <input type="text" class="form-control-contact" aria-label="email" style="padding-left: 0;">
                            </div>
                            <div class="col">
                                <label for="formGroupExampleInput" class="form-label" style="color: #4b4b4b;">Telp</label>
                                <input type="text" class="form-control-contact" aria-label="telp" style="padding-left: 0;">
                            </div>
                        </div>
                        <div class="row" style="margin-top: 20px">
                            <div class="col">
                            <label for="exampleFormControlTextarea1" class="form-label" style="color: #4b4b4b;">Message</label>
                            <textarea class="form-control-contact" id="exampleFormControlTextarea1" rows="3" style="padding-left: 0;"></textarea>
                            </div>
                        </div>
                        <div class="d-grid gap-2 col-2 mx-auto">
                            <button type="submit" class="btn-primary" style="">Send Message</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-5 py-5 text-white" style="background-color: #4d6334;">
                    <h2>Contact information</h2>
                    <ul class="list-unstyled">
                        <li> Location</li>
                        <li> Phone</li>
                        <li> Email</li>
                    </ul>
                    <div>
                            <iframe width="520" height="400" src="https://maps.google.com/maps?q=puri%20aseman&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">

                            </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


@endsection
