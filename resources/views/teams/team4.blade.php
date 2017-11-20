@extends('layouts.app')

@section('title')
    亞洲大學國際醫療志工團-2017年尼泊爾義診-送愛到天堂計劃
@endsection

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-12 col-md-3 mb-4">
                <img src="{{asset('img/team4/logo.jpg')}}" class="img-fluid rounded mb-4">
                <h4 class="text-justify">亞洲大學國際醫療志工團-2017年尼泊爾義診-送愛到天堂計劃</h4>
                <h5 class="text-center text-dark">【團隊理念】</h5>
                <p class="text-justify text-dark">亞洲大學國際醫療志工服務團，成員為亞洲大學醫學暨健康學院各科系之在學學生志工，發揮團隊合作的精神，運用在校所學之醫療照護專業與技能，秉持視病猶親的服務熱忱，至尼泊爾喬哥地區照護當地民眾的醫療需求。本團隊成立的宗旨為經由不同醫護科系學生志工的跨領域合作，提供尼泊爾喬哥地區居民所需的醫療照護。
                </p>
                <button href="#" class="btn btn-primary btn-block mb-2" id="like-button"><i class="fa fa-thumbs-o-up"></i> 讚我一票</button>
                <h3 class="text-danger text-center"><i class="fa fa-heart faa-pulse animated" aria-hidden="true"></i> {{$countTeam4}}</h3>
            </div>
            <div class="col-12 col-md-9">
                <div class="slider mb-2">
                    <div class="slides">
                        <div class="slide"><img src="{{asset('img/team4/1.jpg')}}" class="img-fluid rounded"></div>
                        <div class="slide"><img src="{{asset('img/team4/2.jpg')}}" class="img-fluid rounded"></div>
                        <div class="slide"><img src="{{asset('img/team4/3.jpg')}}" class="img-fluid rounded"></div>
                        <div class="slide"><img src="{{asset('img/team4/4.jpg')}}" class="img-fluid rounded"></div>
                        <div class="slide"><img src="{{asset('img/team4/5.jpg')}}" class="img-fluid rounded"></div>
                        <div class="slide"><img src="{{asset('img/team4/6.jpg')}}" class="img-fluid rounded"></div>
                        <div class="slide"><img src="{{asset('img/team4/7.jpg')}}" class="img-fluid rounded"></div>
                        <div class="slide"><img src="{{asset('img/team4/8.jpg')}}" class="img-fluid rounded"></div>
                        <div class="slide"><img src="{{asset('img/team4/9.jpg')}}" class="img-fluid rounded"></div>
                    </div>
                    <div class="controls">
                        <div class="captions">
                            <div class="caption">
                                <div class="marquee">
                                    亞大師生為尼泊爾奇旺區喬哥地民眾進行團體衛教
                                </div>
                            </div>
                            <div class="caption">
                                <div class="marquee">
                                    亞大志工團成員討論如何分裝提供給尼泊爾山區民眾的藥物
                                </div>
                            </div>
                            <div class="caption">
                                <div class="marquee">
                                    在團體衛教結束後，民眾踴躍嘗試被測血糖，志工幫民眾測血糖
                                </div>
                            </div>
                            <div class="caption">
                                <div class="marquee">
                                    志工們至山區義診，需先健行一段山路
                                </div>
                            </div>
                            <div class="caption">
                                <div class="marquee">
                                    志工們至山區義診，需先穿越溪流
                                </div>
                            </div>
                            <div class="caption">
                                <div class="marquee">
                                    志工幫學童洗髮，清除頭蝨
                                </div>
                            </div>
                            <div class="caption">
                                <div class="marquee">
                                    志工幫病患測血糖
                                </div>
                            </div>
                            <div class="caption">
                                <div class="marquee">
                                    志工於診間協助義診及量測血壓
                                </div>
                            </div>
                            <div class="caption">
                                <div class="marquee">
                                    志工至山區媽媽會進行團體衛教
                                </div>
                            </div>
                        </div>
                        <div class="pagination"></div>
                    </div>
                </div>
                <iframe width="100%" height="500" src="https://www.youtube.com/embed/cMOBwPmcqK8" frameborder="0" allowfullscreen></iframe>
                <h3 class="text-center font-italic text-secondary background mt-4 mb-4"><span>有尼的投票，我們會做得更好！</span></h3>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="card mb-4">
                            <h4 class="card-header"><i class="fa fa-clock-o" aria-hidden="true"></i> 服務期間 & 地點</h4>
                            <div class="card-body">
                                <p class="card-tite">
                                    <ul>
                                        <li>服務期間：106年8月2日-106年8月14日</li>
                                        <li>服務地點：尼泊爾˙奇旺區喬哥地（Jugedi, Chitwan）</li>
                                    </ul>
                                </p>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <h4 class="card-header"><i class="fa fa-users" aria-hidden="true"></i> 服務對象</h4>
                            <div class="card-body">
                                <p class="card-title text-justify">
                                    尼泊爾喬哥地區當地民眾。
                                </p>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <h4 class="card-header"><i class="fa fa-file-text-o" aria-hidden="true"></i> 服務項目 & 內容</h4>
                            <div class="card-body">
                                <p class="card-title text-justify">
                                <ul class="number-list">
                                    <li>針對尼泊爾喬哥地地區居民進行衛生教育輔導課程。</li>
                                    <li>針對尼泊爾喬哥地地區居民進行醫療照護、用藥諮詢、營養評估與視力保健服務。</li>
                                    <li>評估尼泊爾喬哥地地區兒童皮膚狀況，如遇到臭頭、或是長頭蝨的孩子，協助幫孩子剪髮、洗頭。</li>
                                    <li>協助尼泊爾喬哥地地區居民改善水資源、增進深耕理念。 </li>
                                </ul>
                                </p>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <h4 class="card-header"><i class="fa fa-smile-o" aria-hidden="true"></i> 師生心得反思</h4>
                            <div class="card-body">
                                <p class="card-title text-justify">
                                <ul>
                                    <li>佩琳老師的話—本團隊進行山區義診，傷口換藥，幫兒童頭蝨用藥，團體衛教，量血壓及測血糖，助人為樂。</li>
                                    <li>國正的話—擔任國際志工收獲很多，很開心能來尼泊爾義診，希望這邊的人們可以越來越健康。</li>
                                    <li>千閔的話—從高中開始做各種志工，來到這才知道，原來我們可以為他們做很多事情，才發現這些事對他們有很長遠的影響。</li>
                                    <li>偉倫的話—在義診中多次的共鳴與感動，當病人換好藥和拿到藥後的笑容是不會騙人的，他們會真誠的雙手合十真誠的跟你說一聲（哪麻斯哋）。</li>
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
                                    參加人員：
                                    <ul>
                                        <li>由護理學系主導，招募徵選醫學暨健康學院學生</li>
                                    </ul>
                                    服務內容確認：
                                    <ul class="number-list">
                                        <li>透過聯新期望醫療中心推介。</li>
                                        <li>由亞洲大學護理系系主任及教師與聯新期望醫療中心負責人商議本次服務內容及簽具合作意向書</li>
                                    </ul>
                                    整體服務規劃：
                                    <ul class="list-unstyled">
                                        <li>與聯新期望醫療中心團隊合作，改善尼泊爾喬哥地居民衛生環境及建立醫療知識。</li>
                                    </ul>
                                    受服務人員方面：
                                    <ul class="number-list">
                                        <li>針對尼泊爾喬哥地地區居民進行衛生教育輔導課程。</li>
                                        <li>針對尼泊爾喬哥地地區居民進行醫療照護、用藥諮詢、營養評估與視力保健服務。</li>
                                        <li>評估尼泊爾喬哥地地區兒童皮膚狀況，如遇到臭頭、或是長頭蝨的孩子，協助幫孩子剪髮、洗頭。</li>
                                        <li>協助尼泊爾喬哥地地區居民改善水資源、增進深耕理念。</li>
                                    </ul>
                                    人員教育訓練/培訓：
                                    <ul class="number-list">
                                        <li>於確認人員後，進行基礎課程及服務能力精進培訓。</li>
                                        <li>由學生與聯新期望醫療中心人員共組團隊，討論與企劃服務活動，並學習各項之能力。</li>
                                        <li>邀請之前參與過此國際醫療志工服務之師長、他校系學長姐，進行分享與帶領。</li>
                                    </ul>
                                </p>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <h4 class="card-header"><i class="fa fa-paw" aria-hidden="true"></i> 腳步與足跡</h4>
                            <div class="card-body">
                                <p class="card-title text-justify">
                                <ul>
                                    <li>團隊本身：每位團隊成員實際參與服務之時數總和為192小時，青年志工各次出隊人數之總和為18人次，團隊各次出隊接受服務對象人數之總和300人次。</li>
                                    <li>被服務的對象：約有30位國小學童接受清除頭蝨之診療服務，約有25位民眾(包含學童)接受傷口照護，依當地NGO統計，喬哥地區學童頭蝨發生率有逐年下降趨勢。</li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-4">
                        <div class="card">
                            <h4 class="card-header"><i class="fa fa-gratipay" aria-hidden="true"></i> 愛的延續</h4>
                            <div class="card-body">
                                <ul class="number-list">
                                    <li>由不同醫護相關科系之學生志工組成跨領域服務團隊，依照當地民眾現階段的最需要的協助，設計服務方案，例如：此次進行山區媽媽會團體衛教，此為山區居民第一次接受以簡報授課的方式，傳達孕期營養，預防三高及慢性阻塞性肺病之相關衛教</li>
                                    <li>與在地成立之NGO聯新期望保健組織（Landseed Health Care Chitwan, Nepal）合作，以「Health」 為基點，共同擬定階段性服務目標，逐步實現社區教育中心目標，賦予當地居民健康智識能力，讓他們獲得自我經營、自力更生的能力。努力達成世界衛生組織(WHO)提出的 17 項永續發展目標（SDGs）「實踐 NGO 組織自立更生與永續發展的目標」。 </li>
                                </ul>
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
            var userTeam4 = {!! json_encode($userTeam4) !!};
            @if (Auth::check())
            if (userTeam4 === 1) {
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
                        window.location.href = "{{route('voteTeam4')}}";
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
