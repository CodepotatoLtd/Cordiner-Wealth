@extends('layouts.insights')

@section('content')

    @if(have_posts())
        <div class="section is-white-with-blue-title">
            <div class="container">
                <div class="heading has-border-bottom">
                    <h1 class="title" data-aos="fade-up">{{ get_field('blue_title', 60) }}</h1>
                </div>
                <div class="columns">
                    <div class="column">
                        <p data-aos="fade-left" data-aos-delay="300">{!! get_field('intro', 60) !!}</p>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if (!have_posts())
        <div class="alert alert-warning">
            {{ __('Sorry, no results were found.', 'sage') }}
        </div>
        {!! get_search_form(false) !!}
    @endif

    <div class="container">
        <div class="columns is-multiline is-centered is-main-blog-bit">
            @php $i = 1; @endphp
            @while (have_posts()) @php the_post(); @endphp
            <div class="column is-4" data-aos="fade-up" data-aos-delay="{{ $i * 200 }}">
                @include('partials.content-'.get_post_type())
            </div>
            @php $i++; @endphp
            @endwhile
        </div>
    </div>

    <div class="section is-grey-with-grey-title">
        <div class="container">
            <div class="heading has-border-bottom">
                <h1 class="title" data-aos="fade-up">{{ get_field('educational_videos_title', 60) }}</h1>
            </div>
            <div class="columns">
                <div class="column">
                    <p data-aos="fade-left" data-aos-delay="300">{{ get_field('educational_intro', 60) }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        @php
            $vids = \App\Controllers\App::grab_three_vids();
        @endphp
        <div class="columns is-multiline is-centered is-main-blog-bit">
            @php $i = 1; @endphp
            @while ($vids->have_posts()) @php $vids->the_post() @endphp
            <div class="column is-4">
                <div class="vid-block" data-aos="fade-up" data-aos-delay="{{ $i * 200 }}">
                    <div class="content-wrap">
                        {!! the_content() !!}
                    </div>
                    @php
                        $post_tags = get_the_tags();
                    @endphp
                    @if ( $post_tags )
                        <div class="tags">
                            @foreach( $post_tags as $tag )
                                <span class="tag">{{ $tag->name }}</span>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
            @php $i++; @endphp
            @endwhile
            @php
                wp_reset_query();
            @endphp
        </div>

        <div class="navigation mb-30"><p class="is-pulled-right newer"><?php previous_posts_link('Newer posts'); ?></p>
            <p class="older"><?php next_posts_link('Older posts'); ?></p>
            <div class="clearfix"></div>
        </div>

    </div>

@endsection
