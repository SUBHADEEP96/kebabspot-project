<!DOCTYPE html>
<html>
<head>
<!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	  
 <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">   

<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!--jquery cdn -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Compiled and minified JavaScript -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" /><link href='https://fonts.googleapis.com/css?family=Abril Fatface' rel='stylesheet'>
<title>Kebab Spot</title>
<style>
*{font-family: 'Josefin Sans', sans-serif;}

section{
	width:90%;
	margin:auto;
	margin-top:80px;
	
}
</style>
</head>
<body>
<!--Navigation Bar-->
<nav class="pink darken-1">
    <div class="nav-wrapper container">
      <a href="#!" class="brand-logo">Kebabspot</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Menu</a></li>
		  <a class="waves-effect waves-light btn modal-trigger pink accent-2" href="#modal1">Order Online</a>

        <li><a href="#">Contact</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
   <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Menu</a></li>
		<a class="waves-effect waves-light btn modal-trigger pink accent-2" href="#modal1">Order Online</a>
        <li><a href="#">Contact</a></li>
  </ul>
  
<!--Home slider-->

  <div class="carousel carousel-slider">
    <a class="carousel-item" href="#"><img src="image/sl1.jpg"></a>
  <div class="carousel-fixed-item center">
  <h4 class="white-text">Best Kebabs in The City</h4>
<a class="waves-effect waves-light btn pink darken-1" href="about.php">More Info
<i class="material-icons right">send</i>
</a>
  </div>  
	<a class="carousel-item" href="#"><img src="image/sl2.jpg"></a>
    
	<a class="carousel-item" href="#"><img src="image/sl3.jpg"></a>
    
	<a class="carousel-item" href="#"><img src="image/sl2.jpg"></a>
  
  </div>
          
  <!--Floating Button-->
  
<div class="fixed-action-btn">
  <a class="btn-floating btn-large pink darken-1">
    <i class="large material-icons">mode_edit</i>
  </a>
  <ul>
    <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
    <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
    <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
    <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
  </ul>
</div>
<!--About us-->
<section>
<h2 class="center-align red-text">About Us</h2>
<div class="row">
<div class="col s4 m4 l4 offset-l4 offset-s4 offset-m4"><hr></div>

</div>
<div class="row">
<div class="col m6 s12">
<img src="image/about.jpg" class="responsive-img">

</div>

<div class="col m6 s12">
<h4>Why Us ?</h4>
<p>If you are in the mood for something delicious then you are in the right place. At Kebab Spot, our expert chefs prepare the very best in everything Kebab. Our menu offers something for everyone to love. Choose from Chicken Kebab, Falafel, our Kebab Spot Special, and many other amazing dishes. Check out Kebab Spot on Moorabool St in Geelong, where we give you great food, superb service and a welcoming atmosphere. Visit us today to dine-in with us, or use our online ordering system to have a piping hot delicious meal brought to your home.</p>
<a href="about.php" class="waves-effect waves-light btn pink darken-1">Know More</a>
</div>

</div>
</section> 
  <!--Special Menu-->
  <section>
<h2 class="center-align red-text">Our Special Menu</h2>
<div class="row">
<div class="col s4 m4 l4 offset-l4 offset-s4 offset-m4"><hr></div>
</div>

<div class="row">

<div class="col m4 l4 s12">
    <div class="card hoverable">
        <div class="card-image">
          <img src="image/sl3.jpg" class="responsive-img">
          <span class="card-title">Kebabs</span>
          <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
        </div>
        <div class="card-content">
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
        </div>
		<div class="card-action">
          <a href="menu.php">View More</a>
        </div>
      </div>
    </div>

<div class="col m4 l4 s12">
    <div class="card hoverable">
        <div class="card-image">
          <img src="image/sl1.jpg" class="responsive-img">
          <span class="card-title">Open Kebab Platter</span>
          <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
        </div>
        <div class="card-content">
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
        </div>
		<div class="card-action">
          <a href="menu.php">View More</a>
        </div>
      </div>
    </div>
	
	<div class="col m4 l4 s12">
    <div class="card hoverable">
        <div class="card-image">
          <img src="image/sl2.jpg" class="responsive-img">
          <span class="card-title">Snacks</span>
          <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
        </div>
        <div class="card-content">
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
        </div>
		<div class="card-action">
          <a href="menu.php">View More</a>
        </div>
      </div>
    </div>



</div>
</section> 
  <!--contact us-->
  <section>
<h2 class="center-align red-text">Contact us</h2>
<div class="row">
<div class="col s4 m4 l4 offset-l4 offset-s4 offset-m4"><hr></div>
</div>

<div class="row">

<div class="col m6 l6 offset-l3">

<div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Enter Your Name" id="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="mobile" type="text" class="validate" data-length="10">
          <label for="text">Mobile</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea"></textarea>
          <label for="textarea1">Textarea</label>
        </div>
      </div>
	  <div class="file-field input-field">
      <div class="btn pink darken-1">
        <span>File</span>
        <input type="file">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>
	  <button class="btn waves-effect waves-light pink darken-1" type="submit" name="action" onclick="M.toast({html: 'Your information has successfully submitted'})">Submit
    <i class="material-icons right">send</i>
  </button>
        
    </form>
  </div>


</div>

</div>


</section>
<!--modal-->
<!-- Modal Trigger 
  <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>-->

  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>You will be Ordering from here very soon</h4>
      <p>Thank You!</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat pink darken-1">Ok</a>
    </div>
  </div>
          
<!--footer-->

 <footer class="page-footer pink darken-1">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Kebabspot</h5>
                <p class="grey-text text-lighten-4">Best Kebab in Your City</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Company</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="about.php">About</a></li>
                  <li><a class="grey-text text-lighten-3" href="menu.php">Menu</a></li>
                  <li><a class="grey-text text-lighten-3" href="contact.php">Contact</a></li>
                  
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2019 kebabspot.com || Powered by Thinksurfmedia
            <a class="grey-text text-lighten-4 right" href="#">www.kebabspot.com</a>
            </div>
          </div>
        </footer>


<script>
$(document).ready(function(){
    $('.sidenav').sidenav();
	$('.carousel.carousel-slider').carousel({
    fullWidth: true,
	indicators: true
  });
	
 
    $('.fixed-action-btn').floatingActionButton();
	
    $('input#mobile').characterCounter();
	$('.modal').modal();
       
  });
</script>
</body>
</html>