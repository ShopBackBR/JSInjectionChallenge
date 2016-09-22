<?php
/**
 * Script de recebimento de dados
 */
header('Content-Type: application/json');
$action = $_POST['action'];

switch ($action) {
	case 'in':
		/**
		 * Processamento dos dados
		 * Criar o mecanismo que vai salvar os dados e retornar o "id" do cliente para registrar em cookie
		 */

		/* Retorno de sucesso */
		echo json_encode(['status' => true]);
		break;
	default:
		/* Retorno de erro */
		echo json_encode(['status' => false]);
		break;
}

