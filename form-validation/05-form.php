<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.0/css/bulma.min.css">
    <title>PHP - Form</title>
    <style>
        #main {
            width: 100%;
            height: 100vh;
            background: #8e9eab;
            background: -webkit-linear-gradient(to right, #eef2f3, #8e9eab);
            background: linear-gradient(to right, #eef2f3, #8e9eab);
        }

        #form {
            max-width: 300px;
            margin: auto;
            padding-top: 100px;
        }
    </style>
</head>

<body>

    <main id="main">
        <form id="form" action="includes/formhandler.php" method="post">
            <div class="field">
                <label class="label" for="firstname">Firstname?</label>
                <div class="control">
                    <input class="input" type="text" name="firstname" id="firstname" placeholder="Firstname...">
                </div>
            </div>

            <div class="field">
                <label class="label" for="lastname">Lastname?</label>
                <input class="input" type="text" name="lastname" id="lastname" placeholder="Lastname...">
            </div>

            <div class="field">
                <label class="label" for="favouritepet">Favourite Pet?</label>
                <div class="select">
                    <select name="favouritepet" id="favouritepet">
                        <option value="none">Select a pet</option>
                        <option value="dog">Dog</option>
                        <option value="cat">Cat</option>
                        <option value="fish">Fish</option>
                        <option value="bird">Bird</option>
                    </select>
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link">Submit</button>
                </div>
            </div>
        </form>
    </main>

</body>

</html>