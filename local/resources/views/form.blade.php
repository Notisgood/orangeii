

<table>
    <tr>
        <td>{!!str_replace('<?xml version="1.0" standalone="no"?>','',DNS1D::getBarcodeSVG($data['baco'], "C128"))!!}</td>
        <td>&nbsp;</td>
        <td>{!!str_replace('<?xml version="1.0" standalone="no"?>','',DNS1D::getBarcodeSVG($data['baco'], "C128"))!!}</td>
    </tr>
    <tr>&nbsp;&nbsp;</tr>
    <tr>
        <td>{!!str_replace('<?xml version="1.0" standalone="no"?>','',DNS1D::getBarcodeSVG($data['baco'], "C128"))!!}</td>
        <td>&nbsp;</td>
        <td>{!!str_replace('<?xml version="1.0" standalone="no"?>','',DNS1D::getBarcodeSVG($data['baco'], "C128"))!!}</td>
    </tr>
</table><br><br>








<?php 
    if($data){
        for($x=0;$x<$data['sticknum'];$x++){
            echo str_replace('<?xml version="1.0" standalone="no"?>','',DNS1D::getBarcodeSVG($data['baco'], "C128"));
          
        }
    }
 
 ?>
 {{-- <div style="page-break-before: always"></div> --}}

