

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
                print $_GET['title'];
                
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
            <img src="./assets/images/uploads/tours/<?php  
            
            print $_GET['title'];
            
            ?>.jpg" alt="" style="width:100%">
            <div class="container" align="justify">
              <h4><b><?php  
              print $_GET['title'];
              
              ?></b></h4> 
            
<?php


if($_GET['title']=="Ooty"){
    ?>
              <p>Nested in the Nilgiri hills of Tamilnadu, Ooty is quite opposite to the average Indian temperatures
and landscapes which continuously amazed the visitors from various backgrounds and firmly took
the name “The Queen of Hills”. Ooty derives its name from the local tribal (Toda) Village Oththai-Kal,
which soon became Udhagamandalam.<br><br>
Hills dotted with tall Nilgiri trees, carpets of tea garden, sprinkled spice plantations, the fragrance of
Eucalyptus trees being the tagline of the destination, it offers a wide range of experiences ranging
from calm and serene localities, busy markets, exciting adventures, a perfect blend of traditional and
modern cuisines and finally it also excelled in providing a cocoon of luxurious stays in the lap of
nature<br><br>
Going by the phrase – “You name it we have it” – Every group of visitors has varied self-interests –
Ooty succeeds in everything from the knowledge of Higginbotham library & spice gardens, Calm and
serenity of lakes, Panoramic views of doddabetta, Gentle walk into pine forests. But sorry, Ooty
doesn’t provide a clear sky, as it always masked by Mist<br><br>
Places to which a Wanderer can Fly<br><br>
1. Toy train in Nilgiri mountain<br><br>
2. Botanical Gardens<br><br>
3. Dolphin’s nose<br><br>
4. Toda Huts<br><br>
5. Pykara lake<br><br>
6. Emerald lake<br><br>
7. Doddabetta peak<br><br>
8. Catherine waterfall<br><br>
9. Honey and Bee Museum<br><br>
10. Pine forest and Many<br><br>
People have the limits to explore, Not the wanderers<br><br>
                </p> 

<?php }else if($_GET['title']=="Papikondalu"){ ?>
    <p>The extensive mountain range in North Andhra Pradesh, Which makes the way for the Godavari
River is an absolute feast to the eyes. It derives its name from 'Papidi' Which is the Telugu language
word for the middle partition of women’s hair – Hair signifying the mountains and the central
partition being the river.<br><br>
One has to experience the boat journey to get the essence of Papikondalu and to embrace the
beauty of turns, oxbow lakes, waterfalls, riverine islands, cool breeze, fresh air from hills, and many
more<br><br>
Places to which a Wanderer can Fly<br><br>
1. Perantapalli village<br><br>
2. Pattuseema<br><br>
3. Handicrafts from the local tribal markets<br><br>
4. Camp at the riverside<br><br>
5. Munivaatnam waterfalls<br><br>
6. Papikondalu National Park<br><br>
7. Jammalapuram temple<br><br>
8. Gandipochamma temple<br><br>
                </p> 
    <?php }else if($_GET['title']=="Kodaikanal"){ ?>
    <p>Are you sleeping under a safe roof and in the warmth of a Cosy comforter and Air conditioner at 18o
c? Then yes, your mind and body are tired of the extreme temperatures of the concrete jungle and
never-ending work pressure. Kodaikanal offers exactly what your physical existence wants, with the
same comfort of your AC and safe roof under lavish stays and hotels in the heart of densely wooded
undulating Palani hills of Tamil Nādu, located at 2,133mtr elevation<br><br>
Though called 'Princess of Hill stations' it can be rightly claimed as the king in its way, the reason
being the landscapes and experiences it provides to take home, from deep valleys to the tall
mountains surrounding you in all directions, lush greenery, and activities like Cycling, hiking, night
camps, boating, camping in dense jungles, Rappelling, quiet walk-in pine forests to offering prayers
at pilgrimage centres, Kodaikanal also comes with the package of extra fun, yes, monsoon just
boosts your experience at least 2-3 bounds.<br><br>
Being in 2022, we want a sweet ending for every good thing, and Kodaikanal perfectly gives you that
in the name of homemade healthy chocolates 😊<br><br>
Places to which a Wanderer can Fly<br><br>
1. Coakers walk<br><br>
2. Dolphin’s nose<br><br>
3. Kodai lake<br><br>
4. Kodaikanal lake<br><br>
5. Berijam lake<br><br>
6. Pine forest<br><br>
7. Pillar rocks<br><br>
8. Poombarai village<br><br>
9. Silent valley<br><br>
10. Vattakanal valley (6kms from Kodaikanal)<br><br>
                </p> 


                <?php }else if($_GET['title']=="Andaman"){ ?>
    <p>Geographically located in the eastern part of mainland India, the Andaman and Nicobar Islands
a magnificent island in the Bay of Bengal. These scenic, hilly islands, some 572 islets, were
once a mountain range stretching from Myanmar to Indonesia and are covered with dense, dry,
humid, and evergreen forests and an endless variety of exotic flora and fauna. The Andaman
and Nicobar Islands have been recognized as eco-friendly travel destinations. As a tourist
paradise, these islands have something very special to offer, such as Cellular Jail, Ross Island,
and Havelock Island. Evergreen rainforests of the Andaman, beautiful silver sand beaches,
meandering mangrove streams, rich marine life with rare species of plants, animals, corals, etc.,
offer tourists an unforgettable experience. There are tremendous opportunities to enjoy nature
in beach resorts, water sports, adventure water sports, adventure tourism like trekking, island
camping, nature trails, diving, etc.<br><br>
Andaman and Nicobar Attractions:<br><br>
Coral Reef<br><br>
Barren Island<br><br>
Chidiya Tapu<br><br>
Fisheries Museum<br><br>
Anthropological Museum<br><br>
Cellular (Kalapani)<br><br>
Netaji Subash Chandra Bose Island<br><br>
Swaraj Dweep<br><br>
                </p> 

                <?php }else if($_GET['title']=="Wayanad"){ ?>
    <p>Wayanad, the green paradise, lies between the mountains of the Western Ghats and forms the frontier
of the greenest part of Kerala. Enchanting and fascinating, this clean and unspoiled country is rich in
history and culture. The Wayanad Hills border Mudumalai in Tamil Nadu and Bandipur in Karnataka,
creating a vast landmass for wildlife to roam in their most natural home. The place also enjoys a
strategic location as all<br><br>
Major tourist centers of South India such as Ooty, Mysore, Bangalore, Coorg, and Kannur are located in
this region. The following places are major tourist attractions including Wayanad Wildlife Sanctuary,
Chethalayam Waterfall, Sri Mahaganapathy Temple in Thiruvangoor, Pazhassi Raja Museum, Pookote
Lake, and Edakkal Caves. Also, Muthanga Wildlife Sanctuary, Tholpetty, Karappuzha Dam, Sultan
Bathery Jain Temple, Tiger Valley, Meenmutty Falls, Soochippara Falls, Chembra Hills, North Wayanad
Bird Sanctuary, Thirunelly Temple, and Kuruva Islands are other nearby tourist destinations in Wayanad
and surroundings<br><br>
                </p> 


                <?php }else if($_GET['title']=="Coonoor"){ ?>
    <p>The Nilgiri Hills are famous for their lofty hill stations. Among them, Coonoor stands out, located at the
head of Hulikal Gorge at an altitude of 1,800 m above sea level. It is 19 km from Ooty, another famous
Nilgiris hill station. Coonoor is famous for its green surroundings and a variety of wildflowers and birds.
Coonoor offers a perfect setting for activities such as trekking and hiking. Coonoor offers the traveler a
panoramic view of the lush green hills of Nilgiri with its gorges, valleys, and waterfalls. Bird watching is
a popular pastime in Coonoor as the area is home to a large variety of species such as cormorants, pipits,
thrushes, parakeets, skylarks, Nilgiri verditer, etc.<br><br>
                </p> 
 


<?php }else if($_GET['title']=="Coorg"){ ?>
    <p>Coorg is a popular coffee-producing hill station in Karnataka, nestled in the tall western ghats
mountains with a perpetual misty landscape. Coorg, dubbed the "Scotland of India," lives up to
its moniker with a mix of history, elegance, adventure, and delectable cuisine. Aside from its
bright splendour, Coorg boasts a rich history and a distinct native clan - the Kodavas, who
specialize in martial arts and are known for their kind hospitality.<br><br>
Cover the lovely cities of Virajpet, Kushalnagar, Gonikoppal, Pollibetta, and Somwarpet during
your visit to Coorg, and enjoy the wonderful concept of "homestays" to make your trip even
more unforgettable!<br><br>
Things to see in coorg:<br><br>
1. Talakaveri<br><br>
2. Raja's Seat<br><br>
3. Coffee plantation<br><br>
4. River rafting in coorg<br><br>
5. Brahmagiri Wildlife Sanctuary<br><br>
6. Honnamana Kere Lake<br><br>
7. Tadiandamol peak<br><br>
8. Nagarhole National Park<br><br>
9. Iruppa falls<br><br>
10. Somwarpet<br><br>
11. Brahmagiri trek<br><br>
                </p> 


                <?php }else if($_GET['title']=="Madikeri"){ ?>
    <p>Madikeri is a scenic hill station in Karnataka's Coorg region, famed for its lush green valleys and
enticing coffee aroma. Many people are inspired by Madikeri's nice temperature and magnificent
scenery, which has a visibly cool and peaceful environment that is difficult to find elsewhere.
<br><br>
The town is home to a variety of picturesque landscapes, stunning waterfalls, temples,
monasteries, and other tourist attractions. With its pollution-free, serene, and tranquil
atmosphere, it attracts hundreds of travelers every day, transforming even the most mundane
vacations into a beautiful trip through life<br><br>
Madikeri Fort<br><br>
● Omkareshwara Temple<br><br>
● Kote Betta<br><br>
● Abbey falls<br><br>
● St. Mark's Church<br><br>
                </p> 


                <?php }else if($_GET['title']=="Sakleshpur"){ ?>
    <p>A hill station located in India's Western Ghats. Sakleshpur's economy thrives because it is
bordered by a surprising amount of coffee, tea, and spice plantations.<br><br>
The 600-year-old Sakleshwara temple, which rests on the banks of the river Hemavathi, is a
work of art in a setting that is supposed to steal your breath away. And the Bisle View Point,
which offers a panoramic view of the region and surrounding hills, as well as the area's
rainforests.<br><br>
1. Manjarabad Fort<br><br>
2. Sri Sakleshwara Swamy Temple<br><br>
3. Bisle Reserve Forest<br><br>
4. Agni Gudda hill<br><br>
5. Manjehalli Waterfalls<br><br>
6. Jenukallu Gudda<br><br>
7. Pandavar Gudda<br><br>
8. Temple of Halebid and Belur<br><br>
                </p> 


                
                <?php }else if($_GET['title']=="Mangalore"){ ?>
    <p>Mangaluru is famed for its magnificent beaches, waving coconut palms, and temple architecture.
Beautiful beaches, as well as temples, churches, and mosques, are major tourist attractions in
Mangalore.<br><br>
Yaksha Gana, Mangalore's folk dance, is the perfect visual delight to brighten your journey and
enchant you as you witness the rich culture that it preserves and praises.<br><br>
Food is undoubtedly one of your primary priorities while on the trip. When you visit Mangalore,
expect to be offered delectable sea foods and other classic Canara cuisine that are just delectable
to say the least.<br><br>
1. The Kudroli Temple<br><br>
2. Mangaladevi temple<br><br>
3. Someshwara beach<br><br>
4. Panambur beach<br><br>
5. Tannirbavi Beach<br><br>
6. Pilikula Nisargadhama<br><br>
                </p> 



                <?php }else if($_GET['title']=="Goa"){ ?>
    <p>Goa is a kaleidoscope of Portuguese-Indian tradition, delectable cuisine, and, of course, calm
beaches. This sunshine state has received a lot of international acclaim for its Susegad style of
living. Goa is known for its long stretches of golden sand beaches, which attract visitors all year.<br><br>
Goa is known all around the world for its delicious seafood and vibrant nightlife. The state has
the most wonderful nightlife in India, with a diverse range of beach shacks, fashionable bars,
active clubs, splendid casinos, and elegant cafés.<br><br>
Goa, which used to be a Portuguese territory, now boasts colonial-era baroque buildings.<br><br>
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