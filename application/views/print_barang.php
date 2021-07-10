
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<tr>
			<th>NO</th>
			<th>Nama Barang</th>
			<th>Satuan</th>
			<th>Persediaan</th>
			<th>Harga Barang</th>
		</tr>

		<?php
		$no= 1;
		foreach ($barang as $barang): ?>

			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $barang->nama_barang ?></td>
				<td><?php echo $barang->satuan ?></td>
				<td><?php echo $barang->stok ?></td>
				<td><?php echo $barang->harga_satuan ?></td>

			</tr>

    <?php endforeach; ?>

	</table>

	<script type="text/javascript">
		window.print();
	</script>

</body>
</html>