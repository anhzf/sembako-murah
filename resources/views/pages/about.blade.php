@extends('layouts.about')

@push('style')

@endpush
<style>
  ul {
    list-style: none;
    padding-inline-start: 0px;
  }

  * {
    /* box-sizing: border-box; */
  }

  .section {
    padding: 4rem 0 3rem;
  }

  /* Footer */
  .footer {
    background-color: darkslateblue;
  }

  .footer_title {
    font-size: 1rem;
    color: lightslategray;
    margin-bottom: 1rem;
  }

  .footer_link {
    padding: .25rem 0;
    color: blanchedalmond;
    font-size: .900rem;
  }

  .footer_link:hover {
    color: whitesmoke;
  }

  .footer_social {
    font-size: 1.4rem;
    margin-right: .5rem;
    color: blanchedalmond;
  }

  .footer_social:hover {
    color: lightgray;
  }

</style>
@section('content')
  {{-- Page Content --}}
  <div class="page-content page-home">

    {{-- Welcoming --}}
    <section class="about-web">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-auto" data-aos="fade-up">
            <h2>About Web</h2>
          </div>
        </div>
      </div>
    </section>
    {{-- Webpage --}}
    <section class="about-web section">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-auto" data-aos="fade-up">
            <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi molestias sequi hic
              officiis quos ex eum
              fugit? Doloremque, commodi. Illo harum id provident ad nemo blanditiis mollitia deserunt fugiat repellat.
            </p>
          </div>
        </div>
      </div>
    </section>

    {{-- About Developer --}}
    <section class="About-developer">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-auto" data-aos="fade-up">
            <h2>About Developer</h2>
          </div>
        </div>
      </div>
    </section>


    <!-- Profile -->
    <section class="profile section" id="profile">
      <div class="container">
        <div class="row justify-content-md-center">
          {{-- profile 1 --}}
          <div class="col-md-auto" data-aos="fade-up">

            <div class="card text-white bg-secondary mb-3" style="width: 18rem;">
              <img src="{{ url('/images/user_pc.svg') }}" class="card-img-top" alt="...">
              <div class="card-header text-center">
                Backend Dev
              </div>
              <div class="card-body ">
                <h5 class="card-title">Alwan Nuha Zaki Fadilah</h5>
                <div class="profile_data">
                  <table style="width:100%">
                    <tr>
                      <th>Age</th>
                      <th>:</th>
                      <td>20 year old</td>
                    </tr>
                    <tr>
                      <th>Location</th>
                      <th>:</th>
                      <td>Java, Indonesia</td>
                    </tr>
                    <tr>
                      <th>Experience</th>
                      <th>:</th>
                      <td>2 year</td>
                    </tr>
                    <tr>
                      <th>Carrer Level</th>
                      <th>:</th>
                      <td>Beginner</td>
                    </tr>
                  </table>
                </div>
                <a href="#" class="btn btn-dark">Go somewhere</a>
              </div>
            </div>
          </div>
          {{-- profile 2 --}}
          <div class="col-md-auto" data-aos="fade-up">
            <div class="card text-white bg-primary mb-3" style="width: 18rem;">
              <img src="{{ url('/images/user_pc.svg') }}" class="card-img-top" alt="...">
              <div class="card-header text-center">
                Frontend Dev
              </div>
              <div class="card-body">
                <h5 class="card-title text-center">Ramadhan Fahmi Habibi</h5>
                <div class="profile_data">
                  <table style="width:100%">

                    <tr>
                      <th>Age</th>
                      <th>:</th>
                      <td>20 year old</td>
                    </tr>
                    <tr>
                      <th>Location</th>
                      <th>:</th>
                      <td>Java, Indonesia</td>
                    </tr>
                    <tr>
                      <th>Experience</th>
                      <th>:</th>
                      <td>2 year</td>
                    </tr>
                    <tr>
                      <th>Carrer Level</th>
                      <th>:</th>
                      <td>Beginner</td>
                    </tr>
                  </table>
                </div>
                <a href="#" class="btn btn-dark">Go somewhere</a>
              </div>
            </div>
          </div>
          {{-- profile 3 --}}
          <div class="col-md-auto" data-aos="fade-up">
            <div class="card text-white bg-warning mb-3" style="width: 18rem;">
              <img src="{{ url('/images/user_pc.svg') }}" class="card-img-top" alt="...">
              <div class="card-header text-center">
                Design UI/UX
              </div>
              <div class="card-body">
                <h5 class="card-title text-center">Hamid Yahya</h5>
                <div class="profile_data">
                  <table style="width:100%">

                    <tr>
                      <th>Age</th>
                      <th>:</th>
                      <td>20 year old</td>
                    </tr>
                    <tr>
                      <th>Location</th>
                      <th>:</th>
                      <td>Java, Indonesia</td>
                    </tr>
                    <tr>
                      <th>Experience</th>
                      <th>:</th>
                      <td>2 year</td>
                    </tr>
                    <tr>
                      <th>Carrer Level</th>
                      <th>:</th>
                      <td>Beginner</td>
                    </tr>
                  </table>
                </div>
                <a href="#" class="btn btn-dark">Go somewhere</a>
              </div>
            </div>
          </div>
          {{-- profile 4 --}}
          <div class="col-md-auto" data-aos="fade-up">
            <div class="card text-white bg-info mb-3" style="width: 18rem;">
              <img src="{{ url('/images/user_pc.svg') }}" class="card-img-top" alt="...">
              <div class="card-header text-center">UI Designer</div>
              <div class="card-body">
                <h5 class="card-title text-center">Alvin Kurniawan</h5>
                <div class="profile_data">
                  <table style="width:100%">
                    <tr>
                      <th>Age</th>
                      <th>:</th>
                      <td>20 year old</td>
                    </tr>
                    <tr>
                      <th>Location</th>
                      <th>:</th>
                      <td>Java, Indonesia</td>
                    </tr>
                    <tr>
                      <th>Experience</th>
                      <th>:</th>
                      <td>2 year</td>
                    </tr>
                    <tr>
                      <th>Carrer Level</th>
                      <th>:</th>
                      <td>Beginner</td>
                    </tr>
                  </table>
                </div>
                <a href="#" class="btn btn-dark">Go somewhere</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- Footer -->
    <section class="footer section">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-12">
            <h2 class="footer_title">Major Dhan</h2>
            <p class="footer_link">I'm Major Dhan and this is my personal website</p>
          </div>

          <div class="col-lg-4 col-sm-12">
            <h2 class="footer_title">Explorer</h2>
            <ul>
              <li><a href="#home" class="footer_link">Home</a></li>
              <li><a href="#profile" class="footer_link">Profile</a></li>
              <li><a href="#education" class="footer_link">Education</a></li>
              <li><a href="#organitaion" class="footer_link">Organitaion</a></li>
              <li><a href="#skills" class="footer_link">Skills</a></li>
              <li><a href="#experience" class="footer_link">Experience</a></li>
              <li><a href="#portofolio" class="footer_link">Portofolio</a></li>
              <li><a href="#contact" class="footer_link">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-sm-12">
            <h2 class="footer_title">Follow</h2>
            <a href="#" class="footer_social"><i class='bx bxl-facebook-circle'></i></a>
            <a href="#" class="footer_social"><i class='bx bxl-github'></i></a>
            <a href="#" class="footer_social"><i class='bx bxl-youtube'></i></a>
          </div>
        </div>

    </section>
  </div>
@endsection
