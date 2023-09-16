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

 
 
<br><br><br>

 
<form action="/updateProcessing" method="get">

 <div style="grid: 1;">
      id : <input type="number" name="id" id=""><br><br>

      Name:<input type="text" name="EName"  ><br><br>

      EAge:<input type="number" name="EAge"  ><br><br>

      EPhone:<input type="number" name="EPhone"  ><br><br>

      EImage:<input type="text" name="EImage"  ><br><br>

      ESalary:<input type="number" name="ESalary"  ><br><br>

      <input type="submit" name="submit" id="">
</div>

</form>

</body>
</html>