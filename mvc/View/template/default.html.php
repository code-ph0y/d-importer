<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Data Importer</title>

        <?php foreach ($assets['css'] as $css) : ?>
            <link rel="stylesheet" href="<?php echo $css; ?>" />
        <?php endforeach; ?>

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
                <a class="navbar-brand" href="<?php echo $view->baseUrl(); ?>">Data Importer</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <div id="main-toolbar" class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="btn-group me-2" role="group" aria-label="Second group">
                                    <button data-page="datasources" id="datasources" type="button" class="btn btn-secondary">
                                        <i class="fa fa-database" title="Datasources"></i>
                                        Datasources
                                    </button>
                                </div>
                                <div class="btn-group me-2" data-url="" role="group" aria-label="Second group">
                                    <button data-page="actions" id="actions" type="button" class="btn btn-secondary">
                                        <i class="bi bi-diagram-2-fill"  title="Actions"></i>
                                        Actions
                                    </button>
                                </div>
                                <div class="btn-group me-2" data-url="" role="group" aria-label="First group">
                                    <button data-page="output" id="output" type="button" class="btn btn-secondary">
                                        <i class="bi bi-play-fill" aria-hidden="true" title="Output"></i>
                                        Output
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
                <div id="partial-main" class="col-12">
                    <?php echo (!empty($body)) ? $body : ''; ?>
                </div>
            </div>
        </main>

        <?php foreach ($assets['js'] as $js) : ?>
            <script src="<?php echo $js; ?>"></script>
        <?php endforeach; ?>

        <script>
            var baseurl = '<?php echo $view->baseUrl(); ?>';
        </script>
    </body>
</html>
