@extends('layout.master')

@section('pagename', 'Contact Us')

@section('content')
<section class="contact-section py-md-5 py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-image">
                    <img src="{{ asset('assets/images/slider01.jpg')}}" alt="contact-img">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact">
                    <div class="contact-head">
                        <h2>CONTACT US</h2>
                        <p>Some representative placeholder content for the first slide. Some representative placeholder content for the first slide content for the first slide.</p>
                    </div>
                    <form class="contact-form" action="{{ route('contactfill')}}" method="post">
                        @csrf
                        <input type="text" class="form-control" placeholder="Name" name="name">
                        <input type="email" class="form-control" placeholder="Email" name="email">
                        <input type="number" class="form-control" placeholder="Phone" name="phone">
                        <textarea class="form-control" placeholder="Message" name="message" rows="5"></textarea>
                        <div class="form-btn mb-3">
                            <button type="submit" class="btn">Contact Us</button>
                        </div>
                    </form>
                    @if(Session::has('successful_message'))
                    <div class="alert alert-success">
                    {{ Session::get('successful_message') }}
                    </div>
                    @endif
                </div>    
            </div>

            <div class="mail-part">
                <div class="mail-head text-center">
                    <p>get 100$ off your first purchase!</p> 
                    <p>sign up for email updates on launches,restocks & more!</p> 
                </div>
                <div class="mail">
                    <input type="email" class="form-control" placeholder="Your e-mail...">
                </div>
                <div class="mail-btn">
                    <button type="button" class="btn">subscribe Now</button>
                </div>
            </div>
            <div class="map-part">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d54880.954535169316!2d76
                .75248640000001!3d30.7167232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v
                1681896686556!5m2!1sen!2sin" width="600" style="border:0;" allowfullscreen></iframe>
            </div>
        </div>
        
    </div>
</section>
@endsection