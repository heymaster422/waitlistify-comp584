<!DOCTYPE html>

        <x-header/>

            <div class="container">
                <h2>Login</h2>
                
                @error('failed')
                <div class="alert alert-danger">{{ $message}} </div>
                @enderror
                
                    <form method="post" action="/authenticate">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>

                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>

                        <div class="form-group">
                            <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        
                    </form>
                    
                    <a href="/register">Don't have an account? Register Here.</a>
            </div>
        <x-footer/>

<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>