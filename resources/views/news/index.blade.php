<!DOCTYPE html>
<html lang="zh-CN">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=1400, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>广州实创新闻·Guangdong News</title>
	<base target="_blank" />
	<meta name="keywords" content="广州实创新闻,最新国际消息,最新实时新闻,经济,中国新闻,社会新闻,法制,广东精选,华南金融,财经专栏,国际新闻,科技" />
	<meta name="description" content="广州实创新闻是包含海量资讯的新闻服务平台，真实反映每时每刻的新闻热点。" />
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
						}, this.seven_inch = m(l, n), this.any = this.apple.device || this.android.device || this.windows.device || this.other
						.device || this.seven_inch, this.phone = this.apple.phone || this.android.phone || this.windows.phone, this.tablet =
						this.apple.tablet || this.android.tablet || this.windows.tablet
				},
				o = new n;
			o.Class = n, "undefined" != typeof module && module.exports ? module.exports = o : "function" == typeof define &&
				define.amd ? define(o) : a.isMobile = o
		}(this);

		function getQueryString(name) {
			var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
			var r = window.location.search.substr(1).match(reg);
			if (r != null) return unescape(r[2]);
			return null;
		}
		var MOBILE_SITE = 'http://www.southcn.com/m/?type=mobile';
		if (isMobile.phone && getQueryString("type") != "pc") {
			document.location = MOBILE_SITE;
		}
	</script>
	<meta name="filetype" content="0" />
	<meta name="publishedtype" content="1" />
	<meta name="pagetype" content="2" />
	<meta name="catalogs" content="95587" />
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="index, follow" />
	<meta name="baidu-site-verification" content="Tocx3kKUE9" />
	<link rel="stylesheet" href="http://www.southcn.com/public/2018/css/style.css?version=0.23283728">
	<link rel="stylesheet" href="/css/app.css">
	
	<script>
		var __$nodeid = 384194;
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
	@include('gong.head')
	{{-- <div class="m-cnav">
		<div class="f-wp">
			<a href="http://gz.southcn.com/" target="_blank" title="广州">广州</a>
			<a href="http://sz.southcn.com/" target="_blank" title="深圳">深圳</a>
			<a href="http://zh.southcn.com/" target="_blank" title="珠海">珠海</a>
			<a href="http://st.southcn.com/" target="_blank" title="汕头">汕头</a>
			<a href="http://fs.southcn.com/" target="_blank" title="佛山">佛山</a>
			<a href="http://sg.southcn.com/" target="_blank" title="韶关">韶关</a>
			<a href="http://hy.southcn.com/" target="_blank" title="河源">河源</a>
			<a href="http://mz.southcn.com/" target="_blank" title="梅州">梅州</a>
			<a href="http://hz.southcn.com/" target="_blank" title="惠州">惠州</a>
			<a href="http://sw.southcn.com/" target="_blank" title="汕尾">汕尾</a>
			<a href="http://dg.southcn.com/" target="_blank" title="东莞">东莞</a>
			<a href="http://zs.southcn.com/" target="_blank" title="中山">中山</a>
			<a href="http://jm.southcn.com/" target="_blank" title="江门">江门</a>
			<a href="http://yj.southcn.com/" target="_blank" title="阳江">阳江</a>
			<a href="http://zj.southcn.com/" target="_blank" title="湛江">湛江</a>
			<a href="http://mm.southcn.com/" target="_blank" title="茂名">茂名</a>
			<a href="http://zq.southcn.com/" target="_blank" title="肇庆">肇庆</a>
			<a href="http://qy.southcn.com/" target="_blank" title="清远">清远</a>
			<a href="http://cz.southcn.com/" target="_blank" title="潮州">潮州</a>
			<a href="http://jy.southcn.com/" target="_blank" title="揭阳">揭阳</a>
			<a href="http://yf.southcn.com/" target="_blank" title="云浮">云浮</a>
		</div>
	</div> --}}
	{{-- <div class="m-ad3 f-wp f-cb"><a href="http://news.southcn.com/zhuanti/guanche19thd/node_373493.htm" target="_blank">
			<img src="http://www.southcn.com/pc2018/content/images/attachement/jpg/site4/20180928/0023248123c01d17d77e02.jpg"
			 border="0"> </a> </div>
	<div class="m-ad3 f-wp f-cb"><a href="http://news.southcn.com/zhuanti/kcgd/node_388372.htm" target="_blank"> <img src="http://www.southcn.com/pc2018/content/images/attachement/jpg/site4/20181030/c81f6606f22b1d41fe0903.jpg"
			 --}} {{--  border="0"> </a> </div>  --}} <div class="m-ad1 f-wp f-cb">
			<div class="pic1" id="index_ad01"></div>
			<div class="pic2" id="index_ad02"></div>
			<div class="pic1 last" id="index_ad03"></div>
	</div>

	<div class="m-tt f-wp f-cb">
		<div class="group">
			<a href="http://opinion.southcn.com/o/2019-01/14/content_184818807.htm" target="_blank"></a>
			<?php
				$article = \DB::Table('article3s')->orderBy('id','desc')->limit(1)->first();
				//dump($article);
			?>
			@foreach($article as $v)
			<h2><a href="/article/{{$article->id}}">{{$article->title}}</a></h2>
			@endforeach
			<div class="link">
				<p> </p>
			</div>
		</div>
	</div>



	<div class="m-main f-wp f-cb">
		<div class="m-hl">
			<div class="m-tab j-tab">
				<a class="tab active" href="http://www.southcn.com/pc2018/yw/node_384370.htm" target="_blank">要闻</a>
				<a class="tab" href="http://www.southcn.com/pc2018/gd/node_384369.htm" target="_blank">广东精选</a>
			</div>
			<div class="j-content">
				<div class="m-content j-ct active">
					<ul class="m-list1 j-hl">
						<?php 
							$article = \DB::Table('article3s')->orderBy('id','desc')->limit(10)->get();
							//dump($article);
						?>
						@foreach($article as $v)
						<li><a href="/article/{{$v->id}}" data-pubtime='{{$v->create_time}}' data-cat='' target="_blank">{{$v->title}}</a></li>
						@endforeach
					</ul>
				</div>

				<div class="m-content j-ct">
					<ul class="m-list1 j-hl">
						<?php 
							$article = \DB::Table('article3s')->orderBy('id','desc')->where('fenlei_id','5')->limit(10)->get();
							//dump($article);
						?>
						@foreach($article as $v)
						<li><a href="/article/{{$v->id}}" data-pubtime='{{$v->create_time}}' data-cat='' target="_blank">{{$v->title}}</a></li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>

		<div class="m-lf">
			{{-- <div class="m-spec f-cb">
				<a class="active" href="http://theory.southcn.com/c/node_317831.htm">
					<div class="itm itm-1">
					</div>
				</a>
				<span></span>
				<a href="http://ld.southcn.com/">
					<div class="itm itm-3">
					</div>
				</a>
				<span></span>
				<a href="http://news.southcn.com/n/node_383593.htm">
					<div class="itm itm-2">
					</div>
				</a>
			</div> --}}
			<div class="m-focusw">
				<div class="m-focus">
					<?php 
						$lunbo = \DB::Table('article3s')->orderBy('id','desc')->where('news_pic','<>','')->limit(10)->get();
					?>
					@foreach($lunbo as $v)
					<div class="itm"><a href="/article/{{$v->id}}" data-pubtime='{{$v->create_time}}' target="_blank"><img src="{{$v->news_pic}}"
							 border="0">
							<h3>{{$v->title}}</h3>
						</a></div>
					@endforeach

				</div>
				<div class="m-fpager"></div>
				<div class="m-prev1"></div>
				<div class="m-next1"></div>
			</div>
		</div>
	</div>

	{{-- <div class="m-ad2 f-wp">
		<div class="pic" id="index_ad05"></div>
		<div class="text f-cb" id="index_text01">
		</div>
	</div> --}}

	{{-- <div class="m-zone f-wp f-cb" style="margin-top:20px;">
		<div class="left">
			<div class="m-city">
				<div class="m-tit m-ctit f-cb">
					<h2 class="f-cb"><span class="prefix"></span>
						<a class="cityurl" href=""><span class="city j-cityname">广州市</span>
						</a></h2>
					<div class="other j-other">其他城市</div>
				</div>
				<div class="m-scnav">
					<i></i>
					<div class="label">其他城市</div>
					<div class="m-cselect">
					</div>
				</div>
				<div class="m-cityc">
					<ul class="m-list1 j-clist active" data-url='http://gz.southcn.com/' data-city='广州市'>
						<li><a href="http://gz.southcn.com/content/2019-01/14/content_184817772.htm" data-pubtime='2019-01-14 09:28'
							 target="_blank">广州启动经济普查工作，摸清全市经济家底</a></li>
						<li><a href="http://gz.southcn.com/content/2019-01/14/content_184816700.htm" data-pubtime='2019-01-14 09:28'
							 target="_blank">花都区认真学习贯彻市委十一届六次全会精神</a></li>
						<li><a href="http://gz.southcn.com/content/2019-01/13/content_184817773.htm" data-pubtime='2019-01-14 09:27'
							 target="_blank">广州召开《广州改革开放四十年》出版座谈会</a></li>
						<li><a href="http://gz.southcn.com/content/2019-01/14/content_184820453.htm" data-pubtime='2019-01-14 09:26'
							 target="_blank">穗警方去年查封冻结涉黑恶案件财产5.1亿元</a></li>
						<li><a href="http://gz.southcn.com/content/2019-01/14/content_184820651.htm" data-pubtime='2019-01-14 09:25'
							 target="_blank">广州交警支队举行民警荣休仪式</a></li>
						<li><a href="http://gz.southcn.com/content/2019-01/14/content_184820454.htm" data-pubtime='2019-01-14 09:24'
							 target="_blank">志愿者送“春晚”，“街友”冬日暖</a></li>
					</ul>
					<ul class="m-list1 j-clist" data-url='http://sz.southcn.com/' data-city='深圳市'>
						<li><a href="http://sz.southcn.com/content/2019-01/14/content_184820977.htm" data-pubtime='2019-01-14 11:07'
							 target="_blank">深圳龙岗：加速高质量发展，助推东部中心崛起</a></li>
						<li><a href="http://sz.southcn.com/content/2019-01/14/content_184820991.htm" data-pubtime='2019-01-14 11:07'
							 target="_blank">福田：提升“四大功能” ，打造“四大中心”</a></li>
						<li><a href="http://sz.southcn.com/content/2019-01/14/content_184820984.htm" data-pubtime='2019-01-14 11:07'
							 target="_blank">罗湖“四十不惑”：立足新起点推动高质量发展</a></li>
						<li><a href="http://sz.southcn.com/content/2019-01/14/content_184820998.htm" data-pubtime='2019-01-14 11:07'
							 target="_blank">央视春晚深圳分会场筹备井然有序</a></li>
						<li><a href="http://sz.southcn.com/content/2019-01/14/content_184820970.htm" data-pubtime='2019-01-14 11:07'
							 target="_blank">我国首次成功实现4K超高清电视5G网络传输测试</a></li>
						<li><a href="http://sz.southcn.com/content/2019-01/12/content_184806885.htm" data-pubtime='2019-01-12 09:43'
							 target="_blank">罗湖南山迎春花市将于月底正式开放</a></li>
					</ul>
					<ul class="m-list1 j-clist" data-url='http://zh.southcn.com/' data-city='珠海市'>
						<li><a href="http://zh.southcn.com/content/2019-01/14/content_184821052.htm" data-pubtime='2019-01-14 09:50'
							 target="_blank">车票送上门!珠海为外地务工青年解决过年返乡难</a></li>
						<li><a href="http://zh.southcn.com/content/2019-01/14/content_184821051.htm" data-pubtime='2019-01-14 09:50'
							 target="_blank">珠海新开4条城区环线,超长巨无霸公交同步上线</a></li>
						<li><a href="http://zh.southcn.com/content/2019-01/14/content_184821049.htm" data-pubtime='2019-01-14 09:50'
							 target="_blank">最新!鹤洲岸首桩灌注完成,金海大桥再迎新进展</a></li>
						<li><a href="http://zh.southcn.com/content/2019-01/14/content_184821018.htm" data-pubtime='2019-01-14 09:50'
							 target="_blank">工程总投资6.1亿!高新区打响水环境综合整治战役</a></li>
						<li><a href="http://zh.southcn.com/content/2019-01/14/content_184821053.htm" data-pubtime='2019-01-14 09:50'
							 target="_blank">感受别样“警彩”！3000市民走进珠海高新分局</a></li>
						<li><a href="http://zh.southcn.com/content/2019-01/13/content_184814346.htm" data-pubtime='2019-01-13 10:26'
							 target="_blank">定了！珠海迎春花市本月26日开市</a></li>
					</ul>
					<ul class="m-list1 j-clist" data-url='http://st.southcn.com/' data-city='汕头市'>
						<li><a href="http://st.southcn.com/content/2018-10/09/content_183586609.htm" data-pubtime='2018-10-10 16:09'
							 target="_blank">汕头两医院纳入省远程医疗平台一期建设</a></li>
						<li><a href="http://st.southcn.com/content/2018-10/09/content_183586617.htm" data-pubtime='2018-10-10 16:09'
							 target="_blank">胡振添荣膺“全国乡镇卫生院优秀院长”</a></li>
						<li><a href="http://st.southcn.com/content/2018-10/09/content_183586602.htm" data-pubtime='2018-10-10 16:09'
							 target="_blank">潮汕机场至高铁潮汕站免费巴士增加班次</a></li>
						<li><a href="http://st.southcn.com/content/2018-09/20/content_183399115.htm" data-pubtime='2018-09-21 10:48'
							 target="_blank">潮汕文化精品吸引客商 汕头参展2018广东旅博会</a></li>
						<li><a href="http://st.southcn.com/content/2018-09/20/content_183399129.htm" data-pubtime='2018-09-21 10:48'
							 target="_blank">澄海拟入选2019年省级电子商务进农村综合示范县</a></li>
						<li><a href="http://st.southcn.com/content/2018-09/20/content_183399108.htm" data-pubtime='2018-09-21 10:48'
							 target="_blank">广澳港区集装箱吞吐量大幅增长</a></li>
					</ul>
					<ul class="m-list1 j-clist" data-url='http://fs.southcn.com/' data-city='佛山市'>
						<li><a href="http://fs.southcn.com/content/2019-01/14/content_184823934.htm" data-pubtime='2019-01-14 11:23'
							 target="_blank">一鼓作气：安全整治的南海担当</a></li>
						<li><a href="http://fs.southcn.com/content/2019-01/14/content_184823925.htm" data-pubtime='2019-01-14 11:23'
							 target="_blank">南海里水率先建立村居“两个清单”</a></li>
						<li><a href="http://fs.southcn.com/content/2019-01/14/content_184823908.htm" data-pubtime='2019-01-14 11:23'
							 target="_blank">20多位全国知名诗人到南庄紫南村采风</a></li>
						<li><a href="http://fs.southcn.com/content/2019-01/14/content_184823893.htm" data-pubtime='2019-01-14 11:23'
							 target="_blank">破题“大而不强”：他们在佛山发现了什么</a></li>
						<li><a href="http://fs.southcn.com/content/2019-01/14/content_184823917.htm" data-pubtime='2019-01-14 11:23'
							 target="_blank">佛山出台工程建设项目审批制度改革实施方案</a></li>
						<li><a href="http://fs.southcn.com/content/2019-01/14/content_184823900.htm" data-pubtime='2019-01-14 11:23'
							 target="_blank">方洪波：今年美的预计投入20亿元推动价值链数字化</a></li>
					</ul>
					<ul class="m-list1 j-clist" data-url='http://sg.southcn.com/' data-city='韶关市'>
						<li><a href="http://sg.southcn.com/content/2019-01/06/content_184728367.htm" data-pubtime='2019-01-06 14:25'
							 target="_blank">曲江区柔性引才引智又有新举措</a></li>
						<li><a href="http://sg.southcn.com/content/2019-01/05/content_184721435.htm" data-pubtime='2019-01-05 15:45'
							 target="_blank">韶关风度书房累计迎客近百万人次</a></li>
						<li><a href="http://sg.southcn.com/content/2018-12/29/content_184645484.htm" data-pubtime='2018-12-29 13:35'
							 target="_blank">寒潮来袭！韶关高海拔地区最低气温-5℃或有雪</a></li>
						<li><a href="http://sg.southcn.com/content/2018-12/28/content_184631712.htm" data-pubtime='2018-12-29 13:35'
							 target="_blank">仁新高速全段交警警力实现全覆盖</a></li>
						<li><a href="http://sg.southcn.com/content/2018-12/28/content_184631732.htm" data-pubtime='2018-12-29 13:35'
							 target="_blank">韶阳楼全面修缮工作基本完成 元旦重新对外开放</a></li>
						<li><a href="http://sg.southcn.com/content/2018-12/29/content_184645589.htm" data-pubtime='2018-12-29 13:35'
							 target="_blank">武深、汕昆高速韶关段全线建成通车</a></li>
					</ul>
					<ul class="m-list1 j-clist" data-url='http://hy.southcn.com/' data-city='河源市'>
						<li><a href="http://hy.southcn.com/content/2019-01/06/content_184728380.htm" data-pubtime='2019-01-06 14:25'
							 target="_blank">河源2家大型工业企业共获120万奖补</a></li>
						<li><a href="http://hy.southcn.com/content/2019-01/05/content_184721442.htm" data-pubtime='2019-01-05 15:45'
							 target="_blank">河源紫金发出首张电子商务经营者营业执照</a></li>
						<li><a href="http://hy.southcn.com/content/2018-11/10/content_184028735.htm" data-pubtime='2018-11-10 14:47'
							 target="_blank">丁红都实地调研检查创文工作</a></li>
						<li><a href="http://hy.southcn.com/content/2018-11/10/content_184028728.htm" data-pubtime='2018-11-10 14:47'
							 target="_blank">河源启动“119”消防安全宣传月</a></li>
						<li><a href="http://hy.southcn.com/content/2018-10/27/content_183829712.htm" data-pubtime='2018-10-27 17:08'
							 target="_blank">东江奔流——来自河源高新区明星企业的报道⑤</a></li>
						<li><a href="http://hy.southcn.com/content/2018-10/26/content_183821809.htm" data-pubtime='2018-10-26 19:55'
							 target="_blank">东江奔流——来自河源高新区明星企业的报道②</a></li>
					</ul>
					<ul class="m-list1 j-clist" data-url='http://mz.southcn.com/' data-city='梅州市'>
						<li><a href="http://mz.southcn.com/content/2019-01/11/content_184799116.htm" data-pubtime='2019-01-11 16:17'
							 target="_blank">全会好声音：梅州到了摇旗呐喊、加油鼓劲，撸起袖子大干一场的时候</a></li>
						<li><a href="http://mz.southcn.com/content/2019-01/11/content_184799126.htm" data-pubtime='2019-01-11 16:17'
							 target="_blank">梅州市委七届六次全会召开：打造“三宜”城市范例，实现美丽与发展共赢</a></li>
						<li><a href="http://mz.southcn.com/content/2019-01/11/content_184799028.htm" data-pubtime='2019-01-11 16:17'
							 target="_blank">重磅!图读梅州机构改革方案，46个党政机构名单看这里</a></li>
						<li><a href="http://mz.southcn.com/content/2019-01/11/content_184799092.htm" data-pubtime='2019-01-11 16:17'
							 target="_blank">一图读懂｜打造“三宜”城市范例，实现美丽与发展共赢，梅州将这样干</a></li>
						<li><a href="http://mz.southcn.com/content/2019-01/11/content_184799038.htm" data-pubtime='2019-01-11 16:17'
							 target="_blank">划重点！2019年梅州经济工作怎么干？看这里</a></li>
						<li><a href="http://mz.southcn.com/content/2019-01/11/content_184799066.htm" data-pubtime='2019-01-11 16:16'
							 target="_blank">聚焦！推动区域协调发展，梅州将构建“五星争辉”发展新格局</a></li>
					</ul>
					<ul class="m-list1 j-clist" data-url='http://hz.southcn.com/' data-city='惠州市'>
						<li><a href="http://hz.southcn.com/content/2019-01/13/content_184814758.htm" data-pubtime='2019-01-13 11:08'
							 target="_blank">惠州又打通一条交通动脉！开车去河源更方便</a></li>
						<li><a href="http://hz.southcn.com/content/2019-01/13/content_184814759.htm" data-pubtime='2019-01-13 11:08'
							 target="_blank">惠州市党代会补选10名市委委员，他们是谁？</a></li>
						<li><a href="http://hz.southcn.com/content/2019-01/13/content_184814760.htm" data-pubtime='2019-01-13 11:08'
							 target="_blank">博罗县城中心客运站启用！新旧站可免费接驳</a></li>
						<li><a href="http://hz.southcn.com/content/2019-01/13/content_184814761.htm" data-pubtime='2019-01-13 11:08'
							 target="_blank">耗时6年，惠州女子绣制18米《清明上河图》</a></li>
						<li><a href="http://hz.southcn.com/content/2019-01/13/content_184814756.htm" data-pubtime='2019-01-13 11:08'
							 target="_blank">完工近七成！仲恺大道惠环段力争春节前通车</a></li>
						<li><a href="http://hz.southcn.com/content/2019-01/13/content_184814757.htm" data-pubtime='2019-01-13 11:08'
							 target="_blank">隆生大桥通车一男子被撞，事发前曾横穿大桥</a></li>
					</ul>
					<ul class="m-list1 j-clist" data-url='http://sw.southcn.com/' data-city='汕尾市'>
						<li><a href="http://sw.southcn.com/content/2019-01/11/content_184798925.htm" data-pubtime='2019-01-11 16:15'
							 target="_blank">汕尾河田镇荣膺“广东省民间文化艺术之乡”称号</a></li>
						<li><a href="http://sw.southcn.com/content/2019-01/11/content_184798940.htm" data-pubtime='2019-01-11 16:15'
							 target="_blank">汕尾陆丰渔政大队培训渔业职务船员</a></li>
						<li><a href="http://sw.southcn.com/content/2019-01/11/content_184798947.htm" data-pubtime='2019-01-11 16:15'
							 target="_blank">汕尾市公安局开展“迎新春佳节，送平安春联”活动</a></li>
						<li><a href="http://sw.southcn.com/content/2019-01/11/content_184798954.htm" data-pubtime='2019-01-11 16:15'
							 target="_blank">三年时间，陆河山旮旯里的穷村庄打响“梅”品牌!</a></li>
						<li><a href="http://sw.southcn.com/content/2019-01/11/content_184798932.htm" data-pubtime='2019-01-11 16:14'
							 target="_blank">汕尾市公安机关开展110宣传日暨警营开放日活动</a></li>
						<li><a href="http://sw.southcn.com/content/2019-01/06/content_184728539.htm" data-pubtime='2019-01-06 14:25'
							 target="_blank">汕尾公安机关圆满完成元旦安保维稳工作</a></li>
					</ul>
					<ul class="m-list1 j-clist" data-url='http://dg.southcn.com/' data-city='东莞市'>
						<li><a href="http://dg.southcn.com/content/2019-01/14/content_184821037.htm" data-pubtime='2019-01-14 11:06'
							 target="_blank">东莞：2018年十件民生实事全部完成</a></li>
						<li><a href="http://dg.southcn.com/content/2019-01/14/content_184821019.htm" data-pubtime='2019-01-14 11:06'
							 target="_blank">2019东莞产业工人新年歌会虎门开唱</a></li>
						<li><a href="http://dg.southcn.com/content/2019-01/14/content_184821012.htm" data-pubtime='2019-01-14 11:06'
							 target="_blank">东莞市商务局开展“暖企行动”获企业点赞</a></li>
						<li><a href="http://dg.southcn.com/content/2019-01/14/content_184821025.htm" data-pubtime='2019-01-14 11:06'
							 target="_blank">2019东莞春运：全方位提升交通安全水平</a></li>
						<li><a href="http://dg.southcn.com/content/2019-01/14/content_184821043.htm" data-pubtime='2019-01-14 11:06'
							 target="_blank">近五年东莞涉嫌医闹案件降幅达84%</a></li>
						<li><a href="http://dg.southcn.com/content/2019-01/14/content_184821031.htm" data-pubtime='2019-01-14 11:06'
							 target="_blank">东莞技师学院与协会合作开启精准培训模式</a></li>
					</ul>
					<ul class="m-list1 j-clist" data-url='http://zs.southcn.com/' data-city='中山市'>
						<li><a href="http://zs.southcn.com/content/2019-01/14/content_184824015.htm" data-pubtime='2019-01-14 12:15'
							 target="_blank">中山走航观测车上路，“嗅”污染源</a></li>
						<li><a href="http://zs.southcn.com/content/2019-01/14/content_184823999.htm" data-pubtime='2019-01-14 12:15'
							 target="_blank">中山星光联盟入选第三批国家级知识产权保护规范化市场名单</a></li>
						<li><a href="http://zs.southcn.com/content/2019-01/14/content_184823979.htm" data-pubtime='2019-01-14 12:15'
							 target="_blank">三重磨难没有压垮她，中山“好人”欢姐的微笑人生</a></li>
						<li><a href="http://zs.southcn.com/content/2019-01/14/content_184823995.htm" data-pubtime='2019-01-14 12:15'
							 target="_blank">中山打出“组合拳”，用技术创新提升实体经济核心竞争力</a></li>
						<li><a href="http://zs.southcn.com/content/2019-01/14/content_184823982.htm" data-pubtime='2019-01-14 12:15'
							 target="_blank">中山阳光先锋，挥春送福</a></li>
						<li><a href="http://zs.southcn.com/content/2019-01/14/content_184823984.htm" data-pubtime='2019-01-14 12:15'
							 target="_blank">智能家居无“锁”不能，小榄如何“锁”向披靡</a></li>
					</ul>
					<ul class="m-list1 j-clist" data-url='http://jm.southcn.com/' data-city='江门市'>
						<li><a href="http://jm.southcn.com/content/2019-01/14/content_184822018.htm" data-pubtime='2019-01-14 11:07'
							 target="_blank">江门出台“促进就业九条”，惠民“礼包”快收好</a></li>
						<li><a href="http://jm.southcn.com/content/2019-01/14/content_184822006.htm" data-pubtime='2019-01-14 11:07'
							 target="_blank">江门做实地方人大讨论决定重大事项工作</a></li>
						<li><a href="http://jm.southcn.com/content/2019-01/14/content_184821951.htm" data-pubtime='2019-01-14 11:07'
							 target="_blank">江门进入流感高峰期，医院流感患儿扎堆</a></li>
						<li><a href="http://jm.southcn.com/content/2019-01/14/content_184821958.htm" data-pubtime='2019-01-14 11:06'
							 target="_blank">江门市人大常委会2019年监督工作计划</a></li>
						<li><a href="http://jm.southcn.com/content/2019-01/14/content_184821944.htm" data-pubtime='2019-01-14 11:06'
							 target="_blank">江门三种血型库存告急，病人需“热血者”</a></li>
						<li><a href="http://jm.southcn.com/content/2019-01/14/content_184821993.htm" data-pubtime='2019-01-14 11:06'
							 target="_blank">从签约到动工仅23天！江海项目落地跑出加速度</a></li>
					</ul>
					<ul class="m-list1 j-clist" data-url='http://yj.southcn.com/' data-city='阳江市'>
						<li><a href="http://yj.southcn.com/content/2019-01/11/content_184799014.htm" data-pubtime='2019-01-11 16:16'
							 target="_blank">阳江消防救援支队举行迎旗授衔和换装仪式</a></li>
						<li><a href="http://yj.southcn.com/content/2019-01/11/content_184799003.htm" data-pubtime='2019-01-11 16:16'
							 target="_blank">阳江市企业家商会举办年会表彰先进</a></li>
						<li><a href="http://yj.southcn.com/content/2019-01/11/content_184798969.htm" data-pubtime='2019-01-11 16:15'
							 target="_blank">阳东区采取八大措施开展党员“亮身份、作表率”活动</a></li>
						<li><a href="http://yj.southcn.com/content/2019-01/11/content_184798986.htm" data-pubtime='2019-01-11 16:15'
							 target="_blank">阳江公安机关举行“110宣传日”活动</a></li>
						<li><a href="http://yj.southcn.com/content/2019-01/11/content_184798961.htm" data-pubtime='2019-01-11 16:15'
							 target="_blank">未来两天暖湿气流继续影响阳江</a></li>
						<li><a href="http://yj.southcn.com/content/2019-01/11/content_184798994.htm" data-pubtime='2019-01-11 16:15'
							 target="_blank">阳江法院去年审结涉黑涉恶案件35件135人</a></li>
					</ul>
					<ul class="m-list1 j-clist" data-url='http://zj.southcn.com/' data-city='湛江市'>
						<li><a href="http://zj.southcn.com/content/2019-01/06/content_184728455.htm" data-pubtime='2019-01-06 14:25'
							 target="_blank">2019广东省跆拳道联赛(粤西站)在湛开赛</a></li>
						<li><a href="http://zj.southcn.com/content/2019-01/05/content_184721483.htm" data-pubtime='2019-01-05 15:45'
							 target="_blank">湛江举办跨境电商及快件政策宣讲会</a></li>
						<li><a href="http://zj.southcn.com/content/2018-11/26/content_184229730.htm" data-pubtime='2018-11-26 16:16'
							 target="_blank">粤西首票跨境电商零售出口商品顺利通关</a></li>
						<li><a href="http://zj.southcn.com/content/2018-11/26/content_184229729.htm" data-pubtime='2018-11-26 16:16'
							 target="_blank">南海救助局包揽海博会海上展区评选活动全部奖项</a></li>
						<li><a href="http://zj.southcn.com/content/2018-11/26/content_184229731.htm" data-pubtime='2018-11-26 16:16'
							 target="_blank">2018中国海博会达成交易合作意向1100亿元</a></li>
						<li><a href="http://zj.southcn.com/content/2018-11/26/content_184229738.htm" data-pubtime='2018-11-26 16:16'
							 target="_blank">1-10月湛江市外贸进出口突破300亿元</a></li>
					</ul>
					<ul class="m-list1 j-clist" data-url='http://mm.southcn.com/' data-city='茂名市'>
						<li><a href="http://mm.southcn.com/content/2019-01/08/content_184751772.htm" data-pubtime='2019-01-08 17:16'
							 target="_blank">茂名国家高新区再次入选中国化工园区20强</a></li>
						<li><a href="http://mm.southcn.com/content/2019-01/08/content_184751771.htm" data-pubtime='2019-01-08 17:16'
							 target="_blank">电白举办国际越野挑战赛，1500多跑友汇聚</a></li>
						<li><a href="http://mm.southcn.com/content/2019-01/08/content_184751773.htm" data-pubtime='2019-01-08 17:15'
							 target="_blank">传承岭南文化，戏剧曲艺在茂南安“家”啦！</a></li>
						<li><a href="http://mm.southcn.com/content/2019-01/08/content_184751774.htm" data-pubtime='2019-01-08 17:15'
							 target="_blank">高州推动新时代文明实践中心试点工作</a></li>
						<li><a href="http://mm.southcn.com/content/2019-01/06/content_184728441.htm" data-pubtime='2019-01-06 14:24'
							 target="_blank">“己亥年”生肖猪特种邮票在茂名市发行</a></li>
						<li><a href="http://mm.southcn.com/content/2019-01/05/content_184721476.htm" data-pubtime='2019-01-05 15:45'
							 target="_blank">高州：税务服务助力特色小镇建设</a></li>
					</ul>
					<ul class="m-list1 j-clist" data-url='http://zq.southcn.com/' data-city='肇庆市'>
						<li><a href="http://zq.southcn.com/content/2019-01/14/content_184824936.htm" data-pubtime='2019-01-14 12:13'
							 target="_blank">肇庆机构改革工作有条不紊扎实开展</a></li>
						<li><a href="http://zq.southcn.com/content/2019-01/14/content_184824957.htm" data-pubtime='2019-01-14 12:03'
							 target="_blank">2018年端州发展创作了哪些新辉煌？</a></li>
						<li><a href="http://zq.southcn.com/content/2019-01/14/content_184824950.htm" data-pubtime='2019-01-14 12:02'
							 target="_blank">端州盘活土地增效益，一批优质项目纷纷落户</a></li>
						<li><a href="http://zq.southcn.com/content/2019-01/14/content_184824937.htm" data-pubtime='2019-01-14 12:01'
							 target="_blank">肇庆法院加强信息化建设，推动法院工作现代化进程</a></li>
						<li><a href="http://zq.southcn.com/content/2019-01/14/content_184824935.htm" data-pubtime='2019-01-14 11:58'
							 target="_blank">肇庆高新区“牵手”与欧洲科技商会</a></li>
						<li><a href="http://cms.nfdaily.com/servlet/PagePreviewServlet?type=1&amp;articleid=184824924&amp;nodeid=287468&amp;siteid=4&amp;terminal=pc"
							 data-pubtime='2019-01-14 11:57' target="_blank">赖泽华范中杰率队赴香港对接企业和商会</a></li>
					</ul>
					<ul class="m-list1 j-clist" data-url='http://qy.southcn.com/' data-city='清远市'>
						<li><a href="http://qy.southcn.com/content/2018-12/26/content_184600036.htm" data-pubtime='2018-12-26 10:03'
							 target="_blank">新政：广州缴存的公积金，清远购房可提取</a></li>
						<li><a href="http://qy.southcn.com/content/2018-12/26/content_184599977.htm" data-pubtime='2018-12-26 10:02'
							 target="_blank">佛冈竹山粉葛节开幕！“粉葛王”拍出6万“身价”</a></li>
						<li><a href="http://qy.southcn.com/content/2018-12/24/content_184579499.htm" data-pubtime='2018-12-26 10:02'
							 target="_blank">清远首次使用远程视频系统庭审减刑假释案！</a></li>
						<li><a href="http://qy.southcn.com/content/2018-12/24/content_184579420.htm" data-pubtime='2018-12-26 10:01'
							 target="_blank">连山首家机动车检测机构投入运行</a></li>
						<li><a href="http://qy.southcn.com/content/2018-12/18/content_184506282.htm" data-pubtime='2018-12-18 10:52'
							 target="_blank">全国森林旅游示范县！连南再添国字号招牌！</a></li>
						<li><a href="http://qy.southcn.com/content/2018-12/14/content_184469348.htm" data-pubtime='2018-12-18 10:57'
							 target="_blank">“剥皮黄金”小产业，撬动国外大市场</a></li>
					</ul>
					<ul class="m-list1 j-clist" data-url='http://cz.southcn.com/' data-city='潮州市'>
						<li><a href="http://cz.southcn.com/content/2019-01/10/content_184782943.htm" data-pubtime='2019-01-11 14:15'
							 target="_blank">潮州将打造“一基地三中心”</a></li>
						<li><a href="http://cz.southcn.com/content/2019-01/10/content_184782958.htm" data-pubtime='2019-01-11 14:15'
							 target="_blank">粤菜师傅主流媒体走进潮州饶平</a></li>
						<li><a href="http://news.southcn.com/nfplus/lhcyyqd/content/2019-01/11/content_184795910.htm" data-pubtime='2019-01-11 14:15'
							 target="_blank">潮州召开市委常委会(扩大)会议</a></li>
						<li><a href="http://cz.southcn.com/content/2019-01/10/content_184782951.htm" data-pubtime='2019-01-11 14:14'
							 target="_blank">如意大桥江东岛右侧辅道预计月底通车</a></li>
						<li><a href="http://cz.southcn.com/content/2019-01/06/content_184728393.htm" data-pubtime='2019-01-06 14:24'
							 target="_blank">狮峰村：“乡贤书记”带动全村脱贫致富</a></li>
						<li><a href="http://cz.southcn.com/content/2019-01/05/content_184721455.htm" data-pubtime='2019-01-05 15:46'
							 target="_blank">潮州两项专利获​第二十届中国专利奖</a></li>
					</ul>
					<ul class="m-list1 j-clist" data-url='http://jy.southcn.com/' data-city='揭阳市'>
						<li><a href="http://jy.southcn.com/content/2019-01/10/content_184782987.htm" data-pubtime='2019-01-11 14:14'
							 target="_blank">揭阳市区新式茶饮店林立 年轻群体为消费主力</a></li>
						<li><a href="http://jy.southcn.com/content/2019-01/10/content_184783017.htm" data-pubtime='2019-01-11 14:14'
							 target="_blank">李水华主持召开市委常委(扩大)会议</a></li>
						<li><a href="http://jy.southcn.com/content/2019-01/10/content_184782972.htm" data-pubtime='2019-01-11 14:14'
							 target="_blank">普宁一单位入选省众创空间试点单位</a></li>
						<li><a href="http://jy.southcn.com/content/2019-01/10/content_184782965.htm" data-pubtime='2019-01-11 14:14'
							 target="_blank">普宁市麒麟镇教育组举行首届校园足球联赛</a></li>
						<li><a href="http://jy.southcn.com/content/2019-01/07/content_184740859.htm" data-pubtime='2019-01-07 17:17'
							 target="_blank">出门买菜遭绑架勒索，揭阳警方5小时破案</a></li>
						<li><a href="http://jy.southcn.com/content/2019-01/07/content_184740852.htm" data-pubtime='2019-01-07 17:17'
							 target="_blank">揭阳产业园一批项目集中竣工签约开工</a></li>
					</ul>
					<ul class="m-list1 j-clist" data-url='http://yf.southcn.com/' data-city='云浮市'>
						<li><a href="http://yf.southcn.com/content/2019-01/06/content_184728469.htm" data-pubtime='2019-01-06 14:09'
							 target="_blank">​云浮市去年完成交通建设投资51.3亿元</a></li>
						<li><a href="http://yf.southcn.com/content/2019-01/05/content_184721503.htm" data-pubtime='2019-01-05 15:46'
							 target="_blank">云浮新区文体公园拟春节前开放迎客</a></li>
						<li><a href="http://yf.southcn.com/content/2018-12/29/content_184652906.htm" data-pubtime='2018-12-29 15:49'
							 target="_blank">新兴举办“惠游新兴 赏心悦目”旅游联盟推介会</a></li>
						<li><a href="http://yf.southcn.com/content/2018-12/29/content_184652919.htm" data-pubtime='2018-12-29 15:49'
							 target="_blank">云浮：360多万尾鱼苗放流西江</a></li>
						<li><a href="http://yf.southcn.com/content/2018-12/29/content_184652935.htm" data-pubtime='2018-12-29 15:49'
							 target="_blank">云浮市电商四企业入列省电商企业100强</a></li>
						<li><a href="http://yf.southcn.com/content/2018-12/29/content_184652887.htm" data-pubtime='2018-12-29 15:49'
							 target="_blank">云安区荣膺“2018全国社会治理创新示范区”</a></li>
					</ul>
				</div>
			</div>

			<div class="m-nfwp">
				<div class="m-tit m-ctit m-ztit f-cb">
					<a href="http://opinion.southcn.com/default.htm">
						<h2 class="f-cb">南方网评</h2>
					</a>
					<a href="http://opinion.southcn.com/default.htm" class="more">更多</a>
				</div>
				<div class="m-list3">
					<div class="itm">
						<h3><a href="http://opinion.southcn.com/o/2019-01/14/content_184820109.htm">【学习】以“最美”榜样力量为实现伟大事业凝聚伟力</a></h3>
						<div class="pa">榜样的力量在于鼓舞前行，在技术的登高中不懈奋进。榜样的力量在于甘于平凡，在普通的工作中创造奇迹。榜样的力量在于胸怀大局，为实现伟大事业凝聚伟力。</div>
					</div>
				</div>

				<ul class="m-list2">
					<li><a href="http://opinion.southcn.com/o/2019-01/11/content_184794183.htm">【学习】永不停歇 开启全面从严治党新篇章</a></li>
					<li><a href="http://opinion.southcn.com/o/2019-01/11/content_184795319.htm">【重点】整治秦岭违建别墅是警示更是宣示</a></li>
					<li><a href="http://opinion.southcn.com/o/2019-01/11/content_184794105.htm">【观澜】减税新举措强健小微企业发展双翼</a></li>
				</ul>

			</div>

		</div>
		<div class="m-bkq">
			<div class="m-bktab f-cb">
				<div class="tab tab1"><a href="http://epaper.southcn.com/">南方日报电子报</a></div>
				<div class="tab tab2"><a href="http://www.nfzz.net.cn/">南方杂志电子报</a></div>
			</div>

			<div class="m-bkt">
				<div class="ct active">
					<a href="http://epaper.southcn.com">
						<img src="http://www.southcn.com/pc2018/content/images/attachement/png/site4/20190114/4437e6a34ecf1da5fea402.png"
						 border="0"> </a>
				</div>
				<div class="ct">
					<a href="http://www.nfzz.net.cn/epaper/fb/295/node_390992.htm"><img src="http://www.southcn.com/pc2018/content/images/attachement/jpg/site4/20190102/54e1ad2cde531d96d36b24.jpg"
						 border="0">
						<h3>总第295期</h3>
					</a>
				</div>

			</div>
			<a class="m-nfjd" href="http://nfplus.southcn.com/nfapp/index.html">南方+客户端</a>
		</div>
	</div> --}}


	<div id="nav" style="display:none">
		政前方,南方探针,南方杂志,最新人事,21世纪经济报道,南方都市报,南方号,广东健康头条,每日一膳,广东教育头条,广东警讯,珏嘉秀,叮咚快评,粤有料,南方早班车,老虎苍蝇一起打,H5新媒体实验室,政直播,粤读,粤城,寰宇观察,财经早新闻,防务解码,世象,南方周末,谈天说粤,南方艺见,食品药品安全播报,乐弹评,广东河长,珠三角观察,南方会,南方+访,桥见未来,上学了,工匠精神展示馆,租房时代,老司机侃车,新零售时代,石岐妹说中山,
	</div>
	{{-- <div class="f-wp f-cb m-zqw">
		<div class="m-zq f-cb">
			<div class="m-bwrh"></div>
			<div class="itm">
				<div class="m-tit m-ztit f-cb">
					<a href="http://news.southcn.com/nfplus/nfh/node_378292.htm">
						<h2 class="f-cb"><span class="prefix"></span><span class="tit">南方号</span></h2>
					</a>
					<a href="http://news.southcn.com/nfplus/nfh/node_378292.htm" class="more">更多</a>
				</div>
				<div class="m-list4"><a href="http://news.southcn.com/nfplus/nfh/content/2019-01/13/content_184817841.htm"> <img
						 src="http://www.southcn.com/pc2018/content/images/attachement/jpg/site4/20190113/c89cdce348371da581a81e.jpg"
						 border="0"> </a>
					<h3><a href="http://news.southcn.com/nfplus/nfh/content/2019-01/13/content_184817841.htm">国务院港澳办：中央已明确大湾区五大战略定位及港澳广深四城定位</a></h3>
				</div>
			</div>

			<div class="itm">
				<div class="m-tit m-ztit f-cb">
					<a href="http://live.southcn.com/default.htm">
						<h2 class="f-cb"><span class="prefix"></span><span class="tit">政直播</span></h2>
					</a>
					<a href="http://live.southcn.com/default.htm" class="more">更多</a>
				</div>
				<div class="m-list4"><a href="https://static.nfapp.southcn.com/apptpl/liveToShare.html?id=147148"> <img src="http://www.southcn.com/pc2018/content/images/attachement/jpg/site4/20190113/7427eaa176f51da4e8641c.jpg"
						 border="0"> </a>
					<h3><a href="https://static.nfapp.southcn.com/apptpl/liveToShare.html?id=147148">见证冲破两百年世仇的婚礼：揭阳果陇村北山村结亲</a></h3>
				</div>
			</div>

			<div class="itm">
				<div class="m-tit m-ztit f-cb">
					<a href="http://news.southcn.com/nfplus/yyl/node_383485.htm">
						<h2 class="f-cb"><span class="prefix"></span><span class="tit">粤有料</span></h2>
					</a>
					<a href="http://news.southcn.com/nfplus/yyl/node_383485.htm" class="more">更多</a>
				</div>
				<div class="m-list4"><a href="http://news.southcn.com/nfplus/yyl/content/2019-01/11/content_184805314.htm"> <img
						 src="http://www.southcn.com/pc2018/content/images/attachement/jpg/site4/20190111/eca86b61fd551da2f62d04.jpg"
						 border="0"> </a>
					<h3><a href="http://news.southcn.com/nfplus/yyl/content/2019-01/11/content_184805314.htm">广州入户新政来了！除了年龄、渠道放宽，还有这些变化</a></h3>
				</div>
			</div>

			<div class="itm">
				<div class="m-tit m-ztit f-cb">
					<a href="http://news.southcn.com/n/node_383599.htm">
						<h2 class="f-cb">
							<span class="prefix"></span>
							<span class="tit">政前方</span>
						</h2>
					</a>
					<a href="http://news.southcn.com/n/node_383599.htm" class="more">更多</a>
				</div>
				<div class="m-list4"><a href="http://news.southcn.com/n/2019-01/14/content_184818991.htm"> <img src="http://www.southcn.com/pc2018/content/images/attachement/jpg/site4/20190114/4437e6a34ecf1da60f2415.jpg"
						 border="0"> </a>
					<h3><a href="http://news.southcn.com/n/2019-01/14/content_184818991.htm">银保监会：2018年银行不良余额破2万亿 处置核销力度加大</a></h3>
				</div>
			</div>

			<div class="itm">
				<div class="m-tit m-ztit f-cb">
					<a href="http://news.southcn.com/n/node_383600.htm">
						<h2 class="f-cb">
							<span class="prefix"></span>
							<span class="tit">寰宇观察</span>
						</h2>
					</a>
					<a href="http://news.southcn.com/n/node_383600.htm" class="more">更多</a>
				</div>
				<div class="m-list4"><a href="http://news.southcn.com/n/2019-01/11/content_184792370.htm"> <img src="http://www.southcn.com/pc2018/content/images/attachement/jpg/site4/20190111/b8975a50e7711da20fca05.jpg"
						 border="0"> </a>
					<h3><a href="http://news.southcn.com/n/2019-01/11/content_184792370.htm">中医药扬帆出海：在马来西亚靠什么走出唐人街？</a></h3>
				</div>
			</div>

			<div class="itm">
				<div class="m-tit m-ztit f-cb">
					<a href="http://news.southcn.com/nfplus/nfzbc/node_383484.htm">
						<h2 class="f-cb">
							<span class="prefix"></span>
							<span class="tit">南方早班车</span>
						</h2>
					</a>
					<a href="http://news.southcn.com/nfplus/nfzbc/node_383484.htm" class="more">更多</a>
				</div>
				<div class="m-list4"><a href="http://news.southcn.com/nfplus/nfzbc/content/2019-01/14/content_184818859.htm"> <img
						 src="http://www.southcn.com/pc2018/content/images/attachement/jpg/site4/20190114/d0278891c75b1da610f901.jpg"
						 border="0"> </a>
					<h3><a href="http://news.southcn.com/nfplus/nfzbc/content/2019-01/14/content_184818859.htm">秒过收费站！广东2200条“无感支付”车道助力春运</a></h3>
				</div>
			</div>

			<div class="itm">
				<div class="m-tit m-ztit f-cb">
					<a href="http://news.southcn.com/nfplus/zsjgc/node_383483.htm">
						<h2 class="f-cb">
							<span class="prefix"></span>
							<span class="tit">珠三角观察</span>
						</h2>
					</a>
					<a href="http://news.southcn.com/nfplus/zsjgc/node_383483.htm" class="more">更多</a>
				</div>
				<div class="m-list4"><a href="http://news.southcn.com/nfplus/zsjgc/content/2018-12/25/content_184596675.htm"> <img
						 src="http://www.southcn.com/pc2018/content/images/attachement/png/site4/20181225/eca86b61fd551d8c817610.png"
						 border="0"> </a>
					<h3><a href="http://news.southcn.com/nfplus/zsjgc/content/2018-12/25/content_184596675.htm">广佛同城十年，新的故事正在开启</a></h3>
				</div>
			</div>

			<div class="itm">
				<div class="m-tit m-ztit f-cb">
					<a href="http://news.southcn.com/rsdd/node_312013.htm">
						<h2 class="f-cb">
							<span class="prefix"></span>
							<span class="tit">最新人事</span>
						</h2>
					</a>
					<a href="http://news.southcn.com/rsdd/node_312013.htm" class="more">更多</a>
				</div>
				<div class="m-list4"><a href="http://news.southcn.com/rsdd/content/2019-01/14/content_184823673.htm"> <img src="http://www.southcn.com/pc2018/content/images/attachement/jpg/site4/20190114/b8975a50e7711da641cf28.jpg"
						 border="0"> </a>
					<h3><a href="http://news.southcn.com/rsdd/content/2019-01/14/content_184823673.htm">珠海干部任用公示通告：王学军等8名同志拟提拔</a></h3>
				</div>
			</div>


			<div class="itm">
				<div class="m-tit m-ztit f-cb">
					<a href="http://news.southcn.com/zl/h5/h5works/node_344954.htm#1">
						<h2 class="f-cb">
							<span class="prefix"></span>
							<span class="tit">H5新媒体实验室</span>
						</h2>
					</a>
					<a href="http://news.southcn.com/zl/h5/h5works/node_344954.htm#1" class="more">更多</a>
				</div>
				<div class="m-list4"><a href="http://news.southcn.com/gd/content/2019-01/10/content_184785515.htm"> <img src="http://www.southcn.com/pc2018/content/images/attachement/jpg/site4/20190110/7427eaa176f51da13cbe14.jpg"
						 border="0"> </a>
					<h3><a href="http://news.southcn.com/gd/content/2019-01/10/content_184785515.htm">广东110报警“新姿势”get！跟这首警媒Rap一起学起来</a></h3>
				</div>
			</div>


			<div class="itm">
				<div class="m-tit m-ztit f-cb">
					<a href="http://news.southcn.com/nfplus/cjzxw/node_383482.htm">
						<h2 class="f-cb">
							<span class="prefix"></span>
							<span class="tit">财经早新闻</span>
						</h2>
					</a>
					<a href="http://news.southcn.com/nfplus/cjzxw/node_383482.htm" class="more">更多</a>
				</div>
				<div class="m-list4"><a href="http://news.southcn.com/nfplus/cjzxw/content/2019-01/12/content_184806555.htm"> <img
						 src="http://www.southcn.com/pc2018/content/images/attachement/jpg/site4/20190112/8c89a5f54c991da383241b.jpg"
						 border="0"> </a>
					<h3><a href="http://news.southcn.com/nfplus/cjzxw/content/2019-01/12/content_184806555.htm">美三大股指微跌，止步五连涨</a></h3>
				</div>
			</div>

			<div class="itm">
				<div class="m-tit m-ztit f-cb">
					<a href="http://news.southcn.com/nfplus/lhcyyqd/node_383481.htm">
						<h2 class="f-cb">
							<span class="prefix"></span>
							<span class="tit">老虎苍蝇一起打</span>
						</h2>
					</a>
					<a href="http://news.southcn.com/nfplus/lhcyyqd/node_383481.htm" class="more">更多</a>
				</div>
				<div class="m-list4"><a href="http://news.southcn.com/nfplus/lhcyyqd/content/2019-01/11/content_184795910.htm">
						<img src="http://www.southcn.com/pc2018/content/images/attachement/jpg/site4/20190111/b8975a50e7711da2433310.jpg"
						 border="0"> </a>
					<h3><a href="http://news.southcn.com/nfplus/lhcyyqd/content/2019-01/11/content_184795910.htm">广东检察机关依法对何嘉琪涉嫌受贿案提起公诉</a></h3>
				</div>
			</div>

			<div class="itm">
				<div class="m-tit m-ztit f-cb">
					<a href="http://news.southcn.com/nfplus/ddkp/node_383480.htm">
						<h2 class="f-cb">
							<span class="prefix"></span>
							<span class="tit">叮咚快评</span>
						</h2>
					</a>
					<a href="http://news.southcn.com/nfplus/ddkp/node_383480.htm" class="more">更多</a>
				</div>
				<div class="m-list4"><a href="http://news.southcn.com/nfplus/ddkp/content/2019-01/11/content_184799640.htm"> <img
						 src="http://www.southcn.com/pc2018/content/images/attachement/jpg/site4/20190111/8c89a5f54c991da2868652.jpg"
						 border="0"> </a>
					<h3><a href="http://news.southcn.com/nfplus/ddkp/content/2019-01/11/content_184799640.htm">刺鼻异味来自哪里，广深市民不能“蒙查查”</a></h3>
				</div>
			</div>

			<div class="itm">
				<div class="m-tit m-ztit f-cb">
					<a href="http://news.southcn.com/nfplus/ttsy/node_383479.htm">
						<h2 class="f-cb">
							<span class="prefix"></span>
							<span class="tit">谈天说粤</span>
						</h2>
					</a>
					<a href="http://news.southcn.com/nfplus/ttsy/node_383479.htm" class="more">更多</a>
				</div>
				<div class="m-list4"><a href="http://news.southcn.com/nfplus/ttsy/content/2019-01/05/content_184718187.htm"> <img
						 src="http://www.southcn.com/pc2018/content/attachment/20190105/56f54adb-d4c5-459b-93d6-d742987c719a.jpg" border="0">
					</a>
					<h3><a href="http://news.southcn.com/nfplus/ttsy/content/2019-01/05/content_184718187.htm">小寒胜大寒，今起又降温，温补首选羊肉</a></h3>
				</div>
			</div>

			<div class="itm">
				<div class="m-tit m-ztit f-cb">
					<a href="http://news.southcn.com/nfplus/gdjx/node_383478.htm">
						<h2 class="f-cb">
							<span class="prefix"></span>
							<span class="tit">广东警讯</span>
						</h2>
					</a>
					<a href="http://news.southcn.com/nfplus/gdjx/node_383478.htm" class="more">更多</a>
				</div>
				<div class="m-list4"><a href="http://news.southcn.com/nfplus/gdjx/content/2019-01/13/content_184815441.htm"> <img
						 src="http://www.southcn.com/pc2018/content/images/attachement/png/site4/20190113/8c89a5f54c991da524fc23.png"
						 border="0"> </a>
					<h3><a href="http://news.southcn.com/nfplus/gdjx/content/2019-01/13/content_184815441.htm">广州南站一出租车司机被殴打案件告破，嫌疑人落网</a></h3>
				</div>
			</div>

			<div class="itm">
				<div class="m-tit m-ztit f-cb">
					<a href="http://news.southcn.com/nfplus/sx/node_383477.htm">
						<h2 class="f-cb">
							<span class="prefix"></span>
							<span class="tit">世象</span>
						</h2>
					</a>
					<a href="http://news.southcn.com/nfplus/sx/node_383477.htm" class="more">更多</a>
				</div>
				<div class="m-list4"><a href="http://news.southcn.com/nfplus/sx/content/2019-01/07/content_184745383.htm"> <img src="http://www.southcn.com/pc2018/content/images/attachement/jpg/site4/20190107/54e1ad2cde531d9da26421.jpg"
						 border="0"> </a>
					<h3><a href="http://news.southcn.com/nfplus/sx/content/2019-01/07/content_184745383.htm">泪目！艺考不易，他们背后的辛酸，你了解多少……</a></h3>
				</div>
			</div>

			<div class="itm">
				<div class="m-tit m-ztit f-cb">
					<a href="http://news.southcn.com/nfplus/gdjktt/node_383476.htm">
						<h2 class="f-cb">
							<span class="prefix"></span>
							<span class="tit">广东健康头条</span>
						</h2>
					</a>
					<a href="http://news.southcn.com/nfplus/gdjktt/node_383476.htm" class="more">更多</a>
				</div>
				<div class="m-list4"><a href="http://news.southcn.com/nfplus/gdjktt/content/2019-01/13/content_184816206.htm"> <img
						 src="http://www.southcn.com/pc2018/content/images/attachement/png/site4/20190113/c89cdce348371da537ce0b.png"
						 border="0"> </a>
					<h3><a href="http://news.southcn.com/nfplus/gdjktt/content/2019-01/13/content_184816206.htm">广东首例！因丈夫染色体缺陷她十年不孕，这项技术助她生下宝宝</a></h3>
				</div>
			</div>

			<div class="itm">
				<div class="m-tit m-ztit f-cb">
					<a href="http://news.southcn.com/nfplus/nfjf/node_383475.htm">
						<h2 class="f-cb">
							<span class="prefix"></span>
							<span class="tit">南方+访</span>
						</h2>
					</a>
					<a href="http://news.southcn.com/nfplus/nfjf/node_383475.htm" class="more">更多</a>
				</div>
				<div class="m-list4"><a href="http://news.southcn.com/nfplus/nfjf/content/2018-12/15/content_184477673.htm"> <img
						 src="http://www.southcn.com/pc2018/content/attachment/20181215/652462d9-8b0e-421b-86f7-2ed08a12c670.png" border="0">
					</a>
					<h3><a href="http://news.southcn.com/nfplus/nfjf/content/2018-12/15/content_184477673.htm">取消书面作业行不行？小学生们首先反对，理由太……</a></h3>
				</div>
			</div>

			<div class="itm">
				<div class="m-tit m-ztit f-cb">
					<a href="http://news.southcn.com/nfplus/zfsd/node_383474.htm">
						<h2 class="f-cb">
							<span class="prefix"></span>
							<span class="tit">租房时代</span>
						</h2>
					</a>
					<a href="http://news.southcn.com/nfplus/zfsd/node_383474.htm" class="more">更多</a>
				</div>
				<div class="m-list4"><a href="http://news.southcn.com/nfplus/zfsd/content/2018-09/12/content_183285837.htm"> <img
						 src="http://www.southcn.com/pc2018/content/images/attachement/jpg/site4/20180912/68f728ccd1761d02f6de28.jpg"
						 border="0"> </a>
					<h3><a href="http://news.southcn.com/nfplus/zfsd/content/2018-09/12/content_183285837.htm">你家房租能换多少个汉堡？广州天河地铁周边居然是这个价……</a></h3>
				</div>
			</div>

			<div class="itm">
				<div class="m-tit m-ztit f-cb">
					<a href="http://news.southcn.com/nfplus/mrys/node_383473.htm">
						<h2 class="f-cb">
							<span class="prefix"></span>
							<span class="tit">每日一膳</span>
						</h2>
					</a>
					<a href="http://news.southcn.com/nfplus/mrys/node_383473.htm" class="more">更多</a>
				</div>
				<div class="m-list4"><a href="http://news.southcn.com/nfplus/mrys/content/2019-01/13/content_184815926.htm"> <img
						 src="http://www.southcn.com/pc2018/content/images/attachement/jpg/site4/20190113/c89cdce348371da5382212.jpg"
						 border="0"> </a>
					<h3><a href="http://news.southcn.com/nfplus/mrys/content/2019-01/13/content_184815926.htm">吃饭不香？教你用理气食材调制一道开胃酱</a></h3>
				</div>
			</div>

			<div class="itm">
				<div class="m-tit m-ztit f-cb">
					<a href="http://news.southcn.com/nfplus/nftz/node_383472.htm">
						<h2 class="f-cb">
							<span class="prefix"></span>
							<span class="tit">南方探针</span>
						</h2>
					</a>
					<a href="http://news.southcn.com/nfplus/nftz/node_383472.htm" class="more">更多</a>
				</div>
				<div class="m-list4"><a href="http://news.southcn.com/nfplus/nftz/content/2019-01/14/content_184818857.htm"> <img
						 src="http://www.southcn.com/pc2018/content/images/attachement/jpg/site4/20190114/d0278891c75b1da61bec02.jpg"
						 border="0"> </a>
					<h3><a href="http://news.southcn.com/nfplus/nftz/content/2019-01/14/content_184818857.htm">又一保健品直销巨头遭调查！记者走访华林广东分部：人去楼空</a></h3>
				</div>
			</div>

			<div class="itm">
				<div class="m-tit m-ztit f-cb">
					<a href="http://news.southcn.com/nfplus/nfyj/node_383471.htm">
						<h2 class="f-cb">
							<span class="prefix"></span>
							<span class="tit">南方艺见</span>
						</h2>
					</a>
					<a href="http://news.southcn.com/nfplus/nfyj/node_383471.htm" class="more">更多</a>
				</div>
				<div class="m-list4"><a href="http://news.southcn.com/nfplus/nfyj/content/2019-01/04/content_184711452.htm"> <img
						 src="http://www.southcn.com/pc2018/content/images/attachement/jpg/site4/20190104/c89cdce348371d9948fa17.jpg"
						 border="0"> </a>
					<h3><a href="http://news.southcn.com/nfplus/nfyj/content/2019-01/04/content_184711452.htm">广州市文联主席李鹏程清华开讲“艺术领导力”</a></h3>
				</div>
			</div>

			<div class="itm">
				<div class="m-tit m-ztit f-cb">
					<a href="http://news.southcn.com/nfplus/gdhz/node_383470.htm">
						<h2 class="f-cb">
							<span class="prefix"></span>
							<span class="tit">广东河长</span>
						</h2>
					</a>
					<a href="http://news.southcn.com/nfplus/gdhz/node_383470.htm" class="more">更多</a>
				</div>
				<div class="m-list4"><a href="http://news.southcn.com/nfplus/gdhz/content/2018-12/29/content_184640061.htm"> <img
						 src="http://www.southcn.com/pc2018/content/images/attachement/jpg/site4/20181229/8c89a5f54c991d9103d416.jpg"
						 border="0"> </a>
					<h3><a href="http://news.southcn.com/nfplus/gdhz/content/2018-12/29/content_184640061.htm">练江整治基础设施年底如期建成！治河故事，等你开启</a></h3>
				</div>
			</div>

			<div class="itm">
				<div class="m-tit m-ztit f-cb">
					<a href="http://news.southcn.com/nfplus/ngshow/node_383469.htm">
						<h2 class="f-cb">
							<span class="prefix"></span>
							<span class="tit">南哥show</span>
						</h2>
					</a>

					<a href="http://news.southcn.com/nfplus/ngshow/node_383469.htm" class="more">更多</a>
				</div>
				<div class="m-list4"><a href="http://news.southcn.com/nfplus/ngshow/content/2018-06/28/content_182391137.htm"> <img
						 src="http://www.southcn.com/pc2018/content/images/attachement/jpg/site4/20180702/0023248123c01ca43a1c29.jpg"
						 border="0"> </a>
					<h3><a href="http://news.southcn.com/nfplus/ngshow/content/2018-06/28/content_182391137.htm">南哥SHOW：世界杯今晚开波！怎么才能好好看次球？</a></h3>
				</div>
			</div>


			<div class="itm">
				<div class="m-tit m-ztit f-cb">
					<a href="http://news.southcn.com/nfplus/gdjytt/node_383467.htm">
						<h2 class="f-cb">
							<span class="prefix"></span>
							<span class="tit">广东教育头条</span>
						</h2>
					</a>
					<a href="http://news.southcn.com/nfplus/gdjytt/node_383467.htm" class="more">更多</a>
				</div>
				<div class="m-list4"><a href="http://news.southcn.com/nfplus/gdjytt/content/2019-01/13/content_184812495.htm"> <img
						 src="http://www.southcn.com/pc2018/content/images/attachement/jpg/site4/20190113/8c89a5f54c991da4dbdc16.jpg"
						 border="0"> </a>
					<h3><a href="http://news.southcn.com/nfplus/gdjytt/content/2019-01/13/content_184812495.htm">广东编导术科统考泄题？省教育考试院：某机构涉嫌虚假宣传</a></h3>
				</div>
			</div>

			<div class="itm">
				<div class="m-tit m-ztit f-cb">
					<a href="http://news.southcn.com/nfplus/sxl/node_383466.htm">
						<h2 class="f-cb">
							<span class="prefix"></span>
							<span class="tit">上学了</span>
						</h2>
					</a>
					<a href="http://news.southcn.com/nfplus/sxl/node_383466.htm" class="more">更多</a>
				</div>
				<div class="m-list4"><a href="http://news.southcn.com/nfplus/sxl/content/2018-10/18/content_183703512.htm"> <img
						 src="http://www.southcn.com/pc2018/content/images/attachement/jpg/site4/20181018/8c89a5f54c991d32421911.jpg"
						 border="0"> </a>
					<h3><a href="http://news.southcn.com/nfplus/sxl/content/2018-10/18/content_183703512.htm">省实校长全汉炎揭秘：“一校九门”，省实“家族”还会继续壮大吗？</a></h3>
				</div>
			</div>

			<div class="itm">
				<div class="m-tit m-ztit f-cb">
					<a href="http://news.southcn.com/nfplus/nfh/node_383464.htm">
						<h2 class="f-cb">
							<span class="prefix"></span>
							<span class="tit">南方会</span>
						</h2>
					</a>
					<a href="http://news.southcn.com/nfplus/nfh/node_383464.htm" class="more">更多</a>
				</div>
				<div class="m-list4"><a href="http://news.southcn.com/nfplus/nfh/content/2018-12/19/content_184527821.htm"> <img
						 src="http://www.southcn.com/pc2018/content/images/attachement/jpg/site4/20181219/d0278891c75b1d847e142d.jpg"
						 border="0"> </a>
					<h3><a href="http://news.southcn.com/nfplus/nfh/content/2018-12/19/content_184527821.htm">投资50亿美元发展物联网，还要布局AI！微软找到了这位合作伙伴</a></h3>
				</div>
			</div>



			<div class="itm">
				<div class="m-tit m-ztit f-cb">
					<a href="http://news.southcn.com/nfplus/fwjm/node_383462.htm">
						<h2 class="f-cb">
							<span class="prefix"></span>
							<span class="tit">防务解码</span>
						</h2>
					</a>
					<a href="http://news.southcn.com/nfplus/fwjm/node_383462.htm" class="more">更多</a>
				</div>
				<div class="m-list4"><a href="http://news.southcn.com/nfplus/fwjm/content/2019-01/08/content_184748848.htm"> <img
						 src="http://www.southcn.com/pc2018/content/images/attachement/jpg/site4/20190108/c89cdce348371d9e86fa1a.jpg"
						 border="0"> </a>
					<h3><a href="http://news.southcn.com/nfplus/fwjm/content/2019-01/08/content_184748848.htm">马蒂斯辞职：特朗普“将军帮”失势？</a></h3>
				</div>
			</div>



			<div class="itm">
				<div class="m-tit m-ztit f-cb">
					<a href="http://news.southcn.com/nfplus/jjx/node_383460.htm">
						<h2 class="f-cb">
							<span class="prefix"></span>
							<span class="tit">珏嘉秀</span>
						</h2>
					</a>
					<a href="http://news.southcn.com/nfplus/jjx/node_383460.htm" class="more">更多</a>
				</div>
				<div class="m-list4"><a href="http://news.southcn.com/nfplus/jjx/content/2019-01/13/content_184815080.htm"> <img
						 src="http://www.southcn.com/pc2018/content/images/attachement/jpg/site4/20190113/8c89a5f54c991da528f137.jpg"
						 border="0"> </a>
					<h3><a href="http://news.southcn.com/nfplus/jjx/content/2019-01/13/content_184815080.htm">亚洲彩虹盛典《白鹿原》夺六魁，张嘉译“荣誉越多心里越慌”</a></h3>
				</div>
			</div>

			<div class="itm">
				<div class="m-tit m-ztit f-cb">
					<a href="http://news.southcn.com/nfplus/sqmszs/node_383459.htm">
						<h2 class="f-cb">
							<span class="prefix"></span>
							<span class="tit">石岐妹说中山</span>
						</h2>
					</a>
					<a href="http://news.southcn.com/nfplus/sqmszs/node_383459.htm" class="more">更多</a>
				</div>
				<div class="m-list4"><a href="http://news.southcn.com/nfplus/sqmszs/content/2018-08/02/content_182800750.htm"> <img
						 src="http://www.southcn.com/pc2018/content/images/attachement/jpg/site4/20180802/c89cdce348371ccd026b2b.jpg"
						 border="0"> </a>
					<h3><a href="http://news.southcn.com/nfplus/sqmszs/content/2018-08/02/content_182800750.htm">《石岐妹说中山》|担心假疫苗，更怕被狗咬，谁来管管？</a></h3>
				</div>
			</div>

			<div class="itm">
				<div class="m-tit m-ztit f-cb">
					<a href="http://news.southcn.com/nfplus/xlssd/node_383458.htm">
						<h2 class="f-cb">
							<span class="prefix"></span>
							<span class="tit">新零售时代</span>
						</h2>
					</a>
					<a href="http://news.southcn.com/nfplus/xlssd/node_383458.htm" class="more">更多</a>
				</div>
				<div class="m-list4"><a href="http://news.southcn.com/nfplus/xlssd/content/2018-08/30/content_183096224.htm"> <img
						 src="http://www.southcn.com/pc2018/content/images/attachement/jpg/site4/20180830/68f728ccd1761cf176ce1e.jpg"
						 border="0"> </a>
					<h3><a href="http://news.southcn.com/nfplus/xlssd/content/2018-08/30/content_183096224.htm">开个超市卖“爆款”月入15万？95后海归投身“新零售”另类创业</a></h3>
				</div>
			</div>



			<div class="itm">
				<div class="m-tit m-ztit f-cb">
					<a href="http://news.southcn.com/nfplus/gjjszsg/node_383456.htm">
						<h2 class="f-cb">
							<span class="prefix"></span>
							<span class="tit">工匠精神展示馆</span>
						</h2>
					</a>
					<a href="http://news.southcn.com/nfplus/gjjszsg/node_383456.htm" class="more">更多</a>
				</div>
				<div class="m-list4"><a href="http://news.southcn.com/nfplus/gjjszsg/content/2018-11/22/content_184189668.htm">
						<img src="http://www.southcn.com/pc2018/content/images/attachement/png/site4/20181123/90fba609960c1d61973908.png"
						 border="0"> </a>
					<h3><a href="http://news.southcn.com/nfplus/gjjszsg/content/2018-11/22/content_184189668.htm">广东省人民政府参事室调研组等到工匠馆参观调研</a></h3>
				</div>
			</div>

			<div class="itm">
				<div class="m-tit m-ztit f-cb">
					<a href="http://news.southcn.com/nfplus/qjwl/node_383455.htm">
						<h2 class="f-cb">
							<span class="prefix"></span>
							<span class="tit">桥见未来</span>
						</h2>
					</a>
					<a href="http://news.southcn.com/nfplus/qjwl/node_383455.htm" class="more">更多</a>
				</div>
				<div class="m-list4"><a href="http://news.southcn.com/nfplus/qjwl/content/2018-11/23/content_184195976.htm"> <img
						 src="http://www.southcn.com/pc2018/content/images/attachement/jpg/site4/20181123/90fba609960c1d619e330a.jpg"
						 border="0"> </a>
					<h3><a href="http://news.southcn.com/nfplus/qjwl/content/2018-11/23/content_184195976.htm">唱响大桥讲好故事！南方网红把大桥故事“唱进寻常百姓家”</a></h3>
				</div>
			</div>

			<div class="itm">
				<div class="m-tit m-ztit f-cb">
					<a href="http://news.southcn.com/nfplus/ltp/node_383454.htm">
						<h2 class="f-cb">
							<span class="prefix"></span>
							<span class="tit">乐弹评</span>
						</h2>
					</a>
					<a href="http://news.southcn.com/nfplus/ltp/node_383454.htm" class="more">更多</a>
				</div>
				<div class="m-list4"><a href="http://news.southcn.com/nfplus/ltp/content/2019-01/02/content_184678341.htm"> <img
						 src="http://www.southcn.com/pc2018/content/images/attachement/jpg/site4/20190102/8c89a5f54c991d96a10f5b.jpg"
						 border="0"> </a>
					<h3><a href="http://news.southcn.com/nfplus/ltp/content/2019-01/02/content_184678341.htm">粤曲和流行跨界演绎《西厢记》？全球微粤曲大赛首届作品创作赛让你脑洞大开</a></h3>
				</div>
			</div>

			<div class="itm">
				<div class="m-tit m-ztit f-cb">
					<a href="http://news.southcn.com/nfplus/lsjkc/node_383453.htm">
						<h2 class="f-cb">
							<span class="prefix"></span>
							<span class="tit">老司机侃车</span>
						</h2>
					</a>
					<a href="http://news.southcn.com/nfplus/lsjkc/node_383453.htm" class="more">更多</a>
				</div>
				<div class="m-list4"><a href="http://news.southcn.com/nfplus/lsjkc/content/2018-09/02/content_183137839.htm"> <img
						 src="http://www.southcn.com/pc2018/content/attachment/20180831/723eea53-ebcf-41ad-a8bc-9e37c17f1e91.png" border="0">
					</a>
					<h3><a href="http://news.southcn.com/nfplus/lsjkc/content/2018-09/02/content_183137839.htm">上榜米其林的这碗竹升面，真的好吃吗？|美食之旅</a></h3>
				</div>
			</div>

			<div class="itm">
				<div class="m-tit m-ztit f-cb">
					<a href="http://news.southcn.com/nfplus/yd/node_383452.htm">
						<h2 class="f-cb">
							<span class="prefix"></span>
							<span class="tit">粤读</span>
						</h2>
					</a>
					<a href="http://news.southcn.com/nfplus/yd/node_383452.htm" class="more">更多</a>
				</div>
				<div class="m-list4"><a href="http://news.southcn.com/nfplus/yd/content/2019-01/10/content_184788663.htm"> <img src="http://www.southcn.com/pc2018/content/images/attachement/jpg/site4/20190110/d0278891c75b1da166a436.jpg"
						 border="0"> </a>
					<h3><a href="http://news.southcn.com/nfplus/yd/content/2019-01/10/content_184788663.htm">“相聚鹏城”第二届全国诗文大会在深圳召开</a></h3>
				</div>
			</div>

			<div class="itm">
				<div class="m-tit m-ztit f-cb">
					<a href="http://fds.southcn.com/">
						<h2 class="f-cb">
							<span class="prefix"></span>
							<span class="tit">食品药品安全播报</span>
						</h2>
					</a>
					<a href="http://fds.southcn.com/" class="more">更多</a>
				</div>
				<div class="m-list4"><a href="http://fds.southcn.com/ttbb/content/2019-01/14/content_184821179.htm"> <img src="http://www.southcn.com/pc2018/content/images/attachement/jpg/site4/20190114/0023248fd6ec1da62ba40d.jpg"
						 border="0"> </a>
					<h3><a href="http://fds.southcn.com/ttbb/content/2019-01/14/content_184821179.htm">买药有望更便宜了！“4+7”药品带量采购3月底执行</a></h3>
				</div>
			</div>

			<div class="itm">
				<div class="m-tit m-ztit f-cb">
					<a href="http://news.southcn.com/21sjjjbd/node_384175.htm">
						<h2 class="f-cb">
							<span class="prefix"></span>
							<span class="tit">21世纪经济报道</span>
						</h2>
					</a>
					<a href="http://news.southcn.com/21sjjjbd/node_384175.htm" class="more">更多</a>
				</div>
				<div class="m-list4"><a href="http://news.southcn.com/21sjjjbd/content/2019-01/14/content_184818947.htm"> <img src="http://www.southcn.com/pc2018/content/images/attachement/jpg/site4/20190114/4437e6a34ecf1da60d1314.jpg"
						 border="0"> </a>
					<h3><a href="http://news.southcn.com/21sjjjbd/content/2019-01/14/content_184818947.htm">工业遗产“再发现”之旅 让我们更看清现在</a></h3>
				</div>
			</div>

			<div class="itm">
				<div class="m-tit m-ztit f-cb">
					<a href="http://news.southcn.com/nfzz/node_384174.htm">
						<h2 class="f-cb">
							<span class="prefix"></span>
							<span class="tit">南方杂志</span>
						</h2>
					</a>
					<a href="http://news.southcn.com/nfzz/node_384174.htm" class="more">更多</a>
				</div>
				<div class="m-list4"><a href="http://news.southcn.com/nfzz/content/2019-01/14/content_184819056.htm"> <img src="http://www.southcn.com/pc2018/content/images/attachement/jpg/site4/20190114/4437e6a34ecf1da611d41b.jpg"
						 border="0"> </a>
					<h3><a href="http://news.southcn.com/nfzz/content/2019-01/14/content_184819056.htm">以“育时代新人”为导向，构建“广东新时代基础教育发展新格局”</a></h3>
				</div>
			</div>

			<div class="itm">
				<div class="m-tit m-ztit f-cb">
					<a href="http://news.southcn.com/nfdsb/node_384172.htm">
						<h2 class="f-cb">
							<span class="prefix"></span>
							<span class="tit">南方都市报</span>
						</h2>
					</a>
					<a href="http://news.southcn.com/nfdsb/node_384172.htm" class="more">更多</a>
				</div>
				<div class="m-list4"><a href="http://news.southcn.com/nfdsb/content/2019-01/14/content_184818946.htm"> <img src="http://www.southcn.com/pc2018/content/images/attachement/jpg/site4/20190114/4437e6a34ecf1da60c0812.jpg"
						 border="0"> </a>
					<h3><a href="http://news.southcn.com/nfdsb/content/2019-01/14/content_184818946.htm">从前海到河套，深圳创新性打造粤港澳合作示范区</a></h3>
				</div>
			</div>

			<div class="itm">
				<div class="m-tit m-ztit f-cb">
					<a href="http://news.southcn.com/nfzm/node_384173.htm">
						<h2 class="f-cb">
							<span class="prefix"></span>
							<span class="tit">南方周末</span>
						</h2>
					</a>
					<a href="http://news.southcn.com/nfzm/node_384173.htm" class="more">更多</a>
				</div>
				<div class="m-list4"><a href="http://news.southcn.com/nfzm/content/2019-01/05/content_184719778.htm"> <img src="http://www.southcn.com/pc2018/content/images/attachement/jpg/site4/20190105/eca86b61fd551d9a578618.jpg"
						 border="0"> </a>
					<h3><a href="http://news.southcn.com/nfzm/content/2019-01/05/content_184719778.htm">一个国家级贫困县的教育“突围”</a></h3>
				</div>
			</div>

			<style>
				.pre20{
			    background-image: url(http://www.southcn.com/public/2018/img/icon-l_yc.png)!important;
    			width: 29px;
			}
		</style>
			<div class="itm">
				<div class="m-tit m-ztit f-cb">
					<a href="http://news.southcn.com/zl/yc/node_387672.htm">
						<h2 class="f-cb">
							<span class="prefix pre20"></span>
							<span class="tit">粤城</span>
						</h2>
					</a>
					<a href="http://news.southcn.com/zl/yc/node_387672.htm" class="more">更多</a>
				</div>
				<div class="m-list4"><a href="http://news.southcn.com/zl/yc/node_387672.htm">
						<img src="http://www.southcn.com/public/2018/img/cover_yc.jpg" border="0"> </a>
					<h3><a href="http://news.southcn.com/zl/yc/node_387672.htm">城绩、城色、城气候……南方网微信品牌栏目《粤城》让你秒读广东！</a></h3>
				</div>
			</div>

		</div>
	</div> --}}


	<!-- <div class="m-zmore">了解更多</div> -->

	<div class="m-ad3 f-wp" id="index_ad06"></div>


	{{-- <div class="m-fb f-wp f-cb">
		<a href="http://gdio.southcn.com/">
			<div class="itm itm1">
			</div>
		</a>
		<div class="itm itm2">
			<a class="tit" href="http://news.southcn.com/g/node_74681.htm">权威公告</a>
			<h3><a href="http://news.southcn.com/g/2019-01/03/content_184697567.htm">关于注销登记《家家乐》《音响改装技术》《健康之路》期刊的公告</a></h3>
		</div>
	</div> --}}
	<div class="f-wp f-cb m-row">
		<?php 
			$fenlei = \DB::Table('fenlei3s')->get();
		?>
		<div class="row f-cb">
			@foreach($fenlei as $v)
			<?php 
				$last_article = \DB::Table('article3s')->orderBy('id','desc')->where('fenlei_id',$v->id)->where('news_pic','<>','')->limit(1)->first();
				$article = \DB::Table('article3s')->orderBy('id','desc')->where('fenlei_id',$v->id)->where('content','<>','')->skip(1)->limit(3)->get();
				?>
			<div class="itm">
				<div class="m-tit2">
					<h2><a href="/fenlei/{{$v->id}}">{{$v->fenlei_name}}</a></h2>
				</div>
				<div class="hl">
					@if($last_article == [])
					<?php
					$article = \DB::Table('article3s')->orderBy('id','desc')->where('fenlei_id',$v->id)->where('content','<>','')->limit(7)->get();
					?>
					@foreach($article as $vel)
					<ul class="m-list5">
						<li><a href="/article/{{$vel->id}}" data-pubtime='{{$vel->create_time}}' target="_blank">{{$vel->title}}</a></li>
					</ul>
					@endforeach
				</div>
				@else
				<a href="/article/{{$last_article->id}}" data-pubtime='{{$last_article->create_time}}' target="_blank"><img src="{{$last_article->news_pic}}"
					 border="0">
					<h3>{{$last_article->title}}</h3>
				</a>
			</div>
			<ul class="m-list5">
				@foreach($article as $vol)
				<li><a href="/article/{{$vol->id}}" data-pubtime='{{$vol->create_time}}' target="_blank">{{$vol->title}}</a></li>
				@endforeach
			</ul>
			@endif

		</div>
		@endforeach
	</div>

	</div>

	{{-- <div class="m-sj f-wp f-cb">
		<a href="http://news.southcn.com/n/node_383652.htm">
			<div class="tit"></div>
		</a>
		<div class="m-sjlw">
			<div class="m-sjl">
				<div class="itm">
					<div class="pic1"><a href="http://news.southcn.com/nfplus/nfh/content/2019-01/13/content_184816790.htm"> <img src="http://www.southcn.com/pc2018/content/images/attachement/png/site4/20190113/eca86b61fd551da55d025e.png"
							 border="0">
							<h3>为小动物“特供”的腊八粥你见过吗？</h3>
						</a> </div>


					<div class="pic2"><a href="http://news.southcn.com/n/2019-01/06/content_184729811.htm"> <img src="http://www.southcn.com/pc2018/content/images/attachement/jpg/site4/20190106/4437e6a34ecf1d9c0e2957.jpg"
							 border="0">
							<h3>穿越火线，广东特警真枪实弹带你“吃鸡”</h3>
						</a> </div>


					<div class="pic2"><a href="http://kb.southcn.com/content/2019-01/04/content_184709016.htm"> <img src="http://www.southcn.com/pc2018/content/images/attachement/jpg/site4/20190104/b8975a50e7711d99269c01.jpg"
							 border="0">
							<h3>记录新年第一天，这些照片获奖啦！</h3>
						</a> </div>

				</div>

				<div class="itm">
					<div class="pic1"><a href="http://news.southcn.com/nfplus/sx/content/2018-12/16/content_184482554.htm"> <img src="http://www.southcn.com/pc2018/content/images/attachement/jpg/site4/20181216/4437e6a34ecf1d805cb608.jpg"
							 border="0">
							<h3>跨越伶仃洋的创业梦</h3>
						</a> </div>


					<div class="pic2"><a href="http://news.southcn.com/gd/content/2018-12/13/content_184459635.htm"> <img src="http://www.southcn.com/pc2018/content/images/attachement/png/site4/20181213/54e1ad2cde531d7cbdc72b.png"
							 border="0">
							<h3>看6只黑天鹅萌宝破壳而出</h3>
						</a> </div>


					<div class="pic2"><a href="http://news.southcn.com/gd/content/2018-12/09/content_184401288.htm"> <img src="http://www.southcn.com/pc2018/content/images/attachement/jpg/site4/20181209/c89cdce348371d77254b4b.jpg"
							 border="0">
							<h3>一帖看尽2018广马精彩瞬间</h3>
						</a> </div>


				</div>
			</div>
			<div class="m-prev2"></div>
			<div class="m-next2"></div>
		</div>
	</div> --}}

	{{-- <div class="m-hwb f-wp">
		<a href="http://epaper.southcn.com/oversea/" title="南方日报海外版">
			<div class="m-hwc">
				<div class="m-tit4 f-cb">
					<span class="jrgd">今日广东</span>
					<span class="nyqq">南粤侨情</span>
					<span class="zyys">中医养生</span>
				</div>
				<div class="m-hwbl">
					<div class="tit">合作外媒：</div>
					<div class="pa">
						<p><span>美国《侨报》</span><span class="prefix">|</span><span>《星岛日报》</span><span class="prefix">|</span><span>《加拿大商报》</span><span
							 class="prefix">|</span><span>《美中报导》</span><span class="prefix">|</span><span>泰国《星暹日报》</span><span class="prefix">|</span><span>柬埔寨《华商日报》</span></p>
						<p><span>印尼《商报》</span><span class="prefix">|</span><span>《欧洲时报》</span><span class="prefix">|</span><span>巴西《南美侨报》</span><span
							 class="prefix">|</span><span>《美洲商报》</span><span class="prefix">|</span><span>《欧洲商报》</span></p>
					</div>
				</div>
			</div>
		</a>
	</div> --}}



	{{-- <div class="m-enw f-wp f-cb">



		<div class="m-tit2 m-tit7">
			<h2><a href="http://www.newsgd.com/" target="_blank">News Guangdong</a></h2>
			<div class="more">
				<a href="http://www.newsgd.com/specials/financial/node_382212.htm?from=singlemessage&amp;isappinstalled=0"
				 data-pubtime='2018-07-19 10:18' target="_blank">Global Research on Financial Centers</a><a href="http://edu.southcn.com/e/node_381992.htm"
				 data-pubtime='2018-07-19 10:17' target="_blank">Creative Short Film Contest</a>
				<a href="http://www.newsgd.com/news/node_95268.htm"><img src="http://www.southcn.com/public/2016/pc/img/gdup.jpg"
					 alt=""></a>
			</div>
		</div>

		<div class="m-ect">
			<div class="m-efocusw">
				<div class="m-efocus">


					<div class="itm"><a href="http://www.newsgd.com/news/2019-01/14/content_184820668.htm" data-pubtime='2019-01-14 09:32'
						 target="_blank"><img src="http://www.southcn.com/pc2018/content/images/attachement/jpg/site4/20190114/d8cb8a4765ee1da62bd806.jpg"
							 border="0"> </a>
						<div class="pw">
							<h3><a href="http://www.newsgd.com/news/2019-01/14/content_184820668.htm" data-pubtime='2019-01-14 09:32' target="_blank">Laba
									Festival: A day of blessing for the Chinese New Year</a></h3>
							<div class="pa">January 13 marks the traditional Laba Festival in China. What are the customs behind this
								festival, and how did they come about?</div>
						</div>
					</div>
					<div class="itm"><a href="http://www.newsgd.com/news/2019-01/13/content_184814008.htm" data-pubtime='2019-01-13 10:16'
						 target="_blank"><img src="http://www.southcn.com/pc2018/content/images/attachement/jpg/site4/20190113/d8cb8a4756601da4dfd103.jpg"
							 border="0"> </a>
						<div class="pw">
							<h3><a href="http://www.newsgd.com/news/2019-01/13/content_184814008.htm" data-pubtime='2019-01-13 10:16' target="_blank">Xi
									calls for "greater strategic achievements" in Party governance</a></h3>
							<div class="pa">Xi Jinping, general secretary of the Communist Party of China (CPC) Central Committee, on Friday
								called for efforts to advance Party building, and demanded "greater strategic achievements" in full and strict
								governance over the Party.</div>
						</div>
					</div>
					<div class="itm"><a href="http://www.newsgd.com/news/2019-01/11/content_184792977.htm" data-pubtime='2019-01-11 08:57'
						 target="_blank"><img src="http://www.southcn.com/pc2018/content/images/attachement/jpg/site4/20190111/d8cb8a4765ee1da22f1a31.jpg"
							 border="0"> </a>
						<div class="pw">
							<h3><a href="http://www.newsgd.com/news/2019-01/11/content_184792977.htm" data-pubtime='2019-01-11 08:57' target="_blank">Chinese
									VP urges dialogue, consultations for healthy, stable China-U.S. ties</a></h3>
							<div class="pa">China and the United States should respect each other's sovereignty, security and development
								interests and properly handle and control differences through dialogue and consultations, which is key to the
								healthy and stable development of bilateral relations, Vice President Wang Qishan said Thursday.</div>
						</div>
					</div>
					<div class="itm"><a href="http://www.newsgd.com/news/2019-01/10/content_184778928.htm" data-pubtime='2019-01-10 09:12'
						 target="_blank"><img src="http://www.southcn.com/pc2018/content/images/attachement/jpg/site4/20190110/d8cb8a4765ee1da0e00a0d.jpg"
							 border="0"> </a>
						<div class="pw">
							<h3><a href="http://www.newsgd.com/news/2019-01/10/content_184778928.htm" data-pubtime='2019-01-10 09:12' target="_blank">Xi
									Jinping, Kim Jong Un hold talks, reaching important consensus</a></h3>
							<div class="pa">Xi Jinping, general secretary of the Central Committee of the Communist Party of China and
								Chinese president, on Tuesday held talks with Kim Jong Un, chairman of the Workers' Party of Korea and chairman
								of the State Affairs Commission of the Democratic People's Republic of Korea (DPRK), who arrived in Beijing on
								the same day for a visit to China.</div>
						</div>
					</div>
				</div>

				<div class="epager">
					<span id="ecur">1</span>/<span id="etotal">0</span>
				</div>
			</div>

			<div class="m-ehl">
				<div class="m-list9">
					<div class="itm">
						<h3><a href="http://www.newsgd.com/news/2019-01/14/content_184820369.htm" data-pubtime='2019-01-14 09:32' target="_blank">Guangzhou
								aims to become a global transportation hub by 2035</a></h3> <a href="http://www.newsgd.com/news/2019-01/14/content_184820369.htm"
						 data-pubtime='2019-01-14 09:32' target="_blank"><img src="http://www.southcn.com/pc2018/content/images/attachement/jpg/site4/20190114/d8cb8a4765ee1da62b0e05.jpg"
							 border="0"> </a>
						<div class="pa">The Guangzhou Comprehensive Transportation Hub Plan (2018-2035) was recently published, revealing
							that the city will make efforts to become a global transportation hub by 2035, making travelling in and out of
							the city ever more convenient.</div>
					</div>
					<div class="itm">
						<h3><a href="http://www.newsgd.com/news/2019-01/13/content_184814002.htm" data-pubtime='2019-01-13 10:16' target="_blank">Huawei:
								Detained employee acted on own behalf</a></h3> <a href="http://www.newsgd.com/news/2019-01/13/content_184814002.htm"
						 data-pubtime='2019-01-13 10:16' target="_blank"><img src="http://www.southcn.com/pc2018/content/images/attachement/jpg/site4/20190113/d8cb8a4756601da4e11d04.jpg"
							 border="0"> </a>
						<div class="pa">Huawei has decided to terminate the employment of Mr. Wang Weijing, who was arrested on suspicion
							of breaking Polish law.</div>
					</div>
				</div>

				<ul class="m-list1 m-list2">
					<li><a href="http://www.newsgd.com/news/2019-01/14/content_184819834.htm" data-pubtime='2019-01-14 09:33' target="_blank">Chang'e-4
							to measure lunar temperatures during freezing night</a></li>
					<li><a href="http://www.newsgd.com/news/2019-01/14/content_184820365.htm" data-pubtime='2019-01-14 09:32' target="_blank">China
							reports new African swine fever case</a></li>
					<li><a href="http://www.newsgd.com/news/2019-01/14/content_184820361.htm" data-pubtime='2019-01-14 09:32' target="_blank">China
							to maintain stable employment in 2019</a></li>
				</ul>
			</div>

			<div class="m-rew">
				<div class="itm itm1"> <a href="http://www.newsgd.com/pictures/2019-01/10/content_184786118.htm" data-pubtime='2019-01-10 14:58'
					 target="_blank"> <img src="http://www.southcn.com/pc2018/content/images/attachement/jpg/site4/20190110/d8cb8a4765ee1da1326628.jpg"
						 border="0">
						<div class="pa">Giant panda eats, plays at snow-covered zoo</div>
					</a> </div>

				<div class="itm itm2"> <a href="http://www.newsgd.com/pictures/2018-12/19/content_184518761.htm" data-pubtime='2018-12-19 09:59'
					 target="_blank"> <img src="http://www.southcn.com/pc2018/content/images/attachement/jpg/site4/20181219/d8cb8a4756601d83eac315.jpg"
						 border="0">
						<div class="pa">Red carpet ceremony of 1st Hainan Int'l Film Festival</div>
					</a> </div>

				<div class="itm itm3"> <a href="http://www.newsgd.com/pictures/2018-12/13/content_184451800.htm" data-pubtime='2018-12-14 10:26'
					 target="_blank"> <img src="http://www.southcn.com/pc2018/content/images/attachement/jpg/site4/20181214/d8cb8a4756601d7d59cb14.jpg"
						 border="0">
						<div class="pa">Shenzhen researchers produced exoskeleton robot, brings hope to paralyzed people, the aged</div>
					</a> </div>

				<div class="itm itm4"> <a href="http://www.newsgd.com/news/2018-12/12/content_184434313.htm" data-pubtime='2018-12-12 10:24'
					 target="_blank"> <img src="http://www.southcn.com/pc2018/content/images/attachement/jpg/site4/20181212/d8cb8a4756601d7ab50915.jpg"
						 border="0">
						<div class="pa">Quality of nature exuberant in western wing of Zhuhai</div>
					</a> </div>
			</div>
		</div>
	</div> --}}

	<div class="m-ad3 f-wp f-cb" id="index_ad07"></div>
	<div class="m-ad3 f-wp f-cb" id="index_ad08"></div>

	@include('gong.footer')
	<script src="http://www.southcn.com/public/2018/js/jquery-1.10.2.min.js"></script>
	<script src="http://www.southcn.com/public/2018/js/jquery.carouFredSel.js"></script>
	<script>
		var listsIndex = [
			"南方号",
			"政直播",
			"粤有料",
			"政前方",
			"寰宇观察",
			"南方早班车",
			"珠三角观察",
			"最新人事",
			"H5新媒体实验室",
			"财经早新闻",
			"老虎苍蝇一起打",
			"叮咚快评",
			"谈天说粤",
			"广东警讯",
			"世象",
			"广东健康头条",
			"南方+访",
			"租房时代",
			"每日一膳",
			"南方探针",
			"南方艺见",
			"广东河长",
			"南哥show",
			"广东教育头条",
			"上学了",
			"南方会",

			"防务解码",

			"珏嘉秀",
			"石岐妹说中山",
			"新零售时代",

			"工匠精神展示馆",
			"桥见未来",
			"乐弹评",
			"老司机侃车",
			"粤读",
			"食品药品安全播报",
			"21世纪经济报道",
			"南方杂志",
			"南方都市报",
			"南方周末",
			"粤城"
		]
		var liststhumb = [{
				name: '政前方',
				styleName: 'pre8'
			},
			{
				name: '政直播',
				styleName: 'pre2'
			},
			{
				name: '粤港澳大湾区',
				styleName: 'pre3'
			},
			{
				name: '寰宇观察',
				styleName: 'pre4'
			},
			{
				name: '最新人事',
				styleName: 'pre7'
			},
			{
				name: 'H5新媒体实验室',
				styleName: 'pre6'
			},
			{
				name: '科技能见度',
				styleName: 'pre5'
			},
			{
				name: "食品药品安全播报",
				styleName: 'pre9'
			},
			{
				name: "21世纪经济报道",
				styleName: 'pre10'
			},
			{
				name: "南方杂志",
				styleName: 'pre11'
			},
			{
				name: "南方都市报",
				styleName: 'pre12'
			},
			{
				name: "南方周末",
				styleName: 'pre13'
			}
		]
	</script>
	<script src="http://www.southcn.com/public/2018/js/main.js?version=0.4"></script>

	<!-- AdSame ShowCode: 南方新闻网 / 南方网首页 / 首屏小通栏01(左) Begin -->
	<div id="index_ad01_backup" style="display:none;">
		<script type="text/javascript" src="http://sgg.southcn.com/s?z=south&c=731" charset="gbk"></script>
	</div>
	<!-- AdSame ShowCode: 南方新闻网 / 南方网首页 / 首屏小通栏01(左) End -->

	<!-- AdSame ShowCode: 南方新闻网 / 南方网首页 / 首屏小通栏02(中) Begin -->
	<div id="index_ad02_backup" style="display:none;">
		<script type="text/javascript" src="http://sgg.southcn.com/s?z=south&c=732" charset="gbk"></script>
	</div>
	<!-- AdSame ShowCode: 南方新闻网 / 南方网首页 / 首屏小通栏02(中) End -->

	<!-- AdSame ShowCode: 南方新闻网 / 南方网首页 / 首屏小通栏03(右) Begin -->
	<div id="index_ad03_backup" style="display:none;">
		<script type="text/javascript" src="http://sgg.southcn.com/s?z=south&c=733" charset="gbk"></script>
	</div>
	<!-- AdSame ShowCode: 南方新闻网 / 南方网首页 / 首屏小通栏03(右) End -->


	<!-- AdSame ShowCode: 南方新闻网 / 南方网首页 / 首屏通栏 Begin -->
	<div id="index_ad04_backup" style="display:none;">
		<script type="text/javascript" src="http://sgg.southcn.com/s?z=south&c=31" charset="gbk"></script>
	</div>
	<!-- AdSame ShowCode: 南方新闻网 / 南方网首页 / 首屏通栏 End -->


	<!-- AdSame ShowCode: 南方新闻网 / 南方网首页 / 二屏通栏 Begin -->
	<div id="index_ad05_backup" style="display:none;">
		<script charset="gbk" type="text/javascript" src="http://sgg.southcn.com/s?z=south&c=3"></script>
	</div>
	<!-- AdSame ShowCode: 南方新闻网 / 南方网首页 / 二屏通栏 End -->


	<!-- AdSame ShowCode: 南方新闻网 / 南方网首页 / 三屏通栏 Begin -->
	<div id="index_ad06_backup" style="display:none;">
		<script charset="gbk" type="text/javascript" src="http://sgg.southcn.com/s?z=south&c=4"></script>
	</div>
	<!-- AdSame ShowCode: 南方新闻网 / 南方网首页 / 三屏通栏 End -->

	<!-- AdSame ShowCode: 南方新闻网 / 南方网首页 / 底部通栏01 Begin -->
	<div id="index_ad07_backup" style="display:none;">
		<script charset="gbk" type="text/javascript" src="http://sgg.southcn.com/s?z=south&c=6"></script>
	</div>
	<!-- AdSame ShowCode: 南方新闻网 / 南方网首页 / 底部通栏01 End -->

	<!-- AdSame ShowCode: 南方新闻网 / 南方网首页 / 底部通栏02 Begin -->
	<div id="index_ad08_backup" style="display:none;">
		<script charset="gbk" type="text/javascript" src="http://sgg.southcn.com/s?z=south&c=32"></script>
	</div>
	<!-- AdSame ShowCode: 南方新闻网 / 南方网首页 / 底部通栏02 End -->

	<!-- AdSame ShowCode: 南方新闻网 / 南方网首页 / 文字链 Begin -->
	<div id="index_text01_backup" style="display:none;">
		<span class="tips">推广</span>
		<script charset="gbk" type="text/javascript" src="http://sgg.southcn.com/s?z=south&c=506"></script>
		<script charset="gbk" type="text/javascript" src="http://sgg.southcn.com/s?z=south&c=507"></script>
	</div>
	<!-- AdSame ShowCode: 南方新闻网 / 南方网首页 / 文字链 End -->

	<!-- AdSame ShowCode: 南方新闻网 / 南方网首页 / 全屏广告 Begin -->
	<script type="text/javascript" src="http://sgg.southcn.com/s?z=south&c=9" charset="gbk"></script>
	<!-- AdSame ShowCode: 南方新闻网 / 南方网首页 / 全屏广告 End -->

	<!-- AdSame ShowCode: 南方新闻网 / 南方网首页 / 对联广告 Begin -->
	<script type="text/javascript" src="http://sgg.southcn.com/s?z=south&c=5" charset="gbk"></script>
	<!-- AdSame ShowCode: 南方新闻网 / 南方网首页 / 对联广告 End -->

	<!-- AdSame ShowCode: 南方新闻网 / 南方网首页 / 对联广告02 Begin -->
	<script type="text/javascript" src="http://sgg.southcn.com/s?z=south&c=53" charset="gbk"></script>
	<!-- AdSame ShowCode: 南方新闻网 / 南方网首页 / 对联广告02 End -->

	<script>
		window.onload = function () {
			var ids = ["index_ad01", "index_ad02", "index_ad03", "index_ad04", "index_ad05", "index_text01", "index_ad06",
				"index_ad07", "index_ad08"
			];
			for (var i = 0; i < ids.length; i++) {
				var id = ids[i];
				var content = document.getElementById(id + "_backup").innerHTML;
				document.getElementById(id).innerHTML = content;
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
	<noscript><img src="https://certify.alexametrics.com/atrk.gif?account=2N+sk1aklw00oY" style="display:none" height="1"
		 width="1" alt="" /></noscript>
	<!-- End Alexa Certify Javascript -->



</body>

</html>