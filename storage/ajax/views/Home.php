<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>heyyyyyy</h3>
    <pre>
    <div id="test" class="divLast">

    </div>
    </pre>
    <script>
        var xhttp = new XMLHttpRequest();
        var url="/getLastRow";
        xhttp.onload = function (){
            console.log(this.responseText);
            document.getElementById("test").innerHTML=this.responseText;    
        }
        xhttp.open('GET',url,true);
        xhttp.send();
    </script>
</body>
</html>