<?php

    require_once '../classes/promotion.class.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Collect data from the AJAX request
        $voucherName =htmlentities($_POST['voucherName']);
        $discountType = $_POST['discountType'];
        $amount = $_POST['amount'];
        $minimumSpend = $_POST['minimumSpend'];
        $slots = $_POST['slots'];
        $duration = $_POST['duration'];

        $promotion = new Promotion();
        $promotion->voucherName = $voucherName;
        $promotion->lastname = $lastname;
        $promotion->discountType = $discountType;
        $promotion->amount = $amount;
        $promotion->minimumSpend = $minimumSpend;
        $promotion->slots = $slots;
        $promotion->duration = $duration;

        if ($promotion->add()) {
            echo "success";
        } else {
            echo "Failed to add promotion.";
        }
    }

?>