<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Student Management System</title>
  </head>
  <body>

  @include("navvar")

    @if($layout=="index")
    <div class="container-fluid">
    <div class="row">
    <section class="col">
       @include("studentslist")
     </section>
    <section class="col"> </section>
    </div>
    </div>

    @elseif($layout=="create")
    <div class="container-fluid">
    <div class="row">
    <section class="col">
       @include("studentslist")
     </section>
    <section class="col">
    <form action="{{url('/store')}}" method="post">
     @csrf

  <div class="form-group">
    <label>CNE</label>
    <input type="text" name="cne" class="form-control" placeholder="Enter CNE">
  </div>

  <div class="form-group">
    <label>First Name</label>
    <input type="text" name="firstName" class="form-control" placeholder="Enter First Name">
  </div>

  <div class="form-group">
    <label>Second Name</label>
    <input type="text" name="secondName" class="form-control" placeholder="Enter Second Name">
  </div>

  <div class="form-group">
    <label>Age</label>
    <input type="text" name="age" class="form-control" placeholder="Enter Age">
  </div>

  <div class="form-group">
    <label>Speciality</label>
    <input type="text" name="speaciality" class="form-control" placeholder="Enter Speciality">
  </div>

<input type="submit" class="btn btn-info" value="Save">
<input type="reset" class="btn btn-warning" value="Reset">

</form>
 </section>
    </div>
    </div>

    @elseif($layout=="show")
    <div class="container-fluid">
    <div class="row">
    <section class="col">
       @include("studentslist")
     </section>
    <section class="col"> </section>
    </div>
    </div>


    @elseif($layout=="show")
    <div class="container-fluid">
    <div class="row">
    <section class="col">
       @include("studentslist")
     </section>
    <section class="col">
    <form action="{{url('/update/'.$student->id)}}" method="post">
     @csrf

  <div class="form-group">
    <label>CNE</label>
    <input type="text" value="{{$student->cne}}" name="cne" class="form-control" placeholder="Enter CNE" readonly>
  </div>

  <div class="form-group">
    <label>First Name</label>
    <input type="text" value="{{$student->firstName}}" name="firstName" class="form-control" placeholder="Enter First Name">
  </div>

  <div class="form-group">
    <label>Second Name</label>
    <input type="text" value="{{$student->secondName}}" name="secondName" class="form-control" placeholder="Enter Second Name">
  </div>

  <div class="form-group">
    <label>Age</label>
    <input type="text" value="{{$student->age}}" name="age" class="form-control" placeholder="Enter Age">
  </div>

  <div class="form-group">
    <label>Speciality</label>
    <input type="text" value="{{$student->speaciality}}" name="speaciality" class="form-control" placeholder="Enter Speciality">
  </div>


</form>
     </section>
    </div>
    </div>


    @elseif($layout=="edit")
    <div class="container-fluid">
    <div class="row">
    <section class="col">
       @include("studentslist")
     </section>
    <section class="col"> 
    
    <form action="{{url('/update/'.$student->id)}}" method="post">
     @csrf

  <div class="form-group">
    <label>CNE</label>
    <input type="text" value="{{$student->cne}}" name="cne" class="form-control" placeholder="Enter CNE">
  </div>

  <div class="form-group">
    <label>First Name</label>
    <input type="text" value="{{$student->firstName}}" name="firstName" class="form-control" placeholder="Enter First Name">
  </div>

  <div class="form-group">
    <label>Second Name</label>
    <input type="text" value="{{$student->secondName}}" name="secondName" class="form-control" placeholder="Enter Second Name">
  </div>

  <div class="form-group">
    <label>Age</label>
    <input type="text" value="{{$student->age}}" name="age" class="form-control" placeholder="Enter Age">
  </div>

  <div class="form-group">
    <label>Speciality</label>
    <input type="text" value="{{$student->speaciality}}" name="speaciality" class="form-control" placeholder="Enter Speciality">
  </div>
  <input type="submit" class="btn btn-info" value="Edit">
<input type="reset" class="btn btn-warning" value="Reset">

</form>
    </section>
    </div>
    </div>

    @endif
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>