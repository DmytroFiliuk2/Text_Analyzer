<?php

use src\Exporters\Exceptions\FileFormatNotSupportedException;
use src\Exporters\Strategy\Factory\ExportStrategyFactory;
use src\Importers\Strategy\Factory\ImportStrategyFactory;
use src\Services\FileService;
use src\TextAnalyser;

require_once 'bootstrap.php';
?>

<?php

if (!empty($_FILES) && array_key_exists('file', $_FILES)) {
    $fileService = new FileService(new ExportStrategyFactory(), new ImportStrategyFactory());
    $analyser = new TextAnalyser();

    $dataEntity = $fileService->export($_FILES['file']);
    $response = null;

    try {
        $reportEntity = $analyser->analise($dataEntity);
        /**@var \src\Entities\Report */
        $entityManager->persist($reportEntity);
        $entityManager->flush();

        $response = $fileService->import($reportEntity);

    } catch (FileFormatNotSupportedException $exception) {
        $response = $exception->getMessage();
    } catch (\Throwable $exception) {
        $response = $exception->getMessage();
    }

    echo json_encode($response, JSON_OBJECT_AS_ARRAY);
}else{
?>
<html>
<body>
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

<div class="row tabs">
 <a href="/stats.php">Global Stats</a>
</div>
<form method="post" enctype="multipart/form-data">
    <!-- We'll transform this input into a pond -->
    <input type="file" class="filepond" name="file" accept=".txt, .xml, .csv">
    <div>
        <button>Submit</button>
    </div>
</form>
</body>
</html>
<?php
}
?>
