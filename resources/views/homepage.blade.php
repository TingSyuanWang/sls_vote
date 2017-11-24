@extends('layouts.app')

@section('title')
    首頁
@endsection

@section('content')
    <div class="bg-top">
        <div class="container pt-md-5 pb-md-11">
            <div class="row pb-md-11">
                <div class="col-12 col-md-6 mt-2">
                    <img src="{{asset('img/logo.png')}}" class="img-fluid" alt="logo" width="300">
                    <h4 class="mt-5"><b>活動目的</b></h4>
                    <p>為鼓勵本校師生參與志工服務，並了解服務學習活動宗旨，激發學生對社會與國際之使命感，藉本次「志工亞大」關懷系列活動，傳遞服務學習氛圍，進而推動志工理念，創造多元服務機會。</p>
                    <h4 class="mt-2"><b>投票規則</b></h4>
                    <h5>這裡不只比愛心還比人氣！網路人氣獎來囉！</h5>
                    <p>
                        (一) 選擇認同理念之國際志工團隊至本網頁進行投票。<br>
                        (二) 按下所認同團隊內頁「讚我一票」按鈕即完成投票<br>
                        (三) 參加投票者需登入Facebook臉書帳號，每個帳號限投單一團隊乙次。<br>
                        (四) 不限年齡、性別、國籍之網路使用者皆可投票。<br>
                        (五) 計分以投票網頁上的按讚數量為準。<br>
                        (六) 投票期間：民國106年11月27日(一)上午9點至12月01日(五)下午4點止。<br>
                    </p>
                </div>
                <div class="col-12 col-md-6 mt-2">
                    <img src="{{asset('img/love_hand.png')}}" class="img-fluid" alt="love hand" width="500">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid pt-3 bg-home-green">
        <div class="row">
            <div class="col-12 col-md-3 mb-4">
                <div class="card">
                    <img class="card-img-top" src="{{asset('img/homepage/1.jpg')}}" alt="Card image cap">
                    <div class="card-body bg-card-pink">
                        <h4 class="card-title">國際關懷新視野服務深化再創新：香港恆生-亞大管院暑期國際志工交流服務(第二年)</h4>
                        <hr>
                        <p class="card-text">兩校秉持對等交流精神，每年進行多元主題之機構服務。我們有系統與紮實的訓練，並有老師全程參與討論與指導。我們的訓練以自主學習與PBL方式進行，學生學習如何分析問題、尋找與組織資源、制訂與執行方案，最後還有檢討與成果發表。</p>
                        <a href="{{route('team1')}}" class="btn btn-primary btn-block"><i class="fa fa-thumbs-o-up"></i> 讚我一票</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 mb-4">
                <div class="card">
                    <img class="card-img-top" src="{{asset('img/homepage/2.jpg')}}" alt="Card image cap">
                    <div class="card-body bg-card-pink">
                        <h4 class="card-title">亞洲大學 2017 國際志工服務學習與弱勢關懷活動</h4>
                        <hr>
                        <p class="card-text">「在別人的需要上，看見自己的責任。」<br>應馬來西亞青運沙巴州分會的邀請，期待我們可以組團前往當地華人獨立中學及當地社會福利機構進行國際志工服務學習與弱勢關懷活動，透過跨國交流，落實助人工作者與能力的服務，傳達對性別平等與人際互動的重視。<br><br></p>
                        <a href="{{route('team2')}}" class="btn btn-primary btn-block"><i class="fa fa-thumbs-o-up"></i> 讚我一票</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 mb-4">
                <div class="card">
                    <img class="card-img-top" src="{{asset('img/homepage/3.jpg')}}" alt="Card image cap">
                    <div class="card-body bg-card-pink">
                        <h4 class="card-title">印度暑期青年志願服務暨社福機構交流計畫</h4>
                        <hr>
                        <p class="card-text">本團隊針對印度貧窮及弱勢人口之志願服務，並建構本校出團師生與印度清奈地區HCAS社工系師生及當地社福機構協力合作服務模式。希望透過此計畫讓兩國社會服務人力可以彼此交流、相互學習、建立與印度清奈地區青年之協力合作模式，以及建立國際團隊合作與協調的典範。<br><br></p>
                        <a href="{{route('team3')}}" class="btn btn-primary btn-block"><i class="fa fa-thumbs-o-up"></i> 讚我一票</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 mb-4">
                <div class="card">
                    <img class="card-img-top" src="{{asset('img/homepage/4.jpg')}}" alt="Card image cap">
                    <div class="card-body bg-card-pink">
                        <h4 class="card-title">亞洲大學國際醫療志工團-2017年尼泊爾義診-送愛到天堂計劃</h4>
                        <hr>
                        <p class="card-text">亞洲大學國際醫療志工服務團，成員為亞洲大學醫學暨健康學院各科系之在學學生志工，發揮團隊合作的精神，運用在校所學之醫療照護專業與技能，秉持視病猶親的服務熱忱，至尼泊爾喬哥地區照護當地民眾的醫療需求。本團隊成立的宗旨為經由不同醫護科系學生志工的跨領域合作，提供尼泊爾喬哥地區居民所需的醫療照護。</p>
                        <a href="{{route('team4')}}" class="btn btn-primary btn-block"><i class="fa fa-thumbs-o-up"></i> 讚我一票</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-3 mb-4">
                <div class="card">
                    <img class="card-img-top" src="{{asset('img/homepage/5.jpg')}}" alt="Card image cap">
                    <div class="card-body bg-card-pink">
                        <h4 class="card-title">外國語文學系 尼泊爾暑期國際志工--尼泊爾學童夢想起飛</h4>
                        <hr>
                        <p class="card-text">為協助尼泊爾學童在2015年強震後的受教權不因天災而有影響，本系學生赴當地學校，以所學專長進行英/華語教學和生活學習輔導，並捐贈當地孩童此次募集之圖書資源，以期讓他們獲得較佳之學習環境。外文系學生運用學生所學專長與知能，提供尼泊爾當地孩童有價值之服務，進一步激發青年志工對國際社會之使命感、責任感，增進台灣與尼泊爾民間相互瞭解及交流。</p>
                        <a href="{{route('team5')}}" class="btn btn-primary btn-block"><i class="fa fa-thumbs-o-up"></i> 讚我一票</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 mb-4">
                <div class="card">
                    <img class="card-img-top" src="{{asset('img/homepage/6.jpg')}}" alt="Card image cap">
                    <div class="card-body bg-card-pink">
                        <h4 class="card-title">柬團第八梯：柬埔寨弱勢社區服務方案</h4>
                        <hr>
                        <p class="card-text">「柬團第八梯：柬埔寨弱勢社區服務方案」延續前七梯次的服務能量，於偏鄉弱勢社區進行服務，透過海外跨文化服務，讓學生發揮潛能與學科訓練專長，建立國際視野與領導統籌能力，也持續強化與柬埔寨大專青年的協力合作模式，讓跨國青年學生彼此交流、相互學習、建立國際團隊合作與協調的能力。<br><br></p>
                        <a href="{{route('team6')}}" class="btn btn-primary btn-block"><i class="fa fa-thumbs-o-up"></i> 讚我一票</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 mb-4">
                <div class="card">
                    <img class="card-img-top" src="{{asset('img/homepage/7.jpg')}}" alt="Card image cap">
                    <div class="card-body bg-card-pink">
                        <h4 class="card-title">OProSS-Africa 送愛到天堂</h4>
                        <hr>
                        <p class="card-text">本專案係帶領學生前往非洲賴索托及非洲史瓦濟蘭進行「海外專業服務學習」專案，帶領學生對於海外在地機構以及所在之社區，進行協助，運用學生在醫學健康、創意設計、資訊電機、管理、人文社會的專業技能，改善當地居民的教育、生活、健康、社區產業經營等之水平與環境。<br><br><br></p>
                        <a href="{{route('team7')}}" class="btn btn-primary btn-block"><i class="fa fa-thumbs-o-up"></i> 讚我一票</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 mb-4">
                <div class="card">
                    <img class="card-img-top" src="{{asset('img/homepage/8.jpg')}}" alt="Card image cap">
                    <div class="card-body bg-card-pink">
                        <h4 class="card-title text-center">亞洲大學服務學習組</h4>
                        <hr>
                        <p class="card-text text-center">11/27 開幕式(M棟羅馬柱前)<br>
                        11/27-12/1 成果擺攤(M棟羅馬柱前)<br>
                        12/6  成果分享會(M001)<br><br><br><br><br><br></p>
                        <button class="btn btn-danger btn-block" disabled><i class="fa fa-handshake-o"></i> 感謝您的參與</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
