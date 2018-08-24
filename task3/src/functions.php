<?php
function task1($filename)
{
    function parse_xml(SimpleXMLElement $element)
    {
        foreach ($element->children() as $value) {
            echo $value->getName().PHP_EOL;
            parse_xml($value);
        }
    }
    if (file_exists($filename)) {
        $xml = new SimpleXMLElement($filename, false, true);
        parse_xml($xml);
        return 0;
    } else {
        return "Файл не существует";
    }
}
