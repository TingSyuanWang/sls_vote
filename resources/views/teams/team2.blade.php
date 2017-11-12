@extends('layouts.app')

@section('title')
亞洲大學2017國際志工服務學習與弱勢關懷活動
@endsection

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-12 col-lg-3 mb-4">
                <h1>團隊名稱</h1>
                <button href="#" class="btn btn-primary btn-block" id="like-button"><i class="fa fa-thumbs-o-up"></i> 讚我一票</button>
                <h3>人氣：{{$countTeam2}}</h3>
            </div>
            <div class="col-12 col-lg-9">
                <div class="slickwrapper">
                    <img src="{{asset('img/team2/1.jpg')}}" class="img-fluid rounded">
                    <img src="{{asset('img/team2/2.jpg')}}" class="img-fluid rounded">
                    <img src="{{asset('img/team2/3.jpg')}}" class="img-fluid rounded">
                    <img src="{{asset('img/team2/4.jpg')}}" class="img-fluid rounded">
                    <img src="{{asset('img/team2/5.jpg')}}" class="img-fluid rounded">
                    <img src="{{asset('img/team2/6.jpg')}}" class="img-fluid rounded">
                    <img src="{{asset('img/team2/7.jpg')}}" class="img-fluid rounded">
                    <img src="{{asset('img/team2/8.jpg')}}" class="img-fluid rounded">
                    <img src="{{asset('img/team2/9.jpg')}}" class="img-fluid rounded">
                </div>
                <h1>影片</h1>
                <hr>
                <h2>【競選標語】</h2>
                <p>
                    擁抱馬來青春不留白
                </p>
                <h2>【服務期間 & 地點】</h2>
                <ul>
                    <li>2017年8月16日馬來西亞沙巴州亞庇市善導中學</li>
                    <li>2017年8月17日馬來西亞沙巴州里卡士濟世之家</li>
                    <li>2017年8月18-19日馬來西亞沙巴州保佛縣保佛中學</li>
                    <li>2017年8月18-19日馬來西亞沙巴州吧巴縣吧巴中學</li>
                    <li>2017年8月20日馬來西亞沙巴州兒童之家</li>
                    <li>2017年8月20日馬來西亞沙巴州老人安養院</li>
                </ul>
                <h2>【服務對象】</h2>
                <ul>
                    <li>馬來西亞沙巴州里卡士濟世之家</li>
                    <li>馬來西亞沙巴州兒童之家</li>
                    <li>弱勢族群與獨居老人</li>
                    <li>馬來西亞沙巴州老人安養院</li>
                    <li>馬來西亞沙巴州亞庇市善導中學</li>
                    <li>馬來西亞沙巴州保佛縣保佛中學</li>
                    <li>馬來西亞沙巴州吧巴縣吧巴中學</li>
                </ul>
                <h2>【團隊理念】</h2>
                <p>
                「在別人的需要上，看見自己的責任。」<br>
　　             應馬來西亞青運沙巴州分會的邀請，期待我們可以組團前往當地華人獨立中學及當地社會福利機構進行國際志工服務學習與弱勢關懷活動，透過跨國交流，落實助人工作者與能力的服務，傳達對性別平等與人際互動的重視。
                </p>
                <h2>【服務過程 & 實施方向】</h2>
                <p>以課程活動和社區服務為兩大主軸，與當地夥伴青年運動總會沙巴州分會一起合作。</p>
                <ul>
                    <li>課程活動：</li>
                    <ul class="list-unstyled">
                        <li>前進亞庇市善導中學、保佛縣保佛中學及吧巴中學，共三所中學，透過無國界教育創新教學帶領關於「性別無國界」與「人際新視野」的課程，使學生瞭解性別界線及如何防治性騷擾、傳達對性別平等與人際互動的重視。</li>
                    </ul>
                    <li>服務：</li>
                    <ul class="number-list">
                        <li>以不同類型的社區服務，了解馬來西亞目前社會福利規劃及建設，並與當地交流兩國在志願服務上的輸送。</li>
                        <li>沙巴州里卡士濟世之家：藉由抗力球簡易復健操與機構住民進行互動，個人伴陪的同時進行關懷。</li>
                        <li>沙巴州兒童之家：團康活動使志工與孩子們間的氣氛活絡，儘管語言不通，微笑與肢體語言都是溝通的方式。</li>
                        <li>沙巴州老人安養院：志工與青年運動幹部及中學學生一同規劃演出，個人伴陪裡了解不同文化下的生命經驗傳承。</li>
                    </ul>
                </ul>
                <h2>【服務項目&內容】</h2>
                <ul class="number-list">
                    <li>志工服務學習暨跨國青年文化服務學習活動。</li>
                    <li>志工跨國際教育類志願服務活動。</li>
                    <li>針對當地獨中學生傳達性別平等教育及人際互動教育課程。</li>
                    <li>針對當地獨中學生進行創新服務與領導能力之提升</li>
                </ul>
                <h2>【腳步與足跡】</h2>
                <p>
                    前往馬來西亞沙巴州青年體育部與常務秘書長交流，藉由說明台灣現行之志工相關專法及理念，期待未來能夠協助當地建立志願服務制度。
                </p>
                <p>
                    教育輔導和社會福利的直接服務，不再是物質性的提供為主，在人與人之間看見關心與需求，以歌曲、舞蹈與伴陪，以志工的身分坐在被服務者身旁，減少的是關係之間的疏離與上對下的階級關係，增加被服務者為自己在這段關係中發聲的權力。
                </p>
                <h2>【愛的延續】</h2>
                <p>
                和青年運動幹部一同進行服務，推廣將以往傳統的慈善導向的志願服務，轉變為學習、公民參與的觀念，甚至吸引中學生投入志願服務。
                </p>
                <p>
                    推廣的性別平等與人際關係，在當地中學也是較少見的議題，身為外地志工，在交流中互相刺激彼此在服務中的省思與學習。
                </p>
                <h2>【師生心得反思】</h2>
                <ul>
                    <li>信輝老師的話－不管服務對象、機構或是在馬來西亞所接觸的人，都讓每位志工有許多層面的學習及反思，亦有不斷的成長空間。</li>
                    <li>彤恩的話－十天的旅程，獲得的比付出的還要美好。</li>
                    <li>渝喧的話－擔任志工許多事都是第一次體會，受益良多。</li>
                    <li>昕穎的話－看見、體驗不同的世界觀、風俗民情和生活。</li>
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            var userTeam2 = {!! json_encode($userTeam2) !!};
            @if (Auth::check())
            if (userTeam2 === 1) {
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
                        window.location.href = "{{route('voteTeam2')}}";
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
