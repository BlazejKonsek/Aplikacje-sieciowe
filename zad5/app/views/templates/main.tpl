<!DOCTYPE HTML>
<html>
<head>
    <title>{block name='title'}{$page_title|default:"Kalkulator Kredytowy"}{/block}</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{$conf->app_url}/templates/spectral/assets/css/main.css" />
    <noscript><link rel="stylesheet" href="{$conf->app_url}/templates/spectral/assets/css/noscript.css" /></noscript>
</head>
<body class="is-preload">

    <div id="page-wrapper">

        {block name='header'}
        <header id="header">
            <h1><a href="{$conf->app_url}">{$page_title|default:"Kalkulator Kredytu"}</a></h1>
            <nav>
                <ul>
                    {if isset($role) && $role neq ''}
                        <li>Witaj, {$role}</li>
                        <li><a href="{$conf->action_url}logout" class="button">Wyloguj</a></li>
                    {else}
                        <li><a href="{$conf->action_url}login" class="button">Zaloguj</a></li>
                    {/if}
                </ul>
            </nav>
        </header>
        {/block}

        <article id="main">
            {block name='content'}{/block}
        </article>

        {block name='footer'}
        <footer id="footer">
            <ul class="icons">
                <!-- Add your social icons here if needed -->
            </ul>
            <ul class="copyright">
                <li>&copy; Błażej Konsek</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
            </ul>
        </footer>
        {/block}

    </div>

    <!-- Scripts -->
    <script src="{$conf->app_url}/templates/spectral/assets/js/jquery.min.js"></script>
    <script src="{$conf->app_url}/templates/spectral/assets/js/browser.min.js"></script>
    <script src="{$conf->app_url}/templates/spectral/assets/js/breakpoints.min.js"></script>
    <script src="{$conf->app_url}/templates/spectral/assets/js/util.js"></script>
    <script src="{$conf->app_url}/templates/spectral/assets/js/main.js"></script>

</body>
</html>
