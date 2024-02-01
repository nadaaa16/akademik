<form  action="{{ route('login-proses') }}" method="POST" style="width:350px">
    @csrf
    <div class="mb-5 text-center" >
        <h3>LOGIN</h3>
    </div>
    <div class="mb-3">
      <label for="username" class="form-label">Username</label>
      <input type="text" name="username" class="form-control" id="username"  >
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" name="password" class="form-control" id="password">
    </div>
    <button type="submit" class="btn btn-dark w-100">Submit</button>
    <div class="mb-3 text-cener">
      <p>Don't have account? <a href="/register">Register</a></p>
    </div>
  </form>