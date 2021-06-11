<!DOCTYPE html>
<html lang="fr">
	<head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>PHP ex 6.4 URL Client</title>
    </head>
    <body >
        <!--
            Faire une page index.php. 
            Tester sur cette page que tous les paramètres de cette URL existent  
            et les afficher : index.php?language=PHP&server=LAMP
        -->
        <form action="test_url.php" methode="get">
            <p>
                <label for="languageId">Choisisser la langue:</label>
                <select name="language" id="languageId">
                    <option value="CSS">CSS</option>    			
                    <option value="HTML">HTML</option>    			
                    <option value="JavaScript">JavaScript</option>    			
                    <option value="PHP">PHP</option>
                </select>
            </p>
            <p>
                <label for="serverId">Choisisser un server:</label>
                <select name="server" id="serverId">
                    <option value="celui-ci">celui-ci</option>    			
                    <option value="celui-la">celui-la</option>    			
                    <option value="LAMP">LAMP</option> 
                </select>
            </p>
            <p>
                <input type="submit" value="OK">
            </p>
        </form>
    </body>
</html>