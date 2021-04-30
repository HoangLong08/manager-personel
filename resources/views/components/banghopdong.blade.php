
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		  <meta name="csrf-token" content="{{csrf_token()}}">
        <title>Quản lý hợp đồng</title>
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		  <link rel="shortcut icon" href="{{ asset('asset/img/icon_shop.jpg') }}" />
		  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
		  <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/style_form.css') }}">
    </head>
    <body>
		<div class="home-wrap">
			<div class="login-wrap">
				<div class="row content-login">
					<div class="col-md-6">
                        <h4 class="txtleft">INSERT DATA</h4>
						<div class="login-image">
							<img src="https://res.digital/wp-content/uploads/2019/12/word-image-1.png" alt="logo">
						</div>
					</div>
					<div class="col-md-6">
						<div class="login-content">
                        <h3 class="txtTitle">BẢNG THÔNG TIN HỢP ĐỒNG</h3>
                        <form action="/login" method="POST" id="login-form">
								@csrf   
                                <div class="form-group">
									<label for="mahopdong">Mã hợp đồng</label>
									<input type="text" class="form-control" name="mahopdong" id="mahopdong" placeholder="Nhập mã hợp đồng">
									<small id="passwordHelp" class="form-text" style="color: red"></small>
								</div> 
                                <div class="form-group">
									<label for="maloaihopdong">Mã loại hợp đồng</label>
                                    <select class="form-control" name="maloaihopdong" id="maloaihopdong">
                                        <option value="Nam">Kinh</option>
                                        <option value="Nữ">Tày</option>
                                        <option value="Nam">Thái</option>
                                    </select>
									<small id="passwordHelp" class="form-text" style="color: red"></small>
								</div>
                                <div class="form-group">
									<label  for="manhanvien" class="label_title">Mã nhân viên</label></br>
                                    <select  class="form-control" name="manhanvien" id="manhanvien">
                                        <option value="">Đà Nẵng</option>
                                        <option value="">Quảng Nam</option>
                                    </select>
								</div> 
                                <div class="form-group">
									<label for="ngaykyket">Ngày ký kết</label>
                                    <input type="date" class="form-control" name="ngaykyket" id="ngaykyket">
									<small id="passwordHelp" class="form-text" style="color: red"></small>
								</div> 
                                <div class="form-group">
									<label for="ngayhethan">Ngày hết hạn</label>
                                    <input type="date" class="form-control" name="ngayhethan" id="ngayhethan">
									<small id="passwordHelp" class="form-text" style="color: red"></small>
								</div> 
								<div class="btn-login text-center mb-4">
									<p class="notifyLogin" style="color: red"></p>
									<button type="submit" class="btn btn-primary form-control" style="background-color: #6c63ff" id="submitLogin">THÊM HỢP ĐỒNG</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
    </body>
</html>
