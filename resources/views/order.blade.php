@extends('layouts.app')
@section('content')
<div class="banner-bottom">
  <div class="container">
    <div class="inner_sec_info_agileits_w3">
            <h3 class="heading-agileinfo">Nägel Termin</span></h3>
      <div class="contact-form">
             <form>
             <div class="left_form">
              <div>
                <label>Nutzername</label>
                <div class="input-group date"> 
                  <input class="form-control textbox date option" required="" type="text"> 
                </div>
              </div>
              <div>
                <label>E-mail(Optional)</label>
                <div class="input-group date"> 
                  <input class="form-control textbox date option"  type="text"> 
                </div>
              </div>
              <div>
                 <label>Telefon</label>
                 <div class="input-group date"> 
                  <input class="form-control textbox date option" required="" type="text"> 
                </div>
              </div>
             </div>
            <div class="right_form"> 
              <div>
                <label>Datum</label>
                <div id="datepicker" class="input-group date" data-date-format="dd-mm-yyyy"> 
                  <input class="form-control textbox date" readonly="" type="text"> 
                    <span class="input-group-addon">
                      <i class="glyphicon glyphicon-calendar"></i>
                    </span> 
                </div>
             </div>
             <div>
              <label>Stunde</label>
              <div id="datetimepicker3" class="input-group" data-date-format="dd-mm-yyyy"> 
                <input class="form-control textbox date" readonly="" type="text"> 
                  <span class="input-group-addon">
                    <i class="glyphicon glyphicon-time"></i>
                  </span> 
              </div>
             </div>
              <div>					    	
                <label>Notiz</label>
                <div class="input-group"> 
                  <textarea class="form-control textbox option" required="">
                  </textarea> 
                </div>
              </div>
               <div>
                <span><input type="submit" value="einreichen" class="myButton option"></span>
              </div>
            </div>
            <div class="clearfix"></div>
          </form>
        </div>
    </div>
  </div>
</div>
@endsection
@section('css')
{{-- <link rel="stylesheet prefetch" href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css"> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/css/bootstrap-datetimepicker.min.css">
    <style>
      .textbox {
        border-radius: 5px;
      }
      .contact-form textarea {
        height: 100px;
      }
      .date {
        /* padding: 25px 0 !important; */
        height: 42px !important;
        border-radius: 5px;
      }
      .input-group {
        width: 100% !important;
      }
      .option{
        border-radius: 5px !important;
      }
    </style>
@endsection
@section('js')
{{-- <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/js/bootstrap-datetimepicker.min.js"></script>


<script>
  $('#datepicker').datetimepicker({  
    todayHighlight: true,
    daysOfWeekDisabled: [0],
    format: 'DD-MM-YYYY',
    pickTime: false,
    minView: 2,
    maxView: 4,    
    autoclose: true,
    minDate:new Date(),
    startDate: new Date(),
    locale: 'de'
    // inline: true,
    // sideBySide: true,
  });
  $('#datetimepicker3').datetimepicker({
    pickDate: false,
    // format: 'LT',
    autoclose:true,
    minuteStep: 30,
    enabledHours: [[moment().hour(9).minutes(30), moment().hour(19).minutes(30)]]
  });
  // $("#datepicker").datepicker({         
  //   autoclose: true,         
  //   todayHighlight: true,
  //   daysOfWeekDisabled: '0',
  //   language: 'de',
  //   startDate: 'today'
  // }).datepicker();

  // $("#datepicker_hour").datepicker({         
  //   autoclose: true,         
  //   todayHighlight: true,
  //   locale: 'de',
  // }).datepicker();
</script>
@endsection
