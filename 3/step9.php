<?php
 $transactions = array(
    array(
        "id" => 1,
        "debit"=>2,
        "credit"=>3
    ),
    array(
        "id" => 2,
        "debit"=>15,
        "credit"=>10
    )
);

foreach ($transactions as $transaction) {
    $id = $transaction["id"];
    $debit = $transaction["debit"];
    $credit = $transaction["credit"];
    $amount = abs($debit - $credit);
    echo "ID: $id => amount: $amount\n";
}




?>