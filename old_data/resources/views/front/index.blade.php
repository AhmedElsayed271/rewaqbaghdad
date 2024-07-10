@extends('layout.front.app')
{{-- @section('title', 'صفحة فارغة') --}}

{{-- @section('breadcrumb')
    <li class="breadcrumb-item">@yield('title')</li>
@endsection --}}

{{-- @section('style')@endsection --}}

{{-- @section('script')@endsection --}}

@section('content')
<style>
.slide-image {
    position: relative;
}

.slider_button {
    position: absolute;
    bottom: 0;
    left: 0;
    margin: 10px; 
    background:rgb(141, 232, 255);
     border-radius: 4px;
    color: rgba(101, 101, 101, 0.784); 
}
</style>
<div class="banner container-fluid">
    <div class="swiper-container">
        <div class="swiper mySwiper swiper-h">
            <div class="swiper-wrapper">

                @foreach ($sliders as $slider)
                    
                    <div class="swiper-slide">
                        @if(!empty($slider->btn_url))
                            <a target="{{$slider->btn_target}}" href="{{$slider->btn_url}}">
                                <div class="slide-image">
                                    <img src="{{$slider->img}}" alt="{{$slider->translation->title}}">
                                      <button style="position: absolute" class="slider_button">عرض المزيد</button>
                                </div>
                            </a>
                        @else
                            <div class="slide-image">
                                <img src="{{$slider->img}}" alt="{{$slider->translation->title}}">
                                  <button style="position: absolute" class="slider_button">عرض المزيد</button>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@if (!$Medianews->isEmpty())
    <section class="center-blogs mt-10">
        <div class="container">
            <div class="section-title text-right pb-30">
                <h2 class="title">{{__('front.center_news')}}</h2>
            </div>
            <div class="row d-flex align-items-center" data-aos="zoom-in" data-aos-duration="1000">
                <div class="col-12 ">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            @foreach ($Medianews as $Medianew)
                                <a href="{{ langUrl('/media/center/news/'.$Medianew->slug) }}">
                                    <div class="swiper-slide">
                                        <div class="card">
                                            <img class="card-img card-img-top" height="332" src="{{$Medianew->slider_img}}" alt="{{$Medianew->translation->title}}">
                                            <div class="card-img-overlay">
                                                <a href="{{ langUrl('/media/center/news/'.$Medianew->slug) }}" class="btn btn-dark btn-sm text-white">{{__('front.latest_news')}}</a>
                                                <a href="{{ langUrl('/media/center/news/'.$Medianew->slug) }}" class="btn btn-light btn-sm">{{ formatDate($Medianew->created_at) }}</a>
                                            </div>
                                            <div class="card-body">
                                                <h4 class="card-title">{{$Medianew->translation->title}}</h4>
                                                <p class="card-text">{{$Medianew->translation->description}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                    <div class="nexts"></div>
                    <div class="prevs"></div>
                </div>
            </div>
        </div>
    </section>
@endif

@if (!$versions->isEmpty())
<section class="researchers-sec mb-5">
    <div class="container">
        <div class="section-title text-right pb-30">
            <h2 class="title ">{{__('front.versions')}}</h2>
        </div>
        <div class="row overflow-hidden" data-aos="zoom-in" data-aos-duration="1000">
            <div class="section-title m-0 text-right pb-30">
                <h2 class="sub-title">{{__('front.research_and_studies')}}</h2>
            </div>
            <div class="swiper-container overflow-hidden">
                <div class="news-block-two swiper-wrapper">

                    @foreach ($versions as $version)
                        
                        <div class="swiper-slide">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image">
                                        <img src="{{$version->img}}" alt="LogoImage">
                                    </figure>
                                    <div class="content-box">

                                        <div class="text">
                                            <figure class="admin-thumb">
                                                <img src="{{$version->writermain->img}}" alt="{{$version->writer->name}}">
                                            </figure>
                                            <h4><a href="{{ langUrl('/version/'.$version->slug) }}">{{$version->writer->name}}</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <small class="d-flex ">
                                        <i class="fas fa-bookmark"></i>
                                        <p class="status">{{ $version->category->name }}</p>
                                        <p>{{__('front.versions')}}</p>
                                    </small>
                                    <a href="{{ langUrl('/version/'.$version->slug) }}"><h5>{{ $version->translation->title }}</h5></a>
                                    <p>{!! trimText($version->translation->description, 110)  !!}</p>
                                    <span class="post-date">{{ formatDate($version->created_at) }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach

                   
                </div>

            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>
@endif

<section class="title mt-10">
    <div class="container">
        <div class="section-title text-right pb-30">
            <img src="{{url('front/assets/img/Rectangle (2).png')}}" alt=""> <h2 class="title "><span class="baby-blue">{{__('front.i')}}</span> {{__('front.parliament')}}</h2>
        </div>
    </div>
</section>

<section class="parlmente-sec bg-light pt-3">
    <div class="shape shape-one">
        <img src="/front/assets/img/shape1.png" alt="shape">
    </div>
    <div class="shape shape-tow">
        <img src="/front/assets/img/shape2.png" alt="shape">
    </div>
    <div class="shape shape-three">
        <img src="/front/assets/img/shape3.png" alt="shape">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1000">
                <img src="/front/assets/img/mokups.png" alt="mokups">
            </div>
            <div class="col-lg-8" data-aos="fade-down" data-aos-duration="1000">
                <div class="content_block_1">
                    <div class="content-box">
                        <div class="text">
                            <h2 class="title">
                                {{__('front.application')}} <span class="baby-blue">{{__('front.i')}}</span> {{__('front.parliament')}}
                            </h2>
                            <p>
                                {{__('front.par_mes1')}} <span class="baby-blue"> {{__('front.par_mes2')}}</span>
                            </p>
                            
                            <div class="buttons d-xl-flex d-lg-flex justify-content-between align-items-center">
                                <div class="btns d-flex justify-content-between align-items-center">
                                    <a href="{{langUrl('/parliament')}}" class="btn m-xs-auto m-sm-auto m-md-auto m-lg-0 m-xl-0 ">
                                       {{__('front.view_details')}}
                                    </a>
                                    <a href="https://iamtheparliament.com/" class="btn me-xl-3 m-xs-auto m-sm-auto m-md-auto m-lg-0 m-xl-0 d-none d-xl-flex d-lg-flex d-md-flex d-sm-none d-xs-none">
                                        {{__('front.parliament_site')}}
                                    </a>
                                </div>
                                <div class="btns">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <img src="{{url('front/assets/img/Rectangle (2).png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="btns d-flex justify-content-between align-items-center custom-btns">
                                        <a href="{{$parliament->google_url}}" class="btn">
                                            {{__('front.download_google_Play')}}
                                        </a>
                                        <a href="{{$parliament->apple_url}}" class="btn">
                                            {{__('front.download_apple_store')}}
                                        </a>
                                    </div>
                                   
                                </div>
                            </div>
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@if(!$iraqmeterBlogs->isEmpty())
    <section class="title mt-10">
        <div class="container">
            <div class="section-title text-right pb-30">
                <img src="{{url('front/assets/img/meters.png')}}" alt="">
                <h2 class="title">{{__('front.iraqmeter')}}</h2>
            </div>
        </div>
    </section>
    <section class="iraq-meters p-3 mb-30">
        <div class="devider-one"></div>
        <div class="devider-two"></div>
        <div class="container">
            
            <div class="row">
                <div class="swiper-container overflow-hidden">
                    <div class="swiper-wrapper">
                        @foreach ($iraqmeterBlogs as $iraqBlog)
                            <a class="swiper-slide" href="{{ langUrl('/iraq/meter/'.$iraqBlog->slug) }}">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-lg-5" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="image-box">
                                            <img height="208" src="{{ $iraqBlog->img }}" alt="{{ $iraqBlog->translation->title }}">
                                        </div>
                                    </div>
                                    <div class="iraq-meter-margin-img"></div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 content-column" data-aos="fade-down" data-aos-duration="1000">
                                        <div class="content_block_1">
                                            <div class="content-box iraq-meters-text-box">
                                                <div class="text">
                                                    <h2 class="title">{{ $iraqBlog->translation->title }}</h2>
                                                    <p>{{ $iraqBlog->translation->description }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="swiper-nexts"></div>
                <div class="swiper-prevs"></div>
            </div>
        
            <div class="row mt-10 top40">
                <div class="col-lg-12 mb-3">
                    <a href="{{langUrl('/iraq/meter')}}" class="btn btn">
                        {{__('front.for_more')}}
                    </a>
                </div>
            </div>
        </div>
    </section>
@endif



@if (!$books->isEmpty())
<section class="our-books-sec">
    <div class="container">
        <div class="section-title text-right pb-30">
            <img src="{{url('front/assets/img/magazine.png')}}" class="img-shadow" alt="" />
            <h2 class="title ">{{__('front.rewaq')}}</h2>
        </div>
        <div class="row overflow-hidden" data-aos="zoom-in" data-aos-duration="1000">
            <div class="section-title m-0 text-right pb-30">
                <h2 class="sub-title">{{__('front.our_books')}}</h2>
            </div>
            <div class="swiper-container overflow-hidden">
                <div class="news-block-two swiper-wrapper">

                    @foreach ($books as $book)
                        <a class="swiper-slide" href="{{ langUrl('/rewaq/book/'.$book->slug) }}" title="{{$book->translation->title}}">
                            <div class="inner-box-book">
                                <div class="img-box">
                                    <img src="{{$book->img}}" alt="{{$book->translation->title}}">
                                </div>
                                <div class="content">
                                    <p>{{$book->translation->title}}</p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="swiper-button-prevs"></div>
            <div class="swiper-button-nexts"></div>
        </div>
    </div>
</section>
@endif

<section class="title mt-10 custom-title-mobile">
    <div class="container">
        <div class="section-title text-right pb-30">
            <img src="{{url('/front/assets/img/rewaq.png')}}" alt="" />
            <h2 class="title">{{__('front.magazine')}}</h2>
        </div>
    </div>
</section>

<section class="magazine-sec bg-light p-4">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-12 mb-5 text-center">
            <h2 class="title fs-3 fw-bold">{{__('front.magazine')}}</h2>
            <p>{{$magazine->translation->content}}</p>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1000">
                <div class="h-100">
                    <div class="position-sticky sticky-top">
                        @if(!empty($magazineBlog->img))
                            <div class="image-box">
                                <img src="{{$magazineBlog->img}}" alt="{{$magazineBlog->translation->title}}">
                            </div>
                        @endif
                    </div>
                </div>

            </div>
            <div class="col-lg-8 h-25 steps-con" data-aos="fade-down" data-aos-duration="1000">
                <ul class="steps">
                    @for ($i = 1; $i <10; $i++)
                        @php
                            $title = "title_".$i;
                            $content = "content_".$i;
                        @endphp

                        @if(!empty($magazineBlog->translation->$title))
                            <li>
                                <small>
                                    <strong>{{$magazineBlog->translation->$title}}</strong>
                                </small>
                                <div>{{ filter_var($magazineBlog->translation->$content, FILTER_SANITIZE_STRING) }}</div>
                            </li>
                        @endif
                    @endfor
                </ul>
            </div>
            <div class="col-lg-12">
                <a href="{{ langUrl('/magazine') }}" class="btn btn">
                    {{__('front.archives')}}
                </a>
            </div>
        </div>
    </div>
</section>


    <section class="title mt-10">
        <div class="container">
            <div class="section-title text-right pb-30">
                <img src="{{url('/front/assets/img/be2.png')}}" alt="">
                <h2 class="title ">كٌـــنْ</h2>
            </div>
        </div>
       </section>

       <section class="booking-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="content-column col-lg-6 col-md-12 col-sm-12 d-flex d-xl-none d-lg-none d-md-none d-sm-flex d-xs-flex">
                    <div class="inner-column">
                        <!--<img src="{{url('/front/assets/img/be.png')}}" alt="">-->
                      <div class="section-title">
                        <h2>
                            كُـــنْ لـلـتـدريــب والـتـطـويـر</h2>
                      </div>
                        <p>
                            يهدف الى صناعة قادةٍ بادوات عصرية تمكنهم من مواكبة التقدم والتطور العالمي لمزاولة عملهم بمهنية . 
                        </p>
                        <div class="btns d-none d-xl-flex d-lg-flex d-md-flex d-sm-none d-xs-none">
                            <a href="#" class="btn btn-1">
                                تعرف عـنا
                            </a>
                            <a href="#" class="btn btn-2">
                                الذهاب للموقع
                            </a>
                        </div>

                                        </div>
                </div>
                <div class="video-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                       
                        <div class="video-box">
                            <div class="image"><img alt="about img" src="{{url('/front/assets/img/xxxx.png')}}">
                            </div>
                        </div>
                        <div class="btns d-flex d-xl-none d-lg-none d-md-none d-sm-flex d-xs-flex">
                            <a href="#" class="btn btn-1">
                                تعرف علينا
                            </a>
                            <a href="#" class="btn btn-2">
                                الذهاب للموقع
                            </a>
                        </div>
                    </div>
                </div>
                <div class="content-column col-lg-6 col-md-12 col-sm-12 d-none d-xl-flex d-lg-flex d-md-flex d-sm-none d-xs-none">
                    <div class="inner-column">
                        <img src="{{url('/front/assets/img/be.png')}}" alt="">
                        <h2>
                            كُـــنْ لـلـتـدريــب والـتـطـويـر</h2>
                        <p>
                            يهدف الى صناعة قادةٍ بادوات عصرية تمكنهم من مواكبة التقدم والتطور العالمي لمزاولة عملهم بمهنية . 
                        </p>
                        <div class="btns">
                            <a href="#" class="btn btn-1">
                                تعرف علينا
                            </a>
                            <a href="#" class="btn btn-2">
                                الذهاب للموقع
                            </a>
                        </div>

                                        </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="title mt-10">
        <div class="container">
            <div class="section-title text-right pb-30">
                <img src="{{url('front/assets/img/meters (2).png')}}" alt="aboutImage">
                <h2 class="title ">عراق ميتر</h2>
            </div>
        </div>
    </section>
    
      <section class="booking-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="content-column col-lg-6 col-md-12 col-sm-12 d-flex d-xl-none d-lg-none d-md-none d-sm-flex d-xs-flex">
                    <div class="inner-column">
                       <img src="{{url('front/assets/img/meters (2).png')}}" alt="aboutImage">
                      <div class="section-title">
                      <h2>  تطبيق الكتروني متطور تم استحداثه بدعم من مؤسسة كونراد ادناور الالمانية، لخلق حلقة وصل فعالة بين الناخب والمرشح، بالشكل الذي يضمن اختيار المرشح الاكفأ وتحقيق عملية انتخابية نزيهة و شفافة.
                        </h2>
                      </div>
                        <p>
                     يتيح التطبيق للناخب فرصة التعرف والاطلاع على البيانات والبرنامج الانتخابي الخاص بكل مرشح، ضمن المرشحين في دائرته الانتخابية، بما يسهل عليه عملية اختيار الافضل منهم.
                        </p>
                        <div class="btns d-none d-xl-flex d-lg-flex d-md-flex d-sm-none d-xs-none">
                            <a href="https://www.youtube.com/channel/UCez_ypwyfMW4__OYfYIOD8g" class="btn btn-1">
                                تعرف عـنا
                            </a>
                           <a href="https://rewaqbaghdad.org/ar/iraq/meter/blogs" class="btn btn-2">
                                الاستبيانات 
                            </a>
                        </div>

                                        </div>
                </div>
                <div class="video-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                       
                        <div class="video-box">
                            <div class="image">
                                <img src="{{url('front')}}/assets/img/vector1.png" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="btns d-flex d-xl-none d-lg-none d-md-none d-sm-flex d-xs-flex">
                            <a href="https://www.youtube.com/channel/UCez_ypwyfMW4__OYfYIOD8g" class="btn btn-1">
                                تعرف علينا
                            </a>
                            <a href="https://rewaqbaghdad.org/ar/iraq/meter/blogs" class="btn btn-2">
                                الاستبيانات 
                            </a>
                        </div>
                    </div>
                </div>
                <div class="content-column col-lg-6 col-md-12 col-sm-12 d-none d-xl-flex d-lg-flex d-md-flex d-sm-none d-xs-none">
                    <div class="inner-column">
                        <img src="{{url('front/assets/img/meters (2).png')}}" alt="aboutImage">
                               <h2 class="title ">عراق ميتر </h2>
                        <p>
                            يهدف الى صناعة ق يتيح التطبيق للناخب فرصة التعرف والاطلاع على البيانات والبرنامج الانتخابي الخاص بكل مرشح، ضمن المرشحين في دائرته الانتخابية، بما يسهل عليه عملية اختيار الافضل منهم. . 
                        </p>
                        <div class="btns">
                            <a href="https://www.youtube.com/channel/UCez_ypwyfMW4__OYfYIOD8g" class="btn btn-1">
                                تعرف علينا
                            </a>
                            <a href="https://rewaqbaghdad.org/ar/iraq/meter/blogs" class="btn btn-2">
                                الاستبيانات 
                            </a>
                        </div>

                                        </div>
                </div>
            </div>
        </div>
    </section>

    <section class="title mt-10">
        <div class="container">
            <div class="section-title text-right pb-30">
                <img src="{{url('/front/assets/img/mick.png')}}" alt="">
                <h2 class="title ">بودكاست فكر</h2>
            </div>
        </div>
       </section>

       <section class="booking-section bgb">
        <div class="container bg-light">
            <div class="row align-items-center">
           
                <div class="content-column text-center col-lg-9 col-md-12 col-sm-12">
                    <div class="inner-column">
                       <div class="section-title">
                        <h2 class="bg-light">
                            بودكاست فكر</h2>
                       </div>
                        <p>
                            من الشباب للشباب.. نسلط الضوء على تجارب الشباب العراقي الملهمة. فنروي تجاربهم و ما يتخللها من تحديات و العقبات و نشاركهم بهجة النجاح و نشوته و نروي حكايات تسير على درب النجاح و نُسمِع العالم صوتها علنا نكون عونا لها في النجاح
                                                </p>
                        <div class="btns justify-content-center d-none d-xl-flex d-lg-flex d-md-flex d-sm-none d-xs-none">
                            <a href="{{url('boadcast')}}" class="btn btn-3">
                                تعرف عـنا
                            </a>
                            <a href="#" class="btn btn-3">
                                الذهاب للموقع
                            </a>
                        </div>

                                        </div>
                </div>
                <div class="video-column col-lg-3 col-md-12 col-sm-12">
                    <div class="inner-column">
                       
                        <div class="video-box">
                            <div class="image"><img alt="about img" src="{{url('/front/assets/img/mice.png')}}">
                            </div>
                        </div>
                        <div class="btns d-flex d-xl-none d-lg-none d-md-none d-sm-flex d-xs-flex">
                            <a href="#" class="btn btn-3">
                                تعرف عـنا
                            </a>
                            <a href="#" class="btn btn-3">
                                الذهاب للموقع
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



<section class="title mt-10">
    <div class="container">
        <div class="section-title text-right pb-30">
            <h2 class="title">{{__('front.to_join_us')}}</h2>
        </div>
    </div>
</section>

<section class="subescribe-sec bg-light pt-3 mt-5 mb-5">
    <div class="container">
       
        <div class="row align-items-center">
            <div class="col-lg-8" data-aos="fade-up" data-aos-duration="1000">
                <div class="content_block_1">
                    <div class="content-box">
                        <div class="text">
                            <h2 class="title">{{__('front.subscribe_with_us')}}</h2>
                            <form action="{{url('subscription')}}" method="post">@csrf
                                <button type="submit" class="submit">{{__('front.subscription')}}</button>
                                <input type="email" name="email" required placeholder="{{__('front.enter_email')}}">
                            </form>
                            <h2 class="title">{{__('front.follow_social_sites')}}</h2>

                            <ul class="d-flex social-media">
                                @if(!empty($SiteData->facebook))
                                    <li><a target="_balnak" href="{{$SiteData->facebook}}"><i class="fa-brands fa-facebook"></i></a></li>
                                @endif
                                @if(!empty($SiteData->twitter))
                                    <li><a href="{{$SiteData->twitter}}" target="_blank"><i class="fa-brands fa-twitter"></i></a><li>
                                @endif
                                
                                @if(!empty($SiteData->instagram))
                                    <li><a href="{{$SiteData->instagram}}" target="_blank"><i class="fa-brands fa-instagram"></i></a><li>
                                @endif
                                @if(!empty($SiteData->linkedin))
                                    <li><a href="{{$SiteData->linkedin}}" target="_blank"><i class="fa-brands fa-linkedin"></i></a><li>
                                @endif
                                @if(!empty($SiteData->youtube))
                                    <li><a href="{{$SiteData->youtube}}" target="_blank"><i class="fa-brands fa-youtube"></i></a><li>
                                @endif
                                @if(!empty($SiteData->telegram))
                                    <li><a href="{{$SiteData->telegram}}" target="_blank"><i class="fa-brands fa-telegram"></i></a><li>
                                @endif
                                @if(!empty($SiteData->tiktok))
                                    <li><a href="{{$SiteData->tiktok}}" target="_blank"><i class="fa-brands fa-tiktok"></i></a><li>
                                @endif
                                @if(!empty($SiteData->whatsapp))
                                    <li><a href="{{$SiteData->whatsapp}}" target="_blank"><i class="fa-brands fa-whatsapp"></i></a><li>
                                @endif
                            </ul>
                        </div>

                    </div>
                </div>

            </div>
            <div class="col-lg-4" data-aos="fade-down" data-aos-duration="1000">
                @if(appLangKey()=='ar')
                <img src="/front/assets/img/frame.png" alt="mokups">
                @else
                <img src="/front/assets/img/frameEn.png" alt="mokups">
                @endif
            </div>
        </div>
    </div>
</section>

@endsection