@echo off

echo PUT Mahasiswa
curl -X PUT http://localhost:3000/mahasiswa/8 ^
     -H "Content-Type: application/json" ^
     -d "{\"nama\": \"Jane Doe\", \"nim\": \"654321\", \"jurusan\": \"Sistem Informasi\"}"
echo.

echo PUT Mata Kuliah
curl -X PUT http://localhost:3000/mata-kuliah/8 ^
     -H "Content-Type: application/json" ^
     -d "{\"nama_mk\": \"Algoritma Lanjut\", \"kode_mk\": \"ALGO456\", \"sks\": 4}"
echo.

pause