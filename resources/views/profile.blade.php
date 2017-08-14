@extends('layouts.app')

@section('content')
<script>
   function agreeForm(f) {
    // Если поставлен флажок, снимаем блокирование кнопки
    if (f.agree.checked) f.emailProfile.disabled = 0 
    // В противном случае вновь блокируем кнопку
    else f.emailProfile.disabled = 1
   }
</script>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="col-md-6"><span > Email</span> <input id="emailProfile" type="email" name="emailProfile"  disabled="false" onclick="agreeForm(this.form)"> <button type="submit" > Edit</button>
          </div>
          </div>
          <div class="col-md-8 col-md-offset-2">
              <div class="col-md-6"><span > Phone</span> <input id="Phone" type="Phone"  name="Phone" disabled="false" > <button> Edit</button>
              </div>
              </div>

              <div class="col-md-8 col-md-offset-2">
                  <div class="col-md-6"><span > Skype</span> <input id="Phone" type="Skype"  name="Skype" disabled="false" ><button onclick=""> Edit</button>
                  </div>
              </div>

      </div>
      @endsection
