<!DOCTYPE>
<html>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte de Venta</title>
    <style>
        @charset "utf-8";
        /* CSS Document */
        body {
            margin: -20px; padding: 0;
            /*background-image: url(../img/fondo.png);
            background-repeat: repeat;*/
            padding-bottom: 1px;
            font-size: 30px;
            
        }
        body, td, th {
            font-family: Arial, Helvetica, sans-serif;
            font-size:30px;

        }
        a:link    { color: #0B55C4; text-decoration: none; }
        a:visited { color: #0B55C4; text-decoration: none; }
        a:hover   { text-decoration: underline; }
        
        .zona_impresion{
            margin-left:-10px;
            
        }
        .header_tr{
            margin-left:-10px;
            margin-right:-10px
            
        }
        .body_tr{
            fonst-size:26px;
        }


       
    </style>
    <body>
    <div class="zona_impresion">
        <!-- codigo imprimir -->
        <br>
        @foreach ($venta as $v)
        <table border="0" align="center" width="700px">
            <tr class="header_tr">
                <td align="center">
                <!-- Mostramos los datos de la empresa en el documento HTML -->
                .::<strong> Creaando Studio </strong>::.<br>
                RUT 12180364-0<br>
                Calle 10 # 2e - 79, Pitalito - Huila - 3108614608<br>
                </td>
            </tr>
            <tr>
                <td align="center">{{$v->created_at}} </td>
            </tr>
            <tr>
            <td align="center"></td>
            </tr>
            <tr>
                <!-- Mostramos los datos del cliente en el documento HTML -->
                <td align="left">Cliente: {{$v->nombre}}</td>
            </tr>
            <tr>
                <td align="left">{{$v->tipo_documento}}: {{$v->num_documento}}</td>
            </tr>
            <tr>
                <td align="left">Nº de venta: {{$v->serie_comprobante}}-{{$v->num_comprobante}}</td>
            </tr>    
        </table>
        @endforeach
        <br>
        <!-- Mostramos los detalles de la venta en el documento HTML -->
        <table border="0" align="center" width="300px" class="body_tr">
            <tr>
                <td>CANT.</td>
                <td>DESCRIPCIÓN</td>
                <td align="right">IMPORTE</td>
            </tr>
            <tr>
            <td colspan="3">==========================================</td>
            </tr>            
            <!--$cantidad=0;-->
            @foreach ($detalles as $det)
            <tr>
                <td>{{$det->cantidad}}</td>
                <td>{{$det->articulo}}</td>
                <td align="right">{{$det->cantidad*$det->precio-$det->descuento}}</td>
            </tr>
            @endforeach
            <!-- Mostramos los totales de la venta en el documento HTML -->
            @foreach ($venta as $v)
            <tr>
            <td>&nbsp;</td>
            <td align="right"><b>SUBTOTAL:</b></td>
            <td align="right"><b>$ {{$v->total-($v->total*$v->impuesto)}}</b></td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td align="right"><b>IMPUESTO:</b></td>
            <td align="right"><b>$ {{$v->total*$v->impuesto}}</b></td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td align="right"><b>TOTAL:</b></td>
            <td align="right"><b>$ {{$v->total}}</b></td>
            </tr>
            @endforeach
            <tr>
            <td colspan="3">&nbsp;</td>
            </tr>      
            <tr>
            <td colspan="3" align="center">¡Gracias por su compra!</td>
            </tr>
            <tr>
            <td colspan="3" align="center">Creaando Studio</td>
            </tr>
            <tr>
            <td colspan="3" align="center">Pitalito - Colombia</td>
            </tr>            
        </table>
        <br>
        </div>
    </body>
</html>