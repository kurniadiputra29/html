<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Index Pelanggan</title>
<style type="text/css">
/* http://meyerweb.com/eric/tools/css/reset/ 
   v2.0 | 20110126
   License: none (public domain)
*/

html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
	display: block;
}
body {
	line-height: 1;
}
ol, ul {
	list-style: none;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}
	body{
	font-family: sans-serif;
	background: #ddd;
	}
	.container{
	background: #ddd;
	width: 100%;
	min-height: 100%;
	}
	.judul{
	background: #003464;
	padding: 20px;
	text-align: center;
	font-size: 30px;
	font-weight: bold;
	color: #F29C13;
	font-family: 'Oswald', sans-serif;
	}
	.ganti{
	background: #F19B15;
	width: 100%;
	}
	.ganti li{
	display: inline-block;
	width: 20%;
	text-align: center;
	padding: 15px 0px 15px 0px;
	margin: 0px 0px 0px 4%;
	}
	.ganti li a{
	color: white;
	font-size: 20px;
	text-decoration: none;

	}
	.ganti li:hover{
	background: #2F2C57;
	cursor: pointer;
	}
	.menu{
	float: left;
	background: #225688;
	width: 20%;
	height: 78%;
	margin: 30px 0px 0px 30px;
	}
	.menu li{
	text-align: left;
	}
	.menu li a{
	display: block;
	padding: 20px 0px 20px 50px;
	color: white;
	font-size: 20px;
	text-decoration: none;
	}
	.menu li:hover{
	background: #2F2C57;
	cursor: pointer;
	}
	.active{background: #003464;}
	.main{
	overflow: scroll;
	background: white;
	float: left;
	margin: 30px 20px 20px 30px;
	width: 70%;
	padding: 20px 20px 0px 20px;
	height: 75%;
	}
	.judul2{
	background: #ddd;
	padding: 20px;
	text-align: center;
	font-size: 30px;
	font-weight: bold;
	color: blue;
	font-family: 'Oswald', sans-serif;
	margin: 0px 0px 20px 0px;
	}
	.main ul{
	float: left;
	}
	.main li{
	float: left;
	background: #5DD0ED;
	text-align: center;

	}
	.main li a{
	float: left;
	color: black;
	font-size: 20px;
	text-decoration: none;
	margin: 10px;
	}
	.main li:hover{
	background: #ddd;
	cursor: pointer;
	}
	.table{
	float: left;
	width: 100%;
	border: 2px solid red;
	margin: 20px 20px 20px 0px;
	font-size: 15px;
	}
	.table tr:hover  {background-color: #F1F1F1;}
	.table tr:nth-child(even) {background-color:  #f7f4f4;}
	.table th{
	border: 5px double #ddd;
	text-align: center;
	font-weight: bold;
	padding: 10px;
	}
	.table td{
	border: 5px double #ddd;
	text-align: center;
	padding: 5px;
	}
	.table td a{
	color: blue;
	text-decoration: none;
	font-weight: bold;
	}
	.table td a:hover{
	color: tomato;
	text-decoration: underline;
	}
</style>
</head>
<body>
<div class="container">
	<h1 class="judul">PT KURNIADI SEJAHTERA</h1>
	<div class="ganti">
		<ul>
			<li><a href="../pelanggan/index.php" >HOME</a></li>
			<li><a href="../produk/index.php">PROFIL</a></li>
			<li><a href="../beli/index.php">SEJARAH BERDIRI</a></li>
			<li><a href="../transaksi/index.php">TEMPAT</a></li>
		</ul>
	</div>
	<div class="menu">
		<ul>
			<li class="active"><a href="../pelanggan/index.php" >Pelanggan</a></li>
			<li><a href="../produk/index.php">Produk</a></li>
			<li><a href="../beli/index.php">Beli</a></li>
			<li><a href="../transaksi/index.php">Transaksi</a></li>
		</ul>
	</div> <!--menu-->
	<div class="main">
		<h1 class="judul2">INDEX PELANGGAN</h1>
		<ul>
			<li><a href="tambah.php">Input Data</a></li>
		</ul>
		<table class="table">
			<tr>
				<th>No</th>
				<th>Nama Pelanggan</th>
				<th>Pekerjaan</th>
				<th>Alamat</th>
				<th>Action</th>
			</tr>
			<?php
			include '../koneksi.php';
			$nomor = 1;
			$sql1 = "select * from pelanggan";
			$result = mysqli_query($connect,$sql1);
			if (mysqli_num_rows($result)>0){
				while ($row = mysqli_fetch_assoc($result)){
				echo "
							<tr>
								<td>".$nomor++."</td>
								<td>".$row['nama_pelanggan']."</td>
								<td>".$row['pekerjaan']."</td>
								<td>".$row['alamat']."</td>
								<td><a href='edit.php?id=".$row['kode_pelanggan']."'>Edit</a> |
										<a href='delete.php?id=".$row['kode_pelanggan']."' onclick='javascript:return confirm(\"Apakah anda yakin ingin menghapus data ini?\")'>Hapus</a>
								</td>
							</tr>";
				}
			}
			?>
		</table>
	</div> <!--main-->
</div> <!--container-->
</body>
</html>

