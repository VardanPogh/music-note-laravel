@include('inc.header')
<form method="POST" action="{{ url('/clefs',array($clef->id))}}" enctype="multipart/form-data">
    <input type="hidden" name="_method" value="PUT"/>
    {{ csrf_field() }}
    <div class="home-page adminPage">
        <div class="inner-wrap">
            <div class="right">
                <div class="customize">
                    <ul class="customize-items">
                        <li class="item Range">
                            <div class="info" style="display: block;">
                                <div class="item-wrap">
                                    <div class="Range-item active tab-1">
                                        <div class="Range-item-text">
                                            <div class="RangeArrows RangeArrows-1">
                                                <button class="top1" type="button">
                                                    <i class="fas fa-chevron-up"></i>
                                                </button>
                                                <button class="bottom1" type="button">
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
                                                    <?php if($clef->id == 1){?>
                                                    <img src={{url('/img/note3.svg')}} alt="" class="note1 notes">
                                                    <?php }else if($clef->id == 2){ ?>
                                                    <img src={{url('/img/note2.svg')}} alt="" class="note2 notes">
                                                    <?php }else if($clef->id == 3){ ?>
                                                    <img src={{url('/img/note4.svg')}} alt="" class="note3 notes">
                                                    <?php }else if($clef->id == 4){ ?>
                                                    <img src={{url('/img/note4.svg')}} alt="" class="note4 notes">
                                                    <?php } ?>
                                                </div>

                                                <div class="RangeImg v-centered">

                                                    <ul class="RangeLinesLeft TopLines1">
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                    </ul>

                                                    <ul class="RangeLinesLeft BottomLines1">
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                    </ul>
                                                    <ul class="RangeLinesLeft TopLines2">
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                    </ul>

                                                    <ul class="RangeLinesLeft BottomLines2">
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                    </ul>
                                                    <ul class="RangeLinesLeft TopLines3">
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                    </ul>

                                                    <ul class="RangeLinesLeft BottomLines3">
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                    </ul>
                                                    <ul class="RangeLinesLeft TopLines4">
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                    </ul>

                                                    <ul class="RangeLinesLeft BottomLines4">
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                    </ul>
                                                    <ul class="RangeLinesLeft TopLines5">
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                    </ul>

                                                    <ul class="RangeLinesLeft BottomLines5">
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                    </ul>
                                                    <ul class="RangeLinesLeft TopLines6">
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                    </ul>

                                                    <ul class="RangeLinesLeft BottomLines6">
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                    </ul>
                                                    <ul class="RangeLinesLeft TopLines7">
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                    </ul>

                                                    <ul class="RangeLinesLeft BottomLines7">
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                    </ul>
                                                    <ul class="RangeLinesLeft TopLines8">
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                    </ul>

                                                    <ul class="RangeLinesLeft BottomLines8">
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                    </ul>

                                                    <div class="img img1" id="drag" title="A">
                                                        <div class="overlay left-ov1 top"></div>
                                                        <div class="overlay left-ov1 bottom"></div>
                                                        <img class="h-centered" src="{{url('/img/note7.svg')}}" alt="">
                                                    </div>

                                                    <div class="img img2" title="B">
                                                        <div class="overlay left-ov2 top"></div>
                                                        <div class="overlay left-ov2 bottom"></div>
                                                        <img class="h-centered" src="{{url('/img/note7.svg')}}" alt="">
                                                    </div>
                                                    <div class="img img3" title="C">
                                                        <div class="overlay left-ov3 top"></div>
                                                        <div class="overlay left-ov3 bottom"></div>
                                                        <img class="h-centered" src="{{url('/img/note7.svg')}}" alt="">
                                                    </div>
                                                    <div class="img img4" title="D">
                                                        <div class="overlay left-ov4 top"></div>
                                                        <div class="overlay left-ov4 bottom"></div>
                                                        <img class="h-centered" src="{{url('/img/note7.svg')}}" alt="">
                                                    </div>
                                                    <div class="img img5" title="E">
                                                        <div class="overlay left-ov5 top"></div>
                                                        <div class="overlay left-ov5 bottom"></div>
                                                        <img class="h-centered" src="{{url('/img/note7.svg')}}" alt="">
                                                    </div>
                                                    <div class="img img6" title="F">
                                                        <div class="overlay left-ov6 top"></div>
                                                        <div class="overlay left-ov6 bottom"></div>
                                                        <img class="h-centered" src="{{url('/img/note7.svg')}}" alt="">
                                                    </div>
                                                    <div class="img img7" title="G">
                                                        <div class="overlay left-ov7 top"></div>
                                                        <div class="overlay left-ov7 bottom"></div>
                                                        <img class="h-centered" src="{{url('/img/note7.svg')}}" alt="">
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="RangeArrows nonFlexDirection">
                                                <button type="button" id="leftArrow">
                                                    <i class="fas fa-arrow-circle-left"></i>
                                                </button>
                                                <button type="button" id="rightArrow">
                                                    <i class="fas fa-arrow-circle-right"></i>
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
                                                        <div class="overlay left-ov7 top"></div>
                                                        <div class="overlay left-ov7 bottom"></div>
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
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <div class="modal-footer">
        <input type="text" id="positions" name="positions" value="{{$clef->positions}}" hidden>
        <input type="text" id="a_with_16th" name="a_with_16th" hidden>
        <a href="{{ url('/clefs') }}" type="button" class="btn btn-default" data-dismiss="modal"
           value="Cancel">Back</a>
        <input type="button" id='submitButton' class="btn btn-success" value="submit">
        <input type="submit" id='hiddenButton' class="btn btn-success" style="display: none">
    </div>
</form>
<script type="text/javascript">

</script>

@include('inc.footer')