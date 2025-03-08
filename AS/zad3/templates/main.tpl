<!DOCTYPE HTML>
<html>
    <head>
        <title>{block name='title'}Kalkulator Kredytu{/block}</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="{$app_url}/templates/spectral/assets/css/main.css" />
        <noscript><link rel="stylesheet" href="{$app_url}/templates/spectral/assets/css/noscript.css" /></noscript>
    </head>
    <body class="is-preload">

        <div id="page-wrapper">

            {block name='header'}
            <header id="header" class="alt">
                <h1><a href="{$app_url}">Kalkulator Kredytu</a></h1>
                <nav>
                    <ul>
                        <li><a href="{$app_url}/app/security/login.php" class="button small">Zaloguj</a></li>
                        <li><a href="{$app_url}/app/security/logout.php" class="button small">Wyloguj</a></li>
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
                </ul>
                <ul class="copyright">
                    <li>&copy; Błażej Konsek</li>
                    <li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
                </ul>
            </footer>
            {/block}

        </div>

        <script src="{$app_url}/templates/spectral/assets/js/jquery.min.js"></script>
        <script src="{$app_url}/templates/spectral/assets/js/browser.min.js"></script>
        <script src="{$app_url}/templates/spectral/assets/js/breakpoints.min.js"></script>
        <script src="{$app_url}/templates/spectral/assets/js/util.js"></script>
        <script src="{$app_url}/templates/spectral/assets/js/main.js"></script>

    </body>
</html>
