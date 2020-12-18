<?php
    include_once('./_common.php');
?>

<!DOCTYPE html>
<html lang="ko">
	<head>
		<base href="./">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
		<title>씨큐브코딩 큐브클래스 검색</title>

		<!-- <link rel="manifest" href="/manifest.json"> -->
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="theme-color" content="#ffffff">

		<!-- Main styles for this application-->
		<link rel="shortcut icon" href="./favicon.ico"/>
		<link href="./c3/css/style.css" rel="stylesheet">
		<link href="./c3/css/pace.min.css" rel="stylesheet">
		<link href="./c3/css/toastr.min.css" rel="stylesheet">
	</head>
	<body class="app flex-row align-items-center">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 col-sm-12 col-lg-8">
					<div class="card p-4">
						<div class="card-body">
						<form method="post" id="sform" onsubmit="return false;">
							<input type="hidden" id="code" value="" />
							<div class="text-center">
								<img src="img/logo_brand.png" />
							</div>
							<p></p>                   
							<h1>큐브클래스 ID/PW 찾기</h1>
							<p></p>                   
							<p>학생 이름을 입력하세요. 예) 홍길동</p>
							<div class="input-group mb-3">
							  <input name="user_name" class="form-control" type="text" placeholder="학생 이름" value="" />
							</div>
							<p>학부모 핸드폰 번호 뒤 4자리를 입력하세요. 예) 010-1234-5678 -> 5678</p>
							<div class="input-group mb-3">
							  <input name="user_number" class="form-control" type="text" placeholder="0000" value="" />
							</div>
							<div class="row">
							  <div class="col-6">
								<input class="btn btn-primary px-4" type="button" value="검색" />
							  </div>
							</div>
							<div id="search" style="display:none;">
								<div class="row" style="height:20px;"></div>
								<div class="row">
									<div class="col-10">
										<span id="user_name"></span> 학생 큐브클래스 아이디는 <code id="user_code">abcd</code>, 비밀번호는 <code id="user_pass">pass</code> 입니다.<br />
										<a href="https://www.cubeclass.co.kr/" target="_blank">[큐브클래스] 이동하기</a>
									</div>
								</div>
								<div class="row" style="height:10px;"></div>
							</div>
						</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	
    <!-- Bootstrap and necessary plugins-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script type="text/javascript">
	
        $(function () {
            $("input[type=button]").click(function(){
				//폼 체크
				var strUser  = $("input[name=user_name]").val();
				var strNum	 = $("input[name=user_number]").val();
				
				if(strUser == "") {
					alert('학생 이름을 입력하세요');
					$("input[name=user_name]").focus();
					return;
				} 
				if(strNum == "") {
					alert('핸드폰 번호 뒤 4자리를 입력하세요');
					$("input[name=user_number]").focus();
					return;
				} 
				
				//$("#sform").attr("action", "./c3/ajax.find_c3.php");
				//$("#sform").submit();
				//검색
				
				$.ajax({
					type: "POST",
					url: "/c3/ajax.find_cube.php",
					data : {
						"name": strUser,
						"number": strNum
					},
					success: function(data){
						//alert(data);
						var strArr = data.split('/');
						$("#search").show();
						$("#user_name").html(strUser);
						$("#user_code").html(strArr[0]);
						$("#user_pass").html(strArr[1]);
						//$(".aclip").attr('href', data);
					},
					error: function(err){ alert("호출 실패하였습니다.") ;}
				});
				
				
			});
			
        });
    </script>
	<script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.6/dist/clipboard.min.js"></script>
	<script>
		//var btn = document.getElementById('aclip');
		//var clipboard = new Clipboard(btn);
		var clipboard = new ClipboardJS( '.aclip' );
		clipboard.on('success', function(e) {
			alert("응시코드가 복사되었습니다\nCtrl+V를 이용해서 코드를 입력하세요");
			console.log(e);
		});
		clipboard.on('error', function(e) {
			console.log(e);
		});
	</script>
  </body>
</html>