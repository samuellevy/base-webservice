<section class="banner">
  <?= $this->Html->image('Site.../images/banner.png') ?>
  <div class="info-box">
    <div class="container">
      <p>Palestra com</p>
      <p class="name">Leandro Karnal</p>
      <p>em prol da AACD</p>
      <div class="red-box">
        <p class="title">Mudar é difícil, mas não mudar é fatal.</p>
        <p>Fatores comportamentais que travam o desenvolvimento humano</p>
      </div>
    </div>
  </div>
</section>

<section class="about">
  <div class="container">
    <div class="text">
      <p class="title">Sobre a palestra</p>
      <p class="paragraph">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam nihil dolorem modi omnis necessitatibus. Quos consectetur, officia placeat dolorem, asperiores corporis cum quas expedita, nesciunt saepe repellat! Cum, numquam consectetur?</p>
      <ul class="schedule">
        <li>
          <p class="s-title">Credenciamento</p>
          <p class="s-time">18h30<br/> às <br/>19h45</p>
        </li>
        <li>
          <p class="s-title">Palestra</p>
          <p class="s-time">20h<br/> às <br/>21h30</p>
          <p class="s-obs">Tolerância de atraso: 15min.</p>
        </li>
        <li>
          <p class="s-title">Coquetel e networking</p>
          <p class="s-time">21h45<br/> às <br/>22h30</p>
        </li>
        <li>
          <p class="s-title">Data</p>
          <p class="s-time">19/06/2018<br/>Terça-feira</p>
        </li>
      </ul>
    </div>
  </div>
</section>

<section class="aproveite">
  <div class="container">
    <div class="text">
      <p class="title">Aproveite esta oportunidade especial</p>
    </div>
    <ul class="options">
      <li>
        <p>Grupos acima de 20 pessoas</p>
        <a href="#" class="dialog-btn" id="precos">PREÇOS ESPECIAIS</a>
      </li>
      <li>
        <p>Vendas presenciais</p>
        <a href="#" class="dialog-btn" id="locais">locais de venda</a>
      </li>
      <li>
        <p>Vendas online</p>
        <a href="#participe">COMPRE AGORA</a>
      </li>
      <li>
        <p class="o-obs">Um tema atual e agregador para sua  vida profissional e pessoal e ainda ajuda a AACD!</p>
      </li>
      <li class="bob">
        <?= $this->Html->image('Site.../images/bob.png') ?>
        <p>Apresentação do evento, <br/><strong>Bob Floriano</strong></p>
      </li>
    </ul>
  </div>
</section>

<section class="vagas">
  <div class="container">
    <div class="text">
      <p class="title">Vagas limitadas</p>
      <p class="paragraph">Aproveite a oportunidade de conferir a palestra do professor e historiador Leandro Karnal em prol da AACD, no Clube Hebraica. Os recursos arrecadados serão 100% destinados à Instituição, fazendo a diferença na vida de milhares de pacientes com deficiência física de todo o Brasil.</p>
    </div>
  </div>
</section>

<section class="map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.0883746851787!2d-46.59300838451592!3d-23.56526928468082!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5eac60703d4f%3A0x312631a7ef594fbd!2sR.+Padre+Raposo%2C+1324+-+Mooca%2C+S%C3%A3o+Paulo+-+SP!5e0!3m2!1spt-BR!2sbr!4v1500904895183" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen=""></iframe>
  <div class="address">
    <p class="local">Clube Hebraica - Teatro Arthur Rubinstein</p>
    <p>Rua Hungria, 1.000 – Pinheiros, São Paulo – SP</p>
    <p>Valet à parte no local (entrada pela Marginal Pinheiros)</p>
  </div>
</section>

<section class="cadastro" id="participe">
  <div class="content" data-content="form">
    <div class="container">
      <div class="text">
        <p class="title">Participe</p>
      </div>
    </div>
    <div class="container">
      <div class="split">

        <p>Preencha o cadastro para continuar</p>
        <p class="small">Todos os campos são obrigatórios</p>

        <?= $this->Form->create('',['type'=>'post']) ?>
          
          <fieldset>
            <label>Nome:</label>
            <input type="text" name="name" required>
          </fieldset>
          
          <fieldset>
            <label>E-mail:</label>
            <input type="email" name="email" required>
          </fieldset>
          
          <fieldset>
            <label>Celular:</label>
            <input type="tel" name="cell" required>
          </fieldset>
          
          <fieldset>
            <label>Nascimento:</label>
            <input type="date" name="birthdate" required>
          </fieldset>
          
          <fieldset>
            <label>RG:</label>
            <input type="text" name="rg" required>
          </fieldset>
          
          <fieldset>
            <input name="submit" type="submit" value="COMPRAR">             
          </fieldset>
        </form>
      </div>
      <div class="split">
        <?= $this->Html->image('Site.../images/menino.jpg') ?>
      </div>
    </div>
  </div>
</section>

<section class="bio">
  <div class="container">
    <?= $this->Html->image('Site.../images/leandro.png') ?>
    <div class="content">
      <p class="nome">Leandro Karnal</p>
      <p>Historiador, com doutorado pela USP, e professor na Unicamp. Possui muitas publicações, como: “Conversas com um jovem professor”; “Pecar e Perdoar”; “Detração – Breve Ensaio Sobre O Maldizer”; “Felicidade Ou Morte”; “Verdades e Mentiras”; “Crer ou Não Crer”; “Santos Fortes” e “Diálogos de culturas”. Alguns se seus livros estão nas listas dos mais vendidos do Brasil. É presença frequente no Jornal da Cultura, nos cafés filosóficos, na Rede Bandeirantes e nas rádios. Sua página do Facebook ultrapassa 1,1 milhão de seguidores e seus vídeos alcançam enorme popularidade na internet. É reconhecido como um dos maiores formadores de opinião no País. </p>
    </div>
  </div>
</section>

<!-- Contato -->
<section class="contato">
  <div class="container">
    <div class="split">
      <div class="text">
        <p class="title">Contato</p>
      </div>
      <p class="phone">Tel.: (11) 5576-0811</p>
      <a href="mailto:tramos@aacd.org.br">cievoluntariado@aacd.org.br</a>
    </div>
    
    <div class="split">
      <p><strong>Formas de pagamento</strong></p>
      <p> • À vista (cartão de débito ou cartão de crédito)</p>
      <?= $this->Html->image('Site.../images/cartoes.jpg') ?>
    </div>
  </div>
</section>

<div class="lightbox" id="precos">
	<div class="mask"></div>
	<div class="dialog">
    <a href="#" class="close">x</a>
    <div class="text">
      <p class="title">Preços</p>
    </div>
    <ul class="ul-precos">
      <li>
        <p>1º Lote</p>
        <span>
          <p class="type">Ingresso Individual</p>
          <p class="price">R$90,00</p>
        </span>
      </li>
      <li>
        <p>2º Lote</p>
        <span>
          <p class="type">Ingresso Individual</p>
          <p class="price">R$100,00</p>
        </span>
      </li>
      <li>
        <p>3º Lote</p>
        <span>
          <p class="type">Ingresso Individual</p>
          <p class="price">R$120,00</p>
        </span>
      </li>
    </ul>
    <a class="participe-btn" href="#participe">COMPRE SEU INGRESSO AGORA</a>
	</div>
</div>

<div class="lightbox" id="locais">
	<div class="mask"></div>
	<div class="dialog">
    <a href="#" class="close">x</a>
    <div class="text">
      <p class="title">Locais de venda</p>
    </div>
    <ul class="ul-locais">
      <li>
        <span>
          <p class="type-1">AACD Ibirapuera</p>
          <p class="type-2">Rua Borges Lagoa, 1505- 1º andar, bloco E, na sala da <br/>Comunicação Interna e Voluntariado</p>
        </span>
      </li>
      <li>
        <span>
          <p class="type-2">Para consultar outros locais de venda que serão itinerantes</p>
          <p class="type-1">(11) 5576-0811 ou (11) 5576-0915</p>
          <p class="type-3">(de seg à sexta, das 9h às 17h)</p>
        </span>
      </li>
    </ul>
	</div>
</div>