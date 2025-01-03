@echo off

echo GET Mahasiswa
curl -X GET http://localhost:3000/mahasiswa
echo.

echo GET Mata Kuliah
curl -X GET http://localhost:3000/mata-kuliah
echo.

pause