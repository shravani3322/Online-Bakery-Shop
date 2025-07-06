  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delicious Bakery Products</title>
    <link rel="stylesheet" href="hmpg.css">
    <style>
        body
             {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }

        header {
            background-color:lightgray;
            color: #fff;
            padding: 1em;
            text-align: center;
            
        }

        nav {
            display: flex;
            justify-content:center;
            background-color:lightpink;
            padding: 1em;
        }

        nav a {
            color:white;
            text-decoration: none;
            margin: 0 1em;
            
        }

        .main-content {
            padding: 2em;
            text-align: center;
        }

        .product {
            margin: 20px;
            display: inline-block;
        }

        .product img {
            max-width: 100%;
            height: auto;
        }

        
        
video {
    position:fixed;
    top:50;
    left:50;
    min-width:50%;
    min-height:50%;
    z-index: -1; /* Ensure the video stays in the background */
}

footer {
  background-color:red;
  color: #fff;
  padding: 20px;
  text-align: center;
}
img{
    width:500px;
  height:300px;
}

footer {
  background-color:pink;
  color: #fff;
  padding: 20px;
  text-align: center;
}

.grid-item {
            text-align:left;
        }

 .foot {
            width: 100%;
                        box-shadow: 0 0 4px grey, 0 0 3px grey;

        }

        .footer {
            position: relative;
            left: 0;
            bottom: 0;
            width: 100%;
            padding: 0%;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-gap: 0px;
            color: white;
            text-align: center;
            background-color: #f8f9fa; /* Bootstrap navbar-light background color */
        }

        .footerb {
            width: auto;
            padding: 5%;
            font-size: 20px;
            color: black;
            text-align: center;
            background-color: white; /* Match Bootstrap navbar-light background color */
        }

        .footerb a {
            text-decoration: none;
            color: black;
            cursor: pointer;
        }

        .footerb i {
            background-color:transparent;
            color: #ffffff;
            font-size: 25px;
            width:20px;
            height:px;
            border-radius: 50%;
            text-align: center;
            line-height: 42px;
            margin: 10px 15px;
            vertical-align: middle;
        }

        .footerb i.fa-envelope {
            font-size: 17px;
            line-height: 38px;
        }

        .footerb h5 {
            font-size: 30px;
            text-shadow: 0 0 5px gold, 0 0 10px gold;
            color: white;
        }

        .footerb a:hover {
            color: black;
        }

        .footerb #addr:hover {
            color: black;
        }

        .grid-item {
            text-align: center;
        }
        .glow-on-hover {
    width: 220px;
    height: 50px;
    border: none;
    outline: none;
    color: #fff;
    background: #111;
    cursor: pointer;
    position: relative;
    z-index: 0;
    border-radius: 10px;
}

.glow-on-hover:before {
    content: '';
    background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
    position: absolute;
    top: -2px;
    left:-2px;
    background-size: 400%;
    z-index: -1;
    filter: blur(5px);
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    animation: glowing 20s linear infinite;
    opacity: 0;
    transition: opacity .3s ease-in-out;
    border-radius: 10px;
}

.glow-on-hover:active {
    color: #000
}

.glow-on-hover:active:after {
    background: transparent;
}

.glow-on-hover:hover:before {
    opacity: 1;
}

.glow-on-hover:after {
    z-index: -1;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: #111;
    left: 0;
    top: 0;
    border-radius: 10px;
}

@keyframes glowing {
    0% { background-position: 0 0; }
    50% { background-position: 400% 0; }
    100% { background-position: 0 0; }
}


   </style> 
</head>
<body>
<video autoplay loop muted playsinline>
    <source src="http://localhost/shraa/img/InShot_20240208_211034271.mp4" type="video/mp4">
    <!-- Add additional source elements for other video formats like WebM or Ogg -->
    Your browser does not support the video tag.
</video>




<h1 style="font-family: cursive;"><center>SWEET CRAVINGSS BAKERY</center></h1>

    <nav>
        <a href="http://localhost/shraa/aboutus.html">About us</a>
        <a href="http://localhost/shraa/menu.html">Product</a>
        <a href="http://localhost/shraa/login.php">Login</a>
       
        <a href="http://localhost/shraa/ex1.html">Whisk & Bake</a>
    </nav>

    <div class="main-content">
        <h2 style="color:black;font-family:monaco;">  VISIT OUR DELICIOUS BAKERY <br> IN OUR BARAMATI</h2>
        <br><center> OUR BESTSELLERS</center>
        <br>
        <br>

        <a href="http://localhost/shraa/menubred.html">Breads</a>|
        <a href="http://localhost/shraa/menubrawny.html">Brownies</a>|
        <a href="http://localhost/shraa/menucake.html">Cakes</a>|
        <a href="http://localhost/shraa/menupestry.html">Pastries</a>|
        <a href="http://localhost/shraa/menucupcake.html">Cupcake and Desserts</a>
   
</b>
                <?php
                
            ?>
        </section>
        <br>
        <br>
        <br>
        <br>
        
        <section style="text-align: right">
            <h4 style="color:red"><mark>NOW OPEN IN BARAMATI</mark></h4><br>
            Delicious Food Pvt Ltd♻️.Subhadra Mall,<br>Ground Floor,Shop no:12,Stand Road,B Town<br>
            Baramti-413102<br>
            <br>

            Store Timings🕧:8AM-11PM

            <?php
                
             ?>
             
        </section>
    </main>



   
<section>
    <button class="glow-on-hover" onclick="redirectToPage()" style="color: yellow; background-color:blue">ORDER ONLINE</button>

    <script>
        function redirectToPage() {
            window.location.href = "http://localhost/shraa/onlineorder.html";
        }

   </script>
   </section>

        </div>
</body>




<center><b>
<section>
   
    <br>
    <br>


   



<img src="http://localhost/shraa/img/f2.jpg">





</b>
</center></section>


    
      
</b>

</center>
  <div class="foot">
        <div class="footer">

            <div class="footerb grid-item">
                <h4 style="color:black;">VISIT AGAIN</h4>

                <hr class="hr" style="border:1px solid black; border-bottom: white;">
         <a href="http://localhost/shraa/visitus.html" style="size:1">👆</a>
                <img src="http://localhost/shraa/img/ft1.jpg" height="150px" width="240px" loading="lazy">
               <span></span>
            </div>

            <div class="footerb grid-item">
                <h3 style="color: black;">Contact☎️us</h3>
                <hr class="hr" style="border:1px solid black;border-bottom: white;">
               <k style= "font-size:15px";color:black;> Whatsapp 
                No :<br>📞9322831609</k><br>
                <a href="https://api.whatsapp.com/send?phone=9322831609" target="_blank"
                   rel="noopener noreferrer">
                   <br>
                   <br>
                    <a href="http://localhost/shraa/cntct2.php" style="color:green;font-family: all">Contact here🤙...</a>
                  <br>
                </a>

                <a href="navaleshravani42@gmail.com" style="text-decoration:none; color:green;">
                 <k style= "font-size:15px">   <br><br>Gmail Id📲📨 : <br>

                    navaleshravani@gmail.com</a></k><br>

            </div>


            <div class="footerb grid-item">
                <h3 style="color:black;">PRODUCT<br>SPECIALITY</h3>
                <hr class="hr" style="border:1px solid black; border-bottom: white;">
               <k style= "font-size:10px"><br> <br> </k><br>
               <section>

<a href="http://localhost/shraa/visitus.html"><button class="glow-on-hover" type="button">Visit Us..!</button>

  </a>


   <br>

            </div>

            <div class="footerb grid-item">
                <h3 style="color: black;">GRAB HERE🌍</h3>
                <hr class="hr" style="border:1px solid black;border-bottom:black;"> 
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3791.0814357603103!2d74.57758883674283!3d18.16016214027935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc3a010db3a60a5%3A0x65d0efb2cb4f84e5!2sTuljaram%20Chaturchand%20College!5e0!3m2!1shi!2sin!4v1704894866991!5m2!1shi!2sin"
                    style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                    width="250" height="250">


            </div>

        </div>
    </div>
</footer>

</body>

<?php include_once(""); ?>

</html>


