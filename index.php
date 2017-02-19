<html>
<head>
    <title>Random Data Result Retriever</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="data-retriever.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <style>
        .footerbox{
            background: #000000;
            color: white;
        }
        .bs_input{
            width: 65%;
        }

        #evaluations{
            margin-top: 10px;
            border: 1px dashed grey;
            background: white;
            color: black;
            display: none;
        }
    </style>

</head>
<div class="row footerbox">
    <a href="https://github.com/shreypuranik/random-data-retriever"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/652c5b9acfaddf3a9c326fa6bde407b87f7be0f4/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f6f72616e67655f6666373630302e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_orange_ff7600.png"></a>
    <div class="col-sm-6 ">
        <h3>&nbsp; Random Data Result Retriever</h3>
    </div>
    <div class="col-sm-6">
    </div>

</div>
<div id="top" class="container">
    <h3 align="center">Save your raw data file in the right directory.<small>, Then, press the button below.</small></h3>

    <div class="form">

        <div class="row">
            <div class="col-sm-3">
            </div>
            <div class="col-sm-3">
                <input type="submit" id="check-xpath" class="btn btn-primary btn-success btn-block" value="Retrieve random row">
            </div>
            <div class="col-sm-6">
            </div>
        </div>
    </div>
    <div id="evaluations">

    </div>

</div>

</html>