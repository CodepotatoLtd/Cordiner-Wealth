<article @php post_class('post-panel') @endphp>
  <header>
    @php
      $cat = \App\Controllers\App::parent_category();
    @endphp
    <p class="post-panel-title" style="background-color: {{ get_field('colour', $cat) }}">{{ $cat->name }}</p>
  </header>
  <div class="entry-summary">
    @include('partials/entry-meta')
    @if( get_field('is_external_link') === true )
      <h2 class="entry-title"><a href="{{ get_field('external_link') }}" target="_blank" style="color: {{ get_field('colour', $cat) }}">{{ get_the_title() }}</a></h2>
      @php the_excerpt() @endphp
      <a href="{{ get_field('external_link') }}" target="_blank" class="button is-fullwidth-mobile is-dark-grey">{{ get_field('link_text') }}</a>
    @else
      <h2 class="entry-title"><a href="{{ get_permalink() }}" style="color: {{ get_field('colour', $cat) }}">{{ get_the_title() }}</a></h2>
      @php the_excerpt() @endphp
      <a href="{{ get_permalink() }}" class="button is-fullwidth-mobile is-dark-grey">VIEW</a>
    @endif

  </div>
</article>
