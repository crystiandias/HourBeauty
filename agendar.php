<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
<link href='lib/main.css' rel='stylesheet' />
<script src='lib/main.js'></script>
<script src='lib/locales/pt-br.js'></script>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>StarBeauty</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  <link rel="shortcut icon" href="logo.png">
  <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
 <style type="text/css">


   
.top-nav-collapse {
  background: #151215 !important;
}
h3{
background: rgb(145,34,195) !important;
background: linear-gradient(0deg, rgba(145,34,195,1) 0%, rgba(200,125,219,1) 50%, rgba(253,45,174,1) 100%) !important;
-webkit-background-clip: text !important;
-webkit-text-fill-color: transparent !important;
}

h1{
background: rgb(145,34,195) !important;
background: linear-gradient(0deg, rgba(145,34,195,1) 0%, rgba(200,125,219,1) 50%, rgba(253,45,174,1) 100%) !important;
-webkit-background-clip: text !important;
-webkit-text-fill-color: transparent !important;
}
#star{
background: rgb(145,34,195) !important;
background: linear-gradient(0deg, rgba(145,34,195,1) 0%, rgba(200,125,219,1) 50%, rgba(253,45,174,1) 100%) !important;
-webkit-background-clip: text !important;
-webkit-text-fill-color: transparent !important;
font-size: 25px !important;
}
#star2{
background: rgb(145,34,195) !important;
background: linear-gradient(0deg, rgba(145,34,195,1) 0%, rgba(200,125,219,1) 50%, rgba(253,45,174,1) 100%) !important;
-webkit-background-clip: text !important;
-webkit-text-fill-color: transparent !important;
}
.fc-next-button{
  background-color: rgb(145,34,195) !important;
}
.fc-prev-button{
  background-color: rgb(145,34,195) !important;
}
tr {
    border: 1px solid white !important;
}
.fc-daygrid-day-number{
  font-size: 20px;
}
  #calendar {
    max-width: 1000px;
    margin: 0 auto;
    background-color: #151215;
    padding: 20px;color: rgb(145,34,195);

  }
  tr:after{

    background-color: white !important;
  }
/*
#btnhover{
  transition-duration: 0.4s;
}

#btnhover:hover {
  background-color: #151215 !important 
}
*/
#btnprocedimentos {
    transform:scale(1);
    .modal-background {
      background:rgba(0,0,0,.0);
      animation: fadeIn .5s cubic-bezier(0.165, 0.840, 0.440, 1.000) forwards;
      .modal {
        height:75px;
        width:75px;
        border-radius:75px;
        overflow:hidden;
        animation: bondJamesBond 1.5s cubic-bezier(0.165, 0.840, 0.440, 1.000) forwards;
        h2,p {
          opacity:0;
          position:relative;
          animation: modalContentFadeIn .5s 1.4s linear forwards;
        }
      }
    }



 </style>





<script>

$(document).ready(function(){

$("#btnprocedimentos").hide();

});


  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      headerToolbar: {

        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      locale: 'pt-br',
      navLinks: true, // can click day/week names to navigate views
      selectable: true,
      selectMirror: true,
      select: function(arg) {


        $("#btnprocedimentos").click();
        
        $("#btnagendar").click(function(){
          var procedimento = $("#procedimento").val();
          var time = $("#time").val();
          calendar.addEvent({
            title: procedimento,
            start: arg.start

          })
        $("#fechar").click();
        });

        calendar.unselect()
      },
      eventClick: function(arg) {
        if (confirm('Você gostaria de cancelar o horário?')) {
          arg.event.remove()
        }
      },
      editable: true,
      dayMaxEvents: true, // allow "more" link when too many events
      events: [
        {
          title: 'Corte',
          start: '2020-10-03T10:30:00',
          end: '2020-10-03T11:00:00'
        },
        {
          title: 'Botox',
          start: '2020-10-19T14:30:00',
          end: '2020-10-19T15:00:00'
        },
        {
          title: 'corte',
          start: '2020-10-26T10:30:00',
          end: '2020-10-26T12:30:00'
        },
        {
          title: 'Pé e mão',
          start: '2020-10-29T10:30:00',
          end: '2020-10-29T12:30:00'
        },
        {
          title: 'Progressiva',
          start: '2020-10-27T10:30:00',
          end: '2020-10-27T12:30:00'
        },
        {
          title: 'Mão',
          start: '2020-10-25T10:30:00',
          end: '2020-10-25T12:30:00'
        },
        {
          title: 'Pé',
          start: '2020-10-22T10:30:00',
          end: '2020-10-22T12:30:00'
        },
        {
          title: 'Corte',
          start: '2020-10-12T10:30:00',
          end: '2020-10-12T12:30:00'
        },
        {
          title: 'Botox',
          start: '2020-10-05T20:30:00',
          end: '2020-10-05T20:30:00'
        },
        {
          title: 'Pé e mão',
          start: '2020-10-14T10:30:00',
          end: '2020-10-14T12:30:00'
        },
        {
          title: 'Progressiva',
          start: '2020-10-15T08:30:00',
          end: '2020-10-15T09:30:00'
        },
        {
          title: 'Corte',
          start: '2020-10-13T10:30:00',
          end: '2020-10-13T11:00:00'
        }
      ]
    });

    calendar.render();
  });

</script>

</head>
<body>

          <nav class="navbar navbar-expand-lg navbar-dark scrolling-navbar" style="">
            <div class="container">
              <a class="navbar-brand" href="#"><div style="font-family: 'Lexend Deca';font-size: 30px !important"><span id="star">STAR</span>Beauty</div></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
                <ul class="navbar-nav mr-auto">
                </ul>
              </div>
            </div>
          </nav>


  <div class="calendario mt-5 mb-5" id="calendar"></div>





<div class="modal fade" id="modalScheduleForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h1 class="modal-title w-100 font-weight-bold">Marcar horário</h1>
        <button id="fechar" type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="color: red">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          
  <select id="procedimento" class="browser-default custom-select">
  <option selected disabled>O que você gostária de fazer?</option>
  <option value="Botox">Botox</option>
  <option value="Corte">Corte</option>
  <option value="Progressiva">Progressiva</option>
  <option value="Unha Pé">Unha - Pé</option>
  <option value="Unha Mão">Unha - Mão</option>
    </select>

        </div>

        <div class="md-form mb-4">
          <i class="fas fa-calendar prefix grey-text"></i>
          <input id="time" type="time" id="dataehora" class="form-control validate" min="today">
        </div>



      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button id="btnagendar" class="btn btn btn-secondary" style="background-color: #9322C3">Agendar</button>
      </div>
    </div>
  </div>
</div>

<button id="btnprocedimentos" data-toggle="modal" data-target="#modalScheduleForm"></button>


<footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="widget contact-widget">
                <h3 class="widget-title">Contato</h3>
                <div class="contact-info">
                  <address>
                    <img src="images/icon-map-small.png" class="icon">
                    <p><strong>STARBeauty</strong> 855 Avenina bonita, São Paulo</p>
                  </address>
                  <a href="mailto:HourBeauty@companyname.com" class="mail"><img src="images/icon-envelope-small.png" class="icon">Hourbeauty@companyname.com</a>
                  <a href="tel:(11)942042259" class="phone"><img src="images/icon-phone-small.png" class="icon">(500)942042259</a>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="widget">
                <h3 class="widget-title">Social Media</h3>
                <p>Nos siga em nossas redes sociais!</p>
                <div class="social-links" style="">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                  <a href="#"><i class="fa fa-pinterest"></i></a>
                </div>
              </div>
            </div>

          </div>


        </div>
      </footer>




  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
    
</body>
</html>