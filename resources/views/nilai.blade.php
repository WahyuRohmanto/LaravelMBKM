<h1 align="center">Tabel Mahasiswa</h1>
<table border="1" align="center" cellpadding="10" cellspacing="0">
    <thead>
        @foreach ($judul as $j)
        <th bgcolor="#E97777">{{$j}}</th>
        @endforeach
    </thead>
    <tbody>
        @php
        $no = 1 ;
        @endphp

        @foreach ($siswa as $s)
        @php
        $ket =$s["nilai"] >= 60 ? "lulus" : "tidak lulus" ;
        $warna = $no%2 == 1?"#BCEAD5":"#DEF5E5";
        @endphp
        <tr bgcolor={{$warna}}>
            <td>{{$no++}}</td>
            <td>{{$s["nama"]}}</td>
            <td>{{$s["nilai"]}}</td>
            <td>{{$ket}}</td>
        </tr>
        @endforeach
    </tbody>
</table>