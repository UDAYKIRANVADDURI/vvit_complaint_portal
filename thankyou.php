<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Maroon Thank You Example</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />
  <style>
    /* Custom CSS to change color to maroon and add shadows */
    body{
      background-color: rgb(186, 186, 186);
    }
    .border-maroon {
      border-color: #800000; /* Maroon color */
    }

    .text-maroon {
      color: #800000; /* Maroon color */
    }

    .btn-outline-maroon {
      border-color: #800000; /* Maroon color */
      color: #800000; /* Maroon color */
    }

    .btn-outline-maroon:hover {
      border-color: #800000; /* Maroon color */
      color: #fff; /* White color on hover */
      background-color: #800000; /* Maroon background on hover */
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); /* Adding shadow on hover */
    }

    .card {
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.2); /* Adding shadow to the card */
    }
  </style>
</head>

<body>
  <div class="vh-100 d-flex justify-content-center align-items-center">
    <div class="col-md-4">
      <div class="border border-3 border-maroon"></div>
      <div class="card bg-white shadow p-5">
        <div class="mb-4 text-center">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="text-maroon"
            width="75"
            height="75"
            fill="currentColor"
            class="bi bi-check-circle"
            viewBox="0 0 16 16"
          >
            <path
              d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"
            />
            <path
              d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"
            />
          </svg>
        </div>
        <div class="text-center">
          <h1 class="text-maroon">Thank You!</h1>
          <p>
            your complaint will be resolved soon! For more details visit <a href="https://www.vvitguntur.com/" class="text-maroon">VVIT</a>
          </p>
          <button class="btn btn-outline-maroon" onclick="return location.href='index.php'">Back Home</button>
        </div>
      </div>
    </div>
  </div>
</body>
</html>