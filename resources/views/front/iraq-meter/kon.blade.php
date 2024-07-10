@extends('layout.front.app')
@section('title', 'Kon')

@section('content')

<section class="perlament-sec blue mt-10 mb-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 class="title-sec-b">
                        نبذة عن كٌـــنْ
                    </h3>
                </div>
            </div>
        </div>
    </section>
 
    <section class="parlmente-sec blue mb-5 h-auto">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title text-right pb-1 mb-1">
                        <h2 class="title ">كُــنْ لـلتدريب والـتطوير </h2>
                    </div>
                  <p>
                    يهدف كٌــنْ لـلـتـدريـب والـتـطـوير الى صناعة قادةٍ بادوات عصرية تمكنهم من مواكبة التقدم والتطور العالمي لمزاولة عملهم بمهنية .
                </p>
                </div>
                <div class="col-lg-6">
                    <div class="img-box text-center">
                        <img src="{{url('/front/assets/img/be-vector.png')}}" alt="aboutImage">
                    </div>
                </div>
            </div>
        </div>
    </section>

   
    <section class="title blue mt-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 class="title-sec-b">
                        لمعرفة  كُـــنْ
                    </h3>
                </div>
               
            </div>
        </div>
    </section>

   <section class="vector vector-2 booking-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <img src="{{url('/front/assets/img/vector-2.png')}}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-12 mt-3">
                <p>
                    يمكنك زيارة موقعنا الالكتروني لمعرفة تفاصيل الدورات , والعروض والمشاركة
                    <br>
                    في الدورات التي ترغب في الحصول عليها بلأضافة الى يمكنك اقتراح توفير 
                    <br>
                    دورات  .. لا تتردد في الزيارة
                                </p>
                <div class="btns">
                    {{-- <a href="#" class="btn btn-1">
                        لزيارة الموقع
                    </a> --}}

                    <a href="https://www.youtube.com/channel/UCez_ypwyfMW4__OYfYIOD8g" class="btn btn-1">
                        تعرف علينا
                    </a>
                   
                </div>
            </div>
        </div>
    </div>
   </section>


   <section class="vector-about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 p-0">
                <img src="{{url('/front/assets/img/vector-bg.png')}}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6">
                <img src="{{url('/front/assets/img/be2.png')}}" class="top-img img-fluid" alt="">
                <div class="content-box">
                    <p>
                        أو يمكنكم التواصل مباشرةً معنا
                    </p>
                    <ul class="social-box">
                        <li>
                            <img src="{{url('/front/assets/img/facebook.png')}}" alt="">
                            كُــــنّْ للتدريب والتطوير
                        </li>
                        <li>
                            <img src="{{url('/front/assets/img/insta.png')}}" alt="">
                            <a href="https://www.instagram.com/kun_fortraining/" class="underline">kun_fortraining</a>
                        </li>
                        <li>
                            <img src="{{url('/front/assets/img/email.png')}}" alt="">
                            <a href="mailto:konkun92@gmail.com">konkun92@gmail.com</a>
                        </li>
                        <li>
                            <img src="{{url('/front/assets/img/whatsapp.png')}}" alt="">
                            +964 783 577 6157
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
   </section>
   
@endsection

