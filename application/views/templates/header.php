<!DOCTYPE html>
<!-- saved from url=(0052)https://getbootstrap.com/docs/5.2/examples/pricing/# -->
<html lang="en">

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="">
   <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
   <meta name="generator" content="Hugo 0.104.2">
   <title>19081010102 · UTS Framework</title>

   <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/pricing/">

   <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" integrity=""
      crossorigin="anonymous">

   <script src="https://code.jquery.com/jquery-3.6.0.slim.js">
   </script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js">
   </script>

   <!-- Favicons -->
   <link rel="apple-touch-icon" href="https://getbootstrap.com/docs/5.2/assets/img/favicons/apple-touch-icon.png"
      sizes="180x180">
   <link rel="icon" href="https://getbootstrap.com/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32"
      type="image/png">
   <link rel="icon" href="https://getbootstrap.com/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16"
      type="image/png">
   <link rel="manifest" href="https://getbootstrap.com/docs/5.2/assets/img/favicons/manifest.json">
   <link rel="mask-icon" href="https://getbootstrap.com/docs/5.2/assets/img/favicons/safari-pinned-tab.svg"
      color="#712cf9">
   <link rel="icon" href="https://getbootstrap.com/docs/5.2/assets/img/favicons/favicon.ico">
   <meta name="theme-color" content="#712cf9">


   <style>
   .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
   }

   @media (min-width: 768px) {
      .bd-placeholder-img-lg {
         font-size: 3.5rem;
      }
   }

   .b-example-divider {
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
   }

   .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
   }

   .bi {
      vertical-align: -.125em;
      fill: currentColor;
   }

   .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
   }

   .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
   }
   </style>


   <!-- Custom styles for this template -->
   <link href="<?php echo base_url(); ?>assets/css/pricing.css" rel="stylesheet">
   <style type="text/css">
   @font-face {
      font-family: Roboto;
      src: url("chrome-extension://mcgbeeipkmelnpldkobichboakdfaeon/css/Roboto-Regular.ttf");
   }
   </style>

   <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
      <symbol id="check" viewBox="0 0 16 16">
         <title>Check</title>
         <path
            d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z">
         </path>
      </symbol>
   </svg>

   <nav class="navbar navbar-expand-lg fixed-top d-flex flex-column flex-md-row align-items-center border-bottom"
      style="background-color: #fff;">
      <div class="container">
         <a href="<?= base_url() ?>hosting" class="d-flex align-items-center text-dark text-decoration-none">
            <svg viewBox="0 0 369.7695137611494 108.35360879616533" preserveAspectRatio="xMidYMid meet" width="150"
               class="css-g5ufxp" id="cgddhbef">
               <defs id="SvgjsDefs1155"></defs>
               <g id="SvgjsG1156" featurekey="hmhgWD-0"
                  transform="matrix(27.818129711102674,0,0,27.818129711102674,-22.920142568431384,-7.34980336269177)"
                  fill="#444f5a">
                  <g xmlns="http://www.w3.org/2000/svg">
                     <path
                        d="M3.814,2.209c-0.077,0.05-0.167,0.096-0.266,0.136C3.45,2.384,3.341,2.417,3.228,2.444S2.994,2.489,2.872,2.5   C2.811,2.506,2.749,2.51,2.687,2.512C2.655,2.513,2.625,2.513,2.594,2.514l-0.096,0C2.376,2.509,2.25,2.499,2.13,2.481   C2.01,2.464,1.892,2.44,1.782,2.408c-0.111-0.032-0.215-0.07-0.309-0.113S1.294,2.204,1.224,2.153   c-0.07-0.052-0.126-0.105-0.167-0.156C1.017,1.946,0.993,1.898,0.979,1.859c-0.003-0.01-0.006-0.02-0.009-0.028   C0.968,1.823,0.967,1.815,0.965,1.809c0.057-0.131,0.132-0.256,0.224-0.371c0,0,0,0,0,0C1.203,1.497,1.236,1.58,1.302,1.655   C1.366,1.73,1.457,1.798,1.566,1.853c0.108,0.056,0.235,0.098,0.375,0.125c0.07,0.015,0.143,0.025,0.218,0.032   c0.076,0.006,0.154,0.009,0.233,0.008c0.04,0,0.08-0.002,0.122-0.004c0.02-0.001,0.039-0.002,0.06-0.004s0.042-0.004,0.063-0.006   C2.72,1.994,2.804,1.979,2.889,1.961C2.973,1.943,3.058,1.92,3.142,1.89C3.183,1.875,3.225,1.858,3.266,1.84   c0.041-0.019,0.082-0.039,0.122-0.062c0.079-0.045,0.156-0.099,0.219-0.17c0.031-0.036,0.059-0.075,0.08-0.12   s0.032-0.094,0.032-0.144c0-0.005,0-0.01,0-0.014C3.887,1.51,4.009,1.717,4.085,1.937c-0.02,0.036-0.046,0.075-0.081,0.113   C3.956,2.104,3.892,2.159,3.814,2.209z">
                     </path>
                     <path
                        d="M3.937,2.97C3.85,3.019,3.75,3.064,3.641,3.102C3.531,3.14,3.413,3.171,3.289,3.196S3.035,3.239,2.903,3.25   C2.836,3.255,2.77,3.259,2.702,3.261c-0.034,0.001-0.066,0.001-0.1,0.001L2.499,3.261C2.366,3.258,2.23,3.248,2.099,3.231   C1.968,3.214,1.84,3.19,1.719,3.16c-0.122-0.03-0.236-0.066-0.341-0.109c-0.104-0.042-0.199-0.09-0.279-0.14   c-0.041-0.025-0.077-0.052-0.11-0.078C0.957,2.806,0.928,2.78,0.904,2.753c-0.03-0.032-0.053-0.063-0.07-0.092   C0.815,2.492,0.823,2.319,0.857,2.15c0.002,0.003,0.005,0.006,0.008,0.009C0.925,2.228,1,2.292,1.088,2.35s0.188,0.108,0.296,0.152   C1.492,2.545,1.608,2.581,1.73,2.609c0.122,0.028,0.249,0.048,0.378,0.06s0.26,0.017,0.393,0.014L2.597,2.68   C2.63,2.677,2.664,2.676,2.696,2.673C2.761,2.667,2.826,2.661,2.89,2.651C3.018,2.632,3.142,2.607,3.26,2.574   C3.379,2.54,3.491,2.5,3.594,2.453c0.103-0.048,0.197-0.101,0.278-0.159c0.081-0.059,0.148-0.123,0.2-0.187   c0.017-0.021,0.032-0.042,0.045-0.062c0.069,0.255,0.077,0.522,0.023,0.78C4.116,2.848,4.087,2.871,4.057,2.894   C4.02,2.919,3.98,2.946,3.937,2.97z">
                     </path>
                     <path
                        d="M3.652,1.345c0,0.08-0.04,0.157-0.098,0.217c-0.028,0.03-0.061,0.057-0.095,0.082C3.424,1.667,3.387,1.688,3.35,1.708   c-0.153,0.075-0.32,0.112-0.481,0.13c-0.081,0.01-0.161,0.013-0.24,0.012c-0.019,0-0.038,0-0.057-0.001   c-0.019,0-0.04-0.001-0.059-0.002C2.476,1.845,2.437,1.842,2.4,1.838C2.327,1.831,2.256,1.819,2.188,1.806   C2.121,1.792,2.056,1.776,1.996,1.758C1.875,1.721,1.77,1.676,1.687,1.628C1.604,1.58,1.542,1.528,1.507,1.483   C1.471,1.438,1.458,1.403,1.454,1.38c-0.001-0.005,0-0.007-0.001-0.01L1.451,1.369c0,0,0-0.003,0-0.005c0-0.003,0-0.006,0-0.009   c0-0.004,0-0.008,0-0.011c0-0.001,0-0.003,0-0.008c0-0.006,0.001-0.014,0.003-0.025c0.005-0.023,0.017-0.058,0.053-0.103   c0.036-0.045,0.097-0.097,0.18-0.145c0.044-0.026,0.096-0.051,0.152-0.074C1.835,1.001,1.833,1.013,1.831,1.023   C1.827,1.057,1.827,1.076,1.827,1.076l0,0.011c0,0,0.001,0.011,0.002,0.031c0.002,0.015,0.008,0.044,0.017,0.069   c0.009,0.021,0.02,0.047,0.036,0.07c0.031,0.048,0.078,0.094,0.134,0.13S2.14,1.45,2.213,1.466s0.151,0.022,0.233,0.018   c0.01,0,0.021-0.001,0.03-0.002L2.491,1.48l0.008,0c-0.002,0,0.004,0,0.003,0h0.001l0.002-0.001h0.003   c0.02-0.003,0.037-0.005,0.058-0.009c0.044-0.008,0.085-0.019,0.126-0.032c0.083-0.026,0.166-0.063,0.239-0.12   c0.01-0.006,0.018-0.015,0.026-0.022l0.013-0.012l0.012-0.013c0.017-0.016,0.032-0.036,0.045-0.056   c0.026-0.041,0.044-0.09,0.044-0.141L3.07,1.041c-0.002-0.013-0.006-0.026-0.009-0.04C3.057,0.989,3.052,0.978,3.047,0.966   C3.042,0.956,3.035,0.945,3.029,0.935c-0.014-0.02-0.028-0.04-0.045-0.056L2.982,0.877c0.235,0.071,0.458,0.194,0.65,0.37   C3.645,1.279,3.652,1.312,3.652,1.345z">
                     </path>
                     <path
                        d="M2.141,3.976c0.119,0.008,0.238,0.011,0.36,0.008L2.589,3.98c0.03-0.002,0.061-0.003,0.09-0.006   c0.06-0.004,0.119-0.01,0.177-0.018c0.117-0.015,0.232-0.035,0.341-0.061C3.307,3.872,3.412,3.84,3.509,3.804   C3.524,3.798,3.54,3.792,3.555,3.786C2.987,4.247,2.188,4.281,1.586,3.888c0.067,0.018,0.137,0.033,0.208,0.046   C1.907,3.954,2.023,3.968,2.141,3.976z">
                     </path>
                     <path
                        d="M2.1,1.096C2.1,1.096,2.1,1.097,2.1,1.096l0-0.001c0-0.009-0.001-0.016-0.001-0.021c0-0.001,0-0.003,0-0.008   C2.099,1.063,2.1,1.06,2.101,1.055c0.003-0.005,0.003-0.011,0.008-0.02C2.118,1.02,2.135,0.998,2.164,0.974   c0.028-0.023,0.069-0.049,0.118-0.071c0.013-0.005,0.026-0.01,0.039-0.016c0.013-0.005,0.027-0.01,0.042-0.015   c0.014-0.004,0.03-0.009,0.045-0.013c0.015-0.003,0.028-0.007,0.045-0.011c0.004,0,0.009-0.001,0.013-0.002   c0.075-0.005,0.152-0.008,0.231-0.006c0.027,0.004,0.053,0.01,0.08,0.017c0.01,0.003,0.018,0.006,0.027,0.009   c0.009,0.003,0.018,0.006,0.027,0.01l0.026,0.012l0.025,0.014c0.065,0.038,0.12,0.101,0.119,0.172c0,0.035-0.013,0.069-0.035,0.098   c-0.022,0.03-0.052,0.054-0.084,0.074L2.858,1.262L2.832,1.273c-0.009,0.004-0.018,0.007-0.027,0.01S2.788,1.291,2.778,1.292   c-0.037,0.01-0.074,0.018-0.111,0.02C2.63,1.317,2.593,1.316,2.56,1.314C2.543,1.313,2.522,1.311,2.504,1.31   C2.488,1.307,2.472,1.304,2.456,1.302C2.39,1.29,2.331,1.27,2.282,1.248s-0.09-0.047-0.118-0.071   C2.135,1.153,2.118,1.131,2.109,1.115C2.104,1.108,2.104,1.102,2.1,1.096L2.1,1.096L2.1,1.096C2.102,1.096,2.101,1.095,2.1,1.096   L2.1,1.096L2.1,1.096z">
                     </path>
                     <path
                        d="M3.473,3.698C3.379,3.727,3.278,3.751,3.172,3.77s-0.217,0.032-0.33,0.04c-0.056,0.004-0.113,0.006-0.17,0.007   c-0.029,0.001-0.057,0-0.085,0.001L2.499,3.816c-0.113-0.003-0.229-0.012-0.34-0.026c-0.111-0.014-0.22-0.034-0.324-0.058   c-0.103-0.024-0.201-0.054-0.29-0.087c-0.09-0.034-0.171-0.071-0.24-0.112C1.236,3.494,1.178,3.451,1.136,3.41   C1.094,3.368,1.067,3.329,1.053,3.298c-0.015-0.03-0.019-0.058-0.02-0.064c0,0,0-0.01-0.001-0.014c0-0.005,0-0.009,0-0.013   c0-0.007-0.001-0.01-0.001-0.01c0-0.021-0.006-0.041-0.015-0.059C1.103,3.184,1.198,3.226,1.299,3.26   c0.117,0.041,0.243,0.075,0.374,0.102S1.94,3.407,2.08,3.418C2.218,3.43,2.358,3.434,2.501,3.431l0.104-0.004   C2.64,3.425,2.676,3.423,2.71,3.42C2.78,3.416,2.85,3.409,2.918,3.399c0.137-0.018,0.271-0.042,0.4-0.074   c0.128-0.032,0.25-0.071,0.363-0.116c0.113-0.044,0.216-0.097,0.307-0.154c0.041-0.025,0.079-0.052,0.114-0.079   c-0.066,0.214-0.176,0.417-0.33,0.596C3.759,3.581,3.744,3.589,3.729,3.597C3.653,3.635,3.566,3.669,3.473,3.698z">
                     </path>
                  </g>
               </g>
               <g id="SvgjsG1157" featurekey="1RRcwp-0"
                  transform="matrix(4.06538253492857,0,0,4.06538253492857,110.23554057411773,8.37216809336175)"
                  fill="#444f5a">
                  <path
                     d="M8.12 20.22 c-4.1 0 -7.44 -3.34 -7.44 -7.46 c0 -4.1 3.34 -7.44 7.44 -7.44 c1 0 1.98 0.2 2.88 0.58 s1.72 0.92 2.4 1.62 l0.38 0.38 l-1.98 1.74 l-0.34 -0.32 c-0.86 -0.88 -2.04 -1.34 -3.34 -1.34 c-2.64 0 -4.78 2.14 -4.78 4.78 c0 2.66 2.14 4.82 4.78 4.82 c1.34 0 2.56 -0.54 3.5 -1.5 l0 -2.96 l-3.9 0 l0 -2.66 l6.52 0 l0 6.56 l-0.1 0.12 c-1.44 1.94 -3.68 3.08 -6.02 3.08 z M20.9 20.22 c-1.24 0 -2.46 -0.5 -3.4 -1.4 c-0.9 -0.94 -1.4 -2.16 -1.4 -3.4 c0 -1.26 0.5 -2.48 1.4 -3.4 c0.92 -0.88 2.12 -1.38 3.4 -1.38 c1.32 0 2.52 0.5 3.38 1.38 c0.92 0.92 1.42 2.12 1.42 3.4 s-0.5 2.48 -1.42 3.4 c-0.9 0.9 -2.1 1.4 -3.38 1.4 z M20.9 12.92 c-1.34 0 -2.44 1.12 -2.44 2.5 s1.1 2.5 2.44 2.5 c1.36 0 2.46 -1.12 2.46 -2.5 s-1.1 -2.5 -2.46 -2.5 z M37.839999999999996 20 l-9.94 0 l0 -14.24 l2.68 0 l0 11.62 l7.26 0 l0 2.62 z M42.519999999999996 20 l-2.6 0 l0 -9.16 l2.6 0 l0 9.16 z M41.22 9.74 c-0.86 0 -1.56 -0.7 -1.56 -1.54 c0 -0.42 0.16 -0.8 0.46 -1.08 c0.3 -0.3 0.68 -0.46 1.1 -0.46 c0.84 0 1.54 0.7 1.54 1.54 s-0.7 1.54 -1.54 1.54 z M50.46 20 l-2.2 0 l-3.72 -9.16 l2.58 0 l2.24 5.48 l2.22 -5.48 l2.6 0 z M59.38 20.22 l-0.02 0 c-0.58 0 -1.18 -0.14 -1.74 -0.4 c-0.52 -0.22 -1 -0.58 -1.44 -1.04 c-0.7 -0.76 -1.12 -1.76 -1.22 -2.8 c-0.02 -0.18 -0.04 -0.36 -0.04 -0.56 c0 -0.4 0.06 -0.82 0.16 -1.24 c0.18 -0.8 0.56 -1.54 1.1 -2.1 c0.4 -0.44 0.86 -0.78 1.44 -1.06 c0.54 -0.26 1.14 -0.38 1.76 -0.38 c0.64 0 1.22 0.12 1.76 0.38 c0.6 0.28 1.08 0.64 1.44 1.06 c0.52 0.56 0.92 1.28 1.12 2.1 c0.1 0.38 0.14 0.78 0.14 1.24 l0 0.46 l-6.72 0 l0.02 0.14 c0.26 1.24 1.2 2.14 2.24 2.14 l0.02 0 c0.58 -0.04 1.22 -0.4 1.6 -0.72 l0.22 -0.18 l1.66 1.44 l-0.3 0.26 c-0.22 0.2 -0.5 0.44 -0.8 0.6 l-0.02 0 c-0.72 0.42 -1.5 0.64 -2.38 0.66 z M59.38 12.719999999999999 c-0.78 0 -1.56 0.54 -1.98 1.38 l-0.08 0.16 l4.14 0 l-0.08 -0.16 c-0.46 -0.86 -1.22 -1.38 -2 -1.38 z">
                  </path>
               </g>
            </svg>
         </a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
               <a class="me-3 py-2 text-dark text-decoration-none"
                  href="https://getbootstrap.com/docs/5.2/examples/pricing/#">Features</a>
               <a class="me-3 py-2 text-dark text-decoration-none"
                  href="https://getbootstrap.com/docs/5.2/examples/pricing/#">Enterprise</a>
               <a class="me-3 py-2 text-dark text-decoration-none"
                  href="https://getbootstrap.com/docs/5.2/examples/pricing/#">Support</a>
               <a class="py-2 text-dark text-decoration-none"
                  href="https://getbootstrap.com/docs/5.2/examples/pricing/#">Pricing</a>
            </ul>
         </div>
      </div>
   </nav>