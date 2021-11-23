<!DOCTYPE html>
<html lang="en">

    <head>

        @include('frontend.css')
    
        </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    @include('frontend.header')

    @include('frontend.banner')

   @include('frontend.about')

    @include('frontend.menu')

    <!-- ***** Chefs Area Starts ***** -->
    <section class="section" id="chefs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Our Chefs</h6>
                        <h2>We offer the best ingredients for you</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($chefs as $chef)
                    
                    <div class="col-lg-4">
                        <div class="chef-item">
                            <div class="thumb">
                                <div class="overlay"></div>
                                <ul class="social-icons">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                                <img src="chefs_image/{{ $chef->image }}" alt="Chef #1">
                            </div>
                            <div class="down-content">
                                <h4>{{ $chef->name }}</h4>
                                <span>{{ $chef->category }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
        
            </div>
        </div>
    </section>
    <!-- ***** Chefs Area Ends ***** -->

    @include('frontend.reservation')

    @include('frontend.chef')
    
    @include('frontend.footer')

    @include('frontend.script')
  </body>
</html>