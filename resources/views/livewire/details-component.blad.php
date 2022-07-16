                         		<div class="section products-block category-tab">
									<div class="block-title">
										<h2 class="title">Categories</h2>
									</div>

									<div class="block-content">
					
										<div class="tab-nav ">
									
												<ul>
													@foreach ($categories as $key=>$category)
													<li class=" {{$key==0 ? 'active':''}}">
														
															<a data-toggle="tab" href="#category_{{$category->id}}" 
																class= "{{$key==0 ? 'active':''}}">{{$category->name}}</a>
													</li>
													@endforeach 
												</ul>
											 

										</div>
										
										
										<div class="tab-content">
											@foreach ($categories as $key=>$category)
												<div role="tabpanel" class="tab-pane fade in active {{$key==0 ? 'active':''}}" id="category_{{$category->id}}">
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
																			<span class="sale-price">=N={{$c_product->regular_price}}</span>
																			{{-- <span class="base-price">=N=90.00</span> --}}
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
														
														{{-- <div class="product-item">
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
																	<img src="{{asset('img/product/prod_9.jpg')}}" alt="Product Image">
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
																<div class="star on"></div>
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
														
														<div class="product-item">
															<div class="product-image">
																<a href="product-detail-left-sidebar.html">
																	<img src="{{asset('img/product/prod_10.jpg')}}" alt="Product Image">
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
																<span class="sale-price">=N=96.00</span>
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
											@endforeach	
											{{-- <!-- Best Seller -->
											<div role="tabpanel" class="tab-pane fade" id="best-seller">
												<div class="products owl-theme owl-carousel">
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
																<img src="{{asset('img/product/prod_10.jpg')}}" alt="Product Image">
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
															<span class="sale-price">=N=96.00</span>
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
													
													<div class="product-item">
														<div class="product-image">
															<a href="product-detail-left-sidebar.html">
																<img src="{{asset('img/product/prod_3.jpg')}}" alt="Product Image">
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
											
											
											<!-- On Sale -->
											<div role="tabpanel" class="tab-pane fade" id="on-sale">
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
																<img src="{{asset('img/product/prod_9.jpg')}}" alt="Product Image">
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
															<div class="star on"></div>
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
													
													<div class="product-item">
														<div class="product-image">
															<a href="product-detail-left-sidebar.html">
																<img src="{{asset('img/product/prod_10.jpg')}}" alt="Product Image">
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
															<span class="sale-price">=N=96.00</span>
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
											</div> --}}
										</div>
									</div>
								</div>
								 