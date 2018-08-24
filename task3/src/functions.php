<?php
function task1($filename)
{

    function parse_xml(SimpleXMLElement $element, int &$spaces)
    {
        foreach ($element->children() as $value) {
            $spaces++;
            for ($i=0; $i<=$spaces; $i++) {
                echo "  ";
            }
            //echo " ".$spaces." ";
            echo $value->getName();

            if ($value->count()==0) {
                echo ": ".$value->__toString() . PHP_EOL;
            } else {
                echo ": ".PHP_EOL;
                parse_xml($value, $spaces);
            }
            $spaces--;
        }
    }
    if (file_exists($filename)) {
        $xml = new SimpleXMLElement($filename, false, true);
        $sp=0;
        parse_xml($xml, $sp);
        return 0;
    } else {
        return "Файл не существует";
    }
}
