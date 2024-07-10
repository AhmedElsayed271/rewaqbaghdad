@extends('layout.front.app')
@section('title', __('front.center_members'))


@section('content')

<section class="breadcrumb mt-4">
    <div class="container">
     <nav aria-label="breadcrumb">
         <ol class="breadcrumb">
           <li class="breadcrumb-item"><a href="{{ langUrl() }}">{{__('front.home')}}</a></li>
           <li class="breadcrumb-item"><a href="{{ url()->current() }}">{{ __('front.who_we') }}</a></li>
           <li class="breadcrumb-item active">@yield('title')</li>
         </ol>
       </nav>
    </div>
</section>


<section class="members-center bg-white">
    <div class="container mt-10 mb-5 margin-top0">
        <div class="row mb-5">
            <div class="col-lg-12">
                <div class="title-page text-center d-block">
                    {{ __('front.board_directors') }} 
                 </div>
                 @php
                    $description = "description_".appLangKey();
                 @endphp
                <p class="desc">{{ $setting->$description }}</p>
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            
            @if (!$teamsCBD->isEmpty())
                <div class="col-lg-12">
                    @if(appLangKey()=='ar')
                    <img src="/front/assets/img/ceo.png" class="img-fluid ceo-img" alt="">
                    @else
                    <img src="/front/assets/img/ceoEn.png" class="img-fluid ceo-img" alt="">
                    @endif
                </div>
            @endif

            @foreach ($teamsCBD as $CBD)
                <div class="modal fade" id="CBD-{{$CBD->id}}" tabindex="-1" aria-labelledby="CBD-{{$CBD->id}}Title"  aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered max-w-100">
                    <div class="modal-content">
                        <div class="modal-header height45">
                        
                            <a href="#" data-bs-dismiss="modal" aria-label="Close">
                                <img src="/front/assets/img/close.png" class="close" alt="close">
                            </a>
                        </div>
                        <div class="modal-body text-center modal-body-padding">
                            <div class="img-box"><img src="{{ $CBD->img }}" alt="members"></div>
                            <p class="name">{{ $CBD->translation->name }}</p>
                            <a href="mailto:{{ $CBD->email }}">{{ $CBD->email }} <img src="/front/assets/img/mail.png" alt=""></a>
                            <p>{!! $CBD->translation->description !!}</p>
                            @if (!empty($CBD->cv_link))
                                <a href="{{ url($CBD->cv_link) }}" class="btn btn-info text-white">{{ __('front.to_go_to_resume') }}</a>
                            @endif
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-12 text-center">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#CBD-{{$CBD->id}}">
                        <div class="img-box"><img src="{{ $CBD->img }}" alt="{{ $CBD->translation->name }}"></div>
                    <div class="desc-member">
                        <small>
                            <strong>{{ $CBD->translation->name }}</strong>
                        </small>
                        <p>{{ $CBD->translation->job_title }}</p>
                    </div>
                    </a>
                </div>
            @endforeach

            @if (!$teamsCEO->isEmpty())
                <div class="col-lg-12">
                    @if(appLangKey()=='ar')
                    <img src="/front/assets/img/cto.png" class="img-fluid ceo-img" alt="">
                    @else
                    <img src="/front/assets/img/ctoEn.png" class="img-fluid ceo-img" alt="">
                    @endif
                    
                </div>
            @endif

            @foreach ($teamsCEO as $CEO)
                <div class="modal fade" id="CEO-{{$CEO->id}}" tabindex="-1" aria-labelledby="CEO-{{$CEO->id}}Title"  aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered max-w-100">
                    <div class="modal-content">
                        <div class="modal-header">
                        
                            <a href="#" data-bs-dismiss="modal" aria-label="Close">
                                <img src="/front/assets/img/close.png" class="close" alt="close">
                            </a>
                        </div>
                        <div class="modal-body text-center">
                            <div class="img-box"><img src="{{ $CEO->img }}" alt="{{ $CEO->translation->name }}"></div>
                            <p class="name">{{ $CEO->translation->name }}</p>
                            <a href="mailto:{{ $CEO->email }}">{{ $CEO->email }} <img src="/front/assets/img/mail.png" alt=""></a>
                            <p>{!! $CEO->translation->description !!}</p>
                            @if (!empty($CEO->cv_link))
                                <a href="{{ $CEO->cv_link }}" class="btn btn-info text-white">{{ __('front.to_go_to_resume') }}</a>
                            @endif
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col-lg-12 text-center">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#CEO-{{$CEO->id}}">
                    <div class="img-box"><img src="{{ $CEO->img }}" alt="{{ $CEO->translation->name }}"></div>
                    <div class="desc-member">
                        <small>
                            <strong>{{ $CEO->translation->name }}</strong>
                        </small>
                        <p>{{ $CEO->translation->job_title }}</p>
                    </div>
                    </a>
                </div>
            @endforeach


            @if (!$teamsMEM->isEmpty())
                <div class="col-lg-12">
                    @if(appLangKey()=='ar')
                    <img src="/front/assets/img/members.png" class="img-fluid ceo-img" alt="">
                    @else
                    <img src="/front/assets/img/membersEn.png" class="img-fluid ceo-img" alt="">
                    @endif
                </div>
            @endif


            @foreach ($teamsMEM as $MEM)
                <div class="modal fade" id="MEM-{{$MEM->id}}" tabindex="-1" aria-labelledby="MEM-{{$MEM->id}}Title"  aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered max-w-100">
                    <div class="modal-content">
                        <div class="modal-header">
                        
                            <a href="#" data-bs-dismiss="modal" aria-label="Close">
                                <img src="/front/assets/img/close.png" class="close" alt="close">
                            </a>
                        </div>
                        <div class="modal-body text-center">
                            <div class="img-box"><img src="{{ $MEM->img }}" alt="{{ $MEM->translation->name }}"></div>
                            <p class="name">{{ $MEM->translation->name }}</p>
                            <a href="mailto:{{ $MEM->email }}">{{ $MEM->email }} <img src="/front/assets/img/mail.png" alt=""></a>
                            <p>{!! $MEM->translation->description !!}</p>
                            @if (!empty($MEM->cv_link))
                                <a href="{{ $MEM->cv_link }}" class="btn btn-info text-white">{{ __('front.to_go_to_resume') }}</a>
                            @endif
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col-lg-4 text-center">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#MEM-{{$MEM->id}}">
                <div class="img-box"><img src="{{ $MEM->img }}" alt="{{ $MEM->translation->name }}"></div>
                    <div class="desc-member">
                        <small>
                            <strong>{{ $MEM->translation->name }}</strong>
                        </small>
                        <p>{{ $MEM->translation->job_title }}</p>
                    </div>
                    </a>
                
                </div>
            @endforeach
            

            @if (!$teamsEMP->isEmpty())
                <div class="col-lg-12">
                    @if(appLangKey()=='ar')
                    <img src="/front/assets/img/emploayee.png" class="img-fluid ceo-img" alt="">
                    @else
                    <img src="/front/assets/img/emploayeeEn.png" class="img-fluid ceo-img" alt="">
                    @endif
                </div>
            @endif

            @foreach ($teamsEMP as $EMP)
                <div class="modal fade" id="EMP-{{$EMP->id}}" tabindex="-1" aria-labelledby="EMP-{{$EMP->id}}Title"  aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered max-w-100">
                    <div class="modal-content">
                        <div class="modal-header">
                        
                            <a href="#" data-bs-dismiss="modal" aria-label="Close">
                                <img src="/front/assets/img/close.png" class="close" alt="close">
                            </a>
                        </div>
                        <div class="modal-body text-center">
                            <div class="img-box"><img src="{{ $EMP->img }}" alt="{{ $EMP->translation->name }}"></div>
                            <p class="name">{{ $EMP->translation->name }}</p>
                            <a href="mailto:{{ $EMP->email }}">{{ $EMP->email }} <img src="/front/assets/img/mail.png" alt=""></a>
                            <p>{!! $EMP->translation->description !!}</p>
                            @if (!empty($EMP->cv_link))
                                <a href="{{ $EMP->cv_link }}" class="btn btn-info text-white">{{ __('front.to_go_to_resume') }}</a>
                            @endif
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#EMP-{{$EMP->id}}">
                <div class="img-box"><img src="{{ $EMP->img }}" alt="{{ $EMP->translation->name }}"></div>
                    <div class="desc-member">
                        <small>
                            <strong>{{ $EMP->translation->name }}</strong>
                        </small>
                        <p>{{ $EMP->translation->job_title }}</p>
                    </div>
                    </a>
                </div>
            @endforeach
            
        </div>
    </div>
    {{-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered max-w-100">
          <div class="modal-content">
            <div class="modal-header">
             
                <a href="#" data-bs-dismiss="modal" aria-label="Close">
                    <img src="/front/assets/img/close.png" class="close" alt="close">
                </a>
            </div>
            <div class="modal-body text-center">
                <div class="img-box"><img src="/front/assets/img/5395fd71-b01b-45fa-9cd7-f1746ca09a01.jpg" alt="members"></div>
                <p class="name">
                    عباس العنبوري
                </p>
                <a href="mailto:abbas_alanbory@gmail.com">abbas_alanbory@gmail.com <img src="/front/assets/img/mail.png" alt=""></a>
                <p>
                    الأستاذ المتمرس د. كامل علاوي كاظم تعرف قاعدة القيمة أو معيار القيمة بأنها الوحدة الأساس الذي يتخذها البلد في قياس القيم الاقتصادية، وتنجز الالتزامات المالية بها فضلاً عن إجراء المقارنة بين قيم السلع، لكونها وحدة الحساب الة في النظام النقدي للبلد، ويجري تعيين معيار القيمة من قبل الدولة. وبشكل عام يوجد نوعين من القواعد هما؛ القواعد المعدنية والقواعد الورقية( ). وتشكل قاعدة القيمة محور القاعدة النقدية التي تعد الأساس الذي يقوم عليه النظام النقدي، ويتوقف نجاح النظام النقدي على تحقيق النمو الاقتصادي وتوفير عرض نقد كاف يسهل عملية التبادل التجاري.
                </p>
                <a href="#" class="btn btn-info text-white">للذهاب للسيرة الذاتية</a>
            </div>
          </div>
        </div>
    </div> --}}
</section>



@endsection