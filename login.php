<?php 
	require_once("../config/connDB.php");
	require_once("../config/config.php");
	session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo TEACHER_TITLE; ?></title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
	    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
<style>
	body {
		background-image:url(../img/bg.jpg);
		background-repeat:no-repeat;
		background-size:cover;
		background-attachment:fixed;
		color:#fff;
		padding-top:10%;
	}
</style>
</head>
<body>
	<div class="supercenter">
		
		<div class="container">
			<h1 style="text-align:center">講師登入</h1>
		</div>
		<div class="container">
			<form class="form-horizontal" method="post" action="controls/auth.php">
				<fieldset>
					<!-- Text input-->
					<div class="form-group">
						<label class="col-md-4 control-label" for="user">帳號</label>  
						<div class="col-md-4">
							<input id="user" name="user" type="text" placeholder="請輸入帳號" class="form-control input-md" required="">

						</div>
					</div>

					<!-- Password input-->
					<div class="form-group">
						<label class="col-md-4 control-label" for="pw">密碼</label>
						<div class="col-md-4">
							<input id="pw" name="pw" type="password" placeholder="請輸入密碼" class="form-control input-md" required="">

						</div>
					</div>

					<!-- Button -->
					<div class="form-group">
						<label class="col-md-4 control-label" for="submit"></label>
						<div class="col-md-4">
							<input type="submit" name="submit" class="btn btn-primary" value="登入">
						</div>
					</div>

				</fieldset>
			</form>
		</div>
        <?php switch($_GET["msg"]){ 
			case "update":
			echo "<script>alert('資料修改完成，請重新登入');</script>";
			break;
		}
		?>
	</div>
		<?php //if(isset($_GET["error"])){ ?>
			<?php switch($_GET["error"]){
				case 1:
				echo "ERROR1";
				break;
				case 2:
				echo "ERROR2";
				break;

			} ?>
		<?php //} ?>

		<?php include("template/footer.php"); ?>
</body>
</html>