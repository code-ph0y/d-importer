<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Data Importer</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?php echo assetUrl('bootstrap/dist/css/bootstrap.min.css'); ?>" />
        <link rel="stylesheet" href="<?php echo assetUrl('handsontable/dist/handsontable.full.min.css'); ?>" />
        <link rel="stylesheet" href="<?php echo assetUrl('font-awesome/css/font-awesome.min.css'); ?>" />
        <link rel="stylesheet" href="<?php echo assetUrl('dropzone/dist/min/dropzone.min.css'); ?>" />

        <link rel="stylesheet" href="<?php echo assetUrl('my-app/css/style.css'); ?>" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <header class="header migrate mt-5" id="top">
            <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
                <a class="navbar-brand" href="<?php echo baseUrl(); ?>">Data Importer</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="btn-group mr-2" role="group" aria-label="First group">
                                    <button type="button" class="btn btn-secondary">
                                        <i class="fa fa-database" aria-hidden="true"></i>
                                    </button>
                                </div>
                                <div class="btn-group mr-2" role="group" aria-label="Second group">
                                    <button type="button" class="btn btn-secondary">
                                        <i class="fa fa-table" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <main class="container wrapper-lg">
            <div class="row align-items-center">
                <div class="col-12">
                    <?php echo (!empty($body)) ? $body : ''; ?>
                </div>
            </div>
        </main>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?php echo assetUrl('jquery/dist/jquery.min.js'); ?>"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo assetUrl('bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo assetUrl('dropzone/dist/min/dropzone.min.js'); ?>"></script>
        <script src="<?php echo assetUrl('handsontable/dist/handsontable.full.min.js'); ?>"></script>

        <script src="<?php echo assetUrl('my-app/js/main.js'); ?>"></script>
    </body>
</html>
