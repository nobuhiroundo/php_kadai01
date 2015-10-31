

<?php

for($i=2;$i<=1000;$i++)
{
  $k = 0;
  for($j=2;$j<$i;$j++)
  {
    if ($i%$j == 0)
    {
      // echo "$i ÷ $j";
      $k=1;
    }
  }

      if($k == 0)
      {
        echo "      ".$i.":";
      }
    }

?>