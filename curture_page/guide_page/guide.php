<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>이용안내</title>
  <!-- 헤더 -->
  <?php include "../header/header.php"?>
</head>
<body>
  <!-- 장르 -->
  <div class="container">
				<h2 class="text-center">다양한 장르</h2>
				<div class="row row-cols-1 row-cols-md-4">
					<div class="col mb-4">
						<div class="card h-100">
							<img src="http://localhost/curture_page/main_page/main_imgs/영화.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">영화</h5>
								<p class="card-text">최종인 바보</p>
							</div>
						</div>
					</div>
					<div class="col mb-4">
						<div class="card h-100">
							<img src="http://localhost/curture_page/main_page/main_imgs/드라마.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">드라마</h5>
								<p class="card-text">최종인</p>
							</div>
						</div>
					</div>
					<div class="col mb-4">
						<div class="card h-100">
							<img src="http://localhost/curture_page/main_page/main_imgs/예능.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">예능</h5>
								<p class="card-text">최종인 바보</p>
							</div>
						</div>
					</div>
					<div class="col mb-4">
						<div class="card h-100">
							<img src="http://localhost/curture_page/main_page/main_imgs/애니메이션.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">애니메이션</h5>
								<p class="card-text">최종인 바보</p>
							</div>
						</div>
					</div>
				</div>
		</div>
		<!-- 장소 -->
		<section id="one">
			<div class="container wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
				<h2 class="text-center">다양한 장소</h2>
				<div class="card-group">
					<!-- card -->
					<div class="card">
						<img class="card-img-top img-fluid" src="http://localhost/curture_page/main_page/main_imgs/촬영지.jpg"
							alt="Card image cap">
						<div class="card-block">
							<h4 class="card-title">촬영지</h4>
							<p class="card-text">최종인 바보</p>
						</div>
					</div>
					<!-- card -->
					<div class="card">
						<img class="card-img-top img-fluid" src="http://localhost/curture_page/main_page/main_imgs/음식점.jpg"
							alt="Card image cap">
						<div class="card-block">
							<h4 class="card-title">음식점</h4>
							<p class="card-text">최종인 바보</p>
						</div>
					</div>
					<!-- card -->
					<div class="card">
						<img class="card-img-top img-fluid" src="http://localhost/curture_page/main_page/main_imgs/놀거리.jpg"
							alt="Card image cap">
						<div class="card-block">
							<h4 class="card-title">놀거리</h4>
							<p class="card-text">최종인 바보</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php include "../footer/footer.php"; ?>
</body>
</html>