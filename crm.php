
<?php
require('dbcon.php');
if(isset($_POST['Signin'])){
  $query="SELECT * FROM `admin` WHERE `admin_id`='$_POST[username]' AND `admin_password`='$_POST[password]'";
  $result=mysqli_query($con,$query);
  if(mysqli_num_rows($result)==1)
  {
    session_start();
    $_SESSION['AdminLoginId']=$_POST['username'];
    header("location: adminpanel.php");
  }
  else
  {
    echo "<script>alert('Incorrect Password')</script>" ;
  }
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
      <center><video autoplay loop muted>
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

<div class="admin-background">
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <div class="form">
    <h2>Login</h2>
    <div class="input">
        <div class="inputBox">
            <label>Username</label>
            <input type="text" name="username" placeholder="">
        </div>
        <div class="inputBox">
            <label>Password</label>
            <input type="password" name="password" placeholder="">
        </div>
        
        <div class="inputBox">
            <input type="submit" name="Signin" value="Sign In">
        </div>
    </div>
    
    <p class="forgot">Forget password? <a href="#">Click Here</a></p>
  </div>
  </form>
</div>

<?php
// Create connection


?>









    <footer class="padding_3x">
        <div class="flex">
          <section class="flex-content padding_1x">
            <h3>About the company</h3>
            <div class="about-company">
              <p>A Section 8 Company (Non Profit Organization) under Companies Act 2013, Ministry of Corporate Affairs, Govt. of INDIA.</p>
            <p>GSTIN 04AAJCR5020K1ZH</p>
            </div>
          </section>
          <section class="flex-content padding_1x">
            <h3>Quick Links</h3>
            <a href="#">Privacy Policy</a>
            <a href="#">Copyright Policy</a>
            <a href="#">Cookie Policy</a>
          </section>
          <section class="flex-content padding_1x">
            <h3>Let's Connect</h3>
            <a href="#">Our Mission</a>
            <a href="#">About Us</a>
            <a href="#">Blogs and newsletters</a>
            
          </section>
          <section class="flex-content padding_1x">
            <h3>Follow Us</h3>
            <div class="links">
              <a href="#"><i class="fa-brands fa-facebook"></i></a>
              <a href="#"><i class="fa-brands fa-twitter"></i></a>
              <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
              <a href="#"><i class="fa-brands fa-instagram"></i></a>
              
              
            </div>
            
          </section>
          
        </div>
        <div class="flex">
          <section class="flex-content padding_1x">
            <p>Copyright ©2023 All rights reserved</p>
          </section>
        </div>
      </footer>
      
        <script src="index.js"></script>
    
        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://code.jquery.com/jquery-3.6.3.min.js" ></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://kit.fontawesome.com/deb4d1b812.js"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
  </body>
  </html>