<article @php post_class('single-post mb-16') @endphp>
      @php the_content() @endphp
  {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
</article>


<div class="flex-row flex lg:hidden px-4">
    <a href="{{ home_url('/about-us') }}" class="button roboto-light inline-block blue-bg-white mb-4 w-full">< Back to Team</a>
</div>
