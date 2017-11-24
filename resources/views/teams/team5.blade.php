@extends('layouts.app')

@section('title')
    外國語文學系 尼泊爾暑期國際志工--尼泊爾學童夢想起飛
@endsection

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-12 col-md-3 mb-4">
                <img src="{{asset('img/team5/logo.jpg')}}" class="img-fluid rounded mb-4">
                <h4 class="text-justify">外國語文學系 尼泊爾暑期國際志工--尼泊爾學童夢想起飛</h4>
                <h5 class="text-center text-dark">【團隊理念】</h5>
                <p class="text-justify text-dark">
                    為協助尼泊爾學童在2015年強震後的受教權不因天災而有影響，本系學生赴當地學校，以所學專長進行英/華語教學和生活學習輔導，並捐贈當地孩童此次募集之圖書資源，以期讓他們獲得較佳之學習環境。外文系學生運用學生所學專長與知能，提供尼泊爾當地孩童有價值之服務，進一步激發青年志工對國際社會之使命感、責任感，增進台灣與尼泊爾民間相互瞭解及交流。</p>
                <button href="#" class="btn btn-primary btn-block mb-2" id="like-button"><i class="fa fa-thumbs-o-up"></i> 讚我一票</button>
                <h3 class="text-danger text-center"><i class="fa fa-heart faa-pulse animated" aria-hidden="true"></i> {{$countTeam5}}</h3>
            </div>
            <div class="col-12 col-md-9">
                <div class="slider mb-2">
                    <div class="slides">
                        <div class="slide"><img src="{{asset('img/team5/1.jpg')}}" class="img-fluid rounded"></div>
                        <div class="slide"><img src="{{asset('img/team5/2.jpg')}}" class="img-fluid rounded"></div>
                        <div class="slide"><img src="{{asset('img/team5/3.jpg')}}" class="img-fluid rounded"></div>
                        <div class="slide"><img src="{{asset('img/team5/4.jpg')}}" class="img-fluid rounded"></div>
                        <div class="slide"><img src="{{asset('img/team5/5.jpg')}}" class="img-fluid rounded"></div>
                        <div class="slide"><img src="{{asset('img/team5/6.jpg')}}" class="img-fluid rounded"></div>
                    </div>
                    <div class="controls">
                        <div class="captions">
                            <div class="caption">
                                <div class="marquee">
                                    外文系志工在Village Public English Boarding School前合影
                                </div>
                            </div>
                            <div class="caption">
                                <div class="marquee">
                                    外文系志工教導尼泊爾孩童中文的十二生肖念法及故事
                                </div>
                            </div>
                            <div class="caption">
                                <div class="marquee">
                                    外文系志工與學童在教室合影
                                </div>
                            </div>
                            <div class="caption">
                                <div class="marquee">
                                    外文系志工與學童在教室外合影
                                </div>
                            </div>
                            <div class="caption">
                                <div class="marquee">
                                    外文系志工雲冠傑和郭珈伶教導孩童製作風箏，期待孩童們的夢想起飛
                                </div>
                            </div>
                            <div class="caption">
                                <div class="marquee">
                                    外文系志工黃冠毓、陳姿霖和陳育萱代表系上捐贈書籍物資給該校校長Mr. Bhaju Ram Mahato
                                </div>
                            </div>
                        </div>
                        <div class="pagination"></div>
                    </div>
                </div>
                <iframe width="100%" height="500" src="https://www.youtube.com/embed/RXvORXL9V2U" frameborder="0" allowfullscreen></iframe>
                <h3 class="text-center font-italic text-secondary background mt-4 mb-4"><span>尼的停泊、爾等夢想起飛 NEPAL-Never End Peace and Love</span></h3>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="card mb-4">
                            <h4 class="card-header"><i class="fa fa-clock-o" aria-hidden="true"></i> 服務期間 & 地點</h4>
                            <div class="card-body">
                                <p class="card-tite">
                                <ul>
                                    <li>服務期間：106年7月9日-106年7月21日</li>
                                    <li>服務地點：尼泊爾奇旺國家公園</li>
                                </ul>
                                </p>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <h4 class="card-header"><i class="fa fa-users" aria-hidden="true"></i> 服務對象</h4>
                            <div class="card-body">
                                <p class="card-title text-justify">
                                    尼泊爾奇旺國家公園附近Village Public English Boarding School，約50位中小學學童來自經濟弱勢家庭，該校教學之軟硬體資源匱乏。
                                </p>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <h4 class="card-header"><i class="fa fa-file-text-o" aria-hidden="true"></i> 服務項目 & 內容</h4>
                            <div class="card-body">
                                <p class="card-title text-justify">
                                <ul class="number-list">
                                    <li>外文系學生服務項目包括：(1)英語/華語教學(2)世界文化教學(3)環保教學(4)美勞教學。外文系學生發揮語言的專長、管理學院及設計學院的學生亦發揮所學專長，與當地的學生友善而熱情的互動，並且串聯起深厚的友誼。</li>
                                    <li>外文系學生並捐贈募集之圖書資源給Village Public English Boarding School Library，並輔導學童閱讀和學習。</li>
                                </ul>
                                </p>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <h4 class="card-header"><i class="fa fa-paw" aria-hidden="true"></i> 腳步與足跡</h4>
                            <div class="card-body">
                                <p class="card-title text-justify">
                                    行前由外文系陳淑娟主任主持3場行前準備會，學生於行前準備會進行分組，準備教案並進行教材製作。此次國際志工服務雖然是第一次進行，但學生於出發前已研習尼泊爾當地風土民情和文化、努力準備教案、積極籌募物資。到了當地發現學生對於求知的渴望以及物資的匱乏，更油然而生助人的熱誠，盡一己之力傳授知識。志工進行英語/華語教學、各國文化教學、環保教學、美勞教學等，提供多元活潑之學習活動，讓當地學童學習不同的知識，並有機會與國際接軌。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="card mb-4">
                            <h4 class="card-header"><i class="fa fa-compass" aria-hidden="true"></i> 服務過程 & 實施方向</h4>
                            <div class="card-body">
                                <p class="card-title text-justify">
                                <ul class="number-list">
                                    <li>亞洲大學外國語文學系於今年暑假發起至尼泊爾中小學擔任教學志工的活動，從四月份開始宣傳及招募，獲得眾多學生迴響，最後共計15位學生熱情參與。</li>
                                    <li>行前由外文系陳淑娟主任主持3場行前準備會，學生分組準備教案，並進行教材製作與相關物資之募集。</li>
                                    <li>本次服務學校Village Public English Boarding School位於尼泊爾奇旺國家公園附近，服務期間雖正值當地學校期末考，但校方仍安排學生於考試後回校參與活動。</li>
                                    <li>除了校方支持更因為多位當地友人Mr. Lok、Mr. Hari和Mr. Bishnu熱情協助，才使此次服務順利圓滿。</li>
                                    <li>外文系學生並規劃將此次志工服務成為系上的常態活動，在對方學校成立服務據點，希冀可以服務更多學生。 </li>
                                </ul>
                                </p>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <h4 class="card-header"><i class="fa fa-smile-o" aria-hidden="true"></i> 師生心得反思</h4>
                            <div class="card-body">
                                <p class="card-title text-justify">
                                <ul>
                                    <li>陳淑娟主任的話—學生努力準備教案，與尼泊爾當地學童歡樂互動，且在出發前積極籌募物資，展現自發性學習精神。到了當地發現學生求知若渴，盡力傳授知識，肩負世界公民責任，期望能永續進行此計畫。</li>
                                    <li>黃冠毓的話—跟著他們生活在一起好快樂，孩子們踴躍的發問。他們那顆好學的心，是我們所需學習的。 </li>
                                    <li>江坤霖的話—當地的小朋友雖然物質缺乏，但是那份勤學的心非常的強烈，當地人非常知足感恩，而我也要警醒自己要懂得感恩、知足惜福。</li>
                                    <li>吳和謙的話—一群無邪的孩子面對資源缺乏的環境，卻仍對學習充滿熱情。每位孩子都有自己的特色，如果有適當的資源，他們一定都能闖出自己的一片天涯。</li>
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
                                    志工服務期間，學童們專注聽課和踴躍發問的積極態度讓志工們有很深的感觸，若這些學童能持續獲得充分之教學資源，他們的未來有無限的可能，他們也會將曾獲得的協助傳遞給其他需要幫助的人。此外，從學童們天真感恩的笑容看見此次志工服務活動帶給他們的快樂！志工們盡一己之力，給予學童協助，十幾天的教學內容或許能帶給學童們的並不多，但大家都擁有最美的回憶並建立了濃厚的情感，也為當地學童開啟一扇知識之窗，啟發他們對未來的夢想，並鼓勵他們勇敢逐夢。
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
            var StartTime = new Date(2017, 10, 24, 9, 0);
            var EndTime = new Date(2017, 11, 1, 16, 0);
            var current = Date.now();
            var currentTime = Date(current);

            if (Date.parse(currentTime) < Date.parse(StartTime)) {
                $('#like-button').prop('disabled', true);
                $('#like-button').text('投票尚未開始喔！');
            } else if (Date.parse(currentTime) > Date.parse(EndTime)) {
                $('#like-button').prop('disabled', true);
                $('#like-button').text('投票尚未開始喔！');
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
            var userTeam5 = {!! json_encode($userTeam5) !!};
            @if (Auth::check())
                if (userTeam5 === 1) {
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
                        window.location.href = "{{route('voteTeam5')}}";
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
