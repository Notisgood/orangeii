<!DOCTYPE html> 
<html lang="en">
    <head>
        <title></title>
        {{error_reporting(0)}}
        <style>
            body{
                font-family:"thaisarabun" , "microsoft sans serif","Garuda";
                font-size :16px;
            }
            table{
                font-size :16px;
            }
            div{
                font-size :16px;
            }
            @page {
                footer: page-footer;
                margin-top: 26px;
                margin-left: 35px;
                margin-right: 35px;
                margin-bottom: 34px;
            }
            .bgimg {
                background-image: url({{asset('assets/images/Footer.png')}});
                background-size: contain;
                
            }
            /* Container holding the image and the text */
            .container {
              position: relative;
              width:100%;    
            }
            .bottom-left {
              position: absolute;
              bottom: 0px;
              left: 80px;
              text-align: left;
              width:50%;
              float:left;     
            }
            .bottom-right {
              position: absolute;
              bottom: 40px;
              right: 80px;
              text-align: right;
              float:right;
              width:50%;    
            }
        </style>
    </head>
    
    <body>
          
           
    
        <table style="width:100%;border-collapse: collapse;border-spacing: 0 1em;">
          @for($i=1; $i<=$qty; $i++)
           <tr>
               <td height="100"><?php echo '<img src="data:image/png;base64,' . \Milon\Barcode\DNS1D::getBarcodePNG($productlog->lot_barcode, 'C128',3,100,array(1,1,1)) . '" alt="barcode" width="90%" download />' ?>
               <text align="center">BARCODE: {{$productlog->product_barcode}}</text>
               <text align="center">LOT: {{$productlog->product_log_detail}}</text>
                              <br>
                <text align="center">DETAIL: {{$productlog->product_detail}}</text>
                               <br>
               <text align="center">AMOUNT: {{$productlog->product_log_amount}}</text> 
               <text align="center"> {{$productlog->product_code}}</text> 
                <text align="center">BY: {{$productlog->product_log_by}}</text>
               </td>
               
               <td style="width:10%">&nbsp;</td>
               
                 
               <td height="100"><?php echo '<img src="data:image/png;base64,' . \Milon\Barcode\DNS1D::getBarcodePNG($productlog->lot_barcode, 'C128',3,100,array(1,1,1)) . '" alt="barcode" width="90%" download />' ?>
               <text align="center">BARCODE: {{$productlog->product_barcode}}</text>
               <text align="center">LOT: {{$productlog->product_log_detail}}</text>
                              <br>
                <text align="center">DETAIL: {{$productlog->product_detail}}</text>
                               <br>
               <text align="center">AMOUNT: {{$productlog->product_log_amount}}</text> 
               <text align="center"> {{$productlog->product_code}}</text> 
                <text align="center">BY: {{$productlog->product_log_by}}</text>
               </td>
             </tr>
             <tr >
                 <td colspan="3" height="100">&nbsp;</td>
              </tr> 
            


           @endfor
            <!----footer----->
            <htmlpagefooter name="page-footer">  
                
            </htmlpagefooter>
            <!----footer----->
        </table>
    </body>
</html>




