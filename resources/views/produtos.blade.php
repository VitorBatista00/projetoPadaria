@extends('common.mdb-fullpage')

@section('content')

<!DOCTYPE html>
<html lang="en" class="full-height">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<!DOCTYPE html>
<html lang="en" class="full-height">


<head>
  <body>
<header>

<head>
  
  
 <nav class="navbar navbar-expand-lg navbar-light bg-white">
  <div class="container-fluid">
    
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <a class="navbar-brand mt-2 mt-lg-0" href="\">
        <img
          src="/imagens/logo1.png"
          height="60"
          alt="MDB Logo"
          loading="lazy"
          
        />
      </a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="\">Pagina principal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="\produtos">Cardapio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="\contato">Encomendas</a>
        </li>
      </ul>
    </div>
    
  </div>
</nav>

<main id="cardapio">
<hr class="mb-5 mt-4">      
      <section class="section extra-margins pb-3 wow fadeIn" data-wow-delay="0.3s">       
        <h2 class="text-center my-5 text-center h3 pt-3">Cardapio:</h2>
      <hr class="mb-5 mt-4"> 

        <div class="row">

          
          <div class="col-lg-4 col-md-12 mb-4">

           
            <div class="card">
             
            <div class="view overlay">
                <img src="/imagens/baguete.jpg" class="card-img-top" width: 20px;
                  alt="">
                <a>
                  <div class="mask"></div>
                </a>
              </div>
              <div class="card-body">
                <a class="activator mr-3"></a>
                <h4 class="card-title">Baguete</h4>
                <hr>
                <p class="card-text">Deliciosos baguetes com diversos recheios </p>
                <a class="link-text">
                  <h5><a class="nav-link" ></h5>              
                </a>
              </div>
            </div>
      
          </div>
          <div class="col-lg-4 col-md-6 mb-4">

            <div class="card">
              <div class="view overlay">
                <img src="/imagens/paoalho.jpeg" class="card-img-top" width: 20px;
                  alt="">
                <a>
                  <div class="mask"></div>
                </a>
              </div>
              <div class="card-body">
                <a class="activator mr-3"></a>
                <h4 class="card-title">Pão de alho recheado</h4>
                <hr>
                <p class="card-text">Uma explosão de sabores. Aproveite!</p><br>
                <a class="link-text">
                  <h5><a class="nav-link" ></a></h5>
                </a>
              </div>
            </div>
      
          </div>
          <div class="col-lg-4 col-md-6 mb-4">

            <div class="card">
              <div class="view overlay">
                <img src="/imagens/paodoce.webp" class="card-img-top" 
                  alt="">
                <a>
                  <div class="mask"></div>
                </a>
              </div>
              <div class="card-body">
                <a class="activator mr-3"></a>
                <h4 class="card-title">Pão doce</h4>
                <hr>
                <p class="card-text">O queridinho da casa. Ótimo no café da manhã</p><br><br><br>
                <a class="link-text">
                  <h5><a class="nav-link" ></a></h5>
                </a>
              </div>
            </div>
      
          </div>
      
        </div>
      
      </section> 

<hr>

<hr class="mb-5 mt-4">      
      <section> 
        <div class="row">

          
          <div class="col-lg-4 col-md-12 mb-4">

           
            <div class="card">
             
            <div class="view overlay">
                <img src="/imagens/pao-sovado.jpg" class="card-img-top"
                  alt="">
                <a>
                  <div class="mask"></div>
                </a>
              </div>
              <div class="card-body">
                <a class="activator mr-3"></a>
                <h4 class="card-title">Pão sovado</h4>
                <hr>
                <p class="card-text">Alternativa para quem esta cansado do pão tradicional</p>
                <a class="link-text">
                  <h5><a class="nav-link" ></h5><br><br><br><br>              
                </a>
              </div>
            </div>

          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="view overlay">
                <img src="/imagens/rosquinhas.webp" class="card-img-top"
                  alt="">
                <a>
                  <div class="mask"></div>
                </a>
              </div>
              <div class="card-body">
                <a class="activator mr-3"></a>
                <h4 class="card-title">Rosquinhas</h4>
                <hr>
                <p class="card-text">Perfeitas para adoçar a vida.</p><br>
                <a class="link-text">
                  <h5><a class="nav-link" ></a></h5><br><br><br> 
                </a>
              </div>
            </div>

          </div>
          <div class="col-lg-4 col-md-6 mb-4">

            <div class="card">
              <div class="view overlay">
                <img src="/imagens/demais.jpeg" class="card-img-top"
                  alt="">
                <a>
                  <div class="mask"></div>
                </a>
              </div>
              <div class="card-body">
                <a class="activator mr-3"></a>
                <h4 class="card-title">Encomende outros produtos</h4>
                <hr>
                <p class="card-text">Encomendas para festas e afins, doces e salgados.

                </p><br><br><br>
                <a class="link-text">
                <h5><a class="nav-link" href="\contato">Clique Aqui!!! <i class="fas fa-chevron-right"></i></a></h5>
                </a>
              </div>
            </div>

          </div>

        </div>

      </section> 

      </main>
</body>

</html>