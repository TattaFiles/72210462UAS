<form action="/simpancek" method = "post">
    @csrf
<div class="form-check">
<label for="">Pilih Konsentrasi</label> <br>
  <input class="form-check-input" type="checkbox" value="Layanan" name="key[]" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    Layanan
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="Kesehatan" name = "key[]" id="defaultCheck2">
  <label class="form-check-label" for="defaultCheck2">
    Kesehatan
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="Enterprise" name = "key[]" id="defaultCheck2">
  <label class="form-check-label" for="defaultCheck2">
    Enterprise
  </label>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
