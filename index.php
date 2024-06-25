<!--!DOCTYPE html-->
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Clare Scriven Music</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Stylesheets-->
        <link type="text/css" rel="stylesheet" media="all" href="webroot/css/bootstrap.min.css">
        <link href="node_modules/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Alfa Slab One' rel='stylesheet'>
        <link type="text/css" rel="stylesheet" media="all" href="webroot/css/clare-music.css">

        <script src="webroot/js/clare-scriven.js"></script>
    </head>

    <body>
        <div class="mobile-header">
            <div class="mobile-header-container">
                <div class="mobile-heading-container">
                    <h1 class="heading">CLARE SCRIVEN</h1>
                </div>
                <div class="mobile-menu-dropdown">
                    <button id="mobile-nav-button" type="button" class="btn mobile-list-button" onClick="showMobileNavList()">
                        <i class="bi bi-caret-down-fill mobile-list-icon"></i>
                    </button>
                </div>
            </div>
            <div id="mobile-nav" class="header-nav hide-mobile-list">
                <ul>
                    <li><a href="#section-home" onClick="closeMobileNavList()">Home</a></li>
                    <li><a href="#section-bio" onClick="closeMobileNavList()">Bio</a></li>
                    <li><a href="#section-music" onClick="closeMobileNavList()">Music</a></li>
                    <li><a href="#section-contact" onClick="closeMobileNavList()">Contact</a></li>
                </ul>
            </div>
        </div>

        <div class="main-header">
            <div class="main-heading-container">
                <h1 class="heading">CLARE SCRIVEN</h1>
            </div>
            <div class="main-nav">
                <ul>
                    <li><a href="#section-home">Home</a></li>
                    <li><a href="#section-bio">Bio</a></li>
                    <li><a href="#section-music">Music</a></li>
                    <li><a href="#section-contact">Contact</a></li>
                </ul>
            </div>
        </div>

        <div class="row main-section">
            <div id="section-home" class="section">
                <div class="inside-section">
                    <div class="home-container">
                        <div class="content-container">
                            <div class="content-popup">
                                <div class="content-header">
                                    <div class="close-button">x</div>
                                </div>
                                <div class="content-window">
                                    <p class="home-content col-12">
                                        Clare Scriven is a pop singer, songwriter, and producer from County Cork, Ireland.
                                        Clare’s music is a fusion of synth-pop, nu-disco,
                                        and future bass that intertwines profound lyricism and evocative imagery.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="content-container image-container">
                            <img src="webroot/img/guitars.jpg" alt="guitars">
                        </div>
                    </div>

                    <div id="demo-audio" class="audio-bubble">
                        <!-- here is where the demo audio goes. Created from in the js file -->
                    </div>
                </div>
            </div>

            <div id="section-bio" class="section bio-section">
                <div class="inside-section">
                    <h1>Bio</h1>
                    <div class="bio-container">
                        <div class="bio-child-container bio-child-first-container">
                            <div class="content-popup">
                                <div class="content-header">
                                    <div class="close-button">x</div>
                                </div>
                                <div class="content-window">
                                    <p class="bio-content col-12">
                                        Clare Scriven is a singer, songwriter, and producer based in Cork City.
                                        She started performing at age ten in The Everyman Palace Theatre and The Cork Opera House with the stage school Studio Wolfe.
                                        Clare attended The Academy of Popular Music at age sixteen where she performed gigs in venues such as Cyprus Avenue and The Oliver Plunkett.
                                        She attended the MTU Cork School of Music where she completed a BA in Popular Music with Voice (Hons),
                                        and an MA in Music Performance. Her current musical style is largely influenced by pop-synth, nu-disco,
                                        and future bass, however she has studied many different styles of singing such as musical theatre,
                                        blues, rock, funk, and country.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="bio-child-container bio-image-roll-container">
                            <div class="bio-image-box bio-image-box-taller">
                                <img src="webroot/img/angel.jpg" alt="angel">
                            </div>
                            <div class="bio-camera-roll">
                                <img src="webroot/img/apartments.jpg" alt="apartments">
                                <img src="webroot/img/window.jpg" alt="window">
                                <img src="webroot/img/bears.jpg" alt="bears">
                            </div>
                        </div>
                        <div class="bio-child-container bio-image-container">
                            <div class="bio-image-box">
                                <img src="webroot/img/excel.jpg" alt="excel">
                            </div>
                            <div class="bio-image-box hovered-image-box">
                                <img src="webroot/img/cycling.jpg" alt="cycling">
                            </div>
                        </div>
                        <div class="bio-child-container">
                            <div class="content-popup">
                                <div class="content-header">
                                    <div class="close-button">x</div>
                                </div>
                                <div class="content-window">
                                    <p class="bio-content col-12">
                                        Clare has performed her original music and arrangements in the MTU Cork School of Music as part of her MA Recitals.
                                        She is currently on her journey to releasing a debut single under the artist project name “Jainey”.
                                        With an EP scheduled to follow, this music project will be a reflection of Clare’s experience
                                        in society and the current climate of the world.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="section-music" class="section music-section">
                <div class="inside-section">
                    <h1>Music</h1>

                    <div id="audio-list" class="audio-section audio-bubble">
                        <!-- here is where the song list goes. Created from in the js file -->
                    </div>

                    <div class="video-section">
                        <div class="video-container">
                            <iframe
                                class="video-frame"
                                src="https://www.youtube.com/embed/Y8EPs0D7siE?si=FbHFE-fTq5de1RzJ"
                                title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen
                            >
                            </iframe>
                        </div>
                        <div class="video-container">
                            <iframe
                                class="video-frame"
                                src="https://www.youtube.com/embed/JKrDdsgXuso?si=8fkD7DcqUavwyIO7"
                                title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen
                                >
                                </iframe>
                        </div>
                        <div class="video-container">
                            <iframe
                                class="video-frame"
                                src="https://www.youtube.com/embed/uMCv9djEm1k?si=xvTex9C8a_oiMCDO"
                                title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen
                                >
                                </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row footer" id="section-contact">
            <h1 class="contact-header">Contact</h1>

            <div class="contact-nav">
                <ul>
                    <li>
                        <a href="mailto:clarescrivenmusic@gmail.com">
                            <i class="bi bi-envelope"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/clare_sinead?igsh=ODA1NTc5OTg5Nw%3D%3D&utm_source=qr">
                            <i class="bi bi-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.tiktok.com/@clur_s?_t=8il7xa2eDYG&_r=1">
                            <i class="bi bi-tiktok"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://youtube.com/@clarescriven2815?si=9O3qXrU50jSYPJSL">
                            <i class="bi bi-youtube"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </body>
    <script>
        displayAllAudios()
    </script>
</html>