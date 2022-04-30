<!DOCTYPE html>

        <x-header/>
            
        <!-- Content Block -->
        <div class='container'>
            <div>
                <h1> Enrollment Page </h1>
            </div>
            
            <h4 class="fw-bold text-center mt-3"></h4>
            <form method="POST" action="/user" class=" bg-white px-4" action="">
            @csrf
            <div class="row col-8">
                    <div class="col-5">
                    </div>
                    <div class="col-1">
                        <div class="form-check-left form-check-inline mb-2">
                            <label class="form-check-label" for="defaultCheck1">
                                Enroll
                            </label>
                        </div>
                    </div>
            </div>
            <!-- Question 1 -->
            <div class="row col-5">
                    <div class="col-8">
                        <p class="fw-bold">Comp 584 Adv Web Engineering</p>
                    </div>
                    <div class="col-3">
                        <div class="form-check form-check-inline mb-2">
                            <input class="form-check-input" type="checkbox" name="courses[]" value="Comp 584" id="Comp 584" />
                            <label class="form-check-label" for="Comp 584">
                            </label>
                        </div>
                    </div>

            </div>
            <!-- Question 2 -->
            <div class="row col-5">
                    <div class="col-8">
                        <p class="fw-bold">Comp 333 Concepts of Programming</p>
                    </div>
                    <div class="col">
                        <div class="form-check form-check-inline mb-2">
                            <input class="form-check-input" type="checkbox" name="courses[]" value="Comp 333" id="Comp 333" />
                            <label class="form-check-label" for="Comp 333">
                            </label>
                        </div>
                    </div>

            </div>
            <!-- Question 3 -->
            <div class="row col-5">
                    <div class="col-8">
                        <p class="fw-bold">Comp 484 Web Engineering</p>
                    </div>
                    <div class="col">
                        <div class="form-check form-check-inline mb-2">
                            <input class="form-check-input" type="checkbox" name="courses[]" value="Comp 484" id="Comp 484" />
                            <label class="form-check-label" for="Comp 484">
                            </label>
                        </div>
                    </div>

            </div>
            <!-- Question 4 -->
            <div class="row col-5">
                    <div class="col-8">
                        <p class="fw-bold">Comp 424 System Security</p>
                    </div>
                    <div class="col">
                        <div class="form-check form-check-inline mb-2">
                            <input class="form-check-input" type="checkbox" name="courses[]" value="Comp 424" id="Comp 424" />
                            <label class="form-check-label" for="Comp 424">
                            </label>
                        </div>
                    </div>

            </div>
            <!-- Question 5 -->
            <div class="row col-5">
                    <div class="col-8">
                        <p class="fw-bold">Comp 583 Software Engineer Mngmt</p>
                    </div>
                    <div class="col">
                        <div class="form-check form-check-inline mb-2">
                            <input class="form-check-input" type="checkbox" name="courses[]" value="Comp 583" id="Comp 583" />
                            <label class="form-check-label" for="Comp 583">
                            </label>
                        </div>
                    </div>

            </div>
            <div class="text-center">
                <button type="button" class="btn btn-primary">Submit</button>
            </div>
            </form>

        </div>
        <x-footer/>

        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </body>

</html>