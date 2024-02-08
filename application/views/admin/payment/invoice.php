<div class="content">
    <div class="content">
        <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
                Transaction Details
            </h2>
            <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                <a href="<?= site_url('admin/invoice/pdf/') ?>" class="btn btn-primary shadow-md mr-2">Cetak Semua Data</a>
            </div>
        </div>
        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="intro-y col-span-12 flex flex-wrap xl:flex-nowrap items-center mt-2">
                <form action="<?= site_url('admin/invoice/print_by_date') ?>" method="post">
                    <div class="search-container">
                        <label for="start-date">Tanggal Awal:</label>
                        <input type="date" id="start-date" name="start_date" class="mr-2">
                        <label for="end-date">Tanggal Akhir:</label>
                        <input type="date" id="end-date" name="end_date" class="mr-2">
                        <button type="submit" class="btn btn-primary shadow-md">Cetak Data</button>
                    </div>
                </form>
                <!-- <form action="<?= site_url('admin/invoice/filter_by_date') ?>" method="post">
                    <div class="search-container">
                        <label for="start-date">Tanggal Awal:</label>
                        <input type="date" id="start-date" name="start_date" class="mr-2">
                        <label for="end-date">Tanggal Akhir:</label>
                        <input type="date" id="end-date" name="end_date" class="mr-2">
                        <button type="submit" class="btn btn-primary shadow-md">Cetak Data</button>
                    </div>
                </form> -->
            </div>
            <div class="intro-y col-span-12 overflow-auto 2xl:overflow-visible">
                <table class="table table-report -mt-2">
                    <thead>
                        <tr>
                            <th class="whitespace-nowrap">
                                <input class="form-check-input" type="checkbox">
                            </th>
                            <th class="whitespace-nowrap">ID PESANAN</th>
                            <th class="whitespace-nowrap">NAMA PELANGGAN</th>
                            <th class="whitespace-nowrap">WAKTU TRANSAKSI</th>
                            <th class="whitespace-nowrap">BUKTI PEMBAYARAN</th>
                            <th class="whitespace-nowrap">STATUS</th>
                            <th class="text-center whitespace-nowrap">AKSI</th>
                        </tr>
                    </thead>
                    <tbody id="invoice-table-body">
                        <?php if (!empty($invoice)) : ?> <!-- Memeriksa apakah $invoice tidak kosong -->
                            <?php foreach ($invoice as $row) : ?>
                                <tr class="intro-x">
                                    <td class="w-10">
                                        <input class="form-check-input" type="checkbox">
                                    </td>
                                    <td class="w-40 !py-4"> <a href="<?= site_url('admin/invoice/detail/' . $row->order_id) ?>" class="underline decoration-dotted whitespace-nowrap">#<?= $row->order_id ?></a> </td>
                                    <td class="w-40">
                                        <a href="" class="font-medium whitespace-nowrap"><?= $row->name ?></a>
                                    </td>
                                    <td>
                                        <div class="text-slate-500 whitespace-nowrap mt-0.5"><?= $row->transaction_time ?></div>
                                    </td>
                                    <td><?php if (empty($row->gambar)) { ?>
                                            <div class="flex items-center whitespace-nowrap text-danger"> <i data-lucide="alert-circle" class="w-4 h-4 mr-2"></i>Belum upload bukti </div>
                                        <?php } else { ?>
                                            <a href="">
                                                <div class="flex items-center whitespace-nowrap text-primary"> <i data-lucide="link" class="w-4 h-4 mr-2"></i><a href="<?= base_url() . '/uploads/' . $row->gambar ?>">Lihat Bukti </a></div>
                                            </a>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <?php if ($row->status == "0") { ?>
                                            <div class="flex items-center whitespace-nowrap text-pending"><b>PENDING</b> </div>
                                        <?php } else if ($row->status == "1") { ?>
                                            <div class="flex items-center whitespace-nowrap text-success"> <b>PAID</b> </div>
                                        <?php } ?>
                                    </td>
                                    <td class="table-report__action">
                                        <center>
                                            <?php if ($row->status == "0") { ?>
                                                <div class="flex justify-center items-center">
                                                    <a class="flex items-center text-primary whitespace-nowrap" href="<?= site_url('admin/invoice/confirm/' . $row->order_id) ?>"> <i data-lucide="arrow-left-right" class="w-4 h-4 mr-1"></i> Change Status </a>
                                                </div>
                                            <?php } else if ($row->status == "1") { ?>
                                                <button class="btn btn-sm btn-success text-white">Payment Successfully</button>
                                            <?php } ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <tr>
                                <td colspan="7">Tidak ada data yang ditemukan.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
