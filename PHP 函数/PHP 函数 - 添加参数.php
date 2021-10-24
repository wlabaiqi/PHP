<?php
function writeName($fname)
{
    echo $fname . " Refsnes.<br>";
}
 
echo "My name is ";
writeName("Kai Jim");
echo "My sister's name is ";
writeName("Hege");
echo "My brother's name is ";
writeName("Stale");

function writeName2($fname,$punctuation)
{
    echo $fname . " Refsnes" . $punctuation . "<br>";
}
 
echo "My name is ";
writeName2("Kai Jim",".");
echo "My sister's name is ";
writeName2("Hege","!");
echo "My brother's name is ";
writeName2("Ståle","?");
?>
?>