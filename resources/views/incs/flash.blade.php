  @if ($message = Session::get('success'))
  <div class="alert alert-success alert-block">
    <p>{{$message}}</p>
    
  </div>
    
  @endif