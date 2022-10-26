<?php 
function rupiah($price) {
   $format = number_format($price, 0, ".", ".");
   
   return "Rp ".$format;
}

function convertBytes($bytes) {
   if ($bytes > 0) {
      $i = floor(log($bytes) / log(1000));
      $sizes = array('MB', 'GB', 'TB');
      return sprintf('%.02F', round($bytes / pow(1000, $i),1)) * 1 . ' ' . @$sizes[$i];
  } else {
      return 0;
  }
}

function icon($cond) {
   if($cond == "y") {
      echo '<svg class="bi" width="24" height="24" style="color: green;" viewBox="0 0 16 16">
      <use xlink:href="#check"></use>
      </svg>';
   } else if ($cond == "n" || $cond == "0"){
      echo '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="bi bi-x" style="color: red;"
      viewBox="0 0 16 16">
      <path
         d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
      </svg>';
   } else {
      return $cond;
   }
}

function checkcPanel($cond) {
   if($cond == "y") {
      echo '<strong style="color: #22b910;">Include</strong>';
   } else {
      echo '<strong style="color: red;">Not include</strong>';
   } 
}

function ssl($cond) {
   if($cond == "y") {
      echo '<strong style="color: #22b910;">SSL Certificate</strong>';
   } else {
      echo '<strong style="color: red;">No SSL Certificate</strong>';
   }
}

function database($cond) {
   if($cond <= 3 ){
      echo '<strong style="color: #Dcd95a;">'.$cond.'</strong>';
   } else {
      echo '<strong style="color: #22b910;">'.$cond.'</strong>';
   }
}

function subdomain($cond) {
   
   if ($cond == 0){
      echo '<strong style="color: red;">No</strong>';
   }
   else {
      echo '<strong style="color: #22b910;">'.$cond.'</strong>';
   }
}
?>