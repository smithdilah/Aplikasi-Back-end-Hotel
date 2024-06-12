
<body>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
			
		</div>
		<div class="container">
        <div class="wrapper">
            <div class="page-header my-5">
                <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Selamat datang Di 
				website ini.</h1>
            </div>
        </div>
    </div>
</body>
</html>