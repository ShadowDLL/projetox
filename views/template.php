<html>
    <head>
        <meta charset="UTF-8" />
        <title>Titulo do meu site:</title>
        <link href="<?php echo BASE_URL; ?>assets/css/style.css" rel="stylesheet" />
    </head>
    <body>
        <h1>TOPO DE MEU SITE:</h1>
        <?php 
        $this->loadViewInTemplate($viewName, $viewData);
        ?>
    <h1>Rodapé do meu site<h1>
    </body>
</html>

