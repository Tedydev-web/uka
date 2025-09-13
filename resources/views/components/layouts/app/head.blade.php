<head>
    <meta charset="UTF-8">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
    <link rel="alternate" hreflang="vi" href="{{ url()->current() }}" />
    <link rel="alternate" hreflang="x-default" href="{{ url()->current() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='dns-prefetch' href='//cdn.jsdelivr.net' />
    <link rel='dns-prefetch' href='//cdnjs.cloudflare.com' />

    <script>
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "{{ asset('assets/wp-includes/js/wp-emoji-release.min.js') }}"
            }
        };
        /*! This file is auto-generated */
        ! function(e, a, t) {
            var n, r, o, i = a.createElement("canvas"),
                p = i.getContext && i.getContext("2d");

            function s(e, t) {
                var a = String.fromCharCode,
                    e = (p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0), i.toDataURL());
                return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL()
            }

            function c(e) {
                var t = a.createElement("script");
                t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
            }
            for (o = Array("flag", "emoji"), t.supports = {
                    everything: !0,
                    everythingExceptFlag: !0
                }, r = 0; r < o.length; r++) t.supports[o[r]] = function(e) {
                if (p && p.fillText) switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
                    case "flag":
                        return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([
                            55356, 56826, 55356, 56819
                        ], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418,
                            56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447
                        ], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203,
                            56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447
                        ]);
                    case "emoji":
                        return !s([129777, 127995, 8205, 129778, 127999], [129777, 127995, 8203, 129778, 127999])
                }
                return !1
            }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports
                .everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
            t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t
                .readyCallback = function() {
                    t.DOMReady = !0
                }, t.supports.everything || (n = function() {
                    t.readyCallback()
                }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !
                    1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function() {
                    "complete" === a.readyState && t.readyCallback()
                })), (e = t.source || {}).concatemoji ? c(e.concatemoji) : e.wpemoji && e.twemoji && (c(e.twemoji), c(e
                    .wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>
    <style>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='wp-block-library-css'
        href='{{ asset('assets/wp-includes/css/dist/block-library/style.min.css') }}' media='all' />
    <link rel='stylesheet' id='classic-theme-styles-css'
        href='{{ asset('assets/wp-includes/css/classic-themes.min.css') }}' media='all' />
    <style id='global-styles-inline-css'>
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--color--contrast: var(--contrast);
            --wp--preset--color--contrast-2: var(--contrast-2);
            --wp--preset--color--contrast-3: var(--contrast-3);
            --wp--preset--color--base: var(--base);
            --wp--preset--color--base-2: var(--base-2);
            --wp--preset--color--base-3: var(--base-3);
            --wp--preset--color--accent: var(--accent);
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
            --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
            --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
            --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
            --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
            --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
            --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
            --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        body .is-layout-flow>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-flow>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-flow>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-constrained>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-constrained>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignwide {
            max-width: var(--wp--style--global--wide-size);
        }

        body .is-layout-flex {
            display: flex;
        }

        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        body .is-layout-flex>* {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        .wp-block-navigation a:where(:not(.wp-element-button)) {
            color: inherit;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        .wp-block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel='stylesheet' id='contact-form-7-css'
        href='{{ asset('assets/wp-content/plugins/contact-form-7/includes/css/styles.css') }}' media='all' />
    <link rel='stylesheet' id='menu-image-css'
        href='{{ asset('assets/wp-content/plugins/menu-image/includes/css/menu-image.css') }}' media='all' />
    <link rel='stylesheet' id='dashicons-css' href='{{ asset('assets/wp-includes/css/dashicons.min.css') }}'
        media='all' />
    <link rel='stylesheet' id='wpml-menu-item-0-css'
        href='{{ asset('assets/wp-content/plugins/sitepress-multilingual-cms/templates/language-switchers/menu-item/style.min.css') }}'
        media='all' />
    <link rel='stylesheet' id='generate-style-css'
        href='{{ asset('assets/wp-content/themes/canhcam/assets/css/main.min.css') }}' media='all' />
    <style id='generate-style-inline-css'>
        body {
            background-color: var(--base-2);
            color: var(--contrast);
        }

        a {
            color: var(--accent);
        }

        a {
            text-decoration: underline;
        }

        .entry-title a,
        .site-branding a,
        a.button,
        .wp-block-button__link,
        .main-navigation a {
            text-decoration: none;
        }

        a:hover,
        a:focus,
        a:active {
            color: var(--contrast);
        }

        .wp-block-group__inner-container {
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
        }

        :root {
            --contrast: #222222;
            --contrast-2: #575760;
            --contrast-3: #b2b2be;
            --base: #f0f0f0;
            --base-2: #f7f8f9;
            --base-3: #ffffff;
            --accent: #1e73be;
        }

        .has-contrast-color {
            color: #222222;
        }

        .has-contrast-background-color {
            background-color: #222222;
        }

        .has-contrast-2-color {
            color: #575760;
        }

        .has-contrast-2-background-color {
            background-color: #575760;
        }

        .has-contrast-3-color {
            color: #b2b2be;
        }

        .has-contrast-3-background-color {
            background-color: #b2b2be;
        }

        .has-base-color {
            color: #f0f0f0;
        }

        .has-base-background-color {
            background-color: #f0f0f0;
        }

        .has-base-2-color {
            color: #f7f8f9;
        }

        .has-base-2-background-color {
            background-color: #f7f8f9;
        }

        .has-base-3-color {
            color: #ffffff;
        }

        .has-base-3-background-color {
            background-color: #ffffff;
        }

        .has-accent-color {
            color: #1e73be;
        }

        .has-accent-background-color {
            background-color: #1e73be;
        }

        .top-bar {
            background-color: #636363;
            color: #ffffff;
        }

        .top-bar a {
            color: #ffffff;
        }

        .top-bar a:hover {
            color: #303030;
        }

        .site-header {
            background-color: var(--base-3);
        }

        .main-title a,
        .main-title a:hover {
            color: var(--contrast);
        }

        .site-description {
            color: var(--contrast-2);
        }

        .mobile-menu-control-wrapper .menu-toggle,
        .mobile-menu-control-wrapper .menu-toggle:hover,
        .mobile-menu-control-wrapper .menu-toggle:focus,
        .has-inline-mobile-toggle #site-navigation.toggled {
            background-color: rgba(0, 0, 0, 0.02);
        }

        .main-navigation,
        .main-navigation ul ul {
            background-color: var(--base-3);
        }

        .main-navigation .main-nav ul li a,
        .main-navigation .menu-toggle,
        .main-navigation .menu-bar-items {
            color: var(--contrast);
        }

        .main-navigation .main-nav ul li:not([class*="current-menu-"]):hover>a,
        .main-navigation .main-nav ul li:not([class*="current-menu-"]):focus>a,
        .main-navigation .main-nav ul li.sfHover:not([class*="current-menu-"])>a,
        .main-navigation .menu-bar-item:hover>a,
        .main-navigation .menu-bar-item.sfHover>a {
            color: var(--accent);
        }

        button.menu-toggle:hover,
        button.menu-toggle:focus {
            color: var(--contrast);
        }

        .main-navigation .main-nav ul li[class*="current-menu-"]>a {
            color: var(--accent);
        }

        .navigation-search input[type="search"],
        .navigation-search input[type="search"]:active,
        .navigation-search input[type="search"]:focus,
        .main-navigation .main-nav ul li.search-item.active>a,
        .main-navigation .menu-bar-items .search-item.active>a {
            color: var(--accent);
        }

        .main-navigation ul ul {
            background-color: var(--base);
        }

        .separate-containers .inside-article,
        .separate-containers .comments-area,
        .separate-containers .page-header,
        .one-container .container,
        .separate-containers .paging-navigation,
        .inside-page-header {
            background-color: var(--base-3);
        }

        .entry-title a {
            color: var(--contrast);
        }

        .entry-title a:hover {
            color: var(--contrast-2);
        }

        .entry-meta {
            color: var(--contrast-2);
        }

        .sidebar .widget{background-color:var(--base-3);}.footer-widgets{background-color:var(--base-3);}.site-info{background-color:var(--base-3);}input[type="text"],
        input[type="email"],
        input[type="url"],
        input[type="password"],
        input[type="search"],
        input[type="tel"],
        input[type="number"],
        textarea,
        select {
            color: var(--contrast);
            background-color: var(--base-2);
            border-color: var(--base);
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="url"]:focus,
        input[type="password"]:focus,
        input[type="search"]:focus,
        input[type="tel"]:focus,
        input[type="number"]:focus,
        textarea:focus,
        select:focus {
            color: var(--contrast);
            background-color: var(--base-2);
            border-color: var(--contrast-3);
        }

        button,
        html input[type="button"],
        input[type="reset"],
        input[type="submit"],
        a.button,
        a.wp-block-button__link:not(.has-background) {
            color: #ffffff;
            background-color: #55555e;
        }

        button:hover,
        html input[type="button"]:hover,
        input[type="reset"]:hover,
        input[type="submit"]:hover,
        a.button:hover,
        button:focus,
        html input[type="button"]:focus,
        input[type="reset"]:focus,
        input[type="submit"]:focus,
        a.button:focus,
        a.wp-block-button__link:not(.has-background):active,
        a.wp-block-button__link:not(.has-background):focus,
        a.wp-block-button__link:not(.has-background):hover {
            color: #ffffff;
            background-color: #3f4047;
        }

        a.generate-back-to-top {
            background-color: rgba(0, 0, 0, 0.4);
            color: #ffffff;
        }

        a.generate-back-to-top:hover,
        a.generate-back-to-top:focus {
            background-color: rgba(0, 0, 0, 0.6);
            color: #ffffff;
        }

        @media (max-width:768px) {

            .main-navigation .menu-bar-item:hover>a,
            .main-navigation .menu-bar-item.sfHover>a {
                background: none;
                color: var(--contrast);
            }
        }

        .nav-below-header .main-navigation .inside-navigation.grid-container,
        .nav-above-header .main-navigation .inside-navigation.grid-container {
            padding: 0px 20px 0px 20px;
        }

        .site-main .wp-block-group__inner-container {
            padding: 40px;
        }

        .separate-containers .paging-navigation {
            padding-top: 20px;
            padding-bottom: 20px;
        }

        .entry-content .alignwide,
        body:not(.no-sidebar) .entry-content .alignfull {
            margin-left: -40px;
            width: calc(100% + 80px);
            max-width: calc(100% + 80px);
        }

        .rtl .menu-item-has-children .dropdown-menu-toggle {
            padding-left: 20px;
        }

        .rtl .main-navigation .main-nav ul li.menu-item-has-children>a {
            padding-right: 20px;
        }

        @media (max-width:768px) {

            .separate-containers .inside-article,
            .separate-containers .comments-area,
            .separate-containers .page-header,
            .separate-containers .paging-navigation,
            .one-container .site-content,
            .inside-page-header {
                padding: 30px;
            }

            .site-main .wp-block-group__inner-container {
                padding: 30px;
            }

            .inside-top-bar {
                padding-right: 30px;
                padding-left: 30px;
            }

            .inside-header {
                padding-right: 30px;
                padding-left: 30px;
            }

            .widget-area .widget {
                padding-top: 30px;
                padding-right: 30px;
                padding-bottom: 30px;
                padding-left: 30px;
            }

            .footer-widgets-container {
                padding-top: 30px;
                padding-right: 30px;
                padding-bottom: 30px;
                padding-left: 30px;
            }

            .inside-site-info {
                padding-right: 30px;
                padding-left: 30px;
            }

            .entry-content .alignwide,
            body:not(.no-sidebar) .entry-content .alignfull {
                margin-left: -30px;
                width: calc(100% + 60px);
                max-width: calc(100% + 60px);
            }

            .one-container .site-main .paging-navigation {
                margin-bottom: 20px;
            }
        }

        /* End cached CSS */
        .is-right-sidebar {
            width: 30%;
        }

        .is-left-sidebar {
            width: 30%;
        }

        .site-content .content-area {
            width: 70%;
        }

        @media (max-width:768px) {

            .main-navigation .menu-toggle,
            .sidebar-nav-mobile:not(#sticky-placeholder) {
                display: block;
            }

            .main-navigation ul,
            .gen-sidebar-nav,
            .main-navigation:not(.slideout-navigation):not(.toggled) .main-nav>ul,
            .has-inline-mobile-toggle #site-navigation .inside-navigation>*:not(.navigation-search):not(.main-nav) {
                display: none;
            }

            .nav-align-right .inside-navigation,
            .nav-align-center .inside-navigation {
                justify-content: space-between;
            }

            .has-inline-mobile-toggle .mobile-menu-control-wrapper {
                display: flex;
                flex-wrap: wrap;
            }

            .has-inline-mobile-toggle .inside-header {
                flex-direction: row;
                text-align: left;
                flex-wrap: wrap;
            }

            .has-inline-mobile-toggle .header-widget,
            .has-inline-mobile-toggle #site-navigation {
                flex-basis: 100%;
            }

            .nav-float-left .has-inline-mobile-toggle #site-navigation {
                order: 10;
            }
        }
    </style>
    <link rel='stylesheet' id='fancybox-3-css-css'
        href='//cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css?ver=6.1.1' media='all' />
    <link rel='stylesheet' id='unsemantic-style-css'
        href='{{ asset('assets/wp-content/themes/canhcam/assets/css/unsemantic-grid.min.css') }}' media='all' />
    <link rel='stylesheet' id='aos-css-css' href='{{ asset('assets/wp-content/themes/canhcam/assets/css/aos.css') }}'
        media='all' />
    <link rel='stylesheet' id='swiper-bundle.min-css'
        href='{{ asset('assets/wp-content/themes/canhcam/assets/css/swiper-bundle.min.css') }}' media='all' />
    <link rel='stylesheet' id='frontend-style-css'
        href='{{ asset('assets/wp-content/themes/canhcam/assets/css/frontend.css') }}' media='all' />
    <link rel='stylesheet' id='global-style-css'
        href='{{ asset('assets/wp-content/themes/canhcam/assets/css/global.css') }}' media='all' />
    <link rel='stylesheet' id='tuyen-dung-style-css'
        href='{{ asset('assets/wp-content/themes/canhcam/functions/tuyen-dung/frontend/tuyen-dung.css') }}'
        media='all' />
    <script src='{{ asset('assets/wp-includes/js/jquery/jquery.min.js') }}' id='jquery-core-js'></script>
    <script src='{{ asset('assets/wp-includes/js/jquery/jquery-migrate.min.js') }}' id='jquery-migrate-js'></script>
    <script id='wpml-cookie-js-extra'>
        var wpml_cookies = {
            "wp-wpml_current_language": {
                "value": "vi",
                "expires": 1,
                "path": "\/"
            }
        };
        var wpml_cookies = {
            "wp-wpml_current_language": {
                "value": "vi",
                "expires": 1,
                "path": "\/"
            }
        };
    </script>
    <script src='{{ asset('assets/wp-content/plugins/sitepress-multilingual-cms/res/js/cookies/language-cookie.js') }}'
        id='wpml-cookie-js'></script>
    <link rel="https://api.w.org/" href="{{ url('wp-json') }}" />
    <link rel="alternate" type="application/json" href="{{ url('wp-json/wp/v2/pages/14') }}" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="{{ url('xmlrpc.php?rsd') }}" />
    <meta name="generator" content="WordPress 6.1.1" />
    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '620744759795176');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=620744759795176&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->

    <link rel="icon" href="{{ asset('assets/wp-content/uploads/2022/12/cropped-New-Project-32x32.png') }}"
        sizes="32x32" />
    <link rel="icon" href="{{ asset('assets/wp-content/uploads/2022/12/cropped-New-Project-192x192.png') }}"
        sizes="192x192" />
    <link rel="apple-touch-icon"
        href="{{ asset('assets/wp-content/uploads/2022/12/cropped-New-Project-180x180.png') }}" />
    <meta name="msapplication-TileImage"
        content="{{ asset('assets/wp-content/uploads/2022/12/cropped-New-Project-270x270.png') }}" />
    <style id="wp-custom-css">
        /* Áp dụng cuộn ngang cho khối danh sách học sinh */
        .acf-field-repeater>.acf-input>.acf-repeater>table>tbody {
            display: flex !important;
            flex-direction: row;
            overflow-x: auto;
            gap: 24px;
            padding: 10px 0;
            scroll-behavior: smooth;
        }

        /* Mỗi học sinh là 1 hàng */
        .acf-field-repeater>.acf-input>.acf-repeater>table>tbody>tr {
            flex: 0 0 auto;
            width: 380px;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
