<?php

echo $f = 42292699074820 + (128 * 281474976710656);
//36071089718038788


?>
<br>
<input type="text" id="tagginro" size="40"><br>
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.3.min.js"></script>

<script src="BigInteger.min.js"></script>

<script>


var num1 = '36028797018963968',
    num2 = '42292699074820';

var val = (+num1) + (+num2);


var par = val;


   function toDec( x ){
      var val = 0;
      var res = 0;
      var go = 0;
      var fa = 1;
       // reverse var i = x.length - 1; i >= 0; i--
       for (var i = 0; i < x.length; i++) {  
          res = x[i] & 0xff;
	  go = bigInt(res).times(fa).plus(val);
          val += bigInt(res).times(fa);
          fa *= 256;

	 console.log(go);
       }

        return go;
   }


 var ms = [4,17,78,9,119,38,-128];
 document.getElementById('tagginro').value = toDec(ms);





</script>











