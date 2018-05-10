@extends('client.layout.master')
@section('title')
{{ trans('web.webClient.title.home') }}
@endsection 
@section('release')
<div class="row top-buffer padding-mobile">
    <div class="col-md-4 hidden-sm hidden-xs">
        <a href="https://friday.kodansha.ne.jp/sn/u/book-list" class="link-gray">
            <div class="content-thumbnail group-thumbnail" style="background-image: url(&quot;//s3-ap-northeast-1.amazonaws.com/cdn.friday.kodansha.ne.jp/media/2017/12/27/cover2017-12-27-3_l.jpg&quot;); height: 267.105px;">
                <img class="hidden" src="//s3-ap-northeast-1.amazonaws.com/cdn.friday.kodansha.ne.jp/media/2017/12/27/cover2017-12-27-3_l.jpg">
            </div>
        </a>
        <div class="text-right"><a href="https://friday.kodansha.ne.jp/sn/u/book-list" class="link-gray"><b>24 Tháng 4 Năm 2018</b></a></div>
    </div>
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-12">
                <div class="content-thumbnail lastest-content">
                    <a href="https://friday.kodansha.ne.jp/sn/u/today-photo/102929" class="link-gray">
                        <div class="custom-list-item-thumbnail small" style="background-image: url(&quot;//s3-ap-northeast-1.amazonaws.com/cdn.friday.kodansha.ne.jp/media/2017/12/28/archive2017-12-28-61_l.jpg&quot;); height: 224.105px;">
                            <img class="hidden" src="//s3-ap-northeast-1.amazonaws.com/cdn.friday.kodansha.ne.jp/media/2017/12/28/archive2017-12-28-61_l.jpg">
                            <span class="flag-color flag-large flag-color-other"></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-12 top-buffer">
                <div class="media">
                    <div class="media-left">
                        <div class="new-content-icon"></div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading"><a href="https://friday.kodansha.ne.jp/sn/u/today-photo/102929" class="link-gray"><b>Bài hát hôm nay</b></a></h4>
                        <span class="custom-list-item-title">2018.01.10</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
{{--  @section('nav-bar')
	@include("client.layout.nav-bar")
@endsection  --}}
