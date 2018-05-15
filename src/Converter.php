<?php

declare(strict_types=1);

namespace FileConverter;

use Workerks;


class Converter
{
	private $CurrentObject;
	private $NeeedObject;
    public function __construct(string $CurrentFormat='kek',string $NeededFormat='kek')
    {
    	if ($CurrentFormat=='csv'){
        $this->CurrentObject = new FormatWorkers\CsvWorker();
    	} else if ($CurrentFormat=='json') {
        $this->CurrentObject = new FormatWorkers\JsonWorker();
    	} else if ($CurrentFormat=='xml'){
        $this->CurrentObject = new FormatWorkers\XmlWorker();
    	}

        if ($NeededFormat=='csv'){
        $this->NeeedObject = new FormatWorkers\CsvWorker();
        } else if ($NeededFormat=='json') {
        $this->NeeedObject = new FormatWorkers\JsonWorker();
        } else if ($NeededFormat=='xml'){
        $this->NeeedObject = new FormatWorkers\XmlWorker();
        }
    }

    public function convert(\SplFileObject $file, string $outputFormat, string $outputFilePath)
    {
        // var_dump($this->CurrentObject);
       $ContentFile = $this->CurrentObject->getContents($file);
       $this->NeeedObject->writeContents($ContentFile,$outputFilePath);

    }
}
