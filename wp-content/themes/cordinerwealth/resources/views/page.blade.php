@extends('layouts.app')

@section('content')

  @if( have_rows('horizontal_panels') )
    @php while ( have_rows('horizontal_panels') ) : the_row(); @endphp

    @if (get_row_layout() === 'plan_blocks')

      <div class="py-4 px-4 md:px-4 lg:px-4 xl:px-0">
        <div class="container">
          <div class="flex flex-col md:flex-row lg:flex-row xl:flex-row mb-4">
            <div class="w-full h-auto md:h-48 lg:h-64 xl:h-2005 overflow-hidden md:w-1/2 md:pr-4">
              <div class="w-full mr-4 mb-4">
                <div class="bg-blue md:h-48 lg:h-64 xl:h-2005 px-8 py-7 relative">
                  <h1 class="text-white font-trajan text-12 mb-08">@php the_sub_field('title') @endphp</h1>
                  <div class="text-white roboto-light text-sm mb-8">@php the_sub_field('text') @endphp</div>
                  <a class="button red-bg-blue">Get Started</a>
                  <img class="absolute bottom-9.8 right-16 w-16 h-16 md:w-16 md:h-16 lg:w-32 lg:w-32" src="@php the_sub_field('image') @endphp" alt="Chess Pieces - Metis Financial Strategy">
                </div>
              </div>
            </div>
            <div class="w-full h-56 md:h-48 lg:h-64 xl:h-2005 overflow-hidden md:w-1/2">
              <div class="flex flex-row -mx-2">
                <div class="w-1/2 px-2">
                  <img src="@php the_sub_field('block_top_middle') @endphp" alt="">
                </div>
                <div class="w-1/2 pl-2">
                  <img src="@php the_sub_field('block_top_right') @endphp" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="flex flex-col md:flex-row lg:flex-row xl:flex-row">
            <div class="w-full md:h-26 lg:h-363 xl:h-46 overflow-hidden md:w-1/2 lg:w-1/2 xl:w-1/2 md:pr-4 lg:pr-4 xl:pr-4">
              <div class="flex flex-row -mx-2">
                <div class="w-full md:w-1/2 lg:w-1/2 xl:w-1/2 px-2">
                  <img class="w-full md:w-auto lg:w-auto xl:w-auto" src="@php the_sub_field('block_bottom_left_one') @endphp" alt="">
                </div>
                <div class="w-full hidden md:block lg:block xl:block md:w-1/2 lg:w-1/2 xl:w-1/2 px-2">
                  <img src="@php the_sub_field('block_bottom_left_two') @endphp" alt="">
                </div>
              </div>
            </div>
            <div class="hidden md:h-26 lg:h-363 xl:h-46 overflow-hidden md:block lg:block xl:block md:w-1/2 lg:w-1/2 xl:w-1/2">
              <div class="flex -mx-2">
                <div class="w-1/3 px-2">
                  <img src="@php the_sub_field('block_bottom_right_one') @endphp" alt="">
                </div>
                <div class="w-1/3 px-2">
                  <img src="@php the_sub_field('block_bottom_right_two') @endphp" alt="">
                </div>
                <div class="w-1/3 pl-2">
                  <img src="@php the_sub_field('block_bottom_right_three') @endphp" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    @elseif (get_row_layout() === 'awards')

      <div class="bg-lightgrey text-center py-24 px-4 md:px-0">
        <div class="container">
          <div class="flex flex-col mb-12">
            <h2 class="font-trajan text-red text-175 pr-4 mb-4">@php the_sub_field('title') @endphp</h2>
            <div class="roboto-light text-xl">@php the_sub_field('text') @endphp</div>
          </div>
          <div class="w-1/3 lg:w-2/3 mx-auto">
            @if (have_rows('awards'))
              <div class="flex flex-col lg:flex-row">
                @while (have_rows('awards')) @php the_row() @endphp
                @if ($i % 3 == 0)</div><div class="flex flex-col lg:flex-row">@endif
                <img class="mb-4 lg:mr-4" src="@php the_sub_field('award') @endphp">
                @php $i++ @endphp
                @endwhile
              </div>
            @endif
          </div>
        </div>
      </div>

    @elseif (get_row_layout() === 'centered_image_under')

      <div class="bg-lightgrey text-center py-24 px-4 md:px-0">
        <div class="container">
          <div class="flex flex-col mb-12 w-1/2 mx-auto">
            <h2 class="font-trajan text-red text-175 pr-4 mb-4">@php the_sub_field('title') @endphp</h2>
            <div class="roboto-light text-xl mb-4">@php the_sub_field('text') @endphp</div>
            <img class="w-1/3 mx-auto" src="@php the_sub_field('image') @endphp">
          </div>
        </div>
      </div>

    @elseif (get_row_layout() === 'centered_ctas')

      <div class="bg-lightgrey text-center py-24 px-4 md:px-0 pb-40">
        <div class="container">
          <div class="flex flex-col mb-12">
            <h2 class="font-trajan text-red text-175 pr-4 mb-4">@php the_sub_field('title') @endphp</h2>
            <div class="roboto-light text-xl">@php the_sub_field('text') @endphp</div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="flex flex-col md:flex-row -mt-32">
          @if (have_rows('ctas'))
            @php $i = 1 @endphp
            @while (have_rows('ctas')) @php the_row() @endphp
            <div class="w-full lg:w-1/3 text-center mb-4 relative @if ($i !== 3) md:mr-4 @endif">
              <a href="@php the_sub_field('link_url') @endphp">
                <img class="mx-auto" src="@php the_sub_field('image') @endphp">
                <div class="button bg-red text-white text-center uppercase w-288 absolute bottom-1 left-50%" style="margin-left:-144px;">@php the_sub_field('link_text') @endphp</div>
              </a>
            </div>
            @php $i++ @endphp
            @endwhile
          @endif
        </div>
      </div>


    @elseif (get_row_layout() === 'content_white')

      <div class="bg-white py-24 px-4 md:px-0">
        <div class="container">
          <div class="flex flex-col md:flex-row">
            <div class="w-full md:w-5/12 mb-4">
              <h2 class="font-trajan text-red text-175 pr-4">@php the_sub_field('title') @endphp</h2>
            </div>
            <div class="w-full md:w-7/12">
              <div class="roboto-light text-grey text-md leading-snug md:text-base">
                @php the_sub_field('text') @endphp
              </div>
            </div>
          </div>
        </div>
      </div>

    @elseif (get_row_layout() === 'content_blue')

      <div class="bg-lightgrey py-24 px-4 md:px-0 @if (get_sub_field('add_ctas') === true) pb-64 @endif">
        <div class="container">
          <div class="flex flex-col md:flex-row">
            <div class="w-full md:w-5/12 mb-4">
              <h2 class="font-trajan text-red text-175 pr-4">@php the_sub_field('title') @endphp</h2>
            </div>
            <div class="w-full md:w-7/12">
              <div class="roboto-light text-md leading-snug md:text-base">
                @php the_sub_field('text') @endphp
              </div>
            </div>
          </div>
        </div>
      </div>
      @if (get_sub_field('add_ctas') === true)
        <div class="container">
          <div class="flex flex-col md:flex-row -mt-40">
            @if (have_rows('ctas'))
              @php $i = 1 @endphp
              @while (have_rows('ctas')) @php the_row() @endphp
              <div class="w-full lg:w-1/3 text-center mb-4 relative @if ($i !== 3) md:mr-4 @endif">
                <a href="@php the_sub_field('button_link') @endphp">
                  <img class="mx-auto" src="@php the_sub_field('image') @endphp">
                  <div class="button bg-white text-center uppercase w-288 absolute bottom-1 left-50%" style="margin-left:-144px;">@php the_sub_field('button_text') @endphp</div>
                </a>
              </div>
              @php $i++ @endphp
              @endwhile
            @endif
          </div>
        </div>
      @endif

    @elseif (get_row_layout() === 'team_section')

      <div class="px-4 my-24">
        <div class="container">
          <div class="text-center my-24 w-2/3 mx-auto">
            <h2 class="font-trajan text-red mb-4">@php the_sub_field('title') @endphp</h2>
            <p class="roboto-light text-xl text-grey mb-8">@php the_sub_field('text') @endphp</p>
            <a class="button blue-bg-white" href="@php the_sub_field('button_link') @endphp">@php the_sub_field('button_text') @endphp</a>
          </div>
          <div class="w-screen-135 md:w-full overflow-x-hidden">
            <div class="flex">
              <div class="flex flex-row">
                <div class="swiper-container">
                  <div class="swiper-wrapper">
                    @if (have_rows('columns'))
                      @php $i = 1; @endphp
                      @while (have_rows('columns')) @php the_row() @endphp
                      <div class="swiper-slide w-1/4 overflow-hidden @if ($i % 2 == 0) mt-0 lg:mt-24 xl:mt-24 @else mt-8 lg:mt-0 xl:mt-0 @endif @if ($i == 6) mr-0 @else mr-2 md:mr-4 @endif">
                        @if( have_rows('column') )
                          @while ( have_rows('column')) @php the_row() @endphp
                          @if (get_row_layout() === 'placeholder')
                            <img class="h-auto mb-2 lg:mb-4 xl:mb-4" src="@php the_sub_field('placeholder_image') @endphp">
                          @elseif (get_row_layout() === 'person')
                            @php $posts = get_sub_field('team_members') @endphp
                            @if ($posts)
                              @foreach( $posts as $p )
                                @php echo get_the_post_thumbnail($p->ID, 'full', array('class' => 'h-auto mb-2 lg:mb-4 xl:mb-4')) @endphp
                              @endforeach
                            @endif
                          @endif
                          @endwhile
                        @endif
                      </div>
                      @php $i++ @endphp
                      @endwhile
                    @endif
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    @elseif (get_row_layout() === 'fees_table')

      <div class="px-4 my-24">
        <div class="container">
          <div class="hidden md:flex md:flex-row">
            <div class="w-1/3 bg-blue text-white roboto-light p-4">
              @php the_sub_field('column_1_title') @endphp
            </div>
            <div class="w-2/3">
              <div class="flex table-line-header">
                <div class="w-1/3 bg-lightgrey roboto-light p-4 text-center">
                  @php the_sub_field('column_2_title') @endphp
                </div>
                <div class="w-1/3 bg-lightgrey roboto-light p-4 text-center">
                  @php the_sub_field('column_3_title') @endphp
                </div>
                <div class="w-1/3 bg-lightgrey roboto-light p-4 text-center">
                  @php the_sub_field('column_4_title') @endphp
                </div>
              </div>
            </div>
          </div>

          @if (have_rows('table'))
            @php $i = 0 @endphp
            @while (have_rows('table')) @php the_row() @endphp
            <div class="table-title cursor-pointer w-full md:hidden rounded bg-white border border-bordergrey text-xs px-4 py-2 mb-4 relative z-10">
              <div class="flex flex-row justify-between">
                <div>@php the_sub_field('title') @endphp</div>
                <div>
                  <img class="table-arrow-down" src="@asset('images/icon-table-down.svg')">
                  <img class="table-arrow-up hidden" src="@asset('images/icon-table-up.svg')">
                </div>
              </div>
            </div>
            <div class="table-dropdown flex-row table-line mb-4 -mt-1 md:mb-0 md:mt-0 hidden md:flex">
              <div class="w-1/3 flex flex-col justify-center @if ($i % 2 == 0) w-1/2 bg-blue align-middle md:bg-tablelightgrey @else bg-blue md:bg-lightgrey @endif roboto-light text-xs md:text-base text-white md:text-black p-4 border-white border border-l-0 border-r-0 border-b-0">
                @php the_sub_field('title') @endphp
              </div>
              <div class="w-2/3">
                <div class="flex flex-col md:flex-row table-line">
                  <div class="flex flex-row md:hidden">
                    <div class="w-1/2 md:hidden @if ($i % 2 == 0) bg-lightgrey @else bg-tablelightgrey @endif roboto-light p-4 text-xs md:text-base text-center border-white border border-r-0 border-b-0">Zeus</div>
                    <div class="w-1/2 md:w-1/3 @if ($i % 2 == 0) bg-lightgrey @else bg-tablelightgrey @endif roboto-light p-4 text-xs md:text-base text-center border-white border border-r-0 border-b-0">
                      @php the_sub_field('zeus') @endphp
                    </div>
                  </div>
                  <div class="hidden md:block md:w-1/3 @if ($i % 2 == 0) bg-tablelightgrey @else bg-lightgrey @endif roboto-light p-4 text-xs md:text-base text-center border-white border border-r-0 border-b-0">
                    @php the_sub_field('zeus') @endphp
                  </div>
                  <div class="flex flex-row md:hidden">
                    <div class="w-1/2 md:hidden @if ($i % 2 == 0) bg-tablelightgrey @else bg-lightgrey @endif roboto-light p-4 text-xs md:text-base text-center border-white border border-r-0 border-b-0">Oceanus</div>
                    <div class="w-1/2 md:w-1/3 @if ($i % 2 == 0) bg-tablelightgrey @else bg-lightgrey @endif roboto-light p-4 text-xs md:text-base text-center border-white border border-r-0 border-b-0">
                      @php the_sub_field('oceanus') @endphp
                    </div>
                  </div>
                  <div class="hidden md:block md:w-1/3 @if ($i % 2 == 0) bg-tablelightgrey @else bg-lightgrey @endif roboto-light p-4 text-xs md:text-base text-center border-white border border-r-0 border-b-0">
                    @php the_sub_field('oceanus') @endphp
                  </div>
                  <div class="flex flex-row md:hidden">
                    <div class="w-1/2 md:hidden @if ($i % 2 == 0) bg-lightgrey @else bg-tablelightgrey @endif roboto-light p-4 text-xs md:text-base text-center border-white border border-r-0 border-b-0">Tethys</div>
                    <div class="w-1/2 md:w-1/3 @if ($i % 2 == 0) bg-lightgrey md:bg-tablelightgrey @else bg-tablelightgrey md:bg-lightgrey @endif roboto-light p-4 text-xs md:text-base text-center border-white border border-r-0 border-b-0">
                      @php the_sub_field('tethys') @endphp
                    </div>
                  </div>
                  <div class="hidden md:block md:w-1/3 @if ($i % 2 == 0) bg-lightgrey md:bg-tablelightgrey @else bg-tablelightgrey md:bg-lightgrey @endif roboto-light p-4 text-xs md:text-base text-center border-white border border-r-0 border-b-0">
                    @php the_sub_field('tethys') @endphp
                  </div>
                </div>
              </div>
            </div>
            @php $i++ @endphp
            @endwhile
          @endif

        </div>
      </div>

    @elseif (get_row_layout() === 'infographics')

      <div class="px-4 py-24 my-24 bg-lightgrey md:text-left">
        <div class="container">
          <h2 class="font-trajan text-red text-center mx-auto mb-8">Here's how they work</h2>
          <div class="flex flex-col md:flex-row">
            <div class="w-full md:w-445 lg:w-490 xl:w-512 relative mx-auto mb-8 md:mb-4 md:mr-8 lg:mr-24">
              @for($i = 1; $i < 7; $i++)
                <a class="absolute rounded-full info-@php echo $i @endphp" href="#"></a>
                <img id="info-@php echo $i @endphp" class="mx-auto ig @if ($i !== 1) hidden @endif" src="@asset('images/infographic-'.$i.'.png')">
              @endfor
            </div>
            <div class="w-full md:w-1/2 mx-auto flex flex-col justify-start md:justify-center roboto-light leading-snug">
              @if (have_rows('graphics'))
                @php $n = 1 @endphp
                @while (have_rows('graphics')) @php the_row() @endphp
                <div class="it info-text-@php echo $n @endphp @if ($n === 1) block @else hidden @endif">
                  <h2 class="roboto-light text-xl flex flex-row items-center mb-8">
                    <div class="bg-red rounded-full w-8 lg:w-12 h-8 lg:h-12 text-center flex flex-col text-white justify-center mr-4">@php echo $n @endphp</div> @php the_sub_field('title') @endphp</h2>
                  @php the_sub_field('text') @endphp
                </div>
                @php $n++ @endphp
                @endwhile
              @endif
            </div>
          </div>
        </div>
      </div>

    @elseif (get_row_layout() === 'be_inspired_cta')

      <div class="mt-24">
        <div class="container">
          <div class="flex flex-col md:flex-row">
            <div class="w-full md:w-3/4">
              <img src="@asset('images/bg-beinspired.png')">

            </div>
            <div class="md:w-1/2 bg-white text-center flex flex-col justify-center -mt-24 mx-4 px-4 md:px-12 py-8 md:-ml-24 md:my-6 lg:my-12 lg:px-20 lg:-ml-40 xl:-ml-48" style="box-shadow:0 2px 4px 0 rgba(0,0,0,0.50)">
              <h2 class="text-red font-trajan mb-4">@php the_sub_field('title') @endphp</h2>
              <p class="mb-4 roboto-light text-lg">@php the_sub_field('text') @endphp</p>
              <a class="button red-bg-white" href="@php the_sub_field('button_link') @endphp">@php the_sub_field('button_text') @endphp</a>
            </div>
          </div>
        </div>
      </div>

    @elseif (get_row_layout() === 'challenge_cta')

      <div class="mt-24 mb-24">
        <div class="container">
          <div class="flex flex-col">
            <img class="xl:w-full" src="@asset('images/bg-large-cheetah.png')">
            <div class="bg-white -mt-8 md:-mt-40 lg:-mt-56 mx-4 md:mx-16 px-4 py-12 md:p-20 text-center" style="box-shadow:0 4px 5px 2px rgba(0,0,0,0.09)">
              <h2 class="text-blue font-trajan mb-4">@php the_sub_field('title') @endphp</h2>
              <p class="text-grey roboto-light mb-8">@php the_sub_field('text') @endphp</p>
              <a class="button blue-bg-white" href="@php the_sub_field('button_link') @endphp">@php the_sub_field('button_text') @endphp</a>
            </div>
          </div>
        </div>
      </div>

    @elseif (get_row_layout() === 'news_section')

      <div class="bg-lightgrey px-4 pt-24 mt-32">
        <div class="container">

          @php $query = new WP_Query(array('post_type' => 'post', 'posts_per_page' => '1')) @endphp

          @if ($query->have_posts())
            @php $i = 1 @endphp
            @while ($query->have_posts()) @php $query->the_post() @endphp

            <div class="flex flex-col md:flex-row -mt-56 mb-24">
              <div class="w-full md:w-3/4 relative">
                <a href="@php the_permalink() @endphp">
                  @php the_post_thumbnail('full') @endphp
                  <img class="icon-play absolute top-0 left-1" src="@asset('images/icon-play.svg')">
                </a>
              </div>
              <div class="md:w-1/2 bg-white text-center flex flex-col justify-center z-10 -mt-24 mx-4 px-4 md:px-12 py-8 md:-ml-24 md:my-6 lg:my-20 lg:px-20 lg:-ml-40 xl:-ml-48" style="box-shadow:0 2px 4px 0 rgba(0,0,0,0.50)">
                <h2 class="text-red font-trajan mb-4">@php the_title() @endphp </h2>
                <div class="mb-4 roboto-light text-lg">@php echo substr(get_the_content(), 0, 100).'...' @endphp</div>
              </div>
            </div>

            @endwhile
          @endif

          <div class="flex flex-row align-center">
            <a class="w-full md:w-1/3 mx-auto bg-red text-white text-lg roboto-light rounded py-3 px-4 cursor-pointer category-filter" href="#">
              Filter Content
              <img class="filter-arrow-down float-right" src="@asset('images/icon-filter-down.svg')">
              <img class="filter-arrow-up hidden float-right" src="@asset('images/icon-filter-up.svg')">
            </a>
          </div>
          <div class="w-full md:w-1/3 mx-auto bg-lightgrey filter-dropdown" style="display:none">
            <ul>
              <li class="show-all text-grey roboto-light p-4 border border-2 border-t-0 border-r-0 border-l-0"><a href="#">Show all</a></li>
              @php $categories = get_categories(array('orderby' => 'name')); @endphp
              @php $count = count($categories); @endphp
              @php $i = 1; @endphp
              @foreach ($categories as $category)
                <li class="filter-item text-grey roboto-light p-4 @if ($count !== $i) border border-2 border-t-0 border-r-0 border-l-0 @endif" data-category="@php echo $category->slug @endphp"><a class="block" href="@php the_permalink() @endphp">@php echo $category->name @endphp</a></li>
              @endforeach
              @php $i++ @endphp
            </ul>
          </div>
        </div>
      </div>

      <div class="bg-lightgrey px-4 py-24">
        <div class="container">
          <div class="grid">
            @php $query = new WP_Query(array('post_type' => 'post', 'posts_per_page' => '-1')) @endphp

            @if ($query->have_posts())
              @php $i = 1 @endphp
              @while ($query->have_posts()) @php $query->the_post() @endphp
              @php $categories = get_the_category() @endphp

                @if (get_field('type') === 'text-image')
                  <div class="grid-item text-image @foreach($categories as $category){{ $category->slug }} @endforeach">
                      <div class="relative border-red border border-2 border-t-0 border-r-0 border-l-0">
                        @if (has_post_thumbnail())
                          <a href="{{ get_permalink() }}">{{ the_post_thumbnail('full') }}</a>
                        @endif
                        <a href="{{ get_permalink() }}"><img class="absolute bottom-0 left-1" src="@asset('images/arrow-red.svg')"/></a>
                      </div>
                      <div class="bg-white text-grey roboto-light leading-normal p-4 pb-10 border border-lightgrey news-item-text">
                        <h3 class="text-grey text-xl roboto-light leading-normal mb-4"><a href="{{ get_permalink() }}">{{ the_title() }}</a></h3>
                        @php $search_text = get_the_excerpt(); @endphp
                        @php $tags = array("<p>", "</p>", "&nbsp;"); @endphp
                        @php $search_content = str_replace($tags, "", $search_text); @endphp
                        @php echo $search_content; @endphp
                      </div>
                  </div>
                @elseif (get_field('type') === 'text-video')
                  <div class="grid-item text-video @foreach($categories as $category){{ $category->slug }} @endforeach">
                      <div class="relative border-red border border-2 border-t-0 border-r-0 border-l-0">
                        <div class="bg-black">
                          @if (has_post_thumbnail())
                            <a href="{{ get_permalink() }}">{{ the_post_thumbnail('full', array('class' => 'opacity-50')) }}</a>
                          @else
                            <a href="{{ get_permalink() }}"><img class="opacity-50" src="@asset('images/news-image-01.jpg')"/></a>
                          @endif
                        </div>
                        <a href="{{ get_permalink() }}"><img class="absolute top-0 left-1" src="@asset('images/icon-play.svg')" style="left:calc(50% - 44px); top:calc(50% - 44px);"/></a>
                        <a href="{{ get_permalink() }}"><img class="absolute bottom-0 left-1" src="@asset('images/arrow-red.svg')"/></a>
                      </div>
                      <div class="bg-white text-grey roboto-light leading-normal p-4 pb-10 border border-lightgrey news-item-text">
                        <h3 class="text-grey text-xl roboto-light leading-normal"><a href="{{ get_permalink() }}">{{ the_title() }}</a></h3>
                      </div>
                  </div>
                @else
                  <div class="grid-item other @foreach($categories as $category){{ $category->slug }} @endforeach">
                    <div class="bg-blue text-white text-xl roboto-light leading-normal p-4 pb-10 relative">
                      <a href="{{ the_permalink() }}">{{ the_title() }}</a>
                      <a href="{{ the_permalink() }}"><img class="absolute bottom-0 left-4" src="@asset('images/arrow-white.svg')"/></a>
                    </div>
                    <div class="bg-white text-grey roboto-light leading-normal p-4 pb-10 border border-lightgrey news-item-text">
                      @php $search_text = get_the_excerpt(); @endphp
                      @php $tags = array("<p>", "</p>", "&nbsp;"); @endphp
                      @php $search_content = str_replace($tags, "", $search_text); @endphp
                      @php echo $search_content; @endphp
                    </div>
                  </div>
                @endif
              @endwhile
            @endif
          </div>

        </div>

        @php wp_reset_postdata() @endphp

      </div>
    @endif

    @endwhile
  @endif


@endsection
