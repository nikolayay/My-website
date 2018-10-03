
<div id="app">
    <tabs>
        <tab selected="true" name="About">
            <div class="hero-body">
              <div class="container has-text-centered">
                <h1 class="title">
                  Hi, my name is Nik.
                </h1>

                <h2 class="subtitle">
                  I am a developer and a CS student at the University of Bristol.
                </h2>

                <h2 class="subtitle">
                  Here is a picture of me.
                </h2>

                <div class="columns is-centered is-mobile">
                    <div class="column is-flex" style="justify-content: space-around;">
                        <figure class="image is-256x256">

                            <img style="width: 300px" src="/images/me.jpg">
                            
                        </figure>
                    </div>
                </div>


              </div>
            </div>
        </tab>
        <tab name="My Work">
           <div class="hero-body">
                <div class="container has-text-centered">
                    <div class="columns is-centered is-mobile">
                        @foreach($projects as $project)
                        <div class="column">
                            <div class="card">
                                <div class="card-content">
                                    <div class="media">
                                        <div class="media-content" >
                                            <h1 style="color:#4a4a4a" class="title is-4">{{$project->title}}</h1>
                                        </div>
                                    </div>

                                    <div class="content">{{$project->description}}</div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </tab>

        <tab name="Contact">
           <div class="hero-body">
              <div class="container has-text-centered">
                <h1 class="title">
                    Let`s talk!
                </h1>
                <h2 class="subtitle">

                    <div class="columns is-centered is-mobile">
                        <div class="column is-narrow">
                            <a href="mailto:alexandroff.nikolay05@gmail.com?Subject=Hi,%20Nikolay!">
                                <button class="button is-light is-rounded">
                                    <i class="zmdi zmdi-email"></i>
                                </button>
                            </a>
                        </div>
                        <div class="column is-narrow">
                            <a href="https://twitter.com/tweeetolay">
                                <button class="button is-light is-rounded">
                                    <i class="zmdi zmdi-twitter"></i>
                                </button>
                            </a>
                        </div>


                    </div>

                </h2>
              </div>
            </div>
        </tab>

    </tabs>
  
</div>
