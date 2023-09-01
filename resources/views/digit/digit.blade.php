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

    <title>Digit</title>




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


        <h1 class="text-info text-center mb-5 mt-5">Text and Voice to 3D Digit Bangladeshi Sign Language</h1>




        <div class="row">
            <div class="col-md-6">
                <div class="input-group">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                </div>
                <button class="btn btn-primary mt-3" id="playButton">Play</button>
                <button class="btn btn-primary mt-3" id="microphone"><i class="fa-solid fa-microphone"></i></button>

                </br>
                </br>

                <div class="textOnly">
                    <h1 class="h3">Text Only</h1>

                    <span>নয় লক্ষ তিরানব্বই হাজার আট শত পঁচিশ</span>
                    <span> চার কোটি পঁচাশি লক্ষ পনেরো হাজার পাঁচ শত</span>
                </div>

                <div class="textOnly">
                    <h1 class="h3">Text With Digit</h1>

                    <span>৬০ লক্ষ ৯৯ হাজার চার শত ৯২</span>
                    <span> ২৩ কোটি ৪৫ লক্ষ সাতানব্বই হাজার ৬ শত ৪৩</span>
                </div>

                <div class="textOnly">
                    <h1 class="h3">Digit Only</h1>
                    <span>১৪৭৫৭০</span>

                    <span> ২০১৯২০২৩</span>
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
                var text = $("#exampleFormControlTextarea1").val();
                {{--  console.log(text); // one two three  --}}









                // Mapping of numbers to their corresponding words
                const numberWords = {
                    "০": "শূন্য",
                    "১": "এক",
                    "২": "দুই",
                    "৩": "তিন",
                    "৪": "চার",
                    "৫": "পাঁচ",
                    "৬": "ছয়",
                    "৭": "সাত",
                    "৮": "আট",
                    "৯": "নয়",
                    "১০": "দশ",
                    "১১": "এগার",
                    "১২": "বার",
                    "১৩": "তের",
                    "১৪": "চৌদ্দ",
                    "১৫": "পনের",
                    "১৬": "ষোল",
                    "১৭": "সতের",
                    "১৮": "আঠার",
                    "১৯": "ঊনিশ",
                    "২০": "বিশ",
                    "২১": "একুশ",
                    "২২": "বাইশ",
                    "২৩": "তেইশ",
                    "২৪": "চব্বিশ",
                    "২৫": "পঁচিশ",
                    "২৬": "ছাব্বিশ",
                    "২৭": "সাতাশ",
                    "২৮": "আটাশ",
                    "২৯": "ঊনত্রিশ",
                    "৩০": "ত্রিশ",
                    "৩১": "একত্রিশ",
                    "৩২": "বত্রিশ",
                    "৩৩": "তেত্রিশ",
                    "৩৪": "চৌত্রিশ",
                    "৩৫": "পঁয়ত্রিশ",
                    "৩৬": "ছত্রিশ",
                    "৩৭": "সাঁইত্রিশ",
                    "৩৮": "আটত্রিশ",
                    "৩৯": "ঊনচল্লিশ",
                    "৪০": "চল্লিশ",
                    "৪১": "একচল্লিশ",
                    "৪২": "বিয়াল্লিশ",
                    "৪৩": "তেতাল্লিশ",
                    "৪৪": "চুয়াল্লিশ",
                    "৪৫": "পঁয়তাল্লিশ",
                    "৪৬": "ছেচল্লিশ",
                    "৪৭": "সাতচল্লিশ",
                    "৪৮": "আটচল্লিশ",
                    "৪৯": "ঊনপঞ্চাশ",
                    "৫০": "পঞ্চাশ",
                    "৫১": "একান্ন",
                    "৫২": "বায়ান্ন",
                    "৫৩": "তিপ্পান্ন",
                    "৫৪": "চুয়ান্ন",
                    "৫৫": "পঞ্চান্ন",
                    "৫৬": "ছাপ্পান্ন",
                    "৫৭": "সাতান্ন",
                    "৫৮": "আটান্ন",
                    "৫৯": "ঊনষাট",
                    "৬০": "ষাট",
                    "৬১": "একষট্টি",
                    "৬২": "বাষট্টি",
                    "৬৩": "তেষট্টি",
                    "৬৪": "চৌষট্টি",
                    "৬৫": "পঁয়ষট্টি",
                    "৬৬": "ছেষট্টি",
                    "৬৭": "সাতষট্টি",
                    "৬৮": "আটষট্টি",
                    "৬৯": "ঊনসত্তর",
                    "৭০": "সত্তর",
                    "৭১": "একাত্তর",
                    "৭২": "বাহাত্তর",
                    "৭৩": "তিয়াত্তর",
                    "৭৪": "চুয়াত্তর",
                    "৭৫": "পঁচাত্তর",
                    "৭৬": "ছিয়াত্তর",
                    "৭৭": "সাতাত্তর",
                    "৭৮": "আটাত্তর",
                    "৭৯": "ঊনআশি",
                    "৮০": "আশি",
                    "৮১": "একাশি",
                    "৮২": "বিরাশি",
                    "৮৩": "তিরাশি",
                    "৮৪": "চুরাশি",
                    "৮৫": "পঁচাশি",
                    "৮৬": "ছিয়াশি",
                    "৮৭": "সাতাশি",
                    "৮৮": "আটাশি",
                    "৮৯": "ঊননব্বই",
                    "৯০": "নব্বই",
                    "৯১": "একানব্বই",
                    "৯২": "বিরানব্বই",
                    "৯৩": "তিরানব্বই",
                    "৯৪": "চুরানব্বই",
                    "৯৫": "পঁচানব্বই",
                    "৯৬": "ছিয়ানব্বই",
                    "৯৭": "সাতানব্বই",
                    "৯৮": "আটানব্বই",
                    "৯৯": "নিরানব্বই",
                    "১০০": "একশত",
                    "২০০": "দুইশত",
                    "৩০০": "তিনশত",
                    "৪০০": "চারশত",
                    "৫০০": "পাঁচশত",
                    "৬০০": "ছয়শত",
                    "৭০০": "সাতশত",
                    "৮০০": "আটশত",
                    "৯০০": "নয়শত",
                    "হাজার": "হাজার",
                    "লক্ষ": "লক্ষ",
                    "কোটি": "কোটি",
                    "শত": "০ ০",




                    "শূন্য": "০",
                    "এক": "১",
                    "দুই": "২",
                    "তিন": "৩",
                    "চার": "৪",
                    "পাঁচ": "৫",
                    "ছয়": "৬",
                    "সাত": "৭",
                    "আট": "৮",
                    "নয়": "৯",
                    "দশ": "১ ০",
                    "এগার": "১ ১",
                    "বার": "১ ২",
                    "তের": "১ ৩",
                    "চৌদ্দ": "১ ৪",
                    "পনের": "১ ৫",
                    "ষোল": "১ ৬",
                    "সতের": "১ ৭",
                    "আঠার": "১ ৮",
                    "ঊনিশ": "১ ৯",
                    "বিশ": "২ ০",
                    "একুশ": "২ ১",
                    "বাইশ": "২ ২",
                    "তেইশ": "২ ৩",
                    "চব্বিশ": "২ ৪",
                    "পঁচিশ": "২ ৫",
                    "ছাব্বিশ": "২ ৬",
                    "সাতাশ": "২ ৭",
                    "আটাশ": "২ ৮",
                    "ঊনত্রিশ": "২ ৯",
                    "ত্রিশ": "৩ ০",
                    "একত্রিশ": "৩ ১",
                    "বত্রিশ": "৩ ২",
                    "তেত্রিশ": "৩ ৩",
                    "চৌত্রিশ": "৩ ৪",
                    "পঁয়ত্রিশ": "৩ ৫",
                    "ছত্রিশ": "৩ ৬",
                    "সাঁইত্রিশ": "৩ ৭",
                    "আটত্রিশ": "৩ ৮",
                    "ঊনচল্লিশ": "৩ ৯",
                    "চল্লিশ": "৪ ০",
                    "একচল্লিশ": "৪ ১",
                    "বিয়াল্লিশ": "৪ ২",
                    "তেতাল্লিশ": "৪ ৩",
                    "চুয়াল্লিশ": "৪ ৪",
                    "পঁয়তাল্লিশ": "৪ ৫",
                    "ছেচল্লিশ": "৪ ৬",
                    "সাতচল্লিশ": "৪ ৭",
                    "আটচল্লিশ": "৪ ৮",
                    "ঊনপঞ্চাশ ": "৪ ৯",
                    "পঞ্চাশ": "৫ ০",
                    "একান্ন": "৫ ১",
                    "বায়ান্ন": "৫ ২",
                    "তিপ্পান্ন": "৫ ৩",
                    "চুয়ান্ন": "৫ ৪",
                    "পঞ্চান্ন": "৫ ৫",
                    "ছাপ্পান্ন": "৫ ৬",
                    "সাতান্ন": "৫ ৭",
                    "আটান্ন": "৫ ৮",
                    "ঊনষাট": "৫ ৯",
                    "ষাট": "৬ ০",
                    "একষট্টি": "৬ ১",
                    "বাষট্টি": "৬ ২",
                    "তেষট্টি": "৬ ৩",
                    "চৌষট্টি": "৬ ৪",
                    "পঁয়ষট্টি": "৬ ৫",
                    "ছেষট্টি": "৬ ৬",
                    "সাতষট্টি": "৬ ৭",
                    "আটষট্টি": "৬ ৮",
                    "ঊনসত্তর": "৬ ৯",
                    "সত্তর": "৭ ০",
                    "একাত্তর": "৭ ১",
                    "বাহাত্তর": "৭ ২",
                    "তিয়াত্তর": "৭ ৩",
                    "চুয়াত্তর": "৭ ৪",
                    "পঁচাত্তর": "৭ ৫",
                    "ছিয়াত্তর": "৭ ৬",
                    "সাতাত্তর": "৭ ৭",
                    "আটাত্তর": "৭ ৮",
                    "ঊনআশি": "৭ ৯",
                    "আশি": "৮ ০",
                    "একাশি": "৮ ১",
                    "বিরাশি": "৮ ২",
                    "তিরাশি": "৮ ৩",
                    "চুরাশি": "৮ ৪",
                    "পঁচাশি": "৮ ৫",
                    "ছিয়াশি": "৮ ৬",
                    "সাতাশি": "৮ ৭",
                    "আটাশি": "৮ ৮",
                    "ঊননব্বই": "৮ ৯",
                    "নব্বই": "৯ ০",
                    "একানব্বই": "৯ ১",
                    "বিরানব্বই": "৯ ২",
                    "তিরানব্বই": "৯ ৩",
                    "চুরানব্বই": "৯ ৪",
                    "পঁচানব্বই": "৯ ৫",
                    "ছিয়ানব্বই": "৯ ৬",
                    "সাতানব্বই": "৯ ৭",
                    "আটানব্বই": "৯ ৮",
                    "নিরানব্বই": "৯ ৯",
                    "একশত": "১ ০ ০",
                    "দুইশত": "২ ০ ০",
                    "তিনশত": "৩ ০ ০",
                    "চারশত": "৪ ০ ০",
                    "পাঁচশত": "৫ ০ ০",
                    "ছয়শত": "৬ ০ ০",
                    "সাতশত": "৭ ০ ০",
                    "আটশত": "৮ ০ ০",
                    "নয়শত": "৯ ০ ০"
                };

                const BanglaToEnglishCharater = new Map([
                    ["০", "0"],
                    ["১", "1"],
                    ["২", "2"],
                    ["৩", "3"],
                    ["৪", "4"],
                    ["৫", "5"],
                    ["৬", "6"],
                    ["৭", "7"],
                    ["৮", "8"],
                    ["৯", "9"],
                ]);


                const EnglishToBanglaCharacter = new Map([
                    ['0', '০'],
                    ['1', '১'],
                    ['2', '২'],
                    ['3', '৩'],
                    ['4', '৪'],
                    ['5', '৫'],
                    ['6', '৬'],
                    ['7', '৭'],
                    ['8', '৮'],
                    ['9', '৯']
                ]);


                function isBengaliDigit(input) {
                    // Regular expression to match Bengali digits (0-9)
                    var bengaliDigitRegex = /^[০১২৩৪৫৬৭৮৯]+$/;

                    // Check if the input string matches the Bengali digit regex
                    return bengaliDigitRegex.test(input);
                }


                function checkText(text) {
                    // Check if the text contains any character from "০১২৩৪৫৬৭৮৯"
                    const hasCharacter = /[০১২৩৪৫৬৭৮৯]/.test(text);

                    // Check if the text contains any word from "লক্ষ,হাজার,কোটি"
                    const hasWord = /(লক্ষ|হাজার|কোটি)/.test(text);

                    // Return true if both conditions match
                    return hasCharacter && hasWord;
                }

                function digit(text) {
                    const hasCharacter = /[০১২৩৪৫৬৭৮৯]/.test(text);
                    return hasCharacter;
                }

                //only digit

                function convertBanglaNumberToWord(text) {
                    // Split the input string into an array of individual characters
                    var characters = text.split("");




                    if (characters.length == 1) {
                        var sigml = "<sigml>"

                        //console.log(numberWords[element]);
                        var xhr = new XMLHttpRequest();

                        xhr.open("GET", "classSign/" + numberWords[text] + ".sigml",
                            false); // Specify the file URL and set asynchronous to false
                        xhr.send();


                        if (xhr.status === 200) {
                            var fileContents = xhr.responseText; // Retrieve the file contents
                            sigml += fileContents;
                        }


                        sigml += "</sigml>"
                        CWASA.playSiGMLText(sigml, 0);

                    }




                    // Number will be converted for two digit like 10,15,20,30,40,55,65,24,34,44,54,64,74,84,94
                    if (characters.length > 0 && characters.length == 2) {

                        let sigml = "<sigml>";

                        characters.forEach((element) => {
                            //console.log(numberWords[element]);
                            var xhr = new XMLHttpRequest();


                            xhr.open("GET", "classSign/" + numberWords[element] + ".sigml",
                                false); // Specify the file URL and set asynchronous to false
                            xhr.send();


                            if (xhr.status === 200) {
                                var fileContents = xhr.responseText; // Retrieve the file contents
                                sigml += fileContents;
                            }
                        });

                        sigml += "</sigml>";



                        CWASA.playSiGMLText(sigml, 0);




                    }



                    // Number will be converted for two digit like 100,101,102,103,201,999,888,777,666,555,444,333,222,111
                    if (characters.length > 0 && characters.length == 3) {

                        var characters = text.split("");
                        let number = "";
                        let result = "";


                        // converted bangla ২২২ to 222 and stored in number variable
                        characters.forEach((num) => {
                            number += BanglaToEnglishCharater.get(num)
                        });

                        // here i found the reminder and quotient
                        const divisor = 100;
                        const remainder = number % divisor;
                        const quotient = Math.floor(number / divisor);

                        // here i converted the reminder and quotient to bangla
                        result += EnglishToBanglaCharacter.get(quotient.toString());

                        result += "০০";
                        //converted to string and then split and then converted to bangla
                        String(remainder).split("").forEach((num) => {
                            result += EnglishToBanglaCharacter.get(num);
                        });


                        var sigml = "<sigml>"
                        String(result).split("").forEach((element) => {
                            //console.log(numberWords[element]);
                            var xhr = new XMLHttpRequest();


                            xhr.open("GET", "classSign/" + numberWords[element] + ".sigml",
                                false); // Specify the file URL and set asynchronous to false
                            xhr.send();


                            if (xhr.status === 200) {
                                var fileContents = xhr.responseText; // Retrieve the file contents
                                sigml += fileContents;
                            }
                        });

                        sigml += "</sigml>"
                        CWASA.playSiGMLText(sigml, 0);

                    }


                    // Number will be converted for two digit like 1001,1002,1003,1004,1005,1006,1007,1008,1009,1010,1011,1012,1013
                    if (characters.length == 4) {


                        var characters = text.split("");
                        let number = "";
                        characters.forEach((num) => {
                            number += BanglaToEnglishCharater.get(num)
                        });

                        if (number % 1000 == 0) {
                            let result = "";
                            let sigml = "<sigml>"
                            const divisor = 1000;
                            const remainder = number % divisor;
                            const quotient = Math.floor(number / divisor);

                            // here i converted the quotient to bangla
                            result += EnglishToBanglaCharacter.get(quotient.toString());
                            result += " হাজার";

                            String(result).split(" ").forEach((element) => {
                                //console.log(numberWords[element]);
                                var xhr = new XMLHttpRequest();


                                xhr.open("GET", "classSign/" + numberWords[element] + ".sigml",
                                    false); // Specify the file URL and set asynchronous to false
                                xhr.send();

                                if (xhr.status === 200) {
                                    var fileContents = xhr
                                        .responseText; // Retrieve the file contents
                                    sigml += fileContents;
                                }
                            });

                            sigml += "</sigml>"
                            CWASA.playSiGMLText(sigml, 0);
                        } else {
                            let result = "";
                            let sigml = "<sigml>";
                            const divisor = 1000;
                            const remainder = number % divisor;
                            const quotient = Math.floor(number / divisor);
                            const remainderDivisor = 100;
                            const remainderRemainder = remainder % remainderDivisor;
                            const remainderQuotient = Math.floor(remainder / remainderDivisor)

                            // here i converted the quotient to bangla
                            result += EnglishToBanglaCharacter.get(quotient.toString());
                            result += " হাজার ";
                            result += EnglishToBanglaCharacter.get(remainderQuotient.toString());
                            result += " ০ ০";
                            String(remainderRemainder).split("").forEach((num) => {
                                result += " " + EnglishToBanglaCharacter.get(num);
                            });

                            console.log(result);

                            String(result).split(" ").forEach((element) => {

                                console.log("classSign/" + numberWords[element] + ".sigml");
                                //console.log(numberWords[element]);
                                var xhr = new XMLHttpRequest();


                                xhr.open("GET", "classSign/" + numberWords[element] + ".sigml",
                                    false); // Specify the file URL and set asynchronous to false
                                xhr.send();

                                if (xhr.status === 200) {
                                    var fileContents = xhr
                                        .responseText; // Retrieve the file contents
                                    sigml += fileContents;
                                }
                            });

                            sigml += "</sigml>";
                            CWASA.playSiGMLText(sigml, 0);


                            {{--  console.log("hi", quotient, remainderQuotient, remainderRemainder, );  --}}

                        }




                    }


                    // Number will be converted for two digit like 10010,10011,10012,10013,10014,10015,10016,10017,10018,10019,10020,10021,10022,10023
                    if (characters.length == 5) {


                        var characters = text.split("");
                        let number = "";
                        characters.forEach((num) => {
                            number += BanglaToEnglishCharater.get(num)
                        });

                        if (number % 1000 == 0) {
                            let result = "";
                            let sigml = "<sigml>"
                            const divisor = 1000;
                            const remainder = number % divisor;
                            const quotient = Math.floor(number / divisor);



                            // here i converted the quotient to bangla
                            String(quotient).split("").forEach((num) => {
                                result += " " + EnglishToBanglaCharacter.get(num);
                            });
                            result += " হাজার";
                            console.log(result.split(" "));

                            String(result).slice(1).split(" ").forEach((element) => {
                                //console.log(numberWords[element]);


                                console.log("classSign/" + numberWords[element] + ".sigml");
                                var xhr = new XMLHttpRequest();
                                xhr.open("GET", "classSign/" + numberWords[element] + ".sigml",
                                    false); // Specify the file URL and set asynchronous to false
                                xhr.send();

                                if (xhr.status === 200) {
                                    var fileContents = xhr
                                        .responseText; // Retrieve the file contents
                                    sigml += fileContents;
                                }
                            });

                            sigml += "</sigml>"
                            CWASA.playSiGMLText(sigml, 0);
                        } else {
                            let result = "";
                            let sigml = "<sigml>";
                            const divisor = 1000;
                            const remainder = number % divisor;
                            const quotient = Math.floor(number / divisor);
                            const remainderDivisor = 100;
                            const remainderRemainder = remainder % remainderDivisor;
                            const remainderQuotient = Math.floor(remainder / remainderDivisor)

                            console.log(quotient, remainderQuotient, remainderRemainder);

                            String(quotient).split("").forEach((num) => {
                                result += " " + EnglishToBanglaCharacter.get(num);
                            });

                            result += " হাজার ";
                            result += EnglishToBanglaCharacter.get(remainderQuotient.toString());
                            result += " ০ ০";
                            String(remainderRemainder).split("").forEach((num) => {
                                result += " " + EnglishToBanglaCharacter.get(num);
                            });
                            console.log(result.split(" "));

                            String(result).slice(1).split(" ").forEach((element) => {


                                console.log("classSign/" + numberWords[element] + ".sigml");
                                //console.log(numberWords[element]);
                                var xhr = new XMLHttpRequest();
                                xhr.open("GET", "classSign/" + numberWords[element] + ".sigml",
                                    false); // Specify the file URL and set asynchronous to false
                                xhr.send();

                                if (xhr.status === 200) {
                                    var fileContents = xhr
                                        .responseText; // Retrieve the file contents
                                    sigml += fileContents;
                                }
                            });

                            sigml += "</sigml>";
                            CWASA.playSiGMLText(sigml, 0);

                        }





                    }

                    if (characters.length >= 6 && characters.length <= 7) {


                        var characters = text.split("");
                        let number = "";
                        characters.forEach((num) => {
                            number += BanglaToEnglishCharater.get(num)
                        });
                        console.log(number);

                        if (number % 100000 == 0 || number % 1000000 == 0) {
                            let sigml = "<sigml>";
                            let result = "";
                            const divisor = 100000;
                            const remainder = number % divisor;
                            const quotient = Math.floor(number / divisor);
                            console.log(quotient, remainder);


                            // here i converted the quotient to bangla
                            String(quotient).split("").forEach((num) => {
                                result += " " + EnglishToBanglaCharacter.get(num);
                            });
                            result += " লক্ষ";
                            console.log(result.split(" "));


                            String(result).slice(1).split(" ").forEach((element) => {
                                //console.log(numberWords[element]);


                                console.log("classSign/" + numberWords[element] + ".sigml");
                                var xhr = new XMLHttpRequest();
                                xhr.open("GET", "classSign/" + numberWords[element] + ".sigml",
                                    false); // Specify the file URL and set asynchronous to false
                                xhr.send();

                                if (xhr.status === 200) {
                                    var fileContents = xhr
                                        .responseText; // Retrieve the file contents
                                    sigml += fileContents;
                                }
                            });

                            sigml += "</sigml>"
                            CWASA.playSiGMLText(sigml, 0);
                        } else {
                            let sigml = "<sigml>";
                            let result = "";
                            const divisor = 100000;
                            const remainder = number % divisor;
                            const quotient = Math.floor(number / divisor);
                            const remainderDivisor = 1000;
                            const remainderRemainder = remainder % remainderDivisor;
                            const remainderQuotient = Math.floor(remainder / remainderDivisor)

                            console.log(quotient, remainderQuotient, remainderRemainder);

                            String(quotient).split("").forEach((num) => {
                                result += " " + EnglishToBanglaCharacter.get(num);
                            });

                            result += " লক্ষ";
                            String(remainderQuotient).split("").forEach((num) => {
                                result += " " + EnglishToBanglaCharacter.get(num);
                            });
                            result += " হাজার ";
                            if (String(remainderRemainder).split("").length == 3) {

                                // here i found the reminder and quotient
                                const divisor = 100;
                                const remainder = remainderRemainder % divisor;
                                const quotient = Math.floor(remainderRemainder / divisor);

                                console.log(remainder, quotient);

                                // here i converted the reminder and quotient to bangla
                                result += EnglishToBanglaCharacter.get(quotient.toString());

                                result += " ০ ০";
                                //converted to string and then split and then converted to bangla
                                String(remainder).split("").forEach((num) => {
                                    result += " " + EnglishToBanglaCharacter.get(num);
                                });

                            } else {
                                String(remainderRemainder).split("").forEach((num) => {
                                    result += " " + EnglishToBanglaCharacter.get(num);
                                });
                            }





                            console.log(result.split(" ").toString());


                            String(result).slice(1).split(" ").forEach((element) => {


                                console.log("classSign/" + numberWords[element] + ".sigml");
                                //console.log(numberWords[element]);
                                var xhr = new XMLHttpRequest();
                                xhr.open("GET", "classSign/" + numberWords[element] + ".sigml",
                                    false); // Specify the file URL and set asynchronous to false
                                xhr.send();

                                if (xhr.status === 200) {
                                    var fileContents = xhr
                                        .responseText; // Retrieve the file contents
                                    sigml += fileContents;
                                }
                            });

                            sigml += "</sigml>";

                            CWASA.playSiGMLText(sigml, 0);


                        }

                    }


                    if (characters.length >= 8 && characters.length <= 9) {


                        var characters = text.split("");
                        let number = "";
                        characters.forEach((num) => {
                            number += BanglaToEnglishCharater.get(num)
                        });
                        if (number % 1000000 == 0 || number % 10000000 == 0) {
                            let sigml = "<sigml>";
                            let result = "";
                            const divisor = 1000000;
                            const remainder = number % divisor;
                            const quotient = Math.floor(number / divisor);
                            console.log(quotient, remainder);

                            // here i converted the quotient to bangla
                            String(quotient).split("").forEach((num) => {
                                result += " " + EnglishToBanglaCharacter.get(num);
                            });
                            result += " কোটি";
                            console.log(result.split(" "));

                            String(result).slice(1).split(" ").forEach((element) => {
                                //console.log(numberWords[element]);
                                textShow.innerHTML = numberWords[element];

                                console.log("classSign/" + numberWords[element] + ".sigml");
                                var xhr = new XMLHttpRequest();
                                xhr.open("GET", "classSign/" + numberWords[element] + ".sigml",
                                    false); // Specify the file URL and set asynchronous to false
                                xhr.send();

                                if (xhr.status === 200) {
                                    var fileContents = xhr
                                        .responseText; // Retrieve the file contents
                                    sigml += fileContents;
                                }
                            });

                            sigml += "</sigml>"
                            CWASA.playSiGMLText(sigml, 0);

                        } else {
                            let result = "";
                            let sigml = "<sigml>";
                            const divisor = 10000000;
                            const remainder = number % divisor;
                            const quotient = Math.floor(number / divisor);
                            const remainderDivisor = 100000;
                            const remainderRemainder = remainder % remainderDivisor;
                            const remainderQuotient = Math.floor(remainder / remainderDivisor)
                            const remainderRemainderDivisor = 1000;
                            const remainderRemainderRemainder = remainderRemainder %
                                remainderRemainderDivisor;
                            const remainderRemainderQuotient = Math.floor(remainderRemainder /
                                remainderRemainderDivisor)
                            const remainderRemainderRemainderDivisor = 100;
                            const remainderRemainderRemainderRemainder = remainderRemainderRemainder %
                                remainderRemainderRemainderDivisor;
                            const remainderRemainderRemainderQuotient = Math.floor(
                                remainderRemainderRemainder / remainderRemainderRemainderDivisor)
                            console.log(remainder, quotient)

                            String(quotient).split("").forEach((num) => {
                                result += " " + EnglishToBanglaCharacter.get(num);
                            });
                            result += " কোটি";
                            String(remainderQuotient).split("").forEach((num) => {
                                result += " " + EnglishToBanglaCharacter.get(num);
                            });
                            result += " লক্ষ";
                            String(remainderRemainderQuotient).split("").forEach((num) => {
                                result += " " + EnglishToBanglaCharacter.get(num);
                            });
                            result += " হাজার";

                            if (String(remainderRemainderRemainder).split("").length == 3) {
                                const divisor = 100;
                                const remainder = remainderRemainderRemainder % divisor;
                                const quotient = Math.floor(remainderRemainderRemainder / divisor);
                                console.log(remainder, quotient);
                                String(quotient).split("").forEach((num) => {
                                    result += " " + EnglishToBanglaCharacter.get(num);
                                });
                                result += " ০ ০";
                                String(remainder).split("").forEach((num) => {
                                    result += " " + EnglishToBanglaCharacter.get(num);
                                });
                            } else {
                                String(remainderRemainderRemainder).split("").forEach((num) => {
                                    result += " " + EnglishToBanglaCharacter.get(num);
                                });
                            }




                            String(result).slice(1).split(" ").forEach((element) => {
                                //console.log(numberWords[element]);

                                console.log("classSign/" + numberWords[element] + ".sigml");
                                var xhr = new XMLHttpRequest();
                                textShow.innerHTML = numberWords[element];

                                xhr.open("GET", "classSign/" + numberWords[element] + ".sigml",
                                    false); // Specify the file URL and set asynchronous to false
                                xhr.send();

                                if (xhr.status === 200) {
                                    var fileContents = xhr
                                        .responseText; // Retrieve the file contents
                                    sigml += fileContents;
                                }
                            });

                            sigml += "</sigml>"
                            CWASA.playSiGMLText(sigml, 0);




                        }

                    }












                    return characters;
                }

                //text with digit
                function convertBanglaNumberToEnglish(text) {
                    const hasCharacter = /[০১২৩৪৫৬৭৮৯]/.test(text);
                    let words = text.split(' ');
                    let result = "";

                    words.forEach((element) => {
                        if (digit(element) == true) {
                            String(element).split('').forEach((char) => {
                                result += " " + char;
                            })

                        } else {
                            result += " " + numberWords[element];
                        }
                    });
                    console.log(result.split(' '));

                    var sigml = "<sigml>"
                    String(result).split(" ").slice('1').forEach((element) => {

                        console.log(numberWords[element]);
                        var xhr = new XMLHttpRequest();


                        xhr.open("GET", "classSign/" + numberWords[element] + ".sigml",
                            false); // Specify the file URL and set asynchronous to false
                        xhr.send();


                        if (xhr.status === 200) {
                            var fileContents = xhr.responseText; // Retrieve the file contents
                            sigml += fileContents;
                        }
                    });

                    sigml += "</sigml>"
                    CWASA.playSiGMLText(sigml, 0);


                }


                //only text
                function convertBanglaNumeralTextToAnimation(text) {
                    let words = text.split(' ');
                    let result = "";
                    words.forEach((element) => {
                        result += " " + numberWords[element];
                    });

                    var sigml = "<sigml>"
                    String(result).slice('1').split(" ").forEach((element) => {
                        console.log(element);
                        var xhr = new XMLHttpRequest();


                        xhr.open("GET", "classSign/" + numberWords[element] + ".sigml",
                            false); // Specify the file URL and set asynchronous to false
                        xhr.send();


                        if (xhr.status === 200) {
                            var fileContents = xhr.responseText; // Retrieve the file contents
                            sigml += fileContents;
                        }
                    });

                    sigml += "</sigml>"
                    CWASA.playSiGMLText(sigml, 0);
                    return true;

                }


                //only digit
                if (isBengaliDigit(text) == true) {
                    convertBanglaNumberToWord(text);
                } else if (checkText(text) == true) {
                    //text with digit
                    convertBanglaNumberToEnglish(text);
                } else {
                    //only text
                    convertBanglaNumeralTextToAnimation(text);
                }




            });

            $("#microphone").click(function() {



                const numberWords = {
                    "০": "শূন্য",
                    "১": "এক",
                    "২": "দুই",
                    "৩": "তিন",
                    "৪": "চার",
                    "৫": "পাঁচ",
                    "৬": "ছয়",
                    "৭": "সাত",
                    "৮": "আট",
                    "৯": "নয়",
                    "১০": "দশ",
                    "১১": "এগার",
                    "১২": "বার",
                    "১৩": "তের",
                    "১৪": "চৌদ্দ",
                    "১৫": "পনের",
                    "১৬": "ষোল",
                    "১৭": "সতের",
                    "১৮": "আঠার",
                    "১৯": "ঊনিশ",
                    "২০": "বিশ",
                    "২১": "একুশ",
                    "২২": "বাইশ",
                    "২৩": "তেইশ",
                    "২৪": "চব্বিশ",
                    "২৫": "পঁচিশ",
                    "২৬": "ছাব্বিশ",
                    "২৭": "সাতাশ",
                    "২৮": "আটাশ",
                    "২৯": "ঊনত্রিশ",
                    "৩০": "ত্রিশ",
                    "৩১": "একত্রিশ",
                    "৩২": "বত্রিশ",
                    "৩৩": "তেত্রিশ",
                    "৩৪": "চৌত্রিশ",
                    "৩৫": "পঁয়ত্রিশ",
                    "৩৬": "ছত্রিশ",
                    "৩৭": "সাঁইত্রিশ",
                    "৩৮": "আটত্রিশ",
                    "৩৯": "ঊনচল্লিশ",
                    "৪০": "চল্লিশ",
                    "৪১": "একচল্লিশ",
                    "৪২": "বিয়াল্লিশ",
                    "৪৩": "তেতাল্লিশ",
                    "৪৪": "চুয়াল্লিশ",
                    "৪৫": "পঁয়তাল্লিশ",
                    "৪৬": "ছেচল্লিশ",
                    "৪৭": "সাতচল্লিশ",
                    "৪৮": "আটচল্লিশ",
                    "৪৯": "ঊনপঞ্চাশ",
                    "৫০": "পঞ্চাশ",
                    "৫১": "একান্ন",
                    "৫২": "বায়ান্ন",
                    "৫৩": "তিপ্পান্ন",
                    "৫৪": "চুয়ান্ন",
                    "৫৫": "পঞ্চান্ন",
                    "৫৬": "ছাপ্পান্ন",
                    "৫৭": "সাতান্ন",
                    "৫৮": "আটান্ন",
                    "৫৯": "ঊনষাট",
                    "৬০": "ষাট",
                    "৬১": "একষট্টি",
                    "৬২": "বাষট্টি",
                    "৬৩": "তেষট্টি",
                    "৬৪": "চৌষট্টি",
                    "৬৫": "পঁয়ষট্টি",
                    "৬৬": "ছেষট্টি",
                    "৬৭": "সাতষট্টি",
                    "৬৮": "আটষট্টি",
                    "৬৯": "ঊনসত্তর",
                    "৭০": "সত্তর",
                    "৭১": "একাত্তর",
                    "৭২": "বাহাত্তর",
                    "৭৩": "তিয়াত্তর",
                    "৭৪": "চুয়াত্তর",
                    "৭৫": "পঁচাত্তর",
                    "৭৬": "ছিয়াত্তর",
                    "৭৭": "সাতাত্তর",
                    "৭৮": "আটাত্তর",
                    "৭৯": "ঊনআশি",
                    "৮০": "আশি",
                    "৮১": "একাশি",
                    "৮২": "বিরাশি",
                    "৮৩": "তিরাশি",
                    "৮৪": "চুরাশি",
                    "৮৫": "পঁচাশি",
                    "৮৬": "ছিয়াশি",
                    "৮৭": "সাতাশি",
                    "৮৮": "আটাশি",
                    "৮৯": "ঊননব্বই",
                    "৯০": "নব্বই",
                    "৯১": "একানব্বই",
                    "৯২": "বিরানব্বই",
                    "৯৩": "তিরানব্বই",
                    "৯৪": "চুরানব্বই",
                    "৯৫": "পঁচানব্বই",
                    "৯৬": "ছিয়ানব্বই",
                    "৯৭": "সাতানব্বই",
                    "৯৮": "আটানব্বই",
                    "৯৯": "নিরানব্বই",
                    "১০০": "একশত",
                    "২০০": "দুইশত",
                    "৩০০": "তিনশত",
                    "৪০০": "চারশত",
                    "৫০০": "পাঁচশত",
                    "৬০০": "ছয়শত",
                    "৭০০": "সাতশত",
                    "৮০০": "আটশত",
                    "৯০০": "নয়শত",
                    "হাজার": "হাজার",
                    "লক্ষ": "লক্ষ",
                    "কোটি": "কোটি",
                    "শত": "০ ০",




                    "শূন্য": "০",
                    "এক": "১",
                    "দুই": "২",
                    "তিন": "৩",
                    "চার": "৪",
                    "পাঁচ": "৫",
                    "ছয়": "৬",
                    "সাত": "৭",
                    "আট": "৮",
                    "নয়": "৯",
                    "দশ": "১ ০",
                    "এগার": "১ ১",
                    "বার": "১ ২",
                    "তের": "১ ৩",
                    "চৌদ্দ": "১ ৪",
                    "পনের": "১ ৫",
                    "ষোল": "১ ৬",
                    "সতের": "১ ৭",
                    "আঠার": "১ ৮",
                    "ঊনিশ": "১ ৯",
                    "বিশ": "২ ০",
                    "একুশ": "২ ১",
                    "বাইশ": "২ ২",
                    "তেইশ": "২ ৩",
                    "চব্বিশ": "২ ৪",
                    "পঁচিশ": "২ ৫",
                    "ছাব্বিশ": "২ ৬",
                    "সাতাশ": "২ ৭",
                    "আটাশ": "২ ৮",
                    "ঊনত্রিশ": "২ ৯",
                    "ত্রিশ": "৩ ০",
                    "একত্রিশ": "৩ ১",
                    "বত্রিশ": "৩ ২",
                    "তেত্রিশ": "৩ ৩",
                    "চৌত্রিশ": "৩ ৪",
                    "পঁয়ত্রিশ": "৩ ৫",
                    "ছত্রিশ": "৩ ৬",
                    "সাঁইত্রিশ": "৩ ৭",
                    "আটত্রিশ": "৩ ৮",
                    "ঊনচল্লিশ": "৩ ৯",
                    "চল্লিশ": "৪ ০",
                    "একচল্লিশ": "৪ ১",
                    "বিয়াল্লিশ": "৪ ২",
                    "তেতাল্লিশ": "৪ ৩",
                    "চুয়াল্লিশ": "৪ ৪",
                    "পঁয়তাল্লিশ": "৪ ৫",
                    "ছেচল্লিশ": "৪ ৬",
                    "সাতচল্লিশ": "৪ ৭",
                    "আটচল্লিশ": "৪ ৮",
                    "ঊনপঞ্চাশ ": "৪ ৯",
                    "পঞ্চাশ": "৫ ০",
                    "একান্ন": "৫ ১",
                    "বায়ান্ন": "৫ ২",
                    "তিপ্পান্ন": "৫ ৩",
                    "চুয়ান্ন": "৫ ৪",
                    "পঞ্চান্ন": "৫ ৫",
                    "ছাপ্পান্ন": "৫ ৬",
                    "সাতান্ন": "৫ ৭",
                    "আটান্ন": "৫ ৮",
                    "ঊনষাট": "৫ ৯",
                    "ষাট": "৬ ০",
                    "একষট্টি": "৬ ১",
                    "বাষট্টি": "৬ ২",
                    "তেষট্টি": "৬ ৩",
                    "চৌষট্টি": "৬ ৪",
                    "পঁয়ষট্টি": "৬ ৫",
                    "ছেষট্টি": "৬ ৬",
                    "সাতষট্টি": "৬ ৭",
                    "আটষট্টি": "৬ ৮",
                    "ঊনসত্তর": "৬ ৯",
                    "সত্তর": "৭ ০",
                    "একাত্তর": "৭ ১",
                    "বাহাত্তর": "৭ ২",
                    "তিয়াত্তর": "৭ ৩",
                    "চুয়াত্তর": "৭ ৪",
                    "পঁচাত্তর": "৭ ৫",
                    "ছিয়াত্তর": "৭ ৬",
                    "সাতাত্তর": "৭ ৭",
                    "আটাত্তর": "৭ ৮",
                    "ঊনআশি": "৭ ৯",
                    "আশি": "৮ ০",
                    "একাশি": "৮ ১",
                    "বিরাশি": "৮ ২",
                    "তিরাশি": "৮ ৩",
                    "চুরাশি": "৮ ৪",
                    "পঁচাশি": "৮ ৫",
                    "ছিয়াশি": "৮ ৬",
                    "সাতাশি": "৮ ৭",
                    "আটাশি": "৮ ৮",
                    "ঊননব্বই": "৮ ৯",
                    "নব্বই": "৯ ০",
                    "একানব্বই": "৯ ১",
                    "বিরানব্বই": "৯ ২",
                    "তিরানব্বই": "৯ ৩",
                    "চুরানব্বই": "৯ ৪",
                    "পঁচানব্বই": "৯ ৫",
                    "ছিয়ানব্বই": "৯ ৬",
                    "সাতানব্বই": "৯ ৭",
                    "আটানব্বই": "৯ ৮",
                    "নিরানব্বই": "৯ ৯",
                    "একশত": "১ ০ ০",
                    "দুইশত": "২ ০ ০",
                    "তিনশত": "৩ ০ ০",
                    "চারশত": "৪ ০ ০",
                    "পাঁচশত": "৫ ০ ০",
                    "ছয়শত": "৬ ০ ০",
                    "সাতশত": "৭ ০ ০",
                    "আটশত": "৮ ০ ০",
                    "নয়শত": "৯ ০ ০"
                };


                const BanglaToEnglishCharater = new Map([
                    ["০", "0"],
                    ["১", "1"],
                    ["২", "2"],
                    ["৩", "3"],
                    ["৪", "4"],
                    ["৫", "5"],
                    ["৬", "6"],
                    ["৭", "7"],
                    ["৮", "8"],
                    ["৯", "9"],
                ]);


                const EnglishToBanglaCharacter = new Map([
                    ['0', '০'],
                    ['1', '১'],
                    ['2', '২'],
                    ['3', '৩'],
                    ['4', '৪'],
                    ['5', '৫'],
                    ['6', '৬'],
                    ['7', '৭'],
                    ['8', '৮'],
                    ['9', '৯']
                ]);

                const dataset = {
                    "০": "শূন্য",
                    "১": "এক",
                    "২": "দুই",
                    "৩": "তিন",
                    "৪": "চার",
                    "৫": "পাঁচ",
                    "৬": "ছয়",
                    "৭": "সাত",
                    "৮": "আট",
                    "৯": "নয়",
                    "শূন্য": "শূন্য",
                    "এক": "এক",
                    "দুই": "দুই",
                    "তিন": "তিন",
                    "চার": "চার",
                    "পাঁচ": "পাঁচ",
                    "ছয়": "ছয়",
                    "সাত": "সাত",
                    "আট": "আট",
                    "নয়": "নয়",
                    "হাজার": "হাজার",
                    "লক্ষ": "লক্ষ",
                    "কোটি": "কোটি",
                }


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
                    console.log(text);


                    if (text == "এক") {
                        var sigml = "<sigml>"

                        var xhr = new XMLHttpRequest();

                        xhr.open("GET", "classSign/" + "এক" + ".sigml",
                            false);
                        xhr.send();


                        if (xhr.status === 200) {
                            var fileContents = xhr
                                .responseText;

                            sigml += fileContents;
                        }


                        sigml += "</sigml>"
                        CWASA.playSiGMLText(sigml, 0);
                    } else if (text == "নয়") {
                        var sigml = "<sigml>"

                        var xhr = new XMLHttpRequest();

                        xhr.open("GET", "classSign/" + "নয়" + ".sigml",
                            false);
                        xhr.send();


                        if (xhr.status === 200) {
                            var fileContents = xhr
                                .responseText;

                            sigml += fileContents;
                        }


                        sigml += "</sigml>"
                        CWASA.playSiGMLText(sigml, 0);
                    } else if (text > 1 && text < 9) {
                        var sigml = "<sigml>"
                        var convert = EnglishToBanglaCharacter.get(text);


                        var xhr = new XMLHttpRequest();

                        xhr.open("GET", "classSign/" + numberWords[convert] + ".sigml",
                            false);
                        xhr.send();


                        if (xhr.status === 200) {
                            var fileContents = xhr
                                .responseText;

                            sigml += fileContents;
                        }


                        sigml += "</sigml>"
                        CWASA.playSiGMLText(sigml, 0);
                    } else if (text > 9 && text < 100) {
                        var sigml = "<sigml>"
                        String(text).split('').forEach((element) => {

                            var convert = EnglishToBanglaCharacter.get(element);

                            var xhr = new XMLHttpRequest();

                            xhr.open("GET", "classSign/" + numberWords[convert] + ".sigml",
                                false);
                            xhr.send();

                            if (xhr.status === 200) {
                                var fileContents = xhr
                                    .responseText;

                                sigml += fileContents;
                            }



                        })
                        sigml += "</sigml>"
                        CWASA.playSiGMLText(sigml, 0);
                    } else if (text > 99 && text < 1000) {
                        if (text % 100 == 0) {
                            var result = "";
                            var sigml = "<sigml>";
                            const divisor = 100;
                            const remainder = text % divisor;
                            const quotient = Math.floor(text / divisor);
                            var ConvertQuotient = EnglishToBanglaCharacter.get(quotient.toString());
                            result += ConvertQuotient;
                            result += " ০ ০";

                            result.split(' ').forEach((element) => {
                                console.log("classSign/" + numberWords[element] + ".sigml");


                                var xhr = new XMLHttpRequest();

                                xhr.open("GET", "classSign/" + numberWords[element] + ".sigml",
                                    false);
                                xhr.send();

                                if (xhr.status === 200) {
                                    var fileContents = xhr
                                        .responseText;

                                    sigml += fileContents;
                                }
                            });
                            sigml += "</sigml>"
                            CWASA.playSiGMLText(sigml, 0);

                        } else {
                            let sigml = "<sigml>";
                            let result = "";
                            const divisor = 100;
                            const remainder = text % divisor;
                            const quotient = Math.floor(text / divisor);
                            console.log(quotient, remainder);
                            var ConvertQuotient = EnglishToBanglaCharacter.get(quotient.toString());
                            result += ConvertQuotient;
                            result += " ০ ০";
                            String(remainder).split("").forEach((element) => {
                                result += " " + EnglishToBanglaCharacter.get(element);
                            })
                            console.log(result.split(' '));
                            result.split(' ').forEach((element) => {

                                console.log("classSign/" + numberWords[element] + ".sigml");


                                var xhr = new XMLHttpRequest();

                                xhr.open("GET", "classSign/" + numberWords[element] + ".sigml",
                                    false);
                                xhr.send();

                                if (xhr.status === 200) {
                                    var fileContents = xhr
                                        .responseText;

                                    sigml += fileContents;
                                }
                            });
                            sigml += "</sigml>"
                            CWASA.playSiGMLText(sigml, 0);
                        }

                    } else if (text > 1000 && text < 100000) {
                        if (text % 1000 == 0) {
                            let sigml = "<sigml>";
                            let result = "";
                            let divisor = 1000;
                            let remainder = text % divisor;
                            let quotient = Math.floor(text / divisor);
                            String(quotient).split("").forEach((element) => {
                                result += " " + EnglishToBanglaCharacter.get(element);
                            })

                            result += " হাজার";
                            console.log(result.split(' '));


                            result.split(' ').slice('1').forEach((element) => {
                                console.log("classSign/" + numberWords[element] + ".sigml");


                                var xhr = new XMLHttpRequest();

                                xhr.open("GET", "classSign/" + numberWords[element] + ".sigml",
                                    false);
                                xhr.send();

                                if (xhr.status === 200) {
                                    var fileContents = xhr
                                        .responseText;

                                    sigml += fileContents;
                                }
                            });
                            sigml += "</sigml>"
                            CWASA.playSiGMLText(sigml, 0);

                        } else {
                            let sigml = "<sigml>";
                            let result = "";
                            let divisor = 1000;
                            let remainder = text % divisor;
                            let quotient = Math.floor(text / divisor);
                            let quotientQuo = quotient % 100;
                            let quotientRem = Math.floor(quotient / 100);
                            String(quotientQuo).split("").forEach((element) => {
                                result += " " + EnglishToBanglaCharacter.get(element);
                            })
                            result += " হাজার";

                            if (String(remainder).split('').length == 3) {
                                let divisor = 100;
                                let remainderAgain = remainder % divisor;
                                let quotient = Math.floor(remainder / divisor);
                                console.log("hi", quotient, remainderAgain);
                                String(quotient).split("").forEach((element) => {
                                    result += " " + EnglishToBanglaCharacter.get(element);
                                })
                                result += " ০ ০";
                                String(remainderAgain).split("").forEach((element) => {
                                    result += " " + EnglishToBanglaCharacter.get(element);
                                })
                            } else {
                                String(quotientRem).split("").forEach((element) => {
                                    result += " " + EnglishToBanglaCharacter.get(element);
                                })
                            }

                            result.split(' ').slice('1').forEach((element) => {
                                console.log("classSign/" + numberWords[element] + ".sigml");


                                var xhr = new XMLHttpRequest();

                                xhr.open("GET", "classSign/" + numberWords[element] + ".sigml",
                                    false);
                                xhr.send();

                                if (xhr.status === 200) {
                                    var fileContents = xhr
                                        .responseText;

                                    sigml += fileContents;
                                }
                            });
                            sigml += "</sigml>"
                            CWASA.playSiGMLText(sigml, 0);
                        }
                    } else {
                        let words = text.split(' ');
                        let result = "";
                        words.forEach((element) => {
                            if (Object.values(numberWords).includes(element)) {
                                result += " " + numberWords[element];
                            } else {
                                String(element).split('').forEach((element) => {

                                    var convert = EnglishToBanglaCharacter.get(element);
                                    result += " " + numberWords[convert]


                                })
                            }
                        });

                        console.log(result.split(' '));

                        let sigml = "<sigml>";
                        result.split(' ').slice('1').forEach((element) => {
                            console.log(element);


                            var xhr = new XMLHttpRequest();

                            xhr.open("GET", "classSign/" + dataset[element] + ".sigml",
                                false);
                            xhr.send();

                            if (xhr.status === 200) {
                                var fileContents = xhr
                                    .responseText;

                                sigml += fileContents;
                            }
                        });
                        sigml += "</sigml>"
                        CWASA.playSiGMLText(sigml, 0);

                    }









                }
            })
        });
    </script>

</body>

</html>
