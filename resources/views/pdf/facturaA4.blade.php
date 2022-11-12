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
            padding: 2.5rem;
        }


        .header{
            position: relative;
            height: 140px;
            /* background: red; */
        }

        .header .container-logo{
            position: absolute;
            top: 0;
            left: 0;
            width: 40%;
        }

        .header .container-logo .img{
            width: 200px;
            height: 100px;
            object-fit: contain;
        }
        .header .container-logo h2{
            margin: 1rem 0 .5rem 0 !important;
            font-size: 12px;
            font-weight: 300;
        }

        .header .container-logo p{
            font-size: 10px;
        }

        .header .container-ruc{
            position: absolute;
            top: 0;
            right: 0;
            width: 40%;
        }

        .header .container-ruc .ruc{
            border: 1px solid #000;
            border-radius: 8px;
            padding: 1rem;
            text-align: center;
        }
        .header .container-ruc .ruc h3 {
            font-size: 14px;
            font-weight: 300;
            letter-spacing: .1rem;

        }
        .header .container-ruc .ruc h4{
            font-size: 16px;
            margin: .3rem 0;
            font-weight: 300;
            /* letter-spacing: .1rem; */
        }

        .header .container-ruc .date{
            font-size: 10px;
            margin-top: .3rem;
        }

        .body{

        }

        .body .header-text {

        }

        .body .header-text .information-table{

        }

        .body .header-text .information-table .title{
            color: rgb(90, 141, 207);
            font-size: 12px;
        }

        .body .header-text .information-table .table {
            margin-top: .3rem;
            border: 1px solid #000;
            border-radius: 8px;
            padding: .6rem !important;
        }

        .mt-1{
            margin-top: 1rem;
        }
        .mt-2{
            margin-top: 2rem;
        }
        

    </style>
</head>

<body>

    <div class="header">

        <div class="container-logo">
            <img style="width: 150px; height: 40px;" class="" src="https://imgs.search.brave.com/qubxN_wptyb2ZTrUkoRiF2kWX1HYev_Uz_Ntf0tDOmc/rs:fit:1024:274:1/g:ce/aHR0cHM6Ly9hcHBw/cm8uYmNwLmNvbS5i/by9NdWx0aXBsaWNh/QkNQL0NvbnRlbnQv/aW1nL2ljb25vcy9s/b2dvLWJjcC5wbmc" alt="">
            <h2>BANCO DE CREDITO DEL PERU</h2>
            <p>CALLE CENTENARIO N° 156</p>
            <p>LA MOLINA</p>
            <p>LIMA</p>
        </div>

        <div class="container-ruc">
            <div class="ruc">
                <h3>R.U.C. N° 20100047218</h3>
                <h4>BOLETA DE VENTA ELECTRONICA</h4>
                <h3>BA04-09831520</h3>
            </div>
            <p class="date">Fecha de Emisión: 29/08/2022</p>
        </div>
        
    </div>

    <div class="body">

        <div class="header-text">
            <div class="information-table">

                <p class="title">INFORMACIÓN DEL CLIENTE</p>


                <div class="table">

                    <table style="width: 100%; position:">
                          <tbody>
                            <tr>
                                <td style="width: {{ 20 . '%' }}; text-align: left;">
                                    <p style="color: #000; font-weight: 300; font-size: 12px;">Nombre</p>
                                </td>
                                <td style="width: {{ 70 . '%' }}; text-align: left;">
                                    <p style="color: #000; font-weight: 300; font-size: 12px;">: Jack Anthony Sańchez Rivera</p>
                                </td>
                            </tr>

                            <tr>
                                <td style="width: {{ 20 . '%' }}; text-align: left;">
                                    <p style="color: #000; font-weight: 300; font-size: 12px;">Tipo de documento</p>
                                </td>
                                <td style="width: {{ 70 . '%' }}; text-align: left;">
                                    <p style="color: #000; font-weight: 300; font-size: 12px;">: DNI</p>
                                </td>
                            </tr>

                            <tr>
                                <td style="width: {{ 20 . '%' }}; text-align: left;">
                                    <p style="color: #000; font-weight: 300; font-size: 12px;">Número de documento</p>
                                </td>
                                <td style="width: {{ 70 . '%' }}; text-align: left;">
                                    <p style="color: #000; font-weight: 300; font-size: 12px;">: 70225508</p>
                                </td>
                            </tr>

                            <tr>
                                <td style="width: {{ 20 . '%' }}; text-align: left;">
                                    <p style="color: #000; font-weight: 300; font-size: 12px;">Dirección</p>
                                </td>
                                <td style="width: {{ 70 . '%' }}; text-align: left;">
                                    <p style="color: #000; font-weight: 300; font-size: 12px;">: Pasaje Malvas 135 - Breña</p>
                                </td>
                            </tr>
                            
                          </tbody>            
                    </table>
        
                </div>

            </div>

            <div class="information-table mt-1">

                <p class="title">INFORMACIÓN DEL CLIENTE</p>


                <div class="table">

                    <table style="width: 100%; position:">
                          <tbody>
                            <tr>
                                <td style="width: {{ 20 . '%' }}; text-align: left;">
                                    <p style="color: #000; font-weight: 300; font-size: 12px;">Nombre</p>
                                </td>
                                <td style="width: {{ 70 . '%' }}; text-align: left;">
                                    <p style="color: #000; font-weight: 300; font-size: 12px;">: Jack Anthony Sańchez Rivera</p>
                                </td>
                            </tr>

                            <tr>
                                <td style="width: {{ 20 . '%' }}; text-align: left;">
                                    <p style="color: #000; font-weight: 300; font-size: 12px;">Tipo de documento</p>
                                </td>
                                <td style="width: {{ 70 . '%' }}; text-align: left;">
                                    <p style="color: #000; font-weight: 300; font-size: 12px;">: DNI</p>
                                </td>
                            </tr>

                            <tr>
                                <td style="width: {{ 20 . '%' }}; text-align: left;">
                                    <p style="color: #000; font-weight: 300; font-size: 12px;">Número de documento</p>
                                </td>
                                <td style="width: {{ 70 . '%' }}; text-align: left;">
                                    <p style="color: #000; font-weight: 300; font-size: 12px;">: 70225508</p>
                                </td>
                            </tr>

                            <tr>
                                <td style="width: {{ 20 . '%' }}; text-align: left;">
                                    <p style="color: #000; font-weight: 300; font-size: 12px;">Dirección</p>
                                </td>
                                <td style="width: {{ 70 . '%' }}; text-align: left;">
                                    <p style="color: #000; font-weight: 300; font-size: 12px;">: Pasaje Malvas 135 - Breña</p>
                                </td>
                            </tr>
                            
                          </tbody>            
                    </table>
        
                </div>

            </div>
        </div>
         

    </div>

    <div class="footer">
        

    </div>
    

    

</body>

</html>