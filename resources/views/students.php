<!DOCTYPE html>
<html>
  <head>
    <title>Student {{ $student->id }}</title>
  </head>
  <body>
    <h1>Student {{ $student->id }}</h1>
    <ul>
      <li>Name: {{ $student->name }}</li>
      <li>Age: {{ $student->age }}</li>
      <li>Address: {{ $student->address }}</li>
    </ul>
  </body>
</html>