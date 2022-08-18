<div class="page-section">
        <div class="container">
            <h1 class="text-center mb-5 wow fadeInUp">Our Medicines</h1>

            <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">

            @foreach($medicine as $medicines)
                <div class="item">
                    <div class="card-doctor">
                        <div class="header">
                            <img src="medicineimage/{{$medicines->image}}" alt="">
                            <div class="meta">
                                <a href="#"><span class="mai-call"></span></a>
                                <a href="#"><span class="mai-logo-whatsapp"></span></a>
                            </div>
                        </div>
                        <div class="body">
                            <p class="text-xl mb-0">{{$medicines->name}}</p>
                            
                        </div>
                    </div>
                </div>
            @endforeach


                
            </div>
        </div>
    </div>