<?php

namespace FileConverter\FormatWorkers;
use Spatie\ArrayToXml\ArrayToXml;

class XmlReader  
{
	public function writeContents(array $ArrayContent ,string $pathSave)
	{
		$file = new \SplFileObject($pathSave, 'w');
		$file->fwrite($result = ArrayToXml::convert($ArrayContent));


	}
}