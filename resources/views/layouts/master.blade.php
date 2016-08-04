<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="http://159.203.77.45/favicon.ico" />
  <link rel="stylesheet" href="{{ENV('APP_URL')}}/css/final.css">
  
  <title>NecroPostIcon</title>
  
  @yield('facebook-tags')

</head>

<body>


  <div class="div-sm-12" style="margin-top:70px;">
  <div id="wareHouse"></div>
    @yield('content')

  </div>
  @yield('javascript')
</body>


</html>

