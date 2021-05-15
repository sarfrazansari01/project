<!DOCTYPE html>
<html lang="en-US" data-bt-theme="Medicare">
    <!-- BEGIN HEAD -->
    <head>
        @include('../partials/frontend/head')
    </head>
    <!-- END HEAD -->
    <body class="home page-template-default page page-id-2 page-parent theme-medicare bt_bb_plugin_active bt_bb_fe_preview_toggle woocommerce-no-js bodyPreloader btMenuLeftEnabled btMenuBelowLogo btStickyEnabled btLightSkin btTopToolsInMenuArea btMenuGutter btCapitalizeMainMenuItems btSquareButtons btNoSidebar" data-autoplay="0" id="btBody" >
        <div class="btPageWrap" id="top">
            <!-- BEGIN HEADER -->
            @include('../partials/frontend/header')
            <!-- BEGIN CONTENT -->
            <div class="btContentWrap btClear">
                @yield('content')
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
            <!-- END CONTAINER -->
            <!-- BEGIN FOOTER -->
            @include('../partials/frontend/footer')
            <!-- END FOOTER -->
        </div>
        <!-- BEGIN CORE PLUGINS -->
        <script type="text/javascript">
            var c = document.body.className;
            c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
            document.body.className = c;
        </script>
        <style id='bt-custom-style-inline-css' type='text/css'>
            .btPassword .btContentHolder, .btPassword .btContent { margin-top: 200px; margin-bottom: 50px; padding-left: 100px; padding-right: 100px; } @media screen and (max-width: 615px){ .slidedItem .btSlidePane { padding-left: 20px; padding-right: 20px; }}
        </style>
        <script type='text/javascript' src='http://medicare.bold-themes.com/clinic/wp-includes/js/comment-reply.min.js?ver=5.7' id='comment-reply-js'></script>
        <script type='text/javascript' src='http://medicare.bold-themes.com/clinic/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=7.4.4' id='wp-polyfill-js'></script>
        <script type='text/javascript' id='wp-polyfill-js-after'>
    ('fetch' in window) || document.write('<script src="http://medicare.bold-themes.com/clinic/wp-includes/js/dist/vendor/wp-polyfill-fetch.min.js?ver=3.0.0"></scr' + 'ipt>'); (document.contains) || document.write('<script src="http://medicare.bold-themes.com/clinic/wp-includes/js/dist/vendor/wp-polyfill-node-contains.min.js?ver=3.42.0"></scr' + 'ipt>'); (window.DOMRect) || document.write('<script src="http://medicare.bold-themes.com/clinic/wp-includes/js/dist/vendor/wp-polyfill-dom-rect.min.js?ver=3.42.0"></scr' + 'ipt>'); (window.URL && window.URL.prototype && window.URLSearchParams) || document.write('<script src="http://medicare.bold-themes.com/clinic/wp-includes/js/dist/vendor/wp-polyfill-url.min.js?ver=3.6.4"></scr' + 'ipt>'); (window.FormData && window.FormData.prototype.keys) || document.write('<script src="http://medicare.bold-themes.com/clinic/wp-includes/js/dist/vendor/wp-polyfill-formdata.min.js?ver=3.0.12"></scr' + 'ipt>'); (Element.prototype.matches && Element.prototype.closest) || document.write('<script src="http://medicare.bold-themes.com/clinic/wp-includes/js/dist/vendor/wp-polyfill-element-closest.min.js?ver=2.0.2"></scr' + 'ipt>'); ('objectFit' in document.documentElement.style) || document.write('<script src="http://medicare.bold-themes.com/clinic/wp-includes/js/dist/vendor/wp-polyfill-object-fit.min.js?ver=2.3.4"></scr' + 'ipt>');
        </script>
        <script type='text/javascript' src='http://medicare.bold-themes.com/clinic/wp-includes/js/dist/hooks.min.js?ver=50e23bed88bcb9e6e14023e9961698c1' id='wp-hooks-js'></script>
        <script type='text/javascript' src='http://medicare.bold-themes.com/clinic/wp-includes/js/dist/i18n.min.js?ver=db9a9a37da262883343e941c3731bc67' id='wp-i18n-js'></script>
        <script type='text/javascript' id='wp-i18n-js-after'>
    wp.i18n.setLocaleData({'text direction\u0004ltr': ['ltr']});
        </script>
        <script type='text/javascript' src='http://medicare.bold-themes.com/clinic/wp-includes/js/dist/vendor/lodash.min.js?ver=4.17.19' id='lodash-js'></script>
        <script type='text/javascript' id='lodash-js-after'>
    window.lodash = _.noConflict();
        </script>
        <script type='text/javascript' src='http://medicare.bold-themes.com/clinic/wp-includes/js/dist/url.min.js?ver=0ac7e0472c46121366e7ce07244be1ac' id='wp-url-js'></script>
        <script type='text/javascript' id='wp-api-fetch-js-translations'>
    (function (domain, translations) {
        var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
        localeData[""].domain = domain;
        wp.i18n.setLocaleData(localeData, domain);
    })("default", {"locale_data": {"messages": {"": {}}}});
        </script>
        <script type='text/javascript' src='http://medicare.bold-themes.com/clinic/wp-includes/js/dist/api-fetch.min.js?ver=a783d1f442d2abefc7d6dbd156a44561' id='wp-api-fetch-js'></script>
        <script type='text/javascript' id='wp-api-fetch-js-after'>
    wp.apiFetch.use(wp.apiFetch.createRootURLMiddleware("http://medicare.bold-themes.com/clinic/wp-json/"));
    wp.apiFetch.nonceMiddleware = wp.apiFetch.createNonceMiddleware("77b9de1641");
    wp.apiFetch.use(wp.apiFetch.nonceMiddleware);
    wp.apiFetch.use(wp.apiFetch.mediaUploadMiddleware);
    wp.apiFetch.nonceEndpoint = "http://medicare.bold-themes.com/clinic/wp-admin/admin-ajax.php?action=rest-nonce";
        </script>
        <script type='text/javascript' id='contact-form-7-js-extra'>
            /* <![CDATA[ */
            var wpcf7 = [];
            /* ]]> */
        </script>
        <script type='text/javascript' src='http://medicare.bold-themes.com/clinic/wp-content/plugins/contact-form-7/includes/js/index.js?ver=5.4' id='contact-form-7-js'></script>
        <script type='text/javascript' src='http://medicare.bold-themes.com/clinic/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70' id='jquery-blockui-js'></script>
        <script type='text/javascript' id='wc-add-to-cart-js-extra'>
            /* <![CDATA[ */
            var wc_add_to_cart_params = {"ajax_url": "\/clinic\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/clinic\/?wc-ajax=%%endpoint%%", "i18n_view_cart": "View cart", "cart_url": "http:\/\/medicare.bold-themes.com\/clinic\/shop\/cart\/", "is_cart": "", "cart_redirect_after_add": "no"};
            /* ]]> */
        </script>
        <script type='text/javascript' src='http://medicare.bold-themes.com/clinic/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=4.3.3' id='wc-add-to-cart-js'></script>
        <script type='text/javascript' src='http://medicare.bold-themes.com/clinic/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4' id='js-cookie-js'></script>
        <script type='text/javascript' id='woocommerce-js-extra'>
            /* <![CDATA[ */
            var woocommerce_params = {"ajax_url": "\/clinic\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/clinic\/?wc-ajax=%%endpoint%%"};
            /* ]]> */
        </script>
        <script type='text/javascript' src='http://medicare.bold-themes.com/clinic/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=4.3.3' id='woocommerce-js'></script>
        <script type='text/javascript' id='wc-cart-fragments-js-extra'>
            /* <![CDATA[ */
            var wc_cart_fragments_params = {"ajax_url": "\/clinic\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/clinic\/?wc-ajax=%%endpoint%%", "cart_hash_key": "wc_cart_hash_1a1d93e5b4f33fd277f32a94218fc1c3", "fragment_name": "wc_fragments_1a1d93e5b4f33fd277f32a94218fc1c3", "request_timeout": "5000"};
            /* ]]> */
        </script>
        <script type='text/javascript' src='http://medicare.bold-themes.com/clinic/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=4.3.3' id='wc-cart-fragments-js'></script>
        <script type='text/javascript' src='http://medicare.bold-themes.com/clinic/wp-includes/js/jquery/ui/core.min.js?ver=1.12.1' id='jquery-ui-core-js'></script>
        <script type='text/javascript' src='http://medicare.bold-themes.com/clinic/wp-includes/js/jquery/ui/datepicker.min.js?ver=1.12.1' id='jquery-ui-datepicker-js'></script>
        <script type='text/javascript' id='jquery-ui-datepicker-js-after'>
            jQuery(document).ready(function (jQuery) {
                jQuery.datepicker.setDefaults({"closeText": "Close", "currentText": "Today", "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"], "monthNamesShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"], "nextText": "Next", "prevText": "Previous", "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"], "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"], "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"], "dateFormat": "MM d, yy", "firstDay": 1, "isRTL": false}); });
        </script>
        <script type='text/javascript' src='http://medicare.bold-themes.com/clinic/wp-content/plugins/contact-form-7/includes/js/html5-fallback.js?ver=5.4' id='contact-form-7-html5-fallback-js'></script>
        <script type='text/javascript' src='http://medicare.bold-themes.com/clinic/wp-includes/js/wp-embed.min.js?ver=5.7' id='wp-embed-js'></script>
        <script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?key=AIzaSyBda9LxQ-Wztqsk6aFI7SkcdiypnKTPfiI&#038;ver=5.7' id='gmaps_api-js'></script>
        <script type='text/javascript' src='http://medicare.bold-themes.com/clinic/wp-content/plugins/medicare/bt_gmap.js?ver=5.7' id='bt_gmap_init-js'></script>
    </body>
</html>