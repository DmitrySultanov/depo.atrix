<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title></title>
	<? include('inc/head.php'); ?>
</head>
<style>
#circularG{
	position:relative;
	width:20px;
	height:20px;
	display: inline-block;
	float: left;
}

.circularG{
	position:absolute;
	background-color:rgba(0, 0, 0, 1);
	width:6px;
	height:6px;
	animation-name:bounce_circularG;
		-o-animation-name:bounce_circularG;
		-ms-animation-name:bounce_circularG;
		-webkit-animation-name:bounce_circularG;
		-moz-animation-name:bounce_circularG;
	animation-duration:.9s;
		/*-o-animation-duration:1.1s;
		-ms-animation-duration:1.1s;
		-webkit-animation-duration:1.1s;
		-moz-animation-duration:1.1s;*/
	animation-iteration-count:infinite;
		-o-animation-iteration-count:infinite;
		-ms-animation-iteration-count:infinite;
		-webkit-animation-iteration-count:infinite;
		-moz-animation-iteration-count:infinite;
	animation-direction:normal;
		-o-animation-direction:normal;
		-ms-animation-direction:normal;
		-webkit-animation-direction:normal;
		-moz-animation-direction:normal;
}

#circularG_1{
	left:0;
	top:0;
	animation-delay:0.6s;
}

#circularG_2{
	right:0;
	top:0;
	animation-delay:0.8s;
}

#circularG_3{
	bottom:0;
	right:0;
	animation-delay:1s;
}

#circularG_4{
	left:0;
	bottom:0;
	animation-delay:1.2s;
}



@keyframes bounce_circularG{
	0%{
		background-color: rgba(255, 255, 255, 1);
	}

	100%{
		background-color: rgba(0, 0, 0, 1);
	}
}

/*@-o-keyframes bounce_circularG{
	0%{
		-o-transform:scale(1);
	}

	100%{
		-o-transform:scale(.3);
	}
}

@-ms-keyframes bounce_circularG{
	0%{
		-ms-transform:scale(1);
	}

	100%{
		-ms-transform:scale(.3);
	}
}

@-webkit-keyframes bounce_circularG{
	0%{
		-webkit-transform:scale(1);
	}

	100%{
		-webkit-transform:scale(.3);
	}
}

@-moz-keyframes bounce_circularG{
	0%{
		-moz-transform:scale(1);
	}

	100%{
		-moz-transform:scale(.3);
	}
}*/
</style>
<body>
	<div class="lk-one-screen"></div>
	<div class="wrapper">
		<div class="container">
			<a href="#" class="border-btn see-more">
				<div id="circularG">
					<div id="circularG_1" class="circularG"></div>
					<div id="circularG_2" class="circularG"></div>
					<div id="circularG_3" class="circularG"></div>
					<div id="circularG_4" class="circularG"></div>
				</div>
				показать еще</a>
		</div>
	</div>
</body>
</html>