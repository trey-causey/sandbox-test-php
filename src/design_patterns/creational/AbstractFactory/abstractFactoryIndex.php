<?php

namespace DesignPatterns\Creational\AbstractFactory;

interface WriterFactory{
    public function createJsonWriter() : JSONWriter;
    public function createCSVWriter() : CSVWriter;
}

interface JsonWriter {
    public function write(array $data, bool $formatted): string;
}
interface CsvWriter {
    public function write();
}

class WinWriterFactory implements WriterFactory {
    public function createJsonWriter(): JSONWriter
    {
        // TODO: Implement createJsonWriter() method.
        return new WinJsonWriter();
    }

    public function createCSVWriter(): CSVWriter
    {
        // TODO: Implement createCSVWriter() method.
        return new WinCsvWriter();
    }
}

class UnixWriterFactory implements WriterFactory {
    public function createJsonWriter(): JSONWriter
    {
        // TODO: Implement createJsonWriter() method.
        return new UnixJsonWriter();
    }

    public function createCSVWriter(): CSVWriter
    {
        // TODO: Implement createCSVWriter() method.
        return new UnixCsvWriter();
    }
}

class WinJsonWriter implements JsonWriter {
    public function write(array $data, bool $formatted): string
    {
        // TODO: Implement write() method.
        return json_encode($data, JSON_PRETTY_PRINT);
    }
}

class UnixJsonWriter implements JsonWriter {
    public function write(array $data, bool $formatted): string
    {
        // TODO: Implement write() method.
    }
}

class UnixCsvWriter implements CsvWriter {
    public function write()
    {
        // TODO: Implement write() method.
    }
}

class WinCsvWriter implements CsvWriter {
    public function write()
    {
        // TODO: Implement write() method.
    }
}

$writerFactory = new WinWriterFactory();
$writerFactory->createJsonWriter();