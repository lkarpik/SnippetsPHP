<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="https://bootswatch.com/4/sketchy/bootstrap.min.css" />
    <script src="main.js"></script>
    <script>
        function showSuggestion(str) {
            if (str.length == 0) {
                document.getElementById('output').innerHTML = '';
            } else {
        //AJAX
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status ==200) {
                        document.getElementById('output').innerHTML = this.responseText;
                    }
                }
                xmlhttp.open("GET", "suggest.php?q="+str, true); 
                xmlhttp.send();

            }
        }
    </script>
</head>
<body>
    
    <div class="container">
    <h1>Wyszukaj</h1>
    <form action="" method="post">
    Wyszukaj:
    <input type="text" class="form-control" onkeyup="showSuggestion(this.value)">
    </form>
    <p>Suggestions</p> <span id="output" class="text-success"></span>
    </div>
</body>
</html>