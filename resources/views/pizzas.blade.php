<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/fe5f309870.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    <title>Pizza-king-Gör din beställning</title>
</head>
<body>

    <header>
      <h1>PIZZA-KING</h1>
        <nav class="navbar navbar-expand-lg fixed top">
          <a class="navbar-brand ms-5"><img src=></a>
              <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-my-2 my-sm-0 search-button" type="submit">Search</button>
              </form>
            </div>
          </nav>
    </header>
    
        <div class="container pt3">
            <div class="heading"><h1 class="heading-content">Vad vill du äta idag?</h1></div>
            <div class="row">
              @foreach($pizzas as $pizza)
              <div class="col-sm-4">
                <div class="card-columns-fluid">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top"> <i class="fas fa-pizza-slice"></i>
                    <div class="card-body">
                      <p class="card-text">Pizza: <a href="/pizzaprofile?id={{$pizza->PizzaId}}">{{$pizza->name}} </a></p>
                      <p class="card-text">Pris: {{$pizza->price}}</p>
                    </div>
                  </div>
              </div>
            </div>
            @endforeach
          </div>
          </div>
        
 
    <footer>
      <div class="container-footer">
        <div class="row">
          <div class="col-sm">
            <div class="footer-heading">Contact<br>Pizza-king<br>Fisksätra torg<br>133 41 Saltsjöbaden</div>
          </div>
          <div class="col-sm">
            <div class="footer-copy">© 2021 Pizza-king<br><a class="footer-link" href="http://www.republicrecords.com/#block-block-21Support">Pizza-king</a></div>
          </div>
          <div class="col-sm">
            <div class="footer-heading">Följ oss på sociala medier<br>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
              <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
              <li> <a href="#"><i class="fa fa-linkedin"></i></a></li>
             </div>
          </div>
        </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>