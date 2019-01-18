<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">


    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0,  viewport-fit=cover, user-scalable=no">
    <meta name="filetype" content="1" />
    <meta name="publishedtype" content="1" />
    <meta name="pagetype" content="1" />
    <meta name="contentid" content="184820740" />
    <meta name="publishdate" content="2019-01-14" />
    <meta name="author" content="梁惠敏" />
    <meta name="source" content="南方网" />
    @foreach($content as $v)
    <title>{{$v['title']}}</title>
    @endforeach
    <meta name="keywords" content="" />
    <meta itemprop="image" content="http://www.southcn.com/public/2016/img/nfw-cover.jpg" />
    <meta name="description" itemprop="description" content="13—15日，由广东省特色小镇发展促进会主办的第二届特色小镇交流对洽会在云浮新兴县六祖镇举行。
" />
    <!-- 网站图标 -->
    <link rel="shortcut icon" href="http://www.southcn.com/favicon.ico" />
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
    <link rel="stylesheet" href="http://www.southcn.com/public/2018/css/article.css">
    <link rel="stylesheet" href="http://www.southcn.com/public/2018/css/style.css?version=0.23283728">

    <script>
        var __$nodeid = 321237;
        var __$contentid = 184820740;
        var __$title = '粤第三批特色小镇评选将于第一季度启动';
        var __$Editor = "梁惠敏";
        var __$Liability = "李美仪";
        var __$pubtime = "2019-01-14 09:20:15";
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

<body style="margin-top:12px;">
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
                        {{-- <div class="search_text">

                            <input type="text" autocomplete="off" name="search" title="请输入要搜索的内容" value="输入关键字" onfocus="if (this.value == '输入关键字') {this.value = '';}"
                                onblur="if (this.value == '') {this.value = '输入关键字';}" class="search" id="search">
                        </div> --}}

                        <button class="search_btn" id="search_btn">搜索</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <div class="g-wp f-cb" id="ad_01">
    </div>
    <div class="m-crm g-wp">
        <a href="/" target="_blank">广州实创</a>
        <font class="dot">></font>
        @foreach($content as $v)
        <?php 
            $fenlei = \DB::Table('fenlei3s')->where('id',$v['fenlei_id'])->first();
        ?>
        <a href="/fenlei/{{$fenlei->id}}" target="_self" class="crm-link">{{$v->fenlei_name}}</a>
        @endforeach
        <Font class="dot">></Font><a href="/article/{{$v->id}}" target="_self" class="crm-link">内容</a>
    </div>


    <div class="m-content g-wp f-cb">
        <div class="main">
            @foreach($content as $v)
            <div class="m-article">
                <h2 id="article_title">{{$v['title']}}</h2>

                <h3 id="article_subtitle">

                </h3>


                <div class="meta">
                    <div class="fl">
                        <span class="pub_time" id="pubtime_baidu">{{$v['create_time']}}</span>
                        <span id="source_baidu">{{$v['zuozhe']}}</span>
                    </div>
                    <div class="font_change fr">
                        <a class="font_down js-font font_down_disable" data-action="fontDown" href="#">字号减小</a>
                        <a class="font_up js-font" data-action="fontUp" href="#">字号增大</a>
                    </div>
                </div>

                <div class="content" id="content">
                    <?php echo preg_replace('/\/enpproperty-->/','<!--\/enpproperty-->',$v['content']); ?>
                </div>
                <div class="m-pager"></div>
            </div>
            @endforeach

            <div class="m-rel">
                <div class="m-tit m-ztit f-cb">
                    <h2 class="f-cb">相关新闻</h2>
                </div>
                <ul class="m-list5">
                </ul>
            </div>

            <div class="m-more">
                <a href="/" target="_blank">返回官网首页</a>
                <a href="/fenlei/{{$fenlei->id}}" target="_blank" class="j-catlink">{{$fenlei->fenlei_name}}</a>
            </div>


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
    <script src="http://www.southcn.com/public/2018/js/sha256.js"></script>
    <script src="http://www.southcn.com/public/2018/js/article.js"></script>

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