<?php
    use Faker\Factory as Faker;
?>

<!DOCTYPE html>
<html>
    <title>Acmestore | Single Place For All Stuffs </title>
<body>

    <?php
        $faker = Faker::create();
        echo "Hi, " . $faker->name;
    ?>

</body>
</html><?php /**PATH /var/www/html/php/AcmeStore/resources/views/website/index.blade.php ENDPATH**/ ?>