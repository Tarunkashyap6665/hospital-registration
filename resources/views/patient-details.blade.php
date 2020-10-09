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
    <div class="container mt-5 border shadow py-2">
        <div class="d-flex flex-column align-items-center">
            <div class="h2">Patna Medical College Hospital</div>
            <div class="h3 font-weight-normal">Registration Form</div>
        </div>
        <hr>
        <div class="row my-4">
            <div class="col-md-6">
                <h4 class="ml-5"><b>Reg. No. :</b> {{$patient->reg_no}}</h4>
            </div>
            <div class="col-md-6">
                <h4 class="ml-5"><b>Reg. Date :</b> {{$patient->created_at}}</h4>
            </div>
        </div>
        <div class="row my-4">
            <div class="col-md-6">
                <h4 class="ml-5"><b>Patient Name :</b> {{$patient->name}}</h4>
            </div>
            <div class="col-md-6">
                <h4 class="ml-5"><b>Age :</b> {{$patient->age}}</h4>
            </div>
        </div>
        <div class="row my-4">
            <div class="col-md-6">
                <h4 class="ml-5"><b>Sex :</b> {{$patient->sex}}</h4>
            </div>
            <div class="col-md-6">
                <h4 class="ml-5"><b>Unit :</b> {{$patient->unit}}</h4>
            </div>
        </div>
        <div class="row my-4">
            <h4  class="ml-5 col-md-12"><b>Address :</b> {{$patient->address}}</h4>
        </div>
        <div class="row my-4">
            <h4 class="ml-5 col-md-12"><b>Department :</b> {{$patient->department}}</h4>
        </div>
        <div class="mt-5">
            <h4 class="ml-5">Registration Fees</h4>
            <p class="ml-5 h6">(Out Patient Dep.) Rs-{{$patient->fees}}/-</p>
        </div>
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