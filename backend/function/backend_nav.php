<nav class="navbar navbar-expand-md bg-primary navbar-dark">
	<div class="container">
		<a class="navbar-brand" href="#">
			<i class="fa d-inline fa-lg fa-birthday-cake"></i> Cake House </a>
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
			<ul class="navbar-nav">
				<li class="nav-item na1">
					<a class="nav-link na1" href="../news/list.php">最新消息管理</a>
				</li>
				<li class="nav-item">
					<a class="nav-link na2" href="../members/list.php">會員管理</a>
				</li>
				<li class="nav-item">
					<a class="nav-link na3" href="../pages/list.php">頁面管理</a>
				</li>
				<li class="nav-item">
					<a class="nav-link na4" href="../product_categories/list.php">產品管理</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle na5" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">訂單管理</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="../customer_orders/list.php?status=0">新訂單</a>
						<a class="dropdown-item" href="../customer_orders/list.php?status=1">已付款</a>
						<a class="dropdown-item" href="../customer_orders/list.php?status=2">已出貨</a>
						<a class="dropdown-item" href="../customer_orders/list.php?status=3">交易完成</a>
						<a class="dropdown-item" href="../customer_orders/list.php?status=99">取消訂單</a>
					</div>
				</li>
			</ul>
			<a class="btn navbar-btn ml-2 text-white btn-secondary" href="../logout.php">
				<i class="fa d-inline fa-lg fa-user-circle-o"></i>&nbsp;登出</a>
		</div>
	</div>
</nav>