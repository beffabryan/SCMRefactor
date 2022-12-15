<!DOCTYPE html>
<html lang="en">
 <?php require_once 'global/head.php'?>
<body>

<?php $_SESSION['nav_bar_item'] = "homepage"; ?>
<?php require_once 'global/navbar.php' ?>
<?php require_once 'global/header.php' ?>

<div class=" text-center mx-auto text my-4">
    <div class="">
        <h1 class="text-white mt-5 pt-5">Home</h1>
    </div>

    <div>
        <p class="h4 text-secondary">USI &#38; SUPSI Source code management service</p>
        <p class="h7 text-secondary">Provided by Servizi
            informatici. Università della Svizzera italiana. Scuola Universitaria Professionale della
            Svizzera italiana</p>
    </div>
</div>

<!-- Project -->
<div class="container my-5">

    <!-- serch input -->
    <div class="col-lg-6 col-xl-6 col-md-8 col-12 mx-auto my-5 pt-5">
        <div class="input-group">
            <input type="search" class="form-control rounded-pill" style="background-color:rgba(0,0,0,0) " placeholder="Project name" aria-label="Search"
                   aria-describedby="search-addon"/>
            <span class="input-group-text border-0" id="search-addon">
                <a href="">
                    <i class="fas fa-search"></i>
                </a>
            </span>
        </div>
    </div>

    <div class="col-10 mx-auto">

        <table class="table table-responsive" id="projectTable">
            <thead class="text-white">
            <tr>
                <th>Repository</th>
                <th>Description</th>
                <th>Manager</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <tr class="text-secondary">
                <td>TheCrane</td>
                <td>Graphic engine development</td>
                <td>Beffa Bryan, Finiletti Simone, ...</td>
                <td><i class="fa-solid fa-arrow-right "></i></td>
            <tr class="text-secondary">

                <td>TheCrane</td>
                <td>Graphic engine development</td>
                <td>Beffa Bryan, Finiletti Simone, ...</td>
                <td><i class="fa-solid fa-arrow-right "></i></td>
            </tr>
            <tr class="text-secondary">

                <td>TheCrane</td>
                <td>Graphic engine development</td>
                <td>Beffa Bryan, Finiletti Simone, ...</td>
                <td><i class="fa-solid fa-arrow-right "></i></td>
            </tr>
            </tbody>
        </table>
        <nav class="justify-content-end" aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link text-white" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link text-white" href="#">1</a></li>
                <li class="page-item"><a class="page-link text-white" href="#">2</a></li>
                <li class="page-item"><a class="page-link text-white" href="#">3</a></li>
                <li class="page-item"><a class="page-link text-white" href="#">Next</a></li>
            </ul>
        </nav>
    </div>

</div>

<script type="text/javascript" src="js/spacing.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<?php require_once 'global/footer.php' ?>

</body>
</html>
