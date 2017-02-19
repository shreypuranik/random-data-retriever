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