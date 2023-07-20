<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="fb-profile-block">
                <div class="fb-profile-block-thumb cover-container"></div>
                <div class="profile-img">
                    <a href="#">
                        <img src="img/{{$u->images}}" alt="profile pic">
                    </a>
                </div>
                <div class="profile-name">
                    <h2>{{ $u->name }}</h2>
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
              <p class="lead fw-normal mb-1">About</p>
              <div class="p-4" style="background-color: #f8f9fa;">
                <p class="font-italic mb-1">{{ $u->about }}</p>
              </div>
            </div>
            </div>
        </div>
    </div>
</div>