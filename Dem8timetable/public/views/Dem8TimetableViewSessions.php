<div calss="tables">
 <!-- Day 1  -->
	<div class="day-table " style="margin-top: 20px;">
		<h3>20th July</h3>
		<div class="table table1"> 
			<div class="row ">
				<div class="col-sm-2 d-flex align-items-center justify-content-center border">
					09:00 - 17:00
				</div>
				<div class="col-sm-10 d-flex align-items-center justify-content-center border">
					DPM student training course
				</div>
			</div>
		</div>
	</div>
    
    <!-- Day 2 -->
    <div class="day-table " style="margin-top: 20px;">
		<h3>21st July</h3>
		<div class="table table1"> 
			<div class="row ">
				<div class="col-sm-2 d-flex align-items-center justify-content-center border">
					09:00 - 17:00 
				</div>
				<div class="col-sm-10 d-flex align-items-center justify-content-center border">
					DPM student training course
				</div>
			</div>
			<div class="row ">
				<div class="col-sm-2 d-flex align-items-center justify-content-center border">
					14:00 - 20:00 
				</div>
				<div class="col-sm-10 d-flex align-items-center justify-content-center border">
					Registration
				</div>
			</div>
			<div class="row ">
				<div class="col-sm-2 d-flex align-items-center justify-content-center border">
					18:00 - 20:00
				</div>
				<div class="col-sm-10 d-flex align-items-center justify-content-center border">
					Welcome Reception
				</div>
			</div>
		</div>
	</div>
    <!-- Day 3  -->
	<div class="day-table " style="margin-top: 20px;">
		<h3>22nd July</h3>
		<div class="table table1"> 
			<div class="row ">
				<div class="col-sm-2 d-flex align-items-center justify-content-center border">
					08:00 - 09:00
				</div>
				<div class="col-sm-10 d-flex align-items-center justify-content-center border">
					Registration
				</div>
			</div>
			<div class="row ">
				<div class="col-sm-2 d-flex align-items-center justify-content-center border">
					09:00 - 09:20
				</div>
				<div class="col-sm-10 d-flex align-items-center justify-content-center border">
					Opening speech
				</div>
			</div>
			<div class="row ">
				<div class="col-sm-2 d-flex align-items-center justify-content-center border">
					09:20 - 10:05
				</div>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="09:20 - 10:05" && $session["room_uuid"]==5 && $session["date"]=="22nd") {?>
				<div class="col-sm-10 d-flex align-items-center justify-content-center border"style="background-color: #FFF721"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
                     <!-- Plenary : Thorsten Pöschel -->
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
			</div>
			<div class="row ">
				<div class="col-sm-2 d-flex align-items-center justify-content-center border">
					10:10 - 10:50
				</div>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="10:10 - 10:50" && $session["room_uuid"]==1 && $session["date"]=="22nd") {?>
				<div class="col-sm d-flex align-items-center justify-content-center border" style="background-color: #F4AC45"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<!-- MS-02: From particles to continuum theory and applications - Chair: TBA(1) -->
					<?php   echo $session['session_name'];?>
				</div>
				<?php }endforeach ?>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="10:10 - 10:50" && $session["room_uuid"]==2 && $session["date"]=="22nd") {?>
				<div class="col-sm d-flex align-items-center justify-content-center border" style="background-color: #FDE0C7"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
				<!-- 	MS-09: Achieving innovation in geomechanics application using DEM - Chair: Catherine O'Sullivan(1) -->
				<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>


				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="10:10 - 10:50" && $session["room_uuid"]==3 && $session["date"]=="22nd") {?>
				<div class="col-sm d-flex align-items-center justify-content-center border"style="background-color: #F40000"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<!-- MS-14: Particle breakage and crushable granular materials - Chair: TBA(1) -->
				<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="10:10 - 10:50" && $session["room_uuid"]==4 && $session["date"]=="22nd") {?>
				<div class="col-sm d-flex align-items-center justify-content-center border"style="background-color: #FFE66D"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<!-- MS-12: Calibration of DEM and CFD-DEM simulations in theory and practice - Chair : TBA(1) -->
				<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
			</div>
			<div class="row ">
				<div class="col-sm-2 d-flex align-items-center justify-content-center border">
					10:50 - 11:10
				</div>
				<div class="col-sm-10 d-flex align-items-center justify-content-center border">
					Break 
				</div>
			</div>
			<div class="row ">
				<div class="col-sm-2 d-flex align-items-center justify-content-center border">
					11:10 - 12:50
				</div>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="11:10 - 12:50" && $session["room_uuid"]==1 && $session["date"]=="22nd") {?>
				<div class="col-sm d-flex align-items-center justify-content-center border" style="background-color: #F4AC45" data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
				<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="11:10 - 12:50" && $session["room_uuid"]==2 && $session["date"]=="22nd") {?>
				<div class="col-sm d-flex align-items-center justify-content-center border" style="background-color: #FDE0C7"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
				<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="11:10 - 12:50" && $session["room_uuid"]==3 && $session["date"]=="22nd") {?>
				<div class="col-sm d-flex align-items-center justify-content-center border"style="background-color: #F40000"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
				<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="11:10 - 12:50" && $session["room_uuid"]==4 && $session["date"]=="22nd") {?>
				<div class="col-sm d-flex align-items-center justify-content-center border"style="background-color: #FFE66D"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
				<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
			</div>
			<div class="row ">
				<div class="col-sm-2 d-flex align-items-center justify-content-center border">
					12:50 - 13:50
				</div>
				<div class="col-sm-10 d-flex align-items-center justify-content-center border">
					Lunch 
				</div>
			</div>
			<div class="row ">
				<div class="col-sm-2 d-flex align-items-center justify-content-center border">
					13:50 - 14:35
				</div>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="13:50 - 14:35" && $session["room_uuid"]==5 && $session["date"]=="22nd") {?>
				<div class="col-sm-10 d-flex align-items-center justify-content-center border"style="background-color: #FFF721"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
				<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
			</div>
			<div class="row ">
				<div class="col-sm-2 d-flex align-items-center justify-content-center border">
					14:40 - 16:00
				</div>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="14:40 - 16:00" && $session["room_uuid"]==1 && $session["date"]=="22nd") {?>				
				<div class="col-sm d-flex align-items-center justify-content-center border"style="background-color: #7DE19A"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="14:40 - 16:00" && $session["room_uuid"]==2 && $session["date"]=="22nd") {?>				
				<div class="col-sm d-flex align-items-center justify-content-center border" style="background-color: #FDE0C7"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="14:40 - 15:40" && $session["room_uuid"]==3 && $session["date"]=="22nd") {?>				
				<div class="col-sm d-flex align-items-center justify-content-center border"style="background-color: #FFE66D"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="14:40 - 16:00" && $session["room_uuid"]==4 && $session["date"]=="22nd") {?>				
				<div class="col-sm d-flex align-items-center justify-content-center border"style="background-color: #8AF3FF"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
			</div>
			<div class="row ">
				<div class="col-sm-2 d-flex align-items-center justify-content-center border">
					16:00 - 16:20
				</div>
				<div class="col-sm-10 d-flex align-items-center justify-content-center border">
					Break 
				</div>
			</div>
			<div class="row ">
				<div class="col-sm-2 d-flex align-items-center justify-content-center border">
					16:20 - 18:40
				</div>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="16:20 - 18:40" && $session["room_uuid"]==1 && $session["date"]=="22nd") {?>				
				<div class="col-sm d-flex align-items-center justify-content-center border"style="background-color: #7DE19A"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="16:20 - 18:40" && $session["room_uuid"]==2 && $session["date"]=="22nd") {?>				
				<div class="col-sm d-flex align-items-center justify-content-center border" style="background-color: #FDE0C7"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="16:20 - 18:40" && $session["room_uuid"]==3 && $session["date"]=="22nd") {?>				
				<div class="col-sm d-flex align-items-center justify-content-center border"style="background-color: #F40000"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="16:20 - 18:40" && $session["room_uuid"]==4 && $session["date"]=="22nd") {?>				
				<div class="col-sm d-flex align-items-center justify-content-center border"style="background-color: #8AF3FF"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
			</div>
		</div>
	</div>
	 <!-- Day 4  -->
	<div class="day-table " style="margin-top: 20px;">
		<h3>23rd July</h3>
		<div class="table table1"> 
			<div class="row ">
				<div class="col-sm-2 d-flex align-items-center justify-content-center border">
					09:00 - 9:45
				</div>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="09:00 - 09:45" && $session["room_uuid"]==5 && $session["date"]=="23rd") {?>
				<div class="col-sm-10 d-flex align-items-center justify-content-center border"style="background-color: #FFF721" data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
			</div>
			<div class="row ">
				<div class="col-sm-2 d-flex align-items-center justify-content-center border">
					09:50 - 10:30
				</div>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="09:50 - 10:30" && $session["room_uuid"]==1 && $session["date"]=="23rd") {?>				
				<div class="col-sm d-flex align-items-center justify-content-center border" style="background-color: #F4AC45"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="09:50 - 10:30" && $session["room_uuid"]==2 && $session["date"]=="23rd") {?>				
				<div class="col-sm d-flex align-items-center justify-content-center border" style="background-color: #0FA3B1"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php  echo $session['session_name'];?>
				</div>
			    <?php } endforeach ?>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="09:50 - 10:30" && $session["room_uuid"]==3 && $session["date"]=="23rd") {?>	
				<div class="col-sm d-flex align-items-center justify-content-center border"style="background-color: #9C528B"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php  echo $session['session_name'];?>
				</div>
			    <?php } endforeach ?>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="09:50 - 10:30" && $session["room_uuid"]==4 && $session["date"]=="23rd") {?>				
				<div class="col-sm d-flex align-items-center justify-content-center border"style="background-color: #E8EBE4"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
				<?php  echo $session['session_name'];?>
				</div>
			    <?php } endforeach ?>
			</div>
			<div class="row ">
				<div class="col-sm-2 d-flex align-items-center justify-content-center border">
					10:30 - 10:50
				</div>
				<div class="col-sm-10 d-flex align-items-center justify-content-center border">
					Break 
				</div>
			</div>
			<div class="row ">
				<div class="col-sm-2 d-flex align-items-center justify-content-center border">
					10:50 - 12:50
				</div>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="10:50 - 12:50" && $session["room_uuid"]==1 && $session["date"]=="23rd") {?>				
				<div class="col-sm d-flex align-items-center justify-content-center border" style="background-color: #F4AC45"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="10:50 - 12:50" && $session["room_uuid"]==2 && $session["date"]=="23rd") {?>	
				<div class="col-sm d-flex align-items-center justify-content-center border" style="background-color: #0FA3B1"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="10:50 - 12:50" && $session["room_uuid"]==3 && $session["date"]=="23rd") {?>	
				<div class="col-sm d-flex align-items-center justify-content-center border"style="background-color: #9C528B"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
				<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="10:50 - 12:50" && $session["room_uuid"]==4 && $session["date"]=="23rd") {?>	
				<div class="col-sm d-flex align-items-center justify-content-center border"style="background-color: #7EBDC2"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
			</div>
			<div class="row ">
				<div class="col-sm-2 d-flex align-items-center justify-content-center border">
					12:50 - 13:50
				</div>
				<div class="col-sm-10 d-flex align-items-center justify-content-center border">
					Lunch 
				</div>
			</div>
			<div class="row ">
				<div class="col-sm-2 d-flex align-items-center justify-content-center border">
					13:50 - 14:35
				</div>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="13:50 - 14:35" && $session["room_uuid"]==5 && $session["date"]=="23rd") {?>				
				<div class="col-sm-10 d-flex align-items-center justify-content-center border"style="background-color: #FFF721"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
			</div>
			<div class="row ">
				<div class="col-sm-2 d-flex align-items-center justify-content-center border">
					14:40 - 15:00
				</div>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="14:40 - 15:00" && $session["room_uuid"]==1 && $session["date"]=="23rd") {?>	
				<div class="col-sm d-flex align-items-center justify-content-center border"style="background-color: #7DE19A"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="14:40 - 15:00" && $session["room_uuid"]==2 && $session["date"]=="23rd") {?>	
				<div class="col-sm d-flex align-items-center justify-content-center border" style="background-color: #0FA3B1"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="14:40 - 15:00" && $session["room_uuid"]==3 && $session["date"]=="23rd") {?>	
				<div class="col-sm d-flex align-items-center justify-content-center border"style="background-color: #3344FF"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="14:40 - 15:00" && $session["room_uuid"]==4 && $session["date"]=="23rd") {?>	
				<div class="col-sm d-flex align-items-center justify-content-center border"style="background-color: #7EBDC2"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
			</div>
			<div class="row ">
				<div class="col-sm-2 d-flex align-items-center justify-content-center border">
					16:00 - 16:20
				</div>
				<div class="col-sm-10 d-flex align-items-center justify-content-center border">
					Break 
				</div>
			</div>
			<div class="row ">
				<div class="col-sm-2 d-flex align-items-center justify-content-center border">
					16:20 - 18:40
				</div>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="16:20 - 18:40" && $session["room_uuid"]==1 && $session["date"]=="23rd") {?>	
				<div class="col-sm d-flex align-items-center justify-content-center border"style="background-color: #7DE19A"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="16:20 - 18:40" && $session["room_uuid"]==2 && $session["date"]=="23rd") {?>	
				<div class="col-sm d-flex align-items-center justify-content-center border" style="background-color: #0FA3B1"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="16:20 - 18:40" && $session["room_uuid"]==3 && $session["date"]=="23rd") {?>	
				<div class="col-sm d-flex align-items-center justify-content-center border"style="background-color: #3344FF"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="16:20 - 18:40" && $session["room_uuid"]==4 && $session["date"]=="23rd") {?>	
				<div class="col-sm d-flex align-items-center justify-content-center border"style="background-color: #921CEB"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
			</div>
		</div>
	</div>

	<!-- Day 5  -->
	<div class="day-table " style="margin-top: 20px;">
		<h3>24th July</h3>
		<div class="table table1"> 
			<div class="row ">
				<div class="col-sm-2 d-flex align-items-center justify-content-center border">
					09:00 - 09:45
				</div>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="09:00 - 09:45" && $session["room_uuid"]==5 && $session["date"]=="24th") {?>				
				<div class="col-sm-10 d-flex align-items-center justify-content-center border"style="background-color: #FFF721" data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
			</div>
			<div class="row ">
				<div class="col-sm-2 d-flex align-items-center justify-content-center border">
					09:50 - 10:50
				</div>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="09:50 - 10:50" && $session["room_uuid"]==1 && $session["date"]=="24th") {?>	
				<div class="col-sm d-flex align-items-center justify-content-center border" style="background-color: #3344FF"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="09:50 - 10:50" && $session["room_uuid"]==2 && $session["date"]=="24th") {?>	
				<div class="col-sm d-flex align-items-center justify-content-center border" style="background-color: #E89790"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="09:50 - 10:50" && $session["room_uuid"]==3 && $session["date"]=="24th") {?>	
				<div class="col-sm d-flex align-items-center justify-content-center border"style="background-color: #00B398"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="09:50 - 10:50" && $session["room_uuid"]==4 && $session["date"]=="24th") {?>	
				<div class="col-sm d-flex align-items-center justify-content-center border"style="background-color: #E8EBE4"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
			</div>
			<div class="row ">
				<div class="col-sm-2 d-flex align-items-center justify-content-center border">
					10:50 - 11:10
				</div>
				<div class="col-sm-10 d-flex align-items-center justify-content-center border">
					Break 
				</div>
			</div>
			<div class="row ">
				<div class="col-sm-2 d-flex align-items-center justify-content-center border">
					10:10 - 13:10
				</div>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="10:10 - 13:10" && $session["room_uuid"]==1 && $session["date"]=="24th") {?>	
				<div class="col-sm d-flex align-items-center justify-content-center border" style="background-color: #7DE19A"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="10:10 - 13:10" && $session["room_uuid"]==2 && $session["date"]=="24th") {?>	
				<div class="col-sm d-flex align-items-center justify-content-center border" style="background-color: #E89790"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="10:10 - 13:10" && $session["room_uuid"]==3 && $session["date"]=="24th") {?>	
				<div class="col-sm d-flex align-items-center justify-content-center border"style="background-color: #00B398"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="10:10 - 13:10" && $session["room_uuid"]==4 && $session["date"]=="24th") {?>	
				<div class="col-sm d-flex align-items-center justify-content-center border"style="background-color: #E8EBE4"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
			</div>
			<div class="row ">
				<div class="col-sm-2 d-flex align-items-center justify-content-center border">
					13:10 - 14:10
				</div>
				<div class="col-sm-10 d-flex align-items-center justify-content-center border">
					Lunch 
				</div>
			</div>
			<div class="row ">
				<div class="col-sm-2 d-flex align-items-center justify-content-center border">
					14:50 - 14:55
				</div>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="14:50 - 14:55" && $session["room_uuid"]==5 && $session["date"]=="24th") {?>				
				<div class="col-sm-10 d-flex align-items-center justify-content-center border"style="background-color: #FFF721"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
			</div>
			<div class="row ">
				<div class="col-sm-2 d-flex align-items-center justify-content-center border">
					15:00 - 16:00
				</div>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="15:00 - 16:00" && $session["room_uuid"]==1 && $session["date"]=="24th") {?>	
				<div class="col-sm d-flex align-items-center justify-content-center border"style="background-color: #93A1A4"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="15:00 - 16:00" && $session["room_uuid"]==2 && $session["date"]=="24th") {?>	
				<div class="col-sm d-flex align-items-center justify-content-center border" style="background-color: #93A1A4"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
			</div>
		</div>
	</div>

	<!-- Day 6  -->
	<div class="day-table " style="margin-top: 20px;">
		<h3>25th July</h3>
		<div class="table table1"> 
			<div class="row ">
				<div class="col-sm-2 d-flex align-items-center justify-content-center border">
					09:00 - 09:45
				</div>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="09:00 - 09:45" && $session["room_uuid"]==5 && $session["date"]=="25th") {?>				
				<div class="col-sm-10 d-flex align-items-center justify-content-center border"style="background-color: #FFF721" data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
			</div>
			<div class="row ">
				<div class="col-sm-2 d-flex align-items-center justify-content-center border">
					09:50 - 11:10
				</div>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="09:50 - 11:10" && $session["room_uuid"]==1 && $session["date"]=="25th") {?>	
				<div class="col-sm d-flex align-items-center justify-content-center border" style="background-color: #E8EBE4"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="09:50 - 11:10" && $session["room_uuid"]==2 && $session["date"]=="25th") {?>	
				<div class="col-sm d-flex align-items-center justify-content-center border" style="background-color: #0FA3B1"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="09:50 - 11:10" && $session["room_uuid"]==3 && $session["date"]=="25th") {?>	
				<div class="col-sm d-flex align-items-center justify-content-center border"style="background-color: #00B398"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="09:50 - 11:10" && $session["room_uuid"]==4 && $session["date"]=="25th") {?>	
				<div class="col-sm d-flex align-items-center justify-content-center border"style="background-color: #E8EBE4"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
			</div>
			<div class="row ">
				<div class="col-sm-2 d-flex align-items-center justify-content-center border">
					11:10 - 11:30
				</div>
				<div class="col-sm-10 d-flex align-items-center justify-content-center border">
					Break 
				</div>
			</div>
			<div class="row ">
				<div class="col-sm-2 d-flex align-items-center justify-content-center border">
					11:30 - 12:30
				</div>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="11:30 - 12:30" && $session["room_uuid"]==1 && $session["date"]=="25th") {?>	
				<div class="col-sm d-flex align-items-center justify-content-center border" style="background-color: #9C528B"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="11:30 - 12:30" && $session["room_uuid"]==2 && $session["date"]=="25th") {?>	
				<div class="col-sm d-flex align-items-center justify-content-center border" style="background-color: #0FA3B1"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="11:30 - 12:30" && $session["room_uuid"]==3 && $session["date"]=="25th") {?>	
				<div class="col-sm d-flex align-items-center justify-content-center border"style="background-color: #00B398"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="11:30 - 12:30" && $session["room_uuid"]==4 && $session["date"]=="25th") {?>	
				<div class="col-sm d-flex align-items-center justify-content-center border"style="background-color: #FF1486"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
			</div>
			<div class="row ">
				<div class="col-sm-2 d-flex align-items-center justify-content-center border">
					12:30 - 13:30
				</div>
				<div class="col-sm-10 d-flex align-items-center justify-content-center border">
					Lunch 
				</div>
			</div>
			<div class="row ">
				<div class="col-sm-2 d-flex align-items-center justify-content-center border">
					13:30 - 14:15
				</div>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="13:30 - 14:15" && $session["room_uuid"]==5 && $session["date"]=="25th") {?>				
				<div class="col-sm-10 d-flex align-items-center justify-content-center border"style="background-color: #FFF721"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
			</div>
			<div class="row ">
				<div class="col-sm-2 d-flex align-items-center justify-content-center border">
					14:20 - 15:40
				</div>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="14:20 - 15:40" && $session["room_uuid"]==1 && $session["date"]=="25th") {?>	
				<div class="col-sm d-flex align-items-center justify-content-center border"style="background-color: #9C528B"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="14:20 - 15:40" && $session["room_uuid"]==2 && $session["date"]=="25th") {?>	
				<div class="col-sm d-flex align-items-center justify-content-center border" style="background-color: #0FA3B1"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
				<div class="col-sm border">
					<div class="row " style="height: 100%;">
						<?php foreach ($sessions as $session): ?> 
			    		<?php
						if ($session["theme_abbreviation"]=="GC-0601") {?>	
						<div class="col-md-12  d-flex align-items-center justify-content-center border"style="background-color: #E8EBE4;height: 50%;"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
							<?php   echo $session['session_name'];?>
						</div>
						<?php } endforeach ?>
							<!-- Force next columns to break to new line at md breakpoint and up :Visible only on sm -->
						<div class="w-100 d-none d-md-block d-md-none"></div>
						<?php foreach ($sessions as $session): ?> 
		  			  	<?php
						if ($session["theme_abbreviation"]=="GC-0602") {?>	
						<div class="col-md-12  d-block justify-content-center justify-content-center border"style="background-color: #E8EBE4;height: 50%;"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
							<?php   echo $session['session_name'];?>
						</div>
			            <?php } endforeach ?>
					</div>
				</div>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="14:20 - 15:40" && $session["room_uuid"]==4 && $session["date"]=="25th") {?>	
				<div class="col-sm d-flex align-items-center justify-content-center border"style="background-color: #FF1486"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
			</div>
			<div class="row ">
				<div class="col-sm-2 d-flex align-items-center justify-content-center border">
					15:40 - 16:00
				</div>
				<div class="col-sm-10 d-flex align-items-center justify-content-center border">
					Break 
				</div>
			</div>
			<div class="row ">
				<div class="col-sm-2 d-flex align-items-center justify-content-center border">
					16:00 - 17:40
				</div>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="16:00 - 17:40" && $session["room_uuid"]==1 && $session["date"]=="25th") {?>	
				<div class="col-sm d-flex align-items-center justify-content-center border"style="background-color: #9C528B"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="16:00 - 17:40" && $session["room_uuid"]==2 && $session["date"]=="25th") {?>	
				<div class="col-sm d-flex align-items-center justify-content-center border" style="background-color: #0FA3B1"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="16:00 - 17:40" && $session["room_uuid"]==3 && $session["date"]=="25th") {?>	
				<div class="col-sm d-flex align-items-center justify-content-center border"style="background-color: #3344FF"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="16:00 - 17:40" && $session["room_uuid"]==4 && $session["date"]=="25th") {?>	
				<div class="col-sm d-flex align-items-center justify-content-center border"style="background-color: #FF1486"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
			</div>
			<div class="row ">
				<div class="col-sm-2 d-flex align-items-center justify-content-center border">
					18:30, 18:50, 19:10
				</div>
				<div class="col-sm d-flex align-items-center justify-content-center border"style="background-color: #FCFDFC">
					20 min Stadium tour
				</div>
			</div>
			<div class="row ">
				<div class="col-sm-2 d-flex align-items-center justify-content-center border">
					19:00
				</div>
				<div class="col-sm d-flex align-items-center justify-content-center border"style="background-color: #FCFDFC">
					Reception
				</div>
			</div>
			<div class="row ">
				<div class="col-sm-2 d-flex align-items-center justify-content-center border">
					19:30 - 23:00
				</div>
				<div class="col-sm d-flex align-items-center justify-content-center border"style="background-color: #FCFDFC">
					Dinner
				</div>
			</div>
		</div>
	</div>

	<!-- Day 7  -->
	<div class="day-table " style="margin-top: 20px;">
		<h3>26th July</h3>
		<div class="table table1"> 
			<div class="row ">
				<div class="col-sm-2 d-flex align-items-center justify-content-center border">
					09:10 - 10:50
				</div>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="09:10 - 10:50" && $session["room_uuid"]==1 && $session["date"]=="26th") {?>	
				<div class="col-sm d-flex align-items-center justify-content-center border" style="background-color: #E8EBE4"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="09:10 - 10:50" && $session["room_uuid"]==2 && $session["date"]=="26th") {?>	
				<div class="col-sm d-flex align-items-center justify-content-center border" style="background-color: #E8EBE4"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="09:10 - 10:50" && $session["room_uuid"]==3 && $session["date"]=="26th") {?>	
				<div class="col-sm d-flex align-items-center justify-content-center border"style="background-color: #E8EBE4"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="09:10 - 10:50" && $session["room_uuid"]==4 && $session["date"]=="26th") {?>	
				<div class="col-sm d-flex align-items-center justify-content-center border"style="background-color: #E8EBE4"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
			</div>
			<div class="row ">
				<div class="col-sm-2 d-flex align-items-center justify-content-center border">
					10:50 - 11:10
				</div>
				<div class="col-sm-10 d-flex align-items-center justify-content-center border">
					Break 
				</div>
			</div>
			<div class="row ">
				<div class="col-sm-2 d-flex align-items-center justify-content-center border">
					11:10 - 12:20
				</div>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="11:10 - 12:20" && $session["room_uuid"]==1 && $session["date"]=="26th") {?>	
				<div class="col-sm d-flex align-items-center justify-content-center border" style="background-color: #E8EBE4"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="11:10 - 12:20" && $session["room_uuid"]==2 && $session["date"]=="26th") {?>	
				<div class="col-sm d-flex align-items-center justify-content-center border" style="background-color: #E8EBE4"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="11:10 - 12:20" && $session["room_uuid"]==3 && $session["date"]=="26th") {?>	
				<div class="col-sm d-flex align-items-center justify-content-center border"style="background-color: #E8EBE4"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="11:10 - 12:20" && $session["room_uuid"]==4 && $session["date"]=="26th") {?>	
				<div class="col-sm d-flex align-items-center justify-content-center border"style="background-color: #E8EBE4"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
			</div>
			<div class="row ">
				<div class="col-sm-2 d-flex align-items-center justify-content-center border">
					12:25 - 13:00
				</div>
				<?php foreach ($sessions as $session): ?> 
			    <?php
				if ($session["time"]=="12:25 - 13:00" && $session["room_uuid"]==5 && $session["date"]=="26th") {?>				
				<div class="col-sm-10 d-flex align-items-center justify-content-center border"style="background-color: #FFF721"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
					<?php echo $session['session_name'];?>
				</div>
				<?php } endforeach ?>
			</div>
			<div class="row ">
				<div class="col-sm-2 d-flex align-items-center justify-content-center border">
					13:00 - 14:00
				</div>
				<div class="col-sm-10 d-flex align-items-center justify-content-center border">
					Lunch 
				</div>
			</div>
			<div class="row ">
				<div class="col-sm-2 d-flex align-items-center justify-content-center border">
					14:00
				</div>
				<div class="col-sm d-flex align-items-center justify-content-center border"style="background-color: #FCFDFC">
					Conference closes
				</div>
			</div>
		</div>
	</div>

</div>

<?php foreach ($sessions as $session): ?> 
<!-- Modal -->
<div class="modal fade" id="<?php  echo $session['session_uuid'];?>" tabindex="-1" role="dialog" aria-labelledby="<?php  echo $session['session_uuid'];?>Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="<?php  echo $session['session_uuid'];?>Title">
        <!-- MS-02: From particles to continuum theory and applications - Chair: TBA</h5> -->
        <?php  echo $session['session_name'];?>
        <button  class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<ul class="list-group list-group-flush">
      		<!-- column 1 --> 
      		<?php foreach ($talks as $talk): ?> 
		  	<?php if ($session["session_uuid"]==$talk["session_uuid"]){ ?>
      		<li class="list-group-item">
      			<!-- Put content at center with : d-flex align-items-center -->
      			<div class="row d-flex align-items-center">
      				<div class="col-sm-3">
      					<span class="time"> <?php echo $talk['talk_time'];?> </span>
      				</div>
      				<div class="col-sm-4">
      					<span class="time"> <?php echo $talk['talk_name'];?>  </span>
      				</div>
      				<div class="col-sm-5">
      					<!--Put content at center with : d-flex align-items-center justify-content-center-->
      					<?php foreach ($people as $person): ?> 
			    		<?php if ($person["person_uuid"]==$talk["presenter_uuid"]) {?>	
      					<div class="row d-flex align-items-center justify-content-center">
      						<div class="col-sm-6">
      							<span class="time"><?php echo $person['person_name'];?></span> 
      						</div>
      						<div class="col-sm-6">
      							<span class="time"><?php echo $person['person_organization'];?></span>
      						</div>
      					</div>
      					<?php } ?>
						<?php endforeach ?>
      				</div>
      			</div>
      		</li>
		    <?php } endforeach ?>
      	</ul>
      </div>	
      <div class="modal-footer">
        <button  class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php endforeach ?>