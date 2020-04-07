@extends('layouts.app')

@section('content')

    <div class="bg-green py-4 @if (has_post_thumbnail()) pb-2 @else pb-4 @endif h-auto lg:h-72">
        <div class="container">
            <div class="flex-row hidden lg:flex lg:px-4">
                <a href="{{ home_url('/') }}/us/meet-the-team" class="button inline-block bg-white white-bg-orange py-2 px-8 mb-4">< Back to Team</a>

            </div>
            <div class="flex flex-col items-center lg:items-start md:flex-row justify-center lg:px-4">
                <div class="w-full md:w-1/2 lg:w-3/12 px-4 lg:px-0 mb-4">
                    <div class="blog-image relative">
                        @php the_post_thumbnail('full', array('class' => 'w-full')) @endphp
                        <div class="absolute bottom-0 left-0 bg-white p-2 w-full">
                            <div class="montserrat-regular text-grey mb-1">@php the_title() @endphp @php the_field('qualifications') @endphp</div>
                            <div class="text-green uppercase text-xs mb-4">@php the_field('job_title') @endphp</div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-9/12 px-4 lg:px-12">
                    <div class="montserrat-light text-white text-xl leading-normal">
                        @php the_field('bio_text') @endphp
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--    <div class="bg-lightgrey">--}}
{{--        <div class="container">--}}
{{--            @while(have_posts()) @php the_post() @endphp--}}
{{--            @include('partials.content-single-'.get_post_type())--}}
{{--            @endwhile--}}
{{--        </div>--}}
{{--    </div>--}}

@endsection
