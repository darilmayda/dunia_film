<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  /*transition: 0.6s ease;*/
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>

<div class="slideshow-container" style="box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%); transition: 0.3s;">
    <div class="mySlides">
      <div class="numbertext">1 / 3</div>
      <img src="assets/images/background/banner.jpeg" style="width:100% ; height: 450px">
      <!-- <div class="text"><h1 style="color: black;">Coming Soon</h1></div> -->
      <div class="alert alert-secondary" role="alert">
        <h3 style="color: black; text-align: center;">Coming Soon</h3>
      </div>  
    </div>

    <div class="mySlides ">
      <div class="numbertext">2 / 3</div>
      <img src="assets/images/background/banner2.jpeg" style="width:100%; height: 450px">
      <div class="alert alert-secondary" role="alert">
        <h3 style="color: black; text-align: center;">Coming Soon</h3>
      </div>
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 3</div>
      <img src="assets/images/background/banner3.jpg" style="width:100%; height: 450px">
      <div class="alert alert-secondary" role="alert">
        <h3 style="color: black; text-align: center;">Coming Soon</h3>
      </div>
    </div>

    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<div class="pt-3">
    <div class="heading-section text-center" >
        <h1>LIST FILM</h1>
    </div>
    <div class="card" style="box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%); transition: 0.3s;">
    	<div class="row" id="div_listfilm">
    	</div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="<?php echo base_url('assets/js/jquery/jquery.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/popper/popper.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
<script type="text/javascript">
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
    }
</script>
<script type="text/javascript">

 	$(document).ready(function() {              
        $.ajax({  
            url: '<?php echo site_url('Dashboard/getDataFilm')?>',  
            type: 'GET',  
            dataType: 'json',   
            success: function(data, textStatus, xhr) {
                // console.log(data)
                var html = ''
                var component = ''
                for (var x = 0; x < data.length; x++) {
                    component = component + `
                                <div class="col-lg-3">
                                    <div class="card-body p-4">
                                        <div class="card" style="width: 16rem;">
                                          <img class="card-img-top" src="assets/images/film/${data[x]['thumbnail']}" alt="Card image cap" style="height:310px">
                                          <div class="card-body">
                                            <h5 class="card-title">${data[x]['judul_film']}</h5>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <a href="javascript: void(0)" onclick="FilmDetail('${data[x]['id']}', '${data[x]['judul_film']}')" class="btn btn-primary">Detail</a>
                                                </div>
                                                <div class="col-md-8" align="right" style="font-size: 0.9rem;">
                                                    Durasi : ${data[x]['durasi']}
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                </div>`
                }

                $("#div_listfilm").html(component); 
            },  
            error: function(xhr, textStatus, errorThrown) {  
                console.log('Error in Database');
            }  
        });  
    });

    function FilmDetail(id, name) {
        localStorage.setItem('film_id', id); 
        localStorage.setItem('film_name', name); 
        window.location.href = "Detail";
    }
</script>
