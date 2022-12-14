<?php 
$env = $_ENV['environment'];
print_r($_ENV);
$cssPath = 'main.js';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Vite -->
    <? if($env === 'development'): ?>
      <script type="module" src="http://localhost:5173/@vite/client"></script>
      <script type="module" src="http://localhost:5173/main.js"></script>

    <? elseif($env === 'production'): ?>
      <link rel="stylesheet" href="/dist/assets/{{ manifest['main.js'].css }}" />
      <script type="module" src="/dist/assets/{{ manifest['main.js'].file }}"></script>

    <? endif; ?>
    
    <title>Vite App</title>
    
  </head>
  <body>
  <h1>PHP Vite!</h1>
    <div id="app"></div> 
  </body>
</html>