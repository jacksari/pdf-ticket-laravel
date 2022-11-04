<!doctype html>
<html>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
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
            padding: .5rem;
            /* background: rgb(87, 126, 199); */
        }
        .header.logo{
            width: 100px !important;
            text-align: center;
            height: 100px !important;
        }
        .header .container-logo{
            /* background: red; */
            height: 60px;
            position: relative;
        }
        .header .container-logo .logo {
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
        }

        .image-logo{
            width: 100%;
            /* background: cadetblue; */
            object-fit: contain;
            /* margin: 1rem; */
            /* height: 80px; */
        }
        .header h4 {
            text-align: center;
            font-weight: 300;
        }
        .header .ruc {
            text-align: center;
            margin-bottom: .5rem;

        }
        .header .ruc p {
            font-size: 7px;
            font-weight: 300;
            height: 10px;
        }
        .header .ruc .boleta{
            font-weight: 500;
        }
        .header .banner {
            background: #000;
            width: 100%;  
            margin-top: .5rem;
        }
        .header .banner p {
            color: #fff;
            font-size: 9px;
            text-align: center;
            padding-bottom: 2px;
        }
        .header .direction{
            margin-top: .5rem;

        }
        .header .direction .text{
            font-size: 7px;
            /* background: red; */
        }

        .body{
            padding: .2rem .3rem;

        }
        .body .body .title{
            text-align: center;
        }
        .body .title h4{
            text-align: center;
            font-size: 7px;
            font-weight: 300;
        }
        .body .title h4 span{
            font-weight: 500;
        }
        .body .title .container-details {
            /* margin: .5rem 0; */
            /* background: red; */
            margin-top: -0.4rem;
            position: relative;
            height: 16px;
            
        }
        .body .title .container-details p{
            font-size: 8px;
        }

        .footer{
            padding: .5rem;
            text-align: center;
        
        }

        .footer .user{
            font-size: 7px;
            margin-bottom: .3rem;
            text-align: left;
        }
    
        .footer .description{
            border-top: .8px solid #000;
            border-bottom: .8px solid #000;
            padding: .2rem 0;
            text-align: center;
        }

        .footer .description p {
            font-size: 7px;
            /* background: red; */
        }

        .footer .nota{
            padding: .2rem 0;
            text-align: center;
            font-size: 7px;
        }
        .footer .nota p{
            font-weight: 300!important;
        }

        .footer .company{
            /* border-top: .8px solid #000;
            border-bottom: .8px solid #000;
            padding: .2rem 0; */
            text-align: center;
            margin-top: 6.8rem;
            padding: 0 1rem;
        }

        .footer .company p {
            font-size: 7px;
            line-height: 1.1;
            /* background: red; */
        }
        .footer .qr{
            width: 100%;
            height: auto;
            position: relative;
            /* background: red; */
        }
        .footer .qr .container-qr{
            width: 80px;
            height: 80px;
            text-align: center;
            position: absolute;
            left: 50%;
            top: 0%;
            transform: translateY(20%) translateX(-50%);
        }
        .footer .qr img{
            width: 100%;
            height: 100%;
            object-fit: contain;
        }
        .footer .cliente{
            border-top: .8px dashed #000;
            border-bottom: .8px dashed #000;
            padding: .05rem 0 .1rem 0;
            text-align: left;
            margin-top: 1rem;
        }
        .footer .cliente .user {
            font-size: 7px;
            /* background: red; */
            margin: 0;
        }

        .footer .barra{
            width: 100%;
            height: auto;
            position: relative;
            margin-top: .5rem;
            margin-bottom: .5rem;
            /* background: red; */
        }
        .footer .barra .container-barra{
            width: 100%;
            height: 50px;
            /* margin: 0 1rem; */
            text-align: center;
            /* position: absolute;
            left: 50%;
            top: 0%; */
            /* transform: translateY(20%) translateX(-50%); */
        }
        .footer .barra img{
            width: 100%;
            height: 100%;
            object-fit: contain;
        }
        .footer .date{
            position: relative

        }
        .footer .date p{
            font-size: 7px;
        }
        .footer .date .num{
            font-weight: 300;
            position: absolute;
            top: 0;
            left: 0;
        }
        .footer .date .tim{
            font-weight: 300;
            position: absolute;
            right: 0;
            top: 0;
        }
        .footer .nota {
            margin: 1rem 0;
        }
        .footer .nota p{
            font-size: 7px !important;
            text-align: center;
            /* background: red; */
        }
        .footer .direction {
            margin-top: 1rem;
        }
        .footer .direction p{
            font-size: 7px;
            text-align: center;
            /* background: red; */
        }
        .footer .cliente p{
            font-size: 7px;
            text-align: left;
        }

    </style>
</head>

<body>

    <div class="header">

        <div class="ruc">
            <p>PLAZA VEA - COMPAÑIA FOOD RETAIL S.A.C.</p>
            <P>RUC 20608300393 Morelli 181 P-2 Lima</P>
            <p>Lima - San Borja</p>
            <p class="boleta">BOLETA DE VENTA ELECTRONICA</p>
        </div>

        <div class="container-logo">
            <img 
            style="text-align: center; object-fit: contain; width: 80px; height: 60px;" 
            class="logo" 
            src="https://imgs.search.brave.com/6Sj7i8c9-xaerDNHB_j8jhU4FWVt6zOOwSbhGzuROns/rs:fit:1185:1175:1/g:ce/aHR0cHM6Ly9wbmdp/bWcuY29tL3VwbG9h/ZHMvd29yZHByZXNz/L3dvcmRwcmVzc19Q/TkcyOC5wbmc" alt="">

            {{-- <img src="https://imgs.search.brave.com/7AMkrxeKgk1b6CH-kkoCljxZMuKsfbM-x0QjIA3jaUM/rs:fit:370:106:1/g:ce/aHR0cHM6Ly9yZWFs/cGxhemEucGUvc3Rh/dGljL2ltZy9sb2dv/LXJlc3BvbnNpdmUu/cG5n" alt="" class="image-logo"> --}}
            <!-- <h4>www.realplaza.com</h4> -->
        </div>

       

        <div class="banner">
            <p>B001-000010</p>
        </div>

        {{-- <div class="direction">
            <p class="text">Avenida de la Libertad, 12 - 28001 - Madrid</p>
        </div>
 --}}
    </div>

    <div class="body">

        <div class="title">
            <div class="container-details">
                <!-- <p style="position: absolute; top: 1px; left: 0; width: 25%; height: 16px;">M.N. <span>SOLES</span></p> -->
                <p style="position: absolute; top: 1px; left: 1%; width: 45%; height: 16px">FECHA: <span>28/10/2022</span></p>
                <p style="position: absolute; top: 1px; right: 1%; width: 55%; height: 16px; text-align: right;">HORA: <span>09:59:40 PM</span></p>
            </div>
        </div>

        <div class="table">

            <table style="width: 100%; position:">

                <thead style="border-top: 1px solid #000; border-bottom: 1px solid #000 !important; margin-bottom: .5rem;">
                    <tr style="">
                        <th style="width: {{ 40 . '%' }}; text-align: left;">
                            <p style="color: #000; font-weight: 400; font-size: 8px;">CONCEPTO</p>
                        </th>
                        <th style="width: {{ 15 . '%' }}; text-align: center;">
                            <p style="color: #000; font-weight: 400; font-size: 8px;">CANTIDAD</p>
                        </th>
                        <th style="width: {{ 15 . '%' }}; text-align: center;">
                            <p style="color: #000; font-weight: 400; font-size: 8px;">NETO</p>
                        </th>
                        <th style="width: {{ 15 . '%' }}; text-align: center;">
                            <p style="color: #000; font-weight: 400; font-size: 8px;">IVA</p>
                        </th>
                        <th style="width: {{ 15 . '%' }}; text-align: center;">
                            <p style="color: #000; font-weight: 400; font-size: 8px;">PVP</p>
                        </th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                        <td style="width: {{ 40 . '%' }}; text-align: left;">
                            <p style="color: #000; font-weight: 300; font-size: 8px;"><span style="font-weight: 500;">Aceitunas</span> ACE002</p>
                        </td>
                        <td style="width: {{ 15 . '%' }}; text-align: center;">
                            <p style="color: #000; font-weight: 300; font-size: 8px;">1</p>
                        </td>
                        <td style="width: {{ 15 . '%' }}; text-align: center;">
                            <p style="color: #000; font-weight: 300; font-size: 8px;">1.65</p>
                        </td>
                        <td style="width: {{ 15 . '%' }}; text-align: center;">
                            <p style="color: #000; font-weight: 300; font-size: 8px;">21%</p>
                        </td>
                        <td style="width: {{ 15 . '%' }}; text-align: center;">
                            <p style="color: #000; font-weight: 300; font-size: 8px;">2.00</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: {{ 40 . '%' }}; text-align: left;">
                            <p style="color: #000; font-weight: 300; font-size: 8px;">
                                <span style="font-weight: 500;">Aceitunas</span> Botaca BOCA002
                            </p>
                        </td>
                        <td style="width: {{ 15 . '%' }}; text-align: center;">
                            <p style="color: #000; font-weight: 300; font-size: 8px;">1</p>
                        </td>
                        <td style="width: {{ 15 . '%' }}; text-align: center;">
                            <p style="color: #000; font-weight: 300; font-size: 8px;">1.65</p>
                        </td>
                        <td style="width: {{ 15 . '%' }}; text-align: center;">
                            <p style="color: #000; font-weight: 300; font-size: 8px;">21%</p>
                        </td>
                        <td style="width: {{ 15 . '%' }}; text-align: center;">
                            <p style="color: #000; font-weight: 300; font-size: 8px;">2.00</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: {{ 40 . '%' }}; text-align: left;">
                            <p style="color: #000; font-weight: 300; font-size: 8px;">
                                <span style="font-weight: 500;">Cerveza</span> Caña CERV001</p>
                        </td>
                        <td style="width: {{ 15 . '%' }}; text-align: center;">
                            <p style="color: #000; font-weight: 300; font-size: 8px;">1</p>
                        </td>
                        <td style="width: {{ 15 . '%' }}; text-align: center;">
                            <p style="color: #000; font-weight: 300; font-size: 8px;">1.65</p>
                        </td>
                        <td style="width: {{ 15 . '%' }}; text-align: center;">
                            <p style="color: #000; font-weight: 300; font-size: 8px;">21%</p>
                        </td>
                        <td style="width: {{ 15 . '%' }}; text-align: center;">
                            <p style="color: #000; font-weight: 300; font-size: 8px;">2.00</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: {{ 40 . '%' }}; text-align: left;">
                            <p style="color: #000; font-weight: 300; font-size: 8px;">
                                <span style="font-weight: 500;">Jamon</span> Bocata BOCA001</p>
                        </td>
                        <td style="width: {{ 15 . '%' }}; text-align: center;">
                            <p style="color: #000; font-weight: 300; font-size: 8px;">2</p>
                        </td>
                        <td style="width: {{ 15 . '%' }}; text-align: center;">
                            <p style="color: #000; font-weight: 300; font-size: 8px;">5.79</p>
                        </td>
                        <td style="width: {{ 15 . '%' }}; text-align: center;">
                            <p style="color: #000; font-weight: 300; font-size: 8px;">21%</p>
                        </td>
                        <td style="width: {{ 15 . '%' }}; text-align: center;">
                            <p style="color: #000; font-weight: 300; font-size: 8px;">7.00</p>
                        </td>
                    </tr>
                  </tbody>


                  <tfoot style="border-top: 1px solid #000;">
                    <tr>
                        <td colspan="3" style="width: {{ 15 . '%' }}; text-align: right;">
                            <p style="color: #000; font-weight: 300; font-size: 8px;">Base:</p>
                        </td>
                    
                        <td colspan="2" style="width: {{ 15 . '%' }}; text-align: right;">
                            <p style="color: #000; font-weight: 300; font-size: 8px;">14.88.S/</p>
                        </td>
                    </tr>
                    <tr>
                          <td colspan="3" style="width: {{ 15 . '%' }}; text-align: right;">
                              <p style="color: #000; font-weight: 300; font-size: 8px;">IVA:</p>
                          </td>
                      
                          <td colspan="2" style="width: {{ 15 . '%' }}; text-align: right;">
                              <p style="color: #000; font-weight: 300; font-size: 8px;">3.12.S/</p>
                          </td>
                      </tr>
                      <tr>
                          <td colspan="3" style="width: {{ 15 . '%' }}; text-align: right;">
                              <p style="color: #000; font-weight: 500; font-size: 8px;">Total PVP:</p>
                          </td>
                      
                          <td colspan="2" style="width: {{ 15 . '%' }}; text-align: right;">
                              <p style="color: #000; font-weight: 500; font-size: 8px;">18.00.S/</p>
                          </td>
                      </tr>
                      <tr>
                          <td colspan="3" style="width: {{ 15 . '%' }}; text-align: right;">
                              <p style="color: #000; font-weight: 300; font-size: 8px;">Entregado efectivo:</p>
                          </td>
                      
                          <td colspan="2" style="width: {{ 15 . '%' }}; text-align: right;">
                              <p style="color: #000; font-weight: 300; font-size: 8px;">20.00.S/</p>
                          </td>
                      </tr>
                      <tr>
                          <td colspan="3" style="width: {{ 15 . '%' }}; text-align: right;">
                              <p style="color: #000; font-weight: 300; font-size: 8px;">Cambio:</p>
                          </td>
                      
                          <td colspan="2" style="width: {{ 15 . '%' }}; text-align: right;">
                              <p style="color: #000; font-weight: 300; font-size: 8px;">2.00.S/</p>
                          </td>
                      </tr>
                  </tfoot>
                

                
            </table>

        </div>

    </div>

    <div class="footer">
        <p class="user">SON: NOVECIENTOS CON 00/100 SOLES</p>
        <div class="description">
            <p>GRACIAS POR SU PREFERENCIA!</p>
            <P>Recuerde visitar www.gesio.com</P>
        </div>

        <div class="qr">
            <div class="container-qr">
                <img src="https://imgs.search.brave.com/8VhVCCJzMY6CTsTTIHVPqDdXDWvLxiKFUKH_GnspQu0/rs:fit:890:890:1/g:ce/aHR0cDovLzQuYnAu/YmxvZ3Nwb3QuY29t/Ly1HejlOSkN5bFg3/VS9VaU1YejFJOUFl/SS9BQUFBQUFBQVBx/NC9uUlZ3VkptX2FX/OC9zMTYwMC9DJUMz/JUIzZGlnbytRUi5w/bmc" alt="">
            </div>
        </div>

        <div class="company">
            <p>Representación impresa de boleta electronica revisarla en www.plazavea.com.</p>
        </div>

        <div class="cliente">
            <p class="user">VENDEDOR: Usuario 1</p>
            <p class="code-cajero">Cod. Cajero: 029</p>
            <p class="nombre-cajero">Nombre Cajero: David Leonidas MEL</p>
        </div>

        <div class="direction">
            <p>PLAZA VEA ALFONSO UGARTE (1038734)</p>
            <p>AV ALFONSO UGARTE SN - LIMA</p>

        </div>

        <div class="cliente">
            <p class="user">CLIENTE: Jack Sari</p>
            <p class="dni">DNI: 70225508</p>
            <p class="pago">Tipo de pago: Efectivo</p>
        </div>

        <!-- <div class="barra">
            <div class="container-barra">
                <img src="https://imgs.search.brave.com/MgaustQTJYyS2-sw94y4vcmKqJqjJyJ1PoPeUiy3T0U/rs:fit:820:369:1/g:ce/aHR0cHM6Ly93d3cu/bmljZXBuZy5jb20v/cG5nL2RldGFpbC8x/MzUtMTM1MDgwOF9j/b2RpZ28tZGUtYmFy/cmFzLXBuZy5wbmc" alt="">    
            </div>
        </div> -->

       
        {{-- <br> --}}
        <div class="nota">
            <p>NO SE ACEPTAN CAMBIOS DESPUES DE 07 DIAS DE EFECTUADA LA
            COMPRA, NO APLICA PARA PRODUCTOS EN OFERTA O PROMOCION. EL
            PRODUCTO DEBE ESTAR EN EMPAQUE ORIGINAL Y NO DEBE MOSTRAR EVIDENCIAS DE USO.</p>
        </div>


        <div class="date">
            <p class="num">0580 0118/010/023</p>
            <p class="tim">30.10.22</p>
        </div>


    </div>
    

    

</body>

</html>