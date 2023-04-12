<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="DE">
    <head>
        <title>Rebecca ♥ Max</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
        <link rel="stylesheet" href="assets/css/main.css"/>
        <noscript>
            <link rel="stylesheet" href="assets/css/noscript.css"/>
        </noscript>
    </head>
    <body class="index is-preload">
        <div id="page-wrapper">

            <!-- Header -->
            <header id="header" class="alt">
                <h1 id="logo"><a href="index.html">Twenty <span>by HTML5 UP</span></a></h1>
                <nav id="nav">
                    <ul>
                        <li class="current"><a href="index.html">Start</a></li>
                    </ul>
                </nav>
            </header>

            <!-- Banner -->
            <section id="banner">

                <!--
                    ".inner" is set up as an inline-block so it automatically expands
                    in both directions to fit whatever's inside it. This means it won't
                    automatically wrap lines, so be sure to use line breaks where
                    appropriate (<br />).
                -->
                <div class="inner">

                    <header>
                        <h2>REBECCA ♥ Max</h2>
                    </header>
                    <p>Dies ist das Familienduellquiz für
                        <br/>
                        die Hochzeit von Rebecca und Max
                        <br/>
                        am 03. Juni 2023.</p>

                </div>

            </section>

            <?php

            $response = array(
                $_POST["question1"],
                $_POST["question2"],
                $_POST["question3"],
                $_POST["question4"],
                $_POST["question5"],
                $_POST["question6"],
                $_POST["question7"],
            );
            $response_string =
                "\n" .
                $_POST["name"] . "," .
                $response[0] . "," .
                $response[1] . "," .
                $response[2] . "," .
                $response[3] . "," .
                $response[4] . "," .
                $response[5] . "," .
                $response[6];

            $myfile = fopen("responses.csv", "a");
            fwrite($myfile, $response_string);
            ?>

            <!-- Main -->
            <article id="main" style="background-color:#83d3c9; color:white">

                <header class="special container">
                    <span class="icon solid fa-chart-bar"></span>
                    <h2>Vielen Dank!</h2>
                    <p>
                        Deine Antworten wurden gespeichert!
                        <br/>
                    </p>
                </header>
            </article>


            <!-- Footer -->
            <footer id="footer">

                <ul class="icons">
                    <li><a href="https://www.github.com/sthagel/familienduell"
                           class="icon brands circle fa-github"><span
                            class="label">Github</span></a></li>
                </ul>

                <ul class="copyright">
                    <li>&copy; 2023 Stephan Hagel & Die Pubcrew</li>
                    <li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
                </ul>

            </footer>

        </div>

        <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.dropotron.min.js"></script>
        <script src="assets/js/jquery.scrolly.min.js"></script>
        <script src="assets/js/jquery.scrollex.min.js"></script>
        <script src="assets/js/browser.min.js"></script>
        <script src="assets/js/breakpoints.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>

    </body>
</html>
