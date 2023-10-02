<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * Template Name: Home
 * @package blueprint
 */

get_header();
?>

  <div id="mainContentContainer">
    <div id="footer">
      <div id="mailerContainer" class="hidden">
        <div id="mailerTitle">
          TICKETS COMING SOON  SIGN UP
        </div>
        <button id="mailerClose" onclick="closeMailer()">X</button>
        <form id="emailForm">
          <input type="text" id="emailAddress" placeholder="YOUR EMAIL ADDRESS" name="emailAddress" />
          <input type="submit" value="↵" id="submitEmail" />
        </form>
      </div>
      <div id="bottomNav">
        <span>
          <a href="https://www.facebook.com/simplethingsfestival">
            <img src="/zd24/simple-things-2024/assets/images/facebook.svg" />
          </a>
        </span>
        <span>
          <a href="https://www.instagram.com/simplethingsuk">
            <img src="/zd24/simple-things-2024/assets/images/instagram.svg" />
          </a>
        </span>
        <span>
          <a href="https://twitter.com/simplethingsuk">
            <img src="/zd24/simple-things-2024/assets/images/twitter.svg" />
          </a>
        </span>
        <span>
          <a href="mailto:enquiries@teamlove.org">
            <img src="/zd24/simple-things-2024/assets/images/mail.svg" />
          </a>
        </span>
      </div>
    </div>


    <div id="titleContainer">
      <video src="/zd24/simple-things-2024/assets/videos/Video-Header-1.mp4" muted autoplay loop
        poster="/zd24/simple-things-2024/assets/videos/Video-Header-1_Poster.jpeg"></video>
      <div id="title">
        <div>SIMPLE</div>
        <div>THINGS</div>
        <div>FESTIVAL</div>
        <div>2024</div>

      </div>
      <a href="https://crackmagazine.typeform.com/simplethings24">
        <div class="simpleButton yellow" id="titleButton">
          SIGN UP FOR FESTIVAL UPDATES 
        </div>
      </a>
    </div>
    <div id="mainContent">
      <div class="dateMarquee">
        <div class="marqueeContainer">
          <span class="marqueeContent">24.02.2024 • BRISTOL • 24.02.2024 • BRISTOL • 24.02.2024 • BRISTOL • 24.02.2024 •
            BRISTOL • 24.02.2024 • BRISTOL •&nbsp;</span>
          <span class="marqueeContent">24.02.2024 • BRISTOL • 24.02.2024 • BRISTOL • 24.02.2024 • BRISTOL • 24.02.2024 •
            BRISTOL • 24.02.2024 • BRISTOL •&nbsp;</span>
          <!-- <span class="marqueeContent">EARLY 2024 • BRISTOL • EARLY 2024 • BRISTOL • EARLY 2024 • BRISTOL • EARLY 2024 •
            BRISTOL • EARLY 2024 • BRISTOL •&nbsp;</span>
          <span class="marqueeContent">EARLY 2024 • BRISTOL • EARLY 2024 • BRISTOL • EARLY 2024 • BRISTOL • EARLY 2024 •
            BRISTOL • EARLY 2024 • BRISTOL •&nbsp;</span> -->
        </div>
      </div>
      <div class="mainContentBlock">
        <div class="mainContentTextL">
          SIMPLE THINGS IS BACK IN EARLY 2024. WE’RE MARKING THE FESTIVAL’S TENTH EDITION WITH AN ALL-DAY, ALL-NIGHT
          MULTI-VENUE CELEBRATION OF FORWARD-FACING MUSIC THROUGHOUT BRISTOL CITY CENTRE.
        </div>
        <div id="topTicketInfo">
          <div class="mainContentTextM price">
            TICKETS COMING SOON
          </div>
          <div class="mainContentTextM">
            JOIN OUR MAILING LIST FOR FESTIVAL UPDATES AND FIRST ACCESS TO TICKETS
          </div>
          <div class="ticketButtonContainer">
            <a href="https://crackmagazine.typeform.com/simplethings24">
              <span class="simpleButton">SIGN UP</span>
            </a>
          </div>
        </div>
        <div class="sideImages">
          <img src="/zd24/simple-things-2024/assets/images/top3Images/1.jpeg" />
          <img src="/zd24/simple-things-2024/assets/images/top3Images/2.jpeg" />
          <img src="/zd24/simple-things-2024/assets/images/top3Images/3.jpg" />
        </div>

      </div>
      <div class="mainContentBlock yellow">
        <div class="simpleButton black" id="highlights">
          2019 HIGHLIGHTS
        </div>
        <video src="/zd24/simple-things-2024/assets/videos/ST-2019.mp4" poster="/zd24/simple-things-2024/assets/videos/Video-Header-1_Poster.jpeg" preload="metadata"
          controls></video>
        <div class="simpleButton black">
          PRESS
        </div>
        <div class="quotesContainer">
          <div class="glide">
            <div class="glide__track" data-glide-el="track">
              <ul class="glide__slides">
                <li class="glide__slide">
                  <div class="quote">
                    “MASTERFULLY CURATED AND DELIVERED"
                  </div>
                  <div class="quoteSource">
                    - THE GUARDIAN
                  </div>
                </li>
                <li class="glide__slide">
                  <div class="quote">
                    “SIMPLE THINGS IS MARKING ITSELF OUT AS THE UK'S ANSWER TO SÓNAR OR UNSOUND"
                  </div>
                  <div class="quoteSource">
                    - MIXMAG
                  </div>
                </li>
              </ul>
            </div>
            <div class="glide__bullets" data-glide-el="controls[nav]">
              <button class="glide__bullet" data-glide-dir="=0"></button>
              <button class="glide__bullet" data-glide-dir="=1"></button>
            </div>
          </div>
        </div>
      </div>
      <div class="mainContentBlock white borderTopBlack">
        <div class="previousEditionsTitle">
          PREVIOUS EDITIONS
        </div>
        <div class="previousEditionsContainer">
          <div class="previousEditionLabels">



            <svg id="overlayTop" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="58 40 370 28.25">
              <defs>
                <style>
                  .cls-1 {
                    fill: #fff;
                    stroke: #000;
                    stroke-miterlimit: 10;
                    stroke-width: 0.3%;
                    cursor: pointer;
                  }

                  .title {
                    cursor: pointer;
                    font-size: 20px;
                    text-anchor: middle;
                    fill: #000;
                  }

                  @media only screen and (min-width: 600px) {
                    .title {
                      font-size: 12px;
                    }
                  }
                </style>
              </defs>
              <path data-name="Path 6" class="cls-1"
                d="M54.59,67.32H336.5a7.46,7.46,0,0,0,6.7-4.13c3.23-6.55,6.67-17.71,18.94-17.71h67.45V630.59h-375Z"
                onclick="setActivePreviousEdition(2015)" id="tab2015" />
              <text x="383" y="61" class="title" onclick="setActivePreviousEdition(2015)" id="title2015">2015</text>
              <path data-name="Path 7" class="cls-1"
                d="M413.53,67.32H355.41c-4.91-3.39-6.08-21.84-21.86-21.84H280c-7.7,0-15.64,4.05-17.37,17.76h0a4.08,4.08,0,0,1-4.08,4.08h-204V630.59h375V67.32Z"
                onclick="setActivePreviousEdition(2016)" id="tab2016" />
              <text x="305" y="61" class="title" onclick="setActivePreviousEdition(2016)" id="title2016">2016</text>
              <path data-name="Path 8" class="cls-1"
                d="M413.53,67.32H283.38c-4.91-3.39-6.08-21.84-21.85-21.84H208c-7.7,0-15.65,4.05-17.38,17.76h0a4.08,4.08,0,0,1-4.08,4.08h-132V630.59h375V67.32Z"
                onclick="setActivePreviousEdition(2017)" id="tab2017" />
              <text x="234" y="61" class="title" onclick="setActivePreviousEdition(2017)" id="title2017">2017</text>
              <path data-name="Path 9" class="cls-1"
                d="M413.53,67.32H213.63c-4.9-3.39-6.07-21.84-21.84-21.84H138.28c-7.7,0-15.65,4.05-17.38,17.76h0a4.08,4.08,0,0,1-4.08,4.08H54.59V630.59h375V67.32Z"
                onclick="setActivePreviousEdition(2018)" id="tab2018" />
              <text x="164" y="61" class="title" onclick="setActivePreviousEdition(2018)" id="title2018">2018</text>
              <path data-name="Path 372" class="cls-1"
                d="M431.76,67.6h-289c-5-3.39-6.15-21.83-22.11-21.83H52.42V630.31H431.76Z"
                onclick="setActivePreviousEdition(2019)" id="tab2019" />
              <text x="90" y="61" class="title" onclick="setActivePreviousEdition(2019)" id="title2019">2019</text>





            </svg>
          </div>
          <div class=" previousEditions">

            <div class="previousEdition" id="2015">
              <img class="previousEditionPoster" src="/assets/images/previousPosters/2015.jpg" />
              <div class="previousEditionContent">
                <div class="previousEditionStats">
                  <div>DATE: 24th October</div>
                </div>
                <div>HIGHLIGHTS:</div>
                <div>Skepta & JME, Savages and Battles top a genre-defying bill. From the legendary Lee Scratch Perry to
                  PC music visionaire Danny L Harle, to Dean Blunt, Beak> and Helena Hauff, Simple Things provided a
                  treasure map of artists to explore across Bristol.</div>
              </div>
            </div>
            <div class="previousEdition" id="2016">
              <img class="previousEditionPoster" src="/assets/images/previousPosters/2016.jpg" />
              <div class="previousEditionContent">
                <div class="previousEditionStats">
                  <div>DATE: 22nd October</div>
                </div>
                <div>HIGHLIGHTS:</div>
                <div>2016 saw Warpaint, Kano, and Death Grips headline, with the night in the capable hands of Nina
                  Kraviz and Ben UFO. Plus, an eclectic selection of sounds from the likes of Squarepusher, ABRA, Twin
                  Peaks, AJ Tracey, and Jessy Lanza.</div>
              </div>
            </div>
            <div class="previousEdition" id="2017">
              <img class="previousEditionPoster" src="/assets/images/previousPosters/2017.jpg" />
              <div class="previousEditionContent">
                <div class="previousEditionStats">
                  <div>DATE: 20-21st October</div>
                </div>
                <div>HIGHLIGHTS:</div>
                <div>A special opening concert from Metronomy. Daphni, Clark and Wild Beasts topped the bill with
                  highlights from Idles, Omar Souleyman and Kelly Lee Owens. </div>

              </div>
            </div>
            <div class="previousEdition" id="2018">
              <img class="previousEditionPoster" src="/assets/images/previousPosters/2018.jpg" />
              <div class="previousEditionContent">
                <div class="previousEditionStats">
                  <div>DATE: 20th October</div>
                </div>
                <div>HIGHLIGHTS:</div>
                <div>Splicing the schedule into separate day and night programmes for the first time, we bought rising
                  stars like Fontaines D.C., Her’s, Iglooghost and Black Midi to Bristol, alongside DJ royalty Helena
                  Hauff and Eris Drew.</div>

              </div>
            </div>
            <div class="previousEdition active" id="2019">
              <img class="previousEditionPoster" src="/assets/images/previousPosters/2019.jpg" />
              <div class="previousEditionContent">
                <div class="previousEditionStats">
                  <div>DATE: 19th October</div>
                </div>
                <div>HIGHLIGHTS:</div>
                <div>Simple Things Festival’s most ambitious edition yet, combining our expansive musical programme with
                  UK premieres, art installations, and next-gen AV technology.</div>

              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="mainContentBlock">
        <div class="mainContentBlock" id="bottomTicketInfo">
          <div class="mainContentBlockText">
            <div class="mainContentTextM">
              TICKET INFO:
            </div>
            <div class="mainContentTextM price">
              Tickets coming soon
            </div>
          </div>
          <div class="mainContentBlockText">
            <div class="mainContentTextM">
              JOIN OUR MAILING LIST FOR FESTIVAL UPDATES
            </div>
            <div class="ticketButtonContainer">
              <a href="https://crackmagazine.typeform.com/simplethings24">
                <span class="simpleButton">SIGN UP</span>
              </a>
            </div>
          </div>
        </div>
        <div class="dateMarquee" id="prevPhotoGliderMarquee">
          <div class="marqueeContainer">
            <span class="marqueeContent">24.02.2024 • BRISTOL • 24.02.2024 • BRISTOL • 24.02.2024 • BRISTOL • 24.02.2024
              • BRISTOL • 24.02.2024 • BRISTOL •&nbsp;</span>
            <span class="marqueeContent">24.02.2024 • BRISTOL • 24.02.2024 • BRISTOL • 24.02.2024 • BRISTOL • 24.02.2024
              • BRISTOL • 24.02.2024 • BRISTOL •&nbsp;</span>
            <!-- <span class="marqueeContent">EARLY 2024 • BRISTOL • EARLY 2024 • BRISTOL • EARLY 2024 • BRISTOL • EARLY 2024
              •
              BRISTOL • EARLY 2024 • BRISTOL •&nbsp;</span>
            <span class="marqueeContent">EARLY 2024 • BRISTOL • EARLY 2024 • BRISTOL • EARLY 2024 • BRISTOL • EARLY 2024
              •
              BRISTOL • EARLY 2024 • BRISTOL •&nbsp;</span> -->
          </div>
        </div>
        <div class="gliderContainer photoGlider">
          <div class="glide">
            <div class="glide__track" data-glide-el="track">
              <ul class="glide__slides">
                <li class="glide__slide"><img class="carouselImg" src="/assets/images/bottomCarousel/1.jpg" /></li>
                <li class="glide__slide"><img class="carouselImg" src="/assets/images/bottomCarousel/2.jpg" /></li>
                <li class="glide__slide"><img class="carouselImg" src="/assets/images/bottomCarousel/3.jpg" /></li>
                <li class="glide__slide"><img class="carouselImg" src="/assets/images/bottomCarousel/4.jpg" /></li>
                <li class="glide__slide"><img class="carouselImg" src="/assets/images/bottomCarousel/5.jpg" /></li>
                <li class="glide__slide"><img class="carouselImg" src="/assets/images/bottomCarousel/6.jpg" /></li>
                <li class="glide__slide"><img class="carouselImg" src="/assets/images/bottomCarousel/7.jpg" /></li>
                <li class="glide__slide"><img class="carouselImg" src="/assets/images/bottomCarousel/8.jpg" /></li>
                <li class="glide__slide"><img class="carouselImg" src="/assets/images/bottomCarousel/9.jpg" /></li>
              </ul>
            </div>
            <div class="glide__bullets" data-glide-el="controls[nav]">
              <button class="glide__bullet" data-glide-dir="=0"></button>
              <button class="glide__bullet" data-glide-dir="=1"></button>
              <button class="glide__bullet" data-glide-dir="=2"></button>
              <button class="glide__bullet" data-glide-dir="=3"></button>
              <button class="glide__bullet" data-glide-dir="=4"></button>
              <button class="glide__bullet" data-glide-dir="=5"></button>
              <button class="glide__bullet" data-glide-dir="=6"></button>
              <button class="glide__bullet" data-glide-dir="=7"></button>
              <button class="glide__bullet" data-glide-dir="=8"></button>
            </div>
          </div>
        </div>
      </div>

      <div class="dateMarquee" id="postPhotoGliderMarquee">
        <div class="marqueeContainer">
          <span class="marqueeContent">24.02.2024 • BRISTOL • 24.02.2024 • BRISTOL • 24.02.2024 • BRISTOL • 24.02.2024 •
            BRISTOL • 24.02.2024 • BRISTOL •&nbsp;</span>
          <span class="marqueeContent">24.02.2024 • BRISTOL • 24.02.2024 • BRISTOL • 24.02.2024 • BRISTOL • 24.02.2024 •
            BRISTOL • 24.02.2024 • BRISTOL •&nbsp;</span>
          <span class="marqueeContent">EARLY 2024 • BRISTOL • EARLY 2024 • BRISTOL • EARLY 2024 • BRISTOL • EARLY 2024 •
            <!-- BRISTOL • EARLY 2024 • BRISTOL •&nbsp;</span>
          <span class="marqueeContent">EARLY 2024 • BRISTOL • EARLY 2024 • BRISTOL • EARLY 2024 • BRISTOL • EARLY 2024 •
            BRISTOL • EARLY 2024 • BRISTOL •&nbsp;</span> -->
        </div>
      </div>






      <div class="mainContentBlock">
        <div class="mainContentBlockText topMargin">
          <div class="mainContentTextM center">
            A FESTIVAL BY CRACK MAGAZINE AND TEAM LOVE
          </div>
          <div class="sponsorLogos">
            <a href="https://crackmagazine.net/">
              <svg class="sponsorLogo" overflow="hidden" version="1.1" id="Layer_1" fill="#ffffff"
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="0 0 725.443 160.162" enable-background="new 0 0 725.443 160.162" xml:space="preserve">
                <polygon stroke-miterlimit="10" points="446.154,0 423.644,22.132 423.644,138.379 
              445.278,160.162 508.961,160.162 530.592,138.354 530.592,86.407 482.721,86.548 482.721,117.474 473.154,117.467 473.154,42.641 
              482.721,42.646 482.721,74.661 530.592,74.661 530.592,21.747 508.783,0 "></polygon>
                <polygon stroke-miterlimit="10" points="81.706,0 59.196,22.132 59.196,138.379 80.83,160.162 
              144.512,160.162 166.145,138.354 166.145,86.407 118.271,86.548 118.271,117.474 108.706,117.467 108.706,42.641 118.271,42.646 
              118.271,74.661 166.145,74.661 166.145,21.747 144.336,0 "></polygon>
                <path stroke-miterlimit="10"
                  d="M223.471,74.708V42.982l11.453,0.038v31.727L223.471,74.708z
              M174.896,0v160.162h49.117v-59.267h9.707v59.267h51.091V95.854l-10.123-9.758l10.646-10.46V24.222L260.558,0H174.896z"></path>
                <g>
                  <path stroke-miterlimit="10" d="M382.594-0.065C385.364,11.674,423,160.162,423,160.162h-44.937
                l-5.912-23.745h-28.688l-6.036,23.745l-45.068-0.069L333.007-0.065H382.594z M357.835,79.573l-5.573,21.242l10.875-0.061
                L357.835,79.573z"></path>
                </g>
                <polygon stroke-miterlimit="10"
                  points="608.66,-0.065 587.104,42.646 587.104,0 538.807,0 
              538.807,160.162 587.104,160.162 587.104,117.474 607.808,160.162 666.169,160.162 620.174,80.724 666.776,-0.065 "></polygon>
              </svg>
            </a>
            <a href="https://teamlove.org/">
              <svg version="1.1" id="logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 0 365.304 184.319" enable-background="new 0 0 365.304 184.319" xml:space="preserve"
                class="sponsorLogo">
                <path fill="#FF4045"
                  d="M237.929,0l-55.277,26.409L127.375,0L0,22.103v77.274c0,11.073,8.973,23.24,20.044,27.187l162.29,57.535
                v0.221l0.317-0.105l0.313,0.105v-0.221l162.29-57.535c11.072-3.947,20.049-16.114,20.049-27.187V22.103L237.929,0"></path>
                <path fill="#FFFFFF" d="M73.55,86.808c0,0.552,0,1.1,0,1.593c0,5.204-0.373,7.471-2.759,7.471c-1.838,0-2.202-1.044-2.202-3.617
                V75.786h8.082v-4.227h-7.96V60.174h-3.917c-0.497,7.163-2.696,10.713-8.39,11.635v3.977h4.775v15.613
                c0,6.856,2.208,10.106,7.589,10.106c6.309,0,8.818-3.733,8.818-12.067c0-0.793,0-1.714-0.06-2.63H73.55">
                </path>
                <path fill="#FFFFFF" d="M95.653,70.461c-9.31,0-15.311,6.303-15.311,15.55c0,9.367,5.879,15.55,15.311,15.55
                c7.47,0,12.607-4.344,13.469-11.445h-5.144c-0.98,4.712-3.184,6.548-7.898,6.548c-4.534,0-7.162-3.428-7.407-10.038h20.632
                C109.305,76.03,104.466,70.461,95.653,70.461 M88.977,82.278c0.737-5.146,3.064-7.713,6.614-7.713c3.553,0,5.268,2.444,5.632,7.713
                H88.977z"></path>
                <path fill="#FFFFFF" d="M189.535,92.689V81.295c0-3.612-0.059-6.243-2.014-8.326c-1.35-1.409-3.678-2.324-6.373-2.324
                c-3.732,0-6.734,1.958-10.164,5.877c-1.347-3.919-3.976-5.877-7.958-5.877c-3.92,0-6.919,1.835-9.978,5.815v-4.9h-12.801v4.104
                h2.025c3.12,0,3.488,0.858,3.488,3.677v13.348c0,2.816-0.368,3.672-3.488,3.672h-1.934c-2.782-0.334-3.055-1.611-3.055-2.861V81.48
                c0-4.224-0.244-6.98-3.183-8.937c-2.02-1.346-5.203-2.082-9.364-2.082c-7.472,0-11.885,3.243-11.885,7.654
                c0,2.817,2.027,4.774,4.902,4.774c2.572,0,4.286-1.594,4.286-3.92c0-2.076-1.404-3.368-3.86-3.368c-0.057,0-0.122,0-0.182,0
                c1.471-1.286,3.306-1.772,5.82-1.772c4.043,0,6.307,1.653,6.307,4.652c0,1.835-0.552,2.942-2.02,3.919
                c-1.411,0.92-4.046,1.222-7.469,2.267c-6.188,1.897-9.251,4.223-9.251,9c0,4.53,3.494,7.9,8.754,7.9
                c4.151,0,7.261-1.334,9.673-4.306l0.535-0.606c1.038,2.545,3.105,3.595,6.387,3.828c0.917,0.061,3.037,0.04,4.663-0.019h15.875
                v-4.103h-0.733c-3.126,0-3.49-0.856-3.49-3.672V83.38c0-4.779,3.241-8.021,6.797-8.021c3.544,0,4.162,1.897,4.162,5.936v11.394
                c0,2.816-0.433,3.672-3.55,3.672h-0.678v4.103h15.742v-4.103h-0.74c-3.119,0-3.486-0.856-3.486-3.672V83.38
                c0-4.779,3.245-8.021,6.792-8.021c3.555,0,4.168,1.897,4.168,5.936v11.394c0,2.816-0.431,3.672-3.553,3.672h-0.672v4.103h16.717
                v-4.103h-1.717C189.91,96.361,189.535,95.505,189.535,92.689 M123.447,96.419c-2.449,0-3.794-1.286-3.794-3.486
                c0-3.861,3.854-4.592,10.286-7.593v3.488C129.939,93.728,127.304,96.419,123.447,96.419z"></path>
                <path fill="#FFFFFF"
                  d="M215.41,92.688v-33.31h-12.861v4.102h1.836c3.119,0,3.55,0.856,3.55,3.674v25.534
                c0,2.817-0.431,3.672-3.55,3.672h-1.836v4.103h18.25V96.36h-1.838C215.832,96.36,215.41,95.505,215.41,92.688"></path>
                <path fill="#FFFFFF" d="M235.482,70.458c-9.908,0-16.283,6.246-16.283,15.55c0,9.312,6.375,15.492,16.283,15.492
                c9.922,0,16.355-6.18,16.355-15.492C251.837,76.704,245.404,70.458,235.482,70.458 M235.482,97.153
                c-5.313,0-7.948-3.675-7.948-11.145c0-7.467,2.635-11.204,7.948-11.204c5.33,0,8.023,3.737,8.023,11.204
                C243.505,93.478,240.812,97.153,235.482,97.153z"></path>
                <path fill="#FFFFFF" d="M282.388,75.663v-4.104h-14.268v4.104h1.465c1.902,0,2.762,0.492,2.762,1.656
                c0,0.488-0.125,1.162-0.432,1.959l-4.895,13.899l-4.528-13.35c-0.372-1.16-0.552-2.02-0.552-2.631c0-1.041,0.791-1.533,2.383-1.533
                h0.975v-4.104h-15.91v4.104h1.772c1.655,0,2.569,1.1,3.313,3.126l7.467,21.677h7.771l7.406-21.068
                c0.863-2.506,2.02-3.735,3.736-3.735H282.388"></path>
                <path fill="#FFFFFF" d="M295.252,70.461c-9.308,0-15.306,6.303-15.306,15.55c0,9.367,5.869,15.55,15.306,15.55
                c7.468,0,12.608-4.344,13.465-11.445h-5.139c-0.981,4.712-3.19,6.548-7.902,6.548c-4.532,0-7.163-3.428-7.407-10.038h20.633
                C308.902,76.03,304.06,70.461,295.252,70.461 M288.572,82.278c0.732-5.146,3.062-7.713,6.611-7.713c3.555,0,5.272,2.444,5.641,7.713
                H288.572z"></path>
                <path fill="#FFFFFF" d="M315.527,64.03c-0.317-1.565-1.782-2.331-3.271-2.103c-1.053,0.16-1.834,0.871-2.258,1.672
                c-0.435-0.801-1.222-1.518-2.271-1.675c-1.485-0.227-2.945,0.535-3.269,2.103c-0.353,1.717,0.53,3.415,2.427,4.81
                c1.414,1.04,2.717,2.079,3.08,3.281l0.012,0.14c0.006-0.017,0.01-0.037,0.01-0.057c0.011,0.02,0.017,0.04,0.017,0.057l0.007-0.14
                c0.364-1.202,1.664-2.238,3.082-3.275C314.999,67.448,315.874,65.751,315.527,64.03"></path>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>


  </div>

  <div id="topBanner">
    <a href="https://crackmagazine.typeform.com/simplethings24">
      <div id="topMarquee">
        <div class="marqueeContainer reverse">
          <!-- <span>BUY TICKETS <span class="outline">24.02.2024</span> BUY TICKETS <span class="outline">24.02.2024</span>
          BUY TICKETS <span class="outline">24.02.2024</span> BUY TICKETS <span class="outline">24.02.2024</span>
          BUY TICKETS <span class="outline">24.02.2024</span>&nbsp;</span>
        <span>BUY TICKETS <span class="outline">24.02.2024</span> BUY TICKETS <span class="outline">24.02.2024</span>
          BUY TICKETS <span class="outline">24.02.2024</span> BUY TICKETS <span class="outline">24.02.2024</span>
          BUY TICKETS <span class="outline">24.02.2024</span>&nbsp;</span> -->
          <!-- <span>TICKETS COMING SOON <span class="outline">SIGN UP</span> TICKETS COMING SOON <span class="outline">SIGN
              UP</span>
            TICKETS COMING SOON <span class="outline">SIGN UP</span> TICKETS COMING SOON <span class="outline">SIGN UP</span>
            TICKETS COMING SOON <span class="outline">SIGN UP</span>&nbsp;</span>
          <span>TICKETS COMING SOON <span class="outline">SIGN UP</span> TICKETS COMING SOON <span class="outline">SIGN
              UP</span>
            TICKETS COMING SOON <span class="outline">SIGN UP</span> TICKETS COMING SOON <span class="outline">SIGN UP</span>
            TICKETS COMING SOON <span class="outline">SIGN UP</span>&nbsp;</span> -->

            <span>TICKETS COMING SOON <span class="outline">SIGN UP</span> TICKETS COMING SOON <span class="outline">SIGN UP</span>
            TICKETS COMING SOON <span class="outline">SIGN UP</span> TICKETS COMING SOON <span class="outline">SIGN UP</span>&nbsp;</span>
            <span>TICKETS COMING SOON <span class="outline">SIGN UP</span> TICKETS COMING SOON <span class="outline">SIGN UP</span>
            TICKETS COMING SOON <span class="outline">SIGN UP</span> TICKETS COMING SOON <span class="outline">SIGN UP</span>&nbsp;</span>
        </div>
      </div>
    </a>
    <div id="topNav">
      <img id="topLogo" alt="Simple Things Logo" src="/assets/images/logo.svg" />
      <div id="navContent">
        <a href="https://simplethingsfestival.co.uk/"> <span>HOME</span></a>
        <a href="/shows/"><span>SHOWS</span></a>
        <a target="_blank" href="https://crackmagazine.typeform.com/simplethings24"><span>SIGN UP</span></a>
      </div>
    </div>
  </div>

<?php
get_footer();
