@echo off
cd /d "%~dp0"
echo Starting DPS Eldeco dev server on http://localhost:8000
php -S localhost:8000 router.php
