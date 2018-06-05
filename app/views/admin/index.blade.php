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
                                Different Value
                            </h4>
                            <br>
                            <span class="m-widget24__desc">
                                Something else
                            </span>
                            <span class="m-widget24__stats m--font-success">
                                276
                            </span>
                            <div class="m--space-40"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 col-xl-3">
                    <div class="m-widget24">
                        <div class="m-widget24__item">
                            <h4 class="m-widget24__title">
                                Different Value
                            </h4>
                            <br>
                            <span class="m-widget24__desc">
                                Something else
                            </span>
                            <span class="m-widget24__stats m--font-success">
                                276
                            </span>
                            <div class="m--space-40"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 col-xl-3">
                    <div class="m-widget24">
                        <div class="m-widget24__item">
                            <h4 class="m-widget24__title">
                                Different Value
                            </h4>
                            <br>
                            <span class="m-widget24__desc">
                                Something else
                            </span>
                            <span class="m-widget24__stats m--font-success">
                                276
                            </span>
                            <div class="m--space-40"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-4">
            <div class="m-portlet m-portlet--full-height  m-portlet--unair">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Latest 100 Users
                            </h3>
                        </div>
                    </div>
                </div>
                {{ var_dump($cfDecoded) }}
                <div class="m-portlet__body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="m_widget4_tab1_content">
                            <div class="m-widget4">
                                @foreach($newest100Users as $user)
                                    <div class="m-widget4__item">
                                        <div class="m-widget4__img m-widget4__img--pic">
                                            <img src="{{ $user->profile_img_path }}" alt="">
                                        </div>
                                        <div class="m-widget4__info">
                                            <span class="m-widget4__title">
                                                {{{ $user->username }}}
                                            </span>
                                            <br>
                                            <span class="m-widget4__sub">
                                                {{{ $user->email }}}
                                            </span>
                                        </div>
                                        <div class="m-widget4__ext">
                                            <a href="#"  class="m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-secondary">
                                                View
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop