<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.0/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>PHP File Upload</title>
</head>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        width: 100%;
        height: 100vh;
        background: rgb(115, 103, 240);
        background: linear-gradient(270deg, rgba(115, 103, 240, 1) 0%, rgba(206, 159, 252, 1) 100%);
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #form {
        max-width: 350px;
        padding: 16px;
        border-radius: 9px;
        background: #FFFFFF;
        box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
    }

    #form strong {
        display: block;
        margin-bottom: 12px;
        color: #000000;
    }

    span.dif-color {
        color: #000000;
    }
</style>

<body>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
    </form>


</body>

</html>