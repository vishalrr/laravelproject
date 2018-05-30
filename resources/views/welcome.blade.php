<!Doctyte html>
<html>
<head>
<title>Django</title>
<script src="js/jquery.js" type="text/javascript">
</script>
<script src="js/bootstrap.min.js" type="text/javascript">
</script>
<link  href="css/bootstrap.min.css"  rel="stylesheet" type="text/css"/>
<link  href="css/style.css"  rel="stylesheet" type="text/css"/>
<meta name="viewport" content="width=device-width,initial-scale=1"></meta>
<script>
$(document).ready(function () {
  openCity(event, 'London')
  $(".ggg").click(function(){
   $(".hhh").removeClass("active");
});
$(".kkk").click(function(){
   $(".hhh").addClass("active");
});
$(".lll").click(function(){
   $(".ggg").addClass("active");
});
});
</script>
<link rel='shortcut icon' href='Images/pepsi.png' type='image/png' />
</head>
<body>
    
    <div class="bgtop">
   <div class="layer">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container"> 
            <div class="navbar-header">
                <div class="logo">
                <a href="#"><img src="Images/log.png" class="" alt="" /> <?php $user = $user = Auth::user();
                 if($user){ 
                    echo "Welcome&nbsp;"; echo $user->name."(".$user->email.")";
                   } ?>
               </a>
                </div>
              </a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
             </button>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                        <li><a href="#" id="home" class="licolor">HOME</a></li>
                        <li><a href="#" class="licolor">UPCOMING EVENTS</a></li>
                        <li><a href="#" class="licolor">GREETINGS</a></li>
                        <li><a href="#" class="licolor">SUPPORT</a></li>
                        <li><a href="#" class="licolor">Pricing</a></li>
                       @if (Auth::guest())
                        <li><a href="{{ url('/login') }}" class="licolor">SIGN IN</a></li>
                        <li><a href="{{ url('/register') }}" class="licolor"><button type="button" class="btn " style="padding:3px !important; font-size:12px; width: 120px;
        background-color:#2ec274; border-radius:16px; height:30px; margin-top: -4px; outline: none !important;">SIGN UP</button></a></li>
                      @else
                        <li class="dropdown">
                                <a href="#" class="dropdown-toggle log" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="log">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                      @endif
                </ul>
            </div>          
        </div>
    </nav>
    
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-6 jumb">
            <h1 id="head">A Plateform for creating Memborable Experiences</h1>
            <p id="par">Chatalyze ebnables you to engage rather than just follow.</p>
            <form class="form-inline">
                <div class="form-group">
                    <input type="button" value="LEARN MORE" class="form-control learn" />
                </div>
            </form>
        </div>
        @if (!Auth::guest())
          <div class="col-md-3 jumb">
              <h1 id="head">Profile Pic</h1>
                  <img src="<?php echo "/uploads/avatars/".Auth::user()->image; ?>">
          </div>
        @endif

        
    </div>
</div>
</div>
<div class="box">
<div class="container">
    <div class="row text-center">
    <h1>2 main features</h1>
    </div>
    <div class="row text-center">
        <div class="col-md-6">
            <h2>Events</h2>
            <p class="para">Chatalyze events let you video chat with a host and receive a digital autograph in real-time.</p>
        </div>
        <div class="col-md-6">
            <h2>Greetings</h2>
            <p class="para">Chatalyze greetings are personalized video messages and autographed images bundled and delivered in e-card form.</p>
        </div>
    </div>
</div>
</div>
<div class="clear">
</div>
<div class="layer1">
<div class="bgbott">

<div class="container box1">
    <div class="row text-center">
    <h1 class="white">Go from <font color="#ff5850">following</font> two <font color="#2ec274">engaging</font></h1>
    <p class="para1">A look at how Chatalyze take social media fan engagement to the next level</p>
    </div>
    <div class="row" style="padding:5px; padding-top:100px;">
        <div class="col-md-6">
            <h2 class="white">Traditional social media</h2>
            <p class="para1"><font color="#ff5850">1-way communication: </font>Followers recieve influencer posts but rarely can engaged in back-and-forth communication with the influencer.</p>
            <p class="para1"><font color="#ff5850">Standardization: </font>All Followers of an influencer see the same content.</p>
        </div>
    
        <div class="col-md-6">
            <h2 class="white">Chatalyze</h2>
            <p class="para1"><font color="#2ec274">2-way communication: </font>Chatalyze allows fans to directly engage with influencers through events and greetings.</p>
            <p class="para1"><font color="#2ec274">Personalization: </font>Fans have personalized experiences while connected with influencers.</p>
        </div>
    </div>
</div>
</div>
</div>
<div class="tabs">
<div class="container box">
    <div class="row text-center">
        <h1>How it works</h1>
    </div>  
    <div class="center">
        <div class="tab mytab">
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-9">
                  <button class="active tablinks tabtn hhh" onClick="openCity(event, 'London')" >Events</button>
                  <button class="tablinks tabtn ggg" onClick="openCity(event, 'greeting')">Greetings</button>
                </div>
            </div>
        </div>
    </div>
    <div id="London" class="tabcontent">
         <div class="tab mytab1">
            <div class="row">
                <div class="col-md-12">
                      <button class="tablinks tabtn1 butt kkk" onClick="openCity(event, 'London')" style="background-color:grey;">1.Get ticket</button>
                      <button class="tablinks tabtn1 butt kkk" onClick="openCity(event, 'join')" >2.join event</button>
                      <button class="tablinks tabtn1 butt kkk" onClick="openCity(event, 'chat')">3.Chat</button>
                      <button class="tablinks tabtn1 butt kkk" onClick="openCity(event, 'take')">4.Take selfie</button>
                      <button class="tablinks tabtn1 butt kkk" onClick="openCity(event, 'get')">5.Get autograph</button>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 100px !important;">
            <div class="col-md-6" style="margin-left: 42px;">
                <h1>Your ticket in</h1>
                <p class="para">Get your ticket to attend an event, Your ticket provides your chat time and queue number.</p>
            </div>
            <div class="col-md-1">
                
            </div>
            <div class="col-md-5">
                <img src="Images/Get Ticket Tab Image.png" style="width:60%; height:325px !important; margin-left: 135px;     margin-top: 10px;">
            </div>
          </div>
    </div>
    <div id="join" class="tabcontent">
         <div class="tab mytab1">
            <div class="row">
                <div class="col-md-12">
                      <button class="tablinks tabtn1 butt kkk" onClick="openCity(event, 'London')" >1.Get ticket</button>
                      <button class="tablinks tabtn1 butt kkk" onClick="openCity(event, 'join')" style="background-color:grey;">2.join event</button>
                      <button class="tablinks tabtn1 butt kkk" onClick="openCity(event, 'chat')">3.Chat</button>
                      <button class="tablinks tabtn1 butt kkk " onClick="openCity(event, 'take')">4.Take selfie</button>
                      <button class="tablinks tabtn1 butt kkk" onClick="openCity(event, 'get')">5.Get autograph</button>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 100px !important;">
            <div class="col-md-6" style="margin-left: 42px;">
                <h1>Join Events</h1>
                <p class="para">Get your ticket to attend an event, Your ticket provides your chat time and queue number.</p>
            </div>
            <div class="col-md-1">
                
            </div>
            <div class="col-md-5">
                <img src="Images/Get Ticket Tab Image.png" style="width:60%; height:325px !important; margin-left: 135px;     margin-top: 10px;">
            </div>
          </div>
    </div>
    <div id="chat" class="tabcontent">
         <div class="tab mytab1">
            <div class="row">
                <div class="col-md-12">
                      <button class="tablinks tabtn1 butt kkk" onClick="openCity(event, 'London')" >1.Get ticket</button>
                      <button class="tablinks tabtn1 butt kkk" onClick="openCity(event, 'join')">2.join event</button>
                      <button class="tablinks tabtn1 butt kkk" onClick="openCity(event, 'chat')" style="background-color:grey;">3.Chat</button>
                      <button class="tablinks tabtn1 butt kkk" onClick="openCity(event, 'take')">4.Take selfie</button>
                      <button class="tablinks tabtn1 butt kkk" onClick="openCity(event, 'get')">5.Get autograph</button>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 100px !important;">
            <div class="col-md-6" style="margin-left: 42px;">
                <h1>Chat With Everyone</h1>
                <p class="para">Get your ticket to attend an event, Your ticket provides your chat time and queue number.</p>
            </div>
            <div class="col-md-1">
                
            </div>
            <div class="col-md-5">
                <img src="Images/Get Ticket Tab Image.png" style="width:60%; height:325px !important; margin-left: 135px;     margin-top: 10px;">
            </div>
          </div>
    </div>
    <div id="take" class="tabcontent">
         <div class="tab mytab1">
            <div class="row">
                <div class="col-md-12">
                      <button class="tablinks tabtn1 butt kkk" onClick="openCity(event, 'London')" >1.Get ticket</button>
                      <button class="tablinks tabtn1 butt kkk" onClick="openCity(event, 'join')">2.join event</button>
                      <button class="tablinks tabtn1 butt kkk" onClick="openCity(event, 'chat')">3.Chat</button>
                      <button class="tablinks tabtn1 butt kkk" onClick="openCity(event, 'take')" style="background-color:grey;">4.Take selfie</button>
                      <button class="tablinks tabtn1 butt kkk" onClick="openCity(event, 'get')">5.Get autograph</button>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 100px !important;">
            <div class="col-md-6" style="margin-left: 42px;">
                <h1>Take Your Own Selfie</h1>
                <p class="para">Get your ticket to attend an event, Your ticket provides your chat time and queue number.</p>
            </div>
            <div class="col-md-1">
                
            </div>
            <div class="col-md-5">
                <img src="Images/Get Ticket Tab Image.png" style="width:60%; height:325px !important; margin-left: 135px;     margin-top: 10px;">
            </div>
          </div>
    </div>
    <div id="get" class="tabcontent">
         <div class="tab mytab1">
            <div class="row">
                <div class="col-md-12">
                      <button class="tablinks tabtn1 butt kkk" onClick="openCity(event, 'London')" >1.Get ticket</button>
                      <button class="tablinks tabtn1 butt kkk" onClick="openCity(event, 'join')">2.join event</button>
                      <button class="tablinks tabtn1 butt kkk" onClick="openCity(event, 'chat')">3.Chat</button>
                      <button class="tablinks tabtn1 butt kkk" onClick="openCity(event, 'take')">4.Take selfie</button>
                      <button class="tablinks tabtn1 butt kkk" onClick="openCity(event, 'get')" style="background-color:grey;">5.Get autograph</button>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 100px !important;">
            <div class="col-md-6" style="margin-left: 42px;">
                <h1>Get Autograph </h1>
                <p class="para">Get your ticket to attend an event, Your ticket provides your chat time and queue number.</p>
            </div>
            <div class="col-md-1">
                
            </div>
            <div class="col-md-5">
                <img src="Images/Get Ticket Tab Image.png" style="width:60%; height:325px !important; margin-left: 135px;     margin-top: 10px;">
            </div>
          </div>
    </div>
    <div id="greeting" class="tabcontent">
         <div class="tab mytab1">
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                  <button class="tablinks tabtn1 butt lll" onClick="openCity(event, 'greeting')" style="background-color:grey;">1.Personalize it</button>
                  <button class="tablinks tabtn1 butt lll" onClick="openCity(event, 'email')">2.Email delivery</button>
                  <button class="tablinks tabtn1 butt lll" onClick="openCity(event, 'view')">3.View greeting</button>
                 </div>
            </div>
        </div>
        <div class="row" style="margin-top: 100px !important;">     
            <div class="col-md-6" style="margin-left: 32px;">
                <h1>Personalized it</h1><br>
                <p class="para">Provide the requested information and place your order.</p>
            </div>
            <div class="col-md-1">
                
            </div>
            <div class="col-md-5">
                <img src="Images/Personalize It Tab Image.png" style="width:80%; height:325px !important; margin-left: 135px; ">
            </div>
          </div>
    </div>    
    <div id="email" class="tabcontent">
         <div class="tab mytab1">
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                  <button class="tablinks tabtn1 butt lll" onClick="openCity(event, 'greeting')" >1.Personalize it</button>
                  <button class="tablinks tabtn1 butt lll" onClick="openCity(event, 'email')" style="background-color:grey;">2.Email delivery</button>
                  <button class="tablinks tabtn1 butt lll" onClick="openCity(event, 'view')">3.View greeting</button>
                 </div>
            </div>
        </div>
        <div class="row" style="margin-top: 100px !important;">     
            <div class="col-md-6" style="margin-left: 32px;">
                <h1>Email Delivery</h1><br>
                <p class="para">Provide the requested information and place your order.</p>
            </div>
            <div class="col-md-1">
                
            </div>
            <div class="col-md-5">
                <img src="Images/Personalize It Tab Image.png" style="width:80%; height:325px !important; margin-left: 135px; ">
            </div>
          </div>
    </div>   
    <div id="view" class="tabcontent">
         <div class="tab mytab1">
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                  <button class="tablinks tabtn1 butt lll" onClick="openCity(event, 'greeting')" >1.Personalize it</button>
                  <button class="tablinks tabtn1 butt lll" onClick="openCity(event, 'email')">2.Email delivery</button>
                  <button class="tablinks tabtn1 butt lll" onClick="openCity(event, 'view')" style="background-color:grey;">3.View greeting</button>
                 </div>
            </div>
        </div>
        <div class="row" style="margin-top: 100px !important;">     
            <div class="col-md-6" style="margin-left: 32px;">
                <h1>View Greeting</h1><br>
                <p class="para">Provide the requested information and place your order.</p>
            </div>
            <div class="col-md-1">
                
            </div>
            <div class="col-md-5">
                <img src="Images/Personalize It Tab Image.png" style="width:80%; height:325px !important; margin-left: 135px; ">
            </div>
          </div>
    </div>  
</div>
</div>
<div class="box3">
<div class="container ">
    <div class="row text-center">
        <h1>Ready to chatalyze?</h1>
        <p class="para">Checkout our upcoming events or who's available to make greetings</p>
    </div>  
    <div class="row text-center ">
        <button class="butto btn btns">UPCOMING EVENTS</button>
        <button class="btn btns">GREETINGS</button>
    </div>  
</div>
</div>
<div class="footer">
<div class="container ">
    <div class="row">
        <ul class="foot">
            <li>Terms</li>
            <li>Privacy</li>
            <li>Support</li>
            <li>Contact Us</li>             
        </ul>
    </div>
    
    <div class="row">
        <ul style="list-style:none;"><li>Chatalyze &copy; 2017 .All Rights Reserved.</li></ul>
    </div>
</div>
</div>

<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";

    }
    $(document).on('click','.log',function(){
        $('.log').css('cssText','color:#2ec274 !important;');
        $('.licolor').css('cssText','color:#fff !important;');
    });
    $(document).on('click','.licolor',function(){
            
            
            $('.log').css('cssText','color:#fff !important;');
            $('.licolor').css('cssText','color:#fff !important;');
            $(this).css('cssText','color:#2ec274 !important;');
    });
    </script>
</body>
</html>