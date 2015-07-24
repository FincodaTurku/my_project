<!doctype html>
<html>
  <head>
    
  </head>
  <body>
    <h1>Survey questions</h1>





    
    @foreach ($question as $i)
    <h2>{{ $i->question }}</h2>
    @endforeach
  </body>
</html>
