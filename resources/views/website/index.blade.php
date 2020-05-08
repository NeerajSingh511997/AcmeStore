@php
    use Faker\Factory as Faker;
@endphp

<!DOCTYPE html>
<html>
    <title>Acmestore | Single Place For All Stuffs </title>
<body>

    <?php
        $faker = Faker::create();
        echo "Hi, " . $faker->name;
    ?>

</body>
</html>