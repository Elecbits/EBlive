<!doctype html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-animate.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-aria.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-messages.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <style>
        
        a {
            color: #69C;
            text-decoration: none;
        }
        a:hover {
            color: #F60;
        }
        h1 {
            font: 1.7em;
            line-height: 110%;
            color: #000;
        }
        p {
            margin: 0 0 20px;
        }


        input {
            outline: none;
        }
        input[type=search] {
            -webkit-appearance: textfield;
            -webkit-box-sizing: content-box;
            font-family: inherit;
            font-size: 100%;
        }
        input::-webkit-search-decoration,
        input::-webkit-search-cancel-button {
            display: none;
        }


        input[type=search] {
            background: #ededed url(http://static.tumblr.com/ftv85bp/MIXmud4tx/search-icon.png) no-repeat 9px center;
            border: solid 1px #ccc;
            padding: 0px 10px 9px 32px;
            width: 55px;

            -webkit-border-radius: 10em;
            -moz-border-radius: 10em;
            border-radius: 10em;

            -webkit-transition: all .5s;
            -moz-transition: all .5s;
            transition: all .5s;
        }
        input[type=search]:focus {
            width: 130px;
            background-color: #fff;
            border-color: #0070FF;

            -webkit-box-shadow: 0 0 5px rgba(109,207,246,.5);
            -moz-box-shadow: 0 0 5px rgba(109,207,246,.5);
            box-shadow: 0 0 5px rgba(109,207,246,.5);
        }


        input:-moz-placeholder {
            color: #999;
        }
        input::-webkit-input-placeholder {
            color: #999;
        }

        /* Demo 2 */
        #demo-2 input[type=search] {
            width: 15px;
            padding-left: 10px;
            color: transparent;
            cursor: pointer;
        }
        #demo-2 input[type=search]:hover {
            background-color: #fff;
        }
        #demo-2 input[type=search]:focus {
            width: 200px;
            padding-left: 32px;
            color: #000;
            background-color: #fff;
            cursor: auto;
        }
        #demo-2 input:-moz-placeholder {
            color: transparent;
        }
        #demo-2 input::-webkit-input-placeholder {
            color: transparent;
        }

    </style>
</head>

<body>

<form id="demo-2">
    <input type="search" placeholder="Search">
    <input type="submit" name="submit" value="submit" >
    

</form>
</body>
<script>


</script>

</html>