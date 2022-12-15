<!DOCTYPE html>
<html lang="en">
<?php require_once 'global/head.php' ?>
<body>

<?php $_SESSION['nav_bar_item'] = "homepage"; ?>
<?php require_once 'global/navbar.php' ?>
<?php require_once 'global/header.php' ?>

<div class=" text-center mx-auto text mt-4">
    <div class="">
        <h1 class="text-white mt-5">Explore the public repositories</h1>
    </div>

    <div>
        <p class="h7 text-secondary">Provided by Servizi
            informatici. Università della Svizzera italiana. Scuola Universitaria Professionale della
            Svizzera italiana</p>
    </div>
</div>

<!-- Project -->
<div class="container mb-5">

    <!-- serch input -->
    <div class="col-lg-6 col-xl-6 col-md-8 col-12 mx-auto my-5">
        <div class="input-group">
            <input id="search" type="search" class="form-control rounded-pill" style="background-color:rgba(0,0,0,0) "
                   placeholder="Project name" aria-label="Search"
                   aria-describedby="search-addon"/>
            <span class="input-group-text border-0" id="search-addon">
                <a href="">
                    <i class="fas fa-search"></i>
                </a>
            </span>
        </div>
    </div>

    <div class="col-10 mx-auto card pt-2 bg-main">

        <table class="table table-borderless table-responsive" id="projectTable">
            <thead class="text-white">
            <tr class="border-bottom border-primary">
                <th>Repository</th>
                <th>Description</th>
                <th>Manager</th>
                <th>View</th>
            </tr>
            </thead>
            <tbody class="text-secondary">
            <tr class="border-bottom border-secondary">
                <td>TheCrane</td>
                <td>Graphic engine development</td>
                <td>Beffa Bryan, Finiletti Simone, ...</td>
                <td>
                    <a href="http://localhost:8080/SCMRefactor/src/repository.php">
                        <i class="fa-solid fa-arrow-right "></i>
                    </a>
                </td>
            <tr class="border-bottom border-secondary">
                <td>TheCrane</td>
                <td>Graphic engine development</td>
                <td>Beffa Bryan, Finiletti Simone, ...</td>
                <td>
                    <a href="http://localhost:8080/SCMRefactor/src/repository.php">
                        <i class="fa-solid fa-arrow-right "></i>
                    </a>
                </td>
            </tr>

            <tr class="border-bottom border-secondary">
                <td>TheCrane</td>
                <td>Graphic engine development</td>
                <td>Beffa Bryan, Finiletti Simone, ...</td>
                <td>
                    <a href="http://localhost:8080/SCMRefactor/src/repository.php">
                        <i class="fa-solid fa-arrow-right "></i>
                    </a>
                </td>
            </tr>
            <tr>

                <td>TheCrane</td>
                <td>Graphic engine development</td>
                <td>Beffa Bryan, Finiletti Simone, ...</td>
                <td>
                    <a href="http://localhost:8080/SCMRefactor/src/repository.php">
                        <i class="fa-solid fa-arrow-right "></i>
                    </a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

</div>

<script type="text/javascript" src="js/spacing.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/notify.min.js"></script>

<?php require_once 'global/footer.php' ?>

</body>
</html>
