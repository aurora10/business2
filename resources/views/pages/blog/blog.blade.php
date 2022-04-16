@include('partials.head')
<section class="internal-header bg-red-gradient overlay-color-pattern color-white">
	<div class="container">
		<h1>Blog</h1>
	</div>
</section>


@foreach ($posts as $post)	

<section id="blog-module-wrap">
	<section id="blog-landing" class="content-section">
		<div class="container">
			<div class="row">
				
				<div class="col-md-12">
				
					<h2></h2>
							
		<div class="post-wrap mb-big">
			<h3><a href="{{$post->slug}}">{{$post->title}}</a></h3>
			<div class="textbox mb">
				
					<a class="align-left" href="{{$post->slug}}"><img alt="" src="{{ asset('/storage/'.$post->image) }}" width="500" height="400"/></a>
				
				<div class="post-date small mb">
					<span>{{$post->created_at->translatedFormat('j F Y')}}</span>
					
				</div>
				<p>
				{{$post->excerpt}}.
					<a href="{{$post->slug}}" class="read-more">Read more</a>
				</p>
			</div>
			<div class="post-tools small">
				
			</div>
		</div>
</section>
@endforeach
	
		
				<!-- <li>
					<a href="blog21c3.html?search=1&amp;page=2" aria-label="Next">
						<span class="fa fa-angle-right"></span>
					</a>
				</li>
			 
		</ul>
	</nav> 

				</div>
				
			</div>
		</div> -->
	<!-- </section> -->
<!-- </section> -->
 @include('partials.footer') 