<?php

use src\Exporters\Exceptions\FileFormatNotSupportedException;
use src\Exporters\Strategy\Factory\ExportStrategyFactory;
use src\Servisec\FileService;
use src\TextAnalyser;

require_once 'bootstrap.php';
?>

<?php

if (!empty($_FILES) && array_key_exists('file', $_FILES)) {
    $fileService = new FileService(new ExportStrategyFactory());
    $analyser = new TextAnalyser();

    $dataEntity = $fileService->export($_FILES['file']);
    $response = null;

    try {
        $response = $reportEntity = $analyser->analise($dataEntity);
    } catch (FileFormatNotSupportedException $exception) {
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

    <!-- Filepond stylesheet -->
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">

</head>
<form method="post" enctype="multipart/form-data">
    <!-- We'll transform this input into a pond -->
    <input type="file" class="filepond" name="file" accept=".txt, .xml, .csv">
    <div>
        <button>Submit</button>
    </div>
</form>
<!--Turn all file input elements into ponds -->
<!--<script>-->
<!--    FilePond.parse(document.body);-->
<!--</script>-->
</body>
</html>
<?php
}
?>
