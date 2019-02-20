<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>{{$dangqian_fenlei['fenlei_name']}}</title>
    <<meta name="keywords" content="广州实创新闻,最新国际消息,最新实时新闻,经济,中国新闻,社会新闻,法制,广东精选,华南金融,财经专栏,国际新闻,科技" />
	<meta name="description" content="广州实创新闻是包含海量资讯的新闻服务平台，真实反映每时每刻的新闻热点。" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0,  viewport-fit=cover, user-scalable=no">
    <meta name="filetype" content="0" />
    <meta name="publishedtype" content="1" />
    <meta name="pagetype" content="2" />
    <meta name="catalogs" content="384370">
    </meta>
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow" />
    <meta name="baidu-site-verification" content="Tocx3kKUE9" />
    <script>
        ! function (a) {
            var b = /iPhone/i,
                c = /iPod/i,
                d = /iPad/i,
                e = /(?=.*\bAndroid\b)(?=.*\bMobile\b)/i,
                f = /Android/i,
                g = /IEMobile/i,
                h = /(?=.*\bWindows\b)(?=.*\bARM\b)/i,
                i = /BlackBerry/i,
                j = /Opera Mini/i,
                k = /(?=.*\bFirefox\b)(?=.*\bMobile\b)/i,
                l = new RegExp("(?:Nexus 7|BNTV250|Kindle Fire|Silk|GT-P1000)", "i"),
                m = function (a, b) {
                    return a.test(b)
                },
                n = function (a) {
                    var n = a || navigator.userAgent;
                    this.apple = {
                            phone: m(b, n),
                            ipod: m(c, n),
                            tablet: m(d, n),
                            device: m(b, n) || m(c, n) || m(d, n)
                        }, this.android = {
                            phone: m(e, n),
                            tablet: !m(e, n) && m(f, n),
                            device: m(e, n) || m(f, n)
                        }, this.windows = {
                            phone: m(g, n),
                            tablet: m(h, n),
                            device: m(g, n) || m(h, n)
                        }, this.other = {
                            blackberry: m(i, n),
                            opera: m(j, n),
                            firefox: m(k, n),
                            device: m(i, n) || m(j, n) || m(k, n)
                        }, this.seven_inch = m(l, n), this.any = this.apple.device || this.android.device || this.windows
                        .device || this.other.device || this.seven_inch, this.phone = this.apple.phone || this.android.phone ||
                        this.windows.phone, this.tablet = this.apple.tablet || this.android.tablet || this.windows.tablet
                },
                o = new n;
            o.Class = n, "undefined" != typeof module && module.exports ? module.exports = o : "function" == typeof define &&
                define.amd ? define(o) : a.isMobile = o
        }(this);
    </script>
    <script>
        var uAgent = window.navigator.userAgent,
            isIphone = uAgent.match(/iphone/i),
            is2345 = uAgent.match(/Mb2345/i),
            isSogou = uAgent.match(/sogoumobilebrowser/ig),
            isLiebao = uAgent.match(/liebaofast/i),
            doc = document.documentElement,
            width = doc.clientWidth,
            height = doc.clientHeight,
            dpr = 1,
            fontSize = 50;

        function getDF() {
            if (window.devicePixelRatio) {
                dpr = window.devicePixelRatio;
            } else {
                dpr = isIphone ? width > 818 ? 3 : width > 480 ? 2 : 1 : 1;
            }
            if (width > height) {
                width = height;
            }
            fontSize = width > 1080 ? 144 : width / 7.5;
            fontSize = fontSize > 32 ? fontSize : 32;
            doc.setAttribute('data-dpr', dpr);
            doc.style.fontSize = fontSize + 'px';
        }
        getDF();
        if (is2345 || isSogou || isLiebao) {
            setTimeout(getDF, 500)
        }
    </script>
    <link rel="stylesheet" href="http://www.southcn.com/public/2018/css/normal.css">
    <link rel="stylesheet" href="http://www.southcn.com/public/2018/css/list.css">
    <link rel="stylesheet" href="http://www.southcn.com/public/2018/css/style.css?version=0.23283728">
    <link rel="stylesheet" href="/css/app.css">
    <script>
        var __$nodeid = 384370;
    </script>
    <script>
        var _hmt = _hmt || [];
        (function () {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?7d2f78fdb665c41be8e2ec5809be3e1b";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
</head>

<body>
    <img style="display:block;width:0;height:0" src="http://www.southcn.com/public/2016/img/nfw-cover.jpg" />
    <link rel="stylesheet" href="http://www.southcn.com/2018/video/prismindex1.9.9.css" />
    <script type="text/javascript" src="http://www.southcn.com/2018/video/prism1.9.9.js"></script>
    @include('gong.head')
    <div class="m-header">
        <a class="icon icon-logo" href="http://www.southcn.com/"></a>
    </div>
    <div class="m-shd f-cb">
        <div class="g-wp f-cb">
            <div class="m-logo">
                <a href="http://www.southcn.com/">
                    <img src="http://www.southcn.com/public/2018/img/llogo.png" width='140' alt="南方网">
                </a>
            </div>
            <div class="m-search">
                <form id="searchForm">
                    <div class="search_form">
                        <div class="search_text">

                            <input type="text" autocomplete="off" name="search" title="请输入要搜索的内容" value="输入关键字" onfocus="if (this.value == '输入关键字') {this.value = '';}"
                                onblur="if (this.value == '') {this.value = '输入关键字';}" class="search" id="search">
                        </div>

                        <button class="search_btn" id="search_btn">搜索</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <div class="m-ad1 g-wp f-cb" id="ad_01">
    </div>
    <div class="m-crm g-wp">
        <a href="http://www.southcn.com/">广州实创</a>
        <font class="dot">></font><a href="/fenlei/{{$dangqian_fenlei['id']}}" target="_self" class="crm-link">{{$dangqian_fenlei['fenlei_name']}}</a>
    </div>
    <div class="m-content g-wp f-cb" id="content">
        <div class="main">
            <div class="m-lists">
                @foreach($article as $v)
                <div class="itm j-link" data-link="/article/{{$v['id']}}}"><a href="/article/{{$v['id']}}}" target="_blank"></a>
                    <div class="pw">
                        <h3><a href="/article/{{$v['id']}}" target="_blank">{{$v['title']}}</a></h3>
                        <div class="pa"></div>
                        <div class="meta">
                            <div class="time">{{$v['create_time']}}</div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="m-pager"></div>
            <div id="displaypagenum" totalcount="50" currentpage="1">
                <p>
                    <center> <span>1</span> <a href=http://www.southcn.com/pc2018/yw/node_384370_2.htm class="page">2</a>
                        <a href=http://www.southcn.com/pc2018/yw/node_384370_3.htm class="page">3</a> <span class="page">...</span>
                        <a href=http://www.southcn.com/pc2018/yw/node_384370_50.htm class="page">50</a> <a href=http://www.southcn.com/pc2018/yw/node_384370_2.htm
                            class="page">下一页</a> <span class="page"></span></center>
                    {{$article->appends(request()->all())->links()}}
                </p>
            </div>
            <script language="javascript">
                function turnpage(page) {
                    document.all("div_currpage").innerHTML = document.all("div_page_roll" + page).innerHTML;
                }
            </script>
        </div>



        <!--utf-8-->
        @include('gong.right')
    </div>

    <script src="http://u.southcn.com/wechatshare/jssdk/share.js"></script>
    <script>
        NFWechatShare()
    </script>
    @include('gong.footer')
    <script src="http://www.southcn.com/public/2018/js/jquery-1.10.2.min.js"></script>
    <script src="http://www.southcn.com/public/2018/js/normal.js"></script>
    <script src="http://www.southcn.com/public/js/removepic.js"></script>
    <script src="http://www.southcn.com/public/2018/js/list.js"></script>


    <!-- AdSame ShowCode: 南方新闻网 / 全站细览 / 全站细览通栏广告 Begin -->
    <div id="ad_01_backup" style="display:none;">
        <script type="text/javascript" src="http://sgg.southcn.com/s?z=south&c=10"></script>
    </div>
    <!-- AdSame ShowCode: 南方新闻网 / 全站细览 / 全站细览通栏广告 End -->

    <!-- AdSame ShowCode: 南方新闻网 / 全站细览 / 全站细览画中画 Begin -->
    <div id="ad_02_backup" style="display:none;">
        <script type="text/javascript" src="http://sgg.southcn.com/s?z=south&c=12"></script>
    </div>
    <!-- AdSame ShowCode: 南方新闻网 / 全站细览 / 全站细览画中画 End -->


    <!-- AdSame ShowCode: 南方新闻网 / 全站细览 / 全站细览富媒体 Begin -->
    <div>
        <script type="text/javascript" src="http://sgg.southcn.com/s?z=south&c=13"></script>
    </div>
    <!-- AdSame ShowCode: 南方新闻网 / 全站细览 / 全站细览富媒体 End -->


    <script type="text/javascript">
        window.onload = function () {
            var ids = ["ad_01", "ad_02"];
            for (var i = 0; i < ids.length; i++) {
                var id = ids[i];
                var src = document.getElementById(id + "_backup").innerHTML;
                if (document.getElementById(id)) {
                    document.getElementById(id).innerHTML = src;
                } else {}
            }
        }
    </script>

    <!----baidubegin---->
    <div style="display:none;">
        <script>
            var _hmt = _hmt || [];
            (function () {
                var hm = document.createElement("script");
                hm.src = "https://hm.baidu.com/hm.js?fcda14e8d9fc166be9cf6caef393ad0e";
                var s = document.getElementsByTagName("script")[0];
                s.parentNode.insertBefore(hm, s);
            })();
        </script>

    </div>
    <!----baiduend---->

    <!----southcntjbegin---->
    <script src="http://www.southcn.com/public/2016/pc/js/webdig.js" async></script>
    <!----southcntjend---->

    <!-- Start Alexa Certify Javascript -->
    <script type="text/javascript">
        _atrk_opts = {
            atrk_acct: "2N+sk1aklw00oY",
            domain: "southcn.com",
            dynamic: true
        };
        (function () {
            var as = document.createElement('script');
            as.type = 'text/javascript';
            as.async = true;
            as.src = "https://certify-js.alexametrics.com/atrk.js";
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(as, s);
        })();
    </script>
    <noscript>
        <img src="https://certify.alexametrics.com/atrk.gif?account=2N+sk1aklw00oY" style="display:none" height="1"
            width="1" alt="" />
    </noscript>
    <!-- End Alexa Certify Javascript -->
</body>

</html>