<?php
// Ambil data order dari variabel $data_orders yang diberikan oleh controller
$data_orders = $data_orders;
$start_date = isset($start_date) ? $start_date : '';
$end_date = isset($end_date) ? $end_date : '';
?>


<h2>
    <center>Laporan Penjualan</center>
</h2>

<?php if ($start_date && $end_date) : ?>
    <h4 style="text-align: right;">
        Periode <?php echo date('j F Y', strtotime($start_date)) . ' - ' . date('j F Y', strtotime($end_date)); ?> </center>
    </h4>
<?php endif; ?>
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
