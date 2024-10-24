<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_model extends CI_Model {
    public function pemasukan_hari_ini()
    {
        $tanggal = date('Y-m-d');
        $this->db->select('sum(nominal) as total');
        $this->db->from('transaksi');
        $this->db->where('jenis_transaksi','Pemasukan');
        $this->db->where("DATE_FORMAT(tanggal,'%Y-%m-%d')",$tanggal);
        return $this->db->get()->row()->total;
    }
    
    public function pemasukan_bulan_ini()
    {
        $tanggal = date('Y-m');
        $this->db->select('sum(nominal) as total');
        $this->db->from('transaksi');
        $this->db->where('jenis_transaksi','Pemasukan');
        $this->db->where("DATE_FORMAT(tanggal,'%Y-%m')",$tanggal);
        return $this->db->get()->row()->total;
    }

    public function pemasukan()
    {
        $this->db->select('sum(nominal) as total');
        $this->db->from('transaksi');
        $this->db->where('jenis_transaksi','Pemasukan');
        return $this->db->get()->row()->total;
    }

    public function pengeluaran_hari_ini()
    {
        $tanggal = date('Y-m-d');
        $this->db->select('sum(nominal) as total');
        $this->db->from('transaksi');
        $this->db->where('jenis_transaksi','Pengeluaran');
        $this->db->where("DATE_FORMAT(tanggal,'%Y-%m-%d')",$tanggal);
        return $this->db->get()->row()->total;
    }

    public function pengeluaran_bulan_ini()
    {
        $tanggal = date('Y-m');
        $this->db->select('sum(nominal) as total');
        $this->db->from('transaksi');
        $this->db->where('jenis_transaksi','Pengeluaran');
        $this->db->where("DATE_FORMAT(tanggal,'%Y-%m')",$tanggal);
        return $this->db->get()->row()->total;
    }

    public function pengeluaran()
    {
        $this->db->select('sum(nominal) as total');
        $this->db->from('transaksi');
        $this->db->where('jenis_transaksi','Pengeluaran');
        return $this->db->get()->row()->total;
    }
}