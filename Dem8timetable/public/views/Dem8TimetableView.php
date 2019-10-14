<?php

/**
 * Provide public display of a planning
 *
 *
 * @link       http://www.stereonomy.com
 * @since      1.0.0
 *
 * @package    Dem8timetable
 * @subpackage Dem8timetable/public/views
 */

if (!defined('WPINC')){die;}

class Dem8TimetableView {
	
	//private $model;
	
	public function __construct($model) {
		
	}

	public static function dem8_display($themes, $sessions, $talks, $people, $sortSessionsByDate, $content) {
		global $wp_locale;
		
		echo $content;
		?>
		
		 <!-- container -->
    <div class="container">
      <!-- Row 1 buttons of title of schedule -->
      <div class="row">
        <div class="col">
         <h1>AGENDA</h1>
        </div>
      </div>
      <!-- Row 2 title of schedule  -->
      <div class="row">
        <div class="col">
          <h3>
            <small class="text-muted">Session schedule (Updating)</small>
          </h3>
        </div>
      </div>
      <!-- Row 3 content of schedule  -->
      <!--Tabs pills - Top : buttons of calendar start-->
      <form class="form-inline" action="" method="POST">
      <ul class="row nav nav-pills" id="pills-tab" role="tablist">
        <li class="col-sm-2 nav-item">
          <button type="button" class=" btn btn-outline-info btn-sm btn-block nav-link active" id="pills-all-sessions-tab" data-toggle="pill" href="#pills-all-sessions" role="tab" aria-controls="pills-all-sessions" aria-selected="true">All Sessions</button>
        </li>
        <li class="col-sm-2 nav-item">
            <button class="btn btn-outline-success btn-sm btn-block nav-link" id="pills-Search-tab" data-toggle="pill" href="#pills-Search" role="tab" aria-controls="pills-Search" aria-selected="true" type="submit">Search</button>
        </li>
        <div class='w-100 d-none d-md-block d-md-none '></div>
        <?php foreach ($themes as $theme): ?>
        <li class="col-sm-2 nav-item">
          <button type="button" class=" btn btn-outline-primary btn-sm btn-block nav-link " id="pills-<?php echo $theme['theme_abbreviation'] ?>-tab" data-toggle="pill" href="#pills-<?php echo $theme['theme_abbreviation'] ?>" role="tab" aria-controls="pills-<?php echo $theme['theme_abbreviation'] ?>"aria-selected="true"><?php echo $theme['theme_abbreviation'] ?></button>
        </li>
        <?php endforeach ?>
      </ul>
      </form>
      <!--Tabs pills - Top : buttons of calendar end-->

      <!-- Row 4 content of schedule  -->
      
      <!--Tabs pills - Bottom: buttons of calendar start-->
      <div class="tab-content" id="pills-tabContent">
        <!--Pill - All Sessions: contents of all-->
        <div class="tab-pane fade" 
             id="pills-Search" 
             role="tabpanel" 
             aria-labelledby="pills-Search-tab">

            <div class="form-group">
              <label for="keyword_talk">Search by talk name</label>
              <input type="text" class="form-control" id="keyword_talk" aria-describedby="emailHelp" placeholder="Enter Talk name">
              <small id="keywordHelp" class="form-text text-muted">It will show all talks if submit with no keyword.</small>
            </div>
            <button id="submit_talk" type="submit" class="btn btn-primary">Submit</button>

            <div class="form-group" style="margin-top:20px">
              <label for="keyword_author">Search by author name</label>
              <input type="text" class="form-control" id="keyword_author" aria-describedby="emailHelp" placeholder="Enter Author name">
              <small id="keywordHelp" class="form-text text-muted">It will show all talks if submit with no keyword.</small>
            </div>
            <button id="submit_author" type="submit" class="btn btn-primary">Submit</button>
          <!-- </form> -->
          <div id="searchResult" style="margin-top:20px;margin-left:15px; padding:0px;"></div>

        </div>
        <div class="tab-pane fade show active" 
             id="pills-all-sessions" 
             role="tabpanel" 
             aria-labelledby="pills-all-sessions-tab">
          <!--  -->
			<div calss="tables">
			 <!-- Day 1  -->
				<div class="day-table " style="margin-top: 20px;">
					<h3>20th July (Saturday)</h3>
					<div class="table table1"> 
						<div class="row ">
							<div class="col-sm-2 d-flex align-items-center justify-content-center border">
								09:00 - 17:00
							</div>
							<div class="col-sm-10 d-flex align-items-center justify-content-center border">
								DPM student training course (Horst OH-211)
							</div>
						</div>
					</div>
				</div>
			    
			    <!-- Day 2 -->
			    <div class="day-table " style="margin-top: 20px;">
					<h3>21st July (Sunday)</h3>
					<div class="table table1"> 
						<div class="row ">
							<div class="col-sm-2 d-flex align-items-center justify-content-center border">
								09:00 - 17:00 
							</div>
							<div class="col-sm-10 d-flex align-items-center justify-content-center border">
								DPM student training course (Horst OH-211)
							</div>
						</div>
						<div class="row ">
							<div class="col-sm-2 d-flex align-items-center justify-content-center border">
								14:00 - 20:00 
							</div>
							<div class="col-sm-10 d-flex align-items-center justify-content-center border">
								Registration (UPark Hotel)
							</div>
						</div>
						<div class="row ">
							<div class="col-sm-2 d-flex align-items-center justify-content-center border">
								18:00 - 20:00
							</div>
							<div class="col-sm-10 d-flex align-items-center justify-content-center border">
								Welcome Reception (UPark Hotel)
							</div>
						</div>
					</div>
				</div>
			    <!-- Day 3  -->
				<div class="day-table " style="margin-top: 20px;">
					<h3>22nd July (Monday)</h3>
					<div class="table table1"> 
						<div class="row ">
							<div class="col-sm-2 d-flex align-items-center justify-content-center border">
								Time\Room
							</div>
							<div class="col-sm d-flex align-items-center justify-content-center border" data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
								WA 1
							</div>
							<div class="col-sm d-flex align-items-center justify-content-center border"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
								WA 2
							</div>
							<div class="col-sm d-flex align-items-center justify-content-center border"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
								WA 3
							</div>
							<div class="col-sm d-flex align-items-center justify-content-center border"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
								WA 4
							</div>
						</div>
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
							<div class="col-sm d-flex align-items-center justify-content-center border"style="background-color: #EE7766"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
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
							<div class="col-sm d-flex align-items-center justify-content-center border"style="background-color: #EE7766"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
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
							<div class="col-sm d-flex align-items-center justify-content-center border"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
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
							<div class="col-sm d-flex align-items-center justify-content-center border"style="background-color: #EE7766"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
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
					<h3>23rd July (Tuesday)</h3>
					<div class="table table1">
						<div class="row ">
							<div class="col-sm-2 d-flex align-items-center justify-content-center border">
								Time\Room
							</div>
							<div class="col-sm d-flex align-items-center justify-content-center border" data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
								WA 1
							</div>
							<div class="col-sm d-flex align-items-center justify-content-center border"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
								WA 2
							</div>
							<div class="col-sm d-flex align-items-center justify-content-center border"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
								WA 3
							</div>
							<div class="col-sm d-flex align-items-center justify-content-center border"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
								WA 4
							</div>
						</div> 
						<div class="row ">
							<div class="col-sm-2 d-flex align-items-center justify-content-center border">
								09:00 - 09:45
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
								14:40 - 16:00
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
							<div class="col-sm d-flex align-items-center justify-content-center border"style="background-color: #62C3D6"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
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
							<div class="col-sm d-flex align-items-center justify-content-center border" style="background-color: #921CEB"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
								<?php echo $session['session_name'];?>
							</div>
							<?php } endforeach ?>
							<?php foreach ($sessions as $session): ?> 
						    <?php
							if ($session["time"]=="16:20 - 18:40" && $session["room_uuid"]==3 && $session["date"]=="23rd") {?>	
							<div class="col-sm d-flex align-items-center justify-content-center border"style="background-color: #62C3D6"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
								<?php echo $session['session_name'];?>
							</div>
							<?php } endforeach ?>
							<?php foreach ($sessions as $session): ?> 
						    <?php
							if ($session["time"]=="16:20 - 18:40" && $session["room_uuid"]==4 && $session["date"]=="23rd") {?>	
							<div class="col-sm d-flex align-items-center justify-content-center border"style="background-color: #E8EBE4"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
								<?php echo $session['session_name'];?>
							</div>
							<?php } endforeach ?>
						</div>
					</div>
				</div>

				<!-- Day 5  -->
				<div class="day-table " style="margin-top: 20px;">
					<h3>24th July (Wednesday)</h3>
					<div class="table table1">
						<div class="row ">
							<div class="col-sm-2 d-flex align-items-center justify-content-center border">
								Time\Room
							</div>
							<div class="col-sm d-flex align-items-center justify-content-center border" data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
								WA 1
							</div>
							<div class="col-sm d-flex align-items-center justify-content-center border"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
								WA 2
							</div>
							<div class="col-sm d-flex align-items-center justify-content-center border"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
								WA 3
							</div>
							<div class="col-sm d-flex align-items-center justify-content-center border"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
								WA 4
							</div>
						</div> 
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
							<div class="col-sm d-flex align-items-center justify-content-center border" style="background-color: #62C3D6"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
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
								11:10 - 13:10
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
								Lunch and Posters
							</div>
						</div>
						<div class="row ">
							<div class="col-sm-2 d-flex align-items-center justify-content-center border">
								14:10 - 14:55
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
								15:00 - 18:00
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
					<h3>25th July (Thursday)</h3>
					<div class="table table1"> 
						<div class="row ">
							<div class="col-sm-2 d-flex align-items-center justify-content-center border">
								Time\Room
							</div>
							<div class="col-sm d-flex align-items-center justify-content-center border" data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
								WA 1
							</div>
							<div class="col-sm d-flex align-items-center justify-content-center border"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
								WA 2
							</div>
							<div class="col-sm d-flex align-items-center justify-content-center border"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
								WA 3
							</div>
							<div class="col-sm d-flex align-items-center justify-content-center border"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
								WA 4
							</div>
						</div>
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
								<!-- <div class="row " style="height: 100%;"> -->
									<div class="row" style="height: 100%;">
									<?php foreach ($sessions as $session): ?> 
						    		<?php
									if ($session["theme_abbreviation"]=="GC-High tech") {?>	
									<div class="col-md-12  d-flex align-items-center justify-content-center border"style="background-color: #E8EBE4;height: 50%;"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
										<?php   echo $session['session_name'];?>
									</div>
									<?php } endforeach ?>
										<!-- Force next columns to break to new line at md breakpoint and up :Visible only on sm -->
									<div class="w-100 d-none d-md-block d-md-none"></div>
									<?php foreach ($sessions as $session): ?> 
					  			  	<?php
									if ($session["theme_abbreviation"]=="GC-Experiments") {?>	
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
							<div class="col-sm d-flex align-items-center justify-content-center border"style="background-color: #A1D2CE"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
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
								17:45 & 18:00 leave
							</div>
							<div class="col-sm d-flex align-items-center justify-content-center border"style="background-color: #FCFDFC">
								<!-- 20 min Stadium tour -->
							</div>
						</div>
						<div class="row ">
							<div class="col-sm-2 d-flex align-items-center justify-content-center border">
								18:15 & 19:00
							</div>
							<div class="col-sm d-flex align-items-center justify-content-center border"style="background-color: #FCFDFC">
								30 min Stadium tour (De Grolsch Veste -FC Twente)
							</div>
						</div>
						<div class="row ">
							<div class="col-sm-2 d-flex align-items-center justify-content-center border">
								18:30 - 19:30
							</div>
							<div class="col-sm d-flex align-items-center justify-content-center border"style="background-color: #FCFDFC">
								Drinks reception (De Grolsch Veste -FC Twente)
							</div>
						</div>
						<div class="row ">
							<div class="col-sm-2 d-flex align-items-center justify-content-center border">
								19:30 - 23:00
							</div>
							<div class="col-sm border"style="background-color: #FCFDFC">
								<div class="row ">
									<div class="col-sm d-flex align-items-center justify-content-center border">
										Conference banquet (De Grolsch Veste -FC Twente)
									</div>
									<div class="w-100 d-none d-md-block d-md-none"></div>
									<?php foreach ($sessions as $session): ?> 
									<?php
									if ($session["time"]=="19:30 - 23:00" && $session["room_uuid"]==5 && $session["date"]=="25th") {?>	
									<div class="col-sm d-flex align-items-center justify-content-center border" style="background-color: #FFF721"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
										 <?php echo $session['session_name'];?>	
									</div>
									<?php } endforeach ?>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Day 7  -->
				<div class="day-table " style="margin-top: 20px;">
					<h3>26th July (Friday)</h3>
					<div class="table table1">
						<div class="row ">
							<div class="col-sm-2 d-flex align-items-center justify-content-center border">
								Time\Room
							</div>
							<div class="col-sm d-flex align-items-center justify-content-center border" data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
								WA 1
							</div>
							<div class="col-sm d-flex align-items-center justify-content-center border"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
								WA 2
							</div>
							<div class="col-sm d-flex align-items-center justify-content-center border"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
								WA 3
							</div>
							<div class="col-sm d-flex align-items-center justify-content-center border"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
								WA 4
							</div>
						</div> 
						<div class="row ">
							<div class="col-sm-2 d-flex align-items-center justify-content-center border">
								09:00 - 09:45
							</div>
							<?php foreach ($sessions as $session): ?> 
							<?php
							if ($session["time"]=="09:00 - 09:45" && $session["room_uuid"]==5 && $session["date"]=="26th") {?>				
								<div class="col-sm-10 d-flex align-items-center justify-content-center border"style="background-color: #FFF721"  data-toggle="modal" data-target="#<?php echo $session['session_uuid'];?>">
									<?php echo $session['session_name'];?>
								</div>
							<?php } endforeach ?>
						</div>
						<div class="row ">
							<div class="col-sm-2 d-flex align-items-center justify-content-center border">
								09:50 - 11:30
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
								11:30 - 11:50
							</div>
							<div class="col-sm-10 d-flex align-items-center justify-content-center border">
								Break 
							</div>
						</div>
						<div class="row ">
							<div class="col-sm-2 d-flex align-items-center justify-content-center border">
								11:50 - 12:50
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
								12:50 - 13:00
							</div>
							<div class="col-sm-10 d-flex align-items-center justify-content-center border">
								Conference closes (WA1) 
							</div>
						</div>
						<div class="row ">
							<div class="col-sm-2 d-flex align-items-center justify-content-center border">
								13:00 - 14:00
							</div>
							<div class="col-sm d-flex align-items-center justify-content-center border"style="background-color: #FCFDFC">
								Lunch
							</div>
						</div>
					</div>
				</div>

			</div>

			<?php foreach ($sessions as $session): ?> 
			<!-- Modal -->
			<div class="modal fade" id="<?php  echo $session['session_uuid'];?>" tabindex="-1" role="dialog" aria-labelledby="<?php  echo $session['session_uuid'];?>Title" aria-hidden="true">
			  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
			    <div class="modal-content" style="margin-top: 20%;">
			      <div class="modal-header">
			        <h5 class="modal-title" id="<?php  echo $session['session_uuid'];?>Title">
			        <!-- MS-02: From particles to continuum theory and applications - Chair: TBA</h5> -->
			        <?php  echo $session['session_name'];?>
			        <button  class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			      	<ul class="list-group list-group-flush" style="overflow-x: auto;">
			      		<!-- column 1 --> 
			      		<?php foreach ($talks as $talk): ?> 
					  	<?php if ($session["session_uuid"]==$talk["session_uuid"]){ ?>
			      		<li class="list-group-item">
			      			<!-- Put content at center with : d-flex align-items-center -->
			      			<div class="row d-flex align-items-center">
			      				<div class="col-sm-2">
			      					<span class="time"> <?php echo $talk['talk_time'];?> </span>
			      				</div>
			      				<?php if ($session["theme_abbreviation"]!="Plenary"){ ?>
			      				<div class="col-sm-2">
			      					<span class="time"> <?php echo $talk['talk_uuid'];?> </span>
			      				</div>
			      				<?php } ?>
			      				<div class="col-sm-4">
			      					<span class="time"> <?php echo $talk['talk_name'];?>  </span>
			      				</div>
			      				<div class="col-sm-4">
			      					<!--Put content at center with : d-flex align-items-center justify-content-center-->
			      					<?php foreach ($people as $person): ?> 
						    		<?php if ($person["person_uuid"]==$talk["presenter_uuid"]) {?>	
			      					<div class="row d-flex align-items-center justify-content-center">
			      						<div class="col-sm-6">
			      							<span class="time">
			      								<?php $convert_person_name = explode(',', $person['person_name']);?>
			      								<?php echo $convert_person_name[1].", ". $convert_person_name[0];?>
			      							</span> 
			      						</div>
			      						<div class="col-sm-6">
			      							<span class="time d-inline-block text-truncate"><?php echo $person['person_organization'];?></span>
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
          <!--  -->
        </div>
        <!--Pill - All Sessions: contents of all end-->
        <!-- Plenary -->
        <div class="tab-pane fade" 
             id="pills-Plenary" 
             role="tabpanel" 
             aria-labelledby="pills-Plenary-tab">
                  <!--Tabs vertical pills Row 1 buttons of subtitle of calendar start-->
                    <div class="row" style="margin-top: 20px;">
                      <div class="col">
                         <h3>Plenary</h3>
                      </div>
                    </div> 
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">Date</th>
                          <th scope="col">Time</th>
                          <th scope="col">Plenary</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        foreach ($sortSessionsByDate as $session):
                          if ($session["theme_abbreviation"]=="Plenary"){ 
                        ?>
                        <tr>
                          <th scope="row"><?php echo $session['date'];?> July</th>
                          <td><?php echo $session['time'];?></td>
                          <td><?php echo $session['session_name'];?></td>
                        </tr>
                        <?php } ?>
                        <?php endforeach ?>
                      </tbody>
                    </table>    
                    
                    <!-- Navs- with vertical pills. Row content box right sessions and talks end-->
        </div>
        <!-- Plenary -->
        <!-- All MS & GC -->
        <?php foreach ($themes as $theme):
              if ($theme["theme_abbreviation"]!="Plenary") {
        ?>
        <div class="tab-pane fade" 
             id="pills-<?php echo $theme['theme_abbreviation'] ?>" 
             role="tabpanel" 
             aria-labelledby="pills-<?php echo $theme['theme_abbreviation'] ?>-tab">
                  <!--Tabs vertical pills Row 1 buttons of subtitle of calendar start-->
                      <div class="row" style="margin-top: 20px;">
                        <div class="col">
                           <h3><?php echo $theme['theme_abbreviation'] ?></h3>
                        </div>
                      </div>     
                      <!-- Row content box left and right -->
                      <div class="row" style="margin-top: 20px;">
                        <!-- Navs- with vertical pills. Row content box left Themes-->
                        <div class="col-md-3 col-sm">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                              <!--Sesion 1-->
                              <?php 
                              $i=0;
                              foreach ($sessions as $session):
                              if ($session["theme_abbreviation"]==$theme['theme_abbreviation']){ 
                                $i++;
                                if ($i==1){
                              ?>
                              <a class="pill-20th-july nav-link active" id="v-pills-<?php echo $session['session_uuid'];?>-tab" data-toggle="pill" href="#v-pills-<?php echo $session['session_uuid'];?>" role="tab" aria-controls="v-pills-<?php echo $session['session_uuid'];?>" aria-selected="true"><?php echo $session['session_name'];?></a>
                              <?php } 
                                    else {
                              ?>
                              <a class="pill-20th-july nav-link" id="v-pills-<?php echo $session['session_uuid'];?>-tab" data-toggle="pill" href="#v-pills-<?php echo $session['session_uuid'];?>" role="tab" aria-controls="v-pills-<?php echo $session['session_uuid'];?>" aria-selected="false"><?php echo $session['session_name'];?></a>
                              <?php }} ?>
                              <?php endforeach ?>
                            </div>
                        </div>
                        <!-- Navs- with vertical pills. Row content box left Themes end-->    
                        <!-- Navs- with vertical pills. Row content box right sessions and talks -->
                        <div class="col-md-9 col-sm">
                          <div class="tab-content" id="v-pills-tabContent">
                              <!-- Sessions- session 1: Active defination sessions with active -->
                              <?php   
                              $i=0;
                              foreach ($sessions as $session):
                              if ($session["theme_abbreviation"]==$theme['theme_abbreviation']){ 
                                $i++;
                                if ($i==1){
                              ?>
                              <div class="tab-pane fade show active" 
                                    id="v-pills-<?php echo $session['session_uuid'];?>" 
                                    role="tabpanel" 
                                    aria-labelledby="v-pills-<?php echo $session['session_uuid'];?>-tab">
                                    <!-- activities or talks-->             
                                    <h5 class="text-justify"><?php echo $session['session_name'];?></h5>
                                    <div class="row">
                                      <div class="col-sm-4"> Session time : <?php echo $session['date'];?> July</div>
                                      <!-- <div class="col-sm-8">Address: Horst S2143]</div> -->
                                    </div>
                                    <ul class="list-group list-group-flush" style="overflow-x: auto;">
                                      <!-- column 1 --> 
                                      <?php   
                                        foreach ($talks as $talk):
                                        if ($talk["session_uuid"]==$session['session_uuid']){
                                      ?>
                                      <li class="list-group-item">
                                      	<!-- Put content at center with : d-flex align-items-center -->
                                      	<div class="row d-flex align-items-center">
                                      		<div class="col-sm-2">
                                      			<span class="time"> <?php echo $talk['talk_time'];?></span>
                                      		</div>
                                      		<div class="col-sm-2">
                                      			<span class="time"> <?php echo $talk['talk_uuid'];?></span>
                                      		</div>
                                      		<div class="col-sm-4">
                                      			<span class="time"> <?php echo $talk['talk_name'];?></span>
                                      		</div>
                                      		<div class="col-sm-4">
                                      			<!--Put content at center with : d-flex align-items-center justify-content-center-->
                                      			<?php foreach ($people as $person):
                                      				if ($person["person_uuid"]==$talk["presenter_uuid"]) {?>  
                                      					<div class="row d-flex align-items-center justify-content-center">
                                      						<div class="col-sm-6">
                                      							<span class="time"> <?php $convert_person_name = explode(',', $person['person_name']);?>
                                      							<?php echo $convert_person_name[1].", ". $convert_person_name[0];?></span> 
                                      						</div>
                                      						<div class="col-sm-6" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                      							<span class="time d-inline-block text-truncate"> <?php echo $person['person_organization'];?> </span>
                                      						</div>
                                      					</div>
                                      				<?php } ?>
                                      			<?php endforeach ?>
                                      		</div>
                                      	</div>
                                      	</li>
                                     <?php } ?>
                                     <?php endforeach ?>
                                      <!-- column 1 --> 
                                    </ul>
                              </div>
                              <?php } 
                                    else {
                              ?>
                              <div class="tab-pane fade" 
                                   id="v-pills-<?php echo $session['session_uuid'];?>" 
                                    role="tabpanel" 
                                    aria-labelledby="v-pills-<?php echo $session['session_uuid'];?>-tab">
                                    <!-- activities or talks-->             
                                    <h5 class="text-justify"><?php echo $session['session_name'];?></h5>
                                    <div class="row">
                                      <div class="col-sm-4"> Session time : <?php echo $session['date'];?> July</div>
                                      <!-- <div class="col-sm-8">Address: Horst S2143]</div> -->
                                    </div>
                                    <ul class="list-group list-group-flush" style="overflow-x: auto;">
                                      <!-- column 1 --> 
                                      <?php   
                                        foreach ($talks as $talk):
                                        if ($talk["session_uuid"]==$session['session_uuid']){
                                      ?>
                                      <li class="list-group-item">
                                        <!-- Put content at center with : d-flex align-items-center -->
                                        <div class="row d-flex align-items-center">
                                        	<div class="col-sm-2">
                                        		<span class="time"> <?php echo $talk['talk_time'];?></span>
                                        	</div>
                                        	<div class="col-sm-2">
                                      			<span class="time"> <?php echo $talk['talk_uuid'];?></span>
                                      		</div>
                                        	<div class="col-sm-4">
                                        		<span class="time "> <?php echo $talk['talk_name'];?></span>
                                        	</div>
                                        	<div class="col-sm-4">
                                        		<!--Put content at center with : d-flex align-items-center justify-content-center-->
                                        		<?php foreach ($people as $person):
                                        			if ($person["person_uuid"]==$talk["presenter_uuid"]) {?>  
                                        				<div class="row d-flex align-items-center justify-content-center">
                                        					<div class="col-sm-6">
                                        						<span class="time"> 
                                        							<?php $convert_person_name = explode(',', $person['person_name']);?>
                                        						<?php echo $convert_person_name[1].", ". $convert_person_name[0];?></span> 
                                        					</div>
                                        					<div class="col-sm-6" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                        						<span class="time d-inline-block text-truncate"> <?php echo $person['person_organization'];?> </span>
                                        					</div>
                                        				</div>
                                        			<?php } ?>
                                        		<?php endforeach ?>
                                        	</div>
                                        </div>
                                      </li>
                                     <?php } ?>
                                     <?php endforeach ?>
                                      <!-- column 1 --> 
                                    </ul>
                              </div>
                              <?php }} ?>
                              <?php endforeach ?>
                          </div>
                        </div>
                        <!-- Navs- with vertical pills. Row content box right sessions and talks end-->
                      </div>
        </div>
        <?php }?>
        <?php endforeach ?>
        <!-- All MS & GC -->
      </div>
	<?php } 
}?>