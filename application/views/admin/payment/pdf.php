<?php

$data_orders = $this->model_invoice->get_all();


?>

<h2>
    <center>Laporan Data Order</center>
</h2>
<hr />
<table border="1" width="100%" style="text-align:center;">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Total</th>
        <th>Alamat</th>
        <th>Mobile Phone</th>
        <th>Tanggal</th>
        <th>Owner</th>
    </tr>

    <?php
    if ($data_orders) {
        $no = 1;
        foreach ($data_orders as $order) {
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $order->name; ?></td>
                <td><?php echo $order->total; ?></td>
                <td><?php echo $order->alamat; ?></td>
                <td><?php echo $order->mobile_phone; ?></td>
                <td><?php echo date('j F Y', strtotime($order->transaction_time)); ?></td>
                <td>Zuryana Qincay</td>
            </tr>
        <?php
        }
    } else {
        ?>
        <tr>
            <td colspan="5">Tidak ada data order</td>
        </tr>
    <?php
    }
    ?>
</table>
