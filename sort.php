<?php
/**
 * Created by PhpStorm.
 * User: Carlos
 * Date: 2018/11/27
 * Time: 14:25
 */

$arr = [19,5,36,72,45,90,26,50,20,13,18];
//冒泡排序
function bubbleSort($arr){
    $len = count($arr);
    for($i=1;$i<$len;$i++){//控制轮数
        //echo $arr[$i]."<br>";
        for($j=0;$j<$len-$i;$j++){
            if($arr[$j]>$arr[$j+1]){
                $tmp = $arr[$j+1];
                $arr[$j+1] = $arr[$j];
                $arr[$j] = $tmp;
            }
        }
    }
    return $arr;
}
echo "冒泡排序：".implode(" ",bubbleSort($arr));//implode:数组元素组合为字符串

echo "<hr>";

//快速排序
function quickSort($arr){
    $len = count($arr);
    if ($len<=1){
        return $arr;
    }
    $base_num = $arr[0];
    $left_arr = array();
    $right_arr = array();
    for ($i=1;$i<$len;$i++){
        if ($base_num > $arr[$i]){
            $left_arr[] = $arr[$i];
        }else{
            $right_arr[] = $arr[$i];
        }
    }
    //递归调用本身
    $left_arr = quickSort($left_arr);
    $right_arr = quickSort($right_arr);
    return array_merge($left_arr,array($base_num),$right_arr);//合并数组
}
echo "快速排序：".implode(" ",quickSort($arr));

echo "<hr>";

//选择排序
function selectSort($arr){
    $len=count($arr);
    for ($i=0;$i<$len-1;$i++){
        $p = $i;
        for ($j=$i+1;$j<$len;$j++){
            if ($arr[$p]>$arr[$j]){
                $p = $j;
            }
        }
        if ($p != $i){
            $tmp = $arr[$p];
            $arr[$p] =$arr[$i];
            $arr[$i] = $tmp;
        }
    }
    return $arr;
}
echo "选择排序：".implode(" ",selectSort($arr));

echo "<hr>";

//插入排序
function insertSort($arr){
    $len = count($arr);
    for ($i=1;$i<$len;$i++){
        $tmp = $arr[$i];//从未排序数组中取出来的进行插入的元素
        for ($j=$i-1;$j>=0;$j--){//已排序数组，从后往前比较
            if ($tmp<$arr[$j]){
                $arr[$j+1] = $arr[$j];
                $arr[$j] = $tmp;
            }else{
                break;
            }
        }
    }
    return $arr;
}
echo "插入排序：".implode(" ",insertSort($arr));