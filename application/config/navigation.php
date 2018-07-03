<?php

/**
 * Main Navigation.
 * Primarily being used in views/layouts/admin.php
 * 
 */
$config['navigation'] = array(
	'samples' => array(
		'title' => 'Data Toko Keramik',
		'icon' => 'fa fa-dashboard',
		'children' => array(
			'data_stok_barang' => array(
				'uri' => 'samples/data_stok_barang.php',
				'title' => 'Data Stok Barang'
			),
			'tables2' => array(
				'uri' => 'samples/data_barang_masuk.php',
				'title' => 'Data Barang Masuk'
			),
			'tables3' => array(
				'uri' => 'samples/data_barang_keluar.php',
				'title' => 'Data Barang Keluar'
			)
		)
	)
);