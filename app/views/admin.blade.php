@include('__partials/doc')
    {{ HTML::style('__public/css/public.css') }}
    {{ HTML::style('__public/css/main.css') }}
    {{ HTML::style('__public/css/style.css') }}	 
    {{ HTML::style('__public/font-awesome-4.2.0/css/font-awesome.css') }}   
    {{ HTML::style('__public/css/octions/octicons.css') }}   
</head>
<body>
	<div class="wrapper">
		<header class="main-header">			
      <div class="fixheda">
        <div class="userheda fixheda_style">
          <div class="hedacont">
            @yield('header')
          </div>
          @include('__partials.sub-menu')
        </div>
      </div>
		</header>
		<section>
			@yield('content')
		</section>	
		<footer class="clearfix">
			@yield('footer')
		</footer>	

{{HTML::script('__public/js/jquery-1.9.1.js')}}
{{HTML::script('__public/js/bootstrap.js')}}
{{HTML::script('__public/js/bootstrap-tooltip.js')}}
{{HTML::script('__public/js/bootstrap-popover.js')}}
{{HTML::script('__public/js/bootstrap-alert.js')}}
{{HTML::script('__public/js/bootstrap-button.js')}}
{{HTML::script('__public/js/accordion.js')}}
{{HTML::script('__public/js/handlebars-v1.3.0.js')}}
{{HTML::script('__public/js/complete.js')}}
{{HTML::script('__public/js/realestate.js')}}
{{HTML::script('__public/js/imsky-holder-7978550/holder.js')}}
<script type="text/javascript">

  $('.tipify').tooltip();
  $(".alert").alert();
  $('.pressed').on('click',function(){
   $(this)
    .text($(this).data('loading-text'))
  });

  (function($){
  	$("#menu").on('click',function(){

    var $this = this;
	
    var $lefty = $( ".sidebar" ).show();   
    $lefty.animate({

      left: parseInt($lefty.css('left'),10) == 0 ? -$lefty.outerWidth() : 0

    },{
        duration: 330,
        complete: function(e){

            var here = this;
            $('html').click(function(){
            if ( parseInt($(here).css("left")) === 0 ) {
                $(here).animate({
                    left: parseInt($lefty.css('left'),10) == 0 ? -$lefty.outerWidth() : 0
                });        
            };
            });
            $(this).click(function(e){
                e.stopPropagation();
            });
               
        }
    });

  	});
  	$('#checker').popover();
  	$('#checker').on('click', function(){
  		$("#studentChecker").slideToggle(258);
  	});
    $(window).scroll(function(){
      if ($(this).scrollTop() > 40) {
        // console.log($(this).scrollTop())
      $('div#scope').addClass('scope');
      $('#thmb').css('float','right');
// $( "#thmb" ).animate({ "left": "-=50px" }, "slow" );
      }else{
      $('div#scope').removeClass('scope');
      $('#thmb').css('float','left');
      }
    });
    $('.cancel').on('click',function(e){
      var cid = $(this).data('containerid');
     $('#'+cid).slideUp(200);
      e.preventDefault();
    });
  })(jQuery);
 </script>
 <script>
    $('#flash-overlay-modal').modal();
</script>
</body>