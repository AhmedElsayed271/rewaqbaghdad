@extends('layout.front.app')
@section('title', __('front.MEJEELP_magazine'))

@section('description', $magazine->translation->content)
@section('page_img', $magazine->img)

@section('content')

<section class="about-us-sec bg-white-greding-browen mb-5">
    <div class="container">
        <div class="row pt-5 justify-content-center align-items-center">
            <div class="col-lg-4">
                <div class="img-box text-center pb-3">
                    <img src="{{$magazine->img}}" alt="@yield('title')" class="border-0 w-50">
                </div>
            </div>
            <div class="col-lg-8">
                <strong class="fs-2 text-center d-block mb-3 text-white">
                    @yield('title')
                </strong>
                {!! $magazine->translation->content !!}
                <div class="row justify-content-center align-items-end">
                        
                    <div class="col-lg-6">
                        <div class="text">
                            <figure class="admin-thumb">
                                @if (isset($cbd))
                                <img width="27" height="27" src="{{$cbd->img}}" alt="{{$cbd->translation->name}}">
                                    
                                @endif
                            </figure>
                            <h4>
                                @if (isset($cbd))
                                <a href="#">{{$cbd->translation->job_title}}: <span class=" magazine-emp-namecolor">{{$cbd->translation->name}}</span></a>
                                @endif
                            </h4>
                        </div>
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="text">
                            <figure class="admin-thumb">
                                @if (isset($ec))
                                <img width="27" height="27" src="{{$ec->img}}" alt="{{$ec->translation->name}}">
                                @endif
                            </figure>
                            <h4>
                                @if (isset($ec))
                                <a href="#">{{$ec->translation->job_title}}: <span class=" magazine-emp-namecolor">{{$ec->translation->name}}</span></a>
                                @endif
                            </h4>
                        </div>
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="text">
                            <figure class="admin-thumb">
                                @if(isset($dec))
                                    <img width="27" height="27" src="{{$dec->img}}" alt="{{$dec->translation->name}}">
                                @endif
                            </figure>
                            <h4>
                                @if(isset($dec))
                                    <a href="#">{{$dec->translation->job_title}}: <span class=" magazine-emp-namecolor">{{$dec->translation->name}}</span></a>
                                @endif
                            </h4>
                        </div>
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="text">
                            <figure class="admin-thumb">
                                @if (isset($me))
                                <img width="27" height="27" src="{{$me->img}}" alt="{{$me->translation->name}}">
                                @endif
                            </figure>
                            <h4>
                                @if (isset($me))
                                <a href="#">{{$me->translation->job_title}}: <span class=" magazine-emp-namecolor">{{$me->translation->name}}</span></a>
                                @endif
                            </h4>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="activies-sec activies-brown">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                @foreach ($blogs as $blog)
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-2">
                            <a href="{{langUrl('/MEJEELP-magazine/blog/'.$blog->slug)}}">
                                <div class="img-box pb-3 pt-3">
                                <img src="{{$blog->img}}" alt="{{ $blog->translation->title }}" class="border-0">
                            </div>
                            </a>
                        </div>
                        <div class="col-lg-10">
                            <a href="{{langUrl('/MEJEELP-magazine/blog/'.$blog->slug)}}">
                                <small class="title-sec mb-1">
                                <strong>
                                    {{__('front.the_number')}} {{$blog->number}}
                                </strong>
                            </small>
                            <strong class="pt-1 pb-1 d-block">{{ $blog->translation->title }}</strong>
                            <p>{{ $blog->translation->description }}</p>
                                <img src="/front/assets/img/a.png" class="img-fluid pdf-img mb-3" alt="">
                            </a>
                        </div>
                        <hr>
                    </div>
                @endforeach
            </div>
            <div class="col-lg-3 margin20">
                <div class="widget_raper mt-3">

                    <p class="text-green">{{__('front.new_site')}}</p>
                    <div class="recent_post">
                        @foreach ($latestBlogs as $latest)    
                            <a href="{{langUrl('/MEJEELP-magazine/blog/'.$latest->slug)}}" class="single_recent_post">
                                <span class="rp_img" style="background-image: url({{$latest->img}});"></span>
                                <span>{{ formatDate($latest->created_at) }}</span>
                                <h4>{{ $latest->translation->title }}</h4>
                            </a>
                            <hr>
                        @endforeach
                    </div>
                </div>

                <div class="widget_raper bg-light p-2 mt-3">
                    <p class="text-green">{{ __('front.most_watched') }}</p>
                    <div class="recent_post">
                        @foreach ($mostWatched as $most)
                            <a href="{{langUrl('/MEJEELP-magazine/blog/'.$most->slug)}}" class="single_recent_post">
                                <span>{{ formatDate($most->created_at) }}</span>
                                <h4>{{ $most->translation->title }}</h4>
                            </a>
                            <hr>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mt-3 text-center d-none d-xl-flex d-lg-flex d-md-flex d-sm-none d-xs-none">{!! $blogs->links() !!}</div>
        </div>
    </div>
</section>

@endsection


@section('js')
@endsection