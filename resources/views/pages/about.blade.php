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
          <p class="text-center text-about">Website ini merupakan sebuah website yang melayani penjualan berbagai macam
            jenis dam
            merek sembako yang dibutuhkan oleh masyarakat setiap harinya. penjualan dilakukan dengan cara dalam jaringan
            mengingat penyebaran virus korona yang belum juga untuk berhenti. dengan adanya website ini diharapkan dapat
            membantu masyarakat untuk memenuhi kebutuhan sembakonya dengan tidak melanggar protokol kesehatan yang
            berlaku.
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
            <img src="{{ url('images/profil_nuha.png') }}" class="card-img-top" alt="...">
            <div class="card-header text-center">
              Backend Dev
            </div>
            <div class="card-body ">
              <h5 class="card-title">Alwan Nuha Zaki Fadilah</h5>
              <div class="profile_data">
                <table style="width:100%">
                  <tr>
                    <th>NIM</th>
                    <th>:</th>
                    <td>K3519010</td>
                  </tr>
                  <tr>
                    <th>Kelas</th>
                    <th>:</th>
                    <td>B</td>
                  </tr>
                  <tr>
                    <th>Prodi</th>
                    <th>:</th>
                    <td>PTIK 2019</td>
                  </tr>
                  <tr>
                    <th>Carrer Level</th>
                    <th>:</th>
                    <td>Pro Player</td>
                  </tr>
                </table>
              </div>
              <div class="mt-2">
                <a href="{{ url('https://github.com/fahmih678') }}" class=""><button
                    class="btn btn-dark align-middle"><svg class="" xmlns="http://www.w3.org/2000/svg" width="16"
                      height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                      <path
                        d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                    </svg> anhzf</button></a>
              </div>
            </div>
          </div>
        </div>
        {{-- profile 2 --}}
        <div class="col-md-auto" data-aos="fade-up">
          <div class="card text-white bg-primary mb-3" style="width: 18rem;">
            <img src="{{ url('/images/profil_fahmi.png') }}" class="card-img-top rounded-5" alt="...">
            <div class="card-header text-center">
              Frontend Dev
            </div>
            <div class="card-body">
              <h5 class="card-title text-center">Ramadhan Fahmi Habibi</h5>
              <div class="profile_data">
                <table style="width:100%">

                  <tr>
                    <th>NIM</th>
                    <th>:</th>
                    <td>K3519070</td>
                  </tr>
                  <tr>
                    <th>Kelas</th>
                    <th>:</th>
                    <td>B</td>
                  </tr>
                  <tr>
                    <th>Prodi</th>
                    <th>:</th>
                    <td>PTIK 2019</td>
                  </tr>
                  <tr>
                    <th>Carrer Level</th>
                    <th>:</th>
                    <td>Begginer</td>
                  </tr>
                </table>
              </div>
              <div class="mt-2">

                <a href="{{ url('https://github.com/fahmih678') }}" class=""><button
                    class="btn btn-dark align-middle"><svg class="" xmlns="http://www.w3.org/2000/svg" width="16"
                      height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                      <path
                        d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                    </svg> fahmih678</button></a>
              </div>
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
                    <th>NIM</th>
                    <th>:</th>
                    <td>K3519035</td>
                  </tr>
                  <tr>
                    <th>Kelas</th>
                    <th>:</th>
                    <td>A</td>
                  </tr>
                  <tr>
                    <th>Prodi</th>
                    <th>:</th>
                    <td>PTIK 2019</td>
                  </tr>
                  <tr>
                    <th>Carrer Level</th>
                    <th>:</th>
                    <td>Pro Player</td>
                  </tr>
                </table>
              </div>
              <div class="mt-2">

                <a href="{{ url('https://github.com/hamidy') }}" class=""><button class="btn btn-dark align-middle"><svg
                      class="" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-github" viewBox="0 0 16 16">
                      <path
                        d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                    </svg> hamidy</button></a>
              </div>
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
                    <th>NIM</th>
                    <th>:</th>
                    <td>K3519009</td>
                  </tr>
                  <tr>
                    <th>Kelas</th>
                    <th>:</th>
                    <td>A</td>
                  </tr>
                  <tr>
                    <th>Prodi</th>
                    <th>:</th>
                    <td>PTIK 2019</td>
                  </tr>
                  <tr>
                    <th>Carrer Level</th>
                    <th>:</th>
                    <td>Pro Player</td>
                  </tr>
                </table>
              </div>
              <div class="mt-2">

                <a href="{{ url('https://github.com/alvink') }}" class=""><button class="btn btn-dark align-middle"><svg
                      class="" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-github" viewBox="0 0 16 16">
                      <path
                        d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                    </svg> alvink</button></a>
                {{-- <a href="" class="btn btn-light">Go</a> --}}
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- Footer -->
  {{-- <section class="footer section">
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

  </section> --}}
</div>
@endsection
