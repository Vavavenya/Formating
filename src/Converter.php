<?php

declare(strict_types=1);

namespace FileConverter;

class Converter
{
	private $CurrentObject;
	private $NeeedObject;
    public function __construct(string $CurrentFormat,string $NeededFormat)
    {
    	if ($CurrentFormat=='csv'){
        $CurrentObject = new CsvWorker();
    	} else if ($CurrentFormat=='json') {
        $CurrentObject = new JsonWorker();
    	} else if ($CurrentFormat=='xml'){
        $CurrentObject = new XmlWorker();
    	}

        if ($NeededFormat=='csv'){
        $NeeedObject = new CsvWorker();
        } else if ($NeededFormat=='json') {
        $NeeedObject = new JsonWorker();
        } else if ($NeededFormat=='xml'){
        $NeeedObject = new XmlWorker();
        }
    }

    public function convert(\SplFileObject $file, string $outputFormat, string $outputFilePath)
    {
        
    }
}
