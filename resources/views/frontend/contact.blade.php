@extends('layouts.front')
@section('title')
Contact
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="row">
                    <div class="col-10 offset-1">
                        <p class="headerSocial mt-3">GET IN TOUCH WITH US TO KNOW HOW WE CAN HELP</p>
                        @if(Session::has('mail_sent'))
                            <p class="alert alert-success">{{session('mail_sent')}}</p>
                        @endif
                        <form method="POST" action={{action('ContactController@store')}}>
                            @csrf
                            <div class="form-group mb-4">
                                <input autocomplete="name" class="formdetails form-control" name="name" placeholder="NAME" required="" type="text"
                                       value="">
                            </div>
                            <div class="form-group mb-4">
                                <input autocomplete="name" class="formdetails form-control" id="contact-email" name="email"
                                       placeholder="EMAIL"
                                       required=""
                                       type="text"
                                       value="">
                            </div>
                            <div class="form-group mb-4 pb-5 pt-2">
                    <textarea name="message" id="message" class="formdetails form-control"  placeholder="WRITE A FEW WORDS"

                              rows="5" required=""></textarea>
                            </div>
                            <button class="btn btn-primary buy-now d-flex justify-content-center mx-5 mx-lg-auto" type="submit"> SEND
                            </button>
                        </form>


                        <div class="mt-5">
                            Or call us at
                            <a href="tel:+62896706255135">+62-896-7062-55135</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-9 mt-3 py-5 pb-lg-0">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2513.9567290079303!2d3.1204092157160814!3d50.94301327954645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c335db15b974ab%3A0x15313e61af7f8019!2sSint-Michielsstraat%2C%208800%20Roeselare!5e0!3m2!1sen!2sbe!4v1579183616699!5m2!1sen!2sbe" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>



    </div>
@endsection
