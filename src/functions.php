<?php


$usersNames = ['Давид', 'Якуб', 'Патрик', 'Кшистоф', 'Томек'];
$usersList = [];

for ($i = 0; $i < 50; $i++) {
	$usersList[$i]['id'] = $i;
	$usersList[$i]['name'] = $usersNames[rand(0, 4)];
	$usersList[$i]['age'] = rand(18, 45);
}

echo "<pre>";
$json = json_encode($usersList);
$jsonFile = fopen('users.json', 'w+');
fwrite($jsonFile, $json);
fclose($jsonFile);


$newJSONArray = json_decode(file_get_contents('users.json'));

$usersNum = [];
$middleAge = 0;
$counter = 0;

foreach ($newJSONArray as $user)
{
	if(!array_key_exists($user->name, $usersNum)) {
		$usersNum[$user->name] = 1;
	} else {
		$usersNum[$user->name] += 1;
	}

	$middleAge += $user->age;
	$counter++;
}

$middleAge /= $counter;

echo "Средний возвраст: " . $middleAge . '<br><br>';
echo "Количество имён: <br>";

foreach($usersNum as $name=>$number) {
	echo $name . ": " . $number . '<br>';
}

