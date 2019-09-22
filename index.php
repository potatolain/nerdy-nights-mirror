<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A mirror of the go-to tutorial for starting with NES development.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Nerdy Nights Mirror</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->
    <style type="text/css">
      .mdl-layout__tab-panel:not(.is-active) {
        display: none;
      }
    </style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.deep_purple-pink.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
    </style>
  </head>
  <body class="mdl-demo mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">
    <div id="top"></div>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header mdl-layout__header--scroll mdl-color--primary">
        <div class="mdl-layout--large-screen-only mdl-layout__header-row">
        </div>
        <div class="mdl-layout--large-screen-only mdl-layout__header-row">
          <h3>Nerdy Nights Mirror</h3>
        </div>
        <div class="mdl-layout--large-screen-only mdl-layout__header-row">
        </div>
        <div class="mdl-layout__tab-bar mdl-js-ripple-effect mdl-color--primary-dark">
          <a href="#overview" class="mdl-layout__tab is-active">Overview</a>
          <a href="#main_tutorial" class="mdl-layout__tab">Main Tutorial Series</a>
          <a href="#advanced_tutorial" class="mdl-layout__tab">Advanced Tutorials</a>
          <a href="#audio_tutorial" class="mdl-layout__tab">Audio tutorial</a>
        </div>
      </header>
      <main class="mdl-layout__content">
      <?php 
          $data = file_get_contents('scraper/pages/lookup.json');
          $TUTORIAL_MANIFEST = json_decode($data, true);
      ?>

        <?php foreach (glob('./pages/*.php') as $file) { include $file; } ?>

        <footer class="mdl-mega-footer">
          <div class="mdl-mega-footer--bottom-section">
            <div class="mdl-logo">
              Adapted in 2019 by Christopher Parker, aka <a href="https://twitter.com/cppchriscpp">cppchriscpp</a>
            </div>
            <ul class="mdl-mega-footer--link-list">
              <li><a href="http://nintendoage.com/pub/faq/NA/index.html?load=nerdy_nights_out.html">Original Tutorial Series</a></li>
            </ul>
          </div>
        </footer>
      </main>
    </div>
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="index.js"></script>
  </body>
</html>
