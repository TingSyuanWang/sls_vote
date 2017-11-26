@extends('layouts.app')

@section('title')
    OProSS-Africa 送愛到天堂
@endsection

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-12 col-md-3 mb-4">
                <img src="{{asset('img/team7/logo.jpg')}}" class="img-fluid rounded mb-4">
                <h4 class="text-justify">OProSS-Africa 送愛到天堂</h4>
                <h5 class="text-center text-dark">【團隊理念】</h5>
                <p class="text-justify text-dark">本專案係帶領學生前往非洲賴索托及非洲史瓦濟蘭進行「海外專業服務學習」專案，帶領學生對於海外在地機構以及所在之社區，進行協助，運用學生在醫學健康、創意設計、資訊電機、管理、人文社會的專業技能，改善當地居民的教育、生活、健康、社區產業經營等之水平與環境。</p>
                <button href="#" class="btn btn-primary btn-block mb-2" id="like-button"><i class="fa fa-thumbs-o-up"></i> 讚我一票</button>
                <a href="https://www.facebook.com/pages/%E4%BA%9E%E6%B4%B2%E5%A4%A7%E5%AD%B8-%E7%94%A8%E6%84%9B%E6%94%B9%E8%AE%8A%E4%B8%96%E7%95%8Cx%E5%BF%97%E5%B7%A5%E5%A4%A7%E5%AD%B8-%E9%97%9C%E6%87%B7%E6%B4%BB%E5%8B%95/2010527529182896" target="_blank" class="btn btn-warning btn-block mb-2 d-none d-md-block d-lg-block" id="facebook-share"><i class="fa fa-map-marker"></i> 電腦分享活動並打卡</a>
                <div class="row">
                    <div class="col-6">
                        <a href="fb://page/2010527529182896" class="btn btn-success btn-block mb-2 d-block d-md-none d-lg-none"><i class="fa fa-android"></i> 打卡分享</a>
                    </div>
                    <div class="col-6">
                        <a href="fb://page/?id=2010527529182896" class="btn btn-danger btn-block mb-2 d-block d-md-none d-lg-none"><i class="fa fa-apple"></i> 打卡分享</a>
                    </div>
                </div>
                <h3 class="text-danger text-center"><i class="fa fa-heart faa-pulse animated" aria-hidden="true"></i> {{$countTeam7}}</h3>
            </div>
            <div class="col-12 col-md-9">
                <div class="slider mb-2">
                    <div class="slides">
                        <div class="slide"><img src="{{asset('img/team7/1.jpg')}}" class="img-fluid rounded"></div>
                        <div class="slide"><img src="{{asset('img/team7/2.jpg')}}" class="img-fluid rounded"></div>
                        <div class="slide"><img src="{{asset('img/team7/3.jpg')}}" class="img-fluid rounded"></div>
                        <div class="slide"><img src="{{asset('img/team7/4.jpg')}}" class="img-fluid rounded"></div>
                        <div class="slide"><img src="{{asset('img/team7/5.jpg')}}" class="img-fluid rounded"></div>
                        <div class="slide"><img src="{{asset('img/team7/6.jpg')}}" class="img-fluid rounded"></div>
                        <div class="slide"><img src="{{asset('img/team7/7.jpg')}}" class="img-fluid rounded"></div>
                        <div class="slide"><img src="{{asset('img/team7/8.jpg')}}" class="img-fluid rounded"></div>
                        <div class="slide"><img src="{{asset('img/team7/9.jpg')}}" class="img-fluid rounded"></div>
                    </div>
                    <div class="controls">
                        <div class="captions">
                            <div class="caption">OProSS學生下鄉發送熱食</div>
                            <div class="caption">OProSS學生下鄉贈予物資</div>
                            <div class="caption">OProSS學生與院童互動-1</div>
                            <div class="caption">OProSS學生與院童互動-2</div>
                            <div class="caption">院童們準備時裝秀的衣服</div>
                            <div class="caption">院童進行情緒大富翁課程</div>
                            <div class="caption">院童進行旅遊課程</div>
                            <div class="caption">院童進行時秀之大合照</div>
                            <div class="caption">院童進行水火箭課程與亞大學生互動</div>
                        </div>
                        <div class="pagination"></div>
                    </div>
                </div>
                <iframe width="100%" height="500" src="https://www.youtube.com/embed/7hYA8VdkWXU" frameborder="0" allowfullscreen></iframe>
                <h3 class="text-center font-italic text-secondary background mt-4 mb-4"><span>12000 公里的距離，送愛到天堂</span></h3>
                <div class="row">
                    <div class="col-12 col-md-6 mb-4">
                        <div class="card">
                            <h4 class="card-header"><i class="fa fa-clock-o" aria-hidden="true"></i> 服務期間 & 地點</h4>
                            <div class="card-body">
                                <p class="card-tite">
                                    <ul>
                                        <li>服務期間：106年7月11日-106年7月31日</li>
                                        <li>服務地點：非洲賴索托ACC 分校</li>
                                        <li>服務期間：106年8月1日-106年8月11日</li>
                                        <li>服務地點：非洲史瓦濟蘭ACC 分校</li>
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
                                    以無國界方式關懷國外議題為團隊理念，推行學生海外自主學習+ProjectBased Learning 的方式，推翻過往「一次性」的服務與學習，強調與國外的受輔導單位與社區，建立永續服務的長久經營模式。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="card mb-4">
                            <h4 class="card-header"><i class="fa fa-users" aria-hidden="true"></i> 服務對象</h4>
                            <div class="card-body">
                                <p class="card-title text-justify">
                                    非洲ACC 阿彌陀佛關懷中心：非洲賴索托ACC 分校、非洲史瓦濟蘭
                                </p>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <h4 class="card-header"><i class="fa fa-smile-o" aria-hidden="true"></i> 師生心得反思</h4>
                            <div class="card-body">
                                <p class="card-title text-justify">
                                <ul>
                                    <li>林君維主任的話—OProSS 非洲團此行與非洲阿彌陀佛關懷中心ACC 合作，到賴索托及史瓦濟蘭院區服務，除了學生自行設計課程幫院區院童上課外，還參與下鄉發放物資的活動，並與賴索托前總理進行會談，也到史瓦濟蘭拜訪台灣駐史瓦濟蘭大使館，未來將會與非洲阿彌陀佛關懷中心ACC 進行長期合作，以一萬兩千公里的距離，送愛到非洲為主軸，執行一系列的活動。</li>
                                    <li>職治系劉至恩同學的話—透過這次在非洲和當地小孩相處，我得到很不一樣的人生觀。他們讓我學會知足、活在當下，讓我感受到其實生活可以很簡單。</li>
                                    <li>心理系林易樺同學的話—這一趟，勇敢跨出舒適圈，也發現自己原來是如此的幸福，而世界上還有許多孩子需要幫忙，現在的我們應該更加珍惜所擁有的，並在自己能力所及的範圍，去幫助更多人。資傳系呂采昕同學說到了一個自己從來沒想過會去的地方，才發現自己是如此渺小，看到世界的另一個角落，學會感恩學會珍惜，並希望未來有能力再到更多地方幫助他人看見希望。</li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-4">
                        <div class="card mb-4">
                            <h4 class="card-header"><i class="fa fa-file-text-o" aria-hidden="true"></i> 服務項目 & 內容</h4>
                            <div class="card-body">
                                <p class="card-title text-justify">
                                    集結11 位來自醫健學院、創意設計學院及管理學院不同科系的同學，依據所學不同的專業、能力，為孤兒院院生安排一個月的課程，除了有折紙飛機、玩飛行魔杯、投石器、濾水器實驗、降落傘、氣球噴射車、酸鹼氣球、靜電報紙等，藉助各種遊戲輕鬆學習，同時安排系列講座，如「大學科系介紹與分享」、「幫助院生生涯規劃、「性別平等」、「世界地理觀及旅遊」等課程，引發非洲學童的學習興趣。
                                </p>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <h4 class="card-header"><i class="fa fa-paw" aria-hidden="true"></i> 腳步與足跡</h4>
                            <div class="card-body">
                                <p class="card-title text-justify">
                                    此次服務對於非洲的孤兒院生來說是一個新的接觸，以往的志工來訪時都只是簡單照顧其生活起居，此次OProSS 來訪，為孩子們帶來了不同以往的新觀念。亞大學生根據其科系所學，為孩子們設計了淺顯易懂的課程，如時尚設計系的謝欣穎同學幫院生舉辦一場屬於他們、別開生面的時尚秀（fashion show）、心理系林易樺同學也為院生設計一組結合各種情緒的桌遊，藉由活動的過程中，去認識各種不同的情緒、健管系陳守哲同學設計「飲水衛生與濾水器」課程，藉由飲水衛生宣導，強調院生對於水的觀念、休憩系賴季楓同學透過設計旅遊課程活動，激發院生對休閒觀光領域的興趣、會資系李可邵同學的「爆米花生產與行銷策略」課程。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-4">
                        <div class="card">
                            <h4 class="card-header"><i class="fa fa-gratipay" aria-hidden="true"></i> 愛的延續</h4>
                            <div class="card-body">
                                <p class="card-title text-justify">
                                    <ul>
                                        <li>時尚設計系的謝欣穎同學幫院生舉辦一場別開生面的時尚秀（fashion show），她教導非洲學童利用日常生活最常見的報紙當剪裁的材料，不但自己當設計師，也穿起屬於自己的服飾作品，自信地走在伸展台上，台下不斷傳來笑聲、掌聲，學童們所展現的不只是作品上的華麗，還有院生們對自己創意的自信。</li>
                                        <li>心理系林易樺同學為院生設計一組結合各種情緒的桌遊，藉由活動的過程中，去認識各種不同的情緒，以輕鬆的遊戲形式，讓院生可以認識自己的心情狀況，再引導院生學會表達自己的情緒和想法，迴響熱烈。</li>
                                        <li>休憩系賴季楓同學透過設計旅遊課程活動，激發院生對休閒觀光領域的興趣，進一步對賴索托這塊土地產生更深層的認同及歸屬感。</li>
                                        <li>會資系李可邵同學的「爆米花生產與行銷策略」課程，讓高中的院生DIY 爆爆米花，再把它當成商品，並分組進行各種促銷策略，由過程中學習生產與行銷的技巧。</li>
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

            var userTeam7 = {!! json_encode($userTeam7) !!};
            @if (Auth::check())
            if (userTeam7 === 1) {
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
                        window.location.href = "{{route('voteTeam7')}}";
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
