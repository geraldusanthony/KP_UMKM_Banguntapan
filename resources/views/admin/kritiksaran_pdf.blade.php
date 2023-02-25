<!DOCTYPE html>
<html>
<head>
	<title>Laporan Kritik dan Saran UMKM</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
            <th>Nama</th>
            <th>Email</th> 
            <th>Kritik dan Saran</th> 
            <th>Waktu</th> 
			</tr>
		</thead>
		<tbody>
			@foreach($kritiksaran as $kritiksaran)
            <tr>
              <td>{{$kritiksaran->nama}}</td>   
              <td>{{$kritiksaran->email}}</td> 
              <td>{{$kritiksaran->pesan}}</td> 
              <td>{{$kritiksaran->created_at}}</td> 
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>










