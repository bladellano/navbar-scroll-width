<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<style>
	.container{
		max-width: 800px;
		margin: 0 auto;
		background: #eee;
	}
	body{
		background: #069;
	}
</style>
<body>
	<link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick-theme.css"/>

	<div class="container">
		
		<div class="your-class">
			<div>Perferendis nemo nihil, corrupti dicta consequuntur sunt rerum repudiandae magnam provident commodi iusto. Dignissimos quibusdam, reiciendis quas consectetur eligendi. Cum, quam, nihil.</div>
			<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id possimus, est sed illum non facere reprehenderit architecto culpa eveniet adipisci earum quia harum, ab officiis necessitatibus odio iusto, laboriosam quae.</div>
			<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>

	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script>
		$(document).ready(function(){
			$('.your-class').slick({
				dots: true,
				infinite: true,
				speed: 500,
				fade: true,
				cssEase: 'linear'
			});
		});
	</script>
</body>
</html>