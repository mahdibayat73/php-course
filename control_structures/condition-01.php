<html>

<head></head>

<body>
    <?php
    $score = 99;
    ?>

    <?php if ($score > 90) : ?>
        <strong>A<strong>
    <?php elseif ($score >= 80) : ?>
        <strong>B<strong>
    <?php elseif ($score >= 70) : ?>
        <strong>C<strong>
    <?php elseif ($score >= 60) : ?>
        <strong>D<strong>
    <?php else : ?>
        <strong>E<strong>
    <?php endif ?>
</body>

</html>