<?php 
// bắt đầu sử dụng session
session_start();
require_once "./config/utils.php";

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo BASE_URL . 'public/css/main.css'?>">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-4 offset-4">
                <div class="login-logo">
                    <a href="<?php echo BASE_URL ?>"><br><br>
                        <img style="margin-left:60px;" src="<?php echo BASE_URL . 'public/images/5e9ae2bba34ad-logo.png'?>" alt="" class="img-thumbnail">
                    </a>
                </div>
				<form id="add-user-form" action="post-registration.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Tên người dùng<span class="text-danger">*</span></label>
                                <input style="width:400px ;" type="text" class="form-control" name="name">
                                <?php if(isset($_GET['nameerr'])):?>
                                    <label class="error"><?= $_GET['nameerr']?></label>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label for="">Email<span class="text-danger">*</span></label>
                                <input style="width:400px ;" type="text" class="form-control" name="email">
                                <?php if(isset($_GET['emailerr'])):?>
                                    <label class="error"><?= $_GET['emailerr']?></label>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label for="">Mật khẩu<span class="text-danger">*</span></label>
                                <input style="width:400px ;" type="password" id="main-password" class="form-control" name="password">
                                <?php if(isset($_GET['passworderr'])):?>
                                    <label class="error"><?= $_GET['passworderr']?></label>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label for="">Nhập lại mật khẩu<span class="text-danger">*</span></label>
                                <input style="width:400px ;" type="password" class="form-control" name="cfpassword">
                            </div>      
                            <div class="form-group">
                                <label for="">Số điện thoại</label>
                                <input style="width:400px ;" type="text" class="form-control" name="phone_number">
                            </div>
                           
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Đăng Ký</button>&nbsp;
                            <a href="<?= INDEX_URL . ''?>" class="btn btn-danger">Hủy</a>
                        </div>
                    </div>
                </form>
			</div>
		</div>	
		
	</div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script>
    function encodeImageFileAsURL(element) {
        var file = element.files[0];
        if(file === undefined){
            $('#preview-img').attr('src', "<?= DEFAULT_IMAGE ?>");
            return false;
        }
        var reader = new FileReader();
        reader.onloadend = function() {
            $('#preview-img').attr('src', reader.result)
        }
        reader.readAsDataURL(file);
    }
    $('#add-user-form').validate({
        rules:{
            name: {
                required: true,
                maxlength: 191
            },
            email: {
                required: true,
                maxlength: 191,
                email: true,
                remote: {
                    url: "<?= ADMIN_URL . 'users/verify-email-existed.php'?>",
                    type: "post",
                    data: {
                        email: function() {
                            return $( "input[name='email']" ).val();
                        }
                    }
                }
            },
            password:{
                required: true,
                maxlength: 191
            },
            cfpassword: {
                required: true,
                equalTo: "#main-password"
            },
            phone_number: {
                number: true
            },
            identity_id:{
                maxlength: 191
            },
            avatar: {
                required: true,
                extension: "png|jpg|jpeg|gif"
            }
        },
        messages: {
            name: {
                required: "Hãy nhập tên người dùng",
                maxlength: "Số lượng ký tự tối đa bằng 191 ký tự"
            },
            email: {
                required: "Hãy nhập email",
                maxlength: "Số lượng ký tự tối đa bằng 191 ký tự",
                email: "Không đúng định dạng email",
                remote: "Email đã tồn tại, vui lòng sử dụng email khác"
            },
            password:{
                required: "Hãy nhập mật khẩu",
                maxlength: "Số lượng ký tự tối đa bằng 191 ký tự"
            },
            cfpassword: {
                required: "Nhập lại mật khẩu",
                equalTo: "Cần khớp với mật khẩu"
            },
            phone_number: {
                min: "Bắt buộc là số có 10 chữ số",
                max: "Bắt buộc là số có 10 chữ số",
                number: "Nhập định dạng số"
            },
            identity_id:{
                maxlength: "Số lượng ký tự tối đa bằng 191 ký tự"
            },
            avatar: {
                required: "Hãy nhập ảnh đại diện",
                extension: "Hãy nhập đúng định dạng ảnh (jpg | jpeg | png | gif)"
            }
        }
    });
</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>