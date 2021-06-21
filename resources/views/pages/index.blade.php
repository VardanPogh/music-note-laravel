<html>

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    {{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.0/jspdf.umd.min.js"></script>--}}
    <link rel="stylesheet" href="/sass/main.css">
    <link rel="stylesheet" href="/sass/responsive.css">
    <link rel="stylesheet" href="/css/style.css">

</head>

<body>
<!-- Start Header -->
<header class="navigation-wrap">
    <div class="inner-wrap">
        <div class="left">
            <div class="logo"><a href=""><img src="../img/logo.png" alt=""></a></div>
            <ul>
                <li><a href="">Our Story</a></li>
                <li><a href="">Lessons</a></li>
                <li><a href="">Library</a></li>
                <li><a href="">Worksheet Generator</a></li>
            </ul>
        </div>

        <div class="right">
            <div class="social">
                <ul>
                    <li><a href=""><i class="fab fa-youtube"></i></a></li>
                    <li><a href=""><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
            <button class="btn red shop">shop</button>
        </div>
    </div>
</header>
<!-- End Header -->

<section class="home-page testingPage">
    <div class="questions-reset">
        <div class="inner-wrap">
            <div class="questions">
                <ul>
                    <li>
                        Questions
                        <div class="questions-number">
                            <span class="active-question-number" id="active-question-number">0</span>
                            <span>/</span>
                            <p>20</p>
                        </div>
                    </li>
                    <li id="percent">0%</li>
                </ul>
            </div>

            <div class="reset">
                <ul>
                    <li class="ResetScore"><i class="fas fa-sync"></i>Reset Score</li>
                    <li class="ShowTimer"><i class="far fa-clock"></i>Show Timer</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="inner-wrap">
        <div class="left">
            <div class="music-note">
                <div class="RangeInfo">
                    <ul class="lines">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>

                    <div class="RangeImg v-centered">
                        <div class="img img1">
                            <div class="overlay left-ov top"></div>
                            <div class="overlay left-ov bottom"></div>
                            <img class="h-centered" src="../img/note7.svg" alt="">
                        </div>

                        <!-- <div class="img img2">
                            <div class="overlay right-ov top"></div>
                            <div class="overlay right-ov bottom"></div>
                            <img class="h-centered" src="../img/note7.svg" alt="">
                        </div> -->

                        <ul class="RangeLinesLeft TopLines">
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>

                        <ul class="RangeLinesLeft BottomLines">
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>

                    <div class="ClefImg v-centered">
                        <img src="../img/note3.svg" alt="" class="note1 notes">
                        <img src="../img/note2.svg" alt="" class="note2 notes">
                        <img src="../img/note4.svg" alt="" class="note3 notes">
                        <img src="../img/note4.svg" alt="" class="note4 notes">
                    </div>
                </div>
            </div>

            <div class="item-wrap test-item">
                <div class="item" data-clef="A">A</div>
                <div class="item" data-clef="B">B</div>
                <div class="item" data-clef="C">C</div>
                <div class="item" data-clef="D">D</div>
                <div class="item" data-clef="E">E</div>
                <div class="item" data-clef="F">F</div>
                <div class="item" data-clef="G">G</div>
            </div>

            <button class="SkipQuestion">Skip Question</button>
        </div>

        <div class="right">
            <div class="difficultly">
                <h2>Difficultly</h2>
                <div class="btn-wrap">
                    <button class="btn silver active" rel="Number-1">Easy <span>20</span></button>
                    <button class="btn silver" rel="Number-2">Medium <span>50</span></button>
                    <button class="btn silver" rel="Number-3">Hard <span>100</span></button>
                </div>
            </div>

            <div class="customize">
                <h2>Customize</h2>
                <ul class="customize-items">
                    <li class="item Clefs">
                        <div class="title eff03">Clefs <i class="fas fa-chevron-down"></i></div>
                        <div class="info">
                            <div class="item-wrap">
                                <div rel="tab-1" class="Clefs-item active" id="1">
                                    <div class="inner-item">
                                        <img src="../img/note3.svg" alt="">
                                        <ul>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                    </div>
                                    <span>Treble</span>
                                </div>

                                <div rel="tab-2" class="Clefs-item" id="2">
                                    <div class="inner-item">
                                        <img src="../img/note2.svg" alt="">
                                        <ul>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                    </div>
                                    <span>Bass</span>
                                </div>

                                <div rel="tab-3" class="Clefs-item" id="3">
                                    <div class="inner-item">
                                        <img src="../img/note4.svg" alt="">
                                        <ul>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                    </div>
                                    <span>Alto</span>
                                </div>

                                <div rel="tab-4" class="Clefs-item" id="4">
                                    <div class="inner-item">
                                        <img src="../img/note4.svg" alt="">
                                        <ul>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                    </div>
                                    <span>Tenor</span>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="item Range">
                        <div class="title eff03">Range <i class="fas fa-chevron-down"></i></div>
                        <div class="info">
                            <div class="item-wrap">
                                <div class="Range-item active tab-1">
                                    <h2>Treble</h2>
                                    <div class="Range-item-text">
                                        <div class="RangeArrows RangeArrows-1">
                                            <button class="top1">
                                                <i class="fas fa-chevron-up"></i>
                                            </button>
                                            <button class="bottom1">
                                                <i class="fas fa-chevron-down"></i>
                                            </button>
                                        </div>
                                        <div class="RangeInfo">
                                            <ul class="lines v-centered">
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                            </ul>
                                            <div class="ClefImg v-centered">
                                                <img src="../img/note3.svg" alt="">
                                            </div>

                                            <div class="RangeImg v-centered">

                                                <ul class="RangeLinesLeft TopLines">
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                </ul>

                                                <ul class="RangeLinesLeft BottomLines">
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                </ul>

                                                <div class="img img1" id="drag">
                                                    <div class="overlay left-ov top"></div>
                                                    <div class="overlay left-ov bottom"></div>
                                                    <img class="h-centered" src="../img/note7.svg" alt="">
                                                </div>

                                                <div class="img img2">
                                                    <div class="overlay right-ov top"></div>
                                                    <div class="overlay right-ov bottom"></div>
                                                    <img class="h-centered" src="../img/note7.svg" alt="">
                                                </div>

                                                <ul class="RangeLinesRight TopLines">
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                </ul>

                                                <ul class="RangeLinesRight BottomLines">
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="RangeArrows RangeArrows-2">
                                            <button class="top2">
                                                <i class="fas fa-chevron-up"></i>
                                            </button>
                                            <button class="bottom2">
                                                <i class="fas fa-chevron-down"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="Range-item tab-2">
                                    <h2>Bass</h2>
                                    <div class="Range-item-text">
                                        <div class="RangeArrows RangeArrows-1">
                                            <button class="top1">
                                                <i class="fas fa-chevron-up"></i>
                                            </button>
                                            <button class="bottom1">
                                                <i class="fas fa-chevron-down"></i>
                                            </button>
                                        </div>

                                        <div class="RangeInfo">
                                            <ul class="lines v-centered">
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                            </ul>

                                            <div class="ClefImg v-centered">
                                                <img src="../img/note2.svg" alt="">
                                            </div>

                                            <div class="RangeImg v-centered">

                                                <ul class="RangeLinesLeft TopLines">
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                </ul>

                                                <ul class="RangeLinesLeft BottomLines">
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                </ul>

                                                <div class="img img1">
                                                    <div class="overlay left-ov top"></div>
                                                    <div class="overlay left-ov bottom"></div>
                                                    <img class="h-centered" src="../img/note7.svg" alt="">
                                                </div>

                                                <div class="img img2">
                                                    <div class="overlay right-ov top"></div>
                                                    <div class="overlay right-ov bottom"></div>
                                                    <img class="h-centered" src="../img/note7.svg" alt="">
                                                </div>

                                                <ul class="RangeLinesRight TopLines">
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                </ul>

                                                <ul class="RangeLinesRight BottomLines">
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="RangeArrows RangeArrows-2">
                                            <button class="top2">
                                                <i class="fas fa-chevron-up"></i>
                                            </button>
                                            <button class="bottom2">
                                                <i class="fas fa-chevron-down"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="Range-item tab-3">
                                    <h2>Alto</h2>
                                    <div class="Range-item-text">
                                        <div class="RangeArrows RangeArrows-1">
                                            <button class="top1">
                                                <i class="fas fa-chevron-up"></i>
                                            </button>
                                            <button class="bottom1">
                                                <i class="fas fa-chevron-down"></i>
                                            </button>
                                        </div>

                                        <div class="RangeInfo">
                                            <ul class="lines v-centered">
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                            </ul>

                                            <div class="ClefImg v-centered">
                                                <img src="../img/note4.svg" alt="">
                                            </div>


                                            <div class="RangeImg v-centered">

                                                <ul class="RangeLinesLeft TopLines">
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                </ul>

                                                <ul class="RangeLinesLeft BottomLines">
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                </ul>

                                                <div class="img img1">
                                                    <div class="overlay left-ov top"></div>
                                                    <div class="overlay left-ov bottom"></div>
                                                    <img class="h-centered" src="../img/note7.svg" alt="">
                                                </div>

                                                <div class="img img2">
                                                    <div class="overlay right-ov top"></div>
                                                    <div class="overlay right-ov bottom"></div>
                                                    <img class="h-centered" src="../img/note7.svg" alt="">
                                                </div>

                                                <ul class="RangeLinesRight TopLines">
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                </ul>

                                                <ul class="RangeLinesRight BottomLines">
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                </ul>
                                            </div>

                                        </div>

                                        <div class="RangeArrows RangeArrows-2">
                                            <button class="top2">
                                                <i class="fas fa-chevron-up"></i>
                                            </button>
                                            <button class="bottom2">
                                                <i class="fas fa-chevron-down"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="Range-item tab-4">
                                    <h2>Tenor</h2>
                                    <div class="Range-item-text">
                                        <div class="RangeArrows RangeArrows-1">
                                            <button class="top1">
                                                <i class="fas fa-chevron-up"></i>
                                            </button>
                                            <button class="bottom1">
                                                <i class="fas fa-chevron-down"></i>
                                            </button>
                                        </div>
                                        <div class="RangeInfo">
                                            <ul class="lines v-centered">
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                            </ul>

                                            <div class="ClefImg v-centered">
                                                <img src="../img/note4.svg" alt="">
                                            </div>


                                            <div class="RangeImg v-centered">

                                                <ul class="RangeLinesLeft TopLines">
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                </ul>

                                                <ul class="RangeLinesLeft BottomLines">
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                </ul>

                                                <div class="img img1">
                                                    <div class="overlay left-ov top"></div>
                                                    <div class="overlay left-ov bottom"></div>
                                                    <img class="h-centered" src="../img/note7.svg" alt="">
                                                </div>

                                                <div class="img img2">
                                                    <div class="overlay right-ov top"></div>
                                                    <div class="overlay right-ov bottom"></div>
                                                    <img class="h-centered" src="../img/note7.svg" alt="">
                                                </div>

                                                <ul class="RangeLinesRight TopLines">
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                </ul>

                                                <ul class="RangeLinesRight BottomLines">
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                </ul>
                                            </div>

                                        </div>
                                        <div class="RangeArrows RangeArrows-2">
                                            <button class="top2">
                                                <i class="fas fa-chevron-up"></i>
                                            </button>
                                            <button class="bottom2">
                                                <i class="fas fa-chevron-down"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="item NumberOfQuestions">
                        <div class="title eff03">Number of Questions <i class="fas fa-chevron-down"></i></div>
                        <div class="info">
                            <div class="item-wrap">
                                <div class="Number-item Number-1 active">
                                    Easy
                                    <div class="plus_minus">
                                        <input value="20" max="20" min="1" type="number">
                                        <div class="icons">
                                            <div class="plus"><i class="fas fa-plus"></i></div>
                                            <div class="minus"><i class="fas fa-minus"></i></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="Number-item Number-2">
                                    Medium
                                    <div class="plus_minus">
                                        <input value="50" max="50" min="21" type="text">
                                        <div class="icons">
                                            <div class="plus"><i class="fas fa-plus"></i></div>
                                            <div class="minus"><i class="fas fa-minus"></i></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="Number-item Number-3">
                                    Hard
                                    <div class="plus_minus">
                                        <input value="100" type="text" max="100" min="51">
                                        <div class="icons">
                                            <div class="plus"><i class="fas fa-plus"></i></div>
                                            <div class="minus"><i class="fas fa-minus"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>


                    <button id="renderButton" class="btn red">Render</button>
                    <button id="renderButtonHidden" hidden></button>
                </ul>
            </div>

            <div class="print-save-btn">
                <button class="btn transparent">Print or Save Worksheet</button>
                <button class="btn transparent">Print or Save Answer Key</button>
            </div>
        </div>
    </div>

    <div id="finishResult" class="inner-wrap">
        <div class="left" style="display: inline-flex;flex-wrap: wrap;">

        </div>
    </div>
</section>
<script type="text/javascript">
    window.base_url = '{{url('/')}}';
</script>
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="/js/main.js"></script>

</body>

</html>