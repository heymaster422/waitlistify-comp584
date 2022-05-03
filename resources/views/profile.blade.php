<!DOCTYPE html>

        <x-header/>
            

        <!-- Content Block -->
        <div class="container">
            <h1> Profile Page</h1>
            <h2>You are logged as [ {{ session('name')}} ]</h2>
            <div>
                <a href="/logout"><button style="cursor:pointer" type="submit" class="btn btn-primary">Logout</button></a>
            </div>
        </div>

        <x-footer/>

        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </body>

</html>