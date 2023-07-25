<section style="height: 93vh;">
    <div class="container-fluid mt-5">
        <div class="row justify-content-center align-items-center mt-5">
            <div class="col-lg-12 col-12">
                <div class="container mt-2">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="fb-profile-block">
                                <div class="fb-profile-block-thumb img-fluid"><img src="img/userimages/{{$users->background}}" alt="img/userimages/{{$users->altbg}}" class="img-fluid cover-container" /></div>
                                <div class="profile-img">
                                    <a href="#">
                                        <img class="img-fluid" src="img/userimages/{{$users->images}}" alt="{{$users->alt}}">
                                    </a>
                                </div>
                                <div class="profile-name">
                                    <h2>{{ $users->name }}</h2>
                                </div>
                                <div class="fb-profile-block-menu">
                                    <div class="block-menu">
                                        <ul>
                                            <li><a href="#">Timeline</a></li>
                                            <li><a href="#">about</a></li>
                                            <li><a href="#">Follower</a></li>
                                            <li><a href="#">Photos</a></li>
                                        </ul>
                                    </div>
                                    <div class="block-menu">
                                        <ul>
                                            <li><a href="#">Timeline</a></li>
                                            <li><a href="#">about</a></li>
                                            <li><a href="#">Follower</a></li>
                                            <li><a href="#">Photos</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card-body p-4 text-black">
                                <div class="mb-5">
                                    <p class="lead fw-normal mb-1">About{{ $users->name }}</p>
                                    <div class="p-4" style="background-color: #f8f9fa;">
                                        <p class="font-italic mb-1">{{ $users->about }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>