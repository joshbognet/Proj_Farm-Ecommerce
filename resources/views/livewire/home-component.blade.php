<div>
	<div id="content" class="site-content">
		
		{{-- <div class="section slideshow">
			<div class="container">
				<div class="tiva-slideshow-wrapper">
						
					<div id="tiva-slideshow" class="nivoSlider">
						@foreach ($sliders as $slide)
			
						<a href="#">
							<img class="img-responsive" src="{{ asset('img/slideshow') }}/{{$slide->image}}" alt="Slideshow Image">
						</a>
						@endforeach
					</div>
				
				</div>
			</div>
		</div>
		 --}}
		<div class="wrap-main-slide">
			<div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true" data-dots="false">               
				@foreach ($sliders as $slide)
					<div class="item-slide">
						<img src="{{ asset('img/slideshow') }}/{{$slide->image}}" alt="" class="img-slide">
						{{-- <div class="slide-info slide-1">
							<h2 class="f-title"><b>{{$slide->title}}</b></h2>
							<span class="subtitle">{{$slide->subtitle}}</span>
							<p class="sale-info">Only price: <span class="price">${{$slide->price}}</span></p>
							<a href="{{$slide->link}}" class="btn-link">Shop Now</a>
						</div>	 --}}
					</div>
				@endforeach
			</div>
		</div> 
			
		<!-- Banners -->
		 <div class="section banners"> 
			<div class="container">
				<div class="row margin-10">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 padding-10">
						<div class="banner-item effect">
							<a href="#">
								<img class="img-responsive" src="{{asset('img/banner/home2-banner-1.png')}}" alt="Banner 1">
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 padding-10">
						<div class="banner-item effect">
							<a href="#">
								<img class="img-responsive" src="{{asset('img/banner/home2-banner-2.png')}}" alt="Banner 2">
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 padding-10">
						<div class="banner-item effect">
							<a href="#">
								<img class="img-responsive" src="{{asset('img/banner/home2-banner-3.png')}}" alt="Banner 3">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
			<div class="section latest-news layout-2 ">
			{{-- <div class="block-title">
				<h2 class="title">Our <span>Blog</span></h2>
				<div class="sub-title">Lorem ipsum dolor sit amet consectetur</div>
			</div> --}}
			
			{{-- <div class="block-content">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<div class="blog-item">
								<div class="blog-image">
									<a href="blog-detail.html" class="zoom-effect">
										<img src="img/blog/blog-1.jpg" alt="Blog Image">
									</a>		
								</div>
								<div class="blog-info">
									<div class="blog-time">
										<span><i class="zmdi zmdi-comments"></i>13 comment</span>
										<span><i class="zmdi zmdi-calendar-note"></i>20 APRIl 2017</span>
									</div>
									<div class="blog-title"><a href="blog-detail.html">5 Best fruits to make you fresh and healthy</a></div>
									<div class="blog-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy...</div>
									<div class="readmore"><a href="blog-detail.html">Read more</a></div>
								</div>
							</div>
						</div>
						
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<div class="blog-item">
								<div class="blog-image">
									<a href="blog-detail.html" class="zoom-effect">
										<img src="img/blog/blog-2.jpg" alt="Blog Image">
									</a>
								</div>
								<div class="blog-info">
									<div class="blog-time">
										<span><i class="zmdi zmdi-comments"></i>13 comment</span>
										<span><i class="zmdi zmdi-calendar-note"></i>20 APRIl 2017</span>
									</div>
									<div class="blog-title"><a href="blog-detail.html">5 Best fruits to make you fresh and healthy</a></div>
									<div class="blog-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy...</div>
									<div class="readmore"><a href="blog-detail.html">Read more</a></div>
								</div>
							</div>
						</div>
						
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<div class="blog-item">
								<div class="blog-image">
									<a href="blog-detail.html" class="zoom-effect">
										<img src="img/blog/blog-3.jpg" alt="Blog Image">
									</a>
								</div>
								<div class="blog-info">
									<div class="blog-time">
										<span><i class="zmdi zmdi-comments"></i>13 comment</span>
										<span><i class="zmdi zmdi-calendar-note"></i>20 APRIl 2017</span>
									</div>
									<div class="blog-title"><a href="blog-detail.html">5 Best fruits to make you fresh and healthy</a></div>
									<div class="blog-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy...</div>
									<div class="readmore"><a href="blog-detail.html">Read more</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> --}}
			
			
		</div>
		<!-- 2 Columns -->
		<div class="two-columns">
			<div class="container">
				<div class="row ">
					<!-- Left Column -->
					<div class="col-20p col-md-3 left-column">
						<!-- Product - Category -->
						<div class="section product-categories">
							<div class="block-title">
								<h2 class="title">Categories</h2>
							</div>
							
							<div class="block-content">
								{{-- <div class="item">
									<span class="arrow collapsed" data-toggle="collapse" data-target="#vegetables" aria-expanded="false" role="button">
										<i class="fa fa-angle-down" aria-hidden="true"></i>
										<i class="fa fa-angle-right" aria-hidden="true"></i>
									</span>
									
									<a class="category-title" href="product-grid-left-sidebar.html">Vegetables</a>
									<div class="sub-category collapse" id="vegetables" aria-expanded="true" role="main">
										<div class="item">
											<a href="product-grid-left-sidebar.html">Tomato</a>
										</div>
										<div class="item">
											<a href="product-grid-left-sidebar.html">Broccoli</a>
										</div>
										<div class="item">
											<a href="product-grid-left-sidebar.html">Cabbage</a>
										</div>
										<div class="item">
											<a href="product-grid-left-sidebar.html">Cucumber</a>
										</div>
									</div>
								</div>
								
								<div class="item">
									<span class="arrow collapsed" data-toggle="collapse" data-target="#fruits" aria-expanded="false" role="button">
										<i class="fa fa-angle-down" aria-hidden="true"></i>
										<i class="fa fa-angle-right" aria-hidden="true"></i>
									</span>
									
									<a class="category-title" href="product-grid-left-sidebar.html">Fruits</a>
									<div class="sub-category collapse" id="fruits" aria-expanded="true" role="main">
										<div class="item">
											<a href="product-grid-left-sidebar.html">Orange</a>
										</div>
										<div class="item">
											<a href="product-grid-left-sidebar.html">Apple</a>
										</div>
										<div class="item">
											<a href="product-grid-left-sidebar.html">Banana</a>
										</div>
										<div class="item">
											<a href="product-grid-left-sidebar.html">Strawberry</a>
										</div>
									</div>
								</div>
								
								<div class="item">
									<span class="arrow collapsed" data-toggle="collapse" data-target="#juices" aria-expanded="false" role="button">
										<i class="fa fa-angle-down" aria-hidden="true"></i>
										<i class="fa fa-angle-right" aria-hidden="true"></i>
									</span>
									
									<a class="category-title" href="product-grid-left-sidebar.html">Juices</a>
									<div class="sub-category collapse" id="juices" aria-expanded="true" role="main">
										<div class="item">
											<a href="product-grid-left-sidebar.html">Orange Juices</a>
										</div>
										<div class="item">
											<a href="product-grid-left-sidebar.html">Tomato Juices</a>
										</div>
										<div class="item">
											<a href="product-grid-left-sidebar.html">Apple Juices</a>
										</div>
										<div class="item">
											<a href="product-grid-left-sidebar.html">Peaches Juices</a>
										</div>
									</div>
								</div>
								
								<div class="item">
									<a class="category-title" href="product-grid-left-sidebar.html">Tea and Coffee</a>
								</div>
								
								<div class="item">
									<a class="category-title" href="product-grid-left-sidebar.html">Jam</a>
								</div>
								
								<div class="item">
									<a class="category-title" href="product-grid-left-sidebar.html">SeaFood</a>
								</div> --}}
								
								@foreach( $hcategories as $hcategory )                              
									<div class="item">
										<a class="category-title" href="{{route('product.category',['category_slug'=>$hcategory->slug])}}">{{ $hcategory->name }}</a>
									</div> 
								@endforeach 
							</div>
						</div>
						
						
						<!-- Product - Flash Deals -->
						@if($sproducts->count() > 0 && $sale->status == 1 && $sale->sale_date > Carbon\Carbon::now())
							<div class="section products-block nav-color flash-deals layout-4">
								<div class="block-title">
									<h2 class="title">Flash Deals</h2>
								</div>
								
								<div class="block-content">
									<div class="products owl-theme owl-carousel">
										@foreach ($sproducts as $sproduct)
											<div class="product-item">
												<div class="product-image">
													<a href="{{ route('product.details',['slug'=>$sproduct->slug])}}">
														<img src="{{asset('img/product')}}/{{ $sproduct->image }}" alt="{{  $sproduct->name }}">
													</a>
												</div>
												
												<div class="product-countdown" data-date="{{ Carbon\Carbon::parse($sale->sale_date)->format('Y/m/d h:m:s') }}">
												</div>
												
												<div class="product-title">
													<a href="{{ route('product.details',['slug'=>$sproduct->slug])}}">
														{{ $sproduct->name }}
													</a>
												</div>
												
												<div class="product-rating">
													<div class="star on"></div>
													<div class="star on"></div>
													<div class="star on "></div>
													<div class="star on"></div>
													<div class="star"></div>
												</div>
												
												<div class="product-price">
													<span class="sale-price">=N={{ $sproduct->sale_price}}</span>
													<span class="base-price">=N={{  $sproduct->regular_price}}</span>
												</div>
												
												<div class="product-buttons">
													<a class="add-to-cart" href="#">
														<i class="fa fa-shopping-basket" aria-hidden="true"></i>
													</a>
													
													<a class="add-wishlist" href="#">
														<i class="fa fa-heart" aria-hidden="true"></i>												
													</a>
													
													<a class="quickview" href="{{ route('product.details',['slug'=>$sproduct->slug])}}">
														<i class="fa fa-eye" aria-hidden="true"></i>
													</a>
												</div>
											</div>
										@endforeach
										
										{{-- <div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="{{asset('img/product/prod_18.jpg')}}" alt="Product Image">
												</a>
											</div>
											
											<div class="product-countdown" data-date="2018/12/18">
											</div>
											
											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>
											
											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>
											
											<div class="product-price">
												<span class="sale-price">&#8358;80.00</span>
												<span class="base-price">&#8358;90.00</span>
											</div>
											
											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>
												
												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>												
												</a>
												
												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div> --}}
									</div>
								</div>
							</div>
						@endif
						
						<!-- Payment Intro -->
						<div class="section payment-intro">
							<div class="block-content">
								<div class="item">
									<img class="img-responsive" src="{{asset('img/home2-payment-1.png')}}" alt="Payment Intro">
									<h3 class="title">Free Shipping item</h3>
									<div class="content">Proin gravida nibh vel velit auctor aliquet aenean</div>
								</div>
								<div class="item">
									<img class="img-responsive" src="{{asset('img/home2-payment-2.png')}}" alt="Payment Intro">
									<h3 class="title">Secured Payment</h3>
									<div class="content">Proin gravida nibh vel velit auctor aliquet aenean</div>
								</div>
								<div class="item">
									<img class="img-responsive" src="{{asset('img/home2-payment-3.png')}}" alt="Payment Intro">
									<h3 class="title">money back guarantee</h3>
									<div class="content">Proin gravida nibh vel velit auctor aliquet aenean</div>
								</div>
							</div>
						</div>
						
						
						<!-- Testimonial -->
						<div class="section testimonial">
							<div class="block-title">
								<h2 class="title">Testimonial</h2>
							</div>
							
							<div class="block-content">
								<div class="testimonial-wrap owl-theme owl-carousel">
									<div class="item">
										<div class="image"><img src="{{asset('img/testimonial-1.png')}}" alt=""></div>
										<div class="content">???Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis bibendum auctor, nisi elit consequat ipsum.???</div>
										<div class="name">WILLIAM JAMES</div>
										<div class="job">Hairstyle</div>
									</div>
									
									<div class="item">
										<div class="image"><img src="{{asset('img/testimonial-2.png')}}" alt=""></div>
										<div class="content">???Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis bibendum auctor, nisi elit consequat ipsum.???</div>
										<div class="name">WILLIAM JAMES</div>
										<div class="job">Hairstyle</div>
									</div>
									
									<div class="item">
										<div class="image"><img src="{{asset('img/testimonial-3.png')}}" alt=""></div>
										<div class="content">???Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis bibendum auctor, nisi elit consequat ipsum.???</div>
										<div class="name">WILLIAM JAMES</div>
										<div class="job">Hairstyle</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
						
					<!-- Right Column -->
					<div class="col-80p col-md-9 right-column">
						<!-- Product - Category Tab -->
						<div class="section products-block category-tab">
							<div class="block-title">
								<h2 class="title">Categories</h2>
							</div>

							<div class="block-content">
								<div class="tab-nav ">
									<ul>
										@foreach ($categories as $key=>$category)
											<li class="{{$key==0 ? 'active':''}}">
												<a data-toggle="tab" href="#category_{{$category->id}}" 
												class= "{{$key==0 ? 'active':''}}">{{$category->name}}</a>
											</li>
										@endforeach 
									</ul>
								</div>
								
								
								<div class="tab-content">
									@foreach ($categories as $key=>$category)
										<div role="tabpanel" class="tab-pane fade in {{$key==0 ? 'active':''}}" id="category_{{$category->id}}">
											<div class="products owl-theme owl-carousel">
													@php
													$c_products = DB::table('products')->where('category_id',$category->id)->get()->take($no_of_products);
													@endphp
														@foreach ($c_products as $c_product)
															<div class="product-item">
																<div class="product-image">
																	<a href="{{route('product.details',['slug'=>$c_product->slug])}}" title="{{$c_product->name}}">
																		<img src="{{asset('img/product')}}/{{$c_product->image}}" alt="Product Image">
																	</a>
																</div>
																
																<div class="product-title">
																	<a href="{{route('product.details',['slug'=>$c_product->slug])}}">
																		{{$c_product->name}}
																	</a>
																</div>
																
																<div class="product-rating">
																	<div class="star on"></div>
																	<div class="star on"></div>
																	<div class="star on "></div>
																	<div class="star on"></div>
																	<div class="star"></div>
																</div>
																
																<div class="product-price">
																	<span class="sale-price">&#8358;{{$c_product->regular_price}}</span>
																	{{-- <span class="base-price">&#8358;90.00</span> --}}
																</div>
																
																<div class="product-buttons">
																	<a class="add-to-cart" href="#">
																		<i class="fa fa-shopping-basket" aria-hidden="true"></i>
																	</a>
																	
																	<a class="add-wishlist" href="#">
																		<i class="fa fa-heart" aria-hidden="true"></i>												
																	</a>
																	
																	<a class="quickview" href="{{route('product.details',['slug'=>$c_product->slug])}}">
																		<i class="fa fa-eye" aria-hidden="true"></i>
																	</a>
																</div>
															</div>
														@endforeach
											</div>
										</div>
									@endforeach	
								</div>
							</div>
						</div>
						
			
						
						<!-- Newsletter -->
						<div class="section newsletter">
							<h2 class="block-title">Newsletter</h2>
							
							<div class="block-content">
								<p class="description">Sign up for newsletter to receive special offers and exclusive news about FreshMart products</p>
								<form action="#" method="post">
									<input type="text" placeholder="Enter Your Email">
									<button type="submit" class="btn btn-primary">Subscribe</button>
								</form>
							</div>
						</div>
						
						
						<!-- Product - Category Double -->
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="section products-block category-double">
									<div class="block-title">
										<h2 class="title">Fruits</h2>
									</div>
									
									<div class="block-content">
										<div class="products owl-theme owl-carousel">
											<div class="product-item">
												<div class="product-image">
													<a href="product-detail-left-sidebar.html">
														<img src="{{asset('img/product/prod_4.jpg')}}" alt="Product Image">
													</a>
												</div>
												
												<div class="product-title">
													<a href="product-detail-left-sidebar.html">
														Organic Strawberry Fruits
													</a>
												</div>
												
												<div class="product-rating">
													<div class="star on"></div>
													<div class="star on"></div>
													<div class="star on "></div>
													<div class="star on"></div>
													<div class="star"></div>
												</div>
												
												<div class="product-price">
													<span class="sale-price">&#8358;80.00</span>
													<span class="base-price">&#8358;90.00</span>
												</div>
												
												<div class="product-buttons">
													<a class="add-to-cart" href="#">
														<i class="fa fa-shopping-basket" aria-hidden="true"></i>
													</a>
													
													<a class="add-wishlist" href="#">
														<i class="fa fa-heart" aria-hidden="true"></i>												
													</a>
													
													<a class="quickview" href="#">
														<i class="fa fa-eye" aria-hidden="true"></i>
													</a>
												</div>
											</div>
											
											<div class="product-item">
												<div class="product-image">
													<a href="product-detail-left-sidebar.html">
														<img src="{{asset('img/product/prod_8.jpg')}}" alt="Product Image">
													</a>
												</div>
												
												<div class="product-title">
													<a href="product-detail-left-sidebar.html">
														Organic Strawberry Fruits
													</a>
												</div>
												
												<div class="product-rating">
													<div class="star on"></div>
													<div class="star on"></div>
													<div class="star on "></div>
													<div class="star on"></div>
													<div class="star"></div>
												</div>
												
												<div class="product-price">
													<span class="sale-price">&#8358;120.00</span>
												</div>
												
												<div class="product-buttons">
													<a class="add-to-cart" href="#">
														<i class="fa fa-shopping-basket" aria-hidden="true"></i>
													</a>
													
													<a class="add-wishlist" href="#">
														<i class="fa fa-heart" aria-hidden="true"></i>												
													</a>
													
													<a class="quickview" href="#">
														<i class="fa fa-eye" aria-hidden="true"></i>
													</a>
												</div>
											</div>
											
											<div class="product-item">
												<div class="product-image">
													<a href="product-detail-left-sidebar.html">
														<img src="{{asset('img/product/prod_2.jpg')}}" alt="Product Image">
													</a>
												</div>
												
												<div class="product-title">
													<a href="product-detail-left-sidebar.html">
														Organic Strawberry Fruits
													</a>
												</div>
												
												<div class="product-rating">
													<div class="star on"></div>
													<div class="star on"></div>
													<div class="star on "></div>
													<div class="star on"></div>
													<div class="star"></div>
												</div>
												
												<div class="product-price">
													<span class="sale-price">&#8358;80.00</span>
													<span class="base-price">&#8358;90.00</span>
												</div>
												
												<div class="product-buttons">
													<a class="add-to-cart" href="#">
														<i class="fa fa-shopping-basket" aria-hidden="true"></i>
													</a>
													
													<a class="add-wishlist" href="#">
														<i class="fa fa-heart" aria-hidden="true"></i>												
													</a>
													
													<a class="quickview" href="#">
														<i class="fa fa-eye" aria-hidden="true"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="section products-block category-double">
									<div class="block-title">
										<h2 class="title">Juices</h2>
									</div>
									
									<div class="block-content">
										<div class="products owl-theme owl-carousel">
											<div class="product-item">
												<div class="product-image">
													<a href="product-detail-left-sidebar.html">
														<img src="{{asset('img/product/prod_16.jpg')}}" alt="Product Image">
													</a>
												</div>
												
												<div class="product-title">
													<a href="product-detail-left-sidebar.html">
														Organic Strawberry Fruits
													</a>
												</div>
												
												<div class="product-rating">
													<div class="star on"></div>
													<div class="star on"></div>
													<div class="star on "></div>
													<div class="star on"></div>
													<div class="star"></div>
												</div>
												
												<div class="product-price">
													<span class="sale-price">&#8358;80.00</span>
													<span class="base-price">&#8358;90.00</span>
												</div>
												
												<div class="product-buttons">
													<a class="add-to-cart" href="#">
														<i class="fa fa-shopping-basket" aria-hidden="true"></i>
													</a>
													
													<a class="add-wishlist" href="#">
														<i class="fa fa-heart" aria-hidden="true"></i>												
													</a>
													
													<a class="quickview" href="#">
														<i class="fa fa-eye" aria-hidden="true"></i>
													</a>
												</div>
											</div>
											
											<div class="product-item">
												<div class="product-image">
													<a href="product-detail-left-sidebar.html">
														<img src="{{asset('img/product/prod_13.jpg')}}" alt="Product Image">
													</a>
												</div>
												
												<div class="product-title">
													<a href="product-detail-left-sidebar.html">
														Organic Strawberry Fruits
													</a>
												</div>
												
												<div class="product-rating">
													<div class="star on"></div>
													<div class="star on"></div>
													<div class="star on "></div>
													<div class="star on"></div>
													<div class="star"></div>
												</div>
												
												<div class="product-price">
													<span class="sale-price">=N=120.00</span>
												</div>
												
												<div class="product-buttons">
													<a class="add-to-cart" href="#">
														<i class="fa fa-shopping-basket" aria-hidden="true"></i>
													</a>
													
													<a class="add-wishlist" href="#">
														<i class="fa fa-heart" aria-hidden="true"></i>												
													</a>
													
													<a class="quickview" href="#">
														<i class="fa fa-eye" aria-hidden="true"></i>
													</a>
												</div>
											</div>
											
											<div class="product-item">
												<div class="product-image">
													<a href="product-detail-left-sidebar.html">
														<img src="{{asset('img/product/prod_28.jpg')}}" alt="Product Image">
													</a>
												</div>
												
												<div class="product-title">
													<a href="product-detail-left-sidebar.html">
														Organic Strawberry Fruits
													</a>
												</div>
												
												<div class="product-rating">
													<div class="star on"></div>
													<div class="star on"></div>
													<div class="star on "></div>
													<div class="star on"></div>
													<div class="star"></div>
												</div>
												
												<div class="product-price">
													<span class="sale-price">=N=80.00</span>
													<span class="base-price">=N=90.00</span>
												</div>
												
												<div class="product-buttons">
													<a class="add-to-cart" href="#">
														<i class="fa fa-shopping-basket" aria-hidden="true"></i>
													</a>
													
													<a class="add-wishlist" href="#">
														<i class="fa fa-heart" aria-hidden="true"></i>												
													</a>
													
													<a class="quickview" href="#">
														<i class="fa fa-eye" aria-hidden="true"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						
						<!-- Banners -->
						<div class="section banners-block">
							<div class="row margin-15">
								<div class="col-lg-6 col-md-6 col-sm-6 padding-15">
									<div class="banner-item effect">
										<a href="#">
											<img class="img-responsive" src="{{asset('img/banner/home2-banner-4.png')}}" alt="Banner">
										</a>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 padding-15">
									<div class="banner-item effect">
										<a href="#">
											<img class="img-responsive" src="{{asset('img/banner/home2-banner-5.png')}}" alt="Banner">
										</a>
									</div>
								</div>
							</div>
						</div>
						
						
						<!-- Product - New Arrivals -->
						<div class="section products-block new-arrivals layout-3">
							<div class="block-title">
								<h2 class="title">New <span>Arrivals</span></h2>
							</div>
							
							<div class="block-content">
								<div class="products owl-theme owl-carousel">
									@foreach ($lproducts as $lproduct )
									<div class="item">
										
										<div class="product-item">
											<div class="product-image">
												<a href="{{route('product.details',['slug'=>$lproduct->slug])}}">
													<img src="{{asset('img/product')}}/{{ $lproduct->image }}" title="{{ $lproduct->name }}">
												</a>
											</div>
											
											<div class="product-info">
												<div class="product-title">
													<a href="{{route('product.details',['slug'=>$lproduct->slug])}}">
														{{$lproduct->name}}
													</a>
												</div>
												
												<div class="product-rating">
													<div class="star on"></div>
													<div class="star on"></div>
													<div class="star on "></div>
													<div class="star on"></div>
													<div class="star"></div>
												</div>
												
												<div class="product-price">
													<span class="sale-price">=N={{$lproduct->regular_price}}</span>
													{{-- <span class="base-price">=N=55.00</span> --}}
												</div>
												
												<div class="product-buttons">
													<a class="add-to-cart" href="#">
														<i class="fa fa-shopping-basket" aria-hidden="true"></i>
													</a>
													
													<a class="add-wishlist" href="#">
														<i class="fa fa-heart" aria-hidden="true"></i>												
													</a>
													
													<a class="quickview" href="{{route('product.details',['slug'=>$lproduct->slug])}}">
														<i class="fa fa-eye" aria-hidden="true"></i>
													</a>
												</div>
											</div>
										</div>
										
										
									</div>	
									
									
									
									
									@endforeach 
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		<!-- Intro -->
		<div class="section intro">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="intro-header">
							<img src="{{asset('img/leaf.png')}}" alt="Partner 1">
							<h3>Why Choose Us</h3>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<div class="intro-left">
							<div class="intro-item">
								<p><img src="{{asset('img/intro-icon-1.png')}}" alt="Intro Image"></p>
								<h4>Always Fresh</h4>
								<p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
							
							<div class="intro-item">
								<p><img src="{{asset('img/intro-icon-2.png')}}" alt="Intro Image"></p>
								<h4>Super Healthy</h4>
								<p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
					</div>
					
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="effect">
							<a href="#">
								<img class="intro-image img-responsive" src="{{asset('img/intro-2.png')}}" alt="Intro Image">
							</a>
						</div>
					</div>
					
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<div class="intro-right">
							<div class="intro-item">
								<p><img src="{{asset('img/intro-icon-3.png')}}" alt="Intro Image"></p>
								<h4>100% Natural</h4>
								<p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
							
							<div class="intro-item">
								<p><img src="{{asset('img/intro-icon-4.png')}}" alt="Intro Image"></p>
								<h4>Premium Quality</h4>
								<p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</div>
