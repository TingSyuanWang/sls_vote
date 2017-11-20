@extends('layouts.app')

@section('title')
    柬團第八梯：柬埔寨弱勢社區服務方案
@endsection

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-12 col-md-3 mb-4">
                <img src="{{asset('img/team6/logo.jpg')}}" class="img-fluid rounded mb-4">
                <h4 class="text-justify">柬團第八梯：柬埔寨弱勢社區服務方案</h4>
                <h5 class="text-center text-dark">【團隊理念】</h5>
                <p class="text-justify text-dark">「柬團第八梯：柬埔寨弱勢社區服務方案」延續前七梯次的服務能量，於偏鄉弱勢社區進行服務，透過海外跨文化服務，讓學生發揮潛能與學科訓練專長，建立國際視野與領導統籌能力，也持續強化與柬埔寨大專青年的協力合作模式，讓跨國青年學生彼此交流、相互學習、建立國際團隊合作與協調的能力。</p>
                <button href="#" class="btn btn-primary btn-block mb-2" id="like-button"><i class="fa fa-thumbs-o-up"></i> 讚我一票</button>
                <h3 class="text-danger text-center"><i class="fa fa-heart faa-pulse animated" aria-hidden="true"></i> {{$countTeam6}}</h3>
            </div>
            <div class="col-12 col-md-9">
                <div class="slider mb-2">
                    <div class="slides">
                        <div class="slide"><img src="{{asset('img/team6/1.jpg')}}" class="img-fluid rounded"></div>
                        <div class="slide"><img src="{{asset('img/team6/2.jpg')}}" class="img-fluid rounded"></div>
                        <div class="slide"><img src="{{asset('img/team6/3.jpg')}}" class="img-fluid rounded"></div>
                        <div class="slide"><img src="{{asset('img/team6/4.jpg')}}" class="img-fluid rounded"></div>
                        <div class="slide"><img src="{{asset('img/team6/5.jpg')}}" class="img-fluid rounded"></div>
                        <div class="slide"><img src="{{asset('img/team6/6.jpg')}}" class="img-fluid rounded"></div>
                    </div>
                    <div class="controls">
                        <div class="captions">
                            <div class="caption">
                                <div class="marquee">
                                    執行偏遠村落孩童的營養粥計畫；攝於柬埔寨暹粒TAOM村落
                                </div>
                            </div>
                            <div class="caption">
                                <div class="marquee">
                                    服務期間的反思活動，幫助海外志工釐清與重整服務的感受與觀察；攝於柬埔寨暹粒天主堂St John's Catholic Church
                                </div>
                            </div>
                            <div class="caption">
                                <div class="marquee">
                                    海外服務在異國文化裡，重新學習、感受、體驗與服務實作；攝於柬埔寨暹粒TAOM村落
                                </div>
                            </div>
                            <div class="caption">
                                <div class="marquee">
                                    海外服務是團隊合作的過程，須拋開個人式英雄主義的浪漫；攝於柬埔寨金邊貧民窟服務據點Rudi Boa Centre
                                </div>
                            </div>
                            <div class="caption">
                                <div class="marquee">
                                    海外青年志工與當地青年的協力合作模式，培養跨國團隊合作能力；攝於柬埔寨金邊非營利機構Advanced Centre for Empowerment
                                </div>
                            </div>
                            <div class="caption">
                                <div class="marquee">
                                    配合當地需求，志工進行房屋修繕服務攝於柬埔寨暹粒TAOM村落
                                </div>
                            </div>
                        </div>
                        <div class="pagination"></div>
                    </div>
                </div>
                <iframe width="100%" height="500" src="https://www.youtube.com/embed/D_drkLhJU2g" frameborder="0" allowfullscreen></iframe>
                <h3 class="text-center font-italic text-secondary background mt-4 mb-4"><span>柬單幸福 • 愛滿寨，我們都在！</span></h3>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="card mb-4">
                            <h4 class="card-header"><i class="fa fa-clock-o" aria-hidden="true"></i> 服務期間 & 地點</h4>
                            <div class="card-body">
                                <p class="card-tite">
                                    <ul>
                                        <li>服務期間：106年7月2日-106年7月16日</li>
                                        <li>服務地點：柬埔寨金邊貧民窟、暹粒偏鄉村落 </li>
                                    </ul>
                                </p>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <h4 class="card-header"><i class="fa fa-users" aria-hidden="true"></i> 服務對象</h4>
                            <div class="card-body">
                                <p class="card-title text-justify">
                                    以金邊貧民窟及暹粒偏遠村落弱勢兒童為主，包括：<br>
                                    金邊部分
                                <ul class="number-unstyled">
                                    <li>Wat Thann Heimberg, Rudi Boa Centre, Young Leader Centre, Kandal Community Centre</li>
                                </ul>
                                暹粒部分
                                <ul class="number-unstyled">
                                    <li>Taom, Chong Khneas, Kompong Khleang, Khnar Thmey, Missionaries of Charity </li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="card mb-4">
                            <h4 class="card-header"><i class="fa fa-compass" aria-hidden="true"></i> 服務過程 & 實施方向</h4>
                            <div class="card-body">
                                <p class="card-title text-justify">
                                    海外服務前的國內籌備工作長達5個月，包括：
                                    <ul class="number-list">
                                        <li>校內外的擺攤義賣、服務演練、社區慈善募款、全台愛心物資募集與分類等</li>
                                        <li>著重草根力量、庶民參與，募集來自台灣各角落的愛心物資及慈善捐款，也服務大里、霧峰等學校周邊的社區。</li>
                                    </ul>
                                    海外實地服務以偏鄉村落及城市貧民窟為主，包括：
                                    <ul class="number-list">
                                        <li>弱勢村落/貧民窟的房屋修繕、營養粥計畫、衛生教育課程等</li>
                                        <li>主軸服務強調創新模式，透過竹竿舞團體活動，擴大弱勢兒童的生活經驗</li>
                                    </ul>
                                </p>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <h4 class="card-header"><i class="fa fa-file-text-o" aria-hidden="true"></i> 服務項目 & 內容</h4>
                            <div class="card-body">
                                <p class="card-title text-justify">
                                <ul class="number-list">
                                    <li>慈善捐款、捐贈物資</li>
                                    <li>執行「TAOM 二手腳踏車計畫｜２０輛腳踏車</li>
                                    <li>衛生教育課程、竹竿舞團康活動</li>
                                    <li>執行營養粥計畫</li>
                                    <li>彩繪教室牆面</li>
                                    <li>執行「ＴＡＯＭ一孩童一照片」攝影活動</li>
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
                                    捐贈部分，共計6,436元美金，分別為：
                                    <ul class="number-list">
                                        <li>金邊非營利機構 Advanced Centre for Empowerment 3,036美金，資助貧民窟服務據點計畫。</li>
                                        <li>暹粒天主堂St. John Catholic Church 3,200美金(其中1,200美金為購買學童上學腳踏車的捐款、1,000美金為營養粥計畫捐款、餘1,000美金為慈善捐款不指定用途)。</li>
                                        <li>仁愛傳教修女會Missionaries of Charity 兒童中心 200美金，資助兒童照顧日常開支。</li>
                                    </ul>
                                    捐贈物資部分，共計捐贈366公斤，兒童夏衣、文具、牙刷牙膏等衛生用品等物品。
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
                                    <li>帶隊老師/謝玉玲老師的話—海外志願服務讓學生離開舒適圈、打開五感體驗、在他人的需要上看見自己的責任、學習同理、開放與分享的心並在文化差異中重新看到自己的位置。</li>
                                    <li>黃于珊/社工系三年級的話—想念孩子的歡笑聲以及拿到物資雀躍的眼神，也許這就是我們帶給他們的快樂吧!</li>
                                    <li>林鈺惟/心理系三年級的話—他們的笑容是如此的天真，如此的單純，就如同一張白紙一樣，歡迎你替他漆上五彩繽紛的色彩。</li>
                                    <li>蘇柏宇/視傳系三年級的話—用最純粹的初生之犢勇氣面對這個世界，所到之處充滿希望。</li>
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
                                    透過一次次的捐款、物資捐贈，改善偏鄉及城市貧民窟的孩童因生活資源貧乏的困境，透過創意服務方案豐富弱勢孩童的生活經驗，包括：
                                    <ul class="number-unstyled">
                                        <li>支持St. John’s Catholic Church 的營養粥計畫，孩子可以有足夠的營養補充</li>
                                        <li>捐贈腳踏車作為偏遠村落孩童的上學交通工具，不中斷學業，持續學習與成長</li>
                                        <li>彩繪教室牆壁並提供充足的衛生用品及文具用品，維持孩童良好的學習品質與環境</li>
                                    </ul>
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
            $('.marquee').marquee({
                duration: 10000,
                gap: 50,
                delayBeforeStart: 0,
                direction: 'left',
                duplicated: true
            });
            var userTeam6 = {!! json_encode($userTeam6) !!};
            @if (Auth::check())
            if (userTeam6 === 1) {
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
                        window.location.href = "{{route('voteTeam6')}}";
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
