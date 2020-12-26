@extends('master')
	@section('content')	
	
	@include('public.slide.slide_header')

        <!-- Start Team Area -->
        <section class="wn__team__area pt--40 pb--75 bg--white">
        	<div class="container">
        		<div class="row">
					<!-- Start Single Team -->
					@foreach ($list_admin as $item)										
        			<div class="col-lg-3">
        				<div class="wn__team text-center">
        					<div class="thumb">
        						<img src="/source_project/images/about/team/1.jpg" alt="Team images">
        					</div>
        					<div class="content">
							<h4>{{$item->full_name}}</h4>
        						<p>{{$item->level}}</p>
        						<ul class="team__social__net">
        							<li><a href="#"><i class="icon-social-twitter icons"></i></a></li>
        							<li><a href="#"><i class="icon-social-tumblr icons"></i></a></li>
        							<li><a href="#"><i class="icon-social-facebook icons"></i></a></li>
        							<li><a href="#"><i class="icon-social-linkedin icons"></i></a></li>
        							<li><a href="#"><i class="icon-social-pinterest icons"></i></a></li>
        						</ul>
        					</div>
        				</div>
					</div>
					@endforeach
        			<!-- End Single Team -->
        			<!-- Start Single Team -->
        		</div>
        	</div>
        </section>
        <!-- End Team Area -->
		@endsection
