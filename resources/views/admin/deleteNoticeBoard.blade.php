<!DOCTYPE html>
<html>

	<head>

		<title>Delete Notice Board</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

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

		div.Top
        {
            width: 100%;
            padding: 0px;
        }

        div.CLS
        {
            position: absolute;
            top: 0px;
            background-color: rgba(0,0,0,.2);
            width: 100%;
        }

		div.Middle
        {
            width: 100%;
            padding: 0px;
            height: 600px;
            text-align: center;
            background-color: none;
        }
        button
        {
            border: 2px solid #c1bdba;
            
        }

        ul.Top1
        {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: rgba(0,0,0,.7);
        }

        li.Top2
        {
            float: left;
        }

        li.Top3
        {
            float: right;
        }

        a.Top4
        {
            display: block;
            color: white;
            text-align: center;
            padding: 20px;
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

        .container {
            padding: 60px 120px;
        }

        @media (max-width: 600px) {
            .container {
                /*NOtice padding: */
                padding: 50px 20px;
            }
        }

        .cls_ntc {
            text-align: center;
            background-color: #7d4627;
            color: white;
            border-radius: 5px;
            margin: 3px 3px 10px 3px;
            padding: 15px 3px 8px 3px;
            -webkit-box-shadow: 0 6px 6px -6px #0E1119;
            -moz-box-shadow: 0 6px 6px -6px #0E1119;
            box-shadow: 0 6px 6px -6px #0E1119;
    }

	</style>

	<body>
		<div class="CLS">
    		<!-- ==========Here Top Divition========= !-->
    		<div class = "Top">
                <ul class = "Top1">
                    <li class = "Top2"><a class = "Top4" href="/home">Home</a> </li>
                </ul>
            </div>
    	</div>
        <br>
        <br>

        <div class="container">

        
        </div>

        <!-- <script>
          function del_func(tm) {
                var txt;
                var r = confirm("Are You Sure! To delete this member.");
                if (r == true) {
                    window.location.href = "delete_change.php?id=" + tm;
                } 
            }  
        </script> -->

	</body>
</html>