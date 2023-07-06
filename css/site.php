<?php
require_once("includes/banco.php");
require_once("includes/cidades.php");
$id_cidade  = $_REQUEST["id_cidade"];
carrega_dados_da_cidade($id_cidade);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Pontos Turísticos de </title>
     <link rel="stylesheet" type="text/css" href="css/csssite.css">
     <title>Eventos via JavaScript </title>
    <script>
      //Para criar uma transição suave e define a propriedade
      var btn = document.getElementById("meuBotao");

btn.addEventListener("mouseover", function() {
  this.style.transition = "transform 0.5s ease";
  this.style.transform = "rotate(360deg)";
});

btn.addEventListener("mouseout", function() {
  this.style.transition = "transform 0.5s ease";
  this.style.transform = "rotate(0deg)";
});

   //Função que mostra a data atual
   function displayDate() {
                document.getElementById("demo").innerHTML = Date();
            }
            document.getElementById('formulario').onsubmit = function() {
  alert('Formulário enviado!');
};
s
    </script>
   <body>
    <header>
      <h1>Pontos Turísticos de <?php
	  echo $nome_da_cidade;
	  ?>
	  </h1>
    </header>
    <nav>
      <ul>
        <!--botões -->
        <li><a href="#História"><button class= "btn-superior">História</button></a></li>
        <li><a href="#Cultura"><button class= "btn-superior">Cultura</button></a></li>
        <li><a href="#Destinos turísticos"><button class= "btn-superior">Destinos Turísticos</button></a></li>
        <!--link para previsão do tempo-->
        <li><a href="https://www.accuweather.com/pt/br/canela/45480/weather-forecast/45480" target="_blank"><button class= "btn-superior"> Temperatura</button></a>.</p></li>
   </ul>
    </nav>
    <main>
      <section id="História">
      <h2>História</h2>
    <?php

	  echo $historia_da_cidade;
	  ?>

      </section>
      <section id="Cultura">
        <h2>Cultura</h2>
		
		<?php

	  echo $cultura_da_cidade;
	  ?>
	  
	  <section id="Destinos turísticos">
        <h3>Destinos Turísticos</h3>
       <p>É  um destino turístico muito procurado por suas belezas naturais, arquitetura histórica e cultura rica. Abaixo, listamos alguns dos principais destinos turísticos da cidade:<p/>
       
	   <?php

	  // chamada da função
		$pontos = select_pontoturistico_da_cidade($id_cidade);

		
		foreach($pontos as $ponto) {
			echo "<H4>\n";
			echo $ponto["nm_pontosturistico"];
			echo "</H4>\n";
			echo $ponto["descricao"]; 
			echo "<a href=\"{$ponto["site"]}\">\n";
			echo "Acesse Aqui</a>\n";

		}		
		

	  ?>
	  
      </section>
      
        

<form>
  
  <label for="nome">Nome:</label>
  <input type="text" id="nome" name="nome" required>

  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required>

  <label for="mensagem">Mensagem:</label>
  <textarea id="mensagem" name="mensagem" required></textarea>

  <form id="meuFormulario">
    <!-- Elementos do formulário -->
    <button type="submit">Enviar</button>
  </form>
  
  <script>
    const formulario = document.getElementById("meuFormulario");
    formulario.addEventListener("submit", validarFormulario);
  
    function validarFormulario(evento) {
      evento.preventDefault(); // impede o envio do formulário
      // Lógica para validar os dados do formulário
    }
  </script>
</form></form>

      </section>
    </main>
    <footer>
      <p> Fabrício cardoso Copyright © 2023</p>
      <p onclick="displayDate()">Data: 26/02/2023</p>
    </footer>
  </body>
</html>

