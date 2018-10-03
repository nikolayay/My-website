
<div id="app">
    <tabs>
        <tab selected="true" name="About">
            <div class="hero-body">
              <div class="container has-text-centered">
                <div class="slideDown">

                    <h1 class="title">
                      Hi, my name is Nikolay <small style="font-size: 10px">(pronounce Nikolai)</small>
                    </h1>

                    <h2 class="subtitle">
                      I`m a developer and a CS student at the <a href="#">University of Bristol.</a>
                      <br>
                      If you want a website I can make it for you.
                    </h2>
                    
                </div>

                <br>

                <div class="slideUp">
                    <h4>
                        Here is a picture of me...
                    </h4>

                    <div class="columns is-centered is-mobile">
                        <div class="column is-flex" style="justify-content: space-around;">
                            <figure class="image is-256x256">

                                <img class="slideUp" style="width: 300px; border: 3px solid white" src="/images/me.jpg">
                                
                            </figure>
                        </div>
                    </div>
                </div>


              </div>
            </div>
        </tab>
        <tab name="My Work">
           <div class="hero-body">
                <div class="container has-text-centered">
                    <div class="columns is-centered is-mobile">
                        @if($projects->count() > 0)
                        @foreach($projects as $project)
                        <div class="column fadeIn">
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
                        @else
                        <h3>
                            I have no projects that are good enough to be a part of this.
                        </h3>
                        @endif
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
                                <button class="button is-light is-rounded slideRight">
                                    <i class="zmdi zmdi-email"></i>
                                </button>
                            </a>
                        </div>
                        
                        <div class="column is-narrow">
                            <a href="https://twitter.com/tweeetolay">
                                <button class="button is-light is-rounded slideUp">
                                    <i class="zmdi zmdi-twitter"></i>
                                </button>
                            </a>
                        </div>

                        <div class="column is-narrow">
                            <a href="https://github.com/nikolayay">
                                <button class="button is-light is-rounded slideLeft">
                                    <i class="zmdi zmdi-github"></i>
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
