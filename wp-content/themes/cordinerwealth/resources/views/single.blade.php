@extends('layouts.app')

@section('content')

      <div class="pt-8 @if (has_post_thumbnail()) pb-48 @else pb-4 @endif">
        <div class="container">

            @php $category = get_the_category(); @endphp

            @if (in_category($category[1]->name, $post = null))
                <a href="{{ home_url() }}/insights/?c=@php echo $category[1]->slug @endphp" class="button montserrat-medium inline-block white-bg-orange px-4 py-2 mb-4">< Back to the previous page</a>
            @elseif (in_category($category[0]->name, $post = null))
                <a href="{{ home_url() }}/insights/?c=@php echo $category[0]->slug @endphp" class="button montserrat-medium inline-block white-bg-orange px-4 py-2 mb-4">< Back to the previous page</a>
            @else
                <a href="{{ home_url('/') }}/insights" class="button montserrat-medium inline-block white-bg-orange px-4 py-2 mb-4">< Back to the previous page</a>
            @endif

          <div class="w-4/5 m-auto">
              <h1 class="montserrat-regular text-2xl">{{ the_title() }}</h1>
              <span class="montserrat-regular text-xs"><?php the_time('F jS, Y'); ?></span>
          </div>
        </div>
      </div>
      <div class="bg-lightgrey pt-12">
        <div class="container">
            <div class="blog-media w-full lg:w-4/5 px-4 lg:px-0 m-auto">
                @if (has_post_thumbnail())
                    <div class="blog-image -mt-56" style="background:url('@php echo get_the_post_thumbnail_url() @endphp') no-repeat center center; background-size:cover">
                        <img src="@php echo get_the_post_thumbnail_url() @endphp" style=" visibility: hidden;">
                    </div>
                @endif
            </div>
          @while(have_posts()) @php the_post() @endphp
            @include('partials.content-single-'.get_post_type())
          @endwhile

            @if (in_category($category[1]->name, $post = null))
                <a href="{{ home_url() }}/insights/?c=@php echo $category[1]->slug @endphp" class="button montserrat-medium inline-block white-bg-orange px-4 py-2 mb-4">< Back to the previous page</a>
            @elseif (in_category($category[0]->name, $post = null))
                <a href="{{ home_url() }}/insights/?c=@php echo $category[0]->slug @endphp" class="button montserrat-medium inline-block white-bg-orange px-4 py-2 mb-4">< Back to the previous page</a>
            @else
                <a href="{{ home_url('/') }}/insights" class="button montserrat-medium inline-block white-bg-orange px-4 py-2 mb-4">< Back to the previous page</a>
            @endif

        </div>
      </div>

@endsection
