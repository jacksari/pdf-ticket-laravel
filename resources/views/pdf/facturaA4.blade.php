<!doctype html>
<html>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">

    {{-- <link href="http://localhost:8000/css/app.css" rel="stylesheet"> --}}

    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
        }

        body {
            /* padding: 2rem; */
            font-family: 'Roboto', sans-serif;
            background: #FAFAFA;
        }

        .header{
            /* padding: .5rem; */
            /* background: rgb(87, 126, 199); */
        }
        .header .container-logo{
            width: 100%;
            /* background: greenyellow; */
            height: 200px;
            position: relative;
        }

        .header .container-logo img{
            width: 100%;
            height: 100%;
        }
        .container-icon {
            width: 100%;
            height: 100%;
            /* position: relative; */
            /* background: blue; */
            position: absolute;
            top: 50%;
            left: 15%;
            transform: translateY(-30%);

        }
        .container-icon img{
            width: 100px !important;
            height:100px !important;
            object-fit: contain;
            margin-left: 1.5rem;

        }
        .container-icon p{
            font-weight: 500;
            font-size: 1rem;
        }
        .container-logo .factura{
            position: absolute;
            top: 50%;
            right: 1.5%;
            width: 200px;
            height: 100px;
            transform: translateY(-43%);
            /* background: aqua; */
            font-size: 2.6rem;
            font-weight: 500;
            text-align: right;
        }

        .body {
            margin-top: 2rem;
        }

        

    </style>
</head>

<body>

    <div class="header">
        <div class="container-logo">
            <img src="https://res.cloudinary.com/mikunaalli/image/upload/v1667461051/facturador/head_lqnzcc.png" alt="">
            <div class="container-icon">
                <img class="" src="https://liquipedia.net/commons/images/thumb/2/22/Thunder_Awaken_2022_lightmode.png/600px-Thunder_Awaken_2022_lightmode.png" alt="">
                <p>Thunder Awaken</p>
            </div>   
            <p class="factura">Factura</p>         
        </div>
        
        

    </div>

    <div class="body">

        <h1>Invoice to</h1>

         

    </div>

    <div class="footer">
        

    </div>
    

    

</body>

</html>