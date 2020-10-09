<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>

  <div class="container border py-3 my-3 shadow" style="background-color: rgb(226, 226, 226)">
    @if (Session::has('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <strong>{{Session::get('status')}}</strong>
    </div>
    @endif

    <script>
      $(".alert").alert();
    </script>
    <div class="d-flex flex-column align-items-center">
      <div class="h2">Patna Medical College Hospital</div>
      <div class="h3 font-weight-normal">Registration Form</div>
    </div>
    <hr>
    <form action="{{$patient==null ? route('patientregister'):route('update-record')}}" method="POST">
      @csrf
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="patient_name">Patient Name</label>
          <input type="text" name="patient_name" value="{{$patient==null?"":$patient->name}}" class="form-control"
            id="patient_name">
        </div>
        <div class="form-group col-md-6">
          <label for="sex">Sex</label>
          @if ($patient==null)
          <select class="form-control" name="sex" id="sex">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
          </select>
          @else
          <input type="hidden" name="id" value="{{$patient->id}}">
          <select class="form-control" name="sex" id="sex">
            <option value="male" {{$patient->sex=="male"?"selected":""}}>Male</option>
            <option value="female" {{$patient->sex=="female"?"selected":""}}>Female</option>
            <option value="other" {{$patient->sex=="other"?"selected":""}}>Other</option>
          </select>
          @endif
        </div>
      </div>
      <div class="form-group">
        <label for="age">Age</label>
        <input type="number" value="{{$patient==null?"":$patient->age}}" class="form-control" id="age" name="age">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="address">Address</label>
          <input type="text" value="{{$patient==null?"":$patient->address}}" class="form-control" name="address"
            id="address">
        </div>
        <div class="form-group col-md-6">
          <label for="fees">Fees</label>
          <input type="number" {{$patient==null?"":'value="'.$patient->fees.'" disabled'}} class="form-control" name="fees"
            id="fees">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="unit">Unit</label>
          <input type="text" value="{{$patient==null?"":$patient->unit}}" name="unit" class="form-control" id="unit">
        </div>
        <div class="form-group col-md-6">
          <label for="department">Department</label>
          <input type="text" value="{{$patient==null?"":$patient->department}}" name="department" class="form-control"
            id="department">
        </div>
      </div>
      <button type="submit" class="btn btn-primary">{{$patient==null?"Register":"Update"}}</button>
    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
  </script>
</body>

</html>