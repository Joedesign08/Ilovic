const express = require('express');
const path = require('path');
const app = express();

// Load the JSON file dynamically using require
const partsInventory = require('./data/parts.json');

app.use(express.json());

// API route to search parts (from Option C)
app.get('/api/parts/search', (req, res) => {
  const { make, year, category } = req.query;
  let filteredParts = partsInventory;

  if (category) {
    filteredParts = filteredParts.filter(part => part.category === category);
  }

  // Filter based on compatibility arrays
  if (make || year) {
    filteredParts = filteredParts.filter(part => {
      return part.compatibility.some(vehicle => {
        const matchesMake = !make || vehicle.make.toLowerCase() === make.toLowerCase();
        
        let matchesYear = true;
        if (year) {
          const targetYear = parseInt(year);
          const [startYear, endYear] = vehicle.years.split('-').map(Number);
          const maxYear = endYear || new Date().getFullYear();
          matchesYear = targetYear >= startYear && targetYear <= maxYear;
        }

        return matchesMake && matchesYear;
      });
    });
  }

  res.json({
    success: true,
    count: filteredParts.length,
    data: filteredParts
  });
});

const PORT = process.env.PORT || 5000;
app.listen(PORT, () => console.log(`Server running on port ${PORT}`));