@php
    $title = __('public.Jobs')
@endphp
@extends('layouts.app')

@section('style')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/list.css') }}">
@endsection


@section('content')
@if (strtolower(language()->getCode()) == 'en')
    @php
        $align = 'left'
    @endphp
@elseif (strtolower(language()->getCode()) == 'ar')
    @php
        $align = 'right'
    @endphp
@endif

<div class="content-box">
    <br>
    <section class="is-title-bar">
        <div 
        @if (strtolower(language()->getCode()) == 'en')
            class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0"
        @elseif (strtolower(language()->getCode()) == 'ar')
            style="text-align: right"
        @endif
        >
          <ul>
            <li>{{ __('dashboard.Admin') }}</li>
            <li>
                @if (Route::currentRouteName() == 'NewJob')
                    {{ __('public.New Jobs') }}
                @endif

                @if (Route::currentRouteName() == 'CurrentJob')
                    {{ __('public.Current Jobs') }}
                @endif

                @if (Route::currentRouteName() == 'FinishJob')
                    {{ __('public.Finished Jobs') }}
                @endif
            </li>
          </ul>
        </div>
    </section>

    <section class="container mx-auto" style="width: 90%">

        <a href="{{ route('CreateJobs') }}" class="btn btn-success">
            <i class="fa-regular fa-square-plus" style="margin-right: 5px"></i>
            {{ __('public.Create Job') }}
        </a>

    </section>


    <section class="container mx-auto" style="width: 90%">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div id="content" class="content content-full-width">
                  <!-- begin profile -->
                  <div class="profile">
                     <div class="profile-header">
                        <!-- BEGIN profile-header-cover -->
                        <div class="profile-header-cover"></div>
                        <!-- END profile-header-cover -->
                        <!-- BEGIN profile-header-content -->
                        <div class="profile-header-content">
                           <!-- BEGIN profile-header-img -->
                           <div class="profile-header-img">
                              <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="">
                           </div>
                           <!-- END profile-header-img -->
                           <!-- BEGIN profile-header-info -->
                           <div class="profile-header-info">
                              <h4 class="m-t-10 m-b-5">Sean Ngu</h4>
                              <p class="m-b-10">UXUI + Frontend Developer</p>
                              <a href="#" class="btn btn-sm btn-info mb-2">Edit Profile</a>
                           </div>
                           <!-- END profile-header-info -->
                        </div>
                        <!-- END profile-header-content -->
                        <!-- BEGIN profile-header-tab -->
                        <ul class="profile-header-tab nav nav-tabs">
                           <li class="nav-item"><a href="#profile-post" class="nav-link active show" data-toggle="tab">POSTS</a></li>
                           <li class="nav-item"><a href="#profile-about" class="nav-link" data-toggle="tab">ABOUT</a></li>
                           <li class="nav-item"><a href="#profile-photos" class="nav-link" data-toggle="tab">PHOTOS</a></li>
                           <li class="nav-item"><a href="#profile-videos" class="nav-link" data-toggle="tab">VIDEOS</a></li>
                           <li class="nav-item"><a href="#profile-friends" class="nav-link" data-toggle="tab">FRIENDS</a></li>
                        </ul>
                        <!-- END profile-header-tab -->
                     </div>
                  </div>
                  <!-- end profile -->
                  <!-- begin profile-content -->
                  <div class="profile-content">
                     <!-- begin tab-content -->
                     <div class="tab-content p-0">
                        <!-- begin #profile-post tab -->
                        <div class="tab-pane fade active show" id="profile-post">
                           <!-- begin timeline -->
                           <ul class="timeline">
                              <li>
                                 <!-- begin timeline-time -->
                                 <div class="timeline-time">
                                    <span class="date">today</span>
                                    <span class="time">04:20</span>
                                 </div>
                                 <!-- end timeline-time -->
                                 <!-- begin timeline-icon -->
                                 <div class="timeline-icon">
                                    <a href="javascript:;">&nbsp;</a>
                                 </div>
                                 <!-- end timeline-icon -->
                                 <!-- begin timeline-body -->
                                 <div class="timeline-body">
                                    <div class="timeline-header">
                                       <span class="userimage"><img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt=""></span>
                                       <span class="username"><a href="javascript:;">Sean Ngu</a> <small></small></span>
                                       <span class="pull-right text-muted">18 Views</span>
                                    </div>
                                    <div class="timeline-content">
                                       <p>
                                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc faucibus turpis quis tincidunt luctus.
                                          Nam sagittis dui in nunc consequat, in imperdiet nunc sagittis.
                                       </p>
                                    </div>
                                    <div class="timeline-likes">
                                       <div class="stats-right">
                                          <span class="stats-text">259 Shares</span>
                                          <span class="stats-text">21 Comments</span>
                                       </div>
                                       <div class="stats">
                                          <span class="fa-stack fa-fw stats-icon">
                                          <i class="fa fa-circle fa-stack-2x text-danger"></i>
                                          <i class="fa fa-heart fa-stack-1x fa-inverse t-plus-1"></i>
                                          </span>
                                          <span class="fa-stack fa-fw stats-icon">
                                          <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                          <i class="fa fa-thumbs-up fa-stack-1x fa-inverse"></i>
                                          </span>
                                          <span class="stats-total">4.3k</span>
                                       </div>
                                    </div>
                                    <div class="timeline-footer">
                                       <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-thumbs-up fa-fw fa-lg m-r-3"></i> Like</a>
                                       <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-comments fa-fw fa-lg m-r-3"></i> Comment</a> 
                                       <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-share fa-fw fa-lg m-r-3"></i> Share</a>
                                    </div>
                                    <div class="timeline-comment-box">
                                       <div class="user"><img src="https://bootdey.com/img/Content/avatar/avatar3.png"></div>
                                       <div class="input">
                                          <form action="">
                                             <div class="input-group">
                                                <input type="text" class="form-control rounded-corner" placeholder="Write a comment...">
                                                <span class="input-group-btn p-l-10">
                                                <button class="btn btn-primary f-s-12 rounded-corner" type="button">Comment</button>
                                                </span>
                                             </div>
                                          </form>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- end timeline-body -->
                              </li>
                           </ul>
                           <!-- end timeline -->
                        </div>
                        <!-- end #profile-post tab -->
                     </div>
                     <!-- end tab-content -->
                  </div>
                  <!-- end profile-content -->
               </div>
            </div>
         </div>
      </div>
    </section>
</div>
@endsection