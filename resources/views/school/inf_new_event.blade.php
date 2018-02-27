@extends('layouts.app')

@push('head')
    <link rel="stylesheet" href="/fancybox/dist/jquery.fancybox.min.css">
    <link rel="stylesheet" href="/metronic/reset/modules/schools/info.css">
@endpush

@section('content')
    <section class="info_news_event">

        <!-- Gallary -->
        <div class="image-gallery">
            <h4 class="grey-font">Gallery</h4>
            <div class="row">
                <div class="col-lg-15">
                    <div class="gallery-item">
                        <a href="/metronic/images/school.jpg" data-fancybox="gallery">
                            <img src="/metronic/images/school.jpg">
                        </a>
                    </div>
                </div>         
            </div>
        </div>

        <!-- Events -->
        <div class="events">
            <h4 class="">Events</h4>
            <div class="row is-flex">     
                <div class="col-lg-3">
                    <div class="event-box keynote">
                        <div class="event-top-box">
                            <div class="event-type">
                                <i class="fa fa-microphone"></i>
                                <span>Keynote</span>
                            </div>
                            <div class="event-title">
                                <p class="text-center">Welcome Keynote</p>
                            </div>
                            <div class="event-avatar">
                                <img src="/bimunity/images/team7.jpg" alt="">
                            </div>
                        </div>
                        <div class="event-details">
                            <div class="speaker text-center">
                                <p>
                                    <span>Speaker</span>
                                    Mohammed Galal
                                </p>
                            </div>
                            <div class="attend-details text-center">
                                <label>date</label>
                                <span>July 10, 2015</span>
                            </div>
                            <div class="attend-details text-center">
                                <label>time</label>
                                <span>11:30 AM</span>
                            </div>
                            <div class="attend-details text-center">
                                <label>duration</label>
                                <span>60 min</span>
                            </div>
                            <div class="attend-details text-center">
                                <label>location</label>
                                <span>main hall</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="event-box workshop">
                        <div class="event-top-box">
                            <div class="event-type">
                                <img class="icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAAOCAYAAAAfSC3RAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAADSSURBVDhPlY2hCgJBFEVHg3GboMmfMBgtgkWwaLUKBpvNahSD/oB/YrXaTGZBEIOWdcdzd94KIrLugcvMvHfPrsvw3pdJmwySJOmQhma2zodyH+nE6TnPZGKrfChXyV6y4D6zVT70awi3oBaQ6ZYoH4KWineOiq1/Q7FJ4qAFeG9IzyqfsNeflqRLhuRCFuQZ9PQDY6sHmEla2/JBJEfacR41F9ynqSB4vyXjyrtla4kjEpO5jfKlDGZ1u/4vfUFpZYL4TxIUd4UlQTki20KSc+4Fcb47gDyDH6EAAAAASUVORK5CYII=">
                                <span>WorkShop</span>
                            </div>
                            <div class="event-title">
                                <p class="text-center">Welcome Keynote</p>
                            </div>
                            <div class="event-avatar">
                                <img src="/bimunity/images/team7.jpg" alt="">
                            </div>
                        </div>
                        <div class="event-details">
                            <div class="speaker text-center">
                                <p>
                                    <span>Speaker</span>
                                    Mohammed Galal
                                </p>
                            </div>
                            <div class="attend-details text-center">
                                <label>date</label>
                                <span>July 10, 2015</span>
                            </div>
                            <div class="attend-details text-center">
                                <label>time</label>
                                <span>11:30 AM</span>
                            </div>
                            <div class="attend-details text-center">
                                <label>duration</label>
                                <span>60 min</span>
                            </div>
                            <div class="attend-details text-center">
                                <label>location</label>
                                <span>main hall</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="event-box keynote">
                        <div class="event-top-box">
                            <div class="event-type">
                                <i class="fa fa-microphone"></i>
                                <span>Keynote</span>
                            </div>
                            <div class="event-title">
                                <p class="text-center">Welcome Keynote</p>
                            </div>
                            <div class="event-avatar">
                                <img src="/bimunity/images/team7.jpg" alt="">
                            </div>
                        </div>
                        <div class="event-details">
                            <div class="speaker text-center">
                                <p>
                                    <span>Speaker</span>
                                    Mohammed Galal
                                </p>
                            </div>
                            <div class="attend-details text-center">
                                <label>date</label>
                                <span>July 10, 2015</span>
                            </div>
                            <div class="attend-details text-center">
                                <label>time</label>
                                <span>11:30 AM</span>
                            </div>
                            <div class="attend-details text-center">
                                <label>duration</label>
                                <span>60 min</span>
                            </div>
                            <div class="attend-details text-center">
                                <label>location</label>
                                <span>main hall</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="event-box keynote">
                        <div class="event-top-box">
                            <div class="event-type">
                                <i class="fa fa-microphone"></i>
                                <span>Keynote</span>
                            </div>
                            <div class="event-title">
                                <p class="text-center">Welcome Keynote</p>
                            </div>
                            <div class="event-avatar">
                                <img src="/bimunity/images/team7.jpg" alt="">
                            </div>
                        </div>
                        <div class="event-details">
                            <div class="speaker text-center">
                                <p>
                                    <span>Speaker</span>
                                    Mohammed Galal
                                </p>
                            </div>
                            <div class="attend-details text-center">
                                <label>date</label>
                                <span>July 10, 2015</span>
                            </div>
                            <div class="attend-details text-center">
                                <label>time</label>
                                <span>11:30 AM</span>
                            </div>
                            <div class="attend-details text-center">
                                <label>duration</label>
                                <span>60 min</span>
                            </div>
                            <div class="attend-details text-center">
                                <label>location</label>
                                <span>main hall</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>   
@endsection

@push('scripts')
    <script src="/fancybox/dist/jquery.fancybox.min.js"></script>
@endpush

