<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<style>
#carouselExampleIndicators{
    width: 600px; height: 400px; margin:auto; padding-top: 30px; padding-bottom: 50px; margin-bottom :70px;
}
  .carousel-control-prev-icon,
  .carousel-control-next-icon{
      height: 60px;
      width: 60px;
      margin-top: 30px;
  }

@media (max-width:1000px){
  #carouselExampleIndicators{
    width: 400px;
    height: 340px;
  }

  img{
    width: 350px;
    height: 300px;
  }
}
  
/* Extra small devices (phones, 600px and down) */
@media (min-width: 320px) and (max-width: 600px){
  #carouselExampleIndicators{
    width: 300px;
    height: 250px;
    margin-right: 5px;
    margin-left: 0;
  }

  img{
    width: 250px;
    height: 200px;
  }
}
  
</style>
  
</head>
  
<body>
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  
  <div class="carousel-indicators">  
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/Untitled201.png" class="d-block w-100" alt="..." width="350" height="380">
    </div>
    <div class="carousel-item">
      <img src="images/Untitled213_20221109194559.png" class="d-block w-100" alt="..." width="350" height="380">
    </div>
    <div class="carousel-item">
      <img src="images/aboutUs.jpeg" class="d-block w-100" alt="..." width="350" height="380">
    </div>
  </div>
  
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  
  
</body>
</html> 
