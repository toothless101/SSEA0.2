<script src="{{asset("js/sidebartoggle.js")}}"></script>

<aside class="sidebar">
    <div class="logo-details">
        <img src="{{ asset('img/418786725_1079231866656453_7752077010997336838_n (1).png') }}" alt="tccstfi_logo">
    </div>
    <ul class="nav-links">
        <!-- Dashboard -->
        <li>
            <a href="{{ route('dashboard') }}">
                <i class="fa-solid fa-gauge-high"></i>
                <span class="link_name">Dashboard</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="{{ route('dashboard') }}">Dashboard</a></li>
            </ul>
        </li>

        <!--Officers-->
        <li>
            <a href="{{route('officers')}}">
                <i class="fa-solid fa-user"></i>
                <span class="link_name">Officers</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="{{route('officers')}}">Officers</a></li>
            </ul>
        </li>

        <!-- Officer 
        <li>
            <div class="iocn-link">
                <a href="">
                    <i class="fa-solid fa-user"></i>
                <span class="link_name">Officers</span>
                </a>
                <!--<i class="bx bxs-chevron-down arrow"></i>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="">Officers</a></li>
                </ul>
            </div>

           <!-- <ul class="sub-menu">
                <li><a class="link_name" href="">Events</a></li>
            <li><a href="examination_dates.html">Add Event</a></li>
                <li><a href="deans_lister.html">Upcoming Events</a></li>
                <li><a href="events.html">List Events</a></li>
            </ul> 
        </li>-->

        <!-- Events -->
        <li>
            <a href="{{route('event')}}">
                <i class="fa-solid fa-calendar-days"></i>
                <span class="link_name">Events</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="{{route('event')}}">Events</a></li>
            </ul>
        </li>

        <!-- Attendees -->
        <li>
            <a href="{{route('attendees')}}">
                <i class="fa-solid fa-users"></i>
                <span class="link_name">Attendees</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="{{route('attendees')}}">Attendees</a></li>
            </ul>
        </li>

        <!-- Attendance -->
        <li>
            <a href="courses.html">
                <i class="fa-solid fa-clipboard-list"></i>
                <span class="link_name">Attendance</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="courses.html">Attendance</a></li>
            </ul>
        </li>

        <!--History-->
        <li>
            <a href="">
                <i class="fa-solid fa-history"></i>
                <span class="link_name">History</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="">History</a></li>
            </ul>
        </li>

        <!--REPORTS-->
        <li>
            <a href="">
                <i class="fa-solid fa-layer-group"></i>
                <span class="link_name">Report</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="">Report</a></li>
            </ul>
        </li>
        <!-- Logout -->
        <li>
            <a href="#" style=margin-top:100px>
                <i class="fa-solid fa-right-from-bracket"></i>
                <span class="link_name logout">Log Out</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="#">Log Out</a></li>
            </ul>
        </li>
    </ul>
</aside>
