@extends('layouts.main')


@section('full')
{{-- <div class="row justify-content-center">
    <div class="col-md-5">
      @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('success')}}
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

      @if(session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{session('loginError')}}
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

        <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
            <form action="/login" method="post">
              @csrf
              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{old('email')}}">
                <label for="email">Email address</label>
                @error('email')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                <label for="password">Password</label>
              </div>
          
              <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            </form>
            <small class="d-block text-center mt-3">
                Not Registered? <a href="/register">Register Now!</a>
            </small>
          </main>
    </div>
</div>  --}}

<div class="row justify-content-center">
  <div class="col-md-5 error">
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{session('success')}}
       <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if(session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{session('loginError')}}
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
  </div>
</div>


<section id="login-page">
  <div class="login">
<div class="wave">
  <svg width="100%" height="100%" id="svg" viewBox="0 0 1440 400" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150"><style>
    .path-0{
      animation:pathAnim-0 4s;
      animation-timing-function: linear;
      animation-iteration-count: infinite;
    }
    @keyframes pathAnim-0{
      0%{
        d: path("M 0,400 C 0,400 0,133 0,133 C 122.45933014354068,144.83732057416267 244.91866028708137,156.67464114832538 334,165 C 423.08133971291863,173.32535885167462 478.78468899521533,178.13875598086125 550,160 C 621.2153110047847,141.86124401913875 707.9425837320574,100.77033492822967 821,87 C 934.0574162679426,73.22966507177033 1073.4449760765551,86.7799043062201 1181,99 C 1288.5550239234449,111.2200956937799 1364.2775119617224,122.11004784688996 1440,133 C 1440,133 1440,400 1440,400 Z");
      }
      25%{
        d: path("M 0,400 C 0,400 0,133 0,133 C 106.82296650717703,113.7464114832536 213.64593301435406,94.49282296650719 305,103 C 396.35406698564594,111.50717703349281 472.23923444976083,147.77511961722487 561,153 C 649.7607655502392,158.22488038277513 751.3971291866028,132.4066985645933 850,132 C 948.6028708133972,131.5933014354067 1044.1722488038279,156.5980861244019 1142,161 C 1239.8277511961721,165.4019138755981 1339.9138755980862,149.20095693779905 1440,133 C 1440,133 1440,400 1440,400 Z");
      }
      50%{
        d: path("M 0,400 C 0,400 0,133 0,133 C 130.8421052631579,111.40191387559808 261.6842105263158,89.80382775119617 341,83 C 420.3157894736842,76.19617224880383 448.1052631578948,84.1866028708134 523,85 C 597.8947368421052,85.8133971291866 719.8947368421052,79.44976076555022 842,90 C 964.1052631578948,100.55023923444978 1086.3157894736842,128.01435406698565 1186,138 C 1285.6842105263158,147.98564593301435 1362.842105263158,140.49282296650716 1440,133 C 1440,133 1440,400 1440,400 Z");
      }
      75%{
        d: path("M 0,400 C 0,400 0,133 0,133 C 87.73205741626793,117.79425837320574 175.46411483253587,102.58851674641149 282,111 C 388.53588516746413,119.41148325358851 513.8755980861245,151.4401913875598 611,162 C 708.1244019138755,172.5598086124402 777.0334928229664,161.65071770334927 875,157 C 972.9665071770336,152.34928229665073 1099.9904306220096,153.95693779904306 1199,151 C 1298.0095693779904,148.04306220095694 1369.0047846889952,140.52153110047846 1440,133 C 1440,133 1440,400 1440,400 Z");
      }
      100%{
        d: path("M 0,400 C 0,400 0,133 0,133 C 122.45933014354068,144.83732057416267 244.91866028708137,156.67464114832538 334,165 C 423.08133971291863,173.32535885167462 478.78468899521533,178.13875598086125 550,160 C 621.2153110047847,141.86124401913875 707.9425837320574,100.77033492822967 821,87 C 934.0574162679426,73.22966507177033 1073.4449760765551,86.7799043062201 1181,99 C 1288.5550239234449,111.2200956937799 1364.2775119617224,122.11004784688996 1440,133 C 1440,133 1440,400 1440,400 Z");
      }
    }</style><defs><linearGradient id="gradient" x1="0%" y1="56%" x2="100%" y2="44%"><stop offset="5%" stop-color="#a99981"></stop><stop offset="95%" stop-color="#ff6900"></stop></linearGradient></defs><path d="M 0,400 C 0,400 0,133 0,133 C 122.45933014354068,144.83732057416267 244.91866028708137,156.67464114832538 334,165 C 423.08133971291863,173.32535885167462 478.78468899521533,178.13875598086125 550,160 C 621.2153110047847,141.86124401913875 707.9425837320574,100.77033492822967 821,87 C 934.0574162679426,73.22966507177033 1073.4449760765551,86.7799043062201 1181,99 C 1288.5550239234449,111.2200956937799 1364.2775119617224,122.11004784688996 1440,133 C 1440,133 1440,400 1440,400 Z" stroke="none" stroke-width="0" fill="url(#gradient)" fill-opacity="0.53" class="transition-all duration-300 ease-in-out delay-150 path-0"></path><style>
    .path-1{
      animation:pathAnim-1 4s;
      animation-timing-function: linear;
      animation-iteration-count: infinite;
    }
    @keyframes pathAnim-1{
      0%{
        d: path("M 0,400 C 0,400 0,266 0,266 C 71.11004784688996,248.48803827751198 142.2200956937799,230.97607655502392 248,231 C 353.7799043062201,231.02392344497608 494.22966507177046,248.58373205741628 593,252 C 691.7703349282295,255.41626794258372 748.8612440191388,244.68899521531102 828,235 C 907.1387559808612,225.31100478468898 1008.3253588516745,216.6602870813397 1114,222 C 1219.6746411483255,227.3397129186603 1329.8373205741627,246.66985645933016 1440,266 C 1440,266 1440,400 1440,400 Z");
      }
      25%{
        d: path("M 0,400 C 0,400 0,266 0,266 C 72.72727272727272,270.39234449760767 145.45454545454544,274.78468899521533 245,266 C 344.54545454545456,257.21531100478467 470.9090909090909,235.25358851674642 571,233 C 671.0909090909091,230.74641148325358 744.9090909090909,248.20095693779902 852,246 C 959.0909090909091,243.79904306220098 1099.4545454545455,221.94258373205741 1203,222 C 1306.5454545454545,222.05741626794259 1373.2727272727273,244.0287081339713 1440,266 C 1440,266 1440,400 1440,400 Z");
      }
      50%{
        d: path("M 0,400 C 0,400 0,266 0,266 C 120.48803827751195,276.77511961722485 240.9760765550239,287.55023923444975 329,288 C 417.0239234449761,288.44976076555025 472.58373205741634,278.57416267942585 549,277 C 625.4162679425837,275.42583732057415 722.6889952153109,282.1531100478469 824,270 C 925.3110047846891,257.8468899521531 1030.6602870813397,226.8133971291866 1134,223 C 1237.3397129186603,219.1866028708134 1338.6698564593303,242.59330143540672 1440,266 C 1440,266 1440,400 1440,400 Z");
      }
      75%{
        d: path("M 0,400 C 0,400 0,266 0,266 C 63.81818181818181,250.44019138755982 127.63636363636363,234.8803827751196 237,240 C 346.3636363636364,245.1196172248804 501.27272727272725,270.91866028708137 600,263 C 698.7272727272727,255.08133971291863 741.2727272727274,213.44497607655498 829,219 C 916.7272727272726,224.55502392344502 1049.6363636363635,277.30143540669854 1159,293 C 1268.3636363636365,308.69856459330146 1354.1818181818182,287.3492822966507 1440,266 C 1440,266 1440,400 1440,400 Z");
      }
      100%{
        d: path("M 0,400 C 0,400 0,266 0,266 C 71.11004784688996,248.48803827751198 142.2200956937799,230.97607655502392 248,231 C 353.7799043062201,231.02392344497608 494.22966507177046,248.58373205741628 593,252 C 691.7703349282295,255.41626794258372 748.8612440191388,244.68899521531102 828,235 C 907.1387559808612,225.31100478468898 1008.3253588516745,216.6602870813397 1114,222 C 1219.6746411483255,227.3397129186603 1329.8373205741627,246.66985645933016 1440,266 C 1440,266 1440,400 1440,400 Z");
      }
    }</style><defs><linearGradient id="gradient" x1="0%" y1="56%" x2="100%" y2="44%"><stop offset="5%" stop-color="#a99981"></stop><stop offset="95%" stop-color="#ff6900"></stop></linearGradient></defs><path d="M 0,400 C 0,400 0,266 0,266 C 71.11004784688996,248.48803827751198 142.2200956937799,230.97607655502392 248,231 C 353.7799043062201,231.02392344497608 494.22966507177046,248.58373205741628 593,252 C 691.7703349282295,255.41626794258372 748.8612440191388,244.68899521531102 828,235 C 907.1387559808612,225.31100478468898 1008.3253588516745,216.6602870813397 1114,222 C 1219.6746411483255,227.3397129186603 1329.8373205741627,246.66985645933016 1440,266 C 1440,266 1440,400 1440,400 Z" stroke="none" stroke-width="0" fill="url(#gradient)" fill-opacity="1" class="transition-all duration-300 ease-in-out delay-150 path-1"></path></svg>
</div>
<div class="container-login-page">
  <div class="img">
    <img src="assets/images/getting.svg">
  </div>
  <div class="login-content">
    <form action="/login" class="login-form" method="post">
      @csrf
      <img src="assets/images/avatar.svg">
      <h2 class="title">Welcome</h2>
             <div class="input-div one">
                <div class="icon-login">
                    <i class="fas fa-user"></i>
                </div>
                <div class="div-input">
                  <input type="email" name="email" class=" input  @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{old('email')}}">
                </div>
             </div>
             <div class="input-div pass">
                <div class="icon-login"> 
                   <i class="fas fa-lock"></i>
                </div>
                <div class="div-input">
                  <input type="password" name="password" class="input" id="password" placeholder="Password" required>
               </div>
            </div>
            <a href="#" class="forgot">Forgot Password?</a>
            <input type="submit" class="btn-login" value="Login">
          </form>
      </div>
  </div>
  <script type="text/javascript" src="js/main.js"></script>
</div>
</section> 

@endsection