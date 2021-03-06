<!DOCTYPE HTML>

<html>

<head>
    <title>Bootstrap Pincode Input examples</title>
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
        integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css"
        integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"
        integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd"
        crossorigin="anonymous"></script>

    <link href="css/bootstrap-pincode-input.css" rel="stylesheet">

    <script type="text/javascript" src="js/bootstrap-pincode-input.js"></script>
    <script>
        $(document).ready(function () {
            $('#pincode-input1').pincodeInput({
                hidedigits: false, complete: function (value, e, errorElement) {

                    $("#pincode-callback").html("This is the 'complete' callback firing. Current value: " + value);

                    // check the code
                    if (value != "1234") {
                        $(errorElement).html("The code is not correct. Should be '1234'");
                    } else {
                        alert('code is correct!');
                    }

                }
            });
        });
    </script>
</head>

<body>
    <div style="width:200px">
        <input type="text" id="pincode-input1">
    </div>
</body>

</html>