<!DOCTYPE html>
<html>
	<head>
		<title> @yield('title') </title>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	    <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	    <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	    <link rel="stylesheet" href="search/search.css">

        @yield('import')

	</head>

	<style type="text/css">

		body
        {
            margin: 0px;
            padding: 0px;
            height: 100%;
            background-color: rgba(0,0,0,0.7); 
            background: url("Picture/sabash-bangladesh-opt.jpg") fixed center;
            background-size: cover;

        }

        a
        {
            text-decoration: none;
        }

        nav ul
        {
            margin: 0;
            color: white;
            padding: 0;
            overflow: hidden;
            background-color: rgba(0,0,0,.7);
            text-align: none;
        }
        li.Rig
        {
            float: right;
        }
        
        div.CLS
        {
            position: absolute;
            top: 0px;
            background-color: rgba(0,0,0,.2);
            width: 100%;
        }

        nav ul li
        {
            display: inline-block;
            color: white;
            padding: 20px
        }

        nav ul li:hover
        {
            background-color: #111;
        }

        .Left
        {
            padding: 5px;
            height: 100%;
            background-color: #c1bdba;
        }

        h2
        {
            background-color: rgba(0,0,0,0.7);
        }

        h4.SB
        {
            font-style: italic;
        }
        
        .field-wrap
        {
            position: relative;
            margin-bottom: 40px;
        }

        div.Right
        {
            width: 35%;
            float: center;
            padding: 5px;
            height: 100%;
            background-color: #c1bdba;
        }

        .row.content {height: 950px}


        ul.Left1
        {
            list-style-type: none;
            margin: 0;
            padding: 0;
            float: center;
            width: 220px;
            background-color: rgba(0,0,0,.7);
            border: 1px solid #555;
            text-align: center;
        }

        li.Left2
        {
            text-align: center;
            border-bottom: 1px solid #555;
            last child
        }


        a.Left3
        {
            display: block;
            color: #000;
            color: white;
            padding: 12px 16px;
            text-decoration: none;
        }


        a:hover
        {
            background-color: #111;
        }


        li:last-child
        {
            border-bottom: none;
        }

        @media screen and (max-width: 700px) {

            
            nav ul li{
                box-sizing: border-box;
                width: 100%;
                padding: 15px;
                text-align: center;

            }
            .handle
            {
                display: block;
            }
        }

		footer
		{
		    position:absolute;
		    height:120px;
		    text-align: center;
		    color: white;
		    background-color: rgba(0,0,0,.7);
		    bottom:0px;
		    left:0px;
		    right:0px;
		    margin-bottom:0px;
		}


	</style>

	<body>

		<div class="CLS">
        <nav>

            <ul>
                
                @yield('top')

            </ul>
            <br>
            <br>
            <br>
            <br>
        </nav>  
		
            @yield('body')


		<footer>
            <h3> All Rights Reserved By</h3>
            <h4> Group of Undefined: CSE RU-2013-14</h4>
        </footer>
    </div>
	</body>
</html>