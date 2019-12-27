<?php

	function terlambat($tgl_DL,$tgl_sekarang){

		$tgl_DL_pecah = explode("-", $tgl_DL);
		$tgl_DL_pecah = $tgl_DL_pecah[2]."-".$tgl_DL_pecah[1]."-".$tgl_DL_pecah[0];

		$tgl_sekarang_pecah = explode("-", $tgl_sekarang);
		$tgl_sekarang_pecah = $tgl_sekarang_pecah[2]."-".$tgl_sekarang_pecah[1]."-".$tgl_sekarang_pecah[0];

		$selisih = strtotime($tgl_sekarang_pecah) - strtotime($tgl_DL_pecah);

		$selisih = $selisih/86400;
		
		if ($selisih>=1) {
			$hasi_tgl = floor($selisih);
		}else{
			$hasi_tgl = 0;
		}

		return $hasi_tgl;
	}

?>