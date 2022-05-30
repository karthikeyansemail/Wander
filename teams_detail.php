

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Wanderfly</title>

  <link rel="stylesheet" href="assets/styles/css/slick.css">
  <link rel="stylesheet" href="assets/styles/css/slick-theme.css">
  <link rel="stylesheet" href="assets/styles/css/jquery.datepicker2.css">
  <link rel="stylesheet" href="assets/styles/css/animate.css">

  <link rel="stylesheet" href="assets/styles/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
<link rel="manifest" href="./site.webmanifest">

</head>
<body>
<div class='loading'>
    <div class='lds-dual-ring'></div>
</div>
<header id="header-2">
    <div class="wand-container">
        <div class="header-content2">
            <div class="header-content2__logo">
                <a class="header-content2__logo__sitename" href="index.html"><img src="assets/images/logo_contact.png" alt="logo"></a>
            </div>
            
            <nav class="header-2-nav">
                <ul>
                    <li>
                        <a href="index.html#">HOME </a>
                        
                    </li>
                    <li>
                        <a href="index.html#col-3-tours">TOURS</a>
                        
                    </li>
                    <li>
                        <a href="index.html#destination">DESTINATIONS</a>
                       
                    </li>
                    <li>
                        <a href="teams.html">TEAM BUILDING</a>
                    </li>
                    <li><a href="contact.html">CONTACT </a></li>
                </ul>
            </nav> 

          
         
            <nav class="header-nav-mobile">
    <ul>
        <li>
            <a href="index.html#">HOME</a>
           
        </li>
        <li>
            <a href="index.html#col-3-tours">TOURS</a>
            
        </li>
        <li>
            <a href="index.html#destination">DESTINATIONS </a>
           
        </li>
        <li>
            <a href="teams.html">TEAM BUILDING</a>
        </li>
        <li><a href="contact.html">CONTACT <i class="fa fa-angle-down"></i></a></li>
       
    </ul>
</nav> 

            <div class="header-content2__hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div> 
    </div>
</header>





<section>
    <div class="page-banner">
        <div class="container">
            <div class="page-banner__tittle">
                <h1><?php  

if($_GET['title']=="trekking"){
              print "Trekking";
}else if($_GET['title']=="puzzle"){
    print "Puzzle";
}
else if($_GET['title']=="marshmellow"){
    print "Marshmallow Challenge";
}
else if($_GET['title']=="hunt"){
    print "Scavenger hunt";
}
else if($_GET['title']=="drift"){
    print "All adrift";
}
else if($_GET['title']=="pepper"){
    print "Salt n pepper";
}
else if($_GET['title']=="campfire"){
    print "Campfire tales";
}
else if($_GET['title']=="memory_wall"){
    print "Memory wall";
}





              ?></h1>
                <p> <span></span> </p>
            </div>
        </div>
    </div>
</section>


<style>
    .card {
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
      transition: 0.3s;
      width: 100%;
    }
    
    .card:hover {
      box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }
    
    .container {
      padding: 2px 16px;
    }
    </style>


<section class="contact-infomation"> 
    <div class="container">
       


        <div class="card">
            <img src="./assets/images/<?php  
            
            print $_GET['title'];
            
            ?>.jpg" alt="" style="width:100%">
            <div class="container" align="justify">
              <h4><b><?php  

if($_GET['title']=="trekking"){
              print "Trekking";
}else if($_GET['title']=="puzzle"){
    print "Puzzle";
}
else if($_GET['title']=="marshmellow"){
    print "Marshmallow Challenge";
}
else if($_GET['title']=="hunt"){
    print "Scavenger hunt";
}
else if($_GET['title']=="drift"){
    print "All adrift";
}
else if($_GET['title']=="pepper"){
    print "Salt n pepper";
}
else if($_GET['title']=="campfire"){
    print "Campfire tales";
}
else if($_GET['title']=="memory_wall"){
    print "Memory wall";
}






              ?></b></h4> 
            
<?php


if($_GET['title']=="trekking"){
    ?>
                <p> A trek within the mountains is nothing like playing badminton at a lodge. You are in
                a very exclusive landscape, very far away from your comfort area. And you have a
                mountain to scale.<br><br>
                It isn't always something that is possible to ever be absolutely organized for. In the
                mountains, your body is physically pushed to the limit and your thoughts are
                stretched skinny.<br><br>
                But, you are not the most effective character experiencing this bodily and mental
                trouble. Your entire group goes through the identical issue. The level of empathy is
                excessive.<br><br>
                What comes out of this realization is an innate experience of comradeship. Human
                beings certainly lean on each other for strength and guidance. In the system, they
                foster bonds that might have in no way been feasible via any other amusement
                interest.<br><br>
                The very span of a trek plays a very crucial role in making it a powerful team
                constructing exercise. The prolonged time frame permits you to build belief as you
                face difficulties and proportion small moments of chatter and laughter together. You
                get to understand approximately your colleague’s capabilities and personalities,
                which you could have in no way otherwise determined at your place of business or in
                a single day living in an inn.
                </p> 

<?php }else if($_GET['title']=="puzzle"){ ?>
    <p>Divide the participants into smaller businesses. Every organization may be given a
                jigsaw puzzle with a few lacking portions. The participants will find the missing parts
                by negotiating with the other teams.<br><br>
                Truths and lies: every team member will write down two truths and a lie about
                themselves on a piece of paper. The relaxation of the team will discover the lie
                among the three. It is a notable manner to get to realize the group individuals better.
                </p> 

                <?php }else if($_GET['title']=="campfire"){ ?>
                    <p>A traditional activity that evokes storytelling and improves group bonding. Groups
        gather in a circle and share their place of job reviews. Along the way, the research
        matters about each other and relives old reminiscences.
        Range of contributors: 6-20<br><br>
        Length: forty-five mins<br><br>
        Goal: informal schooling, encourage participants to percentage, and establish not
        unusual reviews<br><br>
        <b>A way to play</b><br><br>
        1. Create a fixed set of trigger words that can kickstart a storytelling consultation.
        Think of words like "first day", "painting journey", "partnership", "aspect mission", etc.
        Add them to sticky notes.<br><br>
        2. Divide a whiteboard into sections. Put up all sticky notes from above on one phase
        of the whiteboard.<br><br>
        Three. Ask a player to choose one trigger phrase from the sticky notes and use it to
        proportion an experience (say, approximately his/her first day at the employer). Shift
        the selected sticky be aware of the opposite aspect of the whiteboard.<br><br>
        Four. Because the participant is pertaining to his/her enjoyment, ask others to jot
        down words that remind them of comparable painting-associated stories. Upload
        those words to sticky notes and paste them on the whiteboard.<br><br>
        Five. Repeat this technique till you have got a "wall of phrases" with interconnected
        testimonies.<br><br>
       <b> Strategy</b><br><br>
        Storytelling is at the coronary heart of the network. It is also how information is
        received and surpassed informally. A storytelling consultation centered on
        work-related tales can get a massive institution to loosen up and proportion their
        studies.<br><br>
        It can also act as an informal training consultation with work experiences passing
        from one member to any other.<br><br>
        
      
      </p> 
    <?php }else if($_GET['title']=="marshmellow"){ ?>
        <p>They encouraged a wide variety of gamers: small groups containing three-6 crew
                members each.<br><br>
                Clothes required: a kit for each team containing 20 sticks of uncooked spaghetti, one
marshmallow, one backyard of string, one backyard of tape, and one measuring tape.
Time limit: about 20-half-hour even as 18 minutes is the norm.<br><br>
<b>Why do paintings?</b>

This pastime includes numerous teams competing to bring together the tallest
freestanding structure in a given time with set materials.<br><br>
This workplace sport works each as a first-rate ice breaker and also as a
group-building interest. It encourages crew members to work collaboratively
through together brainstorming thoughts.<br><br>
Moreover, the marshmallow task encourages participants to look for plan b.
Consequently, with the marshmallow challenge, you could hone your crew's
problem-fixing talents but additionally take pleasure in a laugh recreation too. It's
virtually a win-win in my e-book.<br><br>
<b>A way to play?</b>
Step 1: installation the substances for every crew<br><br>
Step 2: explain the venture: build the tallest tower viable to help a marshmallow in 18
minutes.<br><br>
Step three: set a timer for 18 mins<br><br>
Step 4: pass!<br><br>
                </p> 


                <?php }else if($_GET['title']=="hunt"){ ?>
                    <p>The endorsed number of gamers: small groups of three-five team individuals.<br><br>
                Material required: diverse "trophies," pen paper, post-it notes.<br><br>
                Time restriction: about 30 minutes<br><br>
                <b>Why does it work?</b><br><br>
                Scavenger hunts are many of the simplest fun games within the office to get people
                to engage and collaborate.<br><br>
                It's still one of the traditional terrific games that everybody enjoys. Scavenger hunts
                can now be executed everywhere thanks to smartphones and apps.<br><br>
                A company scavenger hunt is easy to set up. It may range from a simple listing of
                factors you've got around the workplace to problematic items.<br><br>
               <b> The way to play?</b>
                Step 1: create a list of gadgets that businesses need to accumulate or obligations that
                they have to finish.<br><br>
                Step 2: for each challenge that a crew completes, they get the following clue for the
                following "trophy." To make it more a laugh and challenging, you may upload an
                impediment course to get to the primary clue.<br><br>
                Step three: the team that manages to find the most range of trophies wins.<br><br>
                
                </p> 

                <?php }else if($_GET['title']=="drift"){ ?>
                    <p>The endorsed number of gamers: small corporations of three-6 group individuals.
        Fabric required: pen paper, post-it notes.<br><br>
        Time limit: half-hour<br><br>
        <b>Why does it work?</b><br><br>
        An excellent group-building hobby that lets in group members to flex their
        selection-making abilities. All adrift allows you to see which you're extra susceptible
        to make smarter decisions than for your personal. As a group<br><br>
        <b>How to play?</b><br><br>
        The traditional situation given in all adrift is that your boat catches on hearth, and
        you need to abandon it. You simply have a few minutes to seize objects. A few
        examples are first useful resource kits, rope, canned food, bottled water, and so forth.
        Step 1: First, every group has to write down the items that they might seize from 1-10
        in the order of most essential to live on.<br><br>
        Step 2: Then, as a team, they must decide and agree on which 10 are the top priorities
        and fill them within the worksheet.<br><br>
        Step 3: in the end, evaluate each group's listing with the scoring sheet (without
        difficulty to be had on-line). The crew with the best factors wins.<br><br>
      
      </p> 


                <?php }else if($_GET['title']=="pepper"){ ?>
                    <p>Individuals required: 10-15 crew individuals.<br><br>
        Material required: tape, pen paper for each crew member, and
        Time restrict: approximately 20 minutes<br><br>
       <b> Why does it work?</b><br><br>

        Gambling this amusing game in the workplace will improve the communication and
creativity of many of the crew individuals. It's going to also inspire teamwork as
speaking with the rest of the group is necessary.<br><br>
The way to play?<br><br>
Step 1: have a list of well-known pairs (think Mario and Luigi, salt and pepper, yin and
yang, shadow and light, peanut butter and jelly, mickey and Minnie) available.<br><br>
Step 2: separate the pairs, and simplest considered one of them must be written on
each sheet of paper. As an example, Mario on one paper chit and Luigi on the other.
Step three: tape one piece of paper to the lower back of anybody, ensuring relaxation
if the crew can't see it.<br><br>
Step four: whilst the game starts, each crew member has to stroll around asking yes
or no questions to discover what word they've taped to their backs.<br><br>
Step 5: once they figure that out, they'll be capable of discovering their different pair.
The two will sit down and analyze 3 to 5 interesting records approximately one
another.<br><br>

      
      </p> 
 


<?php }else if($_GET['title']=="memory_wall"){ ?>
    <p>A bodily interest that establishes and re-lives the team’s shared reminiscences.
        Groups cartoon their shared memories with every different and area them on a wall.
        The wall remains up all through the event, running as a focus of the crew’s
        camaraderie.<br><br>
        Range of individuals: 6-50<br><br>
        Length: forty five-90 mins<br><br>
        Objective: build camaraderie between crew members, foster relationships
        A way to play<br><br>
        1. Deliver each player sheets of paper, markers, and tape.<br><br>
        2. Ask each player to survey the room. Take 15 mins to write down positive
        reminiscences of shared studies and moments at the same time as running
        collectively.<br><br>
        Three. Once participants have a few reminiscences indexed, ask them to draw some
        of those recollections on clean sheets of paper. The drawings may be summary
        renditions of the "reminiscence scene". They can contain companions who have
        shared the reminiscence to create this drawing. Provide them as much as 30
        minutes to do this.<br><br>
        4. As soon as the time is up, ask participants to tape their memory drawings to the
        wall.<br><br>
        Five. Ask for volunteers to approach the wall and extend the memories they just
        taped on the wall with the complete group.<br><br>
        <b>Strategy</b><br><br>
        A visible "memory wall" creates a welcoming surrounding and reaffirms the nice
        relationships between crew participants. Rendering every memory - individually or in
        agencies - as a drawing adds a good deal-wished levity and camaraderie to the
        complete workout.<br><br>
     
        
      
      </p> 


    <?php } 
    
    
    ?>


            </div>
          </div>

    


    
    </div>


</section>

<footer class="footer-2">
    <div class="scroll-top">
    <i class="fas fa-angle-up"></i>
</div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="footer-2__widget footer-2__widget--left">
                    <div class="footer-2__widget__tittle ">
                        <h5>get in touch</h5>
                        <div class="footer-2__widget__tittle__line-under"></div>                   
                    </div>
                    <div class="footer-2__widget__social">
                        <a href="#" class="footer-2__widget__social-item">
                            <img src="assets/images/socials/footer2ins.png" alt="footer2ins">
                        </a>
                        <a href="#" class="footer-2__widget__social-item">
                            <img src="assets/images/socials/footer2face.png" alt="footer2face">
                        </a>
                        <a href="#" class="footer-2__widget__social-item">
                            <img src="assets/images/socials/footer2twitter.png" alt="footer2twitter">
                        </a>
                        <a href="#" class="footer-2__widget__social-item">
                            <img src="assets/images/socials/footer2V.png" alt="footer2V">
                        </a>
                        <a href="#" class="footer-2__widget__social-item">  
                            <img src="assets/images/socials/footer2yt.png" alt="footer2yt">    
                        </a>
                        <a href="#" class="footer-2__widget__social-item">
                            <img src="assets/images/socials/footer2print.png" alt="footer2print">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="footer-2__widget">
                    <div class="footer-2__widget__map">
                        <img src="assets/images/footerworld.png" alt="footerworld">
                       
                    </div>
                    <span class="footer-2__widget__map__address"> 6/4/355 Vaddipalem, Narayana Medical College, Nellore,Andhra Pradesh, 524004</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="footer-2__widget footer-2__widget--right">
                    <div class="footer-2__widget__tittle ">
                        <h5>newsletter</h5>
                        <div class="footer-2__widget__tittle__line-under"></div>                   
                    </div>
                    <div class="footer-2__widget__form">
                        <form class="footer-form" action="#">
    <input class="footer-form__text-input" type="text" placeholder="Your Email...">
    <input class="footer-form__submit" type="submit" value="SUBMIT">
</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="copyright__area">
                <div class="copyright__license">
                    Copyright <i class="fa fa-copyright"></i> 2022 Wanderfly. All Rights Reserved.
                </div>
                
            </div>
        </div>
    </div>
</footer>

<script src="assets/scripts/jquery-3.4.1.js"> </script>

<script src="assets/scripts/slick.min.js"></script>
<script src="assets/scripts/jquery.datepicker2.js"></script>
<script src="assets/scripts/isotope.pkgd.min.js"></script>


<script src="assets/scripts/app.js"></script>





<script>

    function   call_function(){
   
   
       //alert("function called");

     var nameObject =document.getElementById("name");
   var emailObject =document.getElementById("email");
   var messageObject =document.getElementById("message");


   var name =document.getElementById("name").value;
   var email =document.getElementById("email").value;
   var message =document.getElementById("message").value;

   //alert("items got");
   if(name==""){
       alert("Name cannot be empty");
       nameObject.focus();
       return false;
   }else if(email==""){
    alert("Email cannot be empty");
    emailObject.focus();
    return false;
   }
   else if(message==""){
    alert("Message cannot be empty");
    messageObject.focus();
    return false;
   }
   alert("validation got");

   document.getElementById("submit").value="Please Wait..."
   
   $.ajax({
                        type: "GET",
                        url:'https://wanderfly.in/mailer/mailer_website.php',
                        data:{
                            'name': name,
                            'email': email,
                            'email_content': message,
                        },
                        success:function(data){
                          alert("mail sent");
                          document.getElementById("name").value=""
                          document.getElementById("email").value=""
                          document.getElementById("message").value=""
                          document.getElementById("submit").value="SUBMIT"
                        }
                    });


     //               alert("after ajax code ");

                    return false;
       }
   
   
   
   </script>
   
</body>

</html>