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
    <form id="form" action="upload.php" method="post" enctype="multipart/form-data">
        <strong>Select image to upload:</strong>
        <div id="file-js-example" class="file has-name">
            <label class="file-label">
                <input class="file-input" type="file" name="fileToUpload" id="fileToUpload" />
                <span class="file-cta">
                    <span class="file-icon">
                        <i class="fas fa-upload"></i>
                    </span>
                    <span class="file-label"> Choose a file… </span>
                </span>
                <span class="file-name dif-color"> No file uploaded </span>
            </label>
        </div>
        <div class="control">
            <input class="button is-primary" type="submit" value="Upload Image" name="submit" id="submit">
        </div>
    </form>


    <script>
        const fileInput = document.querySelector("#file-js-example input[type=file]");
        fileInput.onchange = () => {
            if (fileInput.files.length > 0) {
                const fileName = document.querySelector("#file-js-example .file-name");
                fileName.textContent = fileInput.files[0].name;
            }
        };
    </script>
</body>

</html>