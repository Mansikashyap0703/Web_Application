 <?php 
include("connection.php");

?>  



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="./style.css" />
    <title>Website</title>
    
  </head>
  <body>
    <div class="bgimage">
      <div class="container1">
        <div class="nav">
          <a href="#">Home</a>
          <a href="#">Our Courses</a>
          <a href="#">Contact Us</a>
        </div>
      </div>
      <div class="mid">
        <div class="course">
          <p class="head">Courses</p>
          <div class="course1">
            <img src="./HTML1.jpg" alt="" style="width: 40%" />
            <p>HTML Full Course from Scrath.</p>
            <button class="btn" id="changeButton" onclick="myFunction(0)">Course Review</button>
          </div>

          <div class="course1">
            <img src="./jslogo.jpg" alt="" style="width: 40%" />
            <p>Java Script Full Course from Scrath.</p>
            <button class="btn" id="changeButton1" onclick="myFunction(1)">Course Review</button>
          </div>
          <div class="course1">
            <img src="./css.png" alt="" style="width: 40%" />
            <p>CSS Full Course from Scrath.</p>
            <button class="btn" id="changeButton2" onclick="myFunction(2)">Course Review</button>
          </div>
          <div class="course1">
            <img src="./php.png" alt="" style="width: 30%" />
            <p>PHP Full Course from Scrath.</p>
            <button class="btn" id="changeButton3" onclick="myFunction(3)">Course Review</button>
          </div>
        </div>
        <div class="video">
          <p class="head">Video</p>
          <div class="video-container">
            <!-- <iframe 
              width="750"
              height="450"
              src="https://www.youtube.com/embed/6ZwwapPikyQ"
              title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              allowfullscreen
              id='changeVideo'
            ></iframe> -->
            <video id="myVideo" width="700" height="450" controls>
              <source id="videoSource" src="1.mp4" type="video/mp4">
              Your browser does not support the video tag.
            </video>
            <p id="demo"></p>
          </div>
        </div>
        <div class="ask">
          <p class="head">About Us</p>
          <div class="info-container">
            <h1>Information</h1>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil at
              fugiat nisi fuga quisquam soluta accusamus animi deserunt cumque
              dignissimos!
            </p>
            <i class="fa fa-globe" aria-hidden="true"
              ><span style="margin-left: 10px"> Website office address</span></i
            >
            <i class="fa fa-phone" aria-hidden="true">
              <span style="margin-left: 10px">98*******8</span></i
            >
            <i class="fa fa-clock-o" aria-hidden="true"
              ><span style="margin-left: 10px">Mon-Sat 8:00 - 18:00</span></i
            >
            <i class="fa fa-envelope-o" aria-hidden="true"
              ><span style="margin-left: 10px">abc@gmail.com</span></i
            >
          </div>

          <div class="question-page">
            <h1>Ask  for Question</h1>
            <div class="contact">
              <form clas="action" method="post" autofill="off">
                <label for="name">Name:</label>
                <input
                  type="text"
                  id="name"
                  name="name"
                  placeholder="First Name.."
                />
                <label for="email">Email:</label>
                <input
                  type="text"
                  id="email"
                  name="email"
                  placeholder="abc@email.com.."
                />
                <label for="Question">Question:</label>
                <textarea
                  id="Question"
                  name="Question"
                  placeholder="Write something.."
                  style="height: 200px; width: 330px"
                ></textarea>
                <input class="btn1" type="submit" value="Submit" />
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="script.js"></script>
  </body>
</html>
