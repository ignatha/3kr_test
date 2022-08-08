@extends('layout_auth')

@section('content')
<section>
    <div class="container">
        <div class="row" style="min-height: 100vh;">
            <div class="spacer" style="height: 200px;"></div>
            <div class="col" style="max-width:600px;height:auto;background-image: url('assets/img/parchment.png');padding: 20px;margin:0 auto;position: relative;z-index: 1;">
                <img src="assets/img/login-form.png" style="width: 50%;height: auto;position: absolute;top:-10%;left:25%;z-index: 10;" />
                <img src="assets/img/frame.png" style="width: 104%;height: 107%;top: -6%;left: -2%;position: absolute;z-index: -1;display: block;" />
                <form action="{{ route('login.3kr') }}" method="POST" style="z-index: 10;">
                @csrf
                      <div class="row">
                          <label for="user_id">USER ID</label>
                          <input type="text" id="user_id" value="{{ old('user_id') }}" name="user_id" placeholder="USER ID">
                          @error('user_id')
                                    <span>
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                      </div>
                      <div class="row">
                          <label for="password">PASSWORD</label>
                          <input type="password" id="password" name="password" placeholder="PASSWORD ( 4-16 Karakter )">
                          @error('password')
                                    <span>
                                        <strong>{{ $message }}</strong>
                                    </span>
                          @enderror
                      </div>
                        @if(Session::has('error'))
                        <center><span style="color: red">
                                <strong>{{ Session::get('error') }}</strong>
                            </span>
                        </center>
                        @endif
                      <h2>Lupa Password ? Silahkan <a href="#" style="text-decoration: none;">Reset Password</a></h2>
                      <div class="spacer" style="height: 100px;"></div>
                      <div class="row">
                        <input type="submit" value="LOGIN">
                      </div>
                      </form>
            </div>
        </div>
    </div>
</section>
@endsection
