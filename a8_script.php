<?php
function replace_links( $text )
{
    $ret = ' ' . $text;
    // Replace Links with http://
    $ret = preg_replace("#(^|[\n ])([\w]+?://[\w\#$%&~/.\-;:=,?@\[\]+]*)#is", "\\1<a href=\"\\2\" target=\"_blank\" rel=\"nofollow\">\\2</a>", $ret);
    // Replace Links without http://
    $ret = preg_replace("#(^|[\n ])((www|ftp)\.[\w\#$%&~/.\-;:=,?@\[\]+]*)#is", "\\1<a href=\"http://\\2\" target=\"_blank\" rel=\"nofollow\">\\2</a>", $ret);
    return $ret;
}
?>
<html>
<head>
    <title>Advanced Text Processing</title>
    <style>
        body {
            background-color: #666;
            font-family: "Helvetica Neue", "Helvetica", sans-serif;
        }
        h1 {
            text-align: center;
            font-size: 50px;
        }
        form {
            text-align: center;
        }
        .main {
            margin-top:50px;
            background-color: #eee;
            border: 1px #000 solid;
            border-radius:20px;
            padding: 20px;
            width: 70%;
            margin-left: auto;
            margin-right: auto;
            box-shadow: #000 3px 3px 20px;
        }
        button {
            margin-top:15px;
            padding:10px;
            border-radius: 5px;
            background-color: darkseagreen;
        }
        textarea {
            width: 400px;
            height: 250px;
            border: 1px solid #333;
            border-radius: 5px;
            padding: 15px;
        }
        label, button {
            background-color: #0055aa;
            color: #fff;
            border-radius: 10px;
            padding: 10px;
            width: 200px;
            margin: 20px;
            line-height: 50px;
        }

        button {
            background-color: #666;
        }
    </style>
</head>
<body>
<div class="main">
    <h1>Advanced Text Processing</h1>
    <p>Here are your results:</p>
    <?php
    switch ($_POST["operation"]){
        case "extractemails":
            echo("<p>You extracted the following emails:</p>\n");
            $pattern = "/\\S+@\\S+\\.\\S+/";
            // You will need to use preg_match_all with the pattern above
            // to put all of the email addresses into an array, and then
            // print them out as mailto: links.
            break;
        case "countwords":
            $numberwords = 0;
            // Insert text here to count the number of words.
            echo("<p>Your text was made up of $numberwords words</p>\n");
            break;
        case "addlinks":
            echo("<p>Here is your text with links added:</p>\n");
            // Use the replace_links function (at the top of this page)
            // to output the text with links added. Take a look at the
            // function to see how it works.
            break;
        case "extraoption":
            echo("Do something creative here");
            // This is the space where you need to come up with your own text processing.
            // What interesting things can you do with the text?
            break;
        default:
            echo("None of the options was selected.");
    }


    ?>
</div>
</body>
</html>
<?php
