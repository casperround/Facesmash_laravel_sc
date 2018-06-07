@extends('layouts.admin', ["title" => "Dashboard", "sidebar" => false])

@section("content")

    <div class="m-portlet  m-portlet--unair">
        <div class="m-portlet__body  m-portlet__body--no-padding">
            <div class="row m-row--no-padding m-row--col-separator-xl">
                <div class="col-md-12 col-lg-6 col-xl-3">
                    <div class="m-widget24">
                        <div class="m-widget24__item">
                            <h4 class="m-widget24__title">
                                Total Users
                            </h4>
                            <br>
                            <span class="m-widget24__desc">
                                Total Site Users
                            </span>
                            <span class="m-widget24__stats m--font-success">
                                {{ $totalSiteUsers }}
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 col-xl-3">
                    <div class="m-widget24">
                        <div class="m-widget24__item">
                            <h4 class="m-widget24__title">
                                Total Posts
                            </h4>
                            <br>
                            <span class="m-widget24__desc">
                                Total Site Posts
                            </span>
                            <span class="m-widget24__stats m--font-success">
                                {{ $totalSitePosts }}
                            </span>
                            <div class="m--space-40"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 col-xl-3">
                    <div class="m-widget24">
                        <div class="m-widget24__item">
                            <h4 class="m-widget24__title">
                                Total Groups
                            </h4>
                            <br>
                            <span class="m-widget24__desc">
                                Total Site Groups
                            </span>
                            <span class="m-widget24__stats m--font-success">
                                {{ $totalSiteGroups }}
                            </span>
                            <div class="m--space-40"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 col-xl-3">
                    <div class="m-widget24">
                        <div class="m-widget24__item">
                            <h4 class="m-widget24__title">
                                Total Channels
                            </h4>
                            <br>
                            <span class="m-widget24__desc">
                                Total Site Channels
                            </span>
                            <span class="m-widget24__stats m--font-success">
                                {{ $totalSiteChannels }}
                            </span>
                            <div class="m--space-40"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md">
            <div class="m-portlet m-portlet--full-height  m-portlet--unair">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Logged In Content Views
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <div style="width:100%;">
                        <canvas id="Loggedcanvas"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="m-portlet m-portlet--full-height  m-portlet--unair">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Non Logged In Content Views
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <div style="width:100%;">
                        <canvas id="nonLoggedcanvas"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

@section("js")
    <script>
        var configloggedIn = {
            type: 'line',
            data: {
                labels: ['7 Days Ago', '6 Days Ago', '5 Days Ago', '4 Days Ago', '3 Days Ago', 'Yesterday', 'Today'],
                datasets: [{
                    label: 'Main Views',
                    backgroundColor: "#c60000",
                    borderColor: "#c60000",
                    data: [
                        {{{ $mainDiscoveryLoggedIn['7dayVisitors'] }}},
                        {{{ $mainDiscoveryLoggedIn['6dayVisitors'] }}},
                        {{{ $mainDiscoveryLoggedIn['5dayVisitors'] }}},
                        {{{ $mainDiscoveryLoggedIn['4dayVisitors'] }}},
                        {{{ $mainDiscoveryLoggedIn['3dayVisitors'] }}},
                        {{{ $mainDiscoveryLoggedIn['yesterdayVisitors'] }}},
                        {{{ $mainDiscoveryLoggedIn['todayVisitors'] }}}
                    ],
                    fill: false,
                }, {
                    label: 'Channel Views',
                    backgroundColor: "#c6008a",
                    borderColor: "#c6008a",
                    data: [
                        {{{ $channelsLoggedIn['7dayVisitors'] }}},
                        {{{ $channelsLoggedIn['6dayVisitors'] }}},
                        {{{ $channelsLoggedIn['5dayVisitors'] }}},
                        {{{ $channelsLoggedIn['4dayVisitors'] }}},
                        {{{ $channelsLoggedIn['3dayVisitors'] }}},
                        {{{ $channelsLoggedIn['yesterdayVisitors'] }}},
                        {{{ $channelsLoggedIn['todayVisitors'] }}}
                    ],
                    fill: false,
                }, {
                    label: 'Gifs Views',
                    backgroundColor: "#5800c6",
                    borderColor: "#5800c6",
                    data: [
                        {{{ $gifsLoggedIn['7dayVisitors'] }}},
                        {{{ $gifsLoggedIn['6dayVisitors'] }}},
                        {{{ $gifsLoggedIn['5dayVisitors'] }}},
                        {{{ $gifsLoggedIn['4dayVisitors'] }}},
                        {{{ $gifsLoggedIn['3dayVisitors'] }}},
                        {{{ $gifsLoggedIn['yesterdayVisitors'] }}},
                        {{{ $gifsLoggedIn['todayVisitors'] }}}
                    ],
                    fill: false,
                }, {
                    label: 'Groups Views',
                    backgroundColor: "#00a7c6",
                    borderColor: "#00a7c6",
                    data: [
                        {{{ $groupsLoggedIn['7dayVisitors'] }}},
                        {{{ $groupsLoggedIn['6dayVisitors'] }}},
                        {{{ $groupsLoggedIn['5dayVisitors'] }}},
                        {{{ $groupsLoggedIn['4dayVisitors'] }}},
                        {{{ $groupsLoggedIn['3dayVisitors'] }}},
                        {{{ $groupsLoggedIn['yesterdayVisitors'] }}},
                        {{{ $groupsLoggedIn['todayVisitors'] }}}
                    ],
                    fill: false,
                }, {
                    label: 'Pages Views',
                    backgroundColor: "#00c605",
                    borderColor: "#00c605",
                    data: [
                        {{{ $pagesLoggedIn['7dayVisitors'] }}},
                        {{{ $pagesLoggedIn['6dayVisitors'] }}},
                        {{{ $pagesLoggedIn['5dayVisitors'] }}},
                        {{{ $pagesLoggedIn['4dayVisitors'] }}},
                        {{{ $pagesLoggedIn['3dayVisitors'] }}},
                        {{{ $pagesLoggedIn['yesterdayVisitors'] }}},
                        {{{ $pagesLoggedIn['todayVisitors'] }}}
                    ],
                    fill: false,
                }, {
                    label: 'Photos Views',
                    backgroundColor: "#00c605",
                    borderColor: "#00c605",
                    data: [
                        {{{ $photosLoggedIn['7dayVisitors'] }}},
                        {{{ $photosLoggedIn['6dayVisitors'] }}},
                        {{{ $photosLoggedIn['5dayVisitors'] }}},
                        {{{ $photosLoggedIn['4dayVisitors'] }}},
                        {{{ $photosLoggedIn['3dayVisitors'] }}},
                        {{{ $photosLoggedIn['yesterdayVisitors'] }}},
                        {{{ $photosLoggedIn['todayVisitors'] }}}
                    ],
                    fill: false,
                }, {
                    label: 'Video Views',
                    backgroundColor: "#c6ba00",
                    borderColor: "#c6ba00",
                    data: [
                        {{{ $videosLoggedIn['7dayVisitors'] }}},
                        {{{ $videosLoggedIn['6dayVisitors'] }}},
                        {{{ $videosLoggedIn['5dayVisitors'] }}},
                        {{{ $videosLoggedIn['4dayVisitors'] }}},
                        {{{ $videosLoggedIn['3dayVisitors'] }}},
                        {{{ $videosLoggedIn['yesterdayVisitors'] }}},
                        {{{ $videosLoggedIn['todayVisitors'] }}}
                    ],
                    fill: false,
                }]
            },
            options: {
                responsive: true,
                title: {
                    display: true,
                    text: 'Content Views (Logged in Users)'
                },
                tooltips: {
                    mode: 'index',
                    intersect: false,
                },
                hover: {
                    mode: 'nearest',
                    intersect: true
                },
            }
        };

        var confignonloggedin = {
            type: 'line',
            data: {
                labels: ['7 Days Ago', '6 Days Ago', '5 Days Ago', '4 Days Ago', '3 Days Ago', 'Yesterday', 'Today'],
                datasets: [{
                    label: 'Discover Views',
                    backgroundColor: "#c60000",
                    borderColor: "#c60000",

                    fill: false,
                },]
            },
            options: {
                responsive: true,
                title: {
                    display: true,
                    text: 'Content Views (Non Logged in Users)'
                },
                tooltips: {
                    mode: 'index',
                    intersect: false,
                },
                hover: {
                    mode: 'nearest',
                    intersect: true
                },
            }
        };

        window.onload = function() {
            var ctxnon = document.getElementById('Loggedcanvas').getContext('2d');
            window.myLine = new Chart(ctxnon, configloggedIn);

            var ctx = document.getElementById('nonLoggedcanvas').getContext('2d');
            window.myLine = new Chart(ctx, confignonloggedin);
        };
    </script>
@stop