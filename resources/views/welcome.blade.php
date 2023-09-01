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

    <title>Hello, world!</title>
</head>

<body class="container">
    <div class="navbar">
        <ul>
            <ul>
                <li class="{{ request()->routeIs('home') ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
                <li class="{{ request()->routeIs('digit') ? 'active' : '' }}"><a href="{{ route('digit') }}">Digit</a>
                </li>
                <li class="{{ request()->routeIs('alphabet') ? 'active' : '' }}"><a
                        href="{{ route('alphabet') }}">Alphabet</a></li>
                <li class="{{ request()->routeIs('word') ? 'active' : '' }}"><a href="{{ route('word') }}">Word</a></li>
                <li class="{{ request()->routeIs('publications') ? 'active' : '' }}"><a
                        href="{{ route('publications') }}">Publications</a></li>
                <li class="{{ request()->routeIs('contact') ? 'active' : '' }}"><a
                        href="{{ route('contact') }}">Contact
                        Us</a></li>
            </ul>
        </ul>
    </div>

    <div class="row header">
        <div class="col-md-6">
            <h1 class="display-3 text-center">Text and Voice to Bangla Sign Language Conversation</h1>

        </div>
        <div class="col-md-6">
            <p class="sign"> BdSL is used by an estimated 1.7 million people in Bangladesh, who are either deaf or
                hard of hearing. The language is used for communication, education, and advocacy.</p>
            <p class="sign">BdSL is a visual language, which means that it is expressed through facial expressions,
                body language, and hand gestures. This makes it a very expressive language that can be used to
                communicate a wide range of emotions and ideas.</p>
        </div>

    </div>

    <div class="row main">
        <div class="col-md-6">
            <p class="main_para"> To facilitate effective communication between Sign and Unsign people, we have
                introduced an Automatic Animated BdSL Gesture Generation from Bangla Text and Voice. The recommended
                system takes input as Bangla Voice or Bangla Text and parses the output texts of corresponding inputs
                based on Signing Gesture Markup Language (SigML). Creating a bridge between Sign People and Normal
                People is the main purpose of this paper. A 3D animated Bangla sign gesture is generated dynamically
                based on the trained SigML. In this paper, the model is trained only for 13 Bangla Numeral gestures
                (0-9, Thousand, Lakh, and Crore) but the system can generate any 3D Animated Bangla Numeral gestures
                dynamically. 100 different lengths of Bangla Composite Numbers are being tested for the evaluation of
                the system. The system achieves an average interpretation accuracy of 97.80% for voice and 100% for
                Bangla Text input of Bangla Composite Numerals with a computation cost of 6.5 milliseconds per gesture.
            </p>


        </div>
        <div class="col-md-6">
            <img src="{{ asset('image/sign.png') }}" alt="Image" class="img-fluid">
        </div>

    </div>








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
