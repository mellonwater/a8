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
            font-size: 24px;
        }
    </style>
</head>
<body>
<div class="main">
    <h1>Advanced Text Processing</h1>
    <div class="rect"></div>
    <form action="a8_script.php" method="post">
        <label for="maintext">Main Text</label><br>
        <textarea name="maintext">We all like to write and think in text.  Sometimes, there are emails like bmoseley@bakersfieldcollege.edu or stevejobs@apple.com in text, which we want to extract. Some are more generic like president@bakersfieldcollege.edu - We might also find hyperlinks in text, like http://www.bakersfieldcollege.edu or http://www.bmoseley.com - In these cases, it is useful to present these as live hyperlinks so that users can interact with them easily.</textarea>
        <div class="radiogroup">
            <p>Choose an operation to perform on the text.</p>
            <input type="radio" name="operation" id="extractemails" value="extractemails">
            <label for="extractemails">Extract Emails</label><br>
            <input type="radio" name="operation" id="countwords" value="countwords">
            <label for="countwords">Count Words</label><br>
            <input type="radio" name="operation" id="addlinks" value="addlinks">
            <label for="addlinks">Add Links</label><br>
            <input type="radio" name="operation" id="extraoption" value="extraoption">
            <label for="extraoption">Fourth Option</label><br>
        </div>
        <br>
        <button type="submit">Process Text</button>
    </form>
</div>
</body>
</html>
<?php
