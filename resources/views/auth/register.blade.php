@extends('layout_auth')

@section('content')
<section>
    <div class="container">
        <div class="row" style="min-height: 100vh;">
            <div class="spacer" style="height: 200px;"></div>
            <div class="col" style="max-width:600px;height:auto;background-image: url('assets/img/parchment.png');background-position: center;background-repeat: no-repeat;background-size: cover;padding: 20px;margin:0 auto;position: relative;z-index: 1;">
                <img src="assets/img/register-form.png" style="width: 50%;height: auto;position: absolute;top:-5%;left:25%;z-index: 10;" />
                <img src="assets/img/frame.png" style="width: 104%;height: 107%;top: -6%;left: -2%;position: absolute;z-index: -1;display: block;" />
                <form action="{{ route('register') }}" method="POST" style="z-index: 10;">
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
                      <div class="row" style="display: flex;justify-content: space-between;">
                        <div style="padding-right: 10px;">
                          <label for="password">PASSWORD</label>
                          <input type="password" id="password" name="password" placeholder="PASSWORD ( 6 - 15 Karakter )">
                          @error('password')
                                    <span>
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div style="padding-left: 10px;">
                          <label for="password_confirmation">KONFIRMASI PASSWORD</label>
                          <input type="password" id="password_confirmation" name="password_confirmation" placeholder="KONFIRMASI PASSWORD">
                          @error('password_confirmation ')
                                    <span>
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                      </div>
                      <div class="row">
                          <label for="email">EMAIL</label>
                          <input type="text" id="email" value="{{ old('email') }}" name="email" placeholder="EMAIL">
                          @error('email')
                                    <span>
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                      </div>
                      <div class="row">
                          <label for="phone">HP</label>
                          <input type="text" id="phone" value="{{ old('phone') }}" name="phone" placeholder="NOMOR HANDPHONE">
                          @error('phone')
                                    <span>
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                      </div>
                      <div class="row">
                          <label for="pin">PIN</label>
                          <input type="text" id="pin" value="{{ old('pin') }}" name="pin" placeholder="PIN ( 6 Karakter Angka )">
                          @error('pin')
                                    <span>
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                      </div>
                      <div class="spacer" style="height: 100px;"></div>
                      <div class="row">
                        <input type="submit" value="REGISTER">
                      </div>
                      </form>           
            </div>
        </div>
    </div>
</section>
<div class="spacer" style="height: 200px;"></div>
@endsection

@section('js')

@endsection