@extends('layouts.main')

@section('body')
    <div class="site__body">
        <div class="block-map block">
            <div class="block-map__body">
                <iframe
                    src="https://maps.google.com/maps?q=Holbrook-Palmer%20Park&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div>
        </div>
        <div class="page-header">
            <div class="page-header__container container">
                <div class="page-header__breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index-2') }}">Home</a>
                                <svg class="breadcrumb-arrow" width="6px" height="9px">
                                    <use xlink:href="/images/sprite.svg#arrow-rounded-right-6x9"></use>
                                </svg>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Breadcrumb</a>
                                <svg class="breadcrumb-arrow" width="6px" height="9px">
                                    <use xlink:href="/images/sprite.svg#arrow-rounded-right-6x9"></use>
                                </svg>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                        </ol>
                    </nav>
                </div>
                <div class="page-header__title"><h1>Contact Us</h1></div>
            </div>
        </div>
        <div class="block">
            <div class="container">
                <div class="card mb-0">
                    <div class="card-body contact-us">
                        <div class="contact-us__container">
                            <div class="row">
                                <div class="col-12 col-lg-6 pb-4 pb-lg-0"><h4 class="contact-us__header card-title">Our
                                        Address</h4>
                                    <div class="contact-us__address"><p>715 Fake Ave, Apt. 34, New York, NY 10021
                                            USA<br>Email: stroyka@example.com<br>Phone Number: +1 754 000-00-00</p>
                                        <p><strong>Opening Hours</strong><br>Monday to Friday: 8am-8pm<br>Saturday:
                                            8am-6pm<br>Sunday: 10am-4pm</p>
                                        <p><strong>Comment</strong><br>Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit. Curabitur suscipit suscipit mi, non tempor nulla finibus
                                            eget. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></div>
                                </div>
                                <div class="col-12 col-lg-6"><h4 class="contact-us__header card-title">Leave us a
                                        Message</h4>
                                    <form method="post" action="{{ route('contacts.store') }}">
                                        @csrf
                                        <div class="form-row">
                                            <div class="form-group col-md-6"><label for="form-name">Your Name</label>
                                                <input type="text" id="form-name" class="form-control"
                                                       placeholder="Your Name" name="name" value="{{ old('name') }}">
                                                @error('name')
                                                    <div class="footer-newsletter__text footer-newsletter__text--social text-danger mt-0">
                                                        Name is required
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-6"><label for="form-email">Email</label>
                                                <input type="email" id="form-email" class="form-control"
                                                       placeholder="Email Address" name="email" value="{{ old('email') }}">
                                                @error('email')
                                                    <div class="footer-newsletter__text footer-newsletter__text--social text-danger mt-0">
                                                        Provide a valid email
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group"><label for="form-subject">Subject</label> <input
                                                type="text" id="form-subject" class="form-control"
                                                placeholder="Subject" name="subject"  value="{{ old('subject') }}">
                                            @error('subject')
                                                <div class="footer-newsletter__text footer-newsletter__text--social text-danger mt-0">
                                                    Subject is required
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group"><label for="form-message">Message</label> <textarea
                                                id="form-message" class="form-control" rows="4" name="message">{{ old('message') }}</textarea>
                                        @error('message')
                                            <div class="footer-newsletter__text footer-newsletter__text--social text-danger mt-0">
                                                Message must consist of at least 20 characters
                                            </div>
                                        @enderror</div>
                                        <button type="submit" class="btn btn-primary">Send Message</button>
                                    </form>

                                    @if(session()->has('success'))
                                        <div class="footer-newsletter__text footer-newsletter__text--social text-success">
                                            {{ session()->get('success') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

