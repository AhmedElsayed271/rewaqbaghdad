@php
    $admin = auth('admin')->user();
    $group = $admin->group;
@endphp
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    
    <div class="main-sidemenu">
        <div class="app-sidebar__user clearfix">
            <div class="dropdown user-pro-body">
                <div class="">
                    <img alt="user-img" class="avatar avatar-xl brround" src="{{$admin->img}}">
                    <span class="avatar-status profile-status bg-green"></span>
                </div>
                <div class="user-info">
                    <h4 class="font-weight-semibold mt-3 mb-0">{{$admin->name}}</h4>
                </div>
            </div>
        </div>
 
        <ul class="side-menu" style="overflow: auto;height: 82vh;">
            
            @if ($group->home_show == 'on')
                <li class="slide">
                    <a class="side-menu__item" href="{{url('/admin/home')}}">
                        <i class="fa-solid fa-house-chimney"></i>
                        <span class="side-menu__label">{{ __('global.dashboard') }}</span>
                        {{-- <span class="badge badge-success side-badge">1</span> --}}
                    </a>
                </li>
            @endif
            
            @if ($group->admin_show == 'on'||$group->admin_create == 'on')
                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="#">
                        <i class="fa-solid fa-user-gear"></i>
                        <span class="side-menu__label">{{ __('global.admins') }}</span><i class="angle fe fe-chevron-down"></i></a>
                    <ul class="slide-menu">
                        @if ($group->admin_show == 'on')
                            <li><a class="slide-item" href="{{ url('admin/admins') }}">{{ __('global.admins') }}</a></li>
                        @endif
                        @if ($group->admin_create == 'on')
                            <li><a class="slide-item" href="{{ url('admin/admins/create') }}">{{ __('global.admin_create') }}</a></li>
                        @endif
                    </ul>
                </li>
            @endif
            
            {{-- @if ($group->group_show == 'on'||$group->group_create == 'on')
                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="#">
                        <i class="fa-solid fa-shield-halved"></i>
                        <span class="side-menu__label">{{ __('global.groups') }}</span><i class="angle fe fe-chevron-down"></i></a>
                    <ul class="slide-menu">
                        @if ($group->group_show == 'on')
                            <li><a class="slide-item" href="{{ url('admin/groups') }}">{{ __('global.groups') }}</a></li>
                        @endif
                        @if ($group->group_create == 'on')
                            <li><a class="slide-item" href="{{ url('admin/groups/create') }}">{{ __('global.group_create') }}</a></li>
                        @endif
                    </ul>
                </li>
            @endif --}}
            
            @if ($group->about_show=='on'||$group->centerteam_show == 'on'||$group->bookteam_show == 'on')
                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="#">
                        <i class="fa-regular fa-circle-question"></i>
                        <span class="side-menu__label">{{ __('global.about.aside_title') }}</span><i class="angle fe fe-chevron-down"></i></a>
                    <ul class="slide-menu">
                        @if ($group->about_show == 'on')
                            <li><a class="slide-item" href="{{ url(appLangKey().'/admin/about') }}">{{ __('global.about.title') }}</a></li>
                        @endif
                        
                        @if ($group->centerteam_show == 'on')
                            <li><a class="slide-item" href="{{ url(appLangKey().'/admin/center-team') }}">{{ __('global.center_member.title') }}</a></li>
                        @endif
                        
                        @if ($group->bookteam_show == 'on')
                            <li><a class="slide-item" href="{{ url(appLangKey().'/admin/book-team') }}">{{ __('global.book_team.title') }}</a></li>
                        @endif
                    </ul>
                </li>
            @endif

            @if ($group->versioncategory_show=='on'||$group->version_show=='on')
                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="#">
                        <i class="fa-solid fa-certificate"></i>
                        <span class="side-menu__label">{{ __('global.version.title') }}</span><i class="angle fe fe-chevron-down"></i></a>
                    <ul class="slide-menu">
                        @if ($group->versioncategory_show == 'on')
                            <li><a class="slide-item" href="{{ url(appLangKey().'/admin/version-categories') }}">{{ __('global.version.categories') }}</a></li>
                        @endif
                        
                        @if ($group->version_show == 'on')
                            <li><a class="slide-item" href="{{ url(appLangKey().'/admin/versions') }}">{{ __('global.version.news') }}</a></li>
                        @endif
                        
                    </ul>
                </li>
            @endif
            
            @if ($group->activitycategory_show=='on'||$group->activity_show == 'on')
                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="#">
                        <i class="fa-regular fa-file"></i>
                        <span class="side-menu__label">{{ __('global.activity.title') }}</span><i class="angle fe fe-chevron-down"></i></a>
                    <ul class="slide-menu">
                        @if ($group->activitycategory_show == 'on')
                            <li><a class="slide-item" href="{{ url(appLangKey().'/admin/activity-categories') }}">{{ __('global.activity.categories') }}</a></li>
                        @endif
                        
                        @if ($group->activity_show == 'on')
                            <li><a class="slide-item" href="{{ url(appLangKey().'/admin/activities') }}">{{ __('global.activity.news') }}</a></li>
                        @endif
                        
                    </ul>
                </li>
            @endif
            
            @if ($group->medianews_show=='on'||$group->mediaphoto_show == 'on')
                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="#">
                        <i class="fa-solid fa-share-nodes"></i>
                        <span class="side-menu__label">{{ __('global.media.title') }}</span><i class="angle fe fe-chevron-down"></i></a>
                    <ul class="slide-menu">
                        
                        @if ($group->medianews_show == 'on')
                            <li><a class="slide-item" href="{{ url(appLangKey().'/admin/media-news') }}">{{ __('global.media.news.title') }}</a></li>
                        @endif
                        
                        @if ($group->mediaphoto_show == 'on')
                            <li><a class="slide-item" href="{{ url(appLangKey().'/admin/media-photos') }}">{{ __('global.media.photo.title') }}</a></li>
                        @endif
                        
                        @if ($group->mediavideocategory_show == 'on')
                            <li><a class="slide-item" href="{{ url(appLangKey().'/admin/media-videos-categories') }}">{{ __('global.media.video.categories') }}</a></li>
                        @endif
                        
                        @if ($group->mediavideo_show == 'on')
                            <li><a class="slide-item" href="{{ url(appLangKey().'/admin/media-videos') }}">{{ __('global.media.video.title') }}</a></li>
                        @endif
                        
                    </ul>
                </li>
            @endif
            
            @if ($group->rewaqteam_show=='on'||$group->rewaqpublishrule_edit=='on'||$group->rewaq_edit=='on'||$group->rewaqbook_show=='on')
                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="#">
                        <i class="fa-brands fa-slack"></i>
                        <span class="side-menu__label">{{ __('global.rewaq.title') }}</span><i class="angle fe fe-chevron-down"></i></a>
                    <ul class="slide-menu">
                        
                        @if ($group->rewaq_edit == 'on')
                            <li><a class="slide-item" href="{{ url(appLangKey().'/admin/rewaq') }}">{{ __('global.rewaq.rewaq_edit') }}</a></li>
                        @endif
                        
                        @if ($group->rewaqteam_show == 'on')
                            <li><a class="slide-item" href="{{ url(appLangKey().'/admin/rewaq-team') }}">{{ __('global.rewaq.team.title') }}</a></li>
                        @endif
                        
                        @if ($group->rewaqpublishrule_edit == 'on')
                            <li><a class="slide-item" href="{{ url(appLangKey().'/admin/rewaq/publish/rule') }}">{{ __('global.rewaq.publish_rule') }}</a></li>
                        @endif

                        @if ($group->rewaqbook_show == 'on')
                            <li><a class="slide-item" href="{{ url(appLangKey().'/admin/rewaq-books') }}">{{ __('global.rewaq.book.title') }}</a></li>
                        @endif

                    </ul>
                </li>
            @endif
            
            @if ($group->magazineteam_show=='on'||$group->magazine_edit=='on'||$group->magazinerules_edit == 'on'||$group->magazineblog_show == 'on')
                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="#">
                        <i class="fa-solid fa-layer-group"></i>
                        <span class="side-menu__label">{{ __('global.magazine.title') }}</span><i class="angle fe fe-chevron-down"></i></a>
                    <ul class="slide-menu">
                        
                        @if ($group->magazineteam_show == 'on')
                            <li><a class="slide-item" href="{{ url(appLangKey().'/admin/magazine-team') }}">{{ __('global.magazine.team.title') }}</a></li>
                        @endif
                        
                        @if ($group->magazine_edit=='on')
                            <li><a class="slide-item" href="{{ url(appLangKey().'/admin/magazine') }}">{{ __('global.magazine.magazine_edit') }}</a></li>
                        @endif
                        
                        @if ($group->magazinerules_edit == 'on')
                            <li><a class="slide-item" href="{{ url(appLangKey().'/admin/magazine/publish/rule') }}">{{ __('global.magazine.publish_rule') }}</a></li>
                        @endif

                        @if ($group->magazineblog_show == 'on')
                            <li><a class="slide-item" href="{{ url(appLangKey().'/admin/magazine-blog') }}">{{ __('global.magazine.blog.title') }}</a></li>
                        @endif

                    </ul>
                </li>
            @endif
            
            @if ($group->parliament_edit=='on'||$group->parliamentvideo_show == 'on')
                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="#">
                        <i class="fa-solid fa-mobile-screen-button"></i>
                        <span class="side-menu__label">{{ __('global.parliament.title') }}</span><i class="angle fe fe-chevron-down"></i></a>
                    <ul class="slide-menu">
                        
                        @if ($group->parliament_edit == 'on')
                            <li><a class="slide-item" href="{{ url(appLangKey().'/admin/parliament') }}">{{ __('global.parliament.title') }}</a></li>
                        @endif
                        
                        @if ($group->parliamentvideo_show == 'on')
                            <li><a class="slide-item" href="{{ url(appLangKey().'/admin/parliament-videos') }}">{{ __('global.parliament.video.title') }}</a></li>
                        @endif
                    </ul>
                </li>
            @endif
            
            @if ($group->events_show == 'on')
                <li class="slide">
                    <a class="side-menu__item" href="{{url(appLangKey().'/admin/events')}}">
                        <i class="fa-regular fa-calendar-days"></i>
                        <span class="side-menu__label">{{ __('global.event.title') }}</span>
                    </a>
                </li>
            @endif

            @if ($group->iraqmeter_show == 'on')
                <li class="slide">
                    <a class="side-menu__item" href="{{url(appLangKey().'/admin/iraq-meter')}}">
                        <i class="fa-solid fa-rss"></i>
                        <span class="side-menu__label">{{ __('global.iraqmeter.title') }}</span>
                    </a>
                </li>
            @endif
            
            @if ($group->slider_show == 'on')
                <li class="slide">
                    <a class="side-menu__item" href="{{url(appLangKey().'/admin/slider')}}">
                        <i class="fa-solid fa-sliders"></i>
                        <span class="side-menu__label">{{ __('global.slider.title') }}</span>
                    </a>
                </li>
            @endif
            
            @if ($group->electronic_show == 'on')
                <li class="slide">
                    <a class="side-menu__item" href="{{url(appLangKey().'/admin/electronic-services')}}">
                        <i class="fa-solid fa-list-ul"></i>
                        <span class="side-menu__label">{{ __('global.electronic.title') }}</span>
                    </a>
                </li>
            @endif
            
            @if ($group->newsletter_show == 'on')
                <li class="slide">
                    <a class="side-menu__item" href="{{url(appLangKey().'/admin/newsletters')}}">
                        <i class="fa-regular fa-paper-plane"></i>
                        <span class="side-menu__label">{{ __('global.newsletter.title') }}</span>
                    </a>
                </li>
            @endif
            
            @if ($group->backup_show == 'on')
                <li class="slide">
                    <a class="side-menu__item" href="{{url(appLangKey().'/admin/backup')}}">
                        <i class="fa-solid fa-database"></i>
                        <span class="side-menu__label">{{ __('global.backup') }}</span>
                    </a>
                </li>
            @endif

            @if ($group->setting_show == 'on')
                <li class="slide">
                    <a class="side-menu__item" href="{{url('/admin/settings')}}">
                        <i class="fa-solid fa-gear"></i>
                        <span class="side-menu__label">{{ __('global.settings') }}</span>
                    </a>
                </li>
            @endif
            
            <li class="slide">
                <a class="side-menu__item" href="{{url('/admin/logout')}}">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span class="side-menu__label">{{__('global.logout')}}</span>
                </a>
            </li>
            <br /><br />
            
        </ul>
    </div>
</aside>
<!-- main-sidebar -->