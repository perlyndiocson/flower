<html>
<head>
  <title> FLOOM </title>
  </head>
  <body>
   
    <center><h1> HELLO WELCOME TO FLOOM !!</h1></center>
    <p>Why we champion local independent florists</p>
    <p> it's not always easy to find a beautiful crafted
bouquets when ordering flowers online
or dashing to yor local markets. at Floom we're proud to be
be bringing the local florist experience online,
reminding people just how special the act of giving and receiving 
      flooral arrangements can be.</p>
    <p>Every item that you see on our site is utterly unique
to the local florist who crafts it, which means 
it will also can be unique to the sender and loved
      one who receives it.</p>
    <p> whether it is a Mother's Day Flowers or Valentines Day Flowers
or arranging Funeral Flowers for a sensitive time, our
local florist make sending flowers a truly special occasion,
      every time. Now We Deliver gorceries and hampers!</p>
  </body>
</html>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
</div>

<div style="padding-left:16px">
  <h2>Top Navigation Example</h2>
  <p>Some content..</p>
</div>

</body>
</html>



    


<svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
  <!--
    Dmitri Smirnov
    http://www.whoop.ee/
    2017-03-17
   -->
  <title id="title">Happy SVG Blossoms</title>
  <desc id="description">Dancing blossoms</desc>
  <rect x="0" y="0" width="100%" height="100%" id="sky"/>
  <circle cx="12%" cy="16%" r="15%" id="sun"/>
  
  <svg viewBox="0 0 500 500" width="100%" height="100%" preserveAspectRatio="xMidYMax meet">
    <defs>
      <style>
        #sky { fill: url(#sky-grad); }
        #sun { fill: url(#sun-grad); }
        #ground { fill: #935F05; }
        .stem { stroke: url(#stem-grad); stroke-width: 8px; fill: none; }
        .head { fill: url(#head-grad); }
        .cloud { fill: url(#cloud-grad); }
        .pettals { fill: url(#pettals-grad); stroke-width: 1px; stroke: #ccc; z-index: 1000; }
        .eyes,.mouth { stroke: #000; stroke-width: 2px; fill: none; }
        .leaf { stroke: #000; stroke-width: 0; fill: url(#leaf-grad); }
      </style>
      <radialGradient id="head-grad" cx=".3" cy=".3" r=".5">
        <stop offset="0" stop-color="#ffc600"/>
        <stop offset="1" stop-color="#FF9732"/>
      </radialGradient>
      <radialGradient id="pettals-grad" cx=".5" cy=".5" r=".7">
        <stop offset="0" stop-color="#F3F4F8"/>
        <stop offset="1" stop-color="#C4CAEA"/>
      </radialGradient>
      <linearGradient id="stem-grad" x2="1">
        <stop offset="0" stop-color="green"/>
        <stop offset="1" stop-color="darkgreen"/>
      </linearGradient>
      <linearGradient id="stem-grad" x2="1">
        <stop offset="0" stop-color="green"/>
        <stop offset="1" stop-color="darkgreen"/>
      </linearGradient>
      <linearGradient id="leaf-grad" x2="1" y2=".66">
        <stop offset="0" stop-color="#090"/>
        <stop offset="1" stop-color="#003000"/>
      </linearGradient>
      <linearGradient id="sky-grad" x2="0%" y2="1">
        <stop offset="0" stop-color="#0D6AB1"/>
        <stop offset=".5" stop-color="#3A89AE"/>
        <stop offset="1" stop-color="#97CFFF"/>
      </linearGradient>
      <radialGradient id="sun-grad">
        <stop offset=".5" stop-color="#fc0" stop-opacity=".9"/>
        <stop offset="1" stop-color="#F3FF34" stop-opacity="0"/>
      </radialGradient> 
      <radialGradient id="cloud-grad">
        <stop offset=".6" stop-color="#BBCBD9"/>
        <stop offset="1" stop-color="#fff" stop-opacity="0"/>
      </radialGradient>
      <g id="flower">
        <path d="M253 500 C274 377,326 449,330 307 C330 307,369 491,255 500z" class="leaf"/>
        <path d="M247 500 Q169 464 188 355,230 408,249 496" class="leaf"/>
        <!--
          To the second X add +1 to make the path not a straight line to
          add bounding box. Otherway it's graients won't work.
        -->
        <path d="M250 500 Q250 200,151 200" class="stem">
          <animate
            attributeName="d"
            attributeType="XML"
            from="M250 500 Q250 200,201 200"
            to="M250 500 Q250 200,301 200"
            values="M250 500 Q250 200,201 200;
                    M250 500 Q250 200,301 200;
                    M250 500 Q250 200,201 200"
            keyTimes="0; .5; 1"
            begin="0s"
            dur="2s"
            calcMode="spline"
            keySplines=".5 0 .5 1;.5 0 .5 1"
            repeatCount="indefinite"/>
        </path>
        <g id="flower-head" transform="translate(-40 0)">
          <path d="
          M260 158 C290 100 220 100 240 160
          M260 156 C276 104 312 136 277 164
          M278 165 C320 113 344 170 289 178
          M288 178 C353 160 336 212 293 197
          M295 198 C379 207 338 266 289 217
          M287 220 C337 253 292 279 279 233
          M272 237 C310 275 260 282 263 242
          M259 243 C291 296 234 299 243 243
          M247 244 C248 310 166 264 225 236
          M223 234 C177 292 165 200 213 224
          M210 218 C137 258 105 170 205 207
          M205 203 C140 192 176 147 210 188
          M208 183 C126 151 219 97 217 169
          M221 165 C169 88 244 71 238 157" class="pettals"/>
          <circle r="45" cx="250" cy="200" class="head"/>
          <path d="M235 210 Q250 230 264 210" class="mouth">
            <animate
              attributeName="d"
              attributeType="XML"
              from="M235 210 Q250 230 264 210"
              to="M235 210 Q250 220 264 210"
              values="
                 M235 210 Q250 230 264 210;
                 M235 210 Q250 220 264 210;
                 M235 210 Q250 230 264 210"
              begin="0s"
              dur="1.4s"
              repeatCount="indefinite"/>
          </path>    
          <path d="M229 189 Q234 178 242 189 M259 189 Q267 178 271 189" class="eyes">
            <animate
              attributeName="d"
              attributeType="XML"
              from="M229 189 Q234 178 242 189 M259 189 Q267 178 271 189"
              to="M229 189 Q234 189 242 189 M259 189 Q267 189 271 189"
              values="M229 189 Q234 178 242 189 M259 189 Q267 178 271 189;
                      M229 189 Q234 189 242 189 M259 189 Q267 189 271 189;
                      M229 189 Q234 178 242 189 M259 189 Q267 178 271 189"
              begin="0s"
              dur=".7s"
              repeatCount="indefinite"/>
          </path>
          <animateTransform
            attributeType="XML"
            attributeName="transform"
            type="translate"
            from="-30 0"
            to="40 0"
            values="-30 0;30 0;-30 0"
            keyTimes="0;.5; 1"
            begin="0s"
            dur="2s"
            calcMode="spline"
            keySplines=".5 0 .5 1;.5 0 .5 1"
            repeatCount="indefinite"/>
        </g>
      </g>
    </defs>
    <g id="cloud">
      <ellipse rx="200" ry="68" cx="550" cy="60" class="cloud"/>
      <ellipse rx="120" ry="68" cx="570" cy="80" class="cloud"/>
      <ellipse rx="160" ry="68" cx="490" cy="70" class="cloud"/>
      <animateTransform
        attributeType="XML"
        attributeName="transform"
        type="translate"
        from="-30 10"
        to="40 10"
        values="-30 20;30 0;-30 20"
        begin="0s"
        dur="12s"
        repeatCount="indefinite"/>
    </g>
    <use xlink:href="#flower"/>
    <use xlink:href="#flower" x="-60%" y="20%" transform="scale(.9)  scale(-1 1)"/>
    <use xlink:href="#flower" x="10%" y="100%" transform="scale(.5)"/>
    <use xlink:href="#flower" x="-150%" y="30%" transform="scale(.8)  scale(-1 1)"/>
    <use xlink:href="#flower" x="130%" y="70%" transform="scale(.6)"/>
  </svg>
  <rect x="0" y="97%" width="100%" height="3%" id="ground"/>
</svg>
    
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>


<footer>
  <div class="rounded-social-buttons">
                    <a class="social-button facebook" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a class="social-button twitter" href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a class="social-button linkedin" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a class="social-button youtube" href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a>
                    <a class="social-button instagram" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
</footer>
