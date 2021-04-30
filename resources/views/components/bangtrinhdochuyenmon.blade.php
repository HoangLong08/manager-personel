
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		  <meta name="csrf-token" content="{{csrf_token()}}">
        <title>Quản lý trình độ chuyên môn</title>
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
							<img src="https://vox-cpaas.com/assets/temp/industries/hr%20recruitment/hr-recruitment-illustration.svg" alt="logo">
						</div>
					</div>
					<div class="col-md-6">
						<div class="login-content">
                        <h3 class="txtTitle">QUẢN LÝ TRÌNH ĐỘ CHUYÊN MÔN</h3>
                        <form action="/login" method="POST" id="login-form">
								@csrf   
                                <div class="form-group">
									<label for="matrinhdochuyenmon">Mã trình độ/chuyên môn</label>
                                    <?php 
                                    $permitted_chars = '0123456789QWETRYUIOPASDFGHJKLZXCVBNM';
                                    $tmp = substr(str_shuffle($permitted_chars), 0, 10)?>
                                    <input type="text" class="form-control" name="matrinhdochuyenmon" id="matrinhdochuyenmon" value="<?php echo $tmp ?>">
                                    <small id="passwordHelp" class="form-text" style="color: red"></small>
								</div> 
                                <div class="form-group">
									<label for="tentrinhdochuyenmon">Tên trình độ/chuyên môn</label>
                                    <input type="text" class="form-control" name="tentrinhdochuyenmon" id="tentrinhdochuyenmon" placeholder="Nhập tên trình độ/chuyên môn">
									<small id="passwordHelp" class="form-text" style="color: red"></small>
								</div>
                                <div class="form-group">
									<label  for="tungay" >Từ ngày</label></br>
                                    <input type="date" class="form-control" name="tungay" id="tungay">
								</div> 
                                <div class="form-group">
									<label  for="denngay" >Đến ngày</label></br>
                                    <input type="date" class="form-control" name="denngay" id="denngay">
								</div> 
                               
								<div class="btn-login text-center mb-4">
									<p class="notifyLogin" style="color: red"></p>
									<button type="submit" class="btn btn-primary form-control" style="background-color: #6c63ff" id="submitLogin">THÊM TRÌNH ĐỘ CHUYÊN MÔN</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
    </body>
</html>
