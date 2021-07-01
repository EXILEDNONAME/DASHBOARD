<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('includes.head')
<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
	@include('includes.toolbar-mobile')
	<div class="d-flex flex-column flex-root">
		<div class="d-flex flex-row flex-column-fluid page">
			<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
				@include('includes.logo-desktop')
				@include('includes.sidebar')
			</div>

			<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
				<div id="kt_header" class="header header-fixed">
					<div class="container-fluid d-flex align-items-stretch justify-content-between">
						@include('includes.header-menu-left')
						@include('includes.header-menu-right')
					</div>
				</div>

				<!-- CONTENT -->
				<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
					@include('includes.subheader')
					<div class="d-flex flex-column-fluid">
						<div class="container-fluid">
							@if ($message = Session::get('success'))
							<div id="toast-container" class="toast-bottom-right">
							  <div class="toast toast-success" aria-live="polite">
							    <div class="toast-message">{{ $message }}</div>
							  </div>
							</div>
							@endif

							@if ($message = Session::get('error'))
							<div id="toast-container" class="toast-bottom-right">
							  <div class="toast toast-error" aria-live="polite">
							    <div class="toast-message">{{ $message }}</div>
							  </div>
							</div>
							@endif
							@stack('content')
						</div>
					</div>
				</div>

				@include('includes.footer')

			</div>
		</div>
	</div>

	@include('includes.scroll-top')
	@include('includes.sticky-toolbar')
	@include('includes.demo-panel')
	@include('includes.js')
	@stack('js')

</body>
</html>
