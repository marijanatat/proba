<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Domaći pamuk</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/main.css') }}">
  <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <style>
    body {
      background: black url('../img/esther-jiao-B3FyeM21GdA-unsplash-1.jpg');
      /* background:#c1c8c7; */
      /*background:white; */
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
      /* width: 100%;
          height: 100%;
           */
    }

    #F {

      position: relative;
      width: 100%;
      height: auto;
      background: rgb(190, 190, 4);
      /* background: #4ccac4;
             */
      z-index: -1;

    }

    #F::after {
      position: absolute;
      ;
      width: 100%;
      height: 100%;
      content: '';
      background: gray;

      /* background: #11e1d9;   */
      top: 0;
      right: 0;
      left: 0;
      bottom: 0;
      transform-origin: bottom left;
      transform: skewY(-3deg);
      z-index: -1;


    }

    .loader {
      border-top-color: red;
      -webkit-animation: spinner 1.5s linear infinite;
      animation: spinner 3s linear infinite;
    }

    @-webkit-keyframes spinner {
      0% {
        -webkit-transform: rotate(0deg);
      }

      100% {
        -webkit-transform: rotate(360deg);
      }
    }

    @keyframes spinner {
      0% {
        transform: rotate(0deg);
      }

      100% {
        transform: rotate(360deg);
      }
    }


    .check input:invalid {
      border-color: red;
    }

    /* FLOATING LABEL */
    .label-floating input:not(:placeholder-shown),
    .label-floating textarea:not(:placeholder-shown) {
      padding-top: 1.4rem;
    }

    .label-floating input:not(:placeholder-shown)~label,
    .label-floating textarea:not(:placeholder-shown)~label {
      font-size: 0.8rem;
      transition: all 0.2s ease-in-out;
      color: #1f9d55;
      opacity: 1;
    }

    #jedan {
      transition: transform .2s;
    }

    #jedan:hover {
      transform: scale(1.5);
    }

    #dva {
      transition: transform .2s;
    }

    #dva:hover {
      transform: scale(1.5);
    }


    .arrow {
      position: absolute;
      top: 85%;
      left: 20%;
      transform: translate(-50%, -50%);
    }

    .arrow span {
      display: block;
      width: 30px;
      height: 30px;
      border-bottom: 5px solid gray;
      border-right: 5px solid gray;
      transform: rotate(45deg);
      margin: -10px;
      animation: animate 3s infinite;
    }

    .arrow span:nth-child(2) {
      animation-delay: -0.2s;
    }

    .arrow span:nth-child(3) {
      animation-delay: -0.4s;
    }

    @keyframes animate {
      0% {
        opacity: 0;
        transform: rotate(45deg) translate(-20px, -20px);
      }

      50% {
        opacity: 1;
      }

      100% {
        opacity: 0;
        transform: rotate(45deg) translate(20px, 20px);
      }
    }

    .glow {
      /* font-size: 30px; */
      color: rgb(87, 84, 84);
      text-align: center;
      -webkit-animation: glow 1s ease-in-out infinite alternate;
      -moz-animation: glow 1s ease-in-out infinite alternate;
      animation: glow 1s ease-in-out infinite alternate;
    }

    @-webkit-keyframes glow {
      from {
        text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px gray, 0 0 40px gray, 0 0 50px gray, 0 0 60px gray, 0 0 70px gray;
      }

      to {
        text-shadow: 0 0 20px #fff, 0 0 30px gray, 0 0 40px gray, 0 0 50px gray, 0 0 60px gray, 0 0 70px gray, 0 0 80px gray;
      }
    }

    .blinking {
      animation: blinkingText 1.5s infinite;
    }

    @keyframes blinkingText {
      0% {
        color: red;
      }

      49% {
        color: #000;
      }

      60% {
        color: transparent;
      }

      99% {
        color: transparent;
      }

      100% {
        color: #000;
      }
    }
  </style>
</head>

<body class="bg-white font-sans leading-normal tracking-normal">
  <!--Nav-->
  <nav class="flex items-center justify-between flex-wrap bg-black p-6   w-full  pin-t fixed z-10 top-0 mt-0">
    <div class="block lg:hidden">
      <button id="nav-toggle"
        class="flex items-center px-3 py-2  rounded text-gray-600 font-bold border border-red-900  hover:text-red-700 hover:border-white">
        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <title>Menu</title>
          <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
        </svg>
      </button>
    </div>

    <div class="w-full flex-grow lg:flex lg:items-end lg:w-auto hidden pt-6 lg:pt-0" id="nav-content">
      <ul class="list-reset lg:flex justify-start flex-1 items-center">
        <li class="mr-3">
          <a class="inline-block px-2  lg:px-4 py-2 text-white text-lg  lg:text-2xl hover:no-underline no-underline"
            href="#">Home</a>
        </li>
        <li class="mr-3">
          <a class="inline-block  px-2  lg:px-4 text-gray-500 text-lg  lg:text-2xl no-underline hover:text-gray-200 hover:no-underline  py-2 "
            href="#about-me">About me</a>
        </li>
        <li class="mr-3">
          <a class="inline-block px-2  lg:px-4  text-gray-500 text-lg  lg:text-2xl no-underline hover:text-gray-200 hover:no-underline py-2 "
            href="#resume">Resume</a>
        </li>
        <li class="mr-3">
          <a class="inline-block  px-2  lg:px-4 text-gray-500 text-lg  lg:text-2xl no-underline hover:text-gray-200 hover:no-underline   py-2 "
            href="#projects">Projects</a>
        </li>
        <li class="mr-3">
          <a class="inline-block  px-2  lg:px-4 text-gray-500 text-lg  lg:text-2xl no-underline hover:text-gray-200 hover:no-underline   py-2 "
            href="#contact-me">Contact</a>
        </li>
      </ul>
    </div>
  </nav>


  <!--Hero-->
  <div class="container relative mx-auto flex flex-col md:flex-row items-center my-12 md:my-24">
    <!--Left Col-->
    <div class="flex flex-col w-full lg:w-1/2 justify-center items-start pt-16 md:pb-24  px-6">
      <h1 class="font-bold text-2xl md:text-4xl text-white my-4 shadow-md" style="font-family: Trump Gothic East,sans-serif;
                font-weight: 700;line-height: 1; color: #fff;text-transform: uppercase;letter-spacing: 1px;">Marijana
        Tatalović</h1>
      <p class="uppercase tracking-loose text-red-700 items-center text-xl md:text-2xl mb-2 md:mb-1">I'm full-stack Web
        Developer / Traffic Engineer
      </p>

      <p class="leading-normal mb-4 font-xl text-white text-lg">Freelance Web Designer & Developer based in Novi Sad,
        Serbia.
        Highly experienced in designing & developing websites with <span
          class="text-red-700 font-bold text-3xl">Laravel</span> and <span class="text-red-700 font-bold text-3xl">
          .Net</span> .</p>

      <!--arrow-->

      <div class="arrow  text-gray-800 p-2 hidden lg:block">
        <span></span>
        <span></span>
      </div>

    </div>
    <!--Button-->
    <div class="w-full lg:w-1/2 lg:py-6 text-center">
      <button
        class="modal-open blinking  tracking-wider bg-transparent text-2xl border border-gray-500 hover:border-indigo-500 text-gray-500 hover:text-indigo-500 font-bold md:py-3 px-4 rounded-full">Contact
        me!</button>

      <!--Modal-->
      <div
        class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
        <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
        <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">


          <!-- Modal content-->
          <div class=" modal-content py-4  px-2">
            <!--Title-->
            <div class=" relative pb-3">
              <div class="absolute top-0 right-0  modal-close cursor-pointer z-50">
                <svg class=" fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                  viewBox="0 0 18 18">
                  <path
                    d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                  </path>
                </svg>
              </div>
              <div class="text-xl font-bold">Marijana Tatalovic</div>
              <div class="text-xl font-bold">Vojvode Bojovica 12/12 , Novi Sad, Serbia</div>
              <a href="mailto:tatalovicmarijana@gmail.com" class="text-xl font-bold">tatalovicmarijana@gmail.com</a>
              <div class="text-xl font-bold">phone:+381611403692</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
 
  <!--About me-->
  <div class="about-me" style="background: rgb(116, 113, 113)" id="about-me">
    <div class="container mx-auto pt-12 md:pt-16 px-4">
      <div class="md:flex-col md:items-center md:justify-content-between">

        <div class="">
          <div class=" mr-4 w-40 h-auto md:w-1/8" style="float:left; margin:5px 20px 0 0;">
            <img src="../img/nova1.jpg" alt="profilna slika" class=" rounded-md w3-hover-grayscale">
          </div>
          <div class="flex-1 items-center">
            <h2 class="text-2xl md:text-3x lg:text-5xl bold italic pb-4 text-red-800">About me</h2>
            <div class="text-xl bold mr-1 ">Talented web developer with wide aspect of work that can do when it comes to
              developing and designing.


              Involved and individualy finished many projects with great variations in demands (from simple websites,
              e-commerce, custom aplications ..). Excelent team player ready for improvement and learning every day.
            </div>
          </div>
          <br>
        </div>

        <div class="items-center">
          <br>
          <div class=" text-2xl md:text-3x lg:text-5xl text-red-800  bold  text-center pb-4 italic">Technical skills
          </div>
          <br>
          <div class="text-lg md:text-3xl glow">
            PHP,Laravel, ASP.NET MVC, Entity Framework,React, VueJS, Alpine js, Livewire,HTML, CSS,TailwindCSS,
            JavaScript, MySql
          </div>
        </div>
      </div>
      <br>
      <br>
      <hr class="bg-gray-200">
      <hr class="bg-red-800">

      <div class=" w-full flex flex-col items-center px-4 md:py-4 ">
        <div>
          <h2 class=" text-gray-200 text-xl mx-2 ">Download Resume:</h2>
        </div>
        <div class="mb-8">
          <a class="" href="../img/Marijana Tatalovic -Cv.pdf"><img class=" w-24 h-auto " src="../img/download.png"
              alt=""></a>
        </div>
      </div>
    </div>
    <!-- download-->
  </div>

  <!--Container-->
  <div class="bg-gray-200 " id="resume">
    <div class="container mx-auto pt-4 md:pt-16 px-6 ">
      <div class="sm:flex content-center justify-center  leading-relaxed my-4 md:my-16">
        <div class=" flex-initial mx-auto h-auto my-6 lg:mx-8 md:mx-4">
          <p class=" leading-relaxed text-lg lg:text-2xl text-justify mx-4 text-gray-700">EDUCATION
          </p>
        </div>


        <div class=" flex-1  mx-auto h-auto my-4 lg:mx-8 md:mx-4">
          <p class=" text-lg lg:text-3xl text-justify mx-4  font-bold ">Faculty of Technical Sciences, Novi Sad
          </p>
          <br>
          <p class="text-lg text-justify mx-4 italic">
            Acquired title: Master of Transportation • June 2007</p>
        </div>
      </div>
      <!--end one segment-->
      <hr class="bg-red-600 h-1">

      <div class="sm:flex content-center justify-center">
        <div class=" flex-initial mx-auto h-auto my-6 lg:mx-8 md:mx-4">
          <p class="text-lg lg:text-2xl text-justify mx-4 text-gray-700 ">COURSES
          </p>
        </div>

        <div class=" flex-1 mx-auto h-auto my-6 lg:mx-8 md:mx-4">
          <p class="text-lg lg:text-3xl text-justify mx-4 lg:px-8 font-bold">FTN Informatika – .NET
          </p>
          <br class="hidden md:block ">

          <p class="text-lg text-justify mx-4 italic lg:px-8">
            Course goal: </p>
          <p class="text-lg text-justify mx-4 lg:px-8 ">Independently built single-page web application with Microsoft
            .Net platform. </p>
          <p class="text-lg text-justify mx-4 lg:px-8 ">Technologies: HTML 4 and HTML 5, CSS, .NET MVC technology,
            Entity Framework, Razor, </p>
          <p class="text-lg text-justify mx-4 lg:px-8 ">JavaScript, Jquery, AJAX, REST, ASP.NET Web API </p>
          <p class="text-lg text-justify mx-4 lg:px-8 ">Provides competences for a junior full-stack developer. </p>
          <br class="hidden md:block ">

          <hr>
          <br class="hidden md:block ">


          <p class="text-lg lg:text-3xl text-justify mx-4 lg:px-8 font-bold">VOICT Cluster Academy – .NET
          </p>
          <br class="hidden md:block ">

          <p class="text-lg text-justify mx-4 italic lg:px-8">
            Course goal: </p>
          <p class="text-lg text-justify mx-4 lg:px-8 ">Procedural programming and object-oriented programming based on
            the C# programming language. </p>
          <p class="text-lg text-justify mx-4 lg:px-8 ">Back-end and front-end design of a web application using .NET
            and React frameworks.</p>
          <p class="text-lg text-justify mx-4 lg:px-8 ">JS, C#, React </p>

          <br class="hidden md:block ">
          <hr>
          <br class="hidden md:block ">


          <p class="text-lg lg:text-3xl text-justify mx-4 lg:px-8 font-bold">Independent learning from:
          </p>
          <br>
          <p class="text-lg text-justify mx-4 italic lg:px-8">
            Udemy, Laracasts, YouTube </p>
          <p class="text-lg text-justify mx-4 lg:px-8 ">XML / PHP programming, MySQL, Advanced JavaScript, HTML and CSS,
            Advanced PHP. </p>
          <p class="text-lg text-justify mx-4 lg:px-8 ">Laravel, Livewire, Alpine JS. </p>

        </div>

      </div>
      <hr class="bg-red-600 h-1">
      <!--Projects-->

      <div class="sm:flex content-center justify-center  leading-relaxed my-8">
        <div class=" flex-initial mx-auto h-auto my-6 lg:mx-8 md:mx-4">
          <p class=" text-lg lg:text-2xl text-justify mx-4 text-gray-700">WORK
          </p>
        </div>


        <div class=" flex-1  mx-auto h-auto my-6 lg:mx-8 md:mx-4 lg:pl-16">
          <p class="text-lg lg:text-3xl text-justify mx-4  font-bold ">Ziper DOO Novi Sad </p>
          <p class="text-lg text-justify mx-4 italic">
            Procurement & Warehouse Operator</p>
          <br class="hidden md:block ">
          <hr>

          <p class=" text-lg lg:text-3xl  text-justify mx-4  font-bold ">Mercator S</p>
          <br class="hidden md:block ">
          <p class="text-lg text-justify mx-4 italic"> Assistant in logistics</p>
          <hr>
          <p class="text-lg lg:text-3xl text-justify mx-4  font-bold ">Freelancer</p>
          <br class="hidden md:block ">

          <p class="text-lg text-justify mx-4 italic pb-8 ">Web Developer • from 2019</p>
        </div>

      </div>
    </div>
  </div>


  <!--End projects-->
  <div class="px-4  pb-2 md:pb-8 pt-2 md:pt-4 py-2 md:py-16 " id="projects">
    <div class="flex flex-col items-center justify-content-center self-center">
      <H2 CLASS="text-3xl font-bold text-red-800 ">PROJECTS</H2>
      <br class="hidden md:block">
      <div CLASS="text-3xl text-white italic">Check Out Some of My Works.</div>
      <br class="hidden md:block">
      <br class="hidden md:block">
    </div>
    <div class=" block  justify-between md:-mx-2">
      <div class="w-full h-auto md:my-8 md:mx-2 mb-2 mt-2 md:mt-8 md:mb-8">

        <div class="p-4 mx-auto w-full md:w-1/2 bg-white rounded-lg overflow-hidden shadow relative  ">
          <img class="h-80 mx-auto object-fill md:object-center" src="../img/cetvrt (1).gif" alt="">
          <div class="mt-4 h-auto md:h-40 lg:h-48">
            <a href="https://github.com/marijanatat/e-commerce"
              class="block text-red-800 hover:text-blue-600 font-semibold mb-1 mt-1 text-lg md:text-base lg:text-lg">
              Web shop -site in progress
            </a>

          </div>
        </div>
      </div>

    </div>
  </div>
  <br>


  <!--Contact me-->
  <div>
    <form id="contact-me" class="w-full mx-auto max-w-3xl bg-white shadow p-8 text-gray-700 "
      action="mailto:tatalovicmarijana@gmail.com" method="POST" enctype="multipart/form-data">

      <div> Ready for new development challenges? Send Your request and Hire me!</div>
      <h2 class="w-full text-3xl font-bold leading-tight my-4">Contact form</h2>
      <div class="flex flex-wrap mb-6">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
          E-mail
        </label>
        <input
          class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
          id="email" type="email">
      </div>
      <!-- email field -->
      <div class="flex flex-wrap mb-6">
        <div class="relative w-full appearance-none label-floating">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
            Name
          </label>
          <input
            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
            id="email" type="email">
        </div>
      </div>
      <!-- Message field -->
      <div class="flex flex-wrap mb-6">
        <div class="relative w-full appearance-none label-floating">
          <label class="block uppercase tracking-wide text-gray-800 text-xs font-bold mb-2" for="grid-password">
            Message
          </label>
          <textarea
            class=" no-resize appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none"
            id="message"></textarea>
        </div>
      </div>

      <div class="">
        <button
          class="w-full shadow bg-red-800 hover:bg-red-600 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
          type="submit" onclick="sendContact();">
          Send
        </button>


      </div>
    </form>
  </div>
  <!--end contact me-->

  <!--footer-->
  <div class="bg-gray-800 pt-1 flex flex-col items-center justify-center " style="">
    <div class="flex pb-1 px-3  pt-1  text-gray-800 text-sm flex-col
               md:flex-row max-w-6xl">

      <div class="md:flex-auto md:flex-row-reverse mt-2 flex-row flex">
        <a href="https://github.com/marijanatat" class="w-6 mx-1 mr-2"><i id="dva" class="fa fa-github text-gray-500"
            style="font-size:26px"></i>

        </a>
        <a href="https://www.facebook.com/marijana.tatalovic" class="w-6 mx-1 ">
          <svg id="jedan" class="fill-current cursor-pointer text-gray-500 hover:text-gray-400" width="100%"
            height="100%" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/"
            style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;">
            <path id="Facebook" d="M24,12c0,6.627 -5.373,12 -12,12c-6.627,0 -12,-5.373 -12,-12c0,-6.627
                           5.373,-12 12,-12c6.627,0 12,5.373
                           12,12Zm-11.278,0l1.294,0l0.172,-1.617l-1.466,0l0.002,-0.808c0,-0.422
                           0.04,-0.648 0.646,-0.648l0.809,0l0,-1.616l-1.295,0c-1.555,0 -2.103,0.784
                           -2.103,2.102l0,0.97l-0.969,0l0,1.617l0.969,0l0,4.689l1.941,0l0,-4.689Z"></path>
          </svg>
        </a>
      </div>
    </div>
    <div class="mt-2 text-red-700 font-semibold">© Copyright 2020. All Rights Reserved.</div>
  </div>

</body>

<script>
  document.getElementById('nav-toggle').onclick = function(){
    document.getElementById("nav-content").classList.toggle("hidden");
  }

//modal
var openmodal = document.querySelectorAll('.modal-open')
    for (var i = 0; i < openmodal.length; i++) {
      openmodal[i].addEventListener('click', function(event){
    	event.preventDefault()
    	toggleModal()
      })
    }
    
    const overlay = document.querySelector('.modal-overlay')
    overlay.addEventListener('click', toggleModal)
    
    var closemodal = document.querySelectorAll('.modal-close')
    for (var i = 0; i < closemodal.length; i++) {
      closemodal[i].addEventListener('click', toggleModal)
    }
    
    document.onkeydown = function(evt) {
      evt = evt || window.event
      var isEscape = false
      if ("key" in evt) {
    	isEscape = (evt.key === "Escape" || evt.key === "Esc")
      } else {
    	isEscape = (evt.keyCode === 27)
      }
      if (isEscape && document.body.classList.contains('modal-active')) {
    	toggleModal()
      }
    };
    
    
    function toggleModal () {
      const body = document.querySelector('body')
      const modal = document.querySelector('.modal')
      modal.classList.toggle('opacity-0')
      modal.classList.toggle('pointer-events-none')
      body.classList.toggle('modal-active')
    }


//end of modal

//RED BORDER ON INVALID INPUT
document.getElementById('contact-me').addEventListener("invalid", function (event) {
	this.classList.add('check');
}, true);




	// TEXT AREA AUTO EXPAND
var textarea = document.querySelector('textarea.autoexpand');

textarea.addEventListener('keydown', autosize);

function autosize(){
  var el = this;
  setTimeout(function(){
    el.style.cssText = 'height:auto; padding: 1.4rem .2rem .5rem';
    
    el.style.cssText = 'height:' + el.scrollHeight + 'px';
  },0);
}



</script>

</html>