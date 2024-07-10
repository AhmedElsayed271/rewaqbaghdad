@extends('layout.front.app')
@section('title', 'boadcast')

@section('content')

<section class="perlament-sec blue mt-10 mb-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 class="title-sec-b">
                     نبذة عن بودكاست فكر 
                    </h3>
                </div>
            </div>
        </div>
    </section>
 
    <section class="parlmente-sec blue boadcast mb-5 h-auto">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title text-right pb-1 mb-1">
                        <h2 class="title ">بــودكــاست فــكــر </h2>
                    </div>
                  <p class="text-center">
                    من الشباب للشباب..
                    <br>
                    نسلط الضوء على تجارب الشباب العراقي الملهمة..
                    <br>
                    فنروي تجاربهم و ما يتخللها من تحديات و العقبات و نشاركهم بهجة النجاح و نشوته
                    <br>
                    و نروي حكايات تسير على درب النجاح و نُسمِع العالم صوتها علنا نكون عونا لها في النجاح
                                                </p>
                </div>
                <div class="col-lg-6">
                    <div class="img-box text-center">
                        <img src="{{url('/front/assets/img/Fakkerlogo.png')}}" alt="aboutImage">
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
                        لمعرفة بودكاست فكر
                    </h3>
                </div>
               
            </div>
        </div>
    </section>

   <section class="vector vector-2 booking-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <img src="{{url('/front/assets/img/micknew.png')}}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-12">
                <p>
                    يمكنك زيارة منصتنا للأستماع الى البودكاست بكامل حلقاته , كذلك يمكنك مشاهدتها <br> على اليوتوب ايضا.
                                </p>
                <div class="btns">
                    <a href="https://linktr.ee/fakker.podcast" class="btn btn-1">
                        للاستماع للبودكاست
                    </a>
                    <a href="https://www.youtube.com/channel/UCd_Jrcqu00p6Yj12w4DtshA/" class="btn btn-1">
                        الذهاب لليوتوب
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
                <img src="{{url('/front/assets/img/micknew.png')}}" class="top-img img-fluid" alt="">
                <div class="content-box">
                    <p>
                        أو يمكنكم التواصل مباشرةً معنا
                    </p>
                    <ul class="social-box">
                        <li>
                     <img src="{{url('/front/assets/img/facebook.png')}}" alt="">
                            
                             <a href="https://www.youtube.com/channel/UCd_Jrcqu00p6Yj12w4DtshA/" class="underline"> Fakker-فکّر</a>
                        </li>
                        <li>
                            <img src="{{url('/front/assets/img/insta.png')}}" alt="">
                            <a href="https://www.instagram.com/podcast_fakker/" class="underline">Fakker</a>
                        </li>
                        <li>
                            <img src="{{url('/front/assets/img/email.png')}}" alt="">
                            <a href="mailto:podcastthink82@gmail.com">podcastthink82@gmail.com</a>
                        </li>
                        <li>
                            <img src="{{url('/front/assets/img/whatsapp.png')}}" alt="">
                            +9647837803788
                        </li>
                    
                    
                    </ul>
                </div>
            </div>
        </div>
    </div>
   </section>
@endsection

