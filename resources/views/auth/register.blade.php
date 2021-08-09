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
<div style=" background-color:#fff; padding:20px; width:100%;float: right;margin: 10px;">
  <div class="title-gf">
    Register
  </div>
  <div class="content-gf">
    <div style="border-bottom:1px solid #ddd; padding:2px 0 4px 4px; font-size:15px; color:#666; margin-bottom:9px;">
      Create a account
    </div>
    <form class="new_user" id="new_user" method="POST" action="{{ route('register') }}">
      @csrf
      <div id="notice" style="padding-left:155px"></div>
      <table>
        <tr>
          <td>
            Username<sup>*</sup>
          </td>
          <td>
            <input id="name" type="text" class="required @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus><br>
            @error('name')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
            <label class="off red" id="lb_user_fullname">Full Name</label>
          </td>
        </tr>
        <tr>
          <td>
            Email<sup>*</sup>
          </td>
          <td>
            <input id="email" type="email" class="required @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"><br>
            @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
            <label class="off red" id="lb_user_email">Please enter email</label>
          </td>
        </tr>
        <tr>
          <td>
            Password<sup>*</sup>
          </td>
          <td>
            <input id="password" type="password" class="required @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"><br>
            @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
            <label class="off red" id="lb_user_password">Please enter password</label>
          </td>
        </tr>
        <tr>
          <td>
            Password confirmation<sup>*</sup>
          </td>
          <td>
            <input id="password-confirm" type="password" class="required" name="password_confirmation" required autocomplete="new-password"><br>
            <label class="off red" id="lb_user_password_confirmation">Please enter password</label>
          </td>
        </tr>

        <tr>
          <td>Phone<sup>*</sup></td>
          <td>
            <input id="phone-number" type="tel" class="required @error('phone-number') is-invalid @enderror" name="phone-number" value="{{ old('phone-number') }}" required autocomplete="phone-number"><br>
            @error('phone')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
            <label class="off red" id="lb_user_phone">Phone</label>
          </td>
        </tr>
        <tr>
          <td>Address<sup>*</sup> </td>
          <td>
            <input id="address" type="text" class="required @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address"><br>
            <label class="off red" id="lb_profile_address">Please enter address</label>
          </td>
        </tr>
      </table>
      <table>
        <tr>
          <td></td>
          <td>
            <div class="cap-orderonline" style="text-align: center;">
              <input type="submit" value="Submit" class="btn btn-primary" style="margin: 20px 160px;"/>
            </div>
          </td>
        </tr>
      </table>
    </form>
  </div>
</div>
<script>
  $(document).ready(function() {
    $(".select-location").blur(function() {
      var id = $(this).val();
      if (parseInt(id) > 0) {
        $(this).removeClass('border-red');
        var dataid = $(this).attr('id');
        $("#lb_" + dataid).hide();
      }
    });
    $("input.required").blur(function() {
      if ($(this).val() != "") {
        $(this).removeClass('border-red');
        $("#lb_" + $(this).attr('id')).hide();
      }
    });
    $("#profile-location1").change(function() {
      var id = $(this).val();
      if (parseInt(id) > 0) {
        $.ajax({
          url: "/locations/location?id=" + id,
          dataType: "script"
        });
      } else {
        $("#location2").html('<select name="location2" class="select-location" id="profile-location2"><option selected="selected" value="0">--</option></select>');
      }
      $("#location3").html('<select name="location3" class="select-location" id="profile-location3"><option selected="selected" value="0">--</option></select>');
    });
    $("#profile-location2").change(function() {
      var id = $(this).val();
      $.ajax({
        url: "/locations/location?id=" + id,
        dataType: "script"
      });

    });
    $("#new_user").submit(function(event) {
      var capt_value = $(this).find("#captcha_valid").val().toUpperCase();
      var ready = 0;
      $(this).find("input.required").each(function() {
        if ($(this).val() == "") {
          $(this).addClass('border-red');
          $("#lb_" + $(this).attr('id')).show();
          ready--;
        } else {
          $(this).removeClass('border-red');
          $("#lb_" + $(this).attr('id')).hide();
          ready++;
        }
      });
      $(this).find("select.select-location").each(function() {
        if ($(this).val() == "0") {
          var id = $(this).attr('id');
          $("#lb_" + id).show();
          $(this).addClass('border-red');
          ready--;
        } else {
          var id = $(this).attr('id');
          $("#lb_" + id).hide();
          $(this).removeClass('border-red');

          ready++;
        }
      });
      if (trim($(this).find("#input_captcha_valid").val()).toUpperCase() != trim(capt_value)) {
        $("#lb_capcha").show();
        ready--;
      } else {
        $("#lb_capcha").hide();
        ready++;
      }
      if (ready == 10) {
        return true;
      } else {
        event.preventDefault();
        return false;
      }
    });
  });
</script>
<style>
  .select-location {
    width: 312px;
    padding: 5px 0
  }
</style>
@endsection