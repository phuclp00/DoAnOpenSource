﻿@extends('master')
	@section('content')
	@include('public.slide.slide_header')
		<!-- Start Error Area -->
		<section class="page_error section-padding--lg bg--white">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="error__inner text-center">
							<div class="error__logo">
								<a href="#"><img src="source_project/images/others/404.png" alt="error images"></a>
							</div>
							<div class="error__content">
								<h2>error - not found</h2>
								<p>It looks like you are lost! Try searching here</p>
								<div class="search_form_wrapper">
									<form action="#">
										<div class="form__box">
											<input type="text" placeholder="Search...">
											<button><i class="fa fa-search"></i></button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Error Area -->
	@endsection

		