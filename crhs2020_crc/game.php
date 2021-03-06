<?php
$title = "About the game - CRHS Robotics 2020";
$sidebar = TRUE;
$links = ["Flip 2020", "Playing field", "Game pieces", "Scoring points"];
require 'layouts/header.php';
 ?>
<a name="Flip 2020"></a>
 <div id="row" class="row justify-content-center">
 	<div class="col-lg-8 col-md-10 col-sm-12 col-12">
    <h2>Flip 2020</h2>
    <hr class="outer-divider">
    <p>
      This year's games in the National CRC Robotics League will demonstrate all co-ed athletic institutions the
      opportunity to show off their athletes and tactics.
      <br>
      There will be two teams, yellow and blue, with two robots. The players from each team will switch during heats.
    </p>
  </div>
  <div class="col-lg-4 col-md-2 col-sm-12 col-12">
    <a href="/2020/file/Flip2020_FullRulebook_EN.pdf" target="_blank"><img src="assets/loading.gif" data-src="assets/flip_logo.jpg" class="img-fluid lazy"></a>
  </div>
</div>
<a name="Playing field"></a>
<div id="row" class="row justify-content-center">
 <div class="col-lg-11 col-md-11 col-sm-12 col-12">
   <h3>Playing field</h3>
   <hr class="inner-divider">
   <p>
     This year’s playing field is a single-level rectangle with two starting points for each team.
     The playing field includes two arches and two mushroom actuators, located equally on opposite sides of the field.
   </p>
 </div>
</div>
<div id="row" class="row justify-content-center">
 <div class="col-lg-8 col-md-10 col-sm-12 col-12">
   <img class="img-fluid lazy" src="assets/loading.gif" data-src="assets/playing_field.png">
 </div>
</div>
<a name="Game pieces"></a>
<div id="row" class="row justify-content-center">
 <div class="col-lg-11 col-md-11 col-sm-12 col-12">
   <h3>Game pieces</h3>
   <hr class="inner-divider">
   <p>
     The game piece, this year, is a beanbag. There are two types of game pieces, red and black. The red GPs are dropped
     into play at a certain rate during the heat. Black GPs are dropped into play every time there is a power-up
     activation. Robots can’t touch GPs and there are no limits on the number of GPs on the playing field during the
     heats. GPs are on a conveyer belt moving in the direction of a bin in each conveyer period. The conveyer belt
     switches direction when there is a trigger of an actuater or the hinged board.
   </p>
 </div>
</div>
<div id="row" class="row justify-content-center">
 <div class="col-lg-8 col-md-10 col-sm-12 col-12">
   <img class="img-fluid lazy" src="assets/loading.gif" data-src="assets/conveyor.png">
 </div>
</div>
<a name="Scoring points"></a>
<div id="lastrow" class="row justify-content-center">
 <div class="col-lg-11 col-md-11 col-sm-12 col-12">
   <h3>Scoring points</h3>
   <hr class="inner-divider">
   <p>
     GPs are placed in the playing field by a dispenser. Red GPs are brought onto the middle of the conveyer at a
     specific rate, 4 seconds. Power-up activations only happens when a robot triggers their hinged board, resulting in
     changing the direction of the conveyer belt towards your bin. A team scores a point everytime a GP falls into their
     bin.
     <br>
     <br>
     Red GPs are 20 points and black GPs are 200points each. Robots are required to trigger at least one actuator
     each heat. There are 5 different actuators:
     <ul>
       <li>The Chained Ball temporarily increases the rate of the GPs. <a href="assets/arch.png" class="link" target="_blank">See here. <i class="fas fa-external-link-alt"></i></a></li>
       <li>The Mushroom temporarily increases the speed of the conveyer belt. There are two, so if you trigger the one farthest from your
       robot it will cause a larger increase. <a href="assets/arch.png" class="link" target="_blank">See here. <i class="fas fa-external-link-alt"></i></a></li>
       <li>The twister stops the conveyer belt from moving or shortens the amount of
       time the GPs move. <a href="assets/arch.png" class="link" target="_blank">See here. <i class="fas fa-external-link-alt"></i></a></li>
       <li>The hinged board can be triggered by a team only once to switch the direction of the conveyer
       belt. <a href="assets/arch.png" class="link" target="_blank">See here. <i class="fas fa-external-link-alt"></i></a></li>
       <li>There will be arches and a metal ball will be attached to it, to recieve a power up you have to bring the
       ball to one side. To get another power up you have to bring the ball to the other side. <a href="assets/arch.png" class="link" target="_blank">See here. <i class="fas fa-external-link-alt"></i></a></li>
     </ul>
     Each actuator will be connected to a light, which lights up green, when you are able to use that actuator.
     <br>
     <br>
     <em>All pictures on this page from screenshots of
       <a href="https://www.youtube.com/watch?v=DIdrr1apLfY" class="link" target="_blank">CRC Robotics' Flip 2020 YouTube video <i class="fas fa-external-link-alt"></i></a>.</em>
   </p>
 </div>
</div>
<?php
require 'layouts/footer.php';
?>
