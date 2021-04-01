<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    @if($layout == 'index')
        <div class="containes-fluid">
            <div class="row">
                <section class="col-md-7">
                    @include("studentslist")
                </section>
                <section  class="col"></section>
            </div>
        </div>
    @elseif($layout == 'create')
        <div class="containes-fluid">
            <div class="row">
                <section class="col">
                    @include("studentslist")
                </section>
                <section  class="col">
                    <form action="{{ url('/store')}}" method="post">
                        @csrf
                        <div class="mb-3">
                          <label>CNE</label>
                          <input name="cne" type="text" class="form-control"  placeholder="Entrer votre cne">
                        </div>
                        <div class="mb-3">
                            <label>FirstName</label>
                            <input name="firstName" type="text" class="form-control"  placeholder="Entrer votre Prenom">
                          </div>
                          <div class="mb-3">
                            <label>LastName</label>
                            <input name="lastName" type="text" class="form-control"  placeholder="Entrer votre Nom">
                          </div>
                          <div class="mb-3">
                            <label>Age</label>
                            <input name="age" type="integer" class="form-control"  placeholder="Entrer votre Age">
                          </div>
                          <input type="submit" class="btn btn-info" value="Enregistrer">
                          <input type="reset" class="btn btn-warning" value="Reset">
                      </form> 
                </section>
            </div>
        </div>
    @elseif($layout == 'show')
    <div class="containes-fluid">
        <div class="row">
            <section class="col">
                @include("studentslist")
            </section>
            <section  class="col"></section>
        </div>
    </div>
    @elseif($layout == 'edit')
    <div class="containes-fluid">
        <div class="row">
            <section class="col">
                @include("studentslist")
            </section>
            <section  class="col">
                <form action="{{ url('/update/'.$student->id)}}" method="post">
                    @csrf
                    <div class="mb-3">
                      <label>CNE</label>
                      <input value="{{ $student->cne }} " name="cne" type="text" class="form-control"  placeholder="Entrer votre cne">
                    </div>
                    <div class="mb-3">
                        <label>FirstName</label>
                        <input value="{{ $student->firstName }}" name="firstName" type="text" class="form-control"  placeholder="Entrer votre Prenom">
                      </div>
                      <div class="mb-3">
                        <label>LastName</label>
                        <input value="{{ $student->lastName }}" name="lastName" type="text" class="form-control"  placeholder="Entrer votre Nom">
                      </div>
                      <div class="mb-3">
                        <label>Age</label>
                        <input value="{{ $student->age }}" name="age" type="integer" class="form-control"  placeholder="Entrer votre Age">
                      </div>
                      <input type="submit" class="btn btn-info" value="Upadte">
                      <input type="reset" class="btn btn-warning" value="Reset">
                  </form> 
            </section>
        </div>
    </div>
    @endif
 

    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>