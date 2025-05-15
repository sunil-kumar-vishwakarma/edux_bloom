@extends('frontent.layouts.app')
@section('title', 'EduX | Student')
@section('content')

<link rel="stylesheet" href="{{asset('css/events.css')}}">
      <style>
      body {
    font-family: sans-serif;
    margin: 0;
    padding: 0;
}


.webinar {
    background-size: cover;
    background-position: center;
}


.navbar-brand div{
    font-size: 27px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    color: white;
    font-weight: bold;
    margin-top: 17px;
}


.navbar-brand{
    display: flex;
    gap: 15px;
}
     
      
      
      
      .container{
          max-width:100%;
          padding:0;
         
      }

.webinar {
  
    max-width: 100%;
    padding: 20px;
    width: 100%;
    background-image: url(images/webinarr.avif);
    margin-top: 100px;
    height: 570px;

    background-size: cover; /* Ensures full coverage */
    background-position: center; /* Centers the image */
    background-repeat: no-repeat;
    display: flex; /* Flex helps in centering content if needed */
    align-items: center;
    justify-content: center;
    color: black;
    font-family: sans-serif;
    text-align: center;
}

.background-content{
    padding: 50px 20px;
        margin-left: -114px;
        margin-top: 63px;
}



.background-content h1{
  font-size: 40px;
  font-weight: bold;
  color: white;
  transform:translateX(316px);
 
}

.background-content p{
    max-width: 700px;
    color: white;
    font-size: 20px;
    margin-left:170px;

}

.card-container {
      display: flex;
      justify-content: center;
      gap: 40px;
      margin: 20px;
    }

    .card-webinar {
      background: #fff;
      border: 1px solid #e3e3e3;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      width: 350px;
      height: 400px;
      padding: 20px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .card-header {
      font-size: 14px;
      font-weight: bold;
      color: #fff;
      padding: 5px 10px;
      border-radius: 5px;
      display: inline-block;
      margin-bottom: 10px;
    }

    .card-header.institution {
      background-color: #ffeeba;
      color: #856404;
    }

    .card-header.destination {
      background-color: #d1ecf1;
      color: #0c5460;
    }

    .card-header.trends {
      background-color: #f8d7da;
      color: #721c24;
    }

    .card-title {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 10px;
      color: #333;
    }

    .card-date {
      font-size: 14px;
      color: #666;
      margin-bottom: 20px;
    }

    .card-link {
      color: #007bff;
      text-decoration: none;
      font-weight: bold;
      display: inline-flex;
      align-items: center;
      border: none;
      border-radius: 6px;
      width: 150px;
      height: 40px;
      padding-left: 10px;
      
    }

    .card-link:hover {
      background-color: #d6e2f0;
     
    }

    .card-link svg {
      margin-left: 5px;
    }

    .head h1{
        font-size: 40px;
        font-weight: bold;
    }

    .head p{
    font-size: 20px;
    margin-left: 463px;
    }
    
    #Spotlight{
        border-radius: 10px;
        width: 60%;
        font-size: 16px;
    }

    #newyork{
        margin-left: 195px;
    }
    
 
 .line {
    margin-top: -9px;
} 




/*@media (min-width: 1200px) {*/
/*    .card-container {*/
/*        flex-direction: row;*/
/*    }*/
/*    .card {*/
/*        width: 30%;*/
/*    }*/
/*}*/

/* Tablets (Portrait & Landscape) (≥768px and <1200px) */
@media (min-width: 768px) and (max-width: 1199px) {
    .container {
        max-width: 900px;
    }
    .navbar-nav {
        flex-direction: row;
    }
    .card-container {
        flex-wrap: wrap;
        justify-content: space-around;
    }
    .card-webinar {
        width: 45%;
        margin-bottom: 20px;
    }
    .background-content h1 {
        font-size: 36px;
    }
    .background-content p {
        margin-left: auto;
        margin-right: auto;
        font-size: 18px;
    }
}

/* Mobile Devices (≥576px and <768px) */
@media (min-width: 576px) and (max-width: 767px) {
    .container {
        max-width: 100%;
        padding:0px;
    }
    
    
    .webinar{
        max-width:100%;
    }
    
    .navbar-nav {
        flex-direction: column;
        align-items: center;
    }
    .card-container {
        flex-direction: column;
        align-items: center;
    }
    .card-webinar {
        width: 100%;
        margin-bottom: 15px;
    }
    .background-content h1 {
        font-size: 30px;
    }
    .background-content p {
        font-size: 16px;
        margin: 0 20px;
    }
}

/* Small Mobile Devices (<576px) */
@media (max-width: 575px) {
    .container {
        width: 100%;
       
    }
    .navbar-brand img {
        width: 60px;
        height: 50px;
    }
    .navbar-nav {
        flex-direction: column;
        text-align: center;
    }
    
    
    .webinar{
        margin-top:-50px;
    }
    
    
    .background-content {
    padding: 150px 15px;
}
    
    .webinar {
       
        height: auto;
        
    }
    .background-content h1 {
        font-size: 24px;
                margin-left: -506px;
       
    }
    .background-content p {
        font-size: 14px;
               margin: -2px 97px;
        transform: translateX(61px);
    }
    .card-container {
        flex-direction: column;
        align-items: stretch;
    }
    
    .card1{
                margin-left: 108%;
    }
    
    .card-webinar {
        width: 100%;
        margin-bottom: 10px;
        padding: 15px;
    }
    
    #newyork {
    margin-left: 21px;
    width: 89%;
}
    .card-title {
        font-size: 16px;
    }
    .card-date {
        font-size: 12px;
    }
    .card-link {
        font-size: 14px;
        padding: 10px;
    }
    footer {
        padding: 20px 0;
        text-align: center;
    }
    
    .blog{
     
        max-width: 100%;
        width: 100%;
        align-items: center;
        text-align: center;
                margin-left: 0px;
        font-size: 32px;
}

#card1{
    margin-left:-150px;
}

#card1 .card-webinar{
    gap:300px;
}

}
    
    

      </style>

     
        <div class="webinar">
          <div class="background-content">
            <h1><span style="color: yellow;">Webinars</span> by Edu-X</h1>
            <br />
            <p>
                Receive expert advice, data insights, application tips, and more in Edu-X’s live webinars.
                 These are exclusively offered for Edu-X recruitment partners to empower your success.
            </p>
          </div>
        </div><br><br><br>

         


        <div class="upcoming">
            <div class="head" style="text-align: center;">
                <h1>Our Upcoming Webinars</h1><br>
                <p>Register for one, or all of them.</p>
            </div><br><br>

            <div class="card-container">
                <div class="card-webinar">
                  <div class="card-header institution" id="Spotlight">Institution Spotlight</div>
                  <div class="card-title">USA University Admissions 101: How to get your students' visa fast: Featuring Concordia University, St. Paul</div>
                  <div class="card-date">January 13, 2024, 6:00 A.M<br>4:30 P.M IST</div>
                  <a href="web.html" class="card-link">Register here →</a>
                </div>
            
                <div class="card-webinar">
                  <div class="card-header destination" id="Spotlight">Destination Spotlight</div>
                  <div class="card-title">Destination UK: What Can We Expect in 2025?</div>
                  <div class="card-date">January 14, 2024, 6:00 A.M<br>4:30 P.M IST</div>
                  <a href="web.html" class="card-link">Register here →</a>
                </div>
            
                <div class="card-webinar">
                  <div class="card-header trends" id="Spotlight">Trends Report</div>
                  <div class="card-title">What's New in Edu-X</div>
                  <div class="card-date">January 15, 2024, 6:00 A.M<br>4:30 P.M IST</div>
                  <a href="web.html" class="card-link">Register here →</a>
                </div>
              </div><br>

              <div class="card-webinar" id="newyork">
                <div class="card-header destination" id="Spotlight">Destination Spotlight</div>
                <div class="card-title">Study in New York with the SUNY System: Featuring University of Buffalo</div>
                <div class="card-date">January 21, 2024, 6:00 A.M<br>
                    4:30 P.M IST</div>
                <a href="web.html" class="card-link">Register here →</a>
              </div>
           

        </div><br><br><br>



            <!-- <div class="blue4">
            <div class="content1">
              <div>
                <h1>Webinars by Edu-X</h1>
                <p>
                    Receive expert advice, data insights, application tips, and much more, in Edu-X’s live webinars. These are exclusively offered to empower our Recruitment Partners’ success.
                </p>
              </div>

                <div class="btn1">
                  <a href="#"><button>See Our Upcoming Webinar</button></a>
                </div>
              </div>
            </div><br><br><br> -->



            <div class="carousel">
              <div class="carousel-track">
                <img src="images/webinar1.webp" alt="Image 1">
                <img src="images/webinar2.webp" alt="Image 2">
                <img src="images/webinar3.webp" alt="Image 3">
                <img src="images/webinar4.webp" alt="Image 4">
                <img src="images/webinar5.webp" alt="Image 5">
                <img src="images/webinar6.webp" alt="Image 6">
                <img src="images/webinar7.webp" alt="Image 7">
                <img src="images/webinar1.webp" alt="Image 1">
                <img src="images/webinar2.webp" alt="Image 2">
                <img src="images/webinar3.webp" alt="Image 3">
                <img src="images/webinar4.webp" alt="Image 4">
                <img src="images/webinar5.webp" alt="Image 5">
                <img src="images/webinar6.webp" alt="Image 6">
                <img src="images/webinar7.webp" alt="Image 7">
              </div>
            </div><br>


            <div class="carousel">
              <div class="carousel-track">
                <img src="images/webinar1.webp" alt="Image 1">
                <img src="images/webinar2.webp" alt="Image 2">
                <img src="images/webinar3.webp" alt="Image 3">
                <img src="images/webinar4.webp" alt="Image 4">
                <img src="images/webinar5.webp" alt="Image 5">
                <img src="images/webinar6.webp" alt="Image 6">
                <img src="images/webinar7.webp" alt="Image 7">
                <img src="images/webinar1.webp" alt="Image 1">
                <img src="images/webinar2.webp" alt="Image 2">
                <img src="images/webinar3.webp" alt="Image 3">
                <img src="images/webinar4.webp" alt="Image 4">
                <img src="images/webinar5.webp" alt="Image 5">
                <img src="images/webinar6.webp" alt="Image 6">
                <img src="images/webinar7.webp" alt="Image 7">
              </div>
            </div>
          </div>
      </div>
          

           <br>
 
           <br>
              <!-- <div class="content2">
               <div>
                  <h1>Why Choose Edu-X?</h1>
                  <p>
                    Edu-X is more than an application platform. We empower people around the world to study abroad and access the best education.
                  </p>
                
                   <br>
                    <a href="#"><button class="btn1">Learn More About Us</button></a>
                  </div>
                    <span class="imge">
                      <img src="images/img1.webp">
                    </span >

                    <span class="imge">
                      <img src="images/img2.webp" style="margin-top: 50px; height: 250px; width: 150px;">
                    </span>
                  </div> -->
              
              </div>
              

            </div>

            
            <h1 class="blog">Our Latest Blogs</h1><br><br>
            <div class="card1" style="margin-top: auto;">
              <div class="row-cols-1 row-cols-md-3 g-4" id="card1" style="display: flex;">
                <div class="col">
                  <div class="card-webinar">
                    <img src="images/Canada-Study-Permit-Processing-Times-Falling-q8awoecm53hn8hwocxuqxnf3deq9nnh2p9klnrj2dc.png" class="card-img-top" alt="...">
                    <div class="card-body">
                 <br><br>
                      <p class="card-text"><a  href="#">Why Choose Canada as an International Student</a></p><br>
                      <h6>October 17, 2024</h6>
                    </div>
                  <button><a href="webinar-readmore.html" ><strong>Read More</strong></a></button>
                  </div>
                </div>
                <div class="col">
                  <div class="card-webinar" id="c2">
                    <img src="images/AI035-Banner-1-qvnbbiv0vl6ajzw0bx7l4mbvn2lpuygoy0l63akqm8.png" class="card-img-top" alt="..." id="colimg">
                    <div class="card-body">
                      <br><br>
                      <p class="card-text" ><a  href="#" >The Early Impacts of Canada’s International Student Cap on Postgraduate Studies</a></p><br>
                      <h6>October 17, 2024</h6>
                    </div>
                    <button  id="colbutton"><a href="webinar-readmore.html"><strong> Read More</strong></a></button>
                  </div>
                </div>
                <div class="col">
                  <div class="card-webinar" id="c3">
                    <img src="images/Ireland-Banner-2-–-St-Patricks-Day-q3lqzy1kxy9jp5gtjqh6qoqdglvbd0pn962rudqpq8.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <br><br>
                      <p class="card-text"><a  href="#">Cost of Living in Ireland</a></p><br>
                      <h6>October 17, 2024</h6>
                    </div>
                    <button><a href="webinar-readmore.html"><strong>Read More</strong></a></button>
                  </div>
                </div>
               
                  </div>
                </div>
          </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
 <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
  