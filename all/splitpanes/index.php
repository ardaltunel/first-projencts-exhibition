<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' href='https://unpkg.com/splitpanes@legacy/dist/splitpanes.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Weatra Global</title>
</head>

<body>
    <? include 'includes/indexMenu.php';?>
    <div class="main">
        <div id="app">
            <splitpanes>
                <pane>
                    <splitpanes class="default-theme" horizontal="horizontal">
                        <pane>
                            <splitpanes class="default-theme">
                                <pane style="overflow:auto;">
                                    <? include 'includes/page-1.php' ?>
                                </pane>
                                <pane style="width: 65%;">
                                    <splitpanes class="default-theme" horizontal="horizontal">
                                        <pane style="overflow:auto;">
                                            <? include 'includes/page-2-1.php';?>
                                        </pane>
                                        <pane style="overflow:auto;">
                                            <? include 'includes/page-2-2.php';?>
                                        </pane>
                                </pane>
                                <pane style="overflow:auto;">
                                    <div class="pane-one">
                                        <section class="accordion">
                                            <? include 'includes/page-3.php' ?>
                                        </section>
                                    </div>
                                </pane>
                            </splitpanes>
                        </pane>
                        <pane style="overflow:auto;">
                            5
                        </pane>
                    </splitpanes>
                </pane>
            </splitpanes>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <script src='https://unpkg.com/vue@legacy'></script>
    <script src='https://unpkg.com/splitpanes@legacy'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://rawgit.com/RickStrahl/jquery-resizable/master/src/jquery-resizable.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="index.js"></script>
</body>

</html>