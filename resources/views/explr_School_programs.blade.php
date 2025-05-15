@extends('frontent.layouts.app')
@section('title', 'EduX | Student')
@section('content')

<style>
    /* Global Styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
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
    fill: ;
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
}

.sort {
    display: flex;
    justify-content: flex-end;
}

.sort-btn {
    background-color: #007bff;
    color: white;
    padding: 8px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.program-cards {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    padding: 20px;
}

.program-card-header {
    display: flex;
    align-items: center; /* Align items vertically in the center */
    gap: 15px; /* Space between the image and text */
    margin-bottom: 15px; /* Add space below the header */
}

/* Institute Image */
.institute-img {
    width: 60px; /* Adjust width */
    height: 60px; /* Adjust height */
    object-fit: cover; /* Ensure the image maintains its aspect ratio */
    border-radius: 50%; /* Optional: Make the image circular */
}

.program-link {
    display: flex;
    font-size: 16px;
    color: black;
    text-decoration: underline;
}

.program-link:hover {
    text-decoration-color: #0056b3;
}

.program-card h3 a {
    font-size: 18px;
    color: #007bff;
    text-decoration: none;
    font-weight: bold;
}

.program-card p a {
    color: #555;
    font-size: 18px;
    text-decoration: underline;

}
.program-card p a:hover {
    text-decoration: underline;
    text-decoration-color: #007bff;
}

.program-details {
    list-style: none;
    padding: 0;
    margin: 10px 0;
}

.program-details li {
    background-color: #f1f1f1;
    display: inline-block;
    margin-right: 8px;
    padding: 5px 10px;
    border-radius: 5px;
    font-size: 12px;
    color: #333;
}

.location, .cost-duration, .success-prediction {
    margin: 10px 0;
}

.location p, .cost-duration p, .success-prediction p {
    font-size: 14px;
    color: #555;
}

.apply-btn {
    display: inline-block;
    background-color: #007bff;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    font-size: 14px;
    cursor: pointer;
    text-align: center;
    width: 100%;
    margin-top: 10px;
}

.apply-btn:hover {
    background-color: #0056b3;
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
    font-size: 14px;
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
        /* 2 cards per row on medium screens */
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
        /* 1 card per row on smaller screens */
    }
}

@media (max-width: 480px) {

    .search-container-wrapper {
        flex-direction: column;
        align-items: stretch;
    }

    .search-container {
        display: flex;
        flex-direction: row; /* Ensure icon and input are in a row */
        align-items: center;
        margin-right: 0;
        margin-bottom: 15px;
        padding: 5px; /* Adjust padding for compactness */
    }

    .search-bar {
        flex: 1; /* Take remaining space */
        padding-left: 35px; /* Maintain padding for search icon */
        font-size: 14px;
    }

    .search-icon {
        /* position: absolute; */
        margin-left: 5px; /* Proper spacing */
    }

    .dropdowns {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .dropdown {
        font-size: 12px;
        padding: 8px;
        width: 100%; /* Ensure full width */
        box-sizing: border-box; /* Include padding in width */
    }

    .filters {
        flex-direction: column;
        align-items: stretch; /* Ensure full width */
        gap: 10px;
    }

    .filter-item select {
        width: 100%; /* Uniform width */
        font-size: 12px;
        padding: 10px;
        box-sizing: border-box;
    }

    .filter-btn {
        font-size: 12px;
        padding: 10px;
        width: 100%; /* Match full width of dropdowns */
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
        gap: 10px; /* Add spacing between sort elements */
        width: 100%;
    }

    .sort-btn {
        width: 100%; /* Full width for mobile */
        font-size: 14px;
        padding: 10px;
    }

    .program-cards {
        grid-template-columns: 1fr;
    }


}


.navbar-nav .nav-link:hover{
    color:white;
}
</style>


    <br>
<br><br><br><br>
    <!-- Buttons above header -->
    <div class="top-buttons">
        <a href="#" class="top-btn" target="_blank">
            Search Feedback
            <svg aria-hidden="true" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="icon">
                <path
                    d="M6 7C6 6.44772 6.44772 6 7 6H10V4H7C5.34315 4 4 5.34315 4 7V17C4 18.6569 5.34315 20 7 20H17C18.6569 20 20 18.6569 20 17V14H18V17C18 17.5523 17.5523 18 17 18H7C6.44772 18 6 17.5523 6 17V7Z">
                </path>
                <path d="M12.2929 13.0712L18 7.3641V11H20V4H13V6H16.5357L10.8787 11.657L12.2929 13.0712Z"></path>
            </svg>
        </a>
        <a href="#" class="top-btn" target="_blank">
            Search Help & FAQs
            <svg aria-hidden="true" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="icon">
                <path
                    d="M6 7C6 6.44772 6.44772 6 7 6H10V4H7C5.34315 4 4 5.34315 4 7V17C4 18.6569 5.34315 20 7 20H17C18.6569 20 20 18.6569 20 17V14H18V17C18 17.5523 17.5523 18 17 18H7C6.44772 18 6 17.5523 6 17V7Z">
                </path>
                <path d="M12.2929 13.0712L18 7.3641V11H20V4H13V6H16.5357L10.8787 11.657L12.2929 13.0712Z"></path>
            </svg>
        </a>
    </div>

    <div>
        <div class="search-container-wrapper">
            <div class="search-container">
                <div>
                    <svg aria-hidden="true" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                        class="search-icon">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M16.386 18.211C14.885 19.335 13.02 20 11 20 6.03 20 2 15.971 2 11 2 6.03 6.03 2 11 2c4.971 0 9 4.03 9 9 0 2.228-.81 4.267-2.151 5.839l4.827 4.424-1.351 1.474-4.938-4.526ZM18 11c0 3.866-3.134 7-7 7s-7-3.134-7-7 3.134-7 7-7 7 3.134 7 7Z">
                        </path>
                    </svg>
                </div>
                <input type="text" class="search-bar" placeholder="What would you like to study?">
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
                    <svg style="color: white;" aria-hidden="true" data-icon-color="" data-icon-contrast="mid" role="img"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="css-wew9bn">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M6.12602 8C6.57006 9.72523 8.13616 11 10 11C11.8638 11 13.4299 9.72523 13.874 8L21 8V6L13.874 6C13.4299 4.27477 11.8638 3 10 3C8.13616 3 6.57006 4.27477 6.12602 6L3 6V8L6.12602 8ZM8 7C8 5.89543 8.89543 5 10 5C11.1046 5 12 5.89543 12 7C12 8.10457 11.1046 9 10 9C8.89543 9 8 8.10457 8 7Z">
                        </path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M16.874 18H21V16H16.874C16.4299 14.2748 14.8638 13 13 13C11.1362 13 9.57006 14.2748 9.12602 16H3V18H9.12602C9.57006 19.7252 11.1362 21 13 21C14.8638 21 16.4299 19.7252 16.874 18ZM15 17C15 15.8954 14.1046 15 13 15C11.8954 15 11 15.8954 11 17C11 18.1046 11.8954 19 13 19C14.1046 19 15 18.1046 15 17Z">
                        </path>
                    </svg>
                    All Filters
                </button>

            </div>
        </div>



        <div class="results">
            <h2>2000+ Programs Found</h2>
            <div class="sort">
                <button class="sort-btn">Sort <i class="fas fa-sort"></i></button>
            </div>


            <div class="program-cards">
                <!-- Card 1 -->
                <div class="program-card">
                    <div class="program-card-header">
                        <img src="{{asset('images/images.png')}}" alt="Algoma University" class="institute-img">
                        <h3>
                            <a href="https://www.algomau.ca" class="program-link" target="_blank">Algoma University -
                                Sault Ste. Marie</a>
                        </h3>
                    </div>
                    <p>Postgraduate Certificate</p>
                    <p><a href="https://example-link.com" class="program-link-2">Graduate Certificate - Environmental
                            Science</a></p>
                    <ul class="program-details">
                        <li><strong>Fast Acceptance</strong></li>
                        <li><strong>Instant Offer</strong></li>
                        <li><strong>Popular</strong></li>
                        <li><strong>Prime</strong></li>
                    </ul>
                    <br>
                    <br>
                    <hr>
                    <div class="location">
                        <p><strong>Location</strong>: Ontario, CAN</p>
                        <p><strong>Campus city</strong>: Sault Ste. Marie</p>
                    </div>

                    <div class="cost-duration">
                        <p><strong>Tuition (1st year)</strong>: $20,000 CAD</p>
                        <p><strong>Application fee</strong>: $125 CAD</p>
                        <p><strong>Duration</strong>: 12 months</p>
                    </div>

                    <div class="success-prediction">
                        <p><strong>Success prediction</strong>: Very High</p>
                        <p><strong>Details</strong>: Sep 2025 - Sep 2026</p>
                    </div>

                    <button class="apply-btn">Create Application</button>
                </div>

                <!-- card-2 -->
                <div class="program-card">
                    <div class="program-card-header">
                        <img src="{{asset('images/images.png')}}" alt="Algoma University" class="institute-img">
                        <h3>
                            <a href="https://www.algomau.ca" class="program-link" target="_blank">Algoma University -
                                Sault Ste. Marie</a>
                        </h3>
                    </div>
                    <p>Postgraduate Certificate</p>
                    <p><a href="https://example-link.com" class="program-link-2">Graduate Certificate - Environmental
                            Science</a></p>
                    <ul class="program-details">
                        <li><strong>Fast Acceptance</strong></li>
                        <li><strong>Instant Offer</strong></li>
                        <li><strong>Popular</strong></li>
                        <li><strong>Prime</strong></li>
                    </ul>
                    <br>
                    <br>
                    <hr>
                    <div class="location">
                        <p><strong>Location</strong>: Ontario, CAN</p>
                        <p><strong>Campus city</strong>: Sault Ste. Marie</p>
                    </div>

                    <div class="cost-duration">
                        <p><strong>Tuition (1st year)</strong>: $20,000 CAD</p>
                        <p><strong>Application fee</strong>: $125 CAD</p>
                        <p><strong>Duration</strong>: 12 months</p>
                    </div>

                    <div class="success-prediction">
                        <p><strong>Success prediction</strong>: Very High</p>
                        <p><strong>Details</strong>: Sep 2025 - Sep 2026</p>
                    </div>

                    <button class="apply-btn">Create Application</button>
                </div>

                <!-- card -3 -->
                <div class="program-card">
                    <div class="program-card-header">
                        <img src="{{asset('images/images.png')}}" alt="Algoma University" class="institute-img">
                        <h3>
                            <a href="https://www.algomau.ca" class="program-link" target="_blank">Algoma University -
                                Sault Ste. Marie</a>
                        </h3>
                    </div>
                    <p>Postgraduate Certificate</p>
                    <p><a href="https://example-link.com" class="program-link-2">Graduate Certificate - Environmental
                            Science</a></p>
                    <ul class="program-details">
                        <li><strong>Fast Acceptance</strong></li>
                        <li><strong>Instant Offer</strong></li>
                        <li><strong>Popular</strong></li>
                        <li><strong>Prime</strong></li>
                    </ul>
                    <br>
                    <br>
                    <hr>
                    <div class="location">
                        <p><strong>Location</strong>: Ontario, CAN</p>
                        <p><strong>Campus city</strong>: Sault Ste. Marie</p>
                    </div>

                    <div class="cost-duration">
                        <p><strong>Tuition (1st year)</strong>: $20,000 CAD</p>
                        <p><strong>Application fee</strong>: $125 CAD</p>
                        <p><strong>Duration</strong>: 12 months</p>
                    </div>

                    <div class="success-prediction">
                        <p><strong>Success prediction</strong>: Very High</p>
                        <p><strong>Details</strong>: Sep 2025 - Sep 2026</p>
                    </div>

                    <button class="apply-btn">Create Application</button>
                </div>



            </div>
            <br>

            <div class="pagination">
                <button class="page-btn prev-btn" disabled>Previous</button>
                <div class="page-numbers">
                    <button class="page-btn active">1</button>
                    <button class="page-btn">2</button>
                    <button class="page-btn">3</button>
                    <button class="page-btn">4</button>
                    <button class="page-btn">5...</button>
                    <!-- Add more as needed -->
                </div>
                <button class="page-btn next-btn">Next</button>
            </div>
        </div>
    </main>
    <br>
     <br>



   <script src="explore.js"></script>

<script>
document.addEventListener("DOMContentLoaded", () => {
    const buttons = document.querySelectorAll(".tab-button2");
    const videoElement = document.getElementById("video-player2");
    const videoSource = document.getElementById("video-source2");

    // Define video paths for each tab
    const videoSets = {
        "students-video": "http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ElephantsDream.mp4",
        "recruitment-partners-video": "http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerEscapes.mp4"
    };

    buttons.forEach((button) => {
        button.addEventListener("click", () => {
            // Remove active class from all buttons
            buttons.forEach((btn) => btn.classList.remove("active2"));

            // Add active class to the clicked button
            button.classList.add("active2");

            // Update video source based on the clicked button
            const target = button.getAttribute("data-target");
            videoSource.src = videoSets[target];

            // Load and play the new video
            videoElement.load();
            // videoElement.play();
        });
    });

    // Trigger click on the default active button to load its video
    document.querySelector(".tab-button2.active2").click();
});




document.addEventListener("DOMContentLoaded", () => {
  const buttons = document.querySelectorAll(".tab-button");
  const videoElement = document.getElementById("video-player");
  const videoSource = document.getElementById("video-source");

  // Define video paths for each tab
  const videoSets = {
    "students-video": "http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4",
    "recruitment-partners-video": "http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerEscapes.mp4",
    "partner-institutions-video": "http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerBlazes.mp4"
  };

  // Set the active button class on page load
  const defaultActiveButton = document.querySelector(".tab-button.active1");
  const defaultTarget = defaultActiveButton.getAttribute("data-target");
  const defaultVideo = videoSets[defaultTarget];
  videoSource.src = defaultVideo;
  videoElement.load();
  // videoElement.play();

  buttons.forEach((button) => {
    button.addEventListener("click", () => {
      // Remove active class from all buttons
      buttons.forEach((btn) => btn.classList.remove("active1"));

      // Add active class to the clicked button
      button.classList.add("active1");

      // Update video source based on the clicked button
      const target = button.getAttribute("data-target");
      videoSource.src = videoSets[target];

      // Load and play the new video
      videoElement.load();
     // videoElement.play();
    });
  });
});




document.addEventListener("DOMContentLoaded", () => {
  const buttons = document.querySelectorAll(".tab-btn");
  const tabContents = document.querySelectorAll(".tab-content");
  const heroImages = document.querySelector(".hero-images");

  // Define image sets for each tab
  const imageSets = {
    students: [
      "images/360_F_573916765_xyMxUAT72t77NwxVqdTkIRYDfcemr3HV.webp",
      "images/Canada-Study-Permit-Processing-Times-Falling-q8awoecm53hn8hwocxuqxnf3deq9nnh2p9klnrj2dc.png",
      "images/institutions.jpg"
    ],
    "recruitment-partners": [
      "images/Canada-Study-Permit-Processing-Times-Falling-q8awoecm53hn8hwocxuqxnf3deq9nnh2p9klnrj2dc.png",
      "images/institutions.jpg",
      "images/360_F_573916765_xyMxUAT72t77NwxVqdTkIRYDfcemr3HV.webp"
    ],
    "partner-institutions": [
      "images/institutions.jpg",
      "images/360_F_573916765_xyMxUAT72t77NwxVqdTkIRYDfcemr3HV.webp",
      "images/Canada-Study-Permit-Processing-Times-Falling-q8awoecm53hn8hwocxuqxnf3deq9nnh2p9klnrj2dc.png"
    ],
  };

  buttons.forEach((button) => {
    button.addEventListener("click", () => {
      // Remove active class from all buttons
      buttons.forEach((btn) => btn.classList.remove("active"));

      // Add active class to the clicked button
      button.classList.add("active");

      // Hide all tab contents
      tabContents.forEach((content) => (content.style.display = "none"));

      // Show the content corresponding to the clicked button
      const target = button.getAttribute("data-target");
      document.getElementById(target).style.display = "block";

      // Update images for the active tab
      const images = imageSets[target];
      heroImages.innerHTML = ""; // Clear current images
      images.forEach((src, index) => {
        const imageCard = document.createElement("div");
        imageCard.className = `image-card`;
        imageCard.style.zIndex = 3 - index; // Adjust stacking
        imageCard.style.transform = `translateX(${(index - 1) * 50}%) translateY(${index * 20}px)`; // Adjust positions
        imageCard.innerHTML = `<img src="${src}" alt="Image ${index + 1}">`;
        heroImages.appendChild(imageCard);
      });
    });
  });

  // Trigger click on the default active button to load its images
  document.querySelector(".tab-btn.active").click();
});


document.addEventListener('DOMContentLoaded', function () {
  // Get all the buttons and content sections
  const buttons = document.querySelectorAll('.tab-button');
  const sections = document.querySelectorAll('.content');

  // Add event listener to each button
  buttons.forEach(button => {
    button.addEventListener('click', function () {
      // Get the target section ID
      const target = this.getAttribute('data-target');

      // Hide all content sections
      sections.forEach(section => {
        section.classList.remove('active-content');
      });

      // Show the content section corresponding to the button clicked
      const activeSection = document.getElementById(target);
      activeSection.classList.add('active-content');
    });
  });
});
</script>

