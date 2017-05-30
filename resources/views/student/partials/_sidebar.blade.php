<nav class="navbar-default navbar-side" role="navigation">
<div class="sidebar-collapse">
    <ul class="nav" id="main-menu">
        <li>
            <div class="user-img-div">
                <img src="../assets/img/user.png" class="img-thumbnail" />

                <div class="inner-text">
                    Welcome {{Auth::guard('student')->user()->name}}
                    <br />
                </div>
            </div>
        </li>

        <li>
            <a href="student\viewAttendance"><i class="fa fa-desktop "></i>View Attendance<span ></span></a>
        </li>

        <li>
            <a href="student\"><i class="fa fa-yelp "></i>Apply for DL<span ></span></a>
        </li>

         <li>
            <a href="student\"><i class="fa fa-desktop "></i>Notice Board<span ></span></a>
        </li>

        <li>
            <a href="\student\changePassowrd"><i class="fa fa-bug "></i>Change password</a>
        </li>
    </ul>
</div>

</nav>