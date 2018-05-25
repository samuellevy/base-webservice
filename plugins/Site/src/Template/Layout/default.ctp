<!DOCTYPE html>
<html lang="pt-BR" ng-app="aacdApp">
<head>
  <meta charset="UTF-8">
  <title>AACD</title>
  
  <!-- Open Graph -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="AACD">
  <meta property="og:description" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
  <meta http-equiv="content-type" content="application/vnd.ms-excel; charset=UTF-8">
  <meta http-equiv="CACHE-CONTROL" content="NO-CACHE">
  <meta http-equiv="CACHE-CONTROL" content="NO-STORE">
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Viewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
  
  <!-- Favicon -->
  <?= $this->Html->meta(
    'favicon',
    'Site.../images/favicon.png?v=2',
    ['type' => 'icon']
  );?>
  
  <!-- CSS -->
  <?= $this->Html->css('public.css') ?>
  
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <?= $this->Html->script('main.js') ?>

</head>
<!-- <?= $this->Flash->render() ?> -->

<body>
  <header>
    <div class="container">
      <a class="logo"><?= $this->Html->image('Site.../images/logo.png', ['alt'=>'AACD']) ?></a>
      <a class="btn" href="#participe">Inscreva-se na palestra</a>
    </div>
  </header>

  <?= $this->fetch('content') ?>

  <footer>
    <div class="container">
        <p>AACD – Associação de Assistência à Criança Deficiente.</p>
        <a class="logo-3a" href="http://3aworldwide.com.br/" target="_blank"><?= $this->Html->image('Site.../images/logo-3AWW.jpg') ?></a>
    </div>
  </footer>
</body>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MRWZBBX');</script>
<!-- End Google Tag Manager -->

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MRWZBBX"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
</html>
  