@extends('layout.front.app')
@section('title', __('front.iraqmeter'))

@section('content')

<section class="perlament-sec with-gold mt-10 mb-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 class="title-sec-b">
                        نبذة عن عراق ميتر
                                        </h3>
                </div>
            </div>
        </div>
    </section>
 
    <section class="parlmente-sec mb-5 h-auto">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title text-right pb-1 mb-1">
                        <h2 class="title ">عراق ميتر </h2>
                    </div>
                  <p>

                    تطبيق الكتروني متطور تم استحداثه بدعم من مؤسسة كونراد ادناور الالمانية، لخلق حلقة وصل فعالة بين الناخب والمرشح، بالشكل الذي يضمن اختيار المرشح الاكفأ وتحقيق عملية انتخابية نزيهة و شفافة.
  

                </p>
                <p>
                    يتيح التطبيق للناخب فرصة التعرف والاطلاع على البيانات والبرنامج الانتخابي الخاص بكل مرشح، ضمن المرشحين في دائرته الانتخابية، بما يسهل عليه عملية اختيار الافضل منهم. ويكفل له حق ابداء الرأي بالمرشح عبر الرفض، القبول، اوالحياد. 

                </p>
                <p>
                    يعمل التطبيق على تأسيس قاعدة بيانات متكاملة لكل من الناخبين والمرشحين بتوفير خاصية التسجيل ضمن الدوائر التي سينتخبون او سيرشحون فيها. كما و يتيح التطبيق للمرشح فرصة عرض بياناته للناخبين بما تتضمنه من (السيرة ذاتية، البرنامج الانتخابي، الدعايات... وغيرها).

                </p>
                </div>
                <div class="col-lg-6">
                    <div class="img-box text-center">
                        <img src="{{url('front/assets/img/meters (2).png')}}" alt="aboutImage">
                    </div>
                </div>
            </div>
        </div>
    </section>

   
    <section class="title with-gold mt-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 class="title-sec-b">
                        نبذة عن عراق ميتر
                    </h3>
                </div>
               
            </div>
        </div>
    </section>

   <section class="vector booking-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <img src="{{url('front')}}/assets/img/vector1.png" class="img-fluid" alt="">
            </div>
            <div class="col-lg-12">
                <p>
                    يمكنك طلب استبيانك الخاص واترك لنا باقي الامر .. فريق مختص بعمل 
                    <br>
                    استبيانات في جميع محافظات العراق
                                </p>
                <div class="btns">
                    <a href="{{url('request-survey')}}" class="btn btn-1">
                        لطلب استبيان
                    </a>
                    <a href="{{url('iraq/meter/blogs')}}" class="btn btn-2">
                        للذهاب الى الاستبيانات
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
                <img src="{{url('front')}}/assets/img/vector-bg.png" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6">
                <img src="{{url('front')}}/assets/img/meters.png" class="top-img img-fluid" alt="">
                <div class="content-box">
                    <p>
                        أو يمكنكم التواصل مباشرةً معنا
                    </p>
                    <ul class="social-box">
                        <li>
                            <img src="{{url('front')}}/assets/img/facebook.png" alt="">
                            عراق ميتر
                        </li>
                        <li>
                            <img src="{{url('front')}}/assets/img/insta.png" alt="">
                            عراق ميتر
                        </li>
                        <li>
                            <img src="{{url('front')}}/assets/img/email.png" alt="">
                            <a href="mailto:iraq_meter@gamil.com">iraq_meter@gamil.com</a>
                        </li>
                        <li>
                            <img src="{{url('front')}}/assets/img/whatsapp.png" alt="">
                            +964 783 577 4084
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
   </section>

@endsection

