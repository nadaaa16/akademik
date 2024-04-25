@extends('back.layout.dashboard2-layout')
@section('title', isset($pageTitle) ? $pageTitle : 'Dashboard')
@section('content')
    
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
{{-- <div class="mt-3 d-flex justify-content-center">
    <h2><i class="bi bi-trophy"></i>Welcome Syahid!</h2>
</div> --}}

<div class="main-container">
			<div class="xs-pd-20-10 pd-ltr-20">
				<div class="title pb-20">
					<h2 class="h3 mb-0">Hallo, Admin!</h2>
				</div>
				<div class="row pb-10">
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark">{{ $dataSiswa }}</div>
									<div class="font-14 text-secondary weight-500">
										Siswa
									</div>
								</div>
								<div class="widget-icon">
									<div class="icon" data-color="white">
										<i class="bi bi-person"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark">6</div>
									<div class="font-14 text-secondary weight-500">
										Guru
									</div>
								</div>
								<div class="widget-icon">
									<div class="icon" data-color="white">
										<i class="bi bi-person-check"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark">{{ $totalPrestasi }}</div>
									<div class="font-14 text-secondary weight-500">
										Prestasi Siswa
									</div>
								</div>
								<div class="widget-icon">
									<div class="icon" data-color="#09cc06">
										<i
											class="bi bi-trophy"
											aria-hidden="true"
										></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark">{{ $totalPelanggaran }}</div>
									<div class="font-14 text-secondary weight-500">Pelanggaran Siswa</div>
								</div>
								<div class="widget-icon">
									<div class="icon" data-color="white">
										<i class="bi bi-journal-check" aria-hidden="true"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="card-box pb-10">
					<div class="h5 pd-20 mb-0">Users!</div>
					<table class="data-table table nowrap">
						<thead>
							<tr>
								<th>No</th>
								<th class="table-plus">Nama</th>
								<th>NIS</th>
								<th>Rayon</th>
								<th>Kelas</th>
								<th>Jenis Kelamin</th>
								{{-- <th class="datatable-nosort">Actions</th> --}}
							</tr>
						</thead>
						<tbody>
							@foreach ($dataSiswaAll as $value)
							<tr>
								<td>{{ $loop->iteration }}</td>
								<td class="table-plus">
									<div class="name-avatar d-flex align-items-center">
										<div class="txt">
											<div class="weight-600">{{$value->nama}}</div>
										</div>
									</div>
								</td>
								<td>{{$value->nis}}</td>
								<td>{{$value->rayon}}</td>
								<td>{{$value->tingkat}}</td>
								<td>{{$value->jk}}</td>
								{{-- <td>
									<div class="table-actions">
										<a href="/data-siswa-edit/{{$value->id}}" data-color="#265ed7"
											><i class="icon-copy dw dw-edit2"></i
										></a>
										<form action="{{ route('siswa.delete',['id' => $value->id] )}}" method="POST"  style="display: inline;">
											@csrf
											@method('DELETE')
											<button type="submit" class="btn-delete" style="background: none; border: none;">
												<i class="icon-copy dw dw-delete-3" style="font-size: 1.2rem; color: red; cursor: pointer;"></i>
											</button>
										</form>
									</div>
								</td> --}}
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>

				{{-- <div class="title pb-20 pt-20">
					<h2 class="h3 mb-0">Quick Start</h2>
				</div> --}}

				{{-- <div class="row">
					<div class="col-md-4 mb-20">
						<a href="#" class="card-box d-block mx-auto pd-20 text-secondary">
							<div class="img pb-30">
								<img src="/back/vendors/images/medicine-bro.svg" alt="" />
							</div>
							<div class="content">
								<h3 class="h4">Services</h3>
								<p class="max-width-200">
									We provide superior health care in a compassionate maner
								</p>
							</div>
						</a>
					</div>
					<div class="col-md-4 mb-20">
						<a href="#" class="card-box d-block mx-auto pd-20 text-secondary">
							<div class="img pb-30">
								<img src="/back/vendors/images/remedy-amico.svg" alt="" />
							</div>
							<div class="content">
								<h3 class="h4">Medications</h3>
								<p class="max-width-200">
									Look for prescription and over-the-counter drug information.
								</p>
							</div>
						</a>
					</div>
					<div class="col-md-4 mb-20">
						<a href="#" class="card-box d-block mx-auto pd-20 text-secondary">
							<div class="img pb-30">
								<img src="/back/vendors/images/paper-map-cuate.svg" alt="" />
							</div>
							<div class="content">
								<h3 class="h4">Locations</h3>
								<p class="max-width-200">
									Convenient locations when and where you need them.
								</p>
							</div>
						</a>
					</div>
				</div> --}}

			</div>
		</div>

<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection