<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="__NAME__" />
	<title><?php if (!empty($headTitle)) echo $headTitle.'__'; ?>__NAME____同学，去玩吧！专注大学生旅行</title>

	<link href="__ROOT__/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="__ROOT__/css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
	<link href="__ROOT__/css/global.css" rel="stylesheet" type="text/css">
	<script src="__ROOT__/js/jquery.min.js" type="text/javascript" ></script>
	<script src="__ROOT__/js/jquery.lazyload.min.js" type="text/javascript" ></script>
	<script src="__ROOT__/js/bootstrap.min.js" type="text/javascript" ></script>
	<script src="__ROOT__/js/global.js" type="text/javascript" ></script>
	<script>
		var _hmt = _hmt || [];
		(function() {
		  var hm = document.createElement("script");
		  hm.src = "//hm.baidu.com/hm.js?fe46971a02721794ec231cdfa11caedb";
		  var s = document.getElementsByTagName("script")[0]; 
		  s.parentNode.insertBefore(hm, s);
		})();
	</script>
	
</head>

<body>

	<div id="header">

		<div class="header_top">
			<div class="content main_container">
				<?php if (empty($_SESSION['login'])) { ?>
				<ul class="left">
					<li class="first_li">您好，欢迎来到__NAME__</li>
					<li>|</li>
					<li><a href="<?php echo U('User/login') ?>">登录</a></li>
					<li>|</li>
					<li><a href="<?php echo U('User/register') ?>">免费注册</a></li>
				</ul>
				<?php } ?>
				
				<ul class="right">
					<?php if (!empty($_SESSION['login'])) { ?>
					<li class="first_li"><?php echo ($_SESSION["name"]); ?><i class="icon icon_user"></i>&nbsp;&nbsp;[<a href="<?php echo U('User/logout') ?>">登出</a>]</li>
					<li>|</li>
					<?php } ?>
					<?php if ($_SESSION['group_id'] == 3 || $_SESSION['group_id'] == 4 || $_SESSION['group_id'] == 5) { ?>
					<li><a href="<?php echo U('Fenxiao/home') ?>">我的分销平台</a></li>
					<li>|</li>
					<?php } ?>
					<li><a href="<?php echo U('User/home') ?>">我的__NAME2__<!--<i class="icon-drop-down"></i>--></a></li>
					<!--<li>|</li>
					<li><a href="#">联系客服</a></li>
					<li>|</li>
					<li><a href="#"><i class="icon-suitcase"></i>&nbsp;旅行箱&nbsp;<span class="cart">0</span>&nbsp;件</a></li>-->
					<li>|</li>
					<li><a href="http://page.renren.com/601509075" target="_blank"><i class="icon-renren"></i>&nbsp;+__NAME2__人人</a></li>
					<!--<li>|</li>
					<li><a href="#"><i class="icon-weibo"></i>&nbsp;+__NAME2__微博</a></li>-->
				</ul>
			</div>
		</div>
		<div class="clear"></div>

		
		<div class="header_main">
			<div class="content main_container">
				<div class="logo">
					<a href="__ROOT2__"><img src="__ROOT__/images/logo.png"/></a>
				</div>
				<div class="city">
					<!--
					<h5>上海出发</h5>
					<a href="#" class="change_city">切换城市<i class="icon-drop-down"></i></a>-->
				</div>
				<div class="ad">
					<a href="__ROOT2__"><img src="__ROOT__/images/header/ad.png"/></a>
				</div>
			</div>
		</div>

		<div class="header_nav">
			<div class="content main_container">
				<ul>
					<li style="margin-left:8px;" <?php if ($headTitle == '') { ?>class="on"<?php } ?>><a href="__ROOT2__"><span>首页</span></a></li>
					<li <?php if ($headTitle == '班级游') { ?>class="on"<?php } ?>><a href="<?php echo U('Line/banji') ?>"><span>班级游</span></a></li>
					<li <?php if ($headTitle == '周边游') { ?>class="on"<?php } ?>><a href="<?php echo U('Line/zhoubian') ?>"><span>周边游</span></a></li>
					<li <?php if ($headTitle == '国内游') { ?>class="on"<?php } ?>><a href="<?php echo U('Line/guonei') ?>"><span>国内游</span></a></li>
					<li <?php if ($headTitle == '出境游') { ?>class="on"<?php } ?>><a href="<?php echo U('Line/chujing') ?>"><span>出境游</span></a></li>
					<li <?php if ($headTitle == '景点门票') { ?>class="on"<?php } ?>><a href="<?php echo U('Ticket/index') ?>"><span>景点门票</span></a></li>
					<li <?php if ($headTitle == '租车') { ?>class="on"<?php } ?>><a href="<?php echo U('Page/zuche') ?>"><span>租车</span></a></li>
					<!--<li <?php if ($headTitle == '乐园游') { ?>class="on"<?php } ?>><a href="<?php echo U('Line/search?t=1&point_type=5') ?>"><span>乐园游</span></a></li>
					<li <?php if ($headTitle == '古迹游') { ?>class="on"<?php } ?>><a href="<?php echo U('Line/search?t=1&point_type=6') ?>"><span>古迹游</span></a></li>-->
					<!--<li <?php if ($headTitle == '会议接待') { ?>class="on"<?php } ?>><a href="#"><span>会议接待</span></a></li>
					<li <?php if ($headTitle == '租车') { ?>class="on"<?php } ?>><a href="#"><span>租车</span></a></li>
					-->
					<!--
					<li><a href="#"><span>本地游</span></a></li>
					<li><a href="#"><span>周边游</span></a></li>
					<li><a href="#"><span>国内游</span><a/></li>
					<li><a href="#"><span>出境游</span></a></li>
					<li><a href="#"><span>联谊游</span></a></li>
					<li><a href="#"><span>酒店</span></a></li>
					<li><a href="#"><span>租车</span></a></li>
					<li><a href="#"><span>道具</span></a></li>
					<li><a href="#"><span>烧烤食材</span></a></li>
					<li><a href="#"><span>景点介绍</span></a></li>
					<li><a href="#"><span>出游攻略</span></a></li>
					-->
				</ul>
				<div class="kefu">
					<i class="icon-headphones icon-white"></i><span>&nbsp;客服：021-5160-2963</span>
				</div>
			</div>
			<div class="bg"></div>
		</div>
		
		
	</div>
	
	<div class="wallpaper">



<link href="__ROOT__/css/line.css" rel="stylesheet" media="screen">
<link href="__ROOT__/css/fullcalendar.css" rel="stylesheet" media="screen">
<link href="__ROOT__/css/fullcalendar.print.css" rel="stylesheet" media="screen">

<script>
	$(document).ready(function() {
		$('#calendar').fullCalendar({
			header: {
				left: 'none',
				center: 'title',
				right: 'prev,next'
			},
			firstDay:1,
			monthNames:['一月','二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月'],
			dayNamesShort:['日', '一', '二', '三', '四', '五', '六'],
			events: [
				<?php foreach($line['schedule'] as $item) { ?>
				{
					id: <?php echo ($item["id"]); ?>,
					title: '位置>9',
					start: '<?php echo ($item["date"]); ?>',
					textColor: '#999999',
					color: '<?php echo ($item["price"]); ?>元',
				},
				{
					id: <?php echo ($item["id"]); ?>,
					title: '<?php echo ($item["price"]); ?>元',
					start: '<?php echo ($item["date"]); ?>',
					color: '<?php echo ($item["price"]); ?>元',
				},
				<?php } ?>
			],
			eventClick: function(event) {
				var id = event.id;
				var year = (1900+event.start.getYear());
				var month = ''+(event.start.getMonth()+1);
				if (month.length == 1) month = '0'+month;
				var day = ''+event.start.getDate();
				var weekArr = Array('星期日','星期一','星期二','星期三','星期四','星期五','星期六');
				var week = weekArr[event.start.getDay()];
				if (day.length == 1) day = '0'+day;
				var date = year+'-'+month+'-'+day;
				var money = event.color;
				$('#departure_date').val(date+'，'+week+'，'+money+'/成人');
				$('#departure_date2').val(id);
				hide_calendar();
			},
		});
	});
</script>

<div id="line" class="main_container wallpaper2">

	<div class="path">
		&nbsp;&nbsp;<a href="<?php echo U('Index/index') ?>">__NAME__</a>&nbsp;&nbsp;>&nbsp;&nbsp;<a href="<?php echo U('Line/search?province='.$line['to_province_id']) ?>"><?php echo ($line["to_province"]); ?>旅游</a>&nbsp;&nbsp;>&nbsp;&nbsp;<a href="<?php echo U('Line/search?province='.$line['to_province_id'].'&city='.$line['to_city_id']) ?>"><?php echo ($line["to_city"]); ?>旅游</a>&nbsp;&nbsp;>&nbsp;&nbsp;<?php echo ($line["name"]); ?>
	</div>

	<!--左面板-->
	<div class="left_area">
		<!--同城旅游产品推荐-->
		<div class="panel" style="margin-top:0;">
			<div class="title"><?php echo ($line["to_city"]); ?>旅游</div>
			<div class="content point_list">
				<ul>
					<?php foreach($line['point_in_city'] as $point) { ?>
					<li><a href="<?php echo U('Line/search?t=2&point='.$point['id']); ?>" title="<?php echo ($point['name_abb']); ?>(<?php echo ($point['count']); ?>)"><?php echo ($point['name_display']); ?></a></li>
					<?php } ?>
				</ul>
				<div class="clear"></div>
			</div>
		</div>
		
		<!--游记攻略-->
		<div class="panel">
			<div class="title"><?php echo ($line["to_city"]); ?>游记攻略</div>
			<div class="content note_list">
				<!--<ul>
					<?php foreach($line['point_in_city'] as $point) { ?>
					<li><a href="#" title="<?php echo ($point['name_abb']); ?>(<?php echo ($point['count']); ?>)"><?php echo ($point['name_display']); ?>(<?php echo ($point['count']); ?>)</a></li>
					<?php } ?>
				</ul>-->
				暂无
				<div class="clear"></div>
			</div>
		</div>
		
		<!--同城旅游产品推荐-->
		<div class="panel">
			<div class="title">相关产品推荐</div>
			<div class="content note_list">
				<!--<ul>
					<?php foreach($line['point_in_city'] as $point) { ?>
					<li><a href="#" title="<?php echo ($point['name_abb']); ?>(<?php echo ($point['count']); ?>)"><?php echo ($point['name_display']); ?>(<?php echo ($point['count']); ?>)</a></li>
					<?php } ?>
				</ul>-->
				暂无
				<div class="clear"></div>
			</div>
		</div>
	</div>
	
	<!--右面板-->
	<div class="right_area">
		<!--路线名称-->
		<div class="name"><<?php echo ($line["name"]); ?>><?php echo ($line["character"]); ?></div>
		<div class="other"><span class="group"><?php echo ($line["type"]); ?></span>&nbsp;&nbsp;<span class="id">编号<?php echo ($line["id"]); ?></span>&nbsp;&nbsp;<span class="character">本产品由上海__NAME3__国际旅行社有限公司及具有资质的合作旅行社提供相关服务</span>&nbsp;&nbsp;<span class="policy"><a href="<?php echo U('Page/domestic') ?>" target="_blank">国内旅游预订须知</a></span></div>
		
		<div class="left_panel">
			<!--路线图片-->
			<div class="photo">
				<img src="__ROOT__/images/line/photo/<?php echo ($line["id"]); ?>.jpg">
			</div>
			<div class="tool">
				<ul>
					<li style="margin-left:0;"><a href="#"><i class="icon icon_favourite"></i>&nbsp;收藏此线路</a></li>
					<li><a href="#"><i class="icon icon_print"></i>&nbsp;打印</a></li>
				</ul>
				<div class="clear"></div>
				<!--分享-->
				<div class="jiathis_style">
					<span class="jiathis_txt">分享到：</span>
					<a class="jiathis_button_renren">人人网</a>
					<a class="jiathis_button_tsina">新浪微博</a>
					<a class="jiathis_button_qzone">QQ空间</a>
					<a class="jiathis_button_tqq">腾讯微博</a>
					<a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jiathis_separator jtico jtico_jiathis" target="_blank">更多</a>
				</div>

			</div>
		</div>
		
		<div class="right_panel">
			<!--路线信息-->
			<div class="info">
				<ul>
					<li><span class="title">市场价：</span><strike><?php echo ($line["price_origin"]); ?>元/人起</strike>&nbsp;&nbsp;<a href="#" class="droptip" data-placement="bottom" title="本起价是可选出发日期中，按双人出行共住一间房核算的最低单人价格。产品价格会根据您所选择的出发日期、出行人数、入住酒店房型、航班或交通以及所选附加服务的不同而有所差别。">起价说明</a></li>
					<?php if ($line['type_id'] == 1) { ?>
						<li><span class="title">优惠价：</span><span class="price" style="font-size:20px;"><?php echo ($line["price"]); ?></span>元/人起</li>
					<?php } ?>
					<?php if ($line['type_id'] == 2) { ?>
						<li><span class="title">团队价：</span><span class="group">12-21人</span>&nbsp;&nbsp;<span class="price"><?php echo ($line["price_group_1"]); ?></span>元/人起</li>
						<li><span class="title"></span><span class="group">22-31人</span>&nbsp;&nbsp;<span class="price"><?php echo ($line["price_group_2"]); ?></span>元/人起</li>
						<li><span class="title"></span><span class="group">32-41人</span>&nbsp;&nbsp;<span class="price"><?php echo ($line["price_group_3"]); ?></span>元/人起</li>
						<li><span class="title"></span><span class="group">42人及以上</span>&nbsp;&nbsp;更优惠价格&nbsp;&nbsp;<a href="#" class="droptip" data-placement="bottom" title="若您的团队想享受某个等级的价格，但是人数不足，我们可以免费帮您在各高校招募队员。">人数不够？</a></li>
					<?php } ?>
					<li><span class="title">抵用券：</span><i class="icon icon_di"></i><span class="privilege" ><span class="text droptip" data-placement="bottom" title="网上预订即享5元抵扣券优惠"><?php echo ($line["di_price"]); ?>元</span></span>&nbsp;&nbsp;<i class="icon icon_song"></i><span class="privilege"><span class="text droptip"  data-placement="bottom" title="网上预订即送20元抵扣券"><?php echo $line['di_price']*4 ?>元</span></span></li>
					<li class="satisfaction"><span class="title">满意度：</span><a href="#"><span class="highlight"><?php echo ($line["satisfaction"]); ?>%</span></a>&nbsp;&nbsp;<a href="#">已有<span class="highlight"><?php echo ($line["comment_count"]); ?></span>人点评</a></li>
					<li><span class="title">提前报名：</span>建议提前<?php echo ($line["day_ahead"]); ?>天以上</li>
					<li><span class="title">特色服务：</span><span class="service droptip" data-placement="bottom" title="网上订购并支付即可使用抵用券优惠">网订优惠</span>&nbsp;&nbsp;<span class="service droptip" data-placement="bottom" title="归来写游记，即有机会获得千元奖金">写游记有奖</span></li>
				</ul>
			</div>
			
			<!--预定-->

			<div class="order">
				<ul>
					<li>已有<span class="group"><?php echo ($line["sell_count"]); ?></span><?php echo ($line["unit"]); ?>出游<!--&nbsp;&nbsp;&nbsp;&nbsp;<span class="history">amo****&nbsp;1天前预定23人出游</span>--></li>
					<form id="form" method="post" action="<?php echo U('Order/order'); ?>">
					<input name="id" value="<?php echo ($line["id"]); ?>" style="display:none;">
					<?php if ($line['type_id'] == 1) { ?>
						<li>
							<!--
							<select id="departure_date" name="departure_date" onclick="show_calendar()">
								<option>请选择出发日期</option>
								
								<?php foreach($line['schedule'] as $schedule) { ?>
									<option value="<?php echo ($schedule["id"]); ?>"><?php echo ($schedule["date"]); ?>，周<?php echo ($schedule["week"]); ?>出发，<?php echo ($line["price"]); ?>元/人</option>
								<?php } ?>
							</select>
							-->
							<input id="departure_date" type="text" value="请选择出游日期与价格..." onclick="show_calendar()" style="width:250px;text-align:left;cursor:pointer;"><div class="date_icon" onclick="show_calendar()"><i class="icon icon_date"></i></div>
							<input id="departure_date2" name="departure_date" style="display:none;">
						</li>
						<li><input name="people_count" type="text" value="1"/>&nbsp;成人</li>
					<?php } ?>
					</form>
					<li><a href="#" onclick="order_submit()"><img src="__ROOT__/images/line/order.gif"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="phone droptip" data-placement="bottom" title="客服电话：021-5160-2963"><i class="icon icon_phone"></i>&nbsp;电话咨询</span></li>
				</ul>
				<div id="calendarDiv" class="calendar">
					<div class="tt"><a href="javascript:void(0)" onclick="hide_calendar()">关闭</a></div>
					<div id='calendar' style="z-index:999;"></div>
				</div>
			</div>
			
		</div>
		<div class="clear"></div>
		
		<?php if ($line['type_id'] == 2) { ?>
		<div class="assure">
			<img src="__ROOT__/images/line/assure.png">
		</div>
		<?php } ?>
		
		<div class="detail">
			<div class="border">
				<!--导航-->
				<div class="navi">
					<ul>
						<li id="line_navi_detail" onclick="line_navi('detail')" class="on" style="margin-left:0;">行程详情</li>
						<li id="line_navi_price" onclick="line_navi('price')">费用说明</li>
						<li id="line_navi_precaution" onclick="line_navi('precaution')">友情提示</li>
						<li id="line_navi_order_flow" onclick="line_navi('order_flow')">预订流程</li>
						<li id="line_navi_comment" onclick="line_navi('comment')">点评记录</li>
						<!--<li id="line_navi_qa" onclick="line_navi('qa')">在线问答</li>
						<li id="line_navi_note" onclick="line_navi('note')">游记</li>
						<li id="line_navi_relate_product" onclick="line_navi('relate_product')">相关产品</li>
						-->
					</ul>
				</div>
				
				<div class="border2">
					
					<!--线路详情-->
					<div id="line_detail">
						<!--线路介绍-->
						<div class="introduction">
							<div class="title"><i class="icon icon_introduction"></i>&nbsp;产品经理推荐</div>
							<div class="content"><?php echo ($line["introduction"]); ?></div>						
						</div>
						
						<!--每天信息-->
						<?php foreach($line['day'] as $day) { ?>
							<!--天数、出发地、目的地、描述-->
							<div class="item">
								<span class="title day"><i class="icon icon_day"></i>&nbsp;第<?php echo ($day["id"]); ?>天</span>
								<span class="content day">
									<?php for($i = 0; $i < $day['cityCount']; $i++) { ?>
										<?php if ($i > 0) { ?>
											<img src="__ROOT__/images/line/vehicle<?php echo $day['vehicle'][$i-1]; ?>.gif">&nbsp;
										<?php } ?>
									<?php echo ($day["city"]["$i"]); ?>&nbsp;
									<?php } ?>
								</span>
							</div>
							<div class="item">
								<div class="desc"><?php echo ($day["desc"]); ?></div>
							</div>

							<!--单项信息-->
							<?php foreach($day['item'] as $item) {?>
							<div class="item">
								<span class="title"><?php echo ($item["time"]["0"]); echo ($item["time"]["1"]); ?>：<?php echo ($item["time"]["3"]); echo ($item["time"]["4"]); ?></span>
								<span class="content"><?php echo ($item["desc"]); ?></span>
							</div>
								<!--景点信息-->
								<?php foreach($item['point'] as $point) { ?>
								<div class="item">
									<span class="title"></span>
									<span class="content">
										<div class="point_name">景点简介&nbsp;&nbsp;<span><?php echo ($point["name"]); ?></span></div>
										<div class="point_desc"><?php echo ($point["desc"]); ?></div>
										<div class="point_photo">
										<?php foreach($point['photo'] as $photo) { ?>
											<div class="point_photo_content">
												<img src="__ROOT__/images/point/photo/<?php echo ($point["province_id"]); ?>/<?php echo ($point["city_id"]); ?>/<?php echo ($point["id"]); ?>/<?php echo ($photo["id"]); ?>.jpg">
												<div class="photo_desc"><?php echo ($photo["desc"]); ?></div>
											</div>
										<?php } ?>
										</div>
									</span>
								</div>
								<?php } ?>
							<?php } ?>
							
							<!--住宿用餐信息-->
							<div class="item">
								<div class="day_bottom">
									<i class="icon icon_lunch"></i>&nbsp;&nbsp;&nbsp;&nbsp;早餐：<?php echo ($day["breakfast"]); ?>&nbsp;&nbsp;午餐：<?php echo ($day["lunch"]); ?>&nbsp;&nbsp;晚餐：<?php echo ($day["dinner"]); ?><br>
									<i class="icon icon_stay"></i>&nbsp;&nbsp;&nbsp;&nbsp;住宿：<?php echo ($day["stay"]); ?>
								</div>
							</div>
					
						<?php } ?>
						
						<!--景点信息-->
						<?php foreach($line['point'] as $item) { ?>
 						<div class="item">
							<div class="point_name">景点简介&nbsp;&nbsp;<span><?php echo ($item["name"]); ?></span></div>
							<div class="point_desc"><?php echo ($item["desc"]); ?></div>
							<div class="point_photo">
							<?php foreach($item['photo'] as $photo) { ?>
								<div class="point_photo_content">
									<img src="__ROOT__/images/point/photo/<?php echo ($item["province_id"]); ?>/<?php echo ($item["city_id"]); ?>/<?php echo ($item["id"]); ?>/<?php echo ($photo["id"]); ?>.jpg">
									<div class="photo_desc"><?php echo ($photo["desc"]); ?></div>
								</div>
							<?php } ?>
							</div>
							<div class="clear"></div>
						</div>
						<?php } ?>
												
						<div class="item other_info">
							<span class="title">购物明细</span>
							<span class="content"><?php echo ($line["shopping"]); ?></span>
						</div>
						
						<div class="item">
							<span class="title">费用包含</span>
							<span class="content"><?php echo ($line["price_include"]); ?></span>
						</div>
						
						<div class="item">
							<span class="title">费用不含</span>
							<span class="content"><?php echo ($line["price_not_include"]); ?></span>
						</div>
						
						<div class="item">
							<span class="title">友情提示</span>
							<span class="content"><?php echo ($line["precaution"]); ?></span>
						</div>

						<!--提示-->
						<!--
						<div class="tip">
							* 以上行程仅供参考，最终行程以出团通知为准。
						</div>
						-->
					</div>
					
									
					<!--费用说明-->
					<div id="line_price" class="hidden">
						<!--<p style="color:#ff6600;">* 以下费用仅供参考，最终费用以出团通知为准。</p><br>-->
						<p><strong>费用包含</strong></p><br>
						<p><?php echo ($line["price_include"]); ?></p>
						<br>
						<p><strong>费用不包含</strong></p><br>
						<p><?php echo ($line["price_not_include"]); ?></p>
					</div>
					
					<!--友情提示-->
					<div id="line_precaution" class="hidden">
						<?php echo ($line["precaution"]); ?>
					</div>
					
					<!--预定流程-->
					<div id="line_order_flow" class="hidden">
						<?php if ($line['type_id'] == 1) { ?>
						<p style="text-align:center;"><img src="__ROOT__/images/line/order_flow_gt.png"></p><br>
						<p><strong>挑选线路</strong></p><br>
						<p>在__NAME__提供的众多精品线路中，挑选一条自己喜欢的路线</p><br>
						<p><strong>生成订单</strong></p><br>
						<p>在您填好并确定信息无误后，订单即可生成</p><br>
						<p><strong>网上支付或上门收款</strong></p><br>
						<p>支付后即可完成签约付款，无需电话确认，节省您宝贵的时间<br>我们也提供上门收款服务，您只用在寝室里坐等即可</p><br>
						<p><strong>预定成功</strong></p><br>
						<p>签约支付完成后，__NAME2__专属客服会帮您打理一切，您只需耐心等待出团通知，即可开心出游</p><br>
						<p><strong>开心出游</strong></p><br>
						<p>__NAME2__专属客服将竭力解决您在出游前、出游中遇到的问题，保证您的开心出游</p><br>
						<?php } ?>
						<?php if ($line['type_id'] == 2) { ?>
						<p style="text-align:center;"><img src="__ROOT__/images/line/order_flow.png"></p><br>
						<p><strong>挑选线路</strong></p><br>
						<p>在__NAME__提供的众多精品线路中，挑选一条自己团队喜欢的路线</p><br>
						<p><strong>以此为模板填写需求</strong></p><br>
						<p>若您想修改线路中的某些地方，尽管提出，我们将针对您的团队进行个性化修改，满足您的需求</p><br>
						<p><strong>等待客服联系</strong></p><br>
						<p>优质客服将与您联系，商讨出行事宜并给出报价</p><br>
						<p><strong>生成订单</strong></p><br>
						<p>根据之前和您的沟通，我们将为您生成符合您团队需求的个性化订单</p><br>
						<p><strong>网上支付或上门收款</strong></p><br>
						<p>支付后即可完成签约付款，无需电话确认，节省您宝贵的时间<br>我们也提供上门收款服务，您只用在寝室里坐等即可</p><br>
						<p><strong>预定成功</strong></p><br>
						<p>签约支付完成后，__NAME2__专属客服会帮您打理一切，您只需耐心等待出团通知，即可开心出游</p><br>
						<p><strong>开心出游</strong></p><br>
						<p>__NAME2__专属客服将竭力解决您在出游前、出游中遇到的问题，保证您的开心出游</p><br>
						<?php } ?>
					
					</div>

					<!--点评记录-->
					<div id="line_comment" class="hidden">
						暂无点评记录
					</div>

					<!--在线问答-->
					<div id="line_qa" class="hidden">
						暂无在线问答
					</div>
					
					<!--游记-->
					<div id="line_note" class="hidden">
						暂无游记
					</div>
					
					<!--相关产品-->
					<div id="line_relate_product" class="hidden">
						暂无相关产品
					</div>
					
				</div>				
			</div>
		</div>


	
	</div>
	<div class="clear"></div>
	
	<div class="to_top" onclick="toTop()">
	</div>
</div>

<div id='grey'></div>

<script type="text/javascript" src="__ROOT__/js/line.js" charset="utf-8"></script>
<script type="text/javascript" src='__ROOT__/js/fullcalendar.min.js'></script>
<script type="text/javascript" src="http://v3.jiathis.com/code/jia.js?uid=1356957111629175" charset="utf-8"></script>

<?php if ($_GET['calendar'] == 1) { ?>
<script>
	show_calendar();
</script>
<?php } ?>

<script>
function toTop() {
	$("html,body").animate({scrollTop:$("body").offset().top},500);
}

$(window).scroll(function() { 
		var top = $(window).scrollTop();
		
		if (top > 10) {
			$(".to_top").css('display', 'block');
		}
		else {
			$(".to_top").css('display', 'none');
			//$("#bill").css('margin-left', '10px');
			//$("#bill").css('margin-top', '10px');
		}
	}); 
</script>

<script>
	var jiathis_config = {
		url:"__ROOT__<?php echo U('Line/show?id='.$line['id']); ?>",
		title:"[<?php echo ($line["name"]); ?>]<?php echo ($line["character"]); ?>",
		summary:"<?php echo str_replace(chr(13).chr(10), '', $line['introduction']); ?>",
		pic:"__ROOT__/images/line/photo/<?php echo ($line["id"]); ?>.jpg",
	}
</script>

	</div>

	<div class="clear"></div>
	<div id="footer">
		<div class="helper">
			<div class="main_container">
				<ul>
					<li style="border:0;">
						<span class="title">游客中心</span>
						<span>&nbsp;&nbsp;<a href="#">免费注册</a></span>
						<span>&nbsp;&nbsp;<a href="#">订单查询</a></span>
						<span>&nbsp;&nbsp;<a href="#">订阅__NAME2__优惠信息</a></span>
					</li>
					<li>
						<span class="title">预订帮助</span>
						<span>&nbsp;&nbsp;<a href="#">预订常见问题</a></span>
						<span>&nbsp;&nbsp;<a href="#">付款与安全</a></span>
						<span>&nbsp;&nbsp;<a href="#">其它注意事项</a></span>
					</li>
					<li>
						<a href="__ROOT__"><img src="__ROOT__/images/footer/logo.png"/></a>
					</li>
					<li>
						<span class="title">企业服务</span>
						<span>&nbsp;&nbsp;<a href="#">旅行社加盟</a></span>
						<span>&nbsp;&nbsp;<a href="#">营销合作</a></span>
						<span>&nbsp;&nbsp;<a href="#">旅游同业社区</a></span>
					</li>
					<li style="width:147px;">
						<span class="title">关注我们</span>
						<span>&nbsp;&nbsp;<a href="#"><i class="icon-renren"></i>&nbsp;__NAME2__人人主页</a></span>
						<span>&nbsp;&nbsp;<a href="#"><i class="icon-weibo"></i>&nbsp;__NAME2__新浪微博</a></span>
						<span>&nbsp;&nbsp;<a href="#"><i class="icon-weixin"></i>&nbsp;扫描微信二维码</a></span>
					</li>
				</ul>
			</div>
		</div>
		
		<div class="link main_container">
			<ul>
				<li><a href="#">关于__NAME2__</a></li>
				<li class="divide">|</li>
				<li><a href="#">加入__NAME2__</a></li>
				<li class="divide">|</li>
				<li><a href="#">免责声明</a></li>
				<li class="divide">|</li>
				<li><a href="#">联系__NAME2__</a></li>
				<li class="divide">|</li>
				<li><a href="#">建议与投诉</a></li>
				<li class="divide">|</li>
				<li><a href="#">旅行社加盟</a></li>
			</ul>
		</div>
		<div class="clear"></div>
		
		<div class="certificate main_container">
			<ul>
				<li style="margin-left:0;"><a href="#"><img src="__ROOT__/images/footer/certificate1.png"></a></li>
				<li><a href="#"><img src="__ROOT__/images/footer/certificate2.png"></a></li>
				<li><a href="#"><img src="__ROOT__/images/footer/certificate3.png"></a></li>
				<li><a href="#"><img src="__ROOT__/images/footer/certificate4.png"></a></li>
				<li><a href="#"><img src="__ROOT__/images/footer/certificate5.png"></a></li>
				<li><a href="#"><img src="__ROOT__/images/footer/certificate6.png"></a></li>
			</ul>
		</div>
		<div class="clear"></div>
		
		<div class="copyright main_container">
			Copyright 2013 __NAME__ tx758.com 沪ICP备12038216号
		</div>
		
	</div>
	
</body>

<script>
	$('.droptip').tooltip('hide');
	$("img.lazy").lazyload();
</script>

</html>