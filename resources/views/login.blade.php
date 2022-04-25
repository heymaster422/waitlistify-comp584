<!DOCTYPE html>

        <x-header/>
            <div class="container">
                <h2>Login</h2>
                    <form method="post" action="/login">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>

                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>

                        <div class="form-group">
                            <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        
                    </form>
            </div>
        <x-footer/>

<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>