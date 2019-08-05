<?php
$data[] = array('volume' => 67, 'edition' => 2);
$data[] = array('volume' => 86, 'edition' => 1);
$data[] = array('volume' => 85, 'edition' => 6);
$data[] = array('volume' => 98, 'edition' => 2);
$data[] = array('volume' => 86, 'edition' => 6);
$data[] = array('volume' => 67, 'edition' => 7);

// 列方向の配列を得る
foreach ($data as $key => $row) {
    $volume[$key]  = $row['volume'];
    $edition[$key] = $row['edition'];
}

// データを volume の降順、edition の昇順にソートする。
// $data を最後のパラメータとして渡し、同じキーでソートする。
array_multisort($volume, SORT_DESC, $edition, SORT_ASC, $data);

