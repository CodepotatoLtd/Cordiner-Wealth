{{--
  Template Name: Calculator Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.calculator')
  @endwhile
@endsection
