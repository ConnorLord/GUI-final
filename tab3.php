<!--
     Name: Connor Lord, Orion Dalton
     SID: 01409362, 01375709
     email: connor_lord@student.uml.edu, orion_dalton@student.uml.edu
-->

<?php
$dirname = "uploads/tab1/";
$images = glob($dirname."*.*");
$idCount = 1;
echo '<div class="row">';
foreach($images as $image) { //main page display
    echo '<div class="column">
            <img id="img'.$idCount.'" src="'.$image.'" width="100" 
              height="100" onclick="DelPhoto('.$image.')" 
              class="hover-shadow"/>
          </div>';

    $idCount++;
}
echo '</div>';
?>
























