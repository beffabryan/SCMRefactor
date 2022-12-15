<!DOCTYPE html>
<html lang="en">
<?php require_once 'global/head.php' ?>
<style>
    .nav-tabs .nav-item .nav-link {
        color: #FFF;
        font-size: 1em;
    }
    .nav-tabs .nav-item .nav-link:hover {
        background-color: rgba(100, 100, 100, 0.1);
    }

    .nav-tabs .nav-item .nav-link.active {
        background-color: transparent;
    }

</style>

<body>
<?php $_SESSION['nav_bar_item'] = ""; ?>
<?php require_once 'global/navbar.php' ?>
<?php require_once 'global/header.php' ?>

<!-- Title  -->
<div class=" text-center mx-auto text">
    <h1 class="text-white mt-5">Repo name</h1>
    <p class="h4 text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque malesuada, metus
        in porttitor</p>

</div>


<!-- Main -->
<main class="container mt-5">
    <!-- Tabs navs -->
    <div class="col-11 mx-auto my-4">
        <ul class="nav nav-tabs nav-justified mb-3" id="ex1" role="tablist">
            <li class="nav-item" role="presentation">
                <a
                        class="nav-link text-secondary active"
                        id="ex3-tab-1"
                        data-mdb-toggle="tab"
                        href="#ex3-tabs-1"
                        role="tab"
                        aria-controls="ex3-tabs-1"
                        aria-selected="true"
                ><i class="fa-solid fa-code pe-2"></i>Code
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a
                        class="nav-link text-secondary"
                        id="ex3-tab-2"
                        data-mdb-toggle="tab"
                        href="#ex3-tabs-2"
                        role="tab"
                        aria-controls="ex3-tabs-2"
                        aria-selected="false"
                ><i class="fa-solid fa-code-commit pe-2"></i> Commit
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a
                        class="nav-link text-secondary"
                        id="ex3-tab-3"
                        data-mdb-toggle="tab"
                        href="#ex3-tabs-3"
                        role="tab"
                        aria-controls="ex3-tabs-3"
                        aria-selected="false"
                ><i class="fa-solid fa-circle-info pe-2"></i>General</a
                >
            </li>
            <li class="nav-item" role="presentation">
                <a
                        class="nav-link text-secondary"
                        id="ex3-tab-4"
                        data-mdb-toggle="tab"
                        href="#ex3-tabs-4"
                        role="tab"
                        aria-controls="ex3-tabs-4"
                        aria-selected="false"
                ><i class="fa-solid fa-chart-line pe-2"></i></i>Statistic</a
                >
            </li>
        </ul>
        <!-- Tabs navs -->

        <!-- Tabs content -->
        <div class="tab-content" id="ex2-content">
            <div
                    class="tab-pane fade show active"
                    id="ex3-tabs-1"
                    role="tabpanel"
                    aria-labelledby="ex3-tab-1"
            >
                <div class="card bg-main">
                    <table class="table table-borderless table-responsive text-secondary">
                        <thead class="text-white fw-bolder">
                        <tr class="border-bottom border-secondary">
                            <th>Filename</th>
                            <th>Last change</th>
                            <th>Last change</th>
                            <th>Changed by</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="border-bottom border-secondary">
                            <td><i class="fa-regular fa-file pe-3"></i><a href="#">.gitignore</a></td>
                            <td>ignore debug directory</td>
                            <td>Bryan Beffa</td>
                            <td>2 days ago</td>
                        </tr>

                        <tr class="border-bottom border-secondary">
                            <td><i class="fa-regular fa-folder pe-3"></i><a href="#">src/</a></td>
                            <td>add player model class</td>
                            <td>Bryan Beffa</td>
                            <td>1 week ago</td>
                        </tr>
                        <tr class="border-bottom border-secondary">
                            <td><i class="fa-regular fa-folder pe-3"></i><a href="#">lib/</a></td>
                            <td>add lib dependencies</td>
                            <td>Simone Finiletti</td>
                            <td>3 week ago</td>
                        </tr>
                        <tr class="border-bottom border-secondary">
                            <td><i class="fa-regular fa-file pe-3"></i><a href="#">README.md/</a></td>
                            <td>add readme file</td>
                            <td>Simone Finiletti</td>
                            <td>1 month ago</td>
                        </tr>
                        <tr>
                            <td><i class="fa-regular fa-file pe-3"></i><a href="#">index.html</a></td>
                            <td>add index.html</td>
                            <td>Simone Finiletti</td>
                            <td>5 days ago</td>
                        </tr>

                        </tbody>

                    </table>
                </div>
            </div>
            <div
                    class="tab-pane fade"
                    id="ex3-tabs-2"
                    role="tabpanel"
                    aria-labelledby="ex3-tab-2"
            >
                <div class="card bg-main">
                    <table class="table table-borderless table-responsive text-secondary">
                        <thead class="text-white fw-bolder">
                        <tr>
                            <th></th>
                            <th>Commit ID</th>
                            <th class="col-5">Description</th>
                            <th>Author</th>
                            <th>Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="m-0 p-0 ps-5">
                                <li class="stepper-item complete">
                                    <span class="stepper-counter"></span>
                                    <a href="#" class="stepper-link">
                                    </a>
                                    <span class="stepper-line"></span>
                                </li>
                            </td>
                            <td>#ABC123</td>
                            <td>Fixed main function. Local changes discarded</td>
                            <td>Simone Finiletti</td>
                            <td>20.12.2022 10:35</td>
                        </tr>

                        <tr>
                            <td class="m-0 p-0 ps-5">
                                <li class="stepper-item complete">
                                    <span class="stepper-counter"></span>
                                    <a href="#" class="stepper-link">
                                    </a>
                                    <span class="stepper-line"></span>
                                </li>
                            </td>
                            <td>#ABC123</td>
                            <td>Fixed main function</td>
                            <td>Simone Finiletti</td>
                            <td>20.12.2022 10:35</td>
                        </tr>

                        <tr>
                            <td class="m-0 p-0 ps-5">
                                <li class="stepper-item complete">
                                    <span class="stepper-counter"></span>
                                    <a href="#" class="stepper-link">
                                    </a>
                                    <span class="stepper-line"></span>
                                </li>
                            </td>
                            <td>#ABC123</td>
                            <td>Fixed main function</td>
                            <td>Simone Finiletti</td>
                            <td>20.12.2022 10:35</td>
                        </tr>

                        <tr>
                            <td class="m-0 p-0 ps-5">
                                <li class="stepper-item complete">
                                    <span class="stepper-counter"></span>
                                    <a href="#" class="stepper-link">
                                    </a>
                                    <span class="stepper-line"></span>
                                </li>
                            </td>
                            <td>#ABC123</td>
                            <td>Fixed main function</td>
                            <td>Simone Finiletti</td>
                            <td>20.12.2022 10:35</td>
                        </tr>
                        <tr>
                            <td class="m-0 p-0 ps-5">
                                <li class="stepper-item complete">
                                    <span class="stepper-counter"></span>
                                    <a href="#" class="stepper-link">
                                    </a>
                                    <span class="stepper-line"></span>
                                </li>
                            </td>
                            <td>#ABC123</td>
                            <td>Fixed main function</td>
                            <td>Simone Finiletti</td>
                            <td>20.12.2022 10:35</td>
                        </tr>
                        <tr>
                            <td class="m-0 p-0 ps-5">
                                <li class="stepper-item complete">
                                    <span class="stepper-counter"></span>
                                    <a href="#" class="stepper-link">
                                    </a>
                                    <span class="stepper-line"></span>
                                </li>
                            </td>
                            <td>#ABC123</td>
                            <td>Fixed main function</td>
                            <td>Simone Finiletti</td>
                            <td>20.12.2022 10:35</td>
                        </tr>
                        <tr>
                            <td class="m-0 p-0 ps-5">
                                <li class="stepper-item complete">
                                    <span class="stepper-counter"></span>
                                    <a href="#" class="stepper-link">
                                    </a>
                                </li>
                            </td>
                            <td>#ABC123</td>
                            <td>Fixed main function</td>
                            <td>Simone Finiletti</td>
                            <td>20.12.2022 10:35</td>
                        </tr>

                        </tbody>

                    </table>
                </div>
            </div>
            <div
                    class="tab-pane fade"
                    id="ex3-tabs-3"
                    role="tabpanel"
                    aria-labelledby="ex3-tab-3"
            >
                Tab 3 content
            </div>
            <div
                    class="tab-pane fade"
                    id="ex3-tabs-4"
                    role="tabpanel"
                    aria-labelledby="ex3-tab-4"
            >
                Tab 4 content
            </div>
        </div>
    </div>
    <!-- Tabs content -->
</main>

<script type="text/javascript" src="js/spacing.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<?php require_once 'global/footer.php' ?>

</body>
</html>