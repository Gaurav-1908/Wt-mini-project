<!DOCTYPE html>
<html>
  <head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    
    <style>
      a{
        color : whitesmoke;
      }
      form {
        text-align: left;
        text-align: left;
        color: #ffffff;
        font-size: 20px;
        font-weight: 9;
        text-transform: uppercase; 
        padding-left : 50px
      }
      input[type=text], select, textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
        background-color:white;
      }
      button{
        font-size: 17px;
        font-weight: 600; 
        color: white; 
        text-transform: uppercase; 
        background-color: blue; 
        border-radius: 4px 4px 4px 4px; 
        padding: 10px 10px ; 
        margin-bottom : 10px;
        z-index: +1;

      }
      label{
        color:black;
      }
    </style>
    <script>
      function validation(){
        var name=document.myform.name.value;  
        var num=document.myform.tel.value; 
        var x=document.myform.email.value;  
        var atposition=x.indexOf("@");  
        var dotposition=x.lastIndexOf(".");
        
        if (name==null || name==""){  
          alert("Name can't be blank");  
          return false;  
        }
        if (isNaN(num) || num.toString().length !== 10){  
          alert('Enter valid contact number');
          return false;  
        }
        if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
          alert("Please Enter Valid Email");  
          return false;  
          }  
        
      }
    </script>
  </head>

  <body>
    <div class = 'container'>
      <div class = 'header' >
        <div class = "col-md-6">
          <div class="logo">
            <h1>Web Development</h1>
          </div>
        </div>
        <div class = "col-md-6">
          <div class="menu"> 
            <ul>
              <li><a href = "#index">Home</a></li>
              <li><a href = "#OurServices">Our Services</a></li>
              <li><a href = "#OurClients">Our Clients</a></li>
              <li><a href = "#ContactUs">Contact Us</a></li>
            </ul>
          </div>
        </div>
      </div><br>
      <section>
        <div class = 'col-md-12' style="background-color: #D4CDCC;">
          <!-- Define the slideshow container -->
          <div id="slideshow">
            <div class="slide-wrapper">
           
              <!-- Define each of the slides
              and write the content -->
        
              <div class="slide" >
                  <h1 class="slide-number">
                      <img src = 'images/img1.jpg'>
                  </h1>
              </div>
              <div class="slide">
                  <h1 class="slide-number">
                    <img src = 'images/img2.jpg'>
                  </h1>
              </div>
              <div class="slide">
                  <h1 class="slide-number">
                      <img src = 'images/img3.png'>
                  </h1>
              </div>
            </div>
          </div>
        </div>
        <div class = 'about' style = 'background-color:grey;'id="OurServices">
          <div class = 'about-header'>
            <h1>Our Services</h1><br>
          </div>
          <div class="row" >
            <div class="column" style = 'padding-right : 20px;'>
              <div class = 'card' style = 'background-color:white;padding-top:20px'>
                <div class="aboutus-container">
                  <img src="images/cloudcomputing.png" alt="mark" style="width:100%">
                  <center><h2>Cloud Computing</h2></center>
                  <p>Deploy, manage and compute your resources on any Cloud</p>
                </div>
              </div>
            </div>
            <div class="column" style = 'padding-right : 20px;'>
              <div class = 'card' style = 'background-color:white;padding-top:20px'>
                <div class="aboutus-container">
                  <img src="images/webdevelopment.png" alt="mark" style="width:100%">
                  <center><h2>Web Development</h2></center>
                  <p>This includes complete web application development for your business or startup</p>
                </div>
              </div>
            </div>
            <div class="column" style = 'padding-right : 20px;'>
              <div class = 'card' style = 'background-color:white;padding-top:20px'>
                <div class="aboutus-container">
                  <center><img src="images/appdevelopment.png" alt="mark" style="width:90%;height:90%"></center>
                  <center><h2>Application Development</h2></center>
                  <p>This includes complete web application development for your business or startup</p><br>
                </div>
              </div>
            </div>
        </div>
        </div>
        <div class = 'about' id = 'OurClients' style="background-color: #D4CDCC;">
          <div class = 'about-header'>
            <h1>Our Clients</h1><br>
          </div>
          <div class="row" >
            <div class="column" style = 'padding-right : 20px;'>
              <div class = 'card' style = 'background-color:white;padding-top:20px'>
                <div class="aboutus-container">
                  <img src="images/elon.jpeg" alt="mark" style="width:100%;">
                  <center><h2>Cloud Computing</h2></center>
                  <p>Deploy, manage and compute your resources on any Cloud</p>
                </div>
              </div>
            </div>
            <div class="column" style = 'padding-right : 20px;'>
              <div class = 'card' style = 'background-color:white;padding-top:20px'>
                <div class="aboutus-container">
                  <img src="images/bill.png" alt="mark" style="width:100%" style="width:100%;height:10%" >
                  <center><h2>Web Development</h2></center>
                  <p>This includes complete web application development for your business or startup</p>
                </div>
              </div>
            </div>
            <div class="column" style = 'padding-right : 20px;'>
              <div class = 'card' style = 'background-color:white;padding-top:20px'>
                <div class="aboutus-container">
                  <img src="images/mark.png" alt="mark" style="width:100%; ">
                  <center><h2>Web Development</h2></center>
                  <p>This includes complete web application development for your business or startup</p>
                </div>
              </div>
            </div>
        </div><br><br><hr>
      </div>
      <div class = 'about' id = 'ContactUs'>
        <div class = 'row1' style = 'background-color:grey' >
          <div class = 'column1' >
            <h2>Send Me Message<h1>
              <div class = 'contactForm' >
                <form action="index.html" name = 'myform' onsubmit="validation()" method="post">
                  <div class = 'inputBox' >
                    <label for="name" >Full name:</label><br>
                    <input type="text" id="name" name="name" value=""><br>
                  </div>
                  <div class = 'inputBox'>
                    <label for="name">Mail Id:</label><br>
                    <input type="text" id="email" name="email" value=""><br>
                  </div>
                  <div class = 'inputBox'>
                    <label for="Phone">Contact Number :</label><br>
                    <input type="text" id="tel" name="tel" value=""><br>
                  </div>
                  <div class = 'inputBox'>
                    <label for="message">Message :</label><br>
                    <textarea cols="5"></textarea><br>
                  </div>
                  <input type = "submit" style = "font-size: 17px;font-weight: 600; color: white; text-transform: uppercase; background-color: blue; border-radius: 4px 4px 4px 4px; padding: 20px 35px ; " value = "Submit"  />  
                 
                </form> 
              </div>
          </div>
          <div class = 'column1'>
            <h2>Get In Touch</h2>
            <h3>Thanks , You can contact me through multipe ways , 
              start by filling the form next to you , 
              for urgency you can even contact me on whatsapp and mail, 
              also you can check out my certifications and credentials on linkedin.</h3>
          </div>
        </div>
      </div>
      </section>
    </div>
  </body>
</html>
