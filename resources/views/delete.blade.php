<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>
<body>
         
@include('navbar')   
@include('view')

<br><br>
 <h1 >لێرە دە ڕەسمەکەش دەسڕێتەوە لەناو سێرڤەرەکەدا واتە لەناو فایلەکەدا</h1>

      <form action="/deleteProcessing" method="delete">
      Delete Employee By Id :: 
            <input type="number" name="id" id="">
            <input type="submit" name="" id="">

      </form>

</body>
</html>