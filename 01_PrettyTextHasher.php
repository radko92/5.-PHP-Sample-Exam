<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>
        input[type="text"], [type="number"] {
            width: 300px;
        }
    </style>
</head>
<body>
<?php header("Content-Type: text/html; charset=utf8") ?>
<form method="post">
<input type="text" name="text" placeholder="Please insert your text here [text]"/><br/>
<input type="number" name="fontSize" placeholder="Please insert Font Size [number]"/><br/>
<input type="text" name=fontStyle placeholder="Please insert Font Style [normal, bold or italic]"/><br/>
<input type="submit"/>
</form>
<?php if(isset($_POST['text']) && isset($_POST['fontSize']) && isset($_POST['fontStyle'])) { ?>
<p style="font-size:<?php echo htmlentities($_POST['fontSize'])."px"; ?>;<?php if(htmlentities($_POST['fontStyle']) === "normal"){echo "font-style:normal;";} else if (htmlentities($_POST['fontStyle']) === "italic"){echo "font-style:italic;";} else if(htmlentities($_POST['fontStyle']) === "bold"){echo "font-weight:bold;";}?>"><?php
    $text = $_POST['text'];
    $text = str_split($text);

    for($i=0; $i<count($text); $i++){
        $ord = ord($text[$i]);

        if($i % 2 == 0){
            $even = $ord + 1;
            echo chr($even);
        } else {
            $odd = $ord - 1;
            echo chr($odd);
        }
    }
    ?></p>
<?php } ?>
</body>
</html>