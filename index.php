<html>
  <head>
  <title>Slider with thumbnails</title>
  <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
  </head>
  <body>
  
  <style type="text/css">
  	.wrapper{
		width:100%;	
	}
	.slider-for{
		width:60%;	
		float:left;
	}
	.slider-nav{
		width:40%;
		float:left;	
	}
	.slider-nav img{
		width:72px;
		height:72px;	
	}
  </style>
  
  <section class="wrapper">
  
      <div class="slider-for">
        <div><img src="img/i1.jpg">your content 1</div>
        <div><img src="img/i2.jpg">your content 2</div>
        <div><img src="img/i3.jpg">your content 3</div>
        <div><img src="img/i4.jpg">your content 4</div>
        <div><img src="img/i5.jpg">your content 5</div>
      </div>
      
      <div class="slider-nav">
        <div><img src="img/i1.jpg"></div>
        <div><img src="img/i2.jpg"></div>
        <div><img src="img/i3.jpg"></div>
        <div><img src="img/i4.jpg"></div>
        <div><img src="img/i5.jpg"></div>
      </div>
      
      
      
  </section>

  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="slick/slick.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      $('.slider-for').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		asNavFor: '.slider-nav'
	  });
	  $('.slider-nav').slick({
		slidesToShow: 3,
		slidesToScroll: 0,
		asNavFor: '.slider-for',
		dots: true,
		centerMode: true,
		focusOnSelect: true
	  });
    });
  </script>

  </body>
</html>	