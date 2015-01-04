<!DOCTYPE html>
<html>
<head>
    <title>Learning Angular-UI</title>
    <script type="text/javascript" src="js/jquery-1.11.1.js"></script>
    <script type="text/javascript" src="js/angular.js"></script>
    <script type="text/javascript" src="js/angular-route.js"></script>
    <script type="text/javascript" src="js/ui-bootstrap-tpls-0.12.0.js"></script>
    <script type="text/javascript" src="app/app.js"></script>
    <script type="text/javascript" src="app/angular-ui.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://angular-ui.github.io/bootstrap/assets/demo.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body ng-app="index.app">

    <div ng-controller="LoginCtrl" class="accordion-demo">
        <br>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Login Panel.</h3>
            </div>
            <div class="panel-body">
                <div class="content-login">
                    <div class="input-group">
                        <span class="input-group-addon" id="txtEmail">Email</span>
                        <input type="text" class="form-control" placeholder="This field is required" aria-describedby="basic-addon1">
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon" id="txtPass">Password</span>
                        <input type="text" class="form-control" placeholder="This field is required" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="footer-login">
                    <button class="btn btn-danger" ng-click="clear()">Clear</button>
                    <button class="btn btn-info" ng-click="toggleMode()">Submit</button>
                </div>
            </div>
        </div>

    </div>
</body>
</html>