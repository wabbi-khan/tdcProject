<header>
    <div class="text logo-text">
        <img src="assets/logo.png" alt="" />
    </div>

    <i class="bx bx-chevron-right toggle"></i>
</header>
<div class="menu-bar">
    <div class="menu">
        <div class="ownerImg" id="myDIV">
            <div>
                <img src="assets/images.png" alt="ownerimg" />
            </div>
            <div class="welcome">Welcome</div>
            <div class="owernName">Anna Marie</div>
        </div>

        <ul class="menu-links--cus">
            <li class="nav-link--cus">
                <a href="/TDCPROJECT/dashboard/index.php">
                    <i class="bx bx-home-alt icon"></i>
                    <span class="text nav-text">Dashboard</span>
                </a>
            </li>

            <li class="nav-link--cus dropDown" onclick="toggleDropdown()">
                <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bx bx-bar-chart-alt-2 icon"></i>
                    <span class="text nav-text">Patient Care
                        <i class="bx bx-chevron-up" id="icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/TDCPROJECT/dashboard/currentpatient.php">Current</a></li>
                    <hr class="dropdown-divider" />
                    <li><a class="dropdown-item" href="/TDCPROJECT/dashboard/completedPatients.php">Completed</a></li>
                </ul>
            </li>

            <li class="nav-link--cus">
                <a href="/TDCPROJECT/dashboard/mypatients.php">
                    <i class="bx bx-bell icon"></i>
                    <span class="text nav-text">My Patients </span>
                </a>
            </li>

            <li class="nav-link--cus">
                <a href="/TDCPROJECT/dashboard/appointmentlist.php">
                    <i class="bx bx-pie-chart-alt icon"></i>
                    <span class="text nav-text">Appointments</span>
                </a>
            </li>

            <li class="nav-link--cus">
                <a href="/TDCPROJECT/dashboard/mySchedule.php">
                    <i class="bx bx-heart icon"></i>
                    <span class="text nav-text">My Schedule</span>
                </a>
            </li>

            <li class="nav-link--cus">
                <a href="/TDCPROJECT/dashboard/instantConnect.php">
                    <i class="bx bx-wallet icon"></i>
                    <span class="text nav-text">Instant Connect</span>
                </a>
            </li>
            <li class="nav-link--cus">
                <a href="/TDCPROJECT/dashboard/appInvite.php">
                    <!-- <i class="bx bx-wallet icon"></i> -->
                    <i class='bx bx-mail-send icon'></i>
                    <span class="text nav-text">App Invite</span>
                </a>
            </li>
            <li class="nav-link--cus">
                <a href="/TDCPROJECT/dashboard/docTodoc.php">
                    <!-- <i class="bx bx-wallet icon"></i> -->
                    <i class="fa-solid fa-user-doctor icon"></i>
                    <span class="text nav-text">Doc to Doc</span>
                </a>
            </li>
            <li class="nav-link--cus">
                <a href="/TDCPROJECT/dashboard/messages.php">
                    <!-- <i class="bx bx-wallet icon"></i> -->
        <i class="bx bx-envelope icon"></i>

                    <span class="text nav-text">Messages</span>
                </a>
            </li>
            <li class="nav-link--cus">
                <a href="/TDCPROJECT/dashboard/callHistory.php">
                    <!-- <i class="bx bx-wallet icon"></i> -->
                        <!-- <i class="fa-solid fa-phone icon"></i> -->
                        <i class='bx bx-phone-call icon'></i>
                    <span class="text nav-text">Call History</span>
                </a>
            </li>
            <li class="nav-link--cus">
                <a href="/TDCPROJECT/dashboard/prescriptions.php">
                    <!-- <i class="bx bx-wallet icon"></i> -->
                    <i class='bx bxs-capsule icon' ></i>
                    <span class="text nav-text">Prescriptions</span>
                </a>
            </li>
            <li class="nav-link--cus">
                <a href="/TDCPROJECT/dashboard/refillRequests.php">
                    <i class="bx bx-wallet icon"></i>
                    <span class="text nav-text">Refill Requests</span>
                </a>
            </li>
            <li class="nav-link--cus">
                <a href="/TDCPROJECT/dashboard/labs.php">
                    <!-- <i class="bx bx-wallet icon"></i> -->
                    <i class='bx bxs-flask icon' ></i>
                    <span class="text nav-text">Labs</span>
                </a>
            </li>
            <li class="nav-link--cus">
                <a href="/TDCPROJECT/dashboard/support.php">
                    <!-- <i class="bx bx-wallet icon"></i> -->
                    <i class="fa-solid fa-people-group icon"></i>
                    <span class="text nav-text">Support</span>
                </a>
            </li>
            <li class="nav-link--cus">
                <a href="/TDCPROJECT/dashboard/profile.php">
                    <!-- <i class="bx bx-wallet icon"></i> -->
                    <i class='bx bx-user-circle icon' ></i>
                    <span class="text nav-text">Profile</span>
                </a>
            </li>
        </ul>
    </div>
</div>