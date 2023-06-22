class SideBar extends HTMLElement {
  connectedCallback() {
    this.innerHTML = `   <header>
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
          <a href="#">
            <i class="bx bx-home-alt icon"></i>
            <span class="text nav-text">Dashboard</span>
          </a>
        </li>

        <li class="nav-link--cus" onclick="toggleDropdown()">
          <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bx bx-bar-chart-alt-2 icon"></i>
            <span class="text nav-text"
              >Patient Care
              <i class="bx bx-chevron-up" id="icon"></i>
            </span>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Current</a></li>
            <hr class="dropdown-divider" />
            <li><a class="dropdown-item" href="#">Completed</a></li>
          </ul>
        </li>

        <li class="nav-link--cus">
          <a href="#">
            <i class="bx bx-bell icon"></i>
            <span class="text nav-text">My Patients </span>
          </a>
        </li>

        <li class="nav-link--cus">
          <a href="#">
            <i class="bx bx-pie-chart-alt icon"></i>
            <span class="text nav-text">Appointments</span>
          </a>
        </li>

        <li class="nav-link--cus">
          <a href="#">
            <i class="bx bx-heart icon"></i>
            <span class="text nav-text">My Schedule</span>
          </a>
        </li>

        <li class="nav-link--cus">
          <a href="#">
            <i class="bx bx-wallet icon"></i>
            <span class="text nav-text">Instant Connect</span>
          </a>
        </li>
        <li class="nav-link--cus">
          <a href="#">
            <i class="bx bx-wallet icon"></i>
            <span class="text nav-text">App Invite</span>
          </a>
        </li>
        <li class="nav-link--cus">
          <a href="#">
            <i class="bx bx-wallet icon"></i>
            <span class="text nav-text">Doc to Doc</span>
          </a>
        </li>
        <li class="nav-link--cus">
          <a href="#">
            <i class="bx bx-wallet icon"></i>
            <span class="text nav-text">Messages</span>
          </a>
        </li>
        <li class="nav-link--cus">
          <a href="#">
            <i class="bx bx-wallet icon"></i>
            <span class="text nav-text">Call History</span>
          </a>
        </li>
        <li class="nav-link--cus">
          <a href="#">
            <i class="bx bx-wallet icon"></i>
            <span class="text nav-text">Prescriptions</span>
          </a>
        </li>
        <li class="nav-link--cus">
          <a href="#">
            <i class="bx bx-wallet icon"></i>
            <span class="text nav-text">Refill Requests</span>
          </a>
        </li>
        <li class="nav-link--cus">
          <a href="#">
            <i class="bx bx-wallet icon"></i>
            <span class="text nav-text">Labs</span>
          </a>
        </li>
        <li class="nav-link--cus">
          <a href="#">
            <i class="bx bx-wallet icon"></i>
            <span class="text nav-text">Support</span>
          </a>
        </li>
        <li class="nav-link--cus">
          <a href="#">
            <i class="bx bx-wallet icon"></i>
            <span class="text nav-text">Profile</span>
          </a>
        </li>
      </ul>
    </div>
  </div>`;
  }
}

class TopHeader extends HTMLElement {
  connectedCallback() {
    this.innerHTML = ` <h2>Dashboard</h2>
    <div class="dektopIcons">
      <div class="allmesages">
        <div class="bell">
          <i class="bx bx-bell"></i>
          <span>2</span>
        </div>
        <div class="showMes"></div>
      </div>
      <div class="bell pencil">
        <i class="bx bx-pencil"></i>
      </div>
      <div class="bell envelope">
        <i class="bx bx-envelope"></i>
      </div>
      <div class="logout">
        <div class="btn-group">
          <button
            type="button"
            class="btn dropdown-toggle dropdown-toggle-split"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            <span class=""
              ><img src="./assets/images.png" alt="img"
            /></span>
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
      <div class="btn-group">
        <button
          type="button"
          class="btn btn-info text-white dropdown-toggle dropdown-toggle-split"
          data-bs-toggle="dropdown"
          aria-expanded="false"
        >
          <span span class="visually-hidden">Toggle Dropdown</span>
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
          <li>
            <hr class="dropdown-divider" />
          </li>
          <li><a class="dropdown-item" href="#">Separated link</a></li>
        </ul>
      </div>
    </div>`;
  }
}
customElements.define("top-header", TopHeader);
customElements.define("side-bar", SideBar);

// ? open and close Side Bar
const body = document.querySelector("body"),
  sidebar = body.querySelector("nav"),
  toggle = body.querySelector(".toggle");
toggle.addEventListener("click", () => {
  sidebar.classList.toggle("close");
});

function toggleDropdown() {
  var icon = document.getElementById("icon");
  icon.classList.toggle("bx-chevron-up");
  icon.classList.toggle("bx-chevron-down");
  icon.classList.toggle("rotate");
}
