<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>mural</title>
  <link rel="stylesheet" href="css/blogger.css">
</head>
<body>
	<nav>
		<ul>
			
			<li>Blogueiro(a) <span>(@giih.nats)				</span></li>
		<li><a href="login.php">SAIR</a></li>
		</ul>
	</nav>
	<h1>POSTS</h1>
	<h3>PUBLICAÇÕES</h3>
	<form action=assc/publicao.php class="men" method="POST">
		
<fieldset>
	<legend> NOVAS PUBLICAÇÕES</legend>
	<textarea name="menssagem" cols="30" rows="10" placeholder="PUBLICAÇÕES..."></textarea>
	<select name="post" required=""></select>
	<option value="" readonly>OPÇÃO DE POST</option>
	<option value="" disabled>**</option>
                <option value="Citações">'Citações'</option>
                <option value="Texto">TEXTO..</option>
                <option value="Link">Link</option>
            </select>
            <a href="newCategory.php">NOVA POSTAGEM</a>
            <input type="submit" value="enviar">
        </fieldset>
    </form>
  
  <div class="menssagem">
  	<div class="post post-0">Citações</div>
  	<div class="menssagem-text">
  		"Quem critica os meus defeitos é porque inveja as minhas vitudes. -Márcio Souza"
  	</div>
  	 <div class="author_date">
            <div class="author">Blogueiro Anônimo <span>(...)</span></div>
            <div class="date">19
            05/06/2019</div>
        </div>
    </div>

    <div class="menssagem ">
    </div>ss
        <div class="post post-1">TEXTO <a href="removeMessage.php?id=16" class="del" ></a></div>
        <div class="message-text">
          Posso ter defeitos, viver ansioso e ficar irritado algumas vezes, mas não esqueço que minha vida é a maior empresa do mundo. E que posso evitar que ela vá à falência.
         Ser feliz é reconhecer que vale a pena viver, apesar de todos os desafios, incompreensões e períodos de crise.
         Ser feliz é deixar de ser vítima dos problemas e se tornar autor da própria história.
         É atravessar desertos fora de si, mas ser capaz de encontrar um oásis no recôndito da sua alma.
		 É agradecer a Deus a cada manhã pelo milagre da vida.
		 Ser feliz é não ter medo dos próprios sentimentos. É saber falar de si mesmo. É ter coragem para ouvir um “não”. É ter segurança para receber uma crítica, mesmo que injusta.
                      -Augusto Cury
        </div>
  </div>
</form>
</body>
</html>