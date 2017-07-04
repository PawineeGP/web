@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<div id="page-wrapper">
  <div class="container">

    <form method="post" action="upload" id="upload" enctype="multipart/form-data">

      <div class="fallback">
        <input name="file" type="file" multiple />
      </div>
      <br>
      <input type="submit" name="" value="upload">
    </form>
</div>
</div>
@endsection
