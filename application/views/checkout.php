<?php
// echo "Data pada session:<br>";
// foreach ($_SESSION as $key => $value) {
//     echo "$key: $value<br>";
// }
?>

<div class="content">
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Form Checkout
        </h2>
    </div>

    <div class="pos intro-y grid grid-cols-12 gap-5 mt-5">
        <!-- MULAI: Konten Postingan -->
        <?php $grand_total = 0;
        if ($keranjang = $this->cart->contents()) {
            foreach ($keranjang as $item) {
                $grand_total = $grand_total + $item['subtotal'];
            }
        } ?>
        <div class="intro-y col-span-12 lg:col-span-8">
            <div class="alert alert-primary show mb-2" role="alert">Total Transaksi yang Harus Dibayar: <b>Rp. <?= number_format($grand_total, 0, ',', '.') ?>,-</b></div>
            <div class="post intro-y overflow-hidden box mt-5">
                <ul class="post__tabs nav nav-tabs flex-col sm:flex-row bg-slate-200 dark:bg-darkmode-800" role="tablist">
                    <li class="nav-item">
                        <button title="Isi konten artikel" data-tw-toggle="tab" data-tw-target="#content" class="nav-link tooltip w-full sm:w-200 py-4 active" id="content-tab" role="tab" aria-controls="content" aria-selected="true"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Detail Pengiriman </button>
                    </li>
                </ul>
                <div class="post__content tab-content">
                    <form id="payment-form" action="<?= site_url('dashboard/checkout_proccess') ?>" method="post">
                        <div id="content" class="tab-pane p-5 active" role="tabpanel" aria-labelledby="content-tab">
                            <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                                <div class="font-medium flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5"> <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Informasi Pelanggan </div>
                                <div class="mt-5">
                                    <div class="mb-5">
                                        <label for="post-form-7" class="form-label">Nama Pelanggan <small class="text-danger">*</small></label>
                                        <input type="hidden" id="order_id" name="order_id" value="INV-<?= mt_rand(000000000, 111111111) ?>" maxlength="8" autocomplete="off" required>
                                        <input type="hidden" id="tracking_id" name="tracking_id" value="<?= mt_rand(0000000000000, 1111111111111) ?>" maxlength="12" autocomplete="off" required>
                                        <input type="hidden" name="payment_method" value="Transfer Bank Langsung">
                                        <input type="hidden" name="id_user" id="id_user" value="<?php echo $this->session->userdata('id_user') ?>">
                                        <input type="hidden" name="status" id="status" value="0">
                                        <input type="text" class="form-control" id="name" name="name" value="<?php echo $this->session->userdata('nama_user') ?>" autocomplete="off" readonly>
                                    </div>

                                    <div class="mb-5">
                                        <label for="post-form-7" class="form-label">Alamat Email <small class="text-danger">*</small></label>
                                        <input type="email" id="email" name="email" class="form-control" value="<?php echo $this->session->userdata('email') ?>" autocomplete="off" readonly>
                                    </div>

                                    <div class="mb-5">
                                        <label for="post-form-7" class="form-label">Nomor HP <small class="text-danger">*</small></label>
                                        <input type="text" id="mobile_phone" name="mobile_phone" class="form-control" placeholder="Nomor HP Anda" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>
                            <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5 mt-5">
                                <div class="font-medium flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5"> <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Informasi Alamat </div>
                                <div class="mt-5">
                                    <div class="mb-5">
                                        <label for="post-form-7" class="form-label">Alamat Anda <small class="text-danger">*</small></label>
                                        <input type="text" id="alamat" name="alamat" class="form-control" placeholder="Alamat Anda" autocomplete="off" required>
                                    </div>

                                    <div class="mb-5">
                                        <label for="post-form-7" class="form-label">Provinsi <small class="text-danger">*</small></label>
                                        <select name="provinsi" id="provinsi" class="form-control"></select>
                                    </div>

                                    <div class="mb-5">
                                        <label for="post-form-7" class="form-label">Kota <small class="text-danger">*</small></label>
                                        <select name="kota" id="kota" class="form-control"></select>
                                    </div>

                                    <div class="mb-5">
                                        <label for="post-form-7" class="form-label">Kode Pos <small class="text-danger">*</small></label>
                                        <input type="text" class="form-control" id="kode_pos" name="kode_pos" placeholder="Kode Pos Anda" autocomplete="off" required>
                                    </div>

                                    <div class="mb-5">
                                        <label for="post-form-7" class="form-label">Layanan Pengiriman <small class="text-danger">*</small></label>
                                        <select name="ekspedisi" id="ekspedisi" class="form-control"></select>
                                    </div>

                                    <div class="mb-5">
                                        <label for="post-form-7" class="form-label">Total <small class="text-danger">*</small></label>
                                        <input type="text" class="form-control" id="total" name="total" value="<?= number_format($this->cart->total(), 0, ',', '.') ?>" readonly>
                                    </div>

                                </div>
                            </div>
                            <div class="flex mt-5">
                                <a href="<?= site_url('dashboard/detail_cart') ?>" class="btn w-32 border-slate-300 dark:border-darkmode-400 text-slate-500">Keranjang<?php echo $this->lang->line('my_cart'); ?></a>
                                <button type="submit" class="btn btn-primary w-32 shadow-md ml-auto">Pembayaran<?php echo $this->lang->line('pay_order'); ?></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- END: Konten Postingan -->
        <!-- MULAI: Info Postingan -->
        <div class="col-span-12 lg:col-span-4">
            <div class="intro-y pr-1">
                <div class="alert alert-primary show mb-2" role="alert"><?php echo $this->lang->line('payment_information'); ?></div>
            </div>
            <div id="ticket" class="tab-pane active" role="tabpanel" aria-labelledby="ticket-tab">
                <div class="box p-2 mt-5">
                    <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#add-item-modal" class="flex items-center p-3 cursor-pointer transition duration-300 ease-in-out bg-white dark:bg-darkmode-600 hover:bg-slate-100 dark:hover:bg-darkmode-400 rounded-md">
                        <div class="max-w-[50%] truncate mr-1">
                            <img class="mt-2" src="<?= site_url('asset') ?>/bca.png" width="60">
                        </div>
                        <div class="text-slate-500"></div>
                        <div class="ml-auto font-medium">6750527090 / NAFYDI SECONDBRAND</div>
                    </a>
                    <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#add-item-modal" class="flex items-center p-3 cursor-pointer transition duration-300 ease-in-out bg-white dark:bg-darkmode-600 hover:bg-slate-100 dark:hover:bg-darkmode-400 rounded-md">
                        <div class="max-w-[50%] truncate mr-1">
                            <img class="mt-2" src="<?= site_url('asset') ?>/mandiri.png" width="80">
                        </div>
                        <div class="text-slate-500"></div>
                        <div class="ml-auto font-medium">1918009817 / NAFYDI SECONDBRAND</div>
                    </a>
                    <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#add-item-modal" class="flex items-center p-3 cursor-pointer transition duration-300 ease-in-out bg-white dark:bg-darkmode-600 hover:bg-slate-100 dark:hover:bg-darkmode-400 rounded-md">
                        <div class="max-w-[50%] truncate mr-1">
                            <img class="mt-2" src="<?= site_url('asset') ?>/bni.png" width="60">
                        </div>
                        <div class="text-slate-500"></div>
                        <div class="ml-auto font-medium">6721598021 / NAFYDI SECONDBRAND</div>
                    </a>
                    <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#add-item-modal" class="flex items-center p-3 cursor-pointer transition duration-300 ease-in-out bg-white dark:bg-darkmode-600 hover:bg-slate-100 dark:hover:bg-darkmode-400 rounded-md">
                        <div class="max-w-[50%] truncate mr-1">
                            <img class="mt-2" src="<?= site_url('asset') ?>/bri.png" width="50">
                        </div>
                        <div class="text-slate-500"></div>
                        <div class="ml-auto font-medium">6750527090 / NAFYDI SECONDBRAND</div>
                    </a>
                    <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#add-item-modal" class="flex items-center p-3 cursor-pointer transition duration-300 ease-in-out bg-white dark:bg-darkmode-600 hover:bg-slate-100 dark:hover:bg-darkmode-400 rounded-md">
                        <div class="max-w-[50%] truncate mr-1">
                            <img class="mt-2" src="<?= site_url('asset') ?>/btpn.png" width="50">
                        </div>
                        <div class="text-slate-500"></div>
                        <div class="ml-auto font-medium">6750527090 / NAFYDI SECONDBRAND</div>
                    </a>
                </div>

                <div class="box p-5 mt-5">
                    <div class="flex">
                        <div class="mr-auto"><?php echo $this->lang->line('subtotal'); ?></div>
                        <div class="font-medium">Rp. <?= number_format($this->cart->total(), 0, ',', '.') ?></div>
                    </div>
                    <div class="flex mt-4">
                        <div class="mr-auto"><?php echo $this->lang->line('discount'); ?></div>
                        <div class="font-medium text-danger">Rp. 0</div>
                    </div>
                    <div class="flex mt-4">
                        <div class="mr-auto"><?php echo $this->lang->line('tax'); ?></div>
                        <div class="font-medium">Rp. 0</div>
                    </div>
                    <div class="flex mt-4 pt-4 border-t border-slate-200/60 dark:border-darkmode-400">
                        <div class="mr-auto font-medium text-base"><?php echo $this->lang->line('total_charge'); ?></div>
                        <div class="font-medium text-base"><strong>Rp. <?= number_format($this->cart->total(), 0, ',', '.') ?>,-</strong></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Info Postingan -->
    </div>
</div>
