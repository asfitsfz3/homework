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
        $sp = 0;
        parse_xml($xml, $sp);
        return 0;
    } else {
        return "Файл не существует";
    }
}

function task2()
{
    $something = array(
        1 => array(
            1 => "something1",
            2 => "something2",
            3 => "something3"
        ),
        2 => array(
            1 => "something4",
            2 => "something5",
            3 => "something6"
        ),
        3 => array(
            1 => "something7",
            2 => "something8",
            3 => "something9"
        )
    );

    file_put_contents("output.json", json_encode($something));
    $something2 = json_decode(file_get_contents("output.json"), true);

    if (rand(1, 2) == 1) {
        for ($i=1; $i<=count($something2); $i++) {
            for ($j=1; $j<=count($something2[$i]); $j++) {
                $something2[$i][$j] = "something" . rand(1, 9);
            }
        }
    }

    file_put_contents("output2.json", json_encode($something2));

    $something = json_decode(file_get_contents("output.json"), true);
    $something2 = json_decode(file_get_contents("output2.json"), true);

    echo "Отличающиеся элементы:" . PHP_EOL;
    for ($i=1; $i<=count($something); $i++) {
        echo "Подмассив " . $i . ":" .PHP_EOL;
        $diversity_count = 0;
        for ($j=1; $j<=count($something[$i]); $j++) {
            if ($something[$i][$j]!=$something2[$i][$j]) {
                echo "Элементы № " . $j . ": " . $something[$i][$j];
                echo " ~ " . $something2[$i][$j] . PHP_EOL;
                $diversity_count++;
            }
        }
        if ($diversity_count == 0) {
            echo "Отличающиеся элементы отсутствуют" . PHP_EOL;
        }
    }
}
