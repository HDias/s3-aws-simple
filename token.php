<?php
//Lista arquivos protegidos Usando Token
require_once __DIR__ . './app/start.php';

$object = 'uploads/Jennifer-Aniston.jpg';

$url = $s3->getObjectUrl(
    $config['s3']['bucket'],
    $object,
    '+10 seconds' //Tempo para expirar o acesso ao arquivo protegido
);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>TOKENt</title>
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
            <tr>
                <th><a href="<?php echo $url; ?>">Show</a></th>
            </tr>
        </tbody>
    </table>
</body>
</html>