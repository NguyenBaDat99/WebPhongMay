<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<!-- <style >
		.banner{
			width: auto;
			height: auto;
			overflow: hidden; // tránh lỗi hình quá lớn đè lên nội dung các phần khác*/
			box-sizing:border-box; // cố định kích thước của slide
		}
	</style> -->
</head>
<body>
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100" src="http://localhost/WebPhongMay/asset/images/2.png" alt="First slide">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="http://localhost/WebPhongMay/asset/images/1.png" alt="Second slide">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<br>
	<div class="container-fluid ">
		<div class="row">
			<div class="col-md-4">
				<div class="card-img-top img-thumbnail" style="width: 100%;">
					<img src="http://localhost/WebPhongMay/asset/images/cp.png" class="card-img-top" alt="...">
					<div class="card-body">
									
						<a href="http://localhost/WebPhongMay/index.php/QLyPhongMay"><button type="button" class="btn btn-flat text-primary p-0 mx-0 waves-effect waves-effect">Phòng máy<i class="fa fa-angle-right ml-2"></i></button>
						</a>
					</div>
				</div>
			</div>
			
			<div class="col-md-4">
				<div class="card-img-top img-thumbnail" style="width: 100%;">
					<img src="http://localhost/WebPhongMay/asset/images/book.jpg" class="card-img-top" alt="...">
					<div class="card-body">		
						<a href="http://localhost/WebPhongMay/index.php/QLyMonHoc"><button type="button" class="btn btn-flat text-primary p-0 mx-0 waves-effect waves-effect">Môn học<i class="fa fa-angle-right ml-2"></i></button>
						</a>		
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card-img-top img-thumbnail" style="width: 100%;">
					<img src="http://localhost/WebPhongMay/asset/images/imm.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<a href="http://localhost/WebPhongMay/index.php/QLyThoiKhoaBieu">		
						<button type="button" class="btn btn-flat text-primary p-0 mx-0 waves-effect waves-effect">Thời khóa biểu<i class="fa fa-angle-right ml-2"></i></button>
					</a>
					</div>
				</div>
			</div>
		</div>
		<br>
	</div>	
	</body>
	</html>