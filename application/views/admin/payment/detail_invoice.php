<div class="content">
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Detail Transaksi
        </h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <!-- <a href="<?= site_url('admin/invoice/pdf/' . $invoice->order_id) ?>" class="btn btn-primary shadow-md mr-2">Cetak</a> -->
            <a href="<?= site_url('admin/invoice') ?>" class="btn btn-danger shadow-md mr-2">Daftar Tagihan</a>
        </div>
    </div>
    <!-- BEGIN: Detail Transaksi -->
    <div class="intro-y grid grid-cols-11 gap-5 mt-5">
        <div class="col-span-12 lg:col-span-4 2xl:col-span-3">
            <div class="box p-5 rounded-md">
                <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5 mb-5">
                    <div class="font-medium text-base truncate">Detail Transaksi</div>
                </div>
                <div class="flex items-center"> <i data-lucide="clipboard" class="w-4 h-4 text-slate-500 mr-2"></i> <b>ID PESANAN:</b> <a href="" class="underline decoration-dotted ml-1">#<?= $invoice->order_id ?></a> </div>
                <div class="flex items-center mt-3"> <i data-lucide="clipboard" class="w-4 h-4 text-slate-500 mr-2"></i> <b>Metode Pembayaran:&nbsp;</b> Transfer Bank Langsung </div>
                <div class="flex items-center mt-3"> <i data-lucide="calendar" class="w-4 h-4 text-slate-500 mr-2"></i> <b>Tanggal Pembelian:&nbsp;</b> <?= $invoice->transaction_time ?> </div>
                <div class="flex items-center mt-3"> <i data-lucide="clock" class="w-4 h-4 text-slate-500 mr-2"></i> <b>Status Transaksi:&nbsp;</b>
                    <?php if ($invoice->status == "0") { ?>
                        <span class="bg-warning/20 text-warning rounded px-2 ml-1">Menunggu Pembayaran</span>
                    <?php } else if ($invoice->status == "1") { ?>
                        <span class="bg-success/20 text-success rounded px-2 ml-1">Sudah Dibayar</span>
                    <?php } ?>
                </div>
            </div>
            <div class="box p-5 rounded-md mt-5">
                <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5 mb-5">
                    <div class="font-medium text-base truncate">Detail Pembeli</div>
                </div>
                <div class="flex items-center"> <i data-lucide="clipboard" class="w-4 h-4 text-slate-500 mr-2"></i> <b>Nama Pelanggan:</b> <a href="" class="underline decoration-dotted ml-1"><?= $invoice->name ?></a> </div>
                <div class="flex items-center mt-3"> <i data-lucide="calendar" class="w-4 h-4 text-slate-500 mr-2"></i> <b>Nomor Telepon:</b>&nbsp; <?= $invoice->mobile_phone ?> </div>
            </div>
            <div class="box p-5 rounded-md mt-5">
                <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5 mb-5">
                    <div class="font-medium text-base truncate">Informasi Pengiriman</div>
                    <a href="" class="flex items-center ml-auto text-primary"> <i data-lucide="map-pin" class="w-4 h-4 mr-2"></i> Info Pengiriman </a>
                </div>
                <div class="flex items-center"> <i data-lucide="clipboard" class="w-4 h-4 text-slate-500 mr-2"></i> <b>Kurir:</b>&nbsp; <?= $invoice->ekspedisi ?> </div>
                <div class="flex items-center mt-3"> <i data-lucide="calendar" class="w-4 h-4 text-slate-500 mr-2"></i> <b>Nomor Lacak:</b>&nbsp; <?= $invoice->tracking_id ?> <i data-lucide="copy" class="w-4 h-4 text-slate-500 ml-2"></i> </div>
                <div class="flex items-center mt-3"> <i data-lucide="map-pin" class="w-4 h-4 text-slate-500 mr-2"></i> <b>Alamat:</b>&nbsp; <?= $invoice->alamat ?>, <?= $invoice->city ?>. </div>
            </div>
        </div>
        <div class="col-span-12 lg:col-span-7 2xl:col-span-8">
            <div class="box p-5 rounded-md">
                <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5 mb-5">
                    <div class="font-medium text-base truncate">Detail Pesanan</div>
                </div>
                <div class="overflow-auto lg:overflow-visible -mt-3">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="whitespace-nowrap !py-5">Produk</th>
                                <th class="whitespace-nowrap text-right">Harga Satuan</th>
                                <th class="whitespace-nowrap text-right">Jumlah</th>
                                <th class="whitespace-nowrap text-right">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $total = 0;
                            foreach ($pesanan as $row) :
                                $subtotal = $row->jumlah * $row->harga;
                                $total += $subtotal;
                            ?>
                                <tr>
                                    <td class="!py-4">
                                        <div class="flex items-center">
                                            <a href="" class="font-medium whitespace-nowrap ml-4"><?= $row->nama_brg ?></a>
                                        </div>
                                    </td>
                                    <td class="text-right">Rp. <?= number_format($row->harga, 0, ',', '.') ?></td>
                                    <td class="text-right"><?= number_format($row->jumlah, 0, ',', '.') ?></td>
                                    <td class="text-right">Rp. <?= number_format($subtotal, 0, ',', '.') ?></td>
                                </tr>
                            <?php endforeach; ?>

                            <tr>
                                <td colspan="3" align="right"></td>
                                <td align="right"><b>Rp. <?= number_format($total, 0, ',', '.') ?></b></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Detail Transaksi -->
</div>
<!-- END: Detail Transaksi -->
