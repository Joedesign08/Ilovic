<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Search Results Display Area (Hidden by default) -->
<section id="searchResultsSection" class="py-5 bg-dark text-white d-none border-bottom border-secondary border-opacity-25">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <div>
        <span class="text-warning fw-bold text-uppercase small tracking-wider">Search Results</span>
        <h2 class="fw-bold m-0" id="resultsCount">Found Parts</h2>
      </div>
      <button onclick="closeSearchResults()" class="btn btn-outline-light btn-sm rounded-3">
        <i class="bi bi-x-lg me-1"></i> Clear Search
      </button>
    </div>
    
    <!-- Dynamic Cards Grid -->
    <div class="row g-4" id="searchResultsGrid">
      <!-- Dynamic search result cards will be injected here -->
    </div>
  </div>
</section>
</body>
</html>