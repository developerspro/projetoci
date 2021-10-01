<?php $this->extend('layout\main.php');?>
<?php $this->section('menu');?>
<?php echo $this->include('principal\menu');?>
<?php $this->endSection();?>
<?php $this->section('conteudo');?>
<?php echo view('principal\conteudo');?>
<?php $this->endSection() ?>