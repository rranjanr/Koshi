<?php
echo '<!DOCTYPE html>';
echo '<html lang="en">';
echo '<head>';
echo '<meta charset="UTF-8">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '<title>Koshi Pardesh</title>';
echo '<style>';
echo 'body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f4f4; color: #2c3e50; }';
echo 'header { background-color: #2c3e50; color: white; padding: 10px 20px; text-align: center; }';
echo 'nav { background-color: #34495e; padding: 10px; text-align: center; }';
echo 'nav a { color: white; text-decoration: none; margin: 0 15px; font-weight: bold; }';
echo 'nav a:hover { text-decoration: underline; }';
echo 'main { text-align: center; padding: 20px; }';
echo 'footer { background-color: #2c3e50; color: white; text-align: center; padding: 10px 0; position: fixed; bottom: 0; width: 100%; }';
echo '</style>';
echo '</head>';
echo '<body>';

echo '<header>';
echo '<h1>Welcome to Koshi Pardesh!</h1>';
echo '</header>';

echo '<nav>';
echo '<a href="#home">Home</a>';
echo '<a href="#about">About</a>';
echo '<a href="#contact">Contact</a>';
echo '</nav>';

echo '<main>';
echo '<h2>Explore the Beauty of Koshi Biratnagar</h2>';
echo '<img src="koshi.jpg" style="width: 80%; max-width: 1024px; border: 2px solid #2c3e50; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">';
echo '<p style="margin-top: 20px;">Koshi Pardesh is known for its rich culture, beautiful landscapes, and warm hospitality. Come and explore the wonders of this region!</p>';
echo '</main>';

echo '<footer>';
echo '<p>&copy; ' . date('Y') . ' Koshi Pardesh. All rights reserved.</p>';
echo '</footer>';

echo '</body>';
echo '</html>';
?>