
@extends('frontent.layouts.app')
@section('title', 'EduX | Student')
@section('content')

<style>

        .footer{
                padding: 100px 100px;
    transform: translateY(132px);
        }

         .container1{
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            justify-content: center;
            text-align: center;
            margin-top: 150px;
         }
         
         
         .footer-column p {
             margin-left: -187px;
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

         .container1 h1{
          font-size: 30px;
          font-weight: bold;
          font-family: Verdana, Geneva, Tahoma, sans-serif;
         }

            .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 50px;
        }

        .card-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    margin-top: 50px;
}

.contact-card {
    width: 250px;
    padding: 20px;
    background-color: white;
    border: 1px solid #e0e0e0;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    font-size: 14px;
    color: #333;
    display: flex;
    flex-direction: column;
    justify-content: space-between; /* Ensures content spacing */
    height: 250px; /* Ensures all cards are the same height */
}

.contact-card h4 {
    font-size: 16px;
    font-weight: bold;
    color: #333;
    margin-bottom: 10px;
}

.contact-card a {
    color: #0066cc;
    font-weight: bold;
    text-decoration: none;
    max-width:300px;
}

.contact-card hr {
    width: 50px;
    border-top: 1px solid #d1d1d1;
    margin: 10px auto;
}

.contact-card .highlight {
    font-size: 14px;
    color: #000000;
}

.contact-card p {
    margin: 0; /* Ensure no extra spacing around paragraphs */
}

hr {
    height: 0.8px;
    background-color: black;
}

small {
    font-weight: normal;
}


      .txt{
        max-width: 800px;
        display:inline-flex;
        text-align: center ;
        justify-content: center;
        align-items: center;
        margin-top: 50px;
      }

      .social-icons {
    display: flex;
    justify-content: center;
    gap: 15px;
}

.social-icons a {
    color: white; /* Set icon color to white */
    background-color: blue; /* Set background color */
    font-size: 20px; /* Adjust icon size */
    width: 40px; /* Define width and height to create a circle */
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%; /* Make the background circular */
    transition: background-color 0.3s ease, color 0.3s ease;
    text-decoration: none;
    margin-top:20px;
}

.social-icons i{
  display:flex;
  align-items:center;
  justify-content:center;
  margin:10px 0px;
}

.social-icons a:hover {
    background-color: #282369; /* Change background color on hover */
    color: #ffffff; /* Keep icon color white on hover */
}

iframe{
 width: 100%;
 height: 500px;
 margin-top: 50px;
}


@media (max-width: 1200px) {
    .contact-card {
        width: 250px;
    }
    
     footer{
       padding:20px 20px;
   }
    
}

@media (max-width: 768px) {
    .contact-card {
        width: 100%;
        margin: 10px 0;
        height: auto;
    }

    .txt {
        max-width: 100%;
        font-size: 14px;
    }

    iframe {
        width: 100%;
        height: 350px;
    }
    
   #footer-top{
             transform: translateX(90px);
   }
   
   
   #footer-top .navbar-brand img{
       margin-left:-30px;
   }
   
   footer{
       padding:20px 20px;
   }
   
   .copyright{
           margin-left: 10px;
   }

    
    
}

@media (max-width: 480px) {
    .contact-card {
        width: 100%;
        margin: 10px 0;
    }

    .card-container {
        margin-top: 30px;
    }

    .txt {
        font-size: 12px;
        padding: 10px;
    }

    iframe {
        height: 300px;
    }

    .social-icons a {
        font-size: 16px;
        width: 35px;
        height: 35px;
    }
}

.contact-data{
 text-align: center;
    max-width: 100%;

}
   


</style>
    
    <div class="container1">
        <h1>Contact Us</h1>
        <p class="contact-data">We Are Here To Help. Don't hesitate to get in touch with our expret support team who can help answer all of your questions</p>


        <div class="card-container">
            <div class="contact-card">
                <h4>Email</h4>
                <a href="mailto:help@Edu-X.com">help@Edu-X.com</a>


                <hr>
                <p>Please email us with your inquiries.</p>
            </div>

            <div class="contact-card">
                <h4>Live Chat<br><small>[For registered users only]</small></h4>
               
                <a href="student_login.html">Login</a>
                <hr>
                <p >Available<br>24/7</p>
            </div>

            <div class="contact-card">
                <h4>Canada</h4>
                <p class="highlight">Toll Free: <a href="tel:18449727759">1-844-972-7759</a></p>
                <hr>
                <p>Monday-Friday<br>9 AM-5:30 PM EST</p>
            </div>

            <div class="contact-card">
                <h4>India</h4>
                <p class="highlight">Toll Free: <a href="tel:18002083444">1-800-208-3444</a></p>
                <hr>
                <p >Available<br>24/7</p>
            </div>
        </div>

        <p class="txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit minima ullam, rerum, laudantium
             delectus quam provident error eaque porro, molestias quidem natus praesentium expedita
              officiis exercitationem reprehenderit magnam rem sint.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit minima ullam, rerum, laudantium
             delectus quam provident error eaque porro, molestias quidem natus praesentium expedita officiis
              exercitationem reprehenderit magnam rem sint.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit minima ullam, rerum, laudantium 
            delectus quam provident error eaque porro, molestias quidem natus praesentium expedita officiis 
            exercitationem reprehenderit magnam rem sint.
        </p>

        <div class="social-icons">
            <a href="#" aria-label="LinkedIn" target="_blank"><i class="fab fa-linkedin"></i></a>
            <a href="#" aria-label="Facebook" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="#" aria-label="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="#" aria-label="TikTok" target="_blank"><i class="fab fa-tiktok"></i></a>
            <!-- <a href="#" aria-label="Twitter" target="_blank"><i class="fa-brands fa-x-twitter"></i></a> -->
            <a href="#" aria-label="YouTube" target="_blank"><i class="fab fa-youtube"></i></a>
          </div>

          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3679.2130352260574!2d75.76998531045737!3d22.75747397927435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396301c61b0179b7%3A0x3414df2ba88c47cd!2sPitra%20Parvat!5e0!3m2!1sen!2sin!4v1731592751580!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
     <div>
      
        
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
 <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
