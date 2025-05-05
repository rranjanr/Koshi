<?php
// Define some dynamic content
$provinceInfo = [
  'name' => 'Koshi Pradesh',
  'capital' => 'Biratnagar',
  'population' => '4,534,943',
  'area' => '25,905 km²',
  'districts' => ['Taplejung', 'Panchthar', 'Ilam', 'Jhapa', 'Morang', 'Sunsari', 'Dhankuta', 'Terhathum', 'Sankhuwasabha', 'Bhojpur', 'Solukhumbu', 'Okhaldhunga', 'Khotang', 'Udayapur']
];

$touristAttractions = [
  ['name' => 'Mount Kanchenjunga', 'description' => 'Third highest mountain in the world'],
  ['name' => 'Pathibhara Temple', 'description' => 'Sacred pilgrimage site'],
  ['name' => 'Makalu Barun National Park', 'description' => 'Home to diverse flora and fauna'],
  ['name' => 'Dharan', 'description' => 'City known for its vibrant markets'],
  ['name' => 'Koshi Tappu Wildlife Reserve', 'description' => 'Famous bird watching destination']
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $provinceInfo['name']; ?> - Nepal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .hero-section {
      background-color: #f8f9fa;
      padding: 2rem 0;
      margin-bottom: 2rem;
    }

    .attraction-card {
      margin-bottom: 1rem;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="hero-section text-center">
      <h1 class="display-4">Welcome to <?php echo $provinceInfo['name']; ?></h1>
      <p class="lead">Capital: <?php echo $provinceInfo['capital']; ?> | Population:
        <?php echo $provinceInfo['population']; ?></p>
    </div>

    <div class="row mb-4">
      <div class="col-md-8">
        <h2>About the Province</h2>
        <p>Koshi Pradesh, also known as Province No. 1, is one of the seven provinces of Nepal. Located in the eastern
          part of the country, it's named after the Koshi River and known for its diverse geography, rich culture, and
          natural beauty.</p>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Quick Facts</h5>
            <p class="card-text">Area: <?php echo $provinceInfo['area']; ?></p>
            <p class="card-text">Number of Districts: <?php echo count($provinceInfo['districts']); ?></p>
          </div>
        </div>
      </div>
    </div>

    <h2>Districts</h2>
    <div class="row mb-4">
      <div class="col">
        <ul class="list-group">
          <?php foreach ($provinceInfo['districts'] as $district): ?>
            <li class="list-group-item"><?php echo $district; ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>

    <h2>Tourist Attractions</h2>
    <div class="row">
      <?php foreach ($touristAttractions as $attraction): ?>
        <div class="col-md-4">
          <div class="card attraction-card">
            <div class="card-body">
              <h5 class="card-title"><?php echo $attraction['name']; ?></h5>
              <p class="card-text"><?php echo $attraction['description']; ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>