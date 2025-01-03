@echo off

echo DELETE Mahasiswa
curl -X DELETE http://localhost:3000/mahasiswa/8
echo.


echo DELETE Mata Kuliah
curl -X DELETE http://localhost:3000/mata-kuliah/8
echo.

pause