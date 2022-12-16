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

    #branch {
        background-color: transparent;
        color: white;
        padding: 5px 10px;
        margin-left: 10px;
        border: 1px darkgray solid;
        border-radius: 5px;
    }

</style>

<body>
<?php $_SESSION['nav_bar_item'] = ""; ?>
<?php require_once 'global/navbar.php' ?>
<?php require_once 'global/header.php' ?>

<!-- Title  -->
<div class="container mx-auto text">
    <h4 class="text-white mt-4 mb-3 border-bottom pb-3 ">
        <a href="#">@BryanBeffa </a>/<a href="#"> TheCrane</a>
    </h4>

    <div class="row text-secondary text-center">
        <div class="col-xl col-lg col-md-6 col-6 text-center">
            <label for="branch">Branch:</label>
            <select name="ms-5" id="branch">
                <option class="bg-main" value="master" style="background-color: #0b0c12" selected>master</option>
                <option class="bg-main" value="main">main</option>
                <option class="bg-main" value="dev">dev</option>
            </select>
        </div>
        <div class="col-xl col-lg col-md-6 col-6 text-center"><a href="">Issues: </a>4</div>
        <div class="col-xl col-lg col-md-6 col-6 text-center"><a href="">Fork: </a>2</div>
        <div class="col-xl col-lg col-md-6 col-6 text-center">
            <p>Clone
                <a href="#" data-mdb-toggle="tooltip"
                   class="repo"
                   id="gitClone"
                   title="git clone https://scm.ti-edu.ch/repogit/labingsw022022202308ed2d"><i
                            class="text-primary fa-regular fa-clone ps-3"></i></a>
            </p>
        </div>
    </div>
</div>


<!-- Main -->
<main class="container mt-3">
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
                <div class="card bg-main table-responsive">
                    <table class="table table-borderless e text-secondary">
                        <thead class="text-white fw-bolder">
                        <tr class="border-bottom border-primary">
                            <th>Filename</th>
                            <th class="col-4">Comment</th>
                            <th>Author</th>
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
                <div class="card bg-main table-responsive">
                    <table class="table table-borderless text-secondary">
                        <thead class="text-white fw-bolder ">
                        <tr class="">
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
                <div class="card bg-main">

                    <div class="card-header pb-0 border-bottom border-primary">
                        <h4 class="text-white"><b class="text-white">Repository name</b></h4>
                        <p class="text-secondary">TheCraneEngine</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-7 col-lg-7 col-md-12 col-12 mx-auto">
                                <h4 class="text-white"><b class="text-white">Description</b></h4>
                                <p class="text-secondary">
                                    Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit. Pellentesque malesuada, metus in porttitor
                                </p>
                                <h4 class="text-white mt-4"><b class="text-white">Manager</b></h4>
                                <p class="text-secondary">Bryan Beffa, Simone Finiletti</p>
                                <h4 class="text-white mt-4"><b class="text-white">Developer</b></h4>
                                <p class="text-secondary">Bryan Beffa, Simone Finiletti</p>
                            </div>
                            <div class="col-xl-5 col-lg-5 col-md-12 col-12 mx-auto">
                                <div class="col-8 mx-auto">
                                    <canvas id="chart4" style="margin:"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end text-secondary border-top border-primary">
                        created 10.11.2022
                    </div>
                </div>
            </div>
            <div
                    class="tab-pane fade"
                    id="ex3-tabs-4"
                    role="tabpanel"
                    aria-labelledby="ex3-tab-4"
            >
                <div class="card bg-main">

                    <div class="col-xl-8 col-lg-8 col-md-10 col-12 mx-auto my-3">
                        <h4>Number of commits in the last months</h4>
                        <canvas id="chart1"></canvas>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-10 col-12 mx-auto">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-12 mx-auto my-3">
                                <h4 class="mb-3">Percentage of code lines</h4>
                                <canvas id="chart2"></canvas>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-12 mx-auto my-3">
                                <h4 class="mb-3">Changed lineslines</h4>
                                <canvas id="chart3"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    const chart1 = document.getElementById('chart1');
                    const chart2 = document.getElementById('chart2');
                    const chart3 = document.getElementById('chart3');
                    const chart4 = document.getElementById('chart4');

                    new Chart(chart1, {
                        type: 'bar',
                        data: {
                            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                            datasets: [{
                                label: 'Number of commits',
                                data: [120, 190, 30, 50, 20, 30, 10, 10, 20, 40, 20, 10],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            },
                        }
                    });

                    new Chart(chart2, {
                        type: 'doughnut',
                        data: {
                            labels: ['Bryan Beffa', 'Simone Finiletti'],
                            datasets: [{
                                label: 'Code lines',
                                data: [64, 36],
                                borderWidth: 1
                            }]
                        }
                    });

                    new Chart(chart3, {
                        type: 'doughnut',
                        data: {
                            labels: ['Bryan Beffa', 'Simone Finiletti'],
                            datasets: [{
                                label: 'Code lines',
                                data: [41, 59],
                                borderWidth: 1
                            }]
                        }
                    });

                    const data = {
                        labels: [
                            'CSS',
                            'Javascript',
                            'HTML',
                            'Php',
                            'SCSS'
                        ],
                        datasets: [{
                            label: 'Lines of code',
                            data: [300, 50, 100, 200],
                            backgroundColor: [
                                'rgb(0,40,124)',
                                'rgb(54, 162, 235)',
                                'rgb(86,138,183)',
                                'rgb(134,177,210)',
                                'rgb(3,18,52)'
                            ],
                            hoverOffset: 4
                        }]
                    };

                    new Chart(chart4, {
                        type: 'pie',
                        data: data,
                        options: {}
                    });

                </script>

            </div>
        </div>
    </div>
    <!-- Tabs content -->
</main>

<script type="text/javascript" src="js/spacing.js"></script>
<script type="text/javascript" src="js/notify.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script>

    $.notify.addStyle("success1", {
        html: "<div style='width: 200px'><i class='fa fa-check-circle pe-2 text-primary'></i><span data-notify-text></span></div>",
        classes: {
            base: {
                'background-color': 'rgb(0,0,0)'
            }
        }
    });

    var successOptions = {
        style: "success1",
        autoHideDelay: 400,
        showAnimation: "fadeIn",
        hideAnimation: "fadeOut",
        hideDuration: 1500,
        arrowShow: false,
        position: "left"
    };

    $("#gitClone").click(function () {
        $("#gitClone").notify(
            "git clone command copied", successOptions
        )
    });

</script>
<?php require_once 'global/footer.php' ?>

</body>
</html>