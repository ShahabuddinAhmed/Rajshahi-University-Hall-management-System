<!DOCTYPE html>
<html>

    <head>
        <title> Student </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="stylesheet" href="search/search.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="csss/style.css">

    </head>

    <style>
    

        body
        {
            margin: 0px;
            padding: 0px;
            height: 100%;
            background-color: #c1bdba;
            background-size: cover;

        }

        a
        {
            text-decoration: none;
        }

        a.Top4
        {
            display: block;
            color: white;
            text-align: center;
            padding: 2px;
            text-decoration: none;
        }

        nav ul
        {
            margin: 0;
            color: white;
            padding: 0;
            overflow: hidden;
            text-align: none;
            background-color: rgba(0,0,0,.7)
        }
        li.Rig
        {
            float: right;
        }
        
        div.CLS
        {
            position: absolute;
            top: 0px;
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
        .container
        {
            padding: 60px 120px;
        }

        @media (max-width: 550px) {

            
            .container{
                /*NOtice padding: */
                padding: 50px 20px;
                }
            nav ul li{
                box-sizing: border-box;
                width: 100%;
                
                text-align: center;

            }
            .handle
            {
                display: block;
            }
        }

    </style>

    <body>
            <nav>

                <ul>
                    <li>
                        <a class="Top4" href="/home"> Home </a>
                    </li>
                    <li>
                        <a class="Top4" href="/viewmypayment">View My Payment </a>
                    </li>
                    <li>
                        <a class="Top4" href="/changepassword"> Change Password </a>
                    </li>
                    <li>
                        <a class="Top4" href="/"> LogOut </a>
                    </li>
                </ul>
            </nav>

            <div class="form">
            <div class="tab-content"> 
                <h1>Enter Student's Complain</h1>
                <form action="AddComplain.php" method="post" name="UpdateHallStuff">
                    <div class="field-wrap">
                        <br>
                        <textarea name="info"  type="text" rows="15" maxlength="995">

                        </textarea>
                    </div>
                    <button type="submit" class="button button-block"/>Submit</button>
                </form>
            </div>
        </div> <!-- /form -->
            
    </body>
</html>