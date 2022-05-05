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
            <!-- Question 1 -->
            <div class="row col-5 form-check-inline">
                <div class="form-group">
                    <div class="col-8">
                        <p class="fw-bold">Comp 584 Adv Web Engineering</p>
                    </div>
                    <div class="col-5">
                        <div class="form-group form-check mb-2">
                            <input class="form-check-input" type="checkbox" name="Comp_584" value="1" id="Comp_584" />
                            <label class="form-check-label" for="Comp_584">Enroll
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
                            <label class="form-check-label" for="Comp_333">Enroll
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
                            <label class="form-check-label" for="Comp_484">Enroll
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
                            <label class="form-check-label" for="Comp_424">Enroll
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
                            <label class="form-check-label" for="Comp_583">Enroll
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

        <!-- everything under this is test -->
        <div>Name: <strong><span class="name"></span></strong></div>
        <div>Weight: <strong><span class="weight"></span> pounds</strong></div>
        <div>Happiness: <strong><span class="happiness"></span> tail wags (per min)</strong></div>
        <div>Money: <strong><span class="money"></span> dollars</strong></div>
        <div class="button-container">
          <button class="treat-button" onclick="displayMessage1()">
            Treat
          </button>
          <button class="play-button" onclick="displayMessage2()">
            Play
          </button>
          <button class="exercise-button" onclick="displayMessage3()">
            Exercise
          </button>
          <button class="work-button" onclick="displayMessage4()">
            Work
          </button>
        </div>
        </section>
        Your pet says:
      <div id="message1">
        Thank you!
      </div>
      <div id="message2">
        So fun!
      </div>
      <div id="message3">
        So tired...
      </div>
      <div id="message4">
        money money money
      </div>
      <section class="test-area">
            <div id="origin-text">
                <p>Type this text EXACTLY.</p>
            </div><!-- #origin-text -->

            <div class="test-wrapper">
                <textarea id="test-area" name="textarea" rows="6" placeholder="The clock starts when you start typing."></textarea>
            </div><!-- .test-wrapper -->

            <div class="meta">
                <section id="clock">
                    <div class="timer">00:00:00</div>
                </section>
                <div id="btnFormat">
                <button id="reset">Start over</button>
                </div>
            </div>
        </section> <!-- .test-area -->
            <article class="intro">
                <h2><center>Results</center></h2>
                <p>Total Words: <strong id="wordcount">---</strong></p>
                <p>Total Errors: <strong id="errors">---</strong></p>
                <p>Words per minute: <strong id="wpm">---</strong></p>
                <p>Accuracy: <strong id="accuracy">---</strong></p>
                <p>Accuracy High Scores:</p>
                <p>1: Acc: <strong id="score1">---</strong> Time: <strong id="time1">---</strong></p>
                <p>2: Acc: <strong id="score2">---</strong> Time: <strong id="time2">---</strong></p>
                <p>3: Acc: <strong id="score3">---</strong> Time: <strong id="time3">---</strong></p>
            </article> 
            </div>
            <h2>
          What is Naruto?
        </h2>
        
        <p>
          Naruto is a Japanese manga series written and illustrated by Masashi Kishimoto. It was later adapted into an animated show which was dubbed into English and aired from 2005-2009 on Adult Swim.
        </p>
      </header>
      <section><!--section explaining the premise-->
        <h2>
          What is it about?
        </h2>
        <img src="https://cdn.glitch.com/320e533d-2f61-4633-8fee-86fb20d1a4bc%2FAllied_Forces_Jutsu.png?v=1632958689158" alt="NarutoThumb" width="480" height="300">
        <p>
          It is about Ninja wizards essentially. The show follows the adventures of Naruto Uzumaki, a boy who is determined to become a Hokage, the ninja in his village who is acknowledged as the leader and the strongest of them all. Along the way he gets into all sorts of shenanigans and saves his village from villians of escalating power.
        </p> 
        
      </section>
      <section><!--section explaining the setting-->
        <h2>
          What is the setting?
        </h2>
        <img src="https://cdn.glitch.com/320e533d-2f61-4633-8fee-86fb20d1a4bc%2FNarutoMap.jpg?v=1632958855989" alt="NarutoThumb" width="480" height="300" class="flowLeft">
        <p>
          Naruto takes place in an alternate world that is technologically different from our own. The series centers on a single continent divided between several kingdoms. They are the Land of Fire, the Land of Earth, the Land of Iron, the Land of Lightning, the Land of Sound, the Land of Water, and the Land of Wind. The series takes place mostly in the Land of Fire in the hidden ninja village Konohagakure.
        </p>
        <img src="https://cdn.glitch.com/320e533d-2f61-4633-8fee-86fb20d1a4bc%2FLeafVillage.jpg?v=1632899136035" alt="NarutoThumb" width="480" height="320" class="flowRight">
        <br><h4>
          The Village Hidden in the Leaves
        </h4>
        
        <p>
          The Village Hidden in the Leaves, the Hidden Leaf Village, or Konohagakure, is the main setting of the series. As the village of one of the Five Great Shinobi Countries, Konohagakure has a Kage as its leader known as the Hokage, of which there have been seven in its history. Konoha resides deep within a forest at the base of a mountain known as the Hokage Rock, which has the faces of all those who have taken the office of Hokage engraved on it.It is surrounded on all sides by enormous walls. While generally seen as the most powerful of the ninja villages, Konoha has enjoyed many years of relative peace and stability.
        </p>
        
      </section>
      <section><!--section explaining what shinobi are-->
        <h2>
          What is a shinobi?
        </h2>
        <img src="https://cdn.glitch.com/320e533d-2f61-4633-8fee-86fb20d1a4bc%2FShinobi.png?v=1632900591066" alt="Shinobi" width="480" height="200" class="flowLeft">
        <p>
          Interchangeably referred to as ninja, are the primary focus and the main military power in the series. A female ninja is known as a kunoichi. Most come from a hidden village, of which some come from specialised ninja clans, and will perform missions for a fee. These missions can include: doing manual labour, acting as escorts, gathering secret information, retrieving stolen items, carrying out assassinations, etc. In times of war, ninja will come together to defend their villages and land. The clearest characteristic of a shinobi is their ability to manipulate chakra to use techniques.
        </p>
        <!-- everything above this is test -->

        </div>
        <x-footer/>

        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </body>

</html>