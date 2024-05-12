<?php
$planets = json_decode(file_get_contents("https://swapi.dev/api/planets/3/"));
echo "<pre>";
print_r($planets);
echo $planets->name;
echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.0/css/bulma.min.css">
    <title>PHP and JSON</title>
</head>

<body>
    <main>
        <h1 class="title is-1">Planets JSON DATA</h1>
        <table>
            <thead class="table">
                <tr class="bg-info">
                    <th>Planet Name</th>
                    <td><?php echo $planets->name; ?></td>
                </tr>
                <tr>
                    <th>Rotation Period</th>
                    <td><?php echo $planets->rotation_period; ?></td>
                </tr>
                <tr>
                    <th>Orbital Period</th>
                    <td><?php echo $planets->orbital_period; ?></td>
                </tr>
                <tr>
                    <th>Diameter</th>
                    <td><?php echo $planets->diameter; ?></td>
                </tr>
                <tr>
                    <th>Climate</th>
                    <td><?php echo $planets->climate; ?></td>
                </tr>
                <tr>
                    <th>Gravity</th>
                    <td><?php echo $planets->gravity; ?></td>
                </tr>
                <tr>
                    <th>Terrain</th>
                    <td><?php echo $planets->terrain; ?></td>
                </tr>
                <tr>
                    <th>Surface Water</th>
                    <td><?php echo $planets->surface_water; ?></td>
                </tr>
                <tr>
                    <th>Population</th>
                    <td><?php echo $planets->population; ?></td>
                </tr>
                <tr>
                    <th>Residents</th>
                    <td><?php echo $planets->residents; ?></td>
                </tr>
                <tr>
                    <th>Films</th>
                    <td><?php echo $planets->films; ?></td>
                </tr>
                <tr>
                    <th>Created</th>
                    <td><?php echo $planets->created; ?></td>
                </tr>
                <tr>
                    <th>Edited</th>
                    <td><?php echo $planets->edited; ?></td>
                </tr>
                <tr>
                    <th>Url</th>
                    <td><?php echo $planets->url; ?></td>
                </tr>
            </thead>

        </table>
    </main>
</body>

</html>