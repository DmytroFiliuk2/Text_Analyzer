<?php

use src\Services\ReportService;

require_once 'bootstrap.php';

$reportService = new ReportService($entityManager);

?>
<html>
<script src="dist/app_bundle.js"></script>
<head>
    <title>FilePond from CDN</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Filepond stylesheet -->
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">

</head>
<body>
<main>
    <div class="container row">
        <ul class="btn-default">Total count <?= $reportService->getReportsCount() ?> </ul>
    </div>
</main>
</body>
</html>
<?php
