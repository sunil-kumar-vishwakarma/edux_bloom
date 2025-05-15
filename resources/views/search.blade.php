@extends('frontent.layouts.app')
@section('title', 'EduX | Student')
@section('content')


    <style>
      /* Global Styles */
  
      
      
  

/* Flex container for image and card */
.content {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 50px;
}


      
.sidebar {
    background-color: white;
    color: rgb(96, 106, 132);
    width: 80px;
    min-height: 100vh;
    transition: width 0.3s ease, background-color 0.3s ease, color 0.3s ease;
    overflow: hidden;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1000;
    border-right: 2px solid #e0e0e0; /* Adds a subtle right border */
    /* Alternatively, use box-shadow for a softer line */
    box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
}


.sidebar:hover {
    width: 250px;
}

.logo {
    display: flex;
    align-items: center;
    padding: 20px;
    padding-top: 30px;
    transition: padding 0.3s ease;

    /* Smooth padding adjustment */
}

.logo i {
    font-size: 24px;
    transition: font-size 0.3s ease;
    cursor: pointer;
    /* Smooth icon size adjustment if needed */
}

.logo-text {
    font-family: Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    margin-left: 10px;
    margin-top: 2px;
    font-size: 24px;
    font-weight: bold;
    opacity: 0;
    /* Hide initially */
    white-space: nowrap;
    transition: opacity 0.3s ease, transform 0.3s ease;
    /* Smooth text appearance */
    transform: translateX(-10px);
    /* Start slightly to the left */
}

.sidebar:hover .logo-text {
    opacity: 1;
    /* Make visible on hover */
    transform: translateX(0);
    /* Slide into place */
    cursor: pointer;
}

.menu {
    list-style: none;
    padding: 10px;
    padding-top: 0;
    transition: padding 0.3s ease;
}

.menu li {
    margin: 20px 0;
}

.menu a {
    text-decoration: none;
    color: rgb(96, 106, 132);
    display: flex;
    align-items: center;
    padding: 10px;
    transition: background-color 0.3s ease, color 0.3s ease;
}

/* Active Menu Item */
.menu a.active {
    background-color: rgb(208, 228, 255);
    color: rgb(0, 51, 132);
    border-radius: 5px;
}

.menu a.active i,
.menu a.active .menu-text {
    font-weight: bold;
}


.menu a:hover {
    background-color: rgba(96, 106, 132, 0.1);
    /* Subtle hover background */
    border-radius: 5px;
}

.menu i {
    font-size: 20px;
    margin-right: 10px;
    transition: font-size 0.3s ease, margin-right 0.3s ease;
    /* Smooth icon transition */
}

.menu-text {
    font-family: Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    opacity: 0;
    margin: 0;
    /* Hide initially */
    white-space: nowrap;
    transition: opacity 0.3s ease, transform 0.3s ease;
    /* Smooth text transition */
    transform: translateX(-10px);
    /* Slide in effect */
}

.sidebar:hover .menu-text {
    opacity: 1;
    /* Show text */
    transform: translateX(0);
    /* Reset transform */
}

/* main content */
/* General Content Area */
.main-content {
    /* padding: 20px; */
    /* margin-left: 80px; */
    /* Matches sidebar default width */
    transition: margin-left 0.3s ease;
}

.sidebar:hover+.main-content {
    margin-left: 80px;
    /* Aligns with expanded sidebar */
}

/* Topbar Styling */
/* Topbar */
.topbar {
    background-color: #ffffff;
    padding: 15px 20px;
    margin-top: -10px;
    border-bottom: 1px solid #e0e0e0;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.profile-menu {
    position: relative;
}
.notification-icon {
    display: inline-flex;
    font-size: 10px;
    align-items: center;
    justify-content: center;
    margin-right: 15px; /* Space between notification and profile icons */
    cursor: pointer;
    width: 24px;
    height: 24px;
}

.notification-icon svg {
    fill: #333; /* Icon color */
    width: 24px;
    height: 24px;
    transition: transform 0.3s ease;
}

.notification-icon:hover svg {
    transform: scale(1.1); /* Hover effect */
}


.before a{
    text-decoration: none;
    color: white;
}


.profile-icon {
    font-size: 28px;
    color: #333;
    cursor: pointer;
    transition: transform 0.3s ease;
}

.profile-icon:hover {
    transform: scale(1.1);
}

/* Dropdown Styling */
.dropdown {
    position: absolute;
    top: 50px; /* Position dropdown below the icon */
    right: 0;
    background-color: #ffffff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
    border-radius: 8px;
    padding: 15px;
    width: 250px;
    display: none; /* Initially hidden */
    z-index: 1000;
    text-align: left;
}

.dropdown h3 {
    margin: 0;
    font-size: 16px;
    color: #333;
    font-weight: bold;
    margin-bottom: 8px;
}

.dropdown p {
    margin: 10px 0;
    font-size: 14px;
    color: #555;
}

.dropdown a {
    display: block;
    margin: 15px 0;
    font-size: 14px;
    color: #555;
    text-decoration: none;
    font-weight: 500;
}

.dropdown a:hover {
    text-decoration: underline;
}

.dropdown hr {
    border: none;
    border-top: 1px solid #ddd;
    margin: 10px 0;
}


.topbar h1 {
    font-size: 24px;
    color: #333;
    margin: 0;
}





      /* Styling for the buttons above the header */
      .top-buttons {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        gap: 10px;
        padding: 10px 20px;
      }

      .top-btn {
        appearance: none;
        border-radius: 8px;
        box-shadow: none;
        min-width: unset;
        position: relative;
        white-space: nowrap;
        width: fit-content;
        border-color: transparent;
        border-width: 1px;
        border-style: solid;
        color: white;
        background-color: rgb(97, 109, 146);
        height: 48px;
        font-weight: bold;
        padding-block: 0px;
        padding-inline: 20px;
        align-items: center;
        display: inline-flex;
        -webkit-box-pack: center;
        justify-content: center;
        text-decoration: none;
      }

      .top-btn:hover {
        background-color: #0056b3;
      }

      /* SVG icon styling */
      .icon {
        margin-left: 15px;
        width: 26px;
        height: 26px;
        /* fill: ; */
      }

      .login-signup a {
        background-color: blue;
        color: white;
        font-weight: 550;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
      }
      .login-signup a:hover {
        background-color: white;
        color: black;
      }

      header {
        background-color: #f8f9fa;
        padding: 15px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 1px solid #ddd;
      }

      .logo {
        font-size: 24px;
        font-weight: bold;
        color: #333;
      }

      /* Wrapper for the search container and dropdowns */
      .search-container-wrapper {
        display: flex;
        align-items: center;
        padding: 20px;
        width: 100%;
        /* Ensure it takes full width */
        box-sizing: border-box;
        /* Include padding in the element's total width */
        overflow: hidden;
        /* Prevent overflow */
      }

      /* Inner search container (search bar and button) */
      .search-container {
        display: flex;
        align-items: center;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 5px;
        background-color: #fff;
        flex: 1;
        /* Take full width */
        margin-right: 15px;
        /* Space between search and dropdowns */
      }

      /* Icon styling */
      .icon {
        width: 30px;
        height: 30px;
        /* margin-right: 10px; */
        fill: white;
        pointer-events: none;
      }

      .search-icon {
        width: 20px;
        height: 20px;
        /* margin-right: 10px; */
        fill: #666;
        pointer-events: none;
      }

      /* Search input field */
      .search-bar {
        padding: 8.3px 15px;
        padding-left: 35px;
        border: none;
        outline: none;
        font-size: 16px;
        border-radius: 5px;
        color: #333;
        width: 100%;
        /* Takes up full width of the container */
        box-sizing: border-box;
        /* Ensure padding is included in width calculation */
      }

      /* Search button styling */
      .search-btn {
        padding: 8px 12px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-left: 10px;
      }

      .search-btn:hover {
        background-color: #0056b3;
      }

      /* Dropdowns next to the search bar */
      .dropdowns {
        display: flex;
        gap: 10px;
        /* Space between the dropdowns */
        flex: 1;
        /* Allow the dropdowns to take up remaining space */
      }

      /* Individual dropdown styling */
      .dropdown {
        padding: 13.5px 12px;
        background-color: rgb(246, 248, 254);
        border-radius: 5px;
        border: 1px solid #ccc;
        font-size: 14px;
        color: #333;
        flex: 1;
        /* Each dropdown takes equal width */
        min-width: 0;
        /* Prevent overflowing */
        box-sizing: border-box;
        /* Include padding and border in width calculation */
        appearance: auto;
        /* Show the default dropdown arrow */
        -webkit-appearance: auto;
        -moz-appearance: auto;
      }

      .filters {
        display: flex;
        justify-content: space-between;
        gap: 15px;
        align-items: center;
        flex-wrap: wrap;
        margin-left: 19px;
        width: 50%;
        /* Set the width of the container to 50% */
      }

      .filter-item {
        flex: 1;

        /* Allow the items to take equal width */
      }

      .filter-item select {
        width: 100%;
        background-color: rgb(246, 248, 254);
        padding: 13.5px 12px;
        font-size: 14px;
        border-radius: 5px;
        border: 1px solid #ccc;
        box-sizing: border-box;
        /* Ensure padding doesn't affect width */
      }

      .filter-btn-wrapper {
        display: flex;
        align-items: center;
        gap: 10px;
        justify-content: center;
        /* Center the button and icon */
      }

      .css-wew9bn {
        color: currentcolor;
        fill: currentcolor;
        flex-shrink: 0;
        height: 24px;
        width: 24px;
      }

      .filter-btn {
        display: inline-flex;
        align-items: center;
        padding: 13.5px 15px;
        background-color: #007bff;
        /* Background color for button */
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 14px;
        transition: background-color 0.3s ease;
        /* Smooth transition for background color */
      }

      .filter-btn svg {
        width: 18px;
        height: 18px;
        margin-right: 8px;
        /* Space between the icon and text */
      }

      .filter-btn:hover {
        background-color: #0056b3;
        /* Change background color on hover */
      }

      .results {
        padding: 20px;
      }

      .results h2 {
        font-size: 20px;
        margin-bottom: 15px;
        margin-top: 20px;
        font-weight: bold;
      }

       .sort {
            display: flex;
            gap: 10px;
            margin-left: -20px;
        }

        .sort button {
            padding: 8px 12px;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border: 1px solid #ccc;
            background-color: rgb(216, 216, 244);
            border-radius: 4px;
            cursor: pointer;
            color: #0073e6;
            margin-top: 20px;
        }


      .programs-container {
        display: flex;
        flex-wrap: wrap; /* Ensures cards wrap to the next line if the screen is too narrow */
        gap: 20px; /* Space between cards */
        justify-content: space-between; /* Distribute cards evenly */
        padding: 20px;
      }

      .program-card {
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 6px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 15px;
        display: flex;
        flex-direction: column;
        gap: 10px;
        flex: 1 1 calc(25% - 20px);
      }

      .program-card h3 {
        font-size: 14.5px;
        font-weight: bold;
        color: #0073e6;
        margin: 0;
        cursor: pointer;
        line-height: 18.5px;
        justify-content: center;
        text-align: center;
        max-width:120%;
        margin-left:30px;
        margin-top:-60px;
      }

      .program-card img{
        margin-top: - 15px;
        height: 40px;
        width: 40px;
        transform:translateX(-8px);
        transform:translateY(-10px);
        margin-left:-10px;
      }

      .program-card h3:hover {
        text-decoration: underline;
      }

      .program-badges {
        display: flex;
        gap: 10px;
        margin: 10px 0;
      }

      .badge {
        font-size: 14px;
        padding: 6px 10px;
        background-color: #0073e6;
        color: white;
        border-radius: 4px;
      }

      .program-details {
        font-size: 16px;
        color: #555;
        display: flex;
        flex-direction: column;
        gap: 5px;
      }

      .success-prediction,
      .fees {
        font-size: 15px;
        color: #333;
      }

      .details-btn {
        margin-top: auto;
        padding: 12px;
        font-size: 18px;
        color: white;
        background-color: rgb(216, 216, 244);
        border: none;
        color: #0073e6;
        border-radius: 4px;
        cursor: pointer;
        text-align: center;
      }

      .student-filters {
        display: flex;
        justify-content: flex-end;
        align-items: center;
      }

      .student-filters button {
        padding: 8px 10px;
        background-color: rgb(216, 216, 244);
        color: #0073e6;
        font-size: 12px;
        border-radius: 4px;
        font-weight: bold;
        border: none;
        cursor: pointer;
      }

      .success {
        border-radius: 5px;
        color: #0073e6;
        background-color: rgb(216, 216, 244);
        border: none;
        margin-left: 200px;
        transform:translateY(-25px);
      }

      .table td {
        font-size: 15px;
      }

      img {
        overflow: hidden;
        border-radius: 50%;
        height: 40px;
        width: 40px;
        size-adjust: inherit;
      }

      .programs-container {
        margin-top: 10px;
      }

      /* pagination */
      .pagination {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 20px;
        gap: 10px;
      }

      .page-btn {
        padding: 8px 12px;
        border: 1px solid #ddd;
        background-color: #f9f9f9;
        cursor: pointer;
        font-size: 17px;
        border-radius: 5px;
        transition: background-color 0.3s, color 0.3s;
      }

      .page-btn.active {
        background-color: #007bff;
        color: white;
        border-color: #007bff;
      }

      .page-btn:hover:not(.active) {
        background-color: #eaeaea;
      }

      .page-btn:disabled {
        background-color: #ddd;
        cursor: not-allowed;
      }



    .sort-btn {
      background-color: #007bff;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      display: inline-flex;
      align-items: center;
      gap: 5px;
    
    }

    .sort{
        position: relative;
        display: inline-block;
    }

    .dropdown-content1 {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      box-shadow: 0px 8px 16px rgba(54, 51, 51, 0.1);
      padding: 10px;
      border: black;
      z-index: 1;
      border-radius: 10px;
      min-width: 320px;
      margin-left: 170px;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .dropdown-content1 p{
        font-size: 19px;
    }

    .dropdown-content1 a {
      color: black;
      text-decoration: none;
      display: block;
      padding: 15px 13px;
      border-radius: 5px;
      font-size: 17px;
    }

    .dropdown-content1 a i{
        font-size: 20px;
     
    }


    #circl{
        margin-left: -3px;
    }
   


    .dropdown-content1 a:hover {
      background-color: #ddd;
    }

    .sort.show .dropdown-content1 {
      display: block;
    }


    .settings-btn {
      margin: 20px;
      padding: 10px 20px;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }


    /* Popup overlay */
    .popup-overlay {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      z-index: 1000;
    }

    /* Popup container */
    .popup {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: white;
      border-radius: 10px;
      width: 550px;
      padding: 20px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    /* Close button */
    .close-btn {
      position: absolute;
      top: -10px;
      right: 10px;
      width: 39px;
      height: 39px;
      background-color: #ddd;
      border: none;
      border-radius: 5px;
      font-size: 20px;
      cursor: pointer;
      text-align: center;
    }

    .close-btn i{
       transform: translateY(-5px);
       transform: translateX(-2px);
    }

    .close-btn:hover {
      background-color: #bbb;
    }

    /* Toggle buttons */
    .toggle-section {
      margin: 20px 0;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }


    .toggle-label {
      font-size: 17px;
      margin-bottom: 10px;
      display: flex;
     
    }

    #tgl{
     margin-left: 300px;
    }

    .toggle-btn {
      position: relative;
      width: 50px;
      height: 25px;
      background-color: #9e9999;
      border-radius: 15px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      margin-left: 290px;
    }

    .toggle-btn::before {
      content: '';
      position: absolute;
      top: 2px;
      left: 2px;
      width: 21px;
      height: 21px;
      background-color: rgb(69, 65, 65);
      border-radius: 50%;
      transition: transform 0.3s ease;
    }

    .toggle-btn.active {
      background-color: #007bff;
    }

    .toggle-btn.active::before {
      transform: translateX(25px);
    }

      /* Responsive Design */
       @media (max-width: 1024px) {
        .top-buttons {
          flex-wrap: wrap;
          justify-content: center;
          gap: 15px;
        }

        .search-container-wrapper {
          flex-direction: column;
          padding: 15px;
        }

        .search-container {
          margin-right: 0;
          margin-bottom: 15px;
        }

        .dropdowns {
          flex-wrap: wrap;
          gap: 15px;
        }

        .filters {
          width: 100%;
          margin-left: 0;
          gap: 10px;
        }

        .filter-item {
          flex-basis: 45%;
        }

        .filter-btn-wrapper {
          flex-direction: column;
          gap: 10px;
        }

        .program-cards {
          grid-template-columns: repeat(2, 1fr);
         
        }
      }

      @media (max-width: 768px) {
        .header {
          flex-direction: column;
          align-items: flex-start;
        }

        .search-container-wrapper {
          padding: 10px;
        }

        .search-bar {
          font-size: 14px;
        }

        .dropdown {
          font-size: 13px;
          padding: 10px;
        }

        .filters {
          flex-direction: column;
          width: 100%;
        }

        .filter-item {
          flex-basis: 100%;
        }

        .top-btn {
          width: 335px;
          margin-right: 40px;
          height: auto;
          font-size: 14px;
          padding: 10px;
        }

        .apply-btn {
          font-size: 12px;
          padding: 8px 10px;
        }

        .program-cards {
          grid-template-columns: 1fr;
         
        }
        
        .pagination{
            display: ruby-text;;
        }
      }

      @media (max-width: 480px) {
        .search-container-wrapper {
          flex-direction: column;
          align-items: stretch;
        }

        .search-container {
          display: flex;
          flex-direction: row;
          align-items: center;
          margin-right: 0;
          margin-bottom: 15px;
          padding: 5px;
        }

        .search-bar {
          flex: 1; 
          padding-left: 35px; 
          font-size: 14px;
        }

        .search-icon {
          
          margin-left: 5px; 
        }

        .dropdowns {
          display: flex;
          flex-direction: column;
          gap: 10px;
        }

        .dropdown {
          font-size: 12px;
          padding: 8px;
          width: 100%; 
          box-sizing: border-box; 
        }

        .filters {
          flex-direction: column;
          align-items: stretch;
          gap: 10px;
        }

        .filter-item select {
          width: 100%; 
          font-size: 12px;
          padding: 10px;
          box-sizing: border-box;
        }

        .filter-btn {
          font-size: 12px;
          padding: 10px;
          width: 100%; 
          box-sizing: border-box;
        }

        .top-buttons {
          flex-direction: column;
          gap: 10px;
          width: 100%;
        }

        .results h2 {
          font-size: 16px;
          margin-bottom: 10px;
        }

        .sort {
          justify-content: center;
          flex-direction: column;
          gap: 10px; 
          width: 100%;
        }

        .sort-btn {
          width: 100%; 
          font-size: 14px;
          padding: 10px;
        }

        .program-cards {
          grid-template-columns: 1fr;
        }
      } 
    </style>
 <br><br><br><br><br>
  

    <!-- Buttons above header -->
    <div class="top-buttons">
      <a href="https://docs.google.com/forms/d/e/1FAIpQLScTHfp1xeeFx5XQ49BVw_wBt6QItwkcsBO9icILsjKLu-FXJw/viewform?usp=dialog" class="top-btn" target="_blank">
        Search Feedback
        <svg
          aria-hidden="true"
          role="img"
          viewBox="0 0 24 24"
          xmlns="http://www.w3.org/2000/svg"
          class="icon">
          <path
            d="M6 7C6 6.44772 6.44772 6 7 6H10V4H7C5.34315 4 4 5.34315 4 7V17C4 18.6569 5.34315 20 7 20H17C18.6569 20 20 18.6569 20 17V14H18V17C18 17.5523 17.5523 18 17 18H7C6.44772 18 6 17.5523 6 17V7Z"></path>
          <path
            d="M12.2929 13.0712L18 7.3641V11H20V4H13V6H16.5357L10.8787 11.657L12.2929 13.0712Z"></path>
        </svg>
      </a>
      <a href="help.html" class="top-btn" target="_blank">
        Search Help & FAQs
        <svg
          aria-hidden="true"
          role="img"
          viewBox="0 0 24 24"
          xmlns="http://www.w3.org/2000/svg"
          class="icon">
          <path
            d="M6 7C6 6.44772 6.44772 6 7 6H10V4H7C5.34315 4 4 5.34315 4 7V17C4 18.6569 5.34315 20 7 20H17C18.6569 20 20 18.6569 20 17V14H18V17C18 17.5523 17.5523 18 17 18H7C6.44772 18 6 17.5523 6 17V7Z"></path>
          <path
            d="M12.2929 13.0712L18 7.3641V11H20V4H13V6H16.5357L10.8787 11.657L12.2929 13.0712Z"></path>
        </svg>
      </a>
    </div>

    <div>
      <div class="search-container-wrapper">
        <div class="search-container">
          <div>
            <svg
              aria-hidden="true"
              role="img"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
              class="search-icon">
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M16.386 18.211C14.885 19.335 13.02 20 11 20 6.03 20 2 15.971 2 11 2 6.03 6.03 2 11 2c4.971 0 9 4.03 9 9 0 2.228-.81 4.267-2.151 5.839l4.827 4.424-1.351 1.474-4.938-4.526ZM18 11c0 3.866-3.134 7-7 7s-7-3.134-7-7 3.134-7 7-7 7 3.134 7 7Z"></path>
            </svg>
          </div>
          <input
            type="text"
            class="search-bar"
            placeholder="What would you like to study?" />
          <!-- <button class="search-btn">Search</button> -->
        </div>
        <div class="dropdowns">
          <select class="dropdown">
            <option>Destination</option>
            <option>USA</option>
            <option>UK</option>
            <option>Canada</option>
          </select>
          <select class="dropdown">
            <option>Institute (School)</option>
            <option>Harvard</option>
            <option>MIT</option>
            <option>Stanford</option>
          </select>
        </div>
      </div>
    </div>

    <main>
      <div class="filters">
        <div class="filter-item">
          <select>
            <option>Program Level</option>
            <option>Undergraduate</option>
            <option>Postgraduate</option>
          </select>
        </div>
        <div class="filter-item">
          <select>
            <option>Field of Study</option>
            <option>Engineering</option>
            <option>Business</option>
          </select>
        </div>
        <div class="filter-item">
          <select>
            <option>Intakes</option>
            <option>Spring</option>
            <option>Fall</option>
          </select>
        </div>
        <div class="filter-item">
          <select>
            <option>Program Tag</option>
          </select>
        </div>
        <div class="filter-btn-wrapper">
          <button class="filter-btn">
            <svg
              style="color: white"
              aria-hidden="true"
              data-icon-color=""
              data-icon-contrast="mid"
              role="img"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
              class="css-wew9bn">
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M6.12602 8C6.57006 9.72523 8.13616 11 10 11C11.8638 11 13.4299 9.72523 13.874 8L21 8V6L13.874 6C13.4299 4.27477 11.8638 3 10 3C8.13616 3 6.57006 4.27477 6.12602 6L3 6V8L6.12602 8ZM8 7C8 5.89543 8.89543 5 10 5C11.1046 5 12 5.89543 12 7C12 8.10457 11.1046 9 10 9C8.89543 9 8 8.10457 8 7Z"></path>
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M16.874 18H21V16H16.874C16.4299 14.2748 14.8638 13 13 13C11.1362 13 9.57006 14.2748 9.12602 16H3V18H9.12602C9.57006 19.7252 11.1362 21 13 21C14.8638 21 16.4299 19.7252 16.874 18ZM15 17C15 15.8954 14.1046 15 13 15C11.8954 15 11 15.8954 11 17C11 18.1046 11.8954 19 13 19C14.1046 19 15 18.1046 15 17Z"></path>
            </svg>
            All Filters
          </button>
        </div>
      </div>
      <hr>
      <div class="results">
        <h2>2000+ Programs Found</h2>
       
        <div class="sort">
          <button class="settings-btn" onclick="showPopup()"><i class="fa-sharp fa-solid fa-gear"></i> Display settings</button>

          <div class="popup-overlay" id="popup-overlay">
            <div class="popup">
                <h3 style="font-weight: bold;">Display Settings</h3><br>
                <h6>You can adjust the following configurations to display additional information on the program cards.</h6>
              <button class="close-btn" onclick="hidePopup()"><i class="fa-solid fa-xmark"></i></button>
              <div class="toggle-section">
                <label class="toggle-label">Show GPA score
                   <div class="toggle-btn" id="tgl" onclick="toggle(this)"> </div>
              </div></label>

              <div class="toggle-section">
                <label class="toggle-label">Show IELTS score
                <div class="toggle-btn" onclick="toggle(this)"></div>
              </div></label>
            </div>
          </div>



          <button class="sort-btn" onclick="toggleDropdown3()">
            Sort <i class="fa-solid fa-arrow-down-short-wide"></i>
           
          </button>

          <div class="dropdown-content1">
            <p>Sort</p>
            <a href="#" id="circl"><i class="fa-solid fa-circle-check"></i> Best Match (Default)</a>
            <a href="#"><i class="fa-solid fa-dollar-sign"></i> Tution Cost (Low to High)</a>
            <a href="#"><i class="fa-solid fa-dollar-sign"></i> Tution Cost (High to Low)</a>
            <a href="#"><i class="fa-solid fa-file-invoice"></i> Application fee(Low to High)</a>
            <a href="#"><i class="fa-solid fa-file-invoice"></i> Application fee(High to Low)</a>
          </div>
            

        </div>


        <div class="programs-container">
          <div class="program-card">
              <img src="{{asset('Dashboard/dp.webp')}}" />
            <h3>
              Justice Institute of British Columbia - New Westminster Campus
            </h3>
            <div class="program-badges">
              <span class="badge">High Job Demand</span>
              <span class="badge">Popular</span>
            </div>



            <div class="program-details">
              <small>Postgraduate Diploma</small>
              <p>Post-Baccalaureate Diploma - Disaster Management</p>
              <hr />
              <table class="table">
                <tbody>
                  <tr>
                    <td>Location</td>
                    <td colspan="2"></td>
                    <td>British Columbia, CAN</td>
                  </tr>
                  <tr>
                    <td>Campus city</td>
                    <td colspan="2"></td>
                    <td>New Westminster</td>
                  </tr>
                  <tr>
                    <td scope="row">Tuition (1st year)</td>
                    <td colspan="2"></td>
                    <td>$18,050 CAD</td>
                  </tr>
                  <tr>
                    <td scope="row">Application fee</td>
                    <td colspan="2"></td>
                    <td>$150 CAD</td>
                  </tr>
                  <tr>
                    <td scope="row">Duration</td>
                    <td colspan="2"></td>
                    <td>24 months</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <p>Success prediction <button class="success">Details</button></p>
            <button class="details-btn">Create application</button>
          </div>

          <!-- card-2 -->
          <div class="program-card">
            <img src="{{asset('Dashboard/dp.webp')}}" />
            <h3>
              Justice Institute of British Columbia - New Westminster Campus
            </h3>
            <div class="program-badges">
              <span class="badge">High Job Demand</span>
              <span class="badge">Popular</span>
            </div>

            <div class="program-details">
              <small>Postgraduate Diploma</small>
              <p>Post-Baccalaureate Diploma - Disaster Management</p>
              <hr />
              <table class="table">
                <tbody>
                  <tr>
                    <td>Location</td>
                    <td colspan="2"></td>
                    <td>British Columbia, CAN</td>
                  </tr>
                  <tr>
                    <td>Campus city</td>
                    <td colspan="2"></td>
                    <td>New Westminster</td>
                  </tr>
                  <tr>
                    <td scope="row">Tuition (1st year)</td>
                    <td colspan="2"></td>
                    <td>$18,050 CAD</td>
                  </tr>
                  <tr>
                    <td scope="row">Application fee</td>
                    <td colspan="2"></td>
                    <td>$150 CAD</td>
                  </tr>
                  <tr>
                    <td scope="row">Duration</td>
                    <td colspan="2"></td>
                    <td>24 months</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <p>Success prediction <button class="success">Details</button></p>
            <button class="details-btn">Create application</button>
          </div>

          <div class="program-card">
             <img src="{{asset('Dashboard/dp.webp')}}" />
            <h3>
              Justice Institute of British Columbia - New Westminster Campus
            </h3>
            <div class="program-badges">
              <span class="badge">High Job Demand</span>
              <span class="badge">Popular</span>
            </div>

            <div class="program-details">
              <small>Postgraduate Diploma</small>
              <p>Post-Baccalaureate Diploma - Disaster Management</p>
              <hr />
              <table class="table">
                <tbody>
                  <tr>
                    <td>Location</td>
                    <td colspan="2"></td>
                    <td>British Columbia, CAN</td>
                  </tr>
                  <tr>
                    <td>Campus city</td>
                    <td colspan="2"></td>
                    <td>New Westminster</td>
                  </tr>
                  <tr>
                    <td scope="row">Tuition (1st year)</td>
                    <td colspan="2"></td>
                    <td>$18,050 CAD</td>
                  </tr>
                  <tr>
                    <td scope="row">Application fee</td>
                    <td colspan="2"></td>
                    <td>$150 CAD</td>
                  </tr>
                  <tr>
                    <td scope="row">Duration</td>
                    <td colspan="2"></td>
                    <td>24 months</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <p>Success prediction <button class="success">Details</button></p>
            <button class="details-btn">Create application</button>
          </div>

          <div class="program-card">
             <img src="{{asset('Dashboard/dp.webp')}}" />
            <h3>
              Justice Institute of British Columbia - New Westminster Campus
            </h3>
            <div class="program-badges">
              <span class="badge">High Job Demand</span>
              <span class="badge">Popular</span>
            </div>

            <div class="program-details">
              <small>Postgraduate Diploma</small>
              <p>Post-Baccalaureate Diploma - Disaster Management</p>
              <hr />
              <table class="table">
                <tbody>
                  <tr>
                    <td>Location</td>
                    <td colspan="2"></td>
                    <td>British Columbia, CAN</td>
                  </tr>
                  <tr>
                    <td>Campus city</td>
                    <td colspan="2"></td>
                    <td>New Westminster</td>
                  </tr>
                  <tr>
                    <td scope="row">Tuition (1st year)</td>
                    <td colspan="2"></td>
                    <td>$18,050 CAD</td>
                  </tr>
                  <tr>
                    <td scope="row">Application fee</td>
                    <td colspan="2"></td>
                    <td>$150 CAD</td>
                  </tr>
                  <tr>
                    <td scope="row">Duration</td>
                    <td colspan="2"></td>
                    <td>24 months</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <p>Success prediction <button class="success">Details</button></p>
            <button class="details-btn">Create application</button>
          </div>

          <div class="program-card">
             <img src="{{asset('Dashboard/dp.webp')}}" />
            <h3>
              Justice Institute of British Columbia - New Westminster Campus
            </h3>
            <div class="program-badges">
              <span class="badge">High Job Demand</span>
              <span class="badge">Popular</span>
            </div>

            <div class="program-details">
              <small>Postgraduate Diploma</small>
              <p>Post-Baccalaureate Diploma - Disaster Management</p>
              <hr />
              <table class="table">
                <tbody>
                  <tr>
                    <td>Location</td>
                    <td colspan="2"></td>
                    <td>British Columbia, CAN</td>
                  </tr>
                  <tr>
                    <td>Campus city</td>
                    <td colspan="2"></td>
                    <td>New Westminster</td>
                  </tr>
                  <tr>
                    <td scope="row">Tuition (1st year)</td>
                    <td colspan="2"></td>
                    <td>$18,050 CAD</td>
                  </tr>
                  <tr>
                    <td scope="row">Application fee</td>
                    <td colspan="2"></td>
                    <td>$150 CAD</td>
                  </tr>
                  <tr>
                    <td scope="row">Duration</td>
                    <td colspan="2"></td>
                    <td>24 months</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <p>Success prediction <button class="success">Details</button></p>
            <button class="details-btn">Create application</button>
          </div>

          <div class="program-card">
             <img src="{{asset('Dashboard/dp.webp')}}" />
            <h3>
              Justice Institute of British Columbia - New Westminster Campus
            </h3>
            <div class="program-badges">
              <span class="badge">High Job Demand</span>
              <span class="badge">Popular</span>
            </div>

            <div class="program-details">
              <small>Postgraduate Diploma</small>
              <p>Post-Baccalaureate Diploma - Disaster Management</p>
              <hr />
              <table class="table">
                <tbody>
                  <tr>
                    <td>Location</td>
                    <td colspan="2"></td>
                    <td>British Columbia, CAN</td>
                  </tr>
                  <tr>
                    <td>Campus city</td>
                    <td colspan="2"></td>
                    <td>New Westminster</td>
                  </tr>
                  <tr>
                    <td scope="row">Tuition (1st year)</td>
                    <td colspan="2"></td>
                    <td>$18,050 CAD</td>
                  </tr>
                  <tr>
                    <td scope="row">Application fee</td>
                    <td colspan="2"></td>
                    <td>$150 CAD</td>
                  </tr>
                  <tr>
                    <td scope="row">Duration</td>
                    <td colspan="2"></td>
                    <td>24 months</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <p>Success prediction <button class="success">Details</button></p>
            <button class="details-btn">Create application</button>
          </div>

          <div class="program-card">
            <img src="{{asset('Dashboard/dp.webp')}}" />
            <h3>
              Justice Institute of British Columbia - New Westminster Campus
            </h3>
            <div class="program-badges">
              <span class="badge">High Job Demand</span>
              <span class="badge">Popular</span>
            </div>

            <div class="program-details">
              <small>Postgraduate Diploma</small>
              <p>Post-Baccalaureate Diploma - Disaster Management</p>
              <hr />
              <table class="table">
                <tbody>
                  <tr>
                    <td>Location</td>
                    <td colspan="2"></td>
                    <td>British Columbia, CAN</td>
                  </tr>
                  <tr>
                    <td>Campus city</td>
                    <td colspan="2"></td>
                    <td>New Westminster</td>
                  </tr>
                  <tr>
                    <td scope="row">Tuition (1st year)</td>
                    <td colspan="2"></td>
                    <td>$18,050 CAD</td>
                  </tr>
                  <tr>
                    <td scope="row">Application fee</td>
                    <td colspan="2"></td>
                    <td>$150 CAD</td>
                  </tr>
                  <tr>
                    <td scope="row">Duration</td>
                    <td colspan="2"></td>
                    <td>24 months</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <p>Success prediction <button class="success">Details</button></p>
            <button class="details-btn">Create application</button>
          </div>

          <div class="program-card">
             <img src="{{asset('Dashboard/dp.webp')}}" />
            <h3>
              Justice Institute of British Columbia - New Westminster Campus
            </h3>
            <div class="program-badges">
              <span class="badge">High Job Demand</span>
              <span class="badge">Popular</span>
            </div>

            <div class="program-details">
              <small>Postgraduate Diploma</small>
              <p>Post-Baccalaureate Diploma - Disaster Management</p>
              <hr />
              <table class="table">
                <tbody>
                  <tr>
                    <td>Location</td>
                    <td colspan="2"></td>
                    <td>British Columbia, CAN</td>
                  </tr>
                  <tr>
                    <td>Campus city</td>
                    <td colspan="2"></td>
                    <td>New Westminster</td>
                  </tr>
                  <tr>
                    <td scope="row">Tuition (1st year)</td>
                    <td colspan="2"></td>
                    <td>$18,050 CAD</td>
                  </tr>
                  <tr>
                    <td scope="row">Application fee</td>
                    <td colspan="2"></td>
                    <td>$150 CAD</td>
                  </tr>
                  <tr>
                    <td scope="row">Duration</td>
                    <td colspan="2"></td>
                    <td>24 months</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <p>Success prediction <button class="success">Details</button></p>
            <button class="details-btn">Create application</button>
          </div>
        </div>
        <br />

        <div class="pagination">
          <button class="page-btn prev-btn" disabled>Previous</button>
          <div class="page-numbers">
            <button class="page-btn active">1</button>
            <button class="page-btn">2</button>
            <button class="page-btn">3</button>
            <button class="page-btn">4</button>
            <button class="page-btn">5</button>
            <!-- Add more as needed -->
          </div>
          <button class="page-btn next-btn">Next</button>
        </div>
      </div>
    </main>
    <br />
    <br />

    <script src="explore.js"></script>

    <script>
          const buttons = document.querySelectorAll('.country-btn');
const imagesDivs = document.querySelectorAll('.images');

buttons.forEach(button => {
  button.addEventListener('click', () => {
    // Remove active class from all buttons
    buttons.forEach(btn => btn.classList.remove('active'));
    
    // Add active class to clicked button
    button.classList.add('active');
    
    // Hide all images
    imagesDivs.forEach(div => div.style.display = 'none');
    
    // Get the country related to the clicked button
    const country = button.getAttribute('data-country');
    
    // Show the related images
    const countryImages = document.getElementById(country);
    countryImages.style.display = 'block';
    countryImages.style.display = 'flex';
  });
});

// Set the first button and content as active by default
document.querySelector('.country-btn').click();



var swiper = new Swiper(".testimonial-wrapper", {
            slidesPerView: 1,
            slidesPerGroup: 1,
            spaceBetween: 30,
            loop: true,
            speed: 1300,
            autoplay: {
              delay: 2000,  // 2 seconds
              disableOnInteraction: false,
            },
            pagination: {
              el: ".swiper-pagination",
              clickable: true,
            },
          });


         
          document.addEventListener('DOMContentLoaded', function () {
    // Fetch country data
    fetch('https://restcountries.com/v3.1/all')
      .then(response => response.json())
      .then(countries => {
        // Select the dropdown element
        const countrySelect = document.getElementById('country-select');
        
        // Loop through the countries and create options
        countries.forEach(country => {
          const option = document.createElement('option');
          option.value = country.name.common;  // Use the common country name as value
          option.textContent = country.name.common;  // Display the country name
          countrySelect.appendChild(option);
        });

        // Initialize Choices.js for the dropdown
        new Choices('#country-select', {
          searchEnabled: true,  // enables search functionality
          itemSelectText: 'Press to select',  // placeholder for the dropdown
        });
      })
      .catch(error => console.error('Error fetching countries:', error));
  });
  
  
  
    
        
        
        
        document.getElementById("contactForm").addEventListener("submit", function(event) {
    event.preventDefault();

    let isValid = true;
    let fields = ["country", "school", "firstName", "lastName", "email", "title", "phone"];
    
    fields.forEach(field => {
        let input = document.getElementById(field);
        let error = document.getElementById(field + "Error");
        if (!input.value.trim()) {
            error.style.display = "block";
            isValid = false;
        } else {
            error.style.display = "none";
        }
    });

    let checkbox1 = document.getElementById("checkbox1");
    let checkboxError1 = document.getElementById("checkboxError1");
    if (!checkbox1.checked) {
        checkboxError1.style.display = "block";
        isValid = false;
    } else {
        checkboxError1.style.display = "none";
    }

    if (isValid) {
        document.getElementById("thankYouModal").style.display = "block";
    }
});

function closeModal() {
    document.getElementById("thankYouModal").style.display = "none";
}



document.getElementById("workWithUsBtn").addEventListener("click", function(event) {
    event.preventDefault(); // Prevent default behavior (if it's a link)
    
    // Scroll to the form smoothly
    document.getElementById("workWithUsForm").scrollIntoView({
        behavior: "smooth"
    });
});


document.getElementById("letsgetstartedbtn").addEventListener("click", function(event) {
    event.preventDefault(); // Prevent default behavior (if it's a link)
    
    // Scroll to the form smoothly
    document.getElementById("letsgetstartedc").scrollIntoView({
        behavior: "smooth"
    });
});

</script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
 <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
   
