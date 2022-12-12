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

        .body .table-items{


        }

        td {
            padding: 5px;
            border-top: 0px;
            border-right: 0px;
            /* border-bottom: 1px solid black; */
            border-left: 0px;
        }

        .footer {
            padding: 2.5rem;

        }
        .footer .qr{
            height: 80px;
            width: 80px;
        }

        .footer .text{
            color: #000; font-weight: 300; font-size: 8px;
        }

        body{
            position: relative
        }

        .footer{
            position: absolute;
            bottom: 0%;
            left: 0%;
            width: 94%;
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


        <div class="table-items mt-2">
            <div class="information-table">

                <div class="table">

                    <table style="width: 100%; " border="1" cellspacing="0">

                        <thead style="background: #F05323;">
                            <tr >
                                <th  style="width: {{ 15 . '%' }}; text-align: center; padding: 0.1rem .1rem; background: #F05323; border: 1px solid #F05323; border-bottom: 1px solid #000 !important;">
                                    <p style="color: #fff; font-weight: 300; font-size: 10px; line-height: 0.8;">Código de producto</p>
                                    <p style="color: #fff; font-weight: 300; font-size: 10px; line-height: 0.8;">SUNAT</p>
                                </th>
                                <th style="width: {{ 8 . '%' }}; text-align: center; padding: 0.1rem .1rem; background: #F05323; border: 1px solid #F05323; border-bottom: 1px solid #000 !important;">
                                    <p style="color: #fff; font-weight: 300; font-size: 10px; line-height: 0.8;">Unidad de
                                        medida </p>
                                </th>
                                <th style="width: {{ 8 . '%' }}; text-align: center; padding: 0.1rem .1rem; background: #F05323; border: 1px solid #F05323; border-bottom: 1px solid #000 !important;">
                                    <p style="color: #fff; font-weight: 300; font-size: 10px; line-height: 0.8;">Cantidad</p>
                                </th>
                                <th style="width: {{ 40 . '%' }}; text-align: center; padding: 0.1rem .1rem; background: #F05323; border: 1px solid #F05323; border-bottom: 1px solid #000 !important;">
                                    <p style="color: #fff; font-weight: 300; font-size: 10px; line-height: 0.8;">Descripción</p>
                                </th>
                                <th style="width: {{ 15 . '%' }}; text-align: center; padding: 0.1rem .1rem; background: #F05323; border: 1px solid #F05323; border-bottom: 1px solid #000 !important;">
                                    <p style="color: #fff; font-weight: 300; font-size: 10px; line-height: 0.8;">Valor Unitario</p>
                                </th>

                                <th style="width: {{ 15 . '%' }}; text-align: center; padding: 0.1rem .1rem; background: #F05323; border: 1px solid #F05323; border-bottom: 1px solid #000 !important;">
                                    <p style="color: #fff; font-weight: 300; font-size: 10px; line-height: 0.8;">Precio de Venta</p>
                                </th>
                            </tr>
                        </thead>

                          <tbody style="height: 100%;">

                            <tr style="">
                                <td style="width: {{ 15 . '%' }}; text-align: center; padding: 0.3rem .1rem; border-left: 1px solid #000; border-bottom: 1px solid #000; border-top: 1px solid #000;">
                                    <p style="color: #000; font-weight: 300; font-size: 10px; line-height: 0.8;">957678</p>
                                </td>
                                <td style="width: {{ 8 . '%' }}; text-align: center; padding: 0.3rem .1rem; border-left: 1px solid #000; border-bottom: 1px solid #000; border-top: 1px solid #000;">
                                    <p style="color: #000; font-weight: 300; font-size: 10px; line-height: 0.8;">: ZZ</p>
                                </td>
                                <td style="width: {{ 8 . '%' }}; text-align: center; padding: 0.3rem .1rem; border-left: 1px solid #000; border-bottom: 1px solid #000; border-top: 1px solid #000;">
                                    <p style="color: #000; font-weight: 300; font-size: 10px; line-height: 0.8;">: 1.00</p>
                                </td>

                                <td style="width: {{ 40 . '%' }}; text-align: center; padding: 0.3rem .1rem; border-left: 1px solid #000; border-bottom: 1px solid #000; border-top: 1px solid #000;">
                                    <p style="color: #000; font-weight: 300; font-size: 10px; line-height: 0.8;">: Concepto de pago</p>
                                </td>

                                <td style="width: {{ 15 . '%' }}; text-align: center; padding: 0.3rem .1rem; border-left: 1px solid #000; border-bottom: 1px solid #000; border-top: 1px solid #000;">
                                    <p style="color: #000; font-weight: 300; font-size: 10px; line-height: 0.8;">: 2.64</p>
                                </td>

                                <td style="width: {{ 15 . '%' }}; text-align: center; padding: 0.3rem .1rem; border-left: 1px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-top: 1px solid #000;">
                                    <p style="color: #000; font-weight: 300; font-size: 10px; line-height: 0.8;">: 2.64</p>
                                </td>
                            </tr>

                            <tr style="">
                                <td style="width: {{ 15 . '%' }}; text-align: center; padding: 0.3rem .1rem; border-left: 1px solid #000; border-bottom: 1px solid #000; border-top: 1px solid #000;">
                                    <p style="color: #000; font-weight: 300; font-size: 10px; line-height: 0.8;">957678</p>
                                </td>
                                <td style="width: {{ 8 . '%' }}; text-align: center; padding: 0.3rem .1rem; border-left: 1px solid #000; border-bottom: 1px solid #000; border-top: 1px solid #000;">
                                    <p style="color: #000; font-weight: 300; font-size: 10px; line-height: 0.8;">: ZZ</p>
                                </td>
                                <td style="width: {{ 8 . '%' }}; text-align: center; padding: 0.3rem .1rem; border-left: 1px solid #000; border-bottom: 1px solid #000; border-top: 1px solid #000;">
                                    <p style="color: #000; font-weight: 300; font-size: 10px; line-height: 0.8;">: 1.00</p>
                                </td>

                                <td style="width: {{ 40 . '%' }}; text-align: center; padding: 0.3rem .1rem; border-left: 1px solid #000; border-bottom: 1px solid #000; border-top: 1px solid #000;">
                                    <p style="color: #000; font-weight: 300; font-size: 10px; line-height: 0.8;">: Concepto de pago</p>
                                </td>

                                <td style="width: {{ 15 . '%' }}; text-align: center; padding: 0.3rem .1rem; border-left: 1px solid #000; border-bottom: 1px solid #000; border-top: 1px solid #000;">
                                    <p style="color: #000; font-weight: 300; font-size: 10px; line-height: 0.8;">: 2.64</p>
                                </td>

                                <td style="width: {{ 15 . '%' }}; text-align: center; padding: 0.3rem .1rem; border-left: 1px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-top: 1px solid #000;">
                                    <p style="color: #000; font-weight: 300; font-size: 10px; line-height: 0.8;">: 2.64</p>
                                </td>
                            </tr>

                            <tr style="">
                                <td style="width: {{ 15 . '%' }}; text-align: center; padding: 0.3rem .1rem; border-left: 1px solid #000; border-bottom: 1px solid #000; border-top: 1px solid #000;">
                                    <p style="color: #000; font-weight: 300; font-size: 10px; line-height: 0.8;">957678</p>
                                </td>
                                <td style="width: {{ 8 . '%' }}; text-align: center; padding: 0.3rem .1rem; border-left: 1px solid #000; border-bottom: 1px solid #000; border-top: 1px solid #000;">
                                    <p style="color: #000; font-weight: 300; font-size: 10px; line-height: 0.8;">: ZZ</p>
                                </td>
                                <td style="width: {{ 8 . '%' }}; text-align: center; padding: 0.3rem .1rem; border-left: 1px solid #000; border-bottom: 1px solid #000; border-top: 1px solid #000;">
                                    <p style="color: #000; font-weight: 300; font-size: 10px; line-height: 0.8;">: 1.00</p>
                                </td>

                                <td style="width: {{ 40 . '%' }}; text-align: center; padding: 0.3rem .1rem; border-left: 1px solid #000; border-bottom: 1px solid #000; border-top: 1px solid #000;">
                                    <p style="color: #000; font-weight: 300; font-size: 10px; line-height: 0.8;">: Concepto de pago</p>
                                </td>

                                <td style="width: {{ 15 . '%' }}; text-align: center; padding: 0.3rem .1rem; border-left: 1px solid #000; border-bottom: 1px solid #000; border-top: 1px solid #000;">
                                    <p style="color: #000; font-weight: 300; font-size: 10px; line-height: 0.8;">: 2.64</p>
                                </td>

                                <td style="width: {{ 15 . '%' }}; text-align: center; padding: 0.3rem .1rem; border-left: 1px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-top: 1px solid #000;">
                                    <p style="color: #000; font-weight: 300; font-size: 10px; line-height: 0.8;">: 2.64</p>
                                </td>
                            </tr>

                            
                          </tbody>            
                    </table>
        
                </div>

            </div>

            <div class="information-table mt-1" style="position: relative;">
                <div class="table-footer" style="width: 45%; position: absolute; top: 0%; right: 0%;">

                    <table style="width: 100%; border: 1px solid #000; " border="1" cellspacing="0">
                          <tbody>
                            <tr>
                                <td style="width: {{ 60 . '%' }}; text-align: left;">
                                    <p style="color: #000; font-weight: 300; font-size: 10px; line-height: .8;">Descuentos</p>
                                </td>
                                <td style="width: {{ 40 . '%' }}; text-align: right;">
                                    <p style="color: #000; font-weight: 300; font-size: 10px; line-height: .8;">S/. 0.00</p>
                                </td>
                            </tr>

                            <tr>
                                <td style="width: {{ 60 . '%' }}; text-align: left; border-top: 1px solid #fff;">
                                    <p style="color: #000; font-weight: 300; font-size: 10px; line-height: .8;">Valor de Venta Operaciones Gravadas</p>
                                </td>
                                <td style="width: {{ 40 . '%' }}; text-align: right; border-top: 1px solid #fff;">
                                    <p style="color: #000; font-weight: 300; font-size: 10px; line-height: .8;">S/. 1.00</p>
                                </td>
                            </tr>

                            <tr>
                                <td style="width: {{ 60 . '%' }}; text-align: left; border-top: 1px solid #fff;">
                                    <p style="color: #000; font-weight: 300; font-size: 10px; line-height: .8;">Valor de Venta Operaciones Gravadas</p>
                                </td>
                                <td style="width: {{ 40 . '%' }}; text-align: right;border-top: 1px solid #fff;">
                                    <p style="color: #000; font-weight: 300; font-size: 10px; line-height: .8;">S/. 2.00</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: {{ 60 . '%' }}; text-align: left; border-top: 1px solid #000;">
                                    <p style="color: #000; font-weight: 300; font-size: 10px; line-height: .8;">Importe total</p>
                                </td>
                                <td style="width: {{ 40 . '%' }}; text-align: right; border-top: 1px solid #000;">
                                    <p style="color: #000; font-weight: 300; font-size: 10px; line-height: .8;">S/. 3.00</p>
                                </td>
                            </tr>
                          </tbody>            
                    </table>

                    <p style="color: #000; font-weight: 300; font-size: 11px; font-weight: bolder; margin-top: .3rem;">Son: DOS Y 64/100 SOLES</p>
        
                </div>

            </div>

        </div>
         

    </div>

    <div class="footer">
        <div class="container" >
            <img class="qr" src="https://imgs.search.brave.com/MJf34Y4_nh0_jRpu8K2MgWmVPUTlLlE1bBSSF62aKzQ/rs:fit:768:768:1/g:ce/aHR0cHM6Ly9tdXNp/Y2xpbmd1YXRlYWNo/ZXJzLmNvbS93cC1j/b250ZW50L3VwbG9h/ZHMvMjAxNi8wOS9x/cmNvZGUtNzY4eDc2/OC5wbmc" alt="">
            <p class="text">Representación impresa de la Boleta de Venta Electrónica</p>
            <p class="text">Autorizado mediante resolucion Nro. 0340050010017/SUNAT. Para consultar el comprobante ingresar a https://escondatagate.page.link/CPJz9. Representacion impresa del Comprobante Electronico.</p>
        </div>
    </div>
    

    

</body>

</html>