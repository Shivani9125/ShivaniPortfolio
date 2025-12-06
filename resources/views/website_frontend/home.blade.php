@extends('website_frontend.layouts.app')

@section('content')

    @include('website_frontend.sections.hero')
    @include('website_frontend.sections.about')
    @include('website_frontend.sections.resume')
    @include('website_frontend.sections.portfolio')
    @include('website_frontend.sections.skills')
    {{-- @include('website_frontend.founder')
    @include('website_frontend.testimonial')
    @include('website_frontend.meet-our-founders')
    @include('website_frontend.faqw')
    @include('website_frontend.privacy_policy') --}}

@endsection