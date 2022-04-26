@include('partials.head')

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/> -->

<style type="text/css">
         li{
            list-style: none;
            /* background: #e2e2e2; */
            /* margin-left: 5px; */
            /* text-align: center; */
            /* border-radius:5px; */
        }
        li span{
            /* font-size: 20px; */
        }
         li{
            /* display: inline-block; */
            /* padding: 10px 10px 5px; */
            /* margin-left: 20px; */
        }
        #social-links{
            /* float: left; */
        }

             /* .fab, .fad, .fal, .far, .fas {
        -moz-osx-font-smoothing: grayscale;
        -webkit-font-smoothing: antialiased;
        display: inline-block;
        font-style: normal;
        font-variant: normal; 
        text-rendering: auto;
        line-height: 1; */
        /* padding:8px;
        font-size: 30px; */
     */
    } */

  

.fab, .far {
    /* font-weight: 400; */
    /* color: #1E2A37; */
}

/* ul, ol {
    margin-top: 0;
    margin-bottom: 11px; 
    /* margin-left: 345px ;  */
    /* text-align:center;  */


.my-class {
    color: #1E2A37;
    display: inline-block;
    position: sticky; position: -webkit-sticky; 
    top: 400px;
    font-size: 30px;
    
    
}
</style>


<section class="internal-header bg-red-gradient overlay-color-pattern color-white">
	<div class="container">
		<h1>Blog</h1>
	</div>
</section>


<!--  <div class="row">
     <div class="column">  -->
      <!-- <div class="my-class">{!!$socialShare!!}</div>
    </div> -->

    <!-- <div class="row"> -->
     <div class="column">
    <!-- <div class="my-class "> {!!$socialShare!!}</div> -->
    
	<section id="blog-module-wrap">
    
    
  
		<section id="blog-post" class="content-section">
        
			<div class="container">
            
				<div class="blog-post-header mb mb-big-xs">
					<div class="header-wrap">
						<h1 style=" ">{{$post->title}}</h1>
						<div class="textbox mb-half">
							<div class="post-date small">
								<span>{{$post->created_at->translatedFormat('j F Y')}}</span>
								
							</div>
						</div>
						<div class="post-tools small">
							
								<div class="item social-links">
                                						
                                

								</div>
							
						</div>
					</div>
				</div>

				<div class="row">
					<!-- main-col -->
					
					<div class="col-md-12">
					 
							<div class="textbox">
								<img alt="" src="../files/blog/items/1.header-1140_320.jpg" />
							</div>
						

						<div id="blog_main_content_wrap" class="textbox mb">
							
                        {!!$post->body!!}

				</div> 
            
                <h2>Work with us</h2>

<p>If you are interested in developing a new product with us, drop us a line at <a href="mailto:sales@marketorix.com">sales@marketorix.com</a> and we&rsquo;ll get in contact with you as soon as possible!</p>

                
		</section>
     <!-- </div> -->

</div>
	</section>
    
@include('partials.footer') 
	