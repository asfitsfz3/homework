<?php
function task1($filename)
{
    //попробовал сделать рекурсивную функцию для распарсивания файлов любого уровня вложенности
    function parse_xml(SimpleXMLElement $element, int &$spaces)
    {
        foreach ($element->children() as $value) {
            $spaces++;

            if ($spaces<2) {
                echo PHP_EOL;
            }

            for ($i=0; $i<=$spaces; $i++) {
                echo "  ";
            }
            echo $value->getName();

            if (count($value->attributes())>0) {
                foreach ($value->attributes() as $atr_name => $atr_value) {
                    echo " (";
                    echo $atr_name.": ".$atr_value;
                    echo ")";
                }
            }

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
