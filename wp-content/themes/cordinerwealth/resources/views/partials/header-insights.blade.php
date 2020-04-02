@if( has_post_thumbnail(60) && !is_singular('team') )
  @php
    $background = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
  @endphp
@else
  @php
    $background = '';
  @endphp
@endif
<header class="banner" style="background-image: url( {{ $background }} );">

  <div class="navbar is-fixed-top">
    <div class="container">
      <div class="navbar-brand">
        <a href="{{ home_url('/') }}" class="brand navbar-item navbar-logo">
          <img src="@asset('images/gsi-logo.svg')" alt="GSI main logo">
        </a>
        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <div class="left-slice"></div>

        </a>
      </div>

      <div class="navbar-menu">
        <div class="navbar-end">

          @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu([
                'theme_location'    => 'primary_navigation',
                'depth'             => 2,
                'container'         => false,
                'menu_class'        => 'navbar-menu',
                'menu_id'           => 'primary-menu',
                'after'             => "</div>",
                'walker'            => new \App\BulmaNavWalker(),
                'items_wrap'        => '%3$s'
                ]) !!}
          @endif

          <div class="navbar-spacer">

          </div>

          <a href="{{ the_field('telephone_link', 'options') }}" class="navbar-item has-text-centered">
            <img src="{{ \App\asset_path('images/telephone.svg') }}" alt="Phone us">
          </a>
          <a href="mailto:{{ the_field('email_link', 'options') }}" class="navbar-item has-text-centered">
           <img src="{{ \App\asset_path('images/email.svg') }}" alt="Email us">
          </a>
        </div>
      </div>

    </div>
  </div>


  @if( is_singular('team') )
    <div class="padd-header">
      <div class="container">
        <div class="columns">
          <div class="column is-offset-4">
            <h1 class="title">{{ the_title() }}</h1>
            <h2 class="subtitle">{!! get_field('job_title') !!}</h2>

          </div>
        </div>
      </div>
    </div>
  @else
    <div class="page-title" data-aos="zoom-in">
      <h1 class="title is-1">{!! get_field('styled_page_title', 60) !!}</h1>
    </div>
  @endif


</header>


