<?php
require_once '../classes/promotion.class.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $promotion = new Promotion();

    // Fetch promotion data (you should modify this to retrieve data from your database)
    $promotionArray = $promotion->show();
    $counter = 1;
?>
<?php
    if ($promotionArray) {
        foreach ($promotionArray as $item) {
?>
            <tr>
                <td><?= $counter ?></td>
                <td><?= $item['voucherName']?></td>
                <td><?= $item['discountType'] ?></td>
                <td><?= $item['amount'] ?></td>
                <td><?= $item['minimumSpend'] ?></td>
                <td><?= $item['slot'] ?></td>
                <td><?= $item['duration'] ?></td>
                <td><?= $item['createdAt'] ?></td>
                <td><?= $item['updatedAt'] ?></td>
                <td class="text-center"><a href=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
            </tr>
<?php
            $counter++;
        }
    }
}
?>

