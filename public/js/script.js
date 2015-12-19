$('.view-tab').click(function() {
	var active = $('#active');
	var active_o = $('#active-o');

	active.removeAttr("id");
	active_o.removeAttr("id");
	$(this).attr("id","active");
	$('#active>.circle').attr("id","active-o");

});
	/* Act on the event */
$('.left-tabs :nth-child(1)').click(function() {
	$('.right-content :nth-child(1)').animate({left:"0px"}, 1000);
	$('.right-content :nth-child(2)').animate({left:"960px"}, 1000);
	$('.right-content :nth-child(3)').animate({left:"1920px"}, 1000);
	$('.right-content :nth-child(4)').animate({left:"2880px"}, 1000);
	$('.right-content :nth-child(5)').animate({left:"3840px"}, 1000);
	$('.right-content :nth-child(6)').animate({left:"4800px"}, 1000);
	$('.right-content :nth-child(7)').animate({left:"5760px"}, 1000)
	$('.right-content :nth-child(8)').animate({left:"6720px"}, 1000);
});
	/* Act on the event */
$('.left-tabs :nth-child(2)').click(function() {
	$('.right-content :nth-child(1)').animate({left:"-960px"}, 1000);
	$('.right-content :nth-child(2)').animate({left:"0px"}, 1000);
	$('.right-content :nth-child(3)').animate({left:"960px"}, 1000);
	$('.right-content :nth-child(4)').animate({left:"1920px"}, 1000);
	$('.right-content :nth-child(5)').animate({left:"2880px"}, 1000);
	$('.right-content :nth-child(6)').animate({left:"3840px"}, 1000);
	$('.right-content :nth-child(7)').animate({left:"4800px"}, 1000);
	$('.right-content :nth-child(8)').animate({left:"5760px"}, 1000);
}); 
$('.left-tabs :nth-child(3)').click(function() {
	$('.right-content :nth-child(1)').animate({left:"-1820px"}, 1000);
	$('.right-content :nth-child(2)').animate({left:"-960px"}, 1000);
	$('.right-content :nth-child(3)').animate({left:"0px"}, 1000);
	$('.right-content :nth-child(4)').animate({left:"960px"}, 1000);
	$('.right-content :nth-child(5)').animate({left:"1920px"}, 1000);
	$('.right-content :nth-child(6)').animate({left:"2880px"}, 1000);
	$('.right-content :nth-child(7)').animate({left:"3840px"}, 1000);
	$('.right-content :nth-child(8)').animate({left:"4800px"}, 1000);
}); 
$('.left-tabs :nth-child(4)').click(function() {
	$('.right-content :nth-child(1)').animate({left:"-2880px"}, 1000);
	$('.right-content :nth-child(2)').animate({left:"-1920px"}, 1000);
	$('.right-content :nth-child(3)').animate({left:"-960px"}, 1000);
	$('.right-content :nth-child(4)').animate({left:"0px"}, 1000);
	$('.right-content :nth-child(5)').animate({left:"960px"}, 1000);
	$('.right-content :nth-child(6)').animate({left:"1920px"}, 1000);
	$('.right-content :nth-child(7)').animate({left:"2880px"}, 1000);
	$('.right-content :nth-child(8)').animate({left:"3840px"}, 1000);
}); 
$('.left-tabs :nth-child(5)').click(function() {
	$('.right-content :nth-child(1)').animate({left:"-3840px"}, 1000);
	$('.right-content :nth-child(2)').animate({left:"-2880px"}, 1000);
	$('.right-content :nth-child(3)').animate({left:"-1920px"}, 1000);
	$('.right-content :nth-child(4)').animate({left:"-960px"}, 1000);
	$('.right-content :nth-child(5)').animate({left:"0px"}, 1000);
	$('.right-content :nth-child(6)').animate({left:"960px"}, 1000);
	$('.right-content :nth-child(7)').animate({left:"1920px"}, 1000);
	$('.right-content :nth-child(8)').animate({left:"2880px"}, 1000);
}); 
$('.left-tabs :nth-child(6)').click(function() {
	$('.right-content :nth-child(1)').animate({left:"-4800px"}, 1000);
	$('.right-content :nth-child(2)').animate({left:"-3840px"}, 1000);
	$('.right-content :nth-child(3)').animate({left:"-2880px"}, 1000);
	$('.right-content :nth-child(4)').animate({left:"-1920px"}, 1000);
	$('.right-content :nth-child(5)').animate({left:"-960px"}, 1000);
	$('.right-content :nth-child(6)').animate({left:"0px"}, 1000);
	$('.right-content :nth-child(7)').animate({left:"960px"}, 1000);
	$('.right-content :nth-child(8)').animate({left:"1920px"}, 1000);
}); 
$('.left-tabs :nth-child(7)').click(function() {
	$('.right-content :nth-child(1)').animate({left:"-5760px"}, 1000);
	$('.right-content :nth-child(2)').animate({left:"-4800px"}, 1000);
	$('.right-content :nth-child(3)').animate({left:"-3840px"}, 1000);
	$('.right-content :nth-child(4)').animate({left:"-2880px"}, 1000);
	$('.right-content :nth-child(5)').animate({left:"-1920px"}, 1000);
	$('.right-content :nth-child(6)').animate({left:"-960px"}, 1000);
	$('.right-content :nth-child(7)').animate({left:"0px"}, 1000);
	$('.right-content :nth-child(8)').animate({left:"960px"}, 1000);
}); 
$('.left-tabs :nth-child(8)').click(function() {
	$('.right-content :nth-child(1)').animate({left:"-6720px"}, 1000);
	$('.right-content :nth-child(2)').animate({left:"-5760px"}, 1000);
	$('.right-content :nth-child(3)').animate({left:"-4800px"}, 1000);
	$('.right-content :nth-child(4)').animate({left:"-3840px"}, 1000);
	$('.right-content :nth-child(5)').animate({left:"-2880px"}, 1000);
	$('.right-content :nth-child(6)').animate({left:"-1920px"}, 1000);
	$('.right-content :nth-child(7)').animate({left:"-960px"}, 1000);
	$('.right-content :nth-child(8)').animate({left:"0px"}, 1000);
}); 

$(function(){
	$('#order .table-content tr:gt(6)').css("display","none");
	$('#order-detail .table-content tr:gt(6)').css("display","none");
	$('#book .table-content tr:gt(6)').css("display","none");
	$('#repository .table-content tr:gt(6)').css("display","none");
	$('#repository-detail .table-content tr:gt(6)').css("display","none");
	$('#logistic tr:gt(6)').css("display","none");
	$('.keeper-table tr:gt(1)').css("display","none");
	$('.user-table tr:gt(1)').css("display","none");
});


$('.fa-arrow-circle-left').click(function(){
	if ($(this).parent().prev().children().children('tbody').children('tr:first-child')[0].style.display=="table-row") {
	//nothing
	}
	else{
		$(this).parent().prev().children().children('tbody').children('tr:hidden:first-child').show(500);	
		$(this).parent().prev().children().children('tbody').children('tr:visible:last-child').hide(500);	
	}

});
$('.fa-arrow-circle-right').click(function(){
	
	if ($(this).parent().prev().children().children('tbody').children('tr:last-child')[0].style.display=="table-row") {
	//nothing
	}
	else{
		$(this).parent().prev().children().children('tbody').children('tr:visible:first-child').hide(500);	
		$(this).parent().prev().children().children('tbody').children('tr:hidden:last-child').show(500);	
	}
});
$('.tab-content+.add-column .fa-arrow-circle-left').click(function(){
	
});
$('.tab-content+.add-column .fa-arrow-circle-right').click(function(){
	
});

$(function(){
	$('#order .fa-plus-circle').avgrund({
		height: 400,
		holderClass: 'custom',
		showClose: true,
		showCloseText: 'close',
		onBlurContainer: '.container',
		template: 
		'<form method="POST" action="{{ URL(\'orders\') }}">' +
		'<h2>增添新订单</h2>' +
		'<div><input placeholder="请输入所属用户ID。" name="user_id" type="text" /></div>' +
		'<div><input placeholder="请输入物流公司ID。" type="text" name="logistics_id" /></div>' +
		'<div><input placeholder="请输入物流公司ID。" type="text" name="repository_id" /></div>' +
		'<div>支付方式：<select name="payment_method">' +
		'<option value="online">在线付款</option>' +
		'<option value="cash">货到付款</option>' +
		'</select></div>' +
		'<div>订单状态：<select name="order_condition">' +
		'<option value="unpaid">待付款</option>' +
		'<option value="unreceived">待收货</option>' +
		'<option value="uncommented">待评价</option>' +
		'<option value="after_sales">售后</option>' +
		'</select></div>' +
		'<div>请输入相应信息</div><input type="hidden" name="_token" value="{{ csrf_token() }}">' +
		'<button type="submit" class="submit">提交</a>' +
		'</form>'
	});
	$('#order-detail .fa-plus-circle').avgrund({
		height: 270,
		holderClass: 'custom',
		showClose: true,
		showCloseText: 'close',
		onBlurContainer: '.container',
		template: 
		'<form method="POST" action="{{ URL(\'order_details\') }}">' +
		'<h2>记录新订单明细</h2>' +
		'<div><input placeholder="请输入所属订单ID。" name="order_id" type="text" /></div>' +
		'<div><input placeholder="请输入购买书籍ID。" type="text" name="book_id" /></div>' +
		'<div><input placeholder="请输入购买数量。" type="text" name="number" /></div>' +
		'<div>请输入相应信息</div><input type="hidden" name="_token" value="{{ csrf_token() }}">' +
		'<button type="submit" class="submit">提交</a>' +
		'</form>'
	});
	$('#book .fa-plus-circle').avgrund({
		height:400,
		holderClass: 'custom book',
		showClose: true,
		showCloseText: 'close',
		onBlurContainer: '.container',
		template: 
		'<form method="POST" action="{{ URL(\'books\') }}">' +
		'<h2>增添新图书</h2>' +
		'<div><input placeholder="请输入书籍分类。"name="book_class" type="text" /></div>' +
		'<div><input placeholder="请输入书籍名称。" type="text" name="book_name" /></div>' +
		'<div><input placeholder="请输入书籍价格。" type="text" name="book_price" /></div>' +
		'<div><input placeholder="请输入书籍折扣。" type="text" name="book_discount" /></div>' +
		'<div><input placeholder="请输入书籍作者。" type="text" name="book_author" /></div>' +
		'<div><input placeholder="请输入出版社。" type="text" name="publisher_name" /></div>' +
		'<div><input placeholder="请输入再版次数。" type="text" name="publish_time" /></div>' +
		'<textarea placeholder="请输入书籍介绍。" name="book_intro"></textarea>' +
		'<div>请输入相应信息</div><input type="hidden" name="_token" value="{{ csrf_token() }}">' +
		'<button type="submit" class="submit">提交</a>' +
		'</form>'
	});
	$('#repository .fa-plus-circle').avgrund({
		height: 400,
		holderClass: 'custom repository',
		showClose: true,
		showCloseText: 'close',
		onBlurContainer: '.container',
		template: 
		'<form method="POST" action="{{ URL(\'repositories\') }}"><input type="hidden" name="_token" value="{{ csrf_token() }}" />' +
		'<h2>增添新仓库</h2>' +
		'<div><input placeholder="请输入联系管理员ID。" name="keeper_id" type="text" /></div>' +
		'<div><input placeholder="请输入物流公司电话。" type="text" name="contact_link" /></div>' +
		'<div><textarea placeholder="请输入物流公司地址。" type="text" name="address" /></div>' +
		'<div>请输入相应信息</div>' +
		'<button type="submit" class="submit">提交</a>' +
		'</form>'
	});
	$('#repository-detail .fa-plus-circle').avgrund({
		height: 270,
		holderClass: 'custom',
		showClose: true,
		showCloseText: 'close',
		onBlurContainer: '.container',
		template: 
		'<form method="POST" action="{{ URL(\'repository_details\') }}"><input type="hidden" name="_token" value="{{ csrf_token() }}" />' +
		'<h2>记录新仓库明细</h2>' +
		'<div><input placeholder="请输入所属仓库ID。"name="repository_id" type="text" /></div>' +
		'<div><input placeholder="请输入仓库书籍ID。" type="text" name="book_id" /></div>' +
		'<div><input placeholder="请输入库存数量。" type="text" name=""book_ammount /></div>' +
		'<div>请输入相应信息</div>' +
		'<button type="submit" class="submit">提交</a>' +
		'</form>'
	});
	$('.user .fa-plus-circle').avgrund({
		height: 400,
		holderClass: 'custom user-content',
		showClose: true,
		showCloseText: 'close',
		onBlurContainer: '.container',
		template: 
		'<form method="POST" action="{{ URL(\'users\') }}"><input type="hidden" name="_token" value="{{ csrf_token() }}" />' +
		'<h2>增添新用户</h2>' +
		'<div><input placeholder="请输入用户昵称。" name="user_name" type="text" /></div>' +
		'<div><input placeholder="请输入用户密码。" type="password" name="user_password" /></div>' +
		'<div><input placeholder="请输入用户邮箱。" type="email" name="user_email" /></div>' +
		'<div><input placeholder="请输入用户电话。" type="text" name="user_phone" /></div>' +
		'<div><input placeholder="请输入收藏书籍ID。" type="text" name="collected_id" /></div>' +
		'<div><textarea placeholder="请输入用户地址。" name="user_address" /></div>' +
		'<div>请输入相应信息</div>' +
		'<button type="submit" class="submit">提交</a>' +
		'</form>'
	});

	$('.keeper .fa-plus-circle').avgrund({
		height: 400,
		holderClass: 'custom keeper-content',
		showClose: true,
		showCloseText: 'close',
		onBlurContainer: '.container',
		template: 
		'<form method="POST" action="{{ URL(\'keepers\') }}"><input type="hidden" name="_token" value="{{ csrf_token() }}" />' +
		'<h2>增添新管理员</h2>' +
		'<div><input placeholder="请输入管理员用户名" name="keeper_username" type="text" /></div>' +
		'<div><input placeholder="请输入管理员密码" name="keeper_password" type="text" /></div>' +
		'<div class="checkbox">管理员权限：浏览<input type="checkbox" name="keeper_permisson" value="Read" />' +
		'修改<input name="keeper_permisson" type="checkbox" value="Write" />' +
		'运行<input name="keeper_permisson" type="checkbox" value="Run" /></div>' +
		'<div>请输入相应信息</div>' +
		'<button type="submit" class="submit">提交</a>' +
		'</form>'
	});
	$('#logistic .fa-plus-circle').avgrund({
		height: 400,
		holderClass: 'custom',
		showClose: true,
		showCloseText: 'close',
		onBlurContainer: '.container',
		template: 
		'<form method="POST" action="{{ URL(\'logistics\') }}"><input type="hidden" name="_token" value="{{ csrf_token() }}" />' +
		'<h2>增添新物流公司</h2>' +
		'<div><input placeholder="请输入物流公司名称。" name="logistics_name" type="text" /></div>' +
		'<div><input placeholder="请输入负责联系管理员ID。" type="text" name="keeper_id" /></div>' +
		'<div><input placeholder="请输入物流公司电话。" type="text" name="logistics_phone_number" /></div>' +
		'<div><textarea name="" placeholder="请输入物流公司地址。" type="text" name="logistics_address" />' +
		'<div>请输入相应信息</div>' +
		'<button type="submit" class="submit">提交</a>' +
		'</form>'
	});

});

