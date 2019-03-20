 <!doctype html>
 <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 <head>
   <meta charset="utf-8">
   <title>Films</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <script src="//unpkg.com/d3-array"></script>
   <script src="//unpkg.com/d3"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

   <style type="text/css">
    body {
      font-family: Nunito;
    }
   </style> 
 </head>
 <body>

   <h1>Hello?</h1>
   <h4>Hello from Films</h4>
   <div>There are {{ sizeof($films) }} films in the data </div>

 </body>
 </html>