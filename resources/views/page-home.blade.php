{{--
  Template Name: Page home
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('section.begin')
    @include('section.advantage')
    @include('section.services')
    @include('section.reviews')
    @include('section.brands')
    @include('section.faq')
    @include('section.feedback')
    @include('section.map')
  @endwhile
@endsection
