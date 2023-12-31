<section id="explore">
    <div class="container mt-5 mb-5">
        <div class="padding-height">
            <h1 class="fw-bolder text-center">Explore</h1>
            <div class="line"></div>
            <p class="display-6 fs-6 text-center">Support hundreds of Filipino creators and artist-or <a href="/registration">be a creator yourself</a></p>
        </div>
        <div class="container">
            <div class=" d-flex justify-content-center mt-5 mb-5">
                <form>
                    <div class="input-field">
                        <input placeholder="Search Creator" name="query" class="form-controll p-2" />
                        <button class="btn btn1"><i class="bi bi-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row g-2">
            @foreach ($user as $users)
            <div class="col-lg-3 col-6">
                <div class="team">
                    <a href="/userprofile/{{$users -> name}}" class="text-decoration-none text-dark">
                        <div class="card profile-card">
                            <div class="background-block">
                                <img src="img/userimages/{{$users->background}}" alt="img/userimages/{{$users->altbg}}" class="background" />
                            </div>
                            <div class="profile-thumb-block">
                                <img src="img/userimages/{{$users->images}}" alt="{{$users->alt}}" class="profile img-fluid" />
                            </div>
                            <div class="card-content">
                                <h2>{{ $users->name }}<small>{{ $users->about }}</small></h3>
                                    <div class="icon-block">
                                        <a href="{{$users->link}}"><i class="bi bi-facebook"></i>
                                        </a>
                                        <a href="{{$users->link2}}"><i class="bi bi-instagram"></i>
                                        </a>
                                    </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</section>