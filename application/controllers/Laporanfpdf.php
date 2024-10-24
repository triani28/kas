<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporanfpdf extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->library('Pdf');
        $this->load->model('Transaksi_model');
    }

    public function cetak_total(){
        $tanggal1 = $this->input->post('tanggal1');
        $tanggal2 = $this->input->post('tanggal2');

        $this->db->where('tanggal >=', $tanggal1);
        $this->db->where('tanggal <=', $tanggal2);

        $this->total($tanggal1, $tanggal2);
    }

    function total($tanggal1, $tanggal2)
    {
        error_reporting(0);
        $pdf = new FPDF('L', 'mm','Letter');
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(0,7,'Pemasukan dan Pengeluaran IndoROCKET',0,1,'C');
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(10,6,'No',1,0,'C');
        $pdf->Cell(50,6,'Tanggal',1,0,'C');
        $pdf->Cell(110,6,'Keterangan',1,0,'C');
        $pdf->Cell(50,6,'Jenis_transaksi',1,0,'C');
        $pdf->Cell(40,6,'Nominal',1,1,'C');
        
        $pdf->SetFont('Arial','',10);
        $transaksi = $this->db->get('transaksi')->result();
        $no = 0;
        $totalpemasukan = 0;
        $totalpengeluaran = 0;

        foreach ($transaksi as $data){
            $no++;
            $pdf->Cell(10,6,$no,1,0, 'C');
            $pdf->Cell(50,6,$data->tanggal,1,0);
            $pdf->Cell(110,6,$data->keterangan,1,0);
            $pdf->Cell(50,6,$data->jenis_transaksi,1,0);
            $formatted_nominal = 'Rp ' . number_format($data->nominal, 2, ',', '.');
            $pdf->Cell(40, 6, $formatted_nominal, 1, 1);
            

            if($data->jenis_transaksi == 'Pemasukan'){
                $totalpemasukan += $data->nominal;
            }elseif($data->jenis_transaksi == 'Pengeluaran'){
                $totalpengeluaran += $data->nominal;
            }
        }

        // Display totals and saldoakhir outside the loop
        $pdf->SetFont('Arial','',10);
        $pdf->Cell(260,6,"",1,1);
        $pdf->Cell(220,6, 'Total Pemasukan',1,0,'L');
        $pdf->Cell(40,6,'Rp ' . number_format($totalpemasukan,2),1,1,'L');
        
        $pdf->Cell(220,6, 'Total Pengeluaran',1,0,'L');
        $pdf->Cell(40,6,'Rp ' . number_format($totalpengeluaran,2),1,1,'L');

        $saldoakhir = $totalpemasukan - $totalpengeluaran;
        $pdf->Cell(220,6,'Saldo Akhir',1,0,'L');
        $pdf->Cell(40,6,'Rp ' . number_format($saldoakhir,2),1,1,'L');

        $pdf->Output();
    }
}
?>
