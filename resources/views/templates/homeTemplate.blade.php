<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://kit.fontawesome.com/455de5f3f1.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
	    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
        <!-- <link rel="stylesheet" href="{{url('/static/css/home.css')}}"> -->
        <link rel="stylesheet" href="{{url('/static/css/home2.css')}}">
    </head>
    <body>
        <!-- <div class="grid-container">
            <div class="header">
                <div class="logo">
                    <img src="{{url('/static/img/logo.jpg')}}" alt="">
                </div>
                <div class="navegation">
                    <ul>
                        <li>Cartelera</li>
                        <li>Categoria</li>
                        <li>las ultimas </li>
                        <li>Pronto...</li>
                    </ul>
                </div>
            </div>
            <div class="carrousel">
                @include('templates.slider')
            </div>
            <div class="sidebar"></div>
            <div class="galery"></div>
            <div class="footer"></div>
        </div> -->
        <!-- Aqui comienza la nueva portada -->
        
	<header>
		<a href="#" class="logo">
			<i class="bx bxs-movie"></i> Movies
		</a>

		<div class="bx bx-menu" id="menu-icon"></div>

		<!-- Menu -->

		<ul class="navbar">
			<li><a href="#">Home</a></li>
			<li><a href="#movies">Movies</a></li>
			<li><a href="#comming">Coming</a></li>
			<li><a href="#newsletter">Noticias</a></li>
		</ul>

		<a href="#" class="btn">Sing in</a>
	</header>

	<!-- Home -->
	<section class="home swiper" id="home">
		    <div class="swiper-wrapper">
		      <div class="swiper-slide container">
		      	<img src="{{url('/static/img/xmen.jpg')}}" alt="">
		      	<div class="home-text">
		      		<span>Marvel Universe</span>
		      		<h1>X-Men <br> Days of future days</h1>
		      		<a href="" class="btn">Book Now</a>
		      		<a href="#" class="play">
		      			<i class="bx bx-play"></i>
		      		</a>
		      	</div>
		      </div>

		      <div class="swiper-slide container">
		      	<img src="{{url('/static/img/xmen.jpg')}}" alt="">
		      	<div class="home-text">
		      		<span>Anaconda</span>
		      		<h1>Anaconda <br> </h1>
		      		<a href="" class="btn">Book Now</a>
		      		<a href="#" class="play">
		      			<i class="bx bx-play"></i>
		      		</a>
		      	</div>
		      </div>

		      <div class="swiper-slide container">
		      	<img src="img/xmen.jpg" alt="">
		      	<div class="home-text">
		      		<span>Marvel Universe</span>
		      		<h1>X-Men <br> Days of future days</h1>
		      		<a href="" class="btn">Book Now</a>
		      		<a href="#" class="play">
		      			<i class="bx bx-play"></i>
		      		</a>
		      	</div>
		      </div>
		    </div>
		    <div class="swiper-pagination"></div>
	</section>

	<section class="movie" id="movie">
		<h2 class="heading">Opening this week</h2>
		<div class="movies-container">
			<div class="box">
				<div class="box-img">
					<img src="{{url('/static/img/xmen.jpg')}}" alt="">
				</div>
				<h3>Anaconda</h3>
				<span>120 | Action</span>
			</div>
			
			<div class="box">
				<div class="box-img">
					<img src="{{url('/static/img/xmen.jpg')}}" alt="">
				</div>
				<h3>Anaconda</h3>
				<span>120 | Action</span>
			</div>
			
			<div class="box">
				<div class="box-img">
					<img src="{{url('/static/img/xmen.jpg')}}" alt="">
				</div>
				<h3>Anaconda</h3>
				<span>120 | Action</span>
			</div>
			
			<div class="box">
				<div class="box-img">
					<img src="{{url('/static/img/xmen.jpg')}}" alt="">
				</div>
				<h3>Anaconda</h3>
				<span>120 | Action</span>
			</div>
			
			<div class="box">
				<div class="box-img">
					<img src="{{url('/static/img/xmen.jpg')}}" alt="">
				</div>
				<h3>Anaconda</h3>
				<span>120 | Action</span>
			</div>
			
			<div class="box">
				<div class="box-img">
					<img src="{{url('/static/img/xmen.jpg')}}" alt="">
				</div>
				<h3>Anaconda</h3>
				<span>120 | Action</span>
			</div>
			
		</div>
	</section>
	<section class="comming" id="comming">
		<h2 class="heading">Comming soon...</h2>
		<div class="comming-container swiper">
			<div class="swiper-wrapper">
					<div class="swiper-slide box">
						<div class="box-img">
							<img src="{{url('/static/img/xmen.jpg')}}" alt="">
						</div>
						<h3>Anaconda</h3>
						<span>120 | Action</span>
					</div>
					
					<div class="swiper-slide box">
						<div class="box-img">
							<img src="{{url('/static/img/xmen.jpg')}}" alt="">
						</div>
						<h3>Anaconda</h3>
						<span>120 | Action</span>
					</div>
					
					<div class="swiper-slide box">
						<div class="box-img">
							<img src="{{url('/static/img/xmen.jpg')}}" alt="">
						</div>
						<h3>Anaconda</h3>
						<span>120 | Action</span>
					</div>
					
					<div class="swiper-slide box">
						<div class="box-img">
							<img src="{{url('/static/img/xmen.jpg')}}" alt="">
						</div>
						<h3>Anaconda</h3>
						<span>120 | Action</span>
					</div>
					
					<div class="swiper-slide box">
						<div class="box-img">
							<img src="{{url('/static/img/xmen.jpg')}}" alt="">
						</div>
						<h3>Anaconda</h3>
						<span>120 | Action</span>
					</div>
					
					<div class="swiper-slide box">
						<div class="box-img">
							<img src="{{url('/static/img/xmen.jpg')}}" alt="">
						</div>
						<h3>Anaconda</h3>
						<span>120 | Action</span>
					</div>
			</div>
		</div>
	</section>
	<section class="newsletter" id="newsletter">
		<h2>Subscribe to get <br>Newsletter</h2>
		<form action="">
			<input type="email" class="email" placeholder="Enter email" required>
			<input type="submit" value="Subscribe" class="btn">
		</form>
	</section>
	<section class="footer">
		<a href="#" class="logo">
			<i class="bx bxs-movie"></i>Movies
		</a>
		<div class="social">
			<a href="#"><i class="bx bxl-facebook"></i></a>
			<a href="#"><i class="bx bxl-twitter"></i></a>
			<a href="#"><i class="bx bxl-instagram"></i></a>
			<a href="#"><i class="bx bxl-tiktok"></i></a>
		</div>
	</section>
	<section class="copyright">
		<p>&#169; Bongbang all Right Reserved</p>
	</section>
	<!-- Swiper Js -->
	 <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
	 <script src="{{url('/static/js/home.js')}}"></script>

    </body>
</html>