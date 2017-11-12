@extends('layouts.app')

@section('title')
    柬團第八梯：柬埔寨弱勢社區服務方案
@endsection

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-12 col-lg-3 mb-4">
                <h1>團隊名稱</h1>
                <button href="#" class="btn btn-primary btn-block" id="like-button"><i class="fa fa-thumbs-o-up"></i> 讚我一票</button>
                <h3>人氣：{{$countTeam6}}</h3>
            </div>
            <div class="col-12 col-lg-9">
                <div class="slickwrapper">
                    <img src="{{asset('img/team6/1.jpg')}}" class="img-fluid rounded">
                    <img src="{{asset('img/team6/2.jpg')}}" class="img-fluid rounded">
                    <img src="{{asset('img/team6/3.jpg')}}" class="img-fluid rounded">
                    <img src="{{asset('img/team6/4.jpg')}}" class="img-fluid rounded">
                    <img src="{{asset('img/team6/5.jpg')}}" class="img-fluid rounded">
                    <img src="{{asset('img/team6/6.jpg')}}" class="img-fluid rounded">
                    <img src="{{asset('img/team6/7.jpg')}}" class="img-fluid rounded">
                </div>
                <h1>影片</h1>
                <hr>
                <h2>【競選標語】</h2>
                <p>
                    柬單幸福 • 愛滿寨，我們都在！
                </p>
                <h2>【服務期間 & 地點】</h2>
                <ul>
                    <li>服務期間：106年7月2日-106年7月16日</li>
                    <li>服務地點：柬埔寨金邊貧民窟、暹粒偏鄉村落 </li>
                </ul>
                <h2>【服務對象】</h2>
                <p>以金邊貧民窟及暹粒偏遠村落弱勢兒童為主，包括：</p>
                <ul>
                    <li>金邊部分</li>
                    <ul class="number-unstyled">
                        <li>Wat Thann Heimberg, Rudi Boa Centre, Young Leader Centre, Kandal Community Centre</li>
                    </ul>
                    <li>暹粒部分</li>
                    <ul class="number-unstyled">
                        <li>Taom, Chong Khneas, Kompong Khleang, Khnar Thmey, Missionaries of Charity </li>
                    </ul>
                </ul>
                <h2>【團隊理念】</h2>
                <p>
                「柬團第八梯：柬埔寨弱勢社區服務方案」延續前七梯次的服務能量，於偏鄉弱勢社區進行服務，透過海外跨文化服務，讓學生發揮潛能與學科訓練專長，建立國際視野與領導統籌能力，也持續強化與柬埔寨大專青年的協力合作模式，讓跨國青年學生彼此交流、相互學習、建立國際團隊合作與協調的能力。
                </p>
                <h2>【服務過程 & 實施方向】</h2>
                <ul
                    <li>海外服務前的國內籌備工作長達5個月，包括：</li>
                    <ul class="number-list">
                        <li>校內外的擺攤義賣、服務演練、社區慈善募款、全台愛心物資募集與分類等</li>
                        <li>著重草根力量、庶民參與，募集來自台灣各角落的愛心物資及慈善捐款，也服務大里、霧峰等學校周邊的社區。</li>
                    </ul>
                </ul>
                <ul>
                        <li>海外實地服務以偏鄉村落及城市貧民窟為主，包括：</li>
                    <ul class="number-list">
                        <li>弱勢村落/貧民窟的房屋修繕、營養粥計畫、衛生教育課程等</li>
                        <li>主軸服務強調創新模式，透過竹竿舞團體活動，擴大弱勢兒童的生活經驗</li>
                    </ul>
                </ul>

                <h2>【服務項目&內容】</h2>
                <ul class="number-list">
                    <li>慈善捐款、捐贈物資</li>
                    <li>執行「TAOM 二手腳踏車計畫｜２０輛腳踏車</li>
                    <li>衛生教育課程、竹竿舞團康活動</li>
                    <li>執行營養粥計畫</li>
                    <li>彩繪教室牆面</li>
                    <li>執行「ＴＡＯＭ一孩童一照片」攝影活動</li>
                </ul>
                <h2>【腳步與足跡】</h2>
                <ul>
                <li>捐贈部分，共計6,436元美金，分別為：</li>
                    <ul class="number-list">
                        <li>金邊非營利機構 Advanced Centre for Empowerment 3,036美金，資助貧民窟服務據點計畫。</li>
                        <li>暹粒天主堂St. John Catholic Church 3,200美金(其中1,200美金為購買學童上學腳踏車的捐款、1,000美金為營養粥計畫捐款、餘1,000美金為慈善捐款不指定用途)。</li>
                        <li>仁愛傳教修女會Missionaries of Charity 兒童中心 200美金，資助兒童照顧日常開支。</li>
                    </ul>
                <li>捐贈物資部分，共計捐贈366公斤，兒童夏衣、文具、牙刷牙膏等衛生用品等物品</li>
                </ul>
                <h2>【愛的延續】</h2>
                    <p>
                    透過一次次的捐款、物資捐贈，改善偏鄉及城市貧民窟的孩童因生活資源貧乏的困境，透過創意服務方案豐富弱勢孩童的生活經驗，包括：
                    </p>
                <ul class="number-unstyled">
                <li>支持St. John’s Catholic Church 的營養粥計畫，孩子可以有足夠的營養補充</li>
                <li>捐贈腳踏車作為偏遠村落孩童的上學交通工具，不中斷學業，持續學習與成長</li>
                <li>彩繪教室牆壁並提供充足的衛生用品及文具用品，維持孩童良好的學習品質與環境</li>
                </ul>
                <h2>【師生心得反思】</h2>
                <ul>
                    <li>帶隊老師/謝玉玲老師的話—海外志願服務讓學生離開舒適圈、打開五感體驗、在他人的需要上看見自己的責任、學習同理、開放與分享的心並在文化差異中重新看到自己的位置。</li>
                    <li>黃于珊/社工系三年級的話—想念孩子的歡笑聲以及拿到物資雀躍的眼神，也許這就是我們帶給他們的快樂吧!</li>
                    <li>林鈺惟/心理系三年級的話—他們的笑容是如此的天真，如此的單純，就如同一張白紙一樣，歡迎你替他漆上五彩繽紛的色彩。</li>
                    <li>蘇柏宇/視傳系三年級的話—用最純粹的初生之犢勇氣面對這個世界，所到之處充滿希望。</li>
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            var userTeam6 = {!! json_encode($userTeam6) !!};
            @if (Auth::check())
            if (userTeam6 === 1) {
                $('#like-button').prop('disabled', true);
                $('#like-button').text('您已經點讚囉！');
            }
            @endif
        });
        $('.slickwrapper').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            adaptiveHeight: true,
            infinite: true
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
