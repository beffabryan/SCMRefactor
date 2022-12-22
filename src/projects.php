<!DOCTYPE html>
<html lang="en">
<?php require_once 'global/head.php' ?>

<body>
<?php $_SESSION['nav_bar_item'] = "projects"; ?>
<?php require_once 'global/navbar.php' ?>
<?php require_once 'global/header.php' ?>

<!-- Title  -->
<div class=" text-center mx-auto text">
    <h1 class="text-white mt-5">My projects</h1>
    <p class="h4 text-secondary">Here you can find all your projects</p>
</div>

<!-- Main content -->
<!-- search input -->
<div class="col-lg-6 col-xl-6 col-md-8 col-12 mx-auto mt-4 my-3">
    <div class="input-group">
        <input id="search" type="search" class="form-control border-primary rounded-pill" style="background-color:rgba(0,0,0,0) "
               placeholder="Project name" aria-label="Search"
               aria-describedby="search-addon"/>
        <span class="input-group-text border-0" id="search-addon">
                <a href="">
                    <i class="fas fa-search"></i>
                </a>
            </span>
    </div>
</div>
<main class="col-11 mx-auto">
    <div class="row">
        <!-- Single card-->
        <div class="col-xl-4 col-lg-4 col-md-6 col-12 rounded-pill my-4">
            <div class="card-body bg-main p-4 rounded text-secondary">
                <div class="row">
                    <div class="col-6 my-3">
                        <h5 class="card-title text-white">The crane</h5>
                    </div>
                    <div class="col-6 my-3 text-end">
                    </div>
                </div>
                <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque malesuada, metus in porttitor
                    convallis, arcu augue viverra mauris, vulputate fringilla velit est sed tellus. Suspendisse varius
                    elementum purus id mattis. Nullam eu ligula mi. Nulla faucibus dolor ...
                </p>

                <hr>
                <div class="row">
                    <div class="col-6 text-start">
                        <i class="fa-solid fa-code-commit"></i><b class=""> Commit:</b> 12
                    </div>
                    <div class="col-6 text-end">
                        <i class="fa-solid fa-triangle-exclamation"></i><b class=""> Issues:</b> 1
                    </div>

                </div>

                <hr>
                <p>
                    <strong>Members: </strong> Beffa Bryan, Finiletti Simone
                </p>

                <div class="row">
                    <div class="col-6">
                        <a href="http://localhost:8080/SCMRefactor/src/repository.php">
                            <button type="button" class="btn btn-primary">Learn more</button>
                        </a>
                    </div>
                    <div class="col-6 text-end">
                        <p>Clone
                            <a data-mdb-toggle="tooltip"
                               class="repo"
                               title="git clone https://scm.ti-edu.ch/repogit/labingsw022022202308ed2d"><i
                                        class="text-primary fa-regular fa-clone fa-2x ps-3 gitClone" style="cursor: pointer"></i></a>
                        </p>
                    </div>

                </div>
            </div>

        </div>

        <div class="col-xl-4 col-lg-4 col-md-6 col-12 rounded-pill my-4">
            <div class="card-body bg-main p-4 rounded text-secondary">
                <div class="row">
                    <div class="col-6 my-3">
                        <h5 class="card-title text-white">The crane</h5>
                    </div>
                    <div class="col-6 my-3 text-end">
                    </div>
                </div>
                <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque malesuada, metus in porttitor
                    convallis, arcu augue viverra mauris, vulputate fringilla velit est sed tellus. Suspendisse varius
                    elementum purus id mattis. Nullam eu ligula mi. Nulla faucibus dolor ...
                </p>

                <hr>
                <div class="row">
                    <div class="col-6 text-start">
                        <i class="fa-solid fa-code-commit"></i><b class=""> Commit:</b> 12
                    </div>
                    <div class="col-6 text-end">
                        <i class="fa-solid fa-triangle-exclamation"></i><b class=""> Issues:</b> 1
                    </div>

                </div>

                <hr>
                <p>
                    <strong>Members: </strong> Beffa Bryan, Finiletti Simone
                </p>

                <div class="row">
                    <div class="col-6">
                        <a href="http://localhost:8080/SCMRefactor/src/repository.php">
                            <button type="button" class="btn btn-primary">Learn more</button>
                        </a>
                    </div>
                    <div class="col-6 text-end">
                        <p>Clone
                            <a data-mdb-toggle="tooltip"
                               class="repo"
                               title="git clone https://scm.ti-edu.ch/repogit/labingsw022022202308ed2d"><i
                                        class="text-primary fa-regular fa-clone fa-2x ps-3 gitClone" style="cursor: pointer"></i></a>
                        </p>
                    </div>

                </div>
            </div>

        </div>

        <div class="col-xl-4 col-lg-4 col-md-6 col-12 rounded-pill my-4">
            <div class="card-body bg-main p-4 rounded text-secondary">
                <div class="row">
                    <div class="col-6 my-3">
                        <h5 class="card-title text-white">The crane</h5>
                    </div>
                    <div class="col-6 my-3 text-end">
                    </div>
                </div>
                <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque malesuada, metus in porttitor
                    convallis, arcu augue viverra mauris, vulputate fringilla velit est sed tellus. Suspendisse varius
                    elementum purus id mattis. Nullam eu ligula mi. Nulla faucibus dolor ...
                </p>

                <hr>
                <div class="row">
                    <div class="col-6 text-start">
                        <i class="fa-solid fa-code-commit"></i><b class=""> Commit:</b> 12
                    </div>
                    <div class="col-6 text-end">
                        <i class="fa-solid fa-triangle-exclamation"></i><b class=""> Issues:</b> 1
                    </div>

                </div>

                <hr>
                <p>
                    <strong>Members: </strong> Beffa Bryan, Finiletti Simone
                </p>

                <div class="row">
                    <div class="col-6">
                        <a href="http://localhost:8080/SCMRefactor/src/repository.php">
                            <button type="button" class="btn btn-primary">Learn more</button>
                        </a>
                    </div>
                    <div class="col-6 text-end">
                        <p>Clone
                            <a data-mdb-toggle="tooltip"
                               class="repo"
                               title="git clone https://scm.ti-edu.ch/repogit/labingsw022022202308ed2d"><i
                                        class="text-primary fa-regular fa-clone fa-2x ps-3 gitClone" style="cursor: pointer"></i></a>
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="row">
        <!-- Single card-->
        <div class="col-xl-4 col-lg-4 col-md-6 col-12 rounded-pill my-4">
            <div class="card-body bg-main p-4 rounded text-secondary">
                <div class="row">
                    <div class="col-6 my-3">
                        <h5 class="card-title text-white">The crane</h5>
                    </div>
                    <div class="col-6 my-3 text-end">
                    </div>
                </div>
                <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque malesuada, metus in porttitor
                    convallis, arcu augue viverra mauris, vulputate fringilla velit est sed tellus. Suspendisse varius
                    elementum purus id mattis. Nullam eu ligula mi. Nulla faucibus dolor ...
                </p>

                <hr>
                <div class="row">
                    <div class="col-6 text-start">
                        <i class="fa-solid fa-code-commit"></i><b class=""> Commit:</b> 12
                    </div>
                    <div class="col-6 text-end">
                        <i class="fa-solid fa-triangle-exclamation"></i><b class=""> Issues:</b> 1
                    </div>

                </div>

                <hr>
                <p>
                    <strong>Members: </strong> Beffa Bryan, Finiletti Simone
                </p>

                <div class="row">
                    <div class="col-6">
                        <a href="http://localhost:8080/SCMRefactor/src/repository.php">
                            <button type="button" class="btn btn-primary">Learn more</button>
                        </a>
                    </div>
                    <div class="col-6 text-end">
                        <p>Clone
                            <a data-mdb-toggle="tooltip"
                               class="repo"
                               title="git clone https://scm.ti-edu.ch/repogit/labingsw022022202308ed2d"><i
                                        class="text-primary fa-regular fa-clone fa-2x ps-3 gitClone" style="cursor: pointer"></i></a>
                        </p>
                    </div>
                </div>
            </div>

        </div>

        <!-- Single card-->
        <div class="col-xl-4 col-lg-4 col-md-6 col-12 rounded-pill my-4"></div>

        <!-- Single card-->
        <div class="col-xl-4 col-lg-4 col-md-6 col-12 rounded-pill my-4"></div>

    </div>
</main>

<script type="text/javascript" src="js/spacing.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/notify.min.js"></script>

<script>

    $.notify.addStyle("success1", {
        html: "<div style='width: 200px'><i class='fa fa-check-circle pe-2 text-primary'></i><span data-notify-text class='text-white'></span></div>",
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

    $(".gitClone").click(function () {
        $(this).notify(
            "git clone command copied", successOptions
        )
    });


</script>
<?php require_once 'global/footer.php' ?>

</body>
</html>