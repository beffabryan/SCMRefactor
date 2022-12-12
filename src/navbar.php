<!-- Navbar -->
<nav class="fixed-top navbar navbar-expand-lg navbar-light bg-main">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Toggle button -->
        <button
                class="navbar-toggler"
                type="button"
                data-mdb-toggle="collapse"
                data-mdb-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
        >
            <i class="text-white fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Navbar brand -->
            <a class="navbar-brand mt-2 mt-lg-0" href="#">
                <img
                        src="https://scm.ti-edu.ch/favicon.ico?1560171137"
                        height="15"
                        alt="MDB Logo"
                        loading="lazy"
                />
            </a>
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Help</a>
                </li>
            </ul>
            <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->

        <!-- Right elements -->
        <div class="d-flex align-items-center">
            <!-- Icon -->
            <div class="dropdown">
                <a
                        class="text-reset me-3 dropdown-toggle hidden-arrow"
                        href="#"
                        id="navbarDropdownMenuLink"
                        role="button"
                        data-mdb-toggle="dropdown"
                        aria-expanded="false"
                >
                    <i class="fas ">En</i>
                </a>
                <ul
                        class="dropdown-menu dropdown-menu-end"
                        aria-labelledby="navbarDropdownMenuAvatar"
                >
                    <li>
                        <a class="dropdown-item" href="#">Italiano</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">English</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Deutsch</a>
                    </li>
                </ul>
            </div>

            <!-- Notifications -->
            <div class="dropdown">
                <a
                        class="text-reset me-3 dropdown-toggle hidden-arrow"
                        href="#"
                        id="navbarDropdownMenuLink"
                        role="button"
                        data-mdb-toggle="dropdown"
                        aria-expanded="false"
                >
                    <i class="fas fa-bell"></i>
                    <span class="badge rounded-pill badge-notification bg-danger">1</span>
                </a>
                <ul
                        class="dropdown-menu dropdown-menu-end"
                        aria-labelledby="navbarDropdownMenuLink"
                >
                    <li class="">
                        <a class="dropdown-item text-start" href="#">
                            <p class="text-end p-0 m-0">
                                <sup>2m</sup>
                            </p>
                            <p class="pe-5 h7">
                                <i class="fa-solid fa-code-pull-request me-2"></i>
                                Pull request #crane
                            </p>
                        </a>
                    </li>
                    <hr class="m-0 p-0">
                    <li class="">
                        <a class="dropdown-item text-start" href="#">
                            <p class="text-end p-0 m-0">
                                <sup>35m</sup>
                            </p>
                            <p class="pe-5 h7">
                                <i class="fa-solid fa-triangle-exclamation me-2"></i>Issue #editor
                            </p>
                        </a>
                    </li>
                    <li class="border-2 border-primary border-top">
                        <a class="dropdown-item" href="#" style="color: dodgerblue">See all notifications</a>
                    </li>
                </ul>
            </div>
            <!-- Avatar -->
            <div class="dropdown">
                <a
                        class="dropdown-toggle d-flex align-items-center hidden-arrow"
                        href="#"
                        id="navbarDropdownMenuAvatar"
                        role="button"
                        data-mdb-toggle="dropdown"
                        aria-expanded="false"
                >
                    <img
                            src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
                            class="rounded-circle"
                            height="25"
                            alt="Black and White Portrait of a Man"
                            loading="lazy"
                    />
                </a>
                <ul
                        class="dropdown-menu dropdown-menu-end"
                        aria-labelledby="navbarDropdownMenuAvatar"
                >
                    <li>
                        <a class="dropdown-item" href="#">Account</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">My page</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
</nav>
<!-- Navbar -->