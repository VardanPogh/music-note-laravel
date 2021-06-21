<html>

<head>
    <title>TEST PAYMENT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    {{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.0/jspdf.umd.min.js"></script>--}}
    <link rel="stylesheet" href="/sass/main.css">
    <link rel="stylesheet" href="/sass/responsive.css">
    <link rel="stylesheet" href="/css/style.css">

</head>

<body>
<form style="top: 50%;position: relative;left: 40%;" action="/test" method="GET">
    <input type="number" name="amount" min="0" max="99999999" style="width: 300px;top: 20px">
    <button type="submit">SUBMIT</button>
</form>
</body>

</html>