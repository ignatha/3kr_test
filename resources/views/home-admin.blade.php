<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home - Admin</title>
</head>
<body>

<div class="container">
    <div class="row">
        <h1>Halaman Home User Admin</h1>
        <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
                                        @csrf
                                    </form>
    </div>
</div>

</body>
</html>