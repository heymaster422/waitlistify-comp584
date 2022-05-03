<!DOCTYPE html>

        <x-header/>
            
        <!-- Content Block -->
        <div class='container'>
            <div>
                <h1> Enrollment Page </h1>
            </div>
            
            <h4 class="fw-bold text-center mt-3"></h4>
            <form method="POST" action="/enrolled" class=" bg-white px-4">
            @csrf
            <div class="row col-8">
                    <div class="col-5">
                    </div>
                    <div class="col-1">
                        <div class="form-group form-check-left form-check-inline mb-2">
                            <label class="form-check-label" for="defaultCheck1">
                                Enroll
                            </label>
                        </div>
                    </div>
            </div>
            <!-- Question 1 -->
            <div class="row col-5 form-check-inline">
                <div class="form-group">
                    <div class="col-8">
                        <p class="fw-bold">Comp 584 Adv Web Engineering</p>
                    </div>
                    <div class="col-5">
                        <div class="form-group form-check mb-2">
                            <input class="form-check-input" type="checkbox" name="Comp_584" value="1" id="Comp_584" />
                            <label class="form-check-label" for="Comp_584">
                            </label>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Question 2 -->
            <div class="row col-5">
                <div class="form-group">
                    <div class="col-8">
                        <p class="fw-bold">Comp 333 Concepts of Programming</p>
                    </div>
                    <div class="col">
                        <div class="form-group form-check form-check-inline mb-2">
                            <input class="form-check-input" type="checkbox" name="Comp_333" value="1" id="Comp_333" />
                            <label class="form-check-label" for="Comp_333">
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Question 3 -->
            <div class="row col-5">
                <div class="form-group">
                    <div class="col-8">
                        <p class="fw-bold">Comp 484 Web Engineering</p>
                    </div>
                    <div class="col">
                        <div class="form-group form-check form-check-inline mb-2">
                            <input class="form-check-input" type="checkbox" name="Comp_484" value="1" id="Comp_484" />
                            <label class="form-check-label" for="Comp_484">
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Question 4 -->
            <div class="row col-5">
                <div class="form-group">
                    <div class="col-8">
                        <p class="fw-bold">Comp 424 System Security</p>
                    </div>
                    <div class="col">
                        <div class="form-group form-check form-check-inline mb-2">
                            <input class="form-check-input" type="checkbox" name="Comp_424" value="1" id="Comp_424" />
                            <label class="form-check-label" for="Comp_424">
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Question 5 -->
            <div class="row col-5">
                <div class="form-group">
                    <div class="col-8">
                        <p class="fw-bold">Comp 583 Software Engineer Mngmt</p>
                    </div>
                    <div class="col">
                        <div class="form-group form-check form-check-inline mb-2">
                            <input class="form-check-input" type="checkbox" name="Comp_583" value="1" id="Comp_583" />
                            <label class="form-check-label" for="Comp_583">
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <div class="form-group">
                    <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            </form>

        </div>
        <x-footer/>

        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </body>

</html>