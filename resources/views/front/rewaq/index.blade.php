@extends('layout.front.app')
@section('title', __('front.rewaq'))

@section('description', $rewaq->translation->content)
@section('page_img', $rewaq->img)

@section('content')

<section class="about-us-sec bg-white-greding-green mb-5">
    <div class="container">
        <div class="row pt-5 justify-content-center align-items-center">
            <div class="col-lg-4">
                <div class="img-box text-center pb-3">
                    <img src="{{$rewaq->img}}" alt="{{__('front.rewaq')}}" class="border-0 w-50">
                </div>
            </div>
            <div class="col-lg-8">
                <strong class="fs-2 text-center d-block mb-3 text-white">
                    @yield('title')
                </strong>
                <p>{{ $rewaq->translation->content }}</p>
                <div class="row justify-content-center align-items-end">
                        
                    <div class="col-lg-6">
                        <div class="text">
                            <figure class="admin-thumb">
                                <img width="27" height="27" src="{{$rewaq->pm->pminfo->img}}" alt="LogoImage">
                            </figure>
                            <h4><a href="#">{{ $rewaq->pm->job_title }}: <span class="dar-emp-namecolor">{{ $rewaq->pm->name }}</span></a></h4>
                        </div>
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="text">
                            <figure class="admin-thumb">
                                <img width="27" height="27" src="{{$rewaq->am->aminfo->img}}" alt="LogoImage">
                            </figure>
                            <h4><a href="#">{{ $rewaq->am->job_title }}: <span class="dar-emp-namecolor">{{ $rewaq->am->name }}</span></a></h4>
                        </div>
                    </div>
                    
                    <div class="col-lg-12">
                        <div class="text">
                            <figure class="admin-thumb">
                                <img width="27" height="27" src="{{$rewaq->ps->psinfo->img}}" alt="LogoImage">
                            </figure>
                            <h4><a href="#">{{ $rewaq->ps->job_title }}: <span class="dar-emp-namecolor">{{ $rewaq->ps->name }}</span></a></h4>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="activies-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row justify-content-center align-items-center">
                    @foreach ($books as $book)
                        <div class="col-lg-2">
                            <a href="{{ langUrl('/rewaq/book/'.$book->slug) }}">
                                <div class="img-box pb-3 pt-3">
                                    <img src="{{ $book->img }}" alt="{{ $book->translation->title }}" class="border-0">
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-10">
                        <a href="{{ langUrl('/rewaq/book/'.$book->slug) }}">
                            <small class="title-sec mb-1">
                                <strong>{{ formatDate($book->created_at) }}</strong>
                            </small>
                            <strong class="pt-1 pb-1 d-block">{{ $book->translation->title }}</strong>
                            <p>{{ $book->translation->description }}</p>
                        </a>
                        </div>
                        <hr>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-3 margin20">
                    <div class="widget_raper mt-3">
                        <p class="text-green">{{ __('front.new_site') }}</p>
                        <div class="recent_post">
                            @foreach ($latestNews as $latest)
                                <a href="{{ langUrl('/rewaq/book/'.$latest->slug) }}" class="single_recent_post">
                                    <span class="rp_img" style="background-image: url({{$latest->img}});"></span>
                                    <span>{{ formatDate($latest->created_at) }}</span>
                                    <h4>{{$latest->translation->title}}</h4>
                                </a>
                                <hr>
                            @endforeach
                        </div>
                    </div>
                  <div class="widget_raper bg-light p-2 mt-3">
                    <p class="text-green">{{ __('front.most_watched') }}</p>
                    <div class="recent_post">
                        @foreach ($mostWatched as $most)
                            <a href="{{ langUrl('/rewaq/book/'.$most->slug) }}" class="single_recent_post">
                                <span>{{ formatDate($most->created_at) }}</span>
                                <h4>{{ $most->translation->title }}</h4>
                            </a>
                            <hr>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mt-3 text-center  d-none d-xl-flex d-lg-flex d-md-flex d-sm-none d-xs-none">
                {{ $books->links() }}
            </div>
        </div>
    </div>
</section>

@endsection


@section('js')
@endsection