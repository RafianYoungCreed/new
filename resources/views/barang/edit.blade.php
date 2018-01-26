@extends('layouts.app')
@section('sidebar')
	<li class="header">MAIN NAVIGATION</li>
	<li><a href="{{url('/home')}}"><i class="fa fa-dashboard text-red"></i>   
		<span>Dashboard</span></a></li>
	<li><a href="{{route('pemasok.index')}}"><i class="fa fa-circle-o text-green"></i>
		<span>Pemasok</span></a></li>
@endsection
@section('content')
<div class="row">
	<div class="col-md-12">
		<section class="content-header">
    		 <h1>
    		   Tambah Data Pemasok
    		 </h1>
      		<ol class="breadcrumb">
      		  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      		  <li class="fa fa-car">Pemasok</li><li class="active">Tambah Pemasok</li>
      		</ol>
    	</section><br><br>
    	<div class="panel panel-primary">
			<div class="panel-heading" style="background: #9932cc">Tambah Pemasok
		</div>

		<div class="panel-body">
		<form action="{{route('barang.update')}}" method="post" enctype="multipart/form-data">
			{{csrf_field()}}


			<div class="form-group">
				<label class="control-lable">Nama Barang</label>
				<input type="text" name="nama" class="form-control" required="" value="{{$barang->namabarang}}">
			</div>
			<div class="form-group">
				<label class="control-lable">Jenis Barang</label>
				<select class="form-control" name="jenbar_id">
					@foreach($jenbar as $data)
					<option value="{{$data->id}}">{{$data->namajenis}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label class="control-lable">Merk</label>
				<input type="text" name="Merk" class="form-control" required="" value="{{$barang->Merk}}">
			</div>
			<div class="form-group">
				<label class="control-lable">Ukuran</label>
				<input type="text" name="ukuran" class="form-control" required="" value="{{$barang->ukuran}}">
			</div>
			
			<div class="form-group">
				<label class="control-lable">Type</label>
				<input type="text" name="type" class="form-control" required="" value="{{$barang->type}}">
			</div>
			<div class="form-group">
				<label class="control-lable">Rasa</label>
				<input type="text" name="rasa" class="form-control" required="" value="{{$barang->rasa}}">
			</div>
			<div class="form-group">
				<label class="control-lable">Jumlah</label>
				<input type="number" name="jumlah" class="form-control" required="" value="{{$barang->jumlah}}">
			</div>
			<div class="form-group">
				<label class="control-lable">Harga</label>
				<input type="number" name="harga" class="form-control" required="" value="{{$barang->harga}}">
			</div>
			<br>
			<div class="pull-right">
			<div class="form-group">
				<button type="submit" class="btn btn-success">Simpan</button>
				<button type="reset" class="btn btn-danger">Reset</button>
			</div>
			</div>

		</form>
		</div>
	</div>
</div>
@endsection