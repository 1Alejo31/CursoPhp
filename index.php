<?php
#Inicializar una nueva sesion de Curl; ch = cURL handle
const API_URL = 'https://whenisthenextmcufilm.com/api';
$ch = curl_init(API_URL);
//INDICIAR QUE QUEREMOS RECIBIR EL RESULTADO DE LA PETICION NO MASTRAR EN PANTALLA
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
/**Ejecutar la peticion 
 * y guardamos el resultado/ */

$result = curl_exec($ch);
$data = json_decode($result, true);
curl_close($ch);

var_dump($data);
echo '<br>';
$result2 = file_get_contents(API_URL, true);// solo para hacer un get
var_dump($result2); 
echo '<br>';

?>


<?php
$name = "Alejo";
define('logoPhp', 'https://pngimg.com/uploads/php/small/php_PNG10.png');
?>
<img src="<?= logoPhp ?>" alt="PHP Logo">


<h1><?php echo "Mi primera app "; ?></h1>
<?= "Mi primera app con php por " . $name; ?>


<?php
$name = 'Alejo';
$lastName = 'Gonzalez';
$age = 26;
$isDev = true;

const mail = "alejo.g31@hotmail.com";

echo '<br>';
echo '<br>';
var_dump($name);
echo '<br>';
var_dump($lastName);
echo '<br>';
var_dump($age);
echo '<br>';
var_dump($isDev);
echo '<br>';
gettype($isDev);
echo '<br>';
gettype(mail);
echo '<br>';
$output = "Hola mi nombre es $name $lastName, con una edad de $age";
echo $output;

$isOld = $age > 44;
if ($isOld) {
    echo "<h2>Eres Viejo, lo siento</h2>";
} else {
    echo "<h2> Aun eres joven <h2>";
}
$outputAge = $isOld ? 'Eres Viejo' : 'Eres joven, felicidades';
?>
<?= $outputAge ?>

<?php
echo '<br>';
$outputAge = match (true) {
    $age <= 2 => "Eres un bebe, $name",
    $age <= 10 => "Eres un niño, $name",
    $age <= 17 => "Eres un adolecente, $name",
    default => "Eres un adulto, $name"
};

echo $outputAge;

$bestLanguages = ["PHP", "JAVA", "PYTHON"];
$bestLanguages[3] = "JavaScript";
$bestLanguages[] = "TypeScript";

print_r($bestLanguages);

$person = [
    "name" => "Alejo",
    "age" => 26,
    "city" => "Bogota"
];

echo '<br>';
echo $person['name'];
echo '<br>';
print_r($person);

?>

<ul>
    <?php foreach ($bestLanguages as $key => $language) : ?>
        <li><?= $key . ' ' . $language ?></li>
    <?php endforeach; ?>
</ul>


<style>
    :root {
        color-scheme: ligth dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>