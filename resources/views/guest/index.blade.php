@extends('layouts.main')

@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active" style="background-image: url(https://i.redd.it/q18vfzjgb5f21.jpg);background-position: center; ">
    	<div class="carousel-caption d-none d-md-block">
	    	<h5>სათაური</h5>
	    	<p>cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	    	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	    	proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
	  	</div>
    </div>
    <div class="carousel-item" style="background-image: url(https://wallpaperhd.wiki/wp-content/uploads/wallpapers-1920x1080-1014033.jpg);background-position: center;">
    	<div class="carousel-caption d-none d-md-block">
	    	<h5>სათაური</h5>
	    	<p>cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	    	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	  	</div>
    </div>
    <div class="carousel-item" style="background-image: url(https://i.pinimg.com/originals/86/ff/b8/86ffb87572d657f335cd7cd828c70de3.jpg);background-position: center; ">
    	<div class="carousel-caption d-none d-md-block">
	    	<h5>სათაური</h5>
	    	<p>cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	    	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	  	</div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
@include("inc.vue.search")
<div class="container text-light mt-4 ">
	<div class="row justify-content-between">
		<div>
			<h4>ტოპ ფილმები</h4>
		</div>
	</div>
	<br>
	
	<div class="row">
		
		<div class="flip col-md-3">
		    <div class="front" style="background-image: url(https://images.pexels.com/photos/540518/pexels-photo-540518.jpeg?w=1260&h=750&dpr=2&auto=compress&cs=tinysrgb)">
		       <span class="text-shadow">Lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
		    </div>
		    <div class="back">
		       <h5>Angular</h5>
		       <p>Good tools make application development quicker and easier to maintain than if you did everything by hand..</p>
		    </div>
		</div>
		<div class="flip col-md-3">
		    <div class="front" style="background-image: url(https://images.pexels.com/photos/414171/pexels-photo-414171.jpeg?w=1260&h=750&dpr=2&auto=compress&cs=tinysrgb)">
		       <span class="text-shadow">proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
		    </div>
		    <div class="back">
		       <h5>proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h5>
		       	<p>
		       		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		       		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		       	</p>
		    </div>
		</div>
		<div class="flip col-md-3">
		    <div class="front" style="background-image: url(https://images.pexels.com/photos/36717/amazing-animal-beautiful-beautifull.jpg?w=1260&h=750&dpr=2&auto=compress&cs=tinysrgb)">
		       <span class="text-shadow">quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</span>
		    </div>
		    <div class="back">
		       <h5>quis nostrud exercitation ullamco laboris nisi ut</h5>
		       <p> quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		       consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		       cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</p>
		    </div>
		</div>
		<div class="flip col-md-3">
		    <div class="front" style="background-image: url(https://images.pexels.com/photos/36717/amazing-animal-beautiful-beautifull.jpg?w=1260&h=750&dpr=2&auto=compress&cs=tinysrgb)">
		       <span class="text-shadow">quis nostrud exercitation ullamco laboris nisi ut</span>
		    </div>
		    <div class="back">
		       <h5>quis nostrud exercitation ullamco laboris nisi ut</h5>
		       <p>Good tools make application development quicker and easier to maintain than if you did everything by hand..</p>
		    </div>
		</div>

	</div>
</div>
<div class="container text-light mt-4 ">
	<div class="row justify-content-between">
		<div>
			<h4>ტოპ ფილმები</h4>
		</div>
	</div>
	<br>
	<div class="row">
		
		<div class="flip col-md-3">
		    <div class="front" style="background-image: url(https://images.pexels.com/photos/540518/pexels-photo-540518.jpeg?w=1260&h=750&dpr=2&auto=compress&cs=tinysrgb)">
		       <span class="text-shadow">Lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
		    </div>
		    <div class="back">
		       <h5>Angular</h5>
		       <p>Good tools make application development quicker and easier to maintain than if you did everything by hand..</p>
		    </div>
		</div>
		<div class="flip col-md-3">
		    <div class="front" style="background-image: url(https://images.pexels.com/photos/414171/pexels-photo-414171.jpeg?w=1260&h=750&dpr=2&auto=compress&cs=tinysrgb)">
		       <span class="text-shadow">proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
		    </div>
		    <div class="back">
		       <h5>proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h5>
		       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		       tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		      
		       </p>
		    </div>
		</div>
		<div class="flip col-md-3">
		    <div class="front" style="background-image: url(https://images.pexels.com/photos/36717/amazing-animal-beautiful-beautifull.jpg?w=1260&h=750&dpr=2&auto=compress&cs=tinysrgb)">
		       <span class="text-shadow">quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</span>
		    </div>
		    <div class="back">
		       <h5>quis nostrud exercitation ullamco laboris nisi ut</h5>
		       <p> quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		       consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		       cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</p>
		    </div>
		</div>
		<div class="flip col-md-3">
		    <div class="front" style="background-image: url(https://images.pexels.com/photos/36717/amazing-animal-beautiful-beautifull.jpg?w=1260&h=750&dpr=2&auto=compress&cs=tinysrgb)">
		       <span class="text-shadow">quis nostrud exercitation ullamco laboris nisi ut</span>
		    </div>
		    <div class="back">
		       <h5>quis nostrud exercitation ullamco laboris nisi ut</h5>
		       <p>Good tools make application development quicker and easier to maintain than if you did everything by hand..</p>
		    </div>
		</div>

	</div>
</div>
@endsection

@section("js")
<script type="text/javascript">
	
	
	$('body').click(function(evt){    
		if($("#searchresult").hasClass("d-flex")){
	       	if(evt.target.id == "searchresult" || evt.target.id=="search"){
	          console.log("1")
	       	}
	       	else{
				$(".searchresult").removeClass("d-flex");
	       	}            
		}
	});
	$("#search").focus(function(){
		$(".searchresult").addClass("d-flex");
	});

</script>
@endsection