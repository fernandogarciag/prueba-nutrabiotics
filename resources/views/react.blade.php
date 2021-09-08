@php
  foreach ($errors_name as $error_name) {
    $data['errors'][$error_name] = $errors->get($error_name);
  }
  $data['auth'] = Auth::check();
  $data['csrf'] = csrf_token();
  $data['old'] = old();
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <link
      href="favicon.ico"
      rel="shortcut icon"
      type="image/x-icon"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="description"
      content="Web site created using create-react-app"
    />
    <title>{{ $data['title'] }}</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
    <div id="root" data="{{ json_encode($data) }}"></div>
    <div id="modal"></div>
    <script src="{{ 'js/' . $nameJS . '.js' }}"></script>
    <script src="js/app.js"></script>
  </body>
</html>
