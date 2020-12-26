@extends('master')	
	@section('content')
	@include('public.slide.slide_header')

	<div class="page-blog-details section-padding--lg bg--white">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 col-12">
						<div class="blog-details content">
							<article class="blog-post-details">
								<div class="post-thumbnail">
									<img src="/source_project/images/blog/big-img/1.jpg" alt="blog images">
								</div>
								<div class="post_wrapper">
									<div class="post_header">
										<h2>Blog image post</h2>
										<ul class="post_author">
											<li>Posts by : <a href="#">Hastech</a></li>
											<li class="post-separator">/</li>
											<li>Mar 10 2018</li>
										</ul>
									</div>
									<div class="post_content">
										<p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Crastoup pretium arcu ex. Aenean posuere libero eu augue rhoncus. Praesent ornare tortor ac ante egestas hendrerit. Aliquam et metus pharetra, bibendum massa nec, fermentum odio. Nunc id leo ultrices, mollis ligula in, finibus tortor. Mauris eu dui ut lectus fermentum eleifend. Pellentesque faucibus sem ante, non malesuada odio varius nec. Suspendisse potenti. Proin consectetur aliquam odio nec fringilla. Sed interdum at justo in efficitur. Vivamus gravida volutpat sodales. Fusce ornare sit amet ligula condimentum sagittis.</p>

										<blockquote>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur. In venenatis elit ac ultrices convallis. Duis est nisi, tincidunt ac urna sed, cursus blandit lectus. In ullamcorper sit amet ligula ut eleifend. Proin dictum tempor ligula, ac feugiat metus. Sed finibus tortor eu scelerisque scelerisque.</blockquote>

										<p>Aenean et tempor eros, vitae sollicitudin velit. Etiam varius enim nec quam tempor, sed efficitur ex ultrices. Phasellus pretium est vel dui vestibulum condimentum. Aenean nec suscipit nibh. Phasellus nec lacus id arcu facilisis elementum. Curabitur lobortis, elit ut elementum congue, erat ex bibendum odio, nec iaculis lacus sem non lorem. Duis suscipit metus ante, sed convallis quam posuere quis. Ut tincidunt eleifend odio, ac fringilla mi vehicula nec. Nunc vitae lacus eget lectus imperdiet tempus sed in dui. Nam molestie magna at risus consectetur, placerat suscipit justo dignissim. Sed vitae fringilla enim, nec ullamcorper arcu.</p>

										<p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim vitae lorem non mollis. Praesent pretium tellus in tortor viverra condimentum. Nullam dignissim facilisis nisl, accumsan placerat justo ultricies vel. Vivamus finibus mi a neque pretium, ut convallis dui lacinia. Morbi a rutrum velit. Curabitur sagittis quam quis consectetur mattis. Aenean sit amet quam vel turpis interdum sagittis et eget neque. Nunc ante quam, luctus et neque a, interdum iaculis metus. Aliquam vel ante mattis, placerat orci id, vehicula quam. Suspendisse quis eros cursus, viverra urna sed, commodo mauris. Cras diam arcu, fringilla a sem condimentum, viverra facilisis nunc. Curabitur vitae orci id nulla maximus maximus. Nunc pulvinar sollicitudin molestie.	</p>

									</div>
									<ul class="blog_meta">
										<li><a href="#">3 comments</a></li>
										<li> / </li>
										<li>Tags:<span>fashion</span> <span>t-shirt</span> <span>white</span></li>
									</ul>
									<ul class="social__net--4 d-flex justify-content-start">
										<li><a href="#"><i class="zmdi zmdi-rss"></i></a></li>
										<li><a href="#"><i class="zmdi zmdi-linkedin"></i></a></li>
										<li><a href="#"><i class="zmdi zmdi-vimeo"></i></a></li>
										<li><a href="#"><i class="zmdi zmdi-tumblr"></i></a></li>
										<li><a href="#"><i class="zmdi zmdi-google-plus"></i></a></li>
									</ul>
								</div>
							</article>
							<div class="comments_area">
								<h3 class="comment__title">1 comment</h3>
								<ul class="comment__list">
									<li>
										<div class="wn__comment">
											<div class="thumb">
												<img src="/source_project/images/blog/comment/1.jpeg" alt="comment images">
											</div>
											<div class="content">
												<div class="comnt__author d-block d-sm-flex">
													<span><a href="#">admin</a> Post author</span>
													<span>October 6, 2014 at 9:26 am</span>
													<div class="reply__btn">
														<a href="#">Reply</a>
													</div>
												</div>
												<p>Sed interdum at justo in efficitur. Vivamus gravida volutpat sodales. Fusce ornare sit</p>
											</div>
										</div>
									</li>
									<li class="comment_reply">
										<div class="wn__comment">
											<div class="thumb">
												<img src="/source_project/images/blog/comment/1.jpeg" alt="comment images">
											</div>
											<div class="content">
												<div class="comnt__author d-block d-sm-flex">
													<span><a href="#">admin</a> Post author</span>
													<span>October 6, 2014 at 9:26 am</span>
													<div class="reply__btn">
														<a href="#">Reply</a>
													</div>
												</div>
												<p>Sed interdum at justo in efficitur. Vivamus gravida volutpat sodales. Fusce ornare sit</p>
											</div>
										</div>
									</li>
									<li>
										<div class="wn__comment">
											<div class="thumb">
												<img src="/source_project/images/blog/comment/1.jpeg" alt="comment images">
											</div>
											<div class="content">
												<div class="comnt__author d-block d-sm-flex">
													<span><a href="#">admin</a> Post author</span>
													<span>October 6, 2014 at 9:26 am</span>
													<div class="reply__btn">
														<a href="#">Reply</a>
													</div>
												</div>
												<p>Sed interdum at justo in efficitur. Vivamus gravida volutpat sodales. Fusce ornare sit</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div class="comment_respond">
								<h3 class="reply_title">Leave a Reply <small><a href="#">Cancel reply</a></small></h3>
								<form class="comment__form" action="#">
									<p>Your email address will not be published.Required fields are marked </p>
									<div class="input__box">
										<label>Comment</label>
										<textarea name="comment"></textarea>
									</div>
									<div class="input__wrapper clearfix">
										<div class="input__box name one--third">
											<label>Name</label>
											<input type="text" placeholder="name">
										</div>
										<div class="input__box email one--third">
											<label>email</label>
											<input type="email" placeholder="email">
										</div>
										<div class="input__box website one--third">
											<label>Website</label>
											<input type="text" placeholder="website">
										</div>
									</div>
									<div class="submite__btn">
										<a href="#">Post Comment</a>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-12 md-mt-40 sm-mt-40">
						<div class="wn__sidebar">
							<!-- Start Single Widget -->
							<aside class="widget search_widget">
								<h3 class="widget-title">Search</h3>
								<form action="#">
									<div class="form-input">
										<input type="text" placeholder="Search...">
										<button><i class="fa fa-search"></i></button>
									</div>
								</form>
							</aside>
							<!-- End Single Widget -->
							<!-- Start Single Widget -->
							<aside class="widget recent_widget">
								<h3 class="widget-title">Recent</h3>
								<div class="recent-posts">
									<ul>
										<li>
											<div class="post-wrapper d-flex">
												<div class="thumb">
													<a href="blog-details.html"><img src="/source_project/images/blog/sm-img/1.jpg" alt="blog images"></a>
												</div>
												<div class="content">
													<h4><a href="blog-details.html">Blog image post</a></h4>
													<p>	March 10, 2015</p>
												</div>
											</div>
										</li>
										<li>
											<div class="post-wrapper d-flex">
												<div class="thumb">
													<a href="blog-details.html"><img src="/source_project/images/blog/sm-img/2.jpg" alt="blog images"></a>
												</div>
												<div class="content">
													<h4><a href="blog-details.html">Post with Gallery</a></h4>
													<p>	March 10, 2015</p>
												</div>
											</div>
										</li>
										<li>
											<div class="post-wrapper d-flex">
												<div class="thumb">
													<a href="blog-details.html"><img src="/source_project/images/blog/sm-img/3.jpg" alt="blog images"></a>
												</div>
												<div class="content">
													<h4><a href="blog-details.html">Post with Video</a></h4>
													<p>	March 10, 2015</p>
												</div>
											</div>
										</li>
										<li>
											<div class="post-wrapper d-flex">
												<div class="thumb">
													<a href="blog-details.html"><img src="/source_project/images/blog/sm-img/4.jpg" alt="blog images"></a>
												</div>
												<div class="content">
													<h4><a href="blog-details.html">Maecenas ultricies</a></h4>
													<p>	March 10, 2015</p>
												</div>
											</div>
										</li>
										<li>
											<div class="post-wrapper d-flex">
												<div class="thumb">
													<a href="blog-details.html"><img src="/source_project/images/blog/sm-img/5.jpg" alt="blog images"></a>
												</div>
												<div class="content">
													<h4><a href="blog-details.html">Blog image post</a></h4>
													<p>	March 10, 2015</p>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</aside>
							<!-- End Single Widget -->
							<!-- Start Single Widget -->
							<aside class="widget comment_widget">
								<h3 class="widget-title">Comments</h3>
								<ul>
									<li>
										<div class="post-wrapper">
											<div class="thumb">
												<img src="/source_project/images/blog/comment/1.jpeg" alt="Comment images">
											</div>
											<div class="content">
												<p>demo says:</p>
												<a href="#">Quisque semper nunc vitae...</a>
											</div>
										</div>
									</li>
									<li>
										<div class="post-wrapper">
											<div class="thumb">
												<img src="/source_project/images/blog/comment/1.jpeg" alt="Comment images">
											</div>
											<div class="content">
												<p>Admin says:</p>
												<a href="#">Curabitur aliquet pulvinar...</a>
											</div>
										</div>
									</li>
									<li>
										<div class="post-wrapper">
											<div class="thumb">
												<img src="/source_project/images/blog/comment/1.jpeg" alt="Comment images">
											</div>
											<div class="content">
												<p>Irin says:</p>
												<a href="#">Quisque semper nunc vitae...</a>
											</div>
										</div>
									</li>
									<li>
										<div class="post-wrapper">
											<div class="thumb">
												<img src="/source_project/images/blog/comment/1.jpeg" alt="Comment images">
											</div>
											<div class="content">
												<p>Boighor says:</p>
												<a href="#">Quisque semper nunc vitae...</a>
											</div>
										</div>
									</li>
									<li>
										<div class="post-wrapper">
											<div class="thumb">
												<img src="/source_project/images/blog/comment/1.jpeg" alt="Comment images">
											</div>
											<div class="content">
												<p>demo says:</p>
												<a href="#">Quisque semper nunc vitae...</a>
											</div>
										</div>
									</li>
								</ul>
							</aside>
							<!-- End Single Widget -->
							<!-- Start Single Widget -->
							<aside class="widget category_widget">
								<h3 class="widget-title">Categories</h3>
								<ul>
									<li><a href="#">Fashion</a></li>
									<li><a href="#">Creative</a></li>
									<li><a href="#">Electronics</a></li>
									<li><a href="#">Kids</a></li>
									<li><a href="#">Flower</a></li>
									<li><a href="#">Books</a></li>
									<li><a href="#">Jewelle</a></li>
								</ul>
							</aside>
							<!-- End Single Widget -->
							<!-- Start Single Widget -->
							<aside class="widget archives_widget">
								<h3 class="widget-title">Archives</h3>
								<ul>
									<li><a href="#">March 2015</a></li>
									<li><a href="#">December 2014</a></li>
									<li><a href="#">November 2014</a></li>
									<li><a href="#">September 2014</a></li>
									<li><a href="#">August 2014</a></li>
								</ul>
							</aside>
							<!-- End Single Widget -->
						</div>
					</div>
				</div>
			</div>
		</div>
		@endsection

		