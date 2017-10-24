<?php
	class data{
	public $nama;
	public $umur;
	public $hobi;
	public $statuspekerjaan;

		public function __construct($nama,$umur,$hobi,$statuspekerjaan)
	{
	$this -> nama = $nama;
	$this -> umur = $umur;
	$this -> hobi = $hobi;
	$this -> statuspekerjaan = $statuspekerjaan;	
	}
	public function get_nama()
	{
		return $this -> nama;
	}
	public function get_umur()
	{
		return $this -> umur;
	}
	public function get_hobi()
	{
		return $this -> hobi;
	}
	public function get_statuspekerjaan()
	{
		return $this -> statuspekerjaan;
	}
	}
?>