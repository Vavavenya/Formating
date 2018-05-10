<?php

class CsvWorkek 
{
	public function getContents(SplFileObject $file) // ?? type : array
	{
		while (!$file->eof()) {
			$Contents[] = $file->fgetcsv();
		}
		return $Contents;
	}

	public function writeContents(array $ArrayContent ,string $pathSave)
	{
		$file = new SplFileObject($pathSave, 'w');

		foreach ($ArrayContent as $fields) {
			$file->fputcsv($fields);
		}

}
