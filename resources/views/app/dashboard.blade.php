@extends('layouts.app')

@section('title', 'Dashboard')


@section('content')
	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
		<div class="row">
			<div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">
		<!--begin::Portlet-->
			<div class="kt-portlet kt-portlet--height-fluid-half">
				<div class="kt-portlet__head kt-portlet__head--noborder">
					<div class="kt-portlet__head-label">
						<h3 class="kt-portlet__head-title">Recomended  Openings</h3>
					</div>
					
				</div>
				<div class="kt-portlet__body kt-portlet__body--fluid">
					<div class="kt-widget-19">
						<div class="kt-widget-19__title">
							<div class="kt-widget-19__label">30</div>
							<img class="kt-widget-19__bg"  src="https://keenthemes.com/keen/themes/keen/theme/demo2/dist/assets/media/misc/iconbox_bg.png" alt="bg"/>
						</div>
						<div class="kt-widget-19__data">
							<!--Doc: For the chart bars you can use state helper classes: kt-bg-success, kt-bg-info, kt-bg-danger. Refer: components/custom/colors.html -->
							<div class="kt-widget-19__chart">
								<div class="kt-widget-19__bar"><div class="kt-widget-19__bar-3" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="3"></div></div>
								<div class="kt-widget-19__bar"><div class="kt-widget-19__bar-4" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="4"></div></div>
								<div class="kt-widget-19__bar"><div class="kt-widget-19__bar-3" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="3"></div></div>
								<div class="kt-widget-19__bar"><div class="kt-widget-19__bar-3" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="5"></div></div>
								<div class="kt-widget-19__bar"><div class="kt-widget-19__bar-12" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="12"></div></div>
								<div class="kt-widget-19__bar"><div class="kt-widget-19__bar-3" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="3"></div></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--end::Portlet-->		<!--begin::Portlet-->
			<div class="kt-portlet kt-portlet--height-fluid-half">
				<div class="kt-portlet__head kt-portlet__head--noborder">
					<div class="kt-portlet__head-label">
						<h3 class="kt-portlet__head-title">Applied Openings</h3>
					</div>
					
				</div>
				<div class="kt-portlet__body kt-portlet__body--fluid">
					<div class="kt-widget-19">
						<div class="kt-widget-19__title">
							<div class="kt-widget-19__label">2</div>
							<img class="kt-widget-19__bg"  src="https://keenthemes.com/keen/themes/keen/theme/demo2/dist/assets/media/misc/iconbox_bg.png" alt="bg"/>
						</div>
						<div class="kt-widget-19__data">
							<!--Doc: For the chart bars you can use state helper classes: kt-bg-success, kt-bg-info, kt-bg-danger. Refer: components/custom/colors.html -->
							<div class="kt-widget-19__chart">
								<div class="kt-widget-19__bar"><div class="kt-widget-19__bar-1" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="1"></div></div>
								<div class="kt-widget-19__bar"><div class="kt-widget-19__bar-0" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="0"></div></div>
								<div class="kt-widget-19__bar"><div class="kt-widget-19__bar-0" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="0"></div></div>
								<div class="kt-widget-19__bar"><div class="kt-widget-19__bar-0" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="0"></div></div>
								<div class="kt-widget-19__bar"><div class="kt-widget-19__bar-1" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="1"></div></div>
								<div class="kt-widget-19__bar"><div class="kt-widget-19__bar-0" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="0"></div></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<!--end::Portlet-->
	</div>
		</div>
	</div>
@endsection
