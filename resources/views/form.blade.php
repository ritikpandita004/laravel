<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <form action="{{$url}}" method="POST">
  <!-- we send a request by post method we require csrf method -->
  @csrf
    <x-input type="text" name="name" label="name" value="{{$customer->name}}"/>
    <x-input type="email" name="email" label="email" value="{{$customer->email}}"/>
    <x-input type="password" name="password" label="password"/>
    <x-input type="password_confirmation" name="password_confirmation" label="confirm password"/>
    <x-input type="date" name="date" label="Date" value="{{$customer->date}}"/>
    <x-input type="text" name="address" label="Address" value="{{$customer->address}}"/>
    <div class="form-group">
      <label for="genderSelect">Select Gender:</label>
      <select class="form-select" name="gender" id="gender" value="{{$customer->gender}}">
        <option selected disabled>Select Gender </option>
        <option value="M">Male</option>
        <option value="F">Female</option>
        <option value="O">Other</option>
      </select>
    </div>
    
    
    <button type="submit" class="btn btn-primary">Submit</button>


</div>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>  
</body>
</html>