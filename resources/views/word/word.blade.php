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


        <h1 class="text-info text-center mb-5 mt-5">Bangla Word to 3D Animated Bangladeshi Sign Language</h1>




        <div class="row">
            <div class="col-md-6">
                <div class="input-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                </div>
                <button class="btn btn-primary mt-3" id="playButton">Play</button>
                <button class="btn btn-primary mt-3" id="microphone"><i class="fa-solid fa-microphone"></i></button>

                </br>

                <div>
                    <h1 class="h3 mt-2">Bangla Words</h1>
                    <span class="word"> আপনারা</span>
                    <span class="word">আপনি </span>
                    <span class="word">আমরা </span>
                    <span class="word">আমার </span>
                    <span class="word">আমি </span>
                    <span class="word">এখানে</span>
                    </br>
                    </br>



                    <span class="word">কয়টা বাজে </span>
                    <span class="word">কাপে </span>
                    <span class="word">খাও </span>
                    <span class="word">খাবার </span>
                    <span class="word">গাড়ী </span>
                    <span class="word">চা </span>

                    </br>
                    </br>

                    <span class="word">চামচ </span>
                    <span class="word">চাল </span>
                    <span class="word">চেয়ার </span>
                    <span class="word">টেবিল </span>
                    <span class="word">টেলিফোন </span>
                    <span class="word">ডিম </span>
                    </br>
                    </br>

                    <span class="word">তুমি </span>
                    <span class="word">তোমরা </span>
                    <span class="word">দাঁড়ানো </span>
                    <span class="word">দাও </span>
                    <span class="word">দুই </span>
                    <span class="word">দুধ </span>
                    <span class="word">একটি </span>

                    </br>
                    </br>

                    <span class="word">নাও </span>
                    <span class="word">পাখী </span>
                    <span class="word">পানি </span>
                    <span class="word">ফুল </span>
                    <span class="word">বই </span>
                    <span class="word">বাস </span>
                    <span class="word">যাই </span>
                    <span class="word">নাম </span>




                    </br>
                    </br>
                    <span class="word">বাসা </span>
                    <span class="word">ভাল </span>
                    <span class="word">মা </span>
                    <span class="word">মাছ </span>
                    <span class="word">মুরগী </span>
                    <span class="word">লবন </span>
                    <span class="word">শোনা </span>
                    <span class="word">কেন </span>
                </div>

                <h1 class="h3 mt-2 mb-2">Bangla Sentence</h1>

                <span class="word">আপনি দাড়াঁনো কেন</span>
                <span class="word"> একটি চেয়ার দাও</span>
                <span class="word"> আমার নাম আরিফ </span>




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

                console.log(userInput);
                let words = userInput.split(" ");

                const wordsDataset = [
                    "আপনারা",
                    "আপনি",
                    "আমরা",
                    "আমার",
                    "আমি",
                    "এখানে",
                    "কয়টা",
                    "বাজে",
                    "কাপে",
                    "খাও",
                    "খাবার",
                    "গাড়ী",
                    "চা",
                    "চামচ",
                    "চাল",
                    "চেয়ার",
                    "টেবিল",
                    "টেলিফোন",
                    "ডিম",
                    "তুমি",
                    "তোমরা",
                    "দাঁড়ানো",
                    "দাও",
                    "দুই",
                    "দুধ",
                    "নাও",
                    "পাখী",
                    "পানি",
                    "ফুল",
                    "বই",
                    "বাস",
                    "যাই",
                    "বাসা",
                    "ভাল",
                    "মা",
                    "মাছ",
                    "মুরগী",
                    "লবন",
                    "শোনা",
                    "কেন",
                    "একটি",
                    "নাম"
                ];



                var sigml = "<sigml>"
                words.forEach(element => {


                    if (wordsDataset.includes(element)) {

                        var xhr = new XMLHttpRequest();
                        console.log("classSign/" + element + ".sigml");

                        xhr.open("GET", "classSign/" + element + ".sigml",
                            false); // Specify the file URL and set asynchronous to false
                        xhr.send();


                        if (xhr.status === 200) {
                            var fileContents = xhr.responseText; // Retrieve the file contents
                            sigml += fileContents;

                        }




                    } else {
                        element.split("").forEach((char) => {

                            var xhr = new XMLHttpRequest();
                            console.log("classSign/" + char + ".sigml");

                            xhr.open("GET", "classSign/" + char + ".sigml",
                                false
                            ); // Specify the file URL and set asynchronous to false
                            xhr.send();


                            if (xhr.status === 200) {
                                var fileContents = xhr
                                    .responseText; // Retrieve the file contents
                                sigml += fileContents;

                            }
                        })
                    }


                });
                sigml += "</sigml>"
                console.log(sigml)
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




                let words = text.split(" ");

                const wordsDataset = [
                    "আপনারা",
                    "আপনি",
                    "আমরা",
                    "আমার",
                    "আমি",
                    "এখানে",
                    "কয়টা",
                    "বাজে",
                    "কাপে",
                    "খাও",
                    "খাবার",
                    "গাড়ী",
                    "চা",
                    "চামচ",
                    "চাল",
                    "চেয়ার",
                    "টেবিল",
                    "টেলিফোন",
                    "ডিম",
                    "তুমি",
                    "তোমরা",
                    "দাঁড়ানো",
                    "দাও",
                    "দুই",
                    "দুধ",
                    "নাও",
                    "পাখী",
                    "পানি",
                    "ফুল",
                    "বই",
                    "বাস",
                    "যাই",
                    "বাসা",
                    "ভাল",
                    "মা",
                    "মাছ",
                    "মুরগী",
                    "লবন",
                    "শোনা",
                    "কেন",
                    "একটি",
                    "নাম"
                ];



                var sigml = "<sigml>"
                words.forEach(element => {


                    if (wordsDataset.includes(element)) {

                        var xhr = new XMLHttpRequest();
                        console.log("classSign/" + element + ".sigml");

                        xhr.open("GET", "classSign/" + element + ".sigml",
                            false); // Specify the file URL and set asynchronous to false
                        xhr.send();


                        if (xhr.status === 200) {
                            var fileContents = xhr.responseText; // Retrieve the file contents
                            sigml += fileContents;

                        }




                    } else {
                        element.split("").forEach((char) => {

                            var xhr = new XMLHttpRequest();
                            console.log("classSign/" + char + ".sigml");

                            xhr.open("GET", "classSign/" + char + ".sigml",
                                false
                            ); // Specify the file URL and set asynchronous to false
                            xhr.send();


                            if (xhr.status === 200) {
                                var fileContents = xhr
                                    .responseText; // Retrieve the file contents
                                sigml += fileContents;

                            }
                        })
                    }


                });
                sigml += "</sigml>"
                console.log(sigml)
                CWASA.playSiGMLText(sigml, 0);



            }
        });
    </script>

</body>

</html>
