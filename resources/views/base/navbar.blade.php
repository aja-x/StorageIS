@inject('notif', 'App\Services\NotificationServices')
<!-- ============================================================== -->
<!-- navbar -->
<!-- ============================================================== -->
<div class="dashboard-header">
    <nav class="navbar navbar-expand-lg bg-white fixed-top">
        <a class="navbar-brand" href="index.html">Storage IS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto navbar-right-top">
                <li class="nav-item">
                    {{--                    <div id="custom-search" class="top-search-bar">--}}
                    {{--                        <input class="form-control" type="text" placeholder="Search..">--}}
                    {{--                    </div>--}}
                </li>
                <li class="nav-item dropdown notification">
                    <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i>
                    @if($notif->countBerasExpired() > 0)<span class="indicator"></span>@endif
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                        <li>
                            <div class="notification-title"> Notifikasi</div>
                            <div class="notification-list">
                                <div class="list-group">
                                @if($notif->countBerasExpired() > 0)
                                        @foreach($notif->getBerasExpired()['gudang'] as $data)
                                        <a href="{{ route('gudang.show', $data->id) }}" class="list-group-item list-group-item-action active">
                                            <div class="notification-info">
{{--                                                <div class="notification-list-user-img">--}}
{{--                                                    <img src="{{ asset('concept-assets/images/avatar-2.jpg') }}" alt="" class="user-avatar-md rounded-circle">--}}
{{--                                                </div>--}}
                                                <div class="notification-list-user-block">Beras ID <span class="badge badge-primary">{{ $data->id }}</span> kadaluarsa.
                                                    <br>Tgl masuk: [{{ $notif->ymdToDmy($data->tanggal_masuk) }}]
                                                    <div class="notification-date">{{ $notif->countDiffDate($data->tanggal_masuk) }} hari yang lalu.</div>
                                                </div>
                                            </div>
                                        </a>
                                        @endforeach
                                    @else
                                        <div class="notification-info">
{{--                                            <div class="notification-list-user-img">--}}
{{--                                                <img src="{{ asset('concept-assets/images/avatar-2.jpg') }}" alt="" class="user-avatar-md rounded-circle">--}}
{{--                                            </div>--}}
                                            <div class="notification-list-user-block">
                                                <br>
                                                Tidak ada notifikasi
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </li>
{{--                        <li>--}}
{{--                            <div class="list-footer"> <a href="#">View all notifications</a></div>--}}
{{--                        </li>--}}
                    </ul>
                </li>
                <li class="nav-item dropdown nav-user">
                    <a class="nav-link text-white" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background: #5969ff">
                        Hai, {{ Auth::user()->name }} &nbsp<span class="fa fa-angle-down"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                        <div class="nav-user-info">
                            <h5 class="mb-0 text-white nav-user-name"> {{ Auth::user()->name }} </h5>
{{--                            <span class="status"></span><span class="ml-2">Available</span>--}}
                        </div>
{{--                        <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>--}}
{{--                        <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>--}}

                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="fas fa-power-off mr-2"></i>{{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
<!-- ============================================================== -->
<!-- end navbar -->
<!-- ============================================================== -->
