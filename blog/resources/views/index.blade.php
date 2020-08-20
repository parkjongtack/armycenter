<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>국군의 날 챌린지</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/index.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="/js/index.js"></script>
</head>
<body>
    <div id="container">
        <div id="header">
            <div class="logo">
                <img class="mo_none" src="/img/logo.png" alt="">
                <img class="mo_block" src="/img/m_logo.png" alt="">
            </div>
            <div class="h_text_box transXY mo_none">
                <p>대한민국 국방부와 함께하는<img class="wd223" src="/img/h_text_img.png" alt=""><b><span id="count1">{{ $main_set->people_cnt }}</span>명</b>이 함께하고 있어요!</p>
            </div>
            <div class="h_text_box mo_block">
                <p>대한민국 국방부와 함께하는</p>
                <p class="middle"><img class="wd223" src="/img/m_h_text_img.png" alt="">에</p>
            <p><b><span id="count1">{{ $main_set->people_cnt }}</span>명</b>이 함께하고 있어요!</p>
            </div>
        </div>
        <div class="sec1 sec">
            <div class="sec_bg">
                <img class="mo_none" src="/img/sec1_bg.png" alt="">
                <img class="mo_block" src="/img/m_sec1_bg.png" alt="">
            </div>
            <div class="sec_title transX wd514">
                <img class="mo_none" src="/img/sec1_title.png" alt="">
                <img class="mo_block" src="/img/m_sec1_title.png" alt="">
            </div>
            <div class="sec_title_sub transX wd180">
                <img class="mo_none" src="/img/sec1_title_sub.png" alt="">
            </div>
            <div class="sec_contents transX">
                <div class="video">
                    <img src="/img/sec1_video_img.png" alt="">
                </div>
                <div class="sec_img wd639">
                    <img class="mo_none" src="/img/sec1_img01.png" alt="">
                    <img class="mo_block" src="/img/m_sec1_img01.png" alt="">
                </div>
                <div class="sec_img wd950">
                    <img class="mo_none" src="/img/sec1_img02.png" alt="">
                    <img class="mo_block" src="/img/m_sec1_img02.png" alt="">
                </div>
                <div class="dday_text">
                    <p>D-33</p>
                </div>
                <div class="km_text">
                    <p>
                        <span>2</span>
                        <span>2</span>
                        <span>2</span>
                        <span>2</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="sec2 sec">
            <div class="sec_bg">
                <img class="mo_none" src="/img/sec2_bg.png" alt="">
                <img class="mo_block" src="/img/m_sec2_bg.png" alt="">
            </div>
            <div class="sec_title transX wd987">
                <img class="mo_none" src="/img/sec2_title.png" alt="">
                <img class="mo_block" src="/img/m_sec2_title.png" alt="">
            </div>
            <div class="sec_contents mo_none">
                <div class="sec_img small">
                    <img src="/img/sec2_img01.png" alt="">
                </div>
                <div class="sec_img small">
                    <img src="/img/sec2_img02.png" alt="">
                </div>
                <div class="sec_img big">
                    <img src="/img/sec2_img03.png" alt="">
                </div>
                <div class="sec_img small">
                    <img src="/img/sec2_img04.png" alt="">
                </div>
                <div class="sec_img small">
                    <img src="/img/sec2_img05.png" alt="">
                </div>
            </div>
            <div class="sec_contents mo_block">
                <div class="sec_img big">
                    <img src="/img/m_sec2_img01.png" alt="">
                </div>
                <div class="sec_img small">
                    <img src="/img/m_sec2_img02.png" alt="">
                </div>
                <div class="sec_img small">
                    <img src="/img/m_sec2_img03.png" alt="">
                </div>
                <div class="sec_img small">
                    <img src="/img/m_sec2_img04.png" alt="">
                </div>
                <div class="sec_img small">
                    <img src="/img/m_sec2_img05.png" alt="">
                </div>
            </div>
        </div>
        <div class="sec3 sec">
            <div class="sec_bg">
                <img class="mo_none" src="/img/sec3_bg.png" alt="">
                <img class="mo_block" src="/img/m_sec3_bg.png" alt="">
            </div>
            {{-- <div class="sec_title">
                <img src="/img/" alt="">
            </div> --}}
            <div class="sec_contents">
                <div class="inner">
                    <div class="sec3_top_box transX inner mo_none">
                        <div class="sec_img">
                            <img src="/img/sec3_img01.png" alt="">
                        </div>
                        <div class="sec_img">
                            <img src="/img/sec3_img02.png" alt="">
                        </div>
                        <div class="sec_img">
                            <img src="/img/sec3_img03.png" alt="">
                        </div>
                    </div>
                    <div class="sec3_top_box transX inner mo_block">
                        <div class="sec_img">
                            <img src="/img/m_sec3_img01.png" alt="">
                        </div>
                        <div class="sec_img">
                            <img src="/img/m_sec3_img02.png" alt="">
                        </div>
                        <div class="sec_img">
                            <img src="/img/m_sec3_img03.png" alt="">
                        </div>
                    </div>
                    <div class="sec3_bot_box transX inner">
                        <div class="sec_img">
                            <img class="mo_none" src="/img/sec3_img04.png" alt="">
                            <img class="mo_block" src="/img/m_sec3_img04.png" alt="">
                        </div>
                        <div class="sec_img">
                            <img class="mo_none" src="/img/sec3_img05.png" alt="">
                        </div>
                        <div class="sec_img">
                            <img class="mo_none" src="/img/sec3_img06.png" alt="">
                        </div>
                        <div class="sec_img">
                            <img class="mo_none" src="/img/sec3_img07.png" alt="">
                            <img class="mo_block" src="/img/m_sec3_img07.png" alt="">
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="sec4 sec">
            <div class="sec_bg">
                <img class="mo_none" src="/img/sec4_bg.png" alt="">
                <img class="mo_block" src="/img/m_sec4_bg.png" alt="">
            </div>
            <div class="sec_title transX wd691">
                <img class="mo_none" src="/img/sec4_title.png" alt="">
                <img class="mo_block" src="/img/m_sec4_title.png" alt="">
            </div>
            <div class="sec_contents transX">
                <p class="all_cnt">총 <span class="blue">12,345</span>개의 댓글이 있습니다.</p>
                <form action="">
                    <div class="textarea_outer">
                        <textarea id="form_text" placeholder="마음까지 따뜻해지는 응원의 한마디를 남겨주세요!"></textarea>
                        <p class="lim_text">
                            <span>26</span>자/1,000자
                        </p>
                    </div>
                    <div class="flex_area">
                        <div class="left">
                            <div class="input_text"><input type="text" placeholder="연락처를 입력해주세요! ( - 제외)"></div>
                            <div class="input_check">
                                <p><label><input type="checkbox">개인정보 수집/이용에 동의합니다 </label><span id="see_tr01">[약관보기]</span></p>
                                <p><label><input type="checkbox">개인정보 취급/위탁에 동의합니다 </label><span id="see_tr02">[약관보기]</span></p>
                            </div>
                        </div>
                        <div class="right">
                            <input type="submit" value="함께 응원하기">
                        </div>
                    </div>
                </form>
                <ul>
                    <li>
                        <div class="top">
                            <span>따뜻한 응원러&nbsp;&nbsp;|</span>
                            <span>&nbsp;&nbsp;2020.01.01</span>
                        </div>
                        <div class="bot">
                            <p>마음까지 따뜻해지는 응원 마음까지 따뜻해지는 응원 마음까지 따뜻해지는 응원 마음까지 따뜻해지는 응원 마음까지 따뜻해지는 응원 마음까지 따뜻해지는 응원 마음까지 따뜻해지는 응원 마음까지 따뜻해지는 응원 마음까지 따뜻해지는 응원 마음까지 따뜻해지는 응원 </p>
                        </div>
                    </li>
                    <li>
                        <div class="top">
                            <span>따뜻한 응원러&nbsp;&nbsp;|</span>
                            <span>&nbsp;&nbsp;2020.01.01</span>
                        </div>
                        <div class="bot">
                            <p>마음까지 따뜻해지는 응원 마음까지 따뜻해지는 응원 마음까지 따뜻해지는 응원 마음까지 따뜻해지는 응원 마음까지 따뜻해지는 응원 마음까지 따뜻해지는 응원 마음까지 따뜻해지는 응원 마음까지 따뜻해지는 응원 마음까지 따뜻해지는 응원 마음까지 따뜻해지는 응원 </p>
                        </div>
                    </li>
                    <li>
                        <div class="top">
                            <span>따뜻한 응원러&nbsp;&nbsp;|</span>
                            <span>&nbsp;&nbsp;2020.01.01</span>
                        </div>
                        <div class="bot">
                            <p>마음까지 따뜻해지는 응원 마음까지 따뜻해지는 응원 마음까지 따뜻해지는 응원 마음까지 따뜻해지는 응원 마음까지 따뜻해지는 응원 마음까지 따뜻해지는 응원 마음까지 따뜻해지는 응원 마음까지 따뜻해지는 응원 마음까지 따뜻해지는 응원 마음까지 따뜻해지는 응원 </p>
                        </div>
                    </li>
                    <li>
                        <div class="top">
                            <span>따뜻한 응원러&nbsp;&nbsp;|</span>
                            <span>&nbsp;&nbsp;2020.01.01</span>
                        </div>
                        <div class="bot">
                            <p>마음까지 따뜻해지는 응원 마음까지 따뜻해지는 응원 마음까지 따뜻해지는 응원 마음까지 따뜻해지는 응원 마음까지 따뜻해지는 응원 마음까지 따뜻해지는 응원 마음까지 따뜻해지는 응원 마음까지 따뜻해지는 응원 마음까지 따뜻해지는 응원 마음까지 따뜻해지는 응원 </p>
                        </div>
                    </li>
                    <li>
                        <div class="top">
                            <span>따뜻한 응원러&nbsp;&nbsp;|</span>
                            <span>&nbsp;&nbsp;2020.01.01</span>
                        </div>
                        <div class="bot">
                            <p>마음까지 따뜻해지는 응원 마음까지 따뜻해지는 응원 마음까지 따뜻해지는 응원 마음까지 따뜻해지는 응원 마음까지 따뜻해지는 응원 마음까지 따뜻해지는 응원 마음까지 따뜻해지는 응원 마음까지 따뜻해지는 응원 마음까지 따뜻해지는 응원 마음까지 따뜻해지는 응원 </p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="sec_contents2 transX">
                <img class="mo_none" src="/img/sec4_img01.png" alt="">
                <img class="mo_block" src="/img/m_sec4_img01.png" alt="">
            </div>
        </div>
        <div id="footer">
            <img class="mo_none" src="/img/footer_img01.png" alt="">
            <img class="mo_block" src="/img/m_footer_img01.png" alt="">
            <p class="mo_none">함께 달려요 1001 운영본부 TEL : 070-4808-3890&nbsp;&nbsp;|&nbsp;&nbsp;E-mail : runtogether1001@gmail.com</p>
            <p class="mo_block">함께 달려요 1001 운영본부 TEL : 070-4808-3890<br>E-mail : runtogether1001@gmail.com</p>
            <p>COPYRIGHT (C) 2020 RUNTOGETHER1001 ALL RIGHT RESERVED.</p>
        </div>
    </div>
    <script>
        AOS.init();
        window.addEventListener('load', AOS.refresh);
    </script>
</body>
</html>