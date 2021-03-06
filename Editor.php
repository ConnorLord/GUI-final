<!-- 
Connor Lord, Orion Dalton
Date: 12/13/2017
Description: a php file that writes to our tab4 file to build the image editor including 
sliders, filter buttons, a reset button, and a save to machine button for that particular image.
-->

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/camanjs/4.1.2/caman.full.min.js"></script>
<script type="text/javascript" src="js/Editor.js"></script>
<link rel="stylesheet" href="css/Editor.css">
<h2 id="editor">Image Editor</h2>
<div class="col-lg-6">
  <canvas id="canvas"></canvas>
</div>
<div class="col-lg-6">
  <div class="col-lg-6">
    <label for="hue">Hue</label>
    <input id="hue" name="hue" type="range" min="0" max="300" value="0">
    <label for="contrast">Contrast</label>
    <input id="contrast" name="contrast" type="range" min="-20" max="20" value="0">
  </div>
  <div class="col-lg-6">
    <label for="vibrance">Vibrance</label>
    <input id="vibrance" name="vibrance" type="range" min="0" max="400" value="0">
    <label for="sepia">Sepia</label>
    <input id="sepia" name="sepia" type="range" min="0" max="100" value="0">
  </div>
  <nav class="filters">
    <button id="brightnessbtn" class="btn btn-primary">Brightness</button>
    <button id="noisebtn" class="btn btn-primary">Noise</button>
    <button id="sepiabtn" class="btn btn-primary">Sepia</button>
    <button id="contrastbtn" class="btn btn-primary">Contrast</button>
    <button id="colorbtn" class="btn btn-primary">Colorize</button>
  </nav>

  <nav class="filters">
    <button id="vintagebtn" class="btn btn-primary">Vintage</button>
    <button id="lomobtn" class="btn btn-primary">Lomo</button>
    <button id="embossbtn" class="btn btn-primary">Emboss</button>
    <button id="tiltshiftbtn" class="btn btn-primary">Tilt Shift</button>
    <button id="radialblurbtn" class="btn btn-primary">Radial Blur</button>
    <button id="edgeenhancebtn" class="btn btn-primary">Edge Enhance</button>
  </nav>

  <nav class="filters">
    <button id="posterizebtn" class="btn btn-primary">Posterize</button>
    <button id="claritybtn" class="btn btn-primary">Clarity</button>
    <button id="orangepeelbtn" class="btn btn-primary">Orange Peel</button>
    <button id="sincitybtn" class="btn btn-primary">Sin City</button>
    <button id="sunrisebtn" class="btn btn-primary">Sun Rise</button>
    <button id="crossprocessbtn" class="btn btn-primary">Cross Process</button>
  </nav>

  <nav class="filters">
    <button id="hazydaysbtn" class="btn btn-primary">Hazy</button>
    <button id="lovebtn" class="btn btn-primary">Love</button>
    <button id="grungybtn" class="btn btn-primary">Grungy</button>
    <button id="jarquesbtn" class="btn btn-primary">Jarques</button>
    <button id="pinholebtn" class="btn btn-primary">Pin Hole</button>
    <button id="oldbootbtn" class="btn btn-primary">Old Boot</button>
    <button id="glowingsunbtn" class="btn btn-primary">Glow Sun</button>
  </nav>

  <nav class="filters">
    <button id="hdrbtn" class="btn btn-warning">HDR Effect</button>
    <button id="oldpaperbtn" class="btn btn-warning">Old Paper</button>
    <button id="pleasantbtn" class="btn btn-warning">Pleasant</button>
  </nav>

    
  <nav class="filters">
    <button id="resetbtn" class="btn btn-success">Reset Photo</button>
    <button id="savebtn" class="btn btn-success">Save Image</button>
    
  </nav>
</div>


