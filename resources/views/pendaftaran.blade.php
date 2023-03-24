<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ $title }}</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
      rel="stylesheet"
    />
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"
    ></script>
    <style>
      ::-webkit-scrollbar {
        width: 8px;
      }
      /* Track */
      ::-webkit-scrollbar-track {
        background: #f1f1f1;
      }

      /* Handle */
      ::-webkit-scrollbar-thumb {
        background: #888;
      }

      /* Handle on hover */
      ::-webkit-scrollbar-thumb:hover {
        background: #555;
      } /* your CSS goes here*/
      body {
        background: #eee;
      }

      #regForm {
        background-color: #ffffff;
        margin: 0px auto;
        font-family: Raleway;
        padding: 40px;
        border-radius: 10px;
      }

      h1 {
        text-align: center;
      }

      input {
        padding: 10px;
        width: 100%;
        font-size: 17px;
        font-family: Raleway;
        border: 1px solid #aaaaaa;
      }

      input.invalid {
        background-color: #ffdddd;
      }

      .tab {
        display: none;
      }

      button {
        background-color: #4caf50;
        color: #ffffff;
        border: none;
        padding: 10px 20px;
        font-size: 17px;
        font-family: Raleway;
        cursor: pointer;
      }

      button:hover {
        opacity: 0.8;
      }

      #prevBtn {
        background-color: #bbbbbb;
      }

      .step {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbbbbb;
        border: none;
        border-radius: 50%;
        display: inline-block;
        opacity: 0.5;
      }

      .step.active {
        opacity: 1;
      }

      .step.finish {
        background-color: #4caf50;
      }

      .all-steps {
        text-align: center;
        margin-top: 30px;
        margin-bottom: 30px;
      }

      .thanks-message {
        display: none;
      }

      .container {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 12px;
        cursor: pointer;
        font-size: 22px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      /* Hide the browser's default radio button */

      .container input[type="radio"] {
        position: absolute;
        opacity: 0;
        cursor: pointer;
      }

      /* Create a custom radio button */

      .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 25px;
        width: 25px;
        background-color: #eee;
        border-radius: 50%;
      }

      /* On mouse-over, add a grey background color */

      .container:hover input ~ .checkmark {
        background-color: #ccc;
      }

      /* When the radio button is checked, add a blue background */

      .container input:checked ~ .checkmark {
        background-color: #2196f3;
      }

      /* Create the indicator (the dot/circle - hidden when not checked) */

      .checkmark:after {
        content: "";
        position: absolute;
        display: none;
      }

      /* Show the indicator (dot/circle) when checked */

      .container input:checked ~ .checkmark:after {
        display: block;
      }

      /* Style the indicator (dot/circle) */

      .container .checkmark:after {
        top: 9px;
        left: 9px;
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: white;
      }
    </style>
  </head>
  <body className="snippet-body">
    <div class="container mt-5">
      <div class="row d-flex justify-content-center align-items-center">
        <div class="all-steps" id="all-steps">
            <span class="step"></span> <span class="step"></span>
            <span class="step"></span> <span class="step"></span>
          </div>
        <div class="col-md-12">
          <form id="regForm" method="post" action="/simpanPendaftaran">
            @csrf
            <h1 id="register">FORMULIR APL 01</h1>
            <hr>
            <div class="tab">
                <h5 style="text-align: center;"><strong>Data Mahasiswa</strong></h5>
              <label style="font-size: medium">NIM*:</label>
              <input
                type="text"
                class="form-control"
                name="nim"
                placeholder="Masukkan NIM . . . ."
              />
              <br />

            </div>
            <div class="tab">
                <h5 style="text-align: center;"><strong>Pekerjaan</strong></h5>
              <label style="font-size: medium">Nama Perusahaan/Lembaga*:</label>
              <input
                type="text"
                class="form-control"
                name="namaPerusahaan"
                placeholder="Masukkan Nama Perusahaan/Lembaga . . . ."
              />
              <label style="font-size: medium">Jabatan*:</label>
              <input
                type="text"
                class="form-control"
                name="jabatan"
                placeholder="Masukkan Jabatan . . .  ."
              />
              <label style="font-size: medium">Alamat*:</label>
              <input
                type="text"
                class="form-control"
                name="alamatPerusahaan"
                placeholder="Masukkan Alamat . . . ."
              />
              <label style="font-size: medium">No. Telp*:</label>
              <input
                type="text"
                class="form-control"
                name="telp"
                placeholder="Masukkan No. Telp . . . ."
              />
              <label style="font-size: medium">Email*:</label>
              <input
                type="text"
                class="form-control"
                name="email"
                placeholder="Masukkan Email . . . ."
              />
              <br />
            </div>
            <div class="tab">
                <h5 style="text-align: center;"><strong>Tujuan Asesmen:</strong></h5>
              <label style="font-size: medium">Tujuan Asesmen*:</label>
              <label class="container" style="font-size: medium"
                >Sertifikasi
                <input type="radio" value="Sertifikasi" name="tujuanAsesmen" />
                <span class="checkmark"></span>
              </label>
              <label class="container"  style="font-size: medium"
                >Sertifikasi Ulang
                <input type="radio" value="Sertifikasi Ulang" name="tujuanAsesmen" />
                <span class="checkmark"></span>
              </label>
              <label class="container" style="font-size: medium"
                >Pengakuan Kompetensi Terkini
                <input type="radio" value="Pengakuan Kompetensi Terkini" name="tujuanAsesmen" />
                <span class="checkmark"></span>
              </label>
              <label class="container" style="font-size: medium"
                >Rekognisi Pembelajaran Lampau
                <input type="radio" value="Rekognisi Pembelajaran Lampau" name="tujuanAsesmen" />
                <span class="checkmark"></span>
              </label>
              <label class="container" style="font-size: medium"
                >Lainnya
                <input type="radio" value="Lainnya" checked name="tujuanAsesmen" />
                <span class="checkmark"></span>
              </label>
              <label style="font-size: medium">Skema Sertifikasi*:</label>
              <select name="skema" class="form-control" id="" placeholder="Pilih Skema Sertifikasi">
                <option value="" disabled selected>Pilih Skema Sertifikasis</option>
                @foreach ($skema as $data)
                    <option value="{{ $data->id }}">{{ $data->nama }}</option>
                @endforeach
              </select>
              <br>
            </div>
            <div class="tab">
                <p>Apakah Kamu Yakin Data yang kamu isi telah benar? Jika sudah Silahkan Tekan Submit</p>
            </div>
            <div style="overflow: auto" id="nextprevious">
              <div style="float: right">
                <button type="button" id="prevBtn" onclick="nextPrev(-1)">
                  Previous
                </button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)">
                  Next
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    ></script>
    <script type="text/javascript" src="#"></script>
    <script type="text/javascript" src="#"></script>
    <script type="text/javascript" src="#"></script>
    <script type="text/javascript">
      //your javascript goes here
      var currentTab = 0;
      document.addEventListener("DOMContentLoaded", function (event) {
        showTab(currentTab);
      });

      function showTab(n) {
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        if (n == 0) {
          document.getElementById("prevBtn").style.display = "none";
        } else {
          document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == x.length - 1) {
          document.getElementById("nextBtn").innerHTML = "Submit";
        } else {
          document.getElementById("nextBtn").innerHTML = "Next";
        }
        fixStepIndicator(n);
      }

      function nextPrev(n) {
        var x = document.getElementsByClassName("tab");
        if (n == 1 && !validateForm()) return false;
        x[currentTab].style.display = "none";
        currentTab = currentTab + n;
        if (currentTab >= x.length) {
          document.getElementById("regForm").submit();
          return true;
          //alert("sdf");
          document.getElementById("nextprevious").style.display = "none";
          document.getElementById("all-steps").style.display = "none";
          document.getElementById("register").style.display = "none";
          document.getElementById("text-message").style.display = "block";
        }
        showTab(currentTab);
      }

      function validateForm() {
        var x,
          y,
          i,
          valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        for (i = 0; i < y.length; i++) {
          if (y[i].value == "") {
            y[i].className += " invalid";
            valid = false;
          }
        }
        if (valid) {
          document.getElementsByClassName("step")[currentTab].className +=
            " finish";
        }
        return valid;
      }

      function fixStepIndicator(n) {
        var i,
          x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
          x[i].className = x[i].className.replace(" active", "");
        }
        x[n].className += " active";
      }
    </script>
    <script type="text/javascript">
      var myLink = document.querySelector('a[href="#"]');
      myLink.addEventListener("click", function (e) {
        e.preventDefault();
      });
    </script>
  </body>
</html>
