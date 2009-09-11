<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
  "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="style.css" type="text/css">
<title>&lt;?php form&gt;</title>
</head>
<body>
<?php

require_once("form.class.php");

// Egyszerű form néhány űrlapelemmel
$form = new Form("index.php", "post");
$form->fieldset("Nagy");
$form->legend("Űrlap");
$form->fieldset(2);
$form->legend("Login");
$form->label("felhasznalonev", "Felhasználónév");
$form->input("text", array("felhasznalonev"));
$form->label("jelszo", "Jelszó");
$form->input("password", array("jelszo"));
$form->input("submit", array("submit", "Belépés"));
$form->fieldset(2);
$form->fieldset(3);
$form->legend("Vélemény");
$form->html('<p>Ha szeretné megosztani velünk véleményét, kérjük töltse ki:</p>');
$form->textarea(50, 10, "velemeny", "Ide írhatja a véleményét...");
$form->button("Elküld", "submit");
$form->fieldset(3);
$form->fieldset(4);
$form->legend("Elmúltál már 14?");
$form->input("radio", array("valasz", "igen"));
$form->label("valasz", "Igen");
$form->input("radio", array("valasz", "nem", "checked"));
$form->label("valasz", "Nem");
$form->fieldset(4);
$form->fieldset(5);
$form->legend("Kedvenc ételek");
$form->input("checkbox", array("kedvenc1", "töltött káposzta", "checked"));
$form->label("kedvenc1", "Töltött káposzta");
$form->input("checkbox", array("kedvenc2", "rakott burgonya"));
$form->label("kedvenc2", "Rakott burgonya");
$form->input("checkbox", array("kedvenc3", "gulyásleves"));
$form->label("kedvenc3", "Gulyásleves");
$form->fieldset(5);
$form->fieldset("Nagy");
$form->fieldset(6);
$form->legend("Étterem");
$form->html('<p>Menü</p>');
$options = array("Húsleves", "Gulyásleves", "Gyümölcsleves",
                 "Rántott hús", "Sülthal", "Rakott káposzta",
                 "Somlói", "Gesztenyepüré", "Palacsinta");
$optgroups = array("Előétel" => 3, "Főétel" => 3, "Desszert" => 3);
$form->select("valaszto[]", $options, $optgroups, 5, "multiple");
$form->fieldset(6);
$form->render();

// Egyszerű file feltöltő form
$form2 = new Form("index.php", "post", "multipart/form-data");
$form2->fieldset(11);
$form2->legend("Feltöltés");
$form2->input("file", array("file", "File"));
$form2->input("submit", array("submit", "Feltölt"));
$form2->render();

// Ezzel a __toString metódust hívhatjuk meg
// echo $form;
// echo $form2;

?>
</body>
</html>