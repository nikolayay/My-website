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