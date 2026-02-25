<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FACTURA INICE</title>
  <script src="https://kit.fontawesome.com/ee0bd02b3d.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  
  body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }
  
  .invoice-container {
    width: 100%;
    max-width: 600px;
    margin: 0 auto;
    background: #ffffff;
    padding: 20px;
  }
  
  .header {
    font-family: 'Poppins', sans-serif;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  .header h1 {
    color: #fff;
    padding: 10px;
    font-size: 13px;
  }
  .header p {
    color: #2f3132;
    font-size: 12px;
    font-weight: 700;
  }
  .blue{
    color: #2f3132;
    font-size: 12px;
    font-weight: 700;
  }
  .invoice-number {
    text-align: right;
  }
  
  .invoice-number span {
    display: block;
  }
  .imginice{
    width: 100px;
    height: 40px;
    align-items: center;
    text-align: center;
    padding-left: 40px;
  }
  .factura{
    color: #565656;
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
  }
  .num-factura{
    color: #565656 !important;
    font-family: 'Poppins', sans-serif !important;
    font-weight: 600 !important;
    font-size: 12px !important;
  }
  .user{
    font-size: 17px;
  }
  .pais{
    font-family: 'Poppins', sans-serif;
    font-size: 16px;
    font-weight: 700;
  }
  .ciudad{
    font-size: 13px;
  }
  h2 {
    font-size: 18px;
    margin-top: 20px;
    text-align: center;
  }
  
  .billing-info {
    margin-top: 20px;
  }
  
  .billing-info p {
    line-height: 1.5;
  }
  .centered-text {
    text-align: left; 
    vertical-align: top;  
}

  .invoice-table {
    width: 100%;
    margin-top: 20px;
    border-collapse: collapse;
  }
  
  .invoice-table thead th {
    background: #ed0e64;
    color: #fff;
    padding: 10px;
    text-align: left;
  }
  
  .invoice-table tbody td {
    padding: 10px;
    border-bottom: 1px solid #ddd;
    text-align: left;
  }

  .wrapper {
    display: flex;
    justify-content: space-between;
    width: 100%;
    margin-left: 365px;
  }
  .subtotal3 {
      width: auto;
      padding-right: 20px; 
  }

  .totals3 {
      width: fit-content;
      font-family: Arial, sans-serif;
      font-weight: 700;
      border-collapse: collapse;
      padding: 10px;
    
  }

  .totals3 .label {
      text-align: left;
      padding-right: 20px;
  }

  .totals3 .price {
      text-align: right;
      min-width: 80px;
  }
  .subtotal2 {
    display: flex;
    justify-content: flex-end;  
    width: 100%;
    padding-right: 20px;  

  }

  .totals2 {
    background-color: #ed0e63cd;
    border: 1px solid #ddd;
    border-radius: 7px;  /* Bordes redondeados */
    width: 240px;
    font-family: Arial, sans-serif;
    font-weight: 700;
    border-collapse: separate;  /* Necesario para bordes redondeados */
    margin-left: 365px;
  }

  .totals2 td {
      padding: 5px 10px; 
      text-align: left;  
  }

  .totals2 .label {
      text-align: left;  
  }

  .totals2 .price {
      text-align: right;  
  }

  .totalsss{
    text-align: right !important;
  }
  .totals p {
    line-height: 1.5;
  }
  
  .totals span {
    float: right;
  }
  
  .terms {
    margin-top: 20px;
  }
  
  .terms p {
    font-size: 12px;
    line-height: 1.5;
  }
  
  .footer {
    margin-top: 20px;
    text-align: center;
    font-size: 12px;
    color: #666;
  }
  
  .footer span {
    display: block;
  }
  .lines{
    color: transparent;
  }
  .hora{
    font-size: 12px;
  }
  .ruc{
    padding-left: 40px;
  }
  </style>
</head>
<body>
  <div class="invoice-container">
    <div class="header">
      <h1> <img class="imginice" src="{{ public_path('img/logos/inice.png') }}" alt="inice"></h1>
      <p >Instituto de Innovación e Impulso  </p>
      <span class="blue">de la Ciencia Educativa</span>
      <p class="ruc">RUC: 20613597680</p>
      <div class="invoice-number">
        <span class="factura">FACTURA N°</span>
        <span class="num-factura"></span>{{ $invoice->numero_factura }}</span>
        <p class="hora">{{ $invoice->fecha_emision }}</p>
      </div>
    </div>
    <h2>FACTURA</h2>
    <div class="billing-info">
      <p><strong>Nombre/Razón Social</strong></p>
      <p class="user">{{ $invoice->usuario }}</p>
      <p><strong>DNI/RUC/CÓDIGO TRIBUTARIO</strong></p>
      <p class="user">{{ $invoice->dni }}</p>
      <p class="pais">País</p>
      <p class="ciudad">{{ $invoice->pais }}</p>
    </div>
    <table class="invoice-table">
      <thead>
        <tr>
          <th>Servicio</th>

          <th class="totalsss">Monto</th>
        </tr>
      </thead>
      <tbody>
    <tr>
        <td rowspan="5" class="centered-text">{{ $invoice->servicio }}</td>
        <td class="totalsss"><span>{{($invoice->moneda) }}</span>{{ number_format($subtotal, 2) }}</td>
    </tr>
    <tr>
        <td class="totalsss"></td>
    </tr>
    <tr>
        <td class="totalsss"></td>
    </tr>
    <tr>
        <td class="totalsss"></td>
    </tr>
    <tr>
        <td class="totalsss"></td>
    </tr>
</tbody>
</table>

    <div class="wrapper">
        <div class="subtotal3">
            <table class="totals3">
                <tr>
                    <td class="label">SUB TOTAL</td>
                    <td class="price">{{ $invoice->moneda }} {{ number_format($subtotal, 2) }}</td>
                </tr>
                <tr>
                    <td class="label">ITF (6.3%)</td>
                    <td class="price">{{ $invoice->moneda }} {{ number_format($itf_amount, 2) }}</td>
                </tr>
                <tr>
                    <td class="label">Impuesto (18%)</td>
                    <td class="price">{{ $invoice->moneda }} {{ number_format($igv_amount, 2) }}</td>
                </tr>
            </table>
        </div>
    </div>

    <div class="subtotal2">
        <table class="totals2">
            <tr>
                <td class="label">TOTAL</td>
                <td class="price">{{ $invoice->moneda }} {{ number_format($invoice->monto_total, 2) }}</td>
            </tr>
        </table>
    </div>


    <div class="terms">
      <p><strong>OBSERVACIONES:</strong></p>
      <p>{{ $invoice->observacion}}</p>
    </div>
    <div class="terms">
      <p>*Documento de control interno</p>
    </div>
    <div class="footer">
      <span> Correo: contacto@inice.edu.pe // Telf.: (+51) 957323789 // Página Web: inice.edu.pe // Puno, Perú</span>
    </div>
  </div>
  </div>
</body>
</html>
