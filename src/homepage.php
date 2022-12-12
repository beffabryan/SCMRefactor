<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>USI &amp; SUPSI Source Code Management (SCM)</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="Redmine"/>
    <meta name="keywords" content="issue,bug,tracker"/>
    <meta name="csrf-param" content="authenticity_token"/>
    <meta name="csrf-token"
          content="PJwPpGk33Ux6UBs8jK+kKL5tndFQZXJMThc3KcawA+BnoilovM/Wais+4viHQ9+VDL/nJ272ztmzM0qkhmTg/A=="/>
    <link rel='shortcut icon' href='https://scm.ti-edu.ch/favicon.ico?1560171137'/>


    <!-- Bootstrap link -->
    <!-- Font Awesome -->
    <link
            href="css/style.css"
            rel="stylesheet"
    />
    <link
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
            rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
            href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
            rel="stylesheet"
    />
    <link
            href="cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css"
            rel="stylesheet"
    />
    <!-- MDB -->
    <link
            href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css"
            rel="stylesheet"
    />

    <!-- MDB -->
    <script
            type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"
    ></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script
            type="text/javascript"
            src="cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"
    ></script>
</head>
<body style="background-color:  rgb(15,17,26)">

<?php require_once 'navbar.php' ?>

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
        </tr>        <tr class="text-secondary">

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
        <tr class="text-secondary">

            <td>TheCrane</td>
            <td>Graphic engine development</td>
            <td>Beffa Bryan, Finiletti Simone, ...</td>
            <td><i class="fa-solid fa-arrow-right "></i></td>
        </tr>        <tr class="text-secondary">

            <td>TheCrane</td>
            <td>Graphic engine development</td>
            <td>Beffa Bryan, Finiletti Simone, ...</td>
            <td><i class="fa-solid fa-arrow-right "></i></td>
        </tr>        <tr class="text-secondary">

            <td>TheCrane</td>
            <td>Graphic engine development</td>
            <td>Beffa Bryan, Finiletti Simone, ...</td>
            <td><i class="fa-solid fa-arrow-right "></i></td>
        <tr class="text-secondary">

            <td>TheCrane</td>
            <td>Graphic engine development</td>
            <td>Beffa Bryan, Finiletti Simone, ...</td>
            <td><i class="fa-solid fa-arrow-right "></i></td>
        </tr>        <tr class="text-secondary">

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
        <tr class="text-secondary">

            <td>TheCrane</td>
            <td>Graphic engine development</td>
            <td>Beffa Bryan, Finiletti Simone, ...</td>
            <td><i class="fa-solid fa-arrow-right "></i></td>
        </tr>        <tr class="text-secondary">

            <td>TheCrane</td>
            <td>Graphic engine development</td>
            <td>Beffa Bryan, Finiletti Simone, ...</td>
            <td><i class="fa-solid fa-arrow-right "></i></td>
        </tr>

        </tbody>
    </table>
</div>

<script>
    $(document).ready( function () {
        $('#projectTable').DataTable();
    });
</script>

<?php require_once 'footer.php' ?>

</body>
</html>
