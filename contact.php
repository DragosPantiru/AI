<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css" />
        <title>Tufting Spot - Contact</title>
    </head>
    <body>
        <header>
            <nav class="nav main-nav">
                
                <img src="Images/LOGO.png" class="header-img" >
                <ul>
                <li><a href="index.php">HOME</a></li>
                    <li><a href="shop.php">SHOP</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="FAQ.php">FAQ</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            <h1 class="main-name">TUFTING SPOT</h1>
            </nav>
        
        </header>
        
        
        <section class="S1-contact">
            <h1 class="h-contact"> Still have questions or want to order a personalised rug? Contact us  </h1>
            

            <form action="form.php" method="post">
                <div class="form-contact">
                <div>
                    <label for="Name" class="form-left" > Name  *</label> <label class="form-right" for="Name" > Phone number ( optional )</label>
                    <div>
                        <input type="text" name="Name" class="fcf-form-control"  placeholder=" Your Name or Surname" required>
                        <input type="text" name="Number" class="fcf-form-control" placeholder="e.g. +40.. ">
                    </div>
                </div>
                <br>
                <div>
                     <label for="number" class="form-left">Email * </label>  <label class="form-right" for="number" > Address ( only if needed ) </label>
                    <div> 
                        <input type="email"  name="Email" class="fcf-form-control" placeholder="e.g. example@email.com" required >
                        <input type="text" name="Adress" class="fcf-form-control" placeholder="e.g. Iasi, Romania ">
                    </div>
                </div>
                
                <br>
                <div >
                    <label for="Message" class="form-mess">Your message *</label>
                    <div >
                        <textarea name="Message" class="fcf-form-control" rows="8" maxlength="3000" required></textarea>
                    </div>
                </div>

                <div>
                    <input class="button--submit2" value="Send Message" type="submit">
                </div>
                </div>
            </form>

        </section>

        <footer>
            <h3 class="main-name">TUFTING SPOT
                <br><p class="copyright">
                    <br> Contact:
                    <br> theTuftingSpot@gmail.com
                    <br> +40712345678
                    <br>
                    <br> &copy; 2023 Tufting Spot 
                    
                </p></h3>
            
            <ul class="nav foot-nav">
                <li>
                    <a href="https://www.youtube.com" target="_blank">
                        <img src="Images/YouTube Logo.png" width="50">
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com" target="_blank" >
                        <img src="Images/insta Logo.png" width="50">
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com" target="_blank">
                        <img src="Images/Facebook Logo.png" width="50">
                    </a>
                </li>
            </ul>
            
        </footer>
    </body>
</html>