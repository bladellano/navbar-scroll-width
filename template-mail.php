<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Template Email</title>
	<link rel="stylesheet" href="">
</head>
<body bgcolor="#E0E0E0">
	<center>
		<table border=0 width="650px" bgcolor="#FFF" 
		style="font-family: sans serif;box-shadow: 2px 2px 10px #CCC;border:1px solid #999">
		<tr>
			<th align="center" bgcolor="#069" style="color:#FFF"><h3>Formulário de Contato Portal</h3></th>
		</tr>
		<tr>
			<td>
				<table width="100%" style="padding:20px">
					<tr>
						<td  align="right" width="30%"><b>Nome:</b></td>
						<td width="70%">Lorem</td>
					</tr>
					<tr>
						<td  align="right" width="30%"><b>E-mail:</b></td>
						<td width="70%">Lorem</td>
					</tr>
					<tr>
						<td  align="right" width="30%"><b>Telefone:</b></td>
						<td width="70%">Lorem</td>
					</tr>
					<tr>
						<td  align="right" valign="top" width="30%"><b>Mensagem:</b></td>
						<td width="70%">LoremIpsum360 ° é um gerador on-line falso texto livre. Ele oferece um simulador de texto completo para gerar texto de substituição ou texto alternativo para seus modelos. Possui textos aleatórios diferentes em latim e cirílico para gerar exemplos de textos em diferentes línguas.

						LoremIpsum360 ° também lhe dá a capacidade de adicionar marcas de pontuação, acentos e caracteres especiais, para estar mais perto dos idiomas francês ou outras. Além disso, se você quiser ver os resultados em diferentes tipos de letra, você vai encontrar muitos recursos para definir como font-family, font-size, text-align ou line-heigh.</td>
					</tr>

				</table>

			</td>
		</tr>
		<tr>
			<td align="center"><p style="color:#999">
				© 2020 Paideia Educacional. Todos os direitos reservados.<br/>
				Enviado a partir: <?php echo $_SERVER['REQUEST_URI']; ?> <br/>
				Ip de envio: <?php echo $_SERVER['SERVER_ADDR']; ?>
			</p></td>
		</tr>
	</table>
</center>
</body>
</html>