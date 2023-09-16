<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>View All Employees</title>
</head>

<body>
 


      <table>
            <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Age</th>
                  <th>Phone</th>
                  <th>Image</th>

                  <th>Salary</th>
            </tr>
            @foreach ($employees as $employee)
            <tr>
                  <td>{{ $employee['id'] }}</td>
                  <td>{{ $employee['EName'] }}</td>
                  <td>{{ $employee['EAge'] }}</td>
                  <td>{{ $employee['EPhone'] }}</td>
                  <td> <img src={{  URL::to('/assets/image/'. $employee->EImage  )  }} style="width:200px">
                  </td>
                  <!-- <td>{{ $employee['EImage'] }}</td> -->
                  <td>{{ $employee['ESalary'] }}</td>
            </tr>
            @endforeach
      </table>



</body>

</html>