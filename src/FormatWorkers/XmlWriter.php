<?php

namespace FileConverter\FormatWorkers;
use Spatie\ArrayToXml\ArrayToXml;
 
 class XmlWriter{
 	ublic function getContents(\SplFileObject $file) // ?? type : array
	{
		// while (!$file->eof()) {
		// 	$Contents[] = json_decode($file->fread(1024),true);
		// }
		// return $Contents;
		$array = [
    'Good guy' => [
        'name' => 'Luke Skywalker',
        'weapon' => 'Lightsaber'
    ],
    'Bad guy' => [
        'name' => 'Sauron',
        'weapon' => 'Evil Eye'
    ]
];

		var_dump($result = ArrayToXml::convert($array));
	}
 }