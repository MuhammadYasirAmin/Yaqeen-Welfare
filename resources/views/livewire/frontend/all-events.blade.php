@section('activeEClass', 'active')
@section('activeAllEvents', 'active')
<div class="page-title-area title-bg-four">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="title-item">
                    <h2>All Events</h2>
                    <ul>
                        <li>
                            <a href="{{ route('frontend.index') }}">Home</a>
                        </li>
                        <li>
                            <span>Events List</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="event-area four ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="event-item">
                    <img src="{{ asset('assets/img/event/event1.jpg') }}" alt="Event">
                    <div class="inner">
                        <h4>04 <span>Jan</span></h4>
                        <h3>
                            <a href="{{ route('frontend.eventdetails') }}">Fundraising for MQ</a>
                        </h3>
                        <ul>
                            <li>
                                <i class="icofont-stopwatch"></i>
                                <span>2.00pm - 5.00pm</span>
                            </li>
                            <li>
                                <i class="icofont-location-pin"></i>
                                <span>Australia</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="event-item">
                    <img src="{{ asset('assets/img/event/event2.jpg') }}" alt="Event">
                    <div class="inner">
                        <h4>05 <span>Jan</span></h4>
                        <h3>
                            <a href="{{ route('frontend.eventdetails') }}">Shout about it with us</a>
                        </h3>
                        <ul>
                            <li>
                                <i class="icofont-stopwatch"></i>
                                <span>1.00pm - 2.00pm</span>
                            </li>
                            <li>
                                <i class="icofont-location-pin"></i>
                                <span>Canada</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="event-item">
                    <img src="{{ asset('assets/img/event/event3.jpg') }}" alt="Event">
                    <div class="inner">
                        <h4>06 <span>Jan</span></h4>
                        <h3>
                            <a href="{{ route('frontend.eventdetails') }}">Relief giving - Providing relief</a>
                        </h3>
                        <ul>
                            <li>
                                <i class="icofont-stopwatch"></i>
                                <span>3.00pm - 4.00pm</span>
                            </li>
                            <li>
                                <i class="icofont-location-pin"></i>
                                <span>USA</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="event-item">
                    <img src="{{ asset('assets/img/event/event4.jpg') }}" alt="Event">
                    <div class="inner">
                        <h4>07 <span>Jan</span></h4>
                        <h3>
                            <a href="{{ route('frontend.eventdetails') }}">Volunteer meetup</a>
                        </h3>
                        <ul>
                            <li>
                                <i class="icofont-stopwatch"></i>
                                <span>4.00pm - 5.00pm</span>
                            </li>
                            <li>
                                <i class="icofont-location-pin"></i>
                                <span>Israel</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="event-item">
                    <img src="{{ asset('assets/img/event/event5.jpg') }}" alt="Event">
                    <div class="inner">
                        <h4>08 <span>Jan</span></h4>
                        <h3>
                            <a href="{{ route('frontend.eventdetails') }}">Cleaning events in Greece</a>
                        </h3>
                        <ul>
                            <li>
                                <i class="icofont-stopwatch"></i>
                                <span>4.30pm - 5.00pm</span>
                            </li>
                            <li>
                                <i class="icofont-location-pin"></i>
                                <span>Denmark</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="event-item">
                    <img src="{{ asset('assets/img/event/event6.jpg') }}" alt="Event">
                    <div class="inner">
                        <h4>09 <span>Jan</span></h4>
                        <h3>
                            <a href="{{ route('frontend.eventdetails') }}">Event for free clothing</a>
                        </h3>
                        <ul>
                            <li>
                                <i class="icofont-stopwatch"></i>
                                <span>3.30pm - 5.30pm</span>
                            </li>
                            <li>
                                <i class="icofont-location-pin"></i>
                                <span>Russia</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="pagination-area">
            <ul>
                <li>
                    <a href="javascript:void(0);">Prev</a>
                </li>
                <li>
                    <a class="active" href="javascript:void(0);">1</a>
                </li>
                <li>
                    <a href="javascript:void(0);">2</a>
                </li>
                <li>
                    <a href="javascript:void(0);">3</a>
                </li>
                <li>
                    <a href="javascript:void(0);">Next</a>
                </li>
            </ul>
        </div>
    </div>
</section>
