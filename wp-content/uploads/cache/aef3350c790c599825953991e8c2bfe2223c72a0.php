
<div class="container">
    <div class="bg-lightgrey py-16">
        <div class="flex flex-col text-center mx-auto">
            <h2 class="merriweather-light text-orange text-4xl mb-6"><?php the_field('main_cta_title','options') ?></h2>
            <div class="montserrat-regular text-darkgrey w-full md:w-2/3 mx-auto">
                <div class="mb-6">
                    <?php the_field('main_cta_text','options') ?>
                </div>
                <a class="button white-bg-orange py-2 px-16 text-white text-center uppercase" href="<?php the_field('main_cta_button_link','options') ?>" <?php if(get_field('main_cta_button_link','options')): ?> target="_blank" <?php endif; ?>><?php the_field('main_cta_button_text','options') ?></a>
            </div>
        </div>
    </div>
</div>

<div class="subscription-section bg-green montserrat-light text-white py-10" >
  <div class="container">
    <div class="flex flex-col justify-center lg:flex-row lg:items-center">
      <p class="text-center px-20 md:px-20 lg:px-0" data-aos="fade-left"><?php echo e(get_field('cta_title', 'options')); ?></p>
      <a class="button white-bg-orange py-2 px-6 mx-auto lg:mx-20 mt-4 lg:mt-0 sub-form" href="#" data-aos="fade-left" data-aos-delay="200">Find out more</a>
    </div>

    <div class="subscription-form hidden flex-col w-full md:w-2/3 justify-center mx-auto p-4 md:p-20 md:py-10">
        <form method="POST" action="https://cordinerwealth.activehosted.com/proc.php" id="_form_3_" class="_form _form_3 _inline-form _inline-style _dark" novalidate>
        <input type="hidden" name="u" value="3" />
        <input type="hidden" name="f" value="3" />
        <input type="hidden" name="s" />
        <input type="hidden" name="c" value="0" />
        <input type="hidden" name="m" value="0" />
        <input type="hidden" name="act" value="sub" />
        <input type="hidden" name="v" value="2" />
        <div class="_form-content">
          <div class="flex flex-col lg:flex-row">
            <div class="w-full lg:w-1/2 mr-4">
              <div class="mb-4">
                <label class="block text-white text-sm montserrat-light mb-2" for="firstname">
                  First Name*
                </label>
                <input class="bg-gray-300 appearance-none w-full p-3 text-grey rounded-sm text-sm montserrat-light leading-tight border border-white" name="firstname" placeholder="Type your first name" id="firstname" type="text" required>
              </div>
            </div>
            <div class="w-full lg:w-1/2">
              <div class="mb-4">
                <label class="block text-white text-sm montserrat-light mb-2" for="lastname">
                  Last Name*
                </label>
                <input class="bg-gray-300 appearance-none w-full p-3 text-grey rounded-sm text-sm montserrat-light leading-tight border border-white" name="lastname" placeholder="Type your last name" id="lastname" type="text" required>
              </div>
            </div>
          </div>
          <div class="mb-6">
            <label class="block text-white text-sm montserrat-light mb-2" for="emailaddress">
              Email*
            </label>
            <input class="bg-gray-300 appearance-none w-full p-3 text-grey rounded-sm text-sm montserrat-light leading-tight border border-white" name="email" placeholder="Type your email" id="username" type="text" required>
          </div>






          <div class="flex flex-row justify-center">
            <button type="submit" class="button white-bg-orange py-2 px-8 _submit" id="_form_3_submit">Subscribe</button>
          </div>
        </div>
        <div class="_form-thank-you" style="display:none; text-align:center;">
        </div>
      </form>

        <script type="text/javascript">
            window.cfields = [];
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
                        _load_script('https://cordinerwealth.activehosted.com/proc.php?' + serialized + '&jsonp=true');
                    }
                    return false;
                };
                addEvent(form_to_submit, 'submit', form_submit);
            })();

        </script>

    </div>

  </div>
</div>

<footer class="bg-darkgrey px-3 pb-10 text-08">
  <div class="container">
    <div class="flex flex-col md:flex-row pt-6">

      <div class="w-full md:w-3/12 lg:w-3/12">
          <div class="flex flex-col md:flex-row mx-auto justify-center text-center md:text-left">
              <a href="<?php echo e(home_url('/')); ?>" class="footer-logo block mx-auto md:mx-0 lg:mr-12" data-aos="fade">
                  <img class="inline" src="<?= App\asset_path('images/icon-cordiner.svg'); ?>" alt="Cordiner Wealth Logo">
              </a>
              <?php if(has_nav_menu('primary_navigation')): ?>
                  <?php echo wp_nav_menu([
                      'theme_location'    => 'footer_navigation',
                      'depth'             => 2,
                      'container'         => false,
                      'menu_class'        => 'footer-navbar-menu',
                      'menu_id'           => 'primary-menu',
                      'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                      ]); ?>

              <?php endif; ?>
          </div>
      </div>

      <div class="w-full md:w-5/12 lg:w-6/12 border-t md:border-l-0 md:border-l md:border-t-0 border-border mt-12 pt-8 md:mt-0 md:pt-0">
        <div class="flex flex-col lg:flex-row">
          <div class="w-full md:ml-12 lg:ml-12 montserrat-light text-white mb-8 md:mb-5 text-center md:text-left">
            <?php echo e(the_field('address_1','option')); ?>

          </div>
        </div>
      </div>


      <div class="w-full md:w-4/12 lg:w-3/12 xl:w-3/12">
          <ul class="flex flex-row justify-center mx-auto md:mx-0 lg:justify-start">
              <?php if(have_rows('social_media','option')): ?>
                  <?php $i = 1 ?>
                  <?php while(have_rows('social_media','option')): ?> <?php the_row();  ?>
                  <li class="social-media mr-5 lg:mr-3 xl:mr-3">
                      <a href="<?php echo e(the_sub_field('url')); ?>" target="_blank">
                          <img class="icon ignore-smush" src="<?php echo e(the_sub_field('icon')); ?>">
                          <img class="icon-hover hidden ignore-smush" src="<?php echo e(the_sub_field('icon_hover')); ?>">
                      </a>
                  </li>
                  <?php $i++ ?>
                  <?php endwhile; ?>
              <?php endif; ?>
          </ul>
          <div class="flex flex-row lg:flex-row w-1/2 md:w-full justify-between mx-auto mt-6">
              <?php if(have_rows('links','option')): ?>
                  <?php $i = 1 ?>
                  <?php while(have_rows('links','option')): ?> <?php the_row();  ?>
                    <a class="link" href="<?php the_sub_field('link_url') ?>"><?php the_sub_field('link_text') ?></a>
                  <?php $i++ ?>
                  <?php endwhile; ?>
              <?php endif; ?>
          </div>
      </div>

    </div>
  </div>

</footer>

<div class="container py-4">
  <p class="montserrat-light text-xs text-center lg:text-left px-10 lg:px-0">
      Cordiner Wealth is a trading style of TPFA Limited, which is authorised and regulated by the Financial Conduct Authority. FCA reference number 611188. Registered in England and Wales as a Limited Company No. 8453762.

      Registered address: 9D Harewood Yard, Harewood Estate, Leeds, LS17 9LF<br/><br/>

      The value of investments and the income from them can go down as well as up, so you could get back less than you invested. In the investment world, the past is not a reliable guide to the future.<br/><br/>

      The guidance and/or advice contained in this website is subject to UK regulatory regime and is therefore restricted to consumers based in the UK.<br/><br/>

      Decisions should not be taken based solely on the content of the website and individual advice should be sought first. Regulations, levels and bases of taxation are subject to change, content of the website may not reflect the latest changes.<br/><br/>

      Cordiner Wealth is not responsible for the content of external links.
  </p>
</div>

