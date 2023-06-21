
<form action="/simpan" method = "get">
    @csrf
 <div class="custom-control custom-radio">
    <label> Pilih Jenis Kelamin </label><br>
  <input type="radio" id="customRadio1" name="customRadio" value = "Pria" class="custom-control-input">
  <label class="custom-control-label" for="customRadio1"  >Pria </label>
</div>
<div class="custom-control custom-radio">
  <input type="radio" id="customRadio2" name="customRadio" value = "Wanita" class="custom-control-input">
  <label class="custom-control-label" for="customRadio2" >Wanita</label>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
     





