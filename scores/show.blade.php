@extends('layout/main');

@section('title','IPK')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-8">
    <h3 class="my-4" align="center">KARTU HASIL STUDI (KHS)</h3>
    <table class = "col-12 table-primary my-3">
    <tr>
    <td>NIM</td> <td>: {{$nilai->NIM}}</td>
    </tr>
    <tr>
    <td>Nama</td> <td>: {{$nilai->nama}}</td>
    </tr>
    <tr>
    <td>Jurusan</td> <td>: {{$nilai->jurusan}}</td>
    </tr>
    </table>

    <table class="table">
  <thead class="table-dark">
  	<tr>
    <th scope="col">#</th>
    <th scope="col">Mata Kuliah</th>
    <th scope="col">Huruf Mutu</th>
    <th scope="col">SKS</th>
    <th scope="col">Total Nilai</th>
    <!-- <th scope="col">Aksi</th> -->
    </tr>
  </thead>
  <tbody>
  <?php
  $totalnilai=0;
  ?>
  @foreach($scores as $score)

    <tr>
    	<th scope="row">{{ $loop->iteration }}</th>
    	<td>{{$score->nama_mk}}</td>
      <td>
        <?php $nilai = $score->nilai;
        if ($nilai >= 85 && $nilai <=100 ) {
        $grade = "A";
      }
      elseif ($nilai >= 70 && $nilai <85 ) {
        $grade = "B";
      }
      elseif ($nilai >= 60 && $nilai <70 ) {
        $grade = "C";
      }
      elseif ($nilai >= 50 && $nilai <60 ) {
        $grade = "D";
      }
      elseif ($nilai <50 ) {
        $grade = "E";
      }
      if ($grade =='A') {
          $mutu ='4';
        }
        elseif ($grade =="B") {
          $mutu = '3';
        }
        elseif ($grade =="C") {
          $mutu = '2';
        }
        elseif ($grade =="D") {
          $mutu = '4';
        }
        elseif ($grade =="4") {
          $mutu = '0';
        }
        echo "$grade";
        ?>
      </td>
    	<td>{{$score->sks}}</td>
    	<td>
        <?php
        $total = $mutu * $score->sks;
        echo "$total";
        $totalnilai += $total;
        ?>

      </td>
      <td>
<!-- {{$score->id_score}}       -->
    <!-- <a href="/scores/{{$score->id_score}}/edit" class="btn btn-primary">Edit</a>

    <form method="POST" action="{{$score->id_score}}" class="d-inline">
      @method('delete')
      @csrf
      <button type="subtmit" class="btn btn-danger">Delete</button>
    </form> -->
      </td>
    </tr>
    @endforeach
    <tr>
        <td></td>
        <td align="right" colspan='2'><b>Jumlah</b></td>

        <td>
          {{$sks}}
        </td>
        <td> {{$totalnilai}}</td>
    </tr>
    <tr>
        <td colspan="3" align="right">
        <b>IPK</b>
        </td>
        <td colspan="2">
        <?php
        $ipk = number_format($totalnilai / $sks,2);
        echo $ipk;
        ?>
        </td>
    </tr>
  </tbody>
</table>

    </div>
  </div>
</div>
@endsection
