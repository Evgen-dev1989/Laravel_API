
@section('form')

  <form action="/clients/form" method="POST"  enctype="multipart/form-data">
        @csrf

        <div class="container-fluid">

            <div class="row g-3 align-items-center">
                <h5>Add client</h5>
                <div class="col-auto">
                    <label for="name" class="col-form-label" >Name</label>
                </div>
                <div class="col-auto">
                    <input type="text" id="name" name="name" placeholder="Enter your name" class="form-control" aria-describedby="name">
                </div>
                <div class="col-auto">
    <span id="passwordHelpInline" class="form-text">
      Must be 3-10 characters long.
    </span>
                </div>

                <div class="col-auto">
                    <label for="email" class="col-form-label" >Email</label>
                </div>
                <div class="col-auto">
                    <input type="text" id="email" name="email" placeholder="Enter your email" class="form-control" aria-describedby="email">
                </div>
                <div class="col-auto">
    <span id="passwordHelpInline" class="form-text">
      Must be 4-15 characters long.
    </span>
                </div>

                <div class="col-auto">
                    <label for="name" class="col-form-label" >Password</label>
                </div>
                <div class="col-auto">
                    <input type="password" id="password" name="password" placeholder="Enter your password" class="form-control" aria-describedby="password">
                </div>
                <div class="col-auto">
    <span id="passwordHelpInline" class="form-text">
      Must be 8-20 characters long.
    </span>
                </div>
                <button type="submit" class="btn btn-success" value="Send">Send</button>
            </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    </div>
  </form>
@endsection
<?php
$url = 'https://httpbin.org/anything'; // url, на который отправляется запрос
$post_data = [ // поля нашего запроса
'field1' => 'val_1',
'field2' => 'val_2',
];

$headers = []; // заголовки запроса

$post_data = http_build_query($post_data);

$curl = curl_init();
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_VERBOSE, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true); // true - означает, что отправляется POST запрос

$result = curl_exec($curl);

?>
