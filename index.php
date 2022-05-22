<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
<div id="inf"></div>
<script>
    // function ajax (q, callback) {
    //     let x = new XMLHttpRequest();
    //     let d = new FormData();
    //
    //     d.append("page","top")
    //     x.open('POST', q);
    //     x.send(d);
    //
    //     x.onreadystatechange = function (){
    //         if (x.readyState == 4 && x.status == 200) callback(x.response)
    //     };
    // }
    //
    // ajax("test.php?id=123&name=asd", function (d){
    //     console.log(d)
    // });

    // $.ajax({
    //     method: "POST",
    //     url: "test.php",
    //     data: {id: "1"},
    // }).done(function (d){
    //     console.log(d)
    // });
function load(ID_students) {
    $.ajax({
        method: "POST",
        url: "test.php",
        data: {ID_students: ID_students}
    })
        .done(function (msg) {
            $('#inf').html(msg);
            console.log(msg)
        });
}
    $(document).ready(function(){
        load(900);
    });


</script>


</body>
</html>
