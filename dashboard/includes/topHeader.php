<div class="dektopIcons">
    <div class="allmesages">
        <div class="bell" id="showbox">
            <i class="bx bx-bell"></i>
            <span>2</span>
        </div>
        <div class="showMes hidden" id="myDiv">
        <section class="section-50">
    <div class="container">
        <div class="notification-ui_dd-content">
            <div class="notification-list notification-list--unread">
                <div class="notification-list_content">
                    <div class="notification-list_img">
                        <img src="./assets/images.png" alt="user">
                    </div>
                    <div class="notification-list_detail">
                        <p><b>John Doe</b></p>
                        <p class="text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, dolorem.</p>
                        <p class="text-muted"><small>10 mins ago</small></p>
                    </div>
                </div>
               
            </div>
            
        </div> 
        <div class="notification-ui_dd-content">
            <div class="notification-list notification-list--unread">
                <div class="notification-list_content">
                    <div class="notification-list_img">
                        <img src="./assets/images.png" alt="user">
                    </div>
                    <div class="notification-list_detail">
                        <p><b>John Doe</b></p>
                        <p class="text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, dolorem.</p>
                        <p class="text-muted"><small>10 mins ago</small></p>
                    </div>
                </div>
               
            </div>
            
        </div> 
        <div class="notification-ui_dd-content">
            <div class="notification-list notification-list--unread">
                <div class="notification-list_content">
                    <div class="notification-list_img">
                        <img src="./assets/images.png" alt="user">
                    </div>
                    <div class="notification-list_detail">
                        <p><b>John Doe</b></p>
                        <p class="text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, dolorem.</p>
                        <p class="text-muted"><small>10 mins ago</small></p>
                    </div>
                </div>
               
            </div>
            
        </div>
    </div>
</section>
        </div>
    </div>
    <div class="bell pencil">
        <i class="bx bx-pencil"></i>
    </div>
    <a href="/TDCPROJECT/dashboard/messages.php">
        <div class="bell envelope">
            <i class="bx bx-envelope"></i>
        </div>
    </a>
    <div class="logout">
        <div class="btn-group">
            <button type="button" class="btn dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"
                aria-expanded="false">
                <span class=""><img src="./assets/images.png" alt="img" /></span>
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><a class="dropdown-item" href="#">Logout</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="icons">
    <!-- Example split danger button -->
    <div class="btn-group topDropDown">
        <button type="button" class="btn text-white dropdown-toggle-split" data-bs-toggle="dropdown"
            aria-expanded="false">
            <i class="bx bx-chevron-down" id="icon"></i>
            <!-- <span span class="visually-hidden">Toggle Dropdown</span> -->
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Messages</a></li>
            <li><a class="dropdown-item" href="#">Notifications</a></li>
            <li><a class="dropdown-item" href="#">Logout</a></li>
        </ul>
    </div>
</div>

<script>
    const showbox = document.getElementById("showbox");
const myDiv = document.getElementById("myDiv");

showbox.addEventListener("click", () => {
  myDiv.classList.toggle("hidden");
});

</script>