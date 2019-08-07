<html>
<head><title>Input Data Pelanggan</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
	.main ul li{
	display: inline-block;
	border: 2px outset black;
	text-align: center;

	}
	.main ul li a{
	display: inline-block;
	padding: 10px 40px 10px 40px; 
	font-size: 17px;
	text-decoration: none;
	color: black;
	background: aqua; 
	}
	.table{
	float: left;
	width: 100%;
	}
	.table td{
	border-bottom: 5px double #ddd;
	}
	.table td label{
	margin-left: 20px;
	font-size: 17px;
	}
	.table td input{
	margin: 20px;
	font-size: 17px;
	width: 50%;
	padding: 5px;
	}
	.submit button{
	margin: 20px;
	font-size: 17px;
	border: 2px outset black;
	width: 20%;
	padding: 10px;
	font-weight: bold;
	text-transform: uppercase;
	}
	.submit button:hover{
	cursor: pointer;
	background: #ddd;
	}
</style>
<head>
<body>
<div class="conteiner">
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
		<h1 class="judul2">INPUT PELANGGAN</h1>
		<ul>
			<li><a href="../pelanggan/index.php" >BACK</a></li>
		</ul>
		<form action="proses_tambah.php" method="POST">
			<table class="table">
			<tr>
				<td><label for="nama">Nama Pelanggan</td>
				<td>:</td>
				<td><input type="text" name="nama_pelanggan" id="nama" maxlength="30" required></td>
			</tr>
			<tr>
				<td><label for="pekerjaan">Pekerjaan</td>
				<td>:</td>
				<td><input type="text" name="pekerjaan" id="pekerjaan" maxlength="50" required></td>
			</tr>
			<tr>
				<td><label for="alamat">Alamat</td>
				<td>:</td>
				<td><input type="text" name="alamat" id="alamat" maxlength="50" required></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td class="submit"><button type="submit">Submit</button></td>
			</tr>
			</table>
		</form>
	</div> <!--main-->
</div> <!--container-->
</body>
</html>

