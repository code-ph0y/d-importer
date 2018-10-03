<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Data Importer</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?php echo $view->assetUrl('bootstrap/dist/css/bootstrap.min.css'); ?>" />
        <link rel="stylesheet" href="<?php echo $view->assetUrl('handsontable/dist/handsontable.full.min.css'); ?>" />
        <link rel="stylesheet" href="<?php echo $view->assetUrl('font-awesome/css/font-awesome.min.css'); ?>" />
        <link rel="stylesheet" href="<?php echo $view->assetUrl('dropzone/dist/min/dropzone.min.css'); ?>" />

        <link rel="stylesheet" href="<?php echo $view->assetUrl('my-app/css/style.css'); ?>" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <main class="container wrapper-lg">
            <div class="row align-items-center">
                <div class="col-12">
                    <?php echo (!empty($body)) ? $body : ''; ?>
                </div>
            </div>
        </main>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?php echo $view->assetUrl('jquery/dist/jquery.min.js'); ?>"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo $view->assetUrl('bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo $view->assetUrl('dropzone/dist/min/dropzone.min.js'); ?>"></script>
        <script src="<?php echo $view->assetUrl('handsontable/dist/handsontable.full.min.js'); ?>"></script>

        <script src="<?php echo $view->assetUrl('my-app/js/main.js'); ?>"></script>
    </body>
</html>
