<!DOCTYPE html>
<html lang='fr'>
	<head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>PHP ex 6.4 URL Server</title>
    </head>
    <body>
        <?php
        // Test the input date parameters (format ISO8601 --> YYYY-MM-DD)
        if ((isset($_REQUEST['language'])) && (!empty($_REQUEST['language'])))
        {
            $language= $_REQUEST['language'];
        }
        else
        {
            exit ("Language parameter is missing");
        }
        if ((isset($_REQUEST['server'])) && (!empty($_REQUEST['server'])))
        {
            $server= $_REQUEST['server'];
        }
        else
        {
            exit ("Server parameter is missing");
        }
        ?>
        <p>Received parameters on Server:</p>
        <p>test_url.php?language=<?= $language ?>&server=<?= $server ?></p>
    </body>
</html>