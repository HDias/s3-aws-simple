<?php
//Lista arquivos Públicos
require_once __DIR__ . './app/start.php';

$objects = $s3->getIterator('ListObjects', [
    'Bucket' => $config['s3']['bucket']
]);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>List</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>File</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($objects as $entity): ?>
            <tr>
                <th><?php echo $entity['Key']; ?></th>
                <th><a href="<?php echo $s3->getObjectUrl($config['s3']['bucket'], $entity['Key']); ?>">Show</a></th>
                <th><a href="<?php echo $s3->getObjectUrl($config['s3']['bucket'], $entity['Key']); ?>" download="<?php echo $entity['Key']; ?>">Download</a></th>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>