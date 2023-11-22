@extends('layouts.apps')
@section('content')
<style type="text/css">
  img {
  max-width: 100%;
  height: auto;
}
</style>

   <h1>Hi, {{ $name }}</h1>
<p>Sending Mail from Laravel.</p>

@endsection