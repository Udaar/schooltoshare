@extends('_front_masters.main')
@section('content')
<!-- SubHeader -->
    <section class="parallax-window" id="short" data-parallax="scroll" style="background-color:lightskyblue;" data-natural-width="1400" data-natural-height="300">
      <div id="sub_header">
        <div class="container" id="sub_content">
          <div class="row">
            <div class="col-md-12">
              <h1>الأشعارات</h1>
              <div class="bread-crums">
                <a href="index.html">الصفحة الرئيسية</a>
                <span class="bread-crums-span">&raquo;</span>
                <a href="profile.html">الحساب</a>
                <span class="bread-crums-span">&raquo;</span>
                <span class="current">الأشعارات</span>
              </div>
              <!-- End bread-crums -->
            </div>
          </div>
          <!-- End row -->
        </div>
        <!-- End container -->
      </div>
    </section>
    <!-- End SubHeader -->

    <div class="white_bg">
      <div class="container margin_60">
        <div class="row">
          <div class="col-md-12">
            <table class="table table-hover community-topic">
              <thead>
                <tr>
                  <th>الموضوع</th>
                  {{-- <th class="text-center">الحالة</th> --}}
                </tr>
              </thead>
              <tbody>
              @foreach ($notifications as $notification)
                <tr>
                  <td>
                    <div class="poster-avatar">
                      <img src="/front_assets/images/notifications.png" alt="" />
                    </div>
                    <div class="poster-list-block">
                      <h4><a href="{{$notification->url}}" class="poster-title">{{$notification->content}}</a></h4>
                      <div class="poster-detail">
                        {{-- <a href="profile.html">حسام حامد</a> , --}} <span>{{$notification->created_at}}</span>
                      </div>
                    </div>
                  </td>
                  {{-- <td class="text-center"><span class="label label-success">اغلقت</span></td> --}}
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <!-- End row -->
        {{--
        <div class="row">
          <div class="col-md-12 text-center margin_top_40">
            <nav class="navigation pagination">
              <div class="nav-links">
                <a class="prev page-numbers">السابق</a>
                <span class="page-numbers current">1</span>
                <a class="page-numbers" href="#">2</a>
                <a class="page-numbers" href="#">3</a>
                <a class="page-numbers" href="#">4</a>
                <a class="page-numbers" href="#">5</a>
                <a class="next page-numbers" href="#">التالى</a>
              </div>
            </nav>
          </div>
        </div>
        <!-- End row -->
  --}}
      </div>
      <!-- End container -->
    </div>
    <!-- End white_bg -->
@endsection
