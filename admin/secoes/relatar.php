<?php

include_once("../relatorio/fpdf186/fpdf.php");
include_once("../../dao/manipuladados.php");

function gerarRelatorioPDF() {

    $dados = new ManipulaDados();
    $dados->setTable("tb_usuario");

    $lista = $dados->getAllDataTable();

    $pdf = new FPDF("P", "pt", "A4");
    $pdf->AddPage();

    //configurações do relatório
    $pdf->SetFont('Times', 'B', 18);
    $pdf->Cell(0, 20, "Emails cadastrados", 0, 1, 'C');
    $pdf->Ln(10);

    //cabeçalho da tabela
    $pdf->SetFont('Times', 'B', 14);
    $pdf->Cell(80, 20, 'ID', 1, 0, 'C');
    $pdf->Cell(250, 20, 'Email', 1, 1, 'C');

    //fonte do corpo
    $pdf->SetFont('Times', '', 12);

    //colocando os dados do usuário
    foreach ($lista as $usuario) {
        $pdf->Cell(80, 20, $usuario["id"], 1, 0, 'C');
        $pdf->Cell(250, 20, $usuario["email"], 1, 1, 'L');
    }

    //exibição no navegador
    $pdf->Output('I', 'arquivo.pdf');
}

gerarRelatorioPDF();


?>
