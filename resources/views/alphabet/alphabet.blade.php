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


        <h1 class="text-info text-center mb-5 mt-5">Bangla Alphabet to 3D Animated Bangladeshi Sign Language</h1>




        <div class="row">
            <div class="col-md-6">
                <div class="input-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                </div>
                <button class="btn btn-primary mt-3" id="playButton">Play</button>
                <button class="btn btn-primary mt-3" id="microphone"><i class="fa-solid fa-microphone"></i></button>

                </br>
                </br>
                </br>
                <div>
                    <h1 class="fs-3">Vowel</h1>
                    <div>
                        <span class="alpha">অ</span>
                        <span class="alpha">া=আ</span>
                        <span class="alpha">ি=ই</span>
                        <span class="alpha">ু=উ</span>
                        <span class="alpha">ে=এ</span>
                        <span class="alpha">ো=ও</span>
                    </div>
                    </br>
                    <h1 class="fs-3">consonant</h1>
                    <div>
                        <span class="alpha">ক </span>
                        <span class="alpha">খ </span>
                        <span class="alpha">গ </span>
                        <span class="alpha">ঘ </span>
                        <span class="alpha">ঙ </span>
                        <span class="alpha">চ </span>
                        </br>
                        </br>

                        <span class="alpha">ছ </span>
                        <span class="alpha">জ </span>
                        <span class="alpha">ঝ </span>
                        <span class="alpha">ট </span>
                        <span class="alpha">ঠ </span>
                        <span class="alpha">ড </span>
                        </br>
                        </br>
                        <span class="alpha">ঢ </span>
                        <span class="alpha">ত </span>
                        <span class="alpha">থ </span>
                        <span class="alpha">দ </span>
                        <span class="alpha">ধ </span>
                        <span class="alpha">ন </span>
                        </br>
                        </br>
                        <span class="alpha">প </span>
                        <span class="alpha">ফ </span>
                        <span class="alpha">ব </span>
                        <span class="alpha">ম </span>
                        <span class="alpha">য় </span>
                        <span class="alpha">র </span>
                        </br>
                        </br>

                        <span class="alpha">ল </span>
                        <span class="alpha">স </span>
                        <span class="alpha">হ </span>
                        <span class="alpha">ড় </span>
                        <span class="alpha">ং </span>
                        <span class="alpha">ঃ </span>
                    </div>

                </div>




            </div>
            <div class="col-md-6">
                <div class="CWASAPanel av0"></div>
                <div class="CWASASpeed av0"></div>




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



    <script>
        $(document).ready(function() {
            $("#playButton").click(function() {
                var userInput = $("#exampleFormControlTextarea1").val();


                var sigml = "<sigml>"

                //console.log(numberWords[element]);
                var xhr = new XMLHttpRequest();

                xhr.open("GET", "classSign/" + userInput + ".sigml",
                    false); // Specify the file URL and set asynchronous to false
                xhr.send();


                if (xhr.status === 200) {
                    var fileContents = xhr.responseText; // Retrieve the file contents
                    sigml += fileContents;
                }


                sigml += "</sigml>"
                CWASA.playSiGMLText(sigml, 0);


            });
        });


        $("#microphone").click(function() {
            let textbox = document.getElementById("exampleFormControlTextarea1");
            let sr = window.webkitSpeechRecognition || window.SpeechRecognition;
            let spRec = new sr();
            spRec.lang = "bn-BD";
            spRec.interimResults = false;
            sr.maxAlternatives = 5;

            spRec.onresult = function(event) {
                var transcript = event.results[0][0].transcript;
                var confidence = event.results[0][0].confidence;
            };
            spRec.start();

            spRec.onresult = (res) => {
                let text = Array.from(res.results)
                    .map((r) => r[0])
                    .map((txt) => txt.transcript)
                    .join("");
                textbox.value = text;

                var sigml = "<sigml>"

                    //console.log(numberWords[element]);
                    var xhr = new XMLHttpRequest();

                    xhr.open("GET", "classSign/" + text + ".sigml",
                        false); // Specify the file URL and set asynchronous to false
                    xhr.send();


                    if (xhr.status === 200) {
                        var fileContents = xhr.responseText; // Retrieve the file contents
                        sigml += fileContents;
                    }


                    sigml += "</sigml>"
                    CWASA.playSiGMLText(sigml, 0);

            }
        });
    </script>

</body>

</html>
