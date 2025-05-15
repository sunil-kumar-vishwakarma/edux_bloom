<footer class="custom-footer">
  <div class="custom-footer-container">
    <div class="custom-footer-row">



      <!-- Column 1 -->
      <div class="custom-footer-col">
        <a class="navbar-brand" href="/">
          <img src="{{asset('images/edu-x white.png')}}" alt="Edu-X Logo" height="70">
        </a>
        <p>US Address: 3337 Salem Cove Drive SE,N2H 6R3</p>
         <p>Africa Office Addresses: </p>
           <p>Senegal: Cite de l'emergence, Immeuble 10,<br> unit 21, Dakar Plateau </p>
            <p>Mali: <a href="https://www.google.com/maps/place/Edu-x+Service/@12.580429,-7.9587039,17z/data=!3m1!4b1!4m6!3m5!1s0xe51d139af16a1a7:0xa381dbde3d4c0c97!8m2!3d12.580429!4d-7.956129!16s%2Fg%2F11nn1ydv23?coh=209933&entry=tts" target="_blank">
  Rue du Governeurr, Bamako, Mali
</a>
</p>
      </div>

  <!-- Column 3 -->
      <div class="custom-footer-col">
        <h3>About</h3>
        <ul>
          <li><a href="{{route('web')}}">Our Story</a></li>
        
          <li><a href="{{route('blogs-pages')}}">Blog & Press</a></li>
          <li><a href="{{route('partner')}}">Leadership</a></li>
          <li><a href="{{route('contactus')}}">Contact</a></li>
            <li><a href="{{route('student')}}">Students</a></li>
            <li><a href="{{route('partner')}}">Recruiters</a></li>
        </ul>
      </div>

      <!-- Column 2 -->
      <div class="custom-footer-col">
        <!--<h3>For</h3>-->
        <!--<ul>-->
        <!--  <li><a href="{{route('student')}}">Students</a></li>-->
        <!--  <li><a href="{{route('institutions')}}">School</a></li>-->
        <!--  <li><a href="{{route('partner')}}">Recruiters</a></li>-->
        <!--</ul>-->

        <h3>Discover</h3>
        <ul>
          <li><a href="{{route('search')}}"> Programs</a></li>
          <li><a href="{{route('institutions')}}"> Schools</a></li>
          <li><a href="{{route('student-register')}}">Register</a></li>
            <li><a href="{{route('webinar')}}">Careers</a></li>
        </ul>
      </div>

    

      <!-- Column 4 -->
      <div class="custom-footer-col">
        <h3>Study In:</h3>
        <ul>
          <li><a href="{{route('webinar.readmore')}}">United State</a></li>
          <li><a href="{{route('webinar.readmore')}}">United Kingdom</a></li>
          <li><a href="{{route('webinar.readmore')}}">Canada</a></li>
        </ul>

       
      </div>
       <div class="custom-footer-col">
        <h3>Legal</h3>
        <ul>
          <li><a href="{{route('privacy.policy')}}" target="_blank">Privacy & Cookies Policy</a></li>
          <li><a href="{{route('term.and.condition')}}" target="_blank">Terms & Conditions</a></li>
          <li><a href="{{route('eduxfees')}}">EduX Fees</a></li>
        </ul>

       
      </div>
    </div>

    <div class="custom-footer-copy">
      <p>© 2020-2025 Edu-X. All Rights Reserved. Developed by <a href="https://softwarehousetechnology.com/">SHT</a></p>
    </div>
  </div>
</footer>
<style>
.custom-footer {
  /*background-color:#1652b4;*/
  background-color:black;
  color: #fff;
  /*padding: 60px 20px 30px;*/
      padding-top: 40px;
      padding-bottom: 15px;
  font-family: Arial, sans-serif;
}

.custom-footer-container {
  max-width: 1200px;
  margin: auto;
}

.custom-footer-row {
  display: flex;
  flex-wrap: wrap;

  justify-content: space-between;
  gap: 40px;
}


.custom-footer-col img {
  max-height: 70px;
  margin:auto;
  margin-bottom:20px;
}

.custom-footer-copy p{
   color:white;
   text-align:center;
   font-weight:bold;
   opacity:.7;
   max-width:500px;
}

.custom-footer-copy a{
    text-decoration:underline;
}

.custom-footer-col h3 {
  font-size: 17px;
  margin-bottom: 10px;
  font-weight:bold;
  color: #fff;
}

.custom-footer-col p,
.custom-footer-col a,
.custom-footer-col li {
  font-size: 15px;
  color: #ccc;
  text-decoration: none;
  line-height: 1.8;
}

.custom-footer-col a:hover {
  color: #fff;
  text-decoration: underline;
}

.custom-footer-col ul {
  list-style: none;
  padding: 0;
  margin-bottom: 20px;
}

.custom-footer-copy {
      border-top: 1px solid #fff;
    margin-top: 40px;
    padding-top: 20px;
    color: #fffbfb;
    font-size: 14px;
    width: 100%;
    text-align: center;
    display: flex;
    justify-content: center;
}


/* Responsive */
@media (max-width: 768px) {
  .custom-footer-row {
    flex-direction: column;
    gap: 30px;
  }

  .custom-footer-col {
    flex: 1 1 100%;
    text-align:center;
  }
  /*.custom-footer-col p{*/
  /*    text-align:right;*/
  /*}*/

  .custom-footer-container {
    padding: 0 10px;
    text-align:center;
  }
}
</style>
