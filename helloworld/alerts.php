<!DOCTYPE html>
<html>
    <head>
        <title>Tags de script</title>
        <script src="alert1.js"></script>
        <script src="alert2.js" defer></script>
        <script src="alert3.js" async></script>
        <script>alert("alert 4");</script>
        <script defer>alert("alert 5");</script>
    </head>
    <body onload="alert('alert 6');">
        <h1>Bom dia</h1>
        <script>alert("alert 7");</script>
        <script defer>alert("alert 8");</script>
        <h1>Boa tarde</h1>
        <script>alert("alert 9");</script>
        <script defer>alert("alert 10");</script>
    </body>
</html>
