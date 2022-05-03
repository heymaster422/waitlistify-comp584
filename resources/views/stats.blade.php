<!DOCTYPE html>

        <x-header/>
            

        <!-- Content Block -->
        <div>
            <h1> Stats Page</h1>

        </div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">ClassName</th>
                <th scope="col">Count</th>
            </tr>
            </thead>
            <tbody>

                @foreach($count as $c)
                    <tr>
                        <th scope="row"></th>
                        <td>{{ $c['name']}}</td>
                        <td>{{ $c['count']}}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>

        <x-footer/>

        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </body>

</html>