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




        <div class="jumbotron">
            <h1 class="fs-1">Automatic Animated Bangla Sign Language Gestures Generation from Bangla Text and Voice</h1>
            <p class="lead">Every human being has a fundamental need for communication since it allows them to learn,
                express their emotions, and share ideas. However, sign language users are unable to hear or speak. They
                learn a variety of hand signals known as Sign Language (SL), which they use to communicate with
                themselves and others. Non-sign language users, on the other hand, have a difficult time understanding
                sign language. We have proposed a real-time bidirectional 3D Bangla Sign Language (BdSL) translator that
                is more dynamic and real-time than the traditional system for the simplest way to communicate. To
                facilitate effective communication between Sign and Unsign people, we have introduced an Automatic
                Animated BdSL Gesture Generation from Bangla Text and Voice. The recommended system takes input as
                Bangla Voice or Bangla Text and parses the output texts of corresponding inputs based on Signing Gesture
                Markup Language (SigML). Creating a bridge between Sign People and Normal People is the main purpose of
                this paper. A 3D animated Bangla sign gesture is generated dynamically based on the trained SigML. In
                this paper, the model is trained only for 13 Bangla Numeral gestures (0-9, Thousand, Lakh, and Crore)
                but the system can generate any 3D Animated Bangla Numeral gestures dynamically. 100 different lengths
                of Bangla Composite Numbers are being tested for the evaluation of the system. The system achieves an
                average interpretation accuracy of 97.80% for voice and 100% for Bangla Text input of Bangla Composite
                Numerals with a computation cost of 6.5 milliseconds per gesture.</p>
            <a class="btn btn-lg btn-primary" href="https://ieeexplore.ieee.org/document/10103252" role="button">View Paper »</a>
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
