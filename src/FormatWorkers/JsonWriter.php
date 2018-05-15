<?php

namespace FileConverter\FormatWorkers;

class JsonWriter
{
	public function writeContents(array $ArrayContent ,string $pathSave)
	{
		$file = new \SplFileObject($pathSave, 'w');
		$file->fwrite(json_encode($ArrayContent));
	}
}