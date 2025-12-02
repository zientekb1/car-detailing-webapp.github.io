<!DOCTYPE html>

<!-- Fig. 19.13: form.html --> 
<!-- XHTML form for gathering user input. -->
<html>

   <head>
   <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Get a Quote</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
   <style> 
textarea{
    color: #000000;
}

textarea:focus, input:focus {
    color: #000000;
}

  .container {
    display: flex;
    justify-content: center;  /* horizontal center */
   /* align-items: center;       vertical center */
  /*  height: 100vh;            /* full viewport height */
  display: flex;
  /*align-items: flex-start; /* aligns items at the top */
    z-index: 3;
  }

  .centered {
    padding: 20px;
    border-radius: 8px;
  }
.container-name {
  display: flex;
  justify-content: flex-start; /* aligns items to the left */
  margin-top: 80px;
  left: -10px

}

div.relative {
  position: relative;
  width: 400px;
  height: 200px;
  
} 
div.lable{
  position: relative;
  top: -12px;
  left: 100px;
  
}
div.textf{
  box-sizing: border-box;
  padding: 15px;
  z-index: 1;
}
div.relative1{
    position: relative; 
    display: flex;
    justify-content: center;
    top: -175px;    
    left: 227px;
} 
.center{
  
  margin: 0 auto;
}
.thebutton{
  display: flex;
  justify-content: center;
  position: relative; 
  margin: 0 auto;
  top: -175px;
}
.movetofront{
    position: relative; 
    z-index: 99;  
}
.movetoback{
    z-index: -1;  
}

</style>
   </head>

   <body class="black-section">
<section>
  <nav class="navbar navbar-expand-lg bg-black py-4">
    <div class="container-fluid">
      <a class="navbar-brand fs-3 gradient-bgW" href="./index.html">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-car-front-fill" viewBox="0 0 16 16">
          <path d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679q.05.242.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5
          0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.8.8 0 0
          0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2m10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2M6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2zM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17s3.688.097 4.597.17a.51.51 0 0
          0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z"/>
        </svg>
        Luxo Detailing
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link fs-4 gradient-bgW" aria-current="page" href="./index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-4 gradient-bgW" href="./AboutUs.html">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-4 gradient-bgW" href="./Services.html">Services</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</section>
   
      <?php
         echo  nl2br("Your response has been recorded.\nWe will respond within five busness days.");

      ?>
<section>
  <footer class="py-3">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3 gradient-bgW">
        <li class="nav-item"><a href="./index.html" class="nav-link px-2 text-body-secondary gradient-bgW">Home</a></li>
        <li class="nav-item"><a href="./AboutUs.html" class="nav-link px-2 text-body-secondary gradient-bgW">About Us</a></li>
        <li class="nav-item"><a href="./Services.html" class="nav-link px-2 text-body-secondary gradient-bgW">Services</a></li>
	     <li class="nav-item"><a href="./quote.html" class="nav-link px-2 text-body-secondary gradient-bgW">Get a quote</a></li>
    </ul>
    <p class="text-center text-body-secondary gradient-bgW">© 2025 Luxo Detailing, Inc</p>
  </footer>
</section>
   </body>
</html>