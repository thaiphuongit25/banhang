@extends('layouts.app')

@section('content')
<style type="text/css">
  .select-location {
    border: 1px solid #ccc;
    padding: 6px;
    width: 102px;
    background-color: #efefef;
  }
</style>
<div id="wrapper">
  <div id="body">
    <div id="body-left">
      <div class="left-information">
        <div class="title-gf">
          Thông tin khách hàng
        </div>
        <div class="left-information-content">
          <a href="/mypage">Thông tin cá nhân</a>
          <a href="/users/17755/edit">Đổi mật khẩu</a>
        </div>
        <div class="left-information-content">
          <a href="/orders">Đơn hàng của tôi</a>
        </div>
        <div class="left-information-content">
          <a href="/favorites">Sản phẩm yêu thích</a>
        </div>
        <div class="left-information-content">
          <a href="/#">Bài viết</a>
        </div>
        <div class="left-information-content">
          <a href="/#">Thông báo</a>
        </div>
      </div>
    </div>
    <div id="body-right">
      <div style="background-color:#fff; padding:0px; width:100%;float:left; margin-right:6px;">
        <div class="title-gf">
          Thay đổi mật khẩu
        </div>
        <div class="content-gf" style="position: relative">
          <form class="new_user" id="new_user" method="POST" action="/change-password">
            @csrf
            <div id="notice" style="padding-left:155px"></div>
            <table>
              <tr>
              <tr>
                <td>
                  Mật khẩu hiện tại<sup>*</sup>
                </td>
                <td>
                  <input id="password" type="password" class="required @error('password') is-invalid @enderror" name="password" required autocomplete="password"><br>
                  @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                  <label class="off red" id="lb_user_password">Nhập mật khẩu</label>
                </td>
              </tr>
              <tr>
                <td>
                  Mật khẩu<sup>*</sup>
                </td>
                <td>
                  <input id="new_password" type="password" class="required @error('new_password') is-invalid @enderror" name="new_password" required autocomplete="new-password"><br>
                  @error('new_password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                  <label class="off red" id="lb_user_password">Nhập mật khẩu</label>
                </td>
              </tr>
              <tr>
                <td>
                  Nhập lại mật khẩu<sup>*</sup>
                </td>
                <td>
                  <input id="password-confirm" type="password" class="required equalTo(#new_password)" name="password_confirmation" required autocomplete="new-password"><br>
                  <label class="off red" id="lb_user_password_confirmation">Hãy nhập lại mật khẩu</label>
                </td>
              </tr>
              <tr>
                <td></td>
                <td>
                  <div class="cap-orderonline">
                    <input type="submit" value="Cập nhật mật khẩu" class="btn btn-primary" />
                  </div>
                </td>
              </tr>
            </table>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection