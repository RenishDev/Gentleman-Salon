@extends('front-end.layouts.app')

@section('main-section')
    <!--=====================================-->
    <!--=      Page Start Banner Start      =-->
    <!--=====================================-->
    <section class="page-start-banner">
        <div class="container">
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('contact')}}" class="active">CONTACT</a></li>
                </ul>
            </div>
            <div class="heading">
                <h2>CONTACT US</h2>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=      Contact Map Area Start       =-->
    <!--=====================================-->
    <div class="map-section">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3152.332340398526!2d144.9605555148907!3d-37.8056838797538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642cce121b239%3A0xa42b424ded3a529a!2s551%20Swanston%20St%2C%20Carlton%20VIC%203053%2C%20Australia!5e0!3m2!1sen!2s!4v1663666043380!5m2!1sen!2s"
            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!--=====================================-->
    <!--=        Contact Area Start         =-->
    <!--=====================================-->
    <section class="contact background-2 sec-mar">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <div class="contact-box">
                        <h3>Get Started with us</h3>
                        <a href="appointment-1.html" class="stylen-btn btn-primary right-arrow">BOOK APPOINTMENT</a>
                        <hr>
                        <div class="list mb-4">
                            <a href="tel:001239999" class="link"><i class="fal fa-phone-alt"></i> +00 (123) 9999</a>
                        </div>
                        <div class="list">
                            <a href="mailto:info@example.com" class="link"><i class="fal fa-envelope"></i>
                                info@example.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <h2>DROP US A MESSAGE</h2>
                    <form method="post" action="contact.html" class="contact-form">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" placeholder="Your Name"
                                        required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email"
                                        placeholder="email@example.com" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="Number" placeholder="Phone Number"
                                        required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="Subject" placeholder="Subject"
                                        required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control" id="contact-message" rows="4" name="message"
                                        placeholder="Your Message (We would love to hear from you)" required></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="text-center">
                                    <button type="submit" class="stylen-btn btn-primary paper-plane">Send Message</button>
                                </div>
                            </div>
                        </div>
                        <!-- Alert Message -->
                        <div id="message" class="alert-msg"></div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
