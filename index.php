<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" media="all"  href="assets/css/cascade/production/build-full.min.css" />
        <!--[if lt IE 8]><link rel="stylesheet" href="assets/css/cascade/production/icons-ie7.min.css"><![endif]-->
        <!--[if lt IE 9]><script src="assets/js/shim/iehtmlshiv.js"></script><![endif]-->
        <title>PHPLeuven logo</title>
        <meta name="description" content="CSS based logo for PHPLeuven.">
        <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style type="text/css">
            @font-face {
                font-family: "Flaticon";
                src: url("assets/css/cascade/font/flaticon.eot");
                src: url("assets/css/cascade/font/flaticon.eot#iefix") format("embedded-opentype"),
                    url("assets/css/cascade/font/flaticon.woff") format("woff"),
                    url("assets/css/cascade/font/flaticon.ttf") format("truetype"),
                    url("assets/css/cascade/font/flaticon.svg") format("svg");
                font-weight: normal;
                font-style: normal;
            }

            .icon {
                position: absolute;
            }

            .icon:before, .icon:after {   
                font-family: Flaticon;
                font-size: 20px;
                font-style: normal;
                margin-left: 20px;
            }

            .computer:before {
                content: "\e000";
                position: absolute;
                top: -.018em;
                left:1.4em;
                font-size:3em;
                color: #4F5B93;
                text-shadow: -1px 0 #8892BF, 0 1px #8892BF, 1px 0 #8892BF, 0 -1px #8892BF;
            }
            .elephant:before {
                content: "\e001";
                position: absolute;
                top: -.3em;
                left:1.4em;
                font-size:3em;
                color: #4F5B93;
                text-shadow: -1px 0 #8892BF, 0 1px #8892BF, 1px 0 #8892BF, 0 -1px #8892BF;
            }
            .elephant-head:before {
                content: "\e002";
                position: absolute;
                top: -.018em;
                left:1.4em;
                font-size:3em;
                color: #4F5B93;
                text-shadow: -1px 0 #8892BF, 0 1px #8892BF, 1px 0 #8892BF, 0 -1px #8892BF;
            }

            .logophpleuven {
                background: #8892BF;
                color: #fff !important;
                float: left;
                padding: .4em;
                font-size: 3em;
                line-height: 1em;
                border-color: #4F5B93;
                border-width: 0 0 .1em 0;
            }

            .php {
                line-height: 1em;
                margin: 0 0 0 .05em;
            }

            .tleuven {
                font-weight: 900;
                font-size: 1.9em;
                line-height: .8em;
                z-index: 5;
                position: relative;
            }

            hr {
                margin: 30px 0;
            }

            h2 {
                margin: 0 0 10px 0;
            }

            img {
                margin: 0 0 10px 0;
                max-width: 100%;
            }

        </style>
    </head>
    <body>
        <div class="site-header">
            <div class="site-center">
                <div class="cell">
                    <h1>Logo design for the PHPLeuven community</h1>
                </div>
            </div>
        </div>
        <div class="site-body">
            <div class="site-center">
                <div class="col">
                    <div class="cell">
                        <h2>
                            Logo proposal :
                        </h2>
                        <div class="col">
                            <div class="logophpleuven">
                                <div class="php">PHP</div>
                                <div class="tleuven">LEUVEN</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cell">
                        <h2>
                            Variation 1 :
                        </h2>
                        <div class="col">
                            <div class="logophpleuven">
                                <i class="icon computer"></i>
                                <div class="php">PHP</div>
                                <div class="tleuven">LEUVEN</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cell">
                        <h2>
                            Variation 2 :
                        </h2>
                        <div class="col">
                            <div class="logophpleuven">
                                <i class="icon elephant"></i>
                                <div class="php">PHP</div>
                                <div class="tleuven">LEUVEN</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cell">
                        <h2>
                            Variation 3 :
                        </h2>
                        <div class="col">
                            <div class="logophpleuven">
                                <i class="icon elephant-head"></i>
                                <div class="php">PHP</div>
                                <div class="tleuven">LEUVEN</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cell">
                        The font used to display the icon was generated by <a href="http://www.flaticon.com">flaticon.com</a>
                        under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY</a>.<br/>
                        The author is: <a href="http://www.freepik.com">Freepik</a>.
                        <hr />
                    </div>
                </div>
                <div class="col">
                    <div class="cell">
                        <h2>
                            Inspired by :
                        </h2>

                        <div class="col">
                            <img src="http://wet.kuleuven.be/internationalisering/nieuwsbrief/editie9/kuleuven.jpg/image_preview" />
                        </div>

                        <div class="col">
                            <img src="assets/img/leuven.png" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-footer">
            <div class="site-center">
                <div class="cell">
                    &copy; 2015, John Slegers
                </div>
            </div>
        </div>
        <script src="assets/js/app.js"></script>
    </body>
</html>
