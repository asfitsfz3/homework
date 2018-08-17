<pre>
<?php
const TOTAL_PICTURE_COUNT   = 80;
const FELTPEN_PICTURE_COUNT = 23;
const PENCIL_PICTURE_COUNT  = 40;

echo "На школьной выставке ".TOTAL_PICTURE_COUNT." рисунков. ";
echo FELTPEN_PICTURE_COUNT." из них выполнены фломастерами, ";
echo PENCIL_PICTURE_COUNT." карандашами, а остальные - красками. ";
echo "Сколько рисунков, выполненные красками, на школьной выставке?";
echo PHP_EOL;
echo "Решение:";
echo PHP_EOL;
echo TOTAL_PICTURE_COUNT."-".FELTPEN_PICTURE_COUNT."-".PENCIL_PICTURE_COUNT;
echo "=".(TOTAL_PICTURE_COUNT-FELTPEN_PICTURE_COUNT-PENCIL_PICTURE_COUNT);
echo PHP_EOL;
echo "Ответ:";
echo PHP_EOL;
echo "На школьной выставке ";
echo TOTAL_PICTURE_COUNT-FELTPEN_PICTURE_COUNT-PENCIL_PICTURE_COUNT;
echo " рисунков выполнены красками.";
