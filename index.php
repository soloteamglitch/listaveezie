
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>GLITCH - </title>
  </head>
  <body>
    <div class="container">
      <h1 style="text-align: center;font-size: 6em;">Generatore liste</h1>
      <h1 style="text-align: center;font-size: 6em;color: orange;">veezie</h1>

  <?php
    include_once 'funzioni.php';
    $pastebin_link = link_da_txt();
    $link_estratti = pastebin_in_array($pastebin_link);
    $link_funzionanti = verifica_link_veloce($link_estratti);
    ?>

      <textarea style="width: 100%;height: 40em;"><?php echo implode("\n",$link_funzionanti); ?></textarea><br>
      <button style="font-size: 3em;" class="btn btn-primary">Copia</button>
    <h2 style="margin-top: 3em;">Pastebin link</h2>
    <?php echo crea_link_pastebin($link_funzionanti); ?>
    </div>

    <div class="container">
      <img style="width: 12em;margin-top: 2em;" src="/content/logo.png" />
      <p>Creata da Glitch con tanto tanto tantissimo amore</p>
      <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">
        <img alt="Licenza Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png" />
      </a><br />
      Quest'opera è distribuita con Licenza <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Creative Commons Attribuzione - Non commerciale - Condividi allo stesso modo 4.0 Internazionale</a>.
      <p style="margin-top: 2em;font-size: 0.5em;">Questa app scritta in php ha il solo scopo educativo e di dimostrazione, il creatore dell'app e il team glitch non si assumono la responsabilità di quello che può accadere al dispositivo.<br>
      Utilizzando e/o avviando questa applicazione accetti di esonerare da ogni responsabilità il creatore dell'app e il team di sviluppo Glitch. Veezie non è un marchio di nostra proprietà tanto meno il suo codice, tutti i diritti riservati ai relativi propritari</p>
      <p style="color: white;">Leggere attentamente il foglietto illustrativo, tenere lontano dalla portata dei bambini.</p>

    </div>
    <div class="">

    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script>
    document.querySelector("button").onclick = function(){
    document.querySelector("textarea").select();
    document.execCommand('copy');
  }
  </script>
  </body>
</html>
