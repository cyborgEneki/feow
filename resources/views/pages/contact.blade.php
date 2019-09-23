@extends('layouts.layout')

@section('content')
    {{--Banner--}}
    <section class="section section-alt">
        <div class="row-fluid">
            <div class="super-hero-unit">
                <figure class="dark-background">
                    <img alt="river meandering through a shallow valley"
                         src="{{ asset('/img/assets/feow/mountain-1.jpeg') }}" class="half-opacity">
                    <figcaption class="flex-caption">
                        <h1 class="super animated fadeinup delayedmore">
                            Contact
                        </h1>
                    </figcaption>
                </figure>
            </div>
        </div>
    </section>
    {{--Main Content--}}
    <section class="section section-padded">
        <div class="container-fluid">
            <div class="section-header">
                <h1>
                    Want
                    <small class="light">to talk?</small>
                </h1>
            </div>
            <div class="row-fluid">
                <div>
                    <form action="{{  url('/contact')  }} " method="post" class="contact-form" id="contactForm" novalidate="">
                        {{ csrf_field() }}
                        <div class="controls controls-row">
                            <div class="control-group span6">
                                <input class="span12 contact-form-input" name="name" placeholder="your name"
                                       type="text">
                            </div>
                            <div class="control-group span6">
                                <input class="span12 contact-form-input" name="email" placeholder="your email"
                                       type="email">
                            </div>
                        </div>
                        <div class="controls controls-row">
                            <div class="control-group span12">
                                <input class="span12 contact-form-input" name="subject" placeholder="subject"
                                       type="text">
                            </div>
                        </div>
                        <div class="controls controls-row">
                            <div class="control-group span12">
                                <textarea class="span12 contact-form-input" name="message"
                                          placeholder="I want to talk about... " rows="5"></textarea>
                            </div>
                        </div>
                        <div class="controls controls-row">
                            <div class="control-group span12">
                                <button class="contact-button" name="submitButton" type="submit">
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                    <div id="messages"></div>
                </div>
            </div>
        </div>
    </section>
@stop
