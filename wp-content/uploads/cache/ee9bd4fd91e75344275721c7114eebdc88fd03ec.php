<?php if( have_rows('horizontal_panels') ): ?>
    <?php while ( have_rows('horizontal_panels') ) : the_row(); ?>

    <?php if(get_row_layout() === 'plan_blocks'): ?>

        <div class="py-4">
            <div class="container">
                <div class="flex flex-col md:flex-row lg:flex-row xl:flex-row mb-4">
                    <div class="w-full h-auto md:h-48 lg:h-64 xl:h-2005 overflow-hidden md:w-1/2 md:pr-4"
                         data-aos="fade-left">
                        <div class="w-full mr-4 mb-4">
                            <div class="bg-blue md:h-48 lg:h-64 xl:h-2005 px-8 py-7 relative pb-24">
                                <h1
                                    class="text-white font-trajan text-12 lg:text-175 mb-08 lg:mb-5"><?php the_sub_field('title') ?></h1>
                                <div
                                    class="text-white roboto-light text-sm mb-8 lg:text-base leading-normal"><?php the_sub_field('text') ?></div>
                                <a class="button red-bg-blue"
                                   href="<?php the_sub_field('button_link') ?>"><?php the_sub_field('button_text') ?></a>
                                <img
                                    class="absolute bottom-9.8 right-16 w-100 h-100 lg:w-160 lg:h-160 xl:w-250 xl:h-250"
                                    src="<?php the_sub_field('image') ?>"
                                    alt="Chess Pieces - Metis Financial Strategy">
                            </div>
                        </div>
                    </div>
                    <div class="w-full h-48 md:h-48 lg:h-64 xl:h-2005 overflow-hidden md:w-1/2">
                        <div class="flex flex-row -mx-2">
                            <div class="w-1/2 px-2" data-aos="fade-down" data-aos-delay="100">
                                <img src="<?php the_sub_field('block_top_middle') ?>" alt="">
                            </div>
                            <div class="w-1/2 pl-2" data-aos="fade-down" data-aos-delay="300">
                                <img src="<?php the_sub_field('block_top_right') ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row lg:flex-row xl:flex-row">
                    <div
                        class="w-full md:h-26 lg:h-363 xl:h-46 overflow-hidden md:w-1/2 lg:w-1/2 xl:w-1/2 md:pr-4 lg:pr-4 xl:pr-4">
                        <div class="flex flex-row -mx-2">
                            <div class="w-full md:w-1/2 lg:w-1/2 xl:w-1/2 px-2" data-aos="fade-right"
                                 data-aos-delay="200">
                                <img class="w-full md:w-auto lg:w-auto xl:w-auto"
                                     src="<?php the_sub_field('block_bottom_left_one') ?>" alt="">
                            </div>
                            <div class="w-full hidden md:block lg:block xl:block md:w-1/2 lg:w-1/2 xl:w-1/2 px-2"
                                 data-aos="fade-right">
                                <img src="<?php the_sub_field('block_bottom_left_two') ?>" alt="">
                            </div>
                        </div>
                    </div>
                    <div
                        class="hidden md:h-26 lg:h-363 xl:h-46 overflow-hidden md:block lg:block xl:block md:w-1/2 lg:w-1/2 xl:w-1/2">
                        <div class="flex -mx-2">
                            <div class="w-1/3 px-2" data-aos="fade-up">
                                <img src="<?php the_sub_field('block_bottom_right_one') ?>" alt="">
                            </div>
                            <div class="w-1/3 px-2" data-aos="fade-up" data-aos-delay="200">
                                <img src="<?php the_sub_field('block_bottom_right_two') ?>" alt="">
                            </div>
                            <div class="w-1/3 pl-2" data-aos="fade-up" data-aos-delay="400">
                                <img src="<?php the_sub_field('block_bottom_right_three') ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center my-5">
            <a href="" class="w-8 mx-auto h-8 lg:w-12 lg:h-12 flex items-center justify-center bg-darkblue rounded-full"
               data-aos="zoom-in"><img
                    src="<?php echo e(\App\asset_path('images/caret-down.svg')); ?>" class="w-2 lg:w-4 h-auto" alt=""></a>
        </div>

    <?php elseif(get_row_layout() === 'awards'): ?>

        <div class="bg-white text-center pt-16 pb-8">
            <div class="container">
                <div class="flex flex-col mb-12">
                    <h2 class="font-trajan text-red text-175 pr-4 mb-4"
                        data-aos="fade"><?php the_sub_field('title') ?></h2>
                    <div class="roboto-light text-xl leading-normal" data-aos="fade-up"
                         data-aos-delay="200"><?php the_sub_field('text') ?></div>
                </div>
                <div class="flex flex-row justify-center">
                    <?php if(have_rows('awards')): ?>
                        <div class="flex flex-col lg:flex-row">
                            <?php while(have_rows('awards')): ?> <?php the_row() ?>
                            <?php if($i % 3 == 0): ?></div>
                        <div class="flex flex-col justify-center"><?php endif; ?>
                            <img class="mb-4 mr-4 h-16" data-aos="fade-left" data-aos-delay="<?php echo e($i * 100); ?>"
                                 src="<?php the_sub_field('award') ?>">
                            <?php $i++ ?>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

    <?php elseif(get_row_layout() === 'centered_image_video_under'): ?>

        <div class="bg-lightgrey text-center py-8">
            <div class="container">
                <div class="flex flex-col justify-content px-4 lg:px-56 mb-4">
                    <h2 class="font-trajan text-red text-175 pr-4 mb-4"
                        data-aos="fade"><?php the_sub_field('title') ?></h2>
                    <div class="roboto-light text-xl mb-4 leading-snug" data-aos="fade-left"
                         data-aos-delay="200"><?php the_sub_field('text') ?></div>
                </div>
                <div class="">

                    <?php if(get_sub_field('image_video')): ?>
                        <div class="w-full md:w-2/3">
                            <?php if(get_sub_field('youtube_vimeo')): ?>
                                <?php $video_url = get_sub_field('vimeo_url') ?>
                                <?php $video_url = explode('/', $video_url) ?>
                                <div class="relative" style="min-height: 300px; max-height:470px;">
                                    <?php if(get_sub_field('display_message')): ?>
                                        <div class="video-warning-container">
                                            <div class="video-warning red-bg-white">
                                                <?php the_sub_field('message') ?>
                                                <div class="video-warning-close">X</div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <iframe
                                        src="https://player.vimeo.com/video/<?php echo $video_url[3] ?>?color=a3e5ff&byline=0&portrait=0"
                                        style="position:absolute;top:0;left:0;width:100%;height:100%;"
                                        frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                                    <script src="https://player.vimeo.com/api/player.js"></script>
                                </div>
                            <?php else: ?>
                                <?php $video_url = get_sub_field('youtube_url') ?>
                                <?php $video_url = explode('=', $video_url) ?>
                                <div class="relative" style="min-height: 300px; max-height:470px;">
                                    <?php if(get_sub_field('display_message')): ?>
                                        <div class="video-warning-container">
                                            <div class="video-warning red-bg-white">
                                                <?php the_sub_field('message') ?>
                                                <div class="video-warning-close">X</div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <iframe style="position:absolute;top:0;left:0;width:100%;height:100%;"
                                        src="https://www.youtube.com/embed/<?php echo $video_url[1] ?>"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php else: ?>
                        <?php if(get_sub_field('add_image')): ?>
                            <img src="<?php the_sub_field('image') ?>" data-aos="fade-up">
                        <?php endif; ?>
                    <?php endif; ?>

                </div>
            </div>
        </div>

    <?php elseif(get_row_layout() === 'centered_ctas'): ?>

        <div class="bg-lightgrey text-center py-16 pb-40">
            <div class="container">
                <div class="flex flex-col mb-12">
                    <h2 class="font-trajan text-red text-175 pr-4 mb-4"
                        data-aos="fade"><?php the_sub_field('title') ?></h2>
                    <div class="roboto-light text-xl" data-aos="fade-left"><?php the_sub_field('text') ?></div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="flex flex-col lg:flex-row -mt-32">
                <?php if(have_rows('ctas')): ?>
                    <?php $i = 1 ?>
                    <?php while(have_rows('ctas')): ?> <?php the_row() ?>
                    <div class="w-full lg:w-1/3 text-center mb-4 relative <?php if($i !== 3): ?> md:mr-4 <?php endif; ?>"
                         data-aos="fade-up"
                         data-aos-delay="<?php echo e($i * 100); ?>">
                        <a class="flex mx-auto w-64 h-64 overflow-hidden" href="<?php the_sub_field('link_url') ?>">
                            <img class="" src="<?php the_sub_field('image') ?>">
                            <div
                                class="button red-bg-red text-white text-center uppercase w-288 absolute bottom-1 left-50%"
                                style="margin-left:-144px;"><?php the_sub_field('link_text') ?></div>
                        </a>
                    </div>
                    <?php $i++ ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>

    <?php elseif(get_row_layout() === 'content_white'): ?>

        <div class="bg-white py-16">
            <div class="container">
                <div class="flex flex-col md:flex-row">
                    <div class="w-full md:w-5/12 mb-4">
                        <div class="flex flex-col justify-between h-full">
                            <h2 class="font-trajan text-red text-175 pr-4 mb-auto mr-4"
                                data-aos="fade"><?php the_sub_field('title') ?></h2>
                            <?php if(get_sub_field('image')): ?>
                                <img class="w-2/3 mt-auto" src="<?php the_sub_field('image') ?>">
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="w-full md:w-7/12">
                        <div class="roboto-light text-grey text-md leading-snug md:text-base" data-aos="fade-left"
                             data-aos-delay="200">
                            <?php the_sub_field('text') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php elseif(get_row_layout() === 'addresses'): ?>

        <div class="bg-blue py-12">
            <div class="container">
                <div class="flex flex-col md:flex-row items-center md:items-start justify-center">
                    <?php if(have_rows('addresses')): ?>
                        <?php $i = 1 ?>
                        <?php while(have_rows('addresses')): ?> <?php the_row() ?>
                        <div
                            class="w-2/3 lg:w-1/3 text-white text-base roboto-light text-center md:px-4 <?php if($i !== 3): ?> mb-4 <?php endif; ?>">
                            <?php the_sub_field('address') ?>
                        </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>

    <?php elseif(get_row_layout() === 'contact_form'): ?>

        <div class="bg-lightgrey py-16 mb-16">
            <div class="container">
                <div class="flex flex-row justify-center mb-12 roboto-light text-2xl text-center leading-snug">
                    If you're not ready for a face-to-face just yet, you can always ask us a question.
                </div>
            </div>
            <div class="flex flex-col bg-white w-full lg:w-3/4 justify-center mx-auto p-4 md:p-20 md:pt-12"
                 style="box-shadow:0 2px 4px 0 rgba(0,0,0,0.10)">
                <form method="POST" action="https://metisireland.activehosted.com/proc.php" id="_form_3_"
                      class="_form _form_3 _inline-form  _dark" novalidate>
                    <input type="hidden" name="u" value="3"/>
                    <input type="hidden" name="f" value="3"/>
                    <input type="hidden" name="s"/>
                    <input type="hidden" name="c" value="0"/>
                    <input type="hidden" name="m" value="0"/>
                    <input type="hidden" name="act" value="sub"/>
                    <input type="hidden" name="v" value="2"/>
                    <div class="_form-content">
                        <div class="mb-4">
                            <label class="block text-grey text-sm roboto-light mb-2" for="firstname">
                                First name:
                            </label>
                            <input
                                class="bg-gray-300 appearance-none w-full p-3 text-grey rounded-sm text-sm roboto-light leading-tight border border-white"
                                name="firstname" placeholder="Type your first name" id="firstname" type="text" required>
                        </div>
                        <div class="mb-4">
                            <label class="block text-grey text-sm roboto-light mb-2" for="lastname">
                                Last name:
                            </label>
                            <input
                                class="bg-gray-300 appearance-none w-full p-3 text-grey rounded-sm text-sm roboto-light leading-tight border border-white"
                                name="lastname" placeholder="Type your last name" id="lastname" type="text" required>
                        </div>
                        <div class="mb-4">
                            <label class="block text-grey text-sm roboto-light mb-2" for="email">
                                Email address:
                            </label>
                            <input
                                class="bg-gray-300 appearance-none w-full p-3 text-grey rounded-sm text-sm roboto-light leading-tight border border-white"
                                name="email" placeholder="Type your email" id="email" type="text" required>
                        </div>
                        <div class="mb-4">
                            <label class="block text-grey text-sm roboto-light mb-2" for="phone">
                                Phone:
                            </label>
                            <input
                                class="bg-gray-300 appearance-none w-full p-3 text-grey rounded-sm text-sm roboto-light leading-tight border border-white"
                                name="phone" placeholder="Type your phone number" id="phone" type="text">
                        </div>
                        <div class="mb-4">
                            <label class="block text-grey text-sm roboto-light mb-2" for="message">
                                How can we help?
                            </label>
                            <textarea
                                class="bg-gray-300 w-full text-grey rounded-sm roboto-light text-sm border border-white h-32"
                                name="field[1]" placeholder=""></textarea>
                        </div>
                        <div class="mb-4">
                            <div class="_form_element _x23802064 _full_width ">
                                <div class="g-recaptcha" data-sitekey="6LcwIw8TAAAAACP1ysM08EhCgzd6q5JAOUR1a0Go"></div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="_form-label"></label>
                            <input type="hidden" name="field[3][]" value="~|">
                            <input id="field_3I agree for Metis Ireland to use my data above to contact me in line with their privacy policy." type="checkbox" name="field[3][]" value="true" required>
                            <span>
                              <label for="field_3I agree for Metis Ireland to use my data above to contact me in line with their privacy policy." class="text-grey text-sm text-roboto text-bold mb-2 ml-2">
                                  I agree for Metis Ireland to use my data above to contact me in line with their <a class="text-red" href="<?php echo e(home_url()); ?>/privacy-policy/" target="_blank">Privacy Policy</a>
                              </label>
                            </span>
                        </div>
                        <div class="mb-4">
                            <label class="_form-label"></label>
                            <input type="hidden" name="field[2][]" value="~|">
                            <input id="field_2I agree for Metis Ireland to keep me informed with news, offers, products and promotions it believes would interest me by email" type="checkbox" name="field[2][]" value="true">
                            <span>
                              <label for="field_2I agree for Metis Ireland to keep me informed with news, offers, products and promotions it believes would interest me by email" class="text-grey text-sm roboto-light mb-2 ml-2">
                                I agree for Metis Ireland to keep me informed with news, offers, products and promotions it believes would interest me by email
                              </label>
                            </span>
                        </div>
                        <div class="flex flex-row justify-center">
                            <input id="_form_3_submit" type="submit" class="button red-bg-white">
                        </div>
                    </div>
                    <div class="_form-thank-you" style="display:none;">
                    </div>
                </form>
            </div>
        </div>

        <script type="text/javascript">
            window.cfields = {"1":"how_can_we_help","3":"confirmation","2":"subscribe"};
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
                var form_to_submit = document.getElementById('_form_3_');
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
                        tooltip.className = '_error-inner _no_arrow roboto-light mb-2 text-red text-sm';
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
                                    //err.push("Checking %s is required".replace("%s", elems[i].value));
                                    err.push("Please confirm by checking the box.".replace("%s", elems[i].value));
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
                    // if (no_error && elem.name == 'email') {
                    //     if (!value.match(/^[\+_a-z0-9-'&=]+(\.[\+_a-z0-9-']+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i)) {
                    //         elem.className = elem.className + ' _has_error';
                    //         no_error = false;
                    //         tooltip = create_tooltip(elem, "Enter a valid email address.");
                    //     }
                    // }
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
                };
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
                        document.querySelector('#_form_3_submit').disabled = true;
                        var serialized = _form_serialize(document.getElementById('_form_3_'));
                        var err = form_to_submit.querySelector('._form_error');
                        err ? err.parentNode.removeChild(err) : false;
                        _load_script('https://metisireland.activehosted.com/proc.php?' + serialized + '&jsonp=true');
                    }
                    return false;
                };
                addEvent(form_to_submit, 'submit', form_submit);
            })();

        </script>

    <?php elseif(get_row_layout() === 'centered_cta'): ?>

        <div class="text-center my-16 w-2/3 mx-auto">
            <h2 class="font-trajan text-red mb-4"><?php the_sub_field('title') ?></h2>
            <div class="roboto-light text-xl text-grey mb-8"><?php the_sub_field('text') ?></div>
            <?php if(get_sub_field('button_text')): ?>
                <a class="button blue-bg-white"
                   href="<?php the_sub_field('button_link') ?>"><?php the_sub_field('button_text') ?></a>
            <?php endif; ?>
        </div>

    <?php elseif(get_row_layout() === 'team_section'): ?>

        <div class="my-16">
            <div class="container">
                <div class="<?php if(is_front_page()): ?>  <?php endif; ?>">
                    <div class="flex flex-col md:flex-row justify-center">
                        <?php if(is_front_page()): ?>
                            <div class="swiper-container w-full">
                                <div class="swiper-wrapper">
                                    <?php endif; ?>
                                    <?php if(have_rows('columns')): ?>
                                        <?php $i = 1; ?>
                                        <?php while(have_rows('columns')): ?> <?php the_row() ?>
                                        <div data-aos="fade-down" data-aos-delay="<?php echo e($i * 100); ?>"
                                             class="<?php if(is_front_page()): ?> swiper-slide swiper-slide-home <?php else: ?> swiper-slide-team <?php endif; ?> overflow-hidden <?php if($i % 2 == 0): ?> mt-0 lg:mt-24 xl:mt-24 <?php else: ?> mt-8 lg:mt-0 xl:mt-0 <?php endif; ?> <?php if($i == 6): ?> mr-0 <?php else: ?> mr-2 md:mr-4 <?php endif; ?>">
                                            <?php if( have_rows('column') ): ?>
                                                <?php while( have_rows('column')): ?> <?php the_row() ?>
                                                <?php if(get_row_layout() === 'placeholder'): ?>
                                                    <img class="w-full h-auto mb-2 lg:mb-4 xl:mb-4"
                                                         src="<?php the_sub_field('placeholder_image') ?>">
                                                <?php elseif(get_row_layout() === 'person'): ?>
                                                    <?php $posts = get_sub_field('team_members') ?>
                                                    <?php if($posts): ?>
                                                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <div class="relative">
                                                                <?php if(!is_front_page()): ?> <a
                                                                    href="<?php echo e(home_url('/')); ?>/team/<?php echo $p->post_name ?>"> <?php endif; ?>
                                                                    <?php echo get_the_post_thumbnail($p->ID, 'full', array('class' => 'h-auto mb-2 lg:mb-4 xl:mb-4 w-full md:w-auto')) ?>
                                                                    <?php if(!is_front_page()): ?>
                                                                        <div
                                                                            class="w-full absolute bottom-0 left-0 bg-white p-2">
                                                                            <div
                                                                                class="roboto-light text-grey mb-1"><?php echo $p->post_title ?> <?php the_field('qualifications', $p->ID) ?></div>
                                                                            <div
                                                                                class="text-blue uppercase text-xs mb-4"><?php the_field('job_title', $p->ID) ?></div>
                                                                        </div>
                                                                    <?php endif; ?>
                                                                    <?php if(!is_front_page()): ?> </a> <?php endif; ?>
                                                            </div>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>
                                                <?php endif; ?>

                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                        </div>
                                        <?php $i++ ?>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                    <?php if(is_front_page()): ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

    <?php elseif(get_row_layout() === 'content_blue'): ?>

        <div class="bg-lightgrey py-16 <?php if(get_sub_field('add_ctas') === true): ?> pb-64 <?php endif; ?>">
            <div class="container">
                <div class="flex flex-col md:flex-row">
                    <div class="w-full md:w-5/12 mb-4">
                        <h2 class="font-trajan text-red text-175 pr-4"
                            data-aos="fade"><?php the_sub_field('title') ?></h2>
                    </div>
                    <div class="w-full md:w-7/12">
                        <div class="roboto-light text-md leading-snug md:text-base" data-aos="fade-left"
                             data-aos-delay="200">
                            <?php the_sub_field('text') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if(get_sub_field('add_ctas') === true): ?>
            <div class="container">
                <div class="flex flex-col lg:flex-row -mt-40 items-center justify-end">
                    <?php if(have_rows('ctas')): ?>
                        <?php $i = 1 ?>
                        <?php while(have_rows('ctas')): ?> <?php the_row() ?>
                        <div
                            class="w-2/3 md:1/3 lg:h-56 text-center bg-red mb-4 overflow-hidden <?php if($i !== 4): ?> lg:mr-4 <?php endif; ?>"
                            data-aos="fade-up" data-aos-delay="<?php echo e($i * 100); ?>">
                            <a class="" href="<?php the_sub_field('button_link') ?>">
                                <img class="mx-auto lg:h-40" src="<?php the_sub_field('image') ?>">
                                <div class="button white-bg-red text-center uppercase mx-4 mb-4 px-1 red-padding"
                                     data-aos="fade"
                                     data-aos-delay="200"><?php the_sub_field('button_text') ?></div>
                            </a>
                        </div>
                        <?php $i++ ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>

    <?php elseif(get_row_layout() === 'content_list'): ?>

        <div class="bg-lightgrey py-16">
            <div class="container">
                <div class="mx-auto w-2/3 md:w-1/2 -mt-32 py-8 mb-8 bg-lightgrey">
                    <h2 class="font-trajan text-red text-center" data-aos="fade">Our promise to you</h2>
                </div>
                <div class="flex flex-col items-center md:flex-row">
                    <div class="w-full md:w-1/2">
                        <ul>
                            <?php if(have_rows('content_list_left')): ?>
                                <?php $nl = 1 ?>
                                <?php while(have_rows('content_list_left')): ?> <?php the_row() ?>
                                <li class="flex flex-col lg:flex-row mb-4" data-aos="fade-left"
                                    data-aos-delay="<?php echo e($nl * 50); ?>">
                                    <div class="flex flex-row justify-between w-full">
                                        <div class="w-1/6">
                                            <div
                                                class="bg-blue rounded-full mb-4 lg:mb-0 w-f40 h-f40 lg:w-f60 lg:h-f60 text-center flex flex-col text-white justify-center md:mr-4"><?php echo $nl ?></div>
                                        </div>
                                        <div class="w-5/6 md:mr-8">
                                            <div class="roboto-light"><?php the_sub_field('text') ?></div>
                                        </div>
                                    </div>
                                </li>
                                <?php $nl++ ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <div class="w-full md:w-1/2">
                        <ul>
                            <?php if(have_rows('content_list_right')): ?>
                                <?php $nr = $nl ?>
                                <?php while(have_rows('content_list_right')): ?> <?php the_row() ?>
                                <li class="flex flex-col lg:flex-row mb-4" data-aos="fade-left"
                                    data-aos-delay="<?php echo e($nr * 50); ?>">
                                    <div class="flex flex-row justify-between w-full">
                                        <div class="w-1/6">
                                            <div
                                                class="bg-blue rounded-full mb-4 lg:mb-0 w-f40 h-f40 lg:w-f60 lg:h-f60 text-center flex flex-col text-white justify-center md:mr-4"><?php echo $nr ?></div>
                                        </div>
                                        <div class="w-5/6">
                                            <div class="roboto-light"><?php the_sub_field('text') ?></div>
                                        </div>
                                    </div>
                                </li>
                                <?php $nr++ ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
                <div class="flex flex-row justify-center mt-12">
                    <img class="" data-aos="fade-down" src="<?php the_sub_field('image') ?>">
                </div>
            </div>
        </div>

    <?php elseif(get_row_layout() === 'text_center_cta'): ?>

        <div class="text-center my-16 w-2/3 mx-auto">
            <h2 class="font-trajan text-red mb-4" data-aos="fade"><?php the_sub_field('title') ?></h2>
            <div class="roboto-light text-base text-grey mb-8" data-aos="fade-left"
                 data-aos-delay="200"><?php the_sub_field('text') ?>
            </div>
            <?php if(get_sub_field('button_text')): ?>
                <a class="button blue-bg-white" data-aos="fade-left" data-aos-delay="300"
                   href="<?php the_sub_field('button_link') ?>" <?php if(the_sub_field('external_link') === 'yes'): ?> target="_blank" <?php endif; ?>>
                    <?php the_sub_field('button_text') ?>
                </a>
            <?php endif; ?>
        </div>

    <?php elseif(get_row_layout() === 'team_section'): ?>

        <div class="my-16">
            <div class="container">
                <div class="<?php if(is_front_page()): ?> w-screen-135 md:w-full overflow-x-hidden <?php endif; ?>">
                    <div class="flex flex-col md:flex-row justify-center">
                        <?php if(is_front_page()): ?>
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <?php endif; ?>
                                    <?php if(have_rows('columns')): ?>
                                        <?php $i = 1; ?>
                                        <?php while(have_rows('columns')): ?> <?php the_row() ?>
                                        <div data-aos="fade-down" data-aos-delay="<?php echo e($i * 100); ?>"
                                             class="<?php if(is_front_page()): ?> swiper-slide swiper-slide-home <?php else: ?> swiper-slide-team <?php endif; ?> overflow-hidden <?php if($i % 2 == 0): ?> mt-0 lg:mt-24 xl:mt-24 <?php else: ?> mt-8 lg:mt-0 xl:mt-0 <?php endif; ?> <?php if($i == 6): ?> mr-0 <?php else: ?> mr-2 md:mr-4 <?php endif; ?>">
                                            <?php if( have_rows('column') ): ?>
                                                <?php while( have_rows('column')): ?> <?php the_row() ?>
                                                <?php if(get_row_layout() === 'placeholder'): ?>
                                                    <img class="h-auto mb-2 lg:mb-4 xl:mb-4"
                                                         src="<?php the_sub_field('placeholder_image') ?>">
                                                <?php elseif(get_row_layout() === 'person'): ?>
                                                    <?php $posts = get_sub_field('team_members') ?>
                                                    <?php if($posts): ?>
                                                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <div class="relative">
                                                                <a class=""
                                                                   href="/team/<?php echo $p->post_name ?>">
                                                                    <?php echo get_the_post_thumbnail($p->ID, 'full', array('class' => 'h-auto mb-2 lg:mb-4 xl:mb-4 w-full md:w-auto')) ?>
                                                                    <?php if(!is_front_page()): ?>
                                                                        <div
                                                                            class="w-full absolute bottom-0 left-0 bg-white p-2">
                                                                            <div class="roboto-light text-grey mb-1">
                                                                                Carl Widger BA QFA
                                                                            </div>
                                                                            <div
                                                                                class="text-blue uppercase text-xs mb-4">
                                                                                Director
                                                                            </div>
                                                                        </div>
                                                                    <?php endif; ?>
                                                                </a>
                                                            </div>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>
                                                <?php endif; ?>

                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                        </div>
                                        <?php $i++ ?>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                    <?php if(is_front_page()): ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

    <?php elseif(get_row_layout() === 'fees_table'): ?>

        <div class="my-16">
            <div class="container">
                <div class="hidden md:flex md:flex-row">
                    <div class="w-1/3 bg-blue text-white roboto-light p-4">
                        <?php the_sub_field('column_1_title') ?>
                    </div>
                    <div class="w-2/3">
                        <div class="flex table-line-header">
                            <div class="w-1/3 bg-lightgrey roboto-light p-4 text-center">
                                <?php the_sub_field('column_2_title') ?>
                            </div>
                            <div class="w-1/3 bg-lightgrey roboto-light p-4 text-center">
                                <?php the_sub_field('column_3_title') ?>
                            </div>
                            <div class="w-1/3 bg-lightgrey roboto-light p-4 text-center">
                                <?php the_sub_field('column_4_title') ?>
                            </div>
                        </div>
                    </div>
                </div>

                <?php if(have_rows('table')): ?>
                    <?php $i = 0 ?>
                    <?php while(have_rows('table')): ?> <?php the_row() ?>
                    <div
                        class="table-title cursor-pointer w-full md:hidden rounded bg-white border border-bordergrey text-xs px-4 py-2 mb-4 relative z-10">
                        <div class="flex flex-row justify-between">
                            <div><?php the_sub_field('title') ?></div>
                            <div>
                                <img class="table-arrow-down" src="<?= App\asset_path('images/icon-table-down.svg'); ?>">
                                <img class="table-arrow-up hidden" src="<?= App\asset_path('images/icon-table-up.svg'); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="table-dropdown flex-row table-line mb-4 -mt-1 md:mb-0 md:mt-0 hidden md:flex">
                        <div
                            class="w-1/3 flex flex-col justify-center <?php if($i % 2 == 0): ?> w-1/2 bg-blue align-middle md:bg-tablelightgrey <?php else: ?> bg-blue md:bg-lightgrey <?php endif; ?> roboto-light text-xs md:text-base text-white md:text-black p-4 border-white border border-l-0 border-r-0 border-b-0">
                            <?php the_sub_field('title') ?>
                        </div>
                        <div class="w-2/3">
                            <div class="flex flex-col md:flex-row table-line">
                                <div class="flex flex-row md:hidden">
                                    <div
                                        class="w-1/2 md:hidden <?php if($i % 2 == 0): ?> bg-lightgrey <?php else: ?> bg-tablelightgrey <?php endif; ?> roboto-light p-4 text-xs md:text-base text-center border-white border border-r-0 border-b-0">
                                        Zeus
                                    </div>
                                    <div
                                        class="w-1/2 md:w-1/3 <?php if($i % 2 == 0): ?> bg-lightgrey <?php else: ?> bg-tablelightgrey <?php endif; ?> roboto-light p-4 text-xs md:text-base text-center border-white border border-r-0 border-b-0">
                                        <?php the_sub_field('zeus') ?>
                                    </div>
                                </div>
                                <div
                                    class="hidden md:block md:w-1/3 <?php if($i % 2 == 0): ?> bg-tablelightgrey <?php else: ?> bg-lightgrey <?php endif; ?> roboto-light p-4 text-xs md:text-base text-center border-white border border-r-0 border-b-0">
                                    <?php the_sub_field('zeus') ?>
                                </div>
                                <div class="flex flex-row md:hidden">
                                    <div
                                        class="w-1/2 md:hidden <?php if($i % 2 == 0): ?> bg-tablelightgrey <?php else: ?> bg-lightgrey <?php endif; ?> roboto-light p-4 text-xs md:text-base text-center border-white border border-r-0 border-b-0">
                                        Oceanus
                                    </div>
                                    <div
                                        class="w-1/2 md:w-1/3 <?php if($i % 2 == 0): ?> bg-tablelightgrey <?php else: ?> bg-lightgrey <?php endif; ?> roboto-light p-4 text-xs md:text-base text-center border-white border border-r-0 border-b-0">
                                        <?php the_sub_field('oceanus') ?>
                                    </div>
                                </div>
                                <div
                                    class="hidden md:block md:w-1/3 <?php if($i % 2 == 0): ?> bg-tablelightgrey <?php else: ?> bg-lightgrey <?php endif; ?> roboto-light p-4 text-xs md:text-base text-center border-white border border-r-0 border-b-0">
                                    <?php the_sub_field('oceanus') ?>
                                </div>
                                <div class="flex flex-row md:hidden">
                                    <div
                                        class="w-1/2 md:hidden <?php if($i % 2 == 0): ?> bg-lightgrey <?php else: ?> bg-tablelightgrey <?php endif; ?> roboto-light p-4 text-xs md:text-base text-center border-white border border-r-0 border-b-0">
                                        Tethys
                                    </div>
                                    <div
                                        class="w-1/2 md:w-1/3 <?php if($i % 2 == 0): ?> bg-lightgrey md:bg-tablelightgrey <?php else: ?> bg-tablelightgrey md:bg-lightgrey <?php endif; ?> roboto-light p-4 text-xs md:text-base text-center border-white border border-r-0 border-b-0">
                                        <?php the_sub_field('tethys') ?>
                                    </div>
                                </div>
                                <div
                                    class="hidden md:block md:w-1/3 <?php if($i % 2 == 0): ?> bg-lightgrey md:bg-tablelightgrey <?php else: ?> bg-tablelightgrey md:bg-lightgrey <?php endif; ?> roboto-light p-4 text-xs md:text-base text-center border-white border border-r-0 border-b-0">
                                    <?php the_sub_field('tethys') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $i++ ?>
                    <?php endwhile; ?>
                <?php endif; ?>

            </div>
        </div>

    <?php elseif(get_row_layout() === 'infographics'): ?>

        <div class="py-16 my-16 bg-lightgrey md:text-left">
            <div class="container">
                <h2 class="font-trajan text-red text-center mx-auto mb-8" data-aos="fade">Here's how they work</h2>
                <div class="flex flex-col md:flex-row">
                    <div class="w-full md:w-445 lg:w-490 xl:w-512 relative mx-auto mb-8 md:mb-4 md:mr-8 lg:mr-24">
                        <?php for($i = 1; $i < 7; $i++): ?>
                            <a class="absolute rounded-full info-<?php echo e($i); ?>" href="#"></a>
                            <img id="info-<?php echo e($i); ?>" class="mx-auto ig <?php if($i !== 1): ?> hidden <?php endif; ?>"
                                 src="<?= App\asset_path('images/infographic-'.$i.'.png'); ?>">
                        <?php endfor; ?>
                    </div>
                    <div
                        class="w-full md:w-1/2 mx-auto flex flex-col justify-start md:justify-center roboto-light leading-snug">
                        <?php if(have_rows('graphics')): ?>
                            <?php $n = 1 ?>
                            <?php while(have_rows('graphics')): ?> <?php the_row() ?>
                            <div class="it info-text-<?php echo $n ?> <?php if($n === 1): ?> block <?php else: ?> hidden <?php endif; ?>">
                                <h2 class="roboto-light text-xl flex flex-row items-center mb-8" data-aos="fade-left">
                                    <div
                                        class="bg-red rounded-full w-8 lg:w-12 h-8 lg:h-12 text-center flex flex-col text-white justify-center mr-4"><?php echo $n ?></div><?php echo e(the_sub_field('title')); ?>

                                </h2>
                                <span data-aos="fade-left" data-aos-delay="300"><?php echo e(the_sub_field('text')); ?></span>
                            </div>
                            <?php $n++ ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

    <?php elseif(get_row_layout() === 'be_inspired_cta'): ?>

        <div class="bg-vlightgrey py-16">
            <div class="container">
                <div class="flex flex-col md:flex-row">
                    <div class="w-full md:w-3/4">
                        <img src="<?php the_sub_field('image') ?>" data-aos="fade-right">
                    </div>
                    <div
                        class="md:w-1/2 bg-white text-center flex flex-col justify-center -mt-24 mx-4 px-4 md:px-12 py-8 md:-ml-24 md:my-6 lg:my-12 lg:px-20 lg:-ml-40 xl:-ml-48"
                        style="box-shadow:0 2px 4px 0 rgba(0,0,0,0.50)" data-aos="fade-left">
                        <h2 class="text-red font-trajan mb-4" data-aos="fade"><?php the_sub_field('title') ?></h2>
                        <div class="mb-4 roboto-light text-lg leading-normal" data-aos="fade"
                             data-aos-delay="200"><?php the_sub_field('text') ?></div>
                        <a class="button red-bg-white" data-aos="fade-left" data-aos-delay="300"
                           href="<?php the_sub_field('button_link') ?>"
                           <?php if(get_sub_field('external_link')): ?> target="_blank" <?php endif; ?>><?php the_sub_field('button_text') ?></a>
                    </div>
                </div>
            </div>
        </div>

    <?php elseif(get_row_layout() === 'challenge_cta'): ?>

        <div class="mt-16 mb-16">
            <div class="container">
                <div class="flex flex-col">
                    <img class="xl:w-full" src="<?php the_sub_field('image') ?>" data-aos="fade">
                    <div class="bg-white -mt-8 md:-mt-40 lg:-mt-56 mx-4 md:mx-16 px-4 py-12 md:p-20 text-center"
                         data-aos="fade"
                         data-aos-delay="400"
                         style="box-shadow:0 4px 5px 2px rgba(0,0,0,0.09)">
                        <h2 class="text-blue font-trajan mb-4" data-aos="fade"
                            data-aos-delay="500"><?php the_sub_field('title') ?></h2>
                        <p class="text-grey roboto-light mb-8 leading-normal" data-aos="fade-left"
                           data-aos-delay="600"><?php the_sub_field('text') ?></p>
                        <a class="button blue-bg-white" data-aos="fade-left" data-aos-delay="800"
                           href="<?php the_sub_field('button_link') ?>"><?php the_sub_field('button_text') ?></a>
                    </div>
                </div>
            </div>
        </div>

    <?php elseif(get_row_layout() === 'content_image_left'): ?>

        <div
            class="<?php if(get_sub_field('background_colour')): ?> <?php echo 'bg-'.get_sub_field('background_colour') ?> <?php endif; ?> py-8" id="Content Image Left">
            <div class="container">
                <div
                    class="flex flex-col lg:flex-row justify-center <?php if(get_sub_field('image_placement')): ?> items-<?php the_sub_field('image_placement') ?> <?php endif; ?> ">
                    <div class="w-full lg:w-5/12 px-20 lg:px-0">
                        <img class="lg:h-64 mx-auto" src="<?php the_sub_field('image') ?>">
                    </div>
                    <div class="w-full text-center lg:w-7/12 lg:text-left">
                        <h2 class="text-red text-175 font-trajan mb-4"
                            data-aos="fade"><?php the_sub_field('title') ?></h2>
                        <div
                            class="roboto-light leading-snug mb-8 content-left-text"><?php the_sub_field('text') ?></div>
                        <?php if(get_sub_field('button_text')): ?>
                            <a class="button red-bg-white" data-aos="fade-left" data-aos-delay="300"
                               href="<?php the_sub_field('button_link') ?>"><?php the_sub_field('button_text') ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

    <?php elseif(get_row_layout() === 'news_section'): ?>

        <div class="bg-lightgrey pt-16 mt-48">
            <div class="container">

                <?php $query = new WP_Query(array('post_type' => 'post', 'posts_per_page' => '1')) ?>

                <?php if($query->have_posts()): ?>
                    <?php $i = 1 ?>
                    <?php while($query->have_posts()): ?> <?php $query->the_post() ?>

                    <div class="flex flex-col md:flex-row -mt-56 mb-24">
                        <div class="w-full md:w-3/4 relative" data-aos="fade-right">
                            <a href="<?php echo e(get_permalink()); ?>">
                                <?php the_post_thumbnail('full') ?>
                                <?php if(get_field('type') === 'text-video'): ?>
                                    <img class="icon-play absolute top-0 left-1" src="<?= App\asset_path('images/icon-play.svg'); ?>">
                                <?php endif; ?>
                            </a>

                        </div>
                        <div
                            class="md:w-1/2 bg-white text-center flex flex-col justify-center z-10 -mt-24 mx-4 px-4 md:px-12 py-8 md:-ml-24 md:my-6 lg:my-20 lg:px-20 lg:-ml-40 xl:-ml-48"
                            style="box-shadow:0 2px 4px 0 rgba(0,0,0,0.50)">
                            <a href="<?php the_permalink() ?>"><h2 class="text-red font-trajan mb-4" data-aos="fade"><?php the_title() ?></h2></a>
                            <div class="mb-4 roboto-light text-lg" data-aos="fade-left"
                                 data-aos-delay="300"><?php echo strip_tags(substr(get_the_content(), 0, 100)).'...' ?></div>
                        </div>
                    </div>

                    <?php endwhile; ?>
                <?php endif; ?>

                <div class="flex flex-row align-center">
                    <a data-aos="fade-left"
                       class="w-full md:w-1/3 mx-auto bg-red text-white text-lg roboto-light rounded py-3 px-4 cursor-pointer category-filter"
                       href="#">
                        Filter Content
                        <img class="filter-arrow-down float-right" src="<?= App\asset_path('images/icon-filter-down.svg'); ?>">
                        <img class="filter-arrow-up hidden float-right" src="<?= App\asset_path('images/icon-filter-up.svg'); ?>">
                    </a>
                </div>

                <div class="w-full md:w-1/3 mx-auto bg-lightgrey filter-dropdown" style="display:none">
                    <ul>
                        <li class="show-all text-grey roboto-light p-4 border border-2 border-t-0 border-r-0 border-l-0"><a href="#">Show all</a></li>
                        <?php $categories = get_categories(array('orderby' => 'name')); ?>
                        <?php $count = count($categories); ?>
                        <?php $i = 1; ?>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(isset($_GET['c'])): ?>
                                <script>
                                    jQuery(document).ready(function(){
                                        <?php if($_GET['c'] === $category->slug): ?>
                                            var phpstring = "<?php echo $category->slug ?>";
                                            jQuery('.grid').isotope({ filter: '.'+phpstring });
                                        <?php endif; ?>
                                    });
                                </script>
                            <?php endif; ?>
                            <li
                                class="filter-item text-grey roboto-light p-4 <?php if($count !== $i): ?> border border-2 border-t-0 border-r-0 border-l-0 <?php endif; ?>"
                                data-category="<?php echo $category->slug ?>"><a class="block"
                                     href="<?php the_permalink() ?>"><?php echo $category->name ?></a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php $i++ ?>
                    </ul>
                </div>

            </div>
        </div>

        <div class="bg-lightgrey py-16">
            <div class="container">
                <div class="grid">
                    <?php $query = new WP_Query(array('post_type' => 'post', 'posts_per_page' => '-1')) ?>

                    <?php if($query->have_posts()): ?>
                        <?php $i = 1 ?>
                        <?php while($query->have_posts()): ?> <?php $query->the_post() ?>
                        <?php $categories = get_the_category() ?>

                        <?php if(get_field('type') === 'text-image'): ?>
                            <div class="grid-item text-image <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php echo e($category->slug); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>">
                                <div class="relative border-red border border-2 border-t-0 border-r-0 border-l-0">
                                    <?php if(has_post_thumbnail()): ?>
                                        <a href="<?php echo e(get_permalink()); ?>"><?php echo e(the_post_thumbnail('full')); ?></a>
                                    <?php endif; ?>
                                    <a href="<?php echo e(get_permalink()); ?>"><img class="absolute bottom-0 left-1" src="<?= App\asset_path('images/arrow-red.svg'); ?>"/></a>
                                </div>
                                <div class="bg-white text-grey roboto-light leading-normal p-4 pb-10 border border-lightgrey news-item-text">
                                    <h3 class="text-grey text-xl roboto-light leading-normal mb-4"><a href="<?php echo e(get_permalink()); ?>"><?php echo e(the_title()); ?></a></h3>
                                    <?php the_excerpt() ?>
                                </div>
                            </div>
                        <?php elseif(get_field('type') === 'text-video'): ?>
                            <div class="grid-item text-video <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php echo e($category->slug); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>">
                                <div class="relative border-red border border-2 border-t-0 border-r-0 border-l-0">
                                    <div class="bg-black">
                                        <?php if(has_post_thumbnail()): ?>
                                            <a href="<?php echo e(get_permalink()); ?>"><?php echo e(the_post_thumbnail('full', array('class' => 'opacity-50'))); ?></a>
                                        <?php else: ?>
                                            <a href="<?php echo e(get_permalink()); ?>"><img class="opacity-50" src="<?= App\asset_path('images/news-image-01.jpg'); ?>"/></a>
                                        <?php endif; ?>
                                    </div>

                                    <a href="<?php echo e(get_permalink()); ?>"><img class="absolute bottom-0 left-1" src="<?= App\asset_path('images/arrow-red.svg'); ?>"/></a>
                                </div>
                                <div class="bg-white text-grey roboto-light leading-normal p-4 pb-10 border border-lightgrey news-item-text">
                                    <h3 class="text-grey text-xl roboto-light leading-normal"><a href="<?php echo e(get_permalink()); ?>"><?php echo e(the_title()); ?></a></h3>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="grid-item other <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php echo e($category->slug); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>">
                                <div class="bg-blue text-white text-xl roboto-light leading-normal p-4 pb-10 relative">
                                    <a href="<?php echo e(the_permalink()); ?>"><?php echo e(the_title()); ?></a>
                                    <a href="<?php echo e(the_permalink()); ?>"><img class="absolute bottom-0 left-4" src="<?= App\asset_path('images/arrow-white.svg'); ?>"/></a>
                                </div>
                                <div class="bg-white text-grey roboto-light leading-normal p-4 pb-10 border border-lightgrey news-item-text">
                                    <?php the_excerpt() ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>

            </div>

            <?php wp_reset_postdata() ?>

        </div>

    <?php endif; ?>

    <?php endwhile; ?>
<?php endif; ?>
