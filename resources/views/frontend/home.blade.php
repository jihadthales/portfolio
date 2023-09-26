@extends('frontend.layouts.layout')

@section('content')
  @include('frontend.section.section1')


  @include('frontend.section.service')
	
  
  
  @include('frontend.section.about')

		<!-- Portfolio-Area-Start -->
        @include('frontend.section.portfolio')
		<!-- Portfolio-Area-End -->

		<!-- Skills-Area-Start -->
        @include('frontend.section.skills')
		<!-- Skills-Area-End -->

		<!-- Experience-Area-Start -->
        @include('frontend.section.experience')
		<!-- Experience-Area-End -->

		<!-- Testimonial-Area-Start -->
        @include('frontend.section.testimonial')
		<!-- Testimonial-Area-End -->

		<!-- Blog-Area-Start -->
        @include('frontend.section.blog')

		<!-- Blog-Area-End -->

		<!-- Contact-Area-Start -->
        @include('frontend.section.contact')

		<!-- Contact-Area-End -->
 
@endsection