<!--
     Name: Connor Lord, Orion Dalton
     SID: 01409362, 01375709
     email: connor_lord@student.uml.edu, orion_dalton@student.uml.edu
-->

<?php
$dirname = "uploads/tab1/";
$images = glob($dirname."*.*");
$idCount = 1;
echo '<br><div class="row">';
foreach($images as $image) { //main page display
    $path = str_replace('/', '*', $image);
    $path = "'".$path;
    $path = $path. "'";
    echo '<div class="column">
            <a href="#a">
              <img id="img'.$idCount.'" src="'.$image.'" width="100" 
                height="100" onclick="changeCanvas('.$path.')" 
                class="hover-shadow"/>
            </a>
          </div>';

    $idCount++;
}
echo '</div>';
?>
