<?php


if(isset($_POST["submit"])){
  $name=$_POST["name"];
  $age=$_POST["age"];
  $gender=$_POST["gender"];
  $phone=$_POST["phone"];
  $email=$_POST["email"];
  $teaquality=$_POST["teaquality"];
  $price=$_POST["price"];
  $packagequality=$_POST["packagequality"];

  $conn= mysqli_connect("localhost", "root", "", "rudra");
  $query="INSERT INTO feedback VALUES('', '$name', '$age', '$gender', '$phone', '$email', '$teaquality', '$price', '$packagequality')";
  mysqli_query($conn, $query);


}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rudraksha Welfare Foundation</title>
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,200;0,400;0,500;1,300&family=Lora:ital,wght@0,500;0,600;1,400;1,600&family=Roboto:wght@500&family=Urbanist:wght@200;300;400;500;600&family=Varela+Round&display=swap"
      rel="stylesheet"
    />
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
    crossorigin="anonymous"
    />
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  </head>

  <body>
  <header>
      <section class="section-1">
        <img src="./Images/Website Header Strip.png" alt="" style="align-items: center; width: 100%;">
        
      </section>
      <center><video height="100%" width="100%" autoplay loop muted>
        <source src="VISION STATEMENT ANIMATION.mp4" type="video/mp4">  
      </video></center>
      <nav
        class="navbar navbar-expand-sm navbar-dark bg-dark mb-0"  
      >
        <div class="container-fluid">
          <button
            class="navbar-toggler"
            type="button"            
            data-toggle="collapse"
            data-target="#navbarNavDropdown"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <div class="ps-3">
                <li class="nav-item">
                  <a class="nav-link"      
                    href="index.html"
                    style="
                      font-family: 'Open Sans', sans-serif;
                      color: white;
                    ">Home</a>
                </li>
              </div>
              <div class="ps-3">
                <li class="nav-item">
                  <a class="nav-link"
                    href="agenda.html"                                       
                    style="
                      font-family: 'Open Sans', sans-serif;                     
                      color: white;"
                    >Agenda</a
                  >
                </li>
              </div>
              <div class="ps-3">
                <li class="nav-item">
                  <a
                    class="nav-link"
                    href="aboutus.html"                   
                    style="
                      font-family: 'Open Sans', sans-serif;
                      
                      color: white;
                    "
                    >About Us</a
                  >
                </li>
              </div>
              <div class="ps-3">
                <li class="nav-item">
                  <a
                    class="nav-link"                    
                    href="vision.html"                   
                    style="
                      font-family: 'Open Sans', sans-serif;
                      color: white;
                    "
                    >Vision</a
                  >
                </li>
              </div>
              <div class="ps-3">
                <li class="nav-item">
                  <a
                    class="nav-link"                   
                    href="corevalues.html"                    
                    style="
                      font-family: 'Open Sans', sans-serif;                      
                      color: white;
                    "
                    >Core Values</a
                  >
                </li>
              </div>
              <div class="ps-3">
                <li class="nav-item">
                  <a
                    class="nav-link"
                    href="mission.html"              
                    style="
                      font-family: 'Open Sans', sans-serif;
                      color: white;
                    "
                    >Mission</a
                  >
                </li>
              </div>
              <div class="ps-3">
                <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    id="navbarDropdownMenuLink"                   
                    data-bs-toggle="dropdown"
                    role="button"                   
                    aria-expanded="false"
                    style="                      
                      font-family: 'Open Sans', sans-serif;  
                      color: white;"
                  >
                    Projects
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li>
                      <a class="dropdown-item" href="pr1.html">1. Art, Literature, Culture & Religion</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pr2.html">2. Blood Donation</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pr3.html">3. Drug De-Addiction</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pr4.html">4. Environment Armour</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pr5.html">5. Gender Justice</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pr6.html">6. Gracious Justice</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pr7.html">7. Human Rights</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pr8.html"
                        >8. Old Age, Orphanage & Blind Home</a
                      >
                    </li>
                    <li>
                      <a class="dropdown-item" href="pr9.html"
                        >9. Sports Training Support</a
                      >
                    </li>
                    <li>
                      <a class="dropdown-item" href="pr10.html"
                        >10. True Eternal Warriors</a
                      >
                    </li>
                    <li>
                      <a class="dropdown-item" href="pr11.html"
                        >11. Training & Skill Enhancement</a
                      >
                    </li>
                    <li>
                      <a class="dropdown-item" href="pr12.html"
                        >12. True Wisdom Devotees</a
                      >
                    </li>
                    <li>
                      <a class="dropdown-item" href="pr13.html"
                        >13. Vigour and Vitality</a
                      >
                    </li>
                    <li>
                      <a class="dropdown-item" href="pr14.html"
                        >14. Voiceless Souls Protectin</a
                      >
                    </li>
                    <li>
                      <a class="dropdown-item" href="pr15.html"
                        >15. Women Empowerment</a
                      >
                    </li>
                  </ul>
                </li>
              </div>
              <div class="ps-3">
                <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle"
                    href="#"                   
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                    style="
                      
                      font-family: 'Open Sans', sans-serif;
                      
                      color: white;
                    "
                  >
                    Orniogram
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="orniogram.html">Orniogram</a></li>
                    <li><a class="dropdown-item" href="management.html">Management</a></li>
                    <li>
                      <a class="dropdown-item" href="codeofconduct.html">Code of Conduct</a>
                    </li>
                  </ul>
                </li>
              </div>
              <div class="ps-3">
                <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                    style="
                     
                      font-family: 'Open Sans', sans-serif;
                      
                      color: white;
                    "
                  >
                    Career
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="recruitment.html">Recruitments</a></li>
                    <li>
                      <a class="dropdown-item" href="#">Interview form</a>
                    </li>
                    <li><a class="dropdown-item" href="#">Joining form</a></li>
                  </ul>
                </li>
              </div>
              <div class="ps-3">
                <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle"
                    href="#"                   
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                    style="
                      
                      font-family: 'Open Sans', sans-serif;
                      
                      color: white;
                    "
                  >
                    Login
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Numero</a></li>
                    <li><a class="dropdown-item" href="#">Employee</a></li>
                    <li><a class="dropdown-item" href="#">RMS</a></li>
                  </ul>
                </li>
              </div>
              <div class="ps-3">
                <li class="nav-item">
                  <a
                    class="nav-link"
                    href="refundpolicy.html"                                      
                    style="
                      font-family: 'Open Sans', sans-serif;
                      
                      color: white;
                      
                    "
                    >Refund Policy</a
                  >
                </li>
              </div>
              <div class="ps-3">
                <li class="nav-item">
                  <a
                    class="nav-link"
                    href="crm.html"                                      
                    style="
                      font-family: 'Open Sans', sans-serif;                     
                      color: white;
                    "
                    >CRM</a
                  >
                </li>
              </div>
              <div class="ps-3">
                <li class="nav-item">
                  <a
                    class="nav-link"
                    href="faq.html"                   
                    style="
                      font-family: 'Open Sans', sans-serif;                     
                      color: white;
                    "
                    >FAQ</a
                  >
                </li>
              </div>
              <div class="ps-3">
                <li class="nav-item">
                  <a
                    class="nav-link"                  
                    href="#"                   
                    style="
                      font-family: 'Open Sans', sans-serif;                                          
                      color: white;
                    "
                    >Contact Us</a
                  >
                </li>
              </div>
              <div class="ps-3">
                <li class="nav-item">
                  <a
                    class="nav-link"              
                    href="survey.html"
                    style="
                      font-family: 'Open Sans', sans-serif;
                      color: white;
                    "
                    >Survey</a
                  >
                </li>
              </div>
            </ul>
          </div>
        </div>
      </nav>
    </header>

      <div class="feedback-header">
        <img src="./Images/survey1.jpg">
        <h2>FEEDBACK FORM</h2>
      </div>
      <div class="feedbackmain container">
        <div class="feedbackdiv1heading">
            <h4>General Information</h4>
            <hr>
        </div>
        <form method="POST">
            <div class="feedbackdiv1">
              <div>
                <label for="FirstName">Name</label>
                <input type="text" required class="form-control" id="FirstName" name="name" placeholder="Enter your name" value>
              </div>
              
              <div>
                <label for="age" >Age</label>
                <input type="text" class="form-control" name="age" placeholder="0" value>
              </div>
           
            <div>
              <label for="gender">Gender</label>
              <select name="gender" id="gender" class="form-control">
                <option>Select</option>
                <option>Male</option>
                <option>Female</option>
                <option>Transgender</option>
              </select>
            </div>
            <div>
              <label for="phone">Phone Number</label>
              <input type="number" class="form-control" name="phone" placeholder="Enter Phone No." >
            </div>
            <div>
              <label for="email">Email</label>
              <input type="text" class="form-control" id="email" name="email" placeholder="Enter your Email" value>
            </div>
            </div>
        
        <div class="feedbackdiv1heading">
          <h4>Quality Feedback</h4>
          <hr>
        </div>
        <div class="feedbackdiv2">
          <div class="special">
              <label for="tea">Have You Tried Siddhi Tea?</label>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1">
            <label class="form-check-label" for="inlineRadio1">
              Yes
            </label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1">
            <label class="form-check-label" for="inlineRadio1">
              No
            </label>
          </div>
          </div>
          <div>
              <label for="quality">Siddhi Tea Quality </label>
              <select name="teaquality" id="teabrand" class="form-control">
                <option>Select</option>
              <option>Excellent</option>
              <option>Good</option>
              <option>Average</option>
              <option>Poor
              </option>
              
              </select>
          </div>
          <div>
              <label for="product">Siddhi Price</label>
              <select name="price" id="product" class="form-control">
                <option>Select</option>
                <option>Perfect</option>
                <option>Slightly High</option>
                <option>Expensive</option>
          
      
              
              </select>
          </div>
          <div>
            <label for="product">Packaging Quality</label>
            <select name="packagequality" id="product" class="form-control">
              <option>Select</option>
              <option>Excellent</option>
              <option>Good</option>
              <option>Average</option>
              <option>Poor
              </option>
            </select>
        </div>
        </div>
      
       
            
            <div class="feedbackdiv3">
              <button type="submit" class="btn btn-outline-info" name="submit" value="submit">Submit Data</button>
            </div>
          </form>
      </div>
      

  </body>
  </html>