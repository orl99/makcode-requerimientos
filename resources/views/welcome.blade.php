<!DOCTYPE html>
<html>
<head>
  <title>Tests | Makcode Apps</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>


<nav class="py-3" style="width:100%;background-color:#2C3E50;">
    <div class="container">
        <div class="row">
            <div class="col-xl-3">
                <img class="img-fluid" src="https://makcode.tech/img/logo2.png">
            </div>
            <div class="col-xl-9"></div>
        </div>
    </div>
</nav>
<section>
	<img class="img-fluid" src="{{asset ('img/banner.webp')}}">
</section>

<div class="container mt-5">
    <div class="col-xl-12 text-center">
        <h2>Ayudanos a conocer mas tu idea de proyecto</h2>
    </div>
    <form method="POST" action="{{ route('messages') }}">
        {{ csrf_field() }}
    <div class="row mt-5">
        <div class="col-xl-7 mt-4">
            <label><i class="fas fa-user"></i> Nombre</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="col-xl-5 mt-4">
            <label><i class="fas fa-envelope"></i> Email</label>
             <input type="email" name="email" class="form-control">
        </div>
        <div class="col-xl-4 mt-4">
            <label><i class="far fa-building"></i> Empresa</label>
            <input type="text" name="company" class="form-control">
        </div>
        <div class="col-xl-3 mt-4">
            <label><i class="fab fa-whatsapp" style="color:#1E8449;"></i> Whatapp</label>
            <input type="tel" name="what" class="form-control">
        </div>
        <div class="col-xl-5 mt-4">
            <label><i class="fas fa-concierge-bell"></i> Tipo de Servicio</label>
             <select class="form-control" name="service">
                 <option>App Movil</option>
                 <option>App-Web</option>
                 <option>Web site</option>
             </select>
        </div>
        <div class="col-xl-12 mt-5"><p>Hola! este es una breve test para saber cual es su nesecidad en su proyecto </p></div>
        <div class="col-xl-12 mt-4">
            <label><h6>¿Puede por favor describir su negocio?</h6></label>
            <textarea class="form-control" name="area1" rows="4"></textarea>
        </div>
        <div class="col-xl-12 mt-4">
            <label><h6>Ahora describa detalladamente la idea de su  proyecto</h6></label>
            <textarea class="form-control" name="area2" rows="4"></textarea>
        </div>
        <div class="col-xl-12 mt-5"><p>A continucion le solicitamos que de respuesta a las siguientes preguntas para poder brindarle un mejor servicio.</p></div>
        <div class="col-xl-12 mt-4">
            <label><i class="fas fa-code"></i> ¿Quiénes son sus competidores?</label>
            <div class="col-xl-12"><p><i class="fas fa-hand-point-right"></i> <b>Nota:</b> Es esencial saber quiénes son sus competidores y lo que están ofreciendo.</div>
            <input type="text" name="quest1" class="form-control">
        </div>
        <div class="col-xl-12 mt-4">
            <label><i class="fas fa-code"></i> ¿Para qué plataformas requiere la aplicación?</label>
            <select class="form-control" name="quest2">
                 <option>Android (Smartphone comun)</option>
                 <option>iOS (Iphone)</option>
                 <option>Android y iOS </option>
             </select>
        </div>
        <div class="col-xl-12 mt-4">
            <label><i class="fas fa-code"></i> ¿App híbrida o nativa? <a href="javascript:void(0)" data-toggle="popover" data-trigger="hover" title="híbrida o nativa" data-content="Las apps nativas son las desarrolladas íntegramente en el entorno de desarrollo específico de cada sistema operativo, permitiendo aprovechar al máximo las características de cada terminal. Las híbridas son las que, además de incluir el desarrollo nativo, también incluyen parte en lenguaje web (HTML5), lo que permite un desarrollo más sencillo para diversas plataformas."><i class="fas fa-question-circle"></i></a></label>
            <script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();   
});
</script>
            <input type="text" name="quest3" class="form-control">
        </div>
        <div class="col-xl-12 mt-4">
            <label><i class="fas fa-code"></i> ¿Necesita un  login para cada usuario?</label>
            <input type="text" name="quest4" class="form-control">
        </div>
        <div class="col-xl-12 mt-4">
            <label><i class="fas fa-code"></i> ¿Permiso para compartir en redes sociales?</label>
            <input type="text" name="quest5" class="form-control">
        </div>
        <div class="col-xl-12 mt-4">
            <label><i class="fas fa-code"></i> ¿Qué Recursos  del Smartphone se utilizarán?(Cámara, geo localización, contactos, etc)</label>
            <input type="text" name="quest6" class="form-control">
        </div>
        <div class="col-xl-12 mt-4">
            <label><i class="fas fa-code"></i> Diseño de la  app ¿tiene algunas ideas?</label>
            <input type="text" name="quest7" class="form-control">
        </div>
        <div class="col-xl-12 mt-4">
            <label><i class="fas fa-code"></i> ¿Cuál es su fecha límite para terminar la Aplicación?</label>
            <input type="text" name="quest8" class="form-control">
        </div>
        <div class="col-xl-12 mt-4">
            <label><i class="fas fa-code"></i> ¿Cuál es su presupuesto aproximado para este proyecto?</label>
            <input type="text" name="quest9" class="form-control">
        </div>
    </div>
    
    <div class="col-xl-12 mt-5 mb-5">
        <button type="submit" class="btn btn-primary btn-block btn-lg"><i class="far fa-paper-plane"></i> Enviar Cuestionario</button>
    </div>
    </form>
    
    
</div>



















</body>
</html>