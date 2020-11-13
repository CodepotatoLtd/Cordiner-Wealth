@php

    function colour($type){
        if (get_sub_field($type.'_colour')) :
            the_sub_field($type.'_colour');
        endif;
    }

    function video_url(){
         $video_url = get_sub_field('vimeo_url');
         $video_url = explode('/', $video_url);
         echo $video_url[3];
    }

@endphp

@if( have_rows('horizontal_panels') )
    @php while ( have_rows('horizontal_panels') ) : the_row(); @endphp

    @if (get_row_layout() === 'full_image')

        <div class="pt-24" style="background:url('@php the_sub_field('image') @endphp') no-repeat center center; background-size:cover; height:691px">
            <div class="container">
                <div class="w-full md:w-1/2 mx-auto md:mx-0 text-center md:text-left">
                    <h2 class="merriweather-light text-white text-4xl leading-tight mb-4">@php the_sub_field('title') @endphp</h2>
                    <p class="text-white mb-6">@php the_sub_field('text') @endphp</p>
                    <a class="button white-bg-orange py-2 px-8" href="@php the_sub_field('button_link') @endphp" @if (get_sub_field('external_link') == TRUE) target="_blank" @endif>@php the_sub_field('button_text') @endphp</a>
                </div>
            </div>
        </div>
        <div class="text-center -mt-8">
            <a href="#" class="w-12 h-12 lg:w-16 lg:h-16 mx-auto flex items-center justify-center bg-orange rounded-full"
               data-aos="zoom-in"><img
                    src="{{ \App\asset_path('images/caret-down.svg') }}" alt=""></a>
        </div>

    @elseif (get_row_layout() === 'centered_text')

        <div class="bg-lightgrey py-16 -mt-8">
            <div class="container">
                <div class="flex flex-col text-center mx-auto">
                    <h2 class="merriweather-light text-orange text-4xl leading-none mb-6">@php the_sub_field('title') @endphp</h2>
                    <div class="montserrat-regular text-darkgrey w-full md:w-2/3 mx-auto">
                        @php the_sub_field('text') @endphp
                    </div>
                </div>
            </div>
        </div>

    @elseif (get_row_layout() === 'text_content')

        <div class="@php colour('background') @endphp py-16">
            <div class="container">
                <div class="flex flex-col md:flex-row">
                    <div class="w-full md:w-5/12 mb-4">
                        <div class="flex flex-col justify-between h-full">
                            <h2 class="merriweather-light text-4xl leading-none pr-4 mb-auto mr-4 php @php colour('title') @endphp"
                                data-aos="fade">@php the_sub_field('title') @endphp</h2>
                        </div>
                    </div>
                    <div class="w-full md:w-7/12">
                        <div class="montserrat-regular text-md leading-snug md:text-base mb-4 @php colour('intro') @endphp" data-aos="fade-left"
                             data-aos-delay="200">
                            @php the_sub_field('intro_text') @endphp
                        </div>
                        <div class="montserrat-regular text-md leading-snug md:text-base @endphp" data-aos="fade-left"
                             data-aos-delay="200">
                            @php the_sub_field('text') @endphp
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @elseif (get_row_layout() === 'text_content_nbp')

        <div class="@php colour('background') @endphp pt-16 pb-4">
            <div class="container">
                <div class="flex flex-col md:flex-row">
                    <div class="w-full md:w-5/12 mb-4 text-center">
                        <div class="flex flex-col justify-between mb-8">
                            <h2 class="merriweather-light text-4xl leading-none pr-4 mb-auto text-left mr-4 php @php colour('title') @endphp"
                                data-aos="fade">@php the_sub_field('title') @endphp</h2>
                        </div>
                        @if (get_sub_field('button_text'))
                            <a class="button white-bg-orange py-2 px-16 text-white text-center uppercase md:mr-12 xl:mr-24" href="@php the_sub_field('button_link') @endphp">@php the_sub_field('button_text') @endphp</a>
                        @endif
                    </div>
                    <div class="w-full md:w-7/12">
                        <div class="montserrat-regular text-md leading-snug md:text-base mb-4 @php colour('intro') @endphp" data-aos="fade-left"
                             data-aos-delay="200">
                            @php the_sub_field('intro_text') @endphp
                        </div>
                        <div class="montserrat-regular text-md leading-snug md:text-base mb-4 @endphp" data-aos="fade-left"
                             data-aos-delay="200">
                            @php the_sub_field('text') @endphp
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @elseif (get_row_layout() === 'images_centered')

        <div class="container">
            <div class="@if (get_sub_field('layout')) : bg-darkblue @else bg-green md:w-10/12 @endif flex flex-col justify-center text-center mx-auto w-full px-16 py-16">
                <h2 class="merriweather-light text-orange text-4xl leading-tight md:pr-4 mb-4"
                    data-aos="fade">@php the_sub_field('title') @endphp</h2>
                <div class="montserrat-medium text-white" data-aos="fade-left">@php the_sub_field('text') @endphp</div>
            </div>
            <div class=" @if (get_sub_field('layout')) bg-darkblue @else bg-green md:w-10/12 @endif flex flex-col justify-center mx-auto md:h-1100 lg:h-500 w-full"></div>
            <div class="flex flex-col lg:flex-row justify-center mb-20 lg:mt-n500 lg:mb-200 mx-auto w-full  lg:w-full lg:bg-transparent @if (get_sub_field('layout')) bg-darkblue @else bg-green md:w-10/12 @endif">
                @if (have_rows('ctas'))
                    @php $i = 1 @endphp
                    @while (have_rows('ctas')) @php the_row() @endphp
                    <div class="w-11/12 lg:w-1/3 text-center mb-4 flex justify-center mx-auto lg:mx-2"
                         data-aos="fade-up"
                         data-aos-delay="{{ $i * 100 }}">
                        <a class="" href="@php the_sub_field('link_url') @endphp" style="background:url('@php the_sub_field('image') @endphp') no-repeat 0 0; background-size:cover">
                            <img class="w-2/3 mx-auto md:w-2/3 lg:w-full" src="@php the_sub_field('image') @endphp" style="visibility:hidden">
                            <div class="button white-bg-orange py-1 px-4 text-white text-center uppercase w-9/12 md:w-2/3 lg:w-10/12 mx-auto mb-p20">@php the_sub_field('link_text') @endphp</div>
                        </a>
                    </div>
                    @php $i++ @endphp
                    @endwhile
                @endif
            </div>
        </div>

    @elseif (get_row_layout() === 'image_content')

        @if (get_sub_field('download'))
            <div class="container">
                <div class="bg-cream py-16 mb-16 lg:ml-100">
                    <div class="flex flex-col lg:flex-row">
                        <div class="w-full lg:w-7/12">
                            <div class="md:flex md:justify-center lg:flex lg:justify-start">
                                <img class="lg:ml-n100" src="@php the_sub_field('image') @endphp" alt="Cordiner Image">
                            </div>
                        </div>
                        <div class="w-full lg:w-5/12 text-center lg:px-8 py-16">
                            <div class="lg:ml-n145 md:pl-8">
                                <h2 class="merriweather-light text-orange text-4xl leading-tight mb-4">@php the_sub_field('title') @endphp</h2>
                                <div class="mb-6">@php the_sub_field('text') @endphp</div>
                                <a class="button white-bg-orange py-2 px-16 text-white text-center uppercase" href="@php the_sub_field('file') @endphp">@php the_sub_field('button_text') @endphp</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="bg-white container py-16">
                @if (get_sub_field('layout'))

                    <div class="flex flex-col-reverse lg:flex-row">
                        <div class="w-full lg:w-1/2 text-center lg:px-8 py-16">
                            <h2 class="merriweather-light text-orange text-4xl leading-tight mb-4">@php the_sub_field('title') @endphp</h2>
                            <div class="mb-6">@php the_sub_field('text') @endphp</div>
                            <a class="button white-bg-orange py-2 px-16 text-white text-center uppercase" href="@php the_sub_field('button_link') @endphp">@php the_sub_field('button_text') @endphp</a>
                        </div>
                        <div class="w-full lg:w-1/2">
                            <div class="md:flex md:justify-center lg:flex lg:justify-end">
                                <img src="@php the_sub_field('image') @endphp" alt="Cordiner Image">
                            </div>
                        </div>
                    </div>

                @else

                    <div class="flex flex-col lg:flex-row">
                        <div class="w-full lg:w-1/2">
                            <div class="md:flex md:justify-center lg:flex lg:justify-start">
                                <img src="@php the_sub_field('image') @endphp" alt="Cordiner Image">
                            </div>
                        </div>
                        <div class="w-full lg:w-1/2 text-center lg:px-8 py-16">
                            <h2 class="merriweather-light text-orange text-4xl leading-tight mb-4">@php the_sub_field('title') @endphp</h2>
                            <div class="mb-6">@php the_sub_field('text') @endphp</div>
                            <a class="button white-bg-orange py-2 px-16 text-white text-center uppercase" href="@php the_sub_field('button_link') @endphp">@php the_sub_field('button_text') @endphp</a>
                        </div>
                    </div>

                @endif
            </div>
        @endif

    @elseif (get_row_layout() === 'video')

        <div class="container">
            <div class="bg-green mb-16 pb-24 lg:py-24 lg:ml-100 ">
                <div class="flex flex-col lg:flex-row">
                    <div class="w-full lg:w-3/5">
                        <div class="" style="padding:52.25% 0 0 0;position:relative;">
                            <iframe class="mt-n90 mb-4 lg:mt-0 lg:ml-n100"
                                src="https://player.vimeo.com/video/@php video_url() @endphp?title=0&byline=0&portrait=0"
                                style="position:absolute;top:0;left:0;width:100%;height:100%;"
                                frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                        </div>
                        <script src="https://player.vimeo.com/api/player.js"></script>
                    </div>
                    <div class="w-full lg:w-2/5 flex md:h-280 ">
                        <div class="px-4 lg:ml-n100 lg:my-auto">
                            <h2 class="merriweather-light text-orange text-4xl leading-tight pr-4 mb-4">@php the_sub_field('title') @endphp</h2>
                            <div class="text-white">
                                @php the_sub_field('text') @endphp
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @elseif (get_row_layout() === 'cta_centered')

        <div class="flex flex-col-reverse lg:flex-row my-16">
            <div class="w-full lg:w-2/3 text-center mx-auto px-4">
                <h2 class="merriweather-light text-orange text-4xl leading-tight pr-4 mb-4">@php the_sub_field('title') @endphp</h2>
                <div class="mb-6 px-4">@php the_sub_field('text') @endphp</div>
                <a class="button inline-block white-bg-orange py-2 px-16 text-white text-center uppercase" href="@php the_sub_field('button_link') @endphp">@php the_sub_field('button_text') @endphp</a>
            </div>
        </div>

    @elseif (get_row_layout() === 'cta_centered_app')

        <div class="flex flex-col-reverse lg:flex-row my-16">
            <div class="w-full lg:w-2/3 text-center mx-auto px-4">
                <h2 class="merriweather-light text-orange text-3xl md:text-4xl leading-tight pr-4 mb-4">@php the_sub_field('title') @endphp</h2>
                <div class="mb-6 px-4">@php the_sub_field('text') @endphp</div>
                <div class="app-buttons mb-6">
                    <div class="flex flex-col text-center mx-auto w-2/3">
                        @if (have_rows('app_buttons'))
                            @while (have_rows('app_buttons')) @php the_row() @endphp
                                <div class="button-item mx-auto mb-4">
                                    <a href="@php the_sub_field('link') @endphp"><img class="w-200" src="@php the_sub_field('image') @endphp" alt=""></a>
                                </div>
                            @endwhile
                        @endif
                    </div>
                </div>
                <a class="button inline-block white-bg-orange py-2 px-16 text-white text-center uppercase" href="@php the_sub_field('button_link') @endphp">@php the_sub_field('button_text') @endphp</a>
            </div>
        </div>

    @elseif (get_row_layout() === 'contact_form')

        <div class="bg-lightgrey py-16 mb-16">
            <div class="container">
                <div class="flex flex-row justify-center mb-12 roboto-light text-2xl text-center leading-snug">
                    If you're not ready for a face-to-face just yet, you can always ask us a question.
                </div>
            </div>
            <div class="flex flex-col bg-white w-full lg:w-3/4 justify-center mx-auto p-4 md:p-20 md:pt-12"
                 style="box-shadow:0 2px 4px 0 rgba(0,0,0,0.10)">
                <form method="POST" action="https://cordinerwealth.activehosted.com/proc.php" id="_form_1_" class="_form _form_1 _inline-form" novalidate>
                    <input type="hidden" name="u" value="1" />
                    <input type="hidden" name="f" value="1" />
                    <input type="hidden" name="s" />
                    <input type="hidden" name="c" value="0" />
                    <input type="hidden" name="m" value="0" />
                    <input type="hidden" name="act" value="sub" />
                    <input type="hidden" name="v" value="2" />
                    <div class="_form-content">
                        <div class="mb-4">
                            <label class="block text-grey text-sm montserrat-light mb-2" for="firstname">
                                First name*
                            </label>
                            <input
                                class="bg-gray-300 appearance-none w-full p-3 text-grey rounded-sm text-sm montserrat-light leading-tight border border-white"
                                name="firstname" placeholder="Type your first name" id="firstname" type="text" required>
                        </div>
                        <div class="mb-4">
                            <label class="block text-grey text-sm montserrat-light mb-2" for="lastname">
                                Last name*
                            </label>
                            <input
                                class="bg-gray-300 appearance-none w-full p-3 text-grey rounded-sm text-sm montserrat-light leading-tight border border-white"
                                name="lastname" placeholder="Type your last name" id="lastname" type="text" required>
                        </div>
                        <div class="mb-4">
                            <label class="block text-grey text-sm montserrat-light mb-2" for="email">
                                Email*
                            </label>
                            <input
                                class="bg-gray-300 appearance-none w-full p-3 text-grey rounded-sm text-sm montserrat-light leading-tight border border-white"
                                name="email" placeholder="Type your email" id="email" type="text" required>
                        </div>
                        <div class="mb-4">
                            <label class="block text-grey text-sm montserrat-light mb-2" for="phone">
                                Phone*
                            </label>
                            <input
                                class="bg-gray-300 appearance-none w-full p-3 text-grey rounded-sm text-sm montserrat-light leading-tight border border-white"
                                name="phone" placeholder="Type your phone number" id="phone" type="text" required>
                        </div>
                        <div class="mb-4">
                            <label class="block text-grey text-sm montserrat-light mb-2" for="message">
                                Your Message*
                            </label>
                            <textarea
                                class="bg-gray-300 w-full text-grey rounded-sm montserrat-light text-sm border border-white h-32"
                                name="field[2]" placeholder="" required></textarea>
                        </div>
                        <div class="mb-4">
                            <div class="_form_element _x23802064 _full_width ">
                                <div class="g-recaptcha" data-sitekey="6LcwIw8TAAAAACP1ysM08EhCgzd6q5JAOUR1a0Go"></div>
                            </div>
                        </div>
{{--                        <div class="mb-4">--}}
{{--                            <label class="_form-label"></label>--}}
{{--                            <input type="hidden" name="field[3][]" value="~|">--}}
{{--                            <input id="field_3I agree for Cordiner Wealth to use my data above to contact me in line with their privacy policy." type="checkbox" name="field[3][]" value="true" required>--}}
{{--                            <span>--}}
{{--                              <label for="field_3I agree for Cordiner Wealth to use my data above to contact me in line with their privacy policy." class="text-grey text-sm text-roboto text-bold mb-2 ml-2">--}}
{{--                                  I agree for Cordiner Wealth to use my data above to contact me in line with their <a class="text-red" href="{{ home_url() }}/privacy-policy/" target="_blank">Privacy Policy</a>--}}
{{--                              </label>--}}
{{--                            </span>--}}
{{--                        </div>--}}
{{--                        <div class="mb-4">--}}
{{--                            <label class="_form-label"></label>--}}
{{--                            <input type="hidden" name="field[2][]" value="~|">--}}
{{--                            <input id="field_2I agree for Cordiner Wealth to keep me informed with news, offers, products and promotions it believes would interest me by email" type="checkbox" name="field[2][]" value="true">--}}
{{--                            <span>--}}
{{--                              <label for="field_2I agree for Cordiner Wealth to keep me informed with news, offers, products and promotions it believes would interest me by email" class="text-grey text-sm roboto-light mb-2 ml-2">--}}
{{--                                I agree for Cordiner Wealth to keep me informed with news, offers, products and promotions it believes would interest me by email--}}
{{--                              </label>--}}
{{--                            </span>--}}
{{--                        </div>--}}
                        <div class="flex flex-row justify-center">
                            <input id="_form_1_submit" type="submit" class="_submit button white-bg-orange py-2 px-8">
                        </div>
                    </div>
                    <div class="_form-thank-you" style="display:none;">
                    </div>
                </form>
            </div>
        </div>

        <script type="text/javascript">
            window.cfields = {"2":"your_message"};
            window._show_thank_you = function(id, message, trackcmp_url) {
                var form = document.getElementById('_form_' + id + '_'), thank_you = form.querySelector('._form-thank-you');
                form.querySelector('._form-content').style.display = 'none';
                thank_you.innerHTML = message;
                thank_you.style.display = 'block';
                if (typeof(trackcmp_url) != 'undefined' && trackcmp_url) {
                    // Site tracking URL to use after inline form submission.
                    _load_script(trackcmp_url);
                }
                if (typeof window._form_callback !== 'undefined') window._form_callback(id);
            };
            window._show_error = function(id, message, html) {
                var form = document.getElementById('_form_' + id + '_'), err = document.createElement('div'), button = form.querySelector('button'), old_error = form.querySelector('._form_error');
                if (old_error) old_error.parentNode.removeChild(old_error);
                err.innerHTML = message;
                err.className = '_error-inner _form_error _no_arrow';
                var wrapper = document.createElement('div');
                wrapper.className = '_form-inner';
                wrapper.appendChild(err);
                button.parentNode.insertBefore(wrapper, button);
                document.querySelector('[id^="_form"][id$="_submit"]').disabled = false;
                if (html) {
                    var div = document.createElement('div');
                    div.className = '_error-html';
                    div.innerHTML = html;
                    err.appendChild(div);
                }
            };
            window._load_script = function(url, callback) {
                var head = document.querySelector('head'), script = document.createElement('script'), r = false;
                script.type = 'text/javascript';
                script.charset = 'utf-8';
                script.src = url;
                if (callback) {
                    script.onload = script.onreadystatechange = function() {
                        if (!r && (!this.readyState || this.readyState == 'complete')) {
                            r = true;
                            callback();
                        }
                    };
                }
                head.appendChild(script);
            };
            (function() {
                if (window.location.search.search("excludeform") !== -1) return false;
                var getCookie = function(name) {
                    var match = document.cookie.match(new RegExp('(^|; )' + name + '=([^;]+)'));
                    return match ? match[2] : null;
                }
                var setCookie = function(name, value) {
                    var now = new Date();
                    var time = now.getTime();
                    var expireTime = time + 1000 * 60 * 60 * 24 * 365;
                    now.setTime(expireTime);
                    document.cookie = name + '=' + value + '; expires=' + now + ';path=/';
                }
                var addEvent = function(element, event, func) {
                    if (element.addEventListener) {
                        element.addEventListener(event, func);
                    } else {
                        var oldFunc = element['on' + event];
                        element['on' + event] = function() {
                            oldFunc.apply(this, arguments);
                            func.apply(this, arguments);
                        };
                    }
                }
                var _removed = false;
                var form_to_submit = document.getElementById('_form_1_');
                var allInputs = form_to_submit.querySelectorAll('input, select, textarea'), tooltips = [], submitted = false;

                var getUrlParam = function(name) {
                    var regexStr = '[\?&]' + name + '=([^&#]*)';
                    var results = new RegExp(regexStr, 'i').exec(window.location.href);
                    return results != undefined ? decodeURIComponent(results[1]) : false;
                };

                for (var i = 0; i < allInputs.length; i++) {
                    var regexStr = "field\\[(\\d+)\\]";
                    var results = new RegExp(regexStr).exec(allInputs[i].name);
                    if (results != undefined) {
                        allInputs[i].dataset.name = window.cfields[results[1]];
                    } else {
                        allInputs[i].dataset.name = allInputs[i].name;
                    }
                    var fieldVal = getUrlParam(allInputs[i].dataset.name);

                    if (fieldVal) {
                        if (allInputs[i].dataset.autofill === "false") {
                            continue;
                        }
                        if (allInputs[i].type == "radio" || allInputs[i].type == "checkbox") {
                            if (allInputs[i].value == fieldVal) {
                                allInputs[i].checked = true;
                            }
                        } else {
                            allInputs[i].value = fieldVal;
                        }
                    }
                }

                var remove_tooltips = function() {
                    for (var i = 0; i < tooltips.length; i++) {
                        tooltips[i].tip.parentNode.removeChild(tooltips[i].tip);
                    }
                    tooltips = [];
                };
                var remove_tooltip = function(elem) {
                    for (var i = 0; i < tooltips.length; i++) {
                        if (tooltips[i].elem === elem) {
                            tooltips[i].tip.parentNode.removeChild(tooltips[i].tip);
                            tooltips.splice(i, 1);
                            return;
                        }
                    }
                };
                var create_tooltip = function(elem, text) {
                    var tooltip = document.createElement('div'), arrow = document.createElement('div'), inner = document.createElement('div'), new_tooltip = {};
                    if (elem.type != 'radio' && elem.type != 'checkbox') {
                        tooltip.className = '_error';
                        arrow.className = '_error-arrow';
                        inner.className = '_error-inner';
                        inner.innerHTML = text;
                        tooltip.appendChild(arrow);
                        tooltip.appendChild(inner);
                        elem.parentNode.appendChild(tooltip);
                    } else {
                        tooltip.className = '_error-inner _no_arrow';
                        tooltip.innerHTML = text;
                        elem.parentNode.insertBefore(tooltip, elem);
                        new_tooltip.no_arrow = true;
                    }
                    new_tooltip.tip = tooltip;
                    new_tooltip.elem = elem;
                    tooltips.push(new_tooltip);
                    return new_tooltip;
                };
                var resize_tooltip = function(tooltip) {
                    var rect = tooltip.elem.getBoundingClientRect();
                    var doc = document.documentElement, scrollPosition = rect.top - ((window.pageYOffset || doc.scrollTop)  - (doc.clientTop || 0));
                    if (scrollPosition < 40) {
                        tooltip.tip.className = tooltip.tip.className.replace(/ ?(_above|_below) ?/g, '') + ' _below';
                    } else {
                        tooltip.tip.className = tooltip.tip.className.replace(/ ?(_above|_below) ?/g, '') + ' _above';
                    }
                };
                var resize_tooltips = function() {
                    if (_removed) return;
                    for (var i = 0; i < tooltips.length; i++) {
                        if (!tooltips[i].no_arrow) resize_tooltip(tooltips[i]);
                    }
                };
                var validate_field = function(elem, remove) {
                    var tooltip = null, value = elem.value, no_error = true;
                    remove ? remove_tooltip(elem) : false;
                    if (elem.type != 'checkbox') elem.className = elem.className.replace(/ ?_has_error ?/g, '');
                    if (elem.getAttribute('required') !== null) {
                        if (elem.type == 'radio' || (elem.type == 'checkbox' && /any/.test(elem.className))) {
                            var elems = form_to_submit.elements[elem.name];
                            if (!(elems instanceof NodeList || elems instanceof HTMLCollection) || elems.length <= 1) {
                                no_error = elem.checked;
                            }
                            else {
                                no_error = false;
                                for (var i = 0; i < elems.length; i++) {
                                    if (elems[i].checked) no_error = true;
                                }
                            }
                            if (!no_error) {
                                tooltip = create_tooltip(elem, "Please select an option.");
                            }
                        } else if (elem.type =='checkbox') {
                            var elems = form_to_submit.elements[elem.name], found = false, err = [];
                            no_error = true;
                            for (var i = 0; i < elems.length; i++) {
                                if (elems[i].getAttribute('required') === null) continue;
                                if (!found && elems[i] !== elem) return true;
                                found = true;
                                elems[i].className = elems[i].className.replace(/ ?_has_error ?/g, '');
                                if (!elems[i].checked) {
                                    no_error = false;
                                    elems[i].className = elems[i].className + ' _has_error';
                                    err.push("Checking %s is required".replace("%s", elems[i].value));
                                }
                            }
                            if (!no_error) {
                                tooltip = create_tooltip(elem, err.join('<br/>'));
                            }
                        } else if (elem.tagName == 'SELECT') {
                            var selected = true;
                            if (elem.multiple) {
                                selected = false;
                                for (var i = 0; i < elem.options.length; i++) {
                                    if (elem.options[i].selected) {
                                        selected = true;
                                        break;
                                    }
                                }
                            } else {
                                for (var i = 0; i < elem.options.length; i++) {
                                    if (elem.options[i].selected && !elem.options[i].value) {
                                        selected = false;
                                    }
                                }
                            }
                            if (!selected) {
                                elem.className = elem.className + ' _has_error';
                                no_error = false;
                                tooltip = create_tooltip(elem, "Please select an option.");
                            }
                        } else if (value === undefined || value === null || value === '') {
                            elem.className = elem.className + ' _has_error';
                            no_error = false;
                            tooltip = create_tooltip(elem, "This field is required.");
                        }
                    }
                    if (no_error && elem.name == 'email') {
                        if (!value.match(/^[\+_a-z0-9-'&=]+(\.[\+_a-z0-9-']+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i)) {
                            elem.className = elem.className + ' _has_error';
                            no_error = false;
                            tooltip = create_tooltip(elem, "Enter a valid email address.");
                        }
                    }
                    if (no_error && /date_field/.test(elem.className)) {
                        if (!value.match(/^\d\d\d\d-\d\d-\d\d$/)) {
                            elem.className = elem.className + ' _has_error';
                            no_error = false;
                            tooltip = create_tooltip(elem, "Enter a valid date.");
                        }
                    }
                    tooltip ? resize_tooltip(tooltip) : false;
                    return no_error;
                };
                var needs_validate = function(el) {
                    return el.name == 'email' || el.getAttribute('required') !== null;
                };
                var validate_form = function(e) {
                    var err = form_to_submit.querySelector('._form_error'), no_error = true;
                    if (!submitted) {
                        submitted = true;
                        for (var i = 0, len = allInputs.length; i < len; i++) {
                            var input = allInputs[i];
                            if (needs_validate(input)) {
                                if (input.type == 'text') {
                                    addEvent(input, 'blur', function() {
                                        this.value = this.value.trim();
                                        validate_field(this, true);
                                    });
                                    addEvent(input, 'input', function() {
                                        validate_field(this, true);
                                    });
                                } else if (input.type == 'radio' || input.type == 'checkbox') {
                                    (function(el) {
                                        var radios = form_to_submit.elements[el.name];
                                        for (var i = 0; i < radios.length; i++) {
                                            addEvent(radios[i], 'click', function() {
                                                validate_field(el, true);
                                            });
                                        }
                                    })(input);
                                } else if (input.tagName == 'SELECT') {
                                    addEvent(input, 'change', function() {
                                        validate_field(this, true);
                                    });
                                } else if (input.type == 'textarea'){
                                    addEvent(input, 'input', function() {
                                        validate_field(this, true);
                                    });
                                }
                            }
                        }
                    }
                    remove_tooltips();
                    for (var i = 0, len = allInputs.length; i < len; i++) {
                        var elem = allInputs[i];
                        if (needs_validate(elem)) {
                            if (elem.tagName.toLowerCase() !== "select") {
                                elem.value = elem.value.trim();
                            }
                            validate_field(elem) ? true : no_error = false;
                        }
                    }
                    if (!no_error && e) {
                        e.preventDefault();
                    }
                    resize_tooltips();
                    return no_error;
                };
                addEvent(window, 'resize', resize_tooltips);
                addEvent(window, 'scroll', resize_tooltips);
                window['recaptcha_callback'] = function() {
                    // Get all recaptchas in the DOM (there may be more than one form on the page).
                    var recaptchas = document.getElementsByClassName("g-recaptcha");
                    for (var i in recaptchas) {
                        // Set the recaptcha element ID, so the recaptcha can be applied to each element.
                        var recaptcha_id = "recaptcha_" + i;
                        recaptchas[i].id = recaptcha_id;
                        var el = document.getElementById(recaptcha_id);
                        if (el != null) {
                            var sitekey = el.getAttribute("data-sitekey");
                            var stoken = el.getAttribute("data-stoken");
                            grecaptcha.render(recaptcha_id, {"sitekey":sitekey,"stoken":stoken});
                        }
                    }
                };  _load_script("//www.google.com/recaptcha/api.js?onload=recaptcha_callback&render=explicit");
                window._old_serialize = null;
                if (typeof serialize !== 'undefined') window._old_serialize = window.serialize;
                _load_script("//d3rxaij56vjege.cloudfront.net/form-serialize/0.3/serialize.min.js", function() {
                    window._form_serialize = window.serialize;
                    if (window._old_serialize) window.serialize = window._old_serialize;
                });
                var form_submit = function(e) {
                    e.preventDefault();
                    if (validate_form()) {
                        // use this trick to get the submit button & disable it using plain javascript
                        document.querySelector('#_form_1_submit').disabled = true;
                        var serialized = _form_serialize(document.getElementById('_form_1_'));
                        var err = form_to_submit.querySelector('._form_error');
                        err ? err.parentNode.removeChild(err) : false;
                        _load_script('https://cordinerwealth.activehosted.com/proc.php?' + serialized + '&jsonp=true');
                    }
                    return false;
                };
                addEvent(form_to_submit, 'submit', form_submit);
            })();

        </script>

    @elseif (get_row_layout() === 'google_map')

        <div class="bg-lightgrey">
            <div class="googlemap">
                @php the_sub_field('embed_code') @endphp
            </div>
        </div>

    @elseif (get_row_layout() === 'content_list')

        <div class="bg-lightgrey py-16 mt-32 my-16">
            <div class="container">
                <div class="mx-auto w-2/3 md:w-1/2 -mt-32 py-8 bg-lightgrey">
                    <h2 class="merriweather-light text-orange text-4xl leading-tight pr-4 mb-4 text-center" data-aos="fade">@php the_sub_field('title') @endphp</h2>
                </div>
                <div class="flex flex-col md:flex-row">
                    <div class="w-full md:w-1/2">
                        <ul>
                            @if (have_rows('content_list_left'))
                                @php $nl = 1 @endphp
                                @while (have_rows('content_list_left')) @php the_row() @endphp
                                <li class="flex flex-col lg:flex-row mb-6" data-aos="fade-left"
                                    data-aos-delay="{{ $nl * 50 }}">
                                    <div class="flex flex-row justify-between w-full">
                                        <div class="w-1/6">
                                            <div
                                                class="bg-orange rounded-full mb-4 lg:mb-0 w-f40 h-f40 lg:w-f60 lg:h-f60 text-center flex flex-col text-white justify-center md:mr-4">@php echo $nl @endphp</div>
                                        </div>
                                        <div class="w-5/6 md:mr-8">
                                            <div class="montserrat-light mb-2">@php the_sub_field('title') @endphp</div>
                                            <div class="montserrat-light">@php the_sub_field('text') @endphp</div>
                                        </div>
                                    </div>
                                </li>
                                @php $nl++ @endphp
                                @endwhile
                            @endif
                        </ul>
                    </div>
                    <div class="w-full md:w-1/2">
                        <ul>
                            @if (have_rows('content_list_right'))
                                @php $nr = $nl @endphp
                                @while (have_rows('content_list_right')) @php the_row() @endphp
                                <li class="flex flex-col lg:flex-row mb-6" data-aos="fade-left"
                                    data-aos-delay="{{ $nr * 50 }}">
                                    <div class="flex flex-row justify-between w-full">
                                        <div class="w-1/6">
                                            <div
                                                class="bg-orange rounded-full mb-4 lg:mb-0 w-f40 h-f40 lg:w-f60 lg:h-f60 text-center flex flex-col text-white justify-center md:mr-4">@php echo $nr @endphp</div>
                                        </div>
                                        <div class="w-5/6">
                                            <div class="montserrat-light mb-2">@php the_sub_field('title') @endphp</div>
                                            <div class="montserrat-light">@php the_sub_field('text') @endphp</div>
                                        </div>
                                    </div>
                                </li>
                                @php $nr++ @endphp
                                @endwhile
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="flex flex-row justify-center mt-12">
                    <img class="" data-aos="fade-down" src="@php the_sub_field('image') @endphp">
                </div>
            </div>
        </div>

    @elseif (get_row_layout() === 'content_list_rtbp')

        <div class="bg-lightgrey py-8 mt-32 my-4">
            <div class="container">
                <div class="mx-auto w-2/3 md:w-1/2 -mt-32 py-8 bg-lightgrey">
                    <h2 class="merriweather-light text-orange text-4xl leading-tight pr-4 mb-4 text-center" data-aos="fade">@php the_sub_field('title') @endphp</h2>
                </div>
                <div class="flex flex-col md:flex-row">
                    <div class="w-full md:w-1/2 mb-6 md:mb-0">
                        <ul>
                            @if (have_rows('content_list_left'))
                                @php $nl = 1 @endphp
                                @while (have_rows('content_list_left')) @php the_row() @endphp
                                <li class="flex flex-col lg:flex-row mb-6 list-item">
                                    <div class="flex flex-row justify-between w-full">
                                        <div class="w-1/6">
                                            <div
                                                class="bg-orange rounded-full mb-4 lg:mb-0 w-f40 h-f40 lg:w-f60 lg:h-f60 text-center flex flex-col text-white justify-center md:mr-4">@php echo $nl @endphp</div>
                                        </div>
                                        <div class="w-5/6 md:mr-8">
                                            <div class="montserrat-light mb-2">@php the_sub_field('title') @endphp</div>
                                            <div class="montserrat-light">@php the_sub_field('text') @endphp</div>
                                        </div>
                                    </div>
                                </li>
                                @php $nl++ @endphp
                                @endwhile
                            @endif
                        </ul>
                    </div>
                    <div class="w-full md:w-1/2">
                        <ul>
                            @if (have_rows('content_list_right'))
                                @php $nr = $nl @endphp
                                @while (have_rows('content_list_right')) @php the_row() @endphp
                                <li class="flex flex-col lg:flex-row mb-6 list-item">
                                    <div class="flex flex-row justify-between w-full">
                                        <div class="w-1/6">
                                            <div
                                                class="bg-orange rounded-full mb-4 lg:mb-0 w-f40 h-f40 lg:w-f60 lg:h-f60 text-center flex flex-col text-white justify-center md:mr-4">@php echo $nr @endphp</div>
                                        </div>
                                        <div class="w-5/6">
                                            <div class="montserrat-light mb-2">@php the_sub_field('title') @endphp</div>
                                            <div class="montserrat-light">@php the_sub_field('text') @endphp</div>
                                        </div>
                                    </div>
                                </li>
                                @php $nr++ @endphp
                                @endwhile
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="flex flex-row justify-center">
                    <img class="" data-aos="fade-down" src="@php the_sub_field('image') @endphp">
                </div>
            </div>
        </div>

    @elseif (get_row_layout() === 'team_section')

        <div class="bg-lightgrey py-16">
            <div class="container">
                @php $query = new WP_Query(array('post_type' => 'team', 'posts_per_page' => '-1')) @endphp

                @if ($query->have_posts())
                    @php $i = 1 @endphp
                    <div class="flex flex-col md:flex-row flex-wrap ml-1">
                        @while ($query->have_posts()) @php $query->the_post() @endphp
                        <div class="w-full md:w-1/2 lg:w-1/4 text-image px-2 mb-4">
                            <a href="{{ get_permalink() }}">
                            @if (has_post_thumbnail())
                                <div class="relative" style="background:url('@php echo the_post_thumbnail_url() @endphp') no-repeat center center; width:100%; height:300px; overflow:hidden; background-size:cover"></div>
                            @endif
                            </a>
                            <div class="bg-white leading-normal p-4 pt-0 pb-10 border border-lightgrey news-item-text">
                                <h2 class="merriweather-regular text-orange text-lg leading-tight mb-4"><a href="{{ get_permalink() }}">{{ the_title() }}</a></h2>
                                <div class="montserrat-regular">
                                    @php the_excerpt() @endphp
                                </div>
                            </div>
                        </div>
                        @endwhile
                    </div>
                @endif
            </div>

            @php wp_reset_postdata() @endphp

        </div>

    @elseif (get_row_layout() === 'infographics')

        <div class="py-16 my-16 bg-lightgrey md:text-left">
            <div class="container">
                <div class="flex flex-col lg:flex-row">
                    <div class="w-full lg:w-1/2 mb-4 lg:mb-0">
                        <div class="w-445 h-445 mx-auto relative">
                            @for($i = 0; $i < 6; $i++)
                                <a class="absolute info-{{ $i }}" href="#"></a>
                                <img id="info-{{ $i }}" class="ignore-smush ig @if ($i !== 0) hidden @endif"
                                     src="@asset('images/infographic-'.$i.'.png')">
                            @endfor
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2 mx-auto flex flex-col justify-start md:justify-center leading-snug">
                        @if (have_rows('graphics'))
                            @php $n = 0 @endphp
                            @while (have_rows('graphics')) @php the_row() @endphp
                                <div class="text-center it info-text-@php echo $n @endphp @if ($n === 0) block @else hidden @endif">
                                    <h2 class="merriweather-light text-orange text-4xl leading-tight mb-2" data-aos="fade-left">
                                        {{ the_sub_field('title') }}
                                    </h2>
                                    @if (get_sub_field('subtitle'))
                                        <h3 class="text-black text-lg font-bold leading-tight mb-2">{{ the_sub_field('subtitle') }}</h3>
                                    @endif
                                    <span data-aos="fade-left" data-aos-delay="300">{{ the_sub_field('text') }}</span>
                                    @if (get_sub_field('button_text'))
                                        <a class="button white-bg-orange py-2 px-16 text-white text-center uppercase" href="{{ the_sub_field('button_url') }}" @if (get_sub_field('external_url')) target="_blank" @endif>{{ the_sub_field('button_text') }}</a>
                                    @endif
                                </div>
                            @php $n++ @endphp
                            @endwhile
                        @endif
                    </div>
                </div>
            </div>
        </div>

    @elseif (get_row_layout() === 'news_section')

        <div class="bg-white pt-16">
            <div class="container">

                <div class="flex flex-col text-center mx-auto mb-8">
                    <h2 class="merriweather-light text-orange text-4xl leading-tight mb-6">@php the_sub_field('title') @endphp</h2>
                    <div class="montserrat-regular text-darkgrey w-full md:w-2/3 mx-auto">
                        @php the_sub_field('text') @endphp
                    </div>
                </div>

                <div class="flex flex-row align-center pb-16">
                    <a data-aos="fade-left"
                       class="w-full md:w-1/3 mx-auto montserrat-semibold text-black text-sm uppercase rounded py-3 px-4 border border-lightgrey cursor-pointer category-filter"
                       href="#">
                        Filter by topic
                        <img class="filter-arrow-down float-right" src="@asset('images/icon-filter-down.svg')">
                        <img class="filter-arrow-up hidden float-right" src="@asset('images/icon-filter-up.svg')">
                    </a>
                </div>

                <div class="w-full md:w-1/3 mx-auto bg-white filter-dropdown" style="display:none">
                    <ul>
                        <li class="show-all text-grey p-4 border border-2 border-t-0 border-r-0 border-l-0"><a href="#">Show all</a></li>
                        @php $categories = get_categories(array('orderby' => 'name')); @endphp
                        @php $count = count($categories); @endphp
                        @php $i = 1; @endphp
                        @foreach ($categories as $category)
                            @if (isset($_GET['c']))
                                <script>
                                    jQuery(document).ready(function(){
                                        @if ($_GET['c'] === $category->slug)
                                            var phpstring = "@php echo $category->slug @endphp";
                                            jQuery('.grid').isotope({ filter: '.'+phpstring });
                                        @endif
                                    });
                                </script>
                            @endif
                            <li
                                class="filter-item text-grey p-4 @if ($count !== $i) border border-2 border-t-0 border-r-0 border-l-0 @endif"
                                data-category="@php echo $category->slug @endphp"><a class="block"
                                     href="@php the_permalink() @endphp">@php echo $category->name @endphp</a>
                            </li>
                        @endforeach
                        @php $i++ @endphp
                    </ul>
                </div>

            </div>
        </div>

        <div class="bg-lightgrey py-16">
            <div class="container">
                <div class="grid">
                    @php $query = new WP_Query(array('post_type' => 'post', 'posts_per_page' => '-1')) @endphp

                    @if ($query->have_posts())
                        @php $i = 1 @endphp
                        @while ($query->have_posts()) @php $query->the_post() @endphp
                            @php $categories = get_the_category() @endphp
                            <div class="grid-item text-image @foreach($categories as $category){{ $category->slug }} @endforeach">
                                @if (has_post_thumbnail())
                                    <div class="relative" style="width:100%; height:200px; overflow:hidden">
                                        <a href="{{ get_permalink() }}">{{ the_post_thumbnail('full') }}</a>
                                    </div>
                                @endif
                                <div class="bg-white leading-normal p-4 pt-0 pb-10 border border-lightgrey news-item-text">
                                    @if (has_post_thumbnail())
                                        <img src="@php echo get_template_directory_uri() @endphp/assets/images/arrow-down.svg">
                                    @endif
                                    <h2 class="merriweather-regular text-orange text-lg leading-tight mb-4"><a href="{{ get_permalink() }}">{{ the_title() }}</a></h2>
                                    <div class="montserrat-regular">
                                        @php the_excerpt() @endphp
                                    </div>
                                </div>
                            </div>
                        @endwhile
                    @endif
                </div>

            </div>

            @php wp_reset_postdata() @endphp

        </div>

    @endif

    @endwhile
@endif
