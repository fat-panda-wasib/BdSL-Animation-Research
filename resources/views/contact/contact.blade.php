<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- CWASA CSS -->
    <link rel="stylesheet" href="http://vhg.cmp.uea.ac.uk/tech/jas/vhg2021/cwa/cwasa.css" />
    <script type="text/javascript" src="{{ asset('js/allcsa.js') }}"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Alphabet</title>
    <style>
        body {
            background-color: #f5f5f5;
        }

        .container {
            background-color: #f5f5f5;

        }
    </style>
</head>

<body class="container-fluid" onload="CWASA.init();">
    <div class="container">


        <div class="navbar">
            <ul>
                <ul>
                    <li class="{{ request()->routeIs('home') ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="{{ request()->routeIs('digit') ? 'active' : '' }}"><a
                            href="{{ route('digit') }}">Digit</a>
                    </li>
                    <li class="{{ request()->routeIs('alphabet') ? 'active' : '' }}"><a
                            href="{{ route('alphabet') }}">Alphabet</a></li>
                    <li class="{{ request()->routeIs('word') ? 'active' : '' }}"><a href="{{ route('word') }}">Word</a>
                    </li>
                    <li class="{{ request()->routeIs('publications') ? 'active' : '' }}"><a
                            href="{{ route('publications') }}">Publications</a></li>
                    <li class="{{ request()->routeIs('contact') ? 'active' : '' }}"><a
                            href="{{ route('contact') }}">Contact
                            Us</a></li>
                </ul>
            </ul>
        </div>





        <div>
            <h1>Supervised By</h1>
            <div class="card" style="width:18rem;">
                <img src="{{ asset('image/aminur.jpg') }}" alt="Image" class="img-fluid">
              <div class="card-body">
                <h5 class="card-title">DR. MUHAMMAD AMINUR RAHAMAN</h5>
                <h6 class="card-subtitle mb-2 text-muted ">Associate Professor and Campus Director, Permanent Campus</h6>
                <p class="card-text"> aminur@cse.green.edu.bd</p>

              </div>
            </div>
        </div>
        <h1>Students</h1>
        <div class="row">
            <div class="col-md-3">
                <img src="{{ asset('image/arif.jpg') }}" alt="Image" class="img"  style="border-radius: 5px">
                <div class="card-body" style="background-color: #00DFA2">
                  <h5 class="card-title">Md. Ariful Islam</h5>
                  <h6 class="card-subtitle mb-2 text-muted ">Student</h6>
                  <p class="card-text"> arifcse209@gmail.com</p>

                </div>
            </div>
            <div class="col-md-3">
                <img src="{{ asset('image/owasib.png') }}" alt="Image"  class="img" style="border-radius: 5px">
                <div class="card-body" style="background-color: #00DFA2">
                  <h5 class="card-title">Ahsanul Karim</h5>
                  <h6 class="card-subtitle mb-2 text-muted ">Student</h6>
                  <p class="card-text"> ahsanulkarim5690@gmail.com</p>

                </div>
            </div>
            <div class="col-md-3">
                <img src="{{ asset('image/arif.jpg') }}" alt="Image" class="img"  style="border-radius: 5px">
                <div class="card-body" style="background-color: #00DFA2">
                  <h5 class="card-title">Md. Ariful Islam</h5>
                  <h6 class="card-subtitle mb-2 text-muted ">Student</h6>
                  <p class="card-text"> arif</p>

                </div>
            </div>


        </div>




    </div>










    <!-- jQuery first cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    -->




</body>

</html>
