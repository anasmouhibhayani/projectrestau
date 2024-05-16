<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href=" {{asset('frondoffice/css/style.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Display:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">
    <title>res</title>
</head>
<body>
    <!-- header section start -->
    <section class="header">
        <a href="#" class="logo"><i class="fa-solid fa-utensils"></i>Food</a>
        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#about">About </a>
            <a href="#food">Food</a>
            <a href="#gallery">Gallery</a>
            <a href="#menu">Menu</a>
            <a href="#order">Ordere</a>
            <a href="#blogs">Blogs</a>
        </nav>
        <!-- <div class="bar"><i class="fa-solid fa-bars"></i></div> -->
        <div id="menu-btn" class="fas fa-bars">

        </div>
    </section>

    <!-- headre section end -->


    <!-- home section starts  -->
    <section class="home" id="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide " style="background-image:url({{asset('frondoffice/asset/background.jpeg')}});">
                    <div class="content">
                        <span>Yo! welcome</span>
                        <h3>delicious cooking</h3>
                        <a href="#order" class="btn">get started</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background-image: url({{asset('frondoffice/asset/i.webp')}});">
                    <div class="content">
                        <span>outstanding food</span>
                        <h3>delicious cooking</h3>
                        <a href="#" class="btn">get started</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background-image:  url({{asset('frondoffice/asset/i\ \(1\).webp')}});">
                    <div class="content">
                        <span>outstanding food</span>
                        <h3>delicious cooking</h3>
                        <a href="#" class="btn">get started</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background-image: url({{asset('frondoffice/asset/foodmorocco.webp')}});">
                    <div class="content">
                        <span>outstanding food</span>
                        <h3>delicious cooking</h3>
                        <a href="#" class="btn">get started</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background-image: url({{asset('frondoffice/asset/soda.jpg')}});">
                    <div class="content">
                        <span>outstanding food</span>
                        <h3>delicious cooking</h3>
                        <a href="#" class="btn">get started</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background-image: url({{asset('frondoffice/asset/foodmorocco2.webp')}});">
                    <div class="content">
                        <span>outstanding food</span>
                        <h3>delicious cooking</h3>
                        <a href="#" class="btn">get started</a>
                    </div>
                </div>

           
                
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

    </section>

    <!-- home section end -->


    <!-- about section start -->
    <section class="about" id="about">
        <div class="image">
            <img src="{{asset('frondoffice/asset/about1.jpg ')}}" alt="">
        </div>


        <div class="content">
            <h3 class="title"> welcome to our restaurant</h3>
            <p>Welcome to restaurant Astronomie, a culinary haven where tradition and innovation intertwine to create a distinctive dining experience. Our kitchen, helmed by renowned Chef [Chef's Name], is committed to crafting dishes that are as pleasing to the eye as they are to the palate.</p>
        
        <a href="#blogs " class="btn">read more</a>
        <div class="icons-container">
            <div class="icons">
                <img src=" {{asset('frondoffice/asset/cropped-burger.webp ')}}" alt="">
                <h3> Food & drink</h3>
            </div>
            <div class="icons">
                <img src=" {{asset('frondoffice/asset/200x200bb-removebg-preview.png')}}" alt="">
                <h3> quality food </h3>
            </div>
            <div class="icons">
                <img src=" {{asset('frondoffice/asset/h-removebg-preview.png')}}" alt="">
                <h3> axpert</h3>
            </div>
        </div>
    </div>


    </section>
    <!-- about section end -->

    <!-- food section starts -->
    <section class="food" id="food">
        <div class="heading">
            <span>popular dishes</span>
            <h3>our delicious food</h3>
        </div>
        <div class=" swiper food-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" data-name="food-1">
                    <img src="{{asset('frondoffice/asset/slide6-removebg-preview.png ')}}" alt="">
                    <h3>dbastila of maroccaine</h3>
                    <div class="price">$49.90</div>
                </div>

                <div class="swiper-slide slide" data-name="food-2">
                    <img src="{{asset('frondoffice/asset/slide-removebg-preview.png ')}}" alt="">
                    <h3>bread pizza</h3>
                    <div class="price">$9.90</div>
                </div>

                <div class="swiper-slide slide" data-name="food-3">
                    <img src="{{asset('frondoffice/asset/slide3-removebg-preview.png  ')}}" alt="">
                    <h3>chicken  </h3>
                    <div class="price">$4.90</div>
                </div>

                <div class="swiper-slide slide" data-name="food-4">
                    <img src="{{asset('frondoffice/asset/slide2-removebg-preview.png')}}" alt="">
                    <h3>chicken </h3>
                    <div class="price">$10.00</div>
                </div>

              


                <div class="swiper-slide slide" data-name="food-5">
                    <img src="{{asset('frondoffice/asset/slide4-removebg-preview.png')}}" alt="">
                    <h3>breakfast of marocco</h3>
                    <div class="price">$6.90</div>
                </div>

                <div class="swiper-slide slide" data-name="food-6">
                    <img src=" {{asset('frondoffice/asset/slide5-removebg-preview.png')}}" alt="">
                    <h3>breakfast of marocco</h3>
                    <div class="price">6.90$</div>
                </div>

                <div class="swiper-slide slide" data-name="food-7">
                    <img src=" {{asset('frondoffice/asset/slide6-removebg-preview.png')}}" alt="">
                    <h3>tajine magherbi beef and eggs </h3>
                    <div class="price">15.90$</div>
                </div>


                


                
            </div>
            <div class="swiper-pagination"></div>
        </div>
        
    </section>

    <!-- food section end -->


    <!-- food preview section stars -->
    <section class="food-preview-container">
        <div id="close-priview" class="fas fa-time"><i class="fa-solid fa-xmark"></i></div>
        <div class="food-preview " data-target="food-1">
            <img src="{{asset('frondoffice/asset/slide6-removebg-preview.png ')}}" alt="">
            <head>delicious food</head>
            <div class="stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </div>
            <p>lorem ipsum dolor sit amet consecteur adipisicing alit. Accusamus, hic!</p>
            <div class="price">49.90$</div>
            <a href="#" class="btn"> buy now</a>
        </div>

        <div class="food-preview" data-target="food-2">
            <img src=" {{asset('frondoffice/asset/slide-removebg-preview.png ')}}" alt="">
            <head>delicious food</head>
            <div class="stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </div>
            <p>lorem ipsum dolor sit amet consecteur adipisicing alit. Accusamus, hic!</p>
            <div class="price">$9.90</div>
            <a href="#" class="btn"> buy now</a>
        </div>
        <div class="food-preview" data-target="food-3">
            <img src="{{asset('frondoffice/asset/slide3-removebg-preview.png  ')}}" alt="">
            <head>delicious food</head>
            <div class="stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </div>
            <p>lorem ipsum dolor sit amet consecteur adipisicing alit. Accusamus, hic!</p>
            <div class="price">$4.90</div>
            <a href="#" class="btn"> buy now</a>
        </div>

        <div class="food-preview" data-target="food-4">
            <img src="{{asset('frondoffice/asset/slide2-removebg-preview.png')}}" alt="">
            <head>delicious food</head>
            <div class="stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </div>
            <p>lorem ipsum dolor sit amet consecteur adipisicing alit. Accusamus, hic!</p>
            <div class="price">$10.00</div>
            <a href="#" class="btn"> buy now</a>
        </div>

        <div class="food-preview" data-target="food-5">
            <img src="{{asset('frondoffice/asset/slide4-removebg-preview.png')}}" alt="">
            <head>delicious food</head>
            <div class="stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </div>
            <p>lorem ipsum dolor sit amet consecteur adipisicing alit. Accusamus, hic!</p>
            <div class="price">$6.90</div>
            <a href="#" class="btn"> buy now</a>
        </div>

        <div class="food-preview" data-target="food-6">
            <img src="{{asset('frondoffice/asset/slide5-removebg-preview.png')}}" alt="">
            <head>delicious food</head>
            <div class="stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </div>
            <p>lorem ipsum dolor sit amet consecteur adipisicing alit. Accusamus, hic!</p>
            <div class="price">6.90$</div>
            <a href="#" class="btn"> buy now</a>
        </div>

        <div class="food-preview" data-target="food-7">
            <img src="{{asset('frondoffice/asset/slide6-removebg-preview.png')}}" alt="">
            <head>delicious food</head>
            <div class="stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </div>
            <p>lorem ipsum dolor sit amet consecteur adipisicing alit. Accusamus, hic!</p>
            <div class="price">15.90$</div>
            <a href="#" class="btn"> buy now</a>
        </div>
       
    </section>
    <!-- food preview section end -->

    <!-- gallery section starts -->
    <section class="gallery" id="gallery" >
          
        <div class="heading">
            <span> our gallery</span>
            <h3> our untold stories</h3>
        </div>
        
        <div class="gallery-container">
            <a href="{{asset('frondoffice/asset/foodmorocco2.webp')}}" class="box" >
                <img src="{{asset('frondoffice/asset/foodmorocco2.webp')}}" alt="">
                <div class="icon">
                    <i class="fas fa-plus"></i>
                </div>
            </a>
            <a href="{{asset('frondoffice/asset/fetoure1.webp')}}" class="box" >
                <img src=" {{asset('frondoffice/asset/fetoure1.webp')}} " alt="">
                <div class="icon"> <i class="fas fa-plus"></i></div>
            </a>
            <a href="{{asset('frondoffice/asset/harira.webp ')}}" class="box" >
                <img src="{{asset('frondoffice/asset/harira.webp ')}}" alt="">
                <div class="icon"> <i class="fas fa-plus"></i></div>
            </a>

            <a href="{{asset('frondoffice/asset/ee.webp ')}}" class="box" >
                <img src=" {{asset('frondoffice/asset/ee.webp ')}}" alt="">
                <div class="icon"> 
                    <i class="fas fa-plus"></i></div>
            </a>
            <a href=".{{asset('frondoffice/asset/about1.jpg ')}}" class="box" >
                <img src=" {{asset('frondoffice/asset/about1.jpg ')}}" alt="">
                <div class="icon"> 
                    <i class="fas fa-plus"></i></div>
            </a>

            <a href="{{asset('frondoffice/asset/about2.webp ')}}" class="box" >
                <img src=" {{asset('frondoffice/asset/about2.webp ')}}" alt="">
                <div class="icon"> 
                    <i class="fas fa-plus"></i></div>
            </a>

            <a href="{{asset('frondoffice/asset/bread_pizza.jpg ')}}" class="box" >
                <img src=" {{asset('frondoffice/asset/bread_pizza.jpg ')}}" alt="">
                <div class="icon"> 
                    <i class="fas fa-plus"></i></div>
            </a>

            <a href=" {{asset('frondoffice/asset/chickene.webp ')}}" class="box" >
                <img src=" {{asset('frondoffice/asset/chickene.webp ')}}" alt="">
                <div class="icon"> 
                    <i class="fas fa-plus"></i></div>
            </a>

            <a href="{{asset('frondoffice/asset/cake.webp ')}}" class="box" >
                <img src=" {{asset('frondoffice/asset/cake.webp ')}}" alt="">
                <div class="icon"><i class="fa-solid fa-plus"></i></div>
            </a>

            <a href="{{asset('frondoffice/asset/cake1.JPG')}}" class="box" >
                <img src="{{asset('frondoffice/asset/cake1.JPG')}}" alt="">
                <div class="icon"><i class="fa-solid fa-plus"></i></div>
            </a>

            <a href="{{asset('frondoffice/asset/icecrem.webp')}}" class="box" >
                <img src=" {{asset('frondoffice/asset/icecrem.webp')}}" alt="">
                <div class="icon"><i class="fa-solid fa-plus"></i></div>
            </a>

            <a href="{{asset('frondoffice/asset/cake1.JPG')}}" class="box" >
                <img src="{{asset('frondoffice/asset/cake1.JPG')}}" alt="">
                <div class="icon"><i class="fa-solid fa-plus"></i></div>
            </a>
           <div>
          
           </div>
        </div>
    </section>
    <!-- gallery section end -->

    <!-- menu section stars -->
        <section class="menu" id="menu">
            <div class="heading">
                <span>our menu</span>
                <h3>our popular diches</h3>
            </div>
            <div class="menu-slide">
                <div class="swiper-wrapper">
                    <div class="swiper-slide slide">
                        <h3 class="title">breakfast</h3>
                        <div class="box-container">
                            @foreach ($breakfast as $item)
                                <div class="box">
                                    <div class="info">
                                        <h3>{{ $item->title }}</h3>
                                        <p>{{ $item->desc }} </p>
                                </div>     
                                <div class="price">{{ $item->price }}</div>
                                </div>
                            @endforeach
                            
                            
                            {{-- <div class="box">
                                <div class="info">
                                    <h3>morning breakfast</h3>
                                    <p>lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores. </p>
                               </div> 
                               <div class="price">20.30$</div>    
                            </div>
                            
    
                            <div class="box">
                                <div class="info">
                                    <h3>morning breakfast</h3>
                                    <p>lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores. </p>
                               </div>     
                               <div class="price">20.30$</div>
                            </div>
                            
    
                            <div class="box">
                                <div class="info">
                                    <h3>morning breakfast</h3>
                                    <p>lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores. </p>
                               </div>     
                               <div class="price">20.30$</div>
                            </div>
                            
    
                            <div class="box">
                                <div class="info">
                                    <h3>morning breakfast</h3>
                                    <p>lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores. </p>
                               </div>     
                               <div class="price">20.30$</div>
                            </div>
                            
    
                            <div class="box">
                                <div class="info">
                                    <h3>morning breakfast</h3>
                                    <p>lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores. </p>
                               </div>     
                               <div class="price">20.30$</div>
                            </div>
                             --}}
    
                            <!-- <div class="box">
                                <div class="info">
                                    <h3>morning breakfast</h3>
                                    <p>lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores. </p>
                               </div>     
                               <div class="price">20.30$</div>
                            </div>
                            
    
                            <div class="box">
                                <div class="info">
                                    <h3>morning breakfast</h3>
                                    <p>lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores. </p>
                               </div>     
                               <div class="price">20.30$</div>
                            </div> -->
                            
                        </div>
                        
                        


                    </div>




                    <div class="swiper-slide slide">
                        <h3 class="title"> lunch</h3>
                        <div class="box-container">
                            @foreach ($lunch as $item)
                                <div class="box">
                                    <div class="info">
                                        <h3>{{ $item->title }}</h3>
                                        <p>{{ $item->desc }} </p>
                                </div>     
                                <div class="price">{{ $item->price }}</div>
                                </div>
                            @endforeach
                            {{-- <div class="box">
                                <div class="info">
                                    <h3>delicious lunch</h3>
                                    <p>lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores. </p>
                               </div>     
                               <div class="price">32.30$</div>
                            </div>
                            
                            <div class="box">
                                <div class="info">
                                    <h3>delicious lunch</h3>
                                    <p>lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores. </p>
                               </div>     
                               <div class="price">32.30$</div>
                            </div>
                            
    
                            <div class="box">
                                <div class="info">
                                    <h3>delicious lunch</h3>
                                    <p>lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores. </p>
                               </div>     
                               <div class="price">32.30$</div>
                            </div>
                            
    
                            <div class="box">
                                <div class="info">
                                    <h3>delicious lunch</h3>
                                    <p>lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores. </p>
                               </div>     
                               <div class="price">32.30$</div>
                            </div>
                            
    
                            <div class="box">
                                <div class="info">
                                    <h3>delicious lunch</h3>
                                    <p>lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores. </p>
                               </div>     
                               <div class="price">32.30$</div>
                            </div>
                            
    
                            <div class="box">
                                <div class="info">
                                    <h3>delicious lunch</h3>
                                    <p>lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores. </p>
                               </div>     
                               <div class="price">32.30$</div>
                            </div>
                             --}}
    
                            <!-- <div class="box">
                                <div class="info">
                                    <h3>delicious lunch</h3>
                                    <p>lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores. </p>
                               </div>     
                               <div class="price">32.30$</div>
                            </div>
                            
    
                            <div class="box">
                                <div class="info">
                                    <h3>delicious lunch</h3>
                                    <p>lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores. </p>
                               </div>     
                               <div class="price">32.30$</div>
                            </div>
                             -->
                            
                        </div>
                        
                        

                    </div>

                    <div class="swiper-slide slide">
                        <h3 class="title"> dinner</h3>
                        <div class="box-container">
                            @foreach ($dinner as $item)
                                <div class="box">
                                    <div class="info">
                                        <h3>{{ $item->title }}</h3>
                                        <p>{{ $item->desc }} </p>
                                </div>     
                                <div class="price">{{ $item->price }}</div>
                                </div>
                            @endforeach
                            {{-- <div class="box">
                                <div class="info">
                                    <h3>delicious dinner</h3>
                                    <p>lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores. </p>
                               </div>     
                               <div class="price">32.30$</div>
                            </div>
                            
                            <div class="box">
                                <div class="info">
                                    <h3>delicious dinner</h3>
                                    <p>lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores. </p>
                               </div>     
                               <div class="price">32.30$</div>
                            </div>
                            
    
                            <div class="box">
                                <div class="info">
                                    <h3>delicious dinner</h3>
                                    <p>lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores. </p>
                               </div>     
                               <div class="price">32.30$</div>
                            </div>
                            
    
                            <div class="box">
                                <div class="info">
                                    <h3>delicious dinner</h3>
                                    <p>lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores. </p>
                               </div>     
                               <div class="price">32.30$</div>
                            </div>
                            
    
                            <div class="box">
                                <div class="info">
                                    <h3>delicious dinner</h3>
                                    <p>lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores. </p>
                               </div>     
                                <div class="price">2.10$</div>
                            </div>
                           
    
                            <div class="box">
                                <div class="info">
                                    <h3>delicious dinner</h3>
                                    <p>lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores. </p>
                               </div>     
                                <div class="price">2.10$</div>
                            </div>
                            --}}
    
                            <!-- <div class="box">
                                <div class="info">
                                    <h3>delicious dinner</h3>
                                    <p>lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores. </p>
                               </div>     
                                <div class="price">2.10$</div>
                            </div>
                           
    
                            <div class="box">
                                <div class="info">
                                    <h3>delicious dinner</h3>
                                    <p>lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores. </p>
                               </div>     
                                <div class="price">2.10$</div>
                            </div> -->
                           
                            
                        </div>
                        
                        

                    </div>


                    <div class="swiper-slide slide">
                        <h3 class="title"> drinks</h3>
                        <div class="box-container">
                            @foreach ($drinks as $item)
                                <div class="box">
                                    <div class="info">
                                        <h3>{{ $item->title }}</h3>
                                        <p>{{ $item->desc }} </p>
                                </div>     
                                <div class="price">{{ $item->price }}</div>
                                </div>
                            @endforeach
                            {{-- <div class="box">
                                <div class="info">
                                    <h3>cold drinks</h3>
                                    <p>lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores. </p>
                                       
                                </div>
                                <div class="price">2.10$</div>     
                            </div>
                            
                            <div class="box">
                                <div class="info">
                                    <h3>cold drinks</h3>
                                    <p>lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores. </p>
                                       
                                </div>
                                <div class="price">2.10$</div>     
                            </div>
                            
    
                            <div class="box">
                                <div class="info">
                                    <h3>cold drinks</h3>
                                    <p>lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores. </p>
                                       
                                </div>
                                <div class="price">2.10$</div>     
                            </div>
                            
    
                            <div class="box">
                                <div class="info">
                                    <h3>cold drinks</h3>
                                    <p>lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores. </p>
                                       
                                </div>
                                <div class="price">2.10$</div>     
                            </div>
                            
    
                            <div class="box">
                                <div class="info">
                                    <h3>cold drinks</h3>
                                    <p>lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores. </p>
                                       
                                </div>
                                <div class="price">2.10$</div>     
                            </div>
                            
    
                            <div class="box">
                                <div class="info">
                                    <h3>cold drinks</h3>
                                    <p>lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores. </p>
                                    
                                </div>
                                <div class="price">2.10$</div>     
                            </div> --}}
                            
    
                            <!-- <div class="box">
                                <div class="info">
                                    <h3>cold drinks</h3>
                                    <p>lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores. </p>
                                       
                                </div>
                                <div class="price">2.10$</div>     
                            </div>
                            
    
                            <div class="box">
                                <div class="info">
                                    <h3>cold drinks</h3>
                                    <p>lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores. </p>
                                       
                                </div>
                                <div class="price">2.10$</div>     
                            </div> -->
                            
                            
    
                        </div>
                        
                        
                    </div>


                    <div class="swiper-slide slide">
                        <h3 class="title"> dessert</h3>
                        <div class="box-container">
                            @foreach ($dessert as $item)
                                <div class="box">
                                    <div class="info">
                                        <h3>{{ $item->title }}</h3>
                                        <p>{{ $item->desc }} </p>
                                </div>     
                                <div class="price">{{ $item->price }}</div>
                                </div>
                            @endforeach
                            {{-- <div class="box">
                                <div class="info">
                                    <h3>sweet dessers</h3>
                                    <p>lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores. </p>
                               </div>     
                               <div class="price">6.30$</div>
                            </div>
                            
                        
                        
                        <div class="box">
                            <div class="info">
                                <h3>sweet dessers</h3>
                                <p>lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores. </p>
                           </div>     
                           <div class="price">6.30$</div>
                            </div>
                            

                            <div class="box">
                                <div class="info">
                                    <h3>sweet dessers</h3>
                                    <p>lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores. </p>
                            </div>     
                            <div class="price">6.30$</div>
                            </div>
                            

                            <div class="box">
                                <div class="info">
                                    <h3>sweet dessers</h3>
                                    <p>lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores. </p>
                            </div>     
                            <div class="price">6.30$</div>
                            </div>
                            

                            <div class="box">
                                <div class="info">
                                    <h3>sweet dessers</h3>
                                    <p>lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores. </p>
                            </div>     
                            <div class="price">6.30$</div>
                            </div>
                            

                            <div class="box">
                                <div class="info">
                                    <h3>sweet dessers</h3>
                                    <p>lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores. </p>
                            </div>     
                            <div class="price">6.30$</div>
                            </div>
                         --}}

                        <!-- <div class="box">
                            <div class="info">
                                <h3>sweet dessers</h3>
                                <p>lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores. </p>
                           </div>     
                           <div class="price">6.30$</div>
                        </div>
                        

                        <div class="box">
                            <div class="info">
                                <h3>sweet dessers</h3>
                                <p>lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores. </p>
                           </div>     
                           <div class="price">6.30$</div>
                        </div> -->
                        
                    </div>

                    </div>

                </div>
                <div class="swiper-pagination"></div> 
            </div>
        </section>
    <!-- menu swection end -->

    <!-- order section stars -->
        <section class="order" id="order">
            <div class="heading">
                <span>order now</span>
                <h3>fast home delivery</h3>
            </div>
            <form action="/orders" method="POST">
                @csrf
                <div class="box-container">
                    <div class="box">
                        <div class="inputbox">
                            <span>full name</span>
                            <input type="text" placeholder="enter your name" name="full_name">
                            @error('full_name')
                                <span class="error">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="inputbox">
                            <span>food name</span>
                            <input type="text" placeholder="food you want" name="food_name">
                            @error('food_name')
                                <span class="error">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="inputbox">
                            <span>order details</span>
                            <input type="text" placeholder="specifics with food " name="order_details">
                            @error('order_details')
                                <span class="error">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="inputbox">
                            <span> your adress</span>
                            <textarea name="address" placeholder="enter your adress" id="" cols="30" rows="10"></textarea>
                            @error('address')
                                <span class="error">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="box">
                        <div class="inputbox">
                            <span>number </span>
                            <input type="number" name="phone_number" placeholder="enter your number">
                            @error('phone_number')
                                <span class="error">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="inputbox">
                            <span>how much</span>
                            <input type="text" name="quantity" placeholder="how many you want">
                            @error('quantity')
                                <span class="error">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="inputbox">
                            <span>when you want</span>
                            <input type="datetime-local" name="delivery_time">
                            @error('delivery_time')
                                <span class="error">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="inputbox">
                            <span> our  address </span>
                            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16987.094106632954!2d-9.6156568!3d30.424076699999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdb3b6c0ee022f07%3A0xf7a8d53e9263f570!2sRestaurant%20Les%20Blancs!5e1!3m2!1sfr!2sma!4v1711624670891!5m2!1sfr!2sma" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                        </div>
                    </div>


                </div>
                <input type="submit" value="order now " class="btn">
            </form>
        </section>
    <!-- order section end -->

    <!-- blogs section stars-->
        <section class="blogs" id="blogs">
            <div class="heading">
                <span>our blogs</span>
                <h3>our latest posts</h3>
            </div>
            <div class="blogs-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide slide">
                        <div class="image">
                            <img src=" {{asset('frondoffice/asset/NA.webp')}}" alt="">
                            <span>restaurant</span>
                        </div>
                        <div class="content">
                            <div class="icon">
                                <a href=""><i class="fas fa-calendar"></i>28 mars,2020</a>
                                <a href=""><i class="fa-solid fa-user"></i>by admin </a>
                            </div>
                            <a href="" class="title"> blog title goes here</a>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, odit? </p>
                            <a href="" class="btn">read more</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide">
                        <div class="image">
                            <img src=" {{asset('frondoffice/asset/chicken1.webp')}}" alt="">
                            <span>restaurant</span>
                        </div>
                        <div class="content">
                            <div class="icon">
                                <a href=""><i class="fas fa-calendar"></i>28 mars,2020</a>
                                <a href=""><i class="fa-solid fa-user"></i>by admin </a>
                            </div>
                            <a href="" class="title"> blog title goes here</a>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, odit? </p>
                            <a href="" class="btn">read more</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide">
                        <div class="image">
                            <img src=" {{asset('frondoffice/asset/bread_pizza.jpg')}}" alt="">
                            <span>restaurant</span>
                        </div>
                        <div class="content">
                            <div class="icon">
                                <a href=""><i class="fas fa-calendar"></i>28 mars,2020</a>
                                <a href=""><i class="fa-solid fa-user"></i>by admin </a>
                            </div>
                            <a href="" class="title"> blog title goes here</a>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, odit? </p>
                            <a href="" class="btn">read more</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide">
                        <div class="image">
                            <img src=" {{asset('frondoffice/asset/tanjin.jpg')}}" alt="">
                            <span>restaurant</span>
                        </div>
                        <div class="content">
                            <div class="icon">
                                <a href=""><i class="fas fa-calendar"></i>28 mars,2020</a>
                                <a href=""><i class="fa-solid fa-user"></i>by admin </a>
                            </div>
                            <a href="" class="title"> blog title goes here</a>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, odit? </p>
                            <a href="" class="btn">read more</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide">
                        <div class="image">
                            <img src="{{asset('frondoffice/asset/cake1.JPG ')}}" alt="">
                            <span>cake</span>
                        </div>
                        <div class="content">
                            <div class="icon">
                                <a href="#"><i class="fas fa-calendar"></i>01 march,2021</a>
                                <a href="#"><i class="fa-solid fa-user"></i>by admin </a>
                            </div>
                            <a href="#" class="title"> blog title goes here</a>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, odit? </p>
                            <a href="#" class="btn">read more</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide">
                        <div class="image">
                            <img src=" {{asset('frondoffice/asset/fetoure1.webp')}}" alt="">
                            <span>cake of breakfast</span>
                        </div>
                        <div class="content">
                            <div class="icon">
                                <a href=""><i class="fas fa-calendar"></i>06 nov,2020</a>
                                <a href=""><i class="fa-solid fa-user"></i>by admin </a>
                            </div>
                            <a href="" class="title"> blog title goes here</a>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, odit? </p>
                            <a href="" class="btn">read more</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide">
                        <div class="image">
                            <img src="{{asset('frondoffice/asset/lunch-break.webp ')}}" alt="">
                            <span>lunch break italy</span>
                        </div>
                        <div class="content">
                            <div class="icon">
                                <a href=""><i class="fas fa-calendar"></i>28 march,2024</a>
                                <a href=""><i class="fa-solid fa-user"></i>by admin </a>
                            </div>
                            <a href="" class="title"> blog title goes here</a>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, odit? </p>
                            <a href="" class="btn">read more</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide">
                        <div class="image">
                            <img src="{{asset('frondoffice/asset/coffee-2446624_1280.jpg ')}}" alt="">
                            <span>coffe </span>
                        </div>
                        <div class="content">
                            <div class="icon">
                                <a href=""><i class="fas fa-calendar"></i>28 march,2023</a>
                                <a href=""><i class="fa-solid fa-user"></i>by admin </a>
                            </div>
                            <a href="" class="title"> blog title goes here</a>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, odit? </p>
                            <a href="" class="btn">read more</a>
                        </div>
                    </div>
                    
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>
    <!-- blogs section end-->

    <!-- footer section stars -->
        <section class="footer">

            <div class="icon-container">

                <div class="icons">
                    <i class="fas fa-clock"></i>
                    <h3>opening hours</h3>
                    <p>07:00am to 10:30pm</p>
                </div>

                <div class="icons">
                    <i class="fas fa-phone"></i>
                    <h3>phone</h3>
                    <p>+212-656-02-92-37</p>
                    <p>+212-775-70-66-88</p>
                </div>

                <div class="icons">
                    <i class="fas fa-envelope"></i>
                    <h3>email</h3>
                    <p>+0656029237anas@gmail.com</p>
                    
                </div>

                <div class="icons">
                    <i class="fas fa-map"></i>
                    <h3>address</h3>
                    <p>agadir ville marina </p>
                    
                </div>
            </div>
            <div class="share">
                <a href="" class="fab fa-facebook-f"> </a>
                <a href="" class="fab fa-twitter"> </a>
                <a href="" class="fa-brands fa-instagram"> </a>
                <a href="" class="fa-brands fa-linkedin"> </a>
            </div>
            <div class="credit">
                created by <span>anas mouhib hayani</span>  all rights reserved!
            </div>

            
        </section>
    <!-- footer section ends -->



</body>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js" ></script>
<script src=" {{asset('frondoffice/js/scripte.js')}}" ></script>
<script>
    lightGallery(document.querySelector('.gallery .gallery-container'))
</script>

</html>