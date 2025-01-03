@echo off

echo POST Mahasiswa
curl -X POST http://localhost:3000/mahasiswa ^
     -H "Content-Type: application/json" ^
     -d "{\"nama\": \"John Doe\", \"nim\": \"123456\", \"jurusan\": \"Informatika\"}"
echo.

echo POST Mata Kuliah
curl -X POST http://localhost:3000/mata-kuliah ^
     -H "Content-Type: application/json" ^
     -d "{\"nama_mk\": \"Algoritma\", \"kode_mk\": \"ALGO123\", \"sks\": 3}"
echo.

pause