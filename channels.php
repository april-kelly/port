<html>

    <head>

        <style>
            body{
                border: 0;
                margin: 0;
                padding: 0;
            }
            #main{
                background-color: red;


                z-index: 0;
            }
            #sidebar{
                background-color: orange;
                min-width: 25px;
                width: 3%;
                height: 100%;
                position: fixed;
                z-index: 0;
            }
            #sidebar:hover{
                width: 200px;
            }
        </style>

    </head>

    <body>

        <div id="main">
            This is some text
        </div>

        <div id="sidebar">channels</div>

    </body>

</html>