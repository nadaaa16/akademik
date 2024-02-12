@extends('back.layout.dashboard-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Dashboard')
@section('content')
    
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
{{-- <div class="mt-3 d-flex justify-content-center">
    <h2><i class="bi bi-trophy"></i>Welcome Syahid!</h2>
</div> --}}

<div class="main-container">
			<div class="xs-pd-20-10 pd-ltr-20">
				<div class="title pb-20">
					<h2 class="h3 mb-0">Hallo, Syahid!</h2>
				</div>
				
				<div class="card-box pb-10">
					<div class="h5 pd-20 mb-0">Catatan Terbaru [nama]</div>
					<table class="data-table table nowrap">
						<thead>
							<tr>
								<th class="table-plus">Nama</th>
								<th>Code Pelangaran</th>
								<th>Rayon</th>
								<th>Tingkat</th>
								<th class="datatable-nosort">Actions</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="table-plus">
									<div class="name-avatar d-flex align-items-center">
										<div class="avatar mr-2 flex-shrink-0">
											{{-- <img
												src="/back/vendors/images/photo4.jpg"
												class="border-radius-100 shadow"
												width="40"
												height="40"
												alt=""
											/> --}}
										</div>
										<div class="txt">
											<div class="weight-600">Syahid</div>
										</div>
									</div>
								</td>
								<td>K 1.5 - Nongkrong</td>
								<td>Cicurug 1</td>
								<td>XII</td>
								<td>
									<div class="table-actions">
										<a href="#" data-color="#265ed7"
											><i class="icon-copy dw dw-edit2"></i
										></a>
										<a href="#" data-color="#e95959"
											><i class="icon-copy dw dw-delete-3"></i
										></a>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
		</div>

<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection