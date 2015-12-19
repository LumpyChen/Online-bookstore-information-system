<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="view" content="width=device-width,initial-scale=1">
	<!-- css -->
	
	<link rel="stylesheet" href="{{ URL::asset('css/reset.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/avgrund.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/header.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/query.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/content.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/footer.css') }}">
	

	<title>网上书城数据管理系统</title>
</head>
<body>
	<!-- header -->
	<header class="site-header">
		<div class="left-caption">
			<h1>在线书城信息管理系统&nbsp;</h1>
			
			<h2 class="cap-sub">——基于Laravel5,MySQL的简易信息管理系统</h2>
		</div>
		<div class="right-logo">
			<img src="{{ URL::asset('css/Lumpy-logo.png') }}" height="260px" width="260px" alt="">
		</div>
		<div class="clear-fix"></div>
	</header>
	<!-- header -->
	<!-- query -->
	<div class="query">
		<h2 class="cog"><i class=" fa fa-cog"></i></h2><h2 class="search-title">信息查询</h2>
		<div class="query-wrap">
			<form action="">
				<input type="text" placeholder="请输入您要查询的信息。"><button type="submit">查询&nbsp;<i class="fa fa-search"></i></button>
			</form>
		</div>
	</div>
	<!-- query -->

	<!-- content -->
	<div class="content">
		<div class="left-tabs">
			<div id="active" class="view-tab"><div class="circle" id="active-o"></div><i class="fa fa-sitemap"></i><span class="tab-name">E-R图&nbsp;</span></div>
			<div class="view-tab"><div class="circle"></div><i class="fa fa-file-text"></i><span class="tab-name">订单&nbsp;</span></div>
			<div class="view-tab"><div class="circle"></div><i class="fa fa-list"></i><span class="tab-name">订单明细&nbsp;</span></div>
			<div class="view-tab"><div class="circle"></div><i class="fa fa-book"></i><span class="tab-name">图书&nbsp;</span></div>
			<div class="view-tab"><div class="circle"></div><i class="fa fa-building"></i><span class="tab-name">仓库&nbsp;</span></div>
			<div class="view-tab"><div class="circle"></div><i class="fa fa-ellipsis-h"></i><span class="tab-name">仓库明细&nbsp;</span></div>
			<div class="view-tab"><div class="circle"></div><i class="fa fa-user"></i><span class="tab-name">用户/管理员&nbsp;</span></div>
			<div class="view-tab"><div class="circle"></div><i class="fa fa-truck"></i><span class="tab-name">物流公司&nbsp;</span></div>
		</div>
		<div class="right-content">
			<div class="tab-content" id="E-R" style="left:0px;">
				<img src="css/ER.png" alt="" width="960px" height="600px">
			</div>
			<div class="tab-content" id="order" style="left:960px;">
				<h2>
				订单
				</h2>
				<div class="table-content">
					<table class="data-table">
						<thead>
						<tr>
							<th>订单号</th>
							<th>用户编号</th>
							<th>物流公司</th>
							<th>发货仓库</th>
							<th>下单日期</th>
							<th>付款方式</th>
							<th>订单状态</th>
							<th>总金额</th>
							<th>操作</th>
						</tr></thead>
						@foreach ( $bookstore[0] as $order )
							<tr>
								<td>{{ $order->id }}</td>
								<td>{{ $order->user_id }}</td>
								<td>{{ $order->logistics_id }}</td>
								<td>{{ $order->repository_id }}</td>
								<td>{{ $order->create_date }}</td>
								<td>{{ $order->payment_method }}</td>
								<td>{{ $order->order_condition }}</td>
								<td></td>
								<td class="operation">
									<form action="{{ URL('orders/'.$order->id) }}" method="POST" accept-charset="utf-8">
										<input name="_method" type="hidden" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}">
										<button type="submit"><i class='fa fa-minus-circle'></i>&nbsp;</button>											
									</form>
								</td>
							</tr>
						@endforeach
					
					</table>
				</div>
				<div class="add-column"><i class="fa fa-arrow-circle-left"></i> <i class="fa fa-arrow-circle-right"></i><i class="fa fa-plus-circle">
				</i></div>
			</div>
			<div class="tab-content" id="order-detail" style="left:1920px;">
				<h2>
				订单明细</h2>
				<div class="table-content">
					<table class="data-table">
						<thead>
						<tr>
							<th>订单明细ID</th>
							<th>订单编号</th>
							<th>书籍编号</th>
							<th>购买数量</th>
							<th>操作</th>
						</tr></thead>
						@foreach ( $bookstore[1] as $order_detail )
							<tr>
								<td>{{ $order_detail->id }}</td>
								<td>{{ $order_detail->order_id }}</td>
								<td>{{ $order_detail->book_id }}</td>
								<td>{{ $order_detail->number }}</td>
								
								<td class="operation">
									<form action="{{ URL('order_details/'.$order_detail->id) }}" method="POST" accept-charset="utf-8">
										<input name="_method" type="hidden" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}">
										<button type="submit"><i class='fa fa-minus-circle'></i>&nbsp;</button>											
									</form>
								</td>
							</tr>
						@endforeach
					</table>
				</div>
				<div class="add-column"><i class="fa fa-arrow-circle-left"></i> <i class="fa fa-arrow-circle-right"></i><i class="fa fa-plus-circle">
				</i></div>
			</div>
			<div class="tab-content" id="book" style="left:2880px;">
				<h2>
				图书</h2>
				<div class="table-content">
						<table class="data-table">
						<thead>
						<tr>
							<th>书籍编号</th>
							<th>书籍类别</th>
							<th>书籍名称</th>
							<th>书籍定价</th>
							<th>书籍折扣</th>
							<th>总库存量</th>
							<th>书籍简介</th>
							<th>书籍作者</th>
							<th>出版社</th>
							<th>再版次数</th>
							<th>操作</th>
						</tr></thead>
						@foreach ( $bookstore[2] as $book )
							<tr>
								<td>{{ $book->id }}</td>
								<td>{{ $book->book_class }}</td>
								<td><div class="limit-height">{{ $book->book_name }}</div></td>
								<td>{{ $book->book_price }}</td>
								<td>{{ $book->book_discount }}</td>
								<td></td>
								<td><div class="limit-height">{{ $book->book_intro }}</div></td>
								<td>{{ $book->book_author }}</td>
								<td><div class="limit-height">{{ $book->publisher_name }}</div></td>								
								<td>{{ $book->publish_time }}</td>
								<td class="operation">
									<form action="{{ URL('books/'.$book->id) }}" method="POST" accept-charset="utf-8">
										<input name="_method" type="hidden" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}">
										<button type="submit"><i class='fa fa-minus-circle'></i>&nbsp;</button>											
									</form>
								</td>
							</tr>
						@endforeach
					</table>
				</div>
				<div class="add-column"><i class="fa fa-arrow-circle-left"></i> <i class="fa fa-arrow-circle-right"></i><i class="fa fa-plus-circle">
				</i></div>
			</div>
			<div class="tab-content" id="repository" style="left:3840px;">
				<h2>
				仓库</h2>
				<div class="table-content">
					<table class="data-table">
						<thead>
						<tr>
							<th>仓库ID</th>
							<th>管理员ID</th>
							<th>仓库联系</th>
							<th>仓库地址</th>
							<th>操作</th>
						</tr></thead>
						@foreach ( $bookstore[3] as $repositories )
							<tr>
								<td>{{ $repositories->id }}</td>
								<td>{{ $repositories->keeper_id }}</td>
								<td>{{ $repositories->contact_link }}</td>
								<td>{{ $repositories->address }}</td>
								<td class="operation">
									<form action="{{ URL('repositories/'.$repositories->id) }}" method="POST" accept-charset="utf-8">
										<input name="_method" type="hidden" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}">
										<button type="submit"><i class='fa fa-minus-circle'></i>&nbsp;</button>											
									</form>
								</td>
							</tr>
						@endforeach
					</table>
				</div>
				<div class="add-column"><i class="fa fa-arrow-circle-left"></i> <i class="fa fa-arrow-circle-right"></i><i class="fa fa-plus-circle">
				</i></div>
			</div>
			<div class="tab-content" id="repository-detail" style="left:4800px;">
				<h2>
				仓库明细</h2>
				<div class="table-content">
					<table class="data-table">
						<thead>
						<tr>
							<th>仓库明细ID</th>
							<th>仓库ID</th>
							<th>书籍编号</th>
							<th>书籍数量</th>
							<th>操作</th>
						</tr></thead>
						@foreach ( $bookstore[4] as $repository_detail )
						<tr>
							<td>{{ $repository_detail->id }}</td>
							<td>{{ $repository_detail->repository_id }}</td>
							<td>{{ $repository_detail->book_id }}</td>
							<td>{{ $repository_detail->book_ammount }}</td>
							<td class="operation">
									<form action="{{ URL('repository_details/'.$repository_detail->id) }}" method="POST" accept-charset="utf-8">
										<input name="_method" type="hidden" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}">
										<button type="submit"><i class='fa fa-minus-circle'></i>&nbsp;</button>											
									</form>
								</td>
						</tr>
						@endforeach
					</table>
				</div>
				<div class="add-column"><i class="fa fa-arrow-circle-left"></i> <i class="fa fa-arrow-circle-right"></i><i class="fa fa-plus-circle">
				</i></div>
			</div>
			<div class="tab-content" id="user" style="left:5760px;">
				<h2>
				用户</h2>
				<div class="table-content-half user-table">
					<table class="data-table">
						<thead>
						<tr>
							<th>用户ID</th>
							<th>用户昵称</th>
							<th>用户密码</th>
							<th>收藏书ID</th>
							<th>绑定邮箱</th>
							<th>联系电话</th>
							<th>送货地址</th>
							<th>操作</th>
						</tr></thead>
						@foreach ( $bookstore[5] as $user )
						<tr>
							<td>{{ $user->id }}</td>
							<td>{{ $user->user_name }}</td>
							<td>{{ $user->user_password }}</td>
							<td>{{ $user->collected_id }}</td>
							<td><div class="limit-height">{{ $user->user_email }}</div></td>
							<td>{{ $user->user_phone }}</td>
							<td><div class="limit-height">{{ $user->user_address }}</div></td>
							<td class="operation">
									<form action="{{ URL('users/'.$user->id) }}" method="POST" accept-charset="utf-8">
										<input name="_method" type="hidden" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}">
										
										<button type="submit"><i class='fa fa-minus-circle'></i>&nbsp;</button>											
									</form>
								</td>
						</tr>
						@endforeach
					</table>	
				</div>
				<div class="add-column user"><i class="fa fa-arrow-circle-left"></i> <i class="fa fa-arrow-circle-right"></i><i class="fa fa-plus-circle">
				</i></div>
				<h2>
				管理员</h2>
				<div class="table-content-half keeper-table">
					<table class="data-table">
						<thead>
						<tr>
							<th>管理员ID</th>
							<th>管理员用户名</th>
							<th>管理员密码</th>
							<th>管理员权限</th>
							<th>操作</th>
						</tr></thead>
						@foreach ( $bookstore[6] as $keeper )
						<tr>
							<td>{{ $keeper->id }}</td>
							<td>{{ $keeper->keeper_username }}</td>
							<td>{{ $keeper->keeper_password }}</td>
							<td>{{ $keeper->keeper_permission }}</td>
							<td class="operation">
									<form action="{{ URL('keepers/'.$keeper->id) }}" method="POST" accept-charset="utf-8">
										<input name="_method" type="hidden" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}">
										<button type="submit"><i class='fa fa-minus-circle'></i>&nbsp;</button>											
									</form>
								</td>
						</tr>
						@endforeach
					</table>	
				</div>
				<div class="add-column keeper"><i class="fa fa-arrow-circle-left"></i> <i class="fa fa-arrow-circle-right"></i><i class="fa fa-plus-circle">
				</i></div>
			</div>
			<div class="tab-content" id="logistic" style="left:6720px;">
				<h2>
				物流公司</h2>
				<div class="table-content">
					<table class="data-table">
						<thead>
						<tr>
							<th>物流公司ID</th>
							<th>联系人ID</th>
							<th>物流公司名称</th>
							<th>联系地址</th>
							<th>联系电话</th>
							<th>操作</th>
						</tr></thead>
						@foreach ( $bookstore[7] as $logistic )
						<tr>
							<td>{{ $logistic->id }}</td>
							<td>{{ $logistic->keeper_id }}</td>
							<td><div class="limit-height">{{ $logistic->logistics_name }}</div></td>
							<td><div class="limit-height">{{ $logistic->logistics_address }}</div></td>
							<td>{{ $logistic->logistics_phone_number }}</td>
							<td class="operation">
									<form action="{{ URL('logistics/'.$logistic->id) }}" method="POST" accept-charset="utf-8">
										<input name="_method" type="hidden" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}">
										<button type="submit"><i class='fa fa-minus-circle'></i>&nbsp;</button>											
									</form>
								</td>
						</tr>
						@endforeach
					</table>	
				</div>
				<div class="add-column"><i class="fa fa-arrow-circle-left"></i> <i class="fa fa-arrow-circle-right"></i><i class="fa fa-plus-circle">
				</i></div>
			</div>
		</div>
	</div>
	<!-- content -->
	
	<!-- footer -->
	<footer class="site-footer">
  		<div class="site-footer-wrapper">
		    <div class="site-footer-nav">
		      <ul>
		        <li><a href="http://www.lumpychen.com">
		        Home.</a></li><li><a href="http://www.lumpychen.com/lum-blog">
		        Blog.</a></li><li><a href="http://www.lumpychen.com/lum-cv">
		        Resume.</a></li><li><a href="http://www.lumpychen.com/lum-lab">
		        Tech.</a></li><li><a href="http://www.lumpychen.com/lum-shutter">
		        shutter.</a></li>
		      </ul>
		    </div>    
		    <div class="site-icon-panel">
		      <div class="icon-wrapper"><a class="icon-sub icon-iconfont-github-2" href="http://github.com/LumpyChen">
		      </a></div><div class="icon-wrapper"><a class="icon-sub icon-iconfont-linkedin" href="">
		      </a></div><div class="icon-wrapper"><a class="icon-sub icon-iconfont-stackoverflow" href="http://stackoverflow.com/users/5182971/l-chen"> 
		      </a></div><div class="icon-wrapper"><a class="icon-sub icon-iconfont-sf" href="http://segmentfault.com/u/lumpychen">
		      </a></div><div class="icon-wrapper"><a class="icon-sub icon-iconfont-facebook" href="http://www.facebook.com/Lumpchen">
		      </a></div><div class="icon-wrapper"><a class="icon-sub icon-iconfont-zhihu" href="http://www.zhihu.com/people/irvingchen">
		      </a></div><div class="icon-wrapper"><a class="icon-sub icon-iconfont-douban" href="http://">
		      </a></div><div class="icon-wrapper"><a class="icon-sub icon-iconfont-lofter" href="http://lumpychen.lofter.com/">
		      </a></div>
		    </div>
		    <div class="site-copyright">
		      <span id="c-lum">© 2014 Lumpychen </span>
		      <span id="design">designed by&nbsp;<a href="http://www.lumpychen.com" id="name">Lumpy Chen</a></span>
		    </div>
  		</div>
	</footer>
	<!-- footer -->
	


	<!-- js -->
	<!-- [if lt IE 9]>
		<script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.js"></script>
		<script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
	<![end if]-->
	<!--这段代码让Bootstrap3适应IE9以下版本的IE-->
	<script src="{{ URL::asset('js/jquery-2.1.4.min.js') }}" type="text/javascript" charset="utf-8"></script>
	<script src="{{ URL::asset('js/jquery.avgrund.js') }}" type="text/javascript" charset="utf-8"></script>
	<script src="{{ URL::asset('js/script.js') }}" type="text/javascript" charset="utf-8"></script>
	<!-- js -->
</body>
</html>