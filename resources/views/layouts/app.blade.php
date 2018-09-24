<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{--  <title>{{ config('app.name', 'Laravel') }}</title>  --}}
    <title>Vibrations18</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Jquery for Enabling Submit button only when check box is selected-->
	<script type = "text/javascript">
		$('input:checkbox').click(function() {
		        if ($(this).is(':checked')) {
                    $('#submit_btn').prop("disabled", false);
					$('#submit_btn').removeClass("disabled-btn");
		        } else {
				if ($('.chk').filter(':checked').length < 1){
                    $('#submit_btn').prop("disabled", true);
					$('#submit_btn').addClass('disabled-btn');}
				}
		});
	</script>

<!--  Jquery to prevent multiple form submissions -->
	<script type="text/javascript">
	    $('form').submit(function(){
            $this = $(this);

            /** prevent double posting */
            if ($this.data().isSubmitted) {
                return false;
            }
            /** mark the form as processed, so we will not process it again */
            $this.data().isSubmitted = true;

            return true;
        });
    </script>
    
<!--  Jquery to remove error message on focus -->
	<script type="text/javascript">
	    $('input').on('change',function(){
            $('.alert').hide();
        });
	</script>

</body>
</html>
