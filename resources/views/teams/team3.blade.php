@extends('layouts.app')

@section('title')
    印度暑期青年志願服務暨社福機構交流計畫
@endsection

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-12 col-md-3 mb-4">
                <img src="{{asset('img/team3/logo.jpg')}}" class="img-fluid rounded mb-4">
                <h4 class="text-justify">印度暑期青年志願服務暨社福機構交流計畫</h4>
                <h5 class="text-center text-dark">【團隊理念】</h5>
                <p class="text-justify text-dark">本團隊針對印度貧窮及弱勢人口之志願服務，並建構本校出團師生與印度清奈地區HCAS社工系師生及當地社福機構協力合作服務模式。希望透過此計畫讓兩國社會服務人力可以彼此交流、相互學習、建立與印度清奈地區青年之協力合作模式，以及建立國際團隊合作與協調的典範。</p>
                <button href="#" class="btn btn-primary btn-block mb-2" id="like-button"><i class="fa fa-thumbs-o-up"></i> 讚我一票</button>
                <h3 class="text-danger text-center"><i class="fa fa-heart faa-pulse animated" aria-hidden="true"></i> {{$countTeam3}}</h3>
            </div>
            <div class="col-12 col-md-9">
                <div class="slider mb-2">
                    <div class="slides">
                        <div class="slide"><img src="{{asset('img/team3/1.jpg')}}" class="img-fluid rounded"></div>
                        <div class="slide"><img src="{{asset('img/team3/2.jpg')}}" class="img-fluid rounded"></div>
                        <div class="slide"><img src="{{asset('img/team3/3.jpg')}}" class="img-fluid rounded"></div>
                        <div class="slide"><img src="{{asset('img/team3/4.jpg')}}" class="img-fluid rounded"></div>
                        <div class="slide"><img src="{{asset('img/team3/5.jpg')}}" class="img-fluid rounded"></div>
                        <div class="slide"><img src="{{asset('img/team3/6.jpg')}}" class="img-fluid rounded"></div>
                        <div class="slide"><img src="{{asset('img/team3/7.jpg')}}" class="img-fluid rounded"></div>
                        <div class="slide"><img src="{{asset('img/team3/8.jpg')}}" class="img-fluid rounded"></div>
                    </div>
                    <div class="controls">
                        <div class="captions">
                            <div class="caption">MCCSS的婦女幫我們繪製印度圖騰HANNA，她們平常可以利用繪製HANNA賺取生活費</div>
                            <div class="caption">入境隨俗，親身體驗當地文化，穿著當地服飾Saree紗麗</div>
                            <div class="caption">利用明信片與Vishranthi中的老人介紹台灣，並且寫下祝福的話語，再贈送給她</div>
                            <div class="caption">在MCCSS每個人都擁有獨一無二的HANNA後，與機構社工們及印度同學的大合照</div>
                            <div class="caption">教導NIEPMD中的多重障礙兒童使用乾洗手，並進行衛生教育</div>
                            <div class="caption">與NIEPMD中的多重障礙兒童玩球，促進其手腳協調</div>
                            <div class="caption">與NIEPMD的社工員、老師、多重障礙兒童及其家長合影</div>
                            <div class="caption">與Vishranthi中的老人住民聊天、交流，我們就像他們的孫子孫女一樣</div>
                        </div>
                        <div class="pagination"></div>
                    </div>
                </div>
                <iframe width="100%" height="500" src="https://www.youtube.com/embed/cMOBwPmcqK8" frameborder="0" allowfullscreen></iframe>
                <h3 class="text-center font-italic text-secondary background mt-4 mb-4"><span>Incredible!ndia 就是要印度！</span></h3>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="card mb-4">
                            <h4 class="card-header"><i class="fa fa-clock-o" aria-hidden="true"></i> 服務期間 & 地點</h4>
                            <div class="card-body">
                                <p class="card-tite">
                                    <ul>
                                        <li>服務期間：106年06月25日-106年07月07日</li>
                                        <li>服務地點：印度南部清奈至HCAS印度斯坦大學交流，並到NIEPMD、Vishranthi Old Age Home、MCCSS此三個機構服務。</li>
                                    </ul>
                                </p>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <h4 class="card-header"><i class="fa fa-users" aria-hidden="true"></i> 服務對象</h4>
                            <div class="card-body">
                                <p class="card-title text-justify">
                                <ul class="number-list">
                                    <li>Vishranthi Old Age Home(維希藍帝老人之家)之老人住民
                                        NIEPMD(多重障礙機構)之兒童</li>
                                    <li>MCCSS(馬德拉斯基督教社會服務委員會)之服務邊緣或受性剝削女性</li>
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
                                    <ul class="number-list">
                                        <li>深化與當地大學及社會福利機構之合作關係，觀摩與瞭解印度清奈地區社會福利組織之運作模式，認識發展中國家非營利組織運作的資源條件與多元樣貌。</li>
                                        <li>培育本校師生與印度社會福利組織合作之能力，以整合雙方之資源與優勢、滿足當地服務使用者之需求，俾便使本校師生未來能投入更多有意義之國際服務計畫。</li>
                                        <li>訪問印度清奈的印度斯坦文理學院及馬德拉斯基督教學院之社會工作學系，進行學術與服務交流，並瞭解社會工作專業於開發中國家服務的現況與困境。</li>
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
                                    <ul class="number-list">
                                        <li>NIEPMD—帶領適合多重障礙兒童的各樣活動。</li>
                                        <li>Vishranthi—陪伴並和年長者聊天、協助飯食、表演及交流娛樂節目。</li>
                                        <li>MCCSS—陪伴婦女們及製作手工藝品。</li>
                                    </ul>
                                </p>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <h4 class="card-header"><i class="fa fa-paw" aria-hidden="true"></i> 腳步與足跡</h4>
                            <div class="card-body">
                                <p class="card-title text-justify">
                                    我們這一次的服務對象有身心障礙的小朋友、有老人、還有遭受家暴婦女，不同的服務對象有不同的服務方式。我們學習如何陪伴身心障礙的小朋友，帶他們玩遊戲；對於老人的服務，我們看長輩的表演，長輩也帶我們做健康操，我們也一一到每位長輩的床前關懷；至於家暴婦女，我們分享她們運用自助團體學習成長走出家暴，展現學習成果，我們到她們經營的商店購買她們做的衣服和飾品。我們這一次的服務讓被服務者了解他們是有能力成為一個服務他人的人。我們覺得這是對被服務者最大的肯定和貢獻。
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
                                        <li>淑娟的話：印度女人的紗麗令我們深深著迷，進入印度這個國度，會顛覆過去對印度貧窮落後的了解。印度貧富差距大，但無論貧富，每個人對於傳統文化的保持與熱愛，落實在生活中，處處見到文化。每場迎賓大禮讓我們好感動，深覺備受禮遇。這是一個深具內涵的國家，即使去一趟印度不容易，我還是想再去。</li>
                                        <li>郁玫老師的話：「Incredible!ndia」是印度旅遊局提出的slogan，也是形容這趟志工團再適合不過了。雖然同學們走訪服務機構時有些語言的隔閡，但笑容是人類的共同語言，同學們懂得感恩與回饋，也更有國際觀，尊重不同文化，希望第一屆印度志工經驗能繼續傳承下去。</li>
                                        <li>思惟的話：超棒的經驗!結交了一群印度與台灣能真心相待彼此的朋友，愛大家!</li>
                                        <li>誼芝的話：帶著一顆熱忱助人的心，勇闖印度；用付出來體驗異國風情，滿載而歸。</li>
                                        <li>鈺縈的話：不只單純去當「志工」，感覺是在那裡「生活」。許多的差異與衝擊，融入當地，一切都好奇妙。</li>
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
                                    國際志工可貴的是有來自不同國度溫暖的關懷，以及不同文化的分享。台灣和印度的文化差異大，彼此學習的火花和笑聲不斷。被服務者對於遠道而來的我們很好奇，很認真地了解我們，並且分享他們的文化。特別是和長者的互動印象最深刻，雖然語言不通，但是從書寫卡片、手機照片來分享彼此的關懷。從台灣到印度的志願服務帶給印度的被服務者不同的體驗，相信對他們未來的生命會留下一份美好的記憶，再分享給其他的朋友，散播更多的愛和關懷。
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
            var userTeam3 = {!! json_encode($userTeam3) !!};
            @if (Auth::check())
            if (userTeam3 === 1) {
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
                        window.location.href = "{{route('voteTeam3')}}";
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
