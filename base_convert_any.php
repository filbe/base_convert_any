/*
 *   Number system conversions. Returns array; (255, 16) -> [15,15]      (123, 10) -> [3,2,1]       (6, 2) -> [0,1,1]
 */
function base_convert_any($number, $base, $places = 0, $big_endian = 0) 
{
    $arr = [];
    $c   = 0;
    while ($number > 0) {
        $arr[$c++] = $number % $base;
        $number    = floor($number / $base);
    }
    if ($places > $c) {
        for ($c; $c < $places; $c++) {
            $arr[$c] = 0;
        }
    }
    if ($big_endian) {
        return array_reverse($arr);
    }
    return $arr;
}
