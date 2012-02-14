<?php 
function str_cut($str, $sublen, $etc = '')
{
        if(strlen($str)<=$sublen) {
                $rStr = $str;
        } else {
                $I = 0;
                while ($I<$sublen) {
                        $StringTMP = substr($str,$I,1);
 
                        if (ord($StringTMP)>=224) {
                                $StringTMP = substr($str,$I,3);
                                $I = $I + 3;
                        } elseif (ord($StringTMP)>=192) {
                                $StringTMP = substr($str,$I,2);
                                $I = $I + 2;
                        } else {
                                $I = $I + 1;
                        }
                        $StringLast[] = $StringTMP;
                }
 
                $rStr = implode('',$StringLast).$etc;
        }
 
        return $rStr;
}
//utf8 截字  中文算2 其他算1
?>