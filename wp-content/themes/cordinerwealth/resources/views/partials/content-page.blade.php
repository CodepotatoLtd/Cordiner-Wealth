
    <div class="content-area">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-8">
                    @php the_content() @endphp
                    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
                </div>
            </div>
        </div>
    </div>