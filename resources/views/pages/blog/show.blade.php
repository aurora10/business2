@include('partials.head')

<section class="internal-header bg-red-gradient overlay-color-pattern color-white">
	<div class="container">
		<h1>Blog</h1>
	</div>
</section>

<section id="blog-module-wrap">
		<section id="blog-post" class="content-section">
			<div class="container">
				<div class="blog-post-header mb mb-big-xs">
					<div class="header-wrap">
						<h1> {{$post->title}}</h1>
						<div class="textbox mb-half">
							<div class="post-date small">
								<span>{{$post->created_at->translatedFormat('j F Y')}}</span>
								
							</div>
						</div>
						
                    </div>
</div>

{!!$post->body!!}

</section>






@include('partials.footer') 
