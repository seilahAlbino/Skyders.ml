<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/creditcard.css">
    <link rel="icon" type="image/png" href="images/fi.png"/>
</head>
<body>

<?php
    require_once "utils/connection.php";
    require_once "utils/functions.php";
session_start();
?>

<div class="checkout">
  <div class="credit-card-box">
    <div class="flip">
      <div class="front">
        <div class="chip"></div>
        <div class="logo">
          <svg version="1.1" id="visa" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
               width="47.834px" height="47.834px" viewBox="0 0 47.834 47.834" style="enable-background:new 0 0 47.834 47.834;">
            <g>
              <g>
                <path d="M44.688,16.814h-3.004c-0.933,0-1.627,0.254-2.037,1.184l-5.773,13.074h4.083c0,0,0.666-1.758,0.817-2.143
                         c0.447,0,4.414,0.006,4.979,0.006c0.116,0.498,0.474,2.137,0.474,2.137h3.607L44.688,16.814z M39.893,26.01
                         c0.32-0.819,1.549-3.987,1.549-3.987c-0.021,0.039,0.317-0.825,0.518-1.362l0.262,1.23c0,0,0.745,3.406,0.901,4.119H39.893z
                         M34.146,26.404c-0.028,2.963-2.684,4.875-6.771,4.875c-1.743-0.018-3.422-0.361-4.332-0.76l0.547-3.193l0.501,0.228
                         c1.277,0.532,2.104,0.747,3.661,0.747c1.117,0,2.313-0.438,2.325-1.393c0.007-0.625-0.501-1.07-2.016-1.77
                         c-1.476-0.683-3.43-1.827-3.405-3.876c0.021-2.773,2.729-4.708,6.571-4.708c1.506,0,2.713,0.31,3.483,0.599l-0.526,3.092
                         l-0.351-0.165c-0.716-0.288-1.638-0.566-2.91-0.546c-1.522,0-2.228,0.634-2.228,1.227c-0.008,0.668,0.824,1.108,2.184,1.77
                         C33.126,23.546,34.163,24.783,34.146,26.404z M0,16.962l0.05-0.286h6.028c0.813,0.031,1.468,0.29,1.694,1.159l1.311,6.304
                         C7.795,20.842,4.691,18.099,0,16.962z M17.581,16.812l-6.123,14.239l-4.114,0.007L3.862,19.161
                         c2.503,1.602,4.635,4.144,5.386,5.914l0.406,1.469l3.808-9.729L17.581,16.812L17.581,16.812z M19.153,16.8h3.89L20.61,31.066
                         h-3.888L19.153,16.8z"/>
              </g>
            </g>
          </svg>
        </div>
        <div class="number"></div>
        <div class="card-holder">
          <label>Nome</label>
          <div></div>
        </div>
        <div class="card-expiration-date">
          <label>Validade</label>
          <div></div>
        </div>
      </div>
      <div class="back">
        <div class="strip"></div>
        <div class="logo">
          <svg version="1.1" id="visa" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
               width="47.834px" height="47.834px" viewBox="0 0 47.834 47.834" style="enable-background:new 0 0 47.834 47.834;">
            <g>
              <g>
                <path d="M44.688,16.814h-3.004c-0.933,0-1.627,0.254-2.037,1.184l-5.773,13.074h4.083c0,0,0.666-1.758,0.817-2.143
                         c0.447,0,4.414,0.006,4.979,0.006c0.116,0.498,0.474,2.137,0.474,2.137h3.607L44.688,16.814z M39.893,26.01
                         c0.32-0.819,1.549-3.987,1.549-3.987c-0.021,0.039,0.317-0.825,0.518-1.362l0.262,1.23c0,0,0.745,3.406,0.901,4.119H39.893z
                         M34.146,26.404c-0.028,2.963-2.684,4.875-6.771,4.875c-1.743-0.018-3.422-0.361-4.332-0.76l0.547-3.193l0.501,0.228
                         c1.277,0.532,2.104,0.747,3.661,0.747c1.117,0,2.313-0.438,2.325-1.393c0.007-0.625-0.501-1.07-2.016-1.77
                         c-1.476-0.683-3.43-1.827-3.405-3.876c0.021-2.773,2.729-4.708,6.571-4.708c1.506,0,2.713,0.31,3.483,0.599l-0.526,3.092
                         l-0.351-0.165c-0.716-0.288-1.638-0.566-2.91-0.546c-1.522,0-2.228,0.634-2.228,1.227c-0.008,0.668,0.824,1.108,2.184,1.77
                         C33.126,23.546,34.163,24.783,34.146,26.404z M0,16.962l0.05-0.286h6.028c0.813,0.031,1.468,0.29,1.694,1.159l1.311,6.304
                         C7.795,20.842,4.691,18.099,0,16.962z M17.581,16.812l-6.123,14.239l-4.114,0.007L3.862,19.161
                         c2.503,1.602,4.635,4.144,5.386,5.914l0.406,1.469l3.808-9.729L17.581,16.812L17.581,16.812z M19.153,16.8h3.89L20.61,31.066
                         h-3.888L19.153,16.8z"/>
              </g>
            </g>
          </svg>

        </div>
        <div class="ccv">
          <label>CVV2</label>
          <div></div>
        </div>
      </div>
    </div>
  </div>
  <form class="form" autocomplete="off" method="POST">
    <fieldset>
      <label for="card-number">Número do Cartão</label>
      <input type="num" id="card-number" class="input-cart-number" maxlength="4" required />
      <input type="num" id="card-number-1" class="input-cart-number" maxlength="4" required />
      <input type="num" id="card-number-2" class="input-cart-number" maxlength="4" required />
      <input type="num" id="card-number-3" class="input-cart-number" maxlength="4" required />
    </fieldset>
    <fieldset>
      <label for="card-holder">Nome</label>
      <input type="text" id="card-holder" required />
    </fieldset>
    <fieldset class="card-expire">
      <label for="expire-month">Validade</label>
      <div class="select">
        <select id="expire-month" required>
          <option></option>
          <option>01</option>
          <option>02</option>
          <option>03</option>
          <option>04</option>
          <option>05</option>
          <option>06</option>
          <option>07</option>
          <option>08</option>
          <option>09</option>
          <option>10</option>
          <option>11</option>
          <option>12</option>
        </select>
      </div>
      <div class="select">
        <select id="expire-year" required>
          <option></option>
          <option>2016</option>
          <option>2017</option>
          <option>2018</option>
          <option>2019</option>
          <option>2020</option>
          <option>2021</option>
          <option>2022</option>
          <option>2023</option>
          <option>2024</option>
          <option>2025</option>
        </select>
      </div>
    </fieldset>
    <fieldset class="fieldset-ccv">
      <label for="card-ccv">CVV2</label>
      <input type="text" id="card-ccv" maxlength="3" />
    </fieldset>
    <input type="submit" class="btn" name="pagar" value="Pagar" >

    
      <?php
        session_start();
      if(isset($_POST['pagar'])){
        


        $from = "skyders87@gmail.com";
        $headers = "From: " . $from . "\r\n";
                        $headers .= "Reply-To: ". $from . "\r\n";
                        $headers .= "CC: aasd\r\n";
                        $headers .= "MIME-Version: 1.0\r\n";
                        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
            
                        $subject = "< Compras - Skyders >";
                        $message = "Obrigado pela sua compra senhor (a) ".$_SESSION['nome']. ", esperemos que goste :D";

                  mail($_SESSION['email'], $subject, $message, $headers);
                  ?>
                  <script> alert("Foi-lhe enviado um email")
                window.location.href = 'index.php';
                </script>
                  <?php
      }
      ?>
      
  </form>
</div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script>
$('.input-cart-number').on('keyup change', function(){
    $t = $(this);
  
    if ($t.val().length > 3) {
      $t.next().focus();
    }
  
    var card_number = '';
    $('.input-cart-number').each(function(){
      card_number += $(this).val() + ' ';
      if ($(this).val().length == 4) {
        $(this).next().focus();
      }
    })
  
    $('.credit-card-box .number').html(card_number);
  });
  
  $('#card-holder').on('keyup change', function(){
    $t = $(this);
    $('.credit-card-box .card-holder div').html($t.val());
  });
  
  $('#card-holder').on('keyup change', function(){
    $t = $(this);
    $('.credit-card-box .card-holder div').html($t.val());
  });
  
  $('#expire-month, #expire-year').change(function(){
    m = $('#expire-month option').index($('#expire-month option:selected'));
    m = (m < 10) ? '0' + m : m;
    y = $('#expire-year').val().substr(2,2);
    $('.card-expiration-date div').html(m + '/' + y);
  })
  
  $('#card-ccv').on('focus', function(){
    $('.credit-card-box').addClass('hover');
  }).on('blur', function(){
    $('.credit-card-box').removeClass('hover');
  }).on('keyup change', function(){
    $('.ccv div').html($(this).val());
  });
  
  setTimeout(function(){
    $('#card-ccv').focus().delay(1000).queue(function(){
      $(this).blur().dequeue();
    });
  }, 500);

</script>

</body>
</html>