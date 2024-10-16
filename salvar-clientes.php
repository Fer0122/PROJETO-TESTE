<?php
	switch ($_REQUEST["acao"]) {
		case 'editar':
			$nome = $_POST["nome"];
			$telefone = $_POST["telefone"];
			$endereço = $_POST["endereço"];

			$sql = "INSERT INTO clientes (nome,telefone,endereço) VALUES ('{$nome}', '{$telefone}', '{$endereço}')";

			$res = $conn->query($sql);

			if($res==true){
				print "<script>alert('Cadastro com sucesso');</script>";
				print "<script>location.href='?page=listar';</script>";
			}else{
				print "<script>alert('Não foi possível cadastrar');</script>";
				print "<script>location.href='?page=listar';</script>";
			}	
			break;

		case 'editar':
			$Nome = $_POST["nome"];
			$Telefone = $_POST["telefone"];
			$Endereço = $_POST["endereço"];

			$sql = "UPDATE cliente SET
			            nome='{$Nome}',
			            telefone='{$Telefone}',
			            endereço='{$Endereço}',
			        WHERE
			            id=".$_REQUEST["id"];

			$res = $conn->query($sql);

			if($res==true){
				print "<script>alert('Editado com sucesso');</script>";
				print "<script>location.href='?page=listar';</script>";
			}else{
				print "<script>alert('Não foi possível editar');</script>";
				print "<script>location.href='?page=listar';</script>";
			}

			break;

		case 'excluir':
		   
		    $sql= "DELETE FROM clientes WHERE id=".$_REQUEST["id"];

		    $res = $conn->query($sql);

			if($res==true){
				print "<script>alert('Excluído com sucesso');</script>";
				print "<script>location.href='?page=listar';</script>";
			}else{
				print "<script>alert('Não foi possível excluir');</script>";
				print "<script>location.href='?page=listar';</script>";
			}

			break;
	}		    
		
		

			