<?php $this->load->view('header');?>
<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
          <li style="color: white;">
             <i class="fa fa-clock-o fa-3x" aria-hidden="true"></i> 
          </li>
          <li>&nbsp;&nbsp;&nbsp;</li>
          <li>
            <div id="clockdiv">
                <div>
                <span class="hours" id="hours"></span>
                <div class="smalltext">Hours</div>
                </div>
                <div>
                <span class="minutes" id="minutes"></span>
                <div class="smalltext">Minutes</div>
                </div>
                <div>
                <span class="seconds" id="seconds"></span>
                <div class="smalltext">Seconds</div>
                </div>
            </div>
          </li>
     </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $this->session->userdata('fname');?></a></li>
        <li><a href="<?php echo base_url();?>quiz_controller/do_logout_student"><span class="glyphicon glyphicon-log-out"></span> LogOut</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="embed-responsive embed-responsive-16by9">
            <iframe src="<?php echo base_url();?>quiz_controller/selectsubquizview" name="iframe_output"></iframe>
            </div>
        </div>
    </div>
</div>
<script>

function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
  return {
    'total': t,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}

function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');

  function updateClock() {
    var t = getTimeRemaining(endtime);
    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if (t.total <= 0) {
	window.alert("time up");
        logoutevent();
	clearInterval(timeinterval);
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}

window.onbeforeunload = function(){
	console.log("mkl");
	var hours = document.getElementById("hours").innerHTML;
	var minutes = document.getElementById("minutes").innerHTML;
	var seconds = document.getElementById("seconds").innerHTML;
	localStorage.setItem("hr",hours);
	localStorage.setItem("min",minutes);
	localStorage.setItem("sec",seconds);

};
window.onload = function(){
    var deadline;
	console.log("mkc");
        if (localStorage.getItem("hr") !== null || localStorage.getItem("min") !== null || localStorage.getItem("sec") !== null)
        {
        deadline = (parseInt(localStorage.getItem("hr"))*60*60*1000) + (parseInt(localStorage.getItem("min"))*60*1000) + (parseInt(localStorage.getItem("sec")) * 1000);
	var hello = new Date(Date.parse(new Date()) + deadline);
            initializeClock('clockdiv', hello);
        }
else{
    deadline = new Date(Date.parse(new Date()) + 2 * 60 * 60 * 1000);	
    initializeClock('clockdiv', deadline);
}
	
};

function logoutevent(){
    $.ajax({
               url:window.location.protocol + "//" + window.location.hostname + "/quiz/quiz_controller/do_logout_student",
               data: 1,
               type: "post",
               success: function(res){
                   window.location.href = window.location.protocol + "//" + window.location.hostname + "/quiz/quiz_controller";
               }
            });
}

</script>

  
<?php $this->load->view('footer');
