<?php session_start(); ?>
<?php function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

class Osoba {
public $login;
public $haslo;
public $imieNazwisko;
}
$osoba1 = new Osoba;
$osoba1->login = "adam";
$osoba1->haslo = "adam2020";
$osoba1->imieNazwisko = "Adam Kowalski";
$osoba2 = new Osoba;
$osoba2->login = "agata";
$osoba2->haslo = "2020agata";
$osoba2->imieNazwisko = "Agata Nowak";

function load_image()
{
    if (isSet($_POST["Zaladuj_zdjecie"])) {
        $currentDir = getcwd();
        $uploadDirectory = '/zdjeciaUzytkownikow//';
        $fileName = $_FILES['plik']['name'];
        $fileSize = $_FILES['plik']['size'];
        $fileType = $_FILES['plik']['type'];
        $fileTmpName = $_FILES['plik']['tmp_name'];
        if ($fileName != "" && ($fileType == 'image/png' || $fileType == 'image/jpg' || $fileType == 'image/PNG' || $fileType == 'image/JPG')) {
            $uploadPath = $currentDir . $uploadDirectory . $fileName;
            if (move_uploaded_file($fileTmpName, $uploadPath))
                return 1;
        }
        return 0;
    }
} ?>

