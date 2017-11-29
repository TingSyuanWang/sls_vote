@extends('layouts.app')

@section('seo')
    <meta property="og:title" content="國際關懷新視野服務深化再創新：香港恆生-亞大管院暑期國際志工交流服務(第二年)" />
    <meta property="og:image" content="{{asset('img/team1/logo.jpg')}}" />
    <meta property="og:url" content="{{route('team1')}}" />
    <meta property="og:description" content="兩校秉持對等交流精神，每年進行多元主題之機構服務。我們有系統與紮實的訓練，並有老師全程參與討論與指導。我們的訓練以自主學習與PBL方式進行，學生學習如何分析問題、尋找與組織資源、制訂與執行方案，最後還有檢討與成果發表。" />
@endsection

@section('title')
    國際關懷新視野服務深化再創新：香港恆生-亞大管院暑期國際志工交流服務(第二年)
@endsection

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-12 col-md-3 mb-4">
                <img src="{{asset('img/team1/logo.jpg')}}" class="img-fluid rounded mb-4">
                <h4 class="text-justify">國際關懷新視野服務深化再創新：香港恆生-亞大管院暑期國際志工交流服務(第二年)</h4>
                <h5 class="text-center text-dark">【團隊理念】</h5>
                <p class="text-justify text-dark">兩校秉持對等交流精神，每年進行多元主題之機構服務。我們有系統與紮實的訓練，並有老師全程參與討論與指導。我們的訓練以自主學習與PBL方式進行，學生學習如何分析問題、尋找與組織資源、制訂與執行方案，最後還有檢討與成果發表。</p>
                <button href="#" class="btn btn-primary btn-block mb-2" id="like-button"><i class="fa fa-thumbs-o-up"></i> 讚我一票</button>
                <a href="https://www.facebook.com/pages/%E4%BA%9E%E6%B4%B2%E5%A4%A7%E5%AD%B8-%E7%94%A8%E6%84%9B%E6%94%B9%E8%AE%8A%E4%B8%96%E7%95%8Cx%E5%BF%97%E5%B7%A5%E5%A4%A7%E5%AD%B8-%E9%97%9C%E6%87%B7%E6%B4%BB%E5%8B%95/2010527529182896" target="_blank" class="btn btn-warning btn-block mb-2 d-none d-md-block d-lg-block" id="facebook-share"><i class="fa fa-map-marker"></i> 電腦分享活動並打卡</a>
                <div class="row">
                    <div class="col-6">
                        <a href="fb://page/2010527529182896" class="btn btn-success btn-block mb-2 d-block d-md-none d-lg-none"><i class="fa fa-android"></i> Android 打卡</a>
                    </div>
                    <div class="col-6">
                        <a href="fb://page/?id=2010527529182896" class="btn btn-danger btn-block mb-2 d-block d-md-none d-lg-none"><i class="fa fa-apple"></i> iPhone 打卡</a>
                    </div>
                </div>

                <h3 class="text-danger text-center"><i class="fa fa-heart faa-pulse animated" aria-hidden="true"></i> {{$countTeam1}}</h3>
            </div>
            <div class="col-12 col-md-9">
                <div class="slider mb-2">
                    <div class="slides">
                        <div class="slide"><img src="{{asset('img/team1/1.jpg')}}" class="img-fluid rounded"></div>
                        <div class="slide"><img src="{{asset('img/team1/2.jpg')}}" class="img-fluid rounded"></div>
                        <div class="slide"><img src="{{asset('img/team1/3.jpg')}}" class="img-fluid rounded"></div>
                        <div class="slide"><img src="{{asset('img/team1/4.jpg')}}" class="img-fluid rounded"></div>
                        <div class="slide"><img src="{{asset('img/team1/5.jpg')}}" class="img-fluid rounded"></div>
                        <div class="slide"><img src="{{asset('img/team1/6.jpg')}}" class="img-fluid rounded"></div>
                        <div class="slide"><img src="{{asset('img/team1/7.jpg')}}" class="img-fluid rounded"></div>
                        <div class="slide"><img src="{{asset('img/team1/8.jpg')}}" class="img-fluid rounded"></div>
                    </div>
                    <div class="controls">
                        <div class="captions">
                            <div class="caption">
                                <div class="marquee">
                                    台中動保協會
                                </div>
                            </div>
                            <div class="caption">
                                <div class="marquee">
                                    彩色校徽校名
                                </div>
                            </div>
                            <div class="caption">
                                <div class="marquee">
                                    香港何善恆敬老院
                                </div>
                            </div>
                            <div class="caption">
                                <div class="marquee">
                                    香港何文田宿舍
                                </div>
                            </div>
                            <div class="caption">
                                <div class="marquee">
                                    香港天水圍社區訪查天水圍
                                </div>
                            </div>
                            <div class="caption">
                                <div class="marquee">
                                    香港惜食堂
                                </div>
                            </div>
                            <div class="caption">
                                <div class="marquee">
                                    香港源朗少數族裔調查
                                </div>
                            </div>
                            <div class="caption">
                                <div class="marquee">
                                    香港生命生命歷程體驗
                                </div>
                            </div>
                        </div>
                        <div class="pagination"></div>
                    </div>
                </div>
                <iframe width="100%" height="500" src="https://www.youtube.com/embed/bM2DZrA3IiY" frameborder="0" allowfullscreen></iframe>
                <h3 class="text-center font-italic text-secondary background mt-4 mb-4"><span>多元體驗，就選管院</span></h3>
                <div class="row">
                    <div class="col-12 col-md-6 mb-4">
                        <div class="card">
                            <h4 class="card-header"><i class="fa fa-clock-o" aria-hidden="true"></i> 服務期間 & 地點</h4>
                            <div class="card-body">
                                <p class="card-tite">
                                    <ul class="list-unstyled">
                                        <li>服務期間：香港：106年7月16日 - 106年7月21日</li>
                                        <li>服務地點：</li>
                                        <ul class="number-list">
                                            <li>香港何文田宿舍(關懷中度與重度弱能人士關懷)</li>
                                            <li>香港惜食堂(弱勢族群與獨居老人關懷)</li>
                                            <li>香港耆康會何善恆夫人敬老院(多元族群老人關懷)</li>
                                        </ul>
                                        <li>服務期間：台灣:106年7月24日 -106年 7月30日</li>
                                        <li>服務地點：</li>
                                        <ul class="number-list">
                                            <li>台中火車站(街友關懷與物資發送)</li>
                                            <li>台中市世界聯合保護動物協會(流浪動物關懷)</li>
                                            <li>台中育嬰院(多功能中度與重度身體障礙孩童與成年關懷)</li>
                                            <li>台中身障關懷協會(身心障礙人士關懷)</li>
                                        </ul>
                                    </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-4">
                        <div class="card">
                            <h4 class="card-header"><i class="fa fa-compass" aria-hidden="true"></i> 服務過程 & 實施方向</h4>
                            <div class="card-body">
                                <p class="card-title text-justify">
                                    <ul class="list-unstyled">
                                        <li>一、行前過程</li>
                                        <ul class="number-list">
                                            <li>2月香港前訪確認服務方向</li>
                                            <li>3月初至6月底，每週三晚上進行開會、訓練</li>
                                            <li>7月初至實際服務前，每天進行集訓與台灣機構前訪</li>
                                        </ul>
                                        <li>二、香港服務：7/16 - 7/21</li>
                                        <ul class="number-list">
                                            <li>關懷中度與重度弱能人士關懷</li>
                                            <li>弱勢族群與獨居老人關懷</li>
                                            <li>多元族群老人關懷</li>
                                        </ul>
                                        <li>三、台灣服務7/24 - 7/30</li>
                                        <ul class="number-list">
                                            <li>街友關懷與物資發送</li>
                                            <li>流浪動物關懷</li>
                                            <li>多功能中度與重度身體障礙孩童與成年關懷</li>
                                            <li>身心障礙人士關懷</li>
                                        </ul>
                                    </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-4">
                        <div class="card">
                            <h4 class="card-header"><i class="fa fa-users" aria-hidden="true"></i> 服務對象</h4>
                            <div class="card-body">
                                <p class="card-title text-justify">
                                <ul class="number-list">
                                    <li>老人機構</li>
                                    <li>身障人士機構</li>
                                    <li>弱勢族群與獨居老人</li>
                                    <li>街友</li>
                                    <li>流浪動物</li>
                                    <li>貧窮社區 (2016)</li>
                                    <li>少數族裔 (2016)</li>
                                    <li>盲人生活體驗 (2016)</li>
                                    <li>生命歷程體驗 (2016)</li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-4">
                        <div class="card">
                            <h4 class="card-header"><i class="fa fa-file-text-o" aria-hidden="true"></i> 服務項目 & 內容</h4>
                            <div class="card-body">
                                <p class="card-title text-justify">
                                    <ul class="number-list">
                                        <li>中度與重度弱能人士關懷:團康活動與伴陪</li>
                                        <li>弱勢族群與獨居老人關懷:實作與外展</li>
                                        <li>多元族群老人關懷：團康活動與伴陪</li>
                                        <li>街友關懷與物資發送：探訪與調查</li>
                                        <li>流浪動物關懷:教育與實作</li>
                                        <li>多功能中度與重度身體障礙孩童與成年關懷：團康活動與伴陪</li>
                                        <li>身心障礙人士關懷：實作</li>
                                    </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-4">
                        <div class="card">
                            <h4 class="card-header"><i class="fa fa-paw" aria-hidden="true"></i> 腳步與足跡</h4>
                            <div class="card-body">
                                <p class="card-title text-justify">
                                    <ul>
                                        <li>在香港何文田宿舍進行中度與重度弱能人士關懷，讓弱能人士感受來自台灣的伴陪與新奇，增加對台灣的認識。</li>
                                        <li>在香港惜食堂進行外展服務，為弱勢族群與獨居老人製作共 2,100 個便當，讓他們感受到來自台灣的關懷。</li>
                                        <li>在香港耆康會何善恆夫人敬老院，進行多元族群老人關懷，讓多元族群的長者感受來自台灣的伴陪與新奇，增加對台灣的認識。</li>
                                    </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-4">
                        <div class="card">
                            <h4 class="card-header"><i class="fa fa-smile-o" aria-hidden="true"></i> 師生心得反思</h4>
                            <div class="card-body">
                                <p class="card-title text-justify">
                                    <ul>
                                        <li>坤修老師的話—不要吝惜去播下每個善的種子，即便它是多麼的微小。期許學生未來能成為為他人擋風避雨、滋養大地的大樹!</li>
                                        <li>淼全的話—只要每個人都拿出一點愛心，相信這個世界會變得更溫暖。</li>
                                        <li>國泰的話—服務關懷，包容傾聽，香港志工團，使我開闊。</li>
                                        <li>莉芬的話—充滿感恩的旅程，就算揮灑汗水也值得去體驗。</li>
                                    </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-4">
                        <div class="card">
                            <h4 class="card-header"><i class="fa fa-gratipay" aria-hidden="true"></i> 愛的延續</h4>
                            <div class="card-body">
                                <p class="card-title text-justify">
                                    對於台港兩地被服務的對象而言，感受到兩地學生積極、有系統的活動規劃與服務，且增加對兩地之間的相關議題認識。我們亦針對不同機構提供不同的紀念品，讓被服務對象感受到更深的關懷、留下深刻的印象，為他們的日常生活中增加更多的回憶與感動！
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            var StartTime = new Date(2017, 10, 27, 9, 0);
            var EndTime = new Date(2017, 11, 1, 16, 0);
            var current = Date.now();
            var currentTime = Date(current);

            if (Date.parse(currentTime) < Date.parse(StartTime)) {
                $('#like-button').prop('disabled', true);
                $('#like-button').text('投票尚未開始喔！');
            } else if (Date.parse(currentTime) > Date.parse(EndTime)) {
                $('#like-button').prop('disabled', true);
                $('#like-button').text('投票已經結束囉！');
            } else {
                $('#like-button').prop('disabled', false);
            }

            $('.marquee').marquee({
                duration: 10000,
                gap: 50,
                delayBeforeStart: 0,
                direction: 'left',
                duplicated: true
            });
            var userTeam1 = {!! json_encode($userTeam1) !!};
            @if (Auth::check())
            if (userTeam1 === 1) {
                $('#like-button').prop('disabled', true);
                $('#like-button').text('您已經點讚囉！');
            }
            @endif

        });
        $(".slides").slick({
            asNavFor: '.captions',
            infinite: false,
            speed: 200,
            arrows: false
        });
        $(".captions").slick({
            asNavFor: '.slides',
            infinite: false,
            speed: 200,
            fade: true,
            appendArrows: $('.pagination'),
            prevArrow: '<div class="pagination__button"><i class="material-icons">keyboard_arrow_left</i></div>',
            nextArrow: '<div class="pagination__button"><i class="material-icons">keyboard_arrow_right</i></div>'
        });
        $('#like-button').click(function() {
            @if (Auth::check())
            swal({
                title: "確定投下您神聖的一票？",
                icon: "warning",
                buttons: {
                    cancel: {
                        text: "取消",
                        value: false,
                        visible: true,
                        className: "",
                        closeModal: true
                    },
                    confirm: {
                        text: "確定",
                        value: true,
                        visible: true,
                        className: "",
                        closeModal: true
                    }
                },
                dangerMode: true
            }).then(function(willVote) {
                if (willVote) {
                    swal("您已投出您神聖的一票！", {
                        icon: "success",
                        button: {
                            text: "確定"
                        }
                    }).then(function() {
                        window.location.href = "{{route('voteTeam1')}}";
                    });
                } else {
                    swal("您已取消投票！", {
                        icon: "error",
                        button: {
                            text: "確定"
                        }
                    });
                }
            });
            @else
            swal({
                title: "請先登入才能進行投票",
                icon: "warning",
                buttons: {
                    cancel: {
                        text: "取消登入",
                        value: false,
                        visible: true,
                        className: "",
                        closeModal: true
                    },
                    confirm: {
                        text: "我要登入",
                        value: true,
                        visible: true,
                        className: "",
                        closeModal: true
                    }
                }
            }).then(function(willLogin) {
                if (willLogin) {
                    swal("進入登入畫面", {
                        icon: "success",
                        button: {
                            text: "確定"
                        }
                    }).then(function() {
                        window.location.href = "{{route('facebookLogin')}}";
                    });
                } else {
                    swal("您已取消登入！", {
                        icon: "error",
                        button: {
                            text: "確定"
                        }
                    });
                }
            });
            @endif

        });
    </script>
@endsection
