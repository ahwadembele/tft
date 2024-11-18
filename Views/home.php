<?php
// Utiliser le layout "template" et passer la variable "title"
$this->layout('template', ['title' => 'TP TFT']);
?>

<h1>TFT - Set <?= $this->e($tftSetName) ?></h1>
